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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TM.02','TM','{\"en\":\"Balkan\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TM.01','TM','{\"en\":\"Ahal\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TM.S','TM','{\"en\":\"Ashgabat\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TM.03','TM','{\"en\":\"Daşoguz\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TM.05','TM','{\"en\":\"Mary\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TM.04','TM','{\"en\":\"Lebap\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TM.05.1218305','TM','TM.05','{\"en\":\"Tagtabazar Etrap\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TM.05.1218742','TM','TM.05','{\"en\":\"Guşgy Etrap\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TM.01.11189155','TM','TM.01','{\"en\":\"Baharly District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TM.03.11820056','TM','TM.03','{\"en\":\"Akdepe District\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TM','{\"en\":\"Balkanabat\"}',54.37,39.51,'P','PPLA','TM.02',NULL,87822,'Asia/Ashgabat',1,'2013-11-27 23:00:00','2013-11-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TM','{\"en\":\"Kaka\"}',59.61,37.35,'P','PPL','TM.01',NULL,18545,'Asia/Ashgabat',1,'2022-01-12 23:00:00','2022-01-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TM','{\"en\":\"Serdar\"}',56.28,38.98,'P','PPL','TM.02',NULL,12000,'Asia/Ashgabat',1,'2014-03-05 23:00:00','2014-03-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TM','{\"en\":\"Gumdag\"}',54.59,39.21,'P','PPL','TM.02',NULL,24312,'Asia/Ashgabat',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TM','{\"en\":\"Bereket\"}',55.52,39.24,'P','PPL','TM.02',NULL,21090,'Asia/Ashgabat',1,'2018-07-03 23:00:00','2018-07-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TM','{\"en\":\"Abadan\"}',58.20,38.05,'P','PPL','TM.01',NULL,39481,'Asia/Ashgabat',1,'2014-10-14 23:00:00','2014-10-14 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TM','{\"en\":\"Baharly\"}',57.43,38.44,'P','PPL','TM.01',NULL,22991,'Asia/Ashgabat',1,'2014-07-07 23:00:00','2014-07-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TM','{\"en\":\"Ashgabat\"}',58.38,37.95,'P','PPLC','TM.S',NULL,727700,'Asia/Ashgabat',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TM','{\"en\":\"Änew\"}',58.52,37.89,'P','PPLA','TM.01',NULL,27526,'Asia/Ashgabat',1,'2020-07-31 23:00:00','2020-07-31 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TM','{\"en\":\"Yylanly\"}',59.65,41.83,'P','PPL','TM.03',NULL,26901,'Asia/Ashgabat',1,'2013-10-28 23:00:00','2013-10-28 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TM','{\"en\":\"Tagta\"}',59.92,41.65,'P','PPL','TM.03',NULL,16635,'Asia/Ashgabat',1,'2013-10-29 23:00:00','2013-10-29 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TM','{\"en\":\"Akdepe\"}',59.38,42.06,'P','PPLA2','TM.03','TM.03.11820056',14177,'Asia/Ashgabat',1,'2018-02-16 23:00:00','2018-02-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TM','{\"en\":\"Türkmenbaşy\"}',52.96,40.02,'P','PPL','TM.02',NULL,68292,'Asia/Ashgabat',1,'2022-01-12 23:00:00','2022-01-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TM','{\"en\":\"Köneürgench\"}',59.15,42.33,'P','PPL','TM.03',NULL,30000,'Asia/Ashgabat',1,'2022-01-12 23:00:00','2022-01-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TM','{\"en\":\"Boldumsaz\"}',59.67,42.13,'P','PPL','TM.03',NULL,21159,'Asia/Ashgabat',1,'2013-10-29 23:00:00','2013-10-29 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TM','{\"en\":\"Daşoguz\"}',59.97,41.84,'P','PPLA','TM.03',NULL,166500,'Asia/Ashgabat',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TM','{\"en\":\"Yolöten\"}',62.36,37.30,'P','PPL','TM.05',NULL,37705,'Asia/Ashgabat',1,'2022-01-12 23:00:00','2022-01-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TM','{\"en\":\"Tejen\"}',60.51,37.38,'P','PPL','TM.01',NULL,67294,'Asia/Ashgabat',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TM','{\"en\":\"Seydi\"}',62.91,39.48,'P','PPL','TM.05',NULL,17762,'Asia/Ashgabat',1,'2013-10-29 23:00:00','2013-10-29 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TM','{\"en\":\"Saýat\"}',63.88,38.78,'P','PPL','TM.04',NULL,17762,'Asia/Ashgabat',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TM','{\"en\":\"Murgab\"}',61.97,37.50,'P','PPL','TM.00',NULL,13199,'Asia/Ashgabat',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TM','{\"en\":\"Mary\"}',61.83,37.59,'P','PPLA','TM.05',NULL,114680,'Asia/Ashgabat',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TM','{\"en\":\"Kerki\"}',65.21,37.84,'P','PPL','TM.04',NULL,33242,'Asia/Ashgabat',1,'2022-01-12 23:00:00','2022-01-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TM','{\"en\":\"Serhetabat\"}',62.34,35.28,'P','PPL','TM.05',NULL,5200,'Asia/Ashgabat',1,'2014-04-05 23:00:00','2014-04-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TM','{\"en\":\"Gowurdak\"}',66.05,37.81,'P','PPL','TM.04',NULL,34745,'Asia/Ashgabat',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TM','{\"en\":\"Farap\"}',63.61,39.17,'P','PPL','TM.04',NULL,14503,'Asia/Ashgabat',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TM','{\"en\":\"Türkmenabat\"}',63.58,39.07,'P','PPLA','TM.04',NULL,234817,'Asia/Ashgabat',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TM','{\"en\":\"Bayramaly\"}',62.17,37.62,'P','PPL','TM.05',NULL,75797,'Asia/Ashgabat',1,'2022-01-12 23:00:00','2022-01-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TM','{\"en\":\"Gazojak\"}',61.40,41.19,'P','PPL','TM.04',NULL,21021,'Asia/Ashgabat',1,'2014-01-19 23:00:00','2014-01-19 23:00:00');
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
