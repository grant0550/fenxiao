<?php defined('IN_IA') or exit('Access Denied');?>
<!DOCTYPE html>
<html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title><?php  if(isset($title)) $_W['page']['title'] = $title?><?php  if(!empty($_W['page']['title'])) { ?><?php  echo $_W['page']['title'];?><?php  } ?><?php  if(empty($_W['page']['copyright']['sitename'])) { ?><?php  if(IMS_FAMILY != 'x') { ?><?php  if(!empty($_W['page']['title'])) { ?> - <?php  } ?>黑锐微鱼 - 公众平台自助引擎 -  Powered by bbs.heirui.cn<?php  } ?><?php  } else { ?><?php  if(!empty($_W['page']['title'])) { ?> - <?php  } ?><?php  echo $_W['page']['copyright']['sitename'];?><?php  } ?></title>
	<meta name="keywords" content="<?php  if(empty($_W['page']['copyright']['keywords'])) { ?><?php  if(IMS_FAMILY != 'x') { ?>黑锐微鱼,微信,微信公众平台,bbs.heirui.cn<?php  } ?><?php  } else { ?><?php  echo $_W['page']['copyright']['keywords'];?><?php  } ?>" />
	<meta name="description" content="<?php  if(empty($_W['page']['copyright']['description'])) { ?><?php  if(IMS_FAMILY != 'x') { ?>公众平台自助引擎（bbs.heirui.cn），简称黑锐微鱼，黑锐微鱼是一款免费开源的微信公众平台管理系统，是国内最完善移动网站及移动互联网技术解决方案。<?php  } ?><?php  } else { ?><?php  echo $_W['page']['copyright']['description'];?><?php  } ?>" />
	
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
        <link href="./themes/heirui_green/static/bootstrap.min.css" rel="stylesheet">
        <link href="./themes/heirui_green/static/index.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="./themes/heirui_green/static/jquery.min.js"></script>
        <script src="./themes/heirui_green/static/index.min.js"></script>
    </head>
    <body>
        <header class="fixed">
            <div class="logo">
                <img src="<?php  if(!empty($_W['setting']['copyright']['flogo'])) { ?><?php  echo tomedia($_W['setting']['copyright']['flogo'])?><?php  } else { ?>./themes/heirui_green/static/logo.png<?php  } ?>" alt="厦门道生一文化传媒有限公司互联网营销专家" class="img-responsive">
            </div>
            <strong class="words">互联网营销专家</strong>
            <nav class="menu">
                <ul class="list-inline">
                    <li class=""><a>首页</a></li>
                    <li class=""><a>业务</a></li>
                    <li class=""><a>案例</a></li>
                    <li><a>客户</a></li>
                    <li class="active"><a>技术</a></li>
                    <li class=""><a>营销</a></li>
                    <li class=""><a>关于</a></li>
                    <li class=""><a>联系</a></li>
                    <li><a href="<?php  echo url('user/login');?>">登录</a></li>
                                        <li><a href="<?php  echo url('user/register');?>">注册</a></li>
                                    </ul>
            <i class="line" style="display: inline; width: 46px; left: 822px;"></i></nav>
            <div class="hotline">
                <a href="tel:<?php  echo $copyright['phone'];?>" title="商务合作咨询热线"><span><?php  echo $copyright['phone'];?></span></a><u></u>
            </div>
            <div class="menu-icon">
                <a href="tel:<?php  echo $copyright['phone'];?>" title="点击直拨咨询热线"><span class="glyphicon glyphicon-earphone"></span></a>
                <span class="glyphicon glyphicon-th-large"></span>
            </div>
        <div class="bg"></div></header>

        <div class="welcome" style="opacity: 0; z-index: -1;"><p><u>Loading . . .</u></p></div>

        <section class="video" style="height: 916px;">
            <div class="swiper-container" style="height: 916px; cursor: -webkit-grab;">
                <div class="swiper-wrapper" style="width: 10080px; height: 916px; transform: translate3d(-1680px, 0px, 0px); transition-duration: 0s;"><div class="swiper-slide nth4 swiper-slide-duplicate" style="height: 916px; width: 1680px;">
                        <div class="box" style="margin-top: 291px;">
                            <div class="top"><span>小程序开发</span><i></i></div>
                            <div class="bottom">微信<u>小程序</u>定制<u>开发</u><br>抢占未来商机<br>布局<u>小程序</u>端口，跟上时代，步步为赢</div>
                        </div>
                    </div>
                    <div class="swiper-slide nth1 swiper-slide-visible swiper-slide-active active" style="height: 916px; width: 1680px;">
                        <div class="box" style="margin-top: 286px; width: 462px;">
                            <div class="left"></div>
                            <div class="right">
                                <span>年专注，互联网+</span><i></i>
                                <p>道生一，一生二，二生三，三生万物<br>万物互联，互联无界</p>
                            </div>
                        </div>
                    <div class="shade" style="top: -425px;"></div><div class="line"><u></u></div></div>
                    <div class="swiper-slide nth2" style="height: 916px; width: 1680px;">
                        <div class="box" style="top: 309px;">
                            <span>微信公众号定制开发</span><i></i>
                            <p>微餐饮，微小区，微商城，微电影，<br>微便民，微小店等全行业功能应有尽有</p>
                        </div>
                    <div class="shade"></div><div class="line"><u></u></div></div>
                    <div class="swiper-slide nth3" style="height: 916px; width: 1680px;">
                        <div class="box" style="margin-top: 298px;">
                            <div class="top">微信广告</div>
                            <div class="mid"></div>
                            <div class="bottom">流量就是力量，影响力就是生产力<br>朋友圈广告，按筛选条件指定地域精准投放</div>
                        </div>
                    </div>
                    <div class="swiper-slide nth4" style="height: 916px; width: 1680px;">
                        <div class="box" style="margin-top: 291px;">
                            <div class="top"><span>小程序开发</span><i></i></div>
                            <div class="bottom">微信<u>小程序</u>定制<u>开发</u><br>抢占未来商机<br>布局<u>小程序</u>端口，跟上时代，步步为赢</div>
                        </div>
                    </div>
                <div class="swiper-slide nth1 swiper-slide-duplicate active" style="height: 916px; width: 1680px;">
                        <div class="box" style="margin-top: 286px; width: 462px;">
                            <div class="left"></div>
                            <div class="right">
                                <span>年专注，互联网+</span><i></i>
                                <p>道生一，一生二，二生三，三生万物<br>万物互联，互联无界</p>
                            </div>
                        </div>
                    <div class="shade" style="top: -425px;"></div><div class="line"><u></u></div></div></div>
            </div>
            <div class="innerBox">
                <div class="news">
                    <span>NEWS :</span>
                    <a href="#" title="更多动态" class="more" target="_blank">more</a>
                    <div class="tempWrap" style="overflow:hidden; position:relative; height:20px"><ul style="top: 0px; position: relative; padding: 0px; margin: 0px;">
                        <li style="height: 20px;"><a href="#" target="_blank" title="农村电商平台上线，免开店，免注册，一键上架">农村电商平台上线，免开店，免注册</a></li>
                        <li style="height: 20px;"><a href="#" title="全网VIP电影开发完成，欢迎体验咨询">全网VIP电影开发完成，欢迎体验咨询...</a></li>
						<li style="height: 20px;"><a href="#" target="_blank" title="道生一文化传媒运营团队介绍">道生一文化传媒运营团队介绍...</a></li>

                    </ul></div>
                </div>
                <div class="guide"><a class="active"></a><a></a><a></a><a></a></div>
                <a class="movedown"></a>
            </div>
        </section>

        <section class="business active" style="height: 916px;">
            <div class="box" style="top: 278px;">
                <div class="caption">
                    <i></i><span>我们能做什么</span>
                    <br class="clear">
                </div>
                <ul class="items list-inline" style="width: 1148px;">
                    <li class="pc"><u class="cl"></u><u class="cr"></u>
                        <i></i><strong>公众号定制开发</strong>
                        <p>吸粉靠服务<br>变现靠技术</p>
                    </li>
                    <li class="mobi"><u class="cl"></u><u class="cr"></u>
                        <i></i><strong>移动网站建设</strong>
                        <p>定制手机网站 / 微网站制作<br>布局移动互联网</p>
                    </li>
                    <li class="sys"><u class="cl"></u><u class="cr"></u>
                        <i></i><strong>微信广告投放</strong>
                        <p>精准投放广告<br>效益提升看得见</p>
                    </li>
                    <li class="app"><u class="cl"></u><u class="cr"></u>
                        <i></i><strong>营销活动策划</strong>
                        <p>百场O2O活动策划经验<br>抓住热点，引爆市场</p>
                    </li>
                    <li class="host"><u class="cl"></u><u class="cr"></u>
                        <i></i><strong>小程序开发</strong>
                        <p>微信小程序<br>未来互联网大趋势</p>
                    </li>
                </ul>
            <label></label></div>
        </section>


        <section class="cases active" style="height: 916px;">
            <div class="box" style="top: 266px;">
                <div class="caption">
                    <i></i><span>案例欣赏</span>
                    <br class="clear">
                </div>
                <div class="swiper-container items">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="http://wxeae52e376a71009b.m.weimob.com/microtakeout/menu/Index/sp_id/90330/wechat_id/oA9Ozv_b69KPHBKF2HEPJ4EJ0c5I/weimob_id/a079cae0cd4596ee37acff6ed9117ac5/aid/55759259" target="_blank"><div class="shade"><u></u></div>
                                <img src="./themes/heirui_green/static/1-1504291a0160-l.jpg" alt="耀记烧味外卖系统">
                                <p>公众号开发<br><strong>耀记烧味外卖系统</strong><br>微外卖,单店版</p><div class="bg"><u></u></div></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="http://baidu.ku6.com/watch/841569258826578921.html?page=videoMultiNeed" target="_blank"><div class="shade"><u></u></div>
                                <img src="./themes/heirui_green/static/1-1504291649100-l.jpg" alt="百大万人摇一摇活动">
                                <p>O2O活动策划<br><strong>百大万人摇一摇活动</strong><br>O2O活动,微信营销</p><div class="bg"><u></u></div></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="http://55625577.m.weimob.com/vshop/index?PageId=254448" target="_blank"><div class="shade"><u></u></div>
                                <img src="./themes/heirui_green/static/1-150429164j40-l.jpg" alt="云南特汇商城">
                                <p>微网站设计<br><strong>云南特汇商城</strong><br>微商城,订单系统</p><div class="bg"><u></u></div></a>
                        </div>

                    </div>
                </div><div class="swiper-container xs">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="http://wxeae52e376a71009b.m.weimob.com/microtakeout/menu/Index/sp_id/90330/wechat_id/oA9Ozv_b69KPHBKF2HEPJ4EJ0c5I/weimob_id/a079cae0cd4596ee37acff6ed9117ac5/aid/55759259" target="_blank"><div class="shade"><u></u></div>
                                <img src="./themes/heirui_green/static/1-1504291a0160-l.jpg" alt="耀记烧味外卖系统" class="img-responsive">
                                <p>公众号开发<br><strong>耀记烧味外卖系统</strong><br>微外卖,单店版</p><div class="bg"><u></u></div></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="http://baidu.ku6.com/watch/841569258826578921.html?page=videoMultiNeed" target="_blank"><div class="shade"><u></u></div>
                                <img src="./themes/heirui_green/static/1-1504291649100-l.jpg" alt="百大万人摇一摇活动" class="img-responsive">
                                <p>O2O活动策划<br><strong>百大万人摇一摇活动</strong><br>O2O活动,微信营销</p><div class="bg"><u></u></div></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="http://55625577.m.weimob.com/vshop/index?PageId=254448" target="_blank"><div class="shade"><u></u></div>
                                <img src="./themes/heirui_green/static/1-150429164j40-l.jpg" alt="云南特汇商城" class="img-responsive">
                                <p>微网站设计<br><strong>云南特汇商城</strong><br>微商城,订单系统</p><div class="bg"><u></u></div></a>
                        </div>

                    </div>
                </div><a class="prev" href="javascript:;"></a><div class="swiper-container mini" style="cursor: -webkit-grab;">
                    <div class="swiper-wrapper" style="transition-duration: 0.3s;"><div class="swiper-slide swiper-slide-duplicate">
                            <a href="http://55625577.m.weimob.com/vshop/index?PageId=254448" target="_blank"><div class="shade"><u></u></div>
                                <img src="./themes/heirui_green/static/1-150429164j40-l.jpg" alt="云南特汇商城">
                                <p>微网站设计<br><strong>云南特汇商城</strong><br>微商城,订单系统</p><div class="bg"><u></u></div></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="http://wxeae52e376a71009b.m.weimob.com/microtakeout/menu/Index/sp_id/90330/wechat_id/oA9Ozv_b69KPHBKF2HEPJ4EJ0c5I/weimob_id/a079cae0cd4596ee37acff6ed9117ac5/aid/55759259" target="_blank"><div class="shade"><u></u></div>
                                <img src="./themes/heirui_green/static/1-1504291a0160-l.jpg" alt="耀记烧味外卖系统">
                                <p>公众号开发<br><strong>耀记烧味外卖系统</strong><br>微外卖,单店版</p><div class="bg"><u></u></div></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="http://baidu.ku6.com/watch/841569258826578921.html?page=videoMultiNeed" target="_blank"><div class="shade"><u></u></div>
                                <img src="./themes/heirui_green/static/1-1504291649100-l.jpg" alt="百大万人摇一摇活动">
                                <p>O2O活动策划<br><strong>百大万人摇一摇活动</strong><br>O2O活动,微信营销</p><div class="bg"><u></u></div></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="http://55625577.m.weimob.com/vshop/index?PageId=254448" target="_blank"><div class="shade"><u></u></div>
                                <img src="./themes/heirui_green/static/1-150429164j40-l.jpg" alt="云南特汇商城">
                                <p>微网站设计<br><strong>云南特汇商城</strong><br>微商城,订单系统</p><div class="bg"><u></u></div></a>
                        </div>

                    <div class="swiper-slide swiper-slide-duplicate">
                            <a href="http://wxeae52e376a71009b.m.weimob.com/microtakeout/menu/Index/sp_id/90330/wechat_id/oA9Ozv_b69KPHBKF2HEPJ4EJ0c5I/weimob_id/a079cae0cd4596ee37acff6ed9117ac5/aid/55759259" target="_blank"><div class="shade"><u></u></div>
                                <img src="./themes/heirui_green/static/1-1504291a0160-l.jpg" alt="耀记烧味外卖系统">
                                <p>公众号开发<br><strong>耀记烧味外卖系统</strong><br>微外卖,单店版</p><div class="bg"><u></u></div></a>
                        </div></div>
                </div><a class="next" href="javascript:;"></a>
                <!--<a href="#" title="欣赏更多案例" class="more" target="_blank">MORE</a>-->
            </div>
        </section>


        <section class="clients" style="height: 916px;">
            <div class="box" style="top: 200px;">
                <div class="caption">
                    <i></i><span>合作伙伴</span>
                    <br class="clear">
                </div>
                <ul class="items list-inline"><li class="bg all"></li><li class="bg one"></li>
                    <li class="cctv"><span>广西东宏农业科技有限公司</span></li>
                    <li class="unicom"><span>贺州靖东玻璃工艺有限公司</span></li>
                    <li class="tsinghua"><span>贺州恒洋商贸有限公司</span></li>
                    <li class="cas"><span>启德凯丽集成墙板全屋整装有限公司</span></li>
                    <li class="sipo"><span>广西昭平县合水茶叶专业合作社（思勤江茶业）</span></li>
                    <li class="apple"><span>广西优圣网络科技有限公司贺州分公司</span></li>
                    <li class="das"><span>钟山县河东商贸城艾尚美美甲店</span></li>
                    <li class="hunantv"><span>昭平壹零八美发工作室</span></li>
                    <li class="sino"><span>昭平壹零八美发工作室</span></li>
                    <li class="report"><span>广西优圣网络科技有限公司贺州分公司</span></li>
                    <li class="gedu"><span>钟山县河东商贸城艾尚美美甲店</span></li>
                    <li class="bgg"><span>京粮集团网站建设</span></li>
                    <li class="bsec"><span>北赛电工官方网站设计</span></li>
                    <li class="huadan"><span>华丹乳业官方网站建设</span></li>
                    <li class="zd"><span>中东集团网站制作</span></li>
                </ul><ul class="mini list-inline"><li class="bg all"></li><li class="bg one"></li>
                    <li class="cctv"><span>广西东宏农业科技有限公司</span></li>
                    <li class="unicom"><span>贺州靖东玻璃工艺有限公司</span></li>
                    <li class="tsinghua"><span>贺州恒洋商贸有限公司</span></li>
                    <li class="cas"><span>启德凯丽集成墙板全屋整装有限公司</span></li>
                    <li class="sipo"><span>广西昭平县合水茶叶专业合作社（思勤江茶业）</span></li>
                    <li class="apple"><span>广西优圣网络科技有限公司贺州分公司</span></li>
                    <li class="das"><span>钟山县河东商贸城艾尚美美甲店</span></li>
                    <li class="hunantv"><span>昭平壹零八美发工作室</span></li>
                    <li class="sino"><span>昭平壹零八美发工作室</span></li>
                    <li class="report"><span>广西优圣网络科技有限公司贺州分公司</span></li>
                    <li class="gedu"><span>钟山县河东商贸城艾尚美美甲店</span></li>
                    <li class="bgg"><span>京粮集团网站建设</span></li>
                    <li class="bsec"><span>北赛电工官方网站设计</span></li>
                    <li class="huadan"><span>华丹乳业官方网站建设</span></li>
                    <li class="zd"><span>中东集团网站制作</span></li>
                </ul>
            </div>
        </section>


       <section class="quality active" style="height: 916px;">
            <div class="box" style="top: 230px;">
                <div class="caption">
                    <i></i><span>你的品牌，需要装扮</span>
                    <br class="clear">
                </div>
                <div class="swiper-container items">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide nth1">
                            <ul class="list-inline" style="width: 168px;">
                                <li class="mobi"><span>公众号导航设计</span></li><li class="pad"><span>响应式平板网站建设</span></li><li class="pc"><span>响应式PC网站建设</span></li>
                            </ul>
                            <p>触及视觉灵魂的公众号内页<br>快速裂变的粉丝互动系统<br>方便快捷的订单系统<br>
                        </p></div>
                        <div class="swiper-slide nth2">
                            <ul class="list-inline" style="width: 240px;">
                                <li class="ie"><span>兼容微软IE浏览器的网页设计</span></li><li class="chrome"><span>兼容谷歌Chrome浏览器的网站设
