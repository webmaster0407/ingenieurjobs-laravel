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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('NP.1','NP','{\"en\":\"Province 1\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('NP.2','NP','{\"en\":\"Province 2\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('NP.3','NP','{\"en\":\"Bagmati Province\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('NP.4','NP','{\"en\":\"Province 4\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('NP.5','NP','{\"en\":\"Lumbini Province\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('NP.6','NP','{\"en\":\"Karnali Pradesh\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('NP.7','NP','{\"en\":\"Sudurpashchim Pradesh\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.5.12095456','NP','NP.5','{\"en\":\"Banke\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.2.12095457','NP','NP.2','{\"en\":\"Bara\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.5.12095458','NP','NP.5','{\"en\":\"Bardiya\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.3.12095459','NP','NP.3','{\"en\":\"Bhaktapur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.1.12095460','NP','NP.1','{\"en\":\"Bhojpur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.3.12095461','NP','NP.3','{\"en\":\"Chitwan\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.7.12095462','NP','NP.7','{\"en\":\"Dadeldhura\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.6.12095463','NP','NP.6','{\"en\":\"Dailekh\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.5.12095464','NP','NP.5','{\"en\":\"Dang\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.7.12095465','NP','NP.7','{\"en\":\"Darchula\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.3.12095466','NP','NP.3','{\"en\":\"Dhading\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.1.12095467','NP','NP.1','{\"en\":\"Dhankuta\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.2.12095468','NP','NP.2','{\"en\":\"Dhanusa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.3.12095469','NP','NP.3','{\"en\":\"Dolakha\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.6.12095470','NP','NP.6','{\"en\":\"Dolpa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.7.12095471','NP','NP.7','{\"en\":\"Doti\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.4.12095472','NP','NP.4','{\"en\":\"Gorkha\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.5.12095473','NP','NP.5','{\"en\":\"Gulmi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.6.12095474','NP','NP.6','{\"en\":\"Humla\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.1.12095475','NP','NP.1','{\"en\":\"Ilam\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.6.12095476','NP','NP.6','{\"en\":\"Jajarkot\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.1.12095477','NP','NP.1','{\"en\":\"Jhapa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.6.12095478','NP','NP.6','{\"en\":\"Jumla\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.7.12095479','NP','NP.7','{\"en\":\"Kailali\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.6.12095480','NP','NP.6','{\"en\":\"Kalikot\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.7.12095481','NP','NP.7','{\"en\":\"Kanchanpur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.5.12095482','NP','NP.5','{\"en\":\"Kapilbastu\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.4.12095483','NP','NP.4','{\"en\":\"Kaski\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.3.12095484','NP','NP.3','{\"en\":\"Kathmandu\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.3.12095485','NP','NP.3','{\"en\":\"Kavrepalanchok\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.1.12095486','NP','NP.1','{\"en\":\"Khotang\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.3.12095487','NP','NP.3','{\"en\":\"Lalitpur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.4.12095488','NP','NP.4','{\"en\":\"Lamjung\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.2.12095489','NP','NP.2','{\"en\":\"Mahottari\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.3.12095490','NP','NP.3','{\"en\":\"Makwanpur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.4.12095491','NP','NP.4','{\"en\":\"Manag\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.1.12095492','NP','NP.1','{\"en\":\"Morang\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.6.12095493','NP','NP.6','{\"en\":\"Mugu\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.4.12095494','NP','NP.4','{\"en\":\"Mustang\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.4.12095495','NP','NP.4','{\"en\":\"Myagdi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.4.12095496','NP','NP.4','{\"en\":\"Nawalparasi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.3.12095497','NP','NP.3','{\"en\":\"Nuwakot\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.1.12095498','NP','NP.1','{\"en\":\"Okhaldhunga\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.5.12095499','NP','NP.5','{\"en\":\"Palpa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.1.12095500','NP','NP.1','{\"en\":\"Panchthar\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.4.12095501','NP','NP.4','{\"en\":\"Parbat\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.2.12095502','NP','NP.2','{\"en\":\"Parsa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.5.12095503','NP','NP.5','{\"en\":\"Pyuthan\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.3.12095504','NP','NP.3','{\"en\":\"Ramechhap\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.7.12095505','NP','NP.7','{\"en\":\"Achham\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.5.12095506','NP','NP.5','{\"en\":\"Arghakhanchi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.4.12095507','NP','NP.4','{\"en\":\"Baglung\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.7.12095508','NP','NP.7','{\"en\":\"Baitadi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.7.12095509','NP','NP.7','{\"en\":\"Bajhang\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.7.12095510','NP','NP.7','{\"en\":\"Bajura\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.3.12095511','NP','NP.3','{\"en\":\"Rasuwa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.2.12095512','NP','NP.2','{\"en\":\"Rautahat\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.5.12095513','NP','NP.5','{\"en\":\"Rolpa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.5.12095514','NP','NP.5','{\"en\":\"Rukum\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.5.12095515','NP','NP.5','{\"en\":\"Rupandehi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.6.12095516','NP','NP.6','{\"en\":\"Salyan\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.1.12095517','NP','NP.1','{\"en\":\"Sankhuwasabha\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.2.12095518','NP','NP.2','{\"en\":\"Saptari\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.2.12095519','NP','NP.2','{\"en\":\"Sarlahi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.3.12095520','NP','NP.3','{\"en\":\"Sindhuli\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.3.12095521','NP','NP.3','{\"en\":\"Sindhupalchowk\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.2.12095522','NP','NP.2','{\"en\":\"Siraha\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.1.12095523','NP','NP.1','{\"en\":\"Solukhumbu\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.1.12095524','NP','NP.1','{\"en\":\"Sunsari\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.6.12095525','NP','NP.6','{\"en\":\"Surkhet\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.4.12095526','NP','NP.4','{\"en\":\"Syangja\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.4.12095527','NP','NP.4','{\"en\":\"Tanahun\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.1.12095528','NP','NP.1','{\"en\":\"Taplejung\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.1.12095529','NP','NP.1','{\"en\":\"Terathum\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.1.12095530','NP','NP.1','{\"en\":\"Udayapur\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.5.12095531','NP','NP.5','{\"en\":\"Nawalparasi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NP.6.12095532','NP','NP.6','{\"en\":\"Rukum\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Wāliṅ\"}',83.76,27.98,'P','PPL','NP.4','NP.4.12095526',21867,'Asia/Kathmandu',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Tulsīpur\"}',82.30,28.13,'P','PPL','NP.5','NP.5.12095464',39058,'Asia/Kathmandu',1,'2019-10-18 23:00:00','2019-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Ṭikāpur\"}',81.12,28.53,'P','PPL','NP.7','NP.7.12095479',44758,'Asia/Kathmandu',1,'2019-10-18 23:00:00','2019-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Tānsen\"}',83.55,27.87,'P','PPL','NP.5','NP.5.12095499',23693,'Asia/Kathmandu',1,'2019-10-18 23:00:00','2019-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Siraha\"}',86.21,26.65,'P','PPL','NP.2','NP.2.12095522',24657,'Asia/Kathmandu',1,'2019-10-26 23:00:00','2019-10-26 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Rājbirāj\"}',86.75,26.54,'P','PPL','NP.2','NP.2.12095518',33061,'Asia/Kathmandu',1,'2019-10-18 23:00:00','2019-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Pokhara\"}',83.97,28.27,'P','PPLA','NP.4','NP.4.12095483',200000,'Asia/Kathmandu',1,'2019-10-18 23:00:00','2019-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Pātan\"}',85.31,27.68,'P','PPL','NP.3','NP.3.12095487',183310,'Asia/Kathmandu',1,'2019-10-18 23:00:00','2019-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Panauti̇̄\"}',85.51,27.58,'P','PPL','NP.3','NP.3.12095485',27602,'Asia/Kathmandu',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Malaṅgawā\"}',85.56,26.86,'P','PPL','NP.2','NP.2.12095519',20284,'Asia/Kathmandu',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Mahendranagar\"}',80.18,28.96,'P','PPL','NP.7','NP.7.12095481',88381,'Asia/Kathmandu',1,'2019-10-18 23:00:00','2019-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Lobuche\"}',86.81,27.95,'P','PPL','NP.1','NP.1.12095523',8767,'Asia/Kathmandu',1,'2022-01-15 23:00:00','2022-01-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Lahān\"}',86.48,26.72,'P','PPL','NP.2','NP.2.12095522',31495,'Asia/Kathmandu',1,'2019-10-18 23:00:00','2019-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Kirtipur\"}',85.28,27.68,'P','PPL','NP.3','NP.3.12095484',44632,'Asia/Kathmandu',1,'2019-10-18 23:00:00','2019-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Khā̃dbāri̇̄\"}',87.21,27.38,'P','PPL','NP.1','NP.1.12095517',22903,'Asia/Kathmandu',1,'2020-07-08 23:00:00','2020-07-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Kathmandu\"}',85.32,27.70,'P','PPLC','NP.3','NP.3.12095484',1442271,'Asia/Kathmandu',1,'2019-10-17 23:00:00','2019-10-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Jumla\"}',82.18,29.27,'P','PPL','NP.6','NP.6.12095478',9073,'Asia/Kathmandu',1,'2019-10-18 23:00:00','2019-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Janakpur\"}',85.93,26.73,'P','PPLA','NP.2','NP.2.12095468',93767,'Asia/Kathmandu',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Jaleshwar\"}',85.80,26.65,'P','PPL','NP.2','NP.2.12095489',23573,'Asia/Kathmandu',1,'2019-10-18 23:00:00','2019-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Īṭahari̇̄\"}',87.27,26.66,'P','PPL','NP.1','NP.1.12095524',47984,'Asia/Kathmandu',1,'2020-07-08 23:00:00','2020-07-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Ilām\"}',87.93,26.91,'P','PPLA3','NP.1','NP.1.12095475',17491,'Asia/Kathmandu',1,'2019-10-18 23:00:00','2019-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Hetauda\"}',85.03,27.43,'P','PPL','NP.3','NP.3.12095490',84775,'Asia/Kathmandu',1,'2019-10-18 23:00:00','2019-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Gulariyā\"}',81.35,28.21,'P','PPL','NP.5','NP.5.12095458',53107,'Asia/Kathmandu',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Gaur\"}',85.28,26.76,'P','PPL','NP.2','NP.2.12095512',27325,'Asia/Kathmandu',1,'2019-10-18 23:00:00','2019-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Dhulikhel\"}',85.54,27.62,'P','PPL','NP.3','NP.3.12095485',16263,'Asia/Kathmandu',1,'2019-10-18 23:00:00','2019-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Dharān\"}',87.28,26.81,'P','PPL','NP.1','NP.1.12095524',108600,'Asia/Kathmandu',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Dhankutā\"}',87.33,26.98,'P','PPLA','NP.1','NP.1.12095467',22084,'Asia/Kathmandu',1,'2019-10-18 23:00:00','2019-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Dhangaḍhi̇̄\"}',80.59,28.70,'P','PPL','NP.7','NP.7.12095479',92294,'Asia/Kathmandu',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Dārchulā\"}',80.55,29.83,'P','PPL','NP.7','NP.7.12095465',18317,'Asia/Kathmandu',1,'2019-10-18 23:00:00','2019-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Dailekh\"}',81.71,28.84,'P','PPLA3','NP.6','NP.6.12095463',20908,'Asia/Kathmandu',1,'2019-10-18 23:00:00','2019-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Dadeldhurā\"}',80.58,29.30,'P','PPL','NP.7','NP.7.12095462',19014,'Asia/Kathmandu',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Butwāl\"}',83.45,27.70,'P','PPLA','NP.5','NP.5.12095515',91733,'Asia/Kathmandu',1,'2020-07-08 23:00:00','2020-07-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Birgañj\"}',84.88,27.02,'P','PPL','NP.2','NP.2.12095502',133238,'Asia/Kathmandu',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Biratnagar\"}',87.27,26.46,'P','PPL','NP.1','NP.1.12095492',182324,'Asia/Kathmandu',1,'2019-10-18 23:00:00','2019-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Bharatpur\"}',84.44,27.68,'P','PPL','NP.3','NP.3.12095461',107157,'Asia/Kathmandu',1,'2019-10-17 23:00:00','2019-10-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Siddharthanagar\"}',83.45,27.50,'P','PPLA3','NP.5','NP.5.12095515',63367,'Asia/Kathmandu',1,'2019-10-16 23:00:00','2019-10-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Bhadrapur\"}',88.09,26.54,'P','PPL','NP.1','NP.1.12095477',19523,'Asia/Kathmandu',1,'2019-10-18 23:00:00','2019-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Banepā\"}',85.52,27.63,'P','PPL','NP.3','NP.3.12095485',17153,'Asia/Kathmandu',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Bāglung\"}',83.59,28.27,'P','PPL','NP.4','NP.4.12095507',23296,'Asia/Kathmandu',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Besisahar\"}',82.41,28.23,'P','PPL','NP.6','NP.6.12095516',5427,'Asia/Kathmandu',1,'2019-10-18 23:00:00','2019-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Birendranagar\"}',81.62,28.60,'P','PPLA','NP.6','NP.6.12095525',31381,'Asia/Kathmandu',1,'2020-06-11 23:00:00','2020-06-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Dipayal\"}',80.94,29.26,'P','PPLA','NP.7','NP.7.12095471',23416,'Asia/Kathmandu',1,'2019-10-18 23:00:00','2019-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Nepalgunj\"}',81.62,28.05,'P','PPL','NP.5','NP.5.12095456',64400,'Asia/Kathmandu',1,'2019-10-18 23:00:00','2019-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Panauti\"}',85.52,27.58,'P','PPLL','NP.3','NP.3.12095485',46595,'Asia/Kathmandu',1,'2019-10-17 23:00:00','2019-10-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Inaruwa\"}',87.15,26.61,'P','PPLL','NP.1','NP.1.12095524',70093,'Asia/Kathmandu',1,'2019-10-17 23:00:00','2019-10-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"kankrabari Dovan\"}',85.46,27.63,'P','PPL','NP.3','NP.3.12095485',10000,'Asia/Kathmandu',1,'2019-10-18 23:00:00','2019-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Triyuga\"}',86.70,26.79,'P','PPLL','NP.1','NP.1.12095530',71405,'Asia/Kathmandu',1,'2019-10-18 23:00:00','2019-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Madhyapur Thimi\"}',85.39,27.68,'P','PPL','NP.3','NP.3.12095459',83036,'Asia/Kathmandu',1,'2019-10-18 23:00:00','2019-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Hari Bdr Tamang House\"}',85.46,27.63,'P','PPL','NP.3','NP.3.12095485',10000,'Asia/Kathmandu',1,'2019-10-18 23:00:00','2019-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NP','{\"en\":\"Bhattarai Danda\"}',83.93,27.88,'P','PPL','NP.4','NP.4.12095526',5510,'Asia/Kathmandu',1,'2019-10-17 23:00:00','2019-10-17 23:00:00');
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
