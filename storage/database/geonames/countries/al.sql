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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('AL.40','AL','{\"en\":\"Berat\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('AL.41','AL','{\"en\":\"Dibër\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('AL.43','AL','{\"en\":\"Elbasan\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('AL.45','AL','{\"en\":\"Gjirokastër\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('AL.46','AL','{\"en\":\"Korçë\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('AL.47','AL','{\"en\":\"Kukës\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('AL.42','AL','{\"en\":\"Durrës\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('AL.44','AL','{\"en\":\"Fier\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('AL.48','AL','{\"en\":\"Lezhë\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('AL.49','AL','{\"en\":\"Shkodër\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('AL.50','AL','{\"en\":\"Tirana\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('AL.51','AL','{\"en\":\"Vlorë\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.51.20','AL','AL.51','{\"en\":\"Rrethi i Sarandës\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.51.30','AL','AL.51','{\"en\":\"Rrethi i Delvinës\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.47.26','AL','AL.47','{\"en\":\"Rrethi i Tropojës\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.40.22','AL','AL.40','{\"en\":\"Rrethi i Skraparit\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.49.19','AL','AL.49','{\"en\":\"Rrethi i Pukës\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.46.18','AL','AL.46','{\"en\":\"Rrethi i Pogradecit\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.45.17','AL','AL.45','{\"en\":\"Rrethi i Përmetit\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.48.16','AL','AL.48','{\"en\":\"Rrethi i Mirditës\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.41.15','AL','AL.41','{\"en\":\"Rrethi i Matit\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.43.13','AL','AL.43','{\"en\":\"Rrethi i Librazhdit\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.47.11','AL','AL.47','{\"en\":\"Rrethi i Kukësit\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.46.09','AL','AL.46','{\"en\":\"Rrethi i Korçës\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.46.08','AL','AL.46','{\"en\":\"Rrethi i Kolonjës\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.43.07','AL','AL.43','{\"en\":\"Rrethi i Gramshit\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.45.06','AL','AL.45','{\"en\":\"Rrethi i Gjirokastrës\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.43.04','AL','AL.43','{\"en\":\"Rrethi i Elbasanit\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.41.02','AL','AL.41','{\"en\":\"Rrethi i Dibrës\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.40.01','AL','AL.40','{\"en\":\"Rrethi i Beratit\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.47.32','AL','AL.47','{\"en\":\"Rrethi i Hasit\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.41.29','AL','AL.41','{\"en\":\"Rrethi i Bulqizës\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.46.31','AL','AL.46','{\"en\":\"Rrethi i Devollit\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.51.27','AL','AL.51','{\"en\":\"Rrethi i Vlorës\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.50.28','AL','AL.50','{\"en\":\"Rrethi i Tiranës\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.45.23','AL','AL.45','{\"en\":\"Rrethi i Tepelenës\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.49.21','AL','AL.49','{\"en\":\"Rrethi i Shkodrës\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.44.14','AL','AL.44','{\"en\":\"Rrethi i Lushnjës\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.48.12','AL','AL.48','{\"en\":\"Lezhë\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.42.10','AL','AL.42','{\"en\":\"Rrethi i Krujës\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.44.05','AL','AL.44','{\"en\":\"Fier\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.42.03','AL','AL.42','{\"en\":\"Durrës District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.50.33','AL','AL.50','{\"en\":\"Rrethi i Kavajës\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.40.34','AL','AL.40','{\"en\":\"Rrethi i Kuçovës\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.48.35','AL','AL.48','{\"en\":\"Rrethi i Kurbinit\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.44.37','AL','AL.44','{\"en\":\"Rrethi i Mallakastrës\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.49.36','AL','AL.49','{\"en\":\"Rrethi i Malësia e Madhe\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.43.38','AL','AL.43','{\"en\":\"Rrethi i Peqinit\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.40.10944368','AL','AL.40','{\"en\":\"Bashkia Berat\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.40.10944369','AL','AL.40','{\"en\":\"Bashkia Kuçovë\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.40.10944370','AL','AL.40','{\"en\":\"Bashkia Poliçan\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.40.10944371','AL','AL.40','{\"en\":\"Bashkia Skrapar\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.40.10944372','AL','AL.40','{\"en\":\"Bashkia Ura Vajgurore\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.41.10944373','AL','AL.41','{\"en\":\"Bashkia Bulqizë\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.41.10944374','AL','AL.41','{\"en\":\"Bashkia Dibër\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.41.10944375','AL','AL.41','{\"en\":\"Bashkia Klos\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.41.10944376','AL','AL.41','{\"en\":\"Bashkia Mat\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.42.10944377','AL','AL.42','{\"en\":\"Bashkia Durrës\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.42.10944378','AL','AL.42','{\"en\":\"Bashkia Krujë\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.42.10944379','AL','AL.42','{\"en\":\"Bashkia Shijak\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.43.10944380','AL','AL.43','{\"en\":\"Bashkia Elbasan\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.43.10944381','AL','AL.43','{\"en\":\"Bashkia Belsh\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.43.10944382','AL','AL.43','{\"en\":\"Bashkia Cërrik\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.43.10944383','AL','AL.43','{\"en\":\"Bashkia Gramsh\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.43.10944384','AL','AL.43','{\"en\":\"Bashkia Librazhd\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.43.10944385','AL','AL.43','{\"en\":\"Bashkia Peqin\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.43.10944386','AL','AL.43','{\"en\":\"Bashkia Prrenjas\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.44.10944387','AL','AL.44','{\"en\":\"Bashkia Divjakë\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.44.10944388','AL','AL.44','{\"en\":\"Bashkia Fier\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.44.10944390','AL','AL.44','{\"en\":\"Bashkia Mallakastër\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.44.10944391','AL','AL.44','{\"en\":\"Bashkia Patos\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.44.10944392','AL','AL.44','{\"en\":\"Bashkia Roskovec\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.45.10944393','AL','AL.45','{\"en\":\"Bashkia Dropull\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.45.10944394','AL','AL.45','{\"en\":\"Bashkia Gjirokastër\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.45.10944395','AL','AL.45','{\"en\":\"Bashkia Kelcyrë\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.45.10944396','AL','AL.45','{\"en\":\"Bashkia Libohovë\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.45.10944397','AL','AL.45','{\"en\":\"Bashkia Memaliaj\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.45.10944398','AL','AL.45','{\"en\":\"Bashkia Përmet\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.45.10944399','AL','AL.45','{\"en\":\"Bashkia Tepelenë\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.46.10944400','AL','AL.46','{\"en\":\"Bashkia Devoll\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.46.10944401','AL','AL.46','{\"en\":\"Bashkia Kolonjë\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.46.10944402','AL','AL.46','{\"en\":\"Bashkia Korçë\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.46.10944403','AL','AL.46','{\"en\":\"Bashkia Maliq\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.46.10944404','AL','AL.46','{\"en\":\"Bashkia Pogradec\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.46.10944405','AL','AL.46','{\"en\":\"Bashkia Pustec\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.47.10944406','AL','AL.47','{\"en\":\"Bashkia Has\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.47.10944407','AL','AL.47','{\"en\":\"Bashkia Kukës\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.47.10944408','AL','AL.47','{\"en\":\"Bashkia Tropojë\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.48.10944409','AL','AL.48','{\"en\":\"Bashkia Kurbin\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.48.10944410','AL','AL.48','{\"en\":\"Bashkia Lezhë\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.48.10944411','AL','AL.48','{\"en\":\"Bashkia Mirditë\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.49.10944412','AL','AL.49','{\"en\":\"Bashkia Fushë Arrës\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.49.10944413','AL','AL.49','{\"en\":\"Bashkia Malësi e Madhe\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.49.10944414','AL','AL.49','{\"en\":\"Bashkia Pukë\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.49.10944415','AL','AL.49','{\"en\":\"Bashkia Shkodër\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.49.10944416','AL','AL.49','{\"en\":\"Bashkia Vau i Dejës\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.50.10944417','AL','AL.50','{\"en\":\"Bashkia Kamëz\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.50.10944418','AL','AL.50','{\"en\":\"Bashkia Kavajë\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.50.10944419','AL','AL.50','{\"en\":\"Bashkia Rrogozhinë\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.50.10944420','AL','AL.50','{\"en\":\"Bashkia Tiranë\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.50.10944421','AL','AL.50','{\"en\":\"Bashkia Vorë\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.51.10944422','AL','AL.51','{\"en\":\"Bashkia Delvinë\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.51.10944423','AL','AL.51','{\"en\":\"Bashkia Finiq\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.51.10944424','AL','AL.51','{\"en\":\"Bashkia Himarë\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.51.10944425','AL','AL.51','{\"en\":\"Bashkia Konispol\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.51.10944426','AL','AL.51','{\"en\":\"Bashkia Sarandë\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.51.10944427','AL','AL.51','{\"en\":\"Bashkia Selenicë\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('AL.51.10944428','AL','AL.51','{\"en\":\"Bashkia Vlorë\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Sarandë\"}',20.00,39.88,'P','PPLA2','AL.51','AL.51.20',15147,'Europe/Tirane',1,'2018-06-11 23:00:00','2018-06-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Tepelenë\"}',20.02,40.30,'P','PPLA2','AL.45','AL.45.23',11955,'Europe/Tirane',1,'2012-06-06 23:00:00','2012-06-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Poliçan\"}',20.10,40.61,'P','PPLA3','AL.40','AL.40.01',10663,'Europe/Tirane',1,'2012-06-01 23:00:00','2012-06-01 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Pogradec\"}',20.65,40.90,'P','PPLA2','AL.46','AL.46.18',61530,'Europe/Tirane',1,'2019-04-30 23:00:00','2019-04-30 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Peshkopi\"}',20.43,41.69,'P','PPLA','AL.41',NULL,14848,'Europe/Tirane',1,'2012-01-18 23:00:00','2012-01-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Përmet\"}',20.35,40.23,'P','PPLA2','AL.45','AL.45.17',10686,'Europe/Tirane',1,'2019-04-04 23:00:00','2019-04-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Kukës\"}',20.42,42.08,'P','PPLA','AL.47',NULL,17832,'Europe/Tirane',1,'2021-11-16 23:00:00','2021-11-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Korçë\"}',20.78,40.62,'P','PPLA','AL.46','AL.46.09',58259,'Europe/Tirane',1,'2020-06-10 23:00:00','2020-06-10 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Gramsh\"}',20.18,40.87,'P','PPLA2','AL.43','AL.43.07',11556,'Europe/Tirane',1,'2012-05-30 23:00:00','2012-05-30 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Gjirokastër\"}',20.14,40.08,'P','PPLA','AL.45',NULL,23437,'Europe/Tirane',1,'2020-06-10 23:00:00','2020-06-10 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Ersekë\"}',20.68,40.34,'P','PPLA2','AL.46','AL.46.08',7890,'Europe/Tirane',1,'2012-06-09 23:00:00','2012-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Elbasan\"}',20.08,41.11,'P','PPLA','AL.43',NULL,100903,'Europe/Tirane',1,'2017-12-19 23:00:00','2017-12-19 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Çorovodë\"}',20.23,40.50,'P','PPLA2','AL.40','AL.40.22',14046,'Europe/Tirane',1,'2012-06-01 23:00:00','2012-06-01 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Burrel\"}',20.01,41.61,'P','PPLA2','AL.41','AL.41.15',15405,'Europe/Tirane',1,'2012-06-01 23:00:00','2012-06-01 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Bulqizë\"}',20.22,41.49,'P','PPLA2','AL.41','AL.41.29',11212,'Europe/Tirane',1,'2021-10-06 23:00:00','2021-10-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Bilisht\"}',20.99,40.63,'P','PPLA3','AL.46','AL.46.31',7114,'Europe/Tirane',1,'2014-08-24 23:00:00','2014-08-24 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Librazhd-Qendër\"}',20.34,41.20,'P','PPLA3','AL.43','AL.43.13',12691,'Europe/Tirane',1,'2012-05-31 23:00:00','2012-05-31 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Vlorë\"}',19.48,40.47,'P','PPLA','AL.51',NULL,89546,'Europe/Tirane',1,'2020-06-10 23:00:00','2020-06-10 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Tirana\"}',19.82,41.33,'P','PPLC','AL.50','AL.50.28',374801,'Europe/Tirane',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Shkodër\"}',19.51,42.07,'P','PPLA','AL.49','AL.49.21',88245,'Europe/Tirane',1,'2019-05-02 23:00:00','2019-05-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Shijak\"}',19.57,41.35,'P','PPLA3','AL.42','AL.42.03',14138,'Europe/Tirane',1,'2012-05-31 23:00:00','2012-05-31 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Selenicë\"}',19.64,40.53,'P','PPLA3','AL.51','AL.51.27',6912,'Europe/Tirane',1,'2014-08-24 23:00:00','2014-08-24 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Rrogozhinë\"}',19.67,41.08,'P','PPLA3','AL.50','AL.50.33',5620,'Europe/Tirane',1,'2012-06-12 23:00:00','2012-06-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Rrëshen\"}',19.88,41.77,'P','PPLA2','AL.48','AL.48.16',10064,'Europe/Tirane',1,'2012-06-11 23:00:00','2012-06-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Roskovec\"}',19.70,40.74,'P','PPLA3','AL.44','AL.44.05',6657,'Europe/Tirane',1,'2017-12-21 23:00:00','2017-12-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Pukë\"}',19.90,42.04,'P','PPLA2','AL.49','AL.49.19',6495,'Europe/Tirane',1,'2012-06-11 23:00:00','2012-06-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Peqin\"}',19.75,41.05,'P','PPLA2','AL.43','AL.43.38',7513,'Europe/Tirane',1,'2012-05-31 23:00:00','2012-05-31 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Patos Fshat\"}',19.65,40.64,'P','PPL','AL.44',NULL,22679,'Europe/Tirane',1,'2012-01-18 23:00:00','2012-01-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Patos\"}',19.62,40.68,'P','PPLA3','AL.44','AL.44.05',60000,'Europe/Tirane',1,'2017-12-12 23:00:00','2017-12-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Mamurras\"}',19.69,41.58,'P','PPLA3','AL.48','AL.48.35',8282,'Europe/Tirane',1,'2012-06-10 23:00:00','2012-06-10 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Lushnjë\"}',19.70,40.94,'P','PPLA2','AL.44','AL.44.14',41469,'Europe/Tirane',1,'2019-01-01 23:00:00','2019-01-01 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Lezhë\"}',19.64,41.78,'P','PPLA','AL.48',NULL,18695,'Europe/Tirane',1,'2020-06-10 23:00:00','2020-06-10 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Laç\"}',19.71,41.64,'P','PPLA2','AL.48','AL.48.35',24825,'Europe/Tirane',1,'2012-06-10 23:00:00','2012-06-10 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Kuçovë\"}',19.92,40.80,'P','PPLA2','AL.40','AL.40.34',18166,'Europe/Tirane',1,'2012-06-01 23:00:00','2012-06-01 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Krujë\"}',19.79,41.51,'P','PPLA2','AL.42','AL.42.10',21286,'Europe/Tirane',1,'2012-05-31 23:00:00','2012-05-31 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Kavajë\"}',19.56,41.19,'P','PPLA2','AL.50','AL.50.33',29354,'Europe/Tirane',1,'2012-06-12 23:00:00','2012-06-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Kamëz\"}',19.76,41.38,'P','PPLA3','AL.50','AL.50.28',11026,'Europe/Tirane',1,'2012-06-12 23:00:00','2012-06-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Fushë-Krujë\"}',19.72,41.48,'P','PPLA3','AL.42','AL.42.10',10458,'Europe/Tirane',1,'2019-04-04 23:00:00','2019-04-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Fier-Çifçi\"}',19.57,40.72,'P','PPLX','AL.44',NULL,60995,'Europe/Tirane',1,'2007-05-29 23:00:00','2007-05-29 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Fier\"}',19.56,40.72,'P','PPLA','AL.44',NULL,56297,'Europe/Tirane',1,'2012-01-18 23:00:00','2012-01-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Durrës\"}',19.45,41.32,'P','PPLA','AL.42','AL.42.03',122034,'Europe/Tirane',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Cërrik\"}',19.98,41.03,'P','PPLA3','AL.43','AL.43.04',14269,'Europe/Tirane',1,'2012-05-30 23:00:00','2012-05-30 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Berat\"}',19.95,40.71,'P','PPLA','AL.40','AL.40.01',46866,'Europe/Tirane',1,'2012-06-02 23:00:00','2012-06-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('AL','{\"en\":\"Ballsh\"}',19.73,40.60,'P','PPLA2','AL.44','AL.44.37',10361,'Europe/Tirane',1,'2012-06-04 23:00:00','2012-06-04 23:00:00');
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
