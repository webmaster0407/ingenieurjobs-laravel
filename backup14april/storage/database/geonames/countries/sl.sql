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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SL.04','SL','{\"en\":\"Western Area\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SL.03','SL','{\"en\":\"Southern Province\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SL.02','SL','{\"en\":\"Northern Province\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SL.01','SL','{\"en\":\"Eastern Province\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SL.05','SL','{\"en\":\"North West\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SL.02.2403287','SL','SL.02','{\"en\":\"Tonkolili District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SL.03.2404399','SL','SL.03','{\"en\":\"Pujehun District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SL.05.2404431','SL','SL.05','{\"en\":\"Port Loko District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SL.03.2405008','SL','SL.03','{\"en\":\"Moyamba District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SL.01.2407469','SL','SL.01','{\"en\":\"Kono District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SL.02.2407650','SL','SL.02','{\"en\":\"Koinadugu District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SL.01.2407781','SL','SL.01','{\"en\":\"Kenema District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SL.05.2408083','SL','SL.05','{\"en\":\"Kambia District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SL.01.2408249','SL','SL.01','{\"en\":\"Kailahun District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SL.03.2409913','SL','SL.03','{\"en\":\"Bonthe District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SL.02.2409983','SL','SL.02','{\"en\":\"Bombali District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SL.03.2410021','SL','SL.03','{\"en\":\"Bo District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SL.04.9179949','SL','SL.04','{\"en\":\"Western Area Urban\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SL.04.9179950','SL','SL.04','{\"en\":\"Western Area Rural\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SL.05.11876019','SL','SL.05','{\"en\":\"Karene District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SL.02.11876020','SL','SL.02','{\"en\":\"Falaba District\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Yengema\"}',-11.17,8.71,'P','PPL','SL.01',NULL,13358,'Africa/Freetown',1,'2021-11-09 23:00:00','2021-11-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Waterloo\"}',-13.07,8.34,'P','PPL','SL.04',NULL,55000,'Africa/Freetown',1,'2021-11-09 23:00:00','2021-11-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Tombodu\"}',-10.62,8.14,'P','PPL','SL.01',NULL,5985,'Africa/Freetown',1,'2015-01-06 23:00:00','2015-01-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Tintafor\"}',-13.21,8.63,'P','PPL','SL.02',NULL,5460,'Africa/Freetown',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Sumbuya\"}',-11.96,7.65,'P','PPL','SL.03',NULL,7074,'Africa/Freetown',1,'2014-12-02 23:00:00','2014-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Segbwema\"}',-10.95,7.99,'P','PPL','SL.01',NULL,16532,'Africa/Freetown',1,'2014-12-02 23:00:00','2014-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Rokupr\"}',-12.38,8.67,'P','PPL','SL.02',NULL,12744,'Africa/Freetown',1,'2021-11-09 23:00:00','2021-11-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Port Loko\"}',-12.79,8.77,'P','PPLA','SL.05',NULL,21308,'Africa/Freetown',1,'2018-09-04 23:00:00','2018-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Pendembu\"}',-10.69,8.10,'P','PPL','SL.01',NULL,8780,'Africa/Freetown',1,'2015-01-06 23:00:00','2015-01-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Panguma\"}',-11.13,8.19,'P','PPL','SL.01',NULL,7965,'Africa/Freetown',1,'2019-04-12 23:00:00','2019-04-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Moyamba\"}',-12.43,8.16,'P','PPL','SL.03',NULL,6700,'Africa/Freetown',1,'2015-01-06 23:00:00','2015-01-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Motema\"}',-11.01,8.61,'P','PPL','SL.01',NULL,5474,'Africa/Freetown',1,'2018-11-29 23:00:00','2018-11-29 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Masingbi\"}',-11.95,8.78,'P','PPL','SL.02',NULL,5644,'Africa/Freetown',1,'2015-02-05 23:00:00','2015-02-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Mamboma\"}',-11.69,8.09,'P','PPL','SL.03',NULL,5201,'Africa/Freetown',1,'2019-04-12 23:00:00','2019-04-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Mambolo\"}',-13.04,8.92,'P','PPL','SL.02',NULL,6624,'Africa/Freetown',1,'2015-02-05 23:00:00','2015-02-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Makeni\"}',-12.04,8.89,'P','PPLA','SL.02',NULL,87679,'Africa/Freetown',1,'2015-03-07 23:00:00','2015-03-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Magburaka\"}',-11.95,8.72,'P','PPL','SL.02',NULL,14915,'Africa/Freetown',1,'2015-02-05 23:00:00','2015-02-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Lunsar\"}',-12.53,8.68,'P','PPL','SL.02',NULL,22461,'Africa/Freetown',1,'2015-02-05 23:00:00','2015-02-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Kukuna\"}',-12.66,9.40,'P','PPL','SL.02',NULL,7676,'Africa/Freetown',1,'2014-12-02 23:00:00','2014-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Koidu\"}',-10.97,8.64,'P','PPL','SL.01',NULL,124662,'Africa/Freetown',1,'2021-11-09 23:00:00','2021-11-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Kenema\"}',-11.19,7.88,'P','PPLA','SL.01',NULL,143137,'Africa/Freetown',1,'2014-12-02 23:00:00','2014-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Kassiri\"}',-13.12,8.94,'P','PPL','SL.02',NULL,5161,'Africa/Freetown',1,'2015-02-05 23:00:00','2015-02-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Kambia\"}',-12.92,9.13,'P','PPL','SL.02',NULL,11520,'Africa/Freetown',1,'2021-11-09 23:00:00','2021-11-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Kamakwie\"}',-12.24,9.50,'P','PPL','SL.02',NULL,8098,'Africa/Freetown',1,'2013-03-06 23:00:00','2013-03-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Kailahun\"}',-10.57,8.28,'P','PPL','SL.01',NULL,14085,'Africa/Freetown',1,'2014-12-02 23:00:00','2014-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Kabala\"}',-11.55,9.59,'P','PPL','SL.02',NULL,17948,'Africa/Freetown',1,'2014-12-02 23:00:00','2014-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Hastings\"}',-13.14,8.38,'P','PPL','SL.04',NULL,5121,'Africa/Freetown',1,'2014-11-04 23:00:00','2014-11-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Hangha\"}',-11.14,7.94,'P','PPL','SL.01',NULL,5007,'Africa/Freetown',1,'2014-12-02 23:00:00','2014-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Gandorhun\"}',-11.69,7.56,'P','PPL','SL.03',NULL,12288,'Africa/Freetown',1,'2014-12-02 23:00:00','2014-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Gandorhun\"}',-11.83,7.49,'P','PPL','SL.03',NULL,12288,'Africa/Freetown',1,'2021-11-09 23:00:00','2021-11-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Freetown\"}',-13.24,8.49,'P','PPLC','SL.04',NULL,802639,'Africa/Freetown',1,'2019-10-27 23:00:00','2019-10-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Foindu\"}',-11.54,7.41,'P','PPL','SL.03',NULL,5868,'Africa/Freetown',1,'2015-01-06 23:00:00','2015-01-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Daru\"}',-10.84,7.99,'P','PPL','SL.01',NULL,5958,'Africa/Freetown',1,'2014-12-02 23:00:00','2014-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Buedu\"}',-10.37,8.28,'P','PPL','SL.01',NULL,5412,'Africa/Freetown',1,'2015-01-06 23:00:00','2015-01-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Bunumbu\"}',-10.86,8.17,'P','PPL','SL.01',NULL,7355,'Africa/Freetown',1,'2015-01-06 23:00:00','2015-01-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Bumpe\"}',-11.91,7.89,'P','PPL','SL.03',NULL,16123,'Africa/Freetown',1,'2021-11-09 23:00:00','2021-11-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Bonthe\"}',-12.51,7.53,'P','PPL','SL.03',NULL,10206,'Africa/Freetown',1,'2021-11-09 23:00:00','2021-11-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Bomi\"}',-11.53,7.25,'P','PPL','SL.03',NULL,5463,'Africa/Freetown',1,'2018-11-28 23:00:00','2018-11-28 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Boajibu\"}',-11.34,8.19,'P','PPL','SL.01',NULL,7384,'Africa/Freetown',1,'2015-01-06 23:00:00','2015-01-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Bo\"}',-11.74,7.96,'P','PPLA','SL.03',NULL,174354,'Africa/Freetown',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Blama\"}',-11.35,7.87,'P','PPL','SL.01',NULL,8146,'Africa/Freetown',1,'2014-12-02 23:00:00','2014-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Binkolo\"}',-11.98,8.95,'P','PPL','SL.02',NULL,13867,'Africa/Freetown',1,'2015-02-05 23:00:00','2015-02-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Barma\"}',-11.33,8.35,'P','PPL','SL.01',NULL,7529,'Africa/Freetown',1,'2014-12-02 23:00:00','2014-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Baoma\"}',-11.71,7.99,'P','PPL','SL.03',NULL,7044,'Africa/Freetown',1,'2014-12-02 23:00:00','2014-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Pujehun\"}',-11.72,7.36,'P','PPL','SL.03',NULL,7926,'Africa/Freetown',1,'2012-01-18 23:00:00','2012-01-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SL','{\"en\":\"Goderich\"}',-13.29,8.43,'P','PPLX','SL.04','SL.04.9179950',19209,'Africa/Freetown',1,'2020-05-07 23:00:00','2020-05-07 23:00:00');
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
