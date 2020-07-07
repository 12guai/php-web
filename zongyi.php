<?php include('system/inc.php');
$wangzhi=$mkcms_domain."slide.php?cid=zy";
$listz=json_decode(file_get_contents($wangzhi),true);
include('template/'.$mkcms_bdyun.'/zongyi.php');?>