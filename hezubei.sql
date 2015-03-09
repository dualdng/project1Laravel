-- MySQL dump 10.13  Distrib 5.5.38, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: hezubei
-- ------------------------------------------------------
-- Server version	5.5.38-0+wheezy1

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
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `location` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `town` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `backupA` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `backupB` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location`
--

LOCK TABLES `location` WRITE;
/*!40000 ALTER TABLE `location` DISABLE KEYS */;
INSERT INTO `location` VALUES (1,'中国','江苏省','南京市','江宁区','2015-02-18 20:18:08','2015-02-18 20:18:08',NULL,NULL),(2,'中国','江苏省','南京市','浦口区','2015-02-18 20:18:40','2015-02-18 20:18:40',NULL,NULL),(3,'中国','江苏省','南京市','下关区','2015-02-18 20:18:47','2015-02-18 20:18:47',NULL,NULL),(4,'中国','江苏省','南京市','鼓楼区','2015-02-18 20:18:55','2015-02-18 20:18:55',NULL,NULL),(5,'中国','江苏省','南京市','白下区','2015-02-18 20:19:01','2015-02-18 20:19:01',NULL,NULL),(6,'中国','江苏省','南京市','栖霞区','2015-02-18 20:19:06','2015-02-18 20:19:06',NULL,NULL),(7,'中国','江苏省','南京市','建邺区','2015-02-18 20:19:12','2015-02-18 20:19:12',NULL,NULL),(8,'中国','江苏省','苏州市','吴中区','2015-02-18 20:20:04','2015-02-18 20:20:04',NULL,NULL),(9,'中国','江苏省','苏州市','吴江区','2015-02-18 20:20:10','2015-02-18 20:20:10',NULL,NULL),(10,'中国','江苏省','苏州市','姑苏区','2015-02-18 20:20:15','2015-02-18 20:20:15',NULL,NULL),(11,'中国','江苏省','苏州市','相城区','2015-02-18 20:20:29','2015-02-18 20:20:29',NULL,NULL),(12,'中国','江苏省','苏州市','虎丘区','2015-02-18 20:20:36','2015-02-18 20:20:36',NULL,NULL),(13,'中国','上海市','上海市','黄浦区','2015-02-19 04:23:45','2015-02-19 04:23:45',NULL,NULL),(14,'中国','上海市','上海市','浦东新区','2015-02-19 04:23:53','2015-02-19 04:23:53',NULL,NULL),(15,'中国','上海市','上海市','徐汇区','2015-02-19 04:24:00','2015-02-19 04:24:00',NULL,NULL),(16,'中国','上海市','上海市','长宁区','2015-02-19 04:24:44','2015-02-19 04:24:44',NULL,NULL),(17,'中国','上海市','上海市','静安区','2015-02-19 04:24:48','2015-02-19 04:24:48',NULL,NULL),(18,'中国','上海市','上海市','普陀区','2015-02-19 04:24:59','2015-02-19 04:24:59',NULL,NULL),(19,'中国','上海市','上海市','闸北区','2015-02-19 04:25:13','2015-02-19 04:25:13',NULL,NULL),(20,'中国','上海市','上海市','虹口区','2015-02-19 04:25:22','2015-02-19 04:25:22',NULL,NULL),(21,'中国','上海市','上海市','杨浦区','2015-02-19 04:25:28','2015-02-19 04:25:28',NULL,NULL),(22,'中国','上海市','上海市','闵行区','2015-02-19 04:25:38','2015-02-19 04:25:38',NULL,NULL),(23,'中国','上海市','上海市','宝山区','2015-02-19 04:25:47','2015-02-19 04:25:47',NULL,NULL),(24,'中国','上海市','上海市','嘉定区','2015-02-19 04:25:53','2015-02-19 04:25:53',NULL,NULL),(25,'中国','上海市','上海市','金山区','2015-02-19 04:26:02','2015-02-19 04:26:02',NULL,NULL),(26,'中国','上海市','上海市','松江区','2015-02-19 04:26:07','2015-02-19 04:26:07',NULL,NULL),(27,'中国','上海市','上海市','青浦区','2015-02-19 04:26:27','2015-02-19 04:26:27',NULL,NULL),(28,'中国','上海市','上海市','奉贤区','2015-02-19 04:26:32','2015-02-19 04:26:32',NULL,NULL),(29,'中国','上海市','上海市','崇明县','2015-02-19 04:26:44','2015-02-19 04:26:44',NULL,NULL);
/*!40000 ALTER TABLE `location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table',1),('2015_02_16_165312_create_zl_post_table',1),('2015_02_16_173408_create_zl_comment_table',1),('2015_02_17_010823_alter_zl_post_table',1),('2015_02_17_092011_create_users_table',1),('2015_02_17_133541_alter_user_table',2),('2015_02_18_130747_create_posts_table',3),('2015_02_18_195343_create_location_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `backup_a` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `backup_b` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'/avatar/1.jpeg','admin','admin@hezubei.com','$2y$10$OKwplekXFiXv2im7eKZa3.Ycn3l0htr.j32VHHEzuTc5xg4pgoVwa','6S8ePvUi2n1RbigjxiCTkr1k35xbcD1nTzkqTa0lGzVyJ28o29Xnnq08Gl01','2015-02-17 01:26:17','2015-03-08 19:41:18',NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zl_comment`
--

DROP TABLE IF EXISTS `zl_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zl_comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `postId` int(11) NOT NULL,
  `parentId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `backup_a` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `backup_b` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zl_comment`
