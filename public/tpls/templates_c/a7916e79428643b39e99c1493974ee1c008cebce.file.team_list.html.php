<?php /* Smarty version Smarty-3.1.7, created on 2013-05-16 21:59:11
         compiled from "./tpls/templates\team_list.html" */ ?>
<?php /*%%SmartyHeaderCode:257955194954d21ef70-81971850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7916e79428643b39e99c1493974ee1c008cebce' => 
    array (
      0 => './tpls/templates\\team_list.html',
      1 => 1368712507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '257955194954d21ef70-81971850',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5194954d26aa3',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5194954d26aa3')) {function content_5194954d26aa3($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./assets/css/main.css" rel="stylesheet" />
<link href="./assets/css/login.css" rel="stylesheet" />
<link href="./assets/css/team_list.css" rel="stylesheet" />
<script type="text/javascript" src="./assets/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="./assets/js/team_list.js"></script>
<title>团队组织</title>
<style>
button{
	width:140px;
	height:40px;
	border:ridge;
	-webkit-border-radius:15px;
}
</style>

</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("include/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main">
	<div class="main_search">
    	<a href="team.php">
        	<div style="float:left;margin-left:130px;margin-top:25px;font-weight:bold;font-size:50px;color:rgb(102,51,102);">团队组织</div>
        </a>
        <div class="submit_search">
            <input id="submit" style="background-color:#606;color:#FFF" name="submit" class="btn btn-warning span2" onclick="searchteam()" type="submit" value="搜索" />
		</div>
		<div class="input_search">
			<input id="keyword" name="keyword" class="email" type="text" placeholder="请输入关键字" />
		</div>
	</div>
     <div class="search-result" id="result">
       	<div style="height:5px;float:left;width:100%;background-color:#333"></div>
        <div style="height:30px;float:left;width:100%;background-color:#DDD;">
        	<div style="padding-top:5px;padding-left:10px" id="result-bar"></div>
        </div>
     </div>
     <div class="teams-list" style="float:left" id="teams_list">
     </div>
     <div class="team_news" id="visualnews">
     	<!--<h3>这里是滚动新闻图片</h3>-->
        <ul class="switch" id="switch">
        <!--<li class="tn-img-t"><img src="../../assets/img/team_list/news5.jpg" /></li>,
		<li class="tn-img-t"><img src="../../assets/img/team_list/news2.jpg" /></li>,
		<li class="tn-img-t"><img src="../../assets/img/team_list/news3.jpg" /></li>,
		<li class="tn-img-t"><img src="../../assets/img/team_list/news4.jpg" /></li>,
        <div class="tn-img-t" id="t-img1"><img src="../../assets/img/team_list/news5.jpg" /></div>
        <div class="tn-img-t" id="t-img2"><img src="../../assets/img/team_list/news2.png" /></div>
        <div class="tn-img-t" id="t-img3"><img src="../../assets/img/team_list/news3.png" /></div>
        <div class="tn-img-t" id="t-img4"><img src="../../assets/img/team_list/news4.png" /></div>-->
        </ul>
        <!--<p>文化祭志愿活动现场</p>-->
        
     </div>
     <div class="dot_button" id="dot_button">
     	<div id="dot1" onclick="switchimg(1)"></div>
     	<div id="dot2" onclick="switchimg(2)"></div>
     	<div id="dot3" onclick="switchimg(3)"></div>
     	<div id="dot4" onclick="switchimg(4)"></div>
     	<div id="dot5" onclick="switchimg(5)"></div>
     </div>
     <div class="assortment" id="assortment_list">
     <!--<div style="height:5px;float:left;width:100%;background-color:#333"></div>
        <div style="height:30px;float:left;width:100%;background-color:#DDD;">
        	<div style="padding-top:5px;padding-left:10px" id="result-bar"></div>
        </div>
     </div>-->
     <div class="explore_bd" style="margin-top:20px;">
        <!--<h3>来这里发现团队家族吧</h3>-->
        <!--<ul class="team_menu">
        <li class="team_class">
        <!--<div class="department">-->
       <!-- <button type="button" onclick="somelist(1)"><div class="text">
        院系团队</div></button>
        </li>
        <li class="team_class">
         <button type="button" onclick="somelist(2)"><div class="text">
        其它团队</div></button>
        </li>
        </ul>-->
    	<div class="left-bar"></div>
        <div class="departmemt">
        	<div class="title-bar"></div>
            <span class="title-content" onclick="somelist(1)">院系团队</span>
        </div>
        <div class="center-bar"></div>
        <div class="otherts">
        	<div class="title-bar"></div>
            <span class="title-content" onclick="somelist(2)">其它团队</span>
        </div>
        <div class="right-bar"></div>
     </div>
    
     <div class="group" id="group1">
     <ul >
     <li class="explore-item">
   		<div class="pic">
        	<img src="./assets/img/team_list/mianma.jpg" class="t-portrait" id="pic1" />
        	<div class="float_state" id="float_state1">
        		团队宣言<br />
        		南京大学计算机系青协期待您的加入
        	</div>
       	</div>
   		<div class="content" >
        	<div class="title">
            		潘多拉之心
        	</div>
        	<div class="favs">
            	42个靠谱青年在此聚集<br />
            	所属院系：计算机科学与技术系
            </div>
    	</div>
     </li>
      <li class="explore-item">
   		 <div class="pic">
        <a href="http://www.douban.com/group/classicreading/" >
        <img src="./assets/img/team_list/mianma.jpg" class="t-portrait" id="pic2">
        </a>
        
        <div class="float_state" id="float_state2">
        星级：五星<br />
        我们：为人！为自然！
        </div>
    	</div>
   		<div class="content">
        	<div class="title">
            <a href="http://www.douban.com/group/classicreading/">
            秋日私语
            </a>
        	</div>
        	<div class="favs">
            42个靠谱青年在此聚集<br />
            所属院系：生命科学学院
            </div>
    	</div>
     </li>
     <li class="explore-item">
   		 <div class="pic">
        <a href="http://www.douban.com/group/classicreading/">
        <img src="./assets/img/team_list/mianma.jpg" class="t-portrait" id="pic3" >
        </a>
         <div class="float_state" id="float_state3">
        星级：五星<br />
        我们需要最纯粹的动机.! 踏实地做最基础的山村教育！
        </div>
    	</div>
   		<div class="content" >
        	<div class="title">
            <a href="http://www.douban.com/group/classicreading/">
            名字一定要凑够十个字
            </a>
        	</div>
        	<div class="favs">
            42个靠谱青年在此聚集<br />
            所属院系：商院会计系
            </div>
    	</div>
     </li>
    </ul>
    </div>
    <div class="group" id="group2">
     <ul >
     <li>
     	<div class="explore-item">
   		 <div class="pic">
        <a href="http://www.douban.com/group/classicreading/">
        <img src="./assets/img/team_list/mianma.jpg" class="t-portrait" id="pic4">
        </a>
        <div class="float_state" id="float_state4">
        星级：五星<br />
        让更多的人去帮助更多的人! "在今天所谓的慈善事业中所花费的每一千美元里，恐怕有九百五十美元花得不恰当。
        </div>
       	</div>
   		<div class="content" >
        	<div class="title">
            <a href="http://www.douban.com/group/classicreading/">
            慈善救济同好会
            </a>
        	</div>
        	<div class="favs">
            42个靠谱青年在此聚集<br />
            所属组织:南大慈善救济中心
            </div>
    	</div>
	   </div> 
     </li>
      <li>
     	<div class="explore-item">
   		 <div class="pic">
        <a href="http://www.douban.com/group/classicreading/" >
        <img src="./assets/img/team_list/mianma.jpg" class="t-portrait" id="pic5">
        </a>
        
        <div class="float_state" id="float_state5">
        星级：五星<br />
        你的一小步，是让世界更美好的一大步。
        </div>
    	</div>
   		<div class="content">
        	<div class="title">
            <a href="http://www.douban.com/group/classicreading/">
            大手拉小手
            </a>
        	</div>
        	<div class="favs">
            42个靠谱青年在此聚集<br />
            所属组织:南大青协
            </div>
    	</div>
	   </div>
     </li>
     <li>
     	<div class="explore-item">
   		 <div class="pic">
        <a href="http://www.douban.com/group/classicreading/">
        <img src="./assets/img/team_list/mianma.jpg" class="t-portrait" id="pic6" >
        </a>
         <div class="float_state" id="float_state6">
        星级：五星<br />
        创建最美丽的城市地铁服务！
        </div>
    	</div>
   		<div class="content" >
        	<div class="title">
            <a href="http://www.douban.com/group/classicreading/">
            地铁服务xx
            </a>
        	</div>
        	<div class="favs">
            42个靠谱青年在此聚集<br />
            所属组织：南大青协
            </div>
    	</div>
	   </div>
     </li>
     <li>
     	<div class="explore-item">
   		 <div class="pic">
        <a href="http://www.douban.com/group/classicreading/">
        <img src="./assets/img/team_list/mianma.jpg" class="t-portrait" id="pic7" >
        </a>
         <div class="float_state" id="float_state7">
        星级：五星<br />
       	愿这绵薄之力感动校园
        </div>
    	</div>
   		<div class="content" >
        	<div class="title">
            <a href="http://www.douban.com/group/classicreading/">
            和谐校园
            </a>
        	</div>
        	<div class="favs">
            42个靠谱青年在此聚集<br />
            所属组织：南大青协
            </div>
    	</div>
	   </div>
     </li>
      <li>
     	<div class="explore-item">
   		 <div class="pic">
        <a href="http://www.douban.com/group/classicreading/">
        <img src="./assets/img/team_list/mianma.jpg" class="t-portrait" id="pic8" >
        </a>
         <div class="float_state" id="float_state8">
        星级：五星<br />
        爱自然，更爱孩子
        </div>
    	</div>
   		<div class="content" >
        	<div class="title">
            <a href="http://www.douban.com/group/classicreading/">
            守护小阿甘
            </a>
        	</div>
        	<div class="favs">
            42个靠谱青年在此聚集<br />
            所属组织：南大青协
            </div>
    	</div>
	   </div>
     </li>
      <li>
     	<div class="explore-item">
   		 <div class="pic">
        <a href="http://www.douban.com/group/classicreading/">
        <img src="./assets/img/team_list/mianma.jpg" class="t-portrait" id="pic9" >
        </a>
         <div class="float_state" id="float_state9">
        星级：五星<br />
        它们游走于这个城市，居无定所。 它们只想有个温暖的家，有干净的水和食物。 不必躲避坏孩子的弹弓，不必躲避城管的追杀
        </div>
    	</div>
   		<div class="content" >
        	<div class="title">
            <a href="http://www.douban.com/group/classicreading/">
            流浪猫狗救助站
            </a>
        	</div>
        	<div class="favs">
            42个靠谱青年在此聚集<br />
            所属组织：南大青协
            </div>
    	</div>
	   </div>
     </li>
    </ul>
    </div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>