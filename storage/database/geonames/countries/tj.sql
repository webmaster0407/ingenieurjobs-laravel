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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TJ.03','TJ','{\"en\":\"Sughd\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TJ.01','TJ','{\"en\":\"Gorno-Badakhshan\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TJ.02','TJ','{\"en\":\"Khatlon\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TJ.RR','TJ','{\"en\":\"Republican Subordination\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TJ.04','TJ','{\"en\":\"Dushanbe\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.RR.1220012','TJ','TJ.RR','{\"en\":\"Tursunzoda District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.04.1220048','TJ','TJ.04','{\"en\":\"Zheleznodorozhnyy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.02.1220107','TJ','TJ.02','{\"en\":\"Yavanskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.01.1220206','TJ','TJ.01','{\"en\":\"Vanchskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.04.1220319','TJ','TJ.04','{\"en\":\"Tsentral’nyy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.02.1220445','TJ','TJ.02','{\"en\":\"Sovetskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.01.1220683','TJ','TJ.01','{\"en\":\"Rushanskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.03.1220797','TJ','TJ.03','{\"en\":\"Pendzhikentskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.RR.1220854','TJ','TJ.RR','{\"en\":\"Vahdat District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.04.1220859','TJ','TJ.04','{\"en\":\"Oktyabr’skiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.00.1221088','TJ','TJ.00','{\"en\":\"Leninskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.02.1221090','TJ','TJ.02','{\"en\":\"Muminobodskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.00.1221249','TJ','TJ.00','{\"en\":\"Komsomolabadskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.02.1221253','TJ','TJ.02','{\"en\":\"Bokhtarskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.02.1221320','TJ','TJ.02','{\"en\":\"Khovalingskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.01.1221558','TJ','TJ.01','{\"en\":\"Darvozskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.02.1221646','TJ','TJ.02','{\"en\":\"Gozimalikskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.00.1221707','TJ','TJ.00','{\"en\":\"Gissarskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.04.1221873','TJ','TJ.04','{\"en\":\"Dushanbe\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.03.1222220','TJ','TJ.03','{\"en\":\"Ayninskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.03.1514816','TJ','TJ.03','{\"en\":\"Nohiyai Zafarobod\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.03.1514880','TJ','TJ.03','{\"en\":\"Khodzhentskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.RR.7669227','TJ','TJ.RR','{\"en\":\"Tojikobod District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.03.7669228','TJ','TJ.03','{\"en\":\"Kuhistoni Mastchohskiy\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.RR.7669385','TJ','TJ.RR','{\"en\":\"Shahrinaw District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.RR.7669387','TJ','TJ.RR','{\"en\":\"Rogunsky rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.RR.7669388','TJ','TJ.RR','{\"en\":\"Varzob District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.RR.7670495','TJ','TJ.RR','{\"en\":\"Tavildara\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.02.7670506','TJ','TJ.02','{\"en\":\"Shuro-obod District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.03.7670512','TJ','TJ.03','{\"en\":\"Shahriston District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.01.7670513','TJ','TJ.01','{\"en\":\"Roshtqal\'a District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.02.7670570','TJ','TJ.02','{\"en\":\"Norak\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.02.7798497','TJ','TJ.02','{\"en\":\"Qumsangir District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.03.8209859','TJ','TJ.03','{\"en\":\"Nohiyai Mastchoh\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.03.8209860','TJ','TJ.03','{\"en\":\"Nohiyai Bobojon Ghafurov\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.03.8213083','TJ','TJ.03','{\"en\":\"Nohiyai Asht\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.03.8213699','TJ','TJ.03','{\"en\":\"Nohiyai Konibodom\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.03.8213700','TJ','TJ.03','{\"en\":\"Nohiyai Isfara\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.03.8213796','TJ','TJ.03','{\"en\":\"Nohiyai Jabbor Rasulov\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.03.8216026','TJ','TJ.03','{\"en\":\"Nohiyai Spitamen\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.03.8216028','TJ','TJ.03','{\"en\":\"Istaravshan District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.03.8216029','TJ','TJ.03','{\"en\":\"Nohiyai Ghonchí\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.03.8216045','TJ','TJ.03','{\"en\":\"Nohiyai Ayni\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.03.8216066','TJ','TJ.03','{\"en\":\"Nohiyai Panjakent\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.01.8217321','TJ','TJ.01','{\"en\":\"Nohiyai Vanj\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.01.8220895','TJ','TJ.01','{\"en\":\"Nohiyai Darvoz\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.01.8220896','TJ','TJ.01','{\"en\":\"Nohiyai Ishqoshim\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.01.8220897','TJ','TJ.01','{\"en\":\"Nohiyai Murghob\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.01.8220920','TJ','TJ.01','{\"en\":\"Nohiyai Rŭshon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.01.8220923','TJ','TJ.01','{\"en\":\"Nohiyai Shughnon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.02.8220956','TJ','TJ.02','{\"en\":\"Nohiyai Abdurahmoni Jomí\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.02.8220957','TJ','TJ.02','{\"en\":\"Nohiyai Baljuvon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.02.8220958','TJ','TJ.02','{\"en\":\"Nohiyai Kushoniyon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.02.8220959','TJ','TJ.02','{\"en\":\"Nohiyai Vakhsh\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.02.8221033','TJ','TJ.02','{\"en\":\"Nohiyai Vose’\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.02.8221235','TJ','TJ.02','{\"en\":\"Nohiyai Danghara\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.02.8221240','TJ','TJ.02','{\"en\":\"Nohiyai Yovon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.02.8221250','TJ','TJ.02','{\"en\":\"Nohiyai Kolkhozobod\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.02.8221255','TJ','TJ.02','{\"en\":\"Nohiyai Qubodiyon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.02.8221261','TJ','TJ.02','{\"en\":\"Nohiyai Kŭlob\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.02.8221269','TJ','TJ.02','{\"en\":\"Nohiyai Mŭ’minobod\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.02.8221272','TJ','TJ.02','{\"en\":\"Nohiyai Nosiri Khusrav\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.02.8221276','TJ','TJ.02','{\"en\":\"Nohiyai Panj\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.02.8221279','TJ','TJ.02','{\"en\":\"Nohiyai Sarband\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.02.8221283','TJ','TJ.02','{\"en\":\"Nohiyai Temurmalik\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.02.8221284','TJ','TJ.02','{\"en\":\"Nohiyai Farkhor\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.02.8221285','TJ','TJ.02','{\"en\":\"Nohiyai Khovaling\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.02.8221286','TJ','TJ.02','{\"en\":\"Nohiyai Khuroson\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.02.8221287','TJ','TJ.02','{\"en\":\"Nohiyai Hamadoní\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.02.8221288','TJ','TJ.02','{\"en\":\"Nohiyai Jilikŭl\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.02.8221292','TJ','TJ.02','{\"en\":\"Nohiyai Shahritus\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.RR.8238328','TJ','TJ.RR','{\"en\":\"Nohiyai Rasht\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.RR.8238355','TJ','TJ.RR','{\"en\":\"Nohiyai Hisor\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.RR.8238358','TJ','TJ.RR','{\"en\":\"Jirgatol\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.RR.8238387','TJ','TJ.RR','{\"en\":\"Nohiyai Rūdakí\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TJ.RR.8714387','TJ','TJ.RR','{\"en\":\"Faizobod District\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Yovon\"}',69.04,38.31,'P','PPLA2','TJ.02',NULL,17471,'Asia/Dushanbe',1,'2012-02-27 23:00:00','2012-02-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Hulbuk\"}',69.65,37.81,'P','PPLA2','TJ.02',NULL,21736,'Asia/Dushanbe',1,'2020-04-07 23:00:00','2020-04-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Vakhsh\"}',68.83,37.71,'P','PPLA2','TJ.02',NULL,15215,'Asia/Dushanbe',1,'2012-02-27 23:00:00','2012-02-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Istaravshan\"}',69.00,39.91,'P','PPLA2','TJ.03','TJ.03.8216028',52851,'Asia/Dushanbe',1,'2017-07-20 23:00:00','2017-07-20 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Sovet\"}',69.59,38.05,'P','PPLA2','TJ.02',NULL,8695,'Asia/Dushanbe',1,'2012-02-27 23:00:00','2012-02-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Shahrinav\"}',68.33,38.57,'P','PPLA2','TJ.RR',NULL,5385,'Asia/Dushanbe',1,'2016-11-21 23:00:00','2016-11-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Shahritus\"}',68.14,37.26,'P','PPLA2','TJ.02',NULL,13042,'Asia/Dushanbe',1,'2012-07-03 23:00:00','2012-07-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Sarikhosor\"}',69.83,38.54,'P','PPL','TJ.02',NULL,5894,'Asia/Dushanbe',1,'2021-11-08 23:00:00','2021-11-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Roghun\"}',69.87,38.78,'P','PPL','TJ.RR',NULL,7731,'Asia/Dushanbe',1,'2016-11-21 23:00:00','2016-11-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Bokhtar\"}',68.78,37.84,'P','PPLA','TJ.02',NULL,65000,'Asia/Dushanbe',1,'2020-04-07 23:00:00','2020-04-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Panj\"}',69.10,37.24,'P','PPLA2','TJ.02',NULL,8019,'Asia/Dushanbe',1,'2012-06-04 23:00:00','2012-06-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Panjakent\"}',67.61,39.50,'P','PPLA2','TJ.03',NULL,35085,'Asia/Dushanbe',1,'2012-02-27 23:00:00','2012-02-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Farkhor\"}',69.40,37.49,'P','PPLA2','TJ.02',NULL,21736,'Asia/Dushanbe',1,'2012-02-27 23:00:00','2012-02-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Orzu\"}',68.82,37.56,'P','PPL','TJ.02',NULL,5988,'Asia/Dushanbe',1,'2013-09-05 23:00:00','2013-09-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Vahdat\"}',69.01,38.56,'P','PPLA2','TJ.RR',NULL,45693,'Asia/Dushanbe',1,'2021-07-27 23:00:00','2021-07-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Obigarm\"}',69.71,38.72,'P','PPL','TJ.RR',NULL,7400,'Asia/Dushanbe',1,'2021-11-08 23:00:00','2021-11-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Norak\"}',69.32,38.39,'P','PPLA2','TJ.02',NULL,18122,'Asia/Dushanbe',1,'2012-04-04 23:00:00','2012-04-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Novobod\"}',70.15,39.01,'P','PPL','TJ.RR',NULL,5352,'Asia/Dushanbe',1,'2021-11-08 23:00:00','2021-11-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Murghob\"}',73.97,38.17,'P','PPLA2','TJ.01',NULL,10815,'Asia/Dushanbe',1,'2012-12-04 23:00:00','2012-12-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Mŭ’minobod\"}',70.03,38.11,'P','PPLA2','TJ.02',NULL,11955,'Asia/Dushanbe',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Bokhtariyon\"}',68.73,37.88,'P','PPL','TJ.02',NULL,7900,'Asia/Dushanbe',1,'2021-11-08 23:00:00','2021-11-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Abdurahmoni Jomí\"}',68.81,37.95,'P','PPLA2','TJ.02',NULL,9943,'Asia/Dushanbe',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Kŭlob\"}',69.78,37.91,'P','PPLA2','TJ.02',NULL,78786,'Asia/Dushanbe',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Kolkhozobod\"}',68.66,37.59,'P','PPLA2','TJ.02',NULL,18476,'Asia/Dushanbe',1,'2012-02-27 23:00:00','2012-02-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Kirov\"}',68.86,37.82,'P','PPL','TJ.02',NULL,7696,'Asia/Dushanbe',1,'2013-03-04 23:00:00','2013-03-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Khorugh\"}',71.55,37.49,'P','PPLA','TJ.01',NULL,30000,'Asia/Dushanbe',1,'2012-02-27 23:00:00','2012-02-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Khodzha-Maston\"}',68.63,38.74,'P','PPL','TJ.RR',NULL,9781,'Asia/Dushanbe',1,'2018-12-03 23:00:00','2018-12-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Ishqoshim\"}',71.61,36.72,'P','PPLA2','TJ.01',NULL,26000,'Asia/Dushanbe',1,'2012-02-27 23:00:00','2012-02-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Hisor\"}',68.55,38.53,'P','PPLA2','TJ.RR','TJ.RR.8238355',23978,'Asia/Dushanbe',1,'2016-11-21 23:00:00','2016-11-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Rasht\"}',70.37,39.03,'P','PPLA2','TJ.RR',NULL,10771,'Asia/Dushanbe',1,'2016-11-21 23:00:00','2016-11-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Gharavŭtí\"}',68.45,37.57,'P','PPL','TJ.02',NULL,8474,'Asia/Dushanbe',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Jilikŭl\"}',68.53,37.49,'P','PPLA2','TJ.02',NULL,5434,'Asia/Dushanbe',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Dŭstí\"}',68.66,37.35,'P','PPLA2','TJ.02',NULL,8700,'Asia/Dushanbe',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Dushanbe\"}',68.78,38.54,'P','PPLC','TJ.04',NULL,679400,'Asia/Dushanbe',1,'2016-10-18 23:00:00','2016-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Danghara\"}',69.34,38.10,'P','PPLA2','TJ.02',NULL,22824,'Asia/Dushanbe',1,'2012-02-27 23:00:00','2012-02-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Chubek\"}',69.71,37.61,'P','PPL','TJ.02',NULL,19563,'Asia/Dushanbe',1,'2012-11-07 23:00:00','2012-11-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Boshkengash\"}',68.81,38.47,'P','PPL','TJ.04',NULL,23696,'Asia/Dushanbe',1,'2016-10-18 23:00:00','2016-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Tursunzoda\"}',68.23,38.51,'P','PPLA2','TJ.RR',NULL,37000,'Asia/Dushanbe',1,'2017-12-13 23:00:00','2017-12-13 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Avzikent\"}',69.28,37.80,'P','PPL','TJ.02',NULL,10373,'Asia/Dushanbe',1,'2021-11-08 23:00:00','2021-11-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Taboshar\"}',69.64,40.57,'P','PPL','TJ.03',NULL,17600,'Asia/Dushanbe',1,'2021-11-08 23:00:00','2021-11-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Proletar\"}',69.50,40.17,'P','PPLA2','TJ.03',NULL,16441,'Asia/Dushanbe',1,'2012-04-04 23:00:00','2012-04-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Pakhtakoron\"}',68.75,40.16,'P','PPL','TJ.03',NULL,8220,'Asia/Dushanbe',1,'2016-09-07 23:00:00','2016-09-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Nov\"}',69.37,40.15,'P','PPLA2','TJ.03',NULL,13833,'Asia/Dushanbe',1,'2012-04-04 23:00:00','2012-04-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Khujand\"}',69.62,40.28,'P','PPLA','TJ.03','TJ.03.8209860',144865,'Asia/Dushanbe',1,'2020-01-16 23:00:00','2020-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Qayroqqum\"}',69.80,40.27,'P','PPL','TJ.03',NULL,49200,'Asia/Dushanbe',1,'2021-11-08 23:00:00','2021-11-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Konsoy\"}',69.70,40.49,'P','PPL','TJ.03',NULL,6000,'Asia/Dushanbe',1,'2021-11-08 23:00:00','2021-11-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Konibodom\"}',70.43,40.29,'P','PPLA2','TJ.03',NULL,50359,'Asia/Dushanbe',1,'2012-04-04 23:00:00','2012-04-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Isfara\"}',70.63,40.13,'P','PPLA2','TJ.03',NULL,37738,'Asia/Dushanbe',1,'2012-02-27 23:00:00','2012-02-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Bŭston\"}',69.33,40.52,'P','PPLA2','TJ.03',NULL,13043,'Asia/Dushanbe',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Shaydon\"}',70.35,40.67,'P','PPLA2','TJ.03',NULL,11705,'Asia/Dushanbe',1,'2012-05-04 23:00:00','2012-05-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Adrasmon\"}',69.98,40.65,'P','PPL','TJ.03',NULL,13372,'Asia/Dushanbe',1,'2021-11-08 23:00:00','2021-11-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Buston\"}',69.69,40.23,'P','PPL','TJ.03','TJ.03.8209860',34000,'Asia/Dushanbe',1,'2021-11-08 23:00:00','2021-11-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TJ','{\"en\":\"Moskovskiy\"}',68.58,37.61,'P','PPL','TJ.02',NULL,22100,'Asia/Dushanbe',1,'2015-10-27 23:00:00','2015-10-27 23:00:00');
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
