// JavaScript Document
$(document).ready(function(){
	var notice_id=parseInt($('#notice-id').text());
	if(notice_id>=0){
		//alert(notice_id);
		detail_show(notice_id);	
	}
	
	$('#first-page').click(function(){
		var type=parseInt($('#type').text());
			window.location.href="notice.php?type="+type+"&page="+1;
	});
	$('#prev-page').click(function(){
		var type=parseInt($('#type').text());
		var page=parseInt($('#page-now').text())-1;
		if(page == 0){
			alert("已经是第一页了！");	
		}
		else
			window.location.href="notice.php?type="+type+"&page="+page;
	});
	$('#next-page').click(function(){
		var type=parseInt($('#type').text());
		var page=parseInt($('#page-now').text())+1;
		//alert(page);
		if(page > $('#page-all').text()){
			alert("这是最后一页了！");	
		}
		else
			window.location.href="notice.php?type="+type+"&page="+page;
	});
	$('#last-page').click(function(){
		var type=parseInt($('#type').text());
		var page=parseInt($('#page-all').text());
		window.location.href="notice.php?type="+type+"&page="+page;
	});
	
	$('#put_up_question').click(function(){
		document.getElementById('loading-bar').style.display='block';
		var email_address=document.getElementById('email_address').value;
		var question_content = document.getElementById('question_content').value;
		var question_title = document.getElementById('question_title').value;
		$.ajax({
			type:'POST',
			url:"handle/put_up_question.php",
			data:{email_info:email_address,question_title:question_title,question_content:question_content},
			success:function(html){
				document.getElementById('loading-bar').style.display='none';
				alert(html);
			}
			
		});
	});
	
	var type_t = $('#type').text();
	if(type_t == 1){
		$('#type-title').text("公告通知");	
	}
	else if(type_t == 2){
		$('#type-title').text("在线咨询");	
	}
	else if(type_t == 3){
		$('#type-title').text("心路历程");	
	}
});
function show(){
	$('#notice-cover').show();
	$('#notice-detail').show();
	$("#notice-cover").animate({opacity:'1'});
	$("#notice-detail").animate({opacity:'1'});
}

function hide(){
	$("#notice-cover").animate({opacity:'0'},500);
	$("#notice-detail").animate({opacity:'0'},500);
	setTimeout("$('#notice-cover').hide()",500);
	setTimeout("$('#notice-detail').hide()",500);
}
function detail_show(temp){
	document.getElementById('loading-bar').style.display='block';
	$.ajax({
		type:'POST',
		url:"handle/notice_page.php",
		data:{type:$('#type').text(),id:temp},
		success:function(html){
			document.getElementById('loading-bar').style.display='none';
			show();
			$('#notice-detail').html(html);
		}	
	});	
}
