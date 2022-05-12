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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BJ.18','BJ','{\"en\":\"Zou\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BJ.16','BJ','{\"en\":\"Ouémé\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BJ.15','BJ','{\"en\":\"Mono\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BJ.10','BJ','{\"en\":\"Borgou\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BJ.09','BJ','{\"en\":\"Atlantique\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BJ.08','BJ','{\"en\":\"Atakora\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BJ.07','BJ','{\"en\":\"Alibori\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BJ.11','BJ','{\"en\":\"Collines\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BJ.12','BJ','{\"en\":\"Kouffo\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BJ.13','BJ','{\"en\":\"Donga\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BJ.14','BJ','{\"en\":\"Littoral\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BJ.17','BJ','{\"en\":\"Plateau\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.12.2391090','BJ','BJ.12','{\"en\":\"Dogbo Tota\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.16.7668892','BJ','BJ.16','{\"en\":\"Commune of Adjohoun\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.16.7668898','BJ','BJ.16','{\"en\":\"Bonou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.16.7668900','BJ','BJ.16','{\"en\":\"Dangbo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.18.7668907','BJ','BJ.18','{\"en\":\"Commune of Cove\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.18.7668908','BJ','BJ.18','{\"en\":\"Commune of Ouinhi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.18.7668909','BJ','BJ.18','{\"en\":\"Commune of Zangnanado\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.08.7668910','BJ','BJ.08','{\"en\":\"Kouande\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.08.7668916','BJ','BJ.08','{\"en\":\"Pehonko\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.08.7668918','BJ','BJ.08','{\"en\":\"Kerou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.15.7668924','BJ','BJ.15','{\"en\":\"Lokossa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.15.7668926','BJ','BJ.15','{\"en\":\"Commune of Athieme\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.18.7668931','BJ','BJ.18','{\"en\":\"Commune of Bohicon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.18.7668932','BJ','BJ.18','{\"en\":\"Commune of Za-Kpota\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.18.7668934','BJ','BJ.18','{\"en\":\"Commune of Zogbodome\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.07.7668935','BJ','BJ.07','{\"en\":\"Commune of Banikoara\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.09.7668936','BJ','BJ.09','{\"en\":\"Commune of Ouidah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.09.7668937','BJ','BJ.09','{\"en\":\"Commune of Kpomasse\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.09.7668938','BJ','BJ.09','{\"en\":\"Commune of Tori-Bossito\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.16.7668939','BJ','BJ.16','{\"en\":\"Porto-Novo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.16.7668940','BJ','BJ.16','{\"en\":\"Aguégués\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.16.7668941','BJ','BJ.16','{\"en\":\"Seme-Kpodji\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.13.7669263','BJ','BJ.13','{\"en\":\"Ouake\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.10.7669265','BJ','BJ.10','{\"en\":\"Commune of Tchaourou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.10.7669268','BJ','BJ.10','{\"en\":\"Commune of Parakou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.10.7669269','BJ','BJ.10','{\"en\":\"Ndali\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.10.7669270','BJ','BJ.10','{\"en\":\"Bembereke\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.08.7669273','BJ','BJ.08','{\"en\":\"Natitingou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.13.7669275','BJ','BJ.13','{\"en\":\"Copargo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.10.7669349','BJ','BJ.10','{\"en\":\"Kalalè\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.10.7669352','BJ','BJ.10','{\"en\":\"Pèrèrè\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.10.7669355','BJ','BJ.10','{\"en\":\"Nikki\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.10.7669357','BJ','BJ.10','{\"en\":\"Sinendé\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.17.7670840','BJ','BJ.17','{\"en\":\"Commune of Ketou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.17.7670841','BJ','BJ.17','{\"en\":\"Commune of Pobe\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.14.7874113','BJ','BJ.14','{\"en\":\"Cotonou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.09.7874152','BJ','BJ.09','{\"en\":\"Commune of Abomey-Calavi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.09.7874154','BJ','BJ.09','{\"en\":\"Commune of So-Ava\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.07.7874155','BJ','BJ.07','{\"en\":\"Karimama\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.08.7874156','BJ','BJ.08','{\"en\":\"Tanguieta\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.08.7874157','BJ','BJ.08','{\"en\":\"Toucountouna\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.08.7874158','BJ','BJ.08','{\"en\":\"Materi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.11.7874167','BJ','BJ.11','{\"en\":\"Commune of Glazoue\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.07.7874170','BJ','BJ.07','{\"en\":\"Malanville\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.07.7911056','BJ','BJ.07','{\"en\":\"Kandi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.11.8260647','BJ','BJ.11','{\"en\":\"Commune of Bante\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.11.8260648','BJ','BJ.11','{\"en\":\"Commune of Dassa-Zoume\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.11.8260649','BJ','BJ.11','{\"en\":\"Commune of Ouesse\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.11.8260650','BJ','BJ.11','{\"en\":\"Commune of Savalou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.11.8260651','BJ','BJ.11','{\"en\":\"Commune of Save\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.18.8260652','BJ','BJ.18','{\"en\":\"Commune of Abomey\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.18.8260653','BJ','BJ.18','{\"en\":\"Commune of Agbangnizoun\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.18.8260654','BJ','BJ.18','{\"en\":\"Commune of Djidja\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.09.8260655','BJ','BJ.09','{\"en\":\"Commune of Allada\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.09.8260656','BJ','BJ.09','{\"en\":\"Commune of Toffo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.09.8260657','BJ','BJ.09','{\"en\":\"Commune of Ze\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.13.8260658','BJ','BJ.13','{\"en\":\"Commune of Djougou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.17.8334580','BJ','BJ.17','{\"en\":\"Commune of Sakete\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.15.8335018','BJ','BJ.15','{\"en\":\"Commune of Houeyogbe\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.15.8335019','BJ','BJ.15','{\"en\":\"Commune of Bopa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.17.8335162','BJ','BJ.17','{\"en\":\"Adjaouere\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.16.8693304','BJ','BJ.16','{\"en\":\"Adjara\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.16.9063965','BJ','BJ.16','{\"en\":\"Akpro-Misserete\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.16.9063966','BJ','BJ.16','{\"en\":\"Avrankou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.17.9063970','BJ','BJ.17','{\"en\":\"Ifangni\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.15.9166075','BJ','BJ.15','{\"en\":\"Grand-Popo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.15.9166076','BJ','BJ.15','{\"en\":\"Comé\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.08.10344466','BJ','BJ.08','{\"en\":\"Cobly\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.08.10344467','BJ','BJ.08','{\"en\":\"Boukoumbé\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.07.10344468','BJ','BJ.07','{\"en\":\"Ségbana\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.07.10344469','BJ','BJ.07','{\"en\":\"Gogounou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.13.10344470','BJ','BJ.13','{\"en\":\"Bassila\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.12.10344472','BJ','BJ.12','{\"en\":\"Aplahoué\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.12.10344473','BJ','BJ.12','{\"en\":\"Djakotomey\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.12.10344474','BJ','BJ.12','{\"en\":\"Klouékanmè\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.12.10344475','BJ','BJ.12','{\"en\":\"Lalo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BJ.12.10344476','BJ','BJ.12','{\"en\":\"Toviklin\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Tchaourou\"}',2.60,8.89,'P','PPL','BJ.10','BJ.10.7669265',20971,'Africa/Porto-Novo',1,'2018-03-25 23:00:00','2018-03-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Tanguiéta\"}',1.27,10.62,'P','PPL','BJ.08','BJ.08.7874156',19833,'Africa/Porto-Novo',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Savé\"}',2.49,8.03,'P','PPL','BJ.11',NULL,97309,'Africa/Porto-Novo',1,'2022-01-08 23:00:00','2022-01-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Savalou\"}',1.98,7.93,'P','PPLA','BJ.11',NULL,30187,'Africa/Porto-Novo',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Sakété\"}',2.66,6.74,'P','PPLA','BJ.17',NULL,30111,'Africa/Porto-Novo',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Porto-Novo\"}',2.60,6.50,'P','PPLC','BJ.16',NULL,234168,'Africa/Porto-Novo',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Pobé\"}',2.66,6.98,'P','PPLA2','BJ.17','BJ.17.7670841',32983,'Africa/Porto-Novo',1,'2018-10-09 23:00:00','2018-10-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Parakou\"}',2.63,9.34,'P','PPLA','BJ.10',NULL,163753,'Africa/Porto-Novo',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Ouidah\"}',2.09,6.36,'P','PPLA','BJ.09',NULL,83503,'Africa/Porto-Novo',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Nikki\"}',3.21,9.94,'P','PPL','BJ.10','BJ.10.7669355',69970,'Africa/Porto-Novo',1,'2022-01-08 23:00:00','2022-01-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Natitingou\"}',1.38,10.30,'P','PPLA','BJ.08',NULL,80892,'Africa/Porto-Novo',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Malanville\"}',3.38,11.87,'P','PPLA3','BJ.07','BJ.07.7874170',37117,'Africa/Porto-Novo',1,'2018-03-19 23:00:00','2018-03-19 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Lokossa\"}',1.72,6.64,'P','PPLA','BJ.15','BJ.15.7668924',86971,'Africa/Porto-Novo',1,'2017-12-27 23:00:00','2017-12-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Kétou\"}',2.60,7.36,'P','PPL','BJ.17','BJ.17.7670840',22341,'Africa/Porto-Novo',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Kandi\"}',2.94,11.13,'P','PPLA','BJ.07',NULL,109701,'Africa/Porto-Novo',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Hévié\"}',2.25,6.42,'P','PPL','BJ.09','BJ.09.7874152',13450,'Africa/Porto-Novo',1,'2018-02-25 23:00:00','2018-02-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Guilmaro\"}',1.72,10.57,'P','PPL','BJ.08','BJ.08.7668910',6516,'Africa/Porto-Novo',1,'2018-02-25 23:00:00','2018-02-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Grand-Popo\"}',1.82,6.28,'P','PPL','BJ.15','BJ.15.9166075',9847,'Africa/Porto-Novo',1,'2017-12-27 23:00:00','2017-12-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Dogbo\"}',1.78,6.80,'P','PPLA','BJ.12',NULL,41312,'Africa/Porto-Novo',1,'2017-12-19 23:00:00','2017-12-19 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Djougou\"}',1.67,9.71,'P','PPLA','BJ.13',NULL,237040,'Africa/Porto-Novo',1,'2013-08-16 23:00:00','2013-08-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Dassa-Zoumé\"}',2.18,7.75,'P','PPL','BJ.11',NULL,21672,'Africa/Porto-Novo',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Cové\"}',2.34,7.22,'P','PPL','BJ.18',NULL,43554,'Africa/Porto-Novo',1,'2022-01-08 23:00:00','2022-01-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Cotonou\"}',2.42,6.37,'P','PPLG','BJ.14',NULL,780000,'Africa/Porto-Novo',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Comé\"}',1.88,6.41,'P','PPL','BJ.11',NULL,29208,'Africa/Porto-Novo',1,'2018-04-14 23:00:00','2018-04-14 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Bohicon\"}',2.07,7.18,'P','PPLA2','BJ.18','BJ.18.7668931',125092,'Africa/Porto-Novo',1,'2018-05-28 23:00:00','2018-05-28 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Bétérou\"}',2.26,9.20,'P','PPL','BJ.10','BJ.10.7669265',13108,'Africa/Porto-Novo',1,'2018-03-25 23:00:00','2018-03-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Bembèrèkè\"}',2.66,10.23,'P','PPL','BJ.10','BJ.10.7669270',24006,'Africa/Porto-Novo',1,'2018-03-19 23:00:00','2018-03-19 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Bassila\"}',1.67,9.01,'P','PPL','BJ.13','BJ.13.10344470',23616,'Africa/Porto-Novo',1,'2018-03-25 23:00:00','2018-03-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Banikoara\"}',2.44,11.30,'P','PPL','BJ.07','BJ.07.7668935',22487,'Africa/Porto-Novo',1,'2018-02-25 23:00:00','2018-02-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Aplahoué\"}',1.68,6.93,'P','PPL','BJ.12','BJ.12.10344472',19862,'Africa/Porto-Novo',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Allada\"}',2.15,6.67,'P','PPL','BJ.09','BJ.09.8260655',20094,'Africa/Porto-Novo',1,'2018-03-18 23:00:00','2018-03-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Abomey-Calavi\"}',2.36,6.45,'P','PPL','BJ.09','BJ.09.7874152',385755,'Africa/Porto-Novo',1,'2018-02-25 23:00:00','2018-02-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BJ','{\"en\":\"Abomey\"}',1.99,7.18,'P','PPLA','BJ.18',NULL,82154,'Africa/Porto-Novo',1,'2019-02-26 23:00:00','2019-02-26 23:00:00');
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
