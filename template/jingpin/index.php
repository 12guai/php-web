<?php
error_reporting(0); 
header('Content-type:text/html;charset=utf-8'); 
include 'head.php';
include 'data/bangdan.php';
$index='active';
?>
<title><?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="<?php echo $mkcms_keywords ;?>">
<meta name="description" content="<?php echo $mkcms_description;?>">
</head>
<body style="padding: 0;">
<style type="text/css">
.stui-header__top{ background: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0) 100%);}
.stui-header__top.headroom--not-top{ background: #292838;}
.am-slider-desc {
    background-color: rgba(0,0,0,.7);
    width: 100%;
    color: #f8f8f8;
}
.am-slider-content {
    background-color: rgba(0,0,0,.7);
    position: absolute;
    bottom: 0;
    width: 100%;
    color: #e4dddd;
    }
	h3.am-slider-title {
    color: #fff;
	text-align: center;
}
</style>
<?php  include 'header.php';?>
<!-- 幻灯片 -->
<div id="banner" data-ride="carousel" class="stui-banner carousel slide">
<a class="carousel-control left" href="#banner" data-slide="prev"><i class="icon iconfont icon-back"></i></a>
<a class="carousel-control right" href="#banner" data-slide="next"><i class="icon iconfont icon-more"></i></a>
<div class="carousel-inner">
<?php
if($mkcms_slow == 0){
for ($i=0;$i<6;$i++){
echo '<div class="item stui-banner__item ';
if ($i<1){echo 'active';}
echo '"><a class="stui-banner__pic" href="/seacher-'.$list1['data'][$i]['link'].'.html" alt="'.$list1['data'][$i]['link'].'" style="background: url('.$list1['data'][$i]['cover'].') rgba(98,71,136,0) no-repeat; background-position: center center; background-size: cover; display: block; width: 100%; height: 100%;" title="'.$list1['data'][$i]['link'].'"><div class="am-slider-desc hidden-lg"><div class="am-slider-content"><h3 class="am-slider-title">'.$list1['data'][$i]['link'].' - '.$list1['data'][$i]['desc'].'</h3><p></p></div></div></a></div>';}}?>
<?php
if($mkcms_slow == 1){
$result = mysqli_query($conn,'select * from mkcms_slideshow order by s_order asc');
while($row = mysqli_fetch_array($result)){$i=$row['s_order'];?>
<div class="item stui-banner__item<?php if($i==0){echo ' active';}?>">
<a class="stui-banner__pic" href="<?php echo $row['s_url'];?>"  alt="<?php echo $row['s_name'];?>" target="_blank" style="background: url(<?php echo $row['s_picture'];?>) rgba(98,71,136,0) no-repeat; background-position: center center; background-size: cover; display: block; width: 100%; height: 100%;" title="<?php echo $row['s_name'];?>"></a></div>
<?php }}?>
</div>
<div class="stui-banner__switch clearfix hidden-sm hidden-xs">
	<div class="container">
		<div class="row">
		<ul class="carousel-indicators">
<?php
if($mkcms_slow == 0){
for ($i=0;$i<6;$i++){
echo '<li data-target="#banner" data-slide-to="'.$i.'" class="';
if ($i<1){echo 'active';}
echo '"><span class="stui-vodlist__thumb" data-original="'.$list1['data'][$i]['cover'].'" style="background: url('.$list1['data'][$i]['cover'].') no-repeat; padding-top: 45%; background-position: 50% 50%; background-size: cover;" title="'.$list1['data'][$i]['link'].'"></span></li>';}}?>
<?php
if($mkcms_slow == 1){
$result = mysqli_query($conn,'select * from mkcms_slideshow order by s_order asc');
while($row = mysqli_fetch_array($result)){$i=$row['s_order'];?>
<li data-target="#banner" data-slide-to="<?php echo $i;?>"<?php if($i==0){echo ' class="active"';}?>>
<span class="stui-vodlist__thumb" data-original="<?php echo $row['s_picture'];?>" style="background: url(<?php echo $row['s_picture'];?>) no-repeat; padding-top: 45%; background-position: 50% 50%; background-size: cover;" title="<?php echo $row['s_name'];?>"></span></li><?php }}?>
</ul>
</div>
</div>
</div>
</div>
<style type="text/css">
.stui-banner__pic{ padding-top: 29%; background-position: center center !important;}
@media (max-width:1023px){.stui-banner__pic{ padding-top: 40%; background-position: 50% 50% !important; background-size: cover !important;}}
</style><!-- 幻灯片 -->
<!-- 筛选 -->
<div class="stui-pannel stui-pannel-screen hidden-sm hidden-xs clearfix" style="margin-bottom: 0;">
<div class="stui-pannel-box">
<div class="container">
<div class="row">
<ul class="stui-index__screen col-pd clearfix">
<li class="type-slide m-bottom-line">
<a href="movie.html"><dt>电<br>    影</dt></a>
<a href='movie_103____rankhot_1.html'>喜剧</a>
<a href='movie_100____rankhot_1.html'>爱情</a>
<a href='movie_106____rankhot_1.html'>动作</a>
<a href='movie_102____rankhot_1.html'>恐怖</a>
<a href='movie_104____rankhot_1.html'>科幻</a>
<a href='movie_112____rankhot_1.html'>剧情</a>
</li>		
<li class="type-slide m-bottom-line">
<a href="tv.html"><dt>剧<br>    集</dt></a>
<a href='tv_103____rankhot_1.html'>警匪</a>
<a href='tv_108____rankhot_1.html'>悬疑</a>
<a href='tv_111____rankhot_1.html'>都市</a>
<a href='tv_100____rankhot_1.html'>偶像</a>
<a href='tv_104____rankhot_1.html'>古装</a>
<a href='tv_107____rankhot_1.html'>军事</a>
</li>
<li class="type-slide m-bottom-line">
<a href="zongyi.html"><dt>综<br>    艺</dt></a>
<a href='zongyi_101___rankhot_1.html'>选秀</a>
<a href='zongyi_107___rankhot_1.html'>搞笑</a>
<a href='zongyi_103___rankhot_1.html'>访谈</a>
<a href='zongyi_112___rankhot_1.html'>体育</a>
<a href='zongyi_113___rankhot_1.html'>纪实</a>
<a href='zongyi_114___rankhot_1.html'>科教</a>
</li>
<li class="type-slide m-bottom-line">
<a href="dongman.html"><dt>动<br>    漫</dt></a>
<a href='dongman_100___rankhot_1.html' class='acat'>热血</a>
<a href='dongman_101___rankhot_1.html' class='acat'>恋爱</a>
<a href='dongman_104___rankhot_1.html' class='acat'>校园</a>
<a href='dongman_106___rankhot_1.html' class='acat'>幻想</a>
<a href='dongman_118___rankhot_1.html' class='acat'>成人</a>
<a href='dongman_108___rankhot_1.html' class='acat'>悬疑</a>
</li>
</ul>
</div>
</div>
</div>
</div><!-- 筛选 -->	
<!-- 公告start -->
<div class="stui-pannel-bg clearfix" style="background-color: #ff6600;">
<div class="clearfix">
<div class="container stui-pannel_hd">
<div class="stui-pannel__head clearfix">
	<li class="active">
		<table border="0" width="100%">
			<tbody><tr>
			<td width="22" height="22">
			<img src="images/notice.png" width="22" height="22">
			</td>
			<td width="12" height="22"></td>
			<td><strong><marquee scrollamount="6" direction="left" align="Middle" style="padding-right:20px;color:#fff;"><?php echo $mkcms_gonggao;?></marquee></strong></td>
			</tr>
			</tbody>
		</table>
	</li>
  </div>
  </div>
</div>
</div><!-- 公告end -->	
<div class="container">
<div class="row">
<div class="stui-pannel stui-pannel-bg clearfix">
<ul class="stui-vodlist clearfix">
<?php echo $mkcms_ad2;?>
</ul>
</div>
<div class="stui-pannel stui-pannel-bg clearfix">
	<div class="stui-pannel-box">
		<div class="stui-pannel_hd">
			<div class="stui-pannel__head active bottom-line clearfix">
				<h3 class="title">
				<svg class="iconm" aria-hidden="true"><use xlink:href="#icon-remen"></use></svg>
				热播推荐
				</h3>
				<a class="more text-muted pull-right" href="movie_____rankhot_1.html">更多 <i class="icon iconfont icon-more"></i></a>
			</div>
		</div>
<div class="stui-pannel_bd clearfix">
<ul class="stui-vodlist clearfix">
<?php
$wangzhi=$mkcms_domain."getlist.php?leixing=dianying&rank=rankhot&pageno=1";
$list=json_decode(file_get_contents($wangzhi),true);
$playurl=vod.$list['data'][0]['link'];
$zimg=$list['data'][0]['cover']; 
$zname=$list['data'][0]['title'];
$zstar=$list['data'][0]['desc'];
echo '<li class="col-lg-4-l col-md-4 col-sm-3 col-xs-3 hidden-md hidden-sm hidden-xs">
<div class="stui-vodlist__box stui-vodlist__bg">
<a class="stui-vodlist__thumb active first lazyload" href="'.$playurl.'" title="'.$zname.'" data-original="'.$zimg.'" style="padding-top: 152%;"><span class="play hidden-xs"></span><span class="pic-tag pic-tag-h">HOT</span></a>
<div class="stui-vodlist__detail active">
<h4 class="title text-overflow"><a href="'.$playurl.'" title="">'.$zname.'</a></h4>
<p class="text text-overflow visible-lg"><span class="text-muted"></span>'.$zstar.'</p>
</div>
</div>
</li>';
?>
<?php
$wangzhi=$mkcms_domain."getlist.php?leixing=dianying&rank=rankhot&pageno=1";
$list=json_decode(file_get_contents($wangzhi),true);
for($i=0;$i<11;$i++){
$playurl=vod.$list['data'][$i]['link'];
$zimg=$list['data'][$i]['cover']; 
$zname=$list['data'][$i]['title'];
$zstar=$list['data'][$i]['desc'];
$fname=$list['data'][$i]['point'];
$nname=$list['data'][$i]['tag'];
echo '<li class="col-lg-7 col-md-5 col-sm-3 col-xs-3 ';
if ($i<1){
echo 'hidden-lg hidden-md';
}
if ($i>8){
echo 'hidden-xs';
}
echo '">';
?>
<div class="stui-vodlist__box stui-vodlist__bg">
<a class="stui-vodlist__thumb active lazyload" href="<?php echo $playurl;?>" title="<?php echo $zname;?>" data-original="<?php echo $zimg;?>"><span class="play hidden-xs"></span><?php if(!empty($fname)){echo '<span class="pic-tag pic-tag-h">'.$fname.'</span>';}?></span><span class="pic-tag pic-tag-b"><?php echo $nname?></span></a>
<div class="stui-vodlist__detail active">
<h4 class="title text-overflow"><a href="<?php echo $playurl;?>" title="<?php echo $zname;?>"><?php echo $zname;?></a></h4>
</div>
</div>
</li>
<?php } ?>
</ul>
</div>
</div>
</div>
<!--商品推荐-->
<?php if($mkcms_tk==1){?>
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<a class="more text-muted pull-right" href="shop.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title">
<svg class="iconm" aria-hidden="true">
    <use xlink:href="#icon-shopping"></use>
</svg>
<a href="shop.html">商品推荐</a></h3>
</div>
</div>
<div class="stui-pannel_bd clearfix">
<ul class="stui-vodlist clearfix">
<?php
error_reporting(0);
ini_set('user_agent','Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; SV1; .NET CLR 1.1.4322)');
header('Content-Type:text/html;charset=UTF-8');
$url = $mkcms_dataoke;
$u = $mkcms_dataokeid;
$durl="http://demo.dataoke.com/index.php?r=l&page=1";
$hurl=file_get_contents($durl);
$tid ='#"id":(.*?),"#';
$tpic ='#pic":"(.*?)"#';
$ttitle ='#d_title":"(.*?)"#';
$tyuanjia = '#"yuanjia":(.*?),"#';
$tjiage = '#"jiage":(.*?),"#';
$quan_jine = '#"quan_jine":(.*?),"#';
preg_match_all($tid,$hurl, $xarr1);
preg_match_all($tpic,$hurl, $xarr2);
preg_match_all($ttitle,$hurl, $xarr3);
preg_match_all($tyuanjia,$hurl, $xarr4);
preg_match_all($tjiage,$hurl, $xarr5);
preg_match_all($quan_jine,$hurl, $xarr6);
$xtid = $xarr1[1];
$xtpic = $xarr2[1];
$xttitle = $xarr3[1];
$xyuanjia = $xarr4[1];
$xjiage = $xarr5[1];
$xquan = $xarr6[1];
$i = 0;
foreach ($xtid as $cc => $dd){
if ($i<7){
$pic=$xtpic[$cc];
$title=$xttitle[$cc];
$yuanjia = $xyuanjia[$cc];
$jiage = $xjiage[$cc];
$quan = $xquan[$cc];
$title =  preg_replace_callback('/\\\\u([0-9a-f]{4})/i', create_function('$matches', 'return iconv("UCS-2BE","UTF-8",pack("H*", $matches[1]));'), $title);
echo '<li class="col-md-7 col-sm-3 col-xs-3 ';
if ($i>=6){echo 'hidden-xs';}
echo '">';
	?>
<div class='stui-vodlist__box stui-vodlist__bg'>
<a class='stui-vodlist__thumb lazyload'  style='padding-top:100%;' href='<?php echo $url;?>?r=l/d&u=<?php echo $u;?>&id=<?php echo $dd;?>' target='_blank' title='<?php echo $title;?>' data-original='<?php echo $pic;?>'>
<span class='pic-tag pic-tag-l'>原价<?php echo $yuanjia;?></span>
<span class='pic-tag pic-tag-b' style="color:#red;">￥<?php echo $jiage;?></span>
<span class='pic-tag pic-tag-h' style="color:#red;"><?php echo $quan;?>元券</span>
</a>
<div class='stui-vodlist__detail active'>
<h4 class='title text-overflow'><a href='<?php echo $url;?>?r=l/d&u=<?php echo $u;?>&id=<?php echo $dd;?>' target='_blank' title='<?php echo $title;?>'><?php echo $title;?></a></h4>
</div>
</div>
</li>
<?php $i ++;}} ?> 
</ul>
</div>
</div>
</div>
<!--商品推荐-->
<?php }?>
<!--抢先看-->
<?php if($mkcms_qianxian==1){?>
<div class="stui-pannel stui-pannel-bg clearfix">
<ul class="stui-vodlist clearfix">
</ul>
</div>
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<a class="more text-muted pull-right" href="cx.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title">
<svg class="iconm" aria-hidden="true">
    <use xlink:href="#icon-play"></use>
</svg>
<a href="cx.html">影视尝鲜</a></h3>
</div>
</div>
<div class="stui-pannel_bd clearfix">
<ul class="stui-vodlist clearfix">
<?php
$data=json_decode(file_get_contents($mkcms_cxzy),true);
		for($i=0; $i<7; $i++){
			if (mb_strpos($data['data'][$i]['list_name'], '美女写真') === false) {
			if (mb_strpos($data['data'][$i]['list_name'], '伦理片') === false) {
			if (mb_strpos($data['data'][$i]['list_name'], '福利') === false) {
			if (mb_strpos($data['data'][$i]['list_name'], '伦理') === false) {
			if (mb_strpos($data['data'][$i]['list_name'], '论理') === false) {
			$ccb="./cxplay/".$data['data'][$i]['vod_id'].".html";
			if ($row['d_jifen']>0){
				$ok="onclick=\"return confirm('此视频为收费视频，观看需要支付".$row['d_jifen']."积分，您是否观看？')\"";}
				else{$ok="";}
				echo '<li class="col-md-7 col-sm-3 col-xs-3 ';
				if ($i>=6){echo 'hidden-xs';}
				echo '">';
	?>
<div class='stui-vodlist__box stui-vodlist__bg'>
<a class='stui-vodlist__thumb lazyload' <?php echo $ok;?> href='<?php echo $ccb;?>' title='<?php echo $data['data'][$i]['vod_name'];?>' data-original='<?php echo $data['data'][$i]['vod_pic'];?>'>
<span class='play hidden-xs'></span>
<span class='pic-tag pic-tag-b'><?php echo $data['data'][$i]['vod_year'];?><?php echo $data['data'][$i]['d_year'];?></span>
</a>
<div class='stui-vodlist__detail active'>
<h4 class='title text-overflow'><a href='<?php echo $ccb;?>' title='<?php echo $data['data'][$i]['vod_name'];?>'><?php echo $data['data'][$i]['vod_name'];?></a></h4>
<p class='text text-overflow text-muted hidden-xs'>主演：<?php if(empty($data['data'][$i]['vod_actor'])) {echo "未知";} else{
echo $data['data'][$i]['vod_actor'];}
?></p>
</div>
</div>
</li>
<?php }}}}}} ?> 
</ul>
</div>
</div>
</div>
<?php }?>
<!--抢先看-->
<!--电影-->
<?php if($mkcms_dianying==1){?>
<div class="stui-pannel stui-pannel-bg clearfix">
<ul class="stui-vodlist clearfix">
<?php echo $mkcms_ad4;?>
</ul>
</div> 
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<a class="more text-muted pull-right" href="movie.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title">
<svg class="iconm" aria-hidden="true">
    <use xlink:href="#icon-movie"></use>
</svg>
<a href="movie_____createtime_1.html">最新电影</a></h3>
<ul class="nav nav-text pull-right hidden-sm hidden-xs">
<li><a href="movie___10__rankhot_1.html" class="text-muted">华语强档</a> <span class="split-line"></span></li>
<li><a href="movie_____rankhot_1.html" class="text-muted">网络热映</a> <span class="split-line"></span></li>
<li><a href="movie___11__rankhot_1.html" class="text-muted">欧美范儿</a> <span class="split-line"></span></li>
<li><a href="movie___13__rankhot_1.html" class="text-muted">亚洲风情</a> <span class="split-line"></span></li>
</ul>
</div>
</div>
<div class="stui-pannel_bd clearfix">
<div class="col-lg-wide-8 col-xs-1 padding-0">
<ul class="stui-vodlist clearfix">
<?php
$wangzhi=$mkcms_domain."getlist.php?leixing=dianying&rank=createtime&pageno=1";
$list=json_decode(file_get_contents($wangzhi),true);
for($i=0;$i<12;$i++){
$playurl=vod.$list['data'][$i]['link'];
$zimg=$list['data'][$i]['cover']; 
$zname=$list['data'][$i]['title'];
$zstar=$list['data'][$i]['desc'];
$fname=$list['data'][$i]['point'];
$nname=$list['data'][$i]['tag'];
echo '<li class="col-md-6 col-sm-4 col-xs-3">
<div class="stui-vodlist__box stui-vodlist__bg">
<a class="stui-vodlist__thumb lazyload img-shadow" href="'.$playurl.'" title="'.$zname.'" alt="$name" data-original="'.$zimg.'">
<span class="play hidden-xs"></span>';
if(!empty($fname)){echo '<span class="pic-tag pic-tag-h">'.$fname.'</span>';}
echo '<span class="pic-tag pic-tag-b">'.$nname.'</span>
</a>
<div class="stui-vodlist__detail active">
<h4 class="title text-overflow">
<a href="'.$playurl.'" title="'.$zname.'">'.$zname.'</a>
<p class="text text-overflow text-muted hidden-xs">'.$zstar.'</p>
</h4>
</div>
</div>
</li>';} ?>
</ul>
</div>
<div class="col-lg-wide-2 hidden-md hidden-sm hidden-xs">
<div class="stui-pannel_bd clearfix">
<div class="stui-pannel__head">
<a class="more text-muted pull-right" href="movie.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-bang"></use></svg>影视排行</h3>
</div>
</div>
<div class="stui-pannel_bd clearfix">
	<ul class="stui-vodlist__text active col-pd clearfix">
<?php
foreach ($bdArr['dy']['title'] as $k=>$title){
						$bdurl=$bdArr['dy']['url'][$k];//url
						$bdurl = str_replace("http://www.360kan.com", "", $bdurl);
						$bdurl = str_replace("https://www.360kan.com", "", $bdurl);
						$bdnum=$bdArr['dy']['num'][$k];//num
						$topnum=$bdArr['dy']['top'][$k];//topnum
						$chuandi='./vod'.$bdurl;
		  echo "<li class='col-xs-1 padding-0'><a class='text-overflow' href='$chuandi' title='$title'><span class='am-badge am-round pull-left'>$topnum</span><span class='text-muted pull-right'>$bdnum</span><em class='text-red'></em>&nbsp;$title</a></li>";
}?>
		</ul>
</div>
<div class="stui-pannel_bd">
<div class="stui-pannel__head clearfix">
<a class="more text-muted pull-right" href="movie.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-shoucang-"></use></svg>电影筛选</h3>
</div>
</div>
<div class="stui-pannel_bd col-pd">
<ul class="stui-vodlist__screen clearfix">
<li><a href="movie_103____rankhot_1.html" title="喜剧">喜剧</a></li>
<li><a href="movie_100____rankhot_1.html" title="爱情">爱情</a></li>
<li><a href="movie_106____rankhot_1.html" title="动作">动作</a></li>
<li><a href="movie_102____rankhot_1.html" title="恐怖">恐怖</a></li>
<li><a href="movie_104____rankhot_1.html" title="科幻">科幻</a></li>
<li><a href="movie_112____rankhot_1.html" title="剧情">剧情</a></li>
<li><a href="movie_105____rankhot_1.html" title="犯罪">犯罪</a></li>
<li><a href="movie_108____rankhot_1.html" title="战争">战争</a></li>
<li><a href="movie_115____rankhot_1.html" title="悬疑">悬疑</a></li>
<li><a href="movie_117____rankhot_1.html" title="文艺">文艺</a></li>
<li><a href="movie_118____rankhot_1.html" title="记录">记录</a></li>
<li><a href="movie_121____rankhot_1.html" title="古装">古装</a></li>
</ul>
<ul class="stui-vodlist__screen top-line-dot clearfix">
	<li><a href="movie__2020___rankhot_1.html" title="2020">2020</a></li>
<li><a href="movie__2019___rankhot_1.html" title="2019">2019</a></li>
<li><a href="movie__2018___rankhot_1.html" title="2018">2018</a></li>
<li><a href="movie__2017___rankhot_1.html" title="2017">2017</a></li>
<li><a href="movie__2016___rankhot_1.html" title="2016">2016</a></li>
<li><a href="movie__2015___rankhot_1.html" title="2015">2015</a></li>
<li><a href="movie__2014___rankhot_1.html" title="2014">2014</a></li>
<li><a href="movie__2013___rankhot_1.html" title="2013">2013</a></li>
<li><a href="movie__2012___rankhot_1.html" title="2012">2012</a></li>
<li><a href="movie__2011___rankhot_1.html" title="2011.html">2011</a></li>
<li><a href="movie__2010___rankhot_1.html" title="2010">2010</a></li>
<li><a href="movie__other___rankhot_1.html" title="更早">更早</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<?php }?>
<!--电影-->
<!--HY-->
<div class="stui-pannel stui-pannel-bg clearfix">
<ul class="stui-vodlist clearfix">
<?php echo $mkcms_ad8;?>
</ul>
</div>
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<a class="more text-muted pull-right" href="hy.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title">
<svg class="iconm" aria-hidden="true">
    <use xlink:href="#icon-music"></use>
</svg>
<a href="hy_2168_1.html">美女直播</a></h3>
</div>
</div>
<div class="stui-pannel_bd clearfix">
<ul class="stui-vodlist clearfix">
<?php
$url0 = 'https://www.huya.com/cache.php?m=LiveList&do=getTmpLiveByPage&gameId=2168&tmpId=2609&page=1';
$data = json_decode(file_get_contents($url0),true);
for($i=0; $i<6; $i++){
$number=$data['data']['datas'][$i]['totalCount'];
$img=$data['data']['datas'][$i]['screenshot'];
$xvau = $data['data']['datas'][$i]['nick'];
$info = $data['data']['datas'][$i]['introduction'];
$do = $data['data']['datas'][$i]['profileRoom'].".html";
?>
<li class='col-md-6 col-sm-4 col-xs-3'>
<div class='stui-vodlist__box stui-vodlist__bg'>
<a class='stui-vodlist__thumb1 lazyload' href='hyplay_<?php echo $do;?>' title='<?php echo $info;?>' data-original='<?php echo $img;?>'>
<span class='play hidden-xs'></span>                        
<span class='pic-tag pic-tag-b'><?php echo $xvau;?></span></a>
<div class='stui-vodlist__detail active'>
<h4 class='title text-overflow'>
<a href="yplay_<?php echo $do;?>" title='<?php echo $info;?>'><?php echo $info;?></a>
</h4>
</div>
</div>
</li><?php }?> 
</ul>
</div>
</div>
</div>
<!--HY-->
<!--剧集-->
<?php if($mkcms_dianshi==1){?>
<div class="stui-pannel stui-pannel-bg clearfix">
<ul class="stui-vodlist clearfix">
<?php echo $mkcms_ad5;?>
</ul>
</div>
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<a class="more text-muted pull-right" href="tv.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title">
<svg class="iconm" aria-hidden="true">
    <use xlink:href="#icon-tv"></use>
</svg>
<a href="tv.html">热播剧集</a></h3>
<ul class="nav nav-text pull-right hidden-sm hidden-xs">
<li><a href="tv___10__rankhot_1.html" class="text-muted">国产剧</a> <span class="split-line"></span></li>
<li><a href="tv___11__rankhot_1.html" class="text-muted">港台剧</a> <span class="split-line"></span></li>
<li><a href="tv___12__rankhot_1.html" class="text-muted">日韩剧</a> <span class="split-line"></span></li>
<li><a href="tv___13__rankhot_1.html" class="text-muted">欧美剧</a> <span class="split-line"></span></li>
</ul>
</div>
</div>
<div class="stui-pannel_bd clearfix">
<div class="col-lg-wide-8 col-xs-1 padding-0">
<ul class="stui-vodlist clearfix">	
<?php
$wangzhi=$mkcms_domain."getlist.php?leixing=dianshi&rank=rankhot&pageno=1";
$list=json_decode(file_get_contents($wangzhi),true);
for($i=0;$i<12;$i++){
$zimg=$list['data'][$i]['cover']; 
$zname=$list['data'][$i]['title'];
$jishu=$list['data'][$i]['tag'];
$zstar=$list['data'][$i]['desc'];
$chuandi=vod.$list['data'][$i]['link'];
echo '<li class="col-md-6 col-sm-4 col-xs-3">
<div class="stui-vodlist__box stui-vodlist__bg">
<a class="stui-vodlist__thumb lazyload img-shadow" href="'.$chuandi.'" title="'.$zname.'" alt="'.$zname.'" data-original="'.$zimg.'">
<span class="play hidden-xs"></span>
<span class="pic-tag pic-tag-b">'.$jishu.'</span>
</a><div class="stui-vodlist__detail active">
<h4 class="title text-overflow">
<a href="'.$chuandi.'" title="'.$zname.'">'.$zname.'</a>
</h4>
<p class="text text-overflow text-muted hidden-xs">'.$zstar.'</p>
</div>
</div>
</li>';}?>
</ul>
</div>
<div class="col-lg-wide-2 hidden-md hidden-sm hidden-xs">
<div class="stui-pannel_bd clearfix">
<div class="stui-pannel__head">
<a class="more text-muted pull-right" href="tv.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-bang"></use></svg>剧集排行</h3>
</div>
</div>
<div class="stui-pannel_bd clearfix">
<ul class="stui-vodlist__text active col-pd clearfix">
<?php
	foreach ($bdArr['tv']['title'] as $k=>$title){
	$bdurl=$bdArr['tv']['url'][$k];//url
	$bdurl = str_replace("http://www.360kan.com", "", $bdurl);
	$bdurl = str_replace("https://www.360kan.com", "", $bdurl);
	$bdnum=$bdArr['tv']['num'][$k];//num
	$topnum=$bdArr['tv']['top'][$k];//topnum
	$chuandi='./vod'.$bdurl;
	echo "<li class='col-xs-1 padding-0'><a class='text-overflow' href='$chuandi' title='$title'><span class='am-badge am-round pull-left'>$topnum</span><span class='text-muted pull-right'>$bdnum</span><em class='text-red'></em>&nbsp;$title</a></li>";
	}
	?>
	</ul>
</div>
<div class="stui-pannel_bd">
<div class="stui-pannel__head clearfix">
<a class="more text-muted pull-right" href="tv.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-shoucang-"></use></svg>剧集筛选</h3>
</div>
</div>
<div class="stui-pannel_bd col-pd">
<ul class="stui-vodlist__screen clearfix">
<li>
<a href="tv_107____rankhot_1.html" title="军事">军事</a></li>
<li><a href="tv_104____rankhot_1.html" title="古装">古装</a></li>
<li><a href="tv_118____rankhot_1.html" title="谍战">谍战</a></li>
<li><a href="tv_109____rankhot_1.html" title="喜剧">喜剧</a></li>
<li><a href="tv_101____rankhot_1.html" title="言情">言情</a></li>
<li><a href="tv_105____rankhot_1.html" title="伦理">伦理</a></li>
<li><a href="tv_111____rankhot_1.html" title="都市">都市</a></li>
<li><a href="tv_103____rankhot_1.html" title="警匪">警匪</a></li>
<li><a href="tv_112____rankhot_1.html" title="历史">历史</a></li>
<li><a href="tv_117____rankhot_1.html" title="神话">神话</a></li>
<li><a href="tv_106____rankhot_1.html" title="武侠">武侠</a></li>
<li><a href="tv_119____rankhot_1.html" title="青春">青春</a></li>
</ul>
<ul class="stui-vodlist__screen top-line-dot clearfix">
	<li><a href="tv__2020___rankhot_1.html" title="2020">2020</a></li>
<li><a href="tv__2019___rankhot_1.html" title="2019">2019</a></li>
<li><a href="tv__2018___rankhot_1.html" title="2018">2018</a></li>
<li><a href="tv__2017___rankhot_1.html" title="2017">2017</a></li>
<li><a href="tv__2016___rankhot_1.html" title="2016">2016</a></li>
<li><a href="tv__2015___rankhot_1.html" title="2015">2015</a></li>
<li><a href="tv__2014___rankhot_1.html" title="2014">2014</a></li>
<li><a href="tv__2013___rankhot_1.html" title="2013">2013</a></li>
<li><a href="tv__2012___rankhot_1.html" title="2012">2012</a></li>
<li><a href="tv__2011___rankhot_1.html" title="2011.html">2011</a></li>
<li><a href="tv__2010___rankhot_1.html" title="2010">2010</a></li>
<li><a href="tv__other___rankhot_1.html" title="更早">更早</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<!--剧集-->
<?php }?>
<!--综艺-->
<?php if($mkcms_zongyi==1){?>
<div class="stui-pannel stui-pannel-bg clearfix">
<ul class="stui-vodlist clearfix">
<?php echo $mkcms_ad7;?>
</ul>
</div>
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<a class="more text-muted pull-right" href="zongyi.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title">
<svg class="iconm" aria-hidden="true">
    <use xlink:href="#icon-zongyi"></use>
</svg>
<a href="zongyi____createtime_1.html">最新综艺</a></h3>
<ul class="nav nav-text pull-right hidden-sm hidden-xs">
<li><a href="zongyi_101___rankhot_1.html" class="text-muted">选秀</a> <span class="split-line"></span></li>
<li><a href="zongyi_104___rankhot_1.html" class="text-muted">情感</a> <span class="split-line"></span></li>
<li><a href="zongyi_107___rankhot_1.html" class="text-muted">搞笑</a> <span class="split-line"></span></li>
<li><a href="zongyi_108___rankhot_1.html" class="text-muted">音乐</a> <span class="split-line"></span></li>
</ul>
</div>
</div>
<div class="stui-pannel_bd clearfix">
<div class="col-lg-wide-8 col-xs-1 padding-0">
<ul class="stui-vodlist clearfix">
<?php
$wangzhi=$mkcms_domain."getlist.php?leixing=zongyi&rank=createtime&pageno=1";
$list=json_decode(file_get_contents($wangzhi),true);
for($i=0;$i<12;$i++){
$playurl=vod.$list['data'][$i]['link'];
$zimg=$list['data'][$i]['cover']; 
$zname=$list['data'][$i]['title'];
$zstar=$list['data'][$i]['desc'];
$fname=$list['data'][$i]['point'];
$nname=$list['data'][$i]['tag'];
echo '<li class="col-md-6 col-sm-4 col-xs-3">
<div class="stui-vodlist__box stui-vodlist__bg">
<a class="stui-vodlist__thumb lazyload img-shadow" href="'.$playurl.'" title="'.$zname.'" alt="$name" data-original="'.$zimg.'">
<span class="play hidden-xs"></span>
<span class="pic-tag pic-tag-b">'.$nname.'</span>
</a><div class="stui-vodlist__detail active">
<h4 class="title text-overflow">
<a href="'.$playurl.'" title="'.$zname.'">'.$zname.'</a>
</h4>
<p class="text text-overflow text-muted hidden-xs">'.$zstar.'</p>
</div>
</div>
</li>';} ?>
</ul>
</div>
<div class="col-lg-wide-2 hidden-md hidden-sm hidden-xs">
<div class="stui-pannel_bd clearfix">
<div class="stui-pannel__head">
<a class="more text-muted pull-right" href="zongyi.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-bang"></use></svg>综艺排行</h3>
</div>
</div>
<div class="stui-pannel_bd clearfix">
	<ul class="stui-vodlist__text active col-pd clearfix">
<?php
	foreach ($bdArr['zy']['title'] as $k=>$title){
	$bdurl=$bdArr['zy']['url'][$k];//url
	$bdurl = str_replace("http://www.360kan.com", "", $bdurl);
	$bdurl = str_replace("https://www.360kan.com", "", $bdurl);
	$bdnum=$bdArr['zy']['num'][$k];//num
	$topnum=$bdArr['zy']['top'][$k];//topnum
	$chuandi='./vod'.$bdurl;
	echo "<li class='col-xs-1 padding-0'><a class='text-overflow' href='$chuandi' title='$title'><span class='am-badge am-round pull-left'>$topnum</span><span class='text-muted pull-right'>$bdnum</span><em class='text-red'></em>&nbsp;$title</a></li>";}?>
	</ul>
	</div>
<div class="stui-pannel_bd">
<div class="stui-pannel__head clearfix">
<a class="more text-muted pull-right" href="zongyi.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-shoucang-"></use></svg>综艺筛选</h3>
</div>
</div>
<div class="stui-pannel_bd col-pd">
<ul class="stui-vodlist__screen clearfix">
<li>
<a href="zongyi_121___rankhot_1.htmll" title="脱口秀">脱口秀</a></li>
<li><a href="zongyi_120___rankhot_1.html" title="真人秀">真人秀</a></li>
<li><a href="zongyi_103___rankhot_1.html" title="访谈">访谈</a></li>
<li><a href="zongyi_104___rankhot_1.html" title="情感">情感</a></li>
<li><a href="zongyi_105___rankhot_1.html" title="生活">生活</a></li>
<li><a href="zongyi_106___rankhot_1.html" title="晚会">晚会</a></li>
<li><a href="zongyi_107___rankhot_1.html" title="搞笑">搞笑</a></li>
<li><a href="zongyi_110___rankhot_1.html" title="游戏">游戏</a></li>
<li><a href="zongyi_112___rankhot_1.html" title="体育">体育</a></li>
<li><a href="zongyi_113___rankhot_1.html" title="纪实">纪实</a></li>
<li><a href="zongyi_116___rankhot_1.html" title="歌舞">歌舞</a></li>
<li><a href="zongyi_115___rankhot_1.html" title="曲艺">曲艺</a></li>
</ul>
<ul class="stui-vodlist__screen top-line-dot clearfix">
<li><a href="zongyi__邓超__rankhot_1.html" title="邓超">邓超</a></li>
<li><a href="zongyi__陈赫__rankhot_1.html" title="陈赫">陈赫</a></li>
<li><a href="zongyi__何炅__rankhot_1.html" title="何炅">何炅</a></li>
<li><a href="zongyi__汪涵__rankhot_1.html" title="汪涵">汪涵</a></li>
<li><a href="zongyi__谢娜__rankhot_1.html" title="谢娜">谢娜</a></li>
<li><a href="zongyi__周杰伦__rankhot_1.html" title="周杰伦">周杰伦</a></li>
<li><a href="zongyi__岳云鹏__rankhot_1.html" title="岳云鹏">岳云鹏</a></li>
<li><a href="zongyi__杨幂__rankhot_1.html" title="杨幂">杨幂</a></li>
<li><a href="zongyi__宋小宝__rankhot_1.html" title="宋小宝">宋小宝</a></li>
<li><a href="zongyi__贾玲__rankhot_1.htmll" title="贾玲">贾玲</a></li>
<li><a href="zongyi__华晨宇__rankhot_1.html" title="华晨宇">华晨宇</a></li>
<li><a href="zongyi__范冰冰__rankhot_1.html" title="范冰冰">范冰冰</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<?php }?>
<!--综艺-->
<!--动漫-->
<?php if($mkcms_dongman==1){?>
<div class="stui-pannel stui-pannel-bg clearfix">
<ul class="stui-vodlist clearfix">
<?php echo $mkcms_ad9;?>
</ul>
</div>
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<a class="more text-muted pull-right" href="dongman.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title">
<svg class="iconm" aria-hidden="true">
    <use xlink:href="#icon-dongman"></use>
</svg>
<a href="dongman____createtime_1.html">最新动漫</a></h3>
<ul class="nav nav-text pull-right hidden-sm hidden-xs">
<li><a href="dongman_100___rankhot_1.html" class="text-muted">热血</a> <span class="split-line"></span></li>
<li><a href="dongman_101___rankhot_1.html" class="text-muted">恋爱</a> <span class="split-line"></span></li>
<li><a href="dongman_108___rankhot_1.html" class="text-muted">悬疑</a> <span class="split-line"></span></li>
<li><a href="dongman_111___rankhot_1.html" class="text-muted">少儿</a> <span class="split-line"></span></li>
</ul>
</div>
</div>
<div class="stui-pannel_bd clearfix">
<div class="col-lg-wide-8 col-xs-1 padding-0">
<ul class="stui-vodlist clearfix">
<?php 
$wangzhi=$mkcms_domain."getlist.php?leixing=dongman&rank=createtime&pageno=1";
$list=json_decode(file_get_contents($wangzhi),true);
for($i=0;$i<12;$i++){
$playurl=vod.$list['data'][$i]['link'];
$zimg=$list['data'][$i]['cover']; 
$zname=$list['data'][$i]['title'];
$nname=$list['data'][$i]['tag'];
echo '<li class="col-md-6 col-sm-4 col-xs-3">
<div class="stui-vodlist__box stui-vodlist__bg">
<a class="stui-vodlist__thumb lazyload img-shadow" href="'.$playurl.'" title="'.$zname.'" alt="$name" data-original="'.$zimg.'">
<span class="play hidden-xs"></span>
<span class="pic-tag pic-tag-b">'.$nname.'</span>
</a><div class="stui-vodlist__detail active">
<h4 class="title text-overflow">
<a href="'.$playurl.'" title="'.$zname.'">'.$zname.'</a>
</h4>
</div>
</div>
</li>';} ?>
</ul>
</div>
<div class="col-lg-wide-2 hidden-md hidden-sm hidden-xs">
<div class="stui-pannel_bd clearfix">
<div class="stui-pannel__head">
<a class="more text-muted pull-right" href="dongman.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-bang"></use></svg>动漫排行</h3>
</div>
</div>
<div class="stui-pannel_bd clearfix">
<ul class="stui-vodlist__text active col-pd clearfix">
<?php
	foreach ($bdArr['dm']['title'] as $k=>$title){
	$bdurl=$bdArr['dm']['url'][$k];//url
	$bdurl = str_replace("http://www.360kan.com", "", $bdurl);
	$bdurl = str_replace("https://www.360kan.com", "", $bdurl);
	$bdnum=$bdArr['dm']['num'][$k];//num
	$topnum=$bdArr['dm']['top'][$k];//topnum
	$chuandi='./vod'.$bdurl;
	echo "<li class='col-xs-1 padding-0'><a class='text-overflow' href='$chuandi' title='$title'><span class='am-badge am-round pull-left'>$topnum</span><span class='text-muted pull-right'>$bdnum</span><em class='text-red'></em>&nbsp;$title</a></li>";}?>
</ul>
</div>
<div class="stui-pannel_bd">
<div class="stui-pannel__head clearfix">
<a class="more text-muted pull-right" href="dongman.html">更多 <i class="icon iconfont icon-more"></i></a>
<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-shoucang-"></use></svg>动漫筛选</h3>
</div>
</div>
<div class="stui-pannel_bd col-pd">
<ul class="stui-vodlist__screen clearfix">
<li>
<a href="dongman_rankhot_100_1.html" title="热血">热血</a></li>
<li><a href="dongman_134___rankhot_1.html" title="科幻">科幻</a></li>
<li><a href="dongman_109___rankhot_1.html" title="魔幻">魔幻</a></li>
<li><a href="dongman_135___rankhot_1.html" title="经典">经典</a></li>
<li><a href="dongman_107___rankhot_1.html" title="冒险">冒险</a></li>
<li><a href="dongman_111___rankhot_1.html" title="少儿">少儿</a></li>
<li><a href="dongman_137___rankhot_1.html" title="推理">推理</a></li>
<li><a href="dongman_104___rankhot_1.html" title="校园">校园</a></li>
<li><a href="dongman_112___rankhot_1.html" title="机战">机战</a></li>
<li><a href="dongman_123___rankhot_1.html" title="青春">青春</a></li>
<li><a href="dongman_115___rankhot_1.html" title="战争">战争</a></li>
<li><a href="dongman_126___rankhot_1.html" title="动作">动作</a></li>
</ul>
<ul class="stui-vodlist__screen top-line-dot clearfix">
	<li><a href="dongman__2020__rankhot_1.html" title="2020">2020</a></li>
<li><a href="dongman__2019__rankhot_1.html" title="2019">2019</a></li>
<li><a href="dongman__2018__rankhot_1.html" title="2018">2018</a></li>
<li><a href="dongman__2017__rankhot_1.html" title="2017">2017</a></li>
<li><a href="dongman__2016__rankhot_1.html" title="2016">2016</a></li>
<li><a href="dongman__2015__rankhot_1.html" title="2015">2015</a></li>
<li><a href="dongman__2014__rankhot_1.html" title="2014">2014</a></li>
<li><a href="dongman__other__rankhot_1.html" title="更早">更早</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<?php }?>
<!--动漫-->
<!--友链-->
<?php if($mkcms_yq==1){?>
<div class="stui-pannel stui-pannel-bg clearfix">
<ul class="stui-vodlist clearfix">
<?php echo $mkcms_ad10;?>
</ul>
</div>
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<h3 class="title">
<svg class="iconm" aria-hidden="true">
    <use xlink:href="#icon-link"></use>
</svg>
友情链接</h3>
</div>
</div>
<div class="stui-pannel_bd clearfix">
<div class="col-xs-1">
<ul class="stui-link__text clearfix">
<?php
$result = mysqli_query($conn,'select * from mkcms_link');
while($row = mysqli_fetch_array($result)){?>
<li><a class="text-color-999" href="<?php echo $row['l_url'];?>" target="_blank"><?php echo $row['l_name'];?></a></li>
<?php }?>
</ul></div></div></div></div>
<?php }?>
<!--友链-->
</div>
</div>
<?php  include 'footer.php';?>
