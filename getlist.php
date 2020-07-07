<?php
error_reporting(0);
header('Content-Type:text/html;charset=UTF-8');
function fileget($url,$timeout = 5) {
	$user_agent = "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36";
	$curl = curl_init(); 
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_USERAGENT,$user_agent);
	curl_setopt($curl, CURLOPT_REFERER,$url) ;
	curl_setopt($curl, CURLOPT_AUTOREFERER, 1);
	curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
	curl_setopt($curl, CURLOPT_HEADER, 0); 
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION,1);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, '0');
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, '0');
	curl_setopt($curl, CURLOPT_ENCODING, '');
	return curl_exec($curl);
	curl_close($curl);
}
$cat=$_GET['cat'];//类型
$year=intval($_GET['year']);//年份
if($year==0)$year='all';
$area=$_GET['area'];//地区
$act=$_GET['act'];//主演
$rank=$_GET['rank'];//火热
$pageno=intval($_GET['pageno']);
if($pageno==0){$pageno=1;}//页数
if($year==''){$year='all';}
if($cat==''){$cat='all';}
if($area==''){$area='all';}
if($act==''){$act='all';}
$leixing=$_GET['leixing'];
if($leixing=="dongman"){$wangzhi="http://www.360kan.com/$leixing/list.php?cat=$cat&year=$year&area=$area&rank=$rank&pageno=$pageno";}
else{$wangzhi="http://www.360kan.com/$leixing/list.php?cat=$cat&year=$year&area=$area&act=$act&rank=$rank&pageno=$pageno";}
$fcon=fileget($wangzhi,5);
$text ='#<div class="s-tab-main">[\s\S]*?<div class="s-common-body">#';
preg_match_all($text,$fcon,$arr);
$html = $arr[0][0];
$vname='#<span class="s1">(.*?)</span>#';
$fname='#<span class="point">(.*?)</span>#';
$vlist='#<a class="js-tongjic" href="(.*?)">#';
$vstar='#<p class="star">(.*?)</p>#';
$vimg='#<img src="(.*?)">#'; 
$jishu='#<span class="hint">(.*?)</span>#'; 
$fufei='#<span class="pay">(.*?)</span>#';  
preg_match_all($vname, $html,$xarr0); 
preg_match_all($vlist, $html,$xarr1); 
preg_match_all($vstar, $html,$xarr2); 
preg_match_all($vimg,  $html,$xarr3);  
preg_match_all($jishu, $html,$xarr4); 
preg_match_all($fufei, $html,$xarr5); 
preg_match_all($fname, $html,$xarr6);
$xname=$xarr0[1];
$xlist=$xarr1[1];
$xstar=$xarr2[1];
$ximg=$xarr3[1];
$xjishu=$xarr4[1];
$xfufei=$xarr5[1];
$lname=$xarr6[1];
$array = array();
$i=0;
foreach ($xname as $k => $name){
$array[$k]['num'] = $i;
$array[$k]['title'] = $xname[$k];
$array[$k]['cover'] = $ximg[$k];
$array[$k]['tag'] = $xjishu[$k];
$array[$k]['desc'] = $xstar[$k];
$array[$k]['link'] = $xlist[$k];
$array[$k]['point'] = $lname[$k];
$i++;}
echo '{"page":{"pagecount":"'.$i.'"},"data":'.json_encode($array,true).'}';
?>