<?php /* Smarty version Smarty-3.1.7, created on 2013-05-18 11:27:45
         compiled from "../tpls/templates\handle\week_act_list.html" */ ?>
<?php /*%%SmartyHeaderCode:176705196f5317a54c2-76354320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73bf2702b43c814ae6c0d9d1857afb4051b4492f' => 
    array (
      0 => '../tpls/templates\\handle\\week_act_list.html',
      1 => 1368802412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176705196f5317a54c2-76354320',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'retlist' => 0,
    'weekact' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5196f5318637b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5196f5318637b')) {function content_5196f5318637b($_smarty_tpl) {?>			<div class="title">
                <div style="float:left;height:26px;margin-top:20px;margin-right:10px;width:10px;background-color:#606"></div>
                <h3 style="float:left;font-size:24px;padding-top:10px;">本周活动</h3>
                <ul style="float:right;padding-top:20px">
                    <li class="title-op" style="float:left;margin:7px;font-size:14px;padding:3px" onclick="returntoday()">回到本周</li>
                    <li class="title-op" style="float:left;margin:7px;font-size:14px;padding:3px" onclick="preweek()">上一周</li>
                    <li class="title-op" style="float:left;margin:7px;font-size:14px;padding:3px" onclick="nextweek()">下一周</li>
                </ul>
                </ul>
            </div>
            <div style="padding-top:3px;padding-bottom:3px;background-color:#333"></div>
            <?php  $_smarty_tpl->tpl_vars['weekact'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['weekact']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['retlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['weekact']->key => $_smarty_tpl->tpl_vars['weekact']->value){
$_smarty_tpl->tpl_vars['weekact']->_loop = true;
?>
            <div class="weeka">
                <div class="weekdate" id="day1"></div>
                <div class="act-content" id="act_day11">
                
                	<a href="act_dtl.php? act_id=<?php echo $_smarty_tpl->tpl_vars['weekact']->value['id1'];?>
"><?php echo $_smarty_tpl->tpl_vars['weekact']->value['name1'];?>
</a>
                    </br>
                    <?php if (isset($_smarty_tpl->tpl_vars['weekact']->value['detail_time1'])){?>
                   	<span>时间:<?php echo $_smarty_tpl->tpl_vars['weekact']->value['detail_time1'];?>
</span>
                    <?php }?>
                    </br>
                    <?php if (isset($_smarty_tpl->tpl_vars['weekact']->value['deadline1'])){?>
                    <span>报名截止:<?php echo $_smarty_tpl->tpl_vars['weekact']->value['deadline1'];?>
</span>
                    <?php }?>
                </div>
                <div class="act-content" id="act_day12">
                	<a href="act_dtl.php? act_id=<?php echo $_smarty_tpl->tpl_vars['weekact']->value['id2'];?>
"><?php echo $_smarty_tpl->tpl_vars['weekact']->value['name2'];?>
</a>
                    </br>
                    <?php if (isset($_smarty_tpl->tpl_vars['weekact']->value['detail_time2'])){?>
                   	<span>时间:<?php echo $_smarty_tpl->tpl_vars['weekact']->value['detail_time2'];?>
</span>
                    <?php }?>
                    </br>
                    <?php if (isset($_smarty_tpl->tpl_vars['weekact']->value['deadline2'])){?>
                    <span>报名截止:<?php echo $_smarty_tpl->tpl_vars['weekact']->value['deadline2'];?>
</span>
                    <?php }?>
                </div>
            </div>
            <?php } ?>

<?php }} ?>