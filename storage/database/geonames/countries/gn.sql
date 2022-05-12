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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GN.04','GN','{\"en\":\"Conakry\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GN.B','GN','{\"en\":\"Boke\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GN.F','GN','{\"en\":\"Faranah\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GN.K','GN','{\"en\":\"Kankan\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GN.D','GN','{\"en\":\"Kindia\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GN.L','GN','{\"en\":\"Labe\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GN.M','GN','{\"en\":\"Mamou\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GN.N','GN','{\"en\":\"Nzerekore\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.N.29','GN','GN.N','{\"en\":\"Yomou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.L.28','GN','GN.L','{\"en\":\"Tougue Prefecture\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.D.27','GN','GN.D','{\"en\":\"Telimele Prefecture\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.K.39','GN','GN.K','{\"en\":\"Siguiri Prefecture\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.M.25','GN','GN.M','{\"en\":\"Pita\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.N.38','GN','GN.N','{\"en\":\"Nzerekore Prefecture\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.M.23','GN','GN.M','{\"en\":\"Mamou Prefecture\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.L.22','GN','GN.L','{\"en\":\"Mali Prefecture\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.N.21','GN','GN.N','{\"en\":\"Macenta\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.L.34','GN','GN.L','{\"en\":\"Labe Prefecture\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.K.19','GN','GN.K','{\"en\":\"Kouroussa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.B.18','GN','GN.B','{\"en\":\"Koundara Prefecture\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.F.17','GN','GN.F','{\"en\":\"Kissidougou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.D.16','GN','GN.D','{\"en\":\"Kindia\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.K.15','GN','GN.K','{\"en\":\"Kerouane Prefecture\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.K.32','GN','GN.K','{\"en\":\"Kankan Prefecture\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.N.13','GN','GN.N','{\"en\":\"Préfecture de Guékédou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.B.12','GN','GN.B','{\"en\":\"Gaoual Prefecture\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.B.11','GN','GN.B','{\"en\":\"Fria\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.D.10','GN','GN.D','{\"en\":\"Préfecture de Forécariah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.F.09','GN','GN.F','{\"en\":\"Faranah Prefecture\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.D.31','GN','GN.D','{\"en\":\"Préfecture de Dubréka\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.F.07','GN','GN.F','{\"en\":\"Dinguiraye Prefecture\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.M.06','GN','GN.M','{\"en\":\"Dalaba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.F.05','GN','GN.F','{\"en\":\"Dabola\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.B.03','GN','GN.B','{\"en\":\"Boke Prefecture\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.B.02','GN','GN.B','{\"en\":\"Boffa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.N.01','GN','GN.N','{\"en\":\"Beyla Prefecture\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.D.30','GN','GN.D','{\"en\":\"Coyah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.L.33','GN','GN.L','{\"en\":\"Koubia\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.L.35','GN','GN.L','{\"en\":\"Lelouma Prefecture\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.N.36','GN','GN.N','{\"en\":\"Lola\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.K.37','GN','GN.K','{\"en\":\"Mandiana Prefecture\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GN.04.8335012','GN','GN.04','{\"en\":\"Conakry Special Zone\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Youkounkoun\"}',-13.12,12.53,'P','PPL','GN.B','GN.B.18',7952,'Africa/Conakry',1,'2012-06-17 23:00:00','2012-06-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Tougué\"}',-11.66,11.45,'P','PPLA2','GN.L','GN.L.28',25531,'Africa/Conakry',1,'2015-03-04 23:00:00','2015-03-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Tondon\"}',-13.35,10.37,'P','PPL','GN.D','GN.D.31',12235,'Africa/Conakry',1,'2012-06-13 23:00:00','2012-06-13 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Tokonou\"}',-9.78,9.65,'P','PPL','GN.K','GN.K.32',6729,'Africa/Conakry',1,'2018-12-04 23:00:00','2018-12-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Télimélé\"}',-13.03,10.90,'P','PPLA2','GN.D','GN.D.27',30311,'Africa/Conakry',1,'2012-07-06 23:00:00','2012-07-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Siguiri\"}',-9.17,11.42,'P','PPLA2','GN.K','GN.K.39',43601,'Africa/Conakry',1,'2012-06-14 23:00:00','2012-06-14 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Sanguéya\"}',-14.37,10.70,'P','PPL','GN.B','GN.B.03',6117,'Africa/Conakry',1,'2012-06-13 23:00:00','2012-06-13 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Pita\"}',-12.39,11.06,'P','PPLA2','GN.M','GN.M.25',20052,'Africa/Conakry',1,'2015-03-04 23:00:00','2015-03-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Nzérékoré\"}',-8.82,7.76,'P','PPLA','GN.N','GN.N.38',132728,'Africa/Conakry',1,'2013-05-09 23:00:00','2013-05-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Mandiana\"}',-8.69,10.63,'P','PPLA2','GN.K','GN.K.37',10609,'Africa/Conakry',1,'2015-03-04 23:00:00','2015-03-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Mamou\"}',-12.09,10.38,'P','PPLA','GN.M','GN.M.23',41619,'Africa/Conakry',1,'2012-06-14 23:00:00','2012-06-14 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Mali\"}',-12.30,12.08,'P','PPLA2','GN.L','GN.L.22',5479,'Africa/Conakry',1,'2012-07-06 23:00:00','2012-07-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Macenta\"}',-9.47,8.54,'P','PPLA2','GN.N','GN.N.21',43102,'Africa/Conakry',1,'2012-06-14 23:00:00','2012-06-14 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Labé\"}',-12.28,11.32,'P','PPLA2','GN.L','GN.L.34',58649,'Africa/Conakry',1,'2013-07-06 23:00:00','2013-07-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Kouroussa\"}',-9.88,10.65,'P','PPLA2','GN.K','GN.K.19',14223,'Africa/Conakry',1,'2012-07-06 23:00:00','2012-07-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Koundara\"}',-13.30,12.48,'P','PPLA2','GN.B','GN.B.18',13990,'Africa/Conakry',1,'2012-07-06 23:00:00','2012-07-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Koubia\"}',-11.89,11.59,'P','PPLA2','GN.L','GN.L.33',9909,'Africa/Conakry',1,'2015-03-04 23:00:00','2015-03-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Kissidougou\"}',-10.10,9.18,'P','PPLA2','GN.F','GN.F.17',47099,'Africa/Conakry',1,'2012-06-14 23:00:00','2012-06-14 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Kindia\"}',-12.87,10.06,'P','PPLA','GN.D','GN.D.16',117062,'Africa/Conakry',1,'2018-11-20 23:00:00','2018-11-20 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Kimbo\"}',-13.55,10.40,'P','PPL','GN.B','GN.B.11',9326,'Africa/Conakry',1,'2012-06-13 23:00:00','2012-06-13 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Kérouané\"}',-9.02,9.27,'P','PPLA2','GN.K','GN.K.15',7228,'Africa/Conakry',1,'2012-07-06 23:00:00','2012-07-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Kankan\"}',-9.31,10.39,'P','PPLA','GN.K','GN.K.32',114009,'Africa/Conakry',1,'2012-06-14 23:00:00','2012-06-14 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Gueckedou\"}',-10.13,8.57,'P','PPLA2','GN.N','GN.N.13',79140,'Africa/Conakry',1,'2012-06-18 23:00:00','2012-06-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Gaoual\"}',-13.20,11.75,'P','PPLA2','GN.B','GN.B.12',7461,'Africa/Conakry',1,'2018-11-19 23:00:00','2018-11-19 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Fria\"}',-13.58,10.37,'P','PPLA2','GN.B','GN.B.11',44369,'Africa/Conakry',1,'2015-03-05 23:00:00','2015-03-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Forécariah\"}',-13.09,9.43,'P','PPLA2','GN.D','GN.D.10',12358,'Africa/Conakry',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Faranah\"}',-10.74,10.04,'P','PPLA','GN.F','GN.F.09',9350,'Africa/Conakry',1,'2012-06-14 23:00:00','2012-06-14 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Dubréka\"}',-13.52,9.79,'P','PPLA2','GN.D','GN.D.31',10363,'Africa/Conakry',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Dinguiraye\"}',-10.71,11.29,'P','PPLA2','GN.F','GN.F.07',6062,'Africa/Conakry',1,'2015-03-04 23:00:00','2015-03-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Dalaba\"}',-12.25,10.69,'P','PPLA2','GN.M','GN.M.06',7036,'Africa/Conakry',1,'2018-11-20 23:00:00','2018-11-20 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Dabola\"}',-11.11,10.74,'P','PPLA2','GN.F','GN.F.05',13057,'Africa/Conakry',1,'2015-03-04 23:00:00','2015-03-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Coyah\"}',-13.38,9.71,'P','PPLA2','GN.D','GN.D.30',77103,'Africa/Conakry',1,'2015-03-05 23:00:00','2015-03-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Conakry\"}',-13.68,9.54,'P','PPLC','GN.04','GN.04.8335012',1767200,'Africa/Conakry',1,'2018-05-25 23:00:00','2018-05-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Camayenne\"}',-13.69,9.54,'P','PPL','GN.04',NULL,1871242,'Africa/Conakry',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Boké\"}',-14.29,10.93,'P','PPLA','GN.B','GN.B.03',15460,'Africa/Conakry',1,'2017-08-18 23:00:00','2017-08-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GN','{\"en\":\"Beyla\"}',-8.65,8.69,'P','PPLA2','GN.N','GN.N.01',11566,'Africa/Conakry',1,'2015-03-05 23:00:00','2015-03-05 23:00:00');
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
