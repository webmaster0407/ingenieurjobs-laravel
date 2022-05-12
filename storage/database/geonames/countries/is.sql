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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IS.41','IS','{\"en\":\"Northwest\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IS.40','IS','{\"en\":\"Northeast\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IS.38','IS','{\"en\":\"East\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IS.42','IS','{\"en\":\"South\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IS.39','IS','{\"en\":\"Capital Region\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IS.43','IS','{\"en\":\"Southern Peninsula\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IS.45','IS','{\"en\":\"West\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('IS.44','IS','{\"en\":\"Westfjords\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.38.7502','IS','IS.38','{\"en\":\"Vopnafjarðarhreppur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.40.6611','IS','IS.40','{\"en\":\"Tjörneshreppur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.40.6601','IS','IS.40','{\"en\":\"Svalbarðsstrandarhreppur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.40.6706','IS','IS.40','{\"en\":\"Svalbarðshreppur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.40.6607','IS','IS.40','{\"en\":\"Skútustaðahreppur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.42.8509','IS','IS.42','{\"en\":\"Skaftárhreppur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.38.7000','IS','IS.38','{\"en\":\"Seyðisfjarðarkaupstaður\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.40.6602','IS','IS.40','{\"en\":\"Grýtubakkahreppur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.38.7505','IS','IS.38','{\"en\":\"Fljótsdalshreppur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.40.6400','IS','IS.40','{\"en\":\"Dalvíkurbyggð\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.38.7509','IS','IS.38','{\"en\":\"Borgarfjarðarhreppur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.40.6000','IS','IS.40','{\"en\":\"Akureyrarkaupstaður\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.41.5706','IS','IS.41','{\"en\":\"Akrahreppur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.41.5200','IS','IS.41','{\"en\":\"Sveitarfélagið Skagafjörður\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.40.6513','IS','IS.40','{\"en\":\"Eyjafjarðarsveit\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.40.6612','IS','IS.40','{\"en\":\"Þingeyjarsveit\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.38.7617','IS','IS.38','{\"en\":\"Djúpavogshreppur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.38.7300','IS','IS.38','{\"en\":\"Fjarðabyggð\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.38.7708','IS','IS.38','{\"en\":\"Sveitarfélagið Hornafjörður\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.42.8508','IS','IS.42','{\"en\":\"Mýrdalshreppur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.42.8613','IS','IS.42','{\"en\":\"Rangárþing Eystra\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.42.8614','IS','IS.42','{\"en\":\"Rangárþing Ytra\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.42.8720','IS','IS.42','{\"en\":\"Skeiða- og Gnúpverjahreppur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.42.8000','IS','IS.42','{\"en\":\"Vestmannaeyjabær\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.44.4604','IS','IS.44','{\"en\":\"Tálknafjarðarhreppur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.44.4803','IS','IS.44','{\"en\":\"Súðavíkurhreppur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.45.3506','IS','IS.45','{\"en\":\"Skorradalshreppur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.41.5611','IS','IS.41','{\"en\":\"Skagabyggð\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.39.1100','IS','IS.39','{\"en\":\"Seltjarnarneskaupstaður\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.39.0000','IS','IS.39','{\"en\":\"Reykjavíkurborg\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.44.4502','IS','IS.44','{\"en\":\"Reykhólahreppur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.42.8717','IS','IS.42','{\"en\":\"Sveitarfélagið Ölfus\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.39.1604','IS','IS.39','{\"en\":\"Mosfellsbaer\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.39.1000','IS','IS.39','{\"en\":\"Kópavogsbær\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.39.1606','IS','IS.39','{\"en\":\"Kjósarhreppur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.44.4902','IS','IS.44','{\"en\":\"Kaldrananeshreppur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.44.4200','IS','IS.44','{\"en\":\"Ísafjarðarbær\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.42.8716','IS','IS.42','{\"en\":\"Hveragerðisbær\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.42.8710','IS','IS.42','{\"en\":\"Hrunamannahreppur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.45.3710','IS','IS.45','{\"en\":\"Helgafellssveit\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.39.1400','IS','IS.39','{\"en\":\"Hafnarfjarðarkaupstaður\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.39.1300','IS','IS.39','{\"en\":\"Garðabær\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.45.3713','IS','IS.45','{\"en\":\"Eyja- og Miklaholtshreppur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.45.3609','IS','IS.45','{\"en\":\"Borgarbyggð\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.42.8610','IS','IS.42','{\"en\":\"Ásahreppur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.44.4901','IS','IS.44','{\"en\":\"Árneshreppur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.45.3000','IS','IS.45','{\"en\":\"Akraneskaupstaður\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.41.5604','IS','IS.41','{\"en\":\"Blönduósbær\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.44.4100','IS','IS.44','{\"en\":\"Bolungarvíkurkaupstaður\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.45.3811','IS','IS.45','{\"en\":\"Dalabyggð\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.45.3709','IS','IS.45','{\"en\":\"Grundarfjarðarbær\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.45.3714','IS','IS.45','{\"en\":\"Snæfellsbær\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.41.5508','IS','IS.41','{\"en\":\"Húnaþing Vestra\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.43.2000','IS','IS.43','{\"en\":\"Reykjanesbær\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.44.4607','IS','IS.44','{\"en\":\"Vesturbyggð\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.42.8721','IS','IS.42','{\"en\":\"Bláskógabyggð\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.42.8719','IS','IS.42','{\"en\":\"Grímsnes- og Grafningshreppur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.42.8200','IS','IS.42','{\"en\":\"Sveitarfélagið Árborg\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.40.6709','IS','IS.40','{\"en\":\"Langanesbyggð\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.38.7620','IS','IS.38','{\"en\":\"Fljótsdalshérað\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.40.6100','IS','IS.40','{\"en\":\"Norðurþing\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.40.6515','IS','IS.40','{\"en\":\"Hörgársveit\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.40.6250','IS','IS.40','{\"en\":\"Fjallabyggð\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.41.5609','IS','IS.41','{\"en\":\"Sveitarfélagið Skagaströnd\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.44.4911','IS','IS.44','{\"en\":\"Strandabyggð\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.45.3511','IS','IS.45','{\"en\":\"Hvalfjarðarsveit\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.43.2506','IS','IS.43','{\"en\":\"Sveitarfélagið Vogar\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.43.2300','IS','IS.43','{\"en\":\"Grindavíkurbær\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.42.8722','IS','IS.42','{\"en\":\"Flóahreppur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.41.5612','IS','IS.41','{\"en\":\"Húnavatnshreppur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.45.3711','IS','IS.45','{\"en\":\"Stykkishólmsbær\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('IS.43.2507','IS','IS.43','{\"en\":\"Suðurnesjabær\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IS','{\"en\":\"Sauðárkrókur\"}',-19.64,65.75,'P','PPLA','IS.41','IS.41.5200',2575,'Atlantic/Reykjavik',1,'2017-09-16 23:00:00','2017-09-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IS','{\"en\":\"Egilsstaðir\"}',-14.39,65.27,'P','PPLA','IS.38','IS.38.7620',2303,'Atlantic/Reykjavik',1,'2016-12-02 23:00:00','2016-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IS','{\"en\":\"Akureyri\"}',-18.09,65.68,'P','PPLA','IS.40','IS.40.6000',17693,'Atlantic/Reykjavik',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IS','{\"en\":\"Selfoss\"}',-21.00,63.93,'P','PPLA','IS.42','IS.42.8200',6510,'Atlantic/Reykjavik',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IS','{\"en\":\"Reykjavík\"}',-21.90,64.14,'P','PPLC','IS.39','IS.39.0000',118918,'Atlantic/Reykjavik',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IS','{\"en\":\"Mosfellsbær\"}',-21.70,64.17,'P','PPL','IS.39','IS.39.1604',8651,'Atlantic/Reykjavik',1,'2016-12-02 23:00:00','2016-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IS','{\"en\":\"Kópavogur\"}',-21.91,64.11,'P','PPL','IS.39','IS.39.1000',31719,'Atlantic/Reykjavik',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IS','{\"en\":\"Keflavík\"}',-22.56,64.00,'P','PPLA','IS.43','IS.43.2000',0,'Atlantic/Reykjavik',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IS','{\"en\":\"Ísafjörður\"}',-23.13,66.07,'P','PPLA','IS.44','IS.44.4200',2624,'Atlantic/Reykjavik',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IS','{\"en\":\"Hafnarfjörður\"}',-21.94,64.07,'P','PPL','IS.39','IS.39.1400',26808,'Atlantic/Reykjavik',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IS','{\"en\":\"Garðabær\"}',-21.92,64.09,'P','PPL','IS.39','IS.39.1300',11421,'Atlantic/Reykjavik',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IS','{\"en\":\"Borgarnes\"}',-21.92,64.54,'P','PPLA','IS.45','IS.45.3609',1759,'Atlantic/Reykjavik',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('IS','{\"en\":\"Akranes\"}',-22.07,64.32,'P','PPL','IS.45','IS.45.3000',7411,'Atlantic/Reykjavik',1,'2022-01-13 23:00:00','2022-01-13 23:00:00');
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
