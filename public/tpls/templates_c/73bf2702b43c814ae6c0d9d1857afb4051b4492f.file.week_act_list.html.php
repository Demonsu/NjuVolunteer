<?php /* Smarty version Smarty-3.1.7, created on 2013-06-01 13:24:22
         compiled from "../tpls/templates\handle\week_act_list.html" */ ?>
<?php /*%%SmartyHeaderCode:554251a985867533c7-61764176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73bf2702b43c814ae6c0d9d1857afb4051b4492f' => 
    array (
      0 => '../tpls/templates\\handle\\week_act_list.html',
      1 => 1369666732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '554251a985867533c7-61764176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'retlist' => 0,
    'weekact' => 0,
    'week_day_act' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_51a985868240b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a985868240b')) {function content_51a985868240b($_smarty_tpl) {?><div class="title">
   <div class="hotact-left"></div>
    <h3 style="float:left;font-size:24px;padding-top:10px;color:rgb(102,51,102)">本周活动</h3>
    <div class="hotact-right"></div>
</div>
<div style="padding-top:3px;padding-bottom:3px;background-color:#333"></div>
<div class="weekdate-cover">
	<div class="weekdate" id="day1"></div>
    <div class="weekdate" id="day2"></div>
    <div class="weekdate" id="day3"></div>
    <div class="weekdate" id="day4"></div>
    <div class="weekdate" id="day5"></div>
    <div class="weekdate" id="day6"></div>
    <div class="weekdate" id="day7"></div>
</div>
<?php  $_smarty_tpl->tpl_vars['weekact'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['weekact']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['retlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['weekact']->key => $_smarty_tpl->tpl_vars['weekact']->value){
$_smarty_tpl->tpl_vars['weekact']->_loop = true;
?>

<div class="weeka">
	<?php  $_smarty_tpl->tpl_vars['week_day_act'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['week_day_act']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['weekact']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['week_day_act']->key => $_smarty_tpl->tpl_vars['week_day_act']->value){
$_smarty_tpl->tpl_vars['week_day_act']->_loop = true;
?>
    <div style="width:120px;height:2px;background:#666;float:left"></div>
    <div class="act-content">
    	
        <a href="act_dtl.php? act_id=<?php echo $_smarty_tpl->tpl_vars['week_day_act']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['week_day_act']->value['name'];?>
</a>
        </br>
        <?php if (isset($_smarty_tpl->tpl_vars['week_day_act']->value['detail_time'])){?>
        <span>时间:<?php echo $_smarty_tpl->tpl_vars['week_day_act']->value['detail_time'];?>
</span>
        <?php }?>
        </br>
        <?php if (isset($_smarty_tpl->tpl_vars['week_day_act']->value['deadline'])){?>
        <span>报名截止:<?php echo $_smarty_tpl->tpl_vars['week_day_act']->value['deadline'];?>
</span>
        <?php }?>
    </div>
    
   	<?php } ?>
</div>
<?php } ?>

<?php }} ?>