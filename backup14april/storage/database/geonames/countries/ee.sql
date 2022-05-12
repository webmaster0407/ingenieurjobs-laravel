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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('EE.21','EE','{\"en\":\"Võrumaa\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('EE.20','EE','{\"en\":\"Viljandimaa\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('EE.19','EE','{\"en\":\"Valgamaa\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('EE.18','EE','{\"en\":\"Tartu\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('EE.14','EE','{\"en\":\"Saare\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('EE.13','EE','{\"en\":\"Raplamaa\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('EE.12','EE','{\"en\":\"Põlvamaa\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('EE.11','EE','{\"en\":\"Pärnumaa\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('EE.08','EE','{\"en\":\"Lääne-Virumaa\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('EE.07','EE','{\"en\":\"Lääne\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('EE.05','EE','{\"en\":\"Jõgevamaa\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('EE.04','EE','{\"en\":\"Järvamaa\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('EE.03','EE','{\"en\":\"Ida-Virumaa\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('EE.02','EE','{\"en\":\"Hiiumaa\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('EE.01','EE','{\"en\":\"Harjumaa\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.03.0321','EE','EE.03','{\"en\":\"Kohtla-Järve linn\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.03.0511','EE','EE.03','{\"en\":\"Narva linn\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.11.0624','EE','EE.11','{\"en\":\"Pärnu linn\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.03.0735','EE','EE.03','{\"en\":\"Sillamäe linn\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.01.0784','EE','EE.01','{\"en\":\"Tallinn\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.07.0184','EE','EE.07','{\"en\":\"Haapsalu linn\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.08.0191','EE','EE.08','{\"en\":\"Haljala vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.01.0198','EE','EE.01','{\"en\":\"Harku vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.11.0214','EE','EE.11','{\"en\":\"Häädemeeste vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.01.0245','EE','EE.01','{\"en\":\"Jõelähtme vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.05.0247','EE','EE.05','{\"en\":\"Jõgeva vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.03.0251','EE','EE.03','{\"en\":\"Jõhvi vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.08.0272','EE','EE.08','{\"en\":\"Kadrina vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.18.0283','EE','EE.18','{\"en\":\"Kambja vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.12.0284','EE','EE.12','{\"en\":\"Kanepi vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.13.0293','EE','EE.13','{\"en\":\"Kehtna vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.01.0296','EE','EE.01','{\"en\":\"Keila linn\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.11.0303','EE','EE.11','{\"en\":\"Kihnu vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.01.0304','EE','EE.01','{\"en\":\"Kiili vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.13.0317','EE','EE.13','{\"en\":\"Kohila vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.01.0338','EE','EE.01','{\"en\":\"Kose vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.01.0424','EE','EE.01','{\"en\":\"Loksa linn\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.18.0432','EE','EE.18','{\"en\":\"Luunja vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.03.0442','EE','EE.03','{\"en\":\"Lüganuse vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.01.0446','EE','EE.01','{\"en\":\"Maardu linn\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.14.0478','EE','EE.14','{\"en\":\"Muhu vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.13.0503','EE','EE.13','{\"en\":\"Märjamaa vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.03.0514','EE','EE.03','{\"en\":\"Narva-Jõesuu linn\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.18.0528','EE','EE.18','{\"en\":\"Nõo vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.04.0567','EE','EE.04','{\"en\":\"Paide linn\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.18.0586','EE','EE.18','{\"en\":\"Peipsiääre vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.05.0618','EE','EE.05','{\"en\":\"Põltsamaa vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.19.0557','EE','EE.19','{\"en\":\"Otepää vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.08.0792','EE','EE.08','{\"en\":\"Tapa vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.18.0796','EE','EE.18','{\"en\":\"Tartu vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.11.0809','EE','EE.11','{\"en\":\"Tori vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.13.0668','EE','EE.13','{\"en\":\"Rapla vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.14.0689','EE','EE.14','{\"en\":\"Ruhnu vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.21.0698','EE','EE.21','{\"en\":\"Rõuge vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.12.0708','EE','EE.12','{\"en\":\"Räpina vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.11.0712','EE','EE.11','{\"en\":\"Saarde vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.01.0718','EE','EE.01','{\"en\":\"Saku vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.01.0651','EE','EE.01','{\"en\":\"Raasiku vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.01.0653','EE','EE.01','{\"en\":\"Rae vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.08.0661','EE','EE.08','{\"en\":\"Rakvere vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.08.0663','EE','EE.08','{\"en\":\"Rakvere linn\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.01.0726','EE','EE.01','{\"en\":\"Saue vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.01.0353','EE','EE.01','{\"en\":\"Kuusalu vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.18.0793','EE','EE.18','{\"en\":\"Tartu linn\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.01.0141','EE','EE.01','{\"en\":\"Anija vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.21.0142','EE','EE.21','{\"en\":\"Antsla vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.01.0890','EE','EE.01','{\"en\":\"Viimsi vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.12.0622','EE','EE.12','{\"en\":\"Põlva vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.03.0803','EE','EE.03','{\"en\":\"Toila vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.04.0834','EE','EE.04','{\"en\":\"Türi vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.20.0897','EE','EE.20','{\"en\":\"Viljandi linn\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.08.0901','EE','EE.08','{\"en\":\"Vinni vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.08.0903','EE','EE.08','{\"en\":\"Viru-Nigula vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.07.0907','EE','EE.07','{\"en\":\"Vormsi vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.21.0917','EE','EE.21','{\"en\":\"Võru vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.21.0919','EE','EE.21','{\"en\":\"Võru linn\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.08.0928','EE','EE.08','{\"en\":\"Väike-Maarja vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.20.0899','EE','EE.20','{\"en\":\"Viljandi vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.07.0441','EE','EE.07','{\"en\":\"Lääne-Nigula vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.20.0480','EE','EE.20','{\"en\":\"Mulgi vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.19.0855','EE','EE.19','{\"en\":\"Valga vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.21.0732','EE','EE.21','{\"en\":\"Setomaa vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.02.0205','EE','EE.02','{\"en\":\"Hiiumaa vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.18.0171','EE','EE.18','{\"en\":\"Elva vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.14.0714','EE','EE.14','{\"en\":\"Saaremaa vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.04.0255','EE','EE.04','{\"en\":\"Järva vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.05.0486','EE','EE.05','{\"en\":\"Mustvee vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.18.0291','EE','EE.18','{\"en\":\"Kastre vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.19.0824','EE','EE.19','{\"en\":\"Tõrva vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.03.0130','EE','EE.03','{\"en\":\"Alutaguse vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.11.0430','EE','EE.11','{\"en\":\"Lääneranna vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.01.0431','EE','EE.01','{\"en\":\"Lääne-Harju vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.20.0615','EE','EE.20','{\"en\":\"Põhja-Sakala vald\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('EE.11.0638','EE','EE.11','{\"en\":\"Põhja-Pärnumaa vald\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('EE','{\"en\":\"Võru\"}',27.02,57.83,'P','PPLA','EE.21','EE.21.0919',14631,'Europe/Tallinn',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('EE','{\"en\":\"Viljandi\"}',25.59,58.36,'P','PPLA','EE.20','EE.20.0897',20309,'Europe/Tallinn',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('EE','{\"en\":\"Valga\"}',26.05,57.78,'P','PPLA','EE.19','EE.19.0855',13945,'Europe/Tallinn',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('EE','{\"en\":\"Türi\"}',25.43,58.81,'P','PPLA2','EE.04','EE.04.0834',6138,'Europe/Tallinn',1,'2020-07-07 23:00:00','2020-07-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('EE','{\"en\":\"Tartu\"}',26.73,58.38,'P','PPLA','EE.18','EE.18.0793',101092,'Europe/Tallinn',1,'2019-02-25 23:00:00','2019-02-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('EE','{\"en\":\"Tapa\"}',25.96,59.26,'P','PPLA2','EE.08','EE.08.0792',6551,'Europe/Tallinn',1,'2017-11-24 23:00:00','2017-11-24 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('EE','{\"en\":\"Tallinn\"}',24.75,59.44,'P','PPLC','EE.01','EE.01.0784',394024,'Europe/Tallinn',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('EE','{\"en\":\"Sillamäe\"}',27.76,59.40,'P','PPLA2','EE.03','EE.03.0735',16672,'Europe/Tallinn',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('EE','{\"en\":\"Saue\"}',24.55,59.32,'P','PPLA2','EE.01','EE.01.0726',5022,'Europe/Tallinn',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('EE','{\"en\":\"Rapla\"}',24.79,59.01,'P','PPLA','EE.13','EE.13.0668',5684,'Europe/Tallinn',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('EE','{\"en\":\"Rakvere\"}',26.36,59.35,'P','PPLA','EE.08','EE.08.0663',16736,'Europe/Tallinn',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('EE','{\"en\":\"Põlva\"}',27.07,58.06,'P','PPLA','EE.12','EE.12.0622',6504,'Europe/Tallinn',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('EE','{\"en\":\"Pärnu\"}',24.50,58.39,'P','PPLA','EE.11','EE.11.0624',44192,'Europe/Tallinn',1,'2018-10-05 23:00:00','2018-10-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('EE','{\"en\":\"Paide\"}',25.56,58.89,'P','PPLA','EE.04','EE.04.0567',9735,'Europe/Tallinn',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('EE','{\"en\":\"Narva\"}',28.19,59.38,'P','PPLA2','EE.03','EE.03.0511',66980,'Europe/Tallinn',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('EE','{\"en\":\"Maardu\"}',24.98,59.47,'P','PPLA2','EE.01','EE.01.0446',16630,'Europe/Tallinn',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('EE','{\"en\":\"Kuressaare\"}',22.50,58.25,'P','PPLA','EE.14','EE.14.0714',14921,'Europe/Tallinn',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('EE','{\"en\":\"Kohtla-Järve\"}',27.27,59.40,'P','PPL','EE.03','EE.03.0321',46060,'Europe/Tallinn',1,'2021-01-01 23:00:00','2021-01-01 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('EE','{\"en\":\"Kiviõli\"}',26.97,59.35,'P','PPLA2','EE.03','EE.03.0442',6953,'Europe/Tallinn',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('EE','{\"en\":\"Keila\"}',24.41,59.30,'P','PPLA2','EE.01','EE.01.0296',9411,'Europe/Tallinn',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('EE','{\"en\":\"Kärdla\"}',22.75,59.00,'P','PPLA','EE.02','EE.02.0205',3763,'Europe/Tallinn',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('EE','{\"en\":\"Jõhvi\"}',27.42,59.36,'P','PPLA','EE.03','EE.03.0251',11469,'Europe/Tallinn',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('EE','{\"en\":\"Jõgeva\"}',26.39,58.75,'P','PPLA','EE.05','EE.05.0247',6396,'Europe/Tallinn',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('EE','{\"en\":\"Haapsalu\"}',23.54,58.94,'P','PPLA','EE.07','EE.07.0184',11805,'Europe/Tallinn',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('EE','{\"en\":\"Elva\"}',26.42,58.22,'P','PPLA2','EE.18','EE.18.0171',5819,'Europe/Tallinn',1,'2017-11-24 23:00:00','2017-11-24 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('EE','{\"en\":\"Laagri\"}',24.61,59.35,'P','PPL','EE.01','EE.01.0726',5165,'Europe/Tallinn',1,'2021-11-16 23:00:00','2021-11-16 23:00:00');
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
