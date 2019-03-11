-- MySQL dump 10.16  Distrib 10.1.28-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: beesweet
-- ------------------------------------------------------
-- Server version	10.1.28-MariaDB

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
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT '0',
  `name` varchar(100) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,0,'Торты','торты',''),(2,1,'Праздничные торты','',NULL),(4,1,'Корпоративные торты','',NULL),(5,1,'Свадебные торты','',NULL),(6,1,'Детские торты','',NULL),(7,1,'Фототорты','',NULL),(8,0,'Капкейки','',NULL),(9,8,'Праздничные капкейки','',NULL),(10,8,'Классические капкейки','',NULL),(11,8,'Детские капкейки','',NULL),(12,0,'Пряники','',NULL),(13,0,'Меренги','',NULL),(14,0,'Кейк-попсы','',NULL);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES (1,'',''),(2,'По тортику','Сообщение от Вадима'),(3,'sdsad','sadasdasdasdasd'),(4,'sdsad','sadasdasdasdasd'),(5,'sdsad','sadasdasdasdasd');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feelings`
--

DROP TABLE IF EXISTS `feelings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feelings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feelings`
--

LOCK TABLES `feelings` WRITE;
/*!40000 ALTER TABLE `feelings` DISABLE KEYS */;
INSERT INTO `feelings` VALUES (1,'Черный лес','(Шоколадный бисквит, сливочно-сырный крем, вишня, кусочки шоколада)','nachinki/dark_wood.jpg'),(4,'Вишня-шоколад','(шоколадный бисквит, шоколадный крем, вишня)','nachinki/chery_chokolate.jpg'),(5,'Фруктовый','(ванильный бисквит, сливочно-сырный крем, прослойка малинового конфи)','nachinki/slivochno-frurtovaya.jpg'),(6,'\"Три шоколада\"','(Муссовый торт на основе черного, молочного и белого шоколада)','nachinki/tri_shokolada.jpg'),(7,'Эстерхази','(Ореховые коржи с фундуком, крем заварной с вареной сгущенкой)','nachinki/tort-esterhazi.jpg'),(8,'Лимонно-ягодный','(маковый бисквит, сливочно-сырный крем, прослойка ягодного конфи и лимонная начинка)','nachinki/limonno-yagoda.jpg');
/*!40000 ALTER TABLE `feelings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration`
--

DROP TABLE IF EXISTS `migration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration`
--

LOCK TABLES `migration` WRITE;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` VALUES ('m000000_000000_base',1550062723),('m130524_201442_init',1550062726),('m190213_183608_create_table_category',1550408936),('m190213_184814_create_table_product',1550408936),('m190226_113810_create_table_order',1551181537),('m190226_113820_create_table_order_items',1551181537),('m190228_081908_create_table_order',1551441777),('m190228_081919_create_table_order_items',1551441777),('m190311_134144_create_table_feedback',1552311875),('m190311_193715_create_table_fillings',1552333297);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `sum` float DEFAULT NULL,
  `status` int(1) DEFAULT '0',
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES (1,'2019-03-01 14:17:57','2019-03-01 14:17:57',1,350,0,'вадим','vadim_rt51@ukr.net','0671791678'),(2,'2019-03-01 14:20:41','2019-03-01 14:20:41',3,1200,0,'вадим','vadim_rt51@ukr.net','0671791678'),(3,'2019-03-01 16:17:07','2019-03-01 16:17:07',4,1600,0,'вадим','vadim_rt51@ukr.net','0671791678'),(4,'2019-03-01 16:17:42','2019-03-01 16:17:42',7,2600,0,'вадим','vadim_rt51@ukr.net','0671791678'),(5,'2019-03-11 00:32:01','2019-03-11 00:32:01',1,350,0,'sdsd','vadim_rt51@ukr.net','0671791678'),(6,'2019-03-11 16:12:47','2019-03-11 16:12:47',2,700,0,'вадим','vadim_rt51@ukr.net','0671791678'),(7,'2019-03-11 23:32:34','2019-03-11 23:32:34',1,400,0,'вадим','vadim_rt51@ukr.net','0671791678');
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `qty_item` int(11) DEFAULT NULL,
  `sum_item` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_items`
--

LOCK TABLES `order_items` WRITE;
/*!40000 ALTER TABLE `order_items` DISABLE KEYS */;
INSERT INTO `order_items` VALUES (1,1,1,'Муссовый торт','350.00',1,350),(2,2,4,'Новый торт3','400.00',3,1200),(3,3,2,'Муссовый торт','400.00',4,1600),(4,4,2,'Муссовый торт','400.00',3,1200),(5,4,1,'Муссовый торт','350.00',4,1400),(6,5,1,'Муссовый торт','350.00',1,350),(7,6,1,'Муссовый торт','350.00',2,700),(8,7,2,'Муссовый торт','400.00',1,400);
/*!40000 ALTER TABLE `order_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `description` text,
  `is_new` int(1) DEFAULT NULL,
  `is_popular` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,2,'Муссовый торт','350.00','1.jpg','Four chocolate cupcakes with vanilla buttercream, four vanilla cupcakes with chocolate buttercream, two vanilla cupcake with vanilla buttercream, two chocolate cupcake with chocolate buttercream, and assorted sprinkles. All cupcakes are shipped frozen to guarantee freshness.',NULL,1),(2,2,'Муссовый торт','400.00','2.jpg','Four chocolate cupcakes with vanilla buttercream, four vanilla cupcakes with chocolate buttercream, two vanilla cupcake with vanilla buttercream, two chocolate cupcake with chocolate buttercream, and assorted sprinkles. All cupcakes are shipped frozen to guarantee freshness.',NULL,1),(4,2,'Новый торт3','400.00','3.jpg','Four chocolate cupcakes with vanilla buttercream, four vanilla cupcakes with chocolate buttercream, two vanilla cupcake with vanilla buttercream, two chocolate cupcake with chocolate buttercream, and assorted sprinkles. All cupcakes are shipped frozen to guarantee freshness.',NULL,1),(5,2,'Новый торт 4','500.00','4.jpg','Four chocolate cupcakes with vanilla buttercream, four vanilla cupcakes with chocolate buttercream, two vanilla cupcake with vanilla buttercream, two chocolate cupcake with chocolate buttercream, and assorted sprinkles. All cupcakes are shipped frozen to guarantee freshness.',NULL,1);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','','$2y$13$RF533bXHmDoM3lEQWN33ZeWzazD08HpeGFz2p4B131R7oav5gb67i',NULL,'',10,0,0);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-11 23:36:25
