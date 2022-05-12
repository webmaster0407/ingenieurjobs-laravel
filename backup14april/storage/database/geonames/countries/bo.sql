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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BO.09','BO','{\"en\":\"Tarija\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BO.08','BO','{\"en\":\"Santa Cruz\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BO.07','BO','{\"en\":\"Potosí\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BO.06','BO','{\"en\":\"Pando\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BO.05','BO','{\"en\":\"Oruro\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BO.04','BO','{\"en\":\"La Paz\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BO.02','BO','{\"en\":\"Cochabamba\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BO.01','BO','{\"en\":\"Chuquisaca\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('BO.03','BO','{\"en\":\"El Beni\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.08.0705','BO','BO.08','{\"en\":\"Provincia Chiquitos\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.08.0712','BO','BO.08','{\"en\":\"Provincia Ángel Sandoval\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.01.0103','BO','BO.01','{\"en\":\"Provincia Zudáñez\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.01.0106','BO','BO.01','{\"en\":\"Provincia Yamparáez\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.03.0804','BO','BO.03','{\"en\":\"Provincia Yacuma\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.08.0702','BO','BO.08','{\"en\":\"Provincia Warnes\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.08.0703','BO','BO.08','{\"en\":\"Provincia Velasco\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.08.0708','BO','BO.08','{\"en\":\"Provincia Vallegrande\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.03.0802','BO','BO.03','{\"en\":\"Provincia Vaca Diez\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.01.0104','BO','BO.01','{\"en\":\"Provincia Tomina\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.07.0501','BO','BO.07','{\"en\":\"Provincia Tomás Frías\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.05.0411','BO','BO.05','{\"en\":\"Tomás Barrón\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.02.0311','BO','BO.02','{\"en\":\"Provincia Tapacarí\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.04.0211','BO','BO.04','{\"en\":\"Provincia Sud Yungas\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.07.0510','BO','BO.07','{\"en\":\"Sur Lípez\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.01.0109','BO','BO.01','{\"en\":\"Sur Cinti\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.07.0508','BO','BO.07','{\"en\":\"Sur Chichas\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.05.0410','BO','BO.05','{\"en\":\"Saucarí\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.08.0706','BO','BO.08','{\"en\":\"Provincia Sara\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.08.3904660','BO','BO.08','{\"en\":\"Provincia Obispo Santistevan\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.05.0413','BO','BO.05','{\"en\":\"Provincia San Pedro de Totora\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.05.0404','BO','BO.05','{\"en\":\"Provincia Sajama\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.07.0503','BO','BO.07','{\"en\":\"Provincia Cornelio Saavedra\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.07.0502','BO','BO.07','{\"en\":\"Provincia Rafael Bustillo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.02.0309','BO','BO.02','{\"en\":\"Provincia Quillacollo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.07.0512','BO','BO.07','{\"en\":\"Provincia Antonio Quijarro\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.02.0314','BO','BO.02','{\"en\":\"Provincia Punata\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.05.0406','BO','BO.05','{\"en\":\"Provincia Poopó\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.05.0407','BO','BO.05','{\"en\":\"Provincia Pantaleón Dalence\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.04.0203','BO','BO.04','{\"en\":\"Provincia Pacajes\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.01.0101','BO','BO.01','{\"en\":\"Provincia Oropeza\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.04.0202','BO','BO.04','{\"en\":\"Provincia Omasuyos\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.09.0606','BO','BO.09','{\"en\":\"Provincia O’Connor\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.08.0711','BO','BO.08','{\"en\":\"Provincia Ñuflo de Chávez\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.04.0214','BO','BO.04','{\"en\":\"Provincia Nor Yungas\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.07.0509','BO','BO.07','{\"en\":\"Provincia Nor Lípez\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.01.0107','BO','BO.01','{\"en\":\"Provincia Nor Cinti\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.07.0506','BO','BO.07','{\"en\":\"Provincia Nor Chichas\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.06.0901','BO','BO.06','{\"en\":\"Provincia Nicolás Suárez\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.04.0201','BO','BO.04','{\"en\":\"Provincia Murillo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.04.0205','BO','BO.04','{\"en\":\"Provincia Muñecas\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.03.0805','BO','BO.03','{\"en\":\"Provincia Moxos\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.07.0515','BO','BO.07','{\"en\":\"Provincia Modesto Omiste\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.02.0313','BO','BO.02','{\"en\":\"Provincia Mizque\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.09.0605','BO','BO.09','{\"en\":\"Provincia Méndez\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.03.0806','BO','BO.03','{\"en\":\"Provincia Marbán\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.06.0902','BO','BO.06','{\"en\":\"Provincia Manuripi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.08.0713','BO','BO.08','{\"en\":\"Provincia Manuel María Caballero\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.04.0217','BO','BO.04','{\"en\":\"Provincia Manco Kapac\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.03.0807','BO','BO.03','{\"en\":\"Provincia Mamoré\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.06.0903','BO','BO.06','{\"en\":\"Provincia Madre de Dios\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.01.0110','BO','BO.01','{\"en\":\"Provincia Luis Calvo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.04.0212','BO','BO.04','{\"en\":\"Provincia Los Andes\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.04.0209','BO','BO.04','{\"en\":\"Provincia Loayza\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.05.0405','BO','BO.05','{\"en\":\"Sud Carangas Province\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.07.3911502','BO','BO.07','{\"en\":\"José María Linares\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.04.0206','BO','BO.04','{\"en\":\"Provincia Larecaja\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.05.0408','BO','BO.05','{\"en\":\"Provincia Ladislao Cabrera\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.04.0215','BO','BO.04','{\"en\":\"Provincia Abel Iturralde\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.03.0808','BO','BO.03','{\"en\":\"Provincia Iténez\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.04.0210','BO','BO.04','{\"en\":\"Provincia Inquisivi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.04.0208','BO','BO.04','{\"en\":\"Provincia Ingavi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.08.0704','BO','BO.08','{\"en\":\"Provincia Ichilo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.01.0105','BO','BO.01','{\"en\":\"Provincia Hernando Siles\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.04.0218','BO','BO.04','{\"en\":\"Provincia Gualberto Villarroel\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.09.0603','BO','BO.09','{\"en\":\"Provincia Gran Chaco\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.02.0308','BO','BO.02','{\"en\":\"Provincia Germán Jordán\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.03.3915596','BO','BO.03','{\"en\":\"Provincia General José Ballivián\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.06.3915598','BO','BO.06','{\"en\":\"Federico Román\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.07.3915603','BO','BO.07','{\"en\":\"Provincia General Bilbao\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.04.0207','BO','BO.04','{\"en\":\"Provincia Franz Tamayo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.08.0709','BO','BO.08','{\"en\":\"Provincia Florida\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.02.0304','BO','BO.02','{\"en\":\"Provincia Esteban Arze\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.07.0514','BO','BO.07','{\"en\":\"Provincia Daniel Campos\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.08.0707','BO','BO.08','{\"en\":\"Provincia Cordillera\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.07.0504','BO','BO.07','{\"en\":\"Provincia Chayanta\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.07.0505','BO','BO.07','{\"en\":\"Provincia Charcas\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.02.0310','BO','BO.02','{\"en\":\"Chapare\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.09.0601','BO','BO.09','{\"en\":\"Cercado\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.05.0401','BO','BO.05','{\"en\":\"Provincia Cercado\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.02.0301','BO','BO.02','{\"en\":\"Provincia Cercado\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.03.0801','BO','BO.03','{\"en\":\"Provincia Cercado\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.02.0312','BO','BO.02','{\"en\":\"Provincia Carrasco\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.05.3922026','BO','BO.05','{\"en\":\"Provincia Carangas\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.02.0307','BO','BO.02','{\"en\":\"Provincia Capinota\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.02.0302','BO','BO.02','{\"en\":\"Provincia Campero\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.04.0204','BO','BO.04','{\"en\":\"Provincia Camacho\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.01.0108','BO','BO.01','{\"en\":\"Provincia Belisario Boeto\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.04.0216','BO','BO.04','{\"en\":\"Provincia Bautista Saavedra\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.01.0102','BO','BO.01','{\"en\":\"Provincia Azurduy\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.02.0303','BO','BO.02','{\"en\":\"Provincia Ayopaya\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.09.0604','BO','BO.09','{\"en\":\"Provincia Avilés\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.05.0402','BO','BO.05','{\"en\":\"Provincia Abaroa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.05.3923586','BO','BO.05','{\"en\":\"Provincia Sabaya\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.02.0306','BO','BO.02','{\"en\":\"Provincia Arque\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.04.0213','BO','BO.04','{\"en\":\"Provincia Aroma\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.09.0602','BO','BO.09','{\"en\":\"Provincia Arce\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.02.0305','BO','BO.02','{\"en\":\"Provincia Arani\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.08.0701','BO','BO.08','{\"en\":\"Provincia Andrés Ibáñez\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.07.0507','BO','BO.07','{\"en\":\"Alonso de Ibáñez\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.06.0904','BO','BO.06','{\"en\":\"Provincia Abuná\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.02.7576102','BO','BO.02','{\"en\":\"Bolivar\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.02.8335405','BO','BO.02','{\"en\":\"Tiraque Province\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.05.10400355','BO','BO.05','{\"en\":\"Nor Carangas Province\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.05.10400859','BO','BO.05','{\"en\":\"Sebastian Pagador Province\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.04.11184247','BO','BO.04','{\"en\":\"Caranavi\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.04.11184248','BO','BO.04','{\"en\":\"José Manuel Pando\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.05.11184249','BO','BO.05','{\"en\":\"Puerto de Mejillones\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.05.11184250','BO','BO.05','{\"en\":\"Litoral de Atacama\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.07.11184251','BO','BO.07','{\"en\":\"Enrique Baldivieso\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.08.11184252','BO','BO.08','{\"en\":\"German Busch\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('BO.08.11184253','BO','BO.08','{\"en\":\"Guarayos\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"San Matías\"}',-58.40,-16.37,'P','PPL','BO.08','BO.08.0712',6352,'America/La_Paz',1,'2017-02-11 23:00:00','2017-02-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Roboré\"}',-59.76,-18.33,'P','PPL','BO.08','BO.08.0705',9882,'America/La_Paz',1,'2017-02-05 23:00:00','2017-02-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Puerto Quijarro\"}',-57.77,-17.78,'P','PPL','BO.08',NULL,10392,'America/La_Paz',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Yacuiba\"}',-63.68,-22.02,'P','PPLA2','BO.09','BO.09.0603',82803,'America/La_Paz',1,'2014-11-29 23:00:00','2014-11-29 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Warnes\"}',-63.17,-17.52,'P','PPL','BO.08',NULL,22036,'America/La_Paz',1,'2015-06-11 23:00:00','2015-06-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Vinto\"}',-66.32,-17.39,'P','PPL','BO.02',NULL,58739,'America/La_Paz',1,'2021-11-09 23:00:00','2021-11-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Villazón\"}',-65.59,-22.09,'P','PPL','BO.07',NULL,30253,'America/La_Paz',1,'2019-03-31 23:00:00','2019-03-31 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Villa Yapacaní\"}',-63.83,-17.40,'P','PPL','BO.08',NULL,18187,'America/La_Paz',1,'2012-02-01 23:00:00','2012-02-01 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Villamontes\"}',-63.47,-21.26,'P','PPL','BO.09',NULL,18761,'America/La_Paz',1,'2013-01-10 23:00:00','2013-01-10 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Viacha\"}',-68.30,-16.65,'P','PPLA2','BO.04','BO.04.0208',86218,'America/La_Paz',1,'2021-11-09 23:00:00','2021-11-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Vallegrande\"}',-64.11,-18.49,'P','PPL','BO.08',NULL,8422,'America/La_Paz',1,'2013-01-10 23:00:00','2013-01-10 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Uyuni\"}',-66.83,-20.46,'P','PPL','BO.07',NULL,10293,'America/La_Paz',1,'2013-10-26 23:00:00','2013-10-26 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Tupiza\"}',-65.72,-21.44,'P','PPL','BO.07',NULL,22233,'America/La_Paz',1,'2013-01-10 23:00:00','2013-01-10 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Trinidad\"}',-64.90,-14.83,'P','PPLA','BO.03',NULL,84259,'America/La_Paz',1,'2014-06-01 23:00:00','2014-06-01 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Tiquipaya\"}',-66.22,-17.34,'P','PPL','BO.02',NULL,62675,'America/La_Paz',1,'2021-11-09 23:00:00','2021-11-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Tarija\"}',-64.73,-21.54,'P','PPLA','BO.09',NULL,159269,'America/La_Paz',1,'2010-01-28 23:00:00','2010-01-28 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Tarata\"}',-66.02,-17.61,'P','PPL','BO.02',NULL,8043,'America/La_Paz',1,'2013-05-07 23:00:00','2013-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Sucre\"}',-65.26,-19.03,'P','PPLC','BO.01',NULL,224838,'America/La_Paz',1,'2021-05-27 23:00:00','2021-05-27 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Sipe Sipe\"}',-66.36,-17.45,'P','PPL','BO.02',NULL,47000,'America/La_Paz',1,'2021-11-09 23:00:00','2021-11-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Santiago del Torno\"}',-63.38,-17.99,'P','PPL','BO.08',NULL,15543,'America/La_Paz',1,'2013-05-07 23:00:00','2013-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Santa Rosa del Sara\"}',-63.60,-17.11,'P','PPL','BO.08',NULL,5251,'America/La_Paz',1,'2013-05-07 23:00:00','2013-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Santa Cruz de la Sierra\"}',-63.18,-17.79,'P','PPLA','BO.08',NULL,1831434,'America/La_Paz',1,'2021-11-09 23:00:00','2021-11-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Santa Ana de Yacuma\"}',-65.43,-13.74,'P','PPL','BO.03',NULL,12783,'America/La_Paz',1,'2020-10-03 23:00:00','2020-10-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"San Pedro\"}',-68.85,-16.24,'P','PPL','BO.04',NULL,5002,'America/La_Paz',1,'2011-12-05 23:00:00','2011-12-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"San Julian\"}',-62.87,-17.78,'P','PPL','BO.08',NULL,7706,'America/La_Paz',1,'2019-04-10 23:00:00','2019-04-10 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"San Ignacio de Velasco\"}',-60.95,-16.37,'P','PPL','BO.08',NULL,23569,'America/La_Paz',1,'2017-05-07 23:00:00','2017-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Sacaba\"}',-66.04,-17.40,'P','PPL','BO.02',NULL,180726,'America/La_Paz',1,'2021-11-09 23:00:00','2021-11-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Rurrenabaque\"}',-67.53,-14.44,'P','PPL','BO.03',NULL,11749,'America/La_Paz',1,'2008-03-21 23:00:00','2008-03-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Riberalta\"}',-66.06,-11.01,'P','PPL','BO.03','BO.03.0802',74014,'America/La_Paz',1,'2016-12-20 23:00:00','2016-12-20 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Reyes\"}',-67.34,-14.30,'P','PPL','BO.03','BO.03.3915596',7376,'America/La_Paz',1,'2015-06-12 23:00:00','2015-06-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Quillacollo\"}',-66.28,-17.39,'P','PPL','BO.02',NULL,172405,'America/La_Paz',1,'2021-11-09 23:00:00','2021-11-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Punata\"}',-65.83,-17.54,'P','PPL','BO.02',NULL,15194,'America/La_Paz',1,'2013-05-07 23:00:00','2013-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Potosí\"}',-65.75,-19.58,'P','PPLA','BO.07',NULL,141251,'America/La_Paz',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Portachuelo\"}',-63.39,-17.35,'P','PPL','BO.08',NULL,11485,'America/La_Paz',1,'2013-05-07 23:00:00','2013-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Patacamaya\"}',-67.92,-17.24,'P','PPL','BO.04',NULL,12260,'America/La_Paz',1,'2013-05-07 23:00:00','2013-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Pailón\"}',-62.75,-17.65,'P','PPL','BO.08',NULL,9304,'America/La_Paz',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Oruro\"}',-67.15,-17.98,'P','PPLA','BO.05',NULL,208684,'America/La_Paz',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Montero\"}',-63.25,-17.34,'P','PPL','BO.08',NULL,88616,'America/La_Paz',1,'2013-05-07 23:00:00','2013-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Monteagudo\"}',-63.95,-19.80,'P','PPL','BO.01',NULL,8289,'America/La_Paz',1,'2013-01-10 23:00:00','2013-01-10 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Mizque\"}',-65.34,-17.94,'P','PPL','BO.02',NULL,30481,'America/La_Paz',1,'2009-10-15 23:00:00','2009-10-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Mineros\"}',-63.23,-17.12,'P','PPL','BO.08',NULL,14385,'America/La_Paz',1,'2018-12-04 23:00:00','2018-12-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Mecapaca\"}',-68.02,-16.67,'P','PPL','BO.04',NULL,13289,'America/La_Paz',1,'2021-11-09 23:00:00','2021-11-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Llallagua\"}',-66.58,-18.42,'P','PPL','BO.07',NULL,28069,'America/La_Paz',1,'2013-01-10 23:00:00','2013-01-10 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"La Paz\"}',-68.15,-16.50,'P','PPLG','BO.04',NULL,2004652,'America/La_Paz',1,'2021-11-26 23:00:00','2021-11-26 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Laja\"}',-68.38,-16.53,'P','PPLA3','BO.04','BO.04.0212',18023,'America/La_Paz',1,'2021-11-09 23:00:00','2021-11-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"La Bélgica\"}',-63.22,-17.55,'P','PPL','BO.08',NULL,5501,'America/La_Paz',1,'2012-01-18 23:00:00','2012-01-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Huanuni\"}',-66.84,-18.29,'P','PPL','BO.05',NULL,15492,'America/La_Paz',1,'2019-03-31 23:00:00','2019-03-31 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Guayaramerín\"}',-65.36,-10.83,'P','PPL','BO.03','BO.03.0802',36008,'America/La_Paz',1,'2017-10-01 23:00:00','2017-10-01 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Cotoca\"}',-63.05,-17.82,'P','PPL','BO.08',NULL,18347,'America/La_Paz',1,'2019-02-20 23:00:00','2019-02-20 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Concepción\"}',-60.90,-16.43,'P','PPL','BO.08',NULL,6900,'America/La_Paz',1,'2019-04-10 23:00:00','2019-04-10 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Colchani\"}',-66.93,-20.30,'P','PPL','BO.07',NULL,11988,'America/La_Paz',1,'2012-01-18 23:00:00','2012-01-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Colcapirhua\"}',-66.24,-17.39,'P','PPL','BO.02',NULL,52732,'America/La_Paz',1,'2021-11-09 23:00:00','2021-11-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Cochabamba\"}',-66.16,-17.39,'P','PPLA','BO.02',NULL,841276,'America/La_Paz',1,'2021-11-09 23:00:00','2021-11-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Cobija\"}',-68.77,-11.03,'P','PPLA','BO.06',NULL,26585,'America/La_Paz',1,'2010-08-20 23:00:00','2010-08-20 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Cliza\"}',-65.93,-17.59,'P','PPL','BO.02',NULL,8654,'America/La_Paz',1,'2013-05-07 23:00:00','2013-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Chimoré\"}',-65.15,-16.99,'P','PPL','BO.02',NULL,5147,'America/La_Paz',1,'2016-10-01 23:00:00','2016-10-01 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Challapata\"}',-66.77,-18.90,'P','PPL','BO.05',NULL,8016,'America/La_Paz',1,'2013-01-10 23:00:00','2013-01-10 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Caranavi\"}',-67.57,-15.83,'P','PPLA2','BO.04','BO.04.11184247',45747,'America/La_Paz',1,'2021-11-09 23:00:00','2021-11-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Capinota\"}',-66.26,-17.71,'P','PPL','BO.02',NULL,5157,'America/La_Paz',1,'2013-05-07 23:00:00','2013-05-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Camiri\"}',-63.52,-20.04,'P','PPL','BO.08',NULL,27961,'America/La_Paz',1,'2013-01-10 23:00:00','2013-01-10 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Bermejo\"}',-64.34,-22.73,'P','PPL','BO.09',NULL,35411,'America/La_Paz',1,'2017-12-13 23:00:00','2017-12-13 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Ascensión\"}',-63.08,-15.70,'P','PPL','BO.08',NULL,14429,'America/La_Paz',1,'2020-06-10 23:00:00','2020-06-10 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Aiquile\"}',-65.18,-18.20,'P','PPL','BO.02',NULL,8224,'America/La_Paz',1,'2009-10-15 23:00:00','2009-10-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Achocalla\"}',-68.17,-16.58,'P','PPL','BO.04',NULL,19583,'America/La_Paz',1,'2021-11-09 23:00:00','2021-11-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Achacachi\"}',-68.68,-16.05,'P','PPL','BO.04',NULL,8447,'America/La_Paz',1,'2012-01-18 23:00:00','2012-01-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"Ascención de Guarayos\"}',-63.19,-15.89,'P','PPLL','BO.08',NULL,18816,'America/La_Paz',1,'2017-12-12 23:00:00','2017-12-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('BO','{\"en\":\"San Borja\"}',-66.75,-14.85,'P','PPL','BO.03',NULL,24610,'America/La_Paz',1,'2020-01-23 23:00:00','2020-01-23 23:00:00');
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
