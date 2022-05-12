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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ML.08','ML','{\"en\":\"Tombouctou\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ML.06','ML','{\"en\":\"Sikasso\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ML.05','ML','{\"en\":\"Ségou\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ML.04','ML','{\"en\":\"Mopti\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ML.07','ML','{\"en\":\"Koulikoro\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ML.03','ML','{\"en\":\"Kayes\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ML.09','ML','{\"en\":\"Gao\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ML.01','ML','{\"en\":\"Bamako\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ML.10','ML','{\"en\":\"Kidal\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ML.12070575','ML','{\"en\":\"Taoudénit\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ML.12070577','ML','{\"en\":\"Ménaka\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.04.7670549','ML','ML.04','{\"en\":\"Douentza Cercle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.08.7670552','ML','ML.08','{\"en\":\"Gourma-Rharous Cercle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.09.7670553','ML','ML.09','{\"en\":\"Gao Cercle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.06.7670554','ML','ML.06','{\"en\":\"Koutiala Cercle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.07.7701199','ML','ML.07','{\"en\":\"Kati Cercle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.07.7701200','ML','ML.07','{\"en\":\"Dioila\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.05.7701201','ML','ML.05','{\"en\":\"Baroueli\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.05.7701202','ML','ML.05','{\"en\":\"Segou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.10.7701465','ML','ML.10','{\"en\":\"Kidal\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.08.7701470','ML','ML.08','{\"en\":\"Tombouctou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.08.7701473','ML','ML.08','{\"en\":\"Dire\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.03.7701481','ML','ML.03','{\"en\":\"Kayes Cercle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.04.7701484','ML','ML.04','{\"en\":\"Mopti Cercle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.04.7701493','ML','ML.04','{\"en\":\"Bankass Cercle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.04.7701494','ML','ML.04','{\"en\":\"Koro Cercle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.05.7701496','ML','ML.05','{\"en\":\"Bla\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.05.7701500','ML','ML.05','{\"en\":\"Tominian\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.03.7701501','ML','ML.03','{\"en\":\"Kita Cercle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.06.7701502','ML','ML.06','{\"en\":\"Bougouni Cercle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.07.7701503','ML','ML.07','{\"en\":\"Koulikoro\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.06.7729902','ML','ML.06','{\"en\":\"Sikasso Cercle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.03.8261489','ML','ML.03','{\"en\":\"Diema Cercle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.07.8261491','ML','ML.07','{\"en\":\"Kolokani Cercle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.07.8261492','ML','ML.07','{\"en\":\"Banamba Cercle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.07.8261493','ML','ML.07','{\"en\":\"Nara Cercle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.03.8261494','ML','ML.03','{\"en\":\"Nioro Cercle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.04.8299587','ML','ML.04','{\"en\":\"Youwarou Cercle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.08.8299588','ML','ML.08','{\"en\":\"Niafunke Cercle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.04.8299589','ML','ML.04','{\"en\":\"Tenenkou Cercle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.04.8299590','ML','ML.04','{\"en\":\"Djenne Cercle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.04.8299591','ML','ML.04','{\"en\":\"Bandiagara Cercle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.03.8299787','ML','ML.03','{\"en\":\"Kenieba Cercle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.03.8334585','ML','ML.03','{\"en\":\"Bafoulabe Cercle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.06.8334591','ML','ML.06','{\"en\":\"Kolondieba Cercle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.03.8631403','ML','ML.03','{\"en\":\"Cercle de Yélimané\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.07.8631413','ML','ML.07','{\"en\":\"Cercle de Kangaba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.06.8631446','ML','ML.06','{\"en\":\"Cercle de Yanfolila\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.06.8631512','ML','ML.06','{\"en\":\"Cercle de Kadiolo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.06.8631513','ML','ML.06','{\"en\":\"Cercle de Yorosso\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.05.8631514','ML','ML.05','{\"en\":\"Cercle de Niono\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.05.8631515','ML','ML.05','{\"en\":\"Cercle de Macina\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.05.8631516','ML','ML.05','{\"en\":\"Cercle de San\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.08.8631536','ML','ML.08','{\"en\":\"Cercle de Goundam\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.09.8631537','ML','ML.09','{\"en\":\"Cercle de Bourem\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.09.8631538','ML','ML.09','{\"en\":\"Ansongo Cercle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.12070577.8631539','ML','ML.12070577','{\"en\":\"Cercle de Ménaka\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.10.8631540','ML','ML.10','{\"en\":\"Ti-n-Essako\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.10.8631541','ML','ML.10','{\"en\":\"Cercle d’Abeïbara\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.10.8631542','ML','ML.10','{\"en\":\"Cercle de Tessalit\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ML.01.11996137','ML','ML.01','{\"en\":\"Bamako Cercle\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Yorosso\"}',-4.78,12.36,'P','PPLA2','ML.06',NULL,17447,'Africa/Bamako',1,'2021-03-09 23:00:00','2021-03-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Timbuktu\"}',-3.01,16.77,'P','PPLA','ML.08',NULL,32460,'Africa/Bamako',1,'2021-03-09 23:00:00','2021-03-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Ténenkou\"}',-4.92,14.46,'P','PPLA2','ML.04',NULL,7471,'Africa/Bamako',1,'2021-03-09 23:00:00','2021-03-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Taoudenni\"}',-3.98,22.67,'P','PPLA','ML.12070575',NULL,3019,'Africa/Bamako',1,'2021-03-09 23:00:00','2021-03-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Sikasso\"}',-5.67,11.32,'P','PPLA','ML.06',NULL,144786,'Africa/Bamako',1,'2017-06-18 23:00:00','2017-06-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Ségou\"}',-6.26,13.44,'P','PPLA','ML.05','ML.05.7701202',153349,'Africa/Bamako',1,'2021-02-23 23:00:00','2021-02-23 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"San\"}',-4.90,13.30,'P','PPLA2','ML.05',NULL,24811,'Africa/Bamako',1,'2013-11-08 23:00:00','2013-11-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Sagalo\"}',-10.70,12.20,'P','PPL','ML.03',NULL,15830,'Africa/Bamako',1,'2013-10-29 23:00:00','2013-10-29 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Ntossoni\"}',-5.77,12.53,'P','PPL','ML.06','ML.06.7670554',8700,'Africa/Bamako',1,'2016-07-02 23:00:00','2016-07-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Niafunké\"}',-3.99,15.93,'P','PPLA2','ML.08',NULL,6901,'Africa/Bamako',1,'2021-03-08 23:00:00','2021-03-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Mopti\"}',-4.18,14.48,'P','PPLA','ML.04',NULL,108456,'Africa/Bamako',1,'2021-03-08 23:00:00','2021-03-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Ménaka\"}',2.40,15.92,'P','PPLA','ML.12070577','ML.12070577.8631539',9110,'Africa/Bamako',1,'2019-07-31 23:00:00','2019-07-31 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Markala\"}',-6.07,13.68,'P','PPL','ML.05','ML.05.7701202',53738,'Africa/Bamako',1,'2021-03-08 23:00:00','2021-03-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Koutiala\"}',-5.46,12.39,'P','PPLA2','ML.06',NULL,99353,'Africa/Bamako',1,'2021-03-08 23:00:00','2021-03-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Koulikoro\"}',-7.56,12.86,'P','PPLA','ML.07',NULL,23919,'Africa/Bamako',1,'2021-03-08 23:00:00','2021-03-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Kolondiéba\"}',-6.89,11.09,'P','PPLA2','ML.06',NULL,10041,'Africa/Bamako',1,'2021-03-08 23:00:00','2021-03-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Kolokani\"}',-8.03,13.57,'P','PPLA2','ML.07',NULL,48774,'Africa/Bamako',1,'2021-03-08 23:00:00','2021-03-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Kokofata\"}',-9.95,12.88,'P','PPL','ML.03','ML.03.7701501',12985,'Africa/Bamako',1,'2018-02-15 23:00:00','2018-02-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Kita\"}',-9.49,13.03,'P','PPLA2','ML.03',NULL,5769,'Africa/Bamako',1,'2013-11-08 23:00:00','2013-11-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Kidal\"}',1.41,18.44,'P','PPLA','ML.10',NULL,11643,'Africa/Bamako',1,'2021-03-08 23:00:00','2021-03-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Kinmparana\"}',-4.92,12.84,'P','PPL','ML.05',NULL,6014,'Africa/Bamako',1,'2013-02-07 23:00:00','2013-02-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Ké-Macina\"}',-5.36,13.96,'P','PPLA2','ML.05','ML.05.8631515',15750,'Africa/Bamako',1,'2021-04-08 23:00:00','2021-04-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Kayes\"}',-11.44,14.45,'P','PPLA','ML.03',NULL,78406,'Africa/Bamako',1,'2021-03-08 23:00:00','2021-03-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Kati\"}',-8.07,12.74,'P','PPLA2','ML.07',NULL,42922,'Africa/Bamako',1,'2013-11-08 23:00:00','2013-11-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Kangaba\"}',-8.42,11.93,'P','PPLA2','ML.07',NULL,17232,'Africa/Bamako',1,'2013-11-08 23:00:00','2013-11-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Goundam\"}',-3.67,16.41,'P','PPLA2','ML.08',NULL,8456,'Africa/Bamako',1,'2021-03-08 23:00:00','2021-03-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Gao\"}',-0.04,16.27,'P','PPLA','ML.09',NULL,87000,'Africa/Bamako',1,'2021-03-08 23:00:00','2021-03-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Douentza\"}',-2.95,15.00,'P','PPLA2','ML.04',NULL,8054,'Africa/Bamako',1,'2021-03-07 23:00:00','2021-03-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Djénné\"}',-4.55,13.91,'P','PPL','ML.04',NULL,22382,'Africa/Bamako',1,'2021-03-08 23:00:00','2021-03-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Bougouni\"}',-7.48,11.42,'P','PPL','ML.06',NULL,35450,'Africa/Bamako',1,'2021-03-07 23:00:00','2021-03-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Bandiagara\"}',-3.61,14.35,'P','PPL','ML.04',NULL,6853,'Africa/Bamako',1,'2021-03-07 23:00:00','2021-03-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Banamba\"}',-7.45,13.55,'P','PPLA2','ML.07',NULL,30591,'Africa/Bamako',1,'2021-03-07 23:00:00','2021-03-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Bamako\"}',-8.00,12.65,'P','PPLC','ML.01',NULL,1297281,'Africa/Bamako',1,'2021-03-07 23:00:00','2021-03-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Bafoulabé\"}',-10.83,13.81,'P','PPLA2','ML.03',NULL,26823,'Africa/Bamako',1,'2021-03-07 23:00:00','2021-03-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ML','{\"en\":\"Inékar\"}',3.14,15.96,'P','PPL','ML.09',NULL,8714,'Africa/Bamako',1,'2021-03-08 23:00:00','2021-03-08 23:00:00');
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
