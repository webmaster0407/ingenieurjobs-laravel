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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('HT.13','HT','{\"en\":\"Sud-Est\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('HT.12','HT','{\"en\":\"Sud\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('HT.11','HT','{\"en\":\"Ouest\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('HT.03','HT','{\"en\":\"Nord-Ouest\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('HT.10','HT','{\"en\":\"Nord-Est\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('HT.09','HT','{\"en\":\"Nord\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('HT.14','HT','{\"en\":\"GrandʼAnse\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('HT.07','HT','{\"en\":\"Centre\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('HT.06','HT','{\"en\":\"Artibonite\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('HT.15','HT','{\"en\":\"Nippes\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.10.3716114','HT','HT.10','{\"en\":\"Arrondissement de Vallières\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.10.3716223','HT','HT.10','{\"en\":\"Arrondissement du Trou du Nord\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.09.3717545','HT','HT.09','{\"en\":\"Sen Rafayèl\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.06.3717563','HT','HT.06','{\"en\":\"Arrondissement de Marmelade\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.06.3717587','HT','HT.06','{\"en\":\"Arrondissement de Saint-Marc\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.03.3717599','HT','HT.03','{\"en\":\"Arrondissement de Saint-Louis du Nord\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.12.3718404','HT','HT.12','{\"en\":\"Arrondissement de Port-Salut\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.03.3718419','HT','HT.03','{\"en\":\"Arrondissement de Port-de-Paix\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.11.3718425','HT','HT.11','{\"en\":\"Arrondissement de Port-au-Prince\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.09.3718665','HT','HT.09','{\"en\":\"Arrondissement de Plaisance\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.10.3719435','HT','HT.10','{\"en\":\"Wanament\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.03.3720764','HT','HT.03','{\"en\":\"Mòl Sen Nikola\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.07.3720809','HT','HT.07','{\"en\":\"Arrondissement de Mirebalais\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.15.3720823','HT','HT.15','{\"en\":\"Arrondissement de Miragoâne\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.09.3722122','HT','HT.09','{\"en\":\"Lenbe\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.11.3722285','HT','HT.11','{\"en\":\"Leyogàn\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.07.3722578','HT','HT.07','{\"en\":\"Arrondissement de Lascahobas\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.11.3723019','HT','HT.11','{\"en\":\"Lagonav\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.14.3723592','HT','HT.14','{\"en\":\"Jeremi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.13.3723778','HT','HT.13','{\"en\":\"Arrondissement de Jacmel\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.07.3723840','HT','HT.07','{\"en\":\"Arrondissement de Hinche\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.06.3724144','HT','HT.06','{\"en\":\"Arrondissement de Gros Morne\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.09.3724438','HT','HT.09','{\"en\":\"Grann Rivyè di Nò\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.06.3724695','HT','HT.06','{\"en\":\"Gonayiv\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.10.3725169','HT','HT.10','{\"en\":\"Fòlibète\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.06.3726539','HT','HT.06','{\"en\":\"Arrondissement de Dessalines\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.11.3727134','HT','HT.11','{\"en\":\"Arrondissement de Croix des Bouquets\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.12.3727295','HT','HT.12','{\"en\":\"Koto\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.14.3727381','HT','HT.14','{\"en\":\"Arrondissement de Corail\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.12.3727900','HT','HT.12','{\"en\":\"Chadonyè\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.07.3728053','HT','HT.07','{\"en\":\"Arrondissement de Cerca la Source\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.12.3728096','HT','HT.12','{\"en\":\"Arrondissement des Cayes\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.09.3728473','HT','HT.09','{\"en\":\"Okap\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.09.3729454','HT','HT.09','{\"en\":\"Oboy\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.13.3730361','HT','HT.13','{\"en\":\"Belans\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.15.3730801','HT','HT.15','{\"en\":\"Arrondissement de Baradères\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.13.3730910','HT','HT.13','{\"en\":\"Arrondissement de Bainet\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.11.3731086','HT','HT.11','{\"en\":\"Arcahaie\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.12.3731094','HT','HT.12','{\"en\":\"Arrondissement d\'Aquin\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.14.3731116','HT','HT.14','{\"en\":\"Ansdeno\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.15.3731122','HT','HT.15','{\"en\":\"Ansavo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('HT.09.3731232','HT','HT.09','{\"en\":\"Arrondissement de l\'Acul du Nord\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Verrettes\"}',-72.47,19.05,'P','PPL','HT.06','HT.06.3717587',48724,'America/Port-au-Prince',1,'2017-05-07 23:00:00','2017-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Trou du Nord\"}',-72.02,19.62,'P','PPL','HT.10','HT.10.3716223',10569,'America/Port-au-Prince',1,'2018-12-06 23:00:00','2018-12-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Thomazeau\"}',-72.09,18.65,'P','PPL','HT.11','HT.11.3727134',52017,'America/Port-au-Prince',1,'2018-12-06 23:00:00','2018-12-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Saint-Raphaël\"}',-72.20,19.44,'P','PPL','HT.09','HT.09.3717545',37739,'America/Port-au-Prince',1,'2017-05-07 23:00:00','2017-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Saint-Marc\"}',-72.69,19.11,'P','PPL','HT.06','HT.06.3717587',66226,'America/Port-au-Prince',1,'2018-12-05 23:00:00','2018-12-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Saint-Louis du Nord\"}',-72.72,19.93,'P','PPL','HT.03','HT.03.3717599',11849,'America/Port-au-Prince',1,'2018-12-05 23:00:00','2018-12-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Port-de-Paix\"}',-72.83,19.94,'P','PPLA','HT.03','HT.03.3718419',250000,'America/Port-au-Prince',1,'2019-03-24 23:00:00','2019-03-24 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Port-au-Prince\"}',-72.34,18.54,'P','PPLC','HT.11','HT.11.3718425',1234742,'America/Port-au-Prince',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Pignon\"}',-72.12,19.34,'P','PPL','HT.09','HT.09.3717545',6731,'America/Port-au-Prince',1,'2016-10-23 23:00:00','2016-10-23 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Tigwav\"}',-72.87,18.43,'P','PPL','HT.11','HT.11.3722285',117504,'America/Port-au-Prince',1,'2017-04-06 23:00:00','2017-04-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Pétionville\"}',-72.29,18.51,'P','PPL','HT.11','HT.11.3718425',283052,'America/Port-au-Prince',1,'2016-01-29 23:00:00','2016-01-29 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Ouanaminthe\"}',-71.72,19.55,'P','PPL','HT.10','HT.10.3719435',10118,'America/Port-au-Prince',1,'2017-03-04 23:00:00','2017-03-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Mirebalais\"}',-72.10,18.83,'P','PPL','HT.07','HT.07.3720809',9082,'America/Port-au-Prince',1,'2017-05-07 23:00:00','2017-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Miragoâne\"}',-73.09,18.45,'P','PPLA','HT.15','HT.15.3720823',89202,'America/Port-au-Prince',1,'2019-03-24 23:00:00','2019-03-24 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Milot\"}',-72.21,19.61,'P','PPL','HT.09','HT.09.3731232',5534,'America/Port-au-Prince',1,'2017-05-07 23:00:00','2017-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Mayisad\"}',-72.14,19.18,'P','PPL','HT.07','HT.07.3723840',5204,'America/Port-au-Prince',1,'2017-05-07 23:00:00','2017-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Lenbe\"}',-72.40,19.71,'P','PPL','HT.09','HT.09.3722122',32645,'America/Port-au-Prince',1,'2017-05-07 23:00:00','2017-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Les Anglais\"}',-74.22,18.31,'P','PPL','HT.12','HT.12.3727900',8247,'America/Port-au-Prince',1,'2018-12-05 23:00:00','2018-12-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Léogâne\"}',-72.63,18.51,'P','PPL','HT.11','HT.11.3722285',134190,'America/Port-au-Prince',1,'2020-06-10 23:00:00','2020-06-10 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Lascahobas\"}',-71.94,18.83,'P','PPL','HT.07','HT.07.3722578',7574,'America/Port-au-Prince',1,'2017-04-06 23:00:00','2017-04-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Kenscoff\"}',-72.28,18.45,'P','PPL','HT.11','HT.11.3718425',42175,'America/Port-au-Prince',1,'2017-04-06 23:00:00','2017-04-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Jérémie\"}',-74.12,18.65,'P','PPLA','HT.14','HT.14.3723592',97503,'America/Port-au-Prince',1,'2016-01-29 23:00:00','2016-01-29 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Jean-Rabel\"}',-73.19,19.85,'P','PPL','HT.03','HT.03.3720764',5419,'America/Port-au-Prince',1,'2017-03-04 23:00:00','2017-03-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Jacmel\"}',-72.54,18.23,'P','PPLA','HT.13','HT.13.3723778',137966,'America/Port-au-Prince',1,'2016-01-29 23:00:00','2016-01-29 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Hinche\"}',-72.02,19.15,'P','PPLA','HT.07','HT.07.3723840',18590,'America/Port-au-Prince',1,'2016-01-29 23:00:00','2016-01-29 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Gros Morne\"}',-72.68,19.67,'P','PPL','HT.06','HT.06.3724144',7294,'America/Port-au-Prince',1,'2018-12-04 23:00:00','2018-12-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Gressier\"}',-72.53,18.54,'P','PPL','HT.11',NULL,25947,'America/Port-au-Prince',1,'2017-04-06 23:00:00','2017-04-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Grangwav\"}',-72.77,18.43,'P','PPL','HT.11','HT.11.3722285',49288,'America/Port-au-Prince',1,'2017-04-06 23:00:00','2017-04-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Grande Rivière du Nord\"}',-72.17,19.58,'P','PPL','HT.09','HT.09.3724438',8836,'America/Port-au-Prince',1,'2020-06-10 23:00:00','2020-06-10 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Gonaïves\"}',-72.69,19.45,'P','PPLA','HT.06','HT.06.3724695',84961,'America/Port-au-Prince',1,'2019-03-24 23:00:00','2019-03-24 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Fort Liberté\"}',-71.84,19.66,'P','PPLA','HT.10','HT.10.3725169',11465,'America/Port-au-Prince',1,'2020-06-10 23:00:00','2020-06-10 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Fond Parisien\"}',-71.98,18.51,'P','PPL','HT.11','HT.11.3727134',18256,'America/Port-au-Prince',1,'2017-04-06 23:00:00','2017-04-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Dondon\"}',-72.24,19.53,'P','PPL','HT.09','HT.09.3717545',5029,'America/Port-au-Prince',1,'2017-05-07 23:00:00','2017-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Dessalines\"}',-72.52,19.26,'P','PPL','HT.06','HT.06.3726539',12288,'America/Port-au-Prince',1,'2018-12-04 23:00:00','2018-12-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Désarmes\"}',-72.39,18.99,'P','PPL','HT.06','HT.06.3717587',15594,'America/Port-au-Prince',1,'2017-05-07 23:00:00','2017-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Delmas 73\"}',-72.30,18.54,'P','PPL','HT.11','HT.11.3718425',382920,'America/Port-au-Prince',1,'2018-12-04 23:00:00','2018-12-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Dame-Marie\"}',-74.42,18.56,'P','PPL','HT.14','HT.14.3731116',6036,'America/Port-au-Prince',1,'2016-01-29 23:00:00','2016-01-29 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Croix-des-Bouquets\"}',-72.23,18.58,'P','PPLA2','HT.11','HT.11.3727134',229127,'America/Port-au-Prince',1,'2019-07-09 23:00:00','2019-07-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Cornillon\"}',-71.95,18.68,'P','PPL','HT.11','HT.11.3727134',7572,'America/Port-au-Prince',1,'2018-12-04 23:00:00','2018-12-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Les Cayes\"}',-73.75,18.19,'P','PPLA','HT.12','HT.12.3728096',125799,'America/Port-au-Prince',1,'2016-01-29 23:00:00','2016-01-29 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Carrefour\"}',-72.40,18.54,'P','PPLX','HT.11','HT.11.3718425',442156,'America/Port-au-Prince',1,'2018-12-04 23:00:00','2018-12-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Okap\"}',-72.20,19.76,'P','PPLA','HT.09','HT.09.3728473',134815,'America/Port-au-Prince',1,'2016-10-11 23:00:00','2016-10-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Aquin\"}',-73.39,18.28,'P','PPL','HT.12','HT.12.3731094',5246,'America/Port-au-Prince',1,'2017-04-06 23:00:00','2017-04-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Anse à Galets\"}',-72.87,18.83,'P','PPL','HT.11','HT.11.3723019',7178,'America/Port-au-Prince',1,'2020-06-10 23:00:00','2020-06-10 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('HT','{\"en\":\"Ti Port-de-Paix\"}',-72.83,19.93,'P','PPL','HT.03','HT.03.3718419',34657,'America/Port-au-Prince',1,'2016-01-29 23:00:00','2016-01-29 23:00:00');
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
