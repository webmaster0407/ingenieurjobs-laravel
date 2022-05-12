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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TD.13','TD','{\"en\":\"Salamat\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TD.12','TD','{\"en\":\"Ouadaï\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TD.02','TD','{\"en\":\"Wadi Fira\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TD.14','TD','{\"en\":\"Tandjilé\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TD.17','TD','{\"en\":\"Moyen-Chari\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TD.16','TD','{\"en\":\"Mayo-Kebbi Est\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TD.09','TD','{\"en\":\"Logone Oriental\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TD.08','TD','{\"en\":\"Logone Occidental\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TD.07','TD','{\"en\":\"Lac\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TD.06','TD','{\"en\":\"Kanem\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TD.05','TD','{\"en\":\"Guéra\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TD.15','TD','{\"en\":\"Chari-Baguirmi\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TD.01','TD','{\"en\":\"Batha\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TD.23','TD','{\"en\":\"Borkou\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TD.18','TD','{\"en\":\"Hadjer-Lamis\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TD.19','TD','{\"en\":\"Mandoul\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TD.20','TD','{\"en\":\"Mayo-Kebbi Ouest\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TD.21','TD','{\"en\":\"N’Djaména\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TD.22','TD','{\"en\":\"Barh el Gazel\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TD.25','TD','{\"en\":\"Sila\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TD.26','TD','{\"en\":\"Tibesti\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TD.28','TD','{\"en\":\"Ennedi-Ouest\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('TD.27','TD','{\"en\":\"Ennedi-Est\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.13.243701','TD','TD.13','{\"en\":\"Harazé Mangueigne\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.15.7670580','TD','TD.15','{\"en\":\"Baguirmi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.15.7670581','TD','TD.15','{\"en\":\"Dababa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.16.7670584','TD','TD.16','{\"en\":\"Mayo-Boneye\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.14.7670586','TD','TD.14','{\"en\":\"Tandjilé Est\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.17.7731692','TD','TD.17','{\"en\":\"Barh Köh\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.09.7731693','TD','TD.09','{\"en\":\"Monts de Lam\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.09.7731694','TD','TD.09','{\"en\":\"Nya Pendé\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.09.7731695','TD','TD.09','{\"en\":\"Lanya\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.09.7731696','TD','TD.09','{\"en\":\"Pendé\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.17.7731697','TD','TD.17','{\"en\":\"Mandoul Oriental\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.17.7732962','TD','TD.17','{\"en\":\"Koumra\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.17.7732963','TD','TD.17','{\"en\":\"Bessada\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.17.7732972','TD','TD.17','{\"en\":\"Bedaya\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.17.7732974','TD','TD.17','{\"en\":\"Djoli\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.17.7732975','TD','TD.17','{\"en\":\"Balimba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.17.7732978','TD','TD.17','{\"en\":\"Sarh\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.09.7732980','TD','TD.09','{\"en\":\"Doba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.08.7871202','TD','TD.08','{\"en\":\"Lac Wey\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.08.8250831','TD','TD.08','{\"en\":\"Dodje\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.08.8250832','TD','TD.08','{\"en\":\"Ngourkosso\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.09.8250833','TD','TD.09','{\"en\":\"La Nya Pende\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.17.8250834','TD','TD.17','{\"en\":\"Lac Iro\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.17.8250835','TD','TD.17','{\"en\":\"Grande Sido\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.17.8250836','TD','TD.17','{\"en\":\"Mandoul Occidental\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.17.8250837','TD','TD.17','{\"en\":\"Barh Sara\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.14.8250838','TD','TD.14','{\"en\":\"Tandjile Ouest\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.15.8335048','TD','TD.15','{\"en\":\"Mansaba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.01.8659322','TD','TD.01','{\"en\":\"Batha\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.12.8659323','TD','TD.12','{\"en\":\"Ouara\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.15.8693069','TD','TD.15','{\"en\":\"Dagana District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.06.8693073','TD','TD.06','{\"en\":\"Rig-Rig\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.09.8693074','TD','TD.09','{\"en\":\"Mamdi Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.15.9072808','TD','TD.15','{\"en\":\"Loug Chari\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.05.9166522','TD','TD.05','{\"en\":\"Barh Signaka\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.01.9166643','TD','TD.01','{\"en\":\"Fitri\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.15.9166667','TD','TD.15','{\"en\":\"Chari\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.02.10377074','TD','TD.02','{\"en\":\"Kobé\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.12.10377165','TD','TD.12','{\"en\":\"Assoungha Department\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.13.10399865','TD','TD.13','{\"en\":\"Barh Azoum\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.07.10400441','TD','TD.07','{\"en\":\"Wayi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.05.10400446','TD','TD.05','{\"en\":\"Abtouyour\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.21.12180662','TD','TD.21','{\"en\":\"Septième Arrondissement\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.21.12180663','TD','TD.21','{\"en\":\"Huitième Arrondissement\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.21.12180683','TD','TD.21','{\"en\":\"Premier Arrondissement\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.21.12180684','TD','TD.21','{\"en\":\"Deuxième Arrondissement\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.21.12180685','TD','TD.21','{\"en\":\"Troisième Arrondissement\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.21.12180686','TD','TD.21','{\"en\":\"Quatrième Arrondissement\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.21.12180687','TD','TD.21','{\"en\":\"Cinquième Arrondissement\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.21.12180688','TD','TD.21','{\"en\":\"Sixième Arrondissement\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.21.12180689','TD','TD.21','{\"en\":\"Neuvième Arrondissement\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.21.12180690','TD','TD.21','{\"en\":\"Dixième Arrondissement\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.20.12186503','TD','TD.20','{\"en\":\"El Ouaya\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.25.12186504','TD','TD.25','{\"en\":\"Kimiti\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.25.12186505','TD','TD.25','{\"en\":\"Tissi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.20.12186506','TD','TD.20','{\"en\":\"Lac Léré\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.25.12186513','TD','TD.25','{\"en\":\"Adé\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.25.12186514','TD','TD.25','{\"en\":\"Koukou-Angarana\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.20.12186525','TD','TD.20','{\"en\":\"Mayo-Dallah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.20.12186526','TD','TD.20','{\"en\":\"Mayo-Binder\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.20.12186527','TD','TD.20','{\"en\":\"Gagal\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.08.12186528','TD','TD.08','{\"en\":\"Guéni\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.09.12186529','TD','TD.09','{\"en\":\"Kouh-Est\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.09.12186530','TD','TD.09','{\"en\":\"Kouh-Ouest\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.09.12186531','TD','TD.09','{\"en\":\"La Pendé\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.14.12186532','TD','TD.14','{\"en\":\"Tandjilé-Centre\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.14.12186533','TD','TD.14','{\"en\":\"Manga\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.14.12186534','TD','TD.14','{\"en\":\"Manbagué\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.19.12186535','TD','TD.19','{\"en\":\"Goundi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.19.12186536','TD','TD.19','{\"en\":\"Taralnass\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.19.12186537','TD','TD.19','{\"en\":\"La Moula\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.16.12186538','TD','TD.16','{\"en\":\"Kabia\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.16.12186539','TD','TD.16','{\"en\":\"Mayo-Lemié\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.16.12186540','TD','TD.16','{\"en\":\"Mont-Illi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.15.12186541','TD','TD.15','{\"en\":\"Dourbali\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.17.12186542','TD','TD.17','{\"en\":\"Korbol\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.05.12186543','TD','TD.05','{\"en\":\"Mangalmé\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.05.12186544','TD','TD.05','{\"en\":\"Garada\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.13.12186545','TD','TD.13','{\"en\":\"Aboudeia\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.12.12186546','TD','TD.12','{\"en\":\"Abdi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.25.12186547','TD','TD.25','{\"en\":\"Djourf-Al-Ahmar\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.12.12186831','TD','TD.12','{\"en\":\"Abougoudam\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.02.12186832','TD','TD.02','{\"en\":\"Biltine\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.02.12186833','TD','TD.02','{\"en\":\"Dar-Tama\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.02.12186834','TD','TD.02','{\"en\":\"Mégri\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.02.12186848','TD','TD.02','{\"en\":\"Iriba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.02.12186849','TD','TD.02','{\"en\":\"Al-Biher\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.02.12186850','TD','TD.02','{\"en\":\"Dar-Alfawakih\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.27.12186851','TD','TD.27','{\"en\":\"Amdjarass\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.02.12186852','TD','TD.02','{\"en\":\"Wadi-Hawar\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.27.12186853','TD','TD.27','{\"en\":\"Itou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.27.12186854','TD','TD.27','{\"en\":\"Bao\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.27.12186855','TD','TD.27','{\"en\":\"Mourdi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.28.12186856','TD','TD.28','{\"en\":\"Fada\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.28.12186857','TD','TD.28','{\"en\":\"Mourtcha\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.28.12186858','TD','TD.28','{\"en\":\"Lac-Ounianga\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.23.12186859','TD','TD.23','{\"en\":\"Gouro\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.28.12186860','TD','TD.28','{\"en\":\"Tebi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.28.12186861','TD','TD.28','{\"en\":\"Torbol\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.23.12186862','TD','TD.23','{\"en\":\"Borkou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.23.12186863','TD','TD.23','{\"en\":\"Borkou-Yala\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.23.12186864','TD','TD.23','{\"en\":\"Kouba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.23.12186865','TD','TD.23','{\"en\":\"Emi-Koussi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.26.12186866','TD','TD.26','{\"en\":\"Tibesti-Est\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.26.12186867','TD','TD.26','{\"en\":\"Tibesti-Ouest\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.26.12186887','TD','TD.26','{\"en\":\"Wour\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.26.12186889','TD','TD.26','{\"en\":\"Aouzou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.01.12186890','TD','TD.01','{\"en\":\"Batha-Est\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.01.12186891','TD','TD.01','{\"en\":\"Batha-Ouest\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.01.12186892','TD','TD.01','{\"en\":\"Ouadi Rimé\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.01.12186894','TD','TD.01','{\"en\":\"Assinet\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.01.12186897','TD','TD.01','{\"en\":\"Haraze\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.22.12186898','TD','TD.22','{\"en\":\"Barh-El-Gazel Nord\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.22.12186899','TD','TD.22','{\"en\":\"Barh-El-Gazel Sud\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.22.12186900','TD','TD.22','{\"en\":\"Barh-El-Gazel Ouest\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.22.12186902','TD','TD.22','{\"en\":\"Kléta\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.06.12186903','TD','TD.06','{\"en\":\"Nord-Kanem\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.06.12186904','TD','TD.06','{\"en\":\"Sud-Kanem\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.07.12186905','TD','TD.07','{\"en\":\"Kouloudia\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.07.12186906','TD','TD.07','{\"en\":\"Kaya\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.07.12186907','TD','TD.07','{\"en\":\"Fouli\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.18.12186908','TD','TD.18','{\"en\":\"Dababa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.18.12186909','TD','TD.18','{\"en\":\"Ngoura\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('TD.18.12186910','TD','TD.18','{\"en\":\"Haraz-Al-Biar\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Goz-Beida\"}',21.41,12.23,'P','PPLA','TD.25',NULL,1000,'Africa/Ndjamena',1,'2020-09-09 23:00:00','2020-09-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Fada\"}',21.58,17.19,'P','PPLA','TD.28',NULL,23786,'Africa/Ndjamena',1,'2020-08-11 23:00:00','2020-08-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Biltine\"}',20.93,14.53,'P','PPLA','TD.02',NULL,11000,'Africa/Ndjamena',1,'2020-08-11 23:00:00','2020-08-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Am-Timan\"}',20.28,11.04,'P','PPLA','TD.13',NULL,28885,'Africa/Ndjamena',1,'2020-09-09 23:00:00','2020-09-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Adré\"}',22.20,13.47,'P','PPL','TD.12',NULL,11928,'Africa/Ndjamena',1,'2019-03-08 23:00:00','2019-03-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Abéché\"}',20.83,13.83,'P','PPLA','TD.12',NULL,74188,'Africa/Ndjamena',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Sarh\"}',18.38,9.15,'P','PPLA','TD.17',NULL,102528,'Africa/Ndjamena',1,'2020-08-11 23:00:00','2020-08-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Pala\"}',14.91,9.36,'P','PPLA','TD.20',NULL,35466,'Africa/Ndjamena',1,'2020-08-11 23:00:00','2020-08-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Oum Hadjer\"}',19.70,13.30,'P','PPL','TD.01',NULL,19271,'Africa/Ndjamena',1,'2019-03-08 23:00:00','2019-03-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Ngama\"}',17.17,11.78,'P','PPL','TD.15',NULL,12438,'Africa/Ndjamena',1,'2006-01-16 23:00:00','2006-01-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"N\'Djamena\"}',15.04,12.11,'P','PPLC','TD.21',NULL,721081,'Africa/Ndjamena',1,'2020-08-01 23:00:00','2020-08-01 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Moussoro\"}',16.49,13.64,'P','PPLA','TD.22',NULL,15190,'Africa/Ndjamena',1,'2020-08-11 23:00:00','2020-08-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Moundou\"}',16.08,8.57,'P','PPLA','TD.08',NULL,135167,'Africa/Ndjamena',1,'2020-08-11 23:00:00','2020-08-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Mongo\"}',18.69,12.19,'P','PPLA','TD.05',NULL,27763,'Africa/Ndjamena',1,'2020-08-11 23:00:00','2020-08-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Moïssala\"}',17.77,8.34,'P','PPL','TD.19',NULL,11264,'Africa/Ndjamena',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Melfi\"}',17.94,11.06,'P','PPL','TD.05',NULL,5784,'Africa/Ndjamena',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Mboursou Léré\"}',14.15,9.76,'P','PPL','TD.20',NULL,17132,'Africa/Ndjamena',1,'2019-03-11 23:00:00','2019-03-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Massenya\"}',16.17,11.40,'P','PPLA','TD.15',NULL,3680,'Africa/Ndjamena',1,'2020-08-11 23:00:00','2020-08-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Massakory\"}',15.73,13.00,'P','PPLA','TD.18',NULL,15406,'Africa/Ndjamena',1,'2020-08-11 23:00:00','2020-08-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Massaguet\"}',15.44,12.48,'P','PPL','TD.18',NULL,17906,'Africa/Ndjamena',1,'2019-03-08 23:00:00','2019-03-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Mao\"}',15.31,14.12,'P','PPLA','TD.06',NULL,18031,'Africa/Ndjamena',1,'2020-08-11 23:00:00','2020-08-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Laï\"}',16.30,9.40,'P','PPLA','TD.14',NULL,19382,'Africa/Ndjamena',1,'2017-07-15 23:00:00','2017-07-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Kyabé\"}',18.94,9.45,'P','PPL','TD.17',NULL,16177,'Africa/Ndjamena',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Koumra\"}',17.55,8.92,'P','PPLA','TD.19',NULL,36263,'Africa/Ndjamena',1,'2020-08-11 23:00:00','2020-08-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Kelo\"}',15.81,9.31,'P','PPL','TD.14',NULL,42533,'Africa/Ndjamena',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Guelendeng\"}',15.55,10.92,'P','PPL','TD.16',NULL,11379,'Africa/Ndjamena',1,'2018-10-27 23:00:00','2018-10-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Gounou Gaya\"}',15.51,9.63,'P','PPL','TD.16',NULL,9521,'Africa/Ndjamena',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Goundi\"}',17.37,9.36,'P','PPL','TD.19',NULL,10052,'Africa/Ndjamena',1,'2018-10-27 23:00:00','2018-10-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Faya-Largeau\"}',19.10,17.93,'P','PPLA','TD.23',NULL,13400,'Africa/Ndjamena',1,'2014-05-28 23:00:00','2014-05-28 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Dourbali\"}',15.87,11.81,'P','PPL','TD.15',NULL,17682,'Africa/Ndjamena',1,'2019-07-09 23:00:00','2019-07-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Doba\"}',16.85,8.66,'P','PPLA','TD.09',NULL,24336,'Africa/Ndjamena',1,'2020-08-11 23:00:00','2020-08-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Bousso\"}',16.71,10.48,'P','PPL','TD.15',NULL,13555,'Africa/Ndjamena',1,'2013-05-08 23:00:00','2013-05-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Bongor\"}',15.37,10.28,'P','PPLA','TD.16',NULL,27770,'Africa/Ndjamena',1,'2020-08-11 23:00:00','2020-08-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Bol\"}',14.71,13.47,'P','PPLA','TD.07',NULL,11700,'Africa/Ndjamena',1,'2020-08-11 23:00:00','2020-08-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Bokoro\"}',17.06,12.38,'P','PPL','TD.18',NULL,14723,'Africa/Ndjamena',1,'2014-06-27 23:00:00','2014-06-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Bitkine\"}',18.21,11.98,'P','PPL','TD.05',NULL,18495,'Africa/Ndjamena',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Béré\"}',16.16,9.32,'P','PPL','TD.14',NULL,14666,'Africa/Ndjamena',1,'2018-11-05 23:00:00','2018-11-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Benoy\"}',16.32,8.98,'P','PPL','TD.08',NULL,15717,'Africa/Ndjamena',1,'2018-10-27 23:00:00','2018-10-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Beïnamar\"}',15.38,8.67,'P','PPL','TD.08',NULL,7445,'Africa/Ndjamena',1,'2013-04-03 23:00:00','2013-04-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Béboto\"}',16.94,8.27,'P','PPL','TD.09',NULL,5432,'Africa/Ndjamena',1,'2018-10-27 23:00:00','2018-10-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Bébédja\"}',16.57,8.68,'P','PPL','TD.09',NULL,12671,'Africa/Ndjamena',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Bardaï\"}',17.00,21.35,'P','PPLA','TD.26',NULL,0,'Africa/Ndjamena',1,'2020-08-11 23:00:00','2020-08-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Ati\"}',18.34,13.21,'P','PPLA','TD.01',NULL,24074,'Africa/Ndjamena',1,'2020-08-11 23:00:00','2020-08-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('TD','{\"en\":\"Amdjarass\"}',22.84,16.07,'P','PPLA','TD.27',NULL,0,'Africa/Ndjamena',1,'2020-09-12 23:00:00','2020-09-12 23:00:00');
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
