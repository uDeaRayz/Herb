-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2019 at 07:32 PM
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
-- Database: `harmor`
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
(1, 'ปลื้ม เจริญศรี', '73', 'หมอปลื้มเริ่มเรียนรู้การนวดโดยการบอกต่อจากบรรพบุรุษตั้งแต่รุ่นปู่ย่าตายาย มียายและแม่เป็นหมอตำแย พ่อเป็นหมอนวดจับเส้น จากประสบการณ์โดยให้ผู้ป่วยเป็นครูศึกษาจากแผนภาพตำแหน่งกดจุดต่างๆของร่างกาย มีการประยุกต์ท่านวดร่วมกับการดัดตัวเพื่อใช้รักษาอาการของโรคต่างๆ', 'โรคไมเกรน,โรคอัมพฤกษ์,อัมพาต', '101/2  ม.2', 'คลองแดน', 'ระโนด', 'สงขลา', 500, '00:00:10', '00:00:16', 'received_698063910617507.jpeg', '2019-08-10 01:41:48', '2019-08-10 01:41:48'),
(2, 'บรรจบ กาฬจันโท', '76', 'หมอบรรจบเริ่มศึกษาวิชาการแพทย์พื้นบ้านตั้งแต่เด็กจากคุณพ่อ ซึ่งเป็นความรู้ที่สืบต่อมาจากรุ่นปู่ การถ่ายทอดความรู้โดยวิธีการจดจำ อาศัยประสบการณ์ในการรักษาผู้ป่วย และเรียนเพิ่มเติมเมื่ออุปสมบทที่วัดและได้หนังสือตำราสืบทอดจากพ่อท่านเรือง วัดหัววัง', 'โรคริดสีดวงทวาร,พิษงู,เริม,ไข้พิษ , ไข้ทับ,ระดู,ดีซ่าน,ระดูขาวผิดปกติ', '15  ม.5', 'บ้านขาว', 'ระโนด', 'สงขลา', 500, '00:00:09', '00:00:16', 'received_749268875510925.jpeg', '2019-08-10 01:45:34', '2019-08-10 01:45:34'),
(3, 'สุกัญญา  คงชู', '56', 'หมอได้รับการถ่ายทอดความรู้จากยายตั้งแต่เด็กๆ วิธีการศึกษาคือจดจำจากที่ยายถ่ายทอดความรู้ให้ และศึกษาเพิ่มเติมเอง ได้รับการอบรมและใบอนุญาตนวดแบบเฉลยศักดิ์นวดแบบราชสำนักและท่าพิสดาร', 'อาการปวดเมื่อย,คลายเส้น,แต่งมดลูก', '6  ม.5  ถนนเทศบาล 19 (รุ่งโรจน์)', 'บ่อตรุ', 'ระโนด', 'สงขลา', 500, '00:00:09', '00:00:16', 'received_1175607372643248.jpeg', '2019-08-10 01:48:47', '2019-08-10 01:48:47'),
(4, 'ชุ่ม   คำมณี', '75', 'เริ่มศึกษาตั้งแต่อายุ 15 ปี จากคุณตา ฝึกวิชาไปเรื่อยๆ ซึ่งได้รับการดูแลจากคุณตาอย่างใกล้ชิดและเรียนจากตำราที่สืบทอดต่อมา หมออาศัยประสบการณ์ในการรักษาเป็นบทเรียน', 'กระดูกทับเส้น,เส้นทับกระดูก,อัมพฤกษ์,อัมพาต,อุบัติเหตุต่างๆ', '99/1  ม.7', 'ชุมพล', 'สทิงพระ', 'สงขลา', 600, '00:00:09', '00:00:16', 'received_2351526054929038.jpeg', '2019-08-10 01:52:01', '2019-08-10 01:52:01'),
(5, 'เทวัญ  ชูเขียว', '65', 'หมอเริ่มเรียนรู้วิชาจากผู้เฒ่าคนหนึ่งที่ได้รับการถ่ายทอดวิชาจาก พ่อท่านเมฆ ซึ่งเป็นพระประจำอยู่ที่วัดเชิงแส ต่อมาเมื่อพระอาจารย์มรณภาพ จึงเริ่มศึกษาด้วยตัวเอง', 'อัมพฤกษ์,อัมพาต,นวดคลายเส้น', '39 ซอย 5 ม.2 วัดโตนดด้วน', 'กระแสสินธุ์', 'กระแสสินธุ์', 'สงขลา', 500, '00:00:09', '00:00:16', 'received_340650443491861.jpeg', '2019-08-10 01:54:35', '2019-08-10 01:54:35'),
(6, 'เพชรคง  น้อยสำลี', '72', 'หมอจบ ได้เริ่มสั่งสมความรู้เกี่ยวกับวิธีการเหลาไม้ไผ่ทำเฝือกมาจากตาตั้งแต่จำความได้ ศึกษาวิธีนวดกดเส้น ศึกษาสมุนไพรที่ใช้รักษาโรคต่างๆ ส่วนการใช้คาถาในการรักษาและวิธีการนวดกดเส้น และศึกษาเกี่ยวกับวิธีการต่อกระดูกและเอ็นจากลุงของตน อาศัยการจดจำที่ไดรับการบอกต่อจากบุคคลดังกล่าว และศึกษาจากตำราอาจารย์ทั้งสามท่าน ปัจจุบันหมอจบได้รวบรวมตำราทั้งสามเข้าด้วยกันพร้อมกับฝึกปฏิบัติจริง', 'ต่อกระดูก รักษา โดยการใช้ยาถูและการบีบนวด,ปวดเมื่อย,อัมพฤกษ์,อัมพาต,รักษาพิษงู,รักษาเริม', '45 ม.5 บ้านยางทอง', 'เกาะใหญ่', 'กระแสสินธุ์', 'สงขลา', 500, '00:00:09', '00:00:16', 'received_464776750767622.jpeg', '2019-08-10 02:48:28', '2019-08-10 02:48:28'),
(7, 'สมพิษ  ด้วงสิน', '49', 'เริ่มศึกษาคาถานวดมาจากพ่อ พ่อศึกษามาจากปู่ นอกจากนั้นยังได้เรียนการนวดเชลยศักดิ์จากอาจารย์ศักดิ์ชัย ในการอบรมนวดแผนไทยที่โรงพยาบาลสิงหนครและเข้ารับการฝึกอบรมการนวดเป็นประจำ', 'อาการชา,อัมพฤกษ์,อัมพาต,อาการปวดเมื่อย\r\nตามร่างกาย,อาการไหล่ติด', '127/2  ม.3', 'เชิงแส', 'กระแสสินธุ์', 'สงขลา', 500, '00:00:09', '00:00:16', 'received_1235955486575552.jpeg', '2019-08-10 02:51:47', '2019-08-10 02:51:47'),
(8, 'ใจ  คิมหันต์', '64', 'หมอใจเล่าว่าเมื่อตอนอายุ17ปี ในค่ำคืนหนึ่งได้ฝันว่ามีชายชราคนหนึ่งมายืนอยู่หัวเตียง แล้วบอกตนว่ามีสมุนไพรชนิหนึ่งซึ่งสามารถรักษาพิษงูได้ พร้อมทั้งบอกคาถา และเคล็ดวิชา จากนั้นก็ตกใจตื่น หมอใจสามารถจำสมุนไพรและคาถาได้ทุกอย่างแต่หมอใจยังไม่กล้านำวิชาดังกล่าวมาใช้เนื่องจากกลัวว่าไม่มีใครเชื่อและรักษาไม่หาย เลยเก็บวิชาเป็นความลับ จนกระทั้งอายุประมาณ30ปี เพื่อนบ้านโดนงูเห่ากัด และไม่อยากไปหาหมอที่โรงพยาบาล หมอใจจึงตัดสินใจนำวิชามาลองใช้เป็นครั้งแรก ซึ่งถือว่าประสบความสำเร็จ ทำให้มั่นใจในการรักษามากยิ่งขึ้น', 'รักษาพิษจาก สัตว์  เช่น งูทุกชนิด ตะขาบ แมงป่อง ต่อ แตน และปลากระเบน', '5 ม.1', 'ชุมพล', 'สทิงพระ', 'สงขลา', 500, '00:00:09', '00:00:16', 'received_757254364706078.jpeg', '2019-08-10 02:54:55', '2019-08-10 02:54:55'),
(9, 'ถนอม  คงแก้ว', '75', 'หมอถนอมได้รับการถ่ายทอดวิชาหมอพื้นบ้านจากคุณตาตั้งแต่อายุประมาณ30ปี วิธีการศึกษาโดยการบอกเล่าจากคุณตา จด จำ ไม่มีการบันทึกเป็นลายลักษณ์อักษรและไม่มีตำรายาที่รับสืบทอด', 'รักษาโรคกระดูก ข้อ เอ็น,หมองู (งูเห่า,งู\r\nกะปะ),รักษาต้อหิน ต้อกระจก,รักษาเริม', '56 ม.5', 'กระดังงา', 'สทิงพระ', 'สงขลา', 500, '00:00:09', '00:00:16', 'received_886343925056044.jpeg', '2019-08-10 02:57:54', '2019-08-10 02:57:54'),
(10, 'ถั่น  กิ้มเส้ง', '76', 'หมอถั่นได้รับการถ่ายทอดวิชาหมอพื้นบ้าน จากคุณพ่อที่เป็นหมอพื้นบ้าน ได้รับคำแนะนำจากหมอควนเพื่อไปเรียนเกี่ยวกับสมุนไพรที่นครปฐมและได้รับมาจากบรรพบุรุษสืบทอดมาเรื่อยๆ', 'รักษาริดสีดวงทวาร', '-', '-', '-', '-', 500, '00:00:09', '00:00:16', 'received_451130132401296.jpeg', '2019-08-10 03:01:24', '2019-08-10 03:01:24'),
(11, 'เสริม  ช่วยนุกูล', '70', 'หมอเสริม ได้ศึกษาวิชาความรู้ทางด้านสมุนไพรมาจากบิดา ซึ่งตัวหมอเองมีความสนใจและชอบทางด้านสมุนไพร หมอได้ศึกษาด้านการแพทย์แผนไทยอย่างต่อเนื่องโดยเข้าฝึกอบรมสมุนไพรและแลกเปลี่ยนความรู้จากผู้สูงอายุ มีตำราเกี่ยวกับสูตรตำรับในการรักษาโรคต่างๆ', 'รักษาโรค เกี่ยวกับเลือด ลม,รักษาอาการปวด\r\nเมื่อย เช่นไข้ทับฤดู ประจำเดือนมาไม่ปกติ หญิงวัยทอง', '4 ม.3', 'ชุมพล', 'สทิงพระ', 'สงขลา', 500, '00:00:09', '00:00:16', NULL, '2019-08-10 03:06:52', '2019-08-10 03:06:52'),
(12, 'ชม  สุวรรณศิลป์', '86', 'หมอชมเริ่มจากการศึกษาด้วยตนเองโดยได้เข้าฟังอบรมเรื่องสมุนไพรมาเมื่อประมาณ15ปี ที่แล้ว และแรงบันดาลใจเกิดจากความชอบส่วนตัว แต่ไม่มีโอกาสได้ศึกษาอย่างจริงจังจนกระทั้งได้รับตำรายามาจนเริ่มศึกษาด้วยตนเอง จากตำรา', '-	รักษาโรค โดย\r\nเน้นโรคลม', '139 ม.3', 'บ้านขาว', 'ระโนด', 'สงขลา', 500, '00:00:09', '00:00:16', 'received_2848947191787527.jpeg', '2019-08-10 03:09:24', '2019-08-10 03:09:24'),
(13, 'แสง  วั่นเส้ง', '82', 'หมอแสงเริ่มศึกษามาจากบรรพบุรุษ ตั้งแต่รุ่นปู่ พ่อ น้า พ่อเฒ่า สืบทอดกันมา', 'ไข้ทับฤดู,อัมพาต ดีซ่าน \r\nและเพศเลือด', '67/1', 'ท่าบ่อน', 'ระโนด', 'สงขลา', 500, '00:00:09', '00:00:16', NULL, '2019-08-10 03:11:29', '2019-08-10 03:11:29'),
(14, 'กิตติพงศ์ เพชรรัตน์  (หมอนัน)', '71', '(หมอนัน) เริ่มศึกษาความรู้จากพ่อซึ่งเป็นหมอพื้นบ้านเมื่ออายุ30ปีได้สืบทอดมาจากบรรพบุรุษ มีประสบการณ์ ความชำนาญในการรักษา มานานแล้วประมาณ 36ปี', 'โรคอัมพฤกษ์,โรคอัมพาต,โรคกระดูหัก,แก้พิษงู,โรคซางในเด็ก', '75', 'บ้านนา', 'บ้านนาเดิม', 'สุราษฎร์ธานี', 500, '09:00:00', '20:00:00', 'received_370983790186191.jpeg', '2019-08-10 03:13:38', '2019-08-10 03:13:38'),
(15, 'วิเชียร  บุญทอง (หมอลุย)', '68', '(หมอลุย) เริ่มศึกษาหาความรู้จากตำราที่ได้จดบันทึกในใบลานที่เรียกว่า สมุดดำเป็นตำราตกทอดมาจากบรรพบุรุษมีประสบการณ์ในการรักษาโรคมามากกว่า25ปี', 'โรคไต,โรคเบาหวาน,โรคความดัน,ยาแก้พิษงู,โรคมะเร็ง,โรคผิวหนัง,ภูมิแพ้', '10/4\r\nถนนศิริรักษ์', 'ท่าข้าม', 'พุนพิน', 'สุราษฎร์ธานี', 500, '09:00:00', '20:00:00', 'received_404066196892866.jpeg', '2019-08-10 03:16:17', '2019-08-10 03:16:17'),
(16, 'เติม  เจริญสุข (หมอเติม)', '81', '(หมอเติม) เริ่มศึกษาความรู้จากหมอพื้นบ้านซึ่งมีความชำนาญในการรักษาโรคผู้หญิง และโรคในเด็ก จากหมอคลิ้ง แดงแก้ว ผู้เป็นลุงใช้ตำราใบลานประกอบในการรักษา ให้การรักษาโรคมามากกว่า 46 ปี', 'โรคตานซาง,ปวดประจำเดือน,รักษาพิษงู', '29/1 ม.10', 'ต.ไซรขึง', 'อ.พระแสง', 'สุราษฎร์ธานี', 500, '20:00:00', '20:00:00', 'received_2272086113105827.jpeg', '2019-08-10 03:19:13', '2019-08-10 03:19:13'),
(17, 'ประเคียง ศรีอินทร์        (หมอดำ)', '53', '(หมอดำ) เริ่มศึกษาวิชาการนวดเนื่องจากฝันว่า พ่อท่านคล้าย วาจาสิทธิ์ ซึ่งเป็นพระที่หมอให้ความเคารพ มาเข้าฝันและบอกคาถารักษาโรคกระดูกให้กับผู้ป่วย มีประสบการณ์มาประมาณ 24 ปี', 'โรคอัมพฤกษ์\r\n-โรคอัมพาต\r\n-แขน,ขาหลุด\r\n-กระดูกแตก\r\n-กระดูกซ้อน', '121 ม.17', 'บ้านเสด็จ', 'เคียนซา', 'สุราษฎร์ธานี', 500, '09:00:00', '20:00:00', 'received_1282601071898233.jpeg', '2019-08-10 03:21:15', '2019-08-10 03:21:15');

