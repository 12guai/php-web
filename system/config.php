<?php
error_reporting(0); 
$movie="";
$tv="";
$dm="";
$zy="";
$cx="";
$mv="";
$zb="";
$index="";
$live="";
$meipai="";
$music="";
$hy="";
$top="";
$result = mysqli_query($conn,'select * from mkcms_system where id = 1');
$row = mysqli_fetch_array($result);
$mkcms_domain = $row['s_domain'];
$mkcms_name = $row['s_name'];
$mkcms_seoname = $row['s_seoname'];
$mkcms_keywords = $row['s_keywords'];
$mkcms_description = $row['s_description'];
$mkcms_copyright = $row['s_copyright'];
$mkcms_cache = $row['s_cache'];
$mkcms_wei = $row['s_wei'];
$mkcms_user = $row['s_user'];
$mkcms_logo = $row['s_logo'];
$mkcms_mjk = $row['s_mjk'];
$mkcms_jiekou = $row['s_jiekou'];
$mkcms_qqun = $row['s_qqun'];
$mkcms_token= $row['s_token'];
$mkcms_bdyun= $row['s_bdyun'];
$mkcms_tongji= $row['s_tongji'];
$mkcms_qianxian= $row['s_qianxian'];
$mkcms_dianying= $row['s_dianying'];
$mkcms_dianshi= $row['s_dianshi'];
$mkcms_zongyi= $row['s_zongyi'];
$mkcms_dongman= $row['s_dongman'];
$mkcms_tuiguang= $row['s_tuiguang'];
$mkcms_shoufei= $row['s_shoufei'];
$mkcms_cishu= $row['s_cishu'];
$mkcms_gx= $row['s_gx'];
$mkcms_hong= $row['s_hong'];
$mkcms_bofang= $row['s_bofang'];
$mkcms_fengmian= $row['s_fengmian'];
$mkcms_mail= $row['s_mail'];
$mkcms_smtp= $row['s_smtp'];
$mkcms_muser= $row['s_muser'];
$mkcms_mpwd= $row['s_mpwd'];
$mkcms_wappid= $row['s_wappid'];
$mkcms_wkey= $row['s_wkey'];
$mkcms_alipay= $row['s_alipay'];
$mkcms_appid= $row['s_appid'];
$mkcms_appkey= $row['s_appkey'];
$mkcms_appewm= $row['s_appewm'];
$mkcms_appbt= $row['s_appbt'];
$mkcms_apppic= $row['s_apppic'];
$mkcms_appurl= $row['s_appurl'];
$mkcms_hctime= $row['s_hctime'];
$mkcms_beijing= $row['s_beijing'];
$mkcms_dianyingnew= $row['s_dianyingnew'];
$mkcms_dongmannew= $row['s_dongmannew'];
$mkcms_zongyinew= $row['s_zongyinew'];
$mkcms_zhifu= $row['s_zhifu'];
$mkcms_guanzhu= $row['s_guanzhu'];
$mkcms_miaoshu= $row['s_miaoshu'];
$mkcms_hz= $row['s_hz'];
$mkcms_yq= $row['s_yq'];
$mkcms_cxzy= $row['s_cxzy'];
$mkcms_mv= $row['s_mv'];
$mkcms_zixun= $row['s_zixun'];
$mkcms_yy= $row['s_yy'];
$mkcms_slow= $row['s_slow'];
$mkcms_dataoke= $row['s_dataoke'];
$mkcms_dataokeid= $row['s_dataokeid'];
$mkcms_gg= $row['s_gg'];
$mkcms_gonggao= $row['s_gonggao'];
$mkcms_tk= $row['s_tk'];
$mkcms_tancgonggao= $row['s_tancgonggao'];
$mkcms_tancurl= $row['s_tancurl'];
$mkcms_tanchuangfenzhong= $row['s_tanchuangfenzhong'];
$mkcms_order= $row['s_order'];
$cresult = mysqli_query($conn,'select * from mkcms_diy where id = 1');
$crow = mysqli_fetch_array($cresult);
$mkcms_zbcode = $crow['s_zbcode'];
$mkcms_hallcode = $crow['s_hallcode'];
$mkcms_fulicode = $crow['s_fulicode'];
//广告获取
$result1 = mysqli_query($conn,'select * from mkcms_ad where catid = 1');
$row1 = mysqli_fetch_array($result1);
$mkcms_ad1 =$row1['pic'];
$result2 = mysqli_query($conn,'select * from mkcms_ad where catid = 2');
$row2 = mysqli_fetch_array($result2);
$mkcms_ad2 =$row2['pic'];
$result3 = mysqli_query($conn,'select * from mkcms_ad where catid = 3');
$row3 = mysqli_fetch_array($result3);
$mkcms_ad3 =$row3['pic'];
$result4 = mysqli_query($conn,'select * from mkcms_ad where catid = 4');
$row4 = mysqli_fetch_array($result4);
$mkcms_ad4 =$row4['pic'];
$result5 = mysqli_query($conn,'select * from mkcms_ad where catid = 5');
$row5 = mysqli_fetch_array($result5);
$mkcms_ad5 =$row5['pic'];
$result6 = mysqli_query($conn,'select * from mkcms_ad where catid = 6');
$row6 = mysqli_fetch_array($result6);
$mkcms_ad6 =$row6['pic'];
$result7 = mysqli_query($conn,'select * from mkcms_ad where catid = 7');
$row7 = mysqli_fetch_array($result7);
$mkcms_ad7 =$row7['pic'];
$result8 = mysqli_query($conn,'select * from mkcms_ad where catid = 8');
$row8 = mysqli_fetch_array($result8);
$mkcms_ad8 =$row8['pic'];
$result9 = mysqli_query($conn,'select * from mkcms_ad where catid = 9');
$row9 = mysqli_fetch_array($result9);
$mkcms_ad9 =$row9['pic'];
$result10 = mysqli_query($conn,'select * from mkcms_ad where catid = 10');
$row10 = mysqli_fetch_array($result10);
$mkcms_ad10 =$row10['pic'];
$result11 = mysqli_query($conn,'select * from mkcms_ad where catid = 11');
$row11 = mysqli_fetch_array($result11);
$mkcms_ad11 =$row11['pic'];
$result12 = mysqli_query($conn,'select * from mkcms_ad where catid = 12');
$row12 = mysqli_fetch_array($result12);
$mkcms_ad12 =$row12['pic'];
$result13 = mysqli_query($conn,'select * from mkcms_ad where catid = 13');
$row13 = mysqli_fetch_array($result13);
$mkcms_ad13 =$row13['pic'];
$result14 = mysqli_query($conn,'select * from mkcms_ad where catid = 14');
$row14 = mysqli_fetch_array($result14);
$mkcms_ad14 =$row14['pic'];
$result15 = mysqli_query($conn,'select * from mkcms_ad where catid = 15');
$row15 = mysqli_fetch_array($result15);
$mkcms_ad15 =$row15['pic'];
$result16 = mysqli_query($conn,'select * from mkcms_ad where catid = 16');
$row16 = mysqli_fetch_array($result16);
$mkcms_ad16 =$row16['pic'];
$result17 = mysqli_query($conn,'select * from mkcms_ad where catid = 17');
$row17 = mysqli_fetch_array($result17);
$mkcms_ad17 =$row17['pic'];
$result18 = mysqli_query($conn,'select * from mkcms_ad where catid = 18');
$row18 = mysqli_fetch_array($result18);
$mkcms_ad18 =$row18['pic'];
$result19 = mysqli_query($conn,'select * from mkcms_ad where catid = 19');
$row19 = mysqli_fetch_array($result19);
$mkcms_ad19 =$row19['pic'];
$result20 = mysqli_query($conn,'select * from mkcms_ad where catid = 20');
$row20 = mysqli_fetch_array($result20);
$mkcms_ad20 =$row20['pic'];
$result21 = mysqli_query($conn,'select * from mkcms_ad where catid = 21');
$row21 = mysqli_fetch_array($result21);
$mkcms_ad21 =$row21['pic'];
$result22 = mysqli_query($conn,'select * from mkcms_ad where catid = 22');
$row22 = mysqli_fetch_array($result22);
$mkcms_ad22 =$row22['pic'];
$result23 = mysqli_query($conn,'select * from mkcms_ad where catid = 23');
$row23 = mysqli_fetch_array($result23);
$mkcms_ad23 =$row23['pic'];
$result24 = mysqli_query($conn,'select * from mkcms_ad where catid = 24');
$row24 = mysqli_fetch_array($result24);
$mkcms_ad24 =$row24['pic'];
$result25 = mysqli_query($conn,'select * from mkcms_ad where catid = 25');
$row25 = mysqli_fetch_array($result25);
$mkcms_ad25 =$row25['pic'];
?>