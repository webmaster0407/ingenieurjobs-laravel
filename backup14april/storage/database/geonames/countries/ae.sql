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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('AE.07','AE','{\"en\":\"Imārat Umm al Qaywayn\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('AE.05','AE','{\"en\":\"Raʼs al Khaymah\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('AE.03','AE','{\"en\":\"Dubai\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('AE.06','AE','{\"en\":\"Sharjah\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('AE.04','AE','{\"en\":\"Fujairah\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('AE.02','AE','{\"en\":\"Ajman\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('AE.01','AE','{\"en\":\"Abu Dhabi\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AE.01.101','AE','AE.01','{\"en\":\"Abu Dhabi Municipality\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AE.01.102','AE','AE.01','{\"en\":\"Al Ain Municipality\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AE.01.103','AE','AE.01','{\"en\":\"Al Dhafra\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AE.04.701','AE','AE.04','{\"en\":\"Al Fujairah Municipality\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AE.04.702','AE','AE.04','{\"en\":\"Dibba Al Fujairah Municipality\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AE.06.302','AE','AE.06','{\"en\":\"Dhaid\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AE.02.401','AE','AE.02','{\"en\":\"Ajman\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AE.06.304','AE','AE.06','{\"en\":\"Khor Fakkan\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AE.06.307','AE','AE.06','{\"en\":\"Dibba Al Hesn\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AE.06.305','AE','AE.06','{\"en\":\"Kalba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AE.05.601','AE','AE.05','{\"en\":\"Ras Al Khaimah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AE.07.501','AE','AE.07','{\"en\":\"Umm AL Quwain\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AE.06.309','AE','AE.06','{\"en\":\"Milehah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AE.06.306','AE','AE.06','{\"en\":\"Al Madam\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AE.06.301','AE','AE.06','{\"en\":\"Sharjah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AE.06.303','AE','AE.06','{\"en\":\"Al Hamriyah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AE.02.402','AE','AE.02','{\"en\":\"Manama\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AE.02.403','AE','AE.02','{\"en\":\"Masfout\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AE.06.308','AE','AE.06','{\"en\":\"Al Batayih\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AE.03.201','AE','AE.03','{\"en\":\"Dubai\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AE','{\"en\":\"Umm Al Quwain City\"}',55.56,25.56,'P','PPLA','AE.07',NULL,62747,'Asia/Dubai',1,'2019-10-23 23:00:00','2019-10-23 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AE','{\"en\":\"Ras Al Khaimah City\"}',55.94,25.79,'P','PPLA','AE.05',NULL,351943,'Asia/Dubai',1,'2019-09-08 23:00:00','2019-09-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AE','{\"en\":\"Muzayri‘\"}',53.79,23.14,'P','PPL','AE.01',NULL,10000,'Asia/Dubai',1,'2013-10-23 23:00:00','2013-10-23 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AE','{\"en\":\"Maşfūţ\"}',56.11,24.81,'P','PPL','AE.02',NULL,8988,'Asia/Dubai',1,'2022-01-12 23:00:00','2022-01-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AE','{\"en\":\"Zayed City\"}',53.71,23.65,'P','PPL','AE.01','AE.01.103',63482,'Asia/Dubai',1,'2019-10-23 23:00:00','2019-10-23 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AE','{\"en\":\"Khawr Fakkān\"}',56.34,25.33,'P','PPL','AE.06',NULL,40677,'Asia/Dubai',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AE','{\"en\":\"Dubai\"}',55.31,25.08,'P','PPLA','AE.03',NULL,2956587,'Asia/Dubai',1,'2019-08-27 23:00:00','2019-08-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AE','{\"en\":\"Dibba Al-Fujairah\"}',56.26,25.59,'P','PPL','AE.04',NULL,30000,'Asia/Dubai',1,'2014-08-11 23:00:00','2014-08-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AE','{\"en\":\"Dibba Al-Hisn\"}',56.27,25.62,'P','PPL','AE.04',NULL,26395,'Asia/Dubai',1,'2014-04-20 23:00:00','2014-04-20 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AE','{\"en\":\"Sharjah\"}',55.41,25.34,'P','PPLA','AE.06',NULL,1324473,'Asia/Dubai',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AE','{\"en\":\"Ar Ruways\"}',52.73,24.11,'P','PPL','AE.01',NULL,16000,'Asia/Dubai',1,'2012-11-02 23:00:00','2012-11-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AE','{\"en\":\"Al Manāmah\"}',56.02,25.33,'P','PPL','AE.02',NULL,5823,'Asia/Dubai',1,'2022-01-12 23:00:00','2022-01-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AE','{\"en\":\"Al Fujairah City\"}',56.34,25.12,'P','PPLA','AE.04',NULL,86512,'Asia/Dubai',1,'2019-05-28 23:00:00','2019-05-28 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AE','{\"en\":\"Al Ain City\"}',55.76,24.19,'P','PPL','AE.01',NULL,55091,'Asia/Dubai',1,'2019-05-28 23:00:00','2019-05-28 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AE','{\"en\":\"Ajman City\"}',55.48,25.40,'P','PPLA','AE.02',NULL,490035,'Asia/Dubai',1,'2019-05-28 23:00:00','2019-05-28 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AE','{\"en\":\"Adh Dhayd\"}',55.88,25.29,'P','PPL','AE.06',NULL,24716,'Asia/Dubai',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AE','{\"en\":\"Abu Dhabi\"}',54.40,24.45,'P','PPLC','AE.01',NULL,603492,'Asia/Dubai',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AE','{\"en\":\"Khalifah A City\"}',54.60,24.43,'P','PPL','AE.01',NULL,85374,'Asia/Dubai',1,'2019-08-25 23:00:00','2019-08-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AE','{\"en\":\"Bani Yas City\"}',54.63,24.31,'P','PPL','AE.01',NULL,80498,'Asia/Dubai',1,'2019-05-28 23:00:00','2019-05-28 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AE','{\"en\":\"Musaffah\"}',54.48,24.36,'P','PPL','AE.01',NULL,243341,'Asia/Dubai',1,'2021-08-26 23:00:00','2021-08-26 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AE','{\"en\":\"Al Shamkhah City\"}',54.71,24.39,'P','PPL','AE.01',NULL,61710,'Asia/Dubai',1,'2019-05-28 23:00:00','2019-05-28 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AE','{\"en\":\"Reef Al Fujairah City\"}',56.25,25.14,'P','PPL','AE.04',NULL,82310,'Asia/Dubai',1,'2019-05-28 23:00:00','2019-05-28 23:00:00');
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
