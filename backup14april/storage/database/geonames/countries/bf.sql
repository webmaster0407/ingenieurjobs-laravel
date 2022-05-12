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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BF.01','BF','{\"en\":\"Boucle du Mouhoun\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BF.02','BF','{\"en\":\"Cascades\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BF.03','BF','{\"en\":\"Centre\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BF.04','BF','{\"en\":\"Centre-Est\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BF.05','BF','{\"en\":\"Centre-Nord\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BF.06','BF','{\"en\":\"Centre-Ouest\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BF.07','BF','{\"en\":\"Centre-Sud\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BF.08','BF','{\"en\":\"Est\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BF.09','BF','{\"en\":\"Hauts-Bassins\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BF.10','BF','{\"en\":\"Nord\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BF.11','BF','{\"en\":\"Plateau-Central\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BF.12','BF','{\"en\":\"Sahel\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BF.13','BF','{\"en\":\"Sud-Ouest\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.07.44','BF','BF.07','{\"en\":\"Zoundweogo Province\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.10.76','BF','BF.10','{\"en\":\"Province du Yatenga\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.08.42','BF','BF.08','{\"en\":\"Province de la Tapoa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.01.73','BF','BF.01','{\"en\":\"Province du Sourou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.12.40','BF','BF.12','{\"en\":\"Province du Soum\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.06.72','BF','BF.06','{\"en\":\"Province de la Sissili\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.12.71','BF','BF.12','{\"en\":\"Province du Séno\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.05.70','BF','BF.05','{\"en\":\"Province du Sanmatenga\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.06.36','BF','BF.06','{\"en\":\"Province du Sanguié\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.13.69','BF','BF.13','{\"en\":\"Province du Poni\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.10.34','BF','BF.10','{\"en\":\"Province du Passoré\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.12.33','BF','BF.12','{\"en\":\"Province de l’Oudalan\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.11.68','BF','BF.11','{\"en\":\"Oubritenga\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.07.65','BF','BF.07','{\"en\":\"Nahouri Province\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.05.64','BF','BF.05','{\"en\":\"Province du Namentenga\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.01.63','BF','BF.01','{\"en\":\"Province du Mouhoun\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.04.28','BF','BF.04','{\"en\":\"Kouritenga Province\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.01.58','BF','BF.01','{\"en\":\"Province de la Kossi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.02.55','BF','BF.02','{\"en\":\"Province de la Comoé\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.09.54','BF','BF.09','{\"en\":\"Province du Kénédougou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.03.53','BF','BF.03','{\"en\":\"Kadiogo Province\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.09.51','BF','BF.09','{\"en\":\"Province du Houet\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.08.50','BF','BF.08','{\"en\":\"Province du Gourma\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.08.21','BF','BF.08','{\"en\":\"Gnagna Province\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.11.20','BF','BF.11','{\"en\":\"Province du Ganzourgou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.06.19','BF','BF.06','{\"en\":\"Province du Boulkiemdé\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.04.49','BF','BF.04','{\"en\":\"Province du Boulgou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.13.48','BF','BF.13','{\"en\":\"Province de la Bougouriba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.07.47','BF','BF.07','{\"en\":\"Bazega Province\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.05.15','BF','BF.05','{\"en\":\"Province du Bam\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.01.45','BF','BF.01','{\"en\":\"Province des Balé\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.01.46','BF','BF.01','{\"en\":\"Province des Banwa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.13.52','BF','BF.13','{\"en\":\"Province du Ioba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.08.56','BF','BF.08','{\"en\":\"Province de la Komandjoari\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.08.57','BF','BF.08','{\"en\":\"Province de la Kompienga\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.04.59','BF','BF.04','{\"en\":\"Province du Koulpélogo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.11.60','BF','BF.11','{\"en\":\"Province du Kourwéogo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.02.61','BF','BF.02','{\"en\":\"Province de la Léraba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.10.62','BF','BF.10','{\"en\":\"Province du Loroum\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.01.66','BF','BF.01','{\"en\":\"Province du Nayala\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.13.67','BF','BF.13','{\"en\":\"Province du Noumbièl\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.09.74','BF','BF.09','{\"en\":\"Province du Tuy\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.12.75','BF','BF.12','{\"en\":\"Province du Yagha\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.06.77','BF','BF.06','{\"en\":\"Province du Ziro\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BF.10.78','BF','BF.10','{\"en\":\"Province du Zondoma\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Zorgo\"}',-0.62,12.25,'P','PPLA2','BF.11','BF.11.20',23892,'Africa/Ouagadougou',1,'2013-02-07 23:00:00','2013-02-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Ziniaré\"}',-1.30,12.58,'P','PPLA','BF.11','BF.11.68',12703,'Africa/Ouagadougou',1,'2013-02-07 23:00:00','2013-02-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Yako\"}',-2.26,12.96,'P','PPLA2','BF.10','BF.10.34',22904,'Africa/Ouagadougou',1,'2013-02-07 23:00:00','2013-02-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Tougan\"}',-3.07,13.07,'P','PPLA2','BF.01','BF.01.73',17590,'Africa/Ouagadougou',1,'2012-06-04 23:00:00','2012-06-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Toma\"}',-2.90,12.76,'P','PPLA2','BF.01','BF.01.66',12401,'Africa/Ouagadougou',1,'2013-02-07 23:00:00','2013-02-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Titao\"}',-2.07,13.77,'P','PPLA2','BF.10','BF.10.62',19131,'Africa/Ouagadougou',1,'2018-04-05 23:00:00','2018-04-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Tenkodogo\"}',-0.37,11.78,'P','PPLA','BF.04','BF.04.49',37658,'Africa/Ouagadougou',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Salanso\"}',-4.08,12.17,'P','PPLA2','BF.01','BF.01.46',10385,'Africa/Ouagadougou',1,'2013-02-07 23:00:00','2013-02-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Réo\"}',-2.47,12.32,'P','PPLA2','BF.06','BF.06.36',37535,'Africa/Ouagadougou',1,'2013-02-07 23:00:00','2013-02-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Pô\"}',-1.14,11.17,'P','PPLA2','BF.07','BF.07.65',17924,'Africa/Ouagadougou',1,'2017-05-20 23:00:00','2017-05-20 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Pitmoaga\"}',-1.88,12.25,'P','PPL','BF.06','BF.06.19',7991,'Africa/Ouagadougou',1,'2018-08-06 23:00:00','2018-08-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Pama\"}',0.71,11.25,'P','PPLA2','BF.08','BF.08.57',8902,'Africa/Ouagadougou',1,'2012-06-04 23:00:00','2012-06-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Ouargaye\"}',0.06,11.50,'P','PPLA2','BF.04','BF.04.59',10103,'Africa/Ouagadougou',1,'2013-01-09 23:00:00','2013-01-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Ouahigouya\"}',-2.42,13.58,'P','PPLA','BF.10','BF.10.76',61096,'Africa/Ouagadougou',1,'2010-08-09 23:00:00','2010-08-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Ouagadougou\"}',-1.53,12.37,'P','PPLC','BF.03','BF.03.53',1086505,'Africa/Ouagadougou',1,'2021-03-09 23:00:00','2021-03-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Nouna\"}',-3.86,12.73,'P','PPLA2','BF.01','BF.01.58',29048,'Africa/Ouagadougou',1,'2013-02-07 23:00:00','2013-02-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Manga\"}',-1.07,11.66,'P','PPLA','BF.07','BF.07.44',15173,'Africa/Ouagadougou',1,'2012-02-01 23:00:00','2012-02-01 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Léo\"}',-2.11,11.10,'P','PPLA2','BF.06','BF.06.72',26884,'Africa/Ouagadougou',1,'2017-05-20 23:00:00','2017-05-20 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Koupéla\"}',-0.35,12.18,'P','PPLA2','BF.04','BF.04.28',32052,'Africa/Ouagadougou',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Koudougou\"}',-2.36,12.25,'P','PPLA','BF.06','BF.06.19',87347,'Africa/Ouagadougou',1,'2013-02-07 23:00:00','2013-02-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Kongoussi\"}',-1.53,13.33,'P','PPLA2','BF.05','BF.05.15',26338,'Africa/Ouagadougou',1,'2012-06-04 23:00:00','2012-06-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Kombissiri\"}',-1.34,12.07,'P','PPLA2','BF.07','BF.07.47',30137,'Africa/Ouagadougou',1,'2018-12-03 23:00:00','2018-12-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Kokologo\"}',-1.88,12.19,'P','PPLA3','BF.06','BF.06.19',25958,'Africa/Ouagadougou',1,'2018-08-06 23:00:00','2018-08-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Kaya\"}',-1.08,13.09,'P','PPLA','BF.05','BF.05.70',39229,'Africa/Ouagadougou',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Houndé\"}',-3.52,11.50,'P','PPLA2','BF.09','BF.09.74',36593,'Africa/Ouagadougou',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Gourcy\"}',-2.36,13.21,'P','PPLA2','BF.10','BF.10.78',16765,'Africa/Ouagadougou',1,'2012-06-04 23:00:00','2012-06-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Goulouré\"}',-1.93,12.23,'P','PPL','BF.06','BF.06.19',6677,'Africa/Ouagadougou',1,'2018-08-06 23:00:00','2018-08-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Gorom-Gorom\"}',-0.23,14.44,'P','PPLA2','BF.12','BF.12.33',6691,'Africa/Ouagadougou',1,'2013-09-05 23:00:00','2013-09-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Garango\"}',-0.55,11.80,'P','PPL','BF.04','BF.04.49',29076,'Africa/Ouagadougou',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Fada N\'gourma\"}',0.36,12.06,'P','PPLA','BF.08','BF.08.50',33910,'Africa/Ouagadougou',1,'2013-05-17 23:00:00','2013-05-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Dori\"}',-0.03,14.03,'P','PPLA','BF.12','BF.12.71',37806,'Africa/Ouagadougou',1,'2020-07-08 23:00:00','2020-07-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Djibo\"}',-1.63,14.10,'P','PPLA2','BF.12','BF.12.40',22223,'Africa/Ouagadougou',1,'2012-12-04 23:00:00','2012-12-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Diébougou\"}',-3.25,10.96,'P','PPLA2','BF.13','BF.13.48',12732,'Africa/Ouagadougou',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Diapaga\"}',1.79,12.07,'P','PPLA2','BF.08','BF.08.42',26013,'Africa/Ouagadougou',1,'2012-06-04 23:00:00','2012-06-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Dédougou\"}',-3.46,12.46,'P','PPLA','BF.01','BF.01.63',45341,'Africa/Ouagadougou',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Dano\"}',-3.06,11.15,'P','PPLA2','BF.13','BF.13.52',11153,'Africa/Ouagadougou',1,'2013-01-09 23:00:00','2013-01-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Boussé\"}',-1.90,12.66,'P','PPLA2','BF.11','BF.11.60',15868,'Africa/Ouagadougou',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Boulsa\"}',-0.57,12.67,'P','PPLA2','BF.05','BF.05.64',17489,'Africa/Ouagadougou',1,'2013-02-07 23:00:00','2013-02-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Boromo\"}',-2.93,11.75,'P','PPLA2','BF.01','BF.01.45',13157,'Africa/Ouagadougou',1,'2013-01-09 23:00:00','2013-01-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Bogandé\"}',-0.15,12.97,'P','PPLA2','BF.08','BF.08.21',9854,'Africa/Ouagadougou',1,'2017-05-20 23:00:00','2017-05-20 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Bobo-Dioulasso\"}',-4.30,11.18,'P','PPLA','BF.09','BF.09.51',360106,'Africa/Ouagadougou',1,'2021-03-07 23:00:00','2021-03-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Batié\"}',-2.92,9.88,'P','PPLA2','BF.13','BF.13.67',6483,'Africa/Ouagadougou',1,'2018-04-05 23:00:00','2018-04-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BF','{\"en\":\"Banfora\"}',-4.77,10.63,'P','PPLA','BF.02','BF.02.55',60288,'Africa/Ouagadougou',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
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
