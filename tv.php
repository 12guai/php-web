<?php include('system/inc.php');
$wangzhi=$mkcms_domain."slide.php?cid=tv";
$listt=json_decode(file_get_contents($wangzhi),true);
include('template/'.$mkcms_bdyun.'/tv.php');?>