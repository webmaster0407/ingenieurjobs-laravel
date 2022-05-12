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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('UY.19','UY','{\"en\":\"Treinta y Tres\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('UY.18','UY','{\"en\":\"Tacuarembó\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('UY.17','UY','{\"en\":\"Soriano\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('UY.16','UY','{\"en\":\"San José\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('UY.15','UY','{\"en\":\"Salto\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('UY.14','UY','{\"en\":\"Rocha\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('UY.13','UY','{\"en\":\"Rivera\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('UY.12','UY','{\"en\":\"Río Negro\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('UY.11','UY','{\"en\":\"Paysandú\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('UY.10','UY','{\"en\":\"Montevideo\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('UY.09','UY','{\"en\":\"Maldonado\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('UY.08','UY','{\"en\":\"Lavalleja\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('UY.07','UY','{\"en\":\"Florida\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('UY.06','UY','{\"en\":\"Flores\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('UY.05','UY','{\"en\":\"Durazno\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('UY.04','UY','{\"en\":\"Colonia\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('UY.03','UY','{\"en\":\"Cerro Largo\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('UY.02','UY','{\"en\":\"Canelones\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('UY.01','UY','{\"en\":\"Artigas\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.02.12','UY','UY.02','{\"en\":\"Las Piedras\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.02.06','UY','UY.02','{\"en\":\"Canelones\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.02.24','UY','UY.02','{\"en\":\"San Ramon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.16.01','UY','UY.16','{\"en\":\"Ciudad Del Plata\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.12.01','UY','UY.12','{\"en\":\"Nuevo Berlin\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.09.04','UY','UY.09','{\"en\":\"Pan De Azucar\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.09.01','UY','UY.09','{\"en\":\"Aiguá\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.09.02','UY','UY.09','{\"en\":\"Garzón\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.09.08','UY','UY.09','{\"en\":\"Solis Grande\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.12.02','UY','UY.12','{\"en\":\"Young\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.05.02','UY','UY.05','{\"en\":\"Villa Carmen\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.09.07','UY','UY.09','{\"en\":\"San Carlos\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.10.08','UY','UY.10','{\"en\":\"Municipio G\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.10.05','UY','UY.10','{\"en\":\"Municipio D\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.10.07','UY','UY.10','{\"en\":\"Municipio F\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.10.06','UY','UY.10','{\"en\":\"Municipio E\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.10.01','UY','UY.10','{\"en\":\"Municipio A\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.15.03','UY','UY.15','{\"en\":\"Lavalleja\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.15.05','UY','UY.15','{\"en\":\"San Antonio\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.15.04','UY','UY.15','{\"en\":\"Mataojo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.18.01','UY','UY.18','{\"en\":\"Paso De Los Toros\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.11.05','UY','UY.11','{\"en\":\"Lorenzo Geyres\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.11.06','UY','UY.11','{\"en\":\"Tambores\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.08.03','UY','UY.08','{\"en\":\"Jose Batlle Y Ordoñez\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.03.02','UY','UY.03','{\"en\":\"Isidoro Noblia\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.03.03','UY','UY.03','{\"en\":\"Acegua\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.03.04','UY','UY.03','{\"en\":\"Tupambae\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.03.05','UY','UY.03','{\"en\":\"Placido Rosas\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.03.08','UY','UY.03','{\"en\":\"Ramon Trigo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.03.09','UY','UY.03','{\"en\":\"Fraile Muerto\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.16.03','UY','UY.16','{\"en\":\"Ecilda Paullier\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.19.01','UY','UY.19','{\"en\":\"Santa Clara De Olimar\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.19.02','UY','UY.19','{\"en\":\"Municipio de Vergara\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.18.02','UY','UY.18','{\"en\":\"San Gregorio De Polanco\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.11.02','UY','UY.11','{\"en\":\"Guichon\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.11.03','UY','UY.11','{\"en\":\"Quebracho\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.14.03','UY','UY.14','{\"en\":\"La Paloma\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.14.04','UY','UY.14','{\"en\":\"Lascano\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.15.02','UY','UY.15','{\"en\":\"Villa Constitucion\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.15.01','UY','UY.15','{\"en\":\"Pueblo Belen\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.05.01','UY','UY.05','{\"en\":\"Sarandí Del Yí\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.13.01','UY','UY.13','{\"en\":\"Tranqueras\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.02.03','UY','UY.02','{\"en\":\"Aguas Corrientes\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.02.08','UY','UY.02','{\"en\":\"Ciudad De La Costa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.04.03','UY','UY.04','{\"en\":\"Nueva Palmira\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.02.30','UY','UY.02','{\"en\":\"Toledo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.16.04','UY','UY.16','{\"en\":\"Rodriguez\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.07.03','UY','UY.07','{\"en\":\"Fray Marcos\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.02.15','UY','UY.02','{\"en\":\"Pando\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.04.05','UY','UY.04','{\"en\":\"Tarariras\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.02.19','UY','UY.02','{\"en\":\"Salinas\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.02.11','UY','UY.02','{\"en\":\"La Paz\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.01.03','UY','UY.01','{\"en\":\"Tomas Gomensoro\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.01.02','UY','UY.01','{\"en\":\"Bella Union\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.02.01','UY','UY.02','{\"en\":\"Nicolich\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.17.02','UY','UY.17','{\"en\":\"Dolores\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.17.03','UY','UY.17','{\"en\":\"Jose Enrique Rodo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.02.16','UY','UY.02','{\"en\":\"Parque Del Plata\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.17.01','UY','UY.17','{\"en\":\"Cardona\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.16.02','UY','UY.16','{\"en\":\"Libertad\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.02.31','UY','UY.02','{\"en\":\"18 De Mayo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.04.02','UY','UY.04','{\"en\":\"Nueva Helvecia\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.02.10','UY','UY.02','{\"en\":\"La Floresta\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.13.02','UY','UY.13','{\"en\":\"Vichadero\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.13.03','UY','UY.13','{\"en\":\"Minas De Corrales\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.08.01','UY','UY.08','{\"en\":\"Jose Pedro Varela\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.08.02','UY','UY.08','{\"en\":\"Solis De Mataojo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.03.01','UY','UY.03','{\"en\":\"Rio Branco\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.11.01','UY','UY.11','{\"en\":\"Porvenir\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.11.04','UY','UY.11','{\"en\":\"Piedras Coloradas\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.02.14','UY','UY.02','{\"en\":\"Montes\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.02.13','UY','UY.02','{\"en\":\"Migues\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.02.18','UY','UY.02','{\"en\":\"Progreso\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.02.23','UY','UY.02','{\"en\":\"San Jacinto\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.02.05','UY','UY.02','{\"en\":\"Barros Blancos\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.02.20','UY','UY.02','{\"en\":\"San Antonio\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.09.06','UY','UY.09','{\"en\":\"Punta Del Este\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.02.22','UY','UY.02','{\"en\":\"San Bautista\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.10.04','UY','UY.10','{\"en\":\"Municipio Ch\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.10.02','UY','UY.10','{\"en\":\"Municipio B\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.02.25','UY','UY.02','{\"en\":\"Santa Rosa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.03.06','UY','UY.03','{\"en\":\"Arevalo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.02.26','UY','UY.02','{\"en\":\"Sauce\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.14.01','UY','UY.14','{\"en\":\"Castillos\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.12.03','UY','UY.12','{\"en\":\"San Javier\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.07.02','UY','UY.07','{\"en\":\"Sarandí Grande\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.07.01','UY','UY.07','{\"en\":\"Casupá\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.02.09','UY','UY.02','{\"en\":\"Empalme Olmos\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.02.27','UY','UY.02','{\"en\":\"Soca\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.02.17','UY','UY.02','{\"en\":\"Paso Carrasco\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.06.01','UY','UY.06','{\"en\":\"Ismael Cortinas\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.02.29','UY','UY.02','{\"en\":\"Tala\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.02.28','UY','UY.02','{\"en\":\"Joaquin Suarez\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.09.05','UY','UY.09','{\"en\":\"Piriapolis\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.04.07','UY','UY.04','{\"en\":\"Ombues De Lavalle\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.04.08','UY','UY.04','{\"en\":\"Florencio Sanchez\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.04.09','UY','UY.04','{\"en\":\"Colonia Valdense\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.18.03','UY','UY.18','{\"en\":\"Ansina\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.11.07','UY','UY.11','{\"en\":\"Chapicuy\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.02.04','UY','UY.02','{\"en\":\"Atlantida\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.09.03','UY','UY.09','{\"en\":\"Maldonado\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.04.04','UY','UY.04','{\"en\":\"Rosario\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.10.03','UY','UY.10','{\"en\":\"Municipio C\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.02.02','UY','UY.02','{\"en\":\"Santa Lucia\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.02.07','UY','UY.02','{\"en\":\"Los Cerrillos\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.14.02','UY','UY.14','{\"en\":\"Chuy\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.15.06','UY','UY.15','{\"en\":\"Rincon De Valentin\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.03.07','UY','UY.03','{\"en\":\"Arbolito\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.04.01','UY','UY.04','{\"en\":\"Carmelo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.04.06','UY','UY.04','{\"en\":\"Juan Lacaze\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.17.04','UY','UY.17','{\"en\":\"Palmitas\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('UY.01.01','UY','UY.01','{\"en\":\"Baltasar Brum\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Young\"}',-57.63,-32.70,'P','PPL','UY.12','UY.12.02',16756,'America/Montevideo',1,'2021-12-18 23:00:00','2021-12-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Trinidad\"}',-56.90,-33.52,'P','PPLA','UY.06',NULL,21429,'America/Montevideo',1,'2013-08-05 23:00:00','2013-08-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Treinta y Tres\"}',-54.38,-33.23,'P','PPLA','UY.19',NULL,25653,'America/Montevideo',1,'2017-03-13 23:00:00','2017-03-13 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Tranqueras\"}',-55.75,-31.20,'P','PPL','UY.13','UY.13.01',7235,'America/Montevideo',1,'2021-12-17 23:00:00','2021-12-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Tarariras\"}',-57.62,-34.27,'P','PPL','UY.04','UY.04.05',6632,'America/Montevideo',1,'2021-12-17 23:00:00','2021-12-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Tacuarembó\"}',-55.98,-31.72,'P','PPLA','UY.18',NULL,51854,'America/Montevideo',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Sauce\"}',-56.06,-34.65,'P','PPL','UY.02','UY.02.26',5910,'America/Montevideo',1,'2019-03-29 23:00:00','2019-03-29 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Sarandí Grande\"}',-56.33,-33.73,'P','PPL','UY.07','UY.07.02',6130,'America/Montevideo',1,'2021-12-18 23:00:00','2021-12-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Sarandí del Yi\"}',-55.63,-33.35,'P','PPL','UY.05','UY.05.01',7176,'America/Montevideo',1,'2021-12-17 23:00:00','2021-12-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Santa Lucía\"}',-56.39,-34.45,'P','PPL','UY.02','UY.02.02',16438,'America/Montevideo',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"San Ramón\"}',-55.96,-34.29,'P','PPL','UY.02','UY.02.24',7133,'America/Montevideo',1,'2021-12-18 23:00:00','2021-12-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"San José de Mayo\"}',-56.71,-34.34,'P','PPLA','UY.16',NULL,36529,'America/Montevideo',1,'2012-01-15 23:00:00','2012-01-15 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"San Carlos\"}',-54.92,-34.79,'P','PPL','UY.09','UY.09.07',27471,'America/Montevideo',1,'2021-12-18 23:00:00','2021-12-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Salto\"}',-57.97,-31.38,'P','PPLA','UY.15',NULL,99823,'America/Montevideo',1,'2012-02-13 23:00:00','2012-02-13 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Rosario\"}',-57.35,-34.32,'P','PPL','UY.04','UY.04.04',10085,'America/Montevideo',1,'2021-12-17 23:00:00','2021-12-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Rocha\"}',-54.33,-34.48,'P','PPLA','UY.14',NULL,25515,'America/Montevideo',1,'2012-02-16 23:00:00','2012-02-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Rivera\"}',-55.55,-30.91,'P','PPLA','UY.13',NULL,64631,'America/Montevideo',1,'2012-02-16 23:00:00','2012-02-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Río Branco\"}',-53.39,-32.60,'P','PPL','UY.03','UY.03.01',14604,'America/Montevideo',1,'2021-12-17 23:00:00','2021-12-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Punta del Este\"}',-54.93,-34.95,'P','PPL','UY.09','UY.09.06',9277,'America/Montevideo',1,'2021-12-18 23:00:00','2021-12-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Progreso\"}',-56.22,-34.67,'P','PPL','UY.02','UY.02.18',16244,'America/Montevideo',1,'2021-12-17 23:00:00','2021-12-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Piriápolis\"}',-55.27,-34.86,'P','PPL','UY.09','UY.09.05',7968,'America/Montevideo',1,'2019-03-30 23:00:00','2019-03-30 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Paysandú\"}',-58.08,-32.32,'P','PPLA','UY.11',NULL,73249,'America/Montevideo',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Paso de los Toros\"}',-56.52,-32.82,'P','PPL','UY.18','UY.18.01',12985,'America/Montevideo',1,'2021-12-17 23:00:00','2021-12-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Paso de Carrasco\"}',-56.05,-34.86,'P','PPL','UY.02','UY.02.17',15393,'America/Montevideo',1,'2018-02-21 23:00:00','2018-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Pando\"}',-55.96,-34.72,'P','PPL','UY.02','UY.02.15',24047,'America/Montevideo',1,'2019-03-29 23:00:00','2019-03-29 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Pan de Azúcar\"}',-55.24,-34.78,'P','PPL','UY.09','UY.09.04',6597,'America/Montevideo',1,'2021-12-18 23:00:00','2021-12-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Nueva Palmira\"}',-58.41,-33.87,'P','PPL','UY.04','UY.04.03',9857,'America/Montevideo',1,'2021-12-18 23:00:00','2021-12-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Nueva Helvecia\"}',-57.23,-34.30,'P','PPL','UY.04','UY.04.02',10054,'America/Montevideo',1,'2021-12-17 23:00:00','2021-12-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Montevideo\"}',-56.19,-34.90,'P','PPLC','UY.10','UY.10.02',1270737,'America/Montevideo',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Minas\"}',-55.24,-34.38,'P','PPLA','UY.08',NULL,38025,'America/Montevideo',1,'2012-02-16 23:00:00','2012-02-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Mercedes\"}',-58.03,-33.25,'P','PPLA','UY.17',NULL,42359,'America/Montevideo',1,'2012-02-16 23:00:00','2012-02-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Melo\"}',-54.17,-32.37,'P','PPLA','UY.03',NULL,51023,'America/Montevideo',1,'2015-10-04 23:00:00','2015-10-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Maldonado\"}',-54.95,-34.90,'P','PPLA','UY.09','UY.09.03',55478,'America/Montevideo',1,'2019-02-25 23:00:00','2019-02-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Libertad\"}',-56.62,-34.63,'P','PPL','UY.16','UY.16.02',10166,'America/Montevideo',1,'2021-12-18 23:00:00','2021-12-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Las Piedras\"}',-56.22,-34.73,'P','PPL','UY.02','UY.02.12',69682,'America/Montevideo',1,'2019-02-25 23:00:00','2019-02-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Lascano\"}',-54.21,-33.67,'P','PPL','UY.14','UY.14.04',6976,'America/Montevideo',1,'2018-02-21 23:00:00','2018-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"La Paz\"}',-56.23,-34.76,'P','PPL','UY.02','UY.02.11',19913,'America/Montevideo',1,'2018-02-21 23:00:00','2018-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Juan L. Lacaze\"}',-57.45,-34.42,'P','PPL','UY.04','UY.04.06',12816,'America/Montevideo',1,'2021-12-17 23:00:00','2021-12-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"José Pedro Varela\"}',-54.54,-33.45,'P','PPL','UY.08','UY.08.01',5118,'America/Montevideo',1,'2021-12-19 23:00:00','2021-12-19 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Joaquín Suárez\"}',-56.03,-34.74,'P','PPL','UY.02','UY.02.28',6570,'America/Montevideo',1,'2021-12-19 23:00:00','2021-12-19 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Guichón\"}',-57.20,-32.36,'P','PPL','UY.11','UY.11.02',5051,'America/Montevideo',1,'2021-12-18 23:00:00','2021-12-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Fray Bentos\"}',-58.31,-33.12,'P','PPLA','UY.12',NULL,23279,'America/Montevideo',1,'2017-11-28 23:00:00','2017-11-28 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Florida\"}',-56.21,-34.10,'P','PPLA','UY.07',NULL,32234,'America/Montevideo',1,'2012-02-16 23:00:00','2012-02-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Durazno\"}',-56.52,-33.38,'P','PPLA','UY.05',NULL,33926,'America/Montevideo',1,'2015-10-04 23:00:00','2015-10-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Dolores\"}',-58.22,-33.53,'P','PPL','UY.17','UY.17.02',17174,'America/Montevideo',1,'2021-12-18 23:00:00','2021-12-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Delta del Tigre\"}',-56.36,-34.76,'P','PPL','UY.16','UY.16.01',17973,'America/Montevideo',1,'2018-02-21 23:00:00','2018-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Colonia del Sacramento\"}',-57.84,-34.46,'P','PPLA','UY.04',NULL,21714,'America/Montevideo',1,'2015-12-08 23:00:00','2015-12-08 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Chui\"}',-53.46,-33.70,'P','PPL','UY.14','UY.14.02',9675,'America/Montevideo',1,'2021-12-18 23:00:00','2021-12-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Castillos\"}',-53.86,-34.20,'P','PPL','UY.14','UY.14.01',7541,'America/Montevideo',1,'2021-12-18 23:00:00','2021-12-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Carmelo\"}',-58.28,-34.00,'P','PPL','UY.04','UY.04.01',18041,'America/Montevideo',1,'2021-12-18 23:00:00','2021-12-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Canelones\"}',-56.28,-34.52,'P','PPLA','UY.02','UY.02.06',19698,'America/Montevideo',1,'2018-02-21 23:00:00','2018-02-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Bella Unión\"}',-57.60,-30.26,'P','PPL','UY.01','UY.01.02',12200,'America/Montevideo',1,'2021-12-18 23:00:00','2021-12-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Atlántida\"}',-55.76,-34.77,'P','PPL','UY.02','UY.02.04',5562,'America/Montevideo',1,'2021-12-17 23:00:00','2021-12-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Artigas\"}',-56.47,-30.40,'P','PPLA','UY.01',NULL,41909,'America/Montevideo',1,'2012-02-13 23:00:00','2012-02-13 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Colonia Nicolich\"}',-56.02,-34.82,'P','PPL','UY.02','UY.02.01',8902,'America/Montevideo',1,'2021-12-18 23:00:00','2021-12-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Barra de Carrasco\"}',-56.03,-34.88,'P','PPL','UY.02','UY.02.17',5410,'America/Montevideo',1,'2021-12-19 23:00:00','2021-12-19 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('UY','{\"en\":\"Barros Blancos\"}',-56.00,-34.75,'P','PPL','UY.02','UY.02.05',31650,'America/Montevideo',1,'2019-03-28 23:00:00','2019-03-28 23:00:00');
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
