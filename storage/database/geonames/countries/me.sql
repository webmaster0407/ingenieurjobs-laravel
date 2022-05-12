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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ME.17','ME','{\"en\":\"Opština Rožaje\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ME.21','ME','{\"en\":\"Opština Žabljak\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ME.20','ME','{\"en\":\"Ulcinj\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ME.19','ME','{\"en\":\"Tivat\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ME.16','ME','{\"en\":\"Podgorica\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ME.18','ME','{\"en\":\"Opština Šavnik\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ME.15','ME','{\"en\":\"Opština Plužine\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ME.14','ME','{\"en\":\"Pljevlja\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ME.13','ME','{\"en\":\"Opština Plav\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ME.12','ME','{\"en\":\"Opština Nikšić\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ME.11','ME','{\"en\":\"Mojkovac\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ME.10','ME','{\"en\":\"Kotor\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ME.09','ME','{\"en\":\"Opština Kolašin\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ME.03','ME','{\"en\":\"Berane\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ME.08','ME','{\"en\":\"Herceg Novi\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ME.07','ME','{\"en\":\"Danilovgrad\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ME.06','ME','{\"en\":\"Cetinje\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ME.05','ME','{\"en\":\"Budva\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ME.04','ME','{\"en\":\"Bijelo Polje\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ME.02','ME','{\"en\":\"Bar\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ME.01','ME','{\"en\":\"Andrijevica\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ME.22','ME','{\"en\":\"Gusinje\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ME.23','ME','{\"en\":\"Petnjica\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ME.24','ME','{\"en\":\"Tuzi\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ME','{\"en\":\"Rožaje\"}',20.17,42.83,'P','PPLA','ME.17',NULL,9121,'Europe/Podgorica',1,'2013-06-27 23:00:00','2013-06-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ME','{\"en\":\"Žabljak\"}',19.12,43.15,'P','PPLA','ME.21',NULL,1937,'Europe/Podgorica',1,'2018-12-07 23:00:00','2018-12-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ME','{\"en\":\"Ulcinj\"}',19.22,41.93,'P','PPLA','ME.20',NULL,10828,'Europe/Podgorica',1,'2013-06-27 23:00:00','2013-06-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ME','{\"en\":\"Tuzi\"}',19.33,42.37,'P','PPLA','ME.24',NULL,3789,'Europe/Podgorica',1,'2019-12-03 23:00:00','2019-12-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ME','{\"en\":\"Tivat\"}',18.69,42.44,'P','PPLA','ME.19',NULL,6280,'Europe/Podgorica',1,'2019-10-08 23:00:00','2019-10-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ME','{\"en\":\"Šavnik\"}',19.10,42.96,'P','PPLA','ME.18',NULL,633,'Europe/Podgorica',1,'2018-12-07 23:00:00','2018-12-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ME','{\"en\":\"Podgorica\"}',19.26,42.44,'P','PPLC','ME.16',NULL,236852,'Europe/Podgorica',1,'2020-08-11 23:00:00','2020-08-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ME','{\"en\":\"Plužine\"}',18.84,43.15,'P','PPLA','ME.15',NULL,1494,'Europe/Podgorica',1,'2018-12-07 23:00:00','2018-12-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ME','{\"en\":\"Pljevlja\"}',19.36,43.36,'P','PPLA','ME.14',NULL,19489,'Europe/Podgorica',1,'2019-02-25 23:00:00','2019-02-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ME','{\"en\":\"Plav\"}',19.95,42.60,'P','PPLA','ME.13',NULL,3615,'Europe/Podgorica',1,'2013-07-05 23:00:00','2013-07-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ME','{\"en\":\"Nikšić\"}',18.94,42.77,'P','PPLA','ME.12',NULL,58212,'Europe/Podgorica',1,'2018-04-25 23:00:00','2018-04-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ME','{\"en\":\"Mojkovac\"}',19.58,42.96,'P','PPLA','ME.11',NULL,4120,'Europe/Podgorica',1,'2018-04-25 23:00:00','2018-04-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ME','{\"en\":\"Kotor\"}',18.77,42.42,'P','PPLA','ME.10',NULL,5345,'Europe/Podgorica',1,'2013-06-27 23:00:00','2013-06-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ME','{\"en\":\"Kolašin\"}',19.52,42.82,'P','PPLA','ME.09',NULL,2989,'Europe/Podgorica',1,'2018-06-12 23:00:00','2018-06-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ME','{\"en\":\"Berane\"}',19.87,42.84,'P','PPLA','ME.03',NULL,11073,'Europe/Podgorica',1,'2018-04-25 23:00:00','2018-04-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ME','{\"en\":\"Herceg Novi\"}',18.54,42.45,'P','PPLA','ME.08',NULL,19536,'Europe/Podgorica',1,'2020-02-06 23:00:00','2020-02-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ME','{\"en\":\"Gusinje\"}',19.83,42.56,'P','PPLA','ME.22',NULL,4,'Europe/Podgorica',1,'2018-06-08 23:00:00','2018-06-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ME','{\"en\":\"Dobrota\"}',18.77,42.45,'P','PPLL','ME.10',NULL,5435,'Europe/Podgorica',1,'2018-02-16 23:00:00','2018-02-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ME','{\"en\":\"Danilovgrad\"}',19.15,42.55,'P','PPLA','ME.07',NULL,5208,'Europe/Podgorica',1,'2018-12-07 23:00:00','2018-12-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ME','{\"en\":\"Cetinje\"}',18.91,42.39,'P','PPLA','ME.06',NULL,15137,'Europe/Podgorica',1,'2018-12-07 23:00:00','2018-12-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ME','{\"en\":\"Budva\"}',18.84,42.29,'P','PPLA','ME.05',NULL,18000,'Europe/Podgorica',1,'2018-12-07 23:00:00','2018-12-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ME','{\"en\":\"Bijelo Polje\"}',19.75,43.04,'P','PPLA','ME.04',NULL,15400,'Europe/Podgorica',1,'2018-04-25 23:00:00','2018-04-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ME','{\"en\":\"Bar\"}',19.10,42.09,'P','PPLA','ME.02',NULL,17727,'Europe/Podgorica',1,'2019-11-05 23:00:00','2019-11-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ME','{\"en\":\"Andrijevica\"}',19.79,42.73,'P','PPLA','ME.01',NULL,1073,'Europe/Podgorica',1,'2018-04-25 23:00:00','2018-04-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ME','{\"en\":\"Petnjica\"}',19.96,42.91,'P','PPLA','ME.23',NULL,0,'Europe/Podgorica',1,'2018-04-25 23:00:00','2018-04-25 23:00:00');
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
