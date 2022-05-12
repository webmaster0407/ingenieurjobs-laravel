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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CV.20','CV','{\"en\":\"Tarrafal\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CV.11','CV','{\"en\":\"São Vicente\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CV.15','CV','{\"en\":\"Santa Catarina\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CV.08','CV','{\"en\":\"Sal\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CV.07','CV','{\"en\":\"Ribeira Grande\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CV.14','CV','{\"en\":\"Praia\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CV.05','CV','{\"en\":\"Paul\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CV.04','CV','{\"en\":\"Maio\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CV.02','CV','{\"en\":\"Brava\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CV.01','CV','{\"en\":\"Boa Vista\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CV.13','CV','{\"en\":\"Mosteiros\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CV.16','CV','{\"en\":\"Santa Cruz\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CV.17','CV','{\"en\":\"São Domingos\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CV.18','CV','{\"en\":\"São Filipe\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CV.19','CV','{\"en\":\"São Miguel\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CV.21','CV','{\"en\":\"Porto Novo\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CV.22','CV','{\"en\":\"Ribeira Brava\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CV.24','CV','{\"en\":\"Santa Catarina do Fogo\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CV.26','CV','{\"en\":\"São Salvador do Mundo\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CV.27','CV','{\"en\":\"Tarrafal de São Nicolau\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CV.25','CV','{\"en\":\"São Lourenço dos Órgãos\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('CV.23','CV','{\"en\":\"Ribeira Grande de Santiago\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.04.7669150','CV','CV.04','{\"en\":\"Nossa Senhora da Luz\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.18.11429194','CV','CV.18','{\"en\":\"Nossa Senhora da Conceicao\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.02.11429279','CV','CV.02','{\"en\":\"São João Baptista\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.07.11468013','CV','CV.07','{\"en\":\"Nossa Senhora do Rosário\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.02.11468093','CV','CV.02','{\"en\":\"Nossa Senhora do Monte\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.17.11468611','CV','CV.17','{\"en\":\"Sao Nicolau Tolentino\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.07.11468615','CV','CV.07','{\"en\":\"Santo Crucifixo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.22.11996035','CV','CV.22','{\"en\":\"Nossa Senhora da Lapa\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.08.11996036','CV','CV.08','{\"en\":\"Nossa Senhora das Dores\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.13.11996037','CV','CV.13','{\"en\":\"Nossa Senhora da Ajuda\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.07.11996038','CV','CV.07','{\"en\":\"Nossa Senhora do Livramento\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.22.11996039','CV','CV.22','{\"en\":\"Nossa Senhora do Rosario\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.24.11996040','CV','CV.24','{\"en\":\"Santa Catarina do Fogo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.01.11996041','CV','CV.01','{\"en\":\"Santa Isabel\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.21.11996042','CV','CV.21','{\"en\":\"Santo Andre\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.05.11996043','CV','CV.05','{\"en\":\"Santo Antonio das Pombas\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.26.11996044','CV','CV.26','{\"en\":\"Sao Salvador do Mundo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.07.11996045','CV','CV.07','{\"en\":\"Sao Pedro Apostolo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.17.11996046','CV','CV.17','{\"en\":\"Nossa Senhora da Luz\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.11.11996047','CV','CV.11','{\"en\":\"Nossa Senhora da Luz\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.27.11996048','CV','CV.27','{\"en\":\"Sao Francisco de Assis\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.01.11996049','CV','CV.01','{\"en\":\"Sao Joao Baptista\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.21.11996050','CV','CV.21','{\"en\":\"Sao Joao Baptista\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.18.11996051','CV','CV.18','{\"en\":\"Sao Lourenco\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.15.11996052','CV','CV.15','{\"en\":\"Santa Catarina\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.16.11996053','CV','CV.16','{\"en\":\"Santiago Maior\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.20.11996054','CV','CV.20','{\"en\":\"Santo Amaro Abade\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.25.11996055','CV','CV.25','{\"en\":\"Sao Lourenco Dos Orgaos\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.19.11996056','CV','CV.19','{\"en\":\"Sao Miguel Arcanjo\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.14.11996057','CV','CV.14','{\"en\":\"Nossa Senhora da Graca\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.23.11996058','CV','CV.23','{\"en\":\"Santissimo Nome de Jesus\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('CV.23.11996059','CV','CV.23','{\"en\":\"Sao Joao Baptista\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CV','{\"en\":\"Nova Sintra\"}',-24.70,14.87,'P','PPLA','CV.02',NULL,1813,'Atlantic/Cape_Verde',1,'2019-04-09 23:00:00','2019-04-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CV','{\"en\":\"Vila do Maio\"}',-23.21,15.14,'P','PPLA','CV.04',NULL,3009,'Atlantic/Cape_Verde',1,'2016-09-23 23:00:00','2016-09-23 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CV','{\"en\":\"Ribeira Brava\"}',-24.30,16.62,'P','PPLA','CV.22',NULL,5324,'Atlantic/Cape_Verde',1,'2019-04-09 23:00:00','2019-04-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CV','{\"en\":\"Tarrafal de São Nicolau\"}',-24.36,16.57,'P','PPLA','CV.27',NULL,5039,'Atlantic/Cape_Verde',1,'2017-09-17 23:00:00','2017-09-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CV','{\"en\":\"Tarrafal\"}',-23.75,15.28,'P','PPLA','CV.20',NULL,6463,'Atlantic/Cape_Verde',1,'2014-10-05 23:00:00','2014-10-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CV','{\"en\":\"São Filipe\"}',-24.50,14.90,'P','PPLA','CV.18',NULL,8189,'Atlantic/Cape_Verde',1,'2014-11-30 23:00:00','2014-11-30 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CV','{\"en\":\"São Domingos\"}',-23.56,15.02,'P','PPLA','CV.17',NULL,1850,'Atlantic/Cape_Verde',1,'2010-06-07 23:00:00','2010-06-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CV','{\"en\":\"Santa Maria\"}',-22.91,16.60,'P','PPL','CV.08',NULL,17231,'Atlantic/Cape_Verde',1,'2017-07-11 23:00:00','2017-07-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CV','{\"en\":\"Santa Cruz\"}',-23.57,15.13,'P','PPL','CV.16',NULL,9488,'Atlantic/Cape_Verde',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CV','{\"en\":\"Sal Rei\"}',-22.92,16.18,'P','PPLA','CV.01',NULL,2122,'Atlantic/Cape_Verde',1,'2019-04-09 23:00:00','2019-04-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CV','{\"en\":\"Ribeira Grande\"}',-25.07,17.18,'P','PPLA','CV.07',NULL,2950,'Atlantic/Cape_Verde',1,'2019-04-09 23:00:00','2019-04-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CV','{\"en\":\"Praia\"}',-23.51,14.93,'P','PPLC','CV.14',NULL,113364,'Atlantic/Cape_Verde',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CV','{\"en\":\"Porto Novo\"}',-25.06,17.02,'P','PPLA','CV.21',NULL,5580,'Atlantic/Cape_Verde',1,'2012-02-11 23:00:00','2012-02-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CV','{\"en\":\"Igreja\"}',-24.32,15.03,'P','PPLA','CV.13',NULL,477,'Atlantic/Cape_Verde',1,'2019-04-09 23:00:00','2019-04-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CV','{\"en\":\"Pombas\"}',-25.02,17.15,'P','PPLA','CV.05',NULL,1818,'Atlantic/Cape_Verde',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CV','{\"en\":\"Picos\"}',-23.63,15.08,'P','PPLA','CV.26',NULL,3778,'Atlantic/Cape_Verde',1,'2013-08-02 23:00:00','2013-08-02 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CV','{\"en\":\"Mindelo\"}',-24.98,16.89,'P','PPLA','CV.11',NULL,70611,'Atlantic/Cape_Verde',1,'2013-06-05 23:00:00','2013-06-05 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CV','{\"en\":\"Cova Figueira\"}',-24.29,14.89,'P','PPLA','CV.24',NULL,15350,'Atlantic/Cape_Verde',1,'2013-08-01 23:00:00','2013-08-01 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CV','{\"en\":\"Cidade Velha\"}',-23.61,14.92,'P','PPLA','CV.23',NULL,2148,'Atlantic/Cape_Verde',1,'2017-07-10 23:00:00','2017-07-10 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CV','{\"en\":\"Calheta\"}',-23.59,15.19,'P','PPLA','CV.19',NULL,5400,'Atlantic/Cape_Verde',1,'2013-08-07 23:00:00','2013-08-07 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CV','{\"en\":\"Assomada\"}',-23.68,15.10,'P','PPLA','CV.15',NULL,7927,'Atlantic/Cape_Verde',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CV','{\"en\":\"João Teves\"}',-23.59,15.07,'P','PPLA','CV.25',NULL,0,'Atlantic/Cape_Verde',1,'2019-04-11 23:00:00','2019-04-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CV','{\"en\":\"Pedra Badejo\"}',-23.53,15.14,'P','PPLA','CV.16',NULL,9343,'Atlantic/Cape_Verde',1,'2019-04-11 23:00:00','2019-04-11 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('CV','{\"en\":\"Espargos\"}',-22.94,16.76,'P','PPLA','CV.08',NULL,6173,'Atlantic/Cape_Verde',1,'2013-04-17 23:00:00','2013-04-17 23:00:00');
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
