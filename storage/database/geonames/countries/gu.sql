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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GU.PI','GU','{\"en\":\"Piti\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GU.SR','GU','{\"en\":\"Santa Rita\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GU.SJ','GU','{\"en\":\"Sinajana\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GU.TF','GU','{\"en\":\"Talofofo\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GU.TM','GU','{\"en\":\"Tamuning\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GU.UM','GU','{\"en\":\"Umatac\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GU.YG','GU','{\"en\":\"Yigo\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GU.YN','GU','{\"en\":\"Yona\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GU.ME','GU','{\"en\":\"Merizo\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GU.MA','GU','{\"en\":\"Mangilao\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GU.AH','GU','{\"en\":\"Agana Heights\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GU.CP','GU','{\"en\":\"Chalan Pago-Ordot\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GU.AS','GU','{\"en\":\"Asan\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GU.AT','GU','{\"en\":\"Agat\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GU.DD','GU','{\"en\":\"Dededo\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GU.BA','GU','{\"en\":\"Barrigada\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GU.AN','GU','{\"en\":\"Hagatna\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GU.IN','GU','{\"en\":\"Inarajan\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GU.MT','GU','{\"en\":\"Mongmong-Toto-Maite\"}',1);
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
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GU','{\"en\":\"Piti Village\"}',144.69,13.46,'P','PPLA','GU.PI',NULL,1666,'Pacific/Guam',1,'2020-10-23 23:00:00','2020-10-23 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GU','{\"en\":\"Santa Rita Village\"}',144.67,13.39,'P','PPLA','GU.SR',NULL,7500,'Pacific/Guam',1,'2013-07-06 23:00:00','2013-07-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GU','{\"en\":\"Sinajana Village\"}',144.75,13.46,'P','PPLA','GU.SJ',NULL,2853,'Pacific/Guam',1,'2018-02-22 23:00:00','2018-02-22 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GU','{\"en\":\"Talofofo Village\"}',144.76,13.36,'P','PPLA','GU.TF',NULL,3215,'Pacific/Guam',1,'2013-07-06 23:00:00','2013-07-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GU','{\"en\":\"Tamuning-Tumon-Harmon Village\"}',144.78,13.49,'P','PPLA','GU.TM',NULL,19685,'Pacific/Guam',1,'2013-07-06 23:00:00','2013-07-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GU','{\"en\":\"Umatac Village\"}',144.66,13.30,'P','PPLA','GU.UM',NULL,903,'Pacific/Guam',1,'2016-07-17 23:00:00','2016-07-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GU','{\"en\":\"Yigo Village\"}',144.89,13.54,'P','PPLA','GU.YG',NULL,20539,'Pacific/Guam',1,'2013-07-06 23:00:00','2013-07-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GU','{\"en\":\"Yona Village\"}',144.78,13.41,'P','PPLA','GU.YN',NULL,6484,'Pacific/Guam',1,'2013-07-06 23:00:00','2013-07-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GU','{\"en\":\"Merizo Village\"}',144.67,13.27,'P','PPLA','GU.ME',NULL,2152,'Pacific/Guam',1,'2013-07-06 23:00:00','2013-07-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GU','{\"en\":\"Inarajan Village\"}',144.75,13.27,'P','PPLA','GU.IN',NULL,3052,'Pacific/Guam',1,'2013-07-06 23:00:00','2013-07-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GU','{\"en\":\"Agana Heights Village\"}',144.75,13.47,'P','PPLA','GU.AH',NULL,3940,'Pacific/Guam',1,'2013-07-06 23:00:00','2013-07-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GU','{\"en\":\"Guam Government House\"}',144.75,13.47,'P','PPLG','GU.AN',NULL,0,'Pacific/Guam',1,'2011-06-30 23:00:00','2011-06-30 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GU','{\"en\":\"Chalan Pago-Ordot Village\"}',144.76,13.45,'P','PPLA','GU.CP',NULL,6822,'Pacific/Guam',1,'2013-07-06 23:00:00','2013-07-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GU','{\"en\":\"Barrigada Village\"}',144.80,13.47,'P','PPLA','GU.BA',NULL,8875,'Pacific/Guam',1,'2013-07-06 23:00:00','2013-07-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GU','{\"en\":\"Agat Village\"}',144.66,13.39,'P','PPLA','GU.AT',NULL,5656,'Pacific/Guam',1,'2013-07-06 23:00:00','2013-07-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GU','{\"en\":\"Asan-Maina Village\"}',144.72,13.47,'P','PPLA','GU.AS',NULL,2137,'Pacific/Guam',1,'2013-07-06 23:00:00','2013-07-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GU','{\"en\":\"Dededo Village\"}',144.84,13.52,'P','PPLA','GU.DD',NULL,44943,'Pacific/Guam',1,'2013-07-06 23:00:00','2013-07-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GU','{\"en\":\"Hagåtña\"}',144.75,13.48,'P','PPLC','GU.AN',NULL,1051,'Pacific/Guam',1,'2011-10-18 23:00:00','2011-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GU','{\"en\":\"Mangilao Village\"}',144.80,13.45,'P','PPLA','GU.MA',NULL,15191,'Pacific/Guam',1,'2013-06-29 23:00:00','2013-06-29 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GU','{\"en\":\"Mongmong-Toto-Maite Village\"}',144.78,13.47,'P','PPLA','GU.MT',NULL,6825,'Pacific/Guam',1,'2013-07-06 23:00:00','2013-07-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GU','{\"en\":\"Tamuning\"}',144.78,13.49,'P','PPLX','GU.TM',NULL,19685,'Pacific/Guam',1,'2017-12-12 23:00:00','2017-12-12 23:00:00');
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
