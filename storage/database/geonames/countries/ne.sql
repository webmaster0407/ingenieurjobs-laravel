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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('NE.07','NE','{\"en\":\"Zinder\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('NE.06','NE','{\"en\":\"Tahoua\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('NE.04','NE','{\"en\":\"Maradi\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('NE.03','NE','{\"en\":\"Dosso\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('NE.02','NE','{\"en\":\"Diffa\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('NE.01','NE','{\"en\":\"Agadez\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('NE.09','NE','{\"en\":\"Tillabéri\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('NE.08','NE','{\"en\":\"Niamey\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.04.2438821','NE','NE.04','{\"en\":\"Département de Tessaoua\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.06.2438973','NE','NE.06','{\"en\":\"Département de Tchin-Tabaraden\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.07.2439154','NE','NE.07','{\"en\":\"Département de Tânout\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.06.2439375','NE','NE.06','{\"en\":\"Département de Tahoua\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.09.2439811','NE','NE.09','{\"en\":\"Département de Say\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.09.2440370','NE','NE.09','{\"en\":\"Département de Ouallam\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.08.2440482','NE','NE.08','{\"en\":\"Ville de Niamey\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.02.2440494','NE','NE.02','{\"en\":\"Département de Nguigmi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.04.2441193','NE','NE.04','{\"en\":\"Département de Mayahi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.07.2441216','NE','NE.07','{\"en\":\"Département de Kantché\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.04.2441290','NE','NE.04','{\"en\":\"Ville de Maradi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.02.2441446','NE','NE.02','{\"en\":\"Département de Maïné-Soroa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.06.2441528','NE','NE.06','{\"en\":\"Département de Madaoua\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.03.2441629','NE','NE.03','{\"en\":\"Département de Loga\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.06.2442477','NE','NE.06','{\"en\":\"Département de Keïta\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.06.2443303','NE','NE.06','{\"en\":\"Département d\' Illéla\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.07.2444218','NE','NE.07','{\"en\":\"Département de Gouré\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.03.2444487','NE','NE.03','{\"en\":\"Département de Gaya\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.09.2444994','NE','NE.09','{\"en\":\"Département de Filingué\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.03.2445487','NE','NE.03','{\"en\":\"Département de Dosso\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.03.2445552','NE','NE.03','{\"en\":\"Département de Dogondoutchi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.02.2445703','NE','NE.02','{\"en\":\"Département de Diffa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.04.2446266','NE','NE.04','{\"en\":\"Département de Dakoro\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.06.2446465','NE','NE.06','{\"en\":\"Département de Bouza\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.06.2446752','NE','NE.06','{\"en\":\"Département de Birni Nkonni\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.01.2446795','NE','NE.01','{\"en\":\"Département de Bilma\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.04.8299475','NE','NE.04','{\"en\":\"Guidan Roumdji Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.09.8334576','NE','NE.09','{\"en\":\"Tillaberi Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.09.8334577','NE','NE.09','{\"en\":\"Tera Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.09.8334578','NE','NE.09','{\"en\":\"Kollo Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.01.8624000','NE','NE.01','{\"en\":\"Arlit\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.01.8624001','NE','NE.01','{\"en\":\"Département de Tchirozérine\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.04.8624179','NE','NE.04','{\"en\":\"Département d’Aguié\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.04.8624180','NE','NE.04','{\"en\":\"Madarounfa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.06.8624181','NE','NE.06','{\"en\":\"Abalak\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.07.10943048','NE','NE.07','{\"en\":\"Mirriah Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.07.11204206','NE','NE.07','{\"en\":\"Magaria Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.03.11204211','NE','NE.03','{\"en\":\"Boboye Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.04.11996004','NE','NE.04','{\"en\":\"Bermo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.09.11996005','NE','NE.09','{\"en\":\"Bankilaré\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.04.11996006','NE','NE.04','{\"en\":\"Gazaoua\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.01.11996007','NE','NE.01','{\"en\":\"Ingall\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.03.11996008','NE','NE.03','{\"en\":\"Dioundiou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.01.11996009','NE','NE.01','{\"en\":\"Aderbissinat\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.02.11996010','NE','NE.02','{\"en\":\"Goudoumaria\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.07.11996011','NE','NE.07','{\"en\":\"Ville de Zinder\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.09.11996013','NE','NE.09','{\"en\":\"Banibangou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.07.11996014','NE','NE.07','{\"en\":\"Belbedji\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.09.11996015','NE','NE.09','{\"en\":\"Abala\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.09.11996016','NE','NE.09','{\"en\":\"Ayerou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.07.11996017','NE','NE.07','{\"en\":\"Damagaram Takaya\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.07.11996018','NE','NE.07','{\"en\":\"Dungass\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.02.11996019','NE','NE.02','{\"en\":\"Bosso\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.03.11996020','NE','NE.03','{\"en\":\"Falmey\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.09.11996021','NE','NE.09','{\"en\":\"Gothèye\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.01.11996022','NE','NE.01','{\"en\":\"Iferouane\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.07.11996023','NE','NE.07','{\"en\":\"Takeita\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.02.11996024','NE','NE.02','{\"en\":\"N\'Gourti\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.06.11996025','NE','NE.06','{\"en\":\"Tassara\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.07.11996026','NE','NE.07','{\"en\":\"Tesker\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.03.11996027','NE','NE.03','{\"en\":\"Tibiri\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.06.11996028','NE','NE.06','{\"en\":\"Tillia\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.09.11996029','NE','NE.09','{\"en\":\"Torodi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.06.11996030','NE','NE.06','{\"en\":\"Ville de Tahoua\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.09.11996031','NE','NE.09','{\"en\":\"Balleyara\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.06.11996032','NE','NE.06','{\"en\":\"Bagaroua\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NE.06.11996034','NE','NE.06','{\"en\":\"Malbaza\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Birni N Konni\"}',5.25,13.80,'P','PPL','NE.06',NULL,48103,'Africa/Niamey',1,'2013-05-11 23:00:00','2013-05-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Zinder\"}',8.99,13.81,'P','PPLA','NE.07',NULL,191424,'Africa/Niamey',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Tillabéri\"}',1.45,14.21,'P','PPLA','NE.09',NULL,19262,'Africa/Niamey',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Tibiri\"}',7.05,13.56,'P','PPL','NE.04',NULL,20019,'Africa/Niamey',1,'2006-01-16 23:00:00','2006-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Tessaoua\"}',7.99,13.76,'P','PPLA2','NE.04',NULL,35775,'Africa/Niamey',1,'2013-10-05 23:00:00','2013-10-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Téra\"}',0.75,14.01,'P','PPLA2','NE.09',NULL,21095,'Africa/Niamey',1,'2013-10-05 23:00:00','2013-10-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Tchintabaraden\"}',5.80,15.90,'P','PPLA2','NE.06',NULL,8851,'Africa/Niamey',1,'2014-05-28 23:00:00','2014-05-28 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Tanout\"}',8.89,14.97,'P','PPLA2','NE.07',NULL,15204,'Africa/Niamey',1,'2013-10-05 23:00:00','2013-10-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Tahoua\"}',5.27,14.89,'P','PPLA','NE.06',NULL,80425,'Africa/Niamey',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Say\"}',2.37,13.10,'P','PPLA2','NE.09',NULL,10387,'Africa/Niamey',1,'2013-10-05 23:00:00','2013-10-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Ouallam\"}',2.09,14.32,'P','PPLA2','NE.09',NULL,7500,'Africa/Niamey',1,'2013-10-05 23:00:00','2013-10-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Niamey\"}',2.11,13.51,'P','PPLC','NE.08',NULL,774235,'Africa/Niamey',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Nguigmi\"}',13.11,14.25,'P','PPLA2','NE.02',NULL,17897,'Africa/Niamey',1,'2013-10-05 23:00:00','2013-10-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Mirriah\"}',9.15,13.71,'P','PPLA2','NE.07',NULL,20724,'Africa/Niamey',1,'2013-10-05 23:00:00','2013-10-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Mayahi\"}',7.67,13.96,'P','PPLA2','NE.04',NULL,22183,'Africa/Niamey',1,'2013-10-05 23:00:00','2013-10-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Matamey\"}',8.47,13.42,'P','PPL','NE.07',NULL,16844,'Africa/Niamey',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Maradi\"}',7.10,13.50,'P','PPLA','NE.04','NE.04.2441290',163487,'Africa/Niamey',1,'2019-01-07 23:00:00','2019-01-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Maïné Soroa\"}',12.02,13.21,'P','PPLA2','NE.02',NULL,10699,'Africa/Niamey',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Magaria\"}',8.91,13.00,'P','PPLA2','NE.07',NULL,19419,'Africa/Niamey',1,'2013-10-05 23:00:00','2013-10-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Madarounfa\"}',7.16,13.31,'P','PPLA2','NE.04',NULL,9791,'Africa/Niamey',1,'2013-10-05 23:00:00','2013-10-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Madaoua\"}',5.96,14.07,'P','PPLA2','NE.06',NULL,24804,'Africa/Niamey',1,'2013-10-05 23:00:00','2013-10-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Kollo\"}',2.34,13.30,'P','PPLA2','NE.09',NULL,10376,'Africa/Niamey',1,'2013-10-05 23:00:00','2013-10-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Keïta\"}',5.77,14.76,'P','PPLA2','NE.06',NULL,8960,'Africa/Niamey',1,'2013-10-05 23:00:00','2013-10-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Illéla\"}',5.24,14.46,'P','PPLA2','NE.06',NULL,16678,'Africa/Niamey',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Gouré\"}',10.27,13.98,'P','PPLA2','NE.07',NULL,14639,'Africa/Niamey',1,'2013-10-05 23:00:00','2013-10-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Gaya\"}',3.45,11.88,'P','PPLA2','NE.03',NULL,33051,'Africa/Niamey',1,'2013-10-05 23:00:00','2013-10-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Filingué\"}',3.32,14.35,'P','PPLA2','NE.09',NULL,11677,'Africa/Niamey',1,'2013-10-05 23:00:00','2013-10-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Dosso\"}',3.19,13.05,'P','PPLA','NE.03',NULL,49750,'Africa/Niamey',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Dogondoutchi\"}',4.03,13.64,'P','PPLA2','NE.03',NULL,31767,'Africa/Niamey',1,'2018-05-08 23:00:00','2018-05-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Diffa\"}',12.61,13.32,'P','PPLA','NE.02',NULL,27948,'Africa/Niamey',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Dakoro\"}',6.76,14.51,'P','PPLA2','NE.04',NULL,19798,'Africa/Niamey',1,'2013-10-05 23:00:00','2013-10-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Bouza\"}',6.04,14.42,'P','PPLA2','NE.06',NULL,7141,'Africa/Niamey',1,'2013-10-05 23:00:00','2013-10-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Ayorou\"}',0.92,14.73,'P','PPL','NE.09',NULL,26290,'Africa/Niamey',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Alaghsas\"}',8.02,17.02,'P','PPL','NE.01',NULL,88561,'Africa/Niamey',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Aguié\"}',7.78,13.51,'P','PPLA2','NE.04',NULL,13152,'Africa/Niamey',1,'2013-10-05 23:00:00','2013-10-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Agadez\"}',7.99,16.97,'P','PPLA','NE.01',NULL,124324,'Africa/Niamey',1,'2017-02-03 23:00:00','2017-02-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NE','{\"en\":\"Abalak\"}',6.28,15.45,'P','PPLA2','NE.06',NULL,13555,'Africa/Niamey',1,'2013-10-05 23:00:00','2013-10-05 23:00:00');
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
