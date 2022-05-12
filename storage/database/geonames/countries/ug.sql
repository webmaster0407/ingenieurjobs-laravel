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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('UG.C','UG','{\"en\":\"Central Region\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('UG.E','UG','{\"en\":\"Eastern Region\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('UG.N','UG','{\"en\":\"Northern Region\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('UG.W','UG','{\"en\":\"Western Region\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.C.89','UG','UG.C','{\"en\":\"Mpigi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.E1','UG','UG.E','{\"en\":\"Namutumba District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.C3','UG','UG.E','{\"en\":\"Bukedea District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.26','UG','UG.N','{\"en\":\"Apac District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.77','UG','UG.N','{\"en\":\"Arua District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.28','UG','UG.W','{\"en\":\"Bundibugyo District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.29','UG','UG.W','{\"en\":\"Bushenyi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.30','UG','UG.N','{\"en\":\"Gulu District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.31','UG','UG.W','{\"en\":\"Hoima District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.78','UG','UG.E','{\"en\":\"Iganga District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.33','UG','UG.E','{\"en\":\"Jinja District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.34','UG','UG.W','{\"en\":\"Kabale District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.79','UG','UG.W','{\"en\":\"Kabarole District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.C.36','UG','UG.C','{\"en\":\"Kalangala District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.C.37','UG','UG.C','{\"en\":\"Kampala District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.38','UG','UG.E','{\"en\":\"Kamuli District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.39','UG','UG.E','{\"en\":\"Kapchorwa District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.40','UG','UG.W','{\"en\":\"Kasese District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.41','UG','UG.W','{\"en\":\"Kibale District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.C.42','UG','UG.C','{\"en\":\"Kiboga District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.43','UG','UG.W','{\"en\":\"Kisoro District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.84','UG','UG.N','{\"en\":\"Kitgum District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.45','UG','UG.N','{\"en\":\"Kotido District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.46','UG','UG.E','{\"en\":\"Kumi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.47','UG','UG.N','{\"en\":\"Lira District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.C.70','UG','UG.C','{\"en\":\"Luwero District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.50','UG','UG.W','{\"en\":\"Masindi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.87','UG','UG.E','{\"en\":\"Mbale District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.52','UG','UG.W','{\"en\":\"Mbarara District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.88','UG','UG.N','{\"en\":\"Moroto District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.72','UG','UG.N','{\"en\":\"Moyo District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.C.56','UG','UG.C','{\"en\":\"Mubende District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.C.90','UG','UG.C','{\"en\":\"Mukono District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.58','UG','UG.N','{\"en\":\"Nebbi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.59','UG','UG.W','{\"en\":\"Ntungamo District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.60','UG','UG.E','{\"en\":\"Pallisa District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.C.61','UG','UG.C','{\"en\":\"Rakai District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.93','UG','UG.W','{\"en\":\"Rukungiri District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.95','UG','UG.E','{\"en\":\"Soroti District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.76','UG','UG.E','{\"en\":\"Tororo District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.65','UG','UG.N','{\"en\":\"Adjumani District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.66','UG','UG.E','{\"en\":\"Bugiri District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.67','UG','UG.E','{\"en\":\"Busia District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.69','UG','UG.E','{\"en\":\"Katakwi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.C.73','UG','UG.C','{\"en\":\"Nakasongola District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.C.74','UG','UG.C','{\"en\":\"Sembabule District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.80','UG','UG.E','{\"en\":\"Kaberamaido District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.81','UG','UG.W','{\"en\":\"Kamwenge District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.82','UG','UG.W','{\"en\":\"Kanungu District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.C.83','UG','UG.C','{\"en\":\"Kayunga District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.85','UG','UG.W','{\"en\":\"Kyenjojo District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.86','UG','UG.E','{\"en\":\"Mayuge District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.91','UG','UG.N','{\"en\":\"Nakapiripirit District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.92','UG','UG.N','{\"en\":\"Pader District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.94','UG','UG.E','{\"en\":\"Sironko District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.C.96','UG','UG.C','{\"en\":\"Wakiso District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.97','UG','UG.N','{\"en\":\"Yumbe District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.B6','UG','UG.N','{\"en\":\"Abim District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.B7','UG','UG.N','{\"en\":\"Amolatar District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.B8','UG','UG.E','{\"en\":\"Amuria District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.B9','UG','UG.N','{\"en\":\"Amuru District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.C1','UG','UG.E','{\"en\":\"Budaka District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.C2','UG','UG.E','{\"en\":\"Bududa District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.C5','UG','UG.W','{\"en\":\"Bulisa District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.C6','UG','UG.E','{\"en\":\"Butaleja District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.C7','UG','UG.N','{\"en\":\"Dokolo District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.C8','UG','UG.W','{\"en\":\"Ibanda District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.C9','UG','UG.W','{\"en\":\"Isingiro District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.D1','UG','UG.N','{\"en\":\"Kaabong District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.D2','UG','UG.E','{\"en\":\"Kaliro District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.D3','UG','UG.W','{\"en\":\"Kiruhura District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.D4','UG','UG.N','{\"en\":\"Koboko District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.C.D5','UG','UG.C','{\"en\":\"Lyantonde District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.D6','UG','UG.E','{\"en\":\"Manafwa District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.D7','UG','UG.N','{\"en\":\"Maracha District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.C.D8','UG','UG.C','{\"en\":\"Mityana District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.C.D9','UG','UG.C','{\"en\":\"Nakaseke District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.E2','UG','UG.N','{\"en\":\"Oyam District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.C4','UG','UG.E','{\"en\":\"Bukwo District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.H2','UG','UG.N','{\"en\":\"Nwoya District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.C.F5','UG','UG.C','{\"en\":\"Kalungu District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.C.F1','UG','UG.C','{\"en\":\"Butambala District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.E5','UG','UG.N','{\"en\":\"Amudat District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.G8','UG','UG.N','{\"en\":\"Napak District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.G3','UG','UG.N','{\"en\":\"Lamwo District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.H7','UG','UG.N','{\"en\":\"Zombo District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.F7','UG','UG.W','{\"en\":\"Kiryandongo District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.F8','UG','UG.N','{\"en\":\"Kole District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.E3','UG','UG.N','{\"en\":\"Agago District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.H3','UG','UG.N','{\"en\":\"Otuke District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.E4','UG','UG.N','{\"en\":\"Alebtong District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.H5','UG','UG.E','{\"en\":\"Serere District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.G9','UG','UG.E','{\"en\":\"Ngora District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.F3','UG','UG.E','{\"en\":\"Buyende District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.F6','UG','UG.E','{\"en\":\"Kibuku District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.E9','UG','UG.E','{\"en\":\"Bulambuli District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.F9','UG','UG.E','{\"en\":\"Kween District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.G7','UG','UG.E','{\"en\":\"Namayingo District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.C.F2','UG','UG.C','{\"en\":\"Buvuma District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.C.E7','UG','UG.C','{\"en\":\"Buikwe District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.C.F4','UG','UG.C','{\"en\":\"Gomba District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.C.E8','UG','UG.C','{\"en\":\"Bukomansimbi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.C.G5','UG','UG.C','{\"en\":\"Lwengo District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.G2','UG','UG.W','{\"en\":\"Kyegegwa District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.C.G1','UG','UG.C','{\"en\":\"Kyankwanzi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.H1','UG','UG.W','{\"en\":\"Ntoroko District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.H4','UG','UG.W','{\"en\":\"Rubirizi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.E6','UG','UG.W','{\"en\":\"Buhweju District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.G6','UG','UG.W','{\"en\":\"Mitoma District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.H6','UG','UG.W','{\"en\":\"Sheema District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.G4','UG','UG.E','{\"en\":\"Luuka District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.C.71','UG','UG.C','{\"en\":\"Masaka District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.H9','UG','UG.E','{\"en\":\"Butebo District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.C.I3','UG','UG.C','{\"en\":\"Kyotera District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.E.I4','UG','UG.E','{\"en\":\"Namisindwa District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.I5','UG','UG.N','{\"en\":\"Omoro District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.N.I6','UG','UG.N','{\"en\":\"Pakwach District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.I2','UG','UG.W','{\"en\":\"Kakumiro District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.I1','UG','UG.W','{\"en\":\"Kagadi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.I7','UG','UG.W','{\"en\":\"Rubanda District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.H8','UG','UG.W','{\"en\":\"Bunyangabu District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UG.W.I8','UG','UG.W','{\"en\":\"Rukiga District\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Yumbe\"}',31.25,3.47,'P','PPLA2','UG.N','UG.N.97',24300,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Wobulenzi\"}',32.51,0.73,'P','PPL','UG.C','UG.C.70',24415,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Wakiso\"}',32.46,0.40,'P','PPLA2','UG.C','UG.C.96',20530,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Tororo\"}',34.18,0.69,'P','PPLA2','UG.E','UG.E.76',40400,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Soroti\"}',33.61,1.71,'P','PPLA2','UG.E','UG.E.95',56400,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Sironko\"}',34.25,1.23,'P','PPLA2','UG.E','UG.E.94',14000,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Rukungiri\"}',29.94,-0.84,'P','PPLA2','UG.W','UG.W.93',14000,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Pallisa\"}',33.71,1.15,'P','PPLA2','UG.E','UG.E.60',30745,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Paidha\"}',30.99,2.42,'P','PPL','UG.N','UG.N.H7',28348,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Pader Palwo\"}',33.13,2.80,'P','PPL','UG.N','UG.N.E3',11152,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Nyachera\"}',30.42,-0.90,'P','PPL','UG.W','UG.W.59',30509,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Ntungamo\"}',29.65,-0.88,'P','PPL','UG.W','UG.W.82',16915,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Ntungamo\"}',30.26,-0.88,'P','PPLA2','UG.W','UG.W.59',15300,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Njeru\"}',33.18,0.44,'P','PPL','UG.C','UG.C.E7',61952,'Africa/Kampala',1,'2016-12-02 23:00:00','2016-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Nebbi\"}',31.09,2.48,'P','PPLA2','UG.N','UG.N.58',30354,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Namasuba\"}',32.42,0.69,'P','PPL','UG.C','UG.C.D9',22507,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Nakasongola\"}',32.46,1.31,'P','PPLA2','UG.C','UG.C.73',6921,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Mukono\"}',32.76,0.35,'P','PPLA2','UG.C','UG.C.90',67290,'Africa/Kampala',1,'2018-03-16 23:00:00','2018-03-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Mubende\"}',31.39,0.56,'P','PPLA2','UG.C','UG.C.56',18936,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Mpigi\"}',32.31,0.22,'P','PPLA2','UG.C','UG.C.89',11082,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Moyo\"}',31.72,3.66,'P','PPLA2','UG.N','UG.N.72',18800,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Moroto\"}',34.67,2.53,'P','PPLA2','UG.N','UG.N.88',10300,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Mityana\"}',32.02,0.42,'P','PPLA2','UG.C','UG.C.D8',41131,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Mbarara\"}',30.65,-0.60,'P','PPLA','UG.W','UG.W.52',97500,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Mbale\"}',34.18,1.08,'P','PPLA2','UG.E','UG.E.87',76493,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Mayuge\"}',33.48,0.46,'P','PPLA2','UG.E','UG.E.86',11503,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Masindi Port\"}',32.09,1.70,'P','PPL','UG.W','UG.W.F7',7828,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Masindi\"}',31.71,1.67,'P','PPLA2','UG.W','UG.W.50',31486,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Masaka\"}',31.73,-0.33,'P','PPLA2','UG.C','UG.C.71',65373,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Lyantonde\"}',31.16,-0.40,'P','PPLA2','UG.C','UG.C.D5',8039,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Luwero\"}',32.47,0.85,'P','PPLA2','UG.C','UG.C.70',28338,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Lugazi\"}',32.94,0.37,'P','PPL','UG.C','UG.C.E7',35036,'Africa/Kampala',1,'2016-12-02 23:00:00','2016-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Lira\"}',32.90,2.25,'P','PPLA2','UG.N','UG.N.47',119323,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Kyotera\"}',31.52,-0.62,'P','PPL','UG.C','UG.C.I3',8472,'Africa/Kampala',1,'2018-06-22 23:00:00','2018-06-22 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Kyenjojo\"}',30.62,0.63,'P','PPLA2','UG.W','UG.W.85',18600,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Kumi\"}',33.94,1.46,'P','PPLA2','UG.E','UG.E.46',11400,'Africa/Kampala',1,'2018-03-16 23:00:00','2018-03-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Kotido\"}',34.13,2.98,'P','PPLA2','UG.N','UG.N.45',18800,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Kitgum\"}',32.89,3.28,'P','PPLA2','UG.N','UG.N.84',56891,'Africa/Kampala',1,'2018-03-16 23:00:00','2018-03-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Kisoro\"}',29.68,-1.29,'P','PPLA2','UG.W','UG.W.43',12400,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Kiruhura\"}',30.84,-0.20,'P','PPLA2','UG.W','UG.W.D3',14000,'Africa/Kampala',1,'2016-11-30 23:00:00','2016-11-30 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Kireka\"}',32.65,0.35,'P','PPL','UG.C','UG.C.96',17947,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Kilembe\"}',30.01,0.20,'P','PPL','UG.W','UG.W.40',7914,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Kigorobya\"}',31.31,1.62,'P','PPL','UG.W','UG.W.31',5420,'Africa/Kampala',1,'2018-12-03 23:00:00','2018-12-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Kiboga\"}',31.77,0.92,'P','PPLA2','UG.C','UG.C.42',14512,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Kibale\"}',31.07,0.80,'P','PPLA2','UG.W','UG.W.41',5200,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Kayunga\"}',32.89,0.70,'P','PPLA2','UG.C','UG.C.83',21704,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Kasese\"}',30.08,0.18,'P','PPLA2','UG.W','UG.W.40',67269,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Kapchorwa\"}',34.45,1.40,'P','PPLA2','UG.E','UG.E.39',11300,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Kanungu\"}',29.79,-0.96,'P','PPLA2','UG.W','UG.W.82',14600,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Kamwenge\"}',30.45,0.19,'P','PPLA2','UG.W','UG.W.81',17169,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Kamuli\"}',33.12,0.95,'P','PPLA2','UG.E','UG.E.38',12764,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Kampala\"}',32.58,0.32,'P','PPLC','UG.C','UG.C.37',1353189,'Africa/Kampala',1,'2020-07-15 23:00:00','2020-07-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Kajansi\"}',32.53,0.22,'P','PPL','UG.C','UG.C.96',7530,'Africa/Kampala',1,'2016-12-02 23:00:00','2016-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Kabale\"}',29.99,-1.25,'P','PPLA2','UG.W','UG.W.34',43500,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Jinja\"}',33.20,0.44,'P','PPLA','UG.E','UG.E.33',93061,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Iganga\"}',33.47,0.61,'P','PPLA2','UG.E','UG.E.78',45024,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Ibanda\"}',30.50,-0.13,'P','PPLA2','UG.W','UG.W.C8',31000,'Africa/Kampala',1,'2016-11-30 23:00:00','2016-11-30 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Hoima\"}',31.35,1.43,'P','PPLA2','UG.W','UG.W.31',39625,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Gulu\"}',32.30,2.77,'P','PPLA','UG.N','UG.N.30',146858,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Fort Portal\"}',30.27,0.66,'P','PPLA2','UG.W','UG.W.79',42670,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Entebbe\"}',32.48,0.06,'P','PPL','UG.C','UG.C.96',62969,'Africa/Kampala',1,'2017-06-05 23:00:00','2017-06-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Byakabanda\"}',31.41,-0.74,'P','PPL','UG.C','UG.C.61',7608,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Bwizibwera\"}',30.63,-0.59,'P','PPL','UG.W','UG.W.52',79157,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Bweyogerere\"}',32.66,0.36,'P','PPL','UG.C','UG.C.96',11473,'Africa/Kampala',1,'2016-12-02 23:00:00','2016-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Buwenge\"}',33.17,0.65,'P','PPL','UG.E','UG.E.33',15130,'Africa/Kampala',1,'2017-06-05 23:00:00','2017-06-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Busia\"}',34.09,0.47,'P','PPLA2','UG.E','UG.E.67',43200,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Busembatia\"}',33.62,0.78,'P','PPL','UG.E','UG.E.78',15889,'Africa/Kampala',1,'2018-04-05 23:00:00','2018-04-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Bundibugyo\"}',30.06,0.71,'P','PPLA2','UG.W','UG.W.28',16919,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Bugiri\"}',33.74,0.57,'P','PPLA2','UG.E','UG.E.G7',22500,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Bugembe\"}',33.24,0.48,'P','PPL','UG.E','UG.E.33',11598,'Africa/Kampala',1,'2016-12-02 23:00:00','2016-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Arua\"}',30.91,3.02,'P','PPLA2','UG.N','UG.N.77',55585,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Apac\"}',32.54,1.98,'P','PPLA2','UG.N','UG.N.26',11776,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Adjumani\"}',31.79,3.38,'P','PPLA2','UG.N','UG.N.65',28700,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Pader\"}',33.22,3.05,'P','PPLA2','UG.N','UG.N.E3',11600,'Africa/Kampala',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UG','{\"en\":\"Margherita\"}',29.89,0.42,'P','PPL','UG.W','UG.W.40',5109,'Africa/Kampala',1,'2012-04-27 23:00:00','2012-04-27 23:00:00');
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
