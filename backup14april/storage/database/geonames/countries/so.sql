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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SO.20','SO','{\"en\":\"Woqooyi Galbeed\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SO.19','SO','{\"en\":\"Togdheer\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SO.14','SO','{\"en\":\"Lower Shabeelle\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SO.13','SO','{\"en\":\"Middle Shabele\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SO.12','SO','{\"en\":\"Sanaag\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SO.18','SO','{\"en\":\"Nugaal\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SO.10','SO','{\"en\":\"Mudug\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SO.09','SO','{\"en\":\"Lower Juba\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SO.08','SO','{\"en\":\"Middle Juba\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SO.07','SO','{\"en\":\"Hiiraan\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SO.06','SO','{\"en\":\"Gedo\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SO.05','SO','{\"en\":\"Galguduud\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SO.04','SO','{\"en\":\"Bay\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SO.03','SO','{\"en\":\"Bari\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SO.02','SO','{\"en\":\"Banaadir\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SO.01','SO','{\"en\":\"Bakool\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SO.21','SO','{\"en\":\"Awdal\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('SO.22','SO','{\"en\":\"Sool\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.09.65061','SO','SO.09','{\"en\":\"Degmada Badhaadhe\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.06.8261487','SO','SO.06','{\"en\":\"El Wak District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.10.9179613','SO','SO.10','{\"en\":\"Xarardheere\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.21.9179614','SO','SO.21','{\"en\":\"Baki\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.04.9179615','SO','SO.04','{\"en\":\"Qansax Dheere\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.21.9179616','SO','SO.21','{\"en\":\"Borama District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.18.9179617','SO','SO.18','{\"en\":\"Burtinle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.14.9179618','SO','SO.14','{\"en\":\"Baraawe\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.21.9179619','SO','SO.21','{\"en\":\"Lughaya District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.18.9179620','SO','SO.18','{\"en\":\"Eyl\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.02.9179621','SO','SO.02','{\"en\":\"Banadir\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.14.9179622','SO','SO.14','{\"en\":\"Kurtunwaarey\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.21.9179623','SO','SO.21','{\"en\":\"Zeila District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.18.9179624','SO','SO.18','{\"en\":\"Garoowe\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.14.9179625','SO','SO.14','{\"en\":\"Marka\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.05.9179626','SO','SO.05','{\"en\":\"Cabudwaaq\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.01.9179627','SO','SO.01','{\"en\":\"Ceel Barde\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.12.9179628','SO','SO.12','{\"en\":\"Laasqoray\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.14.9179629','SO','SO.14','{\"en\":\"Qoryooley\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.01.9179630','SO','SO.01','{\"en\":\"Rab Dhuure\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.10.9179631','SO','SO.10','{\"en\":\"Cadaado\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.12.9179632','SO','SO.12','{\"en\":\"Ceel Afweyn\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.14.9179633','SO','SO.14','{\"en\":\"Sablaale\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.01.9179634','SO','SO.01','{\"en\":\"Tayeeglow\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.14.9179635','SO','SO.14','{\"en\":\"Wanla Weyn\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.12.9179636','SO','SO.12','{\"en\":\"Ceerigaabo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.01.9179637','SO','SO.01','{\"en\":\"Waajid\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.08.9179638','SO','SO.08','{\"en\":\"Bu\'aale\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.22.9179639','SO','SO.22','{\"en\":\"Caynabo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.01.9179640','SO','SO.01','{\"en\":\"Xudur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.05.9179641','SO','SO.05','{\"en\":\"Ceel Buur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.08.9179642','SO','SO.08','{\"en\":\"Jilib\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.22.9179643','SO','SO.22','{\"en\":\"Laas Caanood\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.03.9179644','SO','SO.03','{\"en\":\"Bandarbeyla\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.08.9179645','SO','SO.08','{\"en\":\"Saakow\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.05.9179646','SO','SO.05','{\"en\":\"Ceel Dheer\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.22.9179647','SO','SO.22','{\"en\":\"Taleh District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.13.9179649','SO','SO.13','{\"en\":\"Adan Yabaal\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.05.9179650','SO','SO.05','{\"en\":\"Dhuusamarreeb\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.13.9179651','SO','SO.13','{\"en\":\"Balcad\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.22.9179652','SO','SO.22','{\"en\":\"Xudun District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.03.9179653','SO','SO.03','{\"en\":\"Caluula\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.13.9179654','SO','SO.13','{\"en\":\"Cadale\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.08.9179655','SO','SO.08','{\"en\":\"Baardheere\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.19.9179656','SO','SO.19','{\"en\":\"Burao\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.03.9179657','SO','SO.03','{\"en\":\"Iskushuban\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.13.9179658','SO','SO.13','{\"en\":\"Jowhar\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.19.9179659','SO','SO.19','{\"en\":\"Buuhoodle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.06.9179660','SO','SO.06','{\"en\":\"Belet Xaawo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.10.9179661','SO','SO.10','{\"en\":\"Gaalkacyo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.03.9179662','SO','SO.03','{\"en\":\"Qandala\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.19.9179663','SO','SO.19','{\"en\":\"Owdweyne\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.06.9179664','SO','SO.06','{\"en\":\"Doolow\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.19.9179665','SO','SO.19','{\"en\":\"Sheikh\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.03.9179666','SO','SO.03','{\"en\":\"Qardho\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.10.9179667','SO','SO.10','{\"en\":\"Galdogob\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.06.9179668','SO','SO.06','{\"en\":\"Garbahaarey\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.20.9179669','SO','SO.20','{\"en\":\"Berbera\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.10.9179670','SO','SO.10','{\"en\":\"Hobyo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.04.9179671','SO','SO.04','{\"en\":\"Baydhaba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.20.9179672','SO','SO.20','{\"en\":\"Gebiley\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.06.9179673','SO','SO.06','{\"en\":\"Luuq\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.10.9179674','SO','SO.10','{\"en\":\"Jariiban\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.20.9179675','SO','SO.20','{\"en\":\"Hargeysa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.04.9179676','SO','SO.04','{\"en\":\"Buur Hakaba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.04.9179677','SO','SO.04','{\"en\":\"Diinsoor\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.07.9179678','SO','SO.07','{\"en\":\"Belet Weyne\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.07.9179679','SO','SO.07','{\"en\":\"Bulo Burto\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.07.9179680','SO','SO.07','{\"en\":\"Jalalaqsi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.09.9179681','SO','SO.09','{\"en\":\"Afmadow\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.09.9179682','SO','SO.09','{\"en\":\"Jamaame\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.09.9179683','SO','SO.09','{\"en\":\"Kismaayo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.14.9179684','SO','SO.14','{\"en\":\"Afgooye\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.03.9179981','SO','SO.03','{\"en\":\"Armo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.05.9179982','SO','SO.05','{\"en\":\"Adado\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.14.9179984','SO','SO.14','{\"en\":\"Darkenley\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.09.9179985','SO','SO.09','{\"en\":\"Jamame\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.04.9179986','SO','SO.04','{\"en\":\"Baidoa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.01.9179988','SO','SO.01','{\"en\":\"Hudur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.12.9179989','SO','SO.12','{\"en\":\"Elafweyn\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.10.9180000','SO','SO.10','{\"en\":\"Xarfo District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.12.9180002','SO','SO.12','{\"en\":\"Badhan District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.05.9180013','SO','SO.05','{\"en\":\"Ceelbuur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.02.9180017','SO','SO.02','{\"en\":\"Hodan\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.03.9180027','SO','SO.03','{\"en\":\"Bossaso\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.04.9180028','SO','SO.04','{\"en\":\"Burdhubo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.02.9180039','SO','SO.02','{\"en\":\"Daynile\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('SO.21.9259236','SO','SO.21','{\"en\":\"Diila District\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Yeed\"}',43.03,4.55,'P','PPL','SO.01',NULL,8429,'Africa/Mogadishu',1,'2012-01-15 23:00:00','2012-01-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Xuddur\"}',43.89,4.12,'P','PPLA','SO.01',NULL,12500,'Africa/Mogadishu',1,'2018-04-02 23:00:00','2018-04-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Wanlaweyn\"}',44.89,2.62,'P','PPL','SO.14',NULL,22022,'Africa/Mogadishu',1,'2012-01-15 23:00:00','2012-01-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Waajid\"}',43.25,3.81,'P','PPL','SO.01',NULL,6666,'Africa/Mogadishu',1,'2012-01-15 23:00:00','2012-01-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Saacow\"}',42.44,1.63,'P','PPL','SO.08',NULL,7893,'Africa/Mogadishu',1,'2012-02-27 23:00:00','2012-02-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Qoryooley\"}',44.53,1.79,'P','PPLA2','SO.14',NULL,51720,'Africa/Mogadishu',1,'2012-01-15 23:00:00','2012-01-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Qandala\"}',49.87,11.47,'P','PPL','SO.03',NULL,15923,'Africa/Mogadishu',1,'2017-02-09 23:00:00','2017-02-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Oodweyne\"}',45.06,9.41,'P','PPL','SO.19',NULL,5491,'Africa/Mogadishu',1,'2012-01-15 23:00:00','2012-01-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Mogadishu\"}',45.34,2.04,'P','PPLC','SO.02',NULL,2587183,'Africa/Mogadishu',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Marka\"}',44.77,1.72,'P','PPLA','SO.14',NULL,230100,'Africa/Mogadishu',1,'2014-05-27 23:00:00','2014-05-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Mahaddayweyne\"}',45.53,2.97,'P','PPL','SO.13',NULL,8273,'Africa/Mogadishu',1,'2012-01-15 23:00:00','2012-01-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Luuq\"}',42.54,3.80,'P','PPL','SO.06',NULL,33820,'Africa/Mogadishu',1,'2014-11-01 23:00:00','2014-11-01 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Las Khorey\"}',48.20,11.16,'P','PPLA2','SO.12',NULL,6941,'Africa/Mogadishu',1,'2013-11-09 23:00:00','2013-11-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Kismayo\"}',42.55,-0.36,'P','PPLA','SO.09',NULL,234852,'Africa/Mogadishu',1,'2014-05-31 23:00:00','2014-05-31 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Jilib\"}',42.79,0.49,'P','PPL','SO.08',NULL,43694,'Africa/Mogadishu',1,'2012-01-15 23:00:00','2012-01-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Jawhar\"}',45.50,2.78,'P','PPLA','SO.13',NULL,47086,'Africa/Mogadishu',1,'2015-11-09 23:00:00','2015-11-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Jamaame\"}',42.74,0.07,'P','PPL','SO.09',NULL,185270,'Africa/Mogadishu',1,'2018-04-02 23:00:00','2018-04-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Jalalaqsi\"}',45.60,3.38,'P','PPL','SO.07',NULL,9743,'Africa/Mogadishu',1,'2012-01-15 23:00:00','2012-01-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Iskushuban\"}',50.23,10.28,'P','PPL','SO.03',NULL,5759,'Africa/Mogadishu',1,'2016-12-02 23:00:00','2016-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Hobyo\"}',48.53,5.35,'P','PPLA2','SO.10',NULL,12564,'Africa/Mogadishu',1,'2017-02-09 23:00:00','2017-02-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Hargeysa\"}',44.06,9.56,'P','PPLA','SO.20',NULL,477876,'Africa/Mogadishu',1,'2017-09-26 23:00:00','2017-09-26 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Garoowe\"}',48.48,8.40,'P','PPLA','SO.18',NULL,57300,'Africa/Mogadishu',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Garbahaarrey\"}',42.22,3.33,'P','PPLA','SO.06',NULL,12652,'Africa/Mogadishu',1,'2013-11-09 23:00:00','2013-11-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Gaalkacyo\"}',47.43,6.77,'P','PPLA','SO.10',NULL,61200,'Africa/Mogadishu',1,'2012-01-15 23:00:00','2012-01-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Eyl\"}',49.82,7.98,'P','PPL','SO.18',NULL,18904,'Africa/Mogadishu',1,'2017-02-09 23:00:00','2017-02-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Diinsoor\"}',42.98,2.41,'P','PPL','SO.04','SO.04.9179677',20000,'Africa/Mogadishu',1,'2021-01-19 23:00:00','2021-01-19 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Dhuusamarreeb\"}',46.39,5.54,'P','PPLA','SO.05',NULL,9000,'Africa/Mogadishu',1,'2017-11-16 23:00:00','2017-11-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Ceerigaabo\"}',47.37,10.62,'P','PPLA','SO.12',NULL,33853,'Africa/Mogadishu',1,'2012-01-15 23:00:00','2012-01-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Ceeldheer\"}',47.18,3.85,'P','PPL','SO.05',NULL,26562,'Africa/Mogadishu',1,'2018-04-03 23:00:00','2018-04-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Ceelbuur\"}',46.62,4.69,'P','PPL','SO.05',NULL,9031,'Africa/Mogadishu',1,'2018-04-03 23:00:00','2018-04-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Caluula\"}',50.76,11.97,'P','PPLA2','SO.03','SO.03.9179653',6100,'Africa/Mogadishu',1,'2020-02-08 23:00:00','2020-02-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Cadale\"}',46.32,2.76,'P','PPL','SO.13',NULL,5385,'Africa/Mogadishu',1,'2012-01-15 23:00:00','2012-01-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Buurhakaba\"}',44.08,2.80,'P','PPLA2','SO.04',NULL,27792,'Africa/Mogadishu',1,'2012-01-15 23:00:00','2012-01-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Buulobarde\"}',45.57,3.85,'P','PPL','SO.07',NULL,16928,'Africa/Mogadishu',1,'2012-01-15 23:00:00','2012-01-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Burao\"}',45.53,9.52,'P','PPLA','SO.19',NULL,99270,'Africa/Mogadishu',1,'2014-05-31 23:00:00','2014-05-31 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Bu’aale\"}',42.58,1.08,'P','PPLA','SO.08',NULL,0,'Africa/Mogadishu',1,'2012-01-15 23:00:00','2012-01-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Bosaso\"}',49.18,11.28,'P','PPLA','SO.03',NULL,74287,'Africa/Mogadishu',1,'2015-04-23 23:00:00','2015-04-23 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Bereeda\"}',51.06,11.87,'P','PPL','SO.03',NULL,11262,'Africa/Mogadishu',1,'2012-01-15 23:00:00','2012-01-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Berbera\"}',45.01,10.44,'P','PPL','SO.20',NULL,242344,'Africa/Mogadishu',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Beledweyne\"}',45.20,4.74,'P','PPLA','SO.07','SO.07.9179678',55410,'Africa/Mogadishu',1,'2021-01-19 23:00:00','2021-01-19 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Baidoa\"}',43.65,3.11,'P','PPLA','SO.04',NULL,129839,'Africa/Mogadishu',1,'2013-09-20 23:00:00','2013-09-20 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Bargaal\"}',51.08,11.29,'P','PPL','SO.03',NULL,6798,'Africa/Mogadishu',1,'2012-01-15 23:00:00','2012-01-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Bandarbeyla\"}',50.81,9.49,'P','PPL','SO.03',NULL,13753,'Africa/Mogadishu',1,'2012-01-15 23:00:00','2012-01-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Baardheere\"}',42.28,2.34,'P','PPLL','SO.06',NULL,42240,'Africa/Mogadishu',1,'2006-01-26 23:00:00','2006-01-26 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Afgooye\"}',45.12,2.14,'P','PPLA2','SO.14',NULL,65461,'Africa/Mogadishu',1,'2012-01-15 23:00:00','2012-01-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Laascaanood\"}',47.36,8.48,'P','PPLA','SO.22',NULL,60100,'Africa/Mogadishu',1,'2012-01-18 23:00:00','2012-01-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Baki\"}',43.39,9.89,'P','PPL','SO.21',NULL,20000,'Africa/Mogadishu',1,'2020-03-09 23:00:00','2020-03-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('SO','{\"en\":\"Beled Hawo\"}',41.88,3.93,'P','PPLA2','SO.06','SO.06.9179660',73000,'Africa/Mogadishu',1,'2021-01-19 23:00:00','2021-01-19 23:00:00');
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
