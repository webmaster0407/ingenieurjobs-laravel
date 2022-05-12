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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IM.9782164','IM','{\"en\":\"Andreas\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IM.9782165','IM','{\"en\":\"Arbory\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IM.9782166','IM','{\"en\":\"Ballaugh\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IM.9782167','IM','{\"en\":\"Braddan\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IM.9782168','IM','{\"en\":\"Bride\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IM.9782169','IM','{\"en\":\"Castletown\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IM.9782170','IM','{\"en\":\"Douglas\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IM.9782171','IM','{\"en\":\"German\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IM.9782172','IM','{\"en\":\"Jurby\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IM.9782173','IM','{\"en\":\"Laxey\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IM.9782176','IM','{\"en\":\"Lezayre\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IM.9782180','IM','{\"en\":\"Lonan\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IM.9782182','IM','{\"en\":\"Malew\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IM.9782183','IM','{\"en\":\"Marown\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IM.9782184','IM','{\"en\":\"Maughold\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IM.9782185','IM','{\"en\":\"Michael\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IM.9782186','IM','{\"en\":\"Onchan\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IM.9782187','IM','{\"en\":\"Patrick\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IM.9782188','IM','{\"en\":\"Peel\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IM.9782189','IM','{\"en\":\"Port Erin\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IM.9782190','IM','{\"en\":\"Port St Mary\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IM.9782191','IM','{\"en\":\"Ramsey\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IM.9782192','IM','{\"en\":\"Rushen\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IM.9782193','IM','{\"en\":\"Santon\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IM','{\"en\":\"Santon\"}',-4.58,54.12,'P','PPLA','IM.9782193',NULL,0,'Europe/Isle_of_Man',1,'2015-11-29 23:00:00','2015-11-29 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IM','{\"en\":\"Ramsey\"}',-4.39,54.32,'P','PPLA','IM.9782191',NULL,7309,'Europe/Isle_of_Man',1,'2019-02-26 23:00:00','2019-02-26 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IM','{\"en\":\"Port Saint Mary\"}',-4.74,54.07,'P','PPLA','IM.9782190',NULL,0,'Europe/Isle_of_Man',1,'2015-11-25 23:00:00','2015-11-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IM','{\"en\":\"Port Erin\"}',-4.75,54.08,'P','PPLA','IM.9782189',NULL,3530,'Europe/Isle_of_Man',1,'2015-11-23 23:00:00','2015-11-23 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IM','{\"en\":\"Peel\"}',-4.69,54.22,'P','PPLA','IM.9782188',NULL,3781,'Europe/Isle_of_Man',1,'2019-02-26 23:00:00','2019-02-26 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IM','{\"en\":\"Patrick\"}',-4.69,54.20,'P','PPLA','IM.9782187',NULL,0,'Europe/Isle_of_Man',1,'2015-11-25 23:00:00','2015-11-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IM','{\"en\":\"Onchan\"}',-4.45,54.17,'P','PPLA','IM.9782186',NULL,0,'Europe/Isle_of_Man',1,'2015-11-25 23:00:00','2015-11-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IM','{\"en\":\"Maughold\"}',-4.32,54.30,'P','PPLA','IM.9782184',NULL,0,'Europe/Isle_of_Man',1,'2015-11-25 23:00:00','2015-11-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IM','{\"en\":\"Lezayre\"}',-4.42,54.32,'P','PPLA','IM.9782176',NULL,0,'Europe/Isle_of_Man',1,'2015-11-25 23:00:00','2015-11-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IM','{\"en\":\"Laxey\"}',-4.40,54.23,'P','PPLA','IM.9782173',NULL,1768,'Europe/Isle_of_Man',1,'2015-11-23 23:00:00','2015-11-23 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IM','{\"en\":\"Kirkmichael\"}',-4.59,54.29,'P','PPLA','IM.9782185',NULL,0,'Europe/Isle_of_Man',1,'2015-11-26 23:00:00','2015-11-26 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IM','{\"en\":\"Kirk Braddan\"}',-4.52,54.17,'P','PPLA','IM.9782167',NULL,0,'Europe/Isle_of_Man',1,'2015-11-25 23:00:00','2015-11-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IM','{\"en\":\"Jurby\"}',-4.52,54.36,'P','PPLA','IM.9782172',NULL,0,'Europe/Isle_of_Man',1,'2015-11-25 23:00:00','2015-11-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IM','{\"en\":\"Douglas\"}',-4.48,54.15,'P','PPLC','IM.9782170',NULL,26218,'Europe/Isle_of_Man',1,'2021-07-31 23:00:00','2021-07-31 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IM','{\"en\":\"Crosby\"}',-4.57,54.18,'P','PPLA','IM.9782183',NULL,0,'Europe/Isle_of_Man',1,'2015-11-25 23:00:00','2015-11-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IM','{\"en\":\"Castletown\"}',-4.65,54.07,'P','PPLA','IM.9782169',NULL,3100,'Europe/Isle_of_Man',1,'2015-11-23 23:00:00','2015-11-23 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IM','{\"en\":\"Bride\"}',-4.39,54.38,'P','PPLA','IM.9782168',NULL,0,'Europe/Isle_of_Man',1,'2015-11-25 23:00:00','2015-11-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IM','{\"en\":\"Ballasalla\"}',-4.63,54.10,'P','PPLA','IM.9782182',NULL,0,'Europe/Isle_of_Man',1,'2015-11-25 23:00:00','2015-11-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IM','{\"en\":\"Ballabeg\"}',-4.68,54.10,'P','PPLA','IM.9782165',NULL,0,'Europe/Isle_of_Man',1,'2015-11-25 23:00:00','2015-11-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IM','{\"en\":\"Andreas\"}',-4.43,54.37,'P','PPLA','IM.9782164',NULL,0,'Europe/Isle_of_Man',1,'2018-12-07 23:00:00','2018-12-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IM','{\"en\":\"Ballaugh\"}',-4.54,54.31,'P','PPLA','IM.9782166',NULL,0,'Europe/Isle_of_Man',1,'2015-11-26 23:00:00','2015-11-26 23:00:00');
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
