<?php /* Smarty version Smarty-3.1.7, created on 2013-05-20 14:18:04
         compiled from "../tpls/templates\include\statistics.html" */ ?>
<?php /*%%SmartyHeaderCode:124565199c01c9d3a00-44537988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a5264f7af42b008a9d5b23781f82b0f6dd82d6e' => 
    array (
      0 => '../tpls/templates\\include\\statistics.html',
      1 => 1368891428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124565199c01c9d3a00-44537988',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total_visits' => 0,
    'total_volunteers' => 0,
    'total_teams' => 0,
    'total_activities' => 0,
    'total_peron_times' => 0,
    'total_hours' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5199c01ca93f7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5199c01ca93f7')) {function content_5199c01ca93f7($_smarty_tpl) {?><h2 style="font-size:24px;margin:10px; line-height:30px">本网站累计已有<span class="digital"><?php echo $_smarty_tpl->tpl_vars['total_visits']->value;?>
</span>人次访问，注册志愿者达<span class="digital"><?php echo $_smarty_tpl->tpl_vars['total_volunteers']->value;?>
</span>人，<span class="digital"><?php echo $_smarty_tpl->tpl_vars['total_teams']->value;?>
</span>个团队在系统中备案，举办志愿活动<span class="digital"><?php echo $_smarty_tpl->tpl_vars['total_activities']->value;?>
</span>个，累计志愿服务<span class="digital"><?php echo $_smarty_tpl->tpl_vars['total_peron_times']->value;?>
</span>人次，服务时间<span class="digital"><?php echo $_smarty_tpl->tpl_vars['total_hours']->value;?>
</span>小时。</h2><?php }} ?>