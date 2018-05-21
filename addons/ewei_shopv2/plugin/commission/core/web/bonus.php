<?php
if (!defined('IN_IA')) {
	exit('Access Denied');
}

class Bonus_EweiShopV2Page extends PluginWebPage
{
	public function main()
	{
		global $_W;
		global $_GPC;
		$status = intval($_GPC['status']);

		// $taskarr = $this -> gettask(2);
		// echo $taskarr['task'] .'-'. $taskarr['bonus'];
		empty($status) && ($status = 1);

		if ($status == -1) {
			if (!cv('commission.bonus.view_1')) {
				$this->message('你没有相应的权限查看');
			}
		}
		else {
			if (!cv('commission.bonus.view' . $status)) {
				$this->message('你没有相应的权限查看');
			}
		}

		$bonus_type = array('余额', '微信钱包', '支付宝', '银行卡');
		$agentlevels = $this->model->getLevels();
		$level = $this->set['level'];
		$pindex = max(1, intval($_GPC['page']));
		$psize = 20;
		$condition = ' and a.uniacid=:uniacid and a.status=:status';
		$params = array(':uniacid' => $_W['uniacid'], ':status' => $status);
		$searchfield = strtolower(trim($_GPC['searchfield']));
		$keyword = trim($_GPC['keyword']);
		if (!empty($searchfield) && !empty($keyword)) {
			if ($searchfield == 'bonusno') {
				$condition .= ' and a.bonusno like :keyword';
			}
			else {
				if ($searchfield == 'member') {
					$condition .= ' and (m.realname like :keyword or m.nickname like :keyword or m.mobile like :keyword)';
				}
			}

			$params[':keyword'] = '%' . $keyword . '%';
		}

		if (empty($starttime) || empty($endtime)) {
			$starttime = strtotime('-1 month');
			$endtime = time();
		}

		$timetype = $_GPC['timetype'];

		if (!empty($_GPC['timetype'])) {
			$starttime = strtotime($_GPC['time']['start']);
			$endtime = strtotime($_GPC['time']['end']);

			if (!empty($timetype)) {
				$condition .= ' AND a.' . $timetype . ' >= :starttime AND a.' . $timetype . '  <= :endtime ';
				$params[':starttime'] = $starttime;
				$params[':endtime'] = $endtime;
			}
		}

		if (!empty($_GPC['agentlevel'])) {
			$condition .= ' and m.agentlevel=' . intval($_GPC['agentlevel']);
		}

		if (3 <= $status) {
			$orderby = 'paytime';
		}
		else if (2 <= $status) {
			$orderby = ' checktime';
		}
		else {
			$orderby = 'applytime';
		}

		$applytitle = '';

		if ($status == 1) {
			$applytitle = '待审核';
		}
		else if ($status == 2) {
			$applytitle = '待打款';
		}
		else if ($status == 3) {
			$applytitle = '已打款';
		}
		else {
			if ($status == -1) {
				$applytitle = '已无效';
			}
		}

		$sql = 'select a.*, m.nickname,m.avatar,m.realname,m.mobile,m.agentlevel,l.levelname,l.levelname,a.realname as bonusrealname,a.sendmoney from ' . tablename('ewei_shop_commission_applyb') . ' a ' . ' left join ' . tablename('ewei_shop_member') . ' m on m.id = a.mid' . ' left join ' . tablename('ewei_shop_commission_level') . ' l on l.id = m.agentlevel' . ' where 1 ' . $condition . ' ORDER BY ' . $orderby . ' desc ';

		if (empty($_GPC['export'])) {
			$sql .= '  limit ' . (($pindex - 1) * $psize) . ',' . $psize;
		}

		$list = pdo_fetchall($sql, $params);

		if ($status == 3) {
			$realmoney_total = (double) pdo_fetchcolumn('select sum(a.realmoney) from ' . tablename('ewei_shop_commission_applyb') . ' a ' . ' left join ' . tablename('ewei_shop_member') . ' m on m.id = a.mid' . ' left join ' . tablename('ewei_shop_commission_level') . ' l on l.id = m.agentlevel' . ' where 1 ' . $condition, $params);
		}

		foreach ($list as &$row) {
			$row['agentlevel'] = intval($row['agentlevel']);
			$row['levelname'] = empty($row['levelname']) ? (empty($this->set['levelname']) ? '普通等级' : $this->set['levelname']) : $row['levelname'];
			$row['typestr'] = $bonus_type[$row['type']];
		}

		unset($row);

		if ($_GPC['export'] == '1') {
			ca('commission.bonus.export');

			if ($status == 1) {
				$statustext = '待审核';
			}
			else if ($status == 2) {
				$statustext = '待打款';
			}
			else if ($status == 3) {
				$statustext = '已打款';
			}
			else {
				if ($status == -1) {
					$statustext = '已无效';
				}
			}

			plog('commission.bonus.export', $statustext . '提现申请 导出数据');

			foreach ($list as &$row) {
				$row['bonustime'] = (1 <= $status) || ($status == -1) ? date('Y-m-d H:i', $row['bonustime']) : '--';
				$row['checktime'] = 2 <= $status ? date('Y-m-d H:i', $row['checktime']) : '--';
				$row['paytime'] = 3 <= $status ? date('Y-m-d H:i', $row['paytime']) : '--';
				$row['invalidtime'] = $status == -1 ? date('Y-m-d H:i', $row['invalidtime']) : '--';
			}

			unset($row);
			$totalcommission = 0;
			$totalpay = 0;
			$rowcount = 0;
			$ordercount = 0;
			$goodscount = 0;
			$lastgoodscount = 0;

			foreach ($list as &$row) {
				$orderids = iunserializer($row['orderids']);
				if (!is_array($orderids) || (count($orderids) <= 0)) {
					continue;
				}

				$ids = array();

				foreach ($orderids as $o) {
					$ids[] = $o['orderid'];
				}

				$orders = pdo_fetchall('select id,agentid, ordersn,price,goodsprice,dispatchprice,createtime, paytype from ' . tablename('ewei_shop_order') . ' where  id in ( ' . implode(',', $ids) . ' );');
				$totalcommission = 0;
				$totalpay = 0;
				$passmoney = 0;
				$ordergoodscount = 0;

				foreach ($orders as &$order) {
					foreach ($orderids as $o) {
						if ($o['orderid'] == $order['id']) {
							$order['level'] = $o['level'];
							break;
						}
					}

					$order['levelstr'] = '一级';

					if ($order['level'] == 2) {
						$order['levelstr'] = '二级';
					}
					else {
						if ($order['level'] == 3) {
							$order['levelstr'] = '三级';
						}
					}

					$goods = pdo_fetchall('SELECT og.id,g.thumb,og.price,og.realprice, og.total,g.title,o.paytype,og.optionname,og.commission1,og.commission2,og.commission3,og.commissions,og.status1,og.status2,og.status3,og.content1,og.content2,og.content3 from ' . tablename('ewei_shop_order_goods') . ' og' . ' left join ' . tablename('ewei_shop_goods') . ' g on g.id=og.goodsid  ' . ' left join ' . tablename('ewei_shop_order') . ' o on o.id=og.orderid  ' . ' where og.uniacid = :uniacid and og.orderid=:orderid and og.nocommission=0 order by og.createtime  desc ', array(':uniacid' => $_W['uniacid'], ':orderid' => $order['id']));

					foreach ($goods as $gindex => &$g) {
						$commissions = iunserializer($g['commissions']);

						if (1 <= $this->set['level']) {
							$commission = iunserializer($g['commission1']);

							if (empty($commissions)) {
								$g['commission1'] = isset($commission['level' . $row['agentlevel']]) ? $commission['level' . $row['agentlevel']] : $commission['default'];
							}
							else {
								$g['commission1'] = isset($commissions['level1']) ? floatval($commissions['level1']) : 0;
							}

							if ($order['level'] == 1) {
								$totalcommission += $g['commission1'];

								if ($g['status1'] == 3) {
									$totalpay += $g['commission1'];
									$g['cstatus'] = '已打款';
								}
								else if ($g['status1'] == 2) {
									$passmoney += $g['commission1'];
									$g['cstatus'] = '待打款';
								}
								else if ($g['status1'] == 0) {
									$g['cstatus'] = '未审核';
								}
								else {
									if ($g['status1'] == -1) {
										$g['cstatus'] = '未通过';
									}
								}

								$g['ccontent'] = $g['content1'];
								$g['ccommission'] = $g['commission1'];
							}
						}

						if (2 <= $this->set['level']) {
							$commission = iunserializer($g['commission2']);

							if (empty($commissions)) {
								$g['commission2'] = isset($commission['level' . $row['agentlevel']]) ? $commission['level' . $row['agentlevel']] : $commission['default'];
							}
							else {
								$g['commission2'] = isset($commissions['level2']) ? floatval($commissions['level2']) : 0;
							}

							if ($order['level'] == 2) {
								$totalcommission += $g['commission2'];

								if ($g['status2'] == 3) {
									$totalpay += $g['commission2'];
									$g['cstatus'] = '已打款';
								}
								else if ($g['status2'] == 2) {
									$passmoney += $g['commission2'];
									$g['cstatus'] = '待打款';
								}
								else if ($g['status2'] == 0) {
									$g['cstatus'] = '未审核';
								}
								else {
									if ($g['status2'] == -1) {
										$g['cstatus'] = '未通过';
									}
								}

								$g['ccontent'] = $g['content2'];
								$g['ccommission'] = $g['commission2'];
							}
						}

						if (3 <= $this->set['level']) {
							$commission = iunserializer($g['commission3']);

							if (empty($commissions)) {
								$g['commission3'] = isset($commission['level' . $row['agentlevel']]) ? $commission['level' . $row['agentlevel']] : $commission['default'];
							}
							else {
								$g['commission3'] = isset($commissions['level3']) ? floatval($commissions['level3']) : 0;
							}

							if ($order['level'] == 3) {
								$totalcommission += $g['commission3'];

								if ($g['status3'] == 3) {
									$totalpay += $g['commission3'];
									$g['cstatus'] = '已打款';
								}
								else if ($g['status3'] == 2) {
									$passmoney += $g['commission3'];
									$g['cstatus'] = '待打款';
								}
								else if ($g['status3'] == 0) {
									$g['cstatus'] = '未审核';
								}
								else {
									if ($g['status3'] == -1) {
										$g['cstatus'] = '未通过';
									}
								}

								$g['ccontent'] = $g['content3'];
								$g['ccommission'] = $g['commission3'];
							}
						}

						$g['level'] = $row['level'];
					}

					unset($g);
					$order['goods'] = $goods;
					$order['goodscount'] = count($goods);
					$ordergoodscount += $order['goodscount'];
					$goodscount += $order['goodscount'];
					$rowcount += $order['goodscount'];
				}

				unset($order);
				$row['orders'] = $orders;
				if (($status == 2) || ($status == 3)) {
					$charge_flag = 0;
					$set_array = array();
					$set_array['charge'] = $row['charge'];
					$set_array['begin'] = $row['beginmoney'];
					$set_array['end'] = $row['endmoney'];

					if ($status == 3) {
						$passmoney = $totalpay;
					}

					if (!empty($set_array['charge'])) {
						$money_array = m('member')->getCalculateMoney($passmoney, $set_array);

						if ($money_array['flag']) {
							$charge_flag = 1;
							$realmoney = $money_array['realmoney'];
							$deductionmoney = $money_array['deductionmoney'];
						}
					}

					$row['passmoney'] = $passmoney;

					if ($charge_flag) {
						$row['realmoney'] = $realmoney;
					}
					else {
						$row['realmoney'] = $passmoney;
					}
				}

				$row['goodscount'] = $ordergoodscount;
				$lastgoodscount += $ordergoodscount;
				$row['lastgoodscount'] = $lastgoodscount;
				$row['bankcard'] = '	' . $row['bankcard'] . '	';
			}

			unset($row);
			$exportlist = array();
			$i = 0;

			while ($i < $rowcount) {
				$exportlist['row' . $i] = array();
				++$i;
			}

			$rowindex = 0;
			$len = count($list);

			foreach ($list as $index => $row) {
				$exportlist['row' . $rowindex] = $row;
				$orderindex = $rowindex;

				foreach ($row['orders'] as $order) {
					$exportlist['row' . $orderindex]['ordersn'] = $order['ordersn'];
					$exportlist['row' . $orderindex]['price'] = $order['price'];
					$exportlist['row' . $orderindex]['level'] = $order['levelstr'];
					$goodsindex = $orderindex;

					foreach ($order['goods'] as $g) {
						$exportlist['row' . $goodsindex]['title'] = $g['title'];
						$exportlist['row' . $goodsindex]['total'] = $g['total'];
						$exportlist['row' . $goodsindex]['realprice'] = $g['realprice'];
						$exportlist['row' . $goodsindex]['cstatus'] = $g['cstatus'];
						$exportlist['row' . $goodsindex]['ccommission'] = $g['ccommission'];
						++$goodsindex;
					}

					$orderindex += $order['goodscount'];
				}

				$nextindex = 0;
				$i = 0;

				while ($i <= $index) {
					$nextindex += $list[$i]['goodscount'];
					++$i;
				}

				$rowindex = $nextindex;
			}

			$columns = array();
			$columns[] = array('title' => 'ID', 'field' => 'id', 'width' => 12);
			$columns[] = array('title' => '提现单号', 'field' => 'bonusno', 'width' => 24);
			$columns[] = array('title' => '粉丝', 'field' => 'nickname', 'width' => 12);
			$columns[] = array('title' => '姓名', 'field' => 'realname', 'width' => 12);
			$columns[] = array('title' => '手机号码', 'field' => 'mobile', 'width' => 12);
			$columns[] = array('title' => '订单号', 'field' => 'ordersn', 'width' => 24);
			$columns[] = array('title' => '订单金额', 'field' => 'price', 'width' => 12);
			$columns[] = array('title' => '订单级别', 'field' => 'level', 'width' => 12);
			$columns[] = array('title' => '商品', 'field' => 'title', 'width' => 24);
			$columns[] = array('title' => '数量', 'field' => 'total', 'width' => 12);
			$columns[] = array('title' => '价格', 'field' => 'realprice', 'width' => 12);
			$columns[] = array('title' => '状态', 'field' => 'cstatus', 'width' => 12);
			$columns[] = array('title' => '商品佣金', 'field' => 'ccommission', 'width' => 12);
			$columns[] = array('title' => '提现手续费%', 'field' => 'charge', 'width' => 12);
			if (($status == 2) || ($status == 3)) {
				if ($status == 2) {
					$column_title1 = '应该打款';
					$column_title2 = '实际佣金';
				}
				else {
					$column_title1 = '实际打款';
					$column_title2 = '实际到账';
				}

				$columns[] = array('title' => $column_title1, 'field' => 'passmoney', 'width' => 12);
				$columns[] = array('title' => $column_title2, 'field' => 'realmoney', 'width' => 12);
			}

			$columns[] = array('title' => '提现方式', 'field' => 'typestr', 'width' => 12);
			$columns[] = array('title' => '提现姓名', 'field' => 'bonusrealname', 'width' => 24);
			$columns[] = array('title' => '支付宝', 'field' => 'alipay', 'width' => 24);
			$columns[] = array('title' => '银行', 'field' => 'bankname', 'width' => 24);
			$columns[] = array('title' => '银行卡号', 'field' => 'bankcard', 'width' => 24);
			$columns[] = array('title' => '申请时间', 'field' => 'bonustime', 'width' => 24);
			$columns[] = array('title' => '审核时间', 'field' => 'checktime', 'width' => 24);
			$columns[] = array('title' => '打款时间', 'field' => 'paytime', 'width' => 24);
			$columns[] = array('title' => '设置无效时间', 'field' => 'invalidtime', 'width' => 24);
			m('excel')->export($exportlist, array('title' => $applytitle . '佣金申请数据-' . date('Y-m-d-H-i', time()), 'columns' => $columns));
		}

		$total = pdo_fetchcolumn('select count(a.id) from' . tablename('ewei_shop_commission_applyb') . ' a ' . ' left join ' . tablename('ewei_shop_member') . ' m on m.uid = a.mid' . ' left join ' . tablename('ewei_shop_commission_level') . ' l on l.id = m.agentlevel' . ' where 1 ' . $condition, $params);
		$pager = pagination2($total, $pindex, $psize);
		include $this->template();
	}

