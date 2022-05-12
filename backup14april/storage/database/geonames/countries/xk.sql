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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('XK.10096138','XK','{\"en\":\"Ferizaj\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('XK.10096859','XK','{\"en\":\"Gjakova\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('XK.10097357','XK','{\"en\":\"Gjilan\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('XK.10097358','XK','{\"en\":\"Mitrovica\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('XK.10097359','XK','{\"en\":\"Pec\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('XK.10097360','XK','{\"en\":\"Pristina\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('XK.10097361','XK','{\"en\":\"Prizren\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10097358.28','XK','XK.10097358','{\"en\":\"Vushtrri\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10097357.27','XK','XK.10097357','{\"en\":\"Komuna e Vitisë\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10096138.03','XK','XK.10096138','{\"en\":\"Komuna e Ferizajt\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10097358.15','XK','XK.10097358','{\"en\":\"Komuna e Mitrovicës\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10097361.26','XK','XK.10097361','{\"en\":\"Komuna e Thërandës\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10097358.25','XK','XK.10097358','{\"en\":\"Komuna e Skenderajt\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10097361.21','XK','XK.10097361','{\"en\":\"Prizren\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10097360.20','XK','XK.10097360','{\"en\":\"Komuna e Prishtinës\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10097360.19','XK','XK.10097360','{\"en\":\"Podujevo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10097359.18','XK','XK.10097359','{\"en\":\"Komuna e Pejës\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10096859.22','XK','XK.10096859','{\"en\":\"Orahovac\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10097360.13','XK','XK.10097360','{\"en\":\"Lipjan\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10097358.12','XK','XK.10097358','{\"en\":\"Komuna e Leposaviqit\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10097357.10','XK','XK.10097357','{\"en\":\"Kamenica\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10097359.11','XK','XK.10097359','{\"en\":\"Komuna e Klines\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10096138.09','XK','XK.10096138','{\"en\":\"Komuna e Kaçanikut\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10097359.08','XK','XK.10097359','{\"en\":\"Komuna e Istogut\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10097357.06','XK','XK.10097357','{\"en\":\"Komuna e Gjilanit\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10097360.07','XK','XK.10097360','{\"en\":\"Komuna e Drenasit\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10097361.02','XK','XK.10097361','{\"en\":\"Komuna e Dragashit\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10096859.01','XK','XK.10096859','{\"en\":\"Komuna e Deçanit\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10096859.05','XK','XK.10096859','{\"en\":\"Komuna e Gjakovës\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10097360.04','XK','XK.10097360','{\"en\":\"Kosovo Polje\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10096138.23','XK','XK.10096138','{\"en\":\"Opština Štrpce\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10096138.24','XK','XK.10096138','{\"en\":\"Komuna e Shtimes\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10097360.16','XK','XK.10097360','{\"en\":\"Novo Brdo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10097360.17','XK','XK.10097360','{\"en\":\"Komuna e Obiliqit\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10097361.14','XK','XK.10097361','{\"en\":\"Komuna e Malisheves\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10097358.29','XK','XK.10097358','{\"en\":\"Komuna e Zubin Potokut\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10097358.30','XK','XK.10097358','{\"en\":\"Opština Zvečan\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10097360.31','XK','XK.10097360','{\"en\":\"Komuna e Graçanicës\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10096138.32','XK','XK.10096138','{\"en\":\"Hani i Elezit\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10096859.33','XK','XK.10096859','{\"en\":\"Komuna e Junikut\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10097357.34','XK','XK.10097357','{\"en\":\"Komuna e Kllokotit\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10097361.35','XK','XK.10097361','{\"en\":\"Komuna e Mamushës\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10097357.36','XK','XK.10097357','{\"en\":\"Komuna e Parteshit\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10097357.37','XK','XK.10097357','{\"en\":\"Komuna e Ranillugut\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('XK.10097358.38','XK','XK.10097358','{\"en\":\"Mitrovica Veriore\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Zvečan\"}',20.84,42.91,'P','PPLA2','XK.10097358','XK.10097358.30',17000,'Europe/Belgrade',1,'2015-02-21 23:00:00','2015-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Zubin Potok\"}',20.69,42.91,'P','PPLA2','XK.10097358','XK.10097358.29',14900,'Europe/Belgrade',1,'2015-02-21 23:00:00','2015-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Vushtrri\"}',20.97,42.82,'P','PPLA2','XK.10097358','XK.10097358.28',30651,'Europe/Belgrade',1,'2015-02-21 23:00:00','2015-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Vitina\"}',21.36,42.32,'P','PPLA2','XK.10097357','XK.10097357.27',46959,'Europe/Belgrade',1,'2015-02-21 23:00:00','2015-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Ferizaj\"}',21.16,42.37,'P','PPLA','XK.10096138','XK.10096138.03',59504,'Europe/Belgrade',1,'2015-02-21 23:00:00','2015-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Suva Reka\"}',20.82,42.36,'P','PPLA2','XK.10097361','XK.10097361.26',72229,'Europe/Belgrade',1,'2015-02-21 23:00:00','2015-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Štrpce\"}',21.03,42.24,'P','PPLA2','XK.10096138','XK.10096138.23',6913,'Europe/Belgrade',1,'2015-02-21 23:00:00','2015-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Shtime\"}',21.04,42.43,'P','PPLA2','XK.10096138','XK.10096138.24',35000,'Europe/Belgrade',1,'2015-02-21 23:00:00','2015-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Srbica\"}',20.79,42.75,'P','PPLA2','XK.10097358','XK.10097358.25',5089,'Europe/Belgrade',1,'2015-02-21 23:00:00','2015-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Prizren\"}',20.74,42.21,'P','PPLA','XK.10097361','XK.10097361.21',171464,'Europe/Belgrade',1,'2015-02-21 23:00:00','2015-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Pristina\"}',21.17,42.67,'P','PPLC','XK.10097360','XK.10097360.20',550000,'Europe/Belgrade',1,'2020-10-24 23:00:00','2020-10-24 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Podujeva\"}',21.19,42.91,'P','PPLA2','XK.10097360','XK.10097360.19',35000,'Europe/Belgrade',1,'2015-02-21 23:00:00','2015-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Peć\"}',20.29,42.66,'P','PPLA','XK.10097359','XK.10097359.18',48962,'Europe/Belgrade',1,'2019-10-01 23:00:00','2019-10-01 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Orahovac\"}',20.65,42.40,'P','PPLA2','XK.10096859','XK.10096859.22',22049,'Europe/Belgrade',1,'2015-02-21 23:00:00','2015-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Obiliq\"}',21.07,42.69,'P','PPLA2','XK.10097360','XK.10097360.17',11612,'Europe/Belgrade',1,'2015-02-21 23:00:00','2015-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Novo Brdo\"}',21.43,42.62,'P','PPLA2','XK.10097360','XK.10097360.16',6720,'Europe/Belgrade',1,'2015-02-21 23:00:00','2015-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Mamuša\"}',20.73,42.33,'P','PPLA2','XK.10097361','XK.10097361.35',5507,'Europe/Belgrade',1,'2015-02-21 23:00:00','2015-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Llazicë\"}',20.76,42.56,'P','PPL','XK.10097361','XK.10097361.14',19863,'Europe/Belgrade',1,'2015-02-14 23:00:00','2015-02-14 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Lipljan\"}',21.13,42.52,'P','PPLA2','XK.10097360','XK.10097360.13',9047,'Europe/Belgrade',1,'2015-02-21 23:00:00','2015-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Leposaviq\"}',20.80,43.10,'P','PPLA2','XK.10097358','XK.10097358.12',19000,'Europe/Belgrade',1,'2015-02-21 23:00:00','2015-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Mitrovicë\"}',20.87,42.88,'P','PPLA','XK.10097358','XK.10097358.15',107045,'Europe/Belgrade',1,'2015-02-21 23:00:00','2015-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Kamenica\"}',21.58,42.58,'P','PPLA2','XK.10097357','XK.10097357.10',9312,'Europe/Belgrade',1,'2015-02-21 23:00:00','2015-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Kosovo Polje\"}',21.10,42.66,'P','PPLA2','XK.10097360','XK.10097360.04',16154,'Europe/Belgrade',1,'2015-02-21 23:00:00','2015-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Klina\"}',20.58,42.62,'P','PPLA2','XK.10097359','XK.10097359.11',8050,'Europe/Belgrade',1,'2015-02-21 23:00:00','2015-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Kačanik\"}',21.26,42.23,'P','PPLA2','XK.10096138','XK.10096138.09',9800,'Europe/Belgrade',1,'2015-02-21 23:00:00','2015-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Istok\"}',20.49,42.78,'P','PPLA2','XK.10097359','XK.10097359.08',40000,'Europe/Belgrade',1,'2015-02-21 23:00:00','2015-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Isniq\"}',20.30,42.56,'P','PPL','XK.10096859','XK.10096859.01',5500,'Europe/Belgrade',1,'2015-02-14 23:00:00','2015-02-14 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Strellc i Epërm\"}',20.29,42.58,'P','PPL','XK.10096859','XK.10096859.01',6100,'Europe/Belgrade',1,'2015-02-14 23:00:00','2015-02-14 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Gjilan\"}',21.47,42.46,'P','PPLA','XK.10097357','XK.10097357.06',51912,'Europe/Belgrade',1,'2015-02-21 23:00:00','2015-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Glogovac\"}',20.89,42.63,'P','PPLA2','XK.10097360','XK.10097360.07',58579,'Europe/Belgrade',1,'2015-02-21 23:00:00','2015-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Dragash\"}',20.65,42.03,'P','PPLA2','XK.10097361','XK.10097361.02',35000,'Europe/Belgrade',1,'2015-02-21 23:00:00','2015-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Hani i Elezit\"}',21.30,42.15,'P','PPLA2','XK.10096138','XK.10096138.32',9389,'Europe/Belgrade',1,'2015-02-21 23:00:00','2015-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Deçan\"}',20.29,42.54,'P','PPLA2','XK.10096859','XK.10096859.01',50500,'Europe/Belgrade',1,'2015-02-21 23:00:00','2015-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('XK','{\"en\":\"Gjakovë\"}',20.43,42.38,'P','PPLA','XK.10096859','XK.10096859.05',94158,'Europe/Belgrade',1,'2021-09-02 23:00:00','2021-09-02 23:00:00');
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
