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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('NA.28','NA','{\"en\":\"Zambezi\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('NA.21','NA','{\"en\":\"Khomas\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('NA.29','NA','{\"en\":\"Erongo\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('NA.30','NA','{\"en\":\"Hardap\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('NA.31','NA','{\"en\":\"Karas\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('NA.32','NA','{\"en\":\"Kunene\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('NA.33','NA','{\"en\":\"Ohangwena\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('NA.35','NA','{\"en\":\"Omaheke\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('NA.36','NA','{\"en\":\"Omusati\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('NA.37','NA','{\"en\":\"Oshana\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('NA.38','NA','{\"en\":\"Oshikoto\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('NA.39','NA','{\"en\":\"Otjozondjupa\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('NA.40','NA','{\"en\":\"Kavango East\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('NA.41','NA','{\"en\":\"Kavango West\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.32.7931901','NA','NA.32','{\"en\":\"Epupa Constituency\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.32.7931902','NA','NA.32','{\"en\":\"Opuwo Constituency\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.32.7931903','NA','NA.32','{\"en\":\"Sesfontein Constituency\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.32.7931904','NA','NA.32','{\"en\":\"Khorixas Constituency\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.29.7931905','NA','NA.29','{\"en\":\"Daures Constituency\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.29.7931906','NA','NA.29','{\"en\":\"Arandis Constituency\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.29.7931907','NA','NA.29','{\"en\":\"Swakopmund Constituency\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.29.7931908','NA','NA.29','{\"en\":\"Walvis Bay Urban Constituency\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.29.7931909','NA','NA.29','{\"en\":\"Walvis Bay Rural Constituency\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.30.7931910','NA','NA.30','{\"en\":\"Gibeon Constituency\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.31.7931911','NA','NA.31','{\"en\":\"Luderitz Constituency\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.31.7931912','NA','NA.31','{\"en\":\"Oranjemund Constituency\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.39.10400504','NA','NA.39','{\"en\":\"Omatako Constituency\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.21.11125897','NA','NA.21','{\"en\":\"Moses Garoeb\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.35.11204872','NA','NA.35','{\"en\":\"Otjombinde\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.38.11204947','NA','NA.38','{\"en\":\"Olukonda Constituency\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.39.11204952','NA','NA.39','{\"en\":\"Okahandja Constituency\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.33.11205493','NA','NA.33','{\"en\":\"Epembe Constituency\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.33.11205499','NA','NA.33','{\"en\":\"Endola\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.37.11205500','NA','NA.37','{\"en\":\"Oshakati East\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.38.11205505','NA','NA.38','{\"en\":\"Omuntele Constituency\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.40.11205595','NA','NA.40','{\"en\":\"Rundu Rural West\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.33.11238950','NA','NA.33','{\"en\":\"Oshikango\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.41.11256866','NA','NA.41','{\"en\":\"Kapako Constituency\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.40.11256901','NA','NA.40','{\"en\":\"Mashare\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.36.11256953','NA','NA.36','{\"en\":\"Tsandi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.21.11257205','NA','NA.21','{\"en\":\"Samora Machel\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.37.11257218','NA','NA.37','{\"en\":\"Oshakati West\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.36.11257223','NA','NA.36','{\"en\":\"Etayi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.30.11257257','NA','NA.30','{\"en\":\"Rehoboth Rural\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.31.11257293','NA','NA.31','{\"en\":\"Karasburg Constituency\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.38.11257350','NA','NA.38','{\"en\":\"Eengodi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.21.11287032','NA','NA.21','{\"en\":\"Windhoek Rural\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.30.11427240','NA','NA.30','{\"en\":\"Mariental Rural\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.37.11428032','NA','NA.37','{\"en\":\"Okaku Constituency\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.36.11428097','NA','NA.36','{\"en\":\"Oshikuku\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.37.11428703','NA','NA.37','{\"en\":\"Ongwediva\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.33.11428769','NA','NA.33','{\"en\":\"Omuthiyagwiipundi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.39.11428998','NA','NA.39','{\"en\":\"Otavi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.41.11429079','NA','NA.41','{\"en\":\"Mpungu\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.40.11429192','NA','NA.40','{\"en\":\"Rundu Urban\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.28.11467713','NA','NA.28','{\"en\":\"Linyanti\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.37.11467743','NA','NA.37','{\"en\":\"Uukwiyu\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.38.11467812','NA','NA.38','{\"en\":\"Onayena\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.36.11495912','NA','NA.36','{\"en\":\"Anamulenge Constituency\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.21.11609877','NA','NA.21','{\"en\":\"Windhoek East\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('NA.36.11979320','NA','NA.36','{\"en\":\"Okahao\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Katima Mulilo\"}',24.28,-17.50,'P','PPLA','NA.28',NULL,25027,'Africa/Windhoek',1,'2021-06-08 23:00:00','2021-06-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Windhoek\"}',17.08,-22.56,'P','PPLC','NA.21',NULL,268132,'Africa/Windhoek',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Warmbad\"}',18.73,-28.45,'P','PPL','NA.31',NULL,6700,'Africa/Windhoek',1,'2012-01-31 23:00:00','2012-01-31 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Usakos\"}',15.60,-22.00,'P','PPL','NA.29',NULL,9147,'Africa/Windhoek',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Tsumeb\"}',17.72,-19.23,'P','PPL','NA.38',NULL,12190,'Africa/Windhoek',1,'2013-10-31 23:00:00','2013-10-31 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Swakopmund\"}',14.53,-22.68,'P','PPLA','NA.29',NULL,25047,'Africa/Windhoek',1,'2018-01-18 23:00:00','2018-01-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Rundu\"}',19.77,-17.92,'P','PPLA','NA.40',NULL,58172,'Africa/Windhoek',1,'2021-06-08 23:00:00','2021-06-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Rehoboth\"}',17.09,-23.32,'P','PPL','NA.30',NULL,21377,'Africa/Windhoek',1,'2016-09-18 23:00:00','2016-09-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Outjo\"}',16.15,-20.12,'P','PPL','NA.32',NULL,6557,'Africa/Windhoek',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Otjiwarongo\"}',16.65,-20.46,'P','PPLA','NA.39',NULL,21224,'Africa/Windhoek',1,'2016-12-19 23:00:00','2016-12-19 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Otjimbingwe\"}',16.13,-22.35,'P','PPL','NA.29',NULL,7677,'Africa/Windhoek',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Oshakati\"}',15.70,-17.79,'P','PPLA','NA.37',NULL,33618,'Africa/Windhoek',1,'2017-08-17 23:00:00','2017-08-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Oranjemund\"}',16.43,-28.55,'P','PPL','NA.31',NULL,8496,'Africa/Windhoek',1,'2014-08-17 23:00:00','2014-08-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Opuwo\"}',13.84,-18.06,'P','PPLA','NA.32',NULL,5101,'Africa/Windhoek',1,'2017-06-13 23:00:00','2017-06-13 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Ongwediva\"}',15.77,-17.78,'P','PPL','NA.37',NULL,9654,'Africa/Windhoek',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Ondangwa\"}',15.95,-17.92,'P','PPL','NA.37',NULL,9124,'Africa/Windhoek',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Omuthiya\"}',16.58,-18.36,'P','PPLA','NA.38',NULL,5000,'Africa/Windhoek',1,'2017-05-10 23:00:00','2017-05-10 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Omaruru\"}',15.93,-21.43,'P','PPL','NA.29',NULL,11547,'Africa/Windhoek',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Okakarara\"}',17.43,-20.58,'P','PPL','NA.39',NULL,5255,'Africa/Windhoek',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Okahao\"}',15.07,-17.89,'P','PPLA2','NA.36','NA.36.11979320',7000,'Africa/Windhoek',1,'2018-11-25 23:00:00','2018-11-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Okahandja\"}',16.92,-21.98,'P','PPL','NA.39',NULL,20879,'Africa/Windhoek',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Nkurenkuru\"}',18.62,-17.64,'P','PPLA','NA.41',NULL,0,'Africa/Windhoek',1,'2021-06-08 23:00:00','2021-06-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Mariental\"}',17.96,-24.63,'P','PPLA','NA.30',NULL,13380,'Africa/Windhoek',1,'2021-06-08 23:00:00','2021-06-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Lüderitz\"}',15.15,-26.65,'P','PPL','NA.31',NULL,15137,'Africa/Windhoek',1,'2018-01-28 23:00:00','2018-01-28 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Khorixas\"}',14.97,-20.37,'P','PPL','NA.32',NULL,12021,'Africa/Windhoek',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Keetmanshoop\"}',18.13,-26.58,'P','PPLA','NA.31',NULL,15608,'Africa/Windhoek',1,'2021-06-08 23:00:00','2021-06-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Katutura\"}',17.06,-22.52,'P','PPLX','NA.21',NULL,21243,'Africa/Windhoek',1,'2018-02-24 23:00:00','2018-02-24 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Karibib\"}',15.83,-21.93,'P','PPL','NA.29',NULL,6898,'Africa/Windhoek',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Karasburg\"}',18.75,-28.02,'P','PPL','NA.31',NULL,6054,'Africa/Windhoek',1,'2013-10-25 23:00:00','2013-10-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Grootfontein\"}',18.12,-19.57,'P','PPL','NA.39',NULL,24099,'Africa/Windhoek',1,'2014-08-18 23:00:00','2014-08-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Gobabis\"}',18.97,-22.45,'P','PPLA','NA.35',NULL,16321,'Africa/Windhoek',1,'2021-06-08 23:00:00','2021-06-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Eenhana\"}',16.33,-17.49,'P','PPLA','NA.33',NULL,0,'Africa/Windhoek',1,'2021-06-08 23:00:00','2021-06-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Bethanie\"}',17.15,-26.48,'P','PPL','NA.31',NULL,10363,'Africa/Windhoek',1,'2012-01-16 23:00:00','2012-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Walvis Bay\"}',14.51,-22.96,'P','PPL','NA.29',NULL,52058,'Africa/Windhoek',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('NA','{\"en\":\"Outapi\"}',14.98,-17.50,'P','PPLA','NA.36',NULL,2640,'Africa/Windhoek',1,'2021-06-10 23:00:00','2021-06-10 23:00:00');
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
