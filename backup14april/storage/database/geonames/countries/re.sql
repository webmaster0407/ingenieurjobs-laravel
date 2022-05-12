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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('RE.RE','RE','{\"en\":\"Réunion\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('RE.RE.974','RE','RE.RE','{\"en\":\"Réunion\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('RE','{\"en\":\"Les Trois-Bassins\"}',55.30,-21.10,'P','PPLA4','RE.RE','RE.RE.974',7114,'Indian/Reunion',1,'2017-01-09 23:00:00','2017-01-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('RE','{\"en\":\"Salazie\"}',55.54,-21.03,'P','PPL','RE.RE','RE.RE.974',7696,'Indian/Reunion',1,'2018-06-07 23:00:00','2018-06-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('RE','{\"en\":\"Saint-Pierre\"}',55.48,-21.34,'P','PPL','RE.RE','RE.RE.974',76655,'Indian/Reunion',1,'2016-01-18 23:00:00','2016-01-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('RE','{\"en\":\"Saint-Philippe\"}',55.77,-21.36,'P','PPL','RE.RE','RE.RE.974',5441,'Indian/Reunion',1,'2018-06-07 23:00:00','2018-06-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('RE','{\"en\":\"Saint-Paul\"}',55.27,-21.01,'P','PPL','RE.RE','RE.RE.974',99307,'Indian/Reunion',1,'2019-02-25 23:00:00','2019-02-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('RE','{\"en\":\"Saint-Louis\"}',55.41,-21.29,'P','PPL','RE.RE','RE.RE.974',47881,'Indian/Reunion',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('RE','{\"en\":\"Saint-Leu\"}',55.29,-21.17,'P','PPL','RE.RE','RE.RE.974',28278,'Indian/Reunion',1,'2017-09-05 23:00:00','2017-09-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('RE','{\"en\":\"Saint-Joseph\"}',55.62,-21.38,'P','PPL','RE.RE','RE.RE.974',33694,'Indian/Reunion',1,'2018-06-07 23:00:00','2018-06-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('RE','{\"en\":\"Sainte-Suzanne\"}',55.61,-20.91,'P','PPL','RE.RE','RE.RE.974',20530,'Indian/Reunion',1,'2018-06-07 23:00:00','2018-06-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('RE','{\"en\":\"Sainte-Rose\"}',55.80,-21.13,'P','PPL','RE.RE','RE.RE.974',7035,'Indian/Reunion',1,'2018-06-07 23:00:00','2018-06-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('RE','{\"en\":\"Sainte-Marie\"}',55.55,-20.90,'P','PPL','RE.RE','RE.RE.974',31636,'Indian/Reunion',1,'2018-06-07 23:00:00','2018-06-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('RE','{\"en\":\"Saint-Denis\"}',55.45,-20.88,'P','PPLC','RE.RE','RE.RE.974',137195,'Indian/Reunion',1,'2019-05-15 23:00:00','2019-05-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('RE','{\"en\":\"Saint-Benoît\"}',55.72,-21.04,'P','PPL','RE.RE','RE.RE.974',35310,'Indian/Reunion',1,'2018-06-07 23:00:00','2018-06-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('RE','{\"en\":\"Saint-André\"}',55.65,-20.96,'P','PPL','RE.RE','RE.RE.974',48674,'Indian/Reunion',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('RE','{\"en\":\"Petite-Île\"}',55.56,-21.35,'P','PPL','RE.RE','RE.RE.974',10961,'Indian/Reunion',1,'2018-06-07 23:00:00','2018-06-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('RE','{\"en\":\"Le Tampon\"}',55.52,-21.28,'P','PPL','RE.RE','RE.RE.974',69986,'Indian/Reunion',1,'2019-02-25 23:00:00','2019-02-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('RE','{\"en\":\"Les Avirons\"}',55.34,-21.24,'P','PPL','RE.RE','RE.RE.974',8006,'Indian/Reunion',1,'2018-06-07 23:00:00','2018-06-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('RE','{\"en\":\"Le Port\"}',55.29,-20.94,'P','PPL','RE.RE','RE.RE.974',40771,'Indian/Reunion',1,'2020-10-24 23:00:00','2020-10-24 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('RE','{\"en\":\"La Possession\"}',55.33,-20.93,'P','PPL','RE.RE','RE.RE.974',26865,'Indian/Reunion',1,'2018-06-07 23:00:00','2018-06-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('RE','{\"en\":\"Entre-Deux\"}',55.47,-21.23,'P','PPLA4','RE.RE','RE.RE.974',5788,'Indian/Reunion',1,'2017-01-09 23:00:00','2017-01-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('RE','{\"en\":\"Cilaos\"}',55.47,-21.14,'P','PPL','RE.RE','RE.RE.974',6225,'Indian/Reunion',1,'2018-06-07 23:00:00','2018-06-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('RE','{\"en\":\"Bras-Panon\"}',55.68,-21.00,'P','PPL','RE.RE','RE.RE.974',10444,'Indian/Reunion',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('RE','{\"en\":\"Piton Saint-Leu\"}',55.32,-21.22,'P','PPLL','RE.RE','RE.RE.974',29278,'Indian/Reunion',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
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
