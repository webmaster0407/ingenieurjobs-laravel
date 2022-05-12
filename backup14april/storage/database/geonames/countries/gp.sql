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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GP.GP','GP','{\"en\":\"Guadeloupe\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GP.GP.971','GP','GP.GP','{\"en\":\"Guadeloupe\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GP','{\"en\":\"Vieux-Habitants\"}',-61.77,16.06,'P','PPL','GP.GP','GP.GP.971',7728,'America/Guadeloupe',1,'2017-05-07 23:00:00','2017-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GP','{\"en\":\"Trois-Rivières\"}',-61.64,15.98,'P','PPL','GP.GP','GP.GP.971',8812,'America/Guadeloupe',1,'2017-05-07 23:00:00','2017-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GP','{\"en\":\"Saint-François\"}',-61.27,16.25,'P','PPL','GP.GP','GP.GP.971',12732,'America/Guadeloupe',1,'2017-06-06 23:00:00','2017-06-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GP','{\"en\":\"Sainte-Rose\"}',-61.70,16.33,'P','PPL','GP.GP','GP.GP.971',20192,'America/Guadeloupe',1,'2017-05-07 23:00:00','2017-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GP','{\"en\":\"Sainte-Anne\"}',-61.38,16.23,'P','PPL','GP.GP','GP.GP.971',22859,'America/Guadeloupe',1,'2017-06-06 23:00:00','2017-06-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GP','{\"en\":\"Saint-Claude\"}',-61.70,16.03,'P','PPL','GP.GP','GP.GP.971',10134,'America/Guadeloupe',1,'2017-05-07 23:00:00','2017-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GP','{\"en\":\"Port-Louis\"}',-61.53,16.42,'P','PPL','GP.GP','GP.GP.971',5515,'America/Guadeloupe',1,'2017-06-06 23:00:00','2017-06-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GP','{\"en\":\"Pointe-Noire\"}',-61.79,16.23,'P','PPL','GP.GP','GP.GP.971',7749,'America/Guadeloupe',1,'2017-05-07 23:00:00','2017-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GP','{\"en\":\"Pointe-à-Pitre\"}',-61.54,16.24,'P','PPL','GP.GP','GP.GP.971',18264,'America/Guadeloupe',1,'2019-02-25 23:00:00','2019-02-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GP','{\"en\":\"Petit-Canal\"}',-61.49,16.38,'P','PPL','GP.GP','GP.GP.971',8554,'America/Guadeloupe',1,'2017-06-06 23:00:00','2017-06-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GP','{\"en\":\"Petit-Bourg\"}',-61.59,16.19,'P','PPL','GP.GP','GP.GP.971',24994,'America/Guadeloupe',1,'2017-05-07 23:00:00','2017-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GP','{\"en\":\"Les Abymes\"}',-61.51,16.27,'P','PPL','GP.GP','GP.GP.971',63058,'America/Guadeloupe',1,'2019-02-25 23:00:00','2019-02-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GP','{\"en\":\"Le Moule\"}',-61.35,16.33,'P','PPL','GP.GP','GP.GP.971',22692,'America/Guadeloupe',1,'2017-06-06 23:00:00','2017-06-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GP','{\"en\":\"Le Gosier\"}',-61.49,16.21,'P','PPL','GP.GP','GP.GP.971',28698,'America/Guadeloupe',1,'2017-05-07 23:00:00','2017-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GP','{\"en\":\"Lamentin\"}',-61.63,16.27,'P','PPL','GP.GP','GP.GP.971',14891,'America/Guadeloupe',1,'2017-05-07 23:00:00','2017-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GP','{\"en\":\"Grand-Bourg\"}',-61.31,15.88,'P','PPL','GP.GP','GP.GP.971',5867,'America/Guadeloupe',1,'2017-06-06 23:00:00','2017-06-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GP','{\"en\":\"Gourbeyre\"}',-61.69,15.99,'P','PPL','GP.GP','GP.GP.971',8571,'America/Guadeloupe',1,'2017-05-07 23:00:00','2017-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GP','{\"en\":\"Capesterre-Belle-Eau\"}',-61.56,16.04,'P','PPL','GP.GP','GP.GP.971',19821,'America/Guadeloupe',1,'2017-05-07 23:00:00','2017-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GP','{\"en\":\"Bouillante\"}',-61.77,16.13,'P','PPL','GP.GP','GP.GP.971',7540,'America/Guadeloupe',1,'2017-05-07 23:00:00','2017-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GP','{\"en\":\"Basse-Terre\"}',-61.73,16.00,'P','PPLC','GP.GP','GP.GP.971',11472,'America/Guadeloupe',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GP','{\"en\":\"Baillif\"}',-61.75,16.02,'P','PPL','GP.GP','GP.GP.971',5705,'America/Guadeloupe',1,'2017-05-07 23:00:00','2017-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GP','{\"en\":\"Baie-Mahault\"}',-61.59,16.27,'P','PPL','GP.GP','GP.GP.971',30551,'America/Guadeloupe',1,'2019-02-25 23:00:00','2019-02-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GP','{\"en\":\"Anse-Bertrand\"}',-61.51,16.47,'P','PPL','GP.GP','GP.GP.971',5146,'America/Guadeloupe',1,'2017-06-06 23:00:00','2017-06-06 23:00:00');
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