	protected function bonusData()
	{
		global $_W;
		global $_GPC;
		$id = intval($_GPC['id']);
		$bonus = pdo_fetch('select * from ' . tablename('ewei_shop_commission_applyb') . ' where uniacid=:uniacid and id=:id limit 1', array(':uniacid' => $_W['uniacid'], ':id' => $id));

		if (empty($bonus)) {
			if ($_W['isajax']) {
				show_json(0, '提现申请不存在!');
			}

			$this->message('提现申请不存在!', '', 'error');
		}

		$status = intval($_GPC['status']);

		empty($status) && ($status = 1);

		if ($bonus['status'] == -1) {
			ca('commission.bonus.view_1');
		}
		else {
			ca('commission.bonus.view' . $bonus['status']);
		}

		$agentid = $bonus['mid'];
		$member = $this->model->getInfo($agentid, array('total', 'ok', 'bonus', 'lock', 'check'));
		$hasagent = 0 < $member['agentcount'];
		$agentLevel = $this->model->getLevel($bonus['mid']);

		if (empty($agentLevel['id'])) {
			$agentLevel = array('levelname' => empty($this->set['levelname']) ? '普通等级' : $this->set['levelname'], 'commission1' => $this->set['commission1'], 'commission2' => $this->set['commission2'], 'commission3' => $this->set['commission3']);
		}

		$orderids = iunserializer($bonus['orderids']);
		if (!is_array($orderids) || (count($orderids) <= 0)) {
			$this->message('无任何订单，无法查看!', '', 'error');
		}

		$ids = array();

		foreach ($orderids as $o) {
			$ids[] = $o['orderid'];
		}

		$list = pdo_fetchall('select id,agentid, ordersn,price,goodsprice, dispatchprice,createtime, paytype from ' . tablename('ewei_shop_order') . ' where  id in ( ' . implode(',', $ids) . ' );');
		$totalcommission = 0;
		$totalpay = 0;

		foreach ($list as &$row) {
			foreach ($orderids as $o) {
				if ($o['orderid'] == $row['id']) {
					$row['level'] = $o['level'];
					break;
				}
			}

			$goods = pdo_fetchall('SELECT og.id,g.thumb,og.price,og.realprice, og.total,g.title,o.paytype,og.optionname,og.commission1,og.commission2,og.commission3,og.commissions,og.status1,og.status2,og.status3,og.content1,og.content2,og.content3 from ' . tablename('ewei_shop_order_goods') . ' og' . ' left join ' . tablename('ewei_shop_goods') . ' g on g.id=og.goodsid  ' . ' left join ' . tablename('ewei_shop_order') . ' o on o.id=og.orderid  ' . ' where og.uniacid = :uniacid and og.orderid=:orderid and og.nocommission=0 order by og.createtime  desc ', array(':uniacid' => $_W['uniacid'], ':orderid' => $row['id']));

			foreach ($goods as &$g) {
				$commissions = iunserializer($g['commissions']);

				if (1 <= $this->set['level']) {
					$commission = iunserializer($g['commission1']);

					if (empty($commissions)) {
						$g['commission1'] = isset($commission['level' . $agentLevel['id']]) ? $commission['level' . $agentLevel['id']] : $commission['default'];
					}
					else {
						$g['commission1'] = isset($commissions['level1']) ? floatval($commissions['level1']) : 0;
					}

					if ($row['level'] == 1) {
						$totalcommission += $g['commission1'];

						if (2 <= $g['status1']) {
							$totalpay += $g['commission1'];
						}
					}
				}

				if (2 <= $this->set['level']) {
					$commission = iunserializer($g['commission2']);

					if (empty($commissions)) {
						$g['commission2'] = isset($commission['level' . $agentLevel['id']]) ? $commission['level' . $agentLevel['id']] : $commission['default'];
					}
					else {
						$g['commission2'] = isset($commissions['level2']) ? floatval($commissions['level2']) : 0;
					}

					if ($row['level'] == 2) {
						$totalcommission += $g['commission2'];

						if (2 <= $g['status2']) {
							$totalpay += $g['commission2'];
						}
					}
				}

				if (3 <= $this->set['level']) {
					$commission = iunserializer($g['commission3']);

					if (empty($commissions)) {
						$g['commission3'] = isset($commission['level' . $agentLevel['id']]) ? $commission['level' . $agentLevel['id']] : $commission['default'];
					}
					else {
						$g['commission3'] = isset($commissions['level3']) ? floatval($commissions['level3']) : 0;
					}

					if ($row['level'] == 3) {
						$totalcommission += $g['commission3'];

						if (2 <= $g['status3']) {
							$totalpay += $g['commission3'];
						}
					}
				}

				$g['level'] = $row['level'];
			}

			unset($g);
			$row['goods'] = $goods;
			$totalmoney += $row['price'];
		}

		unset($row);
		$totalcount = $total = pdo_fetchcolumn('select count(*) from ' . tablename('ewei_shop_order') . ' o ' . ' left join ' . tablename('ewei_shop_member') . ' m on o.openid = m.openid ' . ' left join ' . tablename('ewei_shop_member_address') . ' a on a.id = o.addressid ' . ' where o.id in ( ' . implode(',', $ids) . ' );');
		$set_array = array();
		$set_array['charge'] = $bonus['charge'];
		$set_array['begin'] = $bonus['beginmoney'];
		$set_array['end'] = $bonus['endmoney'];
		$realmoney = $totalpay;
		$deductionmoney = 0;

		if (!empty($set_array['charge'])) {
			$money_array = m('member')->getCalculateMoney($totalpay, $set_array);

			if ($money_array['flag']) {
				$realmoney = $money_array['realmoney'];
				$deductionmoney = $money_array['deductionmoney'];
			}
		}

		$bonus_type = array('余额', '微信钱包', '支付宝', '银行卡');
		return array('id' => $id, 'status' => $status, 'bonus' => $bonus, 'list' => $list, 'totalcount' => $totalcount, 'totalmoney' => $totalmoney, 'member' => $member, 'totalpay' => $totalpay, 'totalcommission' => $totalcommission, 'realmoney' => $realmoney, 'deductionmoney' => $deductionmoney, 'charge' => $set_array['charge'], 'agentLevel' => $agentLevel, 'set_array' => $set_array, 'bonus_type' => $bonus_type);
	}

