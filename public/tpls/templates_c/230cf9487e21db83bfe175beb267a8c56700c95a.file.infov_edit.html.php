<?php /* Smarty version Smarty-3.1.7, created on 2013-05-12 21:06:26
         compiled from "../tpls/templates\include\infov_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:11240518ba78624bfd2-16047941%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '230cf9487e21db83bfe175beb267a8c56700c95a' => 
    array (
      0 => '../tpls/templates\\include\\infov_edit.html',
      1 => 1368355156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11240518ba78624bfd2-16047941',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_518ba7862c079',
  'variables' => 
  array (
    'name' => 0,
    'stu_no' => 0,
    'idcard_num' => 0,
    'gender' => 0,
    'email' => 0,
    'phone' => 0,
    'faculty' => 0,
    'department' => 0,
    'birthday' => 0,
    'politics_status' => 0,
    'nation' => 0,
    'cloth_size' => 0,
    'dormitory' => 0,
    'cet4' => 0,
    'cet6' => 0,
    'language' => 0,
    'level' => 0,
    'medical' => 0,
    'drive' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518ba7862c079')) {function content_518ba7862c079($_smarty_tpl) {?><style>
table td{
	text-align:left;
}
</style>
<div id="" style="margin-bottom:20px;">
    
    <div id="base">
    <div>
    	<div class="left-bar"></div>
    	<div class="base-info">基本资料</div>
    	<div class="right-bar"></div>
	</div>
<table width="200" border="1">
  <tr>
    <th scope="row">姓名</th>
    <td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
    <td></td>
  </tr>
  <tr>
    <th scope="row">学号</th>
    <td><?php echo $_smarty_tpl->tpl_vars['stu_no']->value;?>
</td>
    <td></td>
  </tr>
  <tr>
    <th scope="row">身份证号</th>
    <td><?php echo $_smarty_tpl->tpl_vars['idcard_num']->value;?>
</td>
    <td></td>
  </tr>
  <tr>
    <th scope="row">性别</th>
    <td><?php echo $_smarty_tpl->tpl_vars['gender']->value;?>
</td>
    <td></td>
  </tr>
  <tr>
    <th scope="row">E-mail</th>
    <td><input type="text" id="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"/></td>
    <td>格式举例：IloveNJU@nju.edu.cn</td>
  </tr>
  <tr>
    <th scope="row">手机</th>
    <td><input type="text" id="phone" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
"/></td>
    <td>国内手机号码11位格式</td>
  </tr>
  <tr>
    <th scope="row">所在院</th>
    <td><?php echo $_smarty_tpl->tpl_vars['faculty']->value;?>
</td>
    <td></td>
  </tr>
  <tr>
    <th scope="row">所在系</th>
    <td><?php echo $_smarty_tpl->tpl_vars['department']->value;?>
</td>
    <td></td>
  </tr>
  <tr>
    <th scope="row">出生日期</th>
    <td><input type="text" id="birthday" value="<?php echo $_smarty_tpl->tpl_vars['birthday']->value;?>
"/></td>
    <td>yyyy-mm-dd，中间用‘-’分开（例：1992-04-30）</td>
  </tr>
  <tr>
    <th scope="row">政治面貌</th>
    <td><input type="text" id="social" value="<?php echo $_smarty_tpl->tpl_vars['politics_status']->value;?>
"/></td>
    <td>群众、团员、党员</td>
  </tr>
  <tr>
    <th scope="row">民族</th>
    <td><input type="text" id="race" value="<?php echo $_smarty_tpl->tpl_vars['nation']->value;?>
"/></td>
    <td>中华56个名族你是哪一个名族？</td>
  </tr>
  <tr>
    <th scope="row">服装大小</th>
    <td><input type="text" id="height" value="<?php echo $_smarty_tpl->tpl_vars['cloth_size']->value;?>
"/></td>
    <td>您的身高，以厘米做单位</td>
  </tr>
  <tr>
    <th scope="row">宿舍</th>
    <td><input type="text" id="dormitory" value="<?php echo $_smarty_tpl->tpl_vars['dormitory']->value;?>
"/></td>
    <td>你住在哪幢宿舍楼的哪一间（例：1B231）</td>
  </tr>
</table>
</div>
<div id="more">
	<div>
    	<div class="left-bar"></div>
    	<div class="base-info">个人技能</div>
    	<div class="right-bar"></div>
	</div>
	<table width="200" border="1">
  <tr>
    <th scope="row">cet4</th>
    <td><input type="text" id="cet4" value="<?php echo $_smarty_tpl->tpl_vars['cet4']->value;?>
"/></td>
    <td>您的四级英语成绩，没有则留空</td>
  </tr>
   <tr>
    <th scope="row">cet6</th>
    <td><input type="text" id="cet6" value="<?php echo $_smarty_tpl->tpl_vars['cet6']->value;?>
"/></td>
    <td>您的6级英语成绩，没有则留空</td>
  </tr>
  <tr>
    <th scope="row">其他外语</th>
    <td><input type="text" id="other" value="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
"/></td>
    <td>你还会其他外语吗？</td>
  </tr>
  <tr>
    <th scope="row">水平</th>
    <td><input type="text" id="level" value="<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
"/></td>
    <td>你所会的其他外语水平是？</td>
  </tr>
  <tr>
    <th scope="row">是否有医疗急救技能</th>
    <td><?php if ($_smarty_tpl->tpl_vars['medical']->value=="是"){?>
    	<input name="medical_select" type="radio" value="medical_true" checked/><label>是</label>
    	<input name="medical_select" type="radio" value="medical_false" /><label>否</label>
        <?php }else{ ?>
    	<input name="medical_select" type="radio" value="medical_true" /><label>是</label>
    	<input name="medical_select" type="radio" value="medical_false" checked/><label>否</label>
    	<?php }?>
    <td>是否经过急救培训</td>
  </tr>
  <tr>
    <th scope="row">是否有驾驶技能</th>
    <td><?php if ($_smarty_tpl->tpl_vars['drive']->value=="是"){?>
    	<input name="drive_select" type="radio" value="drive_true" checked/><label>是</label>
    	<input name="drive_select" type="radio" value="drive_false" /><label>否</label>
        <?php }else{ ?>
    	<input name="drive_select" type="radio" value="drive_true" /><label>是</label>
    	<input name="drive_select" type="radio" value="drive_false" checked/><label>否</label>
    	<?php }?>
    <td>是否有驾照</td>
  </tr>
  <tr>
    <th scope="row">其他能力</th>
    <td><input type="textarea" id="name" value=""/>&nbsp;</td>
    <td></td>
  </tr>
</table>
<input type="button" class="button" value="提交" onclick="handlechange"/>
<input type="button" class="button" value="回到默认" />
</div>
</div><?php }} ?>