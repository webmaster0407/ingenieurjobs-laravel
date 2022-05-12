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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CF.14','CF','{\"en\":\"Vakaga\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CF.11','CF','{\"en\":\"Ouaka\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CF.08','CF','{\"en\":\"Mbomou\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CF.05','CF','{\"en\":\"Haut-Mbomou\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CF.03','CF','{\"en\":\"Haute-Kotto\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CF.02','CF','{\"en\":\"Basse-Kotto\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CF.01','CF','{\"en\":\"Bamingui-Bangoran\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CF.16','CF','{\"en\":\"Sangha-Mbaéré\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CF.13','CF','{\"en\":\"Ouham-Pendé\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CF.12','CF','{\"en\":\"Ouham\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CF.17','CF','{\"en\":\"Ombella-M\'Poko\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CF.09','CF','{\"en\":\"Nana-Mambéré\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CF.07','CF','{\"en\":\"Lobaye\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CF.06','CF','{\"en\":\"Kémo\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CF.04','CF','{\"en\":\"Mambéré-Kadéï\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CF.15','CF','{\"en\":\"Nana-Grébizi\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CF.18','CF','{\"en\":\"Bangui\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.04.2387494','CF','CF.04','{\"en\":\"Sous-Préfecture de Carnot\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.09.2390511','CF','CF.09','{\"en\":\"Baboua Sub-Prefecture\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.08.7731888','CF','CF.08','{\"en\":\"Ouango\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.08.7731889','CF','CF.08','{\"en\":\"Gambo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.02.7731890','CF','CF.02','{\"en\":\"Kembe\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.02.7731891','CF','CF.02','{\"en\":\"Mobaye\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.02.7731892','CF','CF.02','{\"en\":\"Zangba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.11.7731893','CF','CF.11','{\"en\":\"Kouango\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.06.7731894','CF','CF.06','{\"en\":\"Ndjoukou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.17.7731895','CF','CF.17','{\"en\":\"Damara\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.17.7731896','CF','CF.17','{\"en\":\"Bimbo Sub-Prefecture\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.18.7731897','CF','CF.18','{\"en\":\"Bangui Sub-Prefecture\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.07.7731898','CF','CF.07','{\"en\":\"Mongoumba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.16.7731904','CF','CF.16','{\"en\":\"Nola\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.16.7731905','CF','CF.16','{\"en\":\"Bayanga\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.11.7732062','CF','CF.11','{\"en\":\"Bambari\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.08.7732064','CF','CF.08','{\"en\":\"Bangassou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.02.7732066','CF','CF.02','{\"en\":\"Alindao\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.11.7732067','CF','CF.11','{\"en\":\"Ippy\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.07.7732068','CF','CF.07','{\"en\":\"Mbaiki\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.02.7732076','CF','CF.02','{\"en\":\"Mingala\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.09.7732085','CF','CF.09','{\"en\":\"Bouar Sub-Prefecture\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.09.7732103','CF','CF.09','{\"en\":\"Baoro Sub-Prefecture\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.12.7732115','CF','CF.12','{\"en\":\"Bossangoa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.17.7732372','CF','CF.17','{\"en\":\"Yaloke Sub-Prefecture\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.11.7732377','CF','CF.11','{\"en\":\"Grimari\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.06.7732483','CF','CF.06','{\"en\":\"Sibut\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.04.7732685','CF','CF.04','{\"en\":\"Berberati\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.08.7732690','CF','CF.08','{\"en\":\"Bakouma\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.17.7732723','CF','CF.17','{\"en\":\"Bossembele Sub-Prefecture\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.04.7732916','CF','CF.04','{\"en\":\"Gamboula\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.04.7732917','CF','CF.04','{\"en\":\"Gadzi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.17.8299285','CF','CF.17','{\"en\":\"Boali Sub-Prefecture\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.13.8299286','CF','CF.13','{\"en\":\"Bozoum Sub-Prefecture\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.14.9143458','CF','CF.14','{\"en\":\"Birao\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.01.9143459','CF','CF.01','{\"en\":\"Bamingui\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.01.9143460','CF','CF.01','{\"en\":\"Ndélé\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.05.9143461','CF','CF.05','{\"en\":\"Bambouti\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.05.9143462','CF','CF.05','{\"en\":\"Djéma\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.05.9143463','CF','CF.05','{\"en\":\"Obo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.05.9143464','CF','CF.05','{\"en\":\"Zémio\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.03.9143465','CF','CF.03','{\"en\":\"Bria\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.03.9143466','CF','CF.03','{\"en\":\"Ouadda\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.07.9143467','CF','CF.07','{\"en\":\"Boda\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.08.9143468','CF','CF.08','{\"en\":\"Rafai\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.15.9143469','CF','CF.15','{\"en\":\"Kaga-Bandoro\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.15.9143470','CF','CF.15','{\"en\":\"Mbrès\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.11.9143471','CF','CF.11','{\"en\":\"Bakala\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.12.9143472','CF','CF.12','{\"en\":\"Batangafo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.16.9143473','CF','CF.16','{\"en\":\"Bambio\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.03.9143475','CF','CF.03','{\"en\":\"Yalinga\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.04.9143476','CF','CF.04','{\"en\":\"Amada-Gaza\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.12.9143477','CF','CF.12','{\"en\":\"Bouca\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.12.9143478','CF','CF.12','{\"en\":\"Kabo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.12.9143479','CF','CF.12','{\"en\":\"Markounda\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.12.9143480','CF','CF.12','{\"en\":\"Nana-Bakassa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.12.9143481','CF','CF.12','{\"en\":\"Nangha Boguila\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.09.9143482','CF','CF.09','{\"en\":\"Abba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.13.9143483','CF','CF.13','{\"en\":\"Bossemtélé\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.06.9143484','CF','CF.06','{\"en\":\"Dékoa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.06.9143485','CF','CF.06','{\"en\":\"Mala\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.07.9143486','CF','CF.07','{\"en\":\"Boganangone\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.07.9143487','CF','CF.07','{\"en\":\"Boganda\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.04.9143488','CF','CF.04','{\"en\":\"Dédé-Mokouba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.04.9143489','CF','CF.04','{\"en\":\"Sosso-Nakombo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.17.9143490','CF','CF.17','{\"en\":\"Bogangolo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.13.9143491','CF','CF.13','{\"en\":\"Bocaranga\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.13.9143492','CF','CF.13','{\"en\":\"Koui\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.13.9143493','CF','CF.13','{\"en\":\"Ngaoundaye\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.13.9143494','CF','CF.13','{\"en\":\"Paoua\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CF.14.9143495','CF','CF.14','{\"en\":\"Ouanda-Djallé\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Zemio\"}',25.14,5.03,'P','PPL','CF.05','CF.05.9143464',14000,'Africa/Bangui',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Ouadda\"}',22.40,8.08,'P','PPL','CF.03','CF.03.9143466',5434,'Africa/Bangui',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Obo\"}',26.49,5.40,'P','PPLA','CF.05','CF.05.9143463',12887,'Africa/Bangui',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Ndélé\"}',20.65,8.41,'P','PPLA','CF.01','CF.01.9143460',11764,'Africa/Bangui',1,'2017-04-16 23:00:00','2017-04-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Mobaye\"}',21.18,4.32,'P','PPLA','CF.02','CF.02.7731891',19431,'Africa/Bangui',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Kembé\"}',21.89,4.62,'P','PPL','CF.02','CF.02.7731890',11513,'Africa/Bangui',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Ippy\"}',21.22,6.27,'P','PPL','CF.11','CF.11.7732067',16571,'Africa/Bangui',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Bria\"}',21.99,6.54,'P','PPLA','CF.03','CF.03.9143465',29027,'Africa/Bangui',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Birao\"}',22.79,10.28,'P','PPLA','CF.14','CF.14.9143458',10178,'Africa/Bangui',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Bangassou\"}',22.82,4.74,'P','PPLA','CF.08','CF.08.7732064',24361,'Africa/Bangui',1,'2017-04-16 23:00:00','2017-04-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Bambari\"}',20.68,5.77,'P','PPLA','CF.11','CF.11.7732062',32547,'Africa/Bangui',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Alindao\"}',21.21,5.03,'P','PPL','CF.02','CF.02.9143474',14234,'Africa/Bangui',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Sibut\"}',19.07,5.72,'P','PPLA','CF.06','CF.06.7732483',34267,'Africa/Bangui',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Paoua\"}',16.44,7.24,'P','PPL','CF.13','CF.13.9143494',18441,'Africa/Bangui',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Nola\"}',16.05,3.52,'P','PPLA','CF.16','CF.16.7731904',26809,'Africa/Bangui',1,'2018-09-28 23:00:00','2018-09-28 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Mongoumba\"}',18.59,3.64,'P','PPL','CF.07','CF.07.7731898',10885,'Africa/Bangui',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Mbaïki\"}',17.99,3.87,'P','PPLA','CF.07','CF.07.7732068',67132,'Africa/Bangui',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Kouango\"}',19.96,4.99,'P','PPL','CF.11','CF.11.7731893',7529,'Africa/Bangui',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Kaga Bandoro\"}',19.19,6.99,'P','PPLA','CF.15','CF.15.9143469',56520,'Africa/Bangui',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Kabo\"}',18.63,7.70,'P','PPL','CF.12','CF.12.9143478',13637,'Africa/Bangui',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Gamboula\"}',15.14,4.12,'P','PPL','CF.04','CF.04.7732916',7646,'Africa/Bangui',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Damara\"}',18.70,4.96,'P','PPL','CF.17','CF.17.7731895',20093,'Africa/Bangui',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Carnot\"}',15.88,4.94,'P','PPL','CF.04','CF.04.2387494',38071,'Africa/Bangui',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Bozoum\"}',16.38,6.32,'P','PPLA','CF.13','CF.13.8299286',40201,'Africa/Bangui',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Bouca\"}',18.28,6.51,'P','PPL','CF.12','CF.12.9143477',13250,'Africa/Bangui',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Bouar\"}',15.60,5.93,'P','PPLA','CF.09','CF.09.7732085',28581,'Africa/Bangui',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Bossangoa\"}',17.46,6.49,'P','PPLA','CF.12','CF.12.7732115',27428,'Africa/Bangui',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Boda\"}',17.47,4.32,'P','PPL','CF.07','CF.07.9143467',16655,'Africa/Bangui',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Boali\"}',18.13,4.80,'P','PPL','CF.17','CF.17.8299285',5876,'Africa/Bangui',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Bimbo\"}',18.42,4.26,'P','PPLA','CF.17','CF.17.7731896',129655,'Africa/Bangui',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Berbérati\"}',15.79,4.26,'P','PPLA','CF.04','CF.04.7732685',61815,'Africa/Bangui',1,'2017-04-16 23:00:00','2017-04-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Batangafo\"}',18.28,7.30,'P','PPL','CF.12','CF.12.9143472',15310,'Africa/Bangui',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Baoro\"}',15.97,5.67,'P','PPL','CF.09','CF.09.7732103',6319,'Africa/Bangui',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CF','{\"en\":\"Bangui\"}',18.55,4.36,'P','PPLC','CF.18','CF.18.7731897',542393,'Africa/Bangui',1,'2016-06-21 23:00:00','2016-06-21 23:00:00');
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
