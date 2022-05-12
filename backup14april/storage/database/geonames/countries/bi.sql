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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BI.17','BI','{\"en\":\"Makamba\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BI.10','BI','{\"en\":\"Bururi\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BI.22','BI','{\"en\":\"Muramvya\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BI.13','BI','{\"en\":\"Gitega\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BI.21','BI','{\"en\":\"Ruyigi\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BI.11','BI','{\"en\":\"Cankuzo\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BI.14','BI','{\"en\":\"Karuzi\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BI.09','BI','{\"en\":\"Bubanza\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BI.12','BI','{\"en\":\"Cibitoke\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BI.19','BI','{\"en\":\"Ngozi\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BI.15','BI','{\"en\":\"Kayanza\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BI.18','BI','{\"en\":\"Muyinga\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BI.16','BI','{\"en\":\"Kirundo\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BI.20','BI','{\"en\":\"Rutana\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BI.23','BI','{\"en\":\"Mwaro\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BI.24','BI','{\"en\":\"Bujumbura Mairie\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BI.25','BI','{\"en\":\"Bujumbura Rural\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BI.26','BI','{\"en\":\"Rumonge\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.13.424739','BI','BI.13','{\"en\":\"Makebuko\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.09.7670587','BI','BI.09','{\"en\":\"Bubanza\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.12.7670588','BI','BI.12','{\"en\":\"Bukinanyana\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.13.7670589','BI','BI.13','{\"en\":\"Buraza\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.19.7670590','BI','BI.19','{\"en\":\"Busiga\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.16.7670591','BI','BI.16','{\"en\":\"Busoni\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.26.7670592','BI','BI.26','{\"en\":\"Buyengero\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.11.7670593','BI','BI.11','{\"en\":\"Cendajuru\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.19.7670594','BI','BI.19','{\"en\":\"Gashikanwa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.18.7670595','BI','BI.18','{\"en\":\"Gashoho\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.23.7670596','BI','BI.23','{\"en\":\"Gisozi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.13.7670597','BI','BI.13','{\"en\":\"Gitega\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.18.7670598','BI','BI.18','{\"en\":\"Giteranyi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.15.7670599','BI','BI.15','{\"en\":\"Kabarore\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.15.7670600','BI','BI.15','{\"en\":\"Kayanza\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.23.7670601','BI','BI.23','{\"en\":\"Kayokwe\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.22.7670602','BI','BI.22','{\"en\":\"Kiganda\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.17.7670603','BI','BI.17','{\"en\":\"Mabanda\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.12.7670604','BI','BI.12','{\"en\":\"Mabayi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.10.7670605','BI','BI.10','{\"en\":\"Mugamba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.26.7670606','BI','BI.26','{\"en\":\"Muhuta\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.12.7670607','BI','BI.12','{\"en\":\"Murwi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.25.7670608','BI','BI.25','{\"en\":\"Commune of Mutimbuzi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.18.7670609','BI','BI.18','{\"en\":\"Muyinga\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.23.7670610','BI','BI.23','{\"en\":\"Nyabihanga\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.14.7670611','BI','BI.14','{\"en\":\"Nyabikere\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.12.7670613','BI','BI.12','{\"en\":\"Commune of Rugombo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.19.7670614','BI','BI.19','{\"en\":\"Ruhororo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.22.7670615','BI','BI.22','{\"en\":\"Rutegama\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.21.7670616','BI','BI.21','{\"en\":\"Ruyigi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.19.7670617','BI','BI.19','{\"en\":\"Tangara\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.16.7670618','BI','BI.16','{\"en\":\"Vumbi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.19.7670822','BI','BI.19','{\"en\":\"Ngozi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.13.7670823','BI','BI.13','{\"en\":\"Mutaho\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.13.7670931','BI','BI.13','{\"en\":\"Giheta\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.13.7670933','BI','BI.13','{\"en\":\"Bugendana\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.15.7732510','BI','BI.15','{\"en\":\"Muruta\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.13.7874080','BI','BI.13','{\"en\":\"Ryansoro\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.09.8303259','BI','BI.09','{\"en\":\"Commune of Gihanga\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.12.8334579','BI','BI.12','{\"en\":\"Commune of Buganda\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.15.8692984','BI','BI.15','{\"en\":\"Butaganzwa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.13.8692994','BI','BI.13','{\"en\":\"Commune of Itaba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.15.9072885','BI','BI.15','{\"en\":\"Commune of Matongo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.16.9072886','BI','BI.16','{\"en\":\"Commune of Kirundo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.09.9072887','BI','BI.09','{\"en\":\"Commune of Mpanda\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.09.9072888','BI','BI.09','{\"en\":\"Commune of Musigati\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.12.9072889','BI','BI.12','{\"en\":\"Commune of Mugina\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.16.9072890','BI','BI.16','{\"en\":\"Commune of Bwambarangwe\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.17.9072891','BI','BI.17','{\"en\":\"Commune of Makamba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.20.9072892','BI','BI.20','{\"en\":\"Commune of Rutana\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.11.9072894','BI','BI.11','{\"en\":\"Commune of Cankuzo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.10.9157454','BI','BI.10','{\"en\":\"Commune of Matana\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.26.9158023','BI','BI.26','{\"en\":\"Commune of Rumonge\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.23.9171802','BI','BI.23','{\"en\":\"Ndava\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.26.9171803','BI','BI.26','{\"en\":\"Bugarama\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.10.9171804','BI','BI.10','{\"en\":\"Bururi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.25.9171805','BI','BI.25','{\"en\":\"Kanyosha1\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.25.9171806','BI','BI.25','{\"en\":\"Kabezi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.25.9171807','BI','BI.25','{\"en\":\"Mukike\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.25.9171808','BI','BI.25','{\"en\":\"Mutambu\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.25.9171809','BI','BI.25','{\"en\":\"Nyabiraba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.17.9171810','BI','BI.17','{\"en\":\"Vugizo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.10.9171811','BI','BI.10','{\"en\":\"Vyanda\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.10.9171812','BI','BI.10','{\"en\":\"Songa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.23.9171813','BI','BI.23','{\"en\":\"Rusaka\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.23.9171814','BI','BI.23','{\"en\":\"Bisoro\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.25.9171815','BI','BI.25','{\"en\":\"Mugongomanga\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.11.9171816','BI','BI.11','{\"en\":\"Mishiha\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.15.9171817','BI','BI.15','{\"en\":\"Rango\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.22.9171818','BI','BI.22','{\"en\":\"Bukeye\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.20.9171819','BI','BI.20','{\"en\":\"Bukemba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.17.9171820','BI','BI.17','{\"en\":\"Kayogoro\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.25.9171821','BI','BI.25','{\"en\":\"Isale\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.09.9171822','BI','BI.09','{\"en\":\"Rugazi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.17.9171823','BI','BI.17','{\"en\":\"Kibago\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.25.9171825','BI','BI.25','{\"en\":\"Mubimbi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.22.9171826','BI','BI.22','{\"en\":\"Mbuye\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.16.9171827','BI','BI.16','{\"en\":\"Bugabira\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.18.9171829','BI','BI.18','{\"en\":\"Butihinda\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.15.9171830','BI','BI.15','{\"en\":\"Gatara\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.15.9171831','BI','BI.15','{\"en\":\"Gahombo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.18.9171832','BI','BI.18','{\"en\":\"Buhinyuza\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.20.9171833','BI','BI.20','{\"en\":\"Musongati\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.11.9171834','BI','BI.11','{\"en\":\"Kigamba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.20.9171836','BI','BI.20','{\"en\":\"Gitanga\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.11.9171837','BI','BI.11','{\"en\":\"Gisagara\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.10.9171840','BI','BI.10','{\"en\":\"Rutovu\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.21.9171841','BI','BI.21','{\"en\":\"Gisuru\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.13.9171842','BI','BI.13','{\"en\":\"Nyarusange\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.13.9171843','BI','BI.13','{\"en\":\"Gishubi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.21.9171844','BI','BI.21','{\"en\":\"Kinyinya\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.13.9171845','BI','BI.13','{\"en\":\"Bukirasazi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.20.9171847','BI','BI.20','{\"en\":\"Mpinga-Kayove\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.20.9171849','BI','BI.20','{\"en\":\"Giharo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.21.9171851','BI','BI.21','{\"en\":\"Nyabitsinda\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.14.9171852','BI','BI.14','{\"en\":\"Shombo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.17.9171854','BI','BI.17','{\"en\":\"Nyanza-Lac\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.21.9171856','BI','BI.21','{\"en\":\"Butezi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.19.9171858','BI','BI.19','{\"en\":\"Mwumba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.21.9171859','BI','BI.21','{\"en\":\"Bweru\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.14.9171861','BI','BI.14','{\"en\":\"Gitaramuka\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.19.9171863','BI','BI.19','{\"en\":\"Nyamurenza\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.14.9171866','BI','BI.14','{\"en\":\"Bugenyuzi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.19.9171867','BI','BI.19','{\"en\":\"Marangara\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.15.9171868','BI','BI.15','{\"en\":\"Muhanga\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.16.9171870','BI','BI.16','{\"en\":\"Ntega\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.14.9171872','BI','BI.14','{\"en\":\"Gihogazi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.19.9171874','BI','BI.19','{\"en\":\"Kiremba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.14.9171878','BI','BI.14','{\"en\":\"Mutumba\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.14.9171879','BI','BI.14','{\"en\":\"Buhiga\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.18.9171882','BI','BI.18','{\"en\":\"Mwakiro\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.18.9171884','BI','BI.18','{\"en\":\"Gasorwe\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.16.9171886','BI','BI.16','{\"en\":\"Gitobe\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.22.9179822','BI','BI.22','{\"en\":\"Muramvya\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.26.9881326','BI','BI.26','{\"en\":\"Commune of Burambi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.21.11819937','BI','BI.21','{\"en\":\"Butaganzwa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.24.12237756','BI','BI.24','{\"en\":\"Muha\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.24.12237757','BI','BI.24','{\"en\":\"Mukaza\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BI.24.12237758','BI','BI.24','{\"en\":\"Ntahangwa\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BI','{\"en\":\"Makamba\"}',29.80,-4.13,'P','PPLA','BI.17','BI.17.9072891',19642,'Africa/Bujumbura',1,'2021-05-17 23:00:00','2021-05-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BI','{\"en\":\"Bururi\"}',29.62,-3.95,'P','PPLA','BI.10','BI.10.9171804',19740,'Africa/Bujumbura',1,'2021-05-17 23:00:00','2021-05-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BI','{\"en\":\"Rumonge\"}',29.44,-3.97,'P','PPLA','BI.26','BI.26.9158023',6074,'Africa/Bujumbura',1,'2016-06-13 23:00:00','2016-06-13 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BI','{\"en\":\"Mwaro\"}',29.70,-3.51,'P','PPLA','BI.23','BI.23.7670601',4924,'Africa/Bujumbura',1,'2021-05-18 23:00:00','2021-05-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BI','{\"en\":\"Isale\"}',29.48,-3.35,'P','PPLA','BI.25','BI.25.9171821',0,'Africa/Bujumbura',1,'2021-05-18 23:00:00','2021-05-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BI','{\"en\":\"Bujumbura\"}',29.36,-3.38,'P','PPLA','BI.24','BI.24.12237757',331700,'Africa/Bujumbura',1,'2021-05-18 23:00:00','2021-05-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BI','{\"en\":\"Muramvya\"}',29.61,-3.27,'P','PPLA','BI.22','BI.22.9179822',18041,'Africa/Bujumbura',1,'2021-05-18 23:00:00','2021-05-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BI','{\"en\":\"Gitega\"}',29.92,-3.43,'P','PPLC','BI.13','BI.13.7670597',41000,'Africa/Bujumbura',1,'2021-05-17 23:00:00','2021-05-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BI','{\"en\":\"Ruyigi\"}',30.25,-3.48,'P','PPLA','BI.21','BI.21.7670616',38458,'Africa/Bujumbura',1,'2021-05-18 23:00:00','2021-05-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BI','{\"en\":\"Cankuzo\"}',30.55,-3.22,'P','PPLA','BI.11','BI.11.9072894',6585,'Africa/Bujumbura',1,'2021-05-17 23:00:00','2021-05-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BI','{\"en\":\"Karuzi\"}',30.16,-3.10,'P','PPLA','BI.14','BI.14.9171879',10705,'Africa/Bujumbura',1,'2021-05-17 23:00:00','2021-05-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BI','{\"en\":\"Bubanza\"}',29.39,-3.08,'P','PPLA','BI.09','BI.09.7670587',12728,'Africa/Bujumbura',1,'2021-05-17 23:00:00','2021-05-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BI','{\"en\":\"Cibitoke\"}',29.12,-2.89,'P','PPLA','BI.12','BI.12.7670613',14220,'Africa/Bujumbura',1,'2021-05-17 23:00:00','2021-05-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BI','{\"en\":\"Ngozi\"}',29.83,-2.91,'P','PPLA','BI.19','BI.19.7670822',21506,'Africa/Bujumbura',1,'2021-05-18 23:00:00','2021-05-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BI','{\"en\":\"Kayanza\"}',29.63,-2.92,'P','PPLA','BI.15','BI.15.7670600',19443,'Africa/Bujumbura',1,'2021-05-17 23:00:00','2021-05-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BI','{\"en\":\"Muyinga\"}',30.34,-2.85,'P','PPLA','BI.18','BI.18.7670609',71076,'Africa/Bujumbura',1,'2021-05-17 23:00:00','2021-05-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BI','{\"en\":\"Kirundo\"}',30.10,-2.58,'P','PPLA','BI.16','BI.16.9072886',6083,'Africa/Bujumbura',1,'2021-05-17 23:00:00','2021-05-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BI','{\"en\":\"Rutana\"}',29.99,-3.93,'P','PPLA','BI.20','BI.20.9072892',20893,'Africa/Bujumbura',1,'2021-05-18 23:00:00','2021-05-18 23:00:00');
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
