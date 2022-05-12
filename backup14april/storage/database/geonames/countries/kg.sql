-- MySQL dump 10.13  Distrib 5.7.34, for osx10.12 (x86_64)
--
-- Host: 127.0.0.1    Database: laraclassifier
-- ------------------------------------------------------
-- Server version	5.7.34

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
-- Dumping data for table `__PREFIX__subadmin1`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin1` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('KG.08','KG','{\"en\":\"Osh\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('KG.09','KG','{\"en\":\"Batken\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('KG.06','KG','{\"en\":\"Talas\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('KG.04','KG','{\"en\":\"Naryn\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('KG.07','KG','{\"en\":\"Issyk-Kul\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('KG.01','KG','{\"en\":\"Bishkek\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('KG.03','KG','{\"en\":\"Jalal-Abad\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('KG.02','KG','{\"en\":\"Chüy\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('KG.10','KG','{\"en\":\"Osh City\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.09.1222597','KG','KG.09','{\"en\":\"Leylekskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.09.1222671','KG','KG.09','{\"en\":\"Kadamjaiskiy Raion\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.09.1222703','KG','KG.09','{\"en\":\"Batkenskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.03.1527194','KG','KG.03','{\"en\":\"Toktogul District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.06.1527296','KG','KG.06','{\"en\":\"Talasskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.01.1527315','KG','KG.01','{\"en\":\"Sverdlovskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.02.1527358','KG','KG.02','{\"en\":\"Sokulukskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.01.1527506','KG','KG.01','{\"en\":\"Pervomayskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.02.1527509','KG','KG.02','{\"en\":\"Panfilovskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.01.1527686','KG','KG.01','{\"en\":\"Leninskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.06.1527687','KG','KG.06','{\"en\":\"Bakay-Atinskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.06.1527920','KG','KG.06','{\"en\":\"Kara-Buurinskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.02.1527974','KG','KG.02','{\"en\":\"Keminskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.02.1528261','KG','KG.02','{\"en\":\"Ysyk-Ata\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.02.1528472','KG','KG.02','{\"en\":\"Chuyskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.02.1528867','KG','KG.02','{\"en\":\"Alamudunskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.04.7649245','KG','KG.04','{\"en\":\"Ak-Tala\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.04.7654212','KG','KG.04','{\"en\":\"Jumgal\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.02.7667441','KG','KG.02','{\"en\":\"Moskovsky Raion\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.08.7667445','KG','KG.08','{\"en\":\"Uzgen District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.08.7910403','KG','KG.08','{\"en\":\"Aravan\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.08.7910404','KG','KG.08','{\"en\":\"Kara-Suu\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.08.7910405','KG','KG.08','{\"en\":\"Nookat\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.03.7910407','KG','KG.03','{\"en\":\"Suzak\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.07.8046904','KG','KG.07','{\"en\":\"Tüp\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.03.8139375','KG','KG.03','{\"en\":\"Aksy\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.03.8139376','KG','KG.03','{\"en\":\"Chatkal\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.01.8220960','KG','KG.01','{\"en\":\"Oktyabr’skiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.07.8308862','KG','KG.07','{\"en\":\"Tong\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.07.8357767','KG','KG.07','{\"en\":\"Ysyk-Köl\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.07.8537999','KG','KG.07','{\"en\":\"Ak-Suu\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.02.8739737','KG','KG.02','{\"en\":\"Jaiyl\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.08.8739771','KG','KG.08','{\"en\":\"Alay District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.08.9165129','KG','KG.08','{\"en\":\"Kara Kulja\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.03.9165680','KG','KG.03','{\"en\":\"Bazar-Korgon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.03.9165682','KG','KG.03','{\"en\":\"Ala-Buka\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.03.9165683','KG','KG.03','{\"en\":\"Nooken\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.06.9165692','KG','KG.06','{\"en\":\"Manas\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.04.9165773','KG','KG.04','{\"en\":\"Kochkor\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.04.9165774','KG','KG.04','{\"en\":\"At-Bashi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.03.9165780','KG','KG.03','{\"en\":\"Kazarman\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.08.9192641','KG','KG.08','{\"en\":\"Chong-Alay District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.07.10237012','KG','KG.07','{\"en\":\"Jeti-Oguz District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.04.10237161','KG','KG.04','{\"en\":\"Naryn District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KG.02.10291336','KG','KG.02','{\"en\":\"Tokmok District\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Suluktu\"}',69.57,39.94,'P','PPL','KG.09',NULL,15019,'Asia/Bishkek',1,'2015-05-22 23:00:00','2015-05-22 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Aydarken\"}',71.34,39.94,'P','PPL','KG.09',NULL,11857,'Asia/Bishkek',1,'2015-07-02 23:00:00','2015-07-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Isfana\"}',69.53,39.84,'P','PPLA2','KG.09',NULL,16952,'Asia/Bishkek',1,'2015-07-02 23:00:00','2015-07-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Balykchy\"}',76.19,42.46,'P','PPL','KG.07',NULL,42875,'Asia/Bishkek',1,'2021-11-09 23:00:00','2021-11-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Tyup\"}',78.36,42.73,'P','PPLA2','KG.07',NULL,13437,'Asia/Bishkek',1,'2015-05-24 23:00:00','2015-05-24 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Tokmok\"}',75.30,42.84,'P','PPLA2','KG.02',NULL,63047,'Asia/Bishkek',1,'2015-05-25 23:00:00','2015-05-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Ak-Suu\"}',78.53,42.50,'P','PPLA2','KG.07',NULL,10823,'Asia/Bishkek',1,'2015-05-23 23:00:00','2015-05-23 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Tash-Kumyr\"}',72.22,41.35,'P','PPL','KG.03',NULL,23594,'Asia/Bishkek',1,'2015-06-06 23:00:00','2015-06-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Talas\"}',72.24,42.52,'P','PPLA','KG.06',NULL,35172,'Asia/Bishkek',1,'2018-03-26 23:00:00','2018-03-26 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Sosnovka\"}',73.90,42.64,'P','PPL','KG.02',NULL,5885,'Asia/Bishkek',1,'2015-05-27 23:00:00','2015-05-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Kyzyl-Suu\"}',78.01,42.34,'P','PPLA2','KG.07',NULL,16927,'Asia/Bishkek',1,'2015-05-24 23:00:00','2015-05-24 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Uzgen\"}',73.30,40.77,'P','PPL','KG.08',NULL,49410,'Asia/Bishkek',1,'2021-11-09 23:00:00','2021-11-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Osh\"}',72.80,40.53,'P','PPLA','KG.08',NULL,200000,'Asia/Bishkek',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Naryn\"}',75.99,41.43,'P','PPLA','KG.04',NULL,52300,'Asia/Bishkek',1,'2018-03-26 23:00:00','2018-03-26 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Kyzyl-Kyya\"}',72.13,40.26,'P','PPL','KG.09',NULL,32000,'Asia/Bishkek',1,'2015-11-07 23:00:00','2015-11-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Kochkor-Ata\"}',72.48,41.04,'P','PPL','KG.03',NULL,17177,'Asia/Bishkek',1,'2021-12-12 23:00:00','2021-12-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Kerben\"}',71.76,41.49,'P','PPLA2','KG.03','KG.03.8139375',14141,'Asia/Bishkek',1,'2017-12-12 23:00:00','2017-12-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Kara Suu\"}',72.87,40.70,'P','PPLA2','KG.08',NULL,17800,'Asia/Bishkek',1,'2016-07-03 23:00:00','2016-07-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Karakol\"}',78.39,42.49,'P','PPLA','KG.07',NULL,70171,'Asia/Bishkek',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Kara-Balta\"}',73.85,42.81,'P','PPLA2','KG.02',NULL,62796,'Asia/Bishkek',1,'2015-05-24 23:00:00','2015-05-24 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Kant\"}',74.85,42.89,'P','PPLA2','KG.02',NULL,20181,'Asia/Bishkek',1,'2015-06-06 23:00:00','2015-06-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Kaindy\"}',73.68,42.82,'P','PPLA2','KG.02',NULL,10616,'Asia/Bishkek',1,'2015-06-06 23:00:00','2015-06-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Jalal-Abad\"}',73.00,40.93,'P','PPLA','KG.03',NULL,75700,'Asia/Bishkek',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Iradan\"}',72.10,40.27,'P','PPL','KG.09',NULL,26200,'Asia/Bishkek',1,'2015-05-24 23:00:00','2015-05-24 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Nookat\"}',72.62,40.27,'P','PPLA2','KG.08','KG.08.7910405',14371,'Asia/Bishkek',1,'2018-03-27 23:00:00','2018-03-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Cholpon-Ata\"}',77.08,42.65,'P','PPLA2','KG.07',NULL,18595,'Asia/Bishkek',1,'2015-06-06 23:00:00','2015-06-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Kemin\"}',75.69,42.79,'P','PPLA2','KG.02',NULL,10295,'Asia/Bishkek',1,'2017-07-19 23:00:00','2017-07-19 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Bishkek\"}',74.59,42.87,'P','PPLC','KG.01',NULL,900000,'Asia/Bishkek',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Bazar-Korgon\"}',72.75,41.04,'P','PPLA2','KG.03',NULL,27704,'Asia/Bishkek',1,'2016-05-06 23:00:00','2016-05-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Batken\"}',70.82,40.06,'P','PPLA','KG.09',NULL,10155,'Asia/Bishkek',1,'2012-08-03 23:00:00','2012-08-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"At-Bashi\"}',75.80,41.17,'P','PPLA2','KG.04',NULL,15226,'Asia/Bishkek',1,'2015-05-24 23:00:00','2015-05-24 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KG','{\"en\":\"Toktogul\"}',72.94,41.87,'P','PPLA2','KG.03',NULL,19336,'Asia/Bishkek',1,'2015-05-25 23:00:00','2015-05-25 23:00:00');
/*!40000 ALTER TABLE `__PREFIX__cities` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed
