
//  zt_elem_main_content = "#main_content";
//  zt_elem_main_content2 = "#main_content2";


var getNewPitureURL = function( source, newFileName ){
	return source.substring( 0, source.lastIndexOf( "/" )+1 )+newFileName;
}

//记录当前操作（记录所属）的活动id
var current_activity_id = -1;
var current_document_id = -1;

var az_func_loaded_doc_edit = function(){};


//活动报名情况：通过，退出，选择全部
var az_funz_apply_audit_ok = function(){};
var az_funz_apply_audit_fail = function(){};
var az_funz_apply_select_all = function(){};
var az_elem_apply_audit_ok = "#btn_audit_ok";
var az_elem_apply_audit_fail = "#btn_audit_fail";
var za_elem_apply_select_all = "#check_all_act_people";
//活动记录：提交、删除、全选、移除参与者
var az_func_doc_submit_doc = function(){};
var az_func_doc_delete_doc = function(){};
var az_funz_doc_select_all = function(){};
var az_funcz_doc_import_part = function(){};
var az_funcz_doc_import_ok = function(){};//导入对话框中的“确定”按钮的处理函数
var az_funcz_doc_remove_part = function(){};


//以下4个函数 是针对 活动列表的
zt_func_doc_index = function(){
	switch_main_content( "->" );
	//alert( ""+$(this).attr("actid")+","+$(this).attr("docid") );
	current_activity_id = $(this).attr("actid");
	current_document_id = $(this).attr("docid");
	$.ajax({
		type:"POST",
		url:"./include/rec_edit.php",
		data:{activityId: current_activity_id, documentId: current_document_id },
		success:function(html){ az_func_loaded_doc_edit(html); }
	});
}
zt_func_doc_add = function(){
	switch_main_content( "->" );
	current_activity_id = $(this).attr("actid");
	current_document_id = -1;
	$.ajax({
		type:"POST",
		url:"./include/rec_edit.php",
		data:{activityId: current_activity_id, documentId: current_document_id },
		success:function(html){ az_func_loaded_doc_edit(html); }
	});
}
zt_func_doc_apply = function(){
	switch_main_content( "->" );
	$.ajax({
		type:"POST",
		url:"./include/actz_apply.php",
		data:{activityId:$(this).attr("actid")},
		success:function(html){
			$( zt_elem_main_content2 ).html(html);
			$(zt_elem_go_back_home).bind("click", function(){ switch_main_content( "<-" ); });
			$( az_elem_apply_audit_ok ).bind( "click",  az_funz_apply_audit_ok );//"审核通过"
			$( az_elem_apply_audit_fail ).bind( "click", az_funz_apply_audit_fail );//"审核失败"
			$( za_elem_apply_select_all ).bind( "change",  az_funz_apply_select_all );//"选择全部"
			$(".apply_id_col").bind("click", function(){//查看个人信息----弹框
				var id = $(this).text();
				$.ajax({
					type:"GET",
					url:"./include/popup_infov.php",
					data:{userId:id},
					success:function(html){
						tipsWindown("学生信息","text:"+html,"900","427","true","","true","");
					}
				});
			});
		}
	});
}
zt_func_doc_fold = function( ){
	var old = this.src.substring( this.src.lastIndexOf("/")+1, this.src.length );//获取图片的src
	if( old != "navigate_minus.png"){//判断是否是“减号”，如果不是，则展开
		this.src = getNewPitureURL( this.src, "navigate_minus.png" );
		$( "#doc_list_"+$(this).attr("actid") ).css("display", "");//
	} else {
		this.src = getNewPitureURL( this.src, "navigate_plus.png" );
		$( "#doc_list_"+$(this).attr("actid") ).css("display", "none");//
	}
}

//加载完“记录编辑”(包括添加)之后要做的事
az_func_loaded_doc_edit = function(html){
	$(zt_elem_main_content2).html(html);
	$(zt_elem_go_back_home).bind("click", function(){ switch_main_content( "<-" ); });
	$("#submit_act_doc").bind( "click", az_func_doc_submit_doc);//记录编辑的“提交”按钮
	$("#delete_act_doc").bind( "click", az_func_doc_delete_doc);//"删除"按钮
	$("#check_all_part_people").bind( "click", az_funz_doc_select_all);//全选
	$("#doc_op_import").bind( "click", az_funcz_doc_import_part);//"导入"按钮
	$("#doc_op_remove").bind( "click", az_funcz_doc_remove_part);//"移除"按钮
}

