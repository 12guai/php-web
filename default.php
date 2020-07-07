<?php include('system/inc.php');
$wangzhi=$mkcms_domain."slide.php";
$list1=json_decode(file_get_contents($wangzhi),true);
include('template/'.$mkcms_bdyun.'/index.php');?>