<?php

$_BASE_PATH = "../../";
$_SMARTY_ROOT = "../tpls";
include_once '../../sys/core/init.inc.php';

if( !isset( $_SESSION[User::USER][User::FACULTY_ID] ) ){
	echo "<p>��¼��Ϣ��ʧЧ�������µ�¼��</p>";
	exit;
}

$tpl->display( "include/infot_chxpsd.html" );

?>