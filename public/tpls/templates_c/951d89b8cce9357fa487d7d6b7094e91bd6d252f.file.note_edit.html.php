<?php /* Smarty version Smarty-3.1.7, created on 2013-05-17 15:45:00
         compiled from "../tpls/templates\include\note_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:298735194d553c1bf74-00466319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '951d89b8cce9357fa487d7d6b7094e91bd6d252f' => 
    array (
      0 => '../tpls/templates\\include\\note_edit.html',
      1 => 1368766826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298735194d553c1bf74-00466319',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5194d553c4f42',
  'variables' => 
  array (
    'team_list' => 0,
    'mem_list' => 0,
    'act_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5194d553c4f42')) {function content_5194d553c4f42($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\apache\\htdocs\\NjuVolunteer\\Smarty\\libs\\plugins\\modifier.truncate.php';
?>

<div id="" class="" style="margin:0 20px 20px;">
	


<table>
	<tr>
		<th style="text-align:right">主题</th>
		<td style="text-align:left">
			<input type="text" id="note_edit_topic" />
		</td>
	</tr><!-- white-space:nowrap;  -->
	<tr>
		<th style="text-align:right">接收者</th>
		<td style="text-align:left">
			<!-- <span class="">选择</span> -->
			<div id="" class="">
				<!-- 这里放选择的接收者 -->
				<div id="note_recv_list" class="note_recv_list"> </div>
				<span id="switch_note_recv_list_div" class="" onclick="switch_note_recv_list_div(this);">展开</span>
				<div id="note_recv_list_div" class="" style="display:none">
					<hr style="border:1px gray solid;" />
					<div class="">系统管理员、院系或组织：</div>
					<div id="note_recv_team_list" class="note_recv">
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['team_index'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['name'] = 'team_index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['team_list']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['team_index']['total']);
?>
							<div class="receiver-card" uid="<?php echo $_smarty_tpl->tpl_vars['team_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['team_index']['index']]['id'];?>
" sid="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['team_index']['iteration'];?>
">
								<span class="note_recv_name" ><?php echo $_smarty_tpl->tpl_vars['team_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['team_index']['index']]['name'];?>
</span>
								<img class="img_note_del" gid="1"   id="img_note_del_<?php echo $_smarty_tpl->tpl_vars['team_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['team_index']['index']]['id'];?>
" sid="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['team_index']['iteration'];?>
" onclick="note_recv_button(this);" src="./assets/img/zonet/recv_add.jpg" title="添加到接收者列表"/>
							</div>
						<?php endfor; endif; ?>
					</div>

					<hr style="border:1px gray dashed;"/>
					<input type="checkbox" value="全选" title="全选" id="zt_elem_note_select_mem" gid="3"  onclick="nt_func_note_select_all_mem(this);"/>
					<span class="">成员：</span>
					<div id="note_recv_mem_list" class="note_recv">
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['name'] = 'mem_index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['mem_list']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['mem_index']['total']);
?>
							<div class="receiver-card" uid="<?php echo $_smarty_tpl->tpl_vars['mem_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mem_index']['index']]['id'];?>
" sid="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['mem_index']['iteration'];?>
">
								<span class="note_recv_name" ><?php echo $_smarty_tpl->tpl_vars['mem_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mem_index']['index']]['name'];?>
</span>
								<img class="img_note_del" gid="3"   id="img_note_del_<?php echo $_smarty_tpl->tpl_vars['mem_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mem_index']['index']]['id'];?>
" sid="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['mem_index']['iteration'];?>
" onclick="note_recv_button(this);" src="./assets/img/zonet/recv_add.jpg" title="添加到接收者列表"/>
							</div>
						<?php endfor; endif; ?>
					</div>


					<hr style="border:1px gray dashed;"/>
					<input type="checkbox" value="全选" title="全选" gid="2" id="zt_elem_note_select_all_act_part" onclick="nt_func_note_select_all_act_part(this);"/>
					<span class="">
						活动
						<select name="note_recv_act_select" id="note_recv_act_select">
							<option value="-1" selected="selected">请选择</option>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['act_index'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['name'] = 'act_index';
$_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['act_list']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['act_index']['total']);
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['id'];?>
" ><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['act_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['act_index']['index']]['name'],27,"……",true);?>
</option>
							<?php endfor; endif; ?>
						</select>
						中的志愿者：
					</span>
					<div id="note_recv_vol_list" class="note_recv"> </div>
				</div>
			</div>
		</td>
	</tr>
	<tr>
		<th style="text-align:right">内容</th>
		<td style="text-align:left">
			<textarea name="" rows="5" cols="70" id="note_edit_content"></textarea>
		</td>
	</tr>
</table>

<input type="button" class="button" value="发送"  onclick="nt_func_note_send()"/>
















</div><?php }} ?>