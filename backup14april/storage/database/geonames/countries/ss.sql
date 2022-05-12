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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SS.07','SS','{\"en\":\"Upper Nile\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SS.04','SS','{\"en\":\"Lakes\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SS.06','SS','{\"en\":\"Unity\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SS.01','SS','{\"en\":\"Central Equatoria\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SS.10','SS','{\"en\":\"Western Equatoria\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SS.09','SS','{\"en\":\"Western Bahr al Ghazal\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SS.03','SS','{\"en\":\"Jonglei\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SS.05','SS','{\"en\":\"Northern Bahr al Ghazal\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SS.02','SS','{\"en\":\"Eastern Equatoria\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SS.08','SS','{\"en\":\"Warrap\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SS.10.363414','SS','SS.10','{\"en\":\"Province of West Equatoria\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SS.03.373249','SS','SS.03','{\"en\":\"Mudīrīyat Junqalī\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SS.05.377888','SS','SS.05','{\"en\":\"Mudīrīyat Baḩr al Ghazāl ash Sharqīyah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SS.02.379350','SS','SS.02','{\"en\":\"Al Mudīrīyah al Istiwā’īyah ash Sharqīyah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SS.07.381228','SS','SS.07','{\"en\":\"Mudīrīyat A‘ālī an Nīl\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SS.04.7874619','SS','SS.04','{\"en\":\"Shobet\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SS.01.7874621','SS','SS.01','{\"en\":\"Terkaka\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SS.02.8224935','SS','SS.02','{\"en\":\"Magwi County\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SS.01.8299284','SS','SS.01','{\"en\":\"Juba County\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SS.02.9406254','SS','SS.02','{\"en\":\"Budi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SS.02.9409219','SS','SS.02','{\"en\":\"Ikotos\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SS.05.9409700','SS','SS.05','{\"en\":\"Aweil East\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SS.06.9409706','SS','SS.06','{\"en\":\"Rubkona\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SS.02.10345217','SS','SS.02','{\"en\":\"Torit County\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SS.01.10345968','SS','SS.01','{\"en\":\"Yei County\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SS.02.10346346','SS','SS.02','{\"en\":\"Lafon County\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SS.07.10375722','SS','SS.07','{\"en\":\"Maban County\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SS.07.10376722','SS','SS.07','{\"en\":\"Melut County\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SS.03.10400458','SS','SS.03','{\"en\":\"Pochalla County\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SS.08.10400481','SS','SS.08','{\"en\":\"Twic County\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SS.07.10400482','SS','SS.07','{\"en\":\"Malakal County\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SS.06.10400485','SS','SS.06','{\"en\":\"Guit County\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SS.01.10400489','SS','SS.01','{\"en\":\"Lainya County\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SS.01.10400490','SS','SS.01','{\"en\":\"Morobo County\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SS.01.10400491','SS','SS.01','{\"en\":\"Kajo Keji County\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SS.07.10400839','SS','SS.07','{\"en\":\"Renk County\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SS.09.10401686','SS','SS.09','{\"en\":\"Jur River County\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SS.03.11592489','SS','SS.03','{\"en\":\"Uror County\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SS','{\"en\":\"Yirol\"}',30.50,6.55,'P','PPL','SS.04',NULL,11650,'Africa/Juba',1,'2022-01-09 23:00:00','2022-01-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SS','{\"en\":\"Yei\"}',30.68,4.09,'P','PPL','SS.01',NULL,260720,'Africa/Juba',1,'2022-01-09 23:00:00','2022-01-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SS','{\"en\":\"Yambio\"}',28.39,4.57,'P','PPLA','SS.10',NULL,40382,'Africa/Juba',1,'2020-07-13 23:00:00','2020-07-13 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SS','{\"en\":\"Winejok\"}',27.57,9.01,'P','PPL','SS.05',NULL,300000,'Africa/Juba',1,'2020-08-12 23:00:00','2020-08-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SS','{\"en\":\"Wau\"}',27.99,7.70,'P','PPLA','SS.09',NULL,127384,'Africa/Juba',1,'2020-07-13 23:00:00','2020-07-13 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SS','{\"en\":\"Aweil\"}',27.39,8.76,'P','PPLA','SS.05',NULL,38745,'Africa/Juba',1,'2020-07-13 23:00:00','2020-07-13 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SS','{\"en\":\"Torit\"}',32.57,4.41,'P','PPLA','SS.02',NULL,20048,'Africa/Juba',1,'2020-07-13 23:00:00','2020-07-13 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SS','{\"en\":\"Tonj\"}',28.68,7.27,'P','PPL','SS.08',NULL,17338,'Africa/Juba',1,'2020-07-17 23:00:00','2020-07-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SS','{\"en\":\"Tambura\"}',27.47,5.60,'P','PPL','SS.10',NULL,9500,'Africa/Juba',1,'2022-01-09 23:00:00','2022-01-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SS','{\"en\":\"Rumbek\"}',29.68,6.81,'P','PPLA','SS.04',NULL,32083,'Africa/Juba',1,'2020-07-13 23:00:00','2020-07-13 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SS','{\"en\":\"Maridi\"}',29.47,4.92,'P','PPL','SS.10',NULL,14224,'Africa/Juba',1,'2020-07-18 23:00:00','2020-07-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SS','{\"en\":\"Malakal\"}',31.66,9.53,'P','PPLA','SS.07',NULL,160765,'Africa/Juba',1,'2020-07-13 23:00:00','2020-07-13 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SS','{\"en\":\"Leer\"}',30.14,8.30,'P','PPL','SS.06',NULL,100722,'Africa/Juba',1,'2022-01-09 23:00:00','2022-01-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SS','{\"en\":\"Kuacjok\"}',27.98,8.30,'P','PPLA','SS.08',NULL,78000,'Africa/Juba',1,'2020-07-17 23:00:00','2020-07-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SS','{\"en\":\"Kodok\"}',32.11,9.89,'P','PPL','SS.07',NULL,7709,'Africa/Juba',1,'2022-01-09 23:00:00','2022-01-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SS','{\"en\":\"Kapoeta\"}',33.59,4.77,'P','PPL','SS.02',NULL,7042,'Africa/Juba',1,'2020-07-18 23:00:00','2020-07-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SS','{\"en\":\"Kafia Kingi\"}',24.42,9.27,'P','PPL','SS.09',NULL,16000,'Africa/Juba',1,'2022-01-09 23:00:00','2022-01-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SS','{\"en\":\"Juba\"}',31.58,4.85,'P','PPLC','SS.01',NULL,450000,'Africa/Juba',1,'2020-07-11 23:00:00','2020-07-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SS','{\"en\":\"Gogrial\"}',28.10,8.53,'P','PPL','SS.08',NULL,44600,'Africa/Juba',1,'2022-01-09 23:00:00','2022-01-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SS','{\"en\":\"Pajok\"}',32.48,3.87,'P','PPL','SS.02',NULL,49000,'Africa/Juba',1,'2020-07-11 23:00:00','2020-07-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SS','{\"en\":\"Bor\"}',31.56,6.21,'P','PPLA','SS.03',NULL,26782,'Africa/Juba',1,'2020-07-13 23:00:00','2020-07-13 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SS','{\"en\":\"Bentiu\"}',29.80,9.26,'P','PPLA','SS.06',NULL,7653,'Africa/Juba',1,'2020-07-13 23:00:00','2020-07-13 23:00:00');
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