计</span></li><li class="firefox"><span>兼容火狐Firefox浏览器的网页设计</span></li><li class="safari"><span>兼容苹果Safari浏览器的网站设计
</span></li>
                            </ul>
                            <p>Html5微官网制作<br>卓越的浏览器兼容性<br>因为高端，所以出众</p>
                        </div>
                        <div class="swiper-slide nth3">
                            <ul class="list-inline" style="width: 169px;">
                                <li class="windows"><span>跨windows平台网站制作</span></li><li class="ios"><span>跨ios平台网站制作</span></li><li class="andriod"><span>跨andriod平台网站制作</span></li>
                            </ul>
                            <p>基于 B/S 架构的网站建设<br>无障碍的跨平台应用<br>独立后台便捷管理<br>
                        </p></div>
                    </div>
                </div><a class="prev" href="javascript:;"></a><div class="swiper-container mini" style="cursor: -webkit-grab;">
                    <div class="swiper-wrapper" style="transition-duration: 0.3s;"><div class="swiper-slide nth3 swiper-slide-duplicate">
                            <ul class="list-inline" style="width: 169px;">
                                <li class="windows"><span>跨windows平台网站制作</span></li><li class="ios"><span>跨ios平台网站制作</span></li><li class="andriod"><span>跨andriod平台网站制作</span></li>
                            </ul>
                            <p>基于 B/S 架构的网站建设<br>无障碍的跨平台应用<br>独立后台便捷管理<br>
                        </p></div>
                        <div class="swiper-slide nth1">
                            <ul class="list-inline" style="width: 168px;">
                                <li class="mobi"><span>公众号导航设计</span></li><li class="pad"><span>响应式平板网站建设</span></li><li class="pc"><span>响应式PC网站建设</span></li>
                            </ul>
                            <p>触及视觉灵魂的公众号内页<br>快速裂变的粉丝互动系统<br>方便快捷的订单系统<br>
                        </p></div>
                        <div class="swiper-slide nth2">
                            <ul class="list-inline" style="width: 240px;">
                                <li class="ie"><span>兼容微软IE浏览器的网页设计</span></li><li class="chrome"><span>兼容谷歌Chrome浏览器的网站设
