<?php  include 'head.php';$cx='active';?>
<title>尝鲜视频列表-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="视频排行,<?php echo $mkcms_keywords;?>">
<meta name="description" content="<?php echo $mkcms_description;?>">
</head>
<body >
<?php include 'header.php'; ?>
<div class="container">
<div class="row">
<?php echo $mkcms_ad21;?>
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<h3 class="title"><svg class="iconm" aria-hidden="true"><use xlink:href="#icon-list"></use></svg>抢先看</h3></div>
</div>
<!-- 筛选 -->
<ul class="stui-screen__list type-slide bottom-line-dot clearfix up-ul1">
<li><span class="text-muted">按类型</span></li>
<li><a href="cx.php" >全部</a></li>
<?php  
for($i=0; $i<22; $i++){
	if (mb_strpos($list['list'][$i]['list_name'], '福利') === false) {
	if (mb_strpos($list['list'][$i]['list_name'], '韩国主播VIP视频') === false) {
	if (mb_strpos($list['list'][$i]['list_name'], '电影') === false) {
	if (mb_strpos($list['list'][$i]['list_name'], '连续剧') === false) {
	if (mb_strpos($list['list'][$i]['list_name'], '电影片') === false) {
	if (mb_strpos($list['list'][$i]['list_name'], '伦理片') === false) {
	if (mb_strpos($list['list'][$i]['list_name'], '论理片') === false) {
	if (mb_strpos($list['list'][$i]['list_name'], '伦理') === false) { 
	if (mb_strpos($list['list'][$i]['list_name'], '写真视频') === false) {
	if (mb_strpos($list['list'][$i]['list_name'], '美女视频') === false) {
	if (mb_strpos($list['list'][$i]['list_name'], '美女写真') === false) {
?>
	<li><a href="/cx_<?php echo $list['list'][$i]['list_id'];?>_1.html"><?php echo $list['list'][$i]['list_name'];?></a></li><?php }}}}}}}}}}}}?>
</ul>
<!-- end 筛选 -->
</div>
<div class="stui-pannel_bd">
<ul class="stui-vodlist clearfix">
<?php
	for($i=0; $i<18; $i++){
	if (mb_strpos($data['data'][$i]['list_name'], '福利') === false) {
	if (mb_strpos($data['data'][$i]['list_name'], '韩国主播VIP视频') === false) {
	if (mb_strpos($data['data'][$i]['list_name'], '电影') === false) {
	if (mb_strpos($data['data'][$i]['list_name'], '连续剧') === false) {
	if (mb_strpos($data['data'][$i]['list_name'], '电影片') === false) {
	if (mb_strpos($data['data'][$i]['list_name'], '伦理片') === false) {
	if (mb_strpos($data['data'][$i]['list_name'], '论理片') === false) {
	if (mb_strpos($data['data'][$i]['list_name'], '伦理') === false) { 
	if (mb_strpos($data['data'][$i]['list_name'], '写真视频') === false) {
	if (mb_strpos($data['data'][$i]['list_name'], '美女视频') === false) {
	if (mb_strpos($data['data'][$i]['list_name'], '美女写真') === false) {
			$ccb="./cxplay/".$data['data'][$i]['vod_id'].".html";
			if ($row['d_jifen']>0){
			$ok="onclick=\"return confirm('此视频为收费视频，观看需要支付".$row['d_jifen']."积分，您是否观看？')\"";}
				else{$ok="";}
	?><li class='col-md-6 col-sm-4 col-xs-3'>
<div class='stui-vodlist__box stui-vodlist__bg'>
<a class='stui-vodlist__thumb lazyload' <?php echo $ok;?> href='<?php echo $ccb;?>' title='<?php echo $data['data'][$i]['vod_name'];?>' data-original='<?php echo $data['data'][$i]['vod_pic'];?>'>
<span class='play hidden-xs'></span>
<span class='pic-tag pic-tag-b'><?php echo $data['data'][$i]['vod_year'];?></span>
<span class='pic-text text-right'></span></a>
<div class='stui-vodlist__detail active'>
<h4 class='title text-overflow'><a href='<?php echo $ccb;?>' title='<?php echo $data['data'][$i]['vod_name'];?>'><?php echo $data['data'][$i]['vod_name'];?></a></h4>
<p class='text text-overflow text-muted hidden-xs'>主演：<?php if(empty($data['data'][$i]['vod_actor'])) {echo "未知";} else{
echo $data['data'][$i]['vod_actor'];}
						?></p>
</div>
</div>
</li>
		<?php }}}}}}}}}}}}?> 
</ul>
</div>
</div>
</div>
</div>
<ul class="stui-page text-center cleafix">
<?php
if(!empty($_GET['cid'])){$cid=$_GET['cid'];}
	else{$cid="";}
if($_GET['page'] != 1){
     echo '<li><a href="/cx_'.$cid.'_1.html">首页</a></li>';
     echo '<li><a href="/cx_'.$cid.'_' . ($_GET['page']-1) .'.html"><</a></li>';
     } else {
echo '<li><a href="/cx_'.$cid.'_1.html">首页</a></li>';
}
if($_GET['page'] == 1){
	echo '';
}else
echo '<li><a href="/cx_'.$cid.'_'.($_GET['page']-1).'.html">'.($_GET['page']-1).'</a></li>';
echo '<li class="active"><a href="/cx_'.$cid.'_'.$_GET['page'].'.html">'.$_GET['page'].'</a></li>';
if($_GET['page'] == $pagecount){
	echo '';
}else
echo '<li><a href="/cx_'.$cid.'_'.($_GET['page']+1).'.html">'.($_GET['page']+1).'</a></li>';

if($_GET['page'] < $pagecount){
     echo '<li ><a href="/cx_'.$cid.'_'.($_GET['page']+1).'.html">></a></li>';
     echo '<li ><a href="/cx_'.$cid.'_'.$pagecount.'.html">尾页</a></li>';
     } else {
echo '<li class="disabled"><a>尾页</a></li>';
}
?>
</ul>
<?php  include 'footer.php';?>