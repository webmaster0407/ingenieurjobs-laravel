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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GE.51','GE','{\"en\":\"T\'bilisi\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GE.04','GE','{\"en\":\"Achara\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GE.68','GE','{\"en\":\"Kvemo Kartli\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GE.67','GE','{\"en\":\"Kakheti\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GE.65','GE','{\"en\":\"Guria\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GE.66','GE','{\"en\":\"Imereti\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GE.73','GE','{\"en\":\"Shida Kartli\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GE.69','GE','{\"en\":\"Mtskheta-Mtianeti\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GE.70','GE','{\"en\":\"Racha-Lechkhumi and Kvemo Svaneti\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GE.71','GE','{\"en\":\"Samegrelo and Zemo Svaneti\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GE.72','GE','{\"en\":\"Samtskhe-Javakheti\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('GE.02','GE','{\"en\":\"Abkhazia\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.71.610823','GE','GE.71','{\"en\":\"Zugdidis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.66.610865','GE','GE.66','{\"en\":\"Zest’aponis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.70.611068','GE','GE.70','{\"en\":\"Zavodskoy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.66.611214','GE','GE.66','{\"en\":\"Vanis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.67.611448','GE','GE.67','{\"en\":\"Dedoplists’q’aros Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.68.611547','GE','GE.68','{\"en\":\"Ts’alk’is Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.71.611552','GE','GE.71','{\"en\":\"Ts’alenjikhis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.70.611565','GE','GE.70','{\"en\":\"Tsageris Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.69.611668','GE','GE.69','{\"en\":\"Tianetis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.68.611676','GE','GE.68','{\"en\":\"Tetrits’q’alos Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.66.611681','GE','GE.66','{\"en\":\"Terjolis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.02.611818','GE','GE.02','{\"en\":\"Sukhumi District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.67.611901','GE','GE.67','{\"en\":\"Sighnaghis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.71.612051','GE','GE.71','{\"en\":\"Senakis Raioni\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.66.612124','GE','GE.66','{\"en\":\"Samtredia\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.67.612231','GE','GE.67','{\"en\":\"Sagarejos Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.70.612422','GE','GE.70','{\"en\":\"Pervomayskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.65.612535','GE','GE.65','{\"en\":\"Ozurget’is Raioni\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.70.612571','GE','GE.70','{\"en\":\"Ordzhonikidzevskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.70.612590','GE','GE.70','{\"en\":\"Onis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.70.612612','GE','GE.70','{\"en\":\"Oktyabr\'skiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.02.612651','GE','GE.02','{\"en\":\"Ochamchira District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.69.612889','GE','GE.69','{\"en\":\"Mtskhetis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.71.612985','GE','GE.71','{\"en\":\"Mest’iis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.66.613054','GE','GE.66','{\"en\":\"Baghdatis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.71.613064','GE','GE.71','{\"en\":\"Mart’vilis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.68.613073','GE','GE.68','{\"en\":\"Marneulis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.70.613225','GE','GE.70','{\"en\":\"Lent’ekhis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.69.613233','GE','GE.69','{\"en\":\"Akhalgoris Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.65.613310','GE','GE.65','{\"en\":\"Lanchkhutis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.67.613341','GE','GE.67','{\"en\":\"Lagodekhi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.67.613582','GE','GE.67','{\"en\":\"Q’varlis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.04.613761','GE','GE.04','{\"en\":\"K’obulet’is Raioni\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.70.613811','GE','GE.70','{\"en\":\"Kirovskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.66.613900','GE','GE.66','{\"en\":\"Khonis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.71.613915','GE','GE.71','{\"en\":\"Khobis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.04.613970','GE','GE.04','{\"en\":\"Khelvachauri Municipality\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.73.613987','GE','GE.73','{\"en\":\"Khashuris Raioni\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.66.614003','GE','GE.66','{\"en\":\"Kharagaulis Raioni\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.69.614086','GE','GE.69','{\"en\":\"Q’azbegis Munitsip’alit’et‘i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.73.614103','GE','GE.73','{\"en\":\"Kaspis Raioni\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.73.614130','GE','GE.73','{\"en\":\"Kareli\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.70.614171','GE','GE.70','{\"en\":\"Kalininskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.70.614278','GE','GE.70','{\"en\":\"Imeni Dvadtsati Shesti Komissarov Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.67.614356','GE','GE.67','{\"en\":\"Gurjaanis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.02.614378','GE','GE.02','{\"en\":\"Gulripshi district\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.02.614407','GE','GE.02','{\"en\":\"Gudauta District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.73.614450','GE','GE.73','{\"en\":\"Goris Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.00.614519','GE','GE.00','{\"en\":\"Gldanskiy Rayon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.68.614573','GE','GE.68','{\"en\":\"Gardabnis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.02.614611','GE','GE.02','{\"en\":\"Gali District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.73.614792','GE','GE.73','{\"en\":\"Javis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.69.614841','GE','GE.69','{\"en\":\"Dushetis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.68.614889','GE','GE.68','{\"en\":\"Dmanisis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.65.615117','GE','GE.65','{\"en\":\"Chokhat’auris Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.71.615141','GE','GE.71','{\"en\":\"Chkhorots’q’us Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.72.615400','GE','GE.72','{\"en\":\"Borjomis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.68.615418','GE','GE.68','{\"en\":\"Bolnisis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.72.615428','GE','GE.72','{\"en\":\"Ninots’mindis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.66.615631','GE','GE.66','{\"en\":\"Tsqaltubo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.72.615659','GE','GE.72','{\"en\":\"Asp’indzis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.70.615775','GE','GE.70','{\"en\":\"Ambrolauris Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.67.615843','GE','GE.67','{\"en\":\"Akhmet’is Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.72.615856','GE','GE.72','{\"en\":\"Akhaltsikhis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.72.615891','GE','GE.72','{\"en\":\"Akhalkalakis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.72.615972','GE','GE.72','{\"en\":\"Adigeni Municipality\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.71.616020','GE','GE.71','{\"en\":\"Abasha\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.66.828308','GE','GE.66','{\"en\":\"K’alak’i Chiat’ura\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.66.828310','GE','GE.66','{\"en\":\"Kalaki Kutaisi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.71.828311','GE','GE.71','{\"en\":\"Kalaki Poti\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.68.828312','GE','GE.68','{\"en\":\"Kalaki Rustavi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.66.828313','GE','GE.66','{\"en\":\"K’alak’i Tqibuli\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.66.7667511','GE','GE.66','{\"en\":\"Khoni\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.66.7667553','GE','GE.66','{\"en\":\"Baghdati\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.71.7667559','GE','GE.71','{\"en\":\"Mestia\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.71.7667563','GE','GE.71','{\"en\":\"Chkhorotsqu\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.71.7667572','GE','GE.71','{\"en\":\"Martvili\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.69.7667575','GE','GE.69','{\"en\":\"Dusheti\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.68.7667577','GE','GE.68','{\"en\":\"Gardabani\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.68.7667578','GE','GE.68','{\"en\":\"Marneuli\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.67.7667580','GE','GE.67','{\"en\":\"Gurjaani\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.67.7667581','GE','GE.67','{\"en\":\"Telavi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.71.7667584','GE','GE.71','{\"en\":\"Poti\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.72.7667662','GE','GE.72','{\"en\":\"Ninotsminda\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.68.7667683','GE','GE.68','{\"en\":\"Tetri Tsqaro\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.70.7667685','GE','GE.70','{\"en\":\"Tsageri\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.70.7667690','GE','GE.70','{\"en\":\"Lentekhi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.69.7667694','GE','GE.69','{\"en\":\"Akhalgori\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.69.7667696','GE','GE.69','{\"en\":\"Kazbegi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.67.7667701','GE','GE.67','{\"en\":\"Qvareli\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.67.7667710','GE','GE.67','{\"en\":\"Sagarejo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.67.7667711','GE','GE.67','{\"en\":\"Sighnaghi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.67.7667712','GE','GE.67','{\"en\":\"Dedoplis Tskaro\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.68.7667714','GE','GE.68','{\"en\":\"Tsalka\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.66.7667754','GE','GE.66','{\"en\":\"Sachkhere\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.69.7668882','GE','GE.69','{\"en\":\"Mtskheta\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.71.7668970','GE','GE.71','{\"en\":\"Tsalenjikha\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.65.7668994','GE','GE.65','{\"en\":\"Chokhatauri\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.68.7729903','GE','GE.68','{\"en\":\"Dmanisi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.02.9021892','GE','GE.02','{\"en\":\"Gagra District\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.04.9093838','GE','GE.04','{\"en\":\"Kedis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.04.9093934','GE','GE.04','{\"en\":\"Kobuletis Munitsip’alit’et’i\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.04.9165838','GE','GE.04','{\"en\":\"Batumi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.02.9883703','GE','GE.02','{\"en\":\"Tkvarcheli district\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('GE.73.10285963','GE','GE.73','{\"en\":\"Tskhinvali District\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Zugdidi\"}',41.87,42.51,'P','PPLA','GE.71','GE.71.610823',73006,'Asia/Tbilisi',1,'2015-06-03 23:00:00','2015-06-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Zest’aponi\"}',43.04,42.11,'P','PPLA2','GE.66',NULL,25891,'Asia/Tbilisi',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Ts’khinvali\"}',43.97,42.23,'P','PPL','GE.73',NULL,32180,'Asia/Tbilisi',1,'2021-11-12 23:00:00','2021-11-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Tqvarch\'eli\"}',41.68,42.84,'P','PPLA2','GE.02',NULL,17847,'Asia/Tbilisi',1,'2014-01-28 23:00:00','2014-01-28 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"T’q’ibuli\"}',43.00,42.35,'P','PPLA2','GE.66','GE.66.828313',13201,'Asia/Tbilisi',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Telavi\"}',45.47,41.92,'P','PPLA','GE.67','GE.67.7667581',21800,'Asia/Tbilisi',1,'2020-07-07 23:00:00','2020-07-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Tbilisi\"}',44.83,41.69,'P','PPLC','GE.51',NULL,1049498,'Asia/Tbilisi',1,'2019-12-02 23:00:00','2019-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Surami\"}',43.56,42.02,'P','PPL','GE.73',NULL,7492,'Asia/Tbilisi',1,'2021-11-12 23:00:00','2021-11-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Sokhumi\"}',40.99,43.01,'P','PPLA','GE.02',NULL,81546,'Asia/Tbilisi',1,'2020-10-10 23:00:00','2020-10-10 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Senak’i\"}',42.07,42.27,'P','PPLA2','GE.71',NULL,27752,'Asia/Tbilisi',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Sartich’ala\"}',45.18,41.72,'P','PPL','GE.68',NULL,6009,'Asia/Tbilisi',1,'2021-11-12 23:00:00','2021-11-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Samtredia\"}',42.34,42.15,'P','PPL','GE.66',NULL,28748,'Asia/Tbilisi',1,'2014-06-26 23:00:00','2014-06-26 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Sagarejo\"}',45.33,41.73,'P','PPLA2','GE.67',NULL,12173,'Asia/Tbilisi',1,'2019-12-02 23:00:00','2019-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Sach’khere\"}',43.42,42.35,'P','PPL','GE.66',NULL,6140,'Asia/Tbilisi',1,'2017-11-18 23:00:00','2017-11-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Rustavi\"}',44.98,41.56,'P','PPLA','GE.68',NULL,50000,'Asia/Tbilisi',1,'2019-12-02 23:00:00','2019-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Q’vareli\"}',45.82,41.95,'P','PPL','GE.67',NULL,7739,'Asia/Tbilisi',1,'2021-11-12 23:00:00','2021-11-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"P’ot’i\"}',41.67,42.14,'P','PPL','GE.71',NULL,41498,'Asia/Tbilisi',1,'2021-11-12 23:00:00','2021-11-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Ozurgeti\"}',42.01,41.92,'P','PPLA','GE.65',NULL,20636,'Asia/Tbilisi',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Och’amch’ire\"}',41.47,42.71,'P','PPLA2','GE.02',NULL,15517,'Asia/Tbilisi',1,'2020-10-31 23:00:00','2020-10-31 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Ninotsminda\"}',43.59,41.26,'P','PPLA2','GE.72','GE.72.7667662',6141,'Asia/Tbilisi',1,'2014-06-25 23:00:00','2014-06-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Mtskheta\"}',44.72,41.85,'P','PPLA','GE.69',NULL,7423,'Asia/Tbilisi',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Mart’vili\"}',42.38,42.41,'P','PPLA2','GE.71',NULL,5483,'Asia/Tbilisi',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Mart’q’opi\"}',45.02,41.79,'P','PPL','GE.68',NULL,7397,'Asia/Tbilisi',1,'2021-11-12 23:00:00','2021-11-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Marneuli\"}',44.80,41.49,'P','PPLA2','GE.68','GE.68.7667578',18755,'Asia/Tbilisi',1,'2019-12-02 23:00:00','2019-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Lent’ekhi\"}',42.72,42.79,'P','PPLA2','GE.70',NULL,10442,'Asia/Tbilisi',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Lagodekhi\"}',46.28,41.83,'P','PPLA2','GE.67',NULL,6550,'Asia/Tbilisi',1,'2020-07-07 23:00:00','2020-07-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Kutaisi\"}',42.69,42.27,'P','PPLA','GE.66',NULL,178338,'Asia/Tbilisi',1,'2014-11-01 23:00:00','2014-11-01 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Kobuleti\"}',41.78,41.82,'P','PPLA2','GE.04',NULL,18600,'Asia/Tbilisi',1,'2019-12-02 23:00:00','2019-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Khoni\"}',42.42,42.33,'P','PPL','GE.66',NULL,8987,'Asia/Tbilisi',1,'2021-11-12 23:00:00','2021-11-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Khobi\"}',41.90,42.32,'P','PPLA2','GE.71',NULL,5375,'Asia/Tbilisi',1,'2019-12-02 23:00:00','2019-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Khashuri\"}',43.60,41.99,'P','PPLA2','GE.73','GE.73.613987',27811,'Asia/Tbilisi',1,'2014-03-14 23:00:00','2014-03-14 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"K’asp’i\"}',44.43,41.93,'P','PPLA2','GE.73',NULL,14734,'Asia/Tbilisi',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Gurjaani\"}',45.80,41.74,'P','PPLA2','GE.67','GE.67.7667580',9466,'Asia/Tbilisi',1,'2019-12-02 23:00:00','2019-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Gudauta\"}',40.62,43.11,'P','PPL','GE.02',NULL,8514,'Asia/Tbilisi',1,'2021-11-12 23:00:00','2021-11-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Gudauri\"}',44.48,42.48,'P','PPL','GE.69',NULL,10000,'Asia/Tbilisi',1,'2019-12-02 23:00:00','2019-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Gori\"}',44.12,41.98,'P','PPLA','GE.73',NULL,46676,'Asia/Tbilisi',1,'2013-06-26 23:00:00','2013-06-26 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Gardabani\"}',45.09,41.46,'P','PPLA2','GE.68','GE.68.7667577',10972,'Asia/Tbilisi',1,'2019-12-02 23:00:00','2019-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Gantiadi\"}',40.08,43.38,'P','PPL','GE.02',NULL,10000,'Asia/Tbilisi',1,'2021-11-12 23:00:00','2021-11-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Gali\"}',41.74,42.63,'P','PPLA2','GE.02',NULL,11861,'Asia/Tbilisi',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Gagra\"}',40.27,43.28,'P','PPLA2','GE.02',NULL,8266,'Asia/Tbilisi',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Diok’nisi\"}',42.39,41.63,'P','PPL','GE.04',NULL,7725,'Asia/Tbilisi',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Chiat’ura\"}',43.30,42.30,'P','PPL','GE.66',NULL,12803,'Asia/Tbilisi',1,'2021-11-12 23:00:00','2021-11-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Chakvi\"}',41.73,41.73,'P','PPL','GE.04',NULL,6720,'Asia/Tbilisi',1,'2021-11-12 23:00:00','2021-11-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Borjomi\"}',43.40,41.85,'P','PPL','GE.72',NULL,10546,'Asia/Tbilisi',1,'2021-11-12 23:00:00','2021-11-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Bolnisi\"}',44.54,41.45,'P','PPLA2','GE.68','GE.68.615418',13800,'Asia/Tbilisi',1,'2020-04-06 23:00:00','2020-04-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Batumi\"}',41.63,41.64,'P','PPLA','GE.04',NULL,121806,'Asia/Tbilisi',1,'2019-02-25 23:00:00','2019-02-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Akhmet’a\"}',45.21,42.03,'P','PPLA2','GE.67',NULL,8569,'Asia/Tbilisi',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Akhaltsikhe\"}',42.98,41.64,'P','PPLA','GE.72',NULL,17298,'Asia/Tbilisi',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Akhalk’alak’i\"}',43.49,41.41,'P','PPLA2','GE.72','GE.72.615891',9800,'Asia/Tbilisi',1,'2018-02-16 23:00:00','2018-02-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Stantsiya Novyy Afon\"}',40.84,43.08,'P','PPL','GE.02',NULL,26636,'Asia/Tbilisi',1,'2013-10-28 23:00:00','2013-10-28 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Abasha\"}',42.20,42.20,'P','PPLA2','GE.71',NULL,6221,'Asia/Tbilisi',1,'2019-12-02 23:00:00','2019-12-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('GE','{\"en\":\"Ts’q’alt’ubo\"}',42.60,42.33,'P','PPLA2','GE.66','GE.66.615631',16736,'Asia/Tbilisi',1,'2019-12-15 23:00:00','2019-12-15 23:00:00');
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