	protected function bonusData1()
	{
		global $_W;
		global $_GPC;
		$id = intval($_GPC['id']);
		$bonus = pdo_fetch('select * from ' . tablename('ewei_shop_commission_applyb') . ' where uniacid=:uniacid and id=:id limit 1', array(':uniacid' => $_W['uniacid'], ':id' => $id));

		if (empty($bonus)) {
			if ($_W['isajax']) {
				show_json(0, '提现申请不存在!');
			}

			$this->message('提现申请不存在!', '', 'error');
		}

		$status = intval($_GPC['status']);

		empty($status) && ($status = 1);

		if ($bonus['status'] == -1) {
			ca('commission.bonus.view_1');
		}
		else {
			ca('commission.bonus.view' . $bonus['status']);
		}

		$agentid = $bonus['mid'];
		$member = $this->model->getInfo($agentid, array('total', 'ok', 'bonus', 'lock', 'check'));
		$hasagent = 0 < $member['agentcount'];
		$agentLevel = $this->model->getLevel($bonus['mid']);

		if (empty($agentLevel['id'])) {
			$agentLevel = array('levelname' => empty($this->set['levelname']) ? '普通等级' : $this->set['levelname'], 'commission1' => $this->set['commission1'], 'commission2' => $this->set['commission2'], 'commission3' => $this->set['commission3']);
		}

		$bonus_type = array('余额', '微信钱包', '支付宝', '银行卡');
		$list = $this->get_list($member);
		return array('id' => $id, 'status' => $status, 'bonus' => $bonus, 'member' => $member, 'totalpay' => '', 'totalcommission' => '', 'realmoney' => '', 'deductionmoney' => '', 'charge' => '', 'agentLevel' => $agentLevel, 'set_array' => '', 'bonus_type' => $bonus_type,'list'=>$list);
	}

