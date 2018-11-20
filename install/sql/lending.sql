-- MySQL dump 10.15  Distrib 10.0.36-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: ci_adminlte
-- ------------------------------------------------------
-- Server version	10.0.36-MariaDB-0ubuntu0.16.04.1

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
-- Table structure for table `admin_preferences`
--

DROP TABLE IF EXISTS `admin_preferences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_preferences` (
  `id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `user_panel` tinyint(1) NOT NULL DEFAULT '0',
  `sidebar_form` tinyint(1) NOT NULL DEFAULT '0',
  `messages_menu` tinyint(1) NOT NULL DEFAULT '0',
  `notifications_menu` tinyint(1) NOT NULL DEFAULT '0',
  `tasks_menu` tinyint(1) NOT NULL DEFAULT '0',
  `user_menu` tinyint(1) NOT NULL DEFAULT '1',
  `ctrl_sidebar` tinyint(1) NOT NULL DEFAULT '0',
  `transition_page` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_preferences`
--

LOCK TABLES `admin_preferences` WRITE;
/*!40000 ALTER TABLE `admin_preferences` DISABLE KEYS */;
INSERT INTO `admin_preferences` VALUES (1,0,0,1,0,0,1,0,0);
/*!40000 ALTER TABLE `admin_preferences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `comment_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_post_ID` bigint(20) unsigned NOT NULL DEFAULT '0',
  `comment_author` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_ID`),
  KEY `comment_post_ID` (`comment_post_ID`),
  KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  KEY `comment_date_gmt` (`comment_date_gmt`),
  KEY `comment_parent` (`comment_parent`),
  KEY `comment_author_email` (`comment_author_email`(10))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `bgcolor` char(7) NOT NULL DEFAULT '#607D8B',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'admin','Administrator','#F44336'),(2,'members','General User','#2196F3'),(3,'borrow','borrow','#607d8b'),(4,'invest','invest','#000000');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guarantee`
--

DROP TABLE IF EXISTS `guarantee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guarantee` (
  `guarantee_id` int(11) NOT NULL AUTO_INCREMENT,
  `loan_id` int(11) DEFAULT '0',
  `name` varchar(300) DEFAULT NULL,
  `type` varchar(300) DEFAULT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `make` varchar(50) DEFAULT NULL,
  `serial` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `proof` varchar(1000) DEFAULT NULL,
  `images` varchar(1000) DEFAULT NULL,
  `observations` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`guarantee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guarantee`
--

LOCK TABLES `guarantee` WRITE;
/*!40000 ALTER TABLE `guarantee` DISABLE KEYS */;
/*!40000 ALTER TABLE `guarantee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loan_payments`
--

DROP TABLE IF EXISTS `loan_payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loan_payments` (
  `loan_payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `account` varchar(50) DEFAULT '0',
  `loan_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `balance_amount` decimal(10,2) DEFAULT NULL,
  `paid_amount` decimal(10,2) DEFAULT NULL,
  `teller_id` int(11) DEFAULT NULL,
  `date_paid` int(11) DEFAULT NULL,
  `date_modified` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `remarks` varchar(2000) DEFAULT NULL,
  `delete_flag` int(1) DEFAULT '0',
  PRIMARY KEY (`loan_payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loan_payments`
--

LOCK TABLES `loan_payments` WRITE;
/*!40000 ALTER TABLE `loan_payments` DISABLE KEYS */;
/*!40000 ALTER TABLE `loan_payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loan_types`
--

DROP TABLE IF EXISTS `loan_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loan_types` (
  `loan_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `term` int(11) DEFAULT NULL,
  `term_period_type` varchar(50) DEFAULT NULL,
  `payment_schedule` varchar(50) DEFAULT NULL,
  `percent_charge1` decimal(10,2) DEFAULT NULL,
  `period_charge1` int(11) DEFAULT NULL,
  `period_type1` varchar(50) DEFAULT NULL,
  `percent_charge2` decimal(10,2) DEFAULT NULL,
  `period_charge2` int(11) DEFAULT NULL,
  `period_type2` varchar(50) DEFAULT NULL,
  `percent_charge3` decimal(10,2) DEFAULT NULL,
  `period_charge3` int(11) DEFAULT NULL,
  `period_type3` varchar(50) DEFAULT NULL,
  `percent_charge4` decimal(10,2) DEFAULT NULL,
  `period_charge4` int(11) DEFAULT NULL,
  `period_type4` varchar(50) DEFAULT NULL,
  `percent_charge5` decimal(10,2) DEFAULT NULL,
  `period_charge5` int(11) DEFAULT NULL,
  `period_type5` varchar(50) DEFAULT NULL,
  `percent_charge6` decimal(10,2) DEFAULT NULL,
  `period_charge6` int(11) DEFAULT NULL,
  `period_type6` varchar(50) DEFAULT NULL,
  `percent_charge7` decimal(10,2) DEFAULT NULL,
  `period_charge7` int(11) DEFAULT NULL,
  `period_type7` varchar(50) DEFAULT NULL,
  `percent_charge8` decimal(10,2) DEFAULT NULL,
  `period_charge8` int(11) DEFAULT NULL,
  `period_type8` varchar(50) DEFAULT NULL,
  `percent_charge9` decimal(10,2) DEFAULT NULL,
  `period_charge9` int(11) DEFAULT NULL,
  `period_type9` varchar(50) DEFAULT NULL,
  `percent_charge10` decimal(10,2) DEFAULT NULL,
  `period_charge10` int(11) DEFAULT NULL,
  `period_type10` varchar(50) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `date_added` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `date_modified` int(11) DEFAULT NULL,
  PRIMARY KEY (`loan_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loan_types`
--

LOCK TABLES `loan_types` WRITE;
/*!40000 ALTER TABLE `loan_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `loan_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loans`
--

DROP TABLE IF EXISTS `loans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loans` (
  `loan_id` int(11) NOT NULL AUTO_INCREMENT,
  `account` varchar(50) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `remarks` varchar(300) DEFAULT NULL,
  `loan_type_id` int(11) DEFAULT NULL,
  `borrower_id` int(11) DEFAULT NULL,
  `invester_id` int(11) DEFAULT NULL,
  `loan_amount` decimal(10,2) DEFAULT NULL,
  `loan_balance` decimal(10,2) DEFAULT NULL,
  `loan_status` enum('pending','approved','on going','paid') DEFAULT NULL,
  `loan_agent_id` int(11) DEFAULT NULL,
  `loan_approved_by_id` int(11) DEFAULT NULL,
  `loan_reviewed_by_id` int(11) DEFAULT NULL,
  `loan_applied_date` int(11) DEFAULT NULL,
  `loan_payment_date` int(11) DEFAULT NULL,
  `misc_fees` text,
  `delete_flag` int(11) DEFAULT NULL,
  `payment_scheds` text,
  PRIMARY KEY (`loan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loans`
--

LOCK TABLES `loans` WRITE;
/*!40000 ALTER TABLE `loans` DISABLE KEYS */;
/*!40000 ALTER TABLE `loans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_attempts`
--

LOCK TABLES `login_attempts` WRITE;
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL,
  `position` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (12,'Home','home',0,1,21,NULL),(13,'About','read/about-us',0,1,23,NULL),(18,'Services','read/services',0,1,22,NULL),(21,'News','news',0,1,12,NULL),(22,'Blogs','blogs',0,1,14,NULL),(23,'Gallery','galleries',0,1,24,NULL),(24,'Contact','contacts',0,1,13,NULL),(25,'About Us','read/about-us',13,1,25,NULL),(26,'CEO','read/ceo',13,1,26,NULL),(27,'Associates','associates',13,1,27,NULL),(28,'Advisors','read/advisors',13,1,28,NULL),(29,'Industries We Serve','read/industries-we-serve',18,1,29,NULL),(30,'Services','read/services',18,1,30,NULL);
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `user_sent` text NOT NULL,
  `user_receive` text NOT NULL,
  `avatar` varchar(500) NOT NULL,
  `message` text NOT NULL,
  `image` varchar(500) NOT NULL,
  `tipe` varchar(200) NOT NULL,
  `date` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,'quanghoa','quangthuan','sdsd','sdsd','sdsd','user','');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_author` bigint(20) unsigned NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `guid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `post_name` (`post_name`(191)),
  KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  KEY `post_parent` (`post_parent`),
  KEY `post_author` (`post_author`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `public_preferences`
--

DROP TABLE IF EXISTS `public_preferences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `public_preferences` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `transition_page` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `public_preferences`
--

LOCK TABLES `public_preferences` WRITE;
/*!40000 ALTER TABLE `public_preferences` DISABLE KEYS */;
INSERT INTO `public_preferences` VALUES (1,0);
/*!40000 ALTER TABLE `public_preferences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) DEFAULT '0',
  `user_agent` varchar(120) DEFAULT NULL,
  `last_activity` int(10) unsigned DEFAULT '0',
  `user_data` text,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `usertype` int(1) DEFAULT NULL,
  `type` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'127.0.0.1','administrator','$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36','','admin@admin.com','',NULL,NULL,'hUQF1BBs6BeuYqGAWBcEzO',1268889823,1542630728,1,'Administrator','1','ADMIN','0969600981',0,'admin'),(2,'::1','quang hoa','$2y$08$N.vlsQQrBE1FwmCbi4H3L.JbMJ6sxc/nMNvYjtvjIPn.sA0MLCwBe',NULL,'hoa9x3@gmail.com',NULL,NULL,NULL,'/FowXAI23H1PTnsN3AUR3O',1537116727,1542729309,1,'Quang','Hoa','Framgia','0969600981',0,'borrowers'),(3,'::1','quang Đoàn','$2y$08$L6JSKkTSnljNhpDO3orWsOPEXX8djPTaMpv7aduS9uD/UahNBV.BS',NULL,'doan.quang.hoa@framgia.com',NULL,NULL,NULL,'GDq.nZ3SEiy.SMd5ZH4K2e',1537198957,1537283038,1,'Quang','Đoàn','Framgia Inc','0969600981',0,'borrowers'),(4,'127.0.0.1','sdsd sdsdsd','$2y$08$PKcT6cGIfNWFKys4mqqwj.Bwj3/G1IB/bSKRbxKuPZ4N5RJsh7oxC',NULL,'hoa9xsd3@gmail.com',NULL,NULL,NULL,NULL,1537366023,NULL,1,'sdsd','sdsdsd','sdsd','969600981',NULL,'borrowers'),(5,'127.0.0.1','quang Đoàn','$2y$08$lGuURqP6wZPyvvWm4TJCuelqKjYwizBX5rjphMvENARr2hpMldVYK',NULL,'hoa9xsdsd3@gmail.com',NULL,NULL,NULL,NULL,1537366326,NULL,1,'Quang','Đoàn','Framgia Inc','969600981',1,'borrowers'),(6,'127.0.0.1','quang hoa','$2y$08$Mfdv7g9uecvPWcmESO3g5ed0dxCL1o3UBafgdshquxxZJELlx9ODy',NULL,'hoa9xsdssdd3@gmail.com',NULL,NULL,NULL,NULL,1537366383,NULL,1,'Quang','Hoa','Framgia Inc','969600981',0,'borrowers'),(7,'127.0.0.1','quang hoa','$2y$08$ZAs9lzuHZw5QIQYkomRlwu1TVqvaJ33xwbhjY0xncGCZ7NtuZdxYm',NULL,'hoa9xsdsdssdd3@gmail.com',NULL,NULL,NULL,NULL,1537366525,NULL,1,'Quang','Hoa','Framgia Inc','969600981',0,'borrowers'),(8,'127.0.0.1','quang hoa','$2y$08$IdR2HJV/GrFSvR0ecGCzOuj.rtZEjO61a3Uk.MmUYBG4nYwcCAWwq',NULL,'hoa9xsddssdd3@gmail.com',NULL,NULL,NULL,NULL,1537366550,NULL,1,'Quang','Hoa','Framgia Inc','969600981',0,NULL),(9,'127.0.0.1','quang hoa','$2y$08$Rsp1H9tM.1QgfKosD7LgPeOSVx0CycTsbBYfu3Unf/EMF6qC0O9DS',NULL,'hoa9xsddssdsdd3@gmail.com',NULL,NULL,NULL,NULL,1537366572,NULL,1,'Quang','Hoa','Framgia Inc','969600981',0,NULL),(10,'127.0.0.1','quang hoa','$2y$08$J8Vb3cjcAh6rOjCfl71Gm.2tZ2Fx1ysw3a8CE6XUvp6l8gDCDuUKq',NULL,'hoa9xsddsssdsdd3@gmail.com',NULL,NULL,NULL,NULL,1537366589,NULL,1,'Quang','Hoa','Framgia Inc','969600981',0,NULL),(11,'127.0.0.1','quang hoa','$2y$08$RmSiUT3O1x1ZATLK6f8shOE6hfQLthbVJ9HXHV7mXjlASiYWHnKc2',NULL,'hoa9xsddssssdsdd3@gmail.com',NULL,NULL,NULL,NULL,1537366609,NULL,1,'Quang','Hoa','Framgia Inc','969600981',0,NULL),(12,'127.0.0.1','quang hoa','$2y$08$KGfFnv5s55v3XGEMPiobFu5AF96rsb3AcGhXfHc5tBS1QWOdcvynW',NULL,'hoa9xsdsddssssdsdd3@gmail.com',NULL,NULL,NULL,NULL,1537366627,NULL,1,'Quang','Hoa','Framgia Inc','969600981',0,NULL),(13,'::1','quang Đoàn','$2y$08$os3U.rGEuwvVjRY4s0d.geaThneFjOHdaPidXFRrQiB3NxVhtIPyi',NULL,'doan.hoa@framgia.com',NULL,NULL,NULL,NULL,1540828464,1540829679,1,'Quang','Đoàn','Framgia Inc','0969600981',0,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_groups`
--

DROP TABLE IF EXISTS `users_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_groups`
--

LOCK TABLES `users_groups` WRITE;
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` VALUES (15,1,1),(16,1,2),(2,2,2),(17,3,2),(18,4,2),(19,5,2),(20,6,2),(21,7,2),(22,8,2),(23,9,2),(24,10,2),(25,11,2),(26,12,2),(30,13,1),(31,13,2),(32,13,3),(33,13,4);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wallets`
--

DROP TABLE IF EXISTS `wallets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wallets` (
  `wallet_id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` decimal(10,2) DEFAULT NULL,
  `descriptions` varchar(200) DEFAULT NULL,
  `wallet_type` enum('debit','credit','transfer') DEFAULT NULL,
  `trans_date` int(11) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `transfer_to` int(11) DEFAULT NULL,
  PRIMARY KEY (`wallet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wallets`
--

LOCK TABLES `wallets` WRITE;
/*!40000 ALTER TABLE `wallets` DISABLE KEYS */;
/*!40000 ALTER TABLE `wallets` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-20 23:43:13
