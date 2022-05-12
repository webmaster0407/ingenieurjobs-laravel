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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TT.11','TT','{\"en\":\"Tobago\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TT.10','TT','{\"en\":\"San Fernando\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TT.05','TT','{\"en\":\"Port of Spain\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TT.03','TT','{\"en\":\"Mayaro\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TT.01','TT','{\"en\":\"Borough of Arima\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TT.CHA','TT','{\"en\":\"Chaguanas\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TT.CTT','TT','{\"en\":\"Couva-Tabaquite-Talparo\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TT.DMN','TT','{\"en\":\"Diego Martin\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TT.PED','TT','{\"en\":\"Penal/Debe\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TT.PRT','TT','{\"en\":\"Princes Town\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TT.PTF','TT','{\"en\":\"Point Fortin\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TT.SGE','TT','{\"en\":\"Sangre Grande\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TT.SIP','TT','{\"en\":\"Siparia\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TT.SJL','TT','{\"en\":\"San Juan/Laventille\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TT.TUP','TT','{\"en\":\"Tunapuna/Piarco\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.SGE.3573559','TT','TT.SGE','{\"en\":\"Ward of Valencia\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.SGE.3573575','TT','TT.SGE','{\"en\":\"Ward of Turure\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.03.3573589','TT','TT.03','{\"en\":\"Ward of Trinity\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.SGE.3573603','TT','TT.SGE','{\"en\":\"Ward of Toco\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.SGE.3573635','TT','TT.SGE','{\"en\":\"Ward of Tamana\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.TUP.3573642','TT','TT.TUP','{\"en\":\"Ward of Tacarigua\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.SIP.3573680','TT','TT.SIP','{\"en\":\"Ward of Siparia\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.PRT.3573709','TT','TT.PRT','{\"en\":\"Ward of Savana Grande\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.CTT.3573722','TT','TT.CTT','{\"en\":\"Ward of San Rafael\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.11.3573759','TT','TT.11','{\"en\":\"Saint Paul\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.11.3573761','TT','TT.11','{\"en\":\"Saint Patrick\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.11.3573766','TT','TT.11','{\"en\":\"Saint Mary\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.11.3573778','TT','TT.11','{\"en\":\"Saint John\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.11.3573784','TT','TT.11','{\"en\":\"Saint George\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.11.3573793','TT','TT.11','{\"en\":\"Saint David\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.SJL.3573800','TT','TT.SJL','{\"en\":\"Ward of Saint Ann’s\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.11.3573805','TT','TT.11','{\"en\":\"Saint Andrew\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.CTT.3573901','TT','TT.CTT','{\"en\":\"Ward of Pointe-à-Pierre\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.PRT.3574008','TT','TT.PRT','{\"en\":\"Ward of Ortoire\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.PED.3574064','TT','TT.PED','{\"en\":\"Ward of Naparima\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.PRT.3574086','TT','TT.PRT','{\"en\":\"Ward of Moruga\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.CTT.3574111','TT','TT.CTT','{\"en\":\"Ward of Montserrat\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.SGE.3574167','TT','TT.SGE','{\"en\":\"Ward of Matura\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.SGE.3574201','TT','TT.SGE','{\"en\":\"Ward of Manzanilla\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.SIP.3574352','TT','TT.SIP','{\"en\":\"Ward of La Brea\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.03.3574434','TT','TT.03','{\"en\":\"Ward of Guayaguayare\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.SIP.3574590','TT','TT.SIP','{\"en\":\"Ward of Erin\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.DMN.3574635','TT','TT.DMN','{\"en\":\"Ward of Diego Martin\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.CTT.3574679','TT','TT.CTT','{\"en\":\"Ward of Cunupia\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.CTT.3574723','TT','TT.CTT','{\"en\":\"Ward of Couva\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.03.3574768','TT','TT.03','{\"en\":\"Ward of Cocal\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.03.3574796','TT','TT.03','{\"en\":\"Ward of Charuma\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.CHA.3574809','TT','TT.CHA','{\"en\":\"Ward of Chaguanas\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.SIP.3574824','TT','TT.SIP','{\"en\":\"Ward of Cedros\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.TUP.3574971','TT','TT.TUP','{\"en\":\"Ward of Blanchisseuse\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TT.TUP.3575050','TT','TT.TUP','{\"en\":\"Ward of Arima\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TT','{\"en\":\"Tunapuna\"}',-61.39,10.65,'P','PPLA','TT.TUP',NULL,17758,'America/Port_of_Spain',1,'2017-10-03 23:00:00','2017-10-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TT','{\"en\":\"Siparia\"}',-61.51,10.15,'P','PPLA','TT.SIP',NULL,8568,'America/Port_of_Spain',1,'2017-10-03 23:00:00','2017-10-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TT','{\"en\":\"Scarborough\"}',-60.74,11.18,'P','PPLA','TT.11',NULL,17000,'America/Port_of_Spain',1,'2017-05-23 23:00:00','2017-05-23 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TT','{\"en\":\"Sangre Grande\"}',-61.13,10.59,'P','PPLA','TT.SGE',NULL,15968,'America/Port_of_Spain',1,'2017-10-07 23:00:00','2017-10-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TT','{\"en\":\"San Fernando\"}',-61.47,10.28,'P','PPLA','TT.10',NULL,55419,'America/Port_of_Spain',1,'2017-10-03 23:00:00','2017-10-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TT','{\"en\":\"Rio Claro\"}',-61.18,10.31,'P','PPLA','TT.03',NULL,35650,'America/Port_of_Spain',1,'2017-10-03 23:00:00','2017-10-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TT','{\"en\":\"Princes Town\"}',-61.37,10.27,'P','PPLA','TT.PRT',NULL,10000,'America/Port_of_Spain',1,'2017-10-03 23:00:00','2017-10-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TT','{\"en\":\"Port of Spain\"}',-61.52,10.67,'P','PPLC','TT.05',NULL,49031,'America/Port_of_Spain',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TT','{\"en\":\"Point Fortin\"}',-61.68,10.17,'P','PPLA','TT.PTF',NULL,19056,'America/Port_of_Spain',1,'2017-10-03 23:00:00','2017-10-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TT','{\"en\":\"Petit Valley\"}',-61.55,10.70,'P','PPL','TT.DMN',NULL,8140,'America/Port_of_Spain',1,'2017-10-07 23:00:00','2017-10-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TT','{\"en\":\"Peñal\"}',-61.47,10.17,'P','PPLA','TT.PED',NULL,12281,'America/Port_of_Spain',1,'2010-08-31 23:00:00','2010-08-31 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TT','{\"en\":\"Paradise\"}',-61.36,10.65,'P','PPL','TT.TUP',NULL,15067,'America/Port_of_Spain',1,'2013-06-22 23:00:00','2013-06-22 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TT','{\"en\":\"Mon Repos\"}',-61.45,10.28,'P','PPL','TT.10',NULL,56380,'America/Port_of_Spain',1,'2018-12-04 23:00:00','2018-12-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TT','{\"en\":\"Marabella\"}',-61.45,10.31,'P','PPL','TT.10',NULL,26700,'America/Port_of_Spain',1,'2016-05-10 23:00:00','2016-05-10 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TT','{\"en\":\"Laventille\"}',-61.50,10.65,'P','PPLA','TT.SJL',NULL,21000,'America/Port_of_Spain',1,'2017-10-07 23:00:00','2017-10-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TT','{\"en\":\"Diego Martin\"}',-61.57,10.72,'P','PPLA','TT.DMN',NULL,0,'America/Port_of_Spain',1,'2017-10-03 23:00:00','2017-10-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TT','{\"en\":\"Couva\"}',-61.47,10.42,'P','PPLA','TT.CTT',NULL,5178,'America/Port_of_Spain',1,'2010-08-27 23:00:00','2010-08-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TT','{\"en\":\"Chaguanas\"}',-61.42,10.52,'P','PPLA','TT.CHA',NULL,67433,'America/Port_of_Spain',1,'2017-10-03 23:00:00','2017-10-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TT','{\"en\":\"Arouca\"}',-61.33,10.63,'P','PPL','TT.TUP',NULL,12054,'America/Port_of_Spain',1,'2012-08-03 23:00:00','2012-08-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TT','{\"en\":\"Arima\"}',-61.28,10.64,'P','PPLA','TT.01',NULL,35000,'America/Port_of_Spain',1,'2017-10-03 23:00:00','2017-10-03 23:00:00');
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