--

LOCK TABLES `zl_comment` WRITE;
/*!40000 ALTER TABLE `zl_comment` DISABLE KEYS */;
INSERT INTO `zl_comment` VALUES (1,49,0,1,'这是一条评论测试1','2015-03-09 04:14:06','0000-00-00 00:00:00',NULL,NULL),(2,49,1,1,'这是一条评论测试2','2015-03-09 04:14:10','0000-00-00 00:00:00',NULL,NULL),(3,49,2,1,'这是一条评论测试3','2015-03-09 04:14:15','0000-00-00 00:00:00',NULL,NULL),(4,49,3,1,'这是一条评论测试4','2015-03-09 04:14:18','0000-00-00 00:00:00',NULL,NULL),(5,49,2,1,'这是一条评论测试5','2015-03-09 04:14:22','0000-00-00 00:00:00',NULL,NULL),(6,49,0,1,'这是一条评论测试6','2015-03-09 04:14:27','0000-00-00 00:00:00',NULL,NULL),(7,49,3,1,'这是一条评论测试7','2015-03-09 04:14:29','0000-00-00 00:00:00',NULL,NULL),(8,49,4,1,'这是一条评论测试8','2015-03-09 04:14:32','0000-00-00 00:00:00',NULL,NULL),(9,49,3,1,'这是一条评论测试9','2015-03-09 04:14:35','0000-00-00 00:00:00',NULL,NULL),(10,49,3,1,'这是一条评论测试10','2015-03-09 04:14:37','0000-00-00 00:00:00',NULL,NULL),(11,49,5,1,'这是一条评论测试11','2015-03-09 04:14:40','0000-00-00 00:00:00',NULL,NULL),(12,49,0,1,'这是一条测试评论25这是一条测试评论25这是一条测试评论25这是一条测试评论25','2015-03-09 04:14:41','2015-02-22 10:49:58',NULL,NULL);
/*!40000 ALTER TABLE `zl_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zl_post`
--

DROP TABLE IF EXISTS `zl_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zl_post` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `author` int(11) NOT NULL,
  `communication` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `post_type` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sex` tinyint(4) DEFAULT NULL,
  `age` int(2) DEFAULT NULL,
  `job` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL,
  `direction` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dress` tinyint(4) DEFAULT NULL,
  `facility` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_complete` tinyint(4) NOT NULL,
  `backup_a` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `backup_b` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `square` double(6,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zl_post`
--

LOCK TABLES `zl_post` WRITE;
/*!40000 ALTER TABLE `zl_post` DISABLE KEYS */;
INSERT INTO `zl_post` VALUES (33,'测试数据1','												<p>这里我可以写一些输入提示</p><p><br/></p><p><br/></p><p><img src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258733844131.jpg\\\" _src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258733844131.jpg\\\" style=\\\"\\\"/></p><p><img src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258733862467.jpg\\\" _src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258733862467.jpg\\\" style=\\\"\\\"/></p>\n										','中国,江苏省,苏州市,吴江区,竹山路谭桥公寓',800,1,'18625167058,17604384',1,'2015-03-08 19:56:30','2015-03-08 19:56:30',0,25,'工程师',NULL,NULL,NULL,'床,空调',0,NULL,NULL,NULL),(34,'测试数据2','												<p>这里我可以写一些输入提示</p><p><img src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258734361134.jpg\\\" _src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258734361134.jpg\\\" style=\\\"\\\"/></p><p><img src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258734383989.jpg\\\" _src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258734383989.jpg\\\" style=\\\"\\\"/></p>\n										','中国,江苏省,南京市,江宁区,竹山路谭桥公寓',800,1,'18625167058,17604384',1,'2015-03-08 19:57:20','2015-03-08 19:57:20',0,25,'工程师',NULL,NULL,NULL,'空调,热水器,宽带',0,NULL,NULL,NULL),(35,'测试数据3','												<p>这里我可以写一些输入提示</p><p><img src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258734789505.jpg\\\" _src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258734789505.jpg\\\" style=\\\"\\\"/></p><p><img src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258734796938.jpg\\\" _src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258734796938.jpg\\\" style=\\\"\\\"/></p><p><img src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258734817679.jpg\\\" _src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258734817679.jpg\\\" style=\\\"\\\"/></p>\n										','中国,江苏省,南京市,下关区,竹山路谭桥公寓',800,1,'18625167058,17604384',1,'2015-03-08 19:58:03','2015-03-08 19:58:03',0,25,'IT工程师',NULL,NULL,NULL,'床,空调,热水器,宽带',0,NULL,NULL,NULL),(36,'测试数据4','												<p>这里我可以写一些输入提示</p><p><img src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258735176782.jpg\\\" _src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258735176782.jpg\\\"/></p>\n										','中国,江苏省,南京市,白下区,竹山路谭桥公寓',800,1,'18625167058,17604384',1,'2015-03-08 19:58:39','2015-03-08 19:58:39',0,25,'工程师',NULL,NULL,NULL,'床,空调,热水器',0,NULL,NULL,NULL),(37,'测试数据6','												<p>这里我可以写一些输入提示</p><p style=\\\"line-height: 22.8571434020996px; white-space: normal;\\\">这里我可以写一些输入提示</p><p style=\\\"line-height: 22.8571434020996px; white-space: normal;\\\">这里我可以写一些输入提示</p>\n										','中国,上海市,上海市,徐汇区,竹山路谭桥公寓',800,1,'18625167058,17604384',1,'2015-03-08 19:59:12','2015-03-08 19:59:12',0,25,'工程师',NULL,NULL,NULL,'床',0,NULL,NULL,NULL),(38,'测试数据7测试数据7测试数据7测试数据7测试数据7测试数据7','												<p>这里我可以写一些输入提示</p><p><br/></p><p><br/></p><p><br/></p><p><img src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258737761654.jpg\\\" _src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258737761654.jpg\\\"/></p>\n										','中国,江苏省,苏州市,吴江区,竹山路谭桥公寓',800,1,'18625167058,17604384',1,'2015-03-08 20:02:58','2015-03-08 20:02:58',0,25,'工程师',NULL,NULL,NULL,'无',0,NULL,NULL,NULL),(39,'测试数据8，这是一条测试数据1，这是一条测试数据1','												<p>这里我可以写一些输入提示<img src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258738119119.jpg\\\" _src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258738119119.jpg\\\"/></p>\n										','中国,江苏省,南京市,浦口区,竹山路谭桥公寓',800,1,'18625167058,17604384',1,'2015-03-08 20:03:32','2015-03-08 20:03:32',0,25,'工程师',NULL,NULL,NULL,'床,空调',0,NULL,NULL,NULL),(40,'测试数据9，这是一条测试数据1，这是一条测试数据1','<img src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258738407309.jpg\\\" _src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258738407309.jpg\\\"/>\n												<p>这里我可以写一些输入提示</p>\n										','中国,江苏省,苏州市,吴江区,竹山路谭桥公寓',800,1,'18625167058,17604384',1,'2015-03-08 20:04:02','2015-03-08 20:04:02',0,25,'工程师',NULL,NULL,NULL,'无',0,NULL,NULL,NULL),(41,'测试数据10','												<p>这里我可以写一些输入提示<img src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258738723302.jpg\\\" _src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258738723302.jpg\\\"/></p>\n										','中国,江苏省,南京市,栖霞区,竹山路谭桥公寓',800,1,'18625167058,17604384',1,'2015-03-08 20:04:33','2015-03-08 20:04:33',0,25,'IT工程师',NULL,NULL,NULL,'无',0,NULL,NULL,NULL),(42,'测试数据11，这是一条测试数据1，这是一条测试数据1','												<p>这里我可以写一些输入提示<img src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258738981489.jpg\\\" _src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258738981489.jpg\\\"/></p>\n										','中国,江苏省,苏州市,吴江区,竹山路谭桥公寓',800,1,'18625167058,17604384',1,'2015-03-08 20:05:01','2015-03-08 20:05:01',0,25,'工程师',NULL,NULL,NULL,'无',0,NULL,NULL,NULL),(43,'测试数据1，这是一条测试数据1，这是一条测试数据1','												<p>这里我可以写一些输入提示<img src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258739329165.jpg\\\" _src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258739329165.jpg\\\"/></p>\n										','中国,江苏省,苏州市,吴江区,竹山路谭桥公寓',800,1,'18625167058,17604384',2,'2015-03-08 20:05:34','2015-03-08 20:05:34',NULL,NULL,NULL,0,'南',0,'床,空调',0,NULL,NULL,120.00),(44,'测试数据1，这是一条测试数据1，这是一条测试数据1','												<p>这里我可以写一些输入提示</p>\n										','中国,江苏省,苏州市,吴江区,竹山路谭桥公寓',800,1,'18625167058,17604384',2,'2015-03-08 20:06:01','2015-03-08 20:06:01',NULL,NULL,NULL,0,'南',0,'空调,热水器',0,NULL,NULL,120.00),(45,'测试数据1，这是一条测试数据1，这是一条测试数据1','												<p>这里我可以写一些输入提示</p>\n										','中国,上海市,上海市,浦东新区,竹山路谭桥公寓',800,1,'18625167058,17604384',2,'2015-03-08 20:06:27','2015-03-08 20:06:27',NULL,NULL,NULL,0,'南',0,'床,空调,热水器',0,NULL,NULL,120.00),(46,'测试数据1，这是一条测试数据1，这是一条测试数据1','												<p>这里我可以写一些输入提示<img src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258740147182.jpg\\\" _src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258740147182.jpg\\\"/></p>\n										','中国,江苏省,南京市,浦口区,竹山路谭桥公寓',800,1,'18625167058,17604384',2,'2015-03-08 20:06:56','2015-03-08 20:06:56',NULL,NULL,NULL,0,'南',0,'床,空调,热水器',0,NULL,NULL,120.00),(47,'测试数据1，这是一条测试数据1，这是一条测试数据1','												<p>这里我可以写一些输入提示<img src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258740405656.jpg\\\" _src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/14258740405656.jpg\\\"/></p>\n										','中国,江苏省,南京市,鼓楼区,竹山路谭桥公寓',800,1,'18625167058,17604384',2,'2015-03-08 20:07:22','2015-03-08 20:07:22',NULL,NULL,NULL,0,'南',0,'床',0,NULL,NULL,120.00),(48,'测试数据1，这是一条测试数据1，这是一条测试数据1','												<p>这里我可以写一些输入提示</p>\n										','中国,江苏省,苏州市,吴江区,竹山路谭桥公寓',800,1,'18625167058,17604384',2,'2015-03-08 20:07:44','2015-03-08 20:07:44',NULL,NULL,NULL,0,'南',0,'空调,热水器,宽带',0,NULL,NULL,120.00),(49,'测试数据1，这是一条测试数据1，这是一条测试数据1','<img src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/1425874106869.jpg\\\" _src=\\\"http://127.0.0.1/umeditor/php/upload/20150309/1425874106869.jpg\\\"/>\n												<p>这里我可以写一些输入提示</p>\n										','中国,江苏省,南京市,浦口区,竹山路谭桥公寓',800,1,'18625167058,17604384',3,'2015-03-08 20:08:28','2015-03-08 20:08:28',NULL,NULL,NULL,0,NULL,0,'空调,热水器',0,NULL,NULL,120.00);
/*!40000 ALTER TABLE `zl_post` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-03-09 12:28:06
