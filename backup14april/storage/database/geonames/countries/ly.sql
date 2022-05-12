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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LY.70','LY','{\"en\":\"Darnah\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LY.69','LY','{\"en\":\"Banghāzī\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LY.66','LY','{\"en\":\"Al Marj\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LY.65','LY','{\"en\":\"Al Kufrah\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LY.63','LY','{\"en\":\"Al Jabal al Akhḑar\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LY.77','LY','{\"en\":\"Tripoli\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LY.76','LY','{\"en\":\"Surt\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LY.75','LY','{\"en\":\"Sabhā\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LY.74','LY','{\"en\":\"Nālūt\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LY.73','LY','{\"en\":\"Murzuq\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LY.72','LY','{\"en\":\"Mişrātah\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LY.71','LY','{\"en\":\"Ghāt\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LY.68','LY','{\"en\":\"Az Zāwiyah\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LY.78','LY','{\"en\":\"Ash Shāţiʼ\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LY.64','LY','{\"en\":\"Al Jufrah\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LY.67','LY','{\"en\":\"An Nuqāţ al Khams\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LY.79','LY','{\"en\":\"Al Buţnān\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LY.80','LY','{\"en\":\"Jabal al Gharbi\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LY.81','LY','{\"en\":\"Al Jafārah\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LY.82','LY','{\"en\":\"Al Marqab\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LY.83','LY','{\"en\":\"Al Wāḩāt\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LY.84','LY','{\"en\":\"Wādī al Ḩayāt\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LY.74.2208403','LY','LY.74','{\"en\":\"Mutuşarrifīyat Ghadāmis\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Al Bardīyah\"}',25.09,31.76,'P','PPL','LY.79',NULL,9149,'Africa/Tripoli',1,'2020-02-25 23:00:00','2020-02-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Tobruk\"}',23.95,32.09,'P','PPLA','LY.79',NULL,121052,'Africa/Tripoli',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Qaryat Sulūq\"}',20.25,31.67,'P','PPL','LY.69',NULL,15543,'Africa/Tripoli',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Darnah\"}',22.64,32.77,'P','PPLA','LY.70',NULL,78782,'Africa/Tripoli',1,'2017-02-09 23:00:00','2017-02-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Benghazi\"}',20.07,32.11,'P','PPLA','LY.69',NULL,650629,'Africa/Tripoli',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Az Zuwaytīnah\"}',20.12,30.95,'P','PPL','LY.83',NULL,21015,'Africa/Tripoli',1,'2013-08-12 23:00:00','2013-08-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Awjilah\"}',21.29,29.11,'P','PPL','LY.83',NULL,6610,'Africa/Tripoli',1,'2013-08-12 23:00:00','2013-08-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"At Tāj\"}',23.29,24.20,'P','PPL','LY.65',NULL,46050,'Africa/Tripoli',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Tūkrah\"}',20.58,32.53,'P','PPL','LY.66',NULL,23164,'Africa/Tripoli',1,'2012-12-04 23:00:00','2012-12-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Al Qubbah\"}',22.24,32.76,'P','PPL','LY.70',NULL,24631,'Africa/Tripoli',1,'2018-04-04 23:00:00','2018-04-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Al Marj\"}',20.83,32.49,'P','PPLA','LY.66',NULL,85315,'Africa/Tripoli',1,'2018-04-04 23:00:00','2018-04-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Al Jawf\"}',23.29,24.20,'P','PPL','LY.65',NULL,17320,'Africa/Tripoli',1,'2013-12-31 23:00:00','2013-12-31 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Al Bayḑā’\"}',21.76,32.76,'P','PPLA','LY.63',NULL,74594,'Africa/Tripoli',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Al Abyār\"}',20.60,32.19,'P','PPL','LY.66',NULL,32563,'Africa/Tripoli',1,'2013-10-28 23:00:00','2013-10-28 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Ajdabiya\"}',20.23,30.76,'P','PPLA','LY.83',NULL,134358,'Africa/Tripoli',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Zuwārah\"}',12.08,32.93,'P','PPLA','LY.67',NULL,45000,'Africa/Tripoli',1,'2020-03-06 23:00:00','2020-03-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Zliten\"}',14.57,32.47,'P','PPL','LY.72',NULL,109972,'Africa/Tripoli',1,'2013-08-12 23:00:00','2013-08-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Zalţan\"}',11.87,32.95,'P','PPL','LY.67',NULL,17700,'Africa/Tripoli',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Yafran\"}',12.53,32.06,'P','PPL','LY.80',NULL,67638,'Africa/Tripoli',1,'2013-08-12 23:00:00','2013-08-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Waddān\"}',16.14,29.16,'P','PPL','LY.64',NULL,27590,'Africa/Tripoli',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Tarhuna\"}',13.63,32.44,'P','PPL','LY.82',NULL,210697,'Africa/Tripoli',1,'2011-09-25 23:00:00','2011-09-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Tripoli\"}',13.19,32.89,'P','PPLC','LY.77',NULL,1150989,'Africa/Tripoli',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Tājūrā’\"}',13.35,32.88,'P','PPL','LY.77',NULL,100000,'Africa/Tripoli',1,'2020-07-07 23:00:00','2020-07-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Sirte\"}',16.59,31.21,'P','PPLA','LY.76',NULL,128123,'Africa/Tripoli',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Şurmān\"}',12.57,32.76,'P','PPL','LY.68',NULL,25235,'Africa/Tripoli',1,'2020-07-15 23:00:00','2020-07-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Şabrātah\"}',12.49,32.79,'P','PPL','LY.68',NULL,102038,'Africa/Tripoli',1,'2012-12-04 23:00:00','2012-12-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Sabhā\"}',14.43,27.04,'P','PPLA','LY.75',NULL,130000,'Africa/Tripoli',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Nālūt\"}',10.98,31.87,'P','PPLA','LY.74',NULL,26256,'Africa/Tripoli',1,'2012-01-15 23:00:00','2012-01-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Murzuq\"}',13.92,25.92,'P','PPLA','LY.73',NULL,43732,'Africa/Tripoli',1,'2014-04-25 23:00:00','2014-04-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Mizdah\"}',12.99,31.45,'P','PPL','LY.80',NULL,26107,'Africa/Tripoli',1,'2017-10-02 23:00:00','2017-10-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Mişrātah\"}',15.09,32.38,'P','PPLA','LY.72',NULL,386120,'Africa/Tripoli',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Masallātah\"}',14.00,32.62,'P','PPL','LY.82',NULL,23702,'Africa/Tripoli',1,'2013-11-07 23:00:00','2013-11-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Al Burayqah\"}',19.57,30.41,'P','PPL','LY.83',NULL,13780,'Africa/Tripoli',1,'2017-02-09 23:00:00','2017-02-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Jādū\"}',12.03,31.96,'P','PPL','LY.80',NULL,6013,'Africa/Tripoli',1,'2020-07-07 23:00:00','2020-07-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Hūn\"}',15.95,29.13,'P','PPLA','LY.64',NULL,18878,'Africa/Tripoli',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Zawiya\"}',12.73,32.75,'P','PPL','LY.68',NULL,186123,'Africa/Tripoli',1,'2020-07-15 23:00:00','2020-07-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Ghat\"}',10.18,24.96,'P','PPLA','LY.71',NULL,24347,'Africa/Tripoli',1,'2015-09-25 23:00:00','2015-09-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Gharyan\"}',13.02,32.17,'P','PPLA','LY.80',NULL,85219,'Africa/Tripoli',1,'2013-05-10 23:00:00','2013-05-10 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Ghadāmis\"}',9.50,30.13,'P','PPL','LY.74',NULL,7000,'Africa/Tripoli',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Brak\"}',14.27,27.55,'P','PPL','LY.78',NULL,39444,'Africa/Tripoli',1,'2013-12-31 23:00:00','2013-12-31 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Bani Walid\"}',13.98,31.75,'P','PPL','LY.72',NULL,46350,'Africa/Tripoli',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Zintan\"}',12.25,31.93,'P','PPL','LY.80',NULL,33000,'Africa/Tripoli',1,'2016-04-14 23:00:00','2016-04-14 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Az Zāwīyah\"}',12.73,32.76,'P','PPLA','LY.68',NULL,200000,'Africa/Tripoli',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Ubari\"}',12.78,26.59,'P','PPLA','LY.84',NULL,42975,'Africa/Tripoli',1,'2018-05-28 23:00:00','2018-05-28 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Al Ajaylat\"}',12.38,32.76,'P','PPL','LY.67',NULL,130546,'Africa/Tripoli',1,'2018-10-15 23:00:00','2018-10-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Al Khums\"}',14.26,32.65,'P','PPLA','LY.82',NULL,201943,'Africa/Tripoli',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Al Jumayl\"}',12.06,32.85,'P','PPL','LY.67',NULL,102000,'Africa/Tripoli',1,'2020-07-15 23:00:00','2020-07-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Al Jadīd\"}',14.40,27.05,'P','PPL','LY.75',NULL,126386,'Africa/Tripoli',1,'2020-07-15 23:00:00','2020-07-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Al ‘Azīzīyah\"}',13.02,32.53,'P','PPLA','LY.81',NULL,4000,'Africa/Tripoli',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LY','{\"en\":\"Idrī\"}',13.05,27.45,'P','PPLA','LY.78',NULL,4611,'Africa/Tripoli',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
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