	public function detail()
	{
		global $_W;
		global $_GPC;
		$bonusData = $this->bonusData1();
		// echo '<pre>';
		// var_dump($bonusData);exit;
		extract($bonusData);
		include $this->template();
	}

	public function check()
	{
		global $_W;
		global $_GPC;
		$bonusData = $this->bonusData1();
		extract($bonusData);

		if ($bonus['status'] != 1) {
			show_json(0, '此申请无法审核!');
		}

		$time = time();

		pdo_update('ewei_shop_commission_applyb', array('status' => 2, 'checktime' => $time), array('id' => $id, 'uniacid' => $_W['uniacid']));

		show_json(1, array('url' => webUrl('commission/bonus', array('status' => $bonus['status']))));
	}

	public function cancel()
	{
		global $_W;
		global $_GPC;
		$bonusData = $this->bonusData();
		extract($bonusData);
		if (($bonus['status'] != 2) && ($bonus['status'] != -1)) {
			show_json(0, '此申请无法取消!');
		}

		$time = time();

		foreach ($list as $row) {
			$update = array();

			foreach ($row['goods'] as $g) {
				$update = array();

				if ($row['level'] == 1) {
					$update = array('checktime1' => 0, 'status1' => 1);
				}
				else if ($row['level'] == 2) {
					$update = array('checktime2' => 0, 'status2' => 1);
				}
				else {
					if ($row['level'] == 3) {
						$update = array('checktime3' => 0, 'status3' => 1);
					}
				}

				if (!empty($update)) {
					pdo_update('ewei_shop_order_goods', $update, array('id' => $g['id']));
				}
			}
		}

		pdo_update('ewei_shop_commission_applyb', array('status' => 1, 'checktime' => 0, 'invalidtime' => 0), array('id' => $id, 'uniacid' => $_W['uniacid']));
		plog('commission.bonus.cancel', '重新审核申请 ID: ' . $id . ' 申请编号: ' . $bonus['bonusno'] . ' ');
		show_json(1, array('url' => webUrl('commission/bonus', array('status' => 1))));
	}

