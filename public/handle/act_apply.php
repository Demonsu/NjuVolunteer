<?php
$_BASE_PATH = "../../";

include_once '../../sys/core/init.inc.php';


	/*$name		= 	$_POST['activity_name'];
	$place  		= 	$_POST['activity_place'];
	$time_type 	= 	$_POST['time_type'];
	$attribution_type  	= 	$_POST['attribution_type'];
	$begin_time 		= 	$_POST['begin_time'];
	$end_time		= 	$_POST['end_time'];
	$detail_time  	= 	$_POST['detail_time'];
	$total_num  		= 	$_POST['total_num'];
	$need_audit  		= 	$_POST['need_audit'];
	$responser  		= 	$_POST['responser'];
	$responser_tel  		= 	$_POST['responser_tel'];
	$last_time  		= 	$_POST['last_time'];
	$activity_profile	=	$_POST['activity_profile'];
	$state              = $_POST['state'];
	$accepted_num		=0;
	$offer_num			=0;
	$begin_time=$begin_time." 00:00:0";
	$end_time=$end_time." 00:00:0";*/
	$publisher=$_SESSION[User::USER][User::ID];
	$act=new Act();
	$result=$act->update_act($_POST['id'],$_POST['activity_name'],$_POST['activity_place'],$_POST['time_type'],$_POST['attribution_type'],$_POST['begin_time'],$_POST['end_time'],$_POST['deadline'],$_POST['detail_time'],$_POST['total_num'],$_POST['need_audit'],$_POST['responser'],$_POST['responser_tel'],$_POST['last_time'],$_POST['activity_profile'],$_POST['state'],$publisher,$_POST['weekday_time'],$_POST['other_language'],$_POST['faculty_limit'],$_POST['cet4'],$_POST['cet6']);
	if($_POST['state']=='auditing')
	{
		$s=new System();
		$s->send_email("245681117@qq.com","你好","这是一个测试");
	}
	if ($result==1) echo "1";
		else echo"0";
	/*$query="select name from activity_info where name='".$name."'";
	$select=mysql_query($query,$root_conn);
	if(mysql_num_rows($select) == 0) {
		$insert = "
		insert into activity_info 
		( 	
			name,place,time_type,attribution_type,
			detail_time,total_num,need_audit,
			responser,responser_tel,last_time,
			begin_time,end_time,state,profile,publisher
		) 
		values
		(
			'".$name."','".$place."','".$time_type."','".$attribution_type."',
			'".$detail_time."','".$total_num."','".$need_audit."',
			'".$responser."','".$responser_tel."','".$last_time."',
			'".$begin_time."','".$end_time."','".$state."','".$activity_profile."',
			18
				
		);";
		if (!mysql_query($insert,$root_conn))
		{
		  die('Error: ' . mysql_error());
		}
		echo "1";
	}else
	{
		echo "0";
	}*/

?>