//点击活动档案的“保存”按钮的处理函数
az_func_doc_submit_doc = function(){
	//alert( current_document_id );
	var doc_edit_leader = $( "#doc_edit_leader" ).val();
	var doc_edit_tel = $( "#doc_edit_tel" ).val();
	var doc_edit_time = $( "#doc_edit_time" ).val();
	var doc_edit_date_start = $( "#doc_edit_date_start" ).val();
	var doc_edit_profile = $( "#doc_edit_profile" ).val();
	var doc_edit_summary = $( "#doc_edit_summary" ).val();
	$.ajax({
		type:"POST",
		url:"./handle/rec.php",
		data:{
			type:"add", 
			activityId: current_activity_id, 
			documentId: current_document_id,
			leader: doc_edit_leader, 
			profile: doc_edit_profile, 
			summary: doc_edit_summary, 
			tel: doc_edit_tel,
			volTime: doc_edit_time,
			start_date: doc_edit_date_start
		},
		success:function(html){
			if( html == 0 ){
				//switch_main_content( "<-" );
				alert( "保存成功！" );
				$("#util_start_activity").trigger("click");
			} else {
				alert( html );
			}
		}
	});
}
//点击活动档案的“删除”按钮的处理函数
az_func_doc_delete_doc = function(){
	$.ajax({
		type:"POST",
		url:"./handle/rec.php",
		data:{type:"delete", documentId: $(this).attr("docid") },
		success:function(html){
			if( html == 0 ){//删除成功！
				//switch_main_content( "<-" );
				$("#util_start_activity").trigger("click");
			} else {
				alert( html );
			}
		}
	});
}
//参与人员的“导入”
az_funcz_doc_import_part = function(){
	var list = az_func_getIdList( "doc_checkbox_head_", "all" );
	//alert( list );
	$.ajax({
		type:"POST",
		url:"./include/actz_apply.php",//从“报名”页面导入
		data:{type:"choose", activityId: $(this).attr("actid"), idList: list, documentId: $(this).attr("docid") },
		success:function(html){
			tipsWindown("报名信息","text:"+html,"900","427","true","","true","");
			$( "#btn_import_ok" ).bind( "click", az_funcz_doc_import_ok );//点击“导入”对话框中的“确定”按钮
			$( za_elem_apply_select_all ).bind( "change",  az_funz_apply_select_all );//"选择全部"
		}
	});
}
//参与人员的“移除”
az_funcz_doc_remove_part = function(){
	var list = az_func_getIdList( "doc_checkbox_head_" );
	//alert( list );
	$.ajax({
		type:"POST",
		url:"./handle/rec.php",
		data:{type:"remove", documentId: $(this).attr("docid"), idList: list },
		success:function(html){
			if( html == 0 ){
				//alert( "移除成功！" );
				var all_checkbox = $( "[type='checkbox']" );
				for( var i = 0;  i < all_checkbox.length; i ++ ){
					if( $(all_checkbox[i]).prop("disabled") ){} else {
						if( $(all_checkbox[i]).attr("id").search("doc_checkbox_head_") > -1 
								&&  $(all_checkbox[i]).prop("checked") ) {
							$(all_checkbox[i]).prop("disabled", true);
							$(all_checkbox[i]).prop("checked", false);
							var t = $( "#part_people_table_tr_"+$(all_checkbox[i]).attr("noid" ) );//找到对应的"状态"单元格
							if( t != null ) { $(t).remove(); }//隐藏
						}
					}
				}
				//$("#doc_edit_part_table")
				//alert( $("#doc_edit_part_table").find('tr').length );
				if( $("#doc_edit_part_table").find('tr').length == 1 ){//说明只有表头了
					$("#doc_edit_part_table").append(  '<tr id="doc_edit_part_table_tr_tip"><td colspan="9">还没有人参加这个活动哦！</td></tr>' );
				}
			} else {//移除失败
				alert( html );
			}
		}
	});
}
//导入成功的处理函数！
az_funcz_doc_import_ok = function(){
	//alert( "test -ok" );
	$.ajax({
		type: "POST",
		url: "./handle/rec.php",
		data:{ type:"import", idList: az_func_getIdList(  "act_people_table_checkbox_" ), documentId: $(this).attr( "docid" ) },
		success:function(html){//0-成功，其他-失败
			if( html == 0 ){
				
			} else {
				alert( html );
			}
			$("#doc_edit_part_table_tr_tip").remove();//移除“还没有人参加这个活动哦”提示
			var tr = '<tr id="part_people_table_tr_{id}">'+
				'<td><input type="checkbox" title="" id="doc_checkbox_head_{id}" noid="{id}" onclick="change_rec_edit_head_checkbox();" /></td>'+
				'<td>{id}(来自JS)</td>'+
				'<td>{name}(来自JS)</td>'+
				'<td>{faculty}(来自JS)</td>'+
				'<td>0.000(来自JS)</td>'+
				'<td>优秀(来自JS)</td>'+
				'<td><input type="checkbox"  id="doc_checkbox_leader_{id}"  title="" /></td>'+
				'<td><input type="checkbox"   id="doc_checkbox_excellent_{id}"   title="" /></td>'+
				'<td><textarea col="5" id="doc_comment_{id}"></textarea></td>'+
				'</tr>';
			var all_checkbox = $( "[type='checkbox']" );
			for( var i = 0;  i < all_checkbox.length; i ++ ){
				if( $(all_checkbox[i]).prop("disabled") ){} else {
					if( $(all_checkbox[i]).attr("id").search("act_people_table_checkbox_") > -1 
							&&  $(all_checkbox[i]).prop("checked") ) {
						var uid = $(all_checkbox[i]).attr("noid" );
						var uname = $(all_checkbox[i]).attr("un" );
						var ufaculty = $(all_checkbox[i]).attr("uf" );
						$("#doc_edit_part_table").append( tr.replace( /{id}/g, uid ).replace( /{name}/g, uname ).replace( /{faculty}/g, ufaculty ) );
					}
				}
			}
			$( "#windown-close" ).trigger("click");//暂时放这里
		}
	});
}


