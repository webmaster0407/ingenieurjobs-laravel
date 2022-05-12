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
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('KW.08','KW','{\"en\":\"Hawalli\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('KW.02','KW','{\"en\":\"Al Asimah\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('KW.05','KW','{\"en\":\"Al Jahrāʼ\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('KW.07','KW','{\"en\":\"Al Farwaniyah\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('KW.04','KW','{\"en\":\"Al Aḩmadī\"}',1);
INSERT INTO `__PREFIX__subadmin1` (`code`, `country_code`, `name`, `active`) VALUES ('KW.09','KW','{\"en\":\"Mubārak al Kabīr\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__subadmin2`
--

/*!40000 ALTER TABLE `__PREFIX__subadmin2` DISABLE KEYS */;
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216231','KW','KW.02','{\"en\":\"Ad Du‘ayyah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216232','KW','KW.02','{\"en\":\"Ad Dasmah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216233','KW','KW.02','{\"en\":\"Ash Sharq\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216234','KW','KW.02','{\"en\":\"Murqāb\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216235','KW','KW.02','{\"en\":\"Qiblah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216236','KW','KW.02','{\"en\":\"Al Fayḩā’\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216237','KW','KW.02','{\"en\":\"Ash Shuwaykh aş Şinā‘īyah Wāḩid\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216238','KW','KW.02','{\"en\":\"Ash Shuwaykh aş Şinā‘īyah Ithnān\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216239','KW','KW.02','{\"en\":\"Ash Shuwaykh aş Şinā‘īyah Thalāthah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216240','KW','KW.02','{\"en\":\"Ash Shuwaykh at Ta‘līmīyah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216323','KW','KW.02','{\"en\":\"Ar Rawḑah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216328','KW','KW.02','{\"en\":\"Mīnā’ ash Shuwaykh\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216329','KW','KW.02','{\"en\":\"Mu‘askarāt al Mubārakīyah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216330','KW','KW.02','{\"en\":\"Mīnā’ ad Dawḩah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216331','KW','KW.02','{\"en\":\"Jazīrat Umm an Namal\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.04.12216332','KW','KW.04','{\"en\":\"Al Maqwa‘\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.04.12216333','KW','KW.04','{\"en\":\"Janūb aş Şabāḩīyah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.04.12216334','KW','KW.04','{\"en\":\"Shamāl ash Shu‘aybah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.04.12216335','KW','KW.04','{\"en\":\"Janūb ash Shu‘aybah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.04.12216336','KW','KW.04','{\"en\":\"Mīnā’ ‘Abd Allāh\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.05.12216337','KW','KW.05','{\"en\":\"Mu‘askarāt al Jahrā’\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.05.12216338','KW','KW.05','{\"en\":\"Al Jahrā’ al Gharbīyah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.05.12216339','KW','KW.05','{\"en\":\"Al Jahrā’ aş Şinā‘īyah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.05.12216340','KW','KW.05','{\"en\":\"Al Maqbarah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.05.12216341','KW','KW.05','{\"en\":\"Aş Şulaybīyah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.05.12216342','KW','KW.05','{\"en\":\"Aş Şulaybīyah az Zirā‘īyah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.05.12216343','KW','KW.05','{\"en\":\"Aş Şulaybīyah aş Şinā‘īyah Wāḩid\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.05.12216344','KW','KW.05','{\"en\":\"Aş Şulaybīyah aş Şinā‘īyah Ithnān\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.07.12216345','KW','KW.07','{\"en\":\"Al ‘Āriḑīyah Takhzīn wa Isti‘mālāt al Ḩukūmīyah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.07.12216346','KW','KW.07','{\"en\":\"Al ‘Āriḑīyah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.07.12216347','KW','KW.07','{\"en\":\"Al Maţār\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.08.12216348','KW','KW.08','{\"en\":\"Ḍāḩiyat Mubārak al ‘Abd Allāh\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.09.12216349','KW','KW.09','{\"en\":\"Ḑāḩiyat Abū Fuţayrah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216350','KW','KW.02','{\"en\":\"Dasmān\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216351','KW','KW.02','{\"en\":\"Bunayd al Qār\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216352','KW','KW.02','{\"en\":\"Al Manşūrīyah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216353','KW','KW.02','{\"en\":\"Al Qādisīyah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216354','KW','KW.02','{\"en\":\"Ḑāḩiyat ‘Abd Allāh as Sālim\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216355','KW','KW.02','{\"en\":\"An Nuzhah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216356','KW','KW.02','{\"en\":\"Al ‘Udaylīyah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216357','KW','KW.02','{\"en\":\"Qurţubah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216358','KW','KW.02','{\"en\":\"Al Yarmūk\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216359','KW','KW.02','{\"en\":\"Al Khālidīyah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216360','KW','KW.02','{\"en\":\"Kayfān\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216361','KW','KW.02','{\"en\":\"Ash Shāmīyah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216362','KW','KW.02','{\"en\":\"Ash Shuwaykh\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216363','KW','KW.02','{\"en\":\"Ash Shuwaykh aş Şiḩḩīyah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216364','KW','KW.02','{\"en\":\"Gharnāţah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216365','KW','KW.02','{\"en\":\"Aş Şulaybikhāt\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216366','KW','KW.02','{\"en\":\"Ad Dawḩah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.02.12216367','KW','KW.02','{\"en\":\"As Surrah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.04.12216368','KW','KW.04','{\"en\":\"Al Finţās\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.04.12216369','KW','KW.04','{\"en\":\"Al ‘Uqaylah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.04.12216370','KW','KW.04','{\"en\":\"Jābir al ‘Alī\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.04.12216371','KW','KW.04','{\"en\":\"Az̧ Z̧ahr\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.04.12216372','KW','KW.04','{\"en\":\"Al Mahbūlah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.04.12216373','KW','KW.04','{\"en\":\"Ar Riqqah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.04.12216374','KW','KW.04','{\"en\":\"Hadīyah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.04.12216375','KW','KW.04','{\"en\":\"Abū Ḩalīfah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.04.12216376','KW','KW.04','{\"en\":\"Fahd al Aḩmad\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.04.12216377','KW','KW.04','{\"en\":\"Al Manqaf\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.04.12216378','KW','KW.04','{\"en\":\"Aş Şabāḩīyah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.04.12216379','KW','KW.04','{\"en\":\"Al Faḩaḩīl\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.04.12216380','KW','KW.04','{\"en\":\"Madīnat al Aḩmadī\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.05.12216381','KW','KW.05','{\"en\":\"Amgharah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.05.12216382','KW','KW.05','{\"en\":\"An Na‘īm\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.05.12216383','KW','KW.05','{\"en\":\"Al Qaşr\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.05.12216384','KW','KW.05','{\"en\":\"Al Wāḩah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.05.12216385','KW','KW.05','{\"en\":\"Taymā’\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.05.12216386','KW','KW.05','{\"en\":\"An Nasīm\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.05.12216387','KW','KW.05','{\"en\":\"Al ‘Uyūn\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.05.12216388','KW','KW.05','{\"en\":\"Al Jahrā’\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.07.12216389','KW','KW.07','{\"en\":\"Ar Rayy\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.07.12216390','KW','KW.07','{\"en\":\"Ar Raq‘ī\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.07.12216391','KW','KW.07','{\"en\":\"Al Andalus\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.07.12216392','KW','KW.07','{\"en\":\"Abraq Khayţān\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.07.12216393','KW','KW.07','{\"en\":\"Al ‘Umarīyah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.07.12216394','KW','KW.07','{\"en\":\"Ar Rābiyah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.07.12216395','KW','KW.07','{\"en\":\"Al Firdaws\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.07.12216396','KW','KW.07','{\"en\":\"Şabāḩ an Nāşir\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.07.12216397','KW','KW.07','{\"en\":\"Ar Riḩāb\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.07.12216398','KW','KW.07','{\"en\":\"Ishbīliyah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.07.12216399','KW','KW.07','{\"en\":\"Al Farwānīyah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.07.12216400','KW','KW.07','{\"en\":\"Aḑ Ḑajīj\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.07.12216401','KW','KW.07','{\"en\":\"Jalīb ash Shuyūkh\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.07.12216402','KW','KW.07','{\"en\":\"Khayţān al Janūbī\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.08.12216403','KW','KW.08','{\"en\":\"As Sālimīyah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.08.12216404','KW','KW.08','{\"en\":\"Ar Rumaythīyah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.08.12216405','KW','KW.08','{\"en\":\"Salwá\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.08.12216406','KW','KW.08','{\"en\":\"Mushrif\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.08.12216407','KW','KW.08','{\"en\":\"Bayān\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.08.12216408','KW','KW.08','{\"en\":\"Al Jābirīyah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.08.12216409','KW','KW.08','{\"en\":\"Ḩawallī\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.08.12216410','KW','KW.08','{\"en\":\"Ash Shuhadā’\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.08.12216411','KW','KW.08','{\"en\":\"Ḩaţţīn\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.08.12216412','KW','KW.08','{\"en\":\"As Salām\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.08.12216413','KW','KW.08','{\"en\":\"Aş Şadīq\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.08.12216414','KW','KW.08','{\"en\":\"Ash Sha‘b\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.08.12216415','KW','KW.08','{\"en\":\"Az Zahrā’\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.09.12216416','KW','KW.09','{\"en\":\"Şabāḩ as Sālim\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.09.12216417','KW','KW.09','{\"en\":\"Al Masīlah\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.09.12216418','KW','KW.09','{\"en\":\"Al ‘Adān\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.09.12216419','KW','KW.09','{\"en\":\"Al Funayţīs\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.09.12216420','KW','KW.09','{\"en\":\"Al Quşūr\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.09.12216421','KW','KW.09','{\"en\":\"Mubārak al Kabīr\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.09.12216422','KW','KW.09','{\"en\":\"Janūb al Wusţá\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.09.12216423','KW','KW.09','{\"en\":\"Al Wusţá\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.09.12216424','KW','KW.09','{\"en\":\"Şabḩan\"}',1);
INSERT INTO `__PREFIX__subadmin2` (`code`, `country_code`, `subadmin1_code`, `name`, `active`) VALUES ('KW.09.12216425','KW','KW.09','{\"en\":\"Al Qurayn\"}',1);
/*!40000 ALTER TABLE `__PREFIX__subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `__PREFIX__cities`
--

/*!40000 ALTER TABLE `__PREFIX__cities` DISABLE KEYS */;
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KW','{\"en\":\"Janūb as Surrah\"}',47.98,29.27,'P','PPL','KW.07',NULL,18496,'Asia/Kuwait',1,'2015-01-03 23:00:00','2015-01-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KW','{\"en\":\"Ḩawallī\"}',48.03,29.33,'P','PPLA','KW.08',NULL,164212,'Asia/Kuwait',1,'2013-08-03 23:00:00','2013-08-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KW','{\"en\":\"Bayān\"}',48.05,29.30,'P','PPLX','KW.08',NULL,30635,'Asia/Kuwait',1,'2016-09-12 23:00:00','2016-09-12 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KW','{\"en\":\"Az Zawr\"}',48.27,29.44,'P','PPL','KW.02',NULL,5750,'Asia/Kuwait',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KW','{\"en\":\"As Sālimīyah\"}',48.08,29.33,'P','PPLX','KW.08',NULL,147649,'Asia/Kuwait',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KW','{\"en\":\"Ash Shāmīyah\"}',47.96,29.35,'P','PPLX','KW.02',NULL,13762,'Asia/Kuwait',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KW','{\"en\":\"Ar Rumaythīyah\"}',48.07,29.31,'P','PPLX','KW.08',NULL,58135,'Asia/Kuwait',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KW','{\"en\":\"Ar Riqqah\"}',48.09,29.15,'P','PPL','KW.04',NULL,52068,'Asia/Kuwait',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KW','{\"en\":\"Al Wafrah\"}',47.93,28.64,'P','PPL','KW.04',NULL,10017,'Asia/Kuwait',1,'2013-05-03 23:00:00','2013-05-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KW','{\"en\":\"Al Manqaf\"}',48.13,29.10,'P','PPL','KW.04',NULL,39025,'Asia/Kuwait',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KW','{\"en\":\"Al Mahbūlah\"}',48.13,29.14,'P','PPL','KW.04',NULL,18178,'Asia/Kuwait',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KW','{\"en\":\"Kuwait City\"}',47.98,29.37,'P','PPLC','KW.02',NULL,60064,'Asia/Kuwait',1,'2017-06-21 23:00:00','2017-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KW','{\"en\":\"Al Jahrā’\"}',47.66,29.34,'P','PPLA','KW.05',NULL,24281,'Asia/Kuwait',1,'2013-05-04 23:00:00','2013-05-04 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KW','{\"en\":\"Al Faḩāḩīl\"}',48.13,29.08,'P','PPL','KW.04',NULL,68290,'Asia/Kuwait',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KW','{\"en\":\"Al Finţās\"}',48.12,29.17,'P','PPL','KW.04',NULL,23071,'Asia/Kuwait',1,'2020-06-09 23:00:00','2020-06-09 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KW','{\"en\":\"Al Farwānīyah\"}',47.96,29.28,'P','PPLA','KW.07',NULL,86525,'Asia/Kuwait',1,'2019-02-25 23:00:00','2019-02-25 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KW','{\"en\":\"Al Aḩmadī\"}',48.08,29.08,'P','PPLA','KW.04',NULL,637411,'Asia/Kuwait',1,'2014-01-03 23:00:00','2014-01-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KW','{\"en\":\"Ad Dasmah\"}',48.00,29.36,'P','PPL','KW.02',NULL,17585,'Asia/Kuwait',1,'2015-01-03 23:00:00','2015-01-03 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KW','{\"en\":\"Salwá\"}',48.08,29.30,'P','PPLX','KW.08',NULL,40945,'Asia/Kuwait',1,'2020-06-10 23:00:00','2020-06-10 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KW','{\"en\":\"Ar Rābiyah\"}',47.93,29.30,'P','PPLX','KW.02',NULL,36447,'Asia/Kuwait',1,'2012-10-18 23:00:00','2012-10-18 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KW','{\"en\":\"Şabāḩ as Sālim\"}',48.06,29.26,'P','PPL','KW.09',NULL,139163,'Asia/Kuwait',1,'2017-06-21 23:00:00','2017-06-21 23:00:00');
INSERT INTO `__PREFIX__cities` (`country_code`, `name`, `longitude`, `latitude`, `feature_class`, `feature_code`, `subadmin1_code`, `subadmin2_code`, `population`, `time_zone`, `active`, `created_at`, `updated_at`) VALUES ('KW','{\"en\":\"Mubārak al Kabīr\"}',48.09,29.19,'P','PPLA','KW.09',NULL,0,'Asia/Kuwait',1,'2013-07-02 23:00:00','2013-07-02 23:00:00');
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
