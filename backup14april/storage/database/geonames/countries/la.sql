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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LA.14','LA','{\"en\":\"Xiangkhoang\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LA.13','LA','{\"en\":\"Xiagnabouli\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LA.27','LA','{\"en\":\"Vientiane\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LA.20','LA','{\"en\":\"Savannahkhét\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LA.19','LA','{\"en\":\"Salavan\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LA.18','LA','{\"en\":\"Phôngsali\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LA.07','LA','{\"en\":\"Oudômxai\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LA.17','LA','{\"en\":\"Louangphabang\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LA.16','LA','{\"en\":\"Loungnamtha\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LA.15','LA','{\"en\":\"Khammouan\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LA.03','LA','{\"en\":\"Houaphan\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LA.02','LA','{\"en\":\"Champasak\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LA.01','LA','{\"en\":\"Attapu\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LA.26','LA','{\"en\":\"Xékong\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LA.22','LA','{\"en\":\"Bokeo\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LA.23','LA','{\"en\":\"Bolikhamsai\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LA.24','LA','{\"en\":\"Vientiane Prefecture\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LA.28','LA','{\"en\":\"Xaisomboun\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.22.0501','LA','LA.22','{\"en\":\"Muang Houayxay\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.13.0804','LA','LA.13','{\"en\":\"Muang Ngeun\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.03.0702','LA','LA.03','{\"en\":\"Muang Xiengkhor\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.13.0805','LA','LA.13','{\"en\":\"Muang Xianghon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.20.1305','LA','LA.20','{\"en\":\"Muang Xépôn\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.07.0401','LA','LA.07','{\"en\":\"Muang Xai\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.13.0801','LA','LA.13','{\"en\":\"Muang Xaignabouli\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.19.1405','LA','LA.19','{\"en\":\"Muang Vapi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.27.1005','LA','LA.27','{\"en\":\"Muang Vangviang\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.27.1002','LA','LA.27','{\"en\":\"Muang Thoulakhôm\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.28.1802','LA','LA.28','{\"en\":\"Muang Thathôm\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.26.1504','LA','LA.26','{\"en\":\"Muang Thatèng\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.19.1402','LA','LA.19','{\"en\":\"Muang Ta-Ôy\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.02.1608','LA','LA.02','{\"en\":\"Muang Soukhouma\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.20.1308','LA','LA.20','{\"en\":\"Muang Songkhon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.16.0302','LA','LA.16','{\"en\":\"Muang Sing\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.24.0107','LA','LA.24','{\"en\":\"Muang Hatxayfong\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.19.1401','LA','LA.19','{\"en\":\"Muang Saravan\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.02.1606','LA','LA.02','{\"en\":\"Muang Phônthong\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.27.1001','LA','LA.27','{\"en\":\"Muang Phôn-Hông\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.18.0201','LA','LA.18','{\"en\":\"Muang Phôngsali\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.20.1304','LA','LA.20','{\"en\":\"Muang Phin\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.14.0901','LA','LA.14','{\"en\":\"Muang Pèk\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.02.1605','LA','LA.02','{\"en\":\"Muang Pathoumphon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.02.1604','LA','LA.02','{\"en\":\"Muang Pakxong\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.02.1601','LA','LA.02','{\"en\":\"Muang Pakxé\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.22.0505','LA','LA.22','{\"en\":\"Muang Paktha\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.17.0604','LA','LA.17','{\"en\":\"Muang Pak-Ou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.13.0807','LA','LA.13','{\"en\":\"Muang Paklay\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.23.1103','LA','LA.23','{\"en\":\"Muang Pakkading\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.07.0407','LA','LA.07','{\"en\":\"Muang Pakbèng\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.20.1306','LA','LA.20','{\"en\":\"Muang Nong\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.17.0606','LA','LA.17','{\"en\":\"Muang Ngoy\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.17.0603','LA','LA.17','{\"en\":\"Muang Nan\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.07.0403','LA','LA.07','{\"en\":\"Muang Namo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.17.0605','LA','LA.17','{\"en\":\"Muang Nambak\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.02.1609','LA','LA.02','{\"en\":\"Muang Mounlapamôk\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.14.0905','LA','LA.14','{\"en\":\"Muang Mok\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.15.1202','LA','LA.15','{\"en\":\"Muang Mahaxai\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.17.0601','LA','LA.17','{\"en\":\"Muang Louangphabang\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.16.0301','LA','LA.16','{\"en\":\"Muang Louang Namtha\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.19.1407','LA','LA.19','{\"en\":\"Muang Laongam\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.19.1404','LA','LA.19','{\"en\":\"Muang Lakhonphéng\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.07.0402','LA','LA.07','{\"en\":\"Muang La\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.18.0203','LA','LA.18','{\"en\":\"Muang Khoa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.19.1406','LA','LA.19','{\"en\":\"Muang Khôngxédôn\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.02.1610','LA','LA.02','{\"en\":\"Muang Không\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.15.1201','LA','LA.15','{\"en\":\"Muang Thakhèk\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.23.1105','LA','LA.23','{\"en\":\"Muang Khamkeut\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.14.0902','LA','LA.14','{\"en\":\"Muang Kham\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.13.0808','LA','LA.13','{\"en\":\"Muang Kènthao\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.27.1004','LA','LA.27','{\"en\":\"Muang Kasi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.07.0406','LA','LA.07','{\"en\":\"Muang Houn\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.03.0705','LA','LA.03','{\"en\":\"Muang Houamuang\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.13.0803','LA','LA.13','{\"en\":\"Muang Hôngsa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.15.1204','LA','LA.15','{\"en\":\"Muang Hinboun\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.03.0710','LA','LA.03','{\"en\":\"Muang Hiam\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.15.1205','LA','LA.15','{\"en\":\"Muang Gnômmarat\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.20.1309','LA','LA.20','{\"en\":\"Muang Champhon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.02.1607','LA','LA.02','{\"en\":\"Muang Champasak\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.18.0207','LA','LA.18','{\"en\":\"Muang Boun Tai\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.23.1104','LA','LA.23','{\"en\":\"Muang Bolikhan\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.07.0405','LA','LA.07','{\"en\":\"Muang Bèng\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.02.1603','LA','LA.02','{\"en\":\"Muang Bachiangchaleunsook\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.26.1503','LA','LA.26','{\"en\":\"Muang Dakchung\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.19.1403','LA','LA.19','{\"en\":\"Muang Toumlan\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.26.1501','LA','LA.26','{\"en\":\"Muang Laman\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.01.1701','LA','LA.01','{\"en\":\"Muang Xaiséttha\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.01.1702','LA','LA.01','{\"en\":\"Muang Samakhixai\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.01.1703','LA','LA.01','{\"en\":\"Muang Sanamxai\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.01.1705','LA','LA.01','{\"en\":\"Muang Phouvong\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.01.1704','LA','LA.01','{\"en\":\"Muang Sanxai\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.02.1602','LA','LA.02','{\"en\":\"Muang Xanasômboun\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.26.1502','LA','LA.26','{\"en\":\"Muang Khaleum\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.20.1307','LA','LA.20','{\"en\":\"Muang Thapangthong\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.20.1310','LA','LA.20','{\"en\":\"Muang Xônbouli\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.19.1408','LA','LA.19','{\"en\":\"Muang Samouay\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.20.1302','LA','LA.20','{\"en\":\"Muang Outhoumphon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.20.1303','LA','LA.20','{\"en\":\"Muang Alsaphangthong\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.20.1311','LA','LA.20','{\"en\":\"Muang Xaibouli\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.20.1313','LA','LA.20','{\"en\":\"Muang Atsaphan\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.20.1312','LA','LA.20','{\"en\":\"Muang Vilabouli\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.15.1203','LA','LA.15','{\"en\":\"Muang Nongbôk\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.15.1208','LA','LA.15','{\"en\":\"Muang Xebangfai\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.15.1209','LA','LA.15','{\"en\":\"Muang Xaibouathong\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.15.1206','LA','LA.15','{\"en\":\"Muang Boualapha\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.15.1207','LA','LA.15','{\"en\":\"Muang Na Kay\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.23.1102','LA','LA.23','{\"en\":\"Muang Thaphabat\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.28.1805','LA','LA.28','{\"en\":\"Muang Longxan\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.27.1003','LA','LA.27','{\"en\":\"Muang Kèo-Oudôm\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.28.1804','LA','LA.28','{\"en\":\"Muang Hôm\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.27.1006','LA','LA.27','{\"en\":\"Muang Fuang\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.13.0806','LA','LA.13','{\"en\":\"Muang Phiang\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.13.0802','LA','LA.13','{\"en\":\"Muang Khop\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.17.0609','LA','LA.17','{\"en\":\"Muang Chomphét\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.17.0611','LA','LA.17','{\"en\":\"Muang Phou Khoun\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.17.0608','LA','LA.17','{\"en\":\"Muang Phônxai\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.17.0607','LA','LA.17','{\"en\":\"Muang Pakxèng\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.17.0610','LA','LA.17','{\"en\":\"Muang Viangkhan\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.14.0903','LA','LA.14','{\"en\":\"Muang Nonghèt\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.14.0907','LA','LA.14','{\"en\":\"Muang Phaxai\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.14.0904','LA','LA.14','{\"en\":\"Muang Khoun\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.14.0906','LA','LA.14','{\"en\":\"Muang Phou Kont\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.03.0706','LA','LA.03','{\"en\":\"Muang Xam-Tai\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.03.0704','LA','LA.03','{\"en\":\"Muang Viangxai\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.23.1106','LA','LA.23','{\"en\":\"Muang Viangthong\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.07.0404','LA','LA.07','{\"en\":\"Muang Nga\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.22.0504','LA','LA.22','{\"en\":\"Muang Pha Oudôm\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.22.0502','LA','LA.22','{\"en\":\"Muang Tônpheung\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.22.0503','LA','LA.22','{\"en\":\"Muang Meung\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.16.0305','LA','LA.16','{\"en\":\"Muang Nalè\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.16.0304','LA','LA.16','{\"en\":\"Muang Viangphoukha\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.16.0303','LA','LA.16','{\"en\":\"Muang Long\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.18.0202','LA','LA.18','{\"en\":\"Muang Mai\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.18.0205','LA','LA.18','{\"en\":\"Muang Boun-Nua\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.18.0206','LA','LA.18','{\"en\":\"Muang Gnot-Ou\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.24.0101','LA','LA.24','{\"en\":\"Muang Chanthabouli\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.24.0104','LA','LA.24','{\"en\":\"Muang Sisattanak\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.24.0103','LA','LA.24','{\"en\":\"Muang Xaiséttha\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.24.0102','LA','LA.24','{\"en\":\"Muang Sikhôttabong\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.24.0106','LA','LA.24','{\"en\":\"Muang Xaithani\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.24.0105','LA','LA.24','{\"en\":\"Muang Naxaythong\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.24.0108','LA','LA.24','{\"en\":\"Muang Sangthong\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.24.0109','LA','LA.24','{\"en\":\"Muang Maypakngum\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.18.0204','LA','LA.18','{\"en\":\"Samphanh\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.20.1315','LA','LA.20','{\"en\":\"Thaphalanxay\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.03.0707','LA','LA.03','{\"en\":\"Sopbao\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.03.0708','LA','LA.03','{\"en\":\"Muang Et\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.13.0809','LA','LA.13','{\"en\":\"Botene\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.03.0701','LA','LA.03','{\"en\":\"Xam Neua\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.23.1101','LA','LA.23','{\"en\":\"Paksane\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.27.1007','LA','LA.27','{\"en\":\"Xanakharm\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.20.1314','LA','LA.20','{\"en\":\"Muang Xayphoothong\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.20.1301','LA','LA.20','{\"en\":\"Kaysone Phomvihane\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.28.1801','LA','LA.28','{\"en\":\"Anouvong district\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.03.0703','LA','LA.03','{\"en\":\"Viengxon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.03.0709','LA','LA.03','{\"en\":\"Kuan\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.13.0810','LA','LA.13','{\"en\":\"Thongmyxay\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.13.0811','LA','LA.13','{\"en\":\"Xaysathan\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.27.1008','LA','LA.27','{\"en\":\"Mad\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.27.1009','LA','LA.27','{\"en\":\"Viengkham\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.27.1010','LA','LA.27','{\"en\":\"Hinherb\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.23.1107','LA','LA.23','{\"en\":\"Xaychamphone\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.27.1013','LA','LA.27','{\"en\":\"Muen\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.15.1210','LA','LA.15','{\"en\":\"Kounkham\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.28.1803','LA','LA.28','{\"en\":\"Longchaeng\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.17.0602','LA','LA.17','{\"en\":\"Xieng ngeun\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LA.17.0612','LA','LA.17','{\"en\":\"Phonthong\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LA','{\"en\":\"Vientiane\"}',102.60,17.97,'P','PPLC','LA.24',NULL,196731,'Asia/Vientiane',1,'2020-02-22 23:00:00','2020-02-22 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LA','{\"en\":\"Xam Nua\"}',104.05,20.42,'P','PPLA','LA.03',NULL,46800,'Asia/Vientiane',1,'2021-07-12 23:00:00','2021-07-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LA','{\"en\":\"Savannakhet\"}',104.76,16.57,'P','PPLA','LA.20',NULL,66553,'Asia/Vientiane',1,'2019-04-09 23:00:00','2019-04-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LA','{\"en\":\"Salavan\"}',106.42,15.72,'P','PPLA','LA.19',NULL,5521,'Asia/Vientiane',1,'2019-04-09 23:00:00','2019-04-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LA','{\"en\":\"Phôngsali\"}',102.10,21.68,'P','PPLA','LA.18',NULL,13500,'Asia/Vientiane',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LA','{\"en\":\"Pakse\"}',105.80,15.12,'P','PPLA','LA.02',NULL,88332,'Asia/Vientiane',1,'2016-02-26 23:00:00','2016-02-26 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LA','{\"en\":\"Muang Xay\"}',101.98,20.69,'P','PPLA','LA.07',NULL,25000,'Asia/Vientiane',1,'2012-12-14 23:00:00','2012-12-14 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LA','{\"en\":\"Sainyabuli\"}',101.71,19.26,'P','PPLA','LA.13',NULL,13500,'Asia/Vientiane',1,'2014-04-18 23:00:00','2014-04-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LA','{\"en\":\"Vangviang\"}',102.45,18.92,'P','PPL','LA.27',NULL,25000,'Asia/Vientiane',1,'2012-10-05 23:00:00','2012-10-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LA','{\"en\":\"Muang Phônsavan\"}',103.19,19.45,'P','PPLA','LA.14',NULL,37507,'Asia/Vientiane',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LA','{\"en\":\"Muang Phôn-Hông\"}',102.42,18.50,'P','PPLA','LA.27',NULL,10112,'Asia/Vientiane',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LA','{\"en\":\"Pakxan\"}',103.66,18.39,'P','PPLA','LA.23',NULL,21967,'Asia/Vientiane',1,'2019-04-09 23:00:00','2019-04-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LA','{\"en\":\"Muang Không\"}',105.85,14.12,'P','PPLA2','LA.02','LA.02.1607',15000,'Asia/Vientiane',1,'2017-12-08 23:00:00','2017-12-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LA','{\"en\":\"Thakhèk\"}',104.83,17.41,'P','PPLA','LA.15','LA.15.1201',85000,'Asia/Vientiane',1,'2017-06-02 23:00:00','2017-06-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LA','{\"en\":\"Luang Prabang\"}',102.14,19.89,'P','PPLA','LA.17',NULL,47378,'Asia/Vientiane',1,'2015-09-04 23:00:00','2015-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LA','{\"en\":\"Luang Namtha\"}',101.40,20.95,'P','PPLA','LA.16',NULL,3225,'Asia/Vientiane',1,'2016-12-16 23:00:00','2016-12-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LA','{\"en\":\"Champasak\"}',105.88,14.89,'P','PPL','LA.02',NULL,12994,'Asia/Vientiane',1,'2016-07-03 23:00:00','2016-07-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LA','{\"en\":\"Ban Houayxay\"}',100.42,20.27,'P','PPLA','LA.22',NULL,12500,'Asia/Vientiane',1,'2019-09-26 23:00:00','2019-09-26 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LA','{\"en\":\"Attapeu\"}',106.83,14.81,'P','PPLA','LA.01',NULL,4297,'Asia/Vientiane',1,'2017-10-06 23:00:00','2017-10-06 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LA','{\"en\":\"Ban Houakhoua\"}',100.45,20.25,'P','PPL','LA.22',NULL,15500,'Asia/Vientiane',1,'2013-08-12 23:00:00','2013-08-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LA','{\"en\":\"Sekong\"}',106.72,15.35,'P','PPLA','LA.26',NULL,0,'Asia/Vientiane',1,'2019-04-21 23:00:00','2019-04-21 23:00:00');
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
