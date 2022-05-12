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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ZM.01','ZM','{\"en\":\"Western\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ZM.07','ZM','{\"en\":\"Southern\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ZM.06','ZM','{\"en\":\"North-Western\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ZM.05','ZM','{\"en\":\"Northern\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ZM.09','ZM','{\"en\":\"Lusaka\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ZM.04','ZM','{\"en\":\"Luapula\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ZM.03','ZM','{\"en\":\"Eastern\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ZM.08','ZM','{\"en\":\"Copperbelt\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ZM.02','ZM','{\"en\":\"Central\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('ZM.10','ZM','{\"en\":\"Muchinga\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.04.175497','ZM','ZM.04','{\"en\":\"Nchelenge District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.05.175966','ZM','ZM.05','{\"en\":\"Mporokoso District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.05.176143','ZM','ZM.05','{\"en\":\"Mbala District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.04.176553','ZM','ZM.04','{\"en\":\"Kawambwa District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.05.176756','ZM','ZM.05','{\"en\":\"Kaputa District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.06.895952','ZM','ZM.06','{\"en\":\"Zambezi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.06.897041','ZM','ZM.06','{\"en\":\"Solwezi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.01.898902','ZM','ZM.01','{\"en\":\"Sesheke District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.02.898909','ZM','ZM.02','{\"en\":\"Serenje District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.01.898945','ZM','ZM.01','{\"en\":\"Senanga District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.04.899273','ZM','ZM.04','{\"en\":\"Samfya District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.03.899821','ZM','ZM.03','{\"en\":\"Petauke District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.08.901339','ZM','ZM.08','{\"en\":\"Ndola Rural District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.08.901342','ZM','ZM.08','{\"en\":\"Ndola District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.07.901764','ZM','ZM.07','{\"en\":\"Namwala District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.06.902616','ZM','ZM.06','{\"en\":\"Mwinilunga District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.04.902718','ZM','ZM.04','{\"en\":\"Mwense District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.02.904420','ZM','ZM.02','{\"en\":\"Mumbwa District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.08.905389','ZM','ZM.08','{\"en\":\"Mufulira District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.10.905843','ZM','ZM.10','{\"en\":\"Mpika District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.07.906042','ZM','ZM.07','{\"en\":\"Monze District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.01.906052','ZM','ZM.01','{\"en\":\"Mongu District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.02.906219','ZM','ZM.02','{\"en\":\"Mkushi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.07.907108','ZM','ZM.07','{\"en\":\"Mazabuka District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.04.907767','ZM','ZM.04','{\"en\":\"Mansa District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.05.908911','ZM','ZM.05','{\"en\":\"Luwingu District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.09.909134','ZM','ZM.09','{\"en\":\"Lusaka District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.03.909296','ZM','ZM.03','{\"en\":\"Lundazi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.01.909482','ZM','ZM.01','{\"en\":\"Lukulu District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.08.909857','ZM','ZM.08','{\"en\":\"Luanshya District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.09.909886','ZM','ZM.09','{\"en\":\"Luangwa District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.07.910107','ZM','ZM.07','{\"en\":\"Livingstone District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.08.911144','ZM','ZM.08','{\"en\":\"Kitwe District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.03.912053','ZM','ZM.03','{\"en\":\"Katete District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.06.912623','ZM','ZM.06','{\"en\":\"Kasempa District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.05.912763','ZM','ZM.05','{\"en\":\"Kasama District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.01.913321','ZM','ZM.01','{\"en\":\"Kaoma District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.08.914956','ZM','ZM.08','{\"en\":\"Kalulushi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.07.915082','ZM','ZM.07','{\"en\":\"Kalomo District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.01.915468','ZM','ZM.01','{\"en\":\"Kalabo District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.02.916077','ZM','ZM.02','{\"en\":\"Kapiri Mposhi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.02.916082','ZM','ZM.02','{\"en\":\"Kabwe District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.06.916244','ZM','ZM.06','{\"en\":\"Kabompo District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.10.916666','ZM','ZM.10','{\"en\":\"Isoka District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.07.917010','ZM','ZM.07','{\"en\":\"Gwembe District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.07.917743','ZM','ZM.07','{\"en\":\"Choma District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.03.918699','ZM','ZM.03','{\"en\":\"Chipata District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.10.918903','ZM','ZM.10','{\"en\":\"Chinsali District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.08.919006','ZM','ZM.08','{\"en\":\"Chingola District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.08.919540','ZM','ZM.08','{\"en\":\"Chililabombwe District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.10.920896','ZM','ZM.10','{\"en\":\"Chama District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.03.921026','ZM','ZM.03','{\"en\":\"Chadiza District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.07.7671219','ZM','ZM.07','{\"en\":\"Siavonga District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.09.7671220','ZM','ZM.09','{\"en\":\"Kafue district\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.03.7732619','ZM','ZM.03','{\"en\":\"Nyimba District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.09.7910080','ZM','ZM.09','{\"en\":\"Chongwe District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.07.8260555','ZM','ZM.07','{\"en\":\"Kazungula District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.05.8260556','ZM','ZM.05','{\"en\":\"Mpulungu District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.05.8260557','ZM','ZM.05','{\"en\":\"Mungwi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.02.8285556','ZM','ZM.02','{\"en\":\"Kapiri-Mposhi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.08.8285557','ZM','ZM.08','{\"en\":\"Masaiti District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.02.8714549','ZM','ZM.02','{\"en\":\"Chibombo District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.07.8714550','ZM','ZM.07','{\"en\":\"Itezhi-Tezhi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.08.9072524','ZM','ZM.08','{\"en\":\"Mpongwe District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.07.9072525','ZM','ZM.07','{\"en\":\"Sinazongwe District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.05.10800890','ZM','ZM.05','{\"en\":\"Chilubi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.04.10800891','ZM','ZM.04','{\"en\":\"Chienge\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.04.10800892','ZM','ZM.04','{\"en\":\"Milenge\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.03.10800895','ZM','ZM.03','{\"en\":\"Mambwe\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.08.10801768','ZM','ZM.08','{\"en\":\"Lufwanyama\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.06.10801775','ZM','ZM.06','{\"en\":\"Ikelenge\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.06.10801797','ZM','ZM.06','{\"en\":\"Chavuma\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.06.10801798','ZM','ZM.06','{\"en\":\"Mufumbwe\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.01.10801800','ZM','ZM.01','{\"en\":\"Shangombo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.06.10814730','ZM','ZM.06','{\"en\":\"Manyinga District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.01.10814741','ZM','ZM.01','{\"en\":\"Mitete District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.01.10815319','ZM','ZM.01','{\"en\":\"Sikongo District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.01.10815320','ZM','ZM.01','{\"en\":\"Limulunga District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.01.10815321','ZM','ZM.01','{\"en\":\"Nkeyema District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.01.10815322','ZM','ZM.01','{\"en\":\"Luampa District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.01.10815323','ZM','ZM.01','{\"en\":\"Nalolo District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.01.10815324','ZM','ZM.01','{\"en\":\"Sioma District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.01.10815325','ZM','ZM.01','{\"en\":\"Mulobezi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.01.10815326','ZM','ZM.01','{\"en\":\"Mwandi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.07.10815849','ZM','ZM.07','{\"en\":\"Zimba District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.07.10815850','ZM','ZM.07','{\"en\":\"Pemba District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.07.10815851','ZM','ZM.07','{\"en\":\"Chikankata District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.09.10815852','ZM','ZM.09','{\"en\":\"Chirundu District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.09.10815853','ZM','ZM.09','{\"en\":\"Shibuyunji District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.09.10815854','ZM','ZM.09','{\"en\":\"Chilanga District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.09.10815855','ZM','ZM.09','{\"en\":\"Rufunsa District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.02.10815856','ZM','ZM.02','{\"en\":\"Ngabwe District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.02.10815857','ZM','ZM.02','{\"en\":\"Chisamba District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.02.10815858','ZM','ZM.02','{\"en\":\"Luano District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.02.10815859','ZM','ZM.02','{\"en\":\"Chitambo District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.03.10815860','ZM','ZM.03','{\"en\":\"Sinda District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.03.10815861','ZM','ZM.03','{\"en\":\"Vubwi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.04.10815862','ZM','ZM.04','{\"en\":\"Mwansabombwe District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.04.10815863','ZM','ZM.04','{\"en\":\"Chipili District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.04.10815864','ZM','ZM.04','{\"en\":\"Chembe District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.04.10815865','ZM','ZM.04','{\"en\":\"Lunga District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.05.10815866','ZM','ZM.05','{\"en\":\"Nsama District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.10.11169206','ZM','ZM.10','{\"en\":\"Mafinga\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.10.11169207','ZM','ZM.10','{\"en\":\"Nakonde\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('ZM.10.11169209','ZM','ZM.10','{\"en\":\"Shiwang’andu District\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Nchelenge\"}',28.73,-9.35,'P','PPL','ZM.04',NULL,23693,'Africa/Lusaka',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Nakonde\"}',32.74,-9.34,'P','PPL','ZM.10',NULL,10652,'Africa/Lusaka',1,'2018-07-03 23:00:00','2018-07-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Mpulungu\"}',31.11,-8.76,'P','PPL','ZM.05',NULL,8547,'Africa/Lusaka',1,'2012-04-22 23:00:00','2012-04-22 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Mbala\"}',31.37,-8.84,'P','PPL','ZM.05',NULL,20570,'Africa/Lusaka',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Kawambwa\"}',29.08,-9.79,'P','PPL','ZM.04',NULL,20589,'Africa/Lusaka',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Zambezi\"}',23.10,-13.54,'P','PPL','ZM.06',NULL,7074,'Africa/Lusaka',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Solwezi\"}',26.39,-12.17,'P','PPLA','ZM.06',NULL,4846,'Africa/Lusaka',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Sinazongwe\"}',27.46,-17.26,'P','PPL','ZM.07',NULL,11528,'Africa/Lusaka',1,'2018-04-02 23:00:00','2018-04-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Siavonga\"}',28.71,-16.54,'P','PPL','ZM.07',NULL,18638,'Africa/Lusaka',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Sesheke\"}',24.30,-17.48,'P','PPL','ZM.01',NULL,20149,'Africa/Lusaka',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Serenje\"}',30.24,-13.23,'P','PPL','ZM.02',NULL,8779,'Africa/Lusaka',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Senanga\"}',23.27,-16.12,'P','PPL','ZM.01',NULL,10005,'Africa/Lusaka',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Samfya\"}',29.56,-11.36,'P','PPL','ZM.04',NULL,20470,'Africa/Lusaka',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Petauke\"}',31.32,-14.24,'P','PPL','ZM.03','ZM.03.899821',19296,'Africa/Lusaka',1,'2016-09-21 23:00:00','2016-09-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Ndola\"}',28.64,-12.96,'P','PPLA','ZM.08',NULL,394518,'Africa/Lusaka',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Nakambala\"}',27.78,-15.83,'P','PPL','ZM.07',NULL,10425,'Africa/Lusaka',1,'2018-12-03 23:00:00','2018-12-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Mwinilunga\"}',24.43,-11.74,'P','PPL','ZM.06',NULL,13798,'Africa/Lusaka',1,'2021-10-01 23:00:00','2021-10-01 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Mungwi\"}',31.37,-10.17,'P','PPL','ZM.05',NULL,6821,'Africa/Lusaka',1,'2018-12-03 23:00:00','2018-12-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Mumbwa\"}',27.06,-14.98,'P','PPL','ZM.02',NULL,19086,'Africa/Lusaka',1,'2012-06-04 23:00:00','2012-06-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Mufumbwe\"}',24.80,-13.68,'P','PPL','ZM.06',NULL,6155,'Africa/Lusaka',1,'2018-12-03 23:00:00','2018-12-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Mufulira\"}',28.24,-12.55,'P','PPL','ZM.08',NULL,120500,'Africa/Lusaka',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Mpongwe\"}',28.16,-13.51,'P','PPL','ZM.08',NULL,8997,'Africa/Lusaka',1,'2018-07-03 23:00:00','2018-07-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Mpika\"}',31.45,-11.83,'P','PPL','ZM.10',NULL,28445,'Africa/Lusaka',1,'2016-06-03 23:00:00','2016-06-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Monze\"}',27.48,-16.28,'P','PPL','ZM.07',NULL,30257,'Africa/Lusaka',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Mongu\"}',23.13,-15.25,'P','PPLA','ZM.01',NULL,52534,'Africa/Lusaka',1,'2018-03-17 23:00:00','2018-03-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Mkushi\"}',29.39,-13.62,'P','PPL','ZM.02',NULL,12306,'Africa/Lusaka',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Mazabuka\"}',27.75,-15.86,'P','PPL','ZM.07',NULL,64006,'Africa/Lusaka',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Mansa\"}',28.89,-11.20,'P','PPLA','ZM.04',NULL,42277,'Africa/Lusaka',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Maamba\"}',27.15,-17.37,'P','PPL','ZM.07',NULL,12251,'Africa/Lusaka',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Luwingu\"}',29.93,-10.26,'P','PPL','ZM.05',NULL,6161,'Africa/Lusaka',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Lusaka\"}',28.29,-15.41,'P','PPLC','ZM.09',NULL,1267440,'Africa/Lusaka',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Lundazi\"}',33.18,-12.29,'P','PPL','ZM.03',NULL,11635,'Africa/Lusaka',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Luanshya\"}',28.42,-13.14,'P','PPL','ZM.08',NULL,113365,'Africa/Lusaka',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Livingstone\"}',25.85,-17.84,'P','PPLA2','ZM.07','ZM.07.910107',109203,'Africa/Lusaka',1,'2016-06-02 23:00:00','2016-06-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Limulunga\"}',23.14,-15.10,'P','PPL','ZM.01',NULL,7461,'Africa/Lusaka',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Kitwe\"}',28.21,-12.80,'P','PPL','ZM.08',NULL,400914,'Africa/Lusaka',1,'2012-06-19 23:00:00','2012-06-19 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Kataba\"}',29.78,-11.88,'P','PPL','ZM.08',NULL,14000,'Africa/Lusaka',1,'2013-05-04 23:00:00','2013-05-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Kasempa\"}',25.83,-13.46,'P','PPL','ZM.06',NULL,5622,'Africa/Lusaka',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Kasama\"}',31.18,-10.21,'P','PPLA','ZM.05',NULL,91056,'Africa/Lusaka',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Kapiri Mposhi\"}',28.67,-13.97,'P','PPL','ZM.02',NULL,37942,'Africa/Lusaka',1,'2012-06-04 23:00:00','2012-06-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Kaoma\"}',24.80,-14.78,'P','PPL','ZM.01',NULL,14212,'Africa/Lusaka',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Kansanshi\"}',26.43,-12.10,'P','PPL','ZM.06',NULL,40705,'Africa/Lusaka',1,'2011-10-26 23:00:00','2011-10-26 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Kalulushi\"}',28.09,-12.84,'P','PPL','ZM.08',NULL,66575,'Africa/Lusaka',1,'2012-06-19 23:00:00','2012-06-19 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Kalengwa\"}',25.00,-13.47,'P','PPL','ZM.06',NULL,7574,'Africa/Lusaka',1,'2018-12-03 23:00:00','2018-12-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Kalabo\"}',22.68,-14.99,'P','PPL','ZM.01',NULL,7731,'Africa/Lusaka',1,'2017-08-01 23:00:00','2017-08-01 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Kafue\"}',28.18,-15.77,'P','PPL','ZM.09',NULL,47554,'Africa/Lusaka',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Kabwe\"}',28.45,-14.45,'P','PPLA','ZM.02',NULL,188979,'Africa/Lusaka',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Kabompo\"}',24.20,-13.59,'P','PPL','ZM.06',NULL,6592,'Africa/Lusaka',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Isoka\"}',32.63,-10.16,'P','PPL','ZM.10',NULL,13122,'Africa/Lusaka',1,'2016-06-03 23:00:00','2016-06-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Chongwe\"}',28.68,-15.33,'P','PPL','ZM.09',NULL,6057,'Africa/Lusaka',1,'2018-12-03 23:00:00','2018-12-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Choma\"}',26.99,-16.81,'P','PPLA','ZM.07','ZM.07.917743',46746,'Africa/Lusaka',1,'2017-05-06 23:00:00','2017-05-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Chipata\"}',32.65,-13.63,'P','PPLA','ZM.03',NULL,85963,'Africa/Lusaka',1,'2015-06-02 23:00:00','2015-06-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Chinsali\"}',32.08,-10.54,'P','PPLA','ZM.10',NULL,14015,'Africa/Lusaka',1,'2016-06-02 23:00:00','2016-06-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Chingola\"}',27.88,-12.53,'P','PPLA2','ZM.08','ZM.08.919006',148564,'Africa/Lusaka',1,'2016-10-15 23:00:00','2016-10-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Chililabombwe\"}',27.82,-12.36,'P','PPL','ZM.08',NULL,57328,'Africa/Lusaka',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('ZM','{\"en\":\"Chambishi\"}',28.05,-12.63,'P','PPL','ZM.08',NULL,11073,'Africa/Lusaka',1,'2011-10-19 23:00:00','2011-10-19 23:00:00');
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
