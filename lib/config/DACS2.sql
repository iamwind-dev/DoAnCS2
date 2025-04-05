-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: doanqldulich
-- ------------------------------------------------------
-- Server version	9.0.0

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
-- Table structure for table `book_tour`
--

DROP TABLE IF EXISTS `book_tour`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `book_tour` (
  `id` int NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) DEFAULT NULL,
  `customer_email` varchar(100) DEFAULT NULL,
  `customer_phone` varchar(20) DEFAULT NULL,
  `tour_id` int DEFAULT NULL,
  `capacity` int DEFAULT NULL,
  `customer_address` text,
  `note` text,
  `date` date DEFAULT NULL,
  `hotel_id` int DEFAULT NULL,
  `total` int DEFAULT NULL,
  `room` int DEFAULT NULL,
  `status_id` int DEFAULT '1',
  `booktour_status` varchar(45) NOT NULL DEFAULT 'Tiếp Nhận',
  `user_id` int DEFAULT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book_tour`
--

LOCK TABLES `book_tour` WRITE;
/*!40000 ALTER TABLE `book_tour` DISABLE KEYS */;
INSERT INTO `book_tour` VALUES (46,'Đinh Lê Thái Dương','duongdinh3067@gmail.com','0353993283',5,2,'Làng Cù Dù, Xã Lộc Vĩnh, xã Lộc Vĩnh, Thành phố Huế, Tỉnh Thừa Thiên Huế, Việt Nam','a',NULL,6,10426478,2,5,'Đã Huỷ',NULL,NULL,NULL),(47,NULL,NULL,NULL,3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,5,'Đã Huỷ',NULL,NULL,NULL),(48,NULL,NULL,NULL,2,NULL,NULL,NULL,NULL,1,NULL,NULL,5,'Đã Huỷ',NULL,NULL,NULL),(49,NULL,NULL,NULL,2,NULL,NULL,NULL,NULL,1,NULL,NULL,5,'Đã Huỷ',NULL,NULL,NULL),(50,NULL,NULL,NULL,2,NULL,NULL,NULL,NULL,1,NULL,NULL,5,'Đã Huỷ',NULL,NULL,NULL),(51,'Trần Như Kha','duongdinh301@gmail.com','0353993283',5,2,'Huế','q',NULL,6,7776480,1,5,'Đã Huỷ',NULL,NULL,NULL),(52,'Trương Thanh Cuân','heheh@gmail.com','0123456789',19,2,'Huế','ok nice great','2024-06-05',5,4700026,2,3,'Đã thanh toán',9,'2024-06-22','2024-06-26'),(53,'Đinh Lê Thái Dương','duongdinh301@gmail.com','0353993283',20,1,'Huế','a','2024-07-23',0,2300000,0,1,'Tiếp Nhận',2,'2024-06-19','2024-06-21'),(54,'Đinh Lê Thái Dương','duongdinh301@gmail.com','0353993283',19,3,'Huế','','2024-11-23',0,6000000,0,1,'Tiếp Nhận',2,'2024-06-22','2024-06-26');
/*!40000 ALTER TABLE `book_tour` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book_tour_status`
--

DROP TABLE IF EXISTS `book_tour_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `book_tour_status` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tour_statusname` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book_tour_status`
--

LOCK TABLES `book_tour_status` WRITE;
/*!40000 ALTER TABLE `book_tour_status` DISABLE KEYS */;
INSERT INTO `book_tour_status` VALUES (1,'Tiếp Nhận'),(2,'Đã Xác Nhận'),(3,'Đã Thanh Toán'),(4,'Đã Kết Thúc'),(5,'Đã Huỷ');
/*!40000 ALTER TABLE `book_tour_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL,
  `category_status` varchar(50) NOT NULL,
  `category_description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Kinh Nghiệm Du lịch','Hiển thị','a'),(3,'Tin Tức','Hiển thị','a');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tour_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `comment` text,
  `time` datetime DEFAULT NULL,
  `status_id` int DEFAULT '1',
  `comment_status` varchar(45) DEFAULT 'Hiển Thị',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` VALUES (1,3,9,'Good','2023-12-10 08:30:00',1,'Hiển Thị'),(2,3,10,'Hay','2023-12-11 02:09:00',1,'Hiển Thị'),(3,3,7,'Tốt','2023-12-10 08:30:00',1,'Hiển Thị'),(17,3,3,'q','2023-12-12 00:00:51',1,'Hiển Thị'),(18,3,9,'t','2023-12-12 00:00:51',1,'Hiển Thị'),(19,3,9,'a','2023-12-11 03:03:11',1,'Hiển Thị'),(20,3,9,'o','2023-12-11 03:05:20',1,'Hiển Thị'),(21,3,9,'f','2023-12-11 03:08:53',1,'Hiển Thị'),(23,3,9,'Tour du thuyền 2 ngày 1 đêm rất tuyệt vời,tôi đc ngắm vẻ đẹp cả vịnh Hạ Long,khám phá các hang động.\nNhân viên tư vấn nhiệt tình,phục vụ chu đáo. Đồ ăn ngon,phòng ốc đẹp.\nĐây thực sự là trải nghiệm đáng nhớ,mình sẽ tiếp tục ủng hộ và giới thiệu cho bạn bè. Cảm ơn du thuyền!','2023-12-12 00:04:45',2,'Nổi Bật'),(24,3,9,'a','2023-12-12 02:12:50',1,'Hiển Thị'),(25,2,9,'a','2023-12-10 08:30:00',1,'Hiển Thị'),(26,2,9,'đẹp quá trời\n','2023-12-12 00:04:45',1,'Hiển Thị'),(27,5,9,'tuyệt','2023-12-12 00:04:45',1,'Hiển Thị'),(28,2,9,'abc\n','2023-12-12 02:19:24',1,'Hiển Thị'),(29,5,9,'hay','2023-12-12 02:30:31',1,'Hiển Thị'),(30,19,9,'Tôi rất thích nóoooooooo!!!!\n','2024-06-05 14:46:18',1,'Hiển Thị'),(31,19,9,'Làm ơn hãy cho tôi điii','2024-06-05 14:47:02',1,'Hiển Thị'),(32,19,9,'tuyệt','2024-06-05 14:50:43',1,'Hiển Thị'),(33,19,9,'tuyệt','2024-06-05 14:50:43',1,'Hiển Thị'),(34,19,9,'hay','2024-06-05 14:50:51',1,'Hiển Thị'),(35,19,9,'Tôi hâm mộ nó, ước gì tôi được đến đó','2024-06-05 14:52:41',3,'Ẩn'),(36,20,9,'AAAAAAAAAAAAAAAAAA','2024-06-05 20:40:40',1,'Hiển Thị'),(37,20,2,'hi','2025-04-06 02:59:24',1,'Hiển Thị'),(38,20,2,'hello','2025-04-06 03:08:42',1,'Hiển Thị'),(39,19,2,'hi','2025-04-06 03:24:46',1,'Hiển Thị');
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hotel`
--

DROP TABLE IF EXISTS `hotel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hotel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `hotel_name` varchar(255) NOT NULL,
  `hotel_price` int DEFAULT NULL,
  `hotel_status` varchar(50) NOT NULL DEFAULT 'Hiển thị',
  `hotel_description` text,
  `hotel_introduction` text,
  `hotel_location` varchar(225) DEFAULT NULL,
  `hotel_location_id` int DEFAULT NULL,
  `hotel_image_url` varchar(45) DEFAULT NULL,
  `hotel_status_id` int DEFAULT '1',
  `hotel_phone` varchar(45) DEFAULT NULL,
  `hotel_address` varchar(225) DEFAULT NULL,
  `hotel_rating` float DEFAULT NULL,
  `hotel_contact` varchar(45) DEFAULT NULL,
  `hotel_amenities` varchar(255) DEFAULT NULL,
  `check_in_time` datetime DEFAULT NULL,
  `check_out_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotel`
