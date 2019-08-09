-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2019 at 09:23 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `herb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `docter`
--

CREATE TABLE `docter` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `history` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disease` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subdis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `worktime_start` time NOT NULL,
  `worktime_stop` time NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `docter`
--

INSERT INTO `docter` (`id`, `name`, `age`, `history`, `disease`, `address`, `subdis`, `district`, `province`, `price`, `worktime_start`, `worktime_stop`, `image`, `created_at`, `updated_at`) VALUES
(1, 'ปลื้ม เจริญศรี', '73', 'หมอปลื้มเริ่มเรียนรู้การนวดโดยการบอกต่อจากบรรพบุรุษตั้งแต่รุ่นปู่ย่าตายาย มียายและแม่เป็นหมอตำแย พ่อเป็นหมอนวดจับเส้น จากประสบการณ์โดยให้ผู้ป่วยเป็นครูศึกษาจากแผนภาพตำแหน่งกดจุดต่างๆของร่างกาย มีการประยุกต์ท่านวดร่วมกับการดัดตัวเพื่อใช้รักษาอาการของโรคต่างๆ', '-	โรคไมเกรน\r\n-	โรคอัมพฤกษ์\r\n-	อัมพาต', '101/2  ม.2', 'คลองแดน', 'ระโนด', 'สงขลา', 500, '08:00:00', '20:10:00', 'received_698063910617507.jpeg', '2019-08-06 19:00:25', '2019-08-06 19:00:25'),
(2, 'บรรจบ กาฬจันโท', '76', 'หมอบรรจบเริ่มศึกษาวิชาการแพทย์พื้นบ้านตั้งแต่เด็กจากคุณพ่อ ซึ่งเป็นความรู้ที่สืบต่อมาจากรุ่นปู่ การถ่ายทอดความรู้โดยวิธีการจดจำ อาศัยประสบการณ์ในการรักษาผู้ป่วย และเรียนเพิ่มเติมเมื่ออุปสมบทที่วัดและได้หนังสือตำราสืบทอดจากพ่อท่านเรือง วัดหัววัง อำเภอระโนด จังหวัดสงขลา', '-	โรคริดสีดวงทวาร\r\n-	พิษงู\r\n-	เริม\r\n-	ไข้พิษ , ไข้ทับ\r\nระดู\r\n-	ดีซ่าน\r\n-	ระดูขาวผิดปกติ', '15  ม.5  ต.บ้านขาว', 'ต.บ้านขาว', 'อ.ระโนด', 'จ.สงขลา', 200, '08:00:00', '20:00:00', 'received_749268875510925.jpeg', '2019-08-07 02:23:53', '2019-08-07 02:23:53'),
(3, 'สุกัญญา  คงชู', '56', 'หมอได้รับการถ่ายทอดความรู้จากยายตั้งแต่เด็กๆ วิธีการศึกษาคือจดจำจากที่ยายถ่ายทอดความรู้ให้ และศึกษาเพิ่มเติมเอง ได้รับการอบรมและใบอนุญาตนวดแบบเฉลยศักดิ์นวดแบบราชสำนักและท่าพิสดาร', '-	อาการปวดเมื่อย \r\n-	คลายเส้น\r\n-	แต่งมดลูก', '6  ม.5  ถนนเทศบาล 19 (รุ่งโรจน์)', 'ต.บ่อตรุ', 'อ.ระโนด', 'จ.สงขลา', 200, '08:00:00', '20:00:00', 'received_1175607372643248.jpeg', '2019-08-07 02:24:50', '2019-08-07 02:24:50'),
(4, 'ชุ่ม   คำมณี', '75', 'เริ่มศึกษาตั้งแต่อายุ 15 ปี จากคุณตา ฝึกวิชาไปเรื่อยๆ ซึ่งได้รับการดูแลจากคุณตาอย่างใกล้ชิดและเรียนจากตำราที่สืบทอดต่อมา หมออาศัยประสบการณ์ในการรักษาเป็นบทเรียน', '-	กระดูกทับเส้น\r\n-	เส้นทับกระดูก\r\n-	อัมพฤกษ์\r\n-	อัมพาต\r\n-	อุบัติเหตุต่างๆ', '99/1  ม.7', 'ต.ชุมพล', 'อ.สทิงพระ', 'จ.สงขลา', 200, '08:00:00', '20:00:00', 'received_2351526054929038.jpeg', '2019-08-07 02:25:35', '2019-08-07 02:25:35'),
(5, 'เทวัญ  ชูเขียว', '65', 'หมอเริ่มเรียนรู้วิชาจากผู้เฒ่าคนหนึ่งที่ได้รับการถ่ายทอดวิชาจาก พ่อท่านเมฆ ซึ่งเป็นพระประจำอยู่ที่วัดเชิงแส ต่อมาเมื่อพระอาจารย์มรณภาพ จึงเริ่มศึกษาด้วยตัวเอง', '- อัมพฤกษ์\r\n- อัมพาต\r\n- นวดคลายเส้น', '39 ซอย 5 ม.2 วัดโตนดด้วน', 'ต.กระแสสินธุ์', 'อ.กระแสสินธุ์', 'จ.สงขลา', 150, '08:00:00', '20:00:00', 'received_340650443491861.jpeg', '2019-08-07 02:26:28', '2019-08-07 02:26:28'),
(6, 'เพชรคง  น้อยสำลี', '72', 'หมอจบ ได้เริ่มสั่งสมความรู้เกี่ยวกับวิธีการเหลาไม้ไผ่ทำเฝือกมาจากตาตั้งแต่จำความได้ ศึกษาวิธีนวดกดเส้น ศึกษาสมุนไพรที่ใช้รักษาโรคต่างๆ ส่วนการใช้คาถาในการรักษาและวิธีการนวดกดเส้น และศึกษาเกี่ยวกับวิธีการต่อกระดูกและเอ็นจากลุงของตน อาศัยการจดจำที่ไดรับการบอกต่อจากบุคคลดังกล่าว และศึกษาจากตำราอาจารย์ทั้งสามท่าน ปัจจุบันหมอจบได้รวบรวมตำราทั้งสามเข้าด้วยกันพร้อมกับฝึกปฏิบัติจริง', '- ต่อกระดูก รักษา\r\nโดยการใช้ยาถูและการบีบนวด\r\n- ปวดเมื่อย\r\n- อัมพฤกษ์\r\nอัมพาต\r\n- รักษาพิษงู\r\n- รักษาเริม', '45 ม.5 บ้านยางทอง', 'ต.เกาะใหญ่', 'อ.กระแสสินธุ์', 'จ.สงขลา', 150, '08:00:00', '20:00:00', 'received_464776750767622.jpeg', '2019-08-07 02:27:11', '2019-08-07 02:27:11'),
(7, 'สมพิษ  ด้วงสิน', '49', 'เริ่มศึกษาคาถานวดมาจากพ่อ พ่อศึกษามาจากปู่ นอกจากนั้นยังได้เรียนการนวดเชลยศักดิ์จากอาจารย์ศักดิ์ชัย ในการอบรมนวดแผนไทยที่โรงพยาบาลสิงหนครและเข้ารับการฝึกอบรมการนวดเป็นประจำ', '- อาการชา\r\n- อัมพฤกษ์ \r\nอัมพาต\r\n- อาการปวดเมื่อย\r\nตามร่างกาย\r\n- อาการไหล่ติด', '127/2  ม.3', 'ต.เชิงแส', 'อ.กระแสสินธุ์', 'จ.สงขลา', 150, '08:00:00', '20:10:00', 'received_1235955486575552.jpeg', '2019-08-07 02:27:53', '2019-08-07 02:27:53'),
(8, 'ใจ  คิมหันต์', '64', 'หมอใจเล่าว่าเมื่อตอนอายุ17ปี ในค่ำคืนหนึ่งได้ฝันว่ามีชายชราคนหนึ่งมายืนอยู่หัวเตียง แล้วบอกตนว่ามีสมุนไพรชนิหนึ่งซึ่งสามารถรักษาพิษงูได้ พร้อมทั้งบอกคาถา และเคล็ดวิชา จากนั้นก็ตกใจตื่น หมอใจสามารถจำสมุนไพรและคาถาได้ทุกอย่างแต่หมอใจยังไม่กล้านำวิชาดังกล่าวมาใช้เนื่องจากกลัวว่าไม่มีใครเชื่อและรักษาไม่หาย เลยเก็บวิชาเป็นความลับ จนกระทั้งอายุประมาณ30ปี เพื่อนบ้านโดนงูเห่ากัด และไม่อยากไปหาหมอที่โรงพยาบาล หมอใจจึงตัดสินใจนำวิชามาลองใช้เป็นครั้งแรก ซึ่งถือว่าประสบความสำเร็จ ทำให้มั่นใจในการรักษามากยิ่งขึ้น', '- รักษาพิษจาก\r\nสัตว์  เช่น งูทุกชนิด ตะขาบ แมงป่อง ต่อ แตน และปลากระเบน', '5 ม.1', 'ต.ชุมพล', 'อ.สทิงพระ', 'จ.สงขลา', 200, '08:00:00', '20:00:00', 'received_757254364706078.jpeg', '2019-08-07 02:28:37', '2019-08-07 02:28:37'),
(9, 'ถนอม  คงแก้ว', '75', 'หมอถนอมได้รับการถ่ายทอดวิชาหมอพื้นบ้านจากคุณตาตั้งแต่อายุประมาณ30ปี วิธีการศึกษาโดยการบอกเล่าจากคุณตา จด จำ ไม่มีการบันทึกเป็นลายลักษณ์อักษรและไม่มีตำรายาที่รับสืบทอด', '-	รักษาโรคกระดูก \r\nข้อ เอ็น \r\n-	หมองู (งูเห่า,งู\r\nกะปะ)\r\n-	รักษาต้อหิน ต้อ\r\nกระจก \r\n-	รักษาเริม', '56 ม.5', 'ต.กระดังงา', 'อ.สทิงพระ', 'จ.สงขลา', 500, '10:00:00', '20:10:00', 'received_886343925056044.jpeg', '2019-08-07 02:29:53', '2019-08-07 02:29:53'),
(10, 'ถั่น  กิ้มเส้ง', '76', 'หมอถั่นได้รับการถ่ายทอดวิชาหมอพื้นบ้าน จากคุณพ่อที่เป็นหมอพื้นบ้าน ได้รับคำแนะนำจากหมอควนเพื่อไปเรียนเกี่ยวกับสมุนไพรที่นครปฐมและได้รับมาจากบรรพบุรุษสืบทอดมาเรื่อยๆ', '-	รักษาริดสีดวง\r\nทวาร', '-', '-', '-', '-', 150, '08:00:00', '20:00:00', 'received_451130132401296.jpeg', '2019-08-07 02:30:22', '2019-08-07 02:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `herbs`
--

CREATE TABLE `herbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drugDetail` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `herbs`
--

INSERT INTO `herbs` (`id`, `name`, `detail`, `price`, `stock`, `image`, `created_at`, `updated_at`) VALUES
(1, 'ว่านหางจระเข้', 'ประโยชน์ภายนอก\r\n•	รักษาแผลไฟไหม้และน้ำร้อนลวก \r\n•	ป้องกันและบรรเทารอยไหม้จากการออกแดด\r\n•	สมานแผลจากของมีคมและแผลถลอก\r\n\r\nประโยชน์ภายใน\r\n•	บรรเทาอาการปวดข้อ \r\n•	ป้องกันโรคเบาหวาน\r\n•	แก้กระเพาะอักเสบและลำไส้อักเสบ\r\n\r\nประโยชน์ด้านความงาม\r\n•	บำรุงเส้นผมให้เงางามและช่วยขจัดรังแค\r\n•	รักษาสิวและรอยด่างดำ\r\n•	บำรุงผิวกาย', 200, 20, 'received_2433253460088510.png', '2019-08-06 18:40:55', '2019-08-06 18:40:55'),
(2, 'ขมิ้นชัน', '•	ช่วยกำจัดสารพิษออกจากร่างกาย\r\n•	ช่วยบรรเทาอาการของโรคเบาหวาน\r\n•	มีส่วนช่วยรักษาโรคความดันโลหิตสูง\r\n•	ช่วยลดอาการของโรคเกาต์\r\n•	ช่วยขับน้ำนมของมารดาหลังคลอดบุตร', 150, 150, 'received_348893862704736.png', '2019-08-06 18:41:39', '2019-08-06 18:41:39'),
(3, 'ทองพันชั่ง', '•	ช่วยทำให้ระบบกระเพาะอาหารทำงานได้ดีมากขึ้น \r\n•	ช่วยแก้อาการจุกเสียด \r\n•	ช่วยแก้ไส้เลื่อน ไส้ลาม\r\n•	ช่วยแก้อาการไอเป็นเลือด', 160, 160, 'received_2467441030017468.png', '2019-08-06 18:42:01', '2019-08-06 18:42:01'),
(4, 'กะเพรา', '•	ช่วยบำรุงธาตุไฟ \r\n•	ช่วยแก้อาการคลื่นเหียนอาเจียน \r\n•	ช่วยแก้อาการปวดด้วยการใช้ใบกะเพรานำมาคั้นรับประทานสด 1 ถ้วยตะไล จะช่วยแก้อาการปวดมวนท้องได้เป็นอย่างดี \r\n•	ช่วยขับลมแก้อาการปวดท้องอุจจาระ \r\n•	ใบกะเพรามีสรรพคุณช่วยขับลมในกระเพาะ \r\n•	ช่วยแก้อาการจุกเสียดแน่นท้อง', 160, 200, 'received_481521216002290.png', '2019-08-06 18:42:25', '2019-08-06 18:42:25'),
(5, 'กระชายดำ', '•	ช่วยบำรุงโลหิตของสตรี \r\n•	ช่วยในระบบหมุนเวียนโลหิตของร่างกาย ทำให้โลหิตไหลเวียนได้ดีขึ้น \r\n•	ช่วยทำให้เจริญอาหาร \r\n•	ช่วยรักษาโรคความดันโลหิต รักษาสมดุลของความดันโลหิต \r\n•	ช่วยรักษาโรคเบาหวาน ช่วยลดระดับน้ำตาลในเลือด \r\n•	ช่วยรักษาโรคภูมิแพ้ \r\n•	ช่วยแก้หอบหืด \r\n•	ช่วยแก้อาการใจสั่นหวิว แก้ลมวิงเวียน', 150, 200, 'received_1016543071881831.png', '2019-08-06 18:42:50', '2019-08-06 18:42:50'),
(6, 'ว่านชักมดลูก', '•	ช่วยกระชับหน้าท้องที่หย่อนคล้อยหลังคลอดบุตร\r\n•	ช่วยกระชับช่องคลอดภายในของสตรี ช่วยให้มดลูกเข้าอู่เร็วขึ้น\r\n•	ช่วยป้องกันโรคมะเร็งปากช่องคลอดหรือในมดลูก\r\n•	ช่วยทำให้ซีสต์หรือเนื้องอกภายในช่องคลอดฝ่อตัวลง\r\n•	ช่วยดับกลิ่นภายในช่องคลอดของสตรีให้ลดลงหรือหายไป', 160, 180, 'received_674926799585419.png', '2019-08-06 18:43:12', '2019-08-06 18:43:12'),
(7, 'กระเจี๊ยบแดง', '•	ช่วยแก้อาการอ่อนเพลีย \r\n•	ช่วยรักษาโรคเบาหวาน \r\n•	ช่วยลดความดันโลหิต\r\n•	ช่วยแก้อาการคอแห้ง กระหายน้ำ \r\n•	น้ำกระเจี๊ยบช่วยแก้อาการร้อนใน', 180, 180, 'received_2250987628282366.png', '2019-08-06 18:43:34', '2019-08-06 18:43:34'),
(8, 'มะขามป้อม', '•	ช่วยบำรุงสุขภาพผิวพรรณ ชะลอการเกิดริ้วรอย\r\n•	ช่วยบำรุงและรักษาเส้นผมให้มีสุขภาพแข็งแรง ผมนุ่มลื่น ป้องกันผมหงอก ด้วยการทอดมะขามป้อมกับน้ำมันมะพร้าว แล้วเอาน้ำมันมาหมักผม\r\n•	ช่วยบำรุงและรักษาสายตา\r\n•	ช่วยในการบำรุงประสาทและสมอง\r\n•	มีสารต่อต้านอนุมูลอิสระ ช่วยเสริมสร้างภูมิคุ้มกันให้แข็งแรง\r\n•	เป็นผลไม้ที่ช่วงบำรุงร่างกายได้เป็นอย่างดี โดยช่วยบำรุงอวัยวะแทบจะทุกส่วนของร่างกาย\r\n•	ช่วยบำรุงโลหิตได้เป็นอย่างดี', 190, 180, 'received_2343763059275908.png', '2019-08-06 18:43:54', '2019-08-06 18:43:54'),
(9, 'ฟ้าทะลายโจร', '•	ช่วยรักษาไข้ไทฟอยด์ ด้วยการรับประทานฟ้าทะลายโจรก่อนอาหารครั้งละ 2 เม็ด วันละ 3 ครั้ง เป็นเวลา 3 สัปดาห์ หลังจากนั้นให้กินยาบำรุงเพื่อฟื้นฟูกำลังของผู้ป่วยร่วมด้วย\r\n•	ช่วยแก้อาการไอ ลดน้ำมูก และช่วยฆ่าเชื้อที่จมูก ด้วยการใช้ใบนำมาทำเป็นยาผงแล้วนำมาใช้สูดดม \r\n•	ช่วยลดและขับเสมหะ ด้วยการใช้ใบนำมาทำเป็นยาผงแล้วนำมาใช้สูดดม \r\n•	ช่วยระงับอาการอักเสบ แก้อาการเจ็บคอ คออักเสบ ต่อมทอนซิลอักเสบ หลอดลมอักเสบ ด้วยการใช้ใบนำมาทำเป็นยาผงแล้วนำมาใช้สูดดม', 180, 180, 'received_351979119027939.png', '2019-08-06 18:44:13', '2019-08-06 18:44:13'),
(10, 'ย่านาง', '•	ช่วยรักษาโรคความดันโลหิตสูง\r\n•	ช่วยป้องกันการเกิดโรคหัวใจ\r\n•	ช่วยในการบำรุงรักษาตับและไต\r\n•	ช่วยรักษาและบำบัดอาการอัมพฤกษ์\r\n•	ช่วยแก้อาการอ่อนล้า อ่อนเพลียของร่างกายที่แม้นอนพักก็ไม่หาย\r\n•	ช่วยรักษาอาการเกร็ง ชัก หรือเป็นตะคริวบ่อย ๆ', 150, 160, 'received_329546344666086.png', '2019-08-06 18:44:29', '2019-08-06 18:44:29'),
(11, 'มะรุม', '•	ช่วยบำรุงผิวพรรณให้ชุ่มชื้น อ่อนนุ่ม ไม่ให้หยาบกร้าน\r\n•	มีสารต่อต้านอนุมูลอิสระช่วยในการชะลอวัย \r\n•	ช่วยเสริมสร้างภูมิคุ้มกันให้แก่ร่างกาย\r\n•	ช่วยรักษาโรคขาดสารอาหารในเด็กแรกเกิดถึงอายุ 10 ขวบ\r\n•	ช่วยลดไขมันและคอเลสเตอรอลในร่างกาย \r\n•	มีส่วนช่วยป้องกันโรคมะเร็ง \r\n•	ช่วยรักษาโรคมะเร็งในกระดูก', 180, 800, 'received_1139186526285121.png', '2019-08-06 18:44:48', '2019-08-06 18:44:48'),
(12, 'ชุมเห็ดเทศ', '•	ช่วยรักษาโรคตาเหลือง \r\n•	ช่วยแก้ดีซ่าน \r\n•	ช่วยแก้กษัยเส้น \r\n•	ใบและดอกนำมาต้มกับน้ำรับประทานเป็นยาแก้หืด \r\n•	รากและทั้งต้นเป็นยาถ่ายเสมหะ \r\n•	ใบมีกลิ่นฉุน นำมาต้มกับน้ำใช้เป็นยาอมบ้วนปาก \r\n•	ใบและดอกนำมาต้มกับน้ำรับประทานเป็นยาขับเสมหะในรายที่หลอดลมอักเสบ', 130, 200, 'received_565097494026640.png', '2019-08-06 18:47:54', '2019-08-06 18:47:54'),
(13, 'บอระเพ็ด', '•	ช่วยรักษาอาการโลหิตคั่งในสมอง \r\n•	ช่วยให้เจริญอาหาร \r\n•	แก้อาการร้อนใน \r\n•	สรรพคุณบอระเพ็ดช่วยดับพิษร้อนในร่างกาย \r\n•	ช่วยขับเหงื่อ \r\n•	ช่วยฆ่าแมลงในหู \r\n•	แก้รำมะนาด \r\n•	แก้ไข้เหนือ ไข้สันนิบาต ไข้พิษ ไข้จับสั่น \r\n•	ใช้ถอนพิษไข้', 200, 200, 'received_2109303646038419.png', '2019-08-06 18:48:21', '2019-08-06 18:48:21'),
(14, 'เสลดพังพอน', '•	ใช้แก้ถูกหนามพุงดอตำหรือถูกใบตะลังตังช้าง ด้วยการนำขี้ผึ้งแท้มาลนไฟให้ร้อน แล้วนำมาคลึงเพื่อดูดเอาขนของใบตะลังตังช้างออกเสียก่อน แล้วจึงใช้ใบเสลดพังพอนผสมกับเหล้าทาบริเวณที่เป็น \r\n•	ใช้เป็นยาแก้แพ้เกสรรักษาป่า ยางรักป่า และยางสาวน้อยประแป้ง ด้วยการใช้ใบผสมกับเหล้า นำมาทาบริเวณที่คัน \r\n•	ใช้แก้หัด เหือด ชโลมทา (ยาชโลมให้ใส่พิมเสนลงไปเล็กน้อย)', 200, 200, 'received_365921544072645.png', '2019-08-06 18:48:42', '2019-08-06 18:48:42'),
(15, 'มะแว้ง', '•	ช่วยแก้อาการปวดกระเพาะ \r\n•	ช่วยแก้ผิดสำแดง \r\n•	เนื้อไม้เป็นยาขับพยาธิ \r\n•	รากและผลช่วยขับปัสสาวะ \r\n•	ผลช่วยละลายก้อนนิ่ว \r\n•	ราก ผล และทั้งต้นช่วยแก้โลหิตออกทางทวารหนัก ทวารเบา ช่วยรักษาโรคทางไตและกระเพาะปัสสาวะ \r\n•	ช่วยบำรุงน้ำดี \r\n•	ช่วยรักษามะเร็งเพลิง \r\n•	ช่วยแก้คัน \r\n•	ช่วยแก้ฟกช้ำดำเขียว ปวดบวมอักเสบ', 150, 200, 'received_508388373304064.png', '2019-08-06 18:49:00', '2019-08-06 18:49:00'),
(16, 'รางจืด', '•	ใช้รับประทานเป็นยาแก้ร้อนใน\r\n•	ช่วยแก้อาการกระหายน้ำ\r\n•	ใช้ปรุงเป็นยาถอนพิษไข้ได้ \r\n•	ช่วยรักษาแผลไฟไหม้ น้ำร้อนลวก', 200, 200, 'received_645792812570243.png', '2019-08-06 18:49:33', '2019-08-06 18:49:33'),
(17, 'กระวาน', '•	ช่วยบำรุงธาตุในร่างกาย \r\n•	ช่วยแก้ธาตุพิการ \r\n•	ช่วยทำให้เจริญอาหาร \r\n•	ช่วยบำรุงโลหิตในร่างกาย \r\n•	ช่วยขับโลหิต]\r\n•	ช่วยแก้เสมหะให้ปิดธาตุ', 200, 200, 'received_469251763911608.png', '2019-08-06 18:49:58', '2019-08-06 18:49:58'),
(18, 'กานพลู', '•	ช่วยกระตุ้นการหลั่งเมือกและช่วยลดกรดในกระเพาะอาหาร \r\n•	ช่วยแก้อาการท้องเสียในเด็ก \r\n•	ช่วยแก้อาการเหน็บชา \r\n•	ช่วยรักษาโรคหืดหอบ \r\n•	ช่วยแก้อาการไอ ด้วยการอมดอกกานพลู ระหว่างอมอาจจะรู้สึกชาปากบ้างเล็กน้อย \r\n•	ช่วยรักษาโรคเลือดออกตามไรฟัน \r\n•	ช่วยขับเสมหะ แก้เสมหะเหนียวข้น \r\n•	ช่วยขับน้ำดี \r\n•	มีส่วนช่วยในการดูดซึมของธาตุเหล็กให้ดียิ่งขึ้น\r\n•	ช่วยแก้น้ำเหลืองเสีย แก้เลือดเสีย \r\n•	ช่วยขับน้ำคาวปลา', 200, 300, 'received_411968052751265.png', '2019-08-06 18:50:19', '2019-08-06 18:50:19'),
(19, 'หญ้าหนวดแมว', '•	ช่วยลดความดันโลหิต \r\n•	ช่วยรักษาโรคเบาหวาน \r\n•	ช่วยรักษาโรคเยื่อจมูกอักเสบ \r\n•	ผลมีรสฝาด ช่วยสมานแผลในกระเพาะอาหารและลำไส้ \r\n•	เปลือกฝักช่วยแก้ลำไส้พิการ \r\n•	ช่วยแก้บิด แก้อาการท้องร่วง \r\n•	ช่วยรักษาโรคในทางเดินปัสสาวะ\r\n•	ช่วยแก้โรคไตพิการ', 200, 200, 'received_1334654803350898.png', '2019-08-06 18:50:44', '2019-08-06 18:50:44'),
(20, 'บัวบก', '•	ช่วยทำให้เลือดไปเลี้ยงส่วนต่าง ๆ ได้ดียิ่งขึ้น\r\n•	ช่วยกระตุ้นการสร้างเนื้อเยื่อใหม่\r\n•	ใช้เป็นยาบำรุงกำลัง บำรุงร่างกาย\r\n•	ช่วยบำรุงโลหิตในร่างกาย\r\n•	ช่วยบำรุงหัวใจ\r\n•	ช่วยฟื้นฟูสุขภาพจากโรคภัยไข้เจ็บต่าง ๆ\r\n•	ช่วยทำให้จิตใจสดชื่น อารมณ์แจ่มใส', 200, 300, 'received_459182271330505.png', '2019-08-06 18:51:02', '2019-08-06 18:51:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(42, '2014_10_12_000000_create_users_table', 1),
(43, '2014_10_12_100000_create_password_resets_table', 1),
(44, '2019_08_03_060104_create_docter_table', 1),
(45, '2019_08_03_060505_create_spa_table', 1),
(46, '2019_08_03_060523_create_herbs_table', 1),
(47, '2019_08_03_060721_create_order_table', 1),
(48, '2019_08_03_062821_create_payment_table', 1),
(49, '2019_08_03_215334_create_contact_table', 1),
(50, '2019_08_03_215811_create_about_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `spa_id` int(10) UNSIGNED DEFAULT NULL,
  `herb_id` int(10) UNSIGNED DEFAULT NULL,
  `docter_id` int(10) UNSIGNED DEFAULT NULL,
  `payment_id` int(10) UNSIGNED NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spa`
--

CREATE TABLE `spa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `worktime_start` time NOT NULL,
  `worktime_stop` time NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spa`
--

INSERT INTO `spa` (`id`, `name`, `address`, `district`, `province`, `zipcode`, `detail`, `phone`, `price`, `worktime_start`, `worktime_stop`, `image`, `created_at`, `updated_at`) VALUES
(1, 'สะบันงา นวดแผนไทย&สปา', 'ซอย วันดีโฆษิตกุลพร', 'อำเภอเมืองนครศรีธรรมราช', 'นครศรีธรรมราช', '80000', NULL, '0899719201', 250, '08:00:00', '20:00:00', 'received_361296034508822.jpeg|received_362395991107424.jpeg|received_462145831272820.jpeg|received_476246353163358.jpeg|received_2543528272347807.jpeg', '2019-08-06 18:53:10', '2019-08-06 18:53:10'),
(2, 'สวคนธ์สปา | สปา นครศรีธรรมราช นวดแผนไทย อยู่ไฟโบราณ', '438 ม.2 เสาธง', 'ร่อนพิบูลย์', 'นครศรีธรรมราช', '80130', NULL, '0896510024', 500, '08:30:00', '20:00:00', 'received_326703408214663.jpeg|received_445628556279434.jpeg|received_646027735875515.jpeg', '2019-08-06 18:55:13', '2019-08-06 18:55:13'),
(3, 'ร้านภัทรลดา นวดแผนไทย&สปา', '6 ด้านหน้าโรงแรมทวิลโลตัส 12 ถนน พัฒนาการคูขวาง ตำบล ในเมือง', 'เมืองนครศรีธรรมราช', 'นครศรีธรรมราช', '80000', NULL, '075841099', 500, '08:00:00', '22:00:00', 'received_296504387826856.jpeg|received_2327031170947158.jpeg|received_2594054280881203.jpeg', '2019-08-06 18:56:18', '2019-08-06 18:56:18'),
(4, 'มะลิ Thaimassage&Spa', 'โรบินสัน โอเชี่ยน นครศรีธรรมราช 89/201 ถนน พัฒนาการคูขวาง ตำบล คลัง', 'เมืองนครศรีธรรมราช', 'นครศรีธรรมราช', '80000', NULL, '0612356364', 500, '10:00:00', '21:00:00', 'received_876196789412958.jpeg|received_1556242021179062.jpeg', '2019-08-06 18:57:17', '2019-08-06 18:57:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@test.com', NULL, '$2y$10$POETiz7rvZZhVi54km9ng.6YwNCc0aitvsAs2FygjtLPryNV/sI4S', 1, NULL, '2019-08-06 18:34:24', '2019-08-06 18:34:24'),
(2, 'user', 'user@test.com', NULL, '$2y$10$ADa5Fa7vAYmK5xOt1UvlTeBDyanJZf7Qxt6FIXad2Y8wdVrX0CN0.', 0, NULL, '2019-08-06 18:36:19', '2019-08-06 18:36:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docter`
--
ALTER TABLE `docter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `herbs`
--
ALTER TABLE `herbs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spa`
--
ALTER TABLE `spa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `docter`
--
ALTER TABLE `docter`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `herbs`
--
ALTER TABLE `herbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spa`
--
ALTER TABLE `spa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