	public function refuse()
	{
		global $_W;
		global $_GPC;
		$bonusData = $this->bonusData();
		extract($bonusData);

		if ($bonus['status'] != 1) {
			show_json(0, '此申请无法拒绝!');
		}

		$time = time();

		foreach ($list as $row) {
			$update = array();

			foreach ($row['goods'] as $g) {
				$update = array();

				if ($row['level'] == 1) {
					$update = array('checktime1' => 0, 'status1' => 0);
				}
				else if ($row['level'] == 2) {
					$update = array('checktime2' => 0, 'status2' => 0);
				}
				else {
					if ($row['level'] == 3) {
						$update = array('checktime3' => 0, 'status3' => 0);
					}
				}

				if (!empty($update)) {
					pdo_update('ewei_shop_order_goods', $update, array('id' => $g['id']));
				}
			}
		}

		pdo_update('ewei_shop_commission_applyb', array('status' => -2, 'checktime' => 0, 'invalidtime' => 0, 'refusetime' => time()), array('id' => $id, 'uniacid' => $_W['uniacid']));
		plog('commission.bonus.refuse', '驳回申请 ID: ' . $id . ' 申请编号: ' . $bonus['bonusno'] . ' ');
		show_json(1, array('url' => webUrl('commission/bonus', array('status' => 0))));
	}

