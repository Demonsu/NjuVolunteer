

function show_note(id){
	//alert(id);
	$.ajax({
		type:"POST",
		data:{
			id:id
			},
		url:"./include/vol_note_detail.php",
		success:function(html){
			$("#note_detail").html(html);
			$("#note_detail").show();
			$('#note_detail').animate({opacity:'1'},1000);
			
		}
});
}


$("#my_activity").click(function(){
	$("#main_title").text("我参与的活动");
	
	$.ajax({
	type:"POST",
	url:"./include/actv_takein.php",
	success:function(html){
		//alert(html);
		$("#main_content").html(html);
	}	
});
});
$("#activity_record").click(function(){
	$("#main_title").text("活动记录");
	$.ajax({
	type:"POST",
	url:"./include/vol_act_record.php",
	success:function(html){
		//alert(html);
		$("#main_content").html(html);
	}	
});
});
$("#new_notice").click(function(){
	$("#main_title").text("新通知");
	$.ajax({
	type:"POST",
	url:"./include/vol_note.php",
	success:function(html){
			$("#main_content").html(html);
	}
});
});
$("#notice_record").click(function(){
	$("#main_title").text("历史通知");
});
$("#vol_profile").click(function(){
	$("#main_title").text("个人资料");
	$.ajax({
	type:"POST",
	url:"./include/infov.php",
	success:function(html){
		//alert(html);
		$("#main_content").html(html);
	}	
});
});

$("#change_password").click(function(){
	$("#main_title").text("修改资料");
	$.ajax({
		type:"POST",
		url:"./include/infov_edit.php",
		success:function(html){
			//alert(html);
			$("#main_content").html(html);
		}
	});
})
$("#my_team").click(function(){
	$("#main_title").text("我的团队");
})
$("#my_focused_team").click(function(){
	$("#main_title").text("关注的团队");
})