计</span></li><li class="firefox"><span>兼容火狐Firefox浏览器的网页设计</span></li><li class="safari"><span>兼容苹果Safari浏览器的网站设计
</span></li>
                            </ul>
                            <p>Html5微官网制作<br>卓越的浏览器兼容性<br>因为高端，所以出众</p>
                        </div>
                        <div class="swiper-slide nth3">
                            <ul class="list-inline" style="width: 169px;">
                                <li class="windows"><span>跨windows平台网站制作</span></li><li class="ios"><span>跨ios平台网站制作</span></li><li class="andriod"><span>跨andriod平台网站制作</span></li>
                            </ul>
                            <p>基于 B/S 架构的网站建设<br>无障碍的跨平台应用<br>独立后台便捷管理<br>
                        </p></div>
                    <div class="swiper-slide nth1 swiper-slide-duplicate">
                            <ul class="list-inline" style="width: 168px;">
                                <li class="mobi"><span>公众号导航设计</span></li><li class="pad"><span>响应式平板网站建设</span></li><li class="pc"><span>响应式PC网站建设</span></li>
                            </ul>
                            <p>触及视觉灵魂的公众号内页<br>快速裂变的粉丝互动系统<br>方便快捷的订单系统<br>
                        </p></div></div>
                </div><a class="next" href="javascript:;"></a>
                <a href="http://0qq0.top/" class="lookall" target="_blank">你以为看到了网站的全部？</a>
            </div>
        </section>

        <section class="marketing active" style="height: 916px;">
            <div class="box" style="top: 315px;">
                <div class="caption">
                    <i></i><span>流量就是力量</span>
                    <br class="clear">
                </div>
                <ul class="items list-inline" style="width: 1090px;">
                    <li class="se"><u class="cl"></u><u class="cr"></u>
                        <i></i><strong>搜索引擎</strong>
                        <p>SEO 优化<br>搜索引擎竞价</p>
                    </li>
                    <li class="weixin"><u class="cl"></u><u class="cr"></u>
                        <i></i><strong>微信营销</strong>
                        <p>公众账号 / 微网站<br>粉丝经济</p>
                    </li>
                    <li class="weibo"><u class="cl"></u><u class="cr"></u>
                        <i></i><strong>微博互动</strong>
                        <p>微博头条<br>官V认证，粉丝互动</p>
                    </li>
                    <li class="sms"><u class="cl"></u><u class="cr"></u>
                        <i></i><strong>广告推送</strong>
                        <p>微信图文推送<br>文内广告植入</p>
                    </li>
                    <li class="pay"><u class="cl"></u><u class="cr"></u>
                        <i></i><strong>移动支付</strong>
                        <p>微信、支付宝<br>在线便捷支付</p>
                    </li>
                    <li class="bbs"><u class="cl"></u><u class="cr"></u>
                        <i></i><strong>小程序</strong>
                        <p>无需技术<br>人人都会运营</p>
                    </li>
                </ul>
            </div>
        <div class="shade" style="height: 916px;"></div></section>


        <section class="aboutus active" style="height: 916px;">
            <ul class="menu"><li class="active">公司</li><li>媒体</li><li>招聘</li><li class="bg all" style="height: 126px;"></li><li class="bg one" style="height: 22px; top: 0px; left: 0px;"></li></ul>
            <div class="swiper-container items" style="cursor: -webkit-grab; top: 338px;">
                <div class="swiper-wrapper" style="width: 2400px; height: 240px; transform: translate3d(-480px, 0px, 0px); transition-duration: 0s;"><div class="swiper-slide nth3 swiper-slide-duplicate" style="width: 480px; height: 240px;">
                        <strong>来，征服我们</strong>
                        <ul>
                            
                            <li>网络编辑<u>-</u>视野宽，思维快，网罗天下，编织佳话。</li>
							<li>视频录音<u>-</u>懂幽默，接地气，一语惊人，笑出泪花。</li>
							<li>媒体运营<u>-</u>人脉多，资源广，运筹帷幄，营造未来。</li>
                        </ul>
                    </div>
                    <div class="swiper-slide nth1 swiper-slide-visible swiper-slide-active" style="width: 480px; height: 240px;">
                        <strong>道生一文化传媒</strong>
                        <p>道生一文化传媒成立于2016年<br>注册资金100万<br>致力于发展全行业互联网+</p>
                        <u>万物互联，互联无界</u>
                    </div>
                    <div class="swiper-slide nth2" style="width: 480px; height: 240px;">
                        <strong>来，关注我们</strong>
                        <p>贺州一二三<br>自运营贺州本地公众号<br>影响力就是生产力</p>
                        <p>搜索公众号：贺州一二三</p>
                    </div>
                    <div class="swiper-slide nth3" style="width: 480px; height: 240px;">
                        <strong>来，征服我们</strong>
                        <ul>
                            
                            <li>网络编辑<u>-</u>视野宽，思维快，网罗天下，编织佳话。</li>
							<li>视频录音<u>-</u>懂幽默，接地气，一语惊人，笑出泪花。</li>
							<li>媒体运营<u>-</u>人脉多，资源广，运筹帷幄，营造未来。</li>
                        </ul>
                    </div>
                <div class="swiper-slide nth1 swiper-slide-duplicate" style="width: 480px; height: 240px;">
                        <strong>道生一文化传媒</strong>
                        <p>道生一文化传媒成立于2016年<br>注册资金100万<br>致力于发展全行业互联网+</p>
                        <u>万物互联，互联无界</u>
                    </div></div>
            </div>
            <table class="exp">
                <tbody><tr>
                    <td><u>诚信</u>诚信赢天下</td>
                    <td><u>梦想</u>人总要有梦想</td>
                    <td><u>创新</u>不走寻常路</td>
                    <td><u>团队</u>没有完美的个人</td>
                    <td><u>执行</u>言必行，行必果</td>
                </tr>
            </tbody></table><div class="expBg"></div><div class="shade"></div>
        </section>

        <section class="contact active" style="height: 916px;">
            <div class="box" style="top: 328px;">
                <div class="above">
                    <div class="wechat"><img src="./themes/heirui_green/static/wechat_code.jpg" alt="扫描添加黑锐公众号" class="img-responsive"></div>
					<div class="left">
                        <p>联系人：<?php  echo $copyright['person'];?><br>
                            QQ：<?php  echo $copyright['qq'];?><br>
                            电话：<?php  echo $copyright['phone'];?><br>
                            公司：<?php  echo $copyright['company'];?></p>
                    </div>
                    <div class="right">
					<?php  if(empty($copyright['footerleft'])) { ?><a>Email：bbs.heirui.cn@qq.com</a><br>Copyright 2015-2017<u></u>黑锐源码社区 版权所有<br>BBS.HEIRUI.CN<br><?php  } else { ?><?php  echo $copyright['footerleft'];?><?php  } ?>
                    </div>
                </div></div>
        </section>


        <div class="dock" style="height: 296px; top: 345px;">
            <ul class="icons">
                <li class="up"><i></i></li>
                <li class="im">
                    <i></i><p>合作咨询<br>投诉建议，请点我<a href="tencent://message/?uin=1908413982&amp;Site=sc.chinaz.com&amp;Menu=yes">在线咨询</a></p>
                </li>
                <li class="tel">
                    <i></i><p>合作咨询热线：<br><?php  echo $copyright['phone'];?><br>售后服务热线：<br><?php  echo $copyright['phone'];?></p>
                </li>
                <li class="wechat">
                    <i></i><p><img src="./themes/heirui_green/static/wechat_code.jpg" alt="扫描联系商务合作微信"></p>
                </li>
                <li class="down"><i></i></li>
            </ul>
            <a class="switch"></a>
        </div>

    
</body></html>