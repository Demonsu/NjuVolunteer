<?php /* Smarty version Smarty-3.1.7, created on 2013-05-18 23:00:57
         compiled from "./tpls/templates\act.html" */ ?>
<?php /*%%SmartyHeaderCode:122115197715b893666-11506394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f953ae4134724fc8e1e51861dc90910c96308d5b' => 
    array (
      0 => './tpls/templates\\act.html',
      1 => 1368889254,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122115197715b893666-11506394',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5197715b90476',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5197715b90476')) {function content_5197715b90476($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./assets/css/main.css" rel="stylesheet" />
<link href="./assets/css/login.css" rel="stylesheet" />
<link href="./assets/css/act_srh.css" rel="stylesheet" />
<link href="./assets/css/act.css" rel="stylesheet" />
<script type="text/javascript" src="./assets/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="./assets/js/act.js"></script>
<title>活动中心</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
	<div class="main_search">
    	<a href="act.php">
        	<div style="float:left;margin-left:110px;margin-top:25px;font-weight:bold;font-size:50px;color:#606;">活动中心</div>
        </a>
        <div class="submit_search">
			<input id="submit" style="background-color:#606;color:#FFF" name="submit" class="btn btn-warning span2" onclick="searchit()" type="submit" value="搜索" />
		</div>
		<div class="input_search" >
			<input id="keyword" name="keyword" class="email" type="text" placeholder="请输入关键字" />
		</div>
		
	</div>
    <hr />
    <div class="search-result" id="result">
        <div style="height:5px;float:left;width:100%;background-color:#333"></div>
        <div style="height:30px;float:left;width:100%;background-color:#DDD;">
        	<div style="padding-top:5px;padding-left:10px" id="result-bar"></div>
        </div>
        <div class="type">
            <div class="type-title">时间类型:</div>
            <a class="type-list" href="javascript:searchtimetype(0)" id="t0">全部活动</a>
            <a class="type-list" href="javascript:searchtimetype(1)" id="t1">长期活动</a>
            <a class="type-list" href="javascript:searchtimetype(2)" id="t2">临时活动</a>
        </div>
        <div class="type">
            <div class="type-title">服务类型:</div>
            <a class="type-list" href="javascript:searchattributiontype(0)" id="a0">全部类型</a>
            <a class="type-list" href="javascript:searchattributiontype(1)" id="a1">扶老</a>
            <a class="type-list" href="javascript:searchattributiontype(2)" id="a2">支教</a>
            <a class="type-list" href="javascript:searchattributiontype(3)" id="a3">助残</a>
            <a class="type-list" href="javascript:searchattributiontype(4)" id="a4">校园</a>
            <a class="type-list" href="javascript:searchattributiontype(5)" id="a5">大型赛会</a>
            <a class="type-list" href="javascript:searchattributiontype(6)" id="a6">其他</a>
        </div>
        <div class="type">
            <div class="type-title">时间限制:</div>
            <a class="type-list" href="javascript:searchtimelimit(0)" id="l0">全周</a>
            <a class="type-list" href="javascript:searchtimelimit(1)" id="l1">周一</a>
            <a class="type-list" href="javascript:searchtimelimit(2)" id="l2">周二</a>
            <a class="type-list" href="javascript:searchtimelimit(3)" id="l3">周三</a>
            <a class="type-list" href="javascript:searchtimelimit(4)" id="l4">周四</a>
            <a class="type-list" href="javascript:searchtimelimit(5)" id="l5">周五</a>
            <a class="type-list" href="javascript:searchtimelimit(6)" id="l6">周六</a>
            <a class="type-list" href="javascript:searchtimelimit(7)" id="l7">周日</a>
        </div>
        <div class="type">
            <div class="type-title">活动状态:</div>
            <a class="type-list" href="javascript:searchactstate(0)" id="s0">所有状态</a>
            <a class="type-list" href="javascript:searchactstate(1)" id="s1">正在招募</a>
            <a class="type-list" href="javascript:searchactstate(2)" id="s2">已结束</a>
            <a class="type-list" href="javascript:searchactstate(3)" id="s3">进行中</a>
        </div>
        <div style="margin-top:10px;height:5px;float:left;width:100%;background-color:#333"></div>
        <div style="height:30px;width:100%;background-color:#CCC;float:left"></div>
        <div class="act-list" style="float:left" id="act_list">
        </div>
    </div>
    <div id="hotact">
        <div class="hotact">
            <div class="pageup" id="slideleft"><img src="./assets/img/activity_center/left.gif" /></div>
            <div class="switchtable">
                <ul class="switch" id="switch">
                    
                </ul>
            </div>
            <div class="pagedown" id="slideright"><img src="./assets/img/activity_center/right.gif" /></div>
        </div>
        <div class="hotact2">
            <div class="title">
                <div class="hotact-left"></div>
                <h3 style="float:left;font-size:24px;padding-top:10px;color:rgb(102,51,102)">人气活动</h3>
                <div class="hotact-right"></div>
            </div>
            <div class="hottable">
            	<div class="hot-cover1"></div>
                <div class="hot-cover2"></div>
                <ul class="hotlist" id="hotlist">
                <div id="hotlist1">
                    <li class="hot">
                    	<img src="./assets/img/activity_center/1.jpg" width=170px/>
                        <div class="img-bar">仙林中学支教<br />时间：每周日<br />所属团队：南大青协</div></li>
                    <li class="hot">
                    	<img src="./assets/img/activity_center/2.jpg" width=170px/>
                        <div class="img-bar">宁工小学家教<br />时间：每周六<br />所属团队：计算机系青协</div></li>
                    <li class="hot">
                    	<img src="./assets/img/activity_center/3.jpg" width=170px/>
                        <div class="img-bar">爱德基金会活水行<br />时间：3月15日<br />所属团队：南大青协</div></li>
                    <li class="hot">
                    	<img src="./assets/img/activity_center/4.jpg" width=170px/>
                        <div class="img-bar">博爱智障儿童陪护<br />时间：4月12日<br />所属团队：南大青协</div></li>
                    <li class="hot">
                    	<img src="./assets/img/activity_center/5.jpg" width=170px/>
                        <div class="img-bar">云锦博物馆义务讲解员<br />时间：每周三、周五<br />所属团队：计算机系青协</div></li>
                </div>
                <div id="hotlist2">
                    <li class="hot">
                    	<img src="./assets/img/activity_center/6.jpg" width=170px/>
                        <div class="img-bar">城市义工岗<br />时间：任意时间<br />所属团队：南大青协</div></li>
                    <li class="hot">
                    	<img src="./assets/img/activity_center/7.jpg" width=170px/>
                        <div class="img-bar">佛缘会<br />时间：5月1日<br />所属团队：南大青协</div></li>
                    <li class="hot">
                    	<img src="./assets/img/activity_center/8.jpg" width=170px/>
                        <div class="img-bar">明心幼儿园<br />时间：周六、周日<br />所属团队：计算机系青协</div></li>
                    <li class="hot">
                    	<img src="./assets/img/activity_center/9.jpg" width=170px/>
                        <div class="img-bar">雨花台区学雷锋志愿活动<br />时间：3月15日<br />所属团队：文学院青协</div></li>
                    <li class="hot">
                    	<img src="./assets/img/activity_center/0.jpg" width=170px/>
                        <div class="img-bar">关爱农民工志愿服务<br />时间：6月12日<br />所属团队：计算机系青协</div></li>
                </div>
                </ul>
            </div>
        </div>
        <div class="weekact" id="weekact_list" style="display:none"></div>
        <div class="weekact" id="weekact" style="display:block">
            <div class="title">
                <div class="hotact-left"></div>
                <h3 style="float:left;font-size:24px;padding-top:10px; color:rgb(102,51,102)">本周活动</h3>
                <div class="hotact-right"></div>
                </ul>
            </div>
            <div style="padding-top:3px;padding-bottom:3px;background-color:#333"></div>
            <div class="weeka">
                <div class="weekdate" id="day1"></div>
                <div class="act-content" id="act_day11"></div>
                <div class="act-content" id="act_day12"></div>
            </div>
            <div class="weeka">
                <div class="weekdate" id="day2"></div>
                <div class="act-content" id="act_day21"></div>
                <div class="act-content" id="act_day22"></div>
            </div>
            <div class="weeka">
                <div class="weekdate" id="day3"></div>
                <div class="act-content" id="act_day31"></div>
                <div class="act-content" id="act_day32"></div>
            </div>
            <div class="weeka">
                <div class="weekdate" id="day4"></div>
                <div class="act-content" id="act_day41"></div>
                <div class="act-content" id="act_day42"></div>
            </div>
            <div class="weeka">
                <div class="weekdate" id="day5"></div>
                <div class="act-content" id="act_day51"></div>
                <div class="act-content" id="act_day52"></div>
            </div>
            <div class="weeka">
                <div class="weekdate" id="day6"></div>
                <div class="act-content" id="act_day61"></div>
                <div class="act-content" id="act_day62"></div>
            </div>
            <div class="weeka" style="margin-right:0px">
                <div class="weekdate" id="day7"></div>
                <div class="act-content" id="act_day71"></div>
                <div class="act-content" id="act_day72"></div>
            </div>
        </div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>