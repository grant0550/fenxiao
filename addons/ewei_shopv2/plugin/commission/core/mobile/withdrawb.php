<?php
if (!defined('IN_IA')) {
	exit('Access Denied');
}

require EWEI_SHOPV2_PLUGIN . 'commission/core/page_login_mobile.php';
class Withdrawb_EweiShopV2Page extends CommissionMobileLoginPage
{
	public function main()
	{
		global $_W;
		global $_GPC;
		$openid = $_W['openid'];
		$member = $this->model->getInfo($openid, array('total', 'ok', 'apply', 'check', 'lock', 'pay', 'wait', 'fail'));
		$cansettle = (1 <= $member['commission_ok']) && (floatval($this->set['withdraw']) <= $member['commission_ok']);
		$agentid = $member['id'];

		if (!empty($agentid)) {
			$data = pdo_fetch('select sum(deductionmoney) as sumcharge from ' . tablename('ewei_shop_commission_log') . ' where mid=:mid and uniacid=:uniacid  limit 1', array(':uniacid' => $_W['uniacid'], ':mid' => $agentid));
			$commission_charge = $data['sumcharge'];
			$member['commission_charge'] = $commission_charge;
		}
		else {
			$member['commission_charge'] = 0;
		}
		// echo $this->model->getApplyb($member,-2).'111';exit;
		if($this->model->getApplyb($member,0)>0){
			$bonusMoney = $this->model->getApplyb($member,0);
		}elseif($this->model->getApplyb($member,-2)>0){
			$bonusMoney = $this->model->getApplyb($member,-2);
		}elseif($this->model->getApplyb($member,1)<=0 && $this->model->getApplyb($member,2)<=0 && $this->model->getApplyb($member,3)<=0 && 	$this->model->getApplyb($member,-1)<=0){
			$bonusMoney = $this->model->getbonusMoney($member['agentlevel']);
		}else{
			$bonusMoney = number_format(0,2);
		}
		$appliedmoney = $this->model->getApplyb($member,1);

		$pendingmoney = $this->model->getApplyb($member,2);
		// echo $pendingmoney; exit;
		$successmoney = $this->model->getApplyb($member,3);
		include $this->template();
	}
}

?>
