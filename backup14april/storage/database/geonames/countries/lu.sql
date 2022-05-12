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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LU.WI','LU','{\"en\":\"Wiltz\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LU.VD','LU','{\"en\":\"Vianden\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LU.RM','LU','{\"en\":\"Remich\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LU.RD','LU','{\"en\":\"Redange\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LU.ME','LU','{\"en\":\"Mersch\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LU.LU','LU','{\"en\":\"Luxembourg\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LU.GR','LU','{\"en\":\"Grevenmacher\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LU.ES','LU','{\"en\":\"Esch-sur-Alzette\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LU.EC','LU','{\"en\":\"Echternach\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LU.DI','LU','{\"en\":\"Diekirch\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LU.CL','LU','{\"en\":\"Clervaux\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('LU.CA','LU','{\"en\":\"Capellen\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.WI.11','LU','LU.WI','{\"en\":\"Wiltz\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.CL.09','LU','LU.CL','{\"en\":\"Troisvierges\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.ES.14','LU','LU.ES','{\"en\":\"Schifflange\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.ES.13','LU','LU.ES','{\"en\":\"Sanem\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.ES.12','LU','LU.ES','{\"en\":\"Rumelange\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.ES.09','LU','LU.ES','{\"en\":\"Pétange\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.LU.2960317','LU','LU.LU','{\"en\":\"Ville de Luxembourg\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.ES.06','LU','LU.ES','{\"en\":\"Kayl\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.GR.04','LU','LU.GR','{\"en\":\"Grevenmacher\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.DI.07','LU','LU.DI','{\"en\":\"Ettelbruck\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.EC.05','LU','LU.EC','{\"en\":\"Echternach\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.ES.03','LU','LU.ES','{\"en\":\"Dudelange\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.ES.02','LU','LU.ES','{\"en\":\"Differdange\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.DI.04','LU','LU.DI','{\"en\":\"Diekirch\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.ES.01','LU','LU.ES','{\"en\":\"Bettembourg\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.DI.08','LU','LU.DI','{\"en\":\"Feulen\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.WI.05','LU','LU.WI','{\"en\":\"Lac de la Haute-Sûre\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.CA.03','LU','LU.CA','{\"en\":\"Dippach\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.CA.04','LU','LU.CA','{\"en\":\"Garnich\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.CA.05','LU','LU.CA','{\"en\":\"Hobscheid\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.CA.06','LU','LU.CA','{\"en\":\"Kehlen\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.CA.07','LU','LU.CA','{\"en\":\"Koerich\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.CA.08','LU','LU.CA','{\"en\":\"Kopstal\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.CA.09','LU','LU.CA','{\"en\":\"Mamer\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.CA.10','LU','LU.CA','{\"en\":\"Septfontaines\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.CA.11','LU','LU.CA','{\"en\":\"Steinfort\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.ES.04','LU','LU.ES','{\"en\":\"Esch-sur-Alzette\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.ES.05','LU','LU.ES','{\"en\":\"Frisange\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.ES.07','LU','LU.ES','{\"en\":\"Leudelange\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.ES.08','LU','LU.ES','{\"en\":\"Mondercange\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.ES.10','LU','LU.ES','{\"en\":\"Reckange-sur-Mess\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.ES.11','LU','LU.ES','{\"en\":\"Roeser\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.LU.01','LU','LU.LU','{\"en\":\"Bertrange\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.LU.02','LU','LU.LU','{\"en\":\"Contern\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.LU.03','LU','LU.LU','{\"en\":\"Hesperange\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.LU.04','LU','LU.LU','{\"en\":\"Niederanven\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.LU.05','LU','LU.LU','{\"en\":\"Sandweiler\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.LU.06','LU','LU.LU','{\"en\":\"Schuttrange\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.LU.07','LU','LU.LU','{\"en\":\"Steinsel\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.LU.08','LU','LU.LU','{\"en\":\"Strassen\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.LU.09','LU','LU.LU','{\"en\":\"Walferdange\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.LU.10','LU','LU.LU','{\"en\":\"Weiler-la-Tour\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.ME.01','LU','LU.ME','{\"en\":\"Berg\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.ME.02','LU','LU.ME','{\"en\":\"Bissen\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.ME.03','LU','LU.ME','{\"en\":\"Boevange-sur-Attert\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.ME.04','LU','LU.ME','{\"en\":\"Fischbach\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.ME.05','LU','LU.ME','{\"en\":\"Heffingen\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.ME.06','LU','LU.ME','{\"en\":\"Larochette\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.ME.07','LU','LU.ME','{\"en\":\"Lintgen\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.ME.08','LU','LU.ME','{\"en\":\"Lorentzweiler\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.ME.09','LU','LU.ME','{\"en\":\"Mersch\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.ME.10','LU','LU.ME','{\"en\":\"Nommern\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.ME.11','LU','LU.ME','{\"en\":\"Tuntange\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.CL.01','LU','LU.CL','{\"en\":\"Wincrange\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.CL.03','LU','LU.CL','{\"en\":\"Clervaux\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.CL.10','LU','LU.CL','{\"en\":\"Weiswampach\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.DI.02','LU','LU.DI','{\"en\":\"Bettendorf\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.DI.03','LU','LU.DI','{\"en\":\"Bourscheid\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.DI.06','LU','LU.DI','{\"en\":\"Erpeldange\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.DI.11','LU','LU.DI','{\"en\":\"Mertzig\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.DI.12','LU','LU.DI','{\"en\":\"Reisdorf\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.DI.13','LU','LU.DI','{\"en\":\"Schieren\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.RD.02','LU','LU.RD','{\"en\":\"Beckerich\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.RD.05','LU','LU.RD','{\"en\":\"Ell\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.RD.06','LU','LU.RD','{\"en\":\"Rambrouch\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.RD.07','LU','LU.RD','{\"en\":\"Grosbous\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.RD.09','LU','LU.RD','{\"en\":\"Redange-sur-Attert\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.RD.10','LU','LU.RD','{\"en\":\"Saeul\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.RD.11','LU','LU.RD','{\"en\":\"Useldange\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.RD.12','LU','LU.RD','{\"en\":\"Vichten\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.RD.13','LU','LU.RD','{\"en\":\"Wahl\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.WI.01','LU','LU.WI','{\"en\":\"Boulaide\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.WI.02','LU','LU.WI','{\"en\":\"Esch-sur-Sûre\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.WI.04','LU','LU.WI','{\"en\":\"Goesdorf\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.WI.13','LU','LU.WI','{\"en\":\"Winseler\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.VD.01','LU','LU.VD','{\"en\":\"Tandel\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.VD.02','LU','LU.VD','{\"en\":\"Putscheid\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.VD.03','LU','LU.VD','{\"en\":\"Vianden\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.EC.01','LU','LU.EC','{\"en\":\"Beaufort\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.EC.02','LU','LU.EC','{\"en\":\"Bech\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.EC.03','LU','LU.EC','{\"en\":\"Berdorf\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.EC.04','LU','LU.EC','{\"en\":\"Consdorf\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.EC.06','LU','LU.EC','{\"en\":\"Mompach\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.EC.07','LU','LU.EC','{\"en\":\"Rosport\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.EC.08','LU','LU.EC','{\"en\":\"Waldbillig\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.GR.01','LU','LU.GR','{\"en\":\"Betzdorf\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.GR.02','LU','LU.GR','{\"en\":\"Biwer\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.GR.03','LU','LU.GR','{\"en\":\"Flaxweiler\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.GR.05','LU','LU.GR','{\"en\":\"Junglinster\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.GR.06','LU','LU.GR','{\"en\":\"Manternach\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.GR.07','LU','LU.GR','{\"en\":\"Mertert\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.GR.09','LU','LU.GR','{\"en\":\"Wormeldange\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.RM.00','LU','LU.RM','{\"en\":\"Bous\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.RM.02','LU','LU.RM','{\"en\":\"Dalheim\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.RM.03','LU','LU.RM','{\"en\":\"Lenningen\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.RM.04','LU','LU.RM','{\"en\":\"Mondorf-les-Bains\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.RM.05','LU','LU.RM','{\"en\":\"Schengen\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.RM.06','LU','LU.RM','{\"en\":\"Remich\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.RM.07','LU','LU.RM','{\"en\":\"Stadtbredimus\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.RM.08','LU','LU.RM','{\"en\":\"Waldbredimus\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.WI.8641289','LU','LU.WI','{\"en\":\"Kiischpelt\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.RD.8641291','LU','LU.RD','{\"en\":\"Commune de Préizerdaul\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.DI.8641526','LU','LU.DI','{\"en\":\"Commune de la Vallée de l\'Ernz\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.CA.8641865','LU','LU.CA','{\"en\":\"Käerjeng\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('LU.CL.63','LU','LU.CL','{\"en\":\"Parc Hosingen\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LU','{\"en\":\"Wiltz\"}',5.93,49.97,'P','PPLA','LU.WI','LU.WI.11',4816,'Europe/Luxembourg',1,'2017-10-01 23:00:00','2017-10-01 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LU','{\"en\":\"Strassen\"}',6.07,49.62,'P','PPLA3','LU.LU','LU.LU.08',6006,'Europe/Luxembourg',1,'2017-10-01 23:00:00','2017-10-01 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LU','{\"en\":\"Schifflange\"}',6.01,49.51,'P','PPLA3','LU.ES','LU.ES.14',8155,'Europe/Luxembourg',1,'2019-02-25 23:00:00','2019-02-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LU','{\"en\":\"Rodange\"}',5.84,49.55,'P','PPL','LU.ES','LU.ES.09',5505,'Europe/Luxembourg',1,'2021-12-12 23:00:00','2021-12-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LU','{\"en\":\"Redange-sur-Attert\"}',5.89,49.76,'P','PPLA','LU.RD','LU.RD.09',1164,'Europe/Luxembourg',1,'2017-10-01 23:00:00','2017-10-01 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LU','{\"en\":\"Pétange\"}',5.88,49.56,'P','PPLA3','LU.ES','LU.ES.09',7187,'Europe/Luxembourg',1,'2019-02-25 23:00:00','2019-02-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LU','{\"en\":\"Mersch\"}',6.11,49.75,'P','PPLA','LU.ME','LU.ME.09',3464,'Europe/Luxembourg',1,'2017-10-01 23:00:00','2017-10-01 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LU','{\"en\":\"Merl\"}',6.10,49.60,'P','PPL','LU.LU','LU.LU.2960317',6264,'Europe/Luxembourg',1,'2021-12-16 23:00:00','2021-12-16 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LU','{\"en\":\"Mamer\"}',6.02,49.63,'P','PPLA3','LU.CA','LU.CA.09',5017,'Europe/Luxembourg',1,'2017-10-01 23:00:00','2017-10-01 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LU','{\"en\":\"Luxembourg\"}',6.13,49.61,'P','PPLC','LU.LU','LU.LU.2960317',76684,'Europe/Luxembourg',1,'2019-09-04 23:00:00','2019-09-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LU','{\"en\":\"Grevenmacher\"}',6.44,49.68,'P','PPLA','LU.GR','LU.GR.04',3958,'Europe/Luxembourg',1,'2017-10-01 23:00:00','2017-10-01 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LU','{\"en\":\"Ettelbruck\"}',6.10,49.85,'P','PPLA3','LU.DI','LU.DI.07',6364,'Europe/Luxembourg',1,'2019-02-25 23:00:00','2019-02-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LU','{\"en\":\"Esch-sur-Alzette\"}',5.98,49.50,'P','PPLA2','LU.ES','LU.ES.04',28228,'Europe/Luxembourg',1,'2019-10-23 23:00:00','2019-10-23 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LU','{\"en\":\"Dudelange\"}',6.09,49.48,'P','PPLA3','LU.ES','LU.ES.03',18013,'Europe/Luxembourg',1,'2019-02-25 23:00:00','2019-02-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LU','{\"en\":\"Differdange\"}',5.89,49.52,'P','PPLA3','LU.ES','LU.ES.02',5296,'Europe/Luxembourg',1,'2017-10-01 23:00:00','2017-10-01 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LU','{\"en\":\"Diekirch\"}',6.16,49.87,'P','PPLA','LU.DI','LU.DI.04',6242,'Europe/Luxembourg',1,'2019-02-25 23:00:00','2019-02-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LU','{\"en\":\"Bettembourg\"}',6.10,49.52,'P','PPLA3','LU.ES','LU.ES.01',7437,'Europe/Luxembourg',1,'2019-02-25 23:00:00','2019-02-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LU','{\"en\":\"Bertrange\"}',6.05,49.61,'P','PPLA3','LU.LU','LU.LU.01',5615,'Europe/Luxembourg',1,'2019-02-26 23:00:00','2019-02-26 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('LU','{\"en\":\"Belvaux\"}',5.92,49.51,'P','PPL','LU.ES','LU.ES.13',5313,'Europe/Luxembourg',1,'2021-12-12 23:00:00','2021-12-12 23:00:00');
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
