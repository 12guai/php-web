<?php 
include('system/inc.php');
$wangzhi=$mkcms_domain."slide.php?cid=movie";
$listm=json_decode(file_get_contents($wangzhi),true);
include('template/'.$mkcms_bdyun.'/movie.php');?>