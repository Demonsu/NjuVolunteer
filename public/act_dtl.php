<?php

include_once '../sys/core/init.inc.php';
include './include/header.php';
include './include/act_left.php';
$activity_id = $_GET['act_id'];
$act = new Act();
$item = $act->fetch_one($activity_id);
$tpl->assign( "id", $activity_id);
$re=$act->fetch_photo($activity_id);
$photo=mysql_fetch_assoc($re);
if ($photo['pic_name']!=NULL)
	$picture=$photo['pic_name'];
else
	$picture="default.jpg";
$tpl->assign("picture",$picture);
/*switch($item['state']){
	case "audited" :$tpl->assign( "act_state", "已审核" );break;
	case "auditing" :$tpl->assign( "act_state", "未审核" );break;
	default : $tpl->assign( "act_state","未知类型" );
}//*/
$now=date("Y-m-d H:i:s",time());
if ($now<$item['deadline']) $state='正在招募';
else if($now>$item['begin_time'] && $now<$item['end_time']) $state="进行中";
else if ($now>$item['end_time']) $state="已结束";

switch($item['time_type']){
	case "longtime" : $tpl->assign( "act_time_type", "长期活动" );break;
	case "temp": $tpl->assign( "act_time_type", "临时活动" );break;
	default : $tpl->assign("act_time_type","未知类型");
}

switch($item['attribution_type']){
	case "helpdisabled" : $tpl->assign( "act_attr_type", "助残" );break;
	case "supporteducation" : $tpl->assign( "act_attr_type", "支教");break;
	case "helptheold" : $tpl->assign( "act_attr_type", "扶老");break;
	case "bigmatch" : $tpl->assign( "act_attr_type", "大型赛事");break;
	case "campus" : $tpl->assign( "act_attr_type", "校园");break;
	default : $tpl->assign( "act_attr_type", "其他");
}
$begin=explode(" ",$item['begin_time']);
$end=explode(" ",$item['end_time']);
$deadline=explode(" ",$item['deadline']);
$same_act =$act->find_same($activity_id);
$tpl->assign("act_state",$state);
$tpl->assign( "act_same", $same_act);
$tpl->assign( "id", $activity_id);
$tpl->assign( "act_place", $item['place'] );
$tpl->assign( "act_profile", htmlspecialchars_decode($item['profile'],ENT_QUOTES) );
$tpl->assign( "act_title", $item['name'] );
$tpl->assign( "act_begin_time", $begin[0] );
$tpl->assign( "act_end_time", $end[0]);
$tpl->assign( "last_time", $item['last_time'] );
$tpl->assign( "signupnum", $item['offer_num'] );
$tpl->assign( "total_num", $item['total_num'] );
$tpl->assign( "deadline", $deadline[0] );
$tpl->assign( "act_id", $activity_id);

$comment_info=$act->get_comment($activity_id);

$tpl->assign( "comment_detail",$comment_info);

$tpl->display('act_dtl.html');
?>