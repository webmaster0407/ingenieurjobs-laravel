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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('MW.S','MW','{\"en\":\"Southern Region\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('MW.N','MW','{\"en\":\"Northern Region\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('MW.C','MW','{\"en\":\"Central Region\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MW.N.04','MW','MW.N','{\"en\":\"Chitipa District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MW.S.23','MW','MW.S','{\"en\":\"Zomba District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MW.C.22','MW','MW.C','{\"en\":\"Salima District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MW.N.21','MW','MW.N','{\"en\":\"Rumphi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MW.C.20','MW','MW.C','{\"en\":\"Ntchisi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MW.S.19','MW','MW.S','{\"en\":\"Nsanje District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MW.C.18','MW','MW.C','{\"en\":\"Nkhotakota District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MW.N.17','MW','MW.N','{\"en\":\"Nkhata Bay District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MW.C.16','MW','MW.C','{\"en\":\"Ntcheu District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MW.N.15','MW','MW.N','{\"en\":\"Mzimba District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MW.S.25','MW','MW.S','{\"en\":\"Mwanza District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MW.S.29','MW','MW.S','{\"en\":\"Mulanje District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MW.C.13','MW','MW.C','{\"en\":\"Mchinji District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MW.S.12','MW','MW.S','{\"en\":\"Mangochi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MW.S.28','MW','MW.S','{\"en\":\"Machinga District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MW.C.11','MW','MW.C','{\"en\":\"Lilongwe District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MW.C.09','MW','MW.C','{\"en\":\"Kasungu District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MW.N.08','MW','MW.N','{\"en\":\"Karonga District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MW.C.07','MW','MW.C','{\"en\":\"Dowa District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MW.C.06','MW','MW.C','{\"en\":\"Dedza District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MW.S.05','MW','MW.S','{\"en\":\"Thyolo District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MW.S.03','MW','MW.S','{\"en\":\"Chiradzulu District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MW.S.02','MW','MW.S','{\"en\":\"Chikwawa District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MW.S.24','MW','MW.S','{\"en\":\"Blantyre District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MW.S.26','MW','MW.S','{\"en\":\"Balaka District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MW.N.27','MW','MW.N','{\"en\":\"Likoma District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MW.S.30','MW','MW.S','{\"en\":\"Phalombe District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MW.S.31','MW','MW.S','{\"en\":\"Neno District\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MW','{\"en\":\"Karonga\"}',33.93,-9.93,'P','PPLA2','MW.N','MW.N.08',34207,'Africa/Blantyre',1,'2011-04-24 23:00:00','2011-04-24 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MW','{\"en\":\"Chitipa\"}',33.27,-9.70,'P','PPLA2','MW.N','MW.N.04',8824,'Africa/Blantyre',1,'2011-04-24 23:00:00','2011-04-24 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MW','{\"en\":\"Zomba\"}',35.32,-15.39,'P','PPLA2','MW.S','MW.S.23',80932,'Africa/Blantyre',1,'2011-04-24 23:00:00','2011-04-24 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MW','{\"en\":\"Thyolo\"}',35.14,-16.07,'P','PPLA2','MW.S','MW.S.05',5775,'Africa/Blantyre',1,'2011-11-07 23:00:00','2011-11-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MW','{\"en\":\"Salima\"}',34.46,-13.78,'P','PPLA2','MW.C','MW.C.22',30052,'Africa/Blantyre',1,'2011-04-24 23:00:00','2011-04-24 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MW','{\"en\":\"Rumphi\"}',33.86,-11.02,'P','PPLA2','MW.N','MW.N.21',20727,'Africa/Blantyre',1,'2011-11-07 23:00:00','2011-11-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MW','{\"en\":\"Ntchisi\"}',33.91,-13.53,'P','PPLA2','MW.C','MW.C.20',7918,'Africa/Blantyre',1,'2011-06-01 23:00:00','2011-06-01 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MW','{\"en\":\"Ntcheu\"}',34.64,-14.82,'P','PPLA2','MW.C','MW.C.16',10445,'Africa/Blantyre',1,'2011-11-07 23:00:00','2011-11-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MW','{\"en\":\"Nsanje\"}',35.26,-16.92,'P','PPLA2','MW.S','MW.S.19',21774,'Africa/Blantyre',1,'2011-11-07 23:00:00','2011-11-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MW','{\"en\":\"Nkhotakota\"}',34.30,-12.93,'P','PPLA2','MW.C','MW.C.18',24865,'Africa/Blantyre',1,'2011-11-07 23:00:00','2011-11-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MW','{\"en\":\"Nkhata Bay\"}',34.29,-11.61,'P','PPLA2','MW.N','MW.N.17',11721,'Africa/Blantyre',1,'2011-11-07 23:00:00','2011-11-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MW','{\"en\":\"Mzuzu\"}',34.02,-11.47,'P','PPLA','MW.N','MW.N.15',175345,'Africa/Blantyre',1,'2013-08-04 23:00:00','2013-08-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MW','{\"en\":\"Mzimba\"}',33.60,-11.90,'P','PPLA2','MW.N','MW.N.15',19308,'Africa/Blantyre',1,'2011-04-24 23:00:00','2011-04-24 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MW','{\"en\":\"Mwanza\"}',34.52,-15.60,'P','PPLA2','MW.S','MW.S.25',11379,'Africa/Blantyre',1,'2011-11-07 23:00:00','2011-11-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MW','{\"en\":\"Mulanje\"}',35.50,-16.03,'P','PPLA2','MW.S','MW.S.29',16483,'Africa/Blantyre',1,'2011-11-07 23:00:00','2011-11-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MW','{\"en\":\"Mponela\"}',33.74,-13.53,'P','PPL','MW.C','MW.C.07',11222,'Africa/Blantyre',1,'2020-09-09 23:00:00','2020-09-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MW','{\"en\":\"Monkey Bay\"}',34.92,-14.08,'P','PPL','MW.S','MW.S.12',11619,'Africa/Blantyre',1,'2015-12-12 23:00:00','2015-12-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MW','{\"en\":\"Mchinji\"}',32.88,-13.80,'P','PPLA2','MW.C','MW.C.13',18305,'Africa/Blantyre',1,'2011-11-07 23:00:00','2011-11-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MW','{\"en\":\"Mangochi\"}',35.26,-14.48,'P','PPLA2','MW.S','MW.S.12',40236,'Africa/Blantyre',1,'2011-04-24 23:00:00','2011-04-24 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MW','{\"en\":\"Luchenza\"}',35.31,-16.01,'P','PPL','MW.S','MW.S.05',11939,'Africa/Blantyre',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MW','{\"en\":\"Liwonde\"}',35.23,-15.07,'P','PPL','MW.S','MW.S.28',22469,'Africa/Blantyre',1,'2013-04-26 23:00:00','2013-04-26 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MW','{\"en\":\"Livingstonia\"}',34.11,-10.61,'P','PPL','MW.N','MW.N.21',5552,'Africa/Blantyre',1,'2020-09-09 23:00:00','2020-09-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MW','{\"en\":\"Lilongwe\"}',33.79,-13.97,'P','PPLC','MW.C','MW.C.11',646750,'Africa/Blantyre',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MW','{\"en\":\"Kasungu\"}',33.48,-13.03,'P','PPLA2','MW.C','MW.C.09',42555,'Africa/Blantyre',1,'2011-04-24 23:00:00','2011-04-24 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MW','{\"en\":\"Dowa\"}',33.94,-13.65,'P','PPLA2','MW.C','MW.C.07',5565,'Africa/Blantyre',1,'2011-04-24 23:00:00','2011-04-24 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MW','{\"en\":\"Dedza\"}',34.33,-14.38,'P','PPLA2','MW.C','MW.C.06',15608,'Africa/Blantyre',1,'2011-04-24 23:00:00','2011-04-24 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MW','{\"en\":\"Chikwawa\"}',34.80,-16.03,'P','PPLA2','MW.S','MW.S.02',6987,'Africa/Blantyre',1,'2011-11-08 23:00:00','2011-11-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MW','{\"en\":\"Blantyre\"}',35.01,-15.78,'P','PPLA','MW.S','MW.S.24',584877,'Africa/Blantyre',1,'2021-08-03 23:00:00','2021-08-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MW','{\"en\":\"Balaka\"}',34.96,-14.98,'P','PPLA2','MW.S','MW.S.26',18902,'Africa/Blantyre',1,'2011-11-07 23:00:00','2011-11-07 23:00:00');
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