	public function pay($params = array(), $mine = array())
	{
		global $_W;
		global $_GPC;
		$bonusData = $this->bonusData();
		extract($bonusData);
		$set = $this->getSet();

		if ($bonus['status'] != 2) {
			show_json(0, '此申请不能打款!');
		}

		$time = time();
		$pay = round($realmoney, 2);

		if ($bonus['type'] < 2) {
			if ($bonus['type'] == 1) {
				$pay *= 100;
			}

			$data = m('common')->getSysset('pay');
			if (!empty($data['paytype']['commission']) && ($bonus['type'] == 1)) {
				$result = m('finance')->payRedPack($member['openid'], $pay, $bonus['bonusno'], $bonus, $set['texts']['commission'] . '打款', $data['paytype']);
				pdo_update('ewei_shop_commission_applyb', array('sendmoney' => $result['sendmoney'], 'senddata' => json_encode($result['senddata'])), array('id' => $bonus['id']));

				if ($result['sendmoney'] == $realmoney) {
					$result = true;
				}
				else {
					$result = $result['error'];
				}
			}
			else {
				$result = m('finance')->pay($member['openid'], $bonus['type'], $pay, $bonus['bonusno'], $set['texts']['commission'] . '打款');
			}

			if (is_error($result)) {
				show_json(0, $result['message']);
			}
		}

		if ($bonus['type'] == 2) {
			$sec = m('common')->getSec();
			$sec = iunserializer($sec['sec']);

			if (!empty($sec['alipay_pay']['open'])) {
				$batch_no_money = $pay * 100;
				$batch_no = 'D' . date('Ymd') . 'CP' . $bonus['id'] . 'MONEY' . $batch_no_money;
				$res = m('finance')->AliPay(array('account' => $bonus['alipay'], 'name' => $bonus['realname'], 'money' => $pay), $batch_no, $sec['alipay_pay'], $set['texts']['commission'] . '打款');

				if (is_error($res)) {
					show_json(0, $res['message']);
				}

				show_json(1, array('url' => $res));
			}
		}

		foreach ($list as $row) {
			$update = array();

			foreach ($row['goods'] as $g) {
				$update = array();
				if (($row['level'] == 1) && ($g['status1'] == 2)) {
					$update = array('paytime1' => $time, 'status1' => 3);
				}
				else {
					if (($row['level'] == 2) && ($g['status2'] == 2)) {
						$update = array('paytime2' => $time, 'status2' => 3);
					}
					else {
						if (($row['level'] == 3) && ($g['status3'] == 2)) {
							$update = array('paytime3' => $time, 'status3' => 3);
						}
					}
				}

				if (!empty($update)) {
					pdo_update('ewei_shop_order_goods', $update, array('id' => $g['id']));
				}
			}
		}

		pdo_update('ewei_shop_commission_applyb', array('status' => 3, 'paytime' => $time, 'commission_pay' => $totalpay, 'realmoney' => $realmoney, 'deductionmoney' => $deductionmoney), array('id' => $id, 'uniacid' => $_W['uniacid']));
		$log = array('uniacid' => $_W['uniacid'], 'bonusid' => $bonus['id'], 'mid' => $member['id'], 'commission' => $totalcommission, 'commission_pay' => $totalpay, 'realmoney' => $realmoney, 'deductionmoney' => $deductionmoney, 'charge' => $charge, 'createtime' => $time, 'type' => $bonus['type']);
		pdo_insert('ewei_shop_commission_log', $log);
		$mcommission = $totalpay;

		if (!empty($deductionmoney)) {
			$mcommission .= ',实际到账金额:' . $realmoney . ',提现手续费金额:' . $deductionmoney;
		}

		$this->model->sendMessage($member['openid'], array('commission' => $mcommission, 'type' => $bonus_type[$bonus['type']]), TM_COMMISSION_PAY);
		$this->model->upgradeLevelByCommissionOK($member['openid']);

		if (p('globous')) {
			p('globous')->upgradeLevelByCommissionOK($member['openid']);
		}

		plog('commission.bonus.pay', '佣金打款 ID: ' . $id . ' 申请编号: ' . $bonus['bonusno'] . ' 打款方式: ' . $bonus_type[$bonus['type']] . ' 总佣金: ' . $totalcommission . ' 审核通过佣金: ' . $totalpay . ' 实际到账金额: ' . $realmoney . ' 提现手续费金额: ' . $deductionmoney . ' 提现手续费税率: ' . $charge . '%');
		show_json(1, array('url' => webUrl('commission/bonus', array('status' => $bonus['status']))));
	}

