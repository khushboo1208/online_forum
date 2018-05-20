-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: discuss
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.16.04.1

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
-- Table structure for table `choice`
--

DROP TABLE IF EXISTS `choice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `choice` (
  `sno` int(250) NOT NULL AUTO_INCREMENT,
  `category` text NOT NULL,
  `content` text NOT NULL,
  `likes` text NOT NULL,
  `dislikes` text NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `choice`
--

LOCK TABLES `choice` WRITE;
/*!40000 ALTER TABLE `choice` DISABLE KEYS */;
INSERT INTO `choice` VALUES (3,'TRANSPORT','sometimes auto drivers ask for extra charges you are not aware of the charges.','1','2'),(4,'TRANSPORT','sometimes,dtc buses do not come on time.','2','1'),(5,'CORRUPTION','politicians are very corrupted.','0','0'),(6,'CORRUPTION','even police is also involved.','0','0'),(7,'CORRUPTION','corruption has crossed its level','2','0'),(8,'TRANSPORT','guguuf','0','0'),(9,'TRANSPORT','m bnbjjbvjbv ','0','0'),(10,'TRANSPORT','','0','0'),(11,'TRANSPORT','hellllllo','0','0'),(12,'TRANSPORT','sdvsdadv','0','1'),(13,'TRANSPORT','ccccccccccccccccccccccccccccccccccccc','0','0');
/*!40000 ALTER TABLE `choice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `choice_once`
--

