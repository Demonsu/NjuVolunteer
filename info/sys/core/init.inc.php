<?php

if( !isset($_BASE_PATH) ) $_BASE_PATH = "../";
$_PIC_PATH="/info/public/Upload/picture/";
require_once( $_BASE_PATH.'sys/config/safe_guard.php');
include $_BASE_PATH.'sys/config/smarty_init.inc.php';
include $_BASE_PATH.'sys/config/db-cred.inc.php';

foreach( $Const as $name => $val ){
	define( $name, $val );
}

function __autoload($class_name){
	$filename = "D:/xampp/htdocs/NjuVolunteer/info/sys/class/class.".$class_name.".inc.php";
	if( file_exists($filename) ){
		include_once( $filename );
	}
}

spl_autoload_register("__autoload");

?>