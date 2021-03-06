<?php

include_once '../sys/core/init.inc.php';
include './include/header.php';
include './include/act_left.php';
function strlen_utf8($str) 
{  
	$i = 0;  
	$count = 0;  
	$len = strlen ($str);  
	while ($i < $len) 
	{  
		$chr = ord ($str[$i]);  
		$count++;  
		$i++;  
		if($i >= $len) break;  
		if($chr & 0x80) 
		{  
			$chr <<= 1;  
			while ($chr & 0x80) 
			{  
				$i++;  
				$chr <<= 1;  
			}  
		}  
	}  
	return $count;  
}  

$activity_id = intval($_GET['act_id']);
$act = new Act();
$item = $act->fetch_one($activity_id);


//生成活动快捷报名的二维码
include('./plugin/phpqrcode/qrlib.php'); 
$tempDir = "./QRCode/"; 
$codeContents = 'http://volunteer.nju.edu.cn/info/public/quick_participate.php?act_id='.$activity_id; 
QRcode::png($codeContents, $tempDir.$activity_id.'.png', QR_ECLEVEL_M, 4, 1); 




$tpl->assign( "id", $activity_id);
if ($item['cover_pic']!=NULL)
{
	$tpl->assign("picture",$_PIC_PATH.$item['cover_pic']);//取出封面图片
	$tpl->assign("picture_name",$item['cover_pic']);
}
else
{
	$tpl->assign("picture",$_PIC_PATH."default.jpg");//取出封面图片
	$tpl->assign("picture_name","default.jpg");
}

if (isset($_SESSION[User::USER][User::PERM_ID]))
{
	if ($_SESSION[User::USER][User::PERM_ID]==3)//超管要上传，你有意见？
		$perm_of_upload=1;
	else 
	{
		if ($_SESSION[User::USER][User::PERM_ID]==2)
		{
			if ($item['publisher']==$_SESSION[User::USER][User::ID])//判断本活动是否为本院系举办，如果是的话，则可以上传图片
				$perm_of_upload=1;
			else $perm_of_upload=0;
		}else 
			if ($_SESSION[User::USER][User::PERM_ID]==1)//判断本活动您是否参加过，参加过的可以上传照片
			{
				$u=new User();
				if ($u->a_member_of($activity_id))//一堆判断之后，终于参加过活动的个人可以上传图片了
					$perm_of_upload=1;
				else 
					$perm_of_upload=0;
			}
	}
}else
{
	$perm_of_upload=0;
}

$tpl->assign("perm_of_upload",$perm_of_upload);
/*switch($item['state']){
	case "audited" :$tpl->assign( "act_state", "已审核" );break;
	case "auditing" :$tpl->assign( "act_state", "未审核" );break;
	default : $tpl->assign( "act_state","未知类型" );
}//*/
$now=date("Y-m-d H:i:s",time());
if ($item['state']=='auditing') $state='审核中';
else if ($item['state']=='editing') $state='编辑中';
else if ($item['state']=='end') $state='已结束';
else if ($now<$item['deadline']) $state='正在招募';
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
if ($item["faculty_limit"]!="")
	$faculty_limit=$item["faculty_limit"];
else
	$faculty_limit="无（这才和谐）";
	

$detail_time=$item["detail_time"];
if (strlen_utf8($detail_time)>22)
$detail_time=mb_substr($detail_time,0,22)."...";

$begin=explode(" ",$item['begin_time']);
$end=explode(" ",$item['end_time']);
$deadline=explode(" ",$item['deadline']);
$same_act =$act->find_same($activity_id);
$tpl->assign("act_state",$state);
$tpl->assign( "same_act", $same_act);
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
$tpl->assign( "responser", $item['responser']);
$tpl->assign( "responser_tel", $item['responser_tel']);
$tpl->assign( "team_name", $act->fetch_team_name($activity_id));
$tpl->assign("act_faculty_limit",$faculty_limit);
$tpl->assign("detail_time",$detail_time);
if ($item==NULL)
	echo '<script>alert("您找的活动不存在");</script>';
else
	$tpl->display('act_dtl.html');
?>