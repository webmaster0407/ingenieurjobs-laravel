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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('PG.17','PG','{\"en\":\"West New Britain\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('PG.06','PG','{\"en\":\"Western Province\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('PG.16','PG','{\"en\":\"Western Highlands\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('PG.05','PG','{\"en\":\"Southern Highlands\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('PG.18','PG','{\"en\":\"Sandaun\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('PG.07','PG','{\"en\":\"Bougainville\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('PG.04','PG','{\"en\":\"Northern Province\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('PG.15','PG','{\"en\":\"New Ireland\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('PG.20','PG','{\"en\":\"National Capital\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('PG.14','PG','{\"en\":\"Morobe\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('PG.13','PG','{\"en\":\"Manus\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('PG.12','PG','{\"en\":\"Madang\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('PG.02','PG','{\"en\":\"Gulf\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('PG.19','PG','{\"en\":\"Enga\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('PG.11','PG','{\"en\":\"East Sepik\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('PG.10','PG','{\"en\":\"East New Britain\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('PG.09','PG','{\"en\":\"Eastern Highlands\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('PG.08','PG','{\"en\":\"Chimbu\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('PG.03','PG','{\"en\":\"Milne Bay\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('PG.01','PG','{\"en\":\"Central Province\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('PG.21','PG','{\"en\":\"Hela\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('PG.22','PG','{\"en\":\"Jiwaka\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.11.2083536','PG','PG.11','{\"en\":\"Wewak\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.19.2083851','PG','PG.19','{\"en\":\"Wapenamanda\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.19.2084245','PG','PG.19','{\"en\":\"Wabag\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.18.2085584','PG','PG.18','{\"en\":\"Telefomin\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.21.2085770','PG','PG.21','{\"en\":\"Tari Pori\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.17.2085943','PG','PG.17','{\"en\":\"Talasea\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.01.2087633','PG','PG.01','{\"en\":\"Rigo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.10.2087893','PG','PG.10','{\"en\":\"Rabaul\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.10.2088199','PG','PG.10','{\"en\":\"Pomio\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.09.2089207','PG','PG.09','{\"en\":\"Okapa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.18.2089418','PG','PG.18','{\"en\":\"Nuku\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.05.2089577','PG','PG.05','{\"en\":\"Nipa Kutubu\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.15.2090019','PG','PG.15','{\"en\":\"Namatanai\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.16.2090408','PG','PG.16','{\"en\":\"Hagen\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.14.2090950','PG','PG.14','{\"en\":\"Menyamya\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.05.2090988','PG','PG.05','{\"en\":\"Mendi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.11.2091472','PG','PG.11','{\"en\":\"Maprik\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.09.2092104','PG','PG.09','{\"en\":\"Lufa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.14.2092738','PG','PG.14','{\"en\":\"Lae\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.19.2093564','PG','PG.19','{\"en\":\"Kompiam Ambum\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.10.2093683','PG','PG.10','{\"en\":\"Kokopo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.04.2093690','PG','PG.04','{\"en\":\"Sohe\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.02.2094002','PG','PG.02','{\"en\":\"Kikori\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.08.2094124','PG','PG.08','{\"en\":\"Kerowagi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.02.2094142','PG','PG.02','{\"en\":\"Kerema\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.15.2094341','PG','PG.15','{\"en\":\"Kavieng\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.08.2094554','PG','PG.08','{\"en\":\"Karimui Nomane\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.17.2094745','PG','PG.17','{\"en\":\"Kandrian Gloucester\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.19.2094755','PG','PG.19','{\"en\":\"Kandep\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.09.2095037','PG','PG.09','{\"en\":\"Kainantu\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.14.2095129','PG','PG.14','{\"en\":\"Kabwum\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.22.2095253','PG','PG.22','{\"en\":\"Jimi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.05.2095923','PG','PG.05','{\"en\":\"Ialibu Pangia\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.09.2096222','PG','PG.09','{\"en\":\"Henganofi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.08.2096611','PG','PG.08','{\"en\":\"Gumine\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.09.2096740','PG','PG.09','{\"en\":\"Goroka\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.01.2096826','PG','PG.01','{\"en\":\"Goilala\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.14.2097417','PG','PG.14','{\"en\":\"Finschhafen\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.03.2097572','PG','PG.03','{\"en\":\"Esa’ala\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.08.2098576','PG','PG.08','{\"en\":\"Chuave\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.12.2099273','PG','PG.12','{\"en\":\"Bogia\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.11.2100764','PG','PG.11','{\"en\":\"Angoram\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.11.2100931','PG','PG.11','{\"en\":\"Ambunti Dreikikir\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.01.2134008','PG','PG.01','{\"en\":\"Abau\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.01.7668019','PG','PG.01','{\"en\":\"Kairuku-Hiri\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.13.7910338','PG','PG.13','{\"en\":\"Manus\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.12.7910339','PG','PG.12','{\"en\":\"Madang\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.14.8657188','PG','PG.14','{\"en\":\"Bulolo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.18.8657189','PG','PG.18','{\"en\":\"Vanimo Green\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.04.8657190','PG','PG.04','{\"en\":\"Ijivitari\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.12.8657191','PG','PG.12','{\"en\":\"Middle Ramu\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.12.8657192','PG','PG.12','{\"en\":\"Usino Bundi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.19.8657193','PG','PG.19','{\"en\":\"Lagaip Porgera\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.06.8657194','PG','PG.06','{\"en\":\"Middle Fly\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.16.8657195','PG','PG.16','{\"en\":\"Dei\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.06.8657196','PG','PG.06','{\"en\":\"South Fly\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.22.8657197','PG','PG.22','{\"en\":\"Angalimp South Wahgi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.18.8657198','PG','PG.18','{\"en\":\"Aitape Lumi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.03.8657199','PG','PG.03','{\"en\":\"Kiriwina Goodenough\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.08.8657200','PG','PG.08','{\"en\":\"Kundiawa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.21.8657201','PG','PG.21','{\"en\":\"Koroba-Lake Kopiago\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.05.8657202','PG','PG.05','{\"en\":\"Kagua Erave\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.03.8657203','PG','PG.03','{\"en\":\"Alotau\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.08.8657204','PG','PG.08','{\"en\":\"Sinasina Yonggamugl\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.09.8657205','PG','PG.09','{\"en\":\"Unggai Bena\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.09.8657206','PG','PG.09','{\"en\":\"Daulo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.10.8657207','PG','PG.10','{\"en\":\"Gazelle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.11.8657208','PG','PG.11','{\"en\":\"Wosera Gaui\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.11.8657209','PG','PG.11','{\"en\":\"Yangoru Saussia\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.12.8657210','PG','PG.12','{\"en\":\"Sumkar\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.14.8657211','PG','PG.14','{\"en\":\"Huon Gulf\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.14.8657212','PG','PG.14','{\"en\":\"Nawae\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.14.8657213','PG','PG.14','{\"en\":\"Tewai Siassi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.16.8657214','PG','PG.16','{\"en\":\"Baiyer Mul\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.16.8657215','PG','PG.16','{\"en\":\"Tambul Nebilyer\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.21.8657216','PG','PG.21','{\"en\":\"Komo Margarima\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.22.8657217','PG','PG.22','{\"en\":\"North Wahgi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.05.8657218','PG','PG.05','{\"en\":\"Imbonggu\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.07.8714537','PG','PG.07','{\"en\":\"Central Bougainville\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.07.8714538','PG','PG.07','{\"en\":\"South Bougainville\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.07.8740754','PG','PG.07','{\"en\":\"North Bougainville\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.03.9855462','PG','PG.03','{\"en\":\"Samarai Murua\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.06.9855465','PG','PG.06','{\"en\":\"North Fly\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.09.9855501','PG','PG.09','{\"en\":\"Obura Wonenara\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.12.9855506','PG','PG.12','{\"en\":\"Rai Coast\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.14.9855507','PG','PG.14','{\"en\":\"Markham\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('PG.20.9855526','PG','PG.20','{\"en\":\"National Capital District\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('PG','{\"en\":\"Wewak\"}',143.63,-3.55,'P','PPLA','PG.11','PG.11.2083536',18230,'Pacific/Port_Moresby',1,'2018-03-14 23:00:00','2018-03-14 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('PG','{\"en\":\"Wau\"}',146.72,-7.34,'P','PPL','PG.14','PG.14.8657188',14629,'Pacific/Port_Moresby',1,'2015-04-01 23:00:00','2015-04-01 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('PG','{\"en\":\"Wabag\"}',143.72,-5.49,'P','PPLA','PG.19',NULL,3958,'Pacific/Port_Moresby',1,'2017-07-06 23:00:00','2017-07-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('PG','{\"en\":\"Vanimo\"}',141.30,-2.68,'P','PPLA','PG.18',NULL,11204,'Pacific/Port_Moresby',1,'2020-10-31 23:00:00','2020-10-31 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('PG','{\"en\":\"Tari\"}',142.95,-5.84,'P','PPLA','PG.21',NULL,8186,'Pacific/Port_Moresby',1,'2019-07-09 23:00:00','2019-07-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('PG','{\"en\":\"Rabaul\"}',152.16,-4.20,'P','PPL','PG.10','PG.10.2087893',8074,'Pacific/Port_Moresby',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('PG','{\"en\":\"Port Moresby\"}',147.15,-9.48,'P','PPLC','PG.20',NULL,283733,'Pacific/Port_Moresby',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('PG','{\"en\":\"Popondetta\"}',148.23,-8.77,'P','PPLA','PG.04','PG.04.2093690',28198,'Pacific/Port_Moresby',1,'2015-04-01 23:00:00','2015-04-01 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('PG','{\"en\":\"Mount Hagen\"}',144.23,-5.86,'P','PPLA','PG.16','PG.16.2090408',33623,'Pacific/Port_Moresby',1,'2019-02-26 23:00:00','2019-02-26 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('PG','{\"en\":\"Mendi\"}',143.66,-6.15,'P','PPLA','PG.05',NULL,26252,'Pacific/Port_Moresby',1,'2018-03-13 23:00:00','2018-03-13 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('PG','{\"en\":\"Madang\"}',145.79,-5.22,'P','PPLA','PG.12',NULL,27419,'Pacific/Port_Moresby',1,'2019-02-26 23:00:00','2019-02-26 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('PG','{\"en\":\"Lorengau\"}',147.27,-2.03,'P','PPLA','PG.13',NULL,5806,'Pacific/Port_Moresby',1,'2020-10-31 23:00:00','2020-10-31 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('PG','{\"en\":\"Lae\"}',147.00,-6.72,'P','PPLA','PG.14',NULL,76255,'Pacific/Port_Moresby',1,'2019-07-09 23:00:00','2019-07-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('PG','{\"en\":\"Kurumul\"}',144.63,-5.86,'P','PPLA','PG.22',NULL,0,'Pacific/Port_Moresby',1,'2019-07-09 23:00:00','2019-07-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('PG','{\"en\":\"Kundiawa\"}',144.97,-6.02,'P','PPLA','PG.08',NULL,9383,'Pacific/Port_Moresby',1,'2019-07-09 23:00:00','2019-07-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('PG','{\"en\":\"Kokopo\"}',152.27,-4.34,'P','PPLA','PG.10',NULL,26273,'Pacific/Port_Moresby',1,'2018-10-18 23:00:00','2018-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('PG','{\"en\":\"Kokoda\"}',147.74,-8.88,'P','PPLA2','PG.04','PG.04.2093690',6199,'Pacific/Port_Moresby',1,'2014-10-30 23:00:00','2014-10-30 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('PG','{\"en\":\"Kiunga\"}',141.29,-6.12,'P','PPL','PG.06',NULL,11536,'Pacific/Port_Moresby',1,'2017-12-22 23:00:00','2017-12-22 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('PG','{\"en\":\"Kimbe\"}',150.14,-5.55,'P','PPLA','PG.17',NULL,18847,'Pacific/Port_Moresby',1,'2015-04-05 23:00:00','2015-04-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('PG','{\"en\":\"Kerema\"}',145.77,-7.96,'P','PPLA','PG.02',NULL,5646,'Pacific/Port_Moresby',1,'2019-07-09 23:00:00','2019-07-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('PG','{\"en\":\"Kavieng\"}',150.80,-2.57,'P','PPLA','PG.15','PG.15.2094341',14490,'Pacific/Port_Moresby',1,'2018-10-23 23:00:00','2018-10-23 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('PG','{\"en\":\"Kainantu\"}',145.87,-6.29,'P','PPL','PG.09',NULL,8509,'Pacific/Port_Moresby',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('PG','{\"en\":\"Ialibu\"}',143.99,-6.28,'P','PPL','PG.05',NULL,6915,'Pacific/Port_Moresby',1,'2018-04-05 23:00:00','2018-04-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('PG','{\"en\":\"Goroka\"}',145.39,-6.08,'P','PPLA','PG.09',NULL,18503,'Pacific/Port_Moresby',1,'2019-07-09 23:00:00','2019-07-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('PG','{\"en\":\"Daru\"}',143.21,-9.08,'P','PPLA','PG.06',NULL,15214,'Pacific/Port_Moresby',1,'2015-04-17 23:00:00','2015-04-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('PG','{\"en\":\"Bulolo\"}',146.64,-7.20,'P','PPL','PG.14','PG.14.8657188',16042,'Pacific/Port_Moresby',1,'2017-06-15 23:00:00','2017-06-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('PG','{\"en\":\"Arawa\"}',155.57,-6.23,'P','PPLA2','PG.07',NULL,40266,'Pacific/Bougainville',1,'2015-02-03 23:00:00','2015-02-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('PG','{\"en\":\"Aitape\"}',142.35,-3.14,'P','PPL','PG.18',NULL,5547,'Pacific/Port_Moresby',1,'2018-10-11 23:00:00','2018-10-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('PG','{\"en\":\"Alotau\"}',150.46,-10.32,'P','PPLA','PG.03',NULL,10025,'Pacific/Port_Moresby',1,'2014-01-04 23:00:00','2014-01-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('PG','{\"en\":\"Buka\"}',154.67,-5.43,'P','PPLA','PG.07',NULL,0,'Pacific/Bougainville',1,'2015-03-11 23:00:00','2015-03-11 23:00:00');
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
