<?php

$_BASE_PATH = "../../";
$_SMARTY_ROOT = "../tpls";

include_once '../../sys/core/init.inc.php';

$act_list = array();

$team = new Team();
$act_info = $team->fetch_act_all( $_SESSION[User::USER][User::FACULTY_ID], 2 );//��ȡͨ����˵Ļ
while( $act_row = mysql_fetch_array( $act_info ) ) {
	$act_list[] = array(
		"id"=>$act_row['id'],
		"name"=>$act_row['name'],
	);
}
$act_info = $team->fetch_act_all( $_SESSION[User::USER][User::FACULTY_ID], 0 );//��ȡ��ɵĻ
while( $act_row = mysql_fetch_array( $act_info ) ) {
	$act_list[] = array(
		"id"=>$act_row['id'],
		"name"=>$act_row['name'],
	);
}

$tpl->assign( "act_list", $act_list );

$tpl->display( "include/act_time.html" );

?>