--

LOCK TABLES `hotel` WRITE;
/*!40000 ALTER TABLE `hotel` DISABLE KEYS */;
INSERT INTO `hotel` VALUES (1,'Melia Vinpearl Hue',1514,'Còn Phòng','<p>a</p>','<p>b</p>','Huế',4,'20017508-b6f857a2037c1d6ed673ea44b01c87bc.png',1,'08536844534','50A Hùng Vương, Phú Nhuận, Thành phố Huế, Tỉnh Thừa Thiên Huế, Việt Nam',4.8,NULL,'Máy lạnh,Nhà hàng,Hồ bơi,Lễ tân 24h,Chỗ đậu xe,Thang máy',NULL,NULL),(2,'Khách sạn Mường Thanh Holiday Huế',1134559,'Hết Phòng',NULL,NULL,'Huế',4,NULL,2,'065151489484','38 Lê Lợi, Phú Hội, Thành phố Huế, Tỉnh Thừa Thiên Huế, Việt Nam',4.9,NULL,'Máy lạnh,Nhà hàng,Hồ bơi,Lễ tân 24h,Chỗ đậu xe,Thang máy,Wifi',NULL,NULL),(4,'Silk Path Grand Hue Hotel',2096233,'Còn Phòng',NULL,NULL,'Huế',4,NULL,1,'051549498498','02 Lê Lợi, Vĩnh Ninh, Thành phố Huế, Tỉnh Thừa Thiên Huế, Việt Nam, ',4.7,NULL,'Máy lạnh,Nhà hàng,Hồ bơi,Lễ tân 24h,Chỗ đậu xe,Thang máy,Wifi',NULL,NULL),(5,'Davue Hotel Da Nang',350013,'Còn Phòng',NULL,NULL,'Đà Nẵng',5,NULL,1,NULL,'57-59 Đỗ Bí, Mỹ An, Ngũ Hành Sơn, Đà Nẵng, Việt Nam',2,NULL,'Máy lạnh,Nhà hàng,Hồ bơi,Lễ tân 24h,Chỗ đậu xe,Thang máy,Wifi',NULL,NULL),(6,'Eastin Hotel & Residences Hanoi',2649998,'Còn Phòng',NULL,NULL,'Hà Nội',6,NULL,1,NULL,'21 Duy Tan, Quận Cầu Giấy, Hà Nội, Việt Nam',5,NULL,'Máy lạnh,Nhà hàng,Hồ bơi,Lễ tân 24h,Chỗ đậu xe,Thang máy,Wifi',NULL,NULL);
/*!40000 ALTER TABLE `hotel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hotel_status`
--

DROP TABLE IF EXISTS `hotel_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hotel_status` (
  `id` int NOT NULL,
  `hotel_status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotel_status`
--

LOCK TABLES `hotel_status` WRITE;
/*!40000 ALTER TABLE `hotel_status` DISABLE KEYS */;
INSERT INTO `hotel_status` VALUES (1,'Còn phòng'),(2,'Hết phòng');
/*!40000 ALTER TABLE `hotel_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `location` (
  `id` int NOT NULL AUTO_INCREMENT,
  `location_name` varchar(100) NOT NULL,
  `location_description` text,
  `location_image_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location`
--

LOCK TABLES `location` WRITE;
/*!40000 ALTER TABLE `location` DISABLE KEYS */;
INSERT INTO `location` VALUES (1,'Du lịch miền Trung','a','du-lich-mien-trung.jpg'),(2,'Du Lịch Miền Nam','a','Du-lich-mien-Nam-2.jpg'),(3,'Du Lịch Miền Bắc','a','du-lich-mien-bac-thumb.jpg'),(4,'Huế ','a','Huejpg.jpg'),(5,'Đà Nẵng',NULL,'danang.jpg'),(6,'Hà Nội',NULL,'hanoi.jpg'),(7,'Quảng Ninh',NULL,'quangninh.jpg'),(8,'TP Hồ Chí Minh',NULL,'hcm.jpg'),(10,'Đà Lạt',NULL,'dalat.jpg');
/*!40000 ALTER TABLE `location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post` (
  `post_id` int NOT NULL AUTO_INCREMENT,
  `post_title` varchar(255) NOT NULL,
  `post_image_url` varchar(255) DEFAULT NULL,
  `post_content` text,
  `post_category_id` int DEFAULT NULL,
  `post_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_id`),
  KEY `post_category_id` (`post_category_id`),
  CONSTRAINT `post_ibfk_1` FOREIGN KEY (`post_category_id`) REFERENCES `category` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_desc` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (0,'Khách Hàng',NULL),(1,'Admin',NULL),(2,'Nhân viên',NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `room` (
  `id` int NOT NULL AUTO_INCREMENT,
  `hotel_id` int DEFAULT NULL,
  `room_name` varchar(255) DEFAULT NULL,
  `roomtype` varchar(45) DEFAULT NULL,
  `room_status` tinyint DEFAULT NULL,
  `room_price` int DEFAULT NULL,
  `room_maximum` int DEFAULT NULL,
  `room_amentities` varchar(45) DEFAULT NULL,
  `room_quantity` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room`
--

LOCK TABLES `room` WRITE;
/*!40000 ALTER TABLE `room` DISABLE KEYS */;
INSERT INTO `room` VALUES (1,1,'Premium Room With Views - Room Only - Bf1','2 Giường Đơn Hoặc 1 Giường Cỡ King',1,1920190,2,'Bồn Tắm,Máy Lạnh',3),(2,1,'Premium Room With Views - Breakfast - Bf1','2 Giường Đơn Hoặc 1 Giường Cỡ King',1,2242391,2,'Bồn Tắm,Máy Lạnh',2),(3,1,'Premium Room With Views - Room Only - Clg','2 Giường Đơn Hoặc 1 Giường Cỡ King',1,2559912,2,'Bồn Tắm,Máy Lạnh',1),(4,2,'Superior Double Room','1 Giường Đôi',1,350013,2,'Bồn Tắm,Máy Lạnh',2),(5,2,'Deluxe Double View Room','1 Giường Cỡ Queen',1,435576,2,'Bồn Tắm,Máy Lạnh',3);
/*!40000 ALTER TABLE `room` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `status` (
  `id` int NOT NULL AUTO_INCREMENT,
  `status_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,'Hiển Thị'),(2,'Ẩn'),(3,'Nổi Bật');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tour`
--

DROP TABLE IF EXISTS `tour`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tour` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tour_name` varchar(255) NOT NULL,
  `tour_description` text,
  `tour_introduction` text,
  `tour_journey` varchar(255) NOT NULL,
  `tour_schedule` varchar(255) NOT NULL,
  `tour_start_date` date DEFAULT NULL,
  `tour_end_date` date DEFAULT NULL,
  `tour_price` decimal(10,0) DEFAULT NULL,
  `tour_max_capacity` int DEFAULT NULL,
  `tour_registration` int DEFAULT NULL,
  `tour_vehicle` varchar(255) NOT NULL,
  `tour_starting_point` varchar(255) NOT NULL,
  `tour_location_id` int DEFAULT NULL,
  `tour_image_url` varchar(255) DEFAULT NULL,
  `tour_includes` text,
  `tour_highlights` text,
  `tour_create_date` date DEFAULT NULL,
  `tour_edit_date` datetime DEFAULT NULL,
  `tour_total_view` int DEFAULT '0',
  `tour_location_name` varchar(255) DEFAULT NULL,
  `tour_status` varchar(45) DEFAULT 'Hiển thị',
  `tour_status_id` int DEFAULT '1',
  `tour_star` double DEFAULT NULL,
  `tour_duration` int DEFAULT NULL,
  `tour_number_of_rating` int DEFAULT NULL,
  `url` varchar(2000) DEFAULT NULL,
  `tour_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tour_location_id` (`tour_location_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tour`
--

LOCK TABLES `tour` WRITE;
/*!40000 ALTER TABLE `tour` DISABLE KEYS */;
INSERT INTO `tour` VALUES (19,'Du lich Da Nang','<p>This is some sample content.</p><p>This is some sample content.</p><p>Ngày 1 - GÓI DỊCH VỤ PHÒNG VÀ VÉ MÁY BAY<br>*Gói dịch vụ bao gồm:<br>• Vé máy bay khứ hồi Vietravel Airlines<br>• 02 đêm phòng khách sạn loại phòng tiêu chuẩn<br>• Thưởng thức 2 bữa sáng tại khách sạn với thực đơn phong phú<br>• Miễn phí sử dụng wifi và các tiện ích của khách sạn.<br>• Thuế và Phí phục vụ<br>#<br>*Không bao gồm:<br>• Chi phí ăn uống cá nhân: ăn uống ngoài chương trình, giặt ủi, phụ thu phòng đơn<br>• Chi phí tham quan ngoài chương trình<br>• Các chi phí khác không bao gồm trong giá.<br>#<br>*Điều kiện áp dụng:<br>• Đặt tối thiểu 2 khách/phòng 2 đêm<br>• Phụ thu cuối tuần và Lễ</p>','<p>Hayyyyyyyyy</p>','Huế - Đà Nẵng','Huế - Đà Nẵng','2024-06-18','2024-06-22',2000000,NULL,NULL,'Ô tô','Huế',5,'5.jpg',NULL,NULL,'2024-06-05','2024-08-09 02:32:37',62,'Đà Nẵng','Nổi Bật',3,1.1666666666667,4,0,'https://firebasestorage.googleapis.com/v0/b/winktraveller-44560.appspot.com/o/tour%2F5.jpg?alt=media','tour_427022643266'),(20,'Vinh Ha Long','<p>This is some sample content.</p><p>This is some sample content.</p><p>This is some sample content.</p><p>Ngày 1 - TP.HCM – SB NỘI BÀI – HÀ NỘI 00 bữa ăn: (tự túc ăn ngày đầu tiên)<br>#<br>Quý khách tập trung tại sân bay Tân Sơn Nhất (Ga nội địa), hướng dẫn viên hỗ trợ khách làm thủ tục đáp chuyến bay đi Hà Nội. Đến sân bay Nội Bài, xe và HDV Vietravel đón Quý khách đi Hà Nội nhận phòng khách sạn nghỉ ngơi hoặc tự do đi tham quan.<br>#<br>Nghỉ đêm tại Hà Nội.&nbsp;<br>#<br>Ngày 2 - HÀ NỘI – HẠ LONG 03 bữa ăn: (Sáng, Trưa, Chiều)<br>Quý khách ăn sáng và trả phòng. Xe khởi hành đưa Quý khách đi tham quan Hồ Hoàn Kiếm ngắm bên ngoài Tháp Rùa, Đền Ngọc Sơn, Cầu Thê Húc. Quý khách tiếp tục khởi hành đi Hạ Long theo đường cao tốc Hải Phòng – Hạ Long, trên đường ngắm cảnh Bạch Đằng Giang.<br>#<br>Đến nơi, Quý khách dùng cơm trưa và xuống thuyền đi du ngoạn Vịnh Hạ Long - Thắng cảnh thiên nhiên tuyệt đẹp và vô cùng sống động, được UNESCO công nhận là di sản thiên nhiên Thế giới năm 1994.<br>Động Thiên Cung là một trong những động đẹp nhất ở Hạ Long. Vẻ đẹp nguy nga và lộng lẫy bởi những lớp thạch nhũ và những luồng ánh sáng lung linh.<br>#<br>Từ trên tàu ngắm nhìn các hòn đảo lớn nhỏ trong Vịnh Hạ Long: Hòn Gà Chọi, Hòn Lư Hương.<br>Quý khách ngắm hoàng hôn và dùng cơm chiều trên tàu. Xe đưa Quý khách về khách sạn nhận phòng, tự do nghỉ ngơi.<br>Nghỉ đêm tại Hạ Long.</p>','','Đà Nẵng - Quảng Ninh','Đà Nẵng - Quảng Ninh','2024-06-19','2024-06-21',2300000,NULL,NULL,'Máy bay','Đà Nẵng',7,'kinh-nghiem-du-lich-ha-long-1_1674039271.jpg',NULL,NULL,'2024-06-05','2024-08-09 02:32:18',35,'Quảng Ninh','Nổi Bật',3,3.25,2,2,'https://firebasestorage.googleapis.com/v0/b/winktraveller-44560.appspot.com/o/tour%2Fkinh-nghiem-du-lich-ha-long-1_1674039271.jpg?alt=media','tour_427022643211'),(21,'Tour du lich Hue','<p>This is some sample content.</p><p><br>8:00 - 08:20: Xe và HDV đón khách tại khách sạn trung tâm TP. Huế đến bến thuyền Tòa Khâm. Du thuyền trên sông Hương</p><p><strong>Du thuyền trên sông Hương tham quan chùa Thiên Mụ</strong>, ngôi chùa cổ kính được xây dựng từ đầu của thế kỉ XVII.</p><figure class=\"image\"><img style=\"aspect-ratio:710/410;\" src=\"https://cdn2.ivivu.com/2019/12/09/11/ivivu-chua-thien-mu.gif\" alt=\"\" width=\"710\" height=\"410\"></figure><p><i>Vẻ cổ kính mênh mông giữa lịch sử Huế, từ thế kỷ XVII.</i></p><p><strong>Đại Nội Huế</strong>: Hành trình qua Hoàng cung triều Nguyễn, lưu giữ dấu ấn cuối cùng của phong kiến Việt.</p><figure class=\"image\"><img style=\"aspect-ratio:710/399;\" src=\"https://cdn2.ivivu.com/2020/06/04/17/ivivu-dai-noi-hue.gif\" alt=\"\" width=\"710\" height=\"399\"></figure><p><i>Dấu ấn triều Nguyễn với Ngọ Môn, Tử Cấm Thành, Thế Miếu.</i></p><p>Tham quan mua sắm tại <strong>chợ Đông Ba</strong> - ngôi chợ đã trãi qua hơn 100 năm tuổi và trở thành trung tâm mua sắm lớn nhất của TP Huế.</p><figure class=\"image\"><img style=\"aspect-ratio:710/410;\" src=\"https://cdn2.ivivu.com/2024/01/30/16/ivivu-cho-dong-ba-hue.jpg\" alt=\"\" width=\"710\" height=\"410\"></figure><p><i>Hồn cố đô trong từng góc chợ, trải qua 100 năm lịch sử mua sắm của Huế.</i></p><p>Trưa:&nbsp;Thưởng thức bữa trưa Huế tại My Home, sau đó tĩnh tâm với nhạc thiền, ngâm chân và thưởng thức Trà Thảo Dược Huế.</p><p>Khám phá kiến trúc độc đáo của<strong> Lăng Minh Mạng và Lăng Khải Định</strong>, nơi hòa quyện giữa phong cách Đông - Tây, kế tiếp là trải nghiệm văn hóa truyền thống tại làng làm nón, làm hương.</p><figure class=\"image\"><img style=\"aspect-ratio:710/410;\" src=\"https://cdn2.ivivu.com/2020/09/29/16/ivivu-lang-minh-mang-2.jpg\" alt=\"\" width=\"710\" height=\"410\"></figure><p><i>Lăng Minh Mạng: Nơi yên nghỉ của hoàng đế Minh Mạng, với kiến trúc hài hòa và khung cảnh thanh bình.</i></p><figure class=\"image\"><img style=\"aspect-ratio:710/410;\" src=\"https://cdn2.ivivu.com/2020/09/29/16/ivivu-lang-khai-dinh.jpg\" alt=\"\" width=\"710\" height=\"410\"></figure><p><i>Lăng Khải Định: Lăng mộ của hoàng đế Khải Định, pha trộn kiến trúc Pháp và Việt, độc đáo và cầu kỳ.</i></p><p><strong>Tham quan làng làm nón, làm hương và trải nghiệm làm hương, chằm nón.</strong></p><figure class=\"image\"><img style=\"aspect-ratio:710/410;\" src=\"https://cdn2.ivivu.com/2023/02/13/17/ivivu-lang-huong-thuy-xuan.gif\" alt=\"\" width=\"710\" height=\"410\"></figure><p><i>Trải nghiệm văn hóa làm hương, chằm nón và lưu giữ khoảnh khắc xinh xắn tại làng truyền thống.</i></p><p>16h-16h30: &nbsp;Xe và HDV đưa quý khách về lại khách sạn. Kết thúc chương trình!</p>','<h3><strong>Tour Huế Trong Ngày: Khám Phá City Tour Huế</strong></h3><p>Trải nghiệm du lịch Huế: Du thuyền sông Hương, thăm chùa Thiên Mụ và Đại Nội, ăn trưa món Huế và thưởng trà Thảo Dược, ngâm chân thảo dược, chợ Đông Ba và khám phá lăng Minh Mạng và Khải Định, tham quan làng nghề truyền thống. Tour kết thúc với kỷ niệm phong phú về cố đô.</p>','5 Ngày','2 ngày 1 đêm','2024-07-20','2024-07-22',500000,NULL,NULL,'Xe Bus','Huế',1,'chùa thiên mụ 1_1690188137.jpg',NULL,NULL,'2024-07-20','2024-08-09 02:31:52',0,'Du lịch miền Trung','Hiển Thị',1,NULL,2,NULL,'https://firebasestorage.googleapis.com/v0/b/winktraveller-44560.appspot.com/o/tour%2Fchùa thiên mụ 1_1690188137.jpg?alt=media','tour_42702264329'),(22,'Tour du lich Hue','<p>This is some sample content.</p>','','5 Ngày','2 ngày 1 đêm','2024-07-20','2024-07-25',500000,NULL,NULL,'Xe Bus','Huế',1,'ivivu-lang-khai-dinh.jpg',NULL,NULL,'2024-07-20','2024-08-09 02:31:31',0,'Du lịch miền Trung','Hiển Thị',1,NULL,5,NULL,'https://firebasestorage.googleapis.com/v0/b/winktraveller-44560.appspot.com/o/tour%2Fivivu-lang-khai-dinh.jpg?alt=media','tour_42702264328'),(23,'Tour Phú Quốc 3N2Đ : Grand World - 4 Đảo - Ngắm San Hô','','','5 Ngày','2 ngày 1 đêm','2024-07-21','2024-07-26',50000000,NULL,NULL,'Máy Bay','Huế',2,'10025472-6bc7645d7033cfc65bd2fbfac8cce5a8.png',NULL,NULL,'2024-07-21',NULL,0,'Du Lịch Miền Nam','Hiển Thị',1,NULL,5,NULL,'https://firebasestorage.googleapis.com/v0/b/winktraveller-44560.appspot.com/o/uploads%2F10025472-6bc7645d7033cfc65bd2fbfac8cce5a8.png?alt=media&token=','tour_42702264327'),(24,'Tour Đa Lat 3N2Đ : Đa Lat - Thanh Pho Ngan Hoa','<p>This is some sample content.</p>','','5 Ngày','2 ngày 1 đêm','2024-07-21','2024-07-22',100003,NULL,NULL,'Xe Bus','Huế',1,'1.png',NULL,NULL,'2024-07-21','2024-08-09 02:31:06',0,'Du lịch miền Trung','Hiển Thị',1,NULL,1,NULL,'https://firebasestorage.googleapis.com/v0/b/winktraveller-44560.appspot.com/o/tour%2F1.png?alt=media','tour_4270226436'),(25,'Tour Phu Quoc 3N2Đ : Grand World - 4 Đao - Ngam San Ho','<p>This is some sample content.</p>','','5 Ngày','2 ngày 1 đêm','2024-07-21','2024-07-23',15644986,NULL,NULL,'Xe Bus','Huế',2,'10025472-6bc7645d7033cfc65bd2fbfac8cce5a8.png',NULL,NULL,'2024-07-21','2024-08-09 02:30:31',0,'Du Lịch Miền Nam','Hiển Thị',1,NULL,2,NULL,'https://firebasestorage.googleapis.com/v0/b/winktraveller-44560.appspot.com/o/tour%2F10025472-6bc7645d7033cfc65bd2fbfac8cce5a8.png?alt=media','tour_42702264325'),(26,'Du Lich Sai Gon','<p>This is some sample content.</p><p>This is some sample content.</p><p>This is some sample content.</p>','','4 Ngày','2 ngày 1 đêm','2024-07-22','2024-07-27',506620,NULL,NULL,'Xe Bus','Huế',8,'pho-co-ha-noi.jpg',NULL,NULL,'2024-07-22','2024-08-09 02:30:05',0,'TP Hồ Chí Minh','Hiển Thị',1,NULL,5,NULL,'https://firebasestorage.googleapis.com/v0/b/winktraveller-44560.appspot.com/o/tour%2Fpho-co-ha-noi.jpg?alt=media','tour_4270226434'),(35,'Tour Hue Trong Ngay :Kham pha City Tour Hue','<p>&nbsp;</p><h3><strong>Khám Phá City Tour Huế</strong></h3><p>Khám phá Huế trong ngày với hành trình city tour Huế. Tham quan Đại Nội, quần thể di tích lịch sử quan trọng của triều Nguyễn với kiến trúc độc đáo và quy mô hoành tráng. Ghé thăm chùa Thiên Mụ, ngôi chùa cổ kính nổi tiếng nằm bên bờ sông Hương. Tham quan lăng vua Tự Đức và lăng Khải Định, hai trong số các lăng tẩm đẹp nhất tại Huế, với kiến trúc tinh xảo và nghệ thuật chạm khắc độc đáo. Thưởng ngoạn cảnh đẹp sông Hương và trải nghiệm ẩm thực đặc sắc của Huế. Tour lý tưởng cho gia đình và du khách muốn khám phá vẻ đẹp văn hóa và lịch sử của cố đô Huế trong thời gian ngắn.</p>','','Huế','1 Ngày','2024-08-08','2024-08-09',10999913,NULL,NULL,'Máy Bay','Huế',4,'ivivu-lang-khai-dinh.jpg',NULL,NULL,'2024-08-08','2024-08-09 02:34:40',1,'Huế ','Hiển Thị',1,NULL,1,NULL,'https://firebasestorage.googleapis.com/v0/b/winktraveller-44560.appspot.com/o/tour%2Fivivu-lang-khai-dinh.jpg?alt=media','tour_4270226432'),(36,'Tour Phu Quoc 3N2Đ : Grand World - 4 Đao - Ngam San Ho','<p>This is some sample content.</p><p>This is some sample content.</p>','','4 Ngày','1 ngày','2024-08-25','2024-08-31',506620,NULL,NULL,'Máy Bay','Đà Nẵng',1,'ivivu-lang-khai-dinh.jpg',NULL,NULL,'2024-08-09','2024-08-09 02:29:38',0,'Du lịch miền Trung','Hiển Thị',1,NULL,2,NULL,'https://firebasestorage.googleapis.com/v0/b/winktraveller-44560.appspot.com/o/tour%2Fivivu-lang-khai-dinh.jpg?alt=media','tour_4011785293'),(37,'Tour Mien Trung 4N3D: Kham pha Quy Nhon - Phu Yen','<p>&nbsp;</p><h3><strong>Từ Miền Đất Võ Đến Xứ Hoa Vàng Cỏ Xanh</strong></h3><p>Khám phá miền Trung Việt Nam trong 3 ngày 4 đêm bằng xe lửa, với hành trình qua Quy Nhơn và Phú Yên. Trải nghiệm chuyến tàu lửa thú vị, tận hưởng phong cảnh đẹp trên đường đi. Tham quan các điểm đến nổi bật như Eo Gió, Kỳ Co, Ghềnh Đá Đĩa và Bãi Xép. Khám phá vẻ đẹp hoang sơ và thơ mộng của bãi biển, thưởng thức ẩm thực đặc sản miền Trung. Tour lý tưởng cho du khách muốn tận hưởng kỳ nghỉ thư giãn và khám phá vẻ đẹp thiên nhiên của Quy Nhơn và Phú Yên.</p>','<h3><strong>Chương trình tour</strong></h3><h3><strong>Đêm 1: TP. HCM - GA TÀU LỬA - QUY NHƠN</strong></h3><p>18h00: Quý khách có mặt ở ga tàu lửa làm thủ tục lên tàu.</p><h3><strong>Ngày 1: QUY NHƠN - HẦM HÔ - BẢO TÀNG QUANG TRUNG (Ăn Sáng, Trưa, Tối)</strong></h3><p>Xe và Hdv đón khách tại Quy Nhơn, ăn sáng trên tàu.</p><p>Đến nơi, xe dón đoàn đi tham quan <strong>bảo tàng Quang Trung</strong>&nbsp;- Một trong những bảo tàng lịch sử nổi tiếng ở Bình Định, nơi đây gắn liền với cuộc khởi nghĩa Tây Sơn. Giữ gìn di sản lịch sử quý báu ngay tại Bình Định.</p><p>&nbsp;</p><p><i>Bảo tàng Quang Trung - Kho tàng lịch sử, niềm tự hào dân tộc giữa lòng Bình Định.</i></p><p><strong>Khu du lịch sinh thái Hầm Hô</strong> - Nơi phô diễn vẻ đẹp kỳ vĩ của thiên nhiên, với cảnh quan huyền ảo và đa dạng sinh học, mở ra không gian bình yên, xa rời ồn ào cuộc sống hiện đại.</p><p>&nbsp;</p><p><i>Hầm Hô - Nơi thiên nhiên hùng vĩ giao hòa cùng nhịp sống yên bình.</i></p><p>Dùng bữa trưa tại nhà hàng.</p><p>14h00: Quý khách trở về lại khách sạn. Tự do nghỉ ngơi.</p><p>16h30: Xe đưa đoàn khởi hành tham quan <strong>KDL Ghềnh Ráng</strong>, <strong>Viếng mộ thi sĩ Hàn Mặc Tử</strong> tài hoa nhưng bạc mệnh. Chiêm ngưỡng nghệ thuật Bút lửa DZũ Kha, nghe thơ Hàn.</p><p><strong>Bãi tắm Hoàng Hậu</strong> hay còn gọi là Bãi Trứng với những viên đá nhẵn thiên xếp đầy bãi tắm, đẹp tự nhiên không đâu có được.</p><p>&nbsp;</p><p><i>Ghềnh Ráng - Sự kỳ vĩ của tự nhiên với bãi đá cuội trải dài ven biển yên bình.</i></p><p>Qúy khách tự túc khám phá đặc sản Quy Nhơn với các món ăn dân dã, đậm đà bản sắc miền đất võ như: Bánh hỏi –lòng heo, bún chả cá,nem chợ huyện, Rượu Bàu Đá, bánh xèo Mỹ Cang, gỏi cá chình, tré Bình Định, bánh ít lá gai.</p><p>Đoàn dùng bữa tối tại nhà hàng.</p><h3><strong>Ngày 2: QUY NHƠN - KỲ CO - EO GIÓ - GÀNH ĐÁ DĨA - ĐẦM Ô LOAN (Ăn Sáng, Trưa, Tối)</strong></h3><p>Sáng quý khách dùng điểm tâm sáng tại khách sạn và trả phòng, đoàn tham quan:</p><p><strong>Tượng Phật chùa Ông Núi</strong> - Biểu tượng của sự bình an và uy nghi là tượng Phật Thích Ca ngồi cao nhất Đông Nam Á.</p><p>&nbsp;</p><p><i>Chùa Ông Núi - Hùng vĩ tượng Phật trên Núi Bà, nhìn ra biển Quy Nhơn.</i></p><p><strong>Eo Gió</strong> - Điểm ngắm bình minh và hoàng hôn huyền ảo nhất Việt Nam.</p><p>&nbsp;</p><p><i>Eo Gió - Nơi tôn vinh vẻ đẹp của thiên nhiên.</i></p><p>Quý khách&nbsp;lên Cano qua <strong>Biển Kỳ Co</strong>&nbsp;- Một bức tranh thiên nhiên nên thơ và hùng vĩ.</p><p>&nbsp;</p><p><i>Biển Kỳ Co - Vẻ đẹp hoang sơ với làn nước xanh trong và bãi cát trắng mịn.</i></p><p>Trưa quý khách lên cano về lại nhà hàng, tắm nước ngọt, thưởng thức bữa trưa với những món hải sản tươi sống độc đáo, hương vị được chế biến nguyên chất của dân chài địa phương như: tôm, cá, mực, ốc, bào ngư, súp rong biển.</p><p>15h00: Tham quan nhà thờ <strong>Mằng Lăng</strong>.&nbsp;</p><p>&nbsp;</p><p><i>Nhà Thờ Mằng Lăng - Kiến trúc cổ kính, di sản tâm linh tại Phú Yên.</i></p><p><strong>Gành Đá Dĩa ở Phú Yên</strong> - Biểu tượng du lịch với những mỏm đá hình lục giác và tròn độc đáo, nhô ra biển tạo nên cảnh quan thiên nhiên kỳ thú.</p><p>&nbsp;</p><p><i>Ghềnh Đá Dĩa - Kỳ quan thiên nhiên với bậc thang đá huyền bí, nơi sóng vỗ biển cả.</i></p><p>Ăn tối tại <strong>Đầm Ô Loan.</strong></p><p>Quý khách đến với thành phố Tuy Hòa, nhận phòng khách sạn và nghỉ ngơi, thư giãn. Tự do khám phá TP Phú Yên với rất nhiều quán cà phê đẹp.</p><h3><strong>Ngày 3: PHÚ YÊN - CẢNH QUY HOA VÀNG CỎ XANH - MŨI ĐIỆN CỰC ĐÔNG TỔ QUỐC (ĂN SÁNG, TRƯA)</strong></h3><p>Quý khách dùng bữa sáng tại khách sạn.</p><p>Xe đưa quý khách tham quan <strong>Quảng trường</strong> <strong>Nghinh Phong</strong>&nbsp;- Lấy ý tưởng từ Gành Đá Dĩa, những khối đá tròn xếp chồng liền kề nhau, biểu tượng của du lịch Phú Yên.&nbsp;</p><p>&nbsp;</p><p><i>Quảng Trường Nghinh Phong - Hài hòa kiến trúc, khung cảnh biển bình yên.</i></p><p>Quý khách tham quan tham quan <strong>Tháp Nhạn</strong>&nbsp;nơi gắn với nhiều truyền thuyết về sự hình thành và phát triển của vùng đất Phú Yên.</p><p>&nbsp;</p><p><i>Tháp Nhạn - Một trong những công trình kiến trúc cổ nhất của người Chăm.</i></p><p><strong>Bãi Xép</strong> - Hiện thực cảnh đẹp từ phim \"Hoa Vàng trên cỏ xanh\". Nơi đây, màu xanh mênh mông của trời, đại dương và trảng cỏ rộng lớn, cùng những bụi xương rồng và bông hoa dại, tạo nên một không gian mát mắt, yên bình dưới nắng gắt miền Trung.</p><p>&nbsp;</p><p><i>Bãi Xép - Một bức tranh sống động của biển xanh, cát trắng và bầu trời trong lành.</i></p><p>11h00: Đoàn trả phòng khách sạn, di chuyển đi ăn trưa tại nhà hàng.</p><p>Đoàn tiếp tục đến với cực Đông của Tổ Quốc tham quan <strong>Mũi Điện</strong> - Cap Varella,&nbsp;<strong>ngọn hải đăng</strong> được người Pháp xây dựng năm 1890. quý du khách chụp hình lưu niệm với cột mốc Cực Đông và ngắm nhìn toàn cảnh biển Phú Yên với những bãi cát trắng dài tít tấp.</p><p>&nbsp;</p><p><i>Mũi Điện - Cực đông đất liền của Việt Nam.</i></p><p>Đoàn đến với chợ <strong>Tuy Hòa</strong>, Mua đặc sản. Tự thưởng thức ẩm thực tại <strong>Tuy Hòa</strong>.</p><p>16h00: Đoàn di chuyển ra ga tàu, làm thủ tục lên tàu.</p><p>17h00: Tàu di chuyển về <strong>Sài Gòn</strong>. Ăn tối tự túc.</p><h3><strong>NGÀY 4:&nbsp;THÀNH PHỐ HỒ CHÍ MINH</strong></h3><p>05h00: Đến Sài Gòn, chia tay và hẹn gặp lại quý khách.</p>','Quy Nhơn - Phú Yên','4 ngày 3 đêm','2024-08-29','2024-09-01',4150000,NULL,NULL,'Xe Bus','Quy Nhơn',1,'viewimage.jpg',NULL,NULL,'2024-08-09','2024-08-09 02:34:13',0,'Du lịch miền Trung','Hiển Thị',1,NULL,4,NULL,'https://firebasestorage.googleapis.com/v0/b/winktraveller-44560.appspot.com/o/tour%2Fviewimage.jpg?alt=media','tour_6970366990');
/*!40000 ALTER TABLE `tour` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tourfav`
--

DROP TABLE IF EXISTS `tourfav`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tourfav` (
  `user_id` int DEFAULT NULL,
  `tour_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tourfav`
--

LOCK TABLES `tourfav` WRITE;
/*!40000 ALTER TABLE `tourfav` DISABLE KEYS */;
/*!40000 ALTER TABLE `tourfav` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_status`
--

DROP TABLE IF EXISTS `user_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_status` (
  `id` int NOT NULL AUTO_INCREMENT,
  `status_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_status`
--

LOCK TABLES `user_status` WRITE;
/*!40000 ALTER TABLE `user_status` DISABLE KEYS */;
INSERT INTO `user_status` VALUES (1,'Hoạt Động'),(2,'Đã Khoá');
/*!40000 ALTER TABLE `user_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int NOT NULL DEFAULT '0',
  `user_avatar` varchar(550) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'author-auto.png',
  `user_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_address` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_status_id` int DEFAULT '1',
  `user_role` varchar(45) DEFAULT 'Khách Hàng',
  `user_status` varchar(45) DEFAULT 'Hoạt Động',
  PRIMARY KEY (`id`),
  KEY `fk_id_role` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','12341234','Đinh Lê Thái Dương',1,'2.jpg','duongdinh308@gmail.com','0353993283','2312312',1,'Admin','Hoạt Động'),(2,'22it056','25f9e794323b453885f5181f1b624d0b','Đinh Lê Thái Dương',1,'author-auto.png','duongdinh3067@gmail.com','0353993283',NULL,1,'Admin','Hoạt Động'),(3,'wind6565','25f9e794323b453885f5181f1b624d0b','user604',0,'author-auto.png','duongdinh304@gmail.com',NULL,NULL,1,'Khách Hàng','Hoạt Động'),(4,'wind6566','25f9e794323b453885f5181f1b624d0b','user987',0,'author-auto.png','duongdinh305@gmail.com',NULL,NULL,1,'Khách Hàng','Hoạt Động'),(5,'wind6563','25f9e794323b453885f5181f1b624d0b','user119',0,'author-auto.png','duongdinh306@gmail.com',NULL,NULL,1,'Khách Hàng','Hoạt Động'),(6,'wind6569','25f9e794323b453885f5181f1b624d0b','user625',0,'author-auto.png','duongdinh307@gmail.com',NULL,NULL,1,'Khách Hàng','Hoạt Động'),(7,'duong','ed2b1f468c5f915f3f1cf75d7068baae','user270',1,'author-auto.png','duongdinh300@gmail.com',NULL,NULL,1,'Admin','Hoạt Động'),(8,'22IT059','25d55ad283aa400af464c76d713c07ad','user382',0,'author-auto.png','duongdinh301@gmail.com','0123456789',NULL,2,'Khách Hàng','Đã Khoá'),(9,'22IT238','f5bb0c8de146c67b44babbf4e6584cc0','Trương Thanh Quân',1,'na2.png','qunboiz.2212@gmail.com','0385103729',NULL,1,'Admin','Hoạt Động'),(10,'duongg','f5bb0c8de146c67b44babbf4e6584cc0','user905',0,'author-auto.png','duongdinh30675@gmail.com',NULL,NULL,1,'Khách Hàng','Hoạt Động'),(11,'Cuaan','6a5eab60a4824596d49ee8f2e90f2815','user214',0,'author-auto.png','cuaan2212@gmail.com',NULL,NULL,1,'Khách Hàng','Hoạt Động'),(12,'22it238','123','Trương Thanh Quân',1,'author-auto.png',NULL,NULL,NULL,1,'Khách Hàng','Hoạt Động'),(13,'Trương','101193d7181cc88340ae5b2b17bba8a1','user928',0,'author-auto.png','truongvku@gmail.com',NULL,NULL,1,'Khách Hàng','Hoạt Động');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'doanqldulich'
--

--
-- Dumping routines for database 'doanqldulich'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-04-06  3:28:51
