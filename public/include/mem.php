<?php

$_BASE_PATH = "../../";
$_SMARTY_ROOT = "../tpls";
include_once '../../sys/core/init.inc.php';



$tpl->display( "include/mem.html" );

?>

页面内容：<br />
嘿，这里显示团队成员<br />
<br />
页面参数：<br />
无<br />
<br />
其他：<br />
当前团队id请直接从SESSION获取<br />

<div id="debug" class="">
	
</div>
