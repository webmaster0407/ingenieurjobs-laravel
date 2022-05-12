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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TW.01','TW','{\"en\":\"Fukien\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TW.02','TW','{\"en\":\"Takao\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TW.03','TW','{\"en\":\"Taipei\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TW.04','TW','{\"en\":\"Taiwan\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TW.03.TPQ','TW','TW.03','{\"en\":\"New Taipei\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TW.04.YUN','TW','TW.04','{\"en\":\"Yunlin\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TW.04.TAO','TW','TW.04','{\"en\":\"Taoyuan\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TW.04.TTT','TW','TW.04','{\"en\":\"Taitung\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TW.04.TPE','TW','TW.04','{\"en\":\"Taipei City\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TW.04.TNN','TW','TW.04','{\"en\":\"Tainan\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TW.04.PIF','TW','TW.04','{\"en\":\"Pingtung\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TW.04.PEN','TW','TW.04','{\"en\":\"Penghu County\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TW.04.NAN','TW','TW.04','{\"en\":\"Nantou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TW.04.MIA','TW','TW.04','{\"en\":\"Miaoli\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TW.04.ILA','TW','TW.04','{\"en\":\"Yilan\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TW.04.HUA','TW','TW.04','{\"en\":\"Hualien\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TW.04.HSQ','TW','TW.04','{\"en\":\"Hsinchu\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TW.04.HSZ','TW','TW.04','{\"en\":\"Hsinchu County\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TW.01.KIN','TW','TW.01','{\"en\":\"Kinmen County\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TW.04.CYI','TW','TW.04','{\"en\":\"Chiayi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TW.04.CYQ','TW','TW.04','{\"en\":\"Chiayi County\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TW.04.CHA','TW','TW.04','{\"en\":\"Changhua\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TW.04.KEE','TW','TW.04','{\"en\":\"Keelung\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TW.01.LIE','TW','TW.01','{\"en\":\"Lienchiang\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TW.02.KHH','TW','TW.02','{\"en\":\"Kaohsiung\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TW.04.TXG','TW','TW.04','{\"en\":\"Taichung City\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TW','{\"en\":\"Douliu\"}',120.54,23.71,'P','PPLA2','TW.04','TW.04.YUN',104723,'Asia/Taipei',1,'2017-09-26 23:00:00','2017-09-26 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TW','{\"en\":\"Yujing\"}',120.46,23.12,'P','PPL','TW.04','TW.04.TNN',16597,'Asia/Taipei',1,'2017-09-23 23:00:00','2017-09-23 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TW','{\"en\":\"Yuanlin\"}',120.58,23.96,'P','PPL','TW.04','TW.04.CHA',124725,'Asia/Taipei',1,'2019-09-03 23:00:00','2019-09-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TW','{\"en\":\"Donggang\"}',120.45,22.47,'P','PPL','TW.04','TW.04.PIF',48100,'Asia/Taipei',1,'2018-03-08 23:00:00','2018-03-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TW','{\"en\":\"Taipei\"}',121.53,25.05,'P','PPLC','TW.04','TW.04.TPE',7871900,'Asia/Taipei',1,'2021-05-17 23:00:00','2021-05-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TW','{\"en\":\"Tainan\"}',120.21,22.99,'P','PPLA2','TW.04','TW.04.TNN',771235,'Asia/Taipei',1,'2021-08-07 23:00:00','2021-08-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TW','{\"en\":\"Taichung\"}',120.68,24.15,'P','PPLA2','TW.04','TW.04.TXG',1040725,'Asia/Taipei',1,'2021-07-31 23:00:00','2021-07-31 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TW','{\"en\":\"Daxi\"}',121.29,24.88,'P','PPL','TW.04','TW.04.TAO',84549,'Asia/Taipei',1,'2022-01-09 23:00:00','2022-01-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TW','{\"en\":\"Banqiao\"}',121.47,25.01,'P','PPLA2','TW.03','TW.03.TPQ',543342,'Asia/Taipei',1,'2017-09-28 23:00:00','2017-09-28 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TW','{\"en\":\"Puli\"}',120.97,23.97,'P','PPL','TW.04','TW.04.NAN',86406,'Asia/Taipei',1,'2017-09-23 23:00:00','2017-09-23 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TW','{\"en\":\"Nantou\"}',120.66,23.92,'P','PPLA2','TW.04','TW.04.NAN',105682,'Asia/Taipei',1,'2017-09-26 23:00:00','2017-09-26 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TW','{\"en\":\"Magong\"}',119.59,23.57,'P','PPLA2','TW.04','TW.04.PEN',56435,'Asia/Taipei',1,'2018-07-11 23:00:00','2018-07-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TW','{\"en\":\"Lugu\"}',120.75,23.75,'P','PPL','TW.04','TW.04.NAN',17746,'Asia/Taipei',1,'2022-01-08 23:00:00','2022-01-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TW','{\"en\":\"Kaohsiung\"}',120.31,22.62,'P','PPLA','TW.02','TW.02.KHH',1519711,'Asia/Taipei',1,'2017-09-25 23:00:00','2017-09-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TW','{\"en\":\"Yilan\"}',121.75,24.76,'P','PPLA2','TW.04','TW.04.ILA',94188,'Asia/Taipei',1,'2017-09-28 23:00:00','2017-09-28 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TW','{\"en\":\"Hualien City\"}',121.60,23.98,'P','PPLA2','TW.04','TW.04.HUA',350468,'Asia/Taipei',1,'2017-09-25 23:00:00','2017-09-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TW','{\"en\":\"Hsinchu\"}',120.97,24.80,'P','PPLA2','TW.04','TW.04.HSQ',404109,'Asia/Taipei',1,'2019-02-25 23:00:00','2019-02-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TW','{\"en\":\"Hengchun\"}',120.74,22.00,'P','PPLA3','TW.04','TW.04.PIF',31288,'Asia/Taipei',1,'2017-09-26 23:00:00','2017-09-26 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TW','{\"en\":\"Jincheng\"}',118.32,24.43,'P','PPLA','TW.01','TW.01.KIN',37507,'Asia/Taipei',1,'2017-11-06 23:00:00','2017-11-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TW','{\"en\":\"Keelung\"}',121.74,25.13,'P','PPLA2','TW.04','TW.04.KEE',397515,'Asia/Taipei',1,'2017-09-25 23:00:00','2017-09-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TW','{\"en\":\"Taoyuan City\"}',121.30,24.99,'P','PPLA2','TW.04','TW.04.TAO',402014,'Asia/Taipei',1,'2017-09-25 23:00:00','2017-09-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TW','{\"en\":\"Zhongxing New Village\"}',120.69,23.96,'P','PPLA','TW.04','TW.04.NAN',25549,'Asia/Taipei',1,'2017-09-23 23:00:00','2017-09-23 23:00:00');
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
