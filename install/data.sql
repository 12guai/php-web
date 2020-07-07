-- MySQL dump 10.13  Distrib 5.6.47, for Linux (x86_64)
--
-- Host: localhost    Database: sql_5qx_top
-- ------------------------------------------------------
-- Server version	5.6.47-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `mkcms_ad`
--

DROP TABLE IF EXISTS `mkcms_ad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mkcms_ad` (
  `id` smallint(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `pic` text,
  `catid` varchar(255) DEFAULT NULL,
  `miaoshu` varchar(255) DEFAULT NULL,
  `picurl` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mkcms_ad`
--

LOCK TABLES `mkcms_ad` WRITE;
/*!40000 ALTER TABLE `mkcms_ad` DISABLE KEYS */;
INSERT INTO `mkcms_ad` VALUES (1,'广告演示','','<li style=\"background-color: #fff;box-shadow: 0px 0px 10px #dedede;padding: 5px;margin-top: 5px;margin-bottom: 5px;\" class=\"col-sm-2 col-xs-1\">\r\n<a href=\"https://wpa.qq.com/msgrd?v=3&amp;uin=20719029&amp;site=qq&amp;menu=yes\" target=\"_blank\"><img src=\"images/guanggao.gif\" style=\"width:100%; border-radius: 10px;\" alt=\"广告合作联系站长QQ：20719029\"></a>\r\n</li>\r\n<li style=\"background-color: #fff;box-shadow: 0px 0px 10px #dedede;padding: 5px;margin-top: 5px;margin-bottom: 5px;\" class=\"col-sm-2 col-xs-1\">\r\n<a href=\"https://wpa.qq.com/msgrd?v=3&amp;uin=2157587&amp;site=qq&amp;menu=yes\" target=\"_blank\"><img src=\"images/guanggao.gif\" style=\"width:100%; border-radius: 10px;\" alt=\"广告合作联系站长QQ：88888888\"></a>\r\n</li>','2',NULL,NULL,NULL);
/*!40000 ALTER TABLE `mkcms_ad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mkcms_adclass`
--

DROP TABLE IF EXISTS `mkcms_adclass`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mkcms_adclass` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mkcms_adclass`
--

LOCK TABLES `mkcms_adclass` WRITE;
/*!40000 ALTER TABLE `mkcms_adclass` DISABLE KEYS */;
INSERT INTO `mkcms_adclass` VALUES (1,'播放前广告'),(2,'首页公告下方广告'),(3,'首页美女视听上方广告'),(4,'首页最新电影上方广告'),(5,'首页热播剧集上方广告'),(6,'首页影视资讯上方广告'),(7,'首页最新综艺上方广告'),(8,'首页美女直播上方广告'),(9,'首页最新动漫上方广告'),(10,'友情链接上方广告'),(11,'电影栏目页广告'),(12,'剧集栏目页广告'),(13,'动漫栏目页广告'),(14,'综艺栏目页广告'),(15,'YY栏目页广告'),(16,'娱乐栏目页广告'),(17,'音乐栏目页广告'),(18,'搞笑栏目页广告'),(19,'音乐MV栏目页广告'),(20,'电视直播页面广告'),(21,'尝鲜栏目页面广告'),(22,'播放页排行榜下方广告');
/*!40000 ALTER TABLE `mkcms_adclass` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mkcms_book`
--

DROP TABLE IF EXISTS `mkcms_book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mkcms_book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `userid` varchar(11) DEFAULT NULL,
  `Reply` text,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mkcms_book`
--

LOCK TABLES `mkcms_book` WRITE;
/*!40000 ALTER TABLE `mkcms_book` DISABLE KEYS */;
/*!40000 ALTER TABLE `mkcms_book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mkcms_diy`
--

DROP TABLE IF EXISTS `mkcms_diy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mkcms_diy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s_zbcode` text,
  `s_hallcode` text,
  `s_fulicode` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mkcms_diy`
--

LOCK TABLES `mkcms_diy` WRITE;
/*!40000 ALTER TABLE `mkcms_diy` DISABLE KEYS */;
INSERT INTO `mkcms_diy` VALUES (1,'<div class=\"stui-pannel_bd\">\r\n <div class=\"icon\">\r\n    <div class=\"container izb\">\r\n     <nav class=\"zb-nav\"><a href=\"javascript:;\" class=\"taba cur\">央视频道</a><a href=\"javascript:;\" class=\"taba\">卫视频道</a><a href=\"javascript:;\" class=\"taba\">明星专辑</a>\r\n      </nav>\r\n<div class=\"zb-con\">\r\n  <ul class=\"zb-list\">\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFPVsE\"><b><img src=\"/template/jingpin/img/zhibo/c1.png\" /></b><span>CCTV 1</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFPN6v\"><b><img src=\"/template/jingpin/img/zhibo/c2.png\"></b><span>CCTV 2</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RXQY4TK\"><b><img src=\"/template/jingpin/img/zhibo/c3.png\"></b><span>CCTV 3</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFPrgx\"><b><img src=\"/template/jingpin/img/zhibo/c4.png\"></b><span>CCTV 4</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RGXxHn1\"><b><img src=\"/template/jingpin/img/zhibo/c5.png\"></b><span>CCTV 5+</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFhJLn\"><b><img src=\"/template/jingpin/img/zhibo/c6.png\"></b><span>CCTV 6</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/A6PTHaOP\"><b><img src=\"/template/jingpin/img/zhibo/c7.png\"></b><span>CCTV 7</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFhSzl\"><b><img src=\"/template/jingpin/img/zhibo/c8.png\"></b><span>CCTV 8</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFhwWm\"><b><img src=\"/template/jingpin/img/zhibo/c9.png\"></b><span>CCTV 9</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFh2KW\"><b><img src=\"/template/jingpin/img/zhibo/c10.png\"></b><span>CCTV 10</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFhyzk\"><b><img src=\"/template/jingpin/img/zhibo/c11.png\"></b><span>CCTV 11</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFhU8c\"><b><img src=\"/template/jingpin/img/zhibo/c12.png\"></b><span>CCTV 12</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFhb9z\"><b><img src=\"/template/jingpin/img/zhibo/c13.png\"></b><span>CCTV 13</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFhqUF\"><b><img src=\"/template/jingpin/img/zhibo/c14.png\"></b><span>CCTV 14</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFhtUX\"><b><img src=\"/template/jingpin/img/zhibo/c15.png\"></b><span>CCTV 15</span></a></li>\r\n </ul>\r\n <ul class=\"zb-list hide\">\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RLQqNvg\"><b><img src=\"/template/jingpin/img/zhibo/hn.png\" /></b><span>湖南卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/R6Jrh0y\"><b><img src=\"/template/jingpin/img/zhibo/zj.png\" /></b><span>浙江卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RVylk9M\"><b><img src=\"/template/jingpin/img/zhibo/js.png\" /></b><span>江苏卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RLcRIHw\"><b><img src=\"/template/jingpin/img/zhibo/df.png\" /></b><span>东方卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFzrnr\"><b><img src=\"/template/jingpin/img/zhibo/bj.png\" /></b><span>北京卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFzDXB\"><b><img src=\"/template/jingpin/img/zhibo/ah.png\" /></b><span>安徽卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFZvZn\"><b><img src=\"/template/jingpin/img/zhibo/sd.png\" /></b><span>山东卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFZL4M\"><b><img src=\"/template/jingpin/img/zhibo/ha.png\" /></b><span>河南卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFZqm8\"><b><img src=\"/template/jingpin/img/zhibo/jx.png\" /></b><span>江西卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFZVXT\"><b><img src=\"/template/jingpin/img/zhibo/hlj.png\" /></b><span>黑龙江卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFZxtl\"><b><img src=\"/template/jingpin/img/zhibo/gd.png\" /></b><span>广东卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFZXVc\"><b><img src=\"/template/jingpin/img/zhibo/tj.png\" /></b><span>天津卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFZNi6\"><b><img src=\"/template/jingpin/img/zhibo/hub.png\" /></b><span>湖北卫视</span></a></li>\r\n    <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFZWZA\"><b><img src=\"/template/jingpin/img/zhibo/heb.png\" /></b><span>河北卫视</span></a></li>\r\n    <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFZYop\"><b><img src=\"/template/jingpin/img/zhibo/cq.png\" /></b><span>重庆卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFZQHu\"><b><img src=\"/template/jingpin/img/zhibo/dn.png\" /></b><span>东南卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFZEC4\"><b><img src=\"/template/jingpin/img/zhibo/sx1.png\" /></b><span>山西卫视</span></a></li>\r\n    <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFZuWA\"><b><img src=\"/template/jingpin/img/zhibo/gx.png\" /></b><span>广西卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFZBpR\"><b><img src=\"/template/jingpin/img/zhibo/gz.png\" /></b><span>贵州卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFZgD6\"><b><img src=\"/template/jingpin/img/zhibo/sz.png\" /></b><span>深圳卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFwP3U\"><b><img src=\"/template/jingpin/img/zhibo/jl.png\" /></b><span>吉林卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFwZUV\"><b><img src=\"/template/jingpin/img/zhibo/ln.png\" /></b><span>辽宁卫视</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"http://t.cn/RpFw2zU\"><b><img src=\"/template/jingpin/img/zhibo/sc.png\" /></b><span>四川卫视</span></a></li>\r\n </ul>\r\n <ul class=\"zb-list hide\">\r\n   <li><a href=\"javascript:;\" data-url=\"/ck/zb.php?url=http://bd.flv.huya.com/src/1524434090-1524434090-6547394561457520640-3048991636-10057-A-0-1_2000.m3u8\"><b><img src=\"/template/jingpin/img/zhibo/wj.png\" /></b><span>吴京</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"/ck/zb.php?url=http://bd.flv.huya.com/src/94525224-2460685313-10568562945082523648-2789274524-10057-A-0-1-imgplus_2000.m3u8\"><b><img src=\"/template/jingpin/img/zhibo/zxc.png\" /></b><span>周星驰</span></a></li>\r\n    <li><a href=\"javascript:;\" data-url=\"/ck/zb.php?url=http://bd.flv.huya.com/src/1394575547-1394575547-5989656366166310912-2789274550-10057-A-0-1_2000.m3u8\"><b><img src=\"/template/jingpin/img/zhibo/ldh.png\" /></b><span>刘德华</span></a></li>\r\n    <li><a href=\"javascript:;\" data-url=\"/ck/zb.php?url=http://bd.flv.huya.com/src/94525224-2460685774-10568564925062447104-2789253840-10057-A-0-1_2000.m3u8\"><b><img src=\"/template/jingpin/img/zhibo/zrf.png\" /></b><span>周润发</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"/ck/zb.php?url=http://bd.flv.huya.com/src/94525224-2460685722-10568564701724147712-2789253838-10057-A-0-1_2000.m3u8\"><b><img src=\"/template/jingpin/img/zhibo/cl.png\" /></b><span>成龙</span></a></li>\r\n    <li><a href=\"javascript:;\" data-url=\"/ck/zb.php?url=//bd.flv.huya.com/src/1524434085-1524434085-6547394539982684160-3048991626-10057-A-0-1_2000.m3u8\"><b><img src=\"/template/jingpin/img/zhibo/xz.png\" /></b><span>徐峥</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"/ck/zb.php?url=http://bd.flv.huya.com/src/1524439827-1524439827-6547419201684897792-3049003110-10057-A-0-1_2000.m3u8\"><b><img src=\"/template/jingpin/img/zhibo/lxl.png\" /></b><span>李小龙</span></a></li>\r\n   <li><a href=\"javascript:;\" data-url=\"/ck/zb.php?url=http://bd.flv.huya.com/src/1423787820-1423787820-6115122123343134720-2847699096-10057-A-0-1_2000.m3u8\"><b><img src=\"/template/jingpin/img/zhibo/zzd.png\" /></b><span>甄子丹</span></a></li>\r\n</ul>','<div class=\"aui-col-xs-4 pt-list\">\r\n<a href=\"/cx.html\"><i class=\"aui-iconfont\"><img src=\"/template/jingpin/img/qiang.png\"></i><div class=\"aui-grid-label\">抢先看</div></a>\r\n</div>\r\n<div class=\"aui-col-xs-4 pt-list\">\r\n<a href=\"/movie_all_all_all_all_rankhot_1.html\"><i class=\"aui-iconfont\"><img src=\"/template/jingpin/img/movie.png\"></i><div class=\"aui-grid-label\">热门电影</div></a>\r\n</div>\r\n<div class=\"aui-col-xs-4 pt-list\">\r\n<a href=\"/tv_all_all_all_all_rankhot_1.html\"><i class=\"aui-iconfont\"><img src=\"/template/jingpin/img/juji.png\"/></i><div class=\"aui-grid-label\">电视剧集</div></a>\r\n</div>\r\n<div class=\"aui-col-xs-4 pt-list\">\r\n<a href=\"/dongman.html\"><i class=\"aui-iconfont\"><img src=\"/template/jingpin/img/dongman.png\"></i><div class=\"aui-grid-label\">热血动漫</div></a>\r\n</div>\r\n<div class=\"aui-col-xs-4 pt-list\">\r\n<a href=\"/zongyi_all_all_all_rankhot_1.html\"><i class=\"aui-iconfont\"><img src=\"/template/jingpin/img/zongyi.png\"></i><div class=\"aui-grid-label\">热门综艺</div></a>\r\n</div>\r\n<div class=\"aui-col-xs-4 pt-list\">\r\n<a href=\"/news.html\"><i class=\"aui-iconfont\"><img src=\"/template/jingpin/img/yule.png\"></i><div class=\"aui-grid-label\">影视资讯</div></a>\r\n</div>\r\n<div class=\"aui-col-xs-4 pt-list\">\r\n<a href=\"/hy.html\"><i class=\"aui-iconfont\"><img src=\"/template/jingpin/img/bo.png\"></i><div class=\"aui-grid-label\">虎牙直播</div></a>\r\n</div>\r\n<div class=\"aui-col-xs-4 pt-list\">\r\n<a href=\"/music.html\"><i class=\"aui-iconfont\"><img src=\"/template/jingpin/img/yue.png\"></i><div class=\"aui-grid-label\">在线音乐</div></a>\r\n</div>\r\n<div class=\"aui-col-xs-4 pt-list\">\r\n<a href=\"/fuli.html\"><i class=\"aui-iconfont\"><img src=\"/template/jingpin/img/fu.png\"></i><div class=\"aui-grid-label\">福利</div></a>\r\n</div>','<a href=\"/zhibo.html\" class=\"aui-flex b-line\">\r\n<div class=\"aui-flex-iphone\"><img src=\"/template/jingpin/img/tv.png\" alt=\"\"></div>\r\n<div class=\"aui-flex-box\">\r\n<p><em class=\"aui-group-three\"> 电视直播</em></p>\r\n<h3>在线收看高清卫视</h3>\r\n<p><em class=\"aui-group-one\">实时更新</em> <em class=\"aui-group-two\">电视TV</em></p>\r\n</div>\r\n<div class=\"aui-flex-support\">看电视</div></a>\r\n             \r\n<a href=\"/hy.html\" class=\"aui-flex b-line\">\r\n<div class=\"aui-flex-iphone\"><img src=\"/template/jingpin/img/game.png\" alt=\"\"></div>\r\n<div class=\"aui-flex-box\"><p><em class=\"aui-group-three\"> 虎牙直播</em></p>\r\n<h3>美女游戏直播平台 </h3>\r\n<p><em class=\"aui-group-one\">实时更新</em> <em class=\"aui-group-two\">直播在线</em></p>\r\n</div>\r\n<div class=\"aui-flex-support\">看直播</div></a>\r\n\r\n<a href=\"/yy_27_p1.html\" class=\"aui-flex b-line\">\r\n<div class=\"aui-flex-iphone\"><img src=\"/template/jingpin/img/meinvxiezhen.png\" alt=\"\"></div>\r\n<div class=\"aui-flex-box\"><p><em class=\"aui-group-three\"> 美女视听</em></p>\r\n<h3>YY美女火辣热舞</h3>\r\n<p><em class=\"aui-group-one\">实时更新</em> <em class=\"aui-group-two\">多才多艺</em></p>\r\n</div>\r\n<div class=\"aui-flex-support\">看热舞</div></a>');
/*!40000 ALTER TABLE `mkcms_diy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mkcms_fav`
--

DROP TABLE IF EXISTS `mkcms_fav`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mkcms_fav` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mkcms_fav`
--

LOCK TABLES `mkcms_fav` WRITE;
/*!40000 ALTER TABLE `mkcms_fav` DISABLE KEYS */;
/*!40000 ALTER TABLE `mkcms_fav` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mkcms_link`
--

DROP TABLE IF EXISTS `mkcms_link`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mkcms_link` (
  `l_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `l_name` varchar(64) NOT NULL DEFAULT '',
  `l_url` varchar(255) NOT NULL DEFAULT '',
  `l_logo` varchar(255) NOT NULL DEFAULT '',
  `l_type` tinyint(1) NOT NULL DEFAULT '0',
  `l_sort` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`l_id`),
  KEY `l_sort` (`l_sort`),
  KEY `l_type` (`l_type`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mkcms_link`
--

LOCK TABLES `mkcms_link` WRITE;
/*!40000 ALTER TABLE `mkcms_link` DISABLE KEYS */;
INSERT INTO `mkcms_link` VALUES (1,'悠扬影视','//yf.pzym.xyz:81','',0,1);
/*!40000 ALTER TABLE `mkcms_link` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mkcms_manager`
--

DROP TABLE IF EXISTS `mkcms_manager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mkcms_manager` (
  `m_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `m_name` varchar(32) NOT NULL DEFAULT '',
  `m_password` varchar(32) NOT NULL DEFAULT '',
  `m_levels` varchar(32) NOT NULL DEFAULT '',
  `m_random` varchar(32) NOT NULL DEFAULT '',
  `m_status` tinyint(1) NOT NULL DEFAULT '0',
  `m_logintime` int(10) NOT NULL DEFAULT '0',
  `m_loginip` int(15) NOT NULL DEFAULT '0',
  `m_loginnum` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`m_id`),
  KEY `m_status` (`m_status`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mkcms_manager`
--

LOCK TABLES `mkcms_manager` WRITE;
/*!40000 ALTER TABLE `mkcms_manager` DISABLE KEYS */;
INSERT INTO `mkcms_manager` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3','b,c,d,e,f,g,h,i,j','897de67740645ef418d8915547298d4c',1,1503380295,2130706433,0);
/*!40000 ALTER TABLE `mkcms_manager` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mkcms_nav`
--

DROP TABLE IF EXISTS `mkcms_nav`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mkcms_nav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `n_name` varchar(255) DEFAULT NULL,
  `n_url` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mkcms_nav`
--

LOCK TABLES `mkcms_nav` WRITE;
/*!40000 ALTER TABLE `mkcms_nav` DISABLE KEYS */;
/*!40000 ALTER TABLE `mkcms_nav` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mkcms_play`
--

DROP TABLE IF EXISTS `mkcms_play`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mkcms_play` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mkcms_play`
--

LOCK TABLES `mkcms_play` WRITE;
/*!40000 ALTER TABLE `mkcms_play` DISABLE KEYS */;
/*!40000 ALTER TABLE `mkcms_play` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mkcms_slideshow`
--

DROP TABLE IF EXISTS `mkcms_slideshow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mkcms_slideshow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(255) DEFAULT NULL,
  `s_parent` varchar(255) DEFAULT NULL,
  `s_order` int(11) DEFAULT NULL,
  `s_url` varchar(255) DEFAULT NULL,
  `s_picture` varchar(255) DEFAULT NULL,
  `s_content` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mkcms_slideshow`
--

LOCK TABLES `mkcms_slideshow` WRITE;
/*!40000 ALTER TABLE `mkcms_slideshow` DISABLE KEYS */;
/*!40000 ALTER TABLE `mkcms_slideshow` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mkcms_system`
--

DROP TABLE IF EXISTS `mkcms_system`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mkcms_system` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(255) DEFAULT NULL,
  `s_domain` varchar(255) DEFAULT NULL,
  `s_seoname` varchar(255) DEFAULT NULL,
  `s_keywords` varchar(255) DEFAULT NULL,
  `s_description` varchar(255) DEFAULT NULL,
  `s_cache` varchar(255) DEFAULT NULL,
  `s_wei` varchar(255) DEFAULT NULL,
  `s_user` varchar(255) DEFAULT NULL,
  `s_slow` varchar(255) DEFAULT NULL,
  `s_logo` varchar(255) DEFAULT NULL,
  `s_weixin` varchar(255) DEFAULT NULL,
  `s_dashang` varchar(255) DEFAULT NULL,
  `s_mjk` varchar(255) DEFAULT NULL,
  `s_jiekou` text,
  `s_copyright` text,
  `s_changyan` text,
  `s_alipay` varchar(255) DEFAULT NULL,
  `s_appid` varchar(255) DEFAULT NULL,
  `s_appkey` varchar(255) DEFAULT NULL,
  `s_shoukuan` varchar(255) DEFAULT NULL,
  `s_qqun` varchar(255) DEFAULT NULL,
  `s_token` varchar(255) DEFAULT NULL,
  `s_bdyun` varchar(255) DEFAULT NULL,
  `s_tongji` text,
  `s_qianxian` varchar(255) DEFAULT NULL,
  `s_dianying` varchar(255) DEFAULT NULL,
  `s_dianshi` varchar(255) DEFAULT NULL,
  `s_zongyi` varchar(255) DEFAULT NULL,
  `s_dongman` varchar(255) DEFAULT NULL,
  `s_tuiguang` varchar(255) DEFAULT NULL,
  `s_shoufei` text,
  `s_cishu` varchar(255) DEFAULT NULL,
  `s_gx` varchar(255) DEFAULT NULL,
  `s_hong` varchar(255) DEFAULT NULL,
  `s_gonggao` text,
  `s_bofang` varchar(255) DEFAULT NULL,
  `s_guanzhu` text,
  `s_fengmian` varchar(255) DEFAULT NULL,
  `s_mail` varchar(255) DEFAULT NULL,
  `s_smtp` varchar(255) DEFAULT NULL,
  `s_muser` varchar(255) DEFAULT NULL,
  `s_mpwd` varchar(255) DEFAULT NULL,
  `s_wappid` varchar(255) DEFAULT NULL,
  `s_wkey` varchar(255) DEFAULT NULL,
  `s_tixing` varchar(255) DEFAULT NULL,
  `s_appewm` varchar(255) DEFAULT NULL,
  `s_appbt` varchar(255) DEFAULT NULL,
  `s_apppic` varchar(255) DEFAULT NULL,
  `s_appurl` varchar(255) DEFAULT NULL,
  `s_gg` varchar(255) DEFAULT NULL,
  `s_hctime` varchar(255) DEFAULT NULL,
  `s_beijing` varchar(255) DEFAULT NULL,
  `s_dianyingnew` varchar(255) DEFAULT NULL,
  `s_dongmannew` varchar(255) DEFAULT NULL,
  `s_zongyinew` varchar(255) DEFAULT NULL,
  `s_zhifu` varchar(255) DEFAULT NULL,
  `s_tuijian` text,
  `s_wxguanzhu` varchar(255) DEFAULT NULL,
  `s_smsname` varchar(255) DEFAULT NULL,
  `s_smspass` varchar(255) DEFAULT NULL,
  `s_miaoshu` varchar(255) DEFAULT NULL,
  `s_hz` varchar(255) DEFAULT NULL,
  `s_yq` varchar(255) DEFAULT NULL,
  `s_autoqx` varchar(255) DEFAULT NULL,
  `s_mv` varchar(255) DEFAULT NULL,
  `s_zixun` varchar(255) DEFAULT NULL,
  `s_yy` varchar(255) DEFAULT NULL,
  `s_cxzy` varchar(255) DEFAULT NULL,
  `s_dataoke` varchar(255) DEFAULT NULL,
  `s_dataokeid` varchar(255) DEFAULT NULL,
  `s_tk` varchar(255) DEFAULT NULL,
  `s_tancgonggao` text,
  `s_tancurl` varchar(255) DEFAULT NULL,
  `s_tanchuangfenzhong` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mkcms_system`
--

LOCK TABLES `mkcms_system` WRITE;
/*!40000 ALTER TABLE `mkcms_system` DISABLE KEYS */;
INSERT INTO `mkcms_system` VALUES (1,'悠扬影视','http://mk.pzym.xyz:81/','悠扬影视 - 在线免费高清电影！','电影,视频大全,在线高清电影,付费电影,免费电影,剧集,电影,在线观看,VIP高清电影直播','悠扬影视，是专门做剧集,电影等在线播放服务，本页面提供电影的相关内容。','','','0','0','/images/logo.png','/images/code.jpg','/images/qrcode.jpg','//jx.a5027.com/jx3/?url=','江湖$//www.jhdyw.vip/jx/?url=\r\n测试$//vip.ikjiexi.top/?url=\r\n黑猫$https://jx.youyitv.com/?url=\r\n米酷$https://jx.htv009.com/?url=','悠扬PHP学习使用，禁止用于运营非法盈利<br />\r\n悠扬影视不承担任何由于个人原因非法运盈所引起的争议和法律责任<br />\r\n本网站内容收集于互联网，本站只提供web页面服务,并不提供影片资源存储录制、上传,播放功能<br />\r\nCopyright &copy;&nbsp; 悠扬影视 版权所有','','','','','','','1222','jingpin','','1','1','1','1','1','0','鸭王,鸭王2,','5','','','公告：欢迎光临悠扬影视，建议手机安装app观看，为了本站的收入，广告是必不可少的，请点击一下广告！让本站走的更远！','10',NULL,NULL,'0','ssl://smtp.163.com','','',NULL,NULL,'','/images/code.jpg','/images/code.jpg','扫码入群','//https://youyang.lanzous.com/b015ib9za','','','/images/bg.jpg','','','','1',NULL,NULL,'','','0','1','1','1','1','','1','http://www.123ku.com/inc/feifei3.4/','http://demo.dataoke.com/','774639','0','<h2 style=\"color: #FF00FF;\">今日公告</h2>搜不到资源？\" <a href=\"/book.html/\"><font color=\" #ff5454\">点我反馈问题</font></a> \" ，第一时间上架！<br/><br/>做一个 “ 悠扬影视 ” 一模一样的网站，请 “ <a href=\"https://mk.pzym.xyz:81\" target=\"_blank\"><font color=\" #ff5454\">点我了解</font></a> ” <br/><br/>手机端使用 “  <font color=\" #ff5454\">浏览器访问</font> ”可缓存下载视频、访问更快、更简洁， (微信内请点击右上角三点，再点击在浏览器打开！) <br/><br/>悠扬影视QQ群： “ <a href=\"https://jq.qq.com\" target=\"_blank\"><font color=\" #FF9900\">838297909(点我加入)</font></a> ” 博客网址： “ <a href=\"//mk.pzym.xyz:81\" target=\"_blank\"><font color=\" #FF9900\">mk.pzym.xyz:81</font></a> ” <br/><br/>感谢大家多年的支持与理解，在这里悠扬影视祝大家健康长寿、一夜暴富！','/book.html','720');
/*!40000 ALTER TABLE `mkcms_system` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mkcms_user`
--

DROP TABLE IF EXISTS `mkcms_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mkcms_user` (
  `u_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `u_qid` varchar(32) NOT NULL DEFAULT '',
  `u_name` varchar(32) NOT NULL DEFAULT '',
  `u_password` varchar(32) NOT NULL DEFAULT '',
  `u_qq` varchar(16) NOT NULL DEFAULT '',
  `u_email` varchar(32) NOT NULL DEFAULT '',
  `u_phone` varchar(16) NOT NULL DEFAULT '',
  `u_status` tinyint(1) NOT NULL DEFAULT '0',
  `u_flag` tinyint(1) NOT NULL DEFAULT '0',
  `u_question` varchar(255) NOT NULL DEFAULT '',
  `u_answer` varchar(255) NOT NULL DEFAULT '',
  `u_group` smallint(6) NOT NULL DEFAULT '0',
  `u_points` smallint(6) NOT NULL DEFAULT '0',
  `u_regtime` char(255) NOT NULL DEFAULT '0',
  `u_logintime` char(255) NOT NULL DEFAULT '0',
  `u_loginnum` smallint(6) NOT NULL DEFAULT '0',
  `u_extend` smallint(6) NOT NULL DEFAULT '0',
  `u_loginip` char(15) NOT NULL DEFAULT '0',
  `u_random` varchar(32) NOT NULL DEFAULT '',
  `u_fav` text NOT NULL,
  `u_plays` text NOT NULL,
  `u_downs` text NOT NULL,
  `u_start` int(10) NOT NULL DEFAULT '0',
  `u_end` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`u_id`),
  KEY `u_group` (`u_group`),
  KEY `u_status` (`u_status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mkcms_user`
--

LOCK TABLES `mkcms_user` WRITE;
/*!40000 ALTER TABLE `mkcms_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `mkcms_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mkcms_user_card`
--

DROP TABLE IF EXISTS `mkcms_user_card`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mkcms_user_card` (
  `c_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `c_number` varchar(16) NOT NULL DEFAULT '',
  `c_pass` varchar(8) NOT NULL DEFAULT '' COMMENT '分类',
  `c_money` int(11) NOT NULL DEFAULT '0' COMMENT '天数',
  `c_used` tinyint(1) NOT NULL DEFAULT '0',
  `c_sale` tinyint(1) NOT NULL DEFAULT '0',
  `c_user` varchar(255) DEFAULT '0',
  `c_addtime` int(10) NOT NULL DEFAULT '0',
  `c_usetime` int(10) NOT NULL DEFAULT '0',
  `c_userid` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_id`),
  KEY `c_used` (`c_used`),
  KEY `c_sale` (`c_sale`),
  KEY `c_user` (`c_user`),
  KEY `c_addtime` (`c_addtime`),
  KEY `c_usetime` (`c_usetime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mkcms_user_card`
--

LOCK TABLES `mkcms_user_card` WRITE;
/*!40000 ALTER TABLE `mkcms_user_card` DISABLE KEYS */;
/*!40000 ALTER TABLE `mkcms_user_card` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mkcms_user_cardclass`
--

DROP TABLE IF EXISTS `mkcms_user_cardclass`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mkcms_user_cardclass` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `card_id` varchar(255) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mkcms_user_cardclass`
--

LOCK TABLES `mkcms_user_cardclass` WRITE;
/*!40000 ALTER TABLE `mkcms_user_cardclass` DISABLE KEYS */;
/*!40000 ALTER TABLE `mkcms_user_cardclass` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mkcms_user_group`
--

DROP TABLE IF EXISTS `mkcms_user_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mkcms_user_group` (
  `ug_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `ug_name` varchar(32) NOT NULL DEFAULT '',
  `ug_type` varchar(255) NOT NULL DEFAULT '',
  `ug_popedom` varchar(32) NOT NULL DEFAULT '',
  `ug_upgrade` smallint(6) NOT NULL DEFAULT '0',
  `ug_popvalue` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ug_id`),
  KEY `ug_upgrade` (`ug_upgrade`),
  KEY `ug_popvalue` (`ug_popvalue`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mkcms_user_group`
--

LOCK TABLES `mkcms_user_group` WRITE;
/*!40000 ALTER TABLE `mkcms_user_group` DISABLE KEYS */;
INSERT INTO `mkcms_user_group` VALUES (1,'普通会员','','',0,1),(2,'金牌会员','','',10,0),(3,'超级会员','','',500,0);
/*!40000 ALTER TABLE `mkcms_user_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mkcms_user_pay`
--

DROP TABLE IF EXISTS `mkcms_user_pay`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mkcms_user_pay` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_order` varchar(255) NOT NULL DEFAULT '0',
  `p_uid` varchar(255) NOT NULL DEFAULT '0',
  `p_price` varchar(255) NOT NULL DEFAULT '0',
  `p_time` int(10) NOT NULL DEFAULT '0',
  `p_point` varchar(255) NOT NULL DEFAULT '0',
  `p_status` tinyint(1) NOT NULL DEFAULT '0',
  `p_group` smallint(255) DEFAULT NULL,
  PRIMARY KEY (`p_id`),
  KEY `p_order` (`p_order`),
  KEY `p_uid` (`p_uid`),
  KEY `p_status` (`p_status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mkcms_user_pay`
--

LOCK TABLES `mkcms_user_pay` WRITE;
/*!40000 ALTER TABLE `mkcms_user_pay` DISABLE KEYS */;
/*!40000 ALTER TABLE `mkcms_user_pay` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mkcms_user_visit`
--

DROP TABLE IF EXISTS `mkcms_user_visit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mkcms_user_visit` (
  `uv_id` int(11) NOT NULL AUTO_INCREMENT,
  `uv_uid` int(11) DEFAULT '0',
  `uv_ip` int(10) NOT NULL DEFAULT '0',
  `uv_ly` varchar(128) NOT NULL DEFAULT '',
  `uv_time` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uv_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mkcms_user_visit`
--

LOCK TABLES `mkcms_user_visit` WRITE;
/*!40000 ALTER TABLE `mkcms_user_visit` DISABLE KEYS */;
/*!40000 ALTER TABLE `mkcms_user_visit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mkcms_userka`
--

DROP TABLE IF EXISTS `mkcms_userka`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mkcms_userka` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `money` varchar(255) DEFAULT NULL,
  `jifen` varchar(255) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mkcms_userka`
--

LOCK TABLES `mkcms_userka` WRITE;
/*!40000 ALTER TABLE `mkcms_userka` DISABLE KEYS */;
INSERT INTO `mkcms_userka` VALUES (1,'包月会员','30','5','50',2);
/*!40000 ALTER TABLE `mkcms_userka` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-06-27 13:19:29
