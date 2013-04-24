<?php
require_once('../include/php/basic.php');
require_once('../connections/root_conn.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script type="text/javascript" src="../include/js/jquery-1.9.1.min.js"></script>
	<link href="../include/css/main.css" rel="stylesheet" />
	<link href="../include/css/register.css" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="../calendar/calendar.css" >
	<script type="text/javascript" src="../calendar/calendar.js" ></script>  
    <script type="text/javascript" src="../calendar/calendar-zh.js" ></script>
    <script type="text/javascript" src="../calendar/calendar-setup.js"></script>
	<script charset="utf-8" src="../kindeditor-4.1.5/kindeditor-min.js"></script>
    <script charset="utf-8" src="../kindeditor-4.1.5/lang/zh_CN.js"></script>
    <script type="text/javascript">
		var cur_state;
		$(document).ready(function(){
			//alert("ready");
				$("#submit").click(function(){
				//alert("submit");
				cur_state="auditing";
				submit_click();
			});
		$("#preview").click(function(){
				cur_state="editing";
				submit_click();	
			});
		$("#save").click(function(){
				cur_state="editing";
				submit_click();	
			});
			});

		function submit_click()
		{
			//alert("您好！");
			profile = editor.html();
			//alert(profile);
			//alert($('#begin_time').val());
			$.ajax({
				type:"POST",
				data:{activity_name:$('#activity_name').val(),activity_place:$("#activity_place").val(),time_type:$('#time_type').val(),attribution_type:$('#attribution_type').val(),begin_time:$('#begin_time').val(),end_time:$('#end_time').val(),detail_time:$('#detail_time').val(),total_num:$('#total_num').val(),need_audit:$('#need_audit').val(),responser:$('#responser').val(),responser_tel:$('#responser_tel').val(),last_time:$('#last_time').val(),activity_profile:profile,state:cur_state},
				url:"../handle/activity_apply.php",
				success:function(html){
				//alert(html);
					if(html == 1) {
						alert("申请成功");
						window.close();
					} else {
						alert("申请失败");
					}
				}	
			});
		}
	</script>
	<script>
        var editor;
        KindEditor.ready(function(K) {
            editor = K.create('textarea[name="content"]', {
                resizeType : 1,
                allowPreviewEmoticons : false,
                allowImageUpload : false,
                items : [
                    'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
                    'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
                    'insertunorderedlist', '|', 'emoticons', 'image', 'link','unlink','image','baidumap','fullscreen']
            });
        });
    </script>

</head>


<body>
<?php
require("../include/php/header.php");
?>

	
<div class="main">
		<div class="span_left">
			<form class="form-horizontal" id="apply_activity" action="team_activity_apply.php" method="POST">
				<ul class="breadcrumb"><li>活动资料</li></ul>
				<div class="control-group" id="user">
					<label class="control-label" for="inputInfo">活动名称</label>
					<div class="controls">
						<div class="input_border">
							<input id="activity_name" name="activity_name" class="user" type="text" />
                            
						</div>
                        <span id="activity_tip" class="input-tip"></span>
						<span class="help-inline emailerror"></span>
					</div>
				</div>
				<div class="control-group" id="password">
					<label class="control-label" for="inputInfo">活动地点</label>
					<div class="controls">
						<div class="input_border">
							<input id="activity_place" name="activity_place" class="user" type="text" />
                            
						</div>
                        <span id="place_tip" class="input-tip">活动地点不能为空</span>
						<span class="help-inline passworderror"></span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputInfo">时间类型</label>
					<div class="controls">
						<div class="input_border">
							<select name="time_type" id="time_type">
							  <option value="longtime">长期活动</option>
                              <option value="temp">临时活动</option>
							</select>
						</div>
					</div>
				</div>	
				<div class="control-group">
					<label class="control-label" for="inputInfo">活动属性</label>
					<div class="controls">
						<div class="input_border">
							<select name="attribution_type" id="attribution_type">
							  <option value="helpdisabled">助残</option>
                              <option value="supporteducation">支教</option>
							</select>
						</div>
					</div>
				</div>	
				<ul class="breadcrumb"><li>活动时间</li></ul>
                <div class="control-group" id="pho7676ne">
					<label class="control-label" for="inputInfo" >开始日期</label>
					<div class="controls">
						<div class="input_border">
							<input name="begin_time" class="user" type="text" id="begin_time" onClick="return showCalendar('begin_time', 'y-mm-dd');" />
                           
						</div>
                         <span id="begin_time_tip" class="begin_time-tip"> </span>
						<span class="help-inline phoneerror"></span>
					</div>
				</div>
                <div class="control-group" id="pho435ne">
					<label class="control-label" for="inputInfo">结束日期</label>
					<div class="controls">
						<div class="input_border">
							<input name="end_time" class="user" type="text" id="end_time" onClick="return showCalendar('end_time', 'y-mm-dd');"/>
                           
						</div>
                         <span id="end_time_tip" class="end_time_tip"></span>
						<span class="help-inline phoneerror"></span>
					</div>
				</div>
                <div class="control-group" id="ph1212one">
					<label class="control-label" for="inputInfo">持续时间</label>
					<div class="controls">
						<div class="input_border">
							<input name="last_time" id="last_time" class="user" type="text" />
                            
						</div>
                        <span id="last_time_tip" class="last_time_tip"> </span>
						<span class="help-inline phoneerror"></span>
					</div>
				</div>
				<div class="control-group" id="ph12one">
					<label class="control-label" for="inputInfo">详细时间</label>
					<div class="controls">
						<div class="input_border">
							<input name="detail_time" id="detail_time" class="user" type="text" placeholder="活动的详细时间描述"/>
						</div>
						<span class="help-inline phoneerror"></span>
					</div>
				</div>
				<ul class="breadcrumb"><li>活动要求</li></ul>
                <div class="control-group" id="wqe">
					<label class="control-label" for="inputInfo">招募人数</label>
					<div class="controls">
						<div class="input_border">
							<input name="total_num" id="total_num" class="user" type="text" />
						</div>
						<span class="help-inline phoneerror"></span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputInfo">审核类型</label>
					<div class="controls">
						<div class="input_border">
							<select name="need_audit" id="need_audit">
							  <option value="false">报名即参加</option>
                              <option value="true">需要审核报名志愿者</option>
							</select>
						</div>
					</div>
				</div>	
                <ul class="breadcrumb"><li>联系人</li></ul>
				<div class="control-group" id="user">
					<label class="control-label" for="inputInfo">姓名</label>
					<div class="controls">
						<div class="input_border">
							<input name="responser" id="responser" class="user" type="text" />
                           
						</div>
                         <span id="responser_tip" class="responser_tip" ></span>
						<span class="help-inline emailerror"></span>
					</div>
				</div>
                <div class="control-group" id="pho6786786ne">
					<label class="control-label" for="inputInfo">电话</label>
					<div class="controls">
						<div class="input_border">
							<input name="responser_tel" id="responser_tel" class="phone" type="text" />
                           	
						</div>
                        <span id="tel_tip" class="tel_tip"></span>
						<span class="help-inline phoneerror"></span>
					</div>
				</div>
				<ul class="breadcrumb"><li>活动简介</li></ul>
                <div  id="phone" >
					<div class="controls" >
						<div class="input_area" >
							<textarea id="activity_profile" name="content" style="width:590px;height:200px;visibility:hidden;" ></textarea>
						</div>
						<span class="help-inline phoneerror"></span>
					</div>
				</div>                
				<div class="control-group">
					<div class="controls">
						<input name="submit" class="button" id="submit"  value="提交" />
                        <input name="preview" class="button" id="preview"  value="预览" />
                        <input name="save" class="button" id="save"  value="保存" />
					</div>
				</div>
			</form>
		</div>

		<div class="span_right">
			<?php
			   //生成三个随机数
			$rand1 = rand()*100%33;
			$rand2 = 0;
			$rand3 = 0;
			while( ($rand2 = rand()*100%33) == $rand1 );
			while( ($rand3 = rand()*100%33) == $rand1 || $rand3  == $rand2 );
			?><!-- 220 146 -->
			<img class="reg_nju_scene" src="../include/img/nju_scene/scene<?php  echo $rand1+1;  ?>.jpg" />
			<img class="reg_nju_scene" src="../include/img/nju_scene/scene<?php  echo $rand2+1;  ?>.jpg" />
			<img class="reg_nju_scene" src="../include/img/nju_scene/scene<?php  echo $rand3+1;  ?>.jpg" />
		</div>
 
</div>



<?php
require("../include/php/footer.php");
?>
</body>
<script src="../include/js/activity_register.js"></script>
</html>