//暂时不考虑，在系统处理时，用户继续点击复选框的情况
//获取选中的复选框的id列表
var az_func_getIdList = function( preffix, match ){
	var apply_vol_string = "";
	var all_checkbox = $( "[type='checkbox']" );
	for( var i = 0;  i < all_checkbox.length; i ++ ){
		if( match == "all" ){
			if( $(all_checkbox[i]).attr("id").search( preffix ) > -1  ) {
				apply_vol_string += $(all_checkbox[i]).attr("noid" ) +" ";
			}
		} else {
			if( $(all_checkbox[i]).prop("disabled") ){} else {
				if( $(all_checkbox[i]).attr("id").search( preffix ) > -1 
					&&  $(all_checkbox[i]).prop("checked") ) {
					apply_vol_string += $(all_checkbox[i]).attr("noid" ) +" ";
				}
			}
		}
	}
	return apply_vol_string;
}
//点击活动报名情况的“审核通过”按钮的处理函数
az_funz_apply_audit_ok = function(){
	var actid = $(this).attr( "actid" );
	$.ajax({
		type: "POST",
		url: "./handle/actz.php",
		data:{ type:"actApply", idList: az_func_getIdList( "act_people_table_checkbox_" ), target:1, reason: " 暂时没有", activityId: $(this).attr( "actid" ) },
		success:function(html){//0-成功，其他-失败
			//alert( html );
			if( html == 0 ){//成功
				//alert( "修改审核状态成功！" );
				var all_checkbox = $( "[type='checkbox']" );
				for( var i = 0;  i < all_checkbox.length; i ++ ){
					if( $(all_checkbox[i]).prop("disabled") ){} else {
						if( $(all_checkbox[i]).attr("id").search("act_people_table_checkbox_") > -1 
								&&  $(all_checkbox[i]).prop("checked") ) {
							$(all_checkbox[i]).prop("disabled", true);
							$(all_checkbox[i]).prop("checked", false);
							var t = $( "#act_people_table_col_state_"+$(all_checkbox[i]).attr("noid" ) );//找到对应的"状态"单元格
							if( t != null ) t.text( "过(来自JS)" );
						}
					}
				}
			} else {//失败，弹框
				alert( html );
			}
		}
	});
}
az_funz_apply_audit_fail= function(){
	var actid = $(this).attr( "actid" );
	$.ajax({
		type: "POST",
		url: "./handle/actz.php",
		data:{ type:"actApply", idList: az_func_getIdList( "act_people_table_checkbox_" ), 
			target:0, reason: " 暂时没有", activityId: $(this).attr( "actid" ) },
		success:function(html){//0-成功，其他-失败
			if( html == 0 ){//成功
				//alert( "修改审核状态成功！" );
				var all_checkbox = $( "[type='checkbox']" );
				for( var i = 0;  i < all_checkbox.length; i ++ ){
					if( $(all_checkbox[i]).prop("disabled") ){} else {
						if( $(all_checkbox[i]).attr("id").search("act_people_table_checkbox_") > -1 
								&&  $(all_checkbox[i]).prop("checked") ) {
							$(all_checkbox[i]).prop("disabled", true);
							$(all_checkbox[i]).prop("checked", false);
							var t = $( "#act_people_table_tr_"+$(all_checkbox[i]).attr("noid" ) );//找到对应的"状态"单元格
							if( t != null ) { t.css( "display", "none" ); }//隐藏
						}
					}
				}
			} else {//失败，弹框
				alert( html );
			}
		}
	});
}
//活动报名情况的"全选"复选框
az_funz_apply_select_all = function(){
	var checked = $("#check_all_act_people").prop( "checked" );
	var all_checkbox = $( "[type='checkbox']" );
	//alert( all_checkbox.length );//*
	for( var i = 0;  i < all_checkbox.length; i ++ ){
		if( $(all_checkbox[i]).attr("id") == "check_all_act_people" ) continue;
		
		if( $(all_checkbox[i]).prop("disabled") ) { } else {//如果不是“不可选的”
			$(all_checkbox[i]).prop("checked", checked);
		}
	}//*/
}
az_funz_doc_select_all = function(){
	var checked = $("#check_all_part_people").prop( "checked" );
	var all_checkbox = $( "[type='checkbox']" );
	//alert( all_checkbox.length );//*
	for( var i = 0;  i < all_checkbox.length; i ++ ){
		if( $(all_checkbox[i]).attr("id") == "check_all_part_people" ) continue;
		if( $(all_checkbox[i]).attr("id").search( "doc_checkbox_head_" ) == -1 ) continue;
		
		if( $(all_checkbox[i]).prop("disabled") ) { } else {//如果不是“不可选的”
			$(all_checkbox[i]).prop("checked", checked);
		}
	}//*/
	change_rec_edit_head_checkbox();//设置“移除”按钮
}



function change_rec_edit_head_checkbox(){
	//一个for循环，查看所有的checkbox_head是否存在选中的

	var all_head_checkbox = $('[type="checkbox"]');
	//	alert( "L="+all_head_checkbox.length );
	for( var i = 0; i < all_head_checkbox.length; i ++ ){
		//alert( i );
		var per_head_checkbox = all_head_checkbox[i];
		//alert( "id="+$(per_head_checkbox).attr("id") );
		if( $(per_head_checkbox).attr("id").search( "doc_checkbox_head_" ) < 0 ) continue;//
		if( $(per_head_checkbox).prop("checked") ){
			$("#doc_op_remove").attr( "disabled", false );//找到打钩的
			$("#doc_op_remove").attr(  "title", "将选择的志愿者移除参与表" );
			return;
		}
	}
	$("#doc_op_remove").attr( "disabled", true );
	$("#doc_op_remove").attr(  "title", "请先勾选要移除的志愿者" );
}


//设置参与表的“确定”按钮有效
function set_submit_enable(  ){
	$("#doc_op_submit").attr( "disabled", true );
	$("#doc_op_submit").attr( "title", "您必须点击“确定”按钮保存参与表后才能提交！" );

	var submit_button = $("#doc_op_submit");
	submit_button.attr( "disabled", false );
	submit_button.attr( "title", "修改后点击此按钮生效" );

}

