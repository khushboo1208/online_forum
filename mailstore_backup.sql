-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: mailstore
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
-- Table structure for table `detailtb`
--

DROP TABLE IF EXISTS `detailtb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detailtb` (
  `Firstname` text NOT NULL,
  `Lastname` text NOT NULL,
  `Address` text NOT NULL,
  `Dateofbirth` text NOT NULL,
  `Gender` text NOT NULL,
  `Mobileno` text NOT NULL,
  `State` text NOT NULL,
  `Country` text NOT NULL,
  `Emailid` varchar(50) NOT NULL,
  `Password` text NOT NULL,
  `Secretq1` text NOT NULL,
  `Ans1` text NOT NULL,
  `Secretq2` text NOT NULL,
  `Ans2` text NOT NULL,
  `profile_image` varchar(200) NOT NULL,
  PRIMARY KEY (`Emailid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detailtb`
--

LOCK TABLES `detailtb` WRITE;
/*!40000 ALTER TABLE `detailtb` DISABLE KEYS */;
INSERT INTO `detailtb` VALUES ('divya','jha','dwarka sector-9','21/9/1994','female','2398760077','Delhi','india','divyajha@gmail.com','divya','What is your favourite sport?','football','Time at which you were born?','9:00','Jellyfish.jpg'),('Kumari','Khushboo','Trinagar,Kanhaiya Nagar','12/8/1993','female','9823465683','Delhi','India','khushboo@gmail.com','khushboo','Name of your first friend?','chandni','What is your house number?','2099','Hydrangeas.jpg'),('Komal','Rani','KN','20/7/1994','female','2345678654','Patna','india','komal.simple@gmail.com','komal','Place where you were born?','patna','DOB of your mother?','20/7/1994','Koala.jpg'),('Nemesha','Garg','Harinagar','8/1/1994','female','9111445627','Delhi','india','nemesha@gmail.com','nemesa','What is your mother\'s name?','sashi garg','Your first phone number?','8888888888',''),('pranjal','srivastava','vasant kunj','5-1-1995','male','91-9540112661','kolkata','india','prasoon@gmail.com','prasoon','Name of your favourite author?','arindam ghosh','DOB of your favourite author?','23-6-1967 sdgbf','Desert.jpg'),('saurav','agrawal','samastipur','24-5-1990','male','1234565432','bihar','india','saurav@gmail.com','saurav','Place where you were born?','samastipur','DOB of your mother?','5 may',''),('Anjita','Yadav','Dwarka','19/2/1985','female','9111111111','Delhi','india','yadavanjita@gmail.com','ninjahathodi','What is your favourite sport?','football','Time at which you were born?','12:00 am','');
/*!40000 ALTER TABLE `detailtb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pix`
--

DROP TABLE IF EXISTS `pix`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pix` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `imgdata` longblob,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pix`
--

LOCK TABLES `pix` WRITE;
/*!40000 ALTER TABLE `pix` DISABLE KEYS */;
/*!40000 ALTER TABLE `pix` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sentmail`
--

DROP TABLE IF EXISTS `sentmail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sentmail` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `des` varchar(50) NOT NULL,
  `sourse` varchar(50) NOT NULL,
  `Subject` text NOT NULL,
  `Body` text NOT NULL,
  `Date` text NOT NULL,
  `Time` time NOT NULL,
  `flag` int(10) NOT NULL,
  `Status` varchar(30) NOT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sentmail`
--

LOCK TABLES `sentmail` WRITE;
/*!40000 ALTER TABLE `sentmail` DISABLE KEYS */;
INSERT INTO `sentmail` VALUES (17,'komal@gmail.com','divyajha@gmail.com','hello','hjtdyjdghjmnhtmj','14-07-14','10:01:00',0,''),(19,'khushboo@gmail.com','divyajha@gmail.com','hello','jksdfghzdjhtfjryj','14-07-14','14:01:00',0,''),(20,'khushboo@gmail.com','divyajha@gmail.com','hello','jksdfghzdjhtfjryj','14-07-14','14:01:00',0,''),(21,'khushboo@gmail.com','divyajha@gmail.com','hello','jksdfghzdjhtfjryj','14-07-14','14:01:00',0,''),(22,'khushboo@gmail.com','divyajha@gmail.com','hello','jksdfghzdjhtfjryj','14-07-14','14:01:00',0,''),(29,'yadavanjita@gmail.com','yadavanjita@gmail.com','xcvxcvcx','xcvcxvxvf','14-07-25','00:00:01',1,''),(30,'yadavanjita@gmail.com','yadavanjita@gmail.com','dsgdfgdfgdf','dfgdfgdfgdfgd','05:05:50','05:05:50',1,''),(31,'yadavanjita@gmail.com','yadavanjita@gmail.com','sdfdsfds','dsfgvdsfgdsfgdf','14-07-25','05:07:44',1,''),(32,'yadavanjita@gmail.com','','vbnvn',';dgfdfgh','14-07-27','12:06:30',1,'sent'),(34,'khushboo@gmail.com','divyajha@gmail.com','dfth','udftgbhj','14-07-27','05:21:13',1,'sent'),(35,'prasoon@gmail.com','divyajha@gmail.com','jhgjggf','hjggfdfd','14-07-27','05:23:15',1,'sent'),(38,'khushboo@gmail.com','yadavanjita@gmail.com','er','reg','14-07-27','05:33:37',0,'drafts'),(39,'khushboo@gmail.com','yadavanjita@gmail.com','er','reg','14-07-27','05:33:45',0,'drafts'),(40,'khushboo@gmail.com','yadavanjita@gmail.com','er','reg','14-07-27','05:33:48',0,'drafts'),(41,'khushboo@gmail.com','yadavanjita@gmail.com','er','reg','14-07-27','05:33:55',0,'drafts'),(42,'khushboo@gmail.com','yadavanjita@gmail.com','er','reg','14-07-27','05:33:59',0,'drafts'),(43,'khushboo@gmail.com','yadavanjita@gmail.com','er','reg','14-07-27','05:34:03',0,'drafts'),(44,'khushboo@gmail.com','yadavanjita@gmail.com','er','reg','14-07-27','05:34:08',0,'drafts'),(45,'khushboo@gmail.com','yadavanjita@gmail.com','er','reg','14-07-27','05:34:12',0,'drafts'),(46,'khushboo@gmail.com','yadavanjita@gmail.com','er','reg','14-07-27','05:34:15',0,'drafts'),(47,'khushboo@gmail.com','yadavanjita@gmail.com','er','reg','14-07-27','05:34:19',0,'drafts'),(54,'divyajha@gmail.com','khushboo@gmail.com','rhj','rjh','14-07-29','12:32:03',1,'sent'),(56,'divyajha@gmail.com','khushboo@gmail.com','sdfv','sgve','14-07-31','12:58:32',1,'sent'),(57,'khushboo.cu93@gmail.com','khushboo@gmail.com','drh','erjhrdfagb','14-07-31','01:01:47',1,'sent'),(59,'divyajha851@gmail.com','khushboo@gmail.com','hello','','14-07-31','01:15:04',1,'sent'),(65,'komal.simle@gmail.com','komal.simple@gmail.com','dgtk','tdukgghjkg','14-07-31','03:21:18',1,'sent'),(66,'komal.simple@gmail.com','komal.simple@gmail.com','dgtk','tdukgghjkg','14-07-31','03:21:38',1,'sent'),(67,'khushboo@gmail.com','komal.simple@gmail.com','dgtk','tdukgghjkg','14-07-31','03:22:22',1,'sent'),(68,'divyajha@gmail.com','komal.simple@gmail.com','dgtk','tdukgghjkg','14-07-31','03:22:40',1,'sent'),(69,'khushboo@gmail.com','divyajha@gmail.com','ghfghfj','gjfgj','14-08-02','02:02:57',1,'sent'),(72,'divyajha851@gmail.com','komal.simple@gmail.com','testin image','this is an image test','14-08-04','01:09:43',1,'sent'),(73,'prasoon@gmail.com','komal.simple@gmail.com','hello','test imageeeeeeeeeeeee','14-08-04','01:45:50',1,'sent'),(74,'khushboo.cu93@gmail.com','komal.simple@gmail.com','hello','dyfnhjfryhtyhyyh6h','14-08-04','01:46:55',1,'sent'),(75,'divyajha@gmail.com','yadavanjita@gmail.com','szfv','fz','14-08-04','02:52:53',1,'sent'),(76,'divyajha@gmail.com','yadavanjita@gmail.com','fv','fdvbr','14-08-04','02:53:25',1,'sent'),(77,'divyajha@gmail.com','yadavanjita@gmail.com','sdfgv','df','14-08-04','02:53:41',1,'sent'),(86,'divyajha851@gmail.com','divyajha@gmail.com','testing the upload code','Chrysanthemum.jpg','14-08-18','04:04:30',1,'sent'),(87,'divyajha851@gmail.com','divyajha@gmail.com','testing the upload code','Chrysanthemum.jpg','14-08-18','04:05:50',1,'sent'),(88,'divyajha851@gmail.com','divyajha@gmail.com','no subject','Koala.jpg','14-08-18','04:17:33',1,'sent'),(89,'divyajha851@gmail.com','divyajha@gmail.com','no subject','Lighthouse.jpg','14-08-18','04:19:34',1,'sent'),(90,'divyajha@gmail.com','khushboo@gmail.com','no subject','','14-09-06','05:34:50',0,'drafts'),(91,'komal@gmail.com','khushboo@gmail.com','4hg','thgey','14-09-06','05:41:55',1,'sent');
/*!40000 ALTER TABLE `sentmail` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-20 20:40:37
