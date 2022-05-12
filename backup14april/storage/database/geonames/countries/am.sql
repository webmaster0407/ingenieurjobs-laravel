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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('AM.02','AM','{\"en\":\"Ararat\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('AM.08','AM','{\"en\":\"Syunik\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('AM.10','AM','{\"en\":\"Vayots Dzor\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('AM.11','AM','{\"en\":\"Yerevan\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('AM.01','AM','{\"en\":\"Aragatsotn\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('AM.03','AM','{\"en\":\"Armavir\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('AM.04','AM','{\"en\":\"Gegharkunik\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('AM.05','AM','{\"en\":\"Kotayk\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('AM.06','AM','{\"en\":\"Lori\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('AM.07','AM','{\"en\":\"Shirak\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('AM.09','AM','{\"en\":\"Tavush\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AM.08.174761','AM','AM.08','{\"en\":\"Sisian\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AM.10.174959','AM','AM.10','{\"en\":\"Vayk\'i Shrjan\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AM.11.616200','AM','AM.11','{\"en\":\"Spandaryanskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AM.11.616205','AM','AM.11','{\"en\":\"Arabkir\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AM.11.616233','AM','AM.11','{\"en\":\"Shaumyanskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AM.11.616323','AM','AM.11','{\"en\":\"Ordzhonikidzevskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AM.04.616436','AM','AM.04','{\"en\":\"Martuni\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AM.11.616485','AM','AM.11','{\"en\":\"Leninskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AM.11.616624','AM','AM.11','{\"en\":\"Imeni Dvadtsati Shesti Komissarov Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AM.01.7874001','AM','AM.01','{\"en\":\"Achtarak\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Yeghegnadzor\"}',45.33,39.76,'P','PPLA','AM.10',NULL,8200,'Asia/Yerevan',1,'2016-10-06 23:00:00','2016-10-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Vedi\"}',44.73,39.91,'P','PPL','AM.02',NULL,12192,'Asia/Yerevan',1,'2016-02-05 23:00:00','2016-02-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Vayk’\"}',45.47,39.69,'P','PPL','AM.10',NULL,5419,'Asia/Yerevan',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Kapan\"}',46.41,39.21,'P','PPLA','AM.08',NULL,33160,'Asia/Yerevan',1,'2016-10-06 23:00:00','2016-10-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Goris\"}',46.34,39.51,'P','PPL','AM.08',NULL,20379,'Asia/Yerevan',1,'2018-03-11 23:00:00','2018-03-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Hats’avan\"}',45.97,39.46,'P','PPL','AM.08',NULL,15208,'Asia/Yerevan',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Artashat\"}',44.54,39.96,'P','PPLA','AM.02',NULL,20562,'Asia/Yerevan',1,'2016-10-06 23:00:00','2016-10-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Ararat\"}',44.71,39.83,'P','PPL','AM.02',NULL,28832,'Asia/Yerevan',1,'2016-02-05 23:00:00','2016-02-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Yerevan\"}',44.51,40.18,'P','PPLC','AM.11',NULL,1093485,'Asia/Yerevan',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Vagharshapat\"}',44.29,40.17,'P','PPL','AM.03',NULL,46540,'Asia/Yerevan',1,'2018-10-26 23:00:00','2018-10-26 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Yeghvard\"}',44.49,40.33,'P','PPL','AM.05',NULL,10705,'Asia/Yerevan',1,'2016-08-02 23:00:00','2016-08-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Vardenis\"}',45.73,40.18,'P','PPL','AM.04',NULL,11382,'Asia/Yerevan',1,'2016-11-21 23:00:00','2016-11-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Vardenik\"}',45.44,40.13,'P','PPL','AM.04',NULL,7709,'Asia/Yerevan',1,'2015-09-05 23:00:00','2015-09-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Tashir\"}',44.28,41.12,'P','PPL','AM.06',NULL,7318,'Asia/Yerevan',1,'2016-11-21 23:00:00','2016-11-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Stepanavan\"}',44.39,41.01,'P','PPL','AM.06',NULL,23782,'Asia/Yerevan',1,'2021-08-08 23:00:00','2021-08-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Spitak\"}',44.27,40.83,'P','PPL','AM.06',NULL,15059,'Asia/Yerevan',1,'2018-04-03 23:00:00','2018-04-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Sevan\"}',44.94,40.55,'P','PPL','AM.04',NULL,17083,'Asia/Yerevan',1,'2016-09-07 23:00:00','2016-09-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Sarukhan\"}',45.13,40.29,'P','PPL','AM.04',NULL,6173,'Asia/Yerevan',1,'2016-04-09 23:00:00','2016-04-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Sardarapat\"}',44.01,40.13,'P','PPL','AM.03',NULL,5348,'Asia/Yerevan',1,'2016-08-02 23:00:00','2016-08-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Noyemberyan\"}',45.00,41.17,'P','PPL','AM.09',NULL,5119,'Asia/Yerevan',1,'2016-12-02 23:00:00','2016-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Noratus\"}',45.18,40.38,'P','PPL','AM.04',NULL,5426,'Asia/Yerevan',1,'2016-04-09 23:00:00','2016-04-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Nerkin Getashen\"}',45.27,40.14,'P','PPL','AM.04',NULL,7010,'Asia/Yerevan',1,'2021-08-09 23:00:00','2021-08-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Metsamor\"}',44.29,40.07,'P','PPL','AM.03',NULL,8789,'Asia/Yerevan',1,'2016-04-09 23:00:00','2016-04-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Masis\"}',44.42,40.07,'P','PPL','AM.02',NULL,18911,'Asia/Yerevan',1,'2020-04-03 23:00:00','2020-04-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Martuni\"}',45.31,40.14,'P','PPL','AM.04',NULL,11037,'Asia/Yerevan',1,'2018-04-03 23:00:00','2018-04-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Vanadzor\"}',44.49,40.80,'P','PPLA','AM.06',NULL,101098,'Asia/Yerevan',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Karanlukh\"}',45.29,40.10,'P','PPL','AM.04',NULL,5104,'Asia/Yerevan',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Gavar\"}',45.12,40.35,'P','PPLA','AM.04',NULL,21680,'Asia/Yerevan',1,'2021-08-08 23:00:00','2021-08-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Ijevan\"}',45.15,40.88,'P','PPLA','AM.09',NULL,14737,'Asia/Yerevan',1,'2016-10-06 23:00:00','2016-10-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Hrazdan\"}',44.77,40.50,'P','PPLA','AM.05',NULL,40795,'Asia/Yerevan',1,'2011-03-27 23:00:00','2011-03-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Armavir\"}',44.04,40.15,'P','PPLA','AM.03',NULL,25963,'Asia/Yerevan',1,'2016-10-06 23:00:00','2016-10-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Gyumri\"}',43.85,40.79,'P','PPLA','AM.07',NULL,148381,'Asia/Yerevan',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Garrni\"}',44.73,40.12,'P','PPL','AM.05',NULL,6827,'Asia/Yerevan',1,'2016-11-21 23:00:00','2016-11-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Dilijan\"}',44.85,40.74,'P','PPL','AM.09',NULL,13478,'Asia/Yerevan',1,'2016-09-07 23:00:00','2016-09-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Chambarak\"}',45.35,40.60,'P','PPL','AM.04',NULL,6153,'Asia/Yerevan',1,'2014-06-25 23:00:00','2014-06-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Byureghavan\"}',44.59,40.31,'P','PPL','AM.05',NULL,6972,'Asia/Yerevan',1,'2016-04-09 23:00:00','2016-04-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Berd\"}',45.39,40.88,'P','PPL','AM.09',NULL,8374,'Asia/Yerevan',1,'2016-11-21 23:00:00','2016-11-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Ashtarak\"}',44.36,40.30,'P','PPLA','AM.01',NULL,18779,'Asia/Yerevan',1,'2016-10-06 23:00:00','2016-10-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Aparan\"}',44.36,40.59,'P','PPL','AM.01',NULL,5670,'Asia/Yerevan',1,'2016-11-21 23:00:00','2016-11-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Alaverdi\"}',44.67,41.10,'P','PPL','AM.06',NULL,13184,'Asia/Yerevan',1,'2011-01-28 23:00:00','2011-01-28 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Akhuryan\"}',43.90,40.78,'P','PPL','AM.07',NULL,7672,'Asia/Yerevan',1,'2016-11-21 23:00:00','2016-11-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AM','{\"en\":\"Abovyan\"}',44.63,40.27,'P','PPL','AM.05',NULL,35673,'Asia/Yerevan',1,'2016-04-09 23:00:00','2016-04-09 23:00:00');
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
