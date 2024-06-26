-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: formulario-usuario
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `action` varchar(255) NOT NULL,
  `second_factor` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
INSERT INTO `logs` VALUES (1,31,'User registered','N/A','2024-06-21 05:16:16'),(2,35,'User registered','N/A','2024-06-21 20:02:49'),(3,36,'User registered','N/A','2024-06-21 20:05:58'),(4,36,'Tentativa de 2FA','Falhou','2024-06-22 02:39:49'),(5,36,'Tentativa de 2FA','Falhou','2024-06-22 02:39:52'),(6,36,'Tentativa de 2FA','Sucesso','2024-06-22 02:39:55'),(7,37,'User registered','N/A','2024-06-21 21:41:03'),(8,37,'Tentativa de 2FA','Falhou','2024-06-22 02:41:12'),(9,37,'Tentativa de 2FA','Sucesso','2024-06-22 02:41:16'),(10,25,'Ativou usuário','','2024-06-22 02:51:01'),(11,25,'Desativou usuário','','2024-06-22 03:35:50'),(12,25,'Ativou usuário','','2024-06-21 22:46:56'),(13,25,'Desativou usuário','','2024-06-21 22:46:59'),(14,25,'Ativou usuário','','2024-06-22 03:47:51'),(15,25,'Desativou usuário','','2024-06-22 03:47:53'),(16,25,'Ativou usuário','','2024-06-21 22:49:25'),(17,25,'Desativou usuário','','2024-06-21 22:49:26'),(18,25,'Ativou usuário','','2024-06-21 22:52:01'),(19,25,'Desativou usuário','','2024-06-21 22:52:37'),(20,25,'Ativou usuário','','2024-06-21 22:52:38'),(21,37,'Tentativa de 2FA','Falhou','2024-06-22 06:46:11'),(22,37,'Tentativa de 2FA','Falhou','2024-06-22 06:46:33'),(23,25,'Desativou usuário','','2024-06-22 18:48:04'),(24,27,'Tentativa de 2FA','Sucesso','2024-06-22 18:48:19');
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-22 10:49:35
