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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.35','BS','{\"en\":\"San Salvador\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.18','BS','{\"en\":\"Ragged Island\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.32','BS','{\"en\":\"Berry Islands\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.23','BS','{\"en\":\"New Providence\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.16','BS','{\"en\":\"Mayaguana\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.15','BS','{\"en\":\"Long Island\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.13','BS','{\"en\":\"Inagua\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.22','BS','{\"en\":\"Harbour Island\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.25','BS','{\"en\":\"Freeport\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.10','BS','{\"en\":\"Exuma\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.06','BS','{\"en\":\"Cat Island\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.05','BS','{\"en\":\"Bimini\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.24','BS','{\"en\":\"Acklins\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.36','BS','{\"en\":\"Black Point\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.37','BS','{\"en\":\"Central Abaco\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.38','BS','{\"en\":\"Central Andros\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.39','BS','{\"en\":\"Central Eleuthera\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.40','BS','{\"en\":\"Crooked Island and Long Cay\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.41','BS','{\"en\":\"East Grand Bahama\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.42','BS','{\"en\":\"Grand Cay\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.43','BS','{\"en\":\"Hope Town\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.44','BS','{\"en\":\"Mangrove Cay\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.45','BS','{\"en\":\"Moore’s Island\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.46','BS','{\"en\":\"North Abaco\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.47','BS','{\"en\":\"North Andros\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.48','BS','{\"en\":\"North Eleuthera\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.49','BS','{\"en\":\"Rum Cay\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.50','BS','{\"en\":\"South Abaco\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.51','BS','{\"en\":\"South Andros\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.52','BS','{\"en\":\"South Eleuthera\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.53','BS','{\"en\":\"Spanish Wells\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BS.54','BS','{\"en\":\"West Grand Bahama\"}',1);
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
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BS','{\"en\":\"West End\"}',-78.98,26.69,'P','PPLA','BS.54',NULL,12724,'America/Nassau',1,'2014-09-20 23:00:00','2014-09-20 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BS','{\"en\":\"Spanish Wells\"}',-76.76,25.55,'P','PPLA','BS.53',NULL,1500,'America/Nassau',1,'2014-01-18 23:00:00','2014-01-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BS','{\"en\":\"San Andros\"}',-78.05,25.07,'P','PPLA','BS.47',NULL,7800,'America/Nassau',1,'2013-08-07 23:00:00','2013-08-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BS','{\"en\":\"Port Nelson\"}',-74.84,23.65,'P','PPLA','BS.49',NULL,91,'America/Nassau',1,'2014-01-17 23:00:00','2014-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BS','{\"en\":\"Nassau\"}',-77.34,25.06,'P','PPLC','BS.23',NULL,227940,'America/Nassau',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BS','{\"en\":\"Matthew Town\"}',-73.67,20.95,'P','PPLA','BS.13',NULL,452,'America/Nassau',1,'2014-01-17 23:00:00','2014-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BS','{\"en\":\"Masons Bay\"}',-73.88,22.54,'P','PPLA','BS.24',NULL,0,'America/Nassau',1,'2013-07-10 23:00:00','2013-07-10 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BS','{\"en\":\"Marsh Harbour\"}',-77.06,26.54,'P','PPLA','BS.37',NULL,5314,'America/Nassau',1,'2014-01-17 23:00:00','2014-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BS','{\"en\":\"Lucaya\"}',-78.67,26.53,'P','PPL','BS.25',NULL,46525,'America/Nassau',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BS','{\"en\":\"High Rock\"}',-78.28,26.63,'P','PPLA','BS.41',NULL,3744,'America/Nassau',1,'2021-11-20 23:00:00','2021-11-20 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BS','{\"en\":\"Hard Bargain\"}',-77.57,26.32,'P','PPLA','BS.45',NULL,0,'America/Nassau',1,'2012-02-11 23:00:00','2012-02-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BS','{\"en\":\"Governor’s Harbour\"}',-76.23,25.17,'P','PPLA','BS.39',NULL,0,'America/Nassau',1,'2013-07-06 23:00:00','2013-07-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BS','{\"en\":\"George Town\"}',-75.79,23.52,'P','PPLA','BS.10',NULL,7314,'America/Nassau',1,'2013-08-01 23:00:00','2013-08-01 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BS','{\"en\":\"Freeport\"}',-78.70,26.53,'P','PPLA','BS.25',NULL,26910,'America/Nassau',1,'2019-02-25 23:00:00','2019-02-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BS','{\"en\":\"Duncan Town\"}',-75.73,22.19,'P','PPLA','BS.18',NULL,70,'America/Nassau',1,'2013-05-04 23:00:00','2013-05-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BS','{\"en\":\"Cooper’s Town\"}',-77.51,26.87,'P','PPL','BS.46',NULL,8413,'America/Nassau',1,'2016-04-09 23:00:00','2016-04-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BS','{\"en\":\"Colonel Hill\"}',-74.20,22.75,'P','PPLA','BS.40',NULL,240,'America/Nassau',1,'2013-05-07 23:00:00','2013-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BS','{\"en\":\"Cockburn Town\"}',-74.53,24.05,'P','PPLA','BS.35',NULL,831,'America/Nassau',1,'2015-02-28 23:00:00','2015-02-28 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BS','{\"en\":\"Clarence Town\"}',-74.98,23.10,'P','PPLA','BS.15',NULL,1752,'America/Nassau',1,'2012-02-18 23:00:00','2012-02-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BS','{\"en\":\"Black Point\"}',-76.38,24.10,'P','PPLA','BS.36',NULL,0,'America/Nassau',1,'2013-08-07 23:00:00','2013-08-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BS','{\"en\":\"Arthur’s Town\"}',-75.67,24.62,'P','PPLA','BS.06',NULL,1175,'America/Nassau',1,'2013-08-07 23:00:00','2013-08-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BS','{\"en\":\"Alice Town\"}',-79.30,25.73,'P','PPLA','BS.05',NULL,949,'America/Nassau',1,'2015-08-10 23:00:00','2015-08-10 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BS','{\"en\":\"Abraham’s Bay\"}',-72.97,22.37,'P','PPLA','BS.16',NULL,235,'America/Nassau',1,'2013-08-07 23:00:00','2013-08-07 23:00:00');
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
