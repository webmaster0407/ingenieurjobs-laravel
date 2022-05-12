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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('MR.06','MR','{\"en\":\"Trarza\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('MR.11','MR','{\"en\":\"Tiris Zemmour\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('MR.09','MR','{\"en\":\"Tagant\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('MR.12','MR','{\"en\":\"Inchiri\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('MR.02','MR','{\"en\":\"Hodh El Gharbi\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('MR.01','MR','{\"en\":\"Hodh Ech Chargi\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('MR.10','MR','{\"en\":\"Guidimaka\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('MR.04','MR','{\"en\":\"Gorgol\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('MR.08','MR','{\"en\":\"Dakhlet Nouadhibou\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('MR.05','MR','{\"en\":\"Brakna\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('MR.03','MR','{\"en\":\"Assaba\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('MR.07','MR','{\"en\":\"Adrar\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('MR.13','MR','{\"en\":\"Nouakchott Ouest\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('MR.14','MR','{\"en\":\"Nouakchott Nord\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('MR.15','MR','{\"en\":\"Nouakchott Sud\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.05.7910308','MR','MR.05','{\"en\":\"Aleg\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.06.7910309','MR','MR.06','{\"en\":\"Rosso Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.09.7910310','MR','MR.09','{\"en\":\"Tidjikja\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.06.8051339','MR','MR.06','{\"en\":\"Ouad Naga\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.06.8051340','MR','MR.06','{\"en\":\"Mederdra\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.06.8051341','MR','MR.06','{\"en\":\"Boutilimit\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.05.8335141','MR','MR.05','{\"en\":\"Bogué Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.15.9212577','MR','MR.15','{\"en\":\"Arafat\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.14.9212580','MR','MR.14','{\"en\":\"Dar Naim\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.13.9212586','MR','MR.13','{\"en\":\"Ksar\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.15.9212590','MR','MR.15','{\"en\":\"Riad\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.13.9212593','MR','MR.13','{\"en\":\"Sebkha\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.14.9212594','MR','MR.14','{\"en\":\"Teyarett\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.14.9212597','MR','MR.14','{\"en\":\"Toujounine\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.10.9212601','MR','MR.10','{\"en\":\"Selibaby\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.03.9212602','MR','MR.03','{\"en\":\"Guerou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.04.9212603','MR','MR.04','{\"en\":\"Maghama\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.06.9212604','MR','MR.06','{\"en\":\"R\'Kiz\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.03.9212605','MR','MR.03','{\"en\":\"Kiffa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.02.9212606','MR','MR.02','{\"en\":\"Aioun\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.01.9212608','MR','MR.01','{\"en\":\"Nema\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.01.9212609','MR','MR.01','{\"en\":\"Timbedra\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.11.9212610','MR','MR.11','{\"en\":\"F\'Derik\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.06.9212614','MR','MR.06','{\"en\":\"Keur-Macene\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.07.9212615','MR','MR.07','{\"en\":\"Aoujeft\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.11.9212618','MR','MR.11','{\"en\":\"Bir Moghreïn\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.05.9212619','MR','MR.05','{\"en\":\"Bababe\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.10.9212620','MR','MR.10','{\"en\":\"Ould Yenge\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.01.9212623','MR','MR.01','{\"en\":\"Amourj\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.03.9212624','MR','MR.03','{\"en\":\"Kankossa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.02.9212625','MR','MR.02','{\"en\":\"Tintane\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.02.9212627','MR','MR.02','{\"en\":\"Kobenni\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.07.9212628','MR','MR.07','{\"en\":\"Chinguetti\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.04.9212629','MR','MR.04','{\"en\":\"Kaedi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.09.9212630','MR','MR.09','{\"en\":\"Tichitt\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.05.9212631','MR','MR.05','{\"en\":\"M\'Bagne\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.09.9212633','MR','MR.09','{\"en\":\"Moudjeria\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.04.9212634','MR','MR.04','{\"en\":\"M\'Bout\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.05.9212635','MR','MR.05','{\"en\":\"Magta-Lahjar\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.08.9212637','MR','MR.08','{\"en\":\"Nouadhibou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.03.9212638','MR','MR.03','{\"en\":\"Boumdeid\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.12.9212639','MR','MR.12','{\"en\":\"Akjoujt\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.07.9212641','MR','MR.07','{\"en\":\"Atar\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.04.9212642','MR','MR.04','{\"en\":\"Monguel\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.11.9212643','MR','MR.11','{\"en\":\"Zouerate\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.07.9212644','MR','MR.07','{\"en\":\"Ouadane\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.01.9212655','MR','MR.01','{\"en\":\"Oualata\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.01.9222754','MR','MR.01','{\"en\":\"Bassiknou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.15.9222769','MR','MR.15','{\"en\":\"El Mina\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.13.9222773','MR','MR.13','{\"en\":\"Tevragh Zeina\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.02.9226673','MR','MR.02','{\"en\":\"Tamchekett\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.01.9226996','MR','MR.01','{\"en\":\"Djigueni\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.03.9229053','MR','MR.03','{\"en\":\"Barkeol\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.08.11996536','MR','MR.08','{\"en\":\"Chami\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MR.01.11996537','MR','MR.01','{\"en\":\"D\'har\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MR','{\"en\":\"Zouerate\"}',-12.47,22.74,'P','PPLA','MR.11',NULL,38000,'Africa/Nouakchott',1,'2016-01-06 23:00:00','2016-01-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MR','{\"en\":\"Tékane\"}',-15.35,16.60,'P','PPL','MR.06','MR.06.9212604',22041,'Africa/Nouakchott',1,'2019-04-26 23:00:00','2019-04-26 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MR','{\"en\":\"Tidjikja\"}',-11.43,18.56,'P','PPLA','MR.09',NULL,6000,'Africa/Nouakchott',1,'2011-01-31 23:00:00','2011-01-31 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MR','{\"en\":\"Sélibaby\"}',-12.18,15.16,'P','PPLA','MR.10',NULL,18424,'Africa/Nouakchott',1,'2017-06-07 23:00:00','2017-06-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MR','{\"en\":\"Rosso\"}',-15.81,16.51,'P','PPLA','MR.06',NULL,48922,'Africa/Nouakchott',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MR','{\"en\":\"Nouakchott\"}',-15.98,18.09,'P','PPLC',NULL,NULL,661400,'Africa/Nouakchott',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MR','{\"en\":\"Nouadhibou\"}',-17.04,20.94,'P','PPLA','MR.08',NULL,72337,'Africa/Nouakchott',1,'2016-10-21 23:00:00','2016-10-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MR','{\"en\":\"Néma\"}',-7.26,16.62,'P','PPLA','MR.01',NULL,60000,'Africa/Nouakchott',1,'2016-01-06 23:00:00','2016-01-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MR','{\"en\":\"Kiffa\"}',-11.40,16.62,'P','PPLA','MR.03',NULL,40281,'Africa/Nouakchott',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MR','{\"en\":\"Kaédi\"}',-13.50,16.15,'P','PPLA','MR.04',NULL,55374,'Africa/Nouakchott',1,'2017-08-23 23:00:00','2017-08-23 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MR','{\"en\":\"Aioun\"}',-9.61,16.66,'P','PPLA','MR.02',NULL,12635,'Africa/Nouakchott',1,'2020-02-06 23:00:00','2020-02-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MR','{\"en\":\"Atar\"}',-13.05,20.52,'P','PPLA','MR.07',NULL,24021,'Africa/Nouakchott',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MR','{\"en\":\"Aleg\"}',-13.91,17.05,'P','PPLA','MR.05',NULL,15211,'Africa/Nouakchott',1,'2016-01-06 23:00:00','2016-01-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MR','{\"en\":\"Akjoujt\"}',-14.39,19.75,'P','PPLA','MR.12',NULL,11500,'Africa/Nouakchott',1,'2016-01-06 23:00:00','2016-01-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MR','{\"en\":\"Arafat\"}',-15.97,18.05,'P','PPLA','MR.15','MR.15.9212577',0,'Africa/Nouakchott',1,'2018-12-02 23:00:00','2018-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MR','{\"en\":\"Tevragh Zeina\"}',-15.99,18.10,'P','PPLA','MR.13',NULL,0,'Africa/Nouakchott',1,'2017-03-20 23:00:00','2017-03-20 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MR','{\"en\":\"Dar Naim\"}',-15.93,18.11,'P','PPLA','MR.14','MR.14.9212580',0,'Africa/Nouakchott',1,'2018-12-02 23:00:00','2018-12-02 23:00:00');
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
