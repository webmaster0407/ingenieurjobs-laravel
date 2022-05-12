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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('MQ.MQ','MQ','{\"en\":\"Martinique\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('MQ.MQ.972','MQ','MQ.MQ','{\"en\":\"Martinique\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MQ','{\"en\":\"Saint-Joseph\"}',-61.04,14.67,'P','PPL','MQ.MQ','MQ.MQ.972',16974,'America/Martinique',1,'2018-12-03 23:00:00','2018-12-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MQ','{\"en\":\"Sainte-Marie\"}',-60.99,14.78,'P','PPL','MQ.MQ','MQ.MQ.972',20380,'America/Martinique',1,'2018-12-03 23:00:00','2018-12-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MQ','{\"en\":\"Sainte-Luce\"}',-60.92,14.47,'P','PPL','MQ.MQ','MQ.MQ.972',9196,'America/Martinique',1,'2018-12-03 23:00:00','2018-12-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MQ','{\"en\":\"Rivière-Pilote\"}',-60.90,14.49,'P','PPL','MQ.MQ','MQ.MQ.972',13359,'America/Martinique',1,'2017-07-03 23:00:00','2017-07-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MQ','{\"en\":\"Le Vauclin\"}',-60.84,14.55,'P','PPL','MQ.MQ','MQ.MQ.972',7812,'America/Martinique',1,'2017-07-03 23:00:00','2017-07-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MQ','{\"en\":\"Les Trois-Îlets\"}',-61.03,14.54,'P','PPL','MQ.MQ','MQ.MQ.972',5657,'America/Martinique',1,'2017-06-05 23:00:00','2017-06-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MQ','{\"en\":\"Saint-Esprit\"}',-60.93,14.55,'P','PPL','MQ.MQ','MQ.MQ.972',8508,'America/Martinique',1,'2008-03-12 23:00:00','2008-03-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MQ','{\"en\":\"Le Robert\"}',-60.94,14.68,'P','PPL','MQ.MQ','MQ.MQ.972',23814,'America/Martinique',1,'2019-02-26 23:00:00','2019-02-26 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MQ','{\"en\":\"Le Morne-Rouge\"}',-61.14,14.78,'P','PPL','MQ.MQ','MQ.MQ.972',5469,'America/Martinique',1,'2018-12-03 23:00:00','2018-12-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MQ','{\"en\":\"Le Marin\"}',-60.87,14.47,'P','PPL','MQ.MQ','MQ.MQ.972',7943,'America/Martinique',1,'2017-07-03 23:00:00','2017-07-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MQ','{\"en\":\"Le Lorrain\"}',-61.06,14.83,'P','PPL','MQ.MQ','MQ.MQ.972',8341,'America/Martinique',1,'2018-12-03 23:00:00','2018-12-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MQ','{\"en\":\"Le Lamentin\"}',-61.00,14.61,'P','PPL','MQ.MQ','MQ.MQ.972',40581,'America/Martinique',1,'2021-12-17 23:00:00','2021-12-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MQ','{\"en\":\"Le François\"}',-60.90,14.62,'P','PPL','MQ.MQ','MQ.MQ.972',19682,'America/Martinique',1,'2017-07-03 23:00:00','2017-07-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MQ','{\"en\":\"La Trinité\"}',-60.96,14.74,'P','PPL','MQ.MQ','MQ.MQ.972',15040,'America/Martinique',1,'2018-12-03 23:00:00','2018-12-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MQ','{\"en\":\"Le Gros-Morne\"}',-61.00,14.70,'P','PPL','MQ.MQ','MQ.MQ.972',11025,'America/Martinique',1,'2021-12-17 23:00:00','2021-12-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MQ','{\"en\":\"Fort-de-France\"}',-61.07,14.60,'P','PPLC','MQ.MQ','MQ.MQ.972',89995,'America/Martinique',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('MQ','{\"en\":\"Ducos\"}',-60.97,14.58,'P','PPL','MQ.MQ','MQ.MQ.972',17394,'America/Martinique',1,'2018-12-03 23:00:00','2018-12-03 23:00:00');
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
