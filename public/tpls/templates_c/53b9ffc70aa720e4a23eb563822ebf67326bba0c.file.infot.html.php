<?php /* Smarty version Smarty-3.1.7, created on 2013-05-17 22:08:58
         compiled from "../tpls/templates\include\infot.html" */ ?>
<?php /*%%SmartyHeaderCode:13060519639fa6c02c5-33290396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53b9ffc70aa720e4a23eb563822ebf67326bba0c' => 
    array (
      0 => '../tpls/templates\\include\\infot.html',
      1 => 1368739309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13060519639fa6c02c5-33290396',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_519639fa734ce',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_519639fa734ce')) {function content_519639fa734ce($_smarty_tpl) {?>


<div id="" class="" style="margin: 0px 20px 20px">
	<table>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['info_index'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['name'] = 'info_index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['info_list']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['info_index']['total']);
?>
			<tr>
				<th><?php echo $_smarty_tpl->tpl_vars['info_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['info_index']['index']]['name'];?>
</th>
				<td><?php echo $_smarty_tpl->tpl_vars['info_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['info_index']['index']]['value'];?>
</td>
			</tr>
		<?php endfor; endif; ?>
	</table>
</div><?php }} ?>