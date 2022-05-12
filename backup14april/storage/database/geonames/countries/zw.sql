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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ZW.02','ZW','{\"en\":\"Midlands\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ZW.07','ZW','{\"en\":\"Matabeleland South\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ZW.06','ZW','{\"en\":\"Matabeleland North\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ZW.08','ZW','{\"en\":\"Masvingo\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ZW.05','ZW','{\"en\":\"Mashonaland West\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ZW.04','ZW','{\"en\":\"Mashonaland East\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ZW.03','ZW','{\"en\":\"Mashonaland Central\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ZW.01','ZW','{\"en\":\"Manicaland\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ZW.09','ZW','{\"en\":\"Bulawayo\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ZW.10','ZW','{\"en\":\"Harare\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.02.878548','ZW','ZW.02','{\"en\":\"Zvishavane District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.04.879178','ZW','ZW.04','{\"en\":\"Hwedza District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.07.879611','ZW','ZW.07','{\"en\":\"Umzingwane District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.02.881163','ZW','ZW.02','{\"en\":\"Shurugwi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.03.881344','ZW','ZW.03','{\"en\":\"Shamva District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.04.881519','ZW','ZW.04','{\"en\":\"Seke District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.03.882083','ZW','ZW.03','{\"en\":\"Rushinga District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.01.883480','ZW','ZW.01','{\"en\":\"Nyanga District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.06.883763','ZW','ZW.06','{\"en\":\"Tsholotsho District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.06.884216','ZW','ZW.06','{\"en\":\"Nkayi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.08.884594','ZW','ZW.08','{\"en\":\"Zaka\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.08.884756','ZW','ZW.08','{\"en\":\"Mwenezi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.04.884926','ZW','ZW.04','{\"en\":\"Mutoko District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.01.884977','ZW','ZW.01','{\"en\":\"Mutasa District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.01.884978','ZW','ZW.01','{\"en\":\"Mutare District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.04.885172','ZW','ZW.04','{\"en\":\"Murehwa District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.04.885457','ZW','ZW.04','{\"en\":\"Mudzi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.02.886328','ZW','ZW.02','{\"en\":\"Mberengwa District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.03.886383','ZW','ZW.03','{\"en\":\"Mazowe District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.07.886636','ZW','ZW.07','{\"en\":\"Matobo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.08.886762','ZW','ZW.08','{\"en\":\"Masvingo District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.04.886989','ZW','ZW.04','{\"en\":\"Marondera District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.01.887718','ZW','ZW.01','{\"en\":\"Makoni District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.05.887723','ZW','ZW.05','{\"en\":\"Makonde District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.06.888223','ZW','ZW.06','{\"en\":\"Lupane District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.02.888708','ZW','ZW.02','{\"en\":\"Kwekwe District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.05.889214','ZW','ZW.05','{\"en\":\"Kariba District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.05.889452','ZW','ZW.05','{\"en\":\"Kadoma District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.07.889793','ZW','ZW.07','{\"en\":\"Insiza District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.06.889941','ZW','ZW.06','{\"en\":\"Hwange District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.05.889953','ZW','ZW.05','{\"en\":\"Hurungwe District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.10.890298','ZW','ZW.10','{\"en\":\"Harare District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.02.890420','ZW','ZW.02','{\"en\":\"Gweru District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.07.890515','ZW','ZW.07','{\"en\":\"Gwanda District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.08.890589','ZW','ZW.08','{\"en\":\"Gutu District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.03.890599','ZW','ZW.03','{\"en\":\"Guruve District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.04.890848','ZW','ZW.04','{\"en\":\"Goromonzi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.02.890981','ZW','ZW.02','{\"en\":\"Gokwe North District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.03.892597','ZW','ZW.03','{\"en\":\"Mount Darwin\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.08.893171','ZW','ZW.08','{\"en\":\"Chivi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.02.893405','ZW','ZW.02','{\"en\":\"Chirumanzu District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.08.893482','ZW','ZW.08','{\"en\":\"Chiredzi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.01.893548','ZW','ZW.01','{\"en\":\"Chipinge District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.01.893811','ZW','ZW.01','{\"en\":\"Chimanimani District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.05.894238','ZW','ZW.05','{\"en\":\"Chegutu District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.04.894293','ZW','ZW.04','{\"en\":\"Chikomba District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.03.894459','ZW','ZW.03','{\"en\":\"Centenary District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.09.894700','ZW','ZW.09','{\"en\":\"Bulawayo District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.07.894702','ZW','ZW.07','{\"en\":\"Mangwe District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.01.894711','ZW','ZW.01','{\"en\":\"Buhera District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.06.894741','ZW','ZW.06','{\"en\":\"Bubi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.06.895055','ZW','ZW.06','{\"en\":\"Binga District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.03.895060','ZW','ZW.03','{\"en\":\"Bindura District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.08.895080','ZW','ZW.08','{\"en\":\"Bikita District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.07.895268','ZW','ZW.07','{\"en\":\"Beitbridge District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.02.8260609','ZW','ZW.02','{\"en\":\"Gokwe South District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.08.10172877','ZW','ZW.08','{\"en\":\"Zaka District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.07.10800403','ZW','ZW.07','{\"en\":\"Bulilima District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.05.10800410','ZW','ZW.05','{\"en\":\"Zvimba District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.04.10800411','ZW','ZW.04','{\"en\":\"Uzumba-Maramba-Pfungwe District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.06.10800412','ZW','ZW.06','{\"en\":\"Umguza District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZW.01.11204515','ZW','ZW.01','{\"en\":\"Mossurize District\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Zvishavane\"}',30.07,-20.33,'P','PPL','ZW.08',NULL,35896,'Africa/Harare',1,'2019-04-01 23:00:00','2019-04-01 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Victoria Falls\"}',25.83,-17.93,'P','PPL','ZW.06','ZW.06.889941',35761,'Africa/Harare',1,'2021-07-31 23:00:00','2021-07-31 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Shurugwi\"}',30.01,-19.67,'P','PPL','ZW.02',NULL,17075,'Africa/Harare',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Shamva\"}',31.58,-17.31,'P','PPL','ZW.03',NULL,10317,'Africa/Harare',1,'2014-04-05 23:00:00','2014-04-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Ruwa\"}',31.24,-17.89,'P','PPL','ZW.04',NULL,30000,'Africa/Harare',1,'2018-11-23 23:00:00','2018-11-23 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Rusape\"}',32.13,-18.53,'P','PPL','ZW.01',NULL,29292,'Africa/Harare',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Redcliff\"}',29.78,-19.03,'P','PPL','ZW.02',NULL,33197,'Africa/Harare',1,'2013-03-11 23:00:00','2013-03-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Penhalonga\"}',32.70,-18.89,'P','PPL','ZW.01',NULL,7681,'Africa/Harare',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Norton\"}',30.70,-17.88,'P','PPL','ZW.05',NULL,52054,'Africa/Harare',1,'2013-03-11 23:00:00','2013-03-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Mvurwi\"}',30.85,-17.03,'P','PPL','ZW.03',NULL,7970,'Africa/Harare',1,'2013-03-11 23:00:00','2013-03-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Mutoko\"}',32.23,-17.40,'P','PPL','ZW.04',NULL,9532,'Africa/Harare',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Mutare\"}',32.67,-18.97,'P','PPLA','ZW.01',NULL,184205,'Africa/Harare',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Murehwa\"}',31.78,-17.64,'P','PPL','ZW.04',NULL,8559,'Africa/Harare',1,'2014-05-11 23:00:00','2014-05-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Mount Darwin\"}',31.58,-16.77,'P','PPL','ZW.03',NULL,6349,'Africa/Harare',1,'2014-04-05 23:00:00','2014-04-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Mhangura\"}',30.17,-16.89,'P','PPL','ZW.05',NULL,6503,'Africa/Harare',1,'2014-04-05 23:00:00','2014-04-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Mazowe\"}',30.97,-17.50,'P','PPL','ZW.03',NULL,9966,'Africa/Harare',1,'2014-03-18 23:00:00','2014-03-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Masvingo\"}',30.83,-20.06,'P','PPLA','ZW.08',NULL,76290,'Africa/Harare',1,'2010-08-02 23:00:00','2010-08-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Mashava\"}',30.48,-20.04,'P','PPL','ZW.08',NULL,12994,'Africa/Harare',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Marondera\"}',31.55,-18.19,'P','PPLA','ZW.04',NULL,57082,'Africa/Harare',1,'2010-08-02 23:00:00','2010-08-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Lupane\"}',27.81,-18.93,'P','PPLA','ZW.06',NULL,1200,'Africa/Harare',1,'2010-08-12 23:00:00','2010-08-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Kwekwe\"}',29.81,-18.93,'P','PPL','ZW.02',NULL,99149,'Africa/Harare',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Karoi\"}',29.69,-16.81,'P','PPL','ZW.05',NULL,25030,'Africa/Harare',1,'2015-04-23 23:00:00','2015-04-23 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Kariba\"}',28.80,-16.52,'P','PPL','ZW.05',NULL,25531,'Africa/Harare',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Kadoma\"}',29.92,-18.33,'P','PPL','ZW.05',NULL,79174,'Africa/Harare',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Inyati\"}',28.85,-19.68,'P','PPL','ZW.06',NULL,8402,'Africa/Harare',1,'2014-03-22 23:00:00','2014-03-22 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Hwange\"}',26.50,-18.36,'P','PPL','ZW.06','ZW.06.889941',33210,'Africa/Harare',1,'2014-11-15 23:00:00','2014-11-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Harare\"}',31.05,-17.83,'P','PPLC','ZW.10',NULL,1542813,'Africa/Harare',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Gweru\"}',29.82,-19.45,'P','PPLA','ZW.02',NULL,146073,'Africa/Harare',1,'2018-10-03 23:00:00','2018-10-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Gwanda\"}',29.01,-20.94,'P','PPLA','ZW.07',NULL,14450,'Africa/Harare',1,'2018-10-03 23:00:00','2018-10-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Gokwe\"}',28.93,-18.20,'P','PPL','ZW.02',NULL,18942,'Africa/Harare',1,'2012-05-04 23:00:00','2012-05-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Glendale\"}',31.07,-17.36,'P','PPL','ZW.03',NULL,9768,'Africa/Harare',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Chivhu\"}',30.89,-19.02,'P','PPL','ZW.04',NULL,10369,'Africa/Harare',1,'2018-04-05 23:00:00','2018-04-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Chiredzi\"}',31.67,-21.05,'P','PPL','ZW.08',NULL,28205,'Africa/Harare',1,'2013-05-07 23:00:00','2013-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Chipinge\"}',32.62,-20.19,'P','PPL','ZW.01',NULL,18860,'Africa/Harare',1,'2015-04-23 23:00:00','2015-04-23 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Chinhoyi\"}',30.20,-17.37,'P','PPLA','ZW.05',NULL,61739,'Africa/Harare',1,'2018-10-03 23:00:00','2018-10-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Chegutu\"}',30.14,-18.13,'P','PPL','ZW.05',NULL,47294,'Africa/Harare',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Chakari\"}',29.89,-18.06,'P','PPL','ZW.05',NULL,6472,'Africa/Harare',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Bulawayo\"}',28.58,-20.15,'P','PPLA','ZW.09',NULL,699385,'Africa/Harare',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Bindura\"}',31.33,-17.30,'P','PPLA','ZW.03',NULL,37423,'Africa/Harare',1,'2010-08-02 23:00:00','2010-08-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Beitbridge\"}',30.00,-22.22,'P','PPL','ZW.07',NULL,26459,'Africa/Harare',1,'2013-03-11 23:00:00','2013-03-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Banket\"}',30.40,-17.38,'P','PPL','ZW.05',NULL,9641,'Africa/Harare',1,'2013-03-11 23:00:00','2013-03-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Epworth\"}',31.15,-17.89,'P','PPLX','ZW.10',NULL,123250,'Africa/Harare',1,'2012-01-18 23:00:00','2012-01-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZW','{\"en\":\"Chitungwiza\"}',31.08,-18.01,'P','PPL','ZW.10',NULL,340360,'Africa/Harare',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
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