DROP TABLE IF EXISTS `choice_once`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `choice_once` (
  `category` text NOT NULL,
  `content` text NOT NULL,
  `likes` text NOT NULL,
  `dislikes` text NOT NULL,
  `Emailid` text NOT NULL,
  `counter` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `choice_once`
--

LOCK TABLES `choice_once` WRITE;
/*!40000 ALTER TABLE `choice_once` DISABLE KEYS */;
INSERT INTO `choice_once` VALUES ('TRANSPORT','sometimes auto drivers ask for extra charges you are not aware of the charges.','0','1','khushboo@gmail.com',2),('TRANSPORT','sometimes auto drivers ask for extra charges you are not aware of the charges.','0','1','divyajha@gmail.com',2),('TRANSPORT','sometimes auto drivers ask for extra charges you are not aware of the charges.','1','0','komal.simple@gmail.com',1),('TRANSPORT','sometimes,dtc buses do not come on time.','1','0','khushboo@gmail.com',2),('CORRUPTION','corruption has crossed its level','1','0','khushboo@gmail.com',1),('CORRUPTION','corruption has crossed its level','1','0','divyajha@gmail.com',1),('TRANSPORT','sometimes,dtc buses do not come on time.','0','1','saurav@gmail.com',2),('TRANSPORT','sometimes,dtc buses do not come on time.','1','0','divyajha@gmail.com',1),('TRANSPORT','sdvsdadv','0','1','khushboo@gmail.com',2);
/*!40000 ALTER TABLE `choice_once` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client_details`
--

DROP TABLE IF EXISTS `client_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cno` int(11) DEFAULT NULL,
  `cdate` datetime DEFAULT NULL,
  `cname` varchar(64) DEFAULT NULL,
  `lawyerid` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client_details`
--

LOCK TABLES `client_details` WRITE;
/*!40000 ALTER TABLE `client_details` DISABLE KEYS */;
INSERT INTO `client_details` VALUES (1,1,'2018-05-27 00:00:00','Divya Jha','khushboo@gmail.com');
/*!40000 ALTER TABLE `client_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commenttb`
--

DROP TABLE IF EXISTS `commenttb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `commenttb` (
  `sno` int(255) NOT NULL AUTO_INCREMENT,
  `category` text NOT NULL,
  `content` text NOT NULL,
  `comment` text NOT NULL,
  `Emailid` varchar(700) NOT NULL,
  `flag` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commenttb`
--

LOCK TABLES `commenttb` WRITE;
/*!40000 ALTER TABLE `commenttb` DISABLE KEYS */;
INSERT INTO `commenttb` VALUES (3,'TRANSPORT','sometimes auto drivers ask for extra charges you are not aware of the charges.','you can check the fares on the internet.','divyajha@gmail.com','i'),(4,'TRANSPORT','sometimes auto drivers ask for extra charges you are not aware of the charges.','please check that the meter should be working.','komal.simple@gmail.com','i'),(5,'TRANSPORT','sometimes auto drivers ask for extra charges you are not aware of the charges.','yes it happens.','nemesha@gmail.com','v'),(7,'TRANSPORT','sometimes auto drivers ask for extra charges you are not aware of the charges.','so true','saurav@gmail.com','v'),(8,'TRANSPORT','','xxxxxxxxxxxxxxxxxxxxxxx','divyajha@gmail.com','v'),(9,'TRANSPORT','','xxxxxxxxxxxxxxxxxxxxxxx','divyajha@gmail.com','v'),(10,'TRANSPORT','','qazqqqqqqqqqqqqqqqqqq','divyajha@gmail.com','v'),(11,'TRANSPORT','sdvsdadv','qqqqqqqqqqqqpppppppppp','khushboo@gmail.com','c'),(12,'TRANSPORT','sdvsdadv','cccccccccccccccccccccccc','khushboo@gmail.com','c'),(13,'TRANSPORT','sdvsdadv','yesssssssssssssssssssss','khushboo@gmail.com','s'),(14,'CORRUPTION','p4.png','hereeeeeee','divyajha@gmail.com','i'),(15,'','','imageeeeeeeeeeee','divyajha@gmail.com','v'),(16,'CORRUPTION','Our Journey - How we know caste.mp4','dddddddddddddddddd','khushboo@gmail.com','v');
/*!40000 ALTER TABLE `commenttb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `developer_sol`
--

DROP TABLE IF EXISTS `developer_sol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `developer_sol` (
  `sno` int(255) NOT NULL AUTO_INCREMENT,
  `category` text NOT NULL,
  `headline` text NOT NULL,
  `solution` text NOT NULL,
  `counter` text NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `developer_sol`
--

LOCK TABLES `developer_sol` WRITE;
/*!40000 ALTER TABLE `developer_sol` DISABLE KEYS */;
INSERT INTO `developer_sol` VALUES (4,'MEDIA','impression that celebrities are making on their audience','celebrities are an important figure, they should take step cautiosly','s1'),(5,'MEDIA','impression that celebrities are making on their audience','media should potray the story in an realistic manner rather than exaggerating the incident  as audience trust media.','s2'),(8,'MEDIA','impression that celebrities are making on their audience','audience must understand that celebrities do have personal life and issues and should not get easily influenced. ','s3'),(9,'MISCELLANOUS','should reservation continue?','lower caste still require suppport to move ahead hence it should continue','s1'),(11,'MISCELLANOUS','should reservation continue?','remove reservation and make India free from caste system. ','s2'),(12,'MISCELLANOUS','should reservations continue?','if its has to be continued make sure the wealth status is verified of the applicant.','s3');
/*!40000 ALTER TABLE `developer_sol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group`
--

DROP TABLE IF EXISTS `group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `groupname` text NOT NULL,
  `message` text NOT NULL,
  `Emailid` varchar(50) NOT NULL,
  `flag` varchar(10) NOT NULL,
  `date` datetime DEFAULT '2018-01-01 00:00:00',
  `pic` varchar(128) DEFAULT 'images_29.jpg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group`
--

LOCK TABLES `group` WRITE;
/*!40000 ALTER TABLE `group` DISABLE KEYS */;
INSERT INTO `group` VALUES (8,'mumbai attack','kasab','khushboo@gmail.com','d','2018-01-01 00:00:00','images_29.jpg'),(9,'nirbhaya','justice','divyajha@gmail.com','d','2018-01-01 00:00:00','livpure.png'),(10,'nirbhaya','wefwefef','nemesha@gmail.com','c','2018-01-01 00:00:00','images_29.jpg'),(11,'wifi in delhi','cwefwefwef','saurav@gmail.com','d','2018-01-01 00:00:00','angularjs_index8.png'),(12,'wifi in delhi','dddddddddddddddddddddddddddddd','khushboo@gmail.com','c','2018-01-01 00:00:00','images_29.jpg'),(13,'meeting','fdjwjkkkkkkkkkkkkkkcaszd','khushboo@gmail.com','d','2018-05-20 00:00:00','blank.jpg');
/*!40000 ALTER TABLE `group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group_member`
--

DROP TABLE IF EXISTS `group_member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group_member` (
  `groupname` text NOT NULL,
  `Emailid` varchar(50) NOT NULL,
  `id` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group_member`
--

LOCK TABLES `group_member` WRITE;
/*!40000 ALTER TABLE `group_member` DISABLE KEYS */;
INSERT INTO `group_member` VALUES ('nirbhaya','divyajha@gmail.com',1),('nirbhaya','khushboo@gmail.com',3),('nirbhaya','saurav@gmail.com',10),('nirbhaya','komal.simple@gmail.com',11),('nirbhaya','nemesha@gmail.com',12),('wifi in delhi','saurav@gmail.com',13),('wifi in delhi','khushboo@gmail.com',14),('meeting','khushboo@gmail.com',15);
/*!40000 ALTER TABLE `group_member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `category` text NOT NULL,
  `image` text NOT NULL,
  `message` text NOT NULL,
  `flag` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'TRANSPORT','10402008_769499886440267_2507938795546036786_n.jpg','',''),(2,'TRANSPORT','20141215_225939.jpg','',''),(3,'TRANSPORT','','',''),(4,'TRANSPORT','20141214_205122.jpg','',''),(5,'TRANSPORT','20141214_205342.jpg','nehallllllllllllll','i'),(6,'TRANSPORT','20141214_192629.jpg','four','i'),(7,'TRANSPORT','Padma sadhana.mp4','','v'),(8,'CORRUPTION','images_29.jpg','','i'),(12,'MISCELLANOUS','p3.jpg','This is how reservation has made life of general category people difficult :(','i'),(13,'MISCELLANOUS','p1.jpg','if reservation would not discontinue, this is what going to be future :p','i'),(14,'MISCELLANOUS','p2.jpg','the cut-offs are of huge gaps where the general category suffers to secure a seat and reserved caste finds it a cake walk.','i'),(15,'MISCELLANOUS','Our Journey - How we know caste.mp4','A must watch video, please see this!','v'),(16,'CORRUPTION','corruption img.jpg','','i'),(17,'CORRUPTION','corruptionimg2.jpg','','i'),(18,'CORRUPTION','corruption img1.jpg','','i'),(19,'TRANSPORT','doubt_js.png','','i'),(20,'CORRUPTION','livpure_f.png','','i'),(21,'TRANSPORT','angularjs_index8.png','','i'),(22,'CORRUPTION','p4.png','','i');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lawyer_details`
--

DROP TABLE IF EXISTS `lawyer_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lawyer_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) DEFAULT NULL,
  `name` varchar(64) DEFAULT NULL,
  `dob` datetime DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `phonenumber` text,
  `emailid` text NOT NULL,
  `password` text NOT NULL,
  `fathername` varchar(164) DEFAULT NULL,
  `address` text,
  `city` varchar(128) DEFAULT NULL,
  `state` varchar(64) DEFAULT NULL,
  `postalcode` int(11) DEFAULT NULL,
  `country` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lawyer_details`
--

LOCK TABLES `lawyer_details` WRITE;
/*!40000 ALTER TABLE `lawyer_details` DISABLE KEYS */;
INSERT INTO `lawyer_details` VALUES (1,'Ms.','khushboo','2004-04-09 00:00:00','Male','+91-1234567898','khushboo@gmail.com','khushboo','Mr. Prem Kumar','1234,aaaaaaaaaa','DELHI','DELHI',110035,'India');
/*!40000 ALTER TABLE `lawyer_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post` (
  `postno` int(250) NOT NULL AUTO_INCREMENT,
  `category` text NOT NULL,
  `content` text NOT NULL,
  `Emailid` varchar(700) NOT NULL,
  PRIMARY KEY (`postno`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (3,'TRANSPORT','sometimes auto drivers ask for extra charges you are not aware of the charges.','khushboo@gmail.com'),(4,'TRANSPORT','sometimes,dtc buses do not come on time.','divyajha@gmail.com'),(5,'CORRUPTION','politicians are very corrupted.','saurav@gmail.com'),(6,'CORRUPTION','even police is also involved.','khushboo@gmail.com'),(7,'CORRUPTION','corruption has crossed its level','divyajha@gmail.com'),(8,'TRANSPORT','guguuf','divyajha@gmail.com'),(9,'TRANSPORT','m bnbjjbvjbv ','divyajha@gmail.com'),(10,'TRANSPORT','','khushboo@gmail.com'),(11,'TRANSPORT','hellllllo','divyajha@gmail.com'),(12,'TRANSPORT','sdvsdadv','saurav@gmail.com'),(13,'TRANSPORT','ccccccccccccccccccccccccccccccccccccc','khushboo@gmail.com');
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sections`
--

DROP TABLE IF EXISTS `sections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sections` (
  `chapter` int(11) DEFAULT NULL,
  `ipcno` int(11) DEFAULT NULL,
  `ipcname` varchar(128) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sections`
--

LOCK TABLES `sections` WRITE;
/*!40000 ALTER TABLE `sections` DISABLE KEYS */;
INSERT INTO `sections` VALUES (3,302,'murder','Whoever commits murder shall be punished with death, or 1[imprisonment for life], and shall also be liable to fine.'),(4,420,'Cheating and dishonestly inducing delivery of property','Whoever cheats and thereby dishonestly induces the person de­ceived to deliver any property to any person, or to make, alter or destroy the whole or any part of a valuable security, or anything which is signed or sealed, and which is capable of being converted into a valuable security, shall be punished with imprisonment of either description for a term which may extend to seven years, and shall also be liable to fine.'),(2,298,'Uttering, words, etc., with deliberate intent to wound the religious feelings of any person','Whoever, with the deliberate intention of wounding the religious feelings of any person, utters any word or makes any sound in the hearing of that person or makes any gesture in the sight of that person or places, any object in the sight of that person, shall be punished with im­prisonment of either description for a term which may extend to one year, or with fine, or with both.');
/*!40000 ALTER TABLE `sections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sol_choice`
--

DROP TABLE IF EXISTS `sol_choice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sol_choice` (
  `headline` text NOT NULL,
  `solution` text NOT NULL,
  `agree` int(10) NOT NULL,
  `disagree` int(10) NOT NULL,
  `Emailid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sol_choice`
--

LOCK TABLES `sol_choice` WRITE;
/*!40000 ALTER TABLE `sol_choice` DISABLE KEYS */;
INSERT INTO `sol_choice` VALUES ('should reservation continue?','it should persist till school level only not further',0,1,'divyajha@gmail.com'),('should reservation continue?','lower caste still require suppport to move ahead hence it should continue',0,1,'khushboo@gmail.com'),('should reservation continue?','if its has to be continued make sure the wealth status is verified of the applicant.',0,0,'divyajha@gmail.com'),('impression that celebrities are making on their audience','celebrities are an important figure, they should take steps cautiously.',0,1,'divyajha@gmail.com'),('impression that celebrities are making on their audience','media should potray the story in an realistic manner rather than exaggerating the incident as audience trust media.',1,0,'prasoon@gmail.com'),('impression that celebrities are making on their audience','audience must understand that celebrities do have personal life and issues and should not get easily influenced',1,0,'khushboo@gmail.com'),('should reservations continue?','if its has to be continued make sure the wealth status is verified of the applicant.',1,0,'khushboo@gmail.com'),('should reservations continue?','if its has to be continued make sure the wealth status is verified of the applicant.',0,1,'divyajha@gmail.com');
/*!40000 ALTER TABLE `sol_choice` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-20 20:41:07