	public function payed($params = array(), $mine = array())
	{
		global $_W;
		global $_GPC;
		$bonusData = $this->bonusData();
		extract($bonusData);
		$set = $this->getSet();

		if ($bonus['status'] != 2) {
			show_json(0, '此申请不能打款!');
		}

		$time = time();
		$pay = $realmoney;

		foreach ($list as $row) {
			$update = array();

			foreach ($row['goods'] as $g) {
				$update = array();
				if (($row['level'] == 1) && ($g['status1'] == 2)) {
					$update = array('paytime1' => $time, 'status1' => 3);
				}
				else {
					if (($row['level'] == 2) && ($g['status2'] == 2)) {
						$update = array('paytime2' => $time, 'status2' => 3);
					}
					else {
						if (($row['level'] == 3) && ($g['status3'] == 2)) {
							$update = array('paytime3' => $time, 'status3' => 3);
						}
					}
				}

				if (!empty($update)) {
					pdo_update('ewei_shop_order_goods', $update, array('id' => $g['id']));
				}
			}
		}

		pdo_update('ewei_shop_commission_applyb', array('status' => 3, 'paytime' => $time, 'commission_pay' => $totalpay, 'realmoney' => $realmoney, 'deductionmoney' => $deductionmoney), array('id' => $id, 'uniacid' => $_W['uniacid']));
		$log = array('uniacid' => $_W['uniacid'], 'bonusid' => $bonus['id'], 'mid' => $member['id'], 'commission' => $totalcommission, 'commission_pay' => $totalpay, 'realmoney' => $realmoney, 'deductionmoney' => $deductionmoney, 'charge' => $charge, 'createtime' => $time, 'type' => $bonus['type']);
		pdo_insert('ewei_shop_commission_log', $log);
		$mcommission = $totalpay;

		if (!empty($deductionmoney)) {
			$mcommission .= ',实际到账金额:' . $realmoney . ',提现手续费金额:' . $deductionmoney;
		}

		$this->model->upgradeLevelByCommissionOK($member['openid']);

		if (p('globous')) {
			p('globous')->upgradeLevelByCommissionOK($member['openid']);
		}

		plog('commission.bonus.pay', '佣金打款 ID: ' . $id . ' 申请编号: ' . $bonus['bonusno'] . ' 打款方式: 已经手动打款 总佣金: ' . $totalcommission . ' 审核通过佣金: ' . $totalpay . ' 实际到账金额: ' . $realmoney . ' 提现手续费金额: ' . $deductionmoney . ' 提现手续费税率: ' . $charge . '%');
		show_json(1, array('url' => webUrl('commission/bonus', array('status' => $bonus['status']))));
	}

