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
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `mae` varchar(45) NOT NULL,
  `email` varchar(110) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `rua` varchar(45) NOT NULL,
  `datanasc` date NOT NULL,
  `celular` varchar(20) NOT NULL,
  `telfixo` varchar(20) NOT NULL,
  `login` varchar(6) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `senhaconfirm` varchar(8) NOT NULL,
  `genero` varchar(45) NOT NULL,
  `permissoes` int(11) NOT NULL,
  `2fa` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (25,'','','','','','','','','','0000-00-00','','','ADMINC','CPASADMI','CPASADMI','',2,'',1),(27,'sdasdsadsadsadsad','sdsadsad','gleidsoncruz33@gmail.com','65067-10','176.220.707-93','Jardim Atlântico','São Luís','MA','Rua C','2024-06-05','+55 (21) 983162232','(55) 21 - 83123223','Joseph','gleidson','gleidson','masculino',1,'',0),(31,'sdasdsadsadsadsad','gleice','gleidsoncruz33@gmail.com','65067-10','176.220.707-93','Jardim Atlântico','São Luís','MA','Rua C','2024-06-05','+55 (21) 983162232','(55) 21 - 83162232','gracie','21321321','213','feminino',1,'',1),(32,'sdasdsadsadsadsad','sdsadsad','gleidsoncruz33@gmail.com','65067-10','176.220.707-93','Jardim Atlântico','São Luís','MA','Rua C','2024-06-13','+55 (21) 983162232','(55) 21 - 83162232','pedrin','a','d','feminino',1,'',1),(33,'sdasdsadsadsadsad','sdsadsad','gleidsoncruz33@gmail.com','65067-10','176.220.707-93','Jardim Atlântico','São Luís','MA','Rua C','2024-06-13','+55 (21) 983162232','(55) 21 - 83162232','pedrin','gleidosn','graciely','feminino',1,'',1),(34,'sdasdsadsadsadsad','sdsadsad','gleidsoncruz33@gmail.com','65067-10','176.220.707-93','Jardim Atlântico','São Luís','MA','Rua C','2024-06-13','+55 (21) 983162232','(55) 21 - 83162232','pedrin','gleidosn','graciely','feminino',1,'',1),(35,'sdasdsadsadsadsad','sdsadsad','gleidsoncruz33@gmail.com','65067-10','176.220.707-93','Jardim Atlântico','São Luís','MA','Rua C','2024-06-13','+55 (21) 983162232','(55) 21 - 83162232','pedrin','gleidosn','graciely','feminino',1,'',1),(36,'Gleidson cruz silva','gleice','gleidsoncruz33@gmail.com','65067-10','176.220.707-93','Jardim Atlântico','São Luís','MA','Rua C','2024-05-29','+55 (21) 983162232','(55) 21 - 83162232','lcpiti','aaaaaaaa','aaaaaaaa','masculino',1,'',1),(37,'sdasdsadsadsadsad','gleice','gleidsoncruz33@gmail.com','65067-10','176.220.707-93','Jardim Atlântico','São Luís','MA','Rua C','2024-06-11','+55 (21) 983162232','(55) 29 - 83162232','gleids','graciely','graciely','feminino',1,'',1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
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
