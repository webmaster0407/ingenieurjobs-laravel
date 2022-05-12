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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CG.10','CG','{\"en\":\"Sangha\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CG.11','CG','{\"en\":\"Pool\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CG.08','CG','{\"en\":\"Plateaux\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CG.07','CG','{\"en\":\"Niari\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CG.06','CG','{\"en\":\"Likouala\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CG.05','CG','{\"en\":\"Lékoumou\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CG.04','CG','{\"en\":\"Kouilou\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CG.13','CG','{\"en\":\"Cuvette\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CG.01','CG','{\"en\":\"Bouenza\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CG.12','CG','{\"en\":\"Brazzaville\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CG.14','CG','{\"en\":\"Cuvette-Ouest\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CG.15','CG','{\"en\":\"Pointe-Noire\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.11.2257174','CG','CG.11','{\"en\":\"Mindouli\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.11.2257531','CG','CG.11','{\"en\":\"Mayama\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.10.7731851','CG','CG.10','{\"en\":\"Souanke\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.10.7731852','CG','CG.10','{\"en\":\"Sembe\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.10.7731853','CG','CG.10','{\"en\":\"Ouesso\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.06.7731899','CG','CG.06','{\"en\":\"Dongou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.06.7731900','CG','CG.06','{\"en\":\"Impfondo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.13.7731907','CG','CG.13','{\"en\":\"Mossaka\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.08.7731998','CG','CG.08','{\"en\":\"Gamboma\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.08.7731999','CG','CG.08','{\"en\":\"Djambala\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.11.7732000','CG','CG.11','{\"en\":\"Ngabe\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.11.7732002','CG','CG.11','{\"en\":\"Kinkala\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.11.7732003','CG','CG.11','{\"en\":\"Boko\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.13.7870297','CG','CG.13','{\"en\":\"Boundji\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.13.7870298','CG','CG.13','{\"en\":\"Loukolela\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.13.7870306','CG','CG.13','{\"en\":\"Makoua\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.13.7870312','CG','CG.13','{\"en\":\"Owando\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.04.7870561','CG','CG.04','{\"en\":\"Madingo-Kayes\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.04.7870563','CG','CG.04','{\"en\":\"Kakamoeka\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.04.7870579','CG','CG.04','{\"en\":\"Mvouti\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.05.7870607','CG','CG.05','{\"en\":\"Bambama\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.05.7870608','CG','CG.05','{\"en\":\"Komono\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.05.7870613','CG','CG.05','{\"en\":\"Sibiti\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.05.7870614','CG','CG.05','{\"en\":\"Zanaga\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.07.7870640','CG','CG.07','{\"en\":\"Divenie\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.07.7870641','CG','CG.07','{\"en\":\"Kibangou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.07.7870642','CG','CG.07','{\"en\":\"Kimongo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.07.7870646','CG','CG.07','{\"en\":\"Louvakou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.07.7870650','CG','CG.07','{\"en\":\"Mayoko\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.08.7870660','CG','CG.08','{\"en\":\"Abala\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.08.7870663','CG','CG.08','{\"en\":\"Lekana\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.11.7873913','CG','CG.11','{\"en\":\"Kindamba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.14.8051157','CG','CG.14','{\"en\":\"Okoyo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.01.8051158','CG','CG.01','{\"en\":\"Mouyondzi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.01.8051166','CG','CG.01','{\"en\":\"Madingou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.01.8051167','CG','CG.01','{\"en\":\"Nkayi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.01.8051168','CG','CG.01','{\"en\":\"Loudima\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.15.8051169','CG','CG.15','{\"en\":\"Pointe-Noire\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.06.11996188','CG','CG.06','{\"en\":\"Enyelle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.06.11996189','CG','CG.06','{\"en\":\"Bouanila\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.08.11996190','CG','CG.08','{\"en\":\"Mbon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.14.11996191','CG','CG.14','{\"en\":\"Kelle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.01.11996192','CG','CG.01','{\"en\":\"Mfouati\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.14.11996193','CG','CG.14','{\"en\":\"Mbomo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.10.11996194','CG','CG.10','{\"en\":\"Pikounda\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.14.11996195','CG','CG.14','{\"en\":\"Etoumbi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.14.11996196','CG','CG.14','{\"en\":\"Mbama\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.10.11996197','CG','CG.10','{\"en\":\"Ngbala\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.08.11996198','CG','CG.08','{\"en\":\"Allembe\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.08.11996199','CG','CG.08','{\"en\":\"Ngo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.07.11996200','CG','CG.07','{\"en\":\"Mbinda\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.14.11996201','CG','CG.14','{\"en\":\"Ewo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.13.11996202','CG','CG.13','{\"en\":\"Oyo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.04.11996203','CG','CG.04','{\"en\":\"Nzambi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.11.11996204','CG','CG.11','{\"en\":\"Louingui\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.13.11996205','CG','CG.13','{\"en\":\"Ntokou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.04.11996206','CG','CG.04','{\"en\":\"Hinda\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.01.11996207','CG','CG.01','{\"en\":\"Boko-Songho\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.11.11996208','CG','CG.11','{\"en\":\"Kimba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.06.11996209','CG','CG.06','{\"en\":\"Epena\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.07.11996210','CG','CG.07','{\"en\":\"Moungoundou-Sud\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.08.11996211','CG','CG.08','{\"en\":\"Makotimpoko\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.13.11996212','CG','CG.13','{\"en\":\"Ngoko\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.07.11996213','CG','CG.07','{\"en\":\"Nyanga\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.07.11996214','CG','CG.07','{\"en\":\"Banba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.07.11996215','CG','CG.07','{\"en\":\"Londela-Kayes\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.11.11996216','CG','CG.11','{\"en\":\"Goma-Tsetse\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.08.11996217','CG','CG.08','{\"en\":\"Ollombo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.08.11996218','CG','CG.08','{\"en\":\"Ongogni\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.08.11996219','CG','CG.08','{\"en\":\"Mpouya\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.12.11996220','CG','CG.12','{\"en\":\"Brazzaville\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.05.11996221','CG','CG.05','{\"en\":\"Mayeye\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.11.11996222','CG','CG.11','{\"en\":\"Ignie\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.01.11996223','CG','CG.01','{\"en\":\"Tsiaki\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.11.11996224','CG','CG.11','{\"en\":\"Vindza\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.01.11996225','CG','CG.01','{\"en\":\"Kingoue\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.11.11996226','CG','CG.11','{\"en\":\"Loumo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.01.11996227','CG','CG.01','{\"en\":\"Yamba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.10.11996228','CG','CG.10','{\"en\":\"Mokeko\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.01.11996229','CG','CG.01','{\"en\":\"Mabombo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.11.11996230','CG','CG.11','{\"en\":\"Mbandza-Ndounga\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.07.11996231','CG','CG.07','{\"en\":\"Moutamba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.07.11996232','CG','CG.07','{\"en\":\"Moungoundou-Nord\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.04.11996233','CG','CG.04','{\"en\":\"Tchiamba-Nzassi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.07.11996234','CG','CG.07','{\"en\":\"Yaya\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.07.11996235','CG','CG.07','{\"en\":\"Makabana\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.06.11996236','CG','CG.06','{\"en\":\"Betou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.13.11996237','CG','CG.13','{\"en\":\"Tchikapika\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CG.06.11996238','CG','CG.06','{\"en\":\"Liranga\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CG','{\"en\":\"Sibiti\"}',13.35,-3.68,'P','PPLA','CG.05',NULL,19089,'Africa/Brazzaville',1,'2011-10-25 23:00:00','2011-10-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CG','{\"en\":\"Pointe-Noire\"}',11.86,-4.78,'P','PPLA','CG.15',NULL,659084,'Africa/Brazzaville',1,'2019-01-08 23:00:00','2019-01-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CG','{\"en\":\"Owando\"}',15.90,-0.48,'P','PPLA','CG.13',NULL,23952,'Africa/Brazzaville',1,'2011-10-26 23:00:00','2011-10-26 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CG','{\"en\":\"Ouésso\"}',16.05,1.61,'P','PPLA','CG.10','CG.10.7731853',23915,'Africa/Brazzaville',1,'2019-01-11 23:00:00','2019-01-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CG','{\"en\":\"Mossendjo\"}',12.70,-2.95,'P','PPL','CG.07',NULL,18231,'Africa/Brazzaville',1,'2013-05-08 23:00:00','2013-05-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CG','{\"en\":\"Makoua\"}',15.63,0.01,'P','PPL','CG.13',NULL,11355,'Africa/Brazzaville',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CG','{\"en\":\"Madingou\"}',13.55,-4.15,'P','PPLA','CG.01',NULL,22760,'Africa/Brazzaville',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CG','{\"en\":\"Dolisie\"}',12.67,-4.20,'P','PPLA','CG.07',NULL,103894,'Africa/Brazzaville',1,'2013-04-21 23:00:00','2013-04-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CG','{\"en\":\"Loango\"}',11.81,-4.65,'P','PPLA','CG.04',NULL,0,'Africa/Brazzaville',1,'2019-02-20 23:00:00','2019-02-20 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CG','{\"en\":\"Loandjili\"}',11.86,-4.76,'P','PPL','CG.15',NULL,23204,'Africa/Brazzaville',1,'2019-01-08 23:00:00','2019-01-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CG','{\"en\":\"Kinkala\"}',14.76,-4.36,'P','PPLA','CG.11',NULL,13882,'Africa/Brazzaville',1,'2012-01-31 23:00:00','2012-01-31 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CG','{\"en\":\"Kayes\"}',13.29,-4.20,'P','PPL','CG.01',NULL,58737,'Africa/Brazzaville',1,'2013-04-12 23:00:00','2013-04-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CG','{\"en\":\"Impfondo\"}',18.06,1.62,'P','PPLA','CG.06',NULL,20859,'Africa/Brazzaville',1,'2013-05-07 23:00:00','2013-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CG','{\"en\":\"Gamboma\"}',15.86,-1.88,'P','PPL','CG.08',NULL,20877,'Africa/Brazzaville',1,'2012-05-04 23:00:00','2012-05-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CG','{\"en\":\"Ewo\"}',14.82,-0.87,'P','PPLA','CG.14',NULL,4923,'Africa/Brazzaville',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CG','{\"en\":\"Djambala\"}',14.75,-2.54,'P','PPLA','CG.08',NULL,9650,'Africa/Brazzaville',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CG','{\"en\":\"Brazzaville\"}',15.28,-4.27,'P','PPLC','CG.12',NULL,1284609,'Africa/Brazzaville',1,'2012-04-24 23:00:00','2012-04-24 23:00:00');
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
