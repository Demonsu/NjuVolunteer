<?php /* Smarty version Smarty-3.1.7, created on 2014-03-18 08:33:37
         compiled from "./tpls/templates\include\header.html" */ ?>
<?php /*%%SmartyHeaderCode:100425327f6d1bb5b36-90472879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1048da3ca248985a74c0290df8746b95cbab34f3' => 
    array (
      0 => './tpls/templates\\include\\header.html',
      1 => 1394867784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100425327f6d1bb5b36-90472879',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_permission' => 0,
    'user_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5327f6d220550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5327f6d220550')) {function content_5327f6d220550($_smarty_tpl) {?><div class="logo"><img src="./assets/img/header/logo.png" width="160px"/></div>
<div class="header-border-down"></div>
<div class="header">
	<div class="header_content">
		<div style="width:176px;height:50px;float:left;background-color:rgb(225,225,225)"></div>
		<div  class="main_menu">
			<ul>
				<li><a href="./index.php">首&nbsp;&nbsp;&nbsp;&nbsp;页</a></li>
				<li><a href="./act.php">活动中心</a></li>
					
					<?php if (isset($_smarty_tpl->tpl_vars['user_permission']->value)){?>
						<?php if ($_smarty_tpl->tpl_vars['user_permission']->value==1){?>
							<li><a href="./zonev.php">个人空间</a></li>
						<?php }elseif($_smarty_tpl->tpl_vars['user_permission']->value==2){?>
							<li><a href="./zonet.php">团队空间</a></li>
						<?php }?>
					<?php }?>
				<!--<li><a href="./news.php">新闻广场</a></li>-->
				<li><a href="./team_list.php">团队组织</a></li>
			</ul>
		</div>
		<div  class="welcome_bar">
			<?php if (isset($_smarty_tpl->tpl_vars['user_permission']->value)&&$_smarty_tpl->tpl_vars['user_permission']->value>0&&isset($_smarty_tpl->tpl_vars['user_name']->value)){?>
				您好，
				<?php if ($_smarty_tpl->tpl_vars['user_permission']->value<2){?>
					<a href="./zonev.php">
				<?php }elseif($_smarty_tpl->tpl_vars['user_permission']->value==2){?>
					<a href="./zonet.php">
				<?php }elseif($_smarty_tpl->tpl_vars['user_permission']->value==3){?>
					<a href="./super_admin.php">
				<?php }?>
				<?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</a>！
				&nbsp;&nbsp;
				<?php if ($_smarty_tpl->tpl_vars['user_permission']->value<2){?>
					<a href="./handle/logout.php"  id="logout_button">退出</a>
					<script language="javascript">
					<!--
					document.getElementById("logout_button").href = "../../login/logout.php?link="+ window.location.href;
					//-->
					</script>
				<?php }else{ ?>
					<a href="./handle/logout.php" >退出</a>
				<?php }?>
			<?php }else{ ?>
				<!--<a onclick="showit()" id="login_button">登录</a>-->
				<a href="../../login/login.php" id="login_button">个人登录</a>&nbsp;&nbsp;
				<a onclick="showit()" style="cursor: pointer" >团队登录</a>
				<script language="javascript">
				<!--
				document.getElementById("login_button").href = "../../login/login.php?link="+ window.location.href;
				//-->
				</script>
			<?php }?>
		</div>
	</div>
</div>
<div class="changelanguage">
<div style="float:right"><a href="#" style="color:black">中文</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#" style="color:black">English</a></div>
</div>
 <?php echo $_smarty_tpl->getSubTemplate ("include/login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
<div class="backdrop" id="backdrop" onclick="hideit()">
</div>
<div id="loading-bar">
	<div class="loading-cover"></div>
	<div class="loading-pic"><img src="./assets/img/loading/loading.gif"/></div>
</div>
<script type="text/javascript">
var flag=0;
var temp=0;
$(document).ready(function(){
	$("#loginModal").hide();	
});
function showit(){
	if (flag==0)
	{
		if(temp==0){
			temp=1;
			$("#loginModal").show();
			document.getElementById('backdrop').style.display="block";
			$("#backdrop").animate({opacity:'0.8'},'fast');
			setTimeout("$('#loginModal').animate({top:'130px'})",100);
			//$('#login_button').text('返回');
			flag=1;
			setTimeout("temp=0",600);
			$("#login_id").focus();
		}
	}/*else
	{
		if(temp==0){
			temp=1;
			$('#loginModal').animate({top:'-500px'});
			setTimeout("$('#backdrop').animate({opacity:'0'})",300);
			setTimeout("document.getElementById('backdrop').style.display='none'",500);
			$('#login_button').text('登录');
			flag=0;
			setTimeout("temp=0",600);
		}
	}*/
}
function hideit(){
	if(temp==0){
		temp=1;
		$('#loginModal').animate({top:'-500px'});
		setTimeout("$('#backdrop').animate({opacity:'0'})",300);
		setTimeout("document.getElementById('backdrop').style.display='none'",500);
		//$('#login_button').text('登录');
		flag=0;
		setTimeout("temp=0",600);
	}
}
function loginR(){
	var id = $("#login_id").val();
	var psd = $("#login_password").val();
	alert( id+","+psd );
	$.ajax( {
		type:"POST",
		url:"./handle/login.php",
		data:{ user:id, password:psd },
		success:function(html){
			if( html == 1 ){
				window.open( "./zonev.php" );
			} else if ( html == 2 ) {
				window.open( "./zonet.php", "团队空间",  "toolbar=yes,menubar=yes");
			} else if ( html == 3 ) {
				window.open( "./super_admin.php" );
			} else {
				alert( html );
			}
		}
	} );
}
</script><?php }} ?>