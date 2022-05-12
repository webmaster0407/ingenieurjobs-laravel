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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SN.12','SN','{\"en\":\"Ziguinchor\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SN.07','SN','{\"en\":\"Thiès\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SN.05','SN','{\"en\":\"Tambacounda\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SN.14','SN','{\"en\":\"Saint-Louis\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SN.15','SN','{\"en\":\"Matam\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SN.13','SN','{\"en\":\"Louga\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SN.11','SN','{\"en\":\"Kolda\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SN.10','SN','{\"en\":\"Kaolack\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SN.09','SN','{\"en\":\"Fatick\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SN.03','SN','{\"en\":\"Diourbel\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SN.01','SN','{\"en\":\"Dakar\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SN.16','SN','{\"en\":\"Kaffrine\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SN.17','SN','{\"en\":\"Kédougou\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SN.18','SN','{\"en\":\"Sédhiou\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.12.2243943','SN','SN.12','{\"en\":\"Ziguinchor\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.11.2244181','SN','SN.11','{\"en\":\"Velingara Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.07.2244388','SN','SN.07','{\"en\":\"Tivaouane\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.07.2244804','SN','SN.07','{\"en\":\"Thiès\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.05.2244993','SN','SN.05','{\"en\":\"Tambacounda Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.18.2245705','SN','SN.18','{\"en\":\"Sédhiou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.14.2246656','SN','SN.14','{\"en\":\"Podor\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.12.2246902','SN','SN.12','{\"en\":\"Oussouye\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.10.2247158','SN','SN.10','{\"en\":\"Nioro du Rip\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.07.2248478','SN','SN.07','{\"en\":\"Mbour\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.03.2248699','SN','SN.03','{\"en\":\"Mbacké\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.13.2249224','SN','SN.13','{\"en\":\"Louga Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.13.2249283','SN','SN.13','{\"en\":\"Linguere Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.17.2250648','SN','SN.17','{\"en\":\"Kédougou Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.13.2250660','SN','SN.13','{\"en\":\"Kebemer Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.10.2250807','SN','SN.10','{\"en\":\"Kaolack\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.16.2251008','SN','SN.16','{\"en\":\"Kaffrine Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.09.2251492','SN','SN.09','{\"en\":\"Gossas\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.09.2251792','SN','SN.09','{\"en\":\"Foundiougne\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.03.2252312','SN','SN.03','{\"en\":\"Diourbel\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.14.2253376','SN','SN.14','{\"en\":\"Dagana Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.12.2253903','SN','SN.12','{\"en\":\"Bignona\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.03.2254315','SN','SN.03','{\"en\":\"Bambey\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.05.2254443','SN','SN.05','{\"en\":\"Bakel\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.11.7670821','SN','SN.11','{\"en\":\"Kolda Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.09.7670866','SN','SN.09','{\"en\":\"Fatick Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.15.7670870','SN','SN.15','{\"en\":\"Matam Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.01.7732977','SN','SN.01','{\"en\":\"Dakar Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.01.7732979','SN','SN.01','{\"en\":\"Pikine Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.01.7733009','SN','SN.01','{\"en\":\"Rufisque Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.15.9166367','SN','SN.15','{\"en\":\"Kanel Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.01.9180011','SN','SN.01','{\"en\":\"Guédiawaye Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.18.10402310','SN','SN.18','{\"en\":\"Goudomp Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.15.10778597','SN','SN.15','{\"en\":\"Département de Ranérou Ferlo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.10.10778869','SN','SN.10','{\"en\":\"Département de Guinguinéo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.16.10778870','SN','SN.16','{\"en\":\"Birkelane\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.16.10778871','SN','SN.16','{\"en\":\"Malem Hoddar\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.16.10778872','SN','SN.16','{\"en\":\"Koungheul\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.05.10778873','SN','SN.05','{\"en\":\"Koumpentoum\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.05.10778874','SN','SN.05','{\"en\":\"Goudiry\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.17.10778875','SN','SN.17','{\"en\":\"Département de Salémata\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.17.10779432','SN','SN.17','{\"en\":\"Saraya\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.11.10779433','SN','SN.11','{\"en\":\"Département de Médina Yoro Foulah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.18.10779434','SN','SN.18','{\"en\":\"Bounkiling\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SN.14.11429067','SN','SN.14','{\"en\":\"Saint-Louis Department\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Ziguinchor\"}',-16.27,12.57,'P','PPLA','SN.12',NULL,159778,'Africa/Dakar',1,'2016-12-02 23:00:00','2016-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Vélingara\"}',-14.12,13.15,'P','PPL','SN.11',NULL,22441,'Africa/Dakar',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Touba\"}',-15.88,14.85,'P','PPL','SN.03',NULL,529176,'Africa/Dakar',1,'2012-07-13 23:00:00','2012-07-13 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Tionk Essil\"}',-16.52,12.79,'P','PPL','SN.12',NULL,8151,'Africa/Dakar',1,'2006-01-26 23:00:00','2006-01-26 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Tiébo\"}',-16.23,14.63,'P','PPL','SN.03',NULL,100289,'Africa/Dakar',1,'2006-01-16 23:00:00','2006-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Tiadiaye\"}',-16.70,14.42,'P','PPL','SN.07',NULL,10853,'Africa/Dakar',1,'2018-11-29 23:00:00','2018-11-29 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Thiès Nones\"}',-16.97,14.78,'P','PPL','SN.07',NULL,252320,'Africa/Dakar',1,'2018-07-03 23:00:00','2018-07-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Thiès\"}',-16.93,14.79,'P','PPLA2','SN.07',NULL,320000,'Africa/Dakar',1,'2017-11-18 23:00:00','2017-11-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Tambacounda\"}',-13.67,13.77,'P','PPLA','SN.05',NULL,78800,'Africa/Dakar',1,'2021-03-09 23:00:00','2021-03-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Sokone\"}',-16.37,13.88,'P','PPL','SN.09',NULL,11680,'Africa/Dakar',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Sémé\"}',-12.94,15.19,'P','PPL','SN.15',NULL,5075,'Africa/Dakar',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Sédhiou\"}',-15.56,12.71,'P','PPLA','SN.18',NULL,19702,'Africa/Dakar',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Saint-Louis\"}',-16.49,16.02,'P','PPLA','SN.14',NULL,176000,'Africa/Dakar',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Rosso\"}',-15.80,16.42,'P','PPL','SN.14',NULL,9923,'Africa/Dakar',1,'2013-10-29 23:00:00','2013-10-29 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Richard-Toll\"}',-15.70,16.46,'P','PPL','SN.14',NULL,44752,'Africa/Dakar',1,'2017-06-04 23:00:00','2017-06-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Pout\"}',-17.06,14.77,'P','PPL','SN.07',NULL,17752,'Africa/Dakar',1,'2018-11-29 23:00:00','2018-11-29 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Pourham\"}',-16.42,14.35,'P','PPL','SN.09',NULL,24146,'Africa/Dakar',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Pikine\"}',-17.39,14.76,'P','PPL','SN.01',NULL,874062,'Africa/Dakar',1,'2012-12-04 23:00:00','2012-12-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Passi\"}',-16.27,13.98,'P','PPL','SN.09',NULL,6367,'Africa/Dakar',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Ouro Sogui\"}',-13.32,15.61,'P','PPL','SN.15',NULL,14888,'Africa/Dakar',1,'2013-02-07 23:00:00','2013-02-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Waoundé\"}',-12.87,15.26,'P','PPL','SN.15',NULL,9085,'Africa/Dakar',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Nioro du Rip\"}',-15.80,13.75,'P','PPL','SN.10',NULL,20711,'Africa/Dakar',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Nguékhokh\"}',-17.00,14.51,'P','PPL','SN.07',NULL,17885,'Africa/Dakar',1,'2018-11-29 23:00:00','2018-11-29 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Ndofane\"}',-15.93,13.92,'P','PPL','SN.10',NULL,9946,'Africa/Dakar',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Ndioum\"}',-14.65,16.51,'P','PPL','SN.14',NULL,13198,'Africa/Dakar',1,'2018-11-29 23:00:00','2018-11-29 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Ndibène Dahra\"}',-15.48,15.33,'P','PPL','SN.13',NULL,27741,'Africa/Dakar',1,'2006-01-16 23:00:00','2006-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Mékhé\"}',-16.62,15.11,'P','PPL','SN.07',NULL,19242,'Africa/Dakar',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Mbaké\"}',-15.91,14.79,'P','PPL','SN.03',NULL,74100,'Africa/Dakar',1,'2007-10-31 23:00:00','2007-10-31 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Matam\"}',-13.26,15.66,'P','PPLA','SN.15',NULL,15306,'Africa/Dakar',1,'2013-08-09 23:00:00','2013-08-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Marsassoum\"}',-15.98,12.83,'P','PPL','SN.11',NULL,6817,'Africa/Dakar',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Louga\"}',-16.22,15.62,'P','PPLA','SN.13',NULL,67154,'Africa/Dakar',1,'2013-08-05 23:00:00','2013-08-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Koungheul\"}',-14.80,13.98,'P','PPL','SN.16',NULL,14725,'Africa/Dakar',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Kolda\"}',-14.94,12.89,'P','PPLA','SN.11',NULL,58809,'Africa/Dakar',1,'2016-12-02 23:00:00','2016-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Khombole\"}',-16.70,14.77,'P','PPL','SN.07',NULL,12061,'Africa/Dakar',1,'2018-11-29 23:00:00','2018-11-29 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Kédougou\"}',-12.18,12.56,'P','PPLA','SN.17',NULL,17922,'Africa/Dakar',1,'2017-06-04 23:00:00','2017-06-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Kayar\"}',-17.12,14.92,'P','PPL','SN.07',NULL,17193,'Africa/Dakar',1,'2012-12-04 23:00:00','2012-12-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Kaolack\"}',-16.07,14.15,'P','PPLA','SN.10',NULL,172305,'Africa/Dakar',1,'2016-12-08 23:00:00','2016-12-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Kanel\"}',-13.18,15.49,'P','PPL','SN.15',NULL,10165,'Africa/Dakar',1,'2018-11-29 23:00:00','2018-11-29 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Kaffrine\"}',-15.55,14.11,'P','PPLA','SN.16',NULL,28396,'Africa/Dakar',1,'2013-08-05 23:00:00','2013-08-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Joal-Fadiout\"}',-16.83,14.17,'P','PPL','SN.07',NULL,36735,'Africa/Dakar',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Guinguinéo\"}',-15.95,14.27,'P','PPL','SN.09',NULL,15395,'Africa/Dakar',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Guéoul\"}',-16.35,15.48,'P','PPL','SN.13',NULL,10918,'Africa/Dakar',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Goléré\"}',-14.10,16.26,'P','PPL','SN.14',NULL,5461,'Africa/Dakar',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Gandiaye\"}',-16.27,14.23,'P','PPL','SN.10',NULL,9894,'Africa/Dakar',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Foundiougne\"}',-16.47,14.13,'P','PPL','SN.09',NULL,5306,'Africa/Dakar',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Fatick\"}',-16.41,14.33,'P','PPLA','SN.09',NULL,0,'Africa/Dakar',1,'2018-11-29 23:00:00','2018-11-29 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Diourbel\"}',-16.24,14.65,'P','PPLA','SN.03',NULL,0,'Africa/Dakar',1,'2015-03-30 23:00:00','2015-03-30 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Diofior\"}',-16.67,14.18,'P','PPL','SN.09',NULL,8645,'Africa/Dakar',1,'2018-12-03 23:00:00','2018-12-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Diawara\"}',-12.54,15.02,'P','PPL','SN.15',NULL,8112,'Africa/Dakar',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Dara\"}',-15.48,15.35,'P','PPL','SN.13',NULL,30000,'Africa/Dakar',1,'2010-01-28 23:00:00','2010-01-28 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Dakar\"}',-17.44,14.69,'P','PPLC','SN.01',NULL,2476400,'Africa/Dakar',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Bignona\"}',-16.23,12.81,'P','PPL','SN.12',NULL,26237,'Africa/Dakar',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"Mermoz Boabab\"}',-17.48,14.71,'P','PPL','SN.01',NULL,15000,'Africa/Dakar',1,'2011-10-03 23:00:00','2011-10-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SN','{\"en\":\"N’diareme limamoulaye\"}',-17.38,14.78,'P','PPL','SN.01',NULL,35171,'Africa/Dakar',1,'2016-03-14 23:00:00','2016-03-14 23:00:00');
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
