-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: wdpf51
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `sku` char(8) NOT NULL,
  `name` varchar(35) NOT NULL,
  `product_entry` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `price` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products1`
--

DROP TABLE IF EXISTS `products1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products1` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `sku` char(8) NOT NULL,
  `name` varchar(35) NOT NULL,
  `price` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products1`
--

LOCK TABLES `products1` WRITE;
/*!40000 ALTER TABLE `products1` DISABLE KEYS */;
/*!40000 ALTER TABLE `products1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_info`
--

DROP TABLE IF EXISTS `student_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_info` (
  `stud_id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_code` varchar(10) NOT NULL,
  `stud_name` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `marks` tinyint(4) NOT NULL,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`stud_code`),
  UNIQUE KEY `stud_id` (`stud_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_info`
--

LOCK TABLES `student_info` WRITE;
/*!40000 ALTER TABLE `student_info` DISABLE KEYS */;
INSERT INTO `student_info` VALUES (1,'101','Mark','English',68,'34545693537'),(2,'102','Joseph','Physics',70,'34545693537'),(3,'103','John','Maths',70,'25648547521'),(4,'104','Barack','Maths',90,'85465245896'),(5,'105','Rinky','Maths',85,'54215487954'),(6,'106','Adam','Science',92,'5469874521'),(7,'107','Andrew','Science',83,'86548754254'),(8,'108','Brayan','Science',85,'52498854555'),(10,'11','Selim','Maths',60,'0154875425'),(9,'110','Alexandar','Biology',67,'84569845321');
/*!40000 ALTER TABLE `student_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `student_id` smallint(10) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `student_phone` varchar(20) NOT NULL,
  UNIQUE KEY `student_email` (`student_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (1009,'Aklima Akter','aklima@gmail.com','01326584985'),(1003,'Anamul Islam','anamu@gmail.com','01987546545'),(1002,'Amzad Hossain','hossain@gmail.com','01785654875'),(1011,'Kobir','kobir@gmail.com','01326585555'),(1008,'Rahim','rahim@gmail.com','01265584985'),(1007,'Sajed','sajed@gmail.com','01954584985'),(1010,'Sultana Akter','sultanaakter@gmail.com','09826584985'),(1012,'Aminul Islam','tokye09@gmail.com','01723854184');
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `after_student_entry` AFTER INSERT ON `students` FOR EACH ROW BEGIN
 INSERT INTO students_table_log VALUES
(NULL,NEW.student_id,NEW.student_name,NEW.student_email,NEW.student_phone,'INSERT',CURRENT_TIMESTAMP);
 END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER after_student_update
AFTER UPDATE ON students
FOR EACH ROW
BEGIN
 INSERT INTO students_table_log VALUES
(NULL,NEW.student_id,NEW.student_name,NEW.student_email,NEW.student_phone,'UPDATE',CURRENT_TIMESTAMP);
 END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_unicode_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER before_student_update
BEFORE DELETE ON students
FOR EACH ROW
BEGIN
 INSERT INTO students_table_log VALUES
(NULL,OLD.student_id,OLD.student_name,OLD.student_email,OLD.student_phone,'DELETE',CURRENT_TIMESTAMP);
 END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `students_table_log`
--

DROP TABLE IF EXISTS `students_table_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students_table_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `student_enail` varchar(30) NOT NULL,
  `student_phone` varchar(20) NOT NULL,
  `action` varchar(10) NOT NULL,
  `action_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students_table_log`
--

LOCK TABLES `students_table_log` WRITE;
/*!40000 ALTER TABLE `students_table_log` DISABLE KEYS */;
INSERT INTO `students_table_log` VALUES (1,1000,'Aminul islam Toky','aminul@gmail.com','01920606089','INSERT','0000-00-00 00:00:00'),(2,1002,'Amzad Hossain','hossain@gmail.com','01785654875','INSERT','0000-00-00 00:00:00'),(3,1003,'Anamul Islam','anamu@gmail.com','01987546545','INSERT','2022-08-27 12:16:41'),(4,1000,'Aminul islam Toky','aminul@gmail.com','01920606089','UPDATE','2022-08-27 12:25:42'),(5,1009,'Aklima','aklima@gmail.com','01326584985','UPDATE','2022-08-27 12:27:10'),(6,1010,'Sultana Akter','sultanaakter@gmail.com','09826584985','UPDATE','2022-08-27 12:34:57'),(7,1000,'Aminul islam Toky','aminul@gmail.com','01400401133','DELETE','2022-08-27 12:44:00');
/*!40000 ALTER TABLE `students_table_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` smallint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` char(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Aminul Tokye','imtokye@gmail.com','7c3607b8e61bcf1944e9e8503a660f21f4b6f3f1'),(2,'Aminul','tokye09@gmail.com','abcd123'),(3,'Toky','toky@gmail.com','abcd123');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-08-30 16:09:56