-- --------------------------------------------------------

--
-- Table structure for table `herbs`
--

CREATE TABLE `herbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drugDetail` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `herbs`
--

INSERT INTO `herbs` (`id`, `name`, `detail`, `drugDetail`, `image`, `created_at`, `updated_at`) VALUES
(2, 'ว่านหางจระเข้', 'ประโยชน์ภายนอก\r\n•	รักษาแผลไฟไหม้และน้ำร้อนลวก \r\n•	ป้องกันและบรรเทารอยไหม้จากการออกแดด\r\n•	สมานแผลจากของมีคมและแผลถลอก\r\n\r\nประโยชน์ภายใน\r\n•	บรรเทาอาการปวดข้อ \r\n•	ป้องกันโรคเบาหวาน\r\n•	แก้กระเพาะอักเสบและลำไส้อักเสบ\r\n\r\nประโยชน์ด้านความงาม\r\n•	บำรุงเส้นผมให้เงางามและช่วยขจัดรังแค\r\n•	รักษาสิวและรอยด่างดำ\r\n•	บำรุงผิวกาย', 'เจลว่านหางจระเข้,ครีมว่านหางจระเข้,แคปซูลว่านหางจระเข้,ยาหม่องว่านหางจระเข้', 'received_2433253460088510.png', '2019-08-10 02:13:43', '2019-08-10 02:13:43'),
(3, 'ขมิ้นชัน', '•	ช่วยทำให้ระบบกระเพาะอาหารทำงานได้ดีมากขึ้น \r\n•	ช่วยแก้อาการจุกเสียด \r\n•	ช่วยแก้ไส้เลื่อน ไส้ลาม\r\n•	ช่วยแก้อาการไอเป็นเลือด', 'แชมพูสมุนไพรทองพันชั่ง,โทนเนอร์ทองพันชั่ง,ยาหม่องทองพันชั่ง,แคปซูลทองพันชั่ง', 'received_348893862704736.png', '2019-08-10 02:15:16', '2019-08-10 02:15:16'),
(4, 'ทองพันชั่ง', '•	ช่วยทำให้ระบบกระเพาะอาหารทำงานได้ดีมากขึ้น \r\n•	ช่วยแก้อาการจุกเสียด \r\n•	ช่วยแก้ไส้เลื่อน ไส้ลาม\r\n•	ช่วยแก้อาการไอเป็นเลือด', 'แชมพูสมุนไพรทองพันชั่ง,โทนเนอร์ทองพันชั่ง,ยาหม่องทองพันชั่ง,แคปซูลทองพันชั่ง', 'received_2467441030017468.png', '2019-08-10 02:17:21', '2019-08-10 02:17:21'),
(5, 'กะเพรา', '•	ช่วยบำรุงธาตุไฟ \r\n•	ช่วยแก้อาการคลื่นเหียนอาเจียน \r\n•	ช่วยแก้อาการปวดด้วยการใช้ใบกะเพรานำมาคั้นรับประทานสด 1 ถ้วยตะไล จะช่วยแก้อาการปวดมวนท้องได้เป็นอย่างดี \r\n•	ช่วยขับลมแก้อาการปวดท้องอุจจาระ \r\n•	ใบกะเพรามีสรรพคุณช่วยขับลมในกระเพาะ \r\n•	ช่วยแก้อาการจุกเสียดแน่นท้อง', NULL, 'received_481521216002290.png', '2019-08-10 02:19:20', '2019-08-10 02:19:20'),
(6, 'กระชายดำ', '•	ช่วยบำรุงโลหิตของสตรี \r\n•	ช่วยในระบบหมุนเวียนโลหิตของร่างกาย ทำให้โลหิตไหลเวียนได้ดีขึ้น \r\n•	ช่วยทำให้เจริญอาหาร \r\n•	ช่วยรักษาโรคความดันโลหิต รักษาสมดุลของความดันโลหิต \r\n•	ช่วยรักษาโรคเบาหวาน ช่วยลดระดับน้ำตาลในเลือด \r\n•	ช่วยรักษาโรคภูมิแพ้ \r\n•	ช่วยแก้หอบหืด \r\n•	ช่วยแก้อาการใจสั่นหวิว แก้ลมวิงเวียน', 'แคปซูลกระชายดำ', 'received_1016543071881831.png', '2019-08-10 02:22:12', '2019-08-10 02:22:12'),
(7, 'ว่านชักมดลูก', '•	ช่วยกระชับหน้าท้องที่หย่อนคล้อยหลังคลอดบุตร\r\n•	ช่วยกระชับช่องคลอดภายในของสตรี ช่วยให้มดลูกเข้าอู่เร็วขึ้น\r\n•	ช่วยป้องกันโรคมะเร็งปากช่องคลอดหรือในมดลูก\r\n•	ช่วยทำให้ซีสต์หรือเนื้องอกภายในช่องคลอดฝ่อตัวลง\r\n•	ช่วยดับกลิ่นภายในช่องคลอดของสตรีให้ลดลงหรือหายไป', 'ยาน้ำว่านชักมดลูก,ยาแคปซูลว่านชักมดลูก', 'received_674926799585419.png', '2019-08-10 02:25:20', '2019-08-10 02:25:20');

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
(32, '2014_10_12_000000_create_users_table', 1),
(33, '2014_10_12_100000_create_password_resets_table', 1),
(34, '2018_12_23_120000_create_shoppingcart_table', 1),
(35, '2019_08_03_060104_create_docter_table', 1),
(36, '2019_08_03_060505_create_spa_table', 1),
(37, '2019_08_03_060523_create_herbs_table', 1),
(38, '2019_08_03_060721_create_order_table', 1),
(39, '2019_08_03_062821_create_payment_table', 1),
(40, '2019_08_03_215334_create_contact_table', 1),
(41, '2019_08_03_215811_create_about_table', 1),
(42, '2019_08_10_074021_create_product_table', 1);

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
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `type`, `detail`, `image`, `price`, `created_at`, `updated_at`) VALUES
(2, 'สมุนไพร-ดอกคำฝอย', '3', 'ลดไขมันในเส้นเลือด ป้องกันไขมันอุดตันเส้นเลือด,\r\nบำรุงประสาท และระงับประสาท ช่วยผ่อนคลายสมองให้หลับสบาย', '68399145_1475291815956608_742854528449118208_n.jpg', 150, '2019-08-10 02:15:09', '2019-08-10 02:15:09'),
(3, 't2', '3', 'ช่วยรักษาอาการท้องร่วง ท้องเดิน โรคลำไส้,\r\nใช้รักษาอาการท้องผูกเรื้อรังได้,\r\nแก้ลม แก้มูกเลือด,\r\nช่วยรักษาอาการหลอดลมอักเสบ,', '68429413_2357886650944445_4715384426081550336_n.jpg', 170, '2019-08-10 02:16:23', '2019-08-10 02:16:23'),
(4, 't3', '3', 'ช่วยแก้ลมวิงเวียน แน่นหน้าอก,\r\nช่วยบำรุงกำลัง เสริมสมรรถภาพทางเพศ บำบัดโรคนกเขาไม่ขันหรือโรคอีดี', '67790916_946038145747010_4691359985345495040_n.jpg', 160, '2019-08-10 02:18:33', '2019-08-10 02:18:33'),
(5, 't4', '3', 'ป้องกันและบรรเทาอาการร้อนใน,\r\nอาการทางระบบทางเดินอาหาร มีแผลในปาก', '67913667_336887860532797_1950372106839523328_n.jpg', 250, '2019-08-10 02:19:35', '2019-08-10 02:19:35'),
(6, 'ยาต้ม', '1', 'แก้อ่อนเพลีย,\r\nบำรุงเลือด,\r\nแก้เหน็บชา,\r\nปวดหลัง,', '67922301_446259182627850_8397740814163247104_n.jpg', 250, '2019-08-10 02:20:47', '2019-08-10 02:20:47'),
(7, 'ยาแก้เบาหวาน-ลดน้ำตาล สูตร1', '1', 'แก้เบาหวานขึ้นตา,\r\nปวดหัว,\r\nชาตามแขนขา,', '68651306_343683709854964_797123347199557632_n.jpg', 300, '2019-08-10 02:21:20', '2019-08-10 02:21:20'),
(8, 't7', '2', 'บรรเทาอาการปวดเมื่อยตามกล้ามเนื้อและข้อต่อ อาการปวด บวม อักเสบจากแมลงกัดต่อย,\r\nใช้ดมเพื่อช่วยบรรเทาอาการวิงเวียนศีรษะ หน้ามืด เป็นลม', '64823622_2572598959437117_2329093599922225152_n.jpg', 80, '2019-08-10 02:22:18', '2019-08-10 02:22:18'),
(9, 'น้ำมันนวดเส้น', '2', 'บรรเทาอาการปวดเมื่อย\r\nแผลพุพองจากไฟไหม', '67776834_381728815821244_1863108185385074688_n.jpg', 95, '2019-08-10 02:22:39', '2019-08-10 02:22:39');

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `detail` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `spa` (`id`, `name`, `address`, `district`, `province`, `detail`, `price`, `worktime_start`, `worktime_stop`, `image`, `created_at`, `updated_at`) VALUES
(1, 'สะบันงา นวดแผนไทย&สปา', 'ซอย วันดีโฆษิตกุลพร เมือง', 'เมืองนครศรีธรรมราช', 'นครศรีธรรมราช', NULL, 500, '00:00:09', '00:00:16', 'received_361296034508822.jpeg|received_362395991107424.jpeg|received_462145831272820.jpeg|received_476246353163358.jpeg|received_2543528272347807.jpeg', '2019-08-10 02:38:53', '2019-08-10 02:38:53'),
(2, 'สวคนธ์สปา | สปา นครศรีธรรมราช นวดแผนไทย อยู่ไฟโบราณ', '438 ม.2 เสาธง', 'ร่อนพิบูลย์', 'นครศรีธรรมราช', NULL, 500, '00:00:09', '00:00:16', 'received_326703408214663.jpeg|received_445628556279434.jpeg|received_646027735875515.jpeg', '2019-08-10 02:41:04', '2019-08-10 02:41:04'),
(3, 'ร้านภัทรลดา นวดแผนไทย&สปา', '6 ด้านหน้าโรงแรมทวิลโลตัส 12 ถนน พัฒนาการคูขวาง ตำบล ในเมือง', 'เมืองนครศรีธรรมราช', 'นครศรีธรรมราช', NULL, 500, '00:00:09', '00:00:16', 'received_296504387826856.jpeg|received_2327031170947158.jpeg|received_2594054280881203.jpeg', '2019-08-10 02:42:53', '2019-08-10 02:42:53');

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
(1, 'admin', 'admin@test.com', NULL, '$2y$10$Pt.42AV5ak55AqXNRebo1eDIoWMgjHJ/Y/MMULGzw2kC5/ClX1dIi', 1, NULL, '2019-08-10 01:02:45', '2019-08-10 01:02:45'),
(2, 'user', 'user@test.com', NULL, '$2y$10$85/GVT30eIoW9/MsCgg7i.mwfc9X.oKYPyY2FwqA.IlU0rOBBroGW', 0, NULL, '2019-08-10 02:42:21', '2019-08-10 02:42:21');

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
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`,`instance`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `herbs`
--
ALTER TABLE `herbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `spa`
--
ALTER TABLE `spa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