	public function changecommission()
	{
		global $_W;
		global $_GPC;
		$id = intval($_GPC['id']);
		$set = $this->set;
		$order = pdo_fetch('select * from ' . tablename('ewei_shop_order') . ' where id=:id and uniacid=:uniacid limit 1', array(':id' => $id, ':uniacid' => $_W['uniacid']));

		if (empty($order)) {
			if ($_W['ispost']) {
				show_json(0, array('message' => '未找到订单!'));
			}

			exit('fail');
		}

		$member = m('member')->getMember($order['openid']);
		$agentid = $order['agentid'];
		$agentLevel = $this->model->getLevel($agentid);
		$ogid = intval($_GPC['ogid']);
		$order_goods_change = pdo_fetchall('select og.id,g.title,g.thumb,g.goodssn,og.goodssn as option_goodssn, g.productsn,og.productsn as option_productsn, og.total,og.price,og.optionname as optiontitle, og.realprice,og.oldprice,og.commission1,og.commission2,og.commission3,og.commissions,og.status1,og.status2,og.status3 from ' . tablename('ewei_shop_order_goods') . ' og ' . ' left join ' . tablename('ewei_shop_goods') . ' g on g.id=og.goodsid ' . ' where og.uniacid=:uniacid and og.orderid=:orderid ', array(':uniacid' => $_W['uniacid'], ':orderid' => $id));

		if (empty($order_goods_change)) {
			if ($_W['ispost']) {
				show_json(0, array('message' => '未找到订单商品，无法修改佣金!'));
			}

			exit('fail');
		}

		if ($_W['ispost']) {
			$cm1 = $_GPC['cm1'];
			$cm2 = $_GPC['cm2'];
			$cm3 = $_GPC['cm3'];
			if (!is_array($cm1) && !is_array($cm2) && !is_array($cm3)) {
				show_json(0, array('message' => '未找到修改数据!'));
			}

			foreach ($order_goods_change as $og) {
				$commissions = iunserializer($og['commissions']);
				$commissions['level1'] = isset($cm1[$og['id']]) ? round($cm1[$og['id']], 2) : $commissions['level1'];
				$commissions['level2'] = isset($cm2[$og['id']]) ? round($cm2[$og['id']], 2) : $commissions['level3'];
				$commissions['level3'] = isset($cm3[$og['id']]) ? round($cm3[$og['id']], 2) : $commissions['level2'];
				pdo_update('ewei_shop_order_goods', array('commissions' => iserializer($commissions)), array('id' => $og['id']));
			}

			plog('commission.bonus.changecommission', '修改佣金 订单号: ' . $order['ordersn']);
			show_json(1, array('url' => referer()));
		}

		$cm1 = m('member')->getMember($agentid);

		if (!empty($cm1['agentid'])) {
			$cm2 = m('member')->getMember($cm1['agentid']);

			if (!empty($cm2['agentid'])) {
				$cm3 = m('member')->getMember($cm2['agentid']);
			}
		}

		foreach ($order_goods_change as &$og) {
			$commissions = iunserializer($og['commissions']);

			if (1 <= $set['level']) {
				$commission = iunserializer($og['commission1']);

				if (empty($commissions)) {
					$og['c1'] = isset($commission['level' . $agentLevel['id']]) ? $commission['level' . $agentLevel['id']] : $commission['default'];
				}
				else {
					$og['c1'] = isset($commissions['level1']) ? floatval($commissions['level1']) : 0;
				}
			}

			if (2 <= $set['level']) {
				$commission = iunserializer($og['commission2']);

				if (empty($commissions)) {
					$og['c2'] = isset($commission['level' . $agentLevel['id']]) ? $commission['level' . $agentLevel['id']] : $commission['default'];
				}
				else {
					$og['c2'] = isset($commissions['level2']) ? floatval($commissions['level2']) : 0;
				}
			}

			if (3 <= $set['level']) {
				$commission = iunserializer($og['commission3']);

				if (empty($commissions)) {
					$og['c3'] = isset($commission['level' . $agentLevel['id']]) ? $commission['level' . $agentLevel['id']] : $commission['default'];
				}
				else {
					$og['c3'] = isset($commissions['level3']) ? floatval($commissions['level3']) : 0;
				}
			}

			$og['co'] = $this->model->getOrderCommissions($id, $og['id']);
		}

		unset($og);
		include $this->template();
	}

	public function get_list($member)
	{
		$total_level = 0;
		$condition = '';
		$levelcount1 = $member['level1'];
		$levelcount2 = $member['level2'];
		$levelcount3 = $member['level3'];
		$levelid1 = $member['level1_agentids'];
		$levelid2 = $member['level2_agentids'];
		$levelid3 = $member['level3_agentids'];
		$prevmonth = strtotime(date("Y-m",strtotime("-1 months")));
		$nowmonth = strtotime(date("Y-m",strtotime("now")));
		$totalid = implode(",",array_keys($levelid1)).','.implode(",",array_keys($levelid2)).','.implode(",",array_keys($levelid3));
		$list = pdo_fetchall('select * from ' . tablename('ewei_shop_member') . ' where  id in ( ' . $totalid . ' ) and agenttime > '.$prevmonth.' and agenttime < '.$nowmonth.';');
		return $list;
		// $pager = pagination2($total_level, $pindex, $psize);
		// show_json(1, array('list' => $list, 'total' => $total_level, 'pagesize' => $psize));
	}

}

?>