//以下几个函数处理，参与表的修改
function change_doc_time_handle(elem, no){
	const time = 100;
	if( no == 1 ){
		$(elem).toggle( time );
		$(elem).next().toggle( time );
		$(elem).next().find(":first-child").focus();
	} else {//no == 2
		$(elem).parent().prev().toggle( time );
		$(elem).parent().toggle( time );
		$(elem).parent().prev().text( $(elem).val() );

		var val = $(elem).val();
		var all_selected_box = $(".doc_checkbox_head:checked");
		for( var i = 0; i < all_selected_box.length; i ++ ){
			var uid = $(all_selected_box[i]).attr( "noid" );
			var span = $( "#doc_time_"+uid );
			span.text( val );
			span.next().find(":first-child").val( val );
		}
		
		set_submit_enable();//确定按钮有效
	}
}
function change_doc_level_handle(elem, no){
	//alert( $(elem).attr("id") );
	const time = 100;
	if( no == 1 ){
		$(elem).toggle( time );
		$(elem).next().toggle( time );
		$(elem).next().find(":first-child").focus();
	} else {//no == 2
		var newval = $(elem).find(":selected").text();
		$(elem).parent().prev().toggle( time );
		$(elem).parent().toggle( time );
		$(elem).parent().prev().text( newval  );

		var all_selected_box = $(".doc_checkbox_head:checked");
		for( var i = 0; i < all_selected_box.length; i ++ ){
			var uid = $(all_selected_box[i]).attr( "noid" );
			var span = $( "#doc_level_"+uid );
			span.text( newval );
			//$("#select_id  ").attr("selected", true); 
			var sel = $("#doc_level_select_"+uid);
			alert( sel.attr("id") );
			//sel.attr( "value", newval );
		}
		set_submit_enable();//确定按钮有效
		

	}
}
function change_doc_comment_handle(elem, no){
	const time = 100;
	if( no == 1 ){
		$(elem).toggle( time );
		$(elem).next().toggle( time );
		$(elem).next().find(":first-child").focus();
	} else {//no == 2
		$(elem).parent().prev().toggle( time );
		$(elem).parent().toggle( time );
		//alert( $(elem).val().length );
		if( $(elem).val().trim().length == 0 ) {
			$(elem).parent().prev().html( "无" );
		} else {
			$(elem).parent().prev().text( $(elem).val() );
		}
		set_submit_enable();//确定按钮有效
	}
}
function change_doc_honnor_leader_handle(elem, type){//type ==1 表示“带队”，2表示“优秀”
	var newval = $(elem).prop("checked");

	var all_selected_box = $(".doc_checkbox_head:checked");
	if( type == 1 ) {
		for( var i = 0; i < all_selected_box.length; i ++ ){
			var uid = $(all_selected_box[i]).attr( "noid" );
			$( "#doc_checkbox_leader_"+uid ).prop( "checked", newval );
			//span.next().find(":first-child").val( newval );
		}
	} else {//优秀
		for( var i = 0; i < all_selected_box.length; i ++ ){
			var uid = $(all_selected_box[i]).attr( "noid" );
			$( "#doc_checkbox_excellent_"+uid ).prop( "checked", newval );
			//span.next().find(":first-child").val( newval );
		}
	}
	set_submit_enable();//确定按钮有效
}


//确定按钮
function doc_edit_submit_handle(elem){
	//alert( "ter" );
	var submit_button = $("#doc_op_submit");
	submit_button.attr( "disabled", true );
	submit_button.attr( "title", "正在提交到服务器上……" );

	var all_head_checkbox = $(".doc_checkbox_head");

	var token = "&n&b&";
	var str = "";
	for( var i = 0; i < all_head_checkbox.length; i ++ ){
		var uid = $( all_head_checkbox[i]).attr( "noid" );
		var elem_t = $("#doc_time_set_"+uid).find(":first-child");//时间
		var elem_p = $("#doc_level_set_"+uid).find(":first-child");//评价
		var elem_l = $("#doc_checkbox_leader_"+uid);//是否带队
		var elem_e = $("#doc_checkbox_excellent_"+uid);//是否优秀
		var elem_c = $("#doc_comment_set_"+uid );//评论
		//alert( elem_t.val() );
		//alert( elem_p.find(":selected").text() );
		//alert( elem_l.prop("checked") );
		//alert( elem_e.prop("checked") );
		//alert( elem_c.val() );
		str += uid+token+elem_t.val() + token + elem_p.find(":selected").text() + token + (elem_l.prop("checked")?1:0) + token + (elem_e.prop("checked")?1:0) +token+ elem_c.val() + token;
	}
	alert( str );

	var docid = $(elem).attr("docid");
	$.ajax({ 
		type:"POST",
		url:"./handle/actz.php",
		data:{setStr:str, type:"setpart", documentId: docid },
		success:function(html){
			alert(html);
			var submit_button = $("#doc_op_submit");
			submit_button.attr( "disabled", true );
			submit_button.attr( "title", "之前的修改已保存，您还没有新的修改" );

			
			$("#doc_op_submit").attr( "disabled", false );
			$("#doc_op_submit").attr( "title", "提交您所做的修改，提交后志愿时间将会公示一周，并且除非有异议不得再修改！" );
		}
	});
}

//提交按钮
function submit_doc(elem){
	$("#doc_op_submit").attr( "disabled", false );
	$("#doc_op_submit").attr( "title", "正在向服务器提交您的请求……" );

	$.ajax({ 
		type:"POST",
		url:"./handle/actz.php",
		data:{ type:"submit", documentId: $(elem).attr("docid") },
		success:function(html){
			if( html == 0){
				alert( "提交成功！" );
			} else {
				alert( html );
			}
		}
	});
}