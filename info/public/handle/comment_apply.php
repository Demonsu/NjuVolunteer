<?php 
$_BASE_PATH = "../../";

include_once '../../sys/core/init.inc.php';


$content = $_POST['content'];
if (isset($_SESSION[User::USER][User::ID]))
	$user_id = $_SESSION[User::USER][User::ID];
else $user_id="id";
$act_id = $_POST['act_id'];


$resp_id = $_POST['res_id'];//-1时表示直接评论给活动

	//$resp_id=101220129;
$time = date("Y-m-d H:i:s",time());

$act=new Act();
if ($content != ""){
	//if ($_POST['res_id'] != $user_id){
	$result = $act->new_comment($user_id,$act_id,$resp_id,$content,$time);
	$act_info=$act->fetch_one($act_id);
	if($user_id!=$act_info['publisher'])
	{
		$s=new System();
		$title="有人评论了您的活动";
		$content=$act_info['name']."有了新的评论，快去查看吧";
		if (!$s->check_same_note($act_info['publisher'],$title,$content))
		{

			$s->send_note($act_info['publisher'],$title,$content);
		}
	}
	//	if ($result == 1)
	//		echo "评论成功";
	//	else
	//		echo "评论失败";
//
}
else
	echo "评论内容不能为空";
//$comment_info=$act->get_comment($act_id);
//$tpl->assign( "comment_detail",$comment_info);

?>