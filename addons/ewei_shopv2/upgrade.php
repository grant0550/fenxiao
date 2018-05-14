<?php
pdo_query("
DROP TABLE IF EXISTS `ims_ewei_shop_exhelper_esheet`;
CREATE TABLE `ims_ewei_shop_exhelper_esheet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `express` varchar(50) DEFAULT '',
  `code` varchar(20) NOT NULL DEFAULT '',
  `datas` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;


INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('1', '顺丰', '', 'SF', 'a:2:{i:0;a:4:{s:5:\"style\";s:9:\"二联150\";s:4:\"spec\";s:33:\"（宽100mm高150mm切点90/60）\";s:4:\"size\";s:3:\"150\";s:9:\"isdefault\";i:1;}i:1;a:4:{s:5:\"style\";s:9:\"三联210\";s:4:\"spec\";s:38:\"（宽100mm 高210mm 切点90/60/60）\";s:4:\"size\";s:3:\"210\";s:9:\"isdefault\";i:0;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('2', '百世快递', '', 'HTKY', 'a:2:{i:0;a:4:{s:5:\"style\";s:9:\"二联180\";s:4:\"spec\";s:34:\"（宽100mm高180mm切点110/70）\";s:4:\"size\";s:3:\"180\";s:9:\"isdefault\";i:0;}i:1;a:4:{s:5:\"style\";s:9:\"二联183\";s:4:\"spec\";s:37:\"（宽100mm 高183mm 切点87/5/91）\";s:4:\"size\";s:3:\"183\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('3', '韵达', '', 'YD', 'a:2:{i:0;a:4:{s:5:\"style\";s:9:\"二联180\";s:4:\"spec\";s:34:\"（宽100mm高180mm切点110/70）\";s:4:\"size\";s:3:\"180\";s:9:\"isdefault\";i:0;}i:1;a:4:{s:5:\"style\";s:9:\"二联203\";s:4:\"spec\";s:36:\"（宽100mm 高203mm 切点152/51）\";s:4:\"size\";s:3:\"203\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('4', '申通', '', 'STO', 'a:2:{i:0;a:4:{s:5:\"style\";s:9:\"二联180\";s:4:\"spec\";s:34:\"（宽100mm高180mm切点110/70）\";s:4:\"size\";s:3:\"180\";s:9:\"isdefault\";i:1;}i:1;a:4:{s:5:\"style\";s:9:\"二联150\";s:4:\"spec\";s:35:\"（宽100mm 高150mm 切点90/60）\";s:4:\"size\";s:3:\"150\";s:9:\"isdefault\";i:0;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('5', '圆通', '', 'YTO', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"二联180\";s:4:\"spec\";s:34:\"（宽100mm高180mm切点110/70）\";s:4:\"size\";s:3:\"180\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('6', 'EMS', '', 'EMS', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"二联150\";s:4:\"spec\";s:33:\"（宽100mm高150mm切点90/60）\";s:4:\"size\";s:3:\"150\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('7', '中通', '', 'ZTO', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"二联180\";s:4:\"spec\";s:34:\"（宽100mm高180mm切点110/70）\";s:4:\"size\";s:3:\"180\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('8', '德邦', '', 'DBL', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"二联177\";s:4:\"spec\";s:34:\"（宽100mm高177mm切点107/70）\";s:4:\"size\";s:3:\"177\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('9', '优速', '', 'UC', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"二联180\";s:4:\"spec\";s:34:\"（宽100mm高180mm切点110/70）\";s:4:\"size\";s:3:\"180\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('10', '宅急送', '', 'ZJS', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"二联120\";s:4:\"spec\";s:33:\"（宽100mm高116mm切点98/10）\";s:4:\"size\";s:3:\"120\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('11', '京东', '', 'JD', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"二联110\";s:4:\"spec\";s:33:\"（宽100mm高110mm切点60/50）\";s:4:\"size\";s:3:\"110\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('12', '信丰', '', 'XFEX', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"二联150\";s:4:\"spec\";s:33:\"（宽100mm高150mm切点90/60）\";s:4:\"size\";s:3:\"150\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('13', '全峰', '', 'QFKD', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"二联180\";s:4:\"spec\";s:34:\"（宽100mm高180mm切点110/70）\";s:4:\"size\";s:3:\"180\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('14', '跨越速运', '', 'KYSY', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"二联137\";s:4:\"spec\";s:34:\"（宽100mm高137mm切点101/36）\";s:4:\"size\";s:3:\"137\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('15', '安能', '', 'ANE', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"三联180\";s:4:\"spec\";s:37:\"（宽100mm高180mm切点110/30/40）\";s:4:\"size\";s:3:\"180\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('16', '快捷', '', 'FAST', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"二联180\";s:4:\"spec\";s:34:\"（宽100mm高180mm切点110/70）\";s:4:\"size\";s:3:\"180\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('17', '国通', '', 'GTO', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"二联180\";s:4:\"spec\";s:34:\"（宽100mm高180mm切点110/70）\";s:4:\"size\";s:3:\"180\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('18', '天天', '', 'HHTT', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"二联180\";s:4:\"spec\";s:34:\"（宽100mm高180mm切点110/70）\";s:4:\"size\";s:3:\"180\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('19', '中铁快运', '', 'ZTKY', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"二联150\";s:4:\"spec\";s:33:\"（宽100mm高150mm切点90/60）\";s:4:\"size\";s:3:\"150\";s:9:\"isdefault\";i:1;}}');
INSERT INTO `ims_ewei_shop_exhelper_esheet` VALUES ('20', '邮政快递包裹', '', 'YZPY', 'a:1:{i:0;a:4:{s:5:\"style\";s:9:\"二联180\";s:4:\"spec\";s:34:\"（宽100mm高180mm切点110/70）\";s:4:\"size\";s:3:\"180\";s:9:\"isdefault\";i:1;}}');

DROP TABLE IF EXISTS `ims_ewei_shop_member_message_template_type`;
CREATE TABLE `ims_ewei_shop_member_message_template_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `typecode` varchar(255) DEFAULT NULL,
  `templatecode` varchar(255) DEFAULT NULL,
  `templateid` varchar(255) DEFAULT NULL,
  `templatename` varchar(255) DEFAULT NULL,
  `content` varchar(1000) DEFAULT NULL,
  `showtotaladd` tinyint(1) DEFAULT '0',
  `typegroup` varchar(255) DEFAULT '',
  `groupname` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('1', '订单付款通知', 'saler_pay', 'OPENTM405584202', '', '订单付款通知', '{{first.DATA}}订单编号：{{keyword1.DATA}}商品名称：{{keyword2.DATA}}商品数量：{{keyword3.DATA}}支付金额：{{keyword4.DATA}}{{remark.DATA}}', '0', '系统消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('2', '自提订单提交成功通知', 'carrier', 'OPENTM201594720', '', '订单付款通知', '{{first.DATA}}自提码：{{keyword1.DATA}}商品详情：{{keyword2.DATA}}提货地址：{{keyword3.DATA}}提货时间：{{keyword4.DATA}}{{remark.DATA}}', '0', '系统消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('3', '订单取消通知', 'cancel', 'OPENTM201764653', '', '订单关闭提醒', '{{first.DATA}}订单商品：{{keyword1.DATA}}订单编号：{{keyword2.DATA}}下单时间：{{keyword3.DATA}}订单金额：{{keyword4.DATA}}关闭时间：{{keyword5.DATA}}{{remark.DATA}}', '0', '系统消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('4', '订单即将取消通知', 'willcancel', 'OPENTM201764653', '', '订单关闭提醒', '{{first.DATA}}订单商品：{{keyword1.DATA}}订单编号：{{keyword2.DATA}}下单时间：{{keyword3.DATA}}订单金额：{{keyword4.DATA}}关闭时间：{{keyword5.DATA}}{{remark.DATA}}', '0', '系统消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('5', '订单支付成功通知', 'pay', 'OPENTM405584202', '', '订单支付通知', '{{first.DATA}}订单编号：{{keyword1.DATA}}商品名称：{{keyword2.DATA}}商品数量：{{keyword3.DATA}}支付金额：{{keyword4.DATA}}{{remark.DATA}}', '0', '系统消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('6', '订单发货通知', 'send', 'OPENTM401874827', '', '订单发货通知', '{{first.DATA}}订单编号：{{keyword1.DATA}}快递公司：{{keyword2.DATA}}快递单号：{{keyword3.DATA}}{{remark.DATA}}', '0', '系统消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('7', '自动发货通知(虚拟物品及卡密)', 'virtualsend', 'OPENTM207793687', '', '自动发货通知', '{{first.DATA}}商品名称：{{keyword1.DATA}}订单号：{{keyword2.DATA}}订单金额：{{keyword3.DATA}}卡密信息：{{keyword4.DATA}}{{remark.DATA}}', '0', '系统消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('8', '订单状态更新(修改收货地址)(修改价格)', 'orderstatus', 'TM00017', '', '订单付款通知', '{{first.DATA}}订单编号:{{OrderSn.DATA}}订单状态:{{OrderStatus.DATA}}{{remark.DATA}}', '0', '系统消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('9', '退款成功通知', 'refund1', 'TM00430', '', '退款成功通知', '{{first.DATA}}退款金额：{{orderProductPrice.DATA}}商品详情：{{orderProductName.DATA}}订单编号：{{orderName.DATA}}{{remark.DATA}}', '0', '系统消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('10', '换货成功通知', 'refund3', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '系统消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('11', '退款申请驳回通知', 'refund2', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '系统消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('12', '充值成功通知', 'recharge_ok', 'OPENTM207727673', '', '充值成功提醒', '{{first.DATA}}充值金额：{{keyword1.DATA}}充值时间：{{keyword2.DATA}}账户余额：{{keyword3.DATA}}{{remark.DATA}}', '0', '系统消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('13', '提现成功通知', 'withdraw_ok', 'OPENTM207422808', '', '提现通知', '{{first.DATA}}申请提现金额：{{keyword1.DATA}}取提现手续费：{{keyword2.DATA}}实际到账金额：{{keyword3.DATA}}提现渠道：{{keyword4.DATA}}{{remark.DATA}}', '0', '系统消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('14', '会员升级通知(任务处理通知)', 'upgrade', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '系统消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('15', '充值成功通知（后台管理员手动）', 'backrecharge_ok', 'OPENTM207727673', '', '充值成功提醒', '{{first.DATA}}充值金额：{{keyword1.DATA}}充值时间：{{keyword2.DATA}}账户余额：{{keyword3.DATA}}{{remark.DATA}}', '0', '系统消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('16', '积分变动提醒', 'backpoint_ok', 'OPENTM207509450', '', '积分变动提醒', '{{first.DATA}}获得时间：{{keyword1.DATA}}获得积分：{{keyword2.DATA}}获得原因：{{keyword3.DATA}}当前积分：{{keyword4.DATA}}{{remark.DATA}}', '0', '系统消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('17', '换货发货通知', 'refund4', 'OPENTM401874827', '', '订单发货通知', '{{first.DATA}}订单编号：{{keyword1.DATA}}快递公司：{{keyword2.DATA}}快递单号：{{keyword3.DATA}}{{remark.DATA}}', '0', '系统消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('18', '砍价活动通知', 'bargain_message', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '砍价消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('19', '拼团活动通知', 'groups', '', '', '', '', '0', '拼团消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('20', '人人分销通知', 'commission', '', '', '', '', '0', '分销消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('21', '商品付款通知', 'saler_goodpay', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '系统消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('22', '砍到底价通知', 'bargain_fprice', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '砍价消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('23', '订单收货通知(卖家)', 'saler_finish', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '系统消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('24', '余额兑换成功通知', 'exchange_balance', 'OPENTM207727673', '', '充值成功提醒', '{{first.DATA}}充值金额：{{keyword1.DATA}}充值时间：{{keyword2.DATA}}账户余额：{{keyword3.DATA}}{{remark.DATA}}', '0', '兑换中心消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('25', '积分兑换成功通知', 'exchange_score', 'OPENTM207509450', '', '积分变动提醒', '{{first.DATA}}获得时间：{{keyword1.DATA}}获得积分：{{keyword2.DATA}}获得原因：{{keyword3.DATA}}当前积分：{{keyword4.DATA}}{{remark.DATA}}', '0', '兑换中心消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('26', '兑换中心余额充值通知', 'exchange_recharge', 'OPENTM207727673', '', '充值成功提醒', '{{first.DATA}}充值金额：{{keyword1.DATA}}充值时间：{{keyword2.DATA}}账户余额：{{keyword3.DATA}}{{remark.DATA}}', '0', '兑换中心消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('27', '游戏中心通知', 'lottery_get', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '抽奖消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('35', '库存预警通知', 'saler_stockwarn', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '系统消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('36', '卖家核销商品核销通知', 'o2o_sverify', 'OPENTM409521536', '', '核销成功提醒', '{{first.DATA}}核销项目：{{keyword1.DATA}}核销时间：{{keyword2.DATA}}核销门店：{{keyword3.DATA}}{{remark.DATA}}', '0', 'O2O消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('37', '核销商品核销通知', 'o2o_bverify', 'OPENTM409521536', '', '核销成功提醒', '{{first.DATA}}核销项目：{{keyword1.DATA}}核销时间：{{keyword2.DATA}}核销门店：{{keyword3.DATA}}{{remark.DATA}}', '0', 'O2O消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('38', '卖家商品预约通知', 'o2o_snorder', 'OPENTM202447657', '', '预约成功提醒', '{{first.DATA}}预约项目：{{keyword1.DATA}}预约时间：{{keyword2.DATA}}{{remark.DATA}}', '0', 'O2O消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('39', '商品预约成功通知', 'o2o_bnorder', 'OPENTM202447657', '', '预约成功提醒', '{{first.DATA}}预约项目：{{keyword1.DATA}}预约时间：{{keyword2.DATA}}{{remark.DATA}}', '0', 'O2O消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('42', '商品下单通知', 'saler_goodsubmit', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '系统消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('50', '维权订单通知', 'saler_refund', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '系统消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('43', '任务接取通知', 'task_pick', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '任务中心消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('44', '任务进度通知', 'task_progress', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '任务中心消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('45', '任务完成通知', 'task_finish', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '任务中心消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('46', '任务海报接取通知', 'task_poster_pick', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '任务中心消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('47', '任务海报进度通知', 'task_poster_progress', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '任务中心消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('48', '任务海报完成通知', 'task_poster_finish', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '任务中心消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('49', '任务海报扫描通知', 'task_poster_scan', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '任务中心消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('52', '成为分销商通知', 'commission_become', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '分销消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('53', '新增下线通知', 'commission_agent_new', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '分销消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('54', '下级付款通知', 'commission_order_pay', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '分销消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('55', '下级确认收货通知', 'commission_order_finish', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '分销消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('56', '提现申请提交通知', 'commission_apply', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '分销消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('57', '提现申请完成审核通知', 'commission_check', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '分销消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('58', '佣金打款通知', 'commission_pay', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '分销消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('59', '分销商等级升级通知', 'commission_upgrade', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '分销消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('60', '成为股东通知', 'globonus_become', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '股东消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('61', '股东等级升级通知', 'globonus_upgrade', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '股东消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('62', '分红发放通知', 'globonus_pay', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '股东消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('63', '奖励发放通知', 'article', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '文章营销消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('64', '成为区域代理通知', 'abonus_become', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '区域代理消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('65', '省级代理等级升级通知', 'abonus_upgrade1', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '区域代理消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('66', '市级代理等级升级通知', 'abonus_upgrade2', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '区域代理消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('67', '区级代理等级升级通知', 'abonus_upgrade3', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '区域代理消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('68', '区域代理分红发放通知', 'abonus_pay', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '区域代理消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('69', '入驻申请通知', 'merch_apply', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '商家通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('70', '提现申请提交通知', 'merch_applymoney', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '商家通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('71', '社区会员评论通知', 'reply', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '人人社区消息通知', '0');
INSERT INTO `ims_ewei_shop_member_message_template_type` VALUES ('51', '社区会员升级通知', 'sns', 'OPENTM400232285', '', '任务完成通知', '{{first.DATA}}任务名称：{{keyword1.DATA}}任务类型：{{keyword2.DATA}}完成时间：{{keyword3.DATA}}{{remark.DATA}}', '0', '人人社区消息通知', '0');



ALTER TABLE `ims_ewei_shop_abonus_bill` 
	DROP COLUMN `ceshi` ;

ALTER TABLE `ims_ewei_shop_abonus_level` 
	ADD COLUMN `commissionmoney` decimal(10,2)   NULL DEFAULT 0.00 after `downcount` ;

ALTER TABLE `ims_ewei_shop_article` 
	CHANGE `article_keyword2` `article_keyword2` varchar(255)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `article_keyword` , 
	CHANGE `article_report` `article_report` int(1)   NOT NULL DEFAULT 0 after `article_keyword2` , 
	CHANGE `uniacid` `uniacid` int(11)   NOT NULL DEFAULT 0 after `article_state` , 
	CHANGE `network_attachment` `network_attachment` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `uniacid` , 
	CHANGE `article_rule_credittotal` `article_rule_credittotal` int(11)   NULL DEFAULT 0 after `network_attachment` , 
	CHANGE `article_advance` `article_advance` int(11)   NULL DEFAULT 0 after `displayorder` , 
	DROP KEY `idx_article_content` , COMMENT='' ;


ALTER TABLE `ims_ewei_shop_article_category` 
	CHANGE `displayorder` `displayorder` int(11)   NOT NULL DEFAULT 0 after `category_name` , 
	CHANGE `uniacid` `uniacid` int(11)   NOT NULL DEFAULT 0 after `isshow` , COMMENT='' ;


ALTER TABLE `ims_ewei_shop_article_log` COMMENT='' ;


ALTER TABLE `ims_ewei_shop_article_report` COMMENT='' ;


ALTER TABLE `ims_ewei_shop_article_share` COMMENT='' ;


ALTER TABLE `ims_ewei_shop_article_sys` 
	CHANGE `article_source` `article_source` varchar(255)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `article_keyword` , 
	CHANGE `article_temp` `article_temp` int(11)   NOT NULL DEFAULT 0 after `article_source` , COMMENT='' ;


ALTER TABLE `ims_ewei_shop_bargain_account` 
	ADD PRIMARY KEY(`id`) ;


ALTER TABLE `ims_ewei_shop_bargain_actor` 
	ADD KEY `idx_account_id`(`account_id`) , 
	ADD KEY `idx_openid`(`openid`) , 
	ADD KEY `idx_status`(`status`) ;


ALTER TABLE `ims_ewei_shop_bargain_record` 
	ADD KEY `idx_actor_id`(`actor_id`) , 
	ADD KEY `idx_openid`(`openid`) ;


ALTER TABLE `ims_ewei_shop_category` 
	CHANGE `level` `level` tinyint(3)   NULL after `ishome` , 
	CHANGE `advimg` `advimg` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `level` ;


ALTER TABLE `ims_ewei_shop_commission_apply` 
	CHANGE `alipay1` `alipay1` varchar(50)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `bankcard` , 
	CHANGE `repurchase` `repurchase` decimal(10,2)   NULL DEFAULT 0.00 after `bankcard1` , 
	CHANGE `realname` `realname` varchar(50)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `repurchase` , 
	CHANGE `sendmoney` `sendmoney` decimal(10,2)   NULL DEFAULT 0.00 after `realname` ;


ALTER TABLE `ims_ewei_shop_commission_level` 
	CHANGE `ordermoney` `ordermoney` decimal(10,2)   NULL DEFAULT 0.00 after `commission3` , 
	CHANGE `ordercount` `ordercount` int(11)   NULL DEFAULT 0 after `ordermoney` , 
	CHANGE `downcount` `downcount` int(11)   NULL DEFAULT 0 after `ordercount` , 
	CHANGE `commissionmoney` `commissionmoney` decimal(10,2)   NULL DEFAULT 0.00 after `downcount` , 
	CHANGE `goodsids` `goodsids` varchar(1000)  COLLATE utf8_general_ci NULL DEFAULT '' after `commissionmoney` , 
	DROP COLUMN `repurchase` , 
	DROP COLUMN `withdraw` ;


ALTER TABLE `ims_ewei_shop_commission_log` 
	CHANGE `type` `type` tinyint(3)   NULL DEFAULT 0 after `commission_pay` , 
	CHANGE `realmoney` `realmoney` decimal(10,2)   NULL DEFAULT 0.00 after `type` ;


ALTER TABLE `ims_ewei_shop_coupon` 
	CHANGE `pwdkey2` `pwdkey2` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `pwdkey` , 
	CHANGE `pwdsuc` `pwdsuc` text  COLLATE utf8_general_ci NULL after `pwdkey2` , 
	CHANGE `merchid` `merchid` int(11)   NULL DEFAULT 0 after `displayorder` ;


ALTER TABLE `ims_ewei_shop_creditshop_goods` 
	CHANGE `maxpacketmoney` `maxpacketmoney` decimal(10,2)   NOT NULL DEFAULT 0.00 after `packetsurplus` ;


ALTER TABLE `ims_ewei_shop_creditshop_log` 
	CHANGE `transid` `transid` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `verifyopenid` , 
	CHANGE `storeid` `storeid` int(11)   NULL DEFAULT 0 after `dispatchtransid` , 
	CHANGE `address` `address` text  COLLATE utf8_general_ci NULL after `dupdate1` ;


CREATE TABLE `ims_ewei_shop_datatransfer`(
	`id` int(11) NOT NULL  auto_increment , 
	`fromuniacid` int(11) NULL  , 
	`touniacid` int(11) NULL  , 
	`status` tinyint(1) NULL  , 
	PRIMARY KEY (`id`) 
) ENGINE=MyISAM DEFAULT CHARSET='utf8' COLLATE='utf8_general_ci';



ALTER TABLE `ims_ewei_shop_designer` 
	DROP KEY `idx_keyword` ;


ALTER TABLE `ims_ewei_shop_diypage` 
	CHANGE `diyadv` `diyadv` int(11)   NOT NULL DEFAULT 0 after `diymenu` , 
	CHANGE `merch` `merch` int(11)   NOT NULL DEFAULT 0 after `diyadv` ;


ALTER TABLE `ims_ewei_shop_exchange_group` 
	ADD COLUMN `goods_native` text  COLLATE utf8_general_ci NULL after `chufaend` ;


ALTER TABLE `ims_ewei_shop_exchange_setting` 
	CHANGE `rule` `rule` text  COLLATE utf8_general_ci NULL after `no_qrimg` ;


ALTER TABLE `ims_ewei_shop_exhelper_senduser` 
	CHANGE `province` `province` varchar(30)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `isdefault` , 
	CHANGE `merchid` `merchid` int(11)   NULL DEFAULT 0 after `area` ;


ALTER TABLE `ims_ewei_shop_exhelper_sys` 
	CHANGE `ip_cloud` `ip_cloud` varchar(255)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `ip` , 
	CHANGE `port` `port` int(11)   NOT NULL DEFAULT 8000 after `ip_cloud` , 
	CHANGE `port_cloud` `port_cloud` int(11)   NOT NULL DEFAULT 8000 after `port` , 
	CHANGE `ebusiness` `ebusiness` varchar(20)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `is_cloud` , 
	CHANGE `merchid` `merchid` int(11)   NULL DEFAULT 0 after `apikey` ;


ALTER TABLE `ims_ewei_shop_goods` 
	CHANGE `tcate` `tcate` int(11)   NULL DEFAULT 0 after `ccate` , 
	CHANGE `type` `type` tinyint(1)   NULL DEFAULT 1 after `tcate` , 
	CHANGE `credit` `credit` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `weight` , 
	CHANGE `isdiscount_title` `isdiscount_title` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `isdiscount` , 
	CHANGE `isrecommand` `isrecommand` tinyint(1)   NULL DEFAULT 0 after `isdiscount_discounts` , 
	CHANGE `commission` `commission` text  COLLATE utf8_general_ci NULL after `commission3_pay` , 
	CHANGE `score` `score` decimal(10,2)   NULL DEFAULT 0.00 after `commission` , 
	CHANGE `catch_id` `catch_id` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `score` , 
	CHANGE `updatetime` `updatetime` int(11)   NULL DEFAULT 0 after `catch_source` , 
	CHANGE `noticetype` `noticetype` text  COLLATE utf8_general_ci NULL after `noticeopenid` , 
	CHANGE `followurl` `followurl` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `needfollow` , 
	CHANGE `followtip` `followtip` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `followurl` , 
	CHANGE `deduct` `deduct` decimal(10,2)   NULL DEFAULT 0.00 after `followtip` , 
	CHANGE `shorttitle` `shorttitle` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `deduct` , 
	DROP COLUMN `virtual` , 
	ADD COLUMN `virtual` int(11)   NULL DEFAULT 0 after `shorttitle` , 
	CHANGE `detail_logo` `detail_logo` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `tcates` , 
	CHANGE `detail_totaltitle` `detail_totaltitle` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `detail_shopname` , 
	CHANGE `detail_btntext1` `detail_btntext1` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `detail_totaltitle` , 
	CHANGE `cates` `cates` text  COLLATE utf8_general_ci NULL after `detail_btnurl2` , 
	CHANGE `deduct2` `deduct2` decimal(10,2)   NULL DEFAULT 0.00 after `artid` , 
	CHANGE `edareas` `edareas` text  COLLATE utf8_general_ci NULL after `ednum` , 
	CHANGE `edmoney` `edmoney` decimal(10,2)   NULL DEFAULT 0.00 after `edareas` , 
	CHANGE `diyformtype` `diyformtype` tinyint(1)   NULL DEFAULT 0 after `edmoney` , 
	CHANGE `saleupdate37975` `saleupdate37975` tinyint(3)   NULL DEFAULT 0 after `manydeduct` , 
	CHANGE `sharebtn` `sharebtn` tinyint(1)   NOT NULL DEFAULT 0 after `subtitle` , 
	CHANGE `merchid` `merchid` int(11)   NULL DEFAULT 0 after `sharebtn` , 
	CHANGE `labelname` `labelname` text  COLLATE utf8_general_ci NULL after `keywords` , 
	CHANGE `bargain` `bargain` int(11)   NULL DEFAULT 0 after `cannotrefund` , 
	CHANGE `buyagain_price` `buyagain_price` decimal(10,2)   NULL DEFAULT 0.00 after `buyagain_commission` , 
	CHANGE `diypage` `diypage` int(11)   NULL after `buyagain_price` , 
	CHANGE `isendtime` `isendtime` tinyint(3)   NOT NULL DEFAULT 0 after `cashier` , 
	CHANGE `threen` `threen` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `unite_total` , 
	CHANGE `newgoods` `newgoods` tinyint(3)   NOT NULL DEFAULT 0 after `beforehours` , 
	ADD COLUMN `officthumb` varchar(512)  COLLATE utf8_general_ci NULL DEFAULT '' after `video` , 
	CHANGE `catesinit3` `catesinit3` text  COLLATE utf8_general_ci NULL after `officthumb` , 
	DROP COLUMN `taobaoid` , 
	DROP COLUMN `taotaoid` , 
	DROP COLUMN `taobaourl` , 
	DROP COLUMN `saleupdate53481` , 
	DROP COLUMN `saleupdate` , 
	DROP COLUMN `saleupdate36586` , 
	DROP COLUMN `saleupdate42392` , 
	DROP COLUMN `minpriceupdated` , 
	DROP COLUMN `saleupdate40170` , 
	DROP COLUMN `saleupdate35843` , 
	DROP COLUMN `saleupdate33219` , 
	DROP COLUMN `saleupdate32484` , 
	DROP COLUMN `saleupdate30424` , 
	DROP KEY `idx_buygroups` , 
	DROP KEY `idx_buylevels` , 
	DROP KEY `idx_showgroups` , 
	DROP KEY `idx_tcate` ;


ALTER TABLE `ims_ewei_shop_goods_group` 
	CHANGE `goodsids` `goodsids` text  COLLATE utf8_general_ci NOT NULL after `name` ;


ALTER TABLE `ims_ewei_shop_groups_category` 
	ADD KEY `idx_name`(`name`) ;


ALTER TABLE `ims_ewei_shop_groups_goods` 
	CHANGE `goodssn` `goodssn` varchar(50)  COLLATE utf8_general_ci NULL after `uniacid` , 
	CHANGE `title` `title` varchar(255)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `productsn` , 
	CHANGE `showstock` `showstock` tinyint(2)   NOT NULL after `category` , 
	CHANGE `stock` `stock` int(11)   NOT NULL DEFAULT 0 after `showstock` , 
	CHANGE `goodsnum` `goodsnum` int(11)   NOT NULL DEFAULT 1 after `groupsprice` , 
	CHANGE `purchaselimit` `purchaselimit` int(11)   NOT NULL DEFAULT 0 after `goodsnum` , 
	CHANGE `singleprice` `singleprice` decimal(10,2)   NULL DEFAULT 0.00 after `single` , 
	CHANGE `units` `units` varchar(255)  COLLATE utf8_general_ci NOT NULL DEFAULT '件' after `singleprice` , 
	CHANGE `dispatchtype` `dispatchtype` tinyint(2)   NOT NULL after `units` , 
	CHANGE `freight` `freight` decimal(10,2)   NULL DEFAULT 0.00 after `dispatchid` , 
	CHANGE `isindex` `isindex` tinyint(3)   NOT NULL DEFAULT 0 after `status` , 
	CHANGE `deleted` `deleted` tinyint(3)   NOT NULL DEFAULT 0 after `isindex` , 
	CHANGE `followurl` `followurl` varchar(255)  COLLATE utf8_general_ci NULL after `followtext` , 
	CHANGE `share_title` `share_title` varchar(255)  COLLATE utf8_general_ci NULL after `followurl` , 
	CHANGE `deduct` `deduct` decimal(10,2)   NOT NULL DEFAULT 0.00 after `share_desc` , 
	CHANGE `thumb_url` `thumb_url` text  COLLATE utf8_general_ci NULL after `deduct` , 
	CHANGE `rights` `rights` tinyint(2)   NOT NULL DEFAULT 1 after `thumb_url` , 
	CHANGE `gid` `gid` int(11)   NULL DEFAULT 0 after `rights` , 
	DROP COLUMN `ishot` , 
	ADD KEY `idx_category`(`category`) , 
	ADD KEY `idx_dispatchid`(`dispatchid`) , 
	DROP KEY `idx_istop` ;


ALTER TABLE `ims_ewei_shop_groups_order` 
	CHANGE `credit` `credit` int(11)   NULL DEFAULT 0 after `paytime` , 
	CHANGE `price` `price` decimal(11,2)   NULL DEFAULT 0.00 after `creditmoney` , 
	CHANGE `dispatchid` `dispatchid` int(11)   NULL after `pay_type` , 
	CHANGE `goodid` `goodid` int(11)   NOT NULL after `address` , 
	CHANGE `discount` `discount` decimal(10,2)   NULL DEFAULT 0.00 after `heads` , 
	CHANGE `starttime` `starttime` int(11)   NOT NULL after `discount` , 
	CHANGE `canceltime` `canceltime` int(11)   NOT NULL DEFAULT 0 after `starttime` , 
	CHANGE `endtime` `endtime` int(45)   NOT NULL after `canceltime` , 
	CHANGE `finishtime` `finishtime` int(11)   NOT NULL DEFAULT 0 after `createtime` , 
	CHANGE `success` `success` int(2)   NOT NULL DEFAULT 0 after `message` , 
	CHANGE `deleted` `deleted` int(2)   NOT NULL DEFAULT 0 after `success` , 
	DROP COLUMN `delete` , 
	ADD KEY `idx_createtime`(`createtime`) , 
	ADD KEY `idx_openid`(`openid`) , 
	ADD KEY `idx_orderno`(`orderno`) , 
	ADD KEY `idx_pay_type`(`pay_type`) , 
	ADD KEY `idx_paytime`(`paytime`) , 
	ADD KEY `idx_teamid`(`teamid`) , 
	ADD KEY `idx_uniacid`(`uniacid`) , 
	ADD KEY `idx_verifycode`(`verifycode`) ;


ALTER TABLE `ims_ewei_shop_groups_order_refund` 
	CHANGE `refundno` `refundno` varchar(45)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `orderid` , 
	CHANGE `refundaddress` `refundaddress` varchar(1000)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `refundaddressid` , 
	CHANGE `content` `content` varchar(255)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `refundaddress` , 
	CHANGE `reason` `reason` varchar(255)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `content` , 
	CHANGE `images` `images` varchar(255)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `reason` , 
	CHANGE `applytime` `applytime` varchar(45)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `images` , 
	CHANGE `reply` `reply` text  COLLATE utf8_general_ci NOT NULL after `applyprice` , 
	CHANGE `refundtype` `refundtype` varchar(45)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `reply` , 
	CHANGE `refundtime` `refundtime` varchar(45)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `rtype` , 
	CHANGE `endtime` `endtime` varchar(45)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `refundtime` , 
	CHANGE `message` `message` varchar(255)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `endtime` , 
	CHANGE `operatetime` `operatetime` varchar(45)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `message` , 
	CHANGE `realcredit` `realcredit` int(11)   NOT NULL DEFAULT 0 after `operatetime` , 
	CHANGE `realmoney` `realmoney` decimal(11,2)   NOT NULL DEFAULT 0.00 after `realcredit` , 
	CHANGE `express` `express` varchar(45)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `realmoney` , 
	CHANGE `expresscom` `expresscom` varchar(100)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `express` , 
	CHANGE `expresssn` `expresssn` varchar(45)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `expresscom` , 
	CHANGE `sendtime` `sendtime` varchar(45)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `expresssn` , 
	CHANGE `rexpress` `rexpress` varchar(45)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `returntime` , 
	CHANGE `rexpresscom` `rexpresscom` varchar(100)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `rexpress` , 
	CHANGE `rexpresssn` `rexpresssn` varchar(45)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `rexpresscom` , 
	ADD KEY `openid`(`openid`) , 
	ADD KEY `orderid`(`orderid`) , 
	ADD KEY `refundno`(`refundno`) , 
	ADD KEY `uniacid`(`uniacid`) ;


ALTER TABLE `ims_ewei_shop_groups_paylog` 
	CHANGE `fee` `fee` decimal(10,2)   NULL DEFAULT 0.00 after `creditmoney` , 
	CHANGE `card_id` `card_id` varchar(50)  COLLATE utf8_general_ci NULL DEFAULT '' after `card_type` , 
	CHANGE `card_fee` `card_fee` decimal(10,2)   NULL DEFAULT 0.00 after `card_id` , 
	CHANGE `encrypt_code` `encrypt_code` varchar(100)  COLLATE utf8_general_ci NULL DEFAULT '' after `card_fee` , 
	CHANGE `uniontid` `uniontid` varchar(50)  COLLATE utf8_general_ci NULL DEFAULT '' after `encrypt_code` ;


ALTER TABLE `ims_ewei_shop_groups_set` 
	CHANGE `followqrcode` `followqrcode` varchar(255)  COLLATE utf8_general_ci NULL after `followurl` , 
	CHANGE `groupsurl` `groupsurl` varchar(255)  COLLATE utf8_general_ci NULL after `followqrcode` , 
	CHANGE `share_url` `share_url` varchar(255)  COLLATE utf8_general_ci NULL after `share_desc` , 
	CHANGE `groups_description` `groups_description` text  COLLATE utf8_general_ci NULL after `share_url` , 
	CHANGE `creditdeduct` `creditdeduct` tinyint(2)   NOT NULL DEFAULT 0 after `description` ;


ALTER TABLE `ims_ewei_shop_lottery` 
	ADD COLUMN `award_start` int(11)   NULL DEFAULT 0 after `end_time` , 
	ADD COLUMN `award_end` int(11)   NULL DEFAULT 0 after `award_start` ;


ALTER TABLE `ims_ewei_shop_member` 
	CHANGE `content` `content` text  COLLATE utf8_general_ci NULL after `weixin` , 
	CHANGE `nickname_wechat` `nickname_wechat` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `nickname` , 
	CHANGE `credit1` `credit1` decimal(10,2)   NULL DEFAULT 0.00 after `nickname_wechat` , 
	CHANGE `diymaxcredit` `diymaxcredit` tinyint(3)   NULL DEFAULT 0 after `credit2` , 
	CHANGE `birthyear` `birthyear` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `maxcredit` , 
	CHANGE `avatar_wechat` `avatar_wechat` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `avatar` , 
	CHANGE `province` `province` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `avatar_wechat` , 
	CHANGE `agentnotupgrade` `agentnotupgrade` int(11)   NULL DEFAULT 0 after `childtime` , 
	CHANGE `inviter` `inviter` int(11)   NULL DEFAULT 0 after `agentnotupgrade` , 
	CHANGE `agentselectgoods` `agentselectgoods` tinyint(3)   NULL DEFAULT 0 after `inviter` , 
	CHANGE `username` `username` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `agentblack` , 
	CHANGE `fixagentid` `fixagentid` tinyint(3)   NULL DEFAULT 0 after `username` , 
	CHANGE `diymemberdataid` `diymemberdataid` int(11)   NULL DEFAULT 0 after `diymemberid` , 
	CHANGE `diymemberdata` `diymemberdata` text  COLLATE utf8_general_ci NULL after `diymemberdataid` , 
	CHANGE `diycommissionid` `diycommissionid` int(11)   NULL DEFAULT 0 after `diymemberdata` , 
	CHANGE `diycommissiondataid` `diycommissiondataid` int(11)   NULL DEFAULT 0 after `diycommissionid` , 
	CHANGE `diycommissiondata` `diycommissiondata` text  COLLATE utf8_general_ci NULL after `diycommissiondataid` , 
	CHANGE `isblack` `isblack` int(11)   NULL DEFAULT 0 after `diycommissiondata` , 
	CHANGE `diymemberfields` `diymemberfields` text  COLLATE utf8_general_ci NULL after `isblack` , 
	CHANGE `diycommissionfields` `diycommissionfields` text  COLLATE utf8_general_ci NULL after `diymemberfields` , 
	CHANGE `commission_total` `commission_total` decimal(10,2)   NULL DEFAULT 0.00 after `diycommissionfields` , 
	CHANGE `diyaagentid` `diyaagentid` int(11)   NULL DEFAULT 0 after `aagentnotupgrade` , 
	CHANGE `aagenttype` `aagenttype` tinyint(3)   NULL DEFAULT 0 after `diyaagentfields` , 
	CHANGE `salt` `salt` varchar(32)  COLLATE utf8_general_ci NULL after `aagentareas` , 
	CHANGE `datavalue` `datavalue` varchar(50)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `openid_wx` , 
	CHANGE `updateaddress` `updateaddress` tinyint(1)   NOT NULL DEFAULT 0 after `openid_wa` , 
	ADD COLUMN `hasnewcoupon` tinyint(1)   NULL DEFAULT 0 after `wxcardupdatetime` , 
	DROP COLUMN `commission` , 
	DROP COLUMN `commission_pay` , 
	DROP KEY `idx_groupid` , 
	ADD KEY `idx_openid_wa`(`openid_wa`) , 
	ADD KEY `idx_openid_wx`(`openid_wx`) ;


ALTER TABLE `ims_ewei_shop_member_address` 
	ADD COLUMN `lng` varchar(255)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `streetdatavalue` , 
	ADD COLUMN `lat` varchar(255)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `lng` ;


ALTER TABLE `ims_ewei_shop_member_cart` 
	CHANGE `merchid` `merchid` int(11)   NULL DEFAULT 0 after `selected` , 
	CHANGE `selectedadd` `selectedadd` tinyint(1)   NULL DEFAULT 1 after `isnewstore` ;


ALTER TABLE `ims_ewei_shop_member_group` 
	CHANGE `description` `description` varchar(255)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `groupname` ;


ALTER TABLE `ims_ewei_shop_member_level` 
	CHANGE `buygoods` `buygoods` tinyint(1)   NOT NULL DEFAULT 0 after `enabled` , 
	CHANGE `enabledadd` `enabledadd` tinyint(1)   NULL DEFAULT 0 after `goodsids` ;


ALTER TABLE `ims_ewei_shop_member_log` 
	CHANGE `transid` `transid` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `rechargetype` , 
	CHANGE `gives` `gives` decimal(10,2)   NULL after `transid` , 
	CHANGE `isborrow` `isborrow` tinyint(3)   NULL DEFAULT 0 after `couponid` , 
	CHANGE `apppay` `apppay` tinyint(3)   NOT NULL DEFAULT 0 after `borrowopenid` , 
	CHANGE `realmoney` `realmoney` decimal(10,2)   NULL DEFAULT 0.00 after `senddata` , 
	CHANGE `remark` `remark` varchar(255)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `deductionmoney` ;


ALTER TABLE `ims_ewei_shop_member_mergelog` 
	ADD COLUMN `fromuniacid` int(11)   NULL DEFAULT 0 after `detail_c` ;


ALTER TABLE `ims_ewei_shop_member_message_template_type` 
	CHANGE `typegroup` `typegroup` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `content` , 
	CHANGE `showtotaladd` `showtotaladd` tinyint(1)   NULL DEFAULT 0 after `groupname` , 
	DROP KEY `PRIMARY` ;


ALTER TABLE `ims_ewei_shop_member_printer` 
	CHANGE `merchid` `merchid` int(11)   NULL DEFAULT 0 after `uniacid` , 
	CHANGE `title` `title` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `merchid` ;


ALTER TABLE `ims_ewei_shop_member_printer_template` 
	CHANGE `merchid` `merchid` int(11)   NULL DEFAULT 0 after `uniacid` , 
	CHANGE `title` `title` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `merchid` , 
	CHANGE `goodssn` `goodssn` tinyint(1)   NOT NULL DEFAULT 0 after `createtime` ;


ALTER TABLE `ims_ewei_shop_order` 
	CHANGE `verifytime` `verifytime` int(11)   NULL DEFAULT 0 after `verifyopenid` , 
	CHANGE `verifycode` `verifycode` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `verifytime` , 
	CHANGE `verifystoreid` `verifystoreid` int(11)   NULL DEFAULT 0 after `verifycode` , 
	CHANGE `closereason` `closereason` text  COLLATE utf8_general_ci NULL after `storeid` , 
	CHANGE `printstate` `printstate` tinyint(1)   NULL DEFAULT 0 after `remarksaler` , 
	CHANGE `remarkclose` `remarkclose` text  COLLATE utf8_general_ci NULL after `refundstate` , 
	CHANGE `merchid` `merchid` int(11)   NULL DEFAULT 0 after `verifycodes` , 
	CHANGE `invoicename` `invoicename` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `merchid` , 
	CHANGE `ismerch` `ismerch` tinyint(1)   NULL DEFAULT 0 after `invoicename` , 
	CHANGE `apppay` `apppay` tinyint(3)   NOT NULL DEFAULT 0 after `borrowopenid` , 
	CHANGE `ispackage` `ispackage` tinyint(3)   NULL DEFAULT 0 after `buyagainprice` , 
	CHANGE `merchisdiscountprice` `merchisdiscountprice` decimal(10,2)   NULL DEFAULT 0.00 after `taskdiscountprice` , 
	CHANGE `seckilldiscountprice` `seckilldiscountprice` decimal(10,2)   NULL DEFAULT 0.00 after `merchisdiscountprice` , 
	CHANGE `city_express_state` `city_express_state` tinyint(1)   NOT NULL DEFAULT 0 after `print_template` , 
	ADD COLUMN `is_cashier` tinyint(3)   NOT NULL DEFAULT 0 after `city_express_state` , 
	ADD COLUMN `commissionmoney` decimal(10,2)   NULL DEFAULT 0.00 after `is_cashier` , 
	DROP COLUMN `isauthor` , 
	DROP COLUMN `authorid` ;


ALTER TABLE `ims_ewei_shop_order_goods` 
	CHANGE `diyformdata` `diyformdata` text  COLLATE utf8_general_ci NULL after `commissions` , 
	CHANGE `diyformdataid` `diyformdataid` int(11)   NULL DEFAULT 0 after `diyformfields` , 
	CHANGE `openid` `openid` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `diyformdataid` , 
	CHANGE `diyformid` `diyformid` int(11)   NULL DEFAULT 0 after `openid` , 
	CHANGE `rstate` `rstate` tinyint(3)   NULL DEFAULT 0 after `diyformid` , 
	CHANGE `printstate` `printstate` int(11)   NOT NULL DEFAULT 0 after `refundtime` , 
	CHANGE `merchid` `merchid` int(11)   NULL DEFAULT 0 after `printstate2` , 
	CHANGE `canbuyagain` `canbuyagain` tinyint(1)   NULL DEFAULT 0 after `parentorderid` , 
	CHANGE `sendtype` `sendtype` tinyint(3)   NOT NULL DEFAULT 0 after `seckill_timeid` , 
	CHANGE `ordercode` `ordercode` varchar(30)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `esheetprintnum` , 
	CHANGE `merchsale` `merchsale` tinyint(3)   NOT NULL DEFAULT 0 after `ordercode` , 
	DROP COLUMN `is_make` ;


ALTER TABLE `ims_ewei_shop_order_refund` 
	CHANGE `realprice` `realprice` decimal(10,2)   NULL DEFAULT 0.00 after `refundtype` , 
	CHANGE `refundtime` `refundtime` int(11)   NULL DEFAULT 0 after `realprice` , 
	CHANGE `orderprice` `orderprice` decimal(10,2)   NULL DEFAULT 0.00 after `refundtime` , 
	CHANGE `rexpress` `rexpress` varchar(100)  COLLATE utf8_general_ci NULL DEFAULT '' after `returntime` , 
	CHANGE `merchid` `merchid` int(11)   NULL DEFAULT 0 after `endtime` ;


ALTER TABLE `ims_ewei_shop_package` 
	ADD COLUMN `dispatchtype` tinyint(3)   NOT NULL DEFAULT 0 after `displayorder` ;


ALTER TABLE `ims_ewei_shop_payment` 
	ADD COLUMN `qpay_signtype` tinyint(1)   NOT NULL DEFAULT 0 after `alipay_sec` , 
	ADD COLUMN `app_qpay_public_key` text  COLLATE utf8_general_ci NOT NULL after `qpay_signtype` , 
	ADD COLUMN `app_qpay_private_key` text  COLLATE utf8_general_ci NOT NULL after `app_qpay_public_key` ;


ALTER TABLE `ims_ewei_shop_perm_log` 
	CHANGE `ip` `ip` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `op` , 
	CHANGE `createtime` `createtime` int(11)   NULL DEFAULT 0 after `ip` , 
	DROP KEY `idx_op` , 
	DROP KEY `idx_type` ;


ALTER TABLE `ims_ewei_shop_perm_plugin` 
	DROP KEY `idx_acid` ;


ALTER TABLE `ims_ewei_shop_perm_role` 
	CHANGE `perms2` `perms2` text  COLLATE utf8_general_ci NULL after `perms` , 
	CHANGE `deleted` `deleted` tinyint(3)   NULL DEFAULT 0 after `perms2` ;


ALTER TABLE `ims_ewei_shop_perm_user` 
	CHANGE `perms2` `perms2` text  COLLATE utf8_general_ci NULL after `perms` , 
	CHANGE `deleted` `deleted` tinyint(3)   NULL DEFAULT 0 after `perms2` , 
	CHANGE `openid` `openid` varchar(50)  COLLATE utf8_general_ci NULL after `mobile` ;


ALTER TABLE `ims_ewei_shop_plugin` 
	DROP KEY `idx_identity` ;


ALTER TABLE `ims_ewei_shop_poster` 
	CHANGE `keyword2` `keyword2` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `keyword` , 
	CHANGE `times` `times` int(11)   NULL DEFAULT 0 after `keyword2` , 
	CHANGE `resptype` `resptype` tinyint(3)   NULL DEFAULT 0 after `isdefault` , 
	CHANGE `resptitle` `resptitle` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `resptext` , 
	CHANGE `scantext` `scantext` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `recmoney` , 
	CHANGE `paytype` `paytype` tinyint(1)   NOT NULL DEFAULT 0 after `openurl` , 
	CHANGE `subpaycontent` `subpaycontent` text  COLLATE utf8_general_ci NULL after `paytype` , 
	CHANGE `templateid` `templateid` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `recpaycontent` , 
	CHANGE `entrytext` `entrytext` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `templateid` , 
	CHANGE `resptext11` `resptext11` text  COLLATE utf8_general_ci NULL after `subcouponnum` , 
	ADD COLUMN `ismembergroup` tinyint(3)   NULL DEFAULT 0 after `reward_totle` , 
	ADD COLUMN `membergroupid` int(11)   NULL DEFAULT 0 after `ismembergroup` ;


ALTER TABLE `ims_ewei_shop_poster_log` 
	DROP KEY `idx_from_openid` ;


ALTER TABLE `ims_ewei_shop_poster_qr` 
	CHANGE `posterid` `posterid` int(11)   NULL DEFAULT 0 after `qrimg` , 
	CHANGE `scenestr` `scenestr` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `posterid` , 
	DROP KEY `idx_openid` ;


ALTER TABLE `ims_ewei_shop_poster_scan` 
	DROP KEY `idx_openid` ;


ALTER TABLE `ims_ewei_shop_postera` 
	CHANGE `keyword2` `keyword2` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `keyword` , 
	CHANGE `isdefault` `isdefault` tinyint(3)   NULL DEFAULT 0 after `keyword2` , 
	CHANGE `resptype` `resptype` tinyint(3)   NULL DEFAULT 0 after `isdefault` , 
	CHANGE `resptitle` `resptitle` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `resptext` , 
	CHANGE `testflag` `testflag` tinyint(1)   NULL DEFAULT 0 after `endtext` , 
	CHANGE `reward_totle` `reward_totle` varchar(500)  COLLATE utf8_general_ci NULL DEFAULT '' after `testflag` ;


ALTER TABLE `ims_ewei_shop_postera_log` 
	DROP KEY `idx_from_openid` ;


ALTER TABLE `ims_ewei_shop_refund_address` 
	CHANGE `openid` `openid` varchar(50)  COLLATE utf8_general_ci NULL DEFAULT '0' after `uniacid` , 
	CHANGE `title` `title` varchar(20)  COLLATE utf8_general_ci NULL DEFAULT '' after `openid` , 
	CHANGE `merchid` `merchid` int(11)   NULL DEFAULT 0 after `deleted` ;


ALTER TABLE `ims_ewei_shop_seckill_task` 
	ADD COLUMN `overtimes` tinyint(2)   NULL after `createtime` ;


ALTER TABLE `ims_ewei_shop_sendticket_draw` 
	ADD KEY `cpid`(`cpid`) , 
	ADD KEY `openid`(`openid`) , 
	ADD KEY `uniacid`(`uniacid`) ;


ALTER TABLE `ims_ewei_shop_sign_user` 
	ADD COLUMN `isminiprogram` int(11)   NOT NULL DEFAULT 0 after `signdate` ;


ALTER TABLE `ims_ewei_shop_sms_set` 
	CHANGE `aliyun` `aliyun` tinyint(3)   NOT NULL DEFAULT 0 after `dayu_secret` , 
	CHANGE `emay` `emay` tinyint(3)   NOT NULL DEFAULT 0 after `aliyun_appcode` , 
	CHANGE `aliyun_new` `aliyun_new` tinyint(3)   NOT NULL DEFAULT 0 after `emay_warn_time` ;


ALTER TABLE `ims_ewei_shop_store` 
	CHANGE `type` `type` tinyint(1)   NULL DEFAULT 0 after `status` , 
	CHANGE `realname` `realname` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `type` , 
	CHANGE `logo` `logo` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `fetchtime` ;


ALTER TABLE `ims_ewei_shop_task_list` 
	ADD COLUMN `member_group` text  COLLATE utf8_general_ci NULL after `level3` , 
	ADD COLUMN `auto_pick` tinyint(1)   NOT NULL DEFAULT 0 after `member_group` , 
	ADD COLUMN `keyword_pick` varchar(20)  COLLATE utf8_general_ci NOT NULL DEFAULT '' after `auto_pick` , 
	ADD COLUMN `verb` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `keyword_pick` , 
	ADD COLUMN `unit` varchar(255)  COLLATE utf8_general_ci NULL DEFAULT '' after `verb` , 
	ADD COLUMN `member_level` int(11)   NOT NULL DEFAULT 0 after `unit` ;


ALTER TABLE `ims_ewei_shop_task_record` 
	CHANGE `auto_pick` `auto_pick` tinyint(1)   NOT NULL DEFAULT 0 after `member_group` ;


ALTER TABLE `ims_ewei_shop_task_reward` 
	CHANGE `read` `read` tinyint(1)   NOT NULL DEFAULT 0 after `level` ;


ALTER TABLE `ims_ewei_shop_task_set` 
	ADD COLUMN `top_notice` tinyint(1)   NOT NULL DEFAULT 0 after `bg_img` ;

CREATE TABLE `ims_ewei_shop_upwxapp_log`(
	`id` int(11) NOT NULL  auto_increment , 
	`uniacid` int(11) NULL  , 
	`type` tinyint(2) NULL  DEFAULT 0 , 
	`version` varchar(20) COLLATE utf8_general_ci NULL  , 
	`describe` varchar(50) COLLATE utf8_general_ci NULL  , 
	`version_time` int(11) NULL  , 
	PRIMARY KEY (`id`) 
) ENGINE=MyISAM DEFAULT CHARSET='utf8' COLLATE='utf8_general_ci';





");
        