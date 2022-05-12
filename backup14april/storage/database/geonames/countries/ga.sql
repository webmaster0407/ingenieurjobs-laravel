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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GA.09','GA','{\"en\":\"Woleu-Ntem\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GA.08','GA','{\"en\":\"Ogooué-Maritime\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GA.07','GA','{\"en\":\"Ogooué-Lolo\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GA.06','GA','{\"en\":\"Ogooué-Ivindo\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GA.05','GA','{\"en\":\"Nyanga\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GA.04','GA','{\"en\":\"Ngouni\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GA.03','GA','{\"en\":\"Moyen-Ogooué\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GA.02','GA','{\"en\":\"Haut-Ogooué\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GA.01','GA','{\"en\":\"Estuaire\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.05.7870325','GA','GA.05','{\"en\":\"Basse-Banio Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.05.7870326','GA','GA.05','{\"en\":\"Mougoutsi Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.08.7870327','GA','GA.08','{\"en\":\"Ndougou Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.04.7870328','GA','GA.04','{\"en\":\"Douya-Onoye Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.04.7870330','GA','GA.04','{\"en\":\"Ndolou Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.08.7870331','GA','GA.08','{\"en\":\"Étimboué Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.02.7870333','GA','GA.02','{\"en\":\"Plateaux Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.02.7870395','GA','GA.02','{\"en\":\"Mpassa Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.05.7870411','GA','GA.05','{\"en\":\"Haute-Banio Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.03.7870425','GA','GA.03','{\"en\":\"Abanga-Bigné Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.06.7870426','GA','GA.06','{\"en\":\"Lope Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.07.7870427','GA','GA.07','{\"en\":\"Lolo Bouenguidi Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.04.7870428','GA','GA.04','{\"en\":\"Ogoulou Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.08.8224678','GA','GA.08','{\"en\":\"Bendje\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.04.8260610','GA','GA.04','{\"en\":\"Tsamba-Magotsi Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.07.8260626','GA','GA.07','{\"en\":\"Mouloundou Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.02.8260627','GA','GA.02','{\"en\":\"Leboumbi-Leyou Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.04.8260628','GA','GA.04','{\"en\":\"Dola Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.04.8260629','GA','GA.04','{\"en\":\"Louetsi-Wano Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.01.8260630','GA','GA.01','{\"en\":\"Commune of Libreville\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.01.8260631','GA','GA.01','{\"en\":\"Komo-Mondah Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.01.8260632','GA','GA.01','{\"en\":\"Komo Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.02.8260634','GA','GA.02','{\"en\":\"Lekoko Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.03.11204018','GA','GA.03','{\"en\":\"Ogooue et des Lacs\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.06.11204107','GA','GA.06','{\"en\":\"Zadie\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.09.11204310','GA','GA.09','{\"en\":\"Woleu\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.09.11204504','GA','GA.09','{\"en\":\"Okano Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.09.11204591','GA','GA.09','{\"en\":\"Ntem Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.05.11996061','GA','GA.05','{\"en\":\"Douigni\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.02.11996062','GA','GA.02','{\"en\":\"Ogooue-Letili\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.02.11996063','GA','GA.02','{\"en\":\"Djouori-Agnili\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.04.11996064','GA','GA.04','{\"en\":\"Louetsi-Bibaka\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.04.11996065','GA','GA.04','{\"en\":\"Boumi-Louetsi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.07.11996066','GA','GA.07','{\"en\":\"Lombo-Bouenguidi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.02.11996067','GA','GA.02','{\"en\":\"Lekoni-Lekori\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.07.11996068','GA','GA.07','{\"en\":\"Offoue-Onoye\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.02.11996069','GA','GA.02','{\"en\":\"Djoue\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.02.11996070','GA','GA.02','{\"en\":\"Bayi-Brikolo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.06.11996071','GA','GA.06','{\"en\":\"Mvoung\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.09.11996072','GA','GA.09','{\"en\":\"Haut-Komo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.09.11996073','GA','GA.09','{\"en\":\"Haut-Ntem\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.05.11996074','GA','GA.05','{\"en\":\"Mongo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.02.11996075','GA','GA.02','{\"en\":\"Lekabi-Lewolo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.04.11996076','GA','GA.04','{\"en\":\"Mougalaba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.05.11996077','GA','GA.05','{\"en\":\"Doutsila\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.02.11996078','GA','GA.02','{\"en\":\"Sebe-Brikolo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.01.11996079','GA','GA.01','{\"en\":\"Noya\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GA.06.11996080','GA','GA.06','{\"en\":\"Ivindo\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GA','{\"en\":\"Tchibanga\"}',10.98,-2.93,'P','PPLA','GA.05','GA.05.7870326',19365,'Africa/Libreville',1,'2014-09-06 23:00:00','2014-09-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GA','{\"en\":\"Port-Gentil\"}',8.78,-0.72,'P','PPLA','GA.08',NULL,109163,'Africa/Libreville',1,'2011-08-24 23:00:00','2011-08-24 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GA','{\"en\":\"Oyem\"}',11.58,1.60,'P','PPLA','GA.09',NULL,30870,'Africa/Libreville',1,'2011-08-24 23:00:00','2011-08-24 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GA','{\"en\":\"Okondja\"}',13.68,-0.65,'P','PPL','GA.02',NULL,7155,'Africa/Libreville',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GA','{\"en\":\"Ntoum\"}',9.76,0.39,'P','PPL','GA.01',NULL,8569,'Africa/Libreville',1,'2018-12-04 23:00:00','2018-12-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GA','{\"en\":\"Ndendé\"}',11.36,-2.40,'P','PPL','GA.04',NULL,6200,'Africa/Libreville',1,'2017-07-03 23:00:00','2017-07-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GA','{\"en\":\"Ndjolé\"}',10.76,-0.18,'P','PPL','GA.03',NULL,5098,'Africa/Libreville',1,'2017-09-19 23:00:00','2017-09-19 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GA','{\"en\":\"Mounana\"}',13.16,-1.41,'P','PPL','GA.02',NULL,8780,'Africa/Libreville',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GA','{\"en\":\"Mouila\"}',11.06,-1.87,'P','PPLA','GA.04',NULL,22469,'Africa/Libreville',1,'2011-08-24 23:00:00','2011-08-24 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GA','{\"en\":\"Moanda\"}',13.20,-1.57,'P','PPL','GA.02',NULL,30151,'Africa/Libreville',1,'2015-03-30 23:00:00','2015-03-30 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GA','{\"en\":\"Makokou\"}',12.86,0.57,'P','PPLA','GA.06',NULL,13571,'Africa/Libreville',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GA','{\"en\":\"Libreville\"}',9.45,0.39,'P','PPLC','GA.01',NULL,578156,'Africa/Libreville',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GA','{\"en\":\"Lastoursville\"}',12.71,-0.82,'P','PPL','GA.07',NULL,8340,'Africa/Libreville',1,'2013-06-29 23:00:00','2013-06-29 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GA','{\"en\":\"Lambaréné\"}',10.24,-0.70,'P','PPLA','GA.03',NULL,20714,'Africa/Libreville',1,'2016-12-17 23:00:00','2016-12-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GA','{\"en\":\"Koulamoutou\"}',12.46,-1.14,'P','PPLA','GA.07',NULL,16222,'Africa/Libreville',1,'2016-11-26 23:00:00','2016-11-26 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GA','{\"en\":\"Gamba\"}',10.00,-2.65,'P','PPL','GA.08',NULL,9928,'Africa/Libreville',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GA','{\"en\":\"Franceville\"}',13.58,-1.63,'P','PPLA','GA.02',NULL,42967,'Africa/Libreville',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GA','{\"en\":\"Fougamou\"}',10.58,-1.22,'P','PPL','GA.04',NULL,5649,'Africa/Libreville',1,'2012-04-24 23:00:00','2012-04-24 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GA','{\"en\":\"Booué\"}',11.94,-0.09,'P','PPL','GA.06',NULL,5787,'Africa/Libreville',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GA','{\"en\":\"Bitam\"}',11.50,2.08,'P','PPL','GA.09',NULL,10297,'Africa/Libreville',1,'2012-02-27 23:00:00','2012-02-27 23:00:00');
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
