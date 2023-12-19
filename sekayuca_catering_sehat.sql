-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 06, 2023 at 11:22 PM
-- Server version: 10.6.15-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekayuca_catering_sehat`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksis`
--

CREATE TABLE `detail_transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `domisili` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `alergi` varchar(255) NOT NULL,
  `langganan` varchar(255) NOT NULL,
  `batch` varchar(250) NOT NULL,
  `status` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `gross_amount` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `payment_code` varchar(255) DEFAULT NULL,
  `pdf_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_transaksis`
--

INSERT INTO `detail_transaksis` (`id`, `nama`, `email`, `whatsapp`, `domisili`, `alamat`, `alergi`, `langganan`, `batch`, `status`, `price`, `transaction_id`, `order_id`, `gross_amount`, `payment_type`, `payment_code`, `pdf_url`, `created_at`, `updated_at`) VALUES
(1, 'agakagak', 'agakuhu@gmail.com', '1234567890000', 'Jakarta Barat', 'awdadad', 'asedx', 'Makan Malam(10 Hari)', '3', 'expire', '480000', '396e156f-7b23-4767-a7d8-9c85ff0a958a', '101108383', '480000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/64c4994e-d1fd-4e30-93d0-c22e48e2088f/pdf', '2023-06-12 23:47:26', '2023-06-12 23:47:51'),
(2, 'awdawdwad', 'awdwad@gmail.com', '213123', 'Jakarta Barat', 'awd', 'awdawdawd', 'Makan Malam(10 Hari)', '3', 'settlement', '480000', '5c77e6d6-7b05-46df-a19e-9b49aace664d', '1028619982', '480000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/56e787ee-2efb-41d9-b4e3-f808d22dc44e/pdf', '2023-06-11 18:09:11', '2023-06-11 18:09:17'),
(3, 'Adrian Juansyah', 'juansyah23@gmail.com', '12111', 'Jakarta Pusat', 'awdadwadaw', 'awdawdawd', 'Makan Siang + Makan Malam(10 Hari)', '3', 'settlement', '510000', '13b3ebab-6f9f-49c1-80b6-085d1dd9c683', '107086593', '510000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/8906b559-8a89-4072-bfb7-74196b058d41/pdf', '2023-06-11 16:09:45', '2023-06-11 16:37:56'),
(64784946942, 'coba', 'cob@gmail.com', '111109', 'Jakarta Barat', 'awdawda', 'awdawdawdawd', 'Makan Malam(5 Hari)', '1', 'settlement ', '250000', '438b97ac-253e-4cb7-90e3-2b1c351e2fb7', '1088183064', '250000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/cd6401a0-c075-4627-9a7d-182450af7a20/pdf', '2023-07-06 20:41:59', '2023-07-08 03:43:04'),
(26, 'kakiayam', 'kakiayam@gmail.com', '111', 'Bekasi', 'awdddd', 'awdawdwadwadwad', 'Makan Siang(5 Hari)', '1', 'settlement', '250000', 'a3664fec-9e50-48f4-af7f-eafa45697fbf', '1220603234', '250000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/e11d82b4-88ea-4a9a-a3fe-c2faadc212f5/pdf', '2023-07-07 08:08:01', '2023-07-07 08:08:01'),
(6, 'test', 'awdjlawjd@gmail.com', '123213', 'Bekasi', 'awdawdwad', 'awdawdawdawd', 'Makan Siang(5 Hari)', '1', 'pending', '250000', 'af107da3-91cf-4e64-9396-43561d660683', '1241742594', '250000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/392400e4-5f7b-4a0f-979d-c4814e6798cc/pdf', '2023-06-29 15:49:31', '2023-06-29 15:49:31'),
(64784946942, 'coba', 'cob@gmail.com', '111109', 'Bekasi', 'teteteeas', 'tetetete', 'Makan Siang(5 Hari)', '1', 'settlement ', '250000', 'c0748d41-9fc0-4a28-916f-bd8ca39e6a2c', '1264824382', '250000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/57a3ec5c-85bf-412b-978a-4c280fb212b3/pdf', '2023-07-06 20:40:24', '2023-07-08 03:43:04'),
(8, 'Adrian juansyah', 'juan@gmail.com', '11111111', 'Jakarta Barat', 'jan', 'awdaad', 'Makan Malam(10 Hari)', '3', 'pending', '480000', 'e36b0777-bfda-44db-a45d-297ce287df1d', '1299752106', '480000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/4aac4045-2e2c-4495-bd5b-76388d43ee62/pdf', '2023-06-11 17:02:37', '2023-06-11 17:03:16'),
(64784946942, 'Coba 07/07', 'cob@gmail.com', '111109', 'Bekasi', 'jln duta raya', 'teh manis', 'Makan Siang(5 Hari)', '1', 'settlement ', '250000', '2a09e340-2bd2-4e5f-8b99-a4ebb7ca682b', '134122065', '250000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/c463ad9a-083c-4226-896c-7d70370cc35b/pdf', '2023-07-07 10:50:45', '2023-07-08 03:43:04'),
(9, 'juan', 'jujujujajaja1114@gmail.com', '01203012301203', 'Jakarta Barat', 'jln bintara 14', 'awdawdawdawd', 'Makan Malam(10 Hari)', '3', 'pending', '480000', 'fad9b188-a00a-48b2-9ca6-2995c47ef146', '1368977480', '480000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/6dece7f1-f16d-4335-87f0-9c0c4d1c3790/pdf', '2023-06-12 18:39:18', '2023-06-12 18:39:18'),
(10, 'ajwdlajwdl', 'jdawljdlajdwl@gmail.com', '23018320', 'Jakarta Barat', 'awdawdawdawd', 'awdawdawd', 'Makan Malam(10 Hari)', '3', 'settlement', '480000', 'd3a18a57-1031-414b-93e4-ad558a8e0edb', '1378575486', '480000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/db22c192-dab1-4dbb-b8ac-6717b00e5e15/pdf', '2023-06-11 18:01:45', '2023-06-11 18:01:54'),
(12, 'awdawdawdwad', 'awdawd@gmail.com', '1211222', 'Jakarta Barat', 'awdawdawd', 'wadawdawdwad', 'Makan Siang(5 Hari)', '3', 'settlement', '250000', 'c423a93f-d52f-45e6-a787-930ae468d4ba', '1406298044', '250000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/b26a9a6d-76fd-4b8e-9ba7-3e24637ceba4/pdf', '2023-06-11 16:51:15', '2023-06-11 16:52:57'),
(648674886, 'asipa', 'asipa@gmail.com', '089615309417', 'Bekasi', 'jl. pulu pulu no.90 bekasi barat', '-', 'Makan Siang + Makan Malam(5 Hari)', '1', 'settlement', '280000', '94fa9c2c-cb19-4bf4-ab05-389f04e0e1f2', '1408144114', '280000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/68da78ff-21a4-483b-9aad-be64b3f02e16/pdf', '2023-07-07 12:47:07', '2023-08-24 21:30:43'),
(13, 'Adrian', 'juansyah2306@gmail.com', '087865683684', 'Bekasi', 'bintara 14', 'ikan', 'Makan Malam(10 Hari)', '1', 'settlement', '480000', '241a4abe-2dc5-4dd2-ae2a-b24578db01bb', '1414623962', '480000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/b71b7504-e260-444f-98f0-1cc661195453/pdf', '2023-06-21 22:08:08', '2023-06-21 22:08:08'),
(14, 'Mouse Gaming', 'gaming@gmail.com', '0982111', 'Jakarta Pusat', 'awdawdawdawawd', 'awdawdawdawdawd', 'Makan Malam(10 Hari)', '3', 'pending', '480000', '2821440f-7252-4e8b-97d0-3d4f443c13a1', '1423135224', '480000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/be2f086d-ffa2-48fc-8656-cfe1181a2ac1/pdf', '2023-06-11 17:59:34', '2023-06-11 17:59:34'),
(15, 'awdawdawd', 'awdawd@gmail.com', '23123123', 'Jakarta Barat', 'awdawdawd', 'wadawdawdwad', 'Makan Siang + Makan Malam(5 Hari)', '3', 'settlement', '280000', '19005653-4992-4216-9464-8b655b80e092', '1440032348', '280000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/a631543e-9f25-456d-bcfd-7a010a67e897/pdf', '2023-06-11 18:12:15', '2023-06-11 18:12:22'),
(16, 'Adrian', 'juansyah@gmail.com', '1233', 'Depok', 'awdadwa', 'awdadadw', 'Makan Siang(5 Hari)', '3', 'pending', '250000', 'd661d41a-2a3d-44e0-98c7-00300d131d5d', '1462043156', '250000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/e78b6589-44ae-4610-bfc4-673d3a483927/pdf', '2023-06-11 16:38:21', '2023-06-11 16:40:09'),
(17, 'adwwawd', 'register@gmail.com', '1234567', 'Bekasi', 'awdadawd', 'wdawdadawd', 'Makan Siang(20 Hari)', '1', 'settlement', '900000', '9d09eab5-80f3-48e1-a770-f371497c53a8', '1467033522', '900000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/a62df945-6e1d-4ee9-8090-6dc44a44a242/pdf', '2023-07-06 16:23:49', '2023-07-06 16:23:49'),
(18, 'awdawdwad', 'awwadawd@gmail.com', '23312313', 'Jakarta Barat', 'awdawdawd', 'awdwadwad', 'Makan Siang + Makan Malam(5 Hari)', '3', 'settlement', '280000', 'e91335b3-c847-4393-8d30-1bdf98188495', '1481282780', '280000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/7ffbdd39-e6cb-41a2-a4c1-d2c94ad1457f/pdf', '2023-06-11 18:11:39', '2023-06-11 18:11:45'),
(19, 'test', 'jujujujajaja1114@gmail.com', '2131123', 'Jakarta Pusat', 'jln binatara 14', 'kodok', 'Makan Siang + Makan Malam(20 Hari)', '3', 'settlement', '930000', '819f8a7d-67f1-4b62-b19b-6325e482ac2c', '1497523022', '930000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/2f3424da-5681-4baf-9211-1c9560fed584/pdf', '2023-06-10 18:44:18', '2023-06-12 21:34:53'),
(64784946942, 'coba', 'cob@gmail.com', '111109', 'Jakarta Barat', 'jln bintara 14', 'keju', 'Makan Siang(5 Hari)', '1', 'settlement ', '250000', '91e435cf-a40b-4e89-9184-ae7b5331ab9a', '1501851783', '250000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/9c493394-af8b-4245-85af-6bde2982d881/pdf', '2023-07-07 06:47:49', '2023-07-08 03:43:04'),
(648674886, 'asipa', 'asipa@gmail.com', '089615309417', 'Bekasi', 'jl. asdfghjkl', 'udang', 'Makan Siang(5 Hari)', '1', 'settlement', '250000', '4cdd4233-d4fc-4947-9eb7-c66be5cfa308', '1530630554', '250000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/4b4410c5-79f4-4d97-8557-cb0c49f04feb/pdf', '2023-07-08 05:37:58', '2023-08-24 21:30:43'),
(6489231, 'Eva Novianti', 'unsada.ac@gmail.com', '08967083231', 'Bekasi', 'jl.asdfghjkl', 'udang', 'Makan Siang(5 Hari)', '1', 'settlement ', '250000', '0f82ca24-a1d6-444c-b781-05dfe16c0d83', '1552767348', '250000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/58598692-3264-4a3b-9430-dcfd461756bb/pdf', '2023-07-08 06:18:55', '2023-07-08 06:20:12'),
(22, 'Gery Butter', 'gerry@gmail.com', '111111', 'Jakarta Pusat', 'awdawdawd', 'wdawdawdawd', 'Makan Malam(10 Hari)', '3', 'settlement', '480000', 'fbd2598a-231d-479d-9426-ce7af63c7d5d', '1587830997', '480000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/e0b8ca59-0ff9-499f-83f3-88ca97f48ae3/pdf', '2023-06-11 17:44:02', '2023-06-11 17:45:26'),
(64784946942, 'coba', 'cob@gmail.com', '111109', 'Jakarta Barat', 'awdadadwa', 'awdawdadawd', 'Makan Malam(10 Hari)', '1', 'settlement ', '480000', 'f8427cec-37db-4b72-ad33-e4168b366f0e', '1594210870', '480000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/be34eba4-efa9-440f-9548-2bbf2f1d52b5/pdf', '2023-07-07 19:53:38', '2023-07-08 03:43:04'),
(23, 'adrian wawaa', 'papa@gmail.com', '2222222', 'Depok', 'awdawdwad', 'wadawdawdawd', 'Makan Malam(10 Hari)', '3', 'pending', '480000', 'ff08d27c-14c7-44d8-ad82-1d11e943cfc5', '1596889702', '480000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/e2c15501-d88b-445e-b0ff-d0e974da7a49/pdf', '2023-06-11 17:04:10', '2023-06-11 17:06:24'),
(24, 'awdawdwa', 'awdawdwad@gmail.com', '213131', 'Jakarta Barat', 'awdawdawdawd', 'awdawdawdawd', 'Makan Malam(20 Hari)', '3', 'pending', '900000', '50c53a87-4215-44eb-a217-bc5828eda4c1', '1604141178', '900000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/bfcd20dd-11ed-44b4-a1e4-8bb0bd955bfe/pdf', '2023-06-12 22:34:49', '2023-06-12 22:34:49'),
(64784946942, 'coba2', 'cob@gmail.com', '111109', 'Bekasi', 'jalan bintara raya', 'susu sapi', 'Makan Siang(5 Hari)', '1', 'settlement ', '250000', 'c1a99ab6-ba53-47ef-877e-0edc4001bf59', '1638091420', '250000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/e9ed7547-6172-41d0-8099-7a844761b3cf/pdf', '2023-07-07 10:18:42', '2023-07-08 03:43:04'),
(25, 'awdawd', 'awdawd@gmail.com', '123122', 'Jakarta Barat', 'awdawdawd', 'awdawdawd', 'Makan Siang(5 Hari)', '1', 'settlement', '250000', 'e96bc316-237b-4c28-aa45-2e7215c0c917', '1700688040', '250000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/a4aa39ba-dcb9-4906-a09b-96b558c0738d/pdf', '2023-06-29 13:39:09', '2023-06-29 13:39:09'),
(27, 'foam More', 'foam@gmail.com', '2131312', 'Bekasi', 'awdawdawd', 'awdwadawdwad', 'Makan Siang + Makan Malam(20 Hari)', '3', 'settlement', '930000', '45d82be8-08bd-4f6a-8787-ac950de71347', '1743380062', '930000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/837c977f-6a72-4b61-833b-4bfdaf6238de/pdf', '2023-06-11 18:02:53', '2023-06-11 18:04:24'),
(28, 'bitha', 'bitha.totoro@gmail.com', '081282809092', 'Jakarta Pusat', 'jl kenabaran no.90', 'udang', 'Makan Malam(5 Hari)', '3', 'settlement', '250000', 'd5b7932b-4f0d-4f53-ba86-403f779534bc', '1781078881', '250000.00', 'echannel', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/485e6ba4-890c-47a5-81f3-2ef2dcf5e083/pdf', '2023-06-13 08:03:22', '2023-06-13 08:05:16'),
(29, 'awdawdwa', 'awdawdawd@gmail.com', '13129', 'Jakarta Pusat', 'wadwadawd', 'wadwadwad', 'Makan Malam(10 Hari)', '3', 'settlement', '480000', '8adb994a-0aee-4928-8f93-7e7746f003af', '1829942284', '480000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/f8a805b9-b544-4339-93db-46648d783ef4/pdf', '2023-06-12 22:39:36', '2023-06-12 22:39:36'),
(648674886, 'Ashyfa Febritha Z', 'bitha.totoro@gmail.com', '089615309417', 'Bintara, Bekasi Barat', 'jl. jajajaja', '-', 'Makan Siang + Makan Malam(5 Hari)', '4', 'expire', '280000', '60b2c91c-c236-4c24-bc04-ac4eacd054ec', '1872155187', '280000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/13f7c273-5e55-4a6c-bbc4-f922e5751253/pdf', '2023-08-29 01:54:54', '2023-08-29 01:56:40'),
(30, 'awdawdwa', 'dwadaw@gmail.com', '13123123', 'Jakarta Pusat', 'awdawdawd', 'wadwadwadwad', 'Makan Malam(10 Hari)', '3', 'settlement', '480000', '413044ff-dd8a-4ad0-bfe0-184016c44949', '1903901290', '480000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/f1cb953f-500f-44ee-858b-a5da6fcb120c/pdf', '2023-06-11 18:09:51', '2023-06-11 18:09:56'),
(31, 'awdawd', 'dwadawd@gmail.com', '23131', 'Jakarta Barat', 'adwawdawd', 'wadawdawd', 'Makan Malam(10 Hari)', '3', 'settlement', '480000', '06f38c3e-4588-4b3f-9f20-10b4bb499ad1', '1936005820', '480000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/145498ee-b29b-4d23-8805-54659fee38dd/pdf', '2023-06-11 18:10:24', '2023-06-11 18:10:31'),
(648674886, 'asipa', 'asipa@gmail.com', '089615309417', 'Jaka Sampurna, Bekasi Barat', ',hkhkhkhkh', 'awdawdawdawd', 'Makan Siang(5 Hari)', '3', 'expire', '250000', '72d176e0-c71f-4208-90f0-b23ad4838c78', '1951307983', '250000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/5564697c-3a79-40f6-a3bb-97c454d1598e/pdf', '2023-08-24 21:46:41', '2023-08-24 21:58:44'),
(32, 'adwwawd', 'register@gmail.com', '1234567', 'Bekasi', 'jalan binatara', 'kodok', 'Makan Siang(5 Hari)', '1', 'settlement', '250000', '7ac3f143-4b31-466e-8d2e-89f9fb605ada', '1983983685', '250000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/4f93600a-eba2-49da-8d25-7388396e1d50/pdf', '2023-06-30 09:21:10', '2023-06-30 09:21:10'),
(33, 'Adrian Juansyah', 'juansyah2306@gmail.com', '12345677', 'Jakarta Barat', 'jln bintara 14', 'anjing', 'Makan Malam(20 Hari)', '3', 'Gagal', '900000', 'f3b7b1ee-c1e1-4150-a4e8-f5810efe5234', '1985737515', '900000.00', 'cstore', '810012345677', 'https://app.sandbox.midtrans.com/snap/v1/transactions/ece8775d-7b4b-448a-bf75-f970a2bb91ba/pdf', '2023-06-11 11:49:14', '2023-06-12 22:41:55'),
(34, 'awdwadwad', 'awdawd@gmail.com', '131321', 'Jakarta Pusat', 'awdadawd', 'awdawdwad', 'Makan Malam(10 Hari)', '3', 'expire', '480000', '235a1d1e-763a-4e75-a82f-f996e8ab7eb7', '2048122995', '480000.00', 'qris', NULL, NULL, '2023-06-12 23:15:58', '2023-06-12 23:21:00'),
(35, 'awdawdwad', 'awdawdawd@gmail.com', '12313', 'Jakarta Barat', 'awdawdawd', 'awdawdawd', 'Makan Siang(5 Hari)', '1', 'settlement', '250000', '20c9d2e0-5028-462f-8765-bb5ec52deeae', '2049695858', '250000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/78061fc0-da01-474b-a498-45ef259944da/pdf', '2023-07-04 15:52:49', '2023-06-29 15:52:49'),
(36, 'awdawd', 'adawdwad@gmail.com', '2313', 'Bekasi', 'awdawdawd', 'awdawdwad', 'Makan Siang + Makan Malam(20 Hari)', '3', 'settlement', '930000', '215dec94-9ed9-43b0-9992-abce33ca0c30', '2106822457', '930000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/9b184d61-38ba-4a6c-b099-590cfd2cccef/pdf', '2023-06-11 18:10:54', '2023-06-11 18:11:03'),
(37, 'Adrian juansyha', 'awdawd@gmail.com', '123130', 'Jakarta Pusat', 'awdadawd', 'awdawdawdawd', 'Makan Malam(10 Hari)', '3', 'settlement', '480000', '2b9a5383-fb70-4c60-a20a-6832e0f8c439', '2135361075', '480000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/cd25dc91-a532-4a14-b0f0-f2ce14f28e44/pdf', '2023-06-11 15:40:16', '2023-06-12 21:13:59'),
(38, 'abdur', 'abdur@gmail.com', '11109', 'Jakarta Barat', 'awdwadawd', 'awdwadwadwa', 'Makan Malam(10 Hari)', '3', 'settlement', '480000', 'fac9c7d3-3063-49e0-8b65-329e07cb8a4a', '233108588', '480000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/1973a261-d4d1-4484-9f43-c1db81607ca6/pdf', '2023-06-12 23:08:10', '2023-06-12 23:10:16'),
(39, 'apa', 'apa@gmail.com', '111111', 'Jakarta Barat', '12313', '12321321', 'Makan Malam(10 Hari)', '3', 'pending', '480000', '17f28a14-6568-4c55-9fed-1a47eef7c5f9', '428704833', '480000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/977f66f7-7b3a-4e41-b5c6-7af99f2b5e98/pdf', '2023-06-12 23:59:41', '2023-06-12 23:59:41'),
(648674886, 'asipa', 'asipa@gmail.com', '089615309417', 'Bintara, Bekasi Barat', 'awdawdawd', 'awdawdawdawd', 'Makan Siang(5 Hari)', '2', 'expire', '250000', '5a413373-e070-4861-874f-d0760cd38e3f', '4527831', '250000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/7e6e3a92-3e71-4186-ad3d-c06eb09c076c/pdf', '2023-08-24 17:01:06', '2023-08-24 21:30:43'),
(64784946942, 'coba', 'cob@gmail.com', '111109', 'Bekasi', 'awdadad', 'awdawdadawd', 'Makan Siang(5 Hari)', '1', 'settlement ', '250000', 'd6a3b00b-bfbf-4df9-8647-1ade0f90b56b', '481231451', '250000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/dc52ac6e-3aae-4f51-b31a-e2778f5b6406/pdf', '2023-07-06 20:41:27', '2023-07-08 03:43:04'),
(41, 'adwwawd', 'register@gmail.com', '1234567', 'Bekasi', 'WQDDAWDAD', 'sate', 'Makan Malam(10 Hari)', '1', 'settlement', '480000', '26bf9518-952b-46e3-a53a-1b8d50878db3', '489964751', '480000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/0c5c5f3d-3ce6-4390-b30f-6b7f3fd6c00f/pdf', '2023-06-30 02:46:55', '2023-06-30 02:46:55'),
(648674886, 'asipa', 'asipa@gmail.com', '089615309417', 'Bekasi', 'jl. wlewle', '-', 'Makan Malam(10 Hari)', '1', 'settlement', '480000', 'c7df5a71-fc61-4ff5-ba1b-7f41b87f3993', '491981021', '480000.00', 'echannel', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/62b682b7-3ea6-47d3-8182-3433022a620a/pdf', '2023-07-07 21:00:24', '2023-08-24 21:30:43'),
(42, 'awdawd', 'dwadawda@gmail.com', '1231311', 'Bekasi', 'awdawdawd', 'awdawdawd', 'Makan Siang(20 Hari)', '3', 'pending', '900000', 'db1be02d-b613-40be-a74a-d57b0753181f', '498617246', '900000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/64763f94-efae-4c79-b07e-c5ededa49185/pdf', '2023-06-11 16:46:21', '2023-06-11 16:46:56'),
(27, 'buluayamaaa', 'buluayam@gmail.com', '111', 'Jaka Sampurna, Bekasi Barat', 'wdawdawd', 'awdawdawd', 'Makan Siang(5 Hari)', '2', 'expire', '250000', 'fccc1d64-ca7b-4261-9c19-3a41487a331d', '522896356', '250000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/d8b9432c-8903-494c-862d-bd0ae5b3f3fc/pdf', '2023-08-24 18:26:49', '2023-08-24 18:26:49'),
(43, 'awdawaDawd', 'awdawd@gmail.com', '1231313', 'Jakarta Pusat', 'awdawdawdawd', 'awdwadawd', 'Makan Malam(10 Hari)', '3', 'pending', '480000', 'c0af8791-8e29-4522-9ac3-5173d81952dc', '542273912', '480000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/bdaf7aea-79a8-4ed9-9a18-aa4563ea8b88/pdf', '2023-06-12 22:21:07', '2023-06-12 22:21:07'),
(648674886, 'asipa', 'asipa@gmail.com', '089615309417', 'Jaka Sampurna, Bekasi Barat', 'jln bintara 14', 'udang', 'Makan Malam(10 Hari)', '1,2', 'settlement', '480000', '8df9c072-7fba-489e-9307-f689f433929d', '595453274', '480000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/473034ef-a753-4ba7-9329-7481350d89ac/pdf', '2023-08-06 08:16:19', '2023-08-24 21:30:43'),
(64784946942, 'coba', 'cob@gmail.com', '111109', 'Jakarta Barat', 'awdadadw', 'awdawdawd', 'Makan Malam(5 Hari)', '1', 'settlement ', '250000', '8291f077-dcdf-496b-a45a-15862019babf', '596172283', '250000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/fa5ceab1-51f1-4464-a2e8-87614d15c8b4/pdf', '2023-07-06 20:42:34', '2023-07-08 03:43:04'),
(45, 'awdadw', 'jujujujajaja1114@gmail.com', '12313031', 'Jakarta Barat', 'awdadad', 'awdawdawda', 'Makan Malam(20 Hari)', '3', 'settlement', '900000', 'b184422f-6ae3-4b6e-b293-c542ba31c664', '59759093', '900000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/587e0419-1849-4238-9923-6e1da365d963/pdf', '2023-06-12 18:50:51', '2023-06-12 21:37:33'),
(46, 'awdadaw', 'awdawdawd@gmail.com', '12111', 'Jakarta Barat', 'awdadawdawd', 'wadwadawdawd', 'Makan Malam(10 Hari)', '3', 'expire', '480000', '1ef27660-eed1-46f9-8988-13a4b8a6db2b', '621291361', '480000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/155b6db3-ac82-4717-89ab-72e6e134f7e1/pdf', '2023-06-11 16:07:45', '2023-07-07 07:48:31'),
(641967, 'Mira', 'mira@gmail.com', '081285291111', 'Jaka Sampurna, Bekasi Barat', 'jl. Taman Malaka Selatan.', '-', 'Makan Siang(5 Hari)', '2', 'settlement', '250000', '4166ef9e-f0b5-4888-8851-212a79bd3359', '643493313', '250000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/a67412cb-9d90-49b9-b570-a93101934440/pdf', '2023-08-08 04:27:29', '2023-08-24 20:44:10'),
(47, 'awdddddddddd', 'aaaaaaaaaaaaaaaaa@gmail.com', '11111111101', 'Jakarta Barat', 'sssssssssssssssssss', 'ssssssssssssssss', 'Makan Siang(5 Hari)', '3', 'settlement', '250000', 'd079541c-89c3-4842-89cf-b7435a3c8e1a', '681753217', '250000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/edb429bf-668d-4213-9188-9949d43991d9/pdf', '2023-06-13 00:09:13', '2023-06-13 00:09:39'),
(48, 'test2', 'jujujujajaja1114@gmail.com', '110891', 'Jakarta Barat', 'jln bintara 14', 'kodok', 'Makan Malam(10 Hari)', '3', 'pending', '480000', '8aee55b9-dda9-40d1-bbef-296c4b0bf344', '725121034', '480000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/c4c3f5c0-f35c-4c48-8cea-62943b4f0e49/pdf', '2023-06-12 18:47:03', '2023-06-12 18:47:03'),
(49, 'Ashyfa Ashifa', 'juansyah2306@gmail.com', '087865684712', 'Jakarta Barat', 'juansyh2306@gmail.com', 'awdawdawd', 'Makan Malam(10 Hari)', '3', 'settlement', '480000', '12e12480-1faa-4410-8737-6233891e593a', '735935710', '480000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/3fc8c3f0-31a1-4e67-9d1e-1b475f30f0a7/pdf', '2023-06-11 12:00:13', '2023-06-11 12:00:13'),
(50, 'awdawda', 'awdadw@gmail.com', '123131', 'Depok', 'awdadawdawd', 'awdawdadw', 'Makan Siang + Makan Malam(10 Hari)', '3', 'Gagal', '510000', '26826f4f-4e25-48c0-8e40-b0fba3ea6b76', '746862940', '510000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/21fce83d-874e-4a80-a32f-736c5aeabc69/pdf', '2023-06-11 15:02:37', '2023-06-12 22:42:10'),
(649777943, 'adwwawd', 'register@gmail.com', '1234567', 'Jakarta Pusat', 'asus zenfone 5', 'adwadawdwad', 'Makan Malam(5 Hari)', '1', 'settlement', '250000', '85405ba6-f952-48c3-8545-666a0085015a', '765238723', '250000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/4d10a8fb-551b-4d91-b966-5df85f7d5372/pdf', '2023-07-07 08:11:20', '2023-07-07 08:11:20'),
(51, 'Butter Cookies', 'cook@gmail.com', '1123330', 'Jakarta Pusat', 'awdawdawdawd', 'wadawdawd', 'Makan Malam(10 Hari)', '3', 'pending', '480000', 'ccb8bd2b-3974-4231-8105-f5f0a938268a', '772327170', '480000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/617f0a83-720f-4208-9d9b-f21bf530f897/pdf', '2023-06-11 17:48:26', '2023-06-11 17:50:12'),
(52, 'awdljawdl', 'jdwlajlawjdl@gmail.com', '123', 'Jakarta Barat', 'awdawdwad', 'awdwadwad', 'Makan Malam(10 Hari)', '3', 'pending', '480000', 'a34352c1-2807-4196-b2b2-dbe4ff0a4743', '812267357', '480000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/1cdb65f8-2acb-42a6-bc99-d663acf3a572/pdf', '2023-06-11 16:40:41', '2023-06-11 16:40:41'),
(53, 'waaaaaaa', 'awwwwwwwww@gmail.com', '21122', 'Jakarta Barat', 'adwwwww', 'awdddddddddd', 'Makan Malam(20 Hari)', '3', 'pending', '900000', '4c27126f-1e91-4660-8378-72f71f689f5f', '849242640', '900000.00', 'echannel', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/0fc686d5-c98c-4cee-97fd-d49aff2f2c2a/pdf', '2023-06-12 22:15:30', '2023-06-12 22:15:30'),
(641967, 'Mira', 'mira@gmail.com', '081285291111', 'Duren Sawit, Jakarta Timur', 'jl. taman malaka 1', '-', 'Makan Malam(10 Hari)', '2,3', 'settlement', '480000', 'afe26e40-8686-4d6d-92fc-46cdf43d96ca', '89874946', '480000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/461d368d-50bc-44b1-b805-55cff9fbf18f/pdf', '2023-08-08 04:30:15', '2023-08-24 20:44:10'),
(56, 'awdawdwa', 'lll@gmail.com', '123123', 'Jakarta Barat', 'awdawdawd', 'wadawdwad', 'Makan Siang(5 Hari)', '3', 'Berhasil', '250000', 'c6039908-cc50-456a-a36a-9398a421d227', '901546995', '250000.00', 'echannel', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/5a3f22e2-d634-4d97-993a-22c1ab1e6007/pdf', '2023-06-12 23:52:14', '2023-06-12 23:53:03'),
(641967, 'Eva', 'eva@gmail.com', '081285291111', 'Duren Sawit, Jakarta Timur', 'jl. taman malaka selatan,', 'udang', 'Makan Siang + Makan Malam(5 Hari)', '2', 'settlement', '280000', 'c45d923f-0607-44f8-a5e8-f1e3c3138cf6', '935455306', '280000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/f5bc6171-ccc4-4453-8e4b-531a5540c471/pdf', '2023-08-08 04:11:30', '2023-08-24 20:44:10'),
(64784946942, 'coba', 'cob@gmail.com', '111109', 'Jakarta Pusat', 'awdawdawd', 'awdwadwadwad', 'Makan Siang(5 Hari)', '1', 'settlement ', '250000', '0aa096b1-afe8-455f-ad8d-4a9ccafcaafe', '949387341', '250000.00', 'bank_transfer', NULL, 'https://app.sandbox.midtrans.com/snap/v1/transactions/581e06c7-f6d3-40ef-85b2-fea28d73ca33/pdf', '2023-07-07 06:22:10', '2023-07-08 03:43:04');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeries`
--

CREATE TABLE `galeries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hari` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeries`
--

INSERT INTO `galeries` (`id`, `hari`, `tipe`, `gambar`, `created_at`, `updated_at`) VALUES
(23, 'Senin', 'Makan Siang', 'uploads/menu/1687409146_menuseninsiangpng', '2023-06-09 01:38:23', '2023-06-21 21:45:46'),
(24, 'Senin', 'Makan Malam', 'uploads/menu/1687409181_menuseninmalampng', '2023-06-09 02:41:48', '2023-06-21 21:47:23'),
(25, 'Selasa', 'Makan Siang', 'uploads/menu/1687409309_selasasiangpng', '2023-06-09 02:46:03', '2023-06-21 21:48:29'),
(26, 'Selasa', 'Makan Malam', 'uploads/menu/1687409339_selasamalem1png', '2023-06-21 21:48:59', '2023-06-21 21:48:59'),
(27, 'Rabu', 'Makan Siang', 'uploads/menu/1687409386_rabusiang1png', '2023-06-21 21:49:46', '2023-06-21 21:49:46'),
(28, 'Rabu', 'Makan Malam', 'uploads/menu/1687409416_rabumalam1png', '2023-06-21 21:50:16', '2023-06-21 21:50:16'),
(29, 'Kamis', 'Makan Siang', 'uploads/menu/1687409453_kamisiangpng', '2023-06-21 21:50:53', '2023-06-21 21:50:53'),
(30, 'Kamis', 'Makan Malam', 'uploads/menu/1687409470_kamismalampng', '2023-06-21 21:51:10', '2023-06-21 21:51:10'),
(31, 'Jumat', 'Makan Siang', 'uploads/menu/1687409486_jumatsiangpng', '2023-06-21 21:51:26', '2023-06-21 21:51:26'),
(33, 'Jumat', 'Makan Malam', 'uploads/menu/1688761864_group-272png', '2023-07-07 20:31:04', '2023-07-07 20:31:04');

-- --------------------------------------------------------

--
-- Table structure for table `menu_sehats`
--

CREATE TABLE `menu_sehats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hari` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_sehats`
--

INSERT INTO `menu_sehats` (`id`, `hari`, `tanggal`, `tipe`, `deskripsi`, `batch`, `created_at`, `updated_at`) VALUES
(1, 'Senin', '2023-08-28', 'Makan Siang', 'Ayam Bumbu Taliwang dengan bumbu spesial, pecel sayur, Nasi Merah, Chili sauce, Asinan Mangga dan Infused Water', 4, '2023-05-31 05:01:06', '2023-08-24 21:59:40'),
(9, 'Senin', '2023-08-28', 'Makan Malam', 'Dori Crispy dengan Saus Tar-tar, Green Salad, Potato Wedges, Chili Sauce, Mango Pudding dan Infused Water', 4, '2023-06-21 21:37:59', '2023-08-24 21:59:47'),
(10, 'Selasa', '2023-08-29', 'Makan Siang', 'Ikan Cakalang Cabe Ijo, Tumis Sayur Campur, Nasi Goreng, Sambal Goreng Tomat, Potongan Buah dan Jus jeruk', 4, '2023-06-21 21:38:30', '2023-08-24 21:59:58'),
(11, 'Selasa', '2023-08-29', 'Makan Malam', 'Ayam Gongso Semarang, Tumis Tahu Buncis Cabe Ijo, Perkedel Tahu, Sambal Terasi, Brownies dan Air Mineral', 4, '2023-06-21 21:39:20', '2023-08-24 22:00:04'),
(12, 'Rabu', '2023-08-30', 'Makan Siang', 'Home Made Chicken Nugget, Macaroni Schotel, Vegetable Salad, Potongan Buah, Chili Sauce dan Air Mineral', 4, '2023-06-21 21:41:54', '2023-08-24 22:00:11'),
(13, 'Rabu', '2023-08-30', 'Makan Malam', 'The Dutch Oven Beef, Steamed Vegetable, Steamed Mantao, Taro Pudding, Chilli Sauce dan Infused Water', 4, '2023-06-21 21:43:13', '2023-08-24 22:00:18'),
(14, 'Kamis', '2023-08-31', 'Makan Siang', 'Soto Ayam Lamongan, Orek Tempe Kacang, Burasa, Sambal soto, Potongan Buah dan Air Mineral', 4, '2023-06-21 21:43:35', '2023-08-24 22:00:25'),
(15, 'Kamis', '2023-08-31', 'Makan Malam', 'Ikan Bakar Rica Rica, Tumis Oyong Wortel Teri, Nasi Merah, Chilli Sauce, Mango Pudding dan Air Mineral', 4, '2023-06-21 21:43:59', '2023-08-24 22:00:33'),
(17, 'Jumat', '2023-09-01', 'Makan Malam', 'Pepes Ayam, Tumis Leunca Oncom, Kentang Goreng Sambal Terasi, Taro pudding dan Air Mineral', 4, '2023-06-21 21:44:49', '2023-08-24 22:00:43'),
(18, 'Jumat', '2023-09-01', 'Makan Siang', 'Steamed Gindara With Garlic, Kalian Tofu Garlic, Nasi Merah, Chili Sauce, Potongan buah dan Infused Water', 4, '2023-07-07 20:22:29', '2023-08-24 22:00:50');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_27_093145_create_menu_sehats_table', 1),
(6, '2023_04_24_054724_create_detail_transaksis_table', 1),
(7, '2023_05_31_083418_remove_is_admin_column_from_users_table', 2),
(8, '2023_05_31_100014_rename_name_column_to_username_in_users_table', 3),
(9, '2023_06_01_063009_create_galeries_table', 4),
(10, '2023_06_11_173741_add_columns_to_detail_transaksis', 5),
(11, '2023_06_11_174725_create_detail_transaksis_table', 6),
(12, '2023_06_20_091206_add_role_to_users', 7),
(13, '2023_06_20_091639_add_role_to_users', 8),
(14, '2023_06_20_091649_add_role_to_users', 8),
(15, '2023_06_21_102512_add_name_to_users_table', 9),
(16, '2023_06_21_141757_add_whatsapp_to_users_table', 10),
(17, '2023_06_24_221934_add_gambar_to_users', 11),
(18, '2023_06_25_182750_create_pesanans_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanans`
--

CREATE TABLE `pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `alergi` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `batch` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanans`
--

INSERT INTO `pesanans` (`id`, `order_id`, `nama`, `menu`, `alergi`, `tipe`, `hari`, `tanggal`, `batch`, `status`, `created_at`, `updated_at`) VALUES
(280, '595453274', 'asipa', 'Dori Crispy dengan Saus Tar-tar, Green Salad, Potato Wedges, Chili Sauce, Mango Pudding dan Infused Water', 'udang', 'Makan Malam', 'Senin', '2023-08-07', '1', 'Belum siap', '2023-08-07 17:20:46', '2023-08-07 17:24:32'),
(281, '595453274', 'asipa', 'Ayam Gongso Semarang, Tumis Tahu Buncis Cabe Ijo, Perkedel Tahu, Sambal Terasi, Brownies dan Air Mineral', 'udang', 'Makan Malam', 'Selasa', '2023-08-08', '1', 'Belum siap', '2023-08-07 17:20:46', '2023-08-08 02:13:24'),
(282, '595453274', 'asipa', 'The Dutch Oven Beef, Steamed Vegetable, Steamed Mantao, Taro Pudding, Chilli Sauce dan Infused Water', 'udang', 'Makan Malam', 'Rabu', '2023-08-09', '1', 'Belum siap', '2023-08-07 17:20:46', '2023-08-07 17:27:22'),
(283, '595453274', 'asipa', 'Ikan Bakar Rica Rica, Tumis Oyong Wortel Teri, Nasi Merah, Chilli Sauce, Mango Pudding dan Air Mineral', 'udang', 'Makan Malam', 'Kamis', '2023-08-10', '1', 'Belum siap', '2023-08-07 17:20:46', '2023-08-07 17:27:22'),
(284, '595453274', 'asipa', 'Pepes Ayam, Tumis Leunca Oncom, Kentang Goreng Sambal Terasi, Taro pudding dan Air Mineral', 'udang', 'Makan Malam', 'Jumat', '2023-08-11', '1', 'Belum siap', '2023-08-07 17:20:46', '2023-08-07 17:27:45'),
(321, '595453274', 'asipa', 'Ayam Gongso Semarang, Tumis Tahu Buncis Cabe Ijo, Perkedel Tahu, Sambal Terasi, Brownies dan Air Mineral', 'udang', 'Makan Malam', 'Selasa', '2023-08-15', '2', 'Belum siap', '2023-08-07 20:14:36', '2023-08-07 20:14:36'),
(323, '595453274', 'asipa', 'Ikan Bakar Rica Rica, Tumis Oyong Wortel Teri, Nasi Merah, Chilli Sauce, Mango Pudding dan Air Mineral', 'udang', 'Makan Malam', 'Kamis', '2023-08-17', '2', 'Belum siap', '2023-08-07 20:14:36', '2023-08-07 20:14:36'),
(324, '595453274', 'asipa', 'Pepes Ayam, Tumis Leunca Oncom, Kentang Goreng Sambal Terasi, Taro pudding dan Air Mineral', 'udang', 'Makan Malam', 'Jumat', '2023-08-18', '2', 'Belum siap', '2023-08-07 20:14:36', '2023-08-07 20:14:36'),
(346, '595453274', 'asipa', 'Dori Crispy dengan Saus Tar-tar, Green Salad, Potato Wedges, Chili Sauce, Mango Pudding dan Infused Water', 'udang', 'Makan Malam', 'Senin', '2023-08-14', '2', 'Belum siap', '2023-08-08 01:30:58', '2023-08-08 01:30:58'),
(347, '595453274', 'asipa', 'The Dutch Oven Beef, Steamed Vegetable, Steamed Mantao, Taro Pudding, Chilli Sauce dan Infused Water', 'udang', 'Makan Malam', 'Rabu', '2023-08-16', '2', 'Belum siap', '2023-08-08 01:31:56', '2023-08-08 01:31:56'),
(369, '643493313', 'Mira', 'Ayam Bumbu Taliwang dengan bumbu spesial, pecel sayur, Nasi Merah, Chili sauce, Asinan Mangga dan Infused Water', '-', 'Makan Siang', 'Selasa', '2023-08-08', '2', 'Sudah siap', '2023-08-08 04:35:37', '2023-08-08 04:37:00'),
(370, '643493313', 'Mira', 'Ikan Cakalang Cabe Ijo, Tumis Sayur Campur, Nasi Goreng, Sambal Goreng Tomat, Potongan Buah dan Jus jeruk', '-', 'Makan Siang', 'Selasa', '2023-08-15', '2', 'Belum siap', '2023-08-08 04:35:37', '2023-08-08 04:35:37'),
(371, '643493313', 'Mira', 'Home Made Chicken Nugget, Macaroni Schotel, Vegetable Salad, Potongan Buah, Chili Sauce dan Air Mineral', '-', 'Makan Siang', 'Rabu', '2023-08-16', '2', 'Belum siap', '2023-08-08 04:35:37', '2023-08-08 04:35:37'),
(372, '643493313', 'Mira', 'Soto Ayam Lamongan, Orek Tempe Kacang, Burasa, Sambal soto, Potongan Buah dan Air Mineral', '-', 'Makan Siang', 'Kamis', '2023-08-17', '2', 'Belum siap', '2023-08-08 04:35:37', '2023-08-08 04:35:37'),
(373, '643493313', 'Mira', 'Steamed Gindara With Garlic, Kalian Tofu Garlic, Nasi Merah, Chili Sauce, Potongan buah dan Infused Water', '-', 'Makan Siang', 'Jumat', '2023-08-18', '2', 'Belum siap', '2023-08-08 04:35:37', '2023-08-08 04:35:37'),
(374, '935455306', 'Eva', 'Ayam Bumbu Taliwang dengan bumbu spesial, pecel sayur, Nasi Merah, Chili sauce, Asinan Mangga dan Infused Water', 'udang', 'Makan Siang', 'Senin', '2023-08-14', '2', 'Belum siap', '2023-08-08 04:35:37', '2023-08-08 04:35:37'),
(375, '935455306', 'Eva', 'Dori Crispy dengan Saus Tar-tar, Green Salad, Potato Wedges, Chili Sauce, Mango Pudding dan Infused Water', 'udang', 'Makan Malam', 'Senin', '2023-08-14', '2', 'Belum siap', '2023-08-08 04:35:37', '2023-08-08 04:35:37'),
(376, '935455306', 'Eva', 'Ikan Cakalang Cabe Ijo, Tumis Sayur Campur, Nasi Goreng, Sambal Goreng Tomat, Potongan Buah dan Jus jeruk', 'udang', 'Makan Siang', 'Selasa', '2023-08-15', '2', 'Belum siap', '2023-08-08 04:35:37', '2023-08-08 04:35:37'),
(377, '935455306', 'Eva', 'Ayam Gongso Semarang, Tumis Tahu Buncis Cabe Ijo, Perkedel Tahu, Sambal Terasi, Brownies dan Air Mineral', 'udang', 'Makan Malam', 'Selasa', '2023-08-15', '2', 'Belum siap', '2023-08-08 04:35:37', '2023-08-08 04:35:37'),
(378, '935455306', 'Eva', 'Home Made Chicken Nugget, Macaroni Schotel, Vegetable Salad, Potongan Buah, Chili Sauce dan Air Mineral', 'udang', 'Makan Siang', 'Rabu', '2023-08-16', '2', 'Belum siap', '2023-08-08 04:35:37', '2023-08-08 04:35:37'),
(379, '935455306', 'Eva', 'The Dutch Oven Beef, Steamed Vegetable, Steamed Mantao, Taro Pudding, Chilli Sauce dan Infused Water', 'udang', 'Makan Malam', 'Rabu', '2023-08-16', '2', 'Belum siap', '2023-08-08 04:35:37', '2023-08-08 04:35:37'),
(380, '935455306', 'Eva', 'Soto Ayam Lamongan, Orek Tempe Kacang, Burasa, Sambal soto, Potongan Buah dan Air Mineral', 'udang', 'Makan Siang', 'Kamis', '2023-08-17', '2', 'Belum siap', '2023-08-08 04:35:37', '2023-08-08 04:35:37'),
(381, '935455306', 'Eva', 'Ikan Bakar Rica Rica, Tumis Oyong Wortel Teri, Nasi Merah, Chilli Sauce, Mango Pudding dan Air Mineral', 'udang', 'Makan Malam', 'Kamis', '2023-08-17', '2', 'Belum siap', '2023-08-08 04:35:37', '2023-08-08 04:35:37'),
(382, '935455306', 'Eva', 'Pepes Ayam, Tumis Leunca Oncom, Kentang Goreng Sambal Terasi, Taro pudding dan Air Mineral', 'udang', 'Makan Malam', 'Jumat', '2023-08-18', '2', 'Belum siap', '2023-08-08 04:35:37', '2023-08-08 04:35:37'),
(383, '935455306', 'Eva', 'Steamed Gindara With Garlic, Kalian Tofu Garlic, Nasi Merah, Chili Sauce, Potongan buah dan Infused Water', 'udang', 'Makan Siang', 'Jumat', '2023-08-18', '2', 'Belum siap', '2023-08-08 04:35:37', '2023-08-08 04:35:37'),
(384, '89874946', 'Mira', 'Dori Crispy dengan Saus Tar-tar, Green Salad, Potato Wedges, Chili Sauce, Mango Pudding dan Infused Water', '-', 'Makan Malam', 'Senin', '2023-08-14', '3', 'Belum siap', '2023-08-24 21:58:55', '2023-08-24 21:58:55'),
(385, '89874946', 'Mira', 'Ayam Gongso Semarang, Tumis Tahu Buncis Cabe Ijo, Perkedel Tahu, Sambal Terasi, Brownies dan Air Mineral', '-', 'Makan Malam', 'Selasa', '2023-08-15', '3', 'Belum siap', '2023-08-24 21:58:55', '2023-08-24 21:58:55'),
(386, '89874946', 'Mira', 'The Dutch Oven Beef, Steamed Vegetable, Steamed Mantao, Taro Pudding, Chilli Sauce dan Infused Water', '-', 'Makan Malam', 'Rabu', '2023-08-16', '3', 'Belum siap', '2023-08-24 21:58:55', '2023-08-24 21:58:55'),
(387, '89874946', 'Mira', 'Ikan Bakar Rica Rica, Tumis Oyong Wortel Teri, Nasi Merah, Chilli Sauce, Mango Pudding dan Air Mineral', '-', 'Makan Malam', 'Kamis', '2023-08-17', '3', 'Belum siap', '2023-08-24 21:58:55', '2023-08-24 21:58:55'),
(388, '89874946', 'Mira', 'Pepes Ayam, Tumis Leunca Oncom, Kentang Goreng Sambal Terasi, Taro pudding dan Air Mineral', '-', 'Makan Malam', 'Jumat', '2023-08-18', '3', 'Belum siap', '2023-08-24 21:58:55', '2023-08-24 21:58:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `whatsapp`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `role`, `updated_at`, `gambar`) VALUES
(5, '087865683684', 'User Test', 'User1', 'UserTest2@gmaiil.com', '2023-05-31 01:41:06', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Hsse405cMF', '2023-05-31 01:41:06', 'user', '2023-05-31 01:41:06', NULL),
(8, '', '', 'Admin', 'admin1@gmai.com', '2023-05-31 03:13:02', '$2y$10$kXzyR.t8bJffDGX314EwU.dpQiUKSZI2hsHPhf4ukXK7BPz2eGfNC', '8SZKil3CFkqegJJ3NxVN52KBec5qzJyEl5F6SpZalPkhgRZMxnlGYrxSDj9s', '2023-05-31 03:13:02', 'admin', '2023-05-31 03:13:02', NULL),
(11, '', 'Admin Juan', 'Admin22', 'admin111@gmai.com', '2023-06-21 03:27:33', '$2y$10$VrPLq3o4q8hdqs7xGoxH5uq7xZ89OYJP8t.TPT4wwSfnxavloSXKm', '4zje3qyVhtYHROsay3xWN0E2vJI6QFnRoV34Cx7l9yjmDVlcweeCiXwsWHTi', '2023-06-21 03:27:33', 'admin', '2023-06-21 03:27:33', NULL),
(12, '087865683684', 'User Juan', 'User11', 'user11111@gmail.com', '2023-06-21 07:35:31', '$2y$10$C6yPTfSEAJpxu6MGPUqtS.m.W5/sjR3P4PwQUZRqhKCb9xwvbzY1m', 'vvi2utO1vEiSZpVjvB6fVhEBlmbbdk3D29HphlORzJS8ORnoN9b2nnEwpki2', '2023-06-21 07:35:31', 'user', '2023-06-21 07:35:31', NULL),
(13, '123112', 'adriw', 'dlawjdlawj', 'wadad@gmail.com', '2023-06-22 00:38:57', '$2y$10$KxDMazTp4zEGicJU9hhzPeCZjrtwaMEK3nQphpqWgpZr6Ek6k/Xd.', 'xgVnuS3kwj', '2023-06-22 00:38:57', 'user', '2023-06-22 00:38:57', NULL),
(15, 'adlwjalwdjlawljawd', 'juansyah', 'wajdlajwdlajwdl', 'wadjawldjlawdl@gmail.com', '2023-06-22 00:40:04', '$2y$10$JZPr/bmWWKXFmZ5cgKJFHOfUPkaROnggk2nmdamf/rsF6nWxITfhK', 'WSbQEhCeE3', '2023-06-22 00:40:04', 'user', '2023-06-22 00:40:04', NULL),
(16, '123456', 'test1', 'test1', 'test1@gmail.com', '2023-06-22 00:47:55', '$2y$10$nn8YeKW0QbwTh.JH3GbYfOAUeQCto7kNtjTWLuDlgAF9NpouJEUZK', '9nBbjd2amh', '2023-06-22 00:47:55', 'user', '2023-06-22 00:47:55', NULL),
(17, '1231233', 'test2', 'test2', 'test2@gmail.com', '2023-06-22 00:48:36', '$2y$10$9ZxbwUYH5KraEr1p3GcsjOBE7TwQoRzwa2qNei82BZj6xxbjh3q0O', 'gg4MgGRsYe', '2023-06-22 00:48:36', 'user', '2023-06-22 00:48:36', NULL),
(18, '21313213', 'awdadad', 'awdadadad', 'awdawda', '2023-06-22 07:13:18', '$2y$10$G0gLIx2ojTRg20afh59JC.fQmLsUtqSWaU4Ehbd6wAXvBA2lxG5bG', 'c1mggQsAil', '2023-06-22 07:13:18', 'user', '2023-06-22 07:13:18', NULL),
(19, '11111', 'test', 'testpaha', 'testpaha@gmail.com', '2023-06-24 15:32:14', '$2y$10$EZZrpj24bW4rt4gemQ7rNuIBxPNZ4IDuPpQvUIXSqCQ9qSPL/JQHC', 'RcwaKdZ59v', '2023-06-24 15:32:14', 'user', '2023-06-24 15:32:14', NULL),
(20, '111111', 'sayapkanan', 'sayapkanan', 'sayapkanan@gmail.com', '2023-06-24 15:33:54', '$2y$10$30EgfpLzwoFionbkGEyExeuPrA40PHcwAe1zpm8dg4piVJzoFm5Cu', 'oJPgwA9Sia', '2023-06-24 15:33:54', 'user', '2023-06-24 15:33:54', 'http://127.0.0.1:8000/admin/img/undraw_profile.svg'),
(22, '111', 'pahaatas', 'pahaatas', 'pahaatas@gmail.com', '2023-06-24 15:46:43', '$2y$10$Pr1KgVV4e1DaiAXdlz/rVemCTw1IVcq2QgRVCnnmd3SDVX95UmzUy', 'y8IYcPlKBF8b2i9qPLSCgF08YASBHGhXL66F4ZHCwkZmZZiDJaQ9s4fn8oww', '2023-06-24 15:46:43', 'user', '2023-06-24 15:46:43', 'uploads/foto_profil_user/undraw_profile'),
(25, '12109', 'palaayam', 'palaayam', 'palaayam@gmail.com', '2023-06-24 16:03:53', '$2y$10$Hx8S0uLhLIgLj7mCjf9c2O2N47kxKPy.7u2YNioXe1rZ.z4s3x0fy', 'zDOxUsHGxNpNB1sSElJNDpEfzSZx1aapA3XoR3VLHoUa909nXP2kL34VlNXZ', '2023-06-24 16:03:53', 'user', '2023-06-24 16:03:53', 'uploads/foto_profil_user/undraw_profilepng'),
(26, '111', 'kakiayam', 'kakiayam', 'kakiayam@gmail.com', '2023-06-24 16:05:08', '$2y$10$indZqvqCGonDM0O.izEFmueN1Bw1Se.GBs21nZuCXw5nvJGdrxuTC', 'pIFWdNwrLEnMnEJGjAmYmEjE4b4Ym3qHQ8YCbxxmv2ZsQcjv3y9GDeaCTYGg', '2023-06-24 16:05:08', 'user', '2023-06-24 16:05:08', 'uploads/foto_profil_user/undraw_profilesvg'),
(27, '111', 'buluayamaaa', 'buluayam', 'buluayam@gmail.com', '2023-06-24 16:06:03', '$2y$10$/1rK7WHVGcnLAWuWuGdope1thawV0ZI1C0p73KT2bbmGwkSPHcSfa', 'dR6uZkwuFHpsSBl8LYMrQDJcO6t6qs2zerRVtIFCmp5pqaS20uCsCA2UXsvQ', '2023-06-24 16:06:03', 'user', '2023-06-27 05:33:28', 'uploads/foto_profil_user/1687869208_downloadjfif'),
(28, '11111', 'Chef Juan', 'chef33', 'chef33@gmail.com', '2023-06-29 10:26:48', '$2y$10$vc22riJ56ixHzSVQqxUG3OgKCvdZveykJJ6hbwMRdgoXkvxp2Yn0K', 'ioJqWaWKE0wF26GqZxAdPlY88itrqzspMp5zbqD0mHzlbL6VqSmnuwHzFKLR', '2023-06-29 10:26:48', 'chef', '2023-06-29 10:26:48', 'uploads/foto_profil_user/undraw_profile.svg'),
(29, '111', 'adrian', 'test', 'test@gmail.com', '2023-06-29 11:15:19', '$2y$10$.hokKio6ajsRKrBmQybW0uNAr8Snb/KdPuZbVW.AXZ9nMsYYK3ksy', 'LrHjr0nlJD', '2023-06-29 11:15:19', 'user', '2023-06-29 11:15:19', 'uploads/foto_profil_user/undraw_profile.svg'),
(641967, '081285291111', 'Mira', 'bumira1', 'mira@gmail.com', '2023-08-08 04:08:09', '$2y$10$0X3fV8RXHMD1SsxdnCCK6OqCP/91wcCu0LD8ujmrVtLaWBE8sa9ga', 'CRVVMObu9iVSJwSdRhSyKuTH1OYKgnuK0jb4hRVDGRv8s3ZzRU0dFQzOgFs1', '2023-08-08 04:08:09', 'user', '2023-08-08 04:08:09', 'uploads/foto_profil_user/undraw_profile.svg'),
(6485777, '087865683688', 'chef satu', 'chefsatu', 'chefsatu@gmail.com', '2023-07-07 11:21:59', '$2y$10$QZy9QG2o7Tv5x3D0HgJTs.PpArSZ5.Y7wrpbsVg6B6c1tqFonpg4O', 'ZqsXycBHiZsnZD8l9MymKDntyxvcl6TJXADRqBlpDeqHRmgx1yrww2zTuj8A', '2023-07-07 11:21:59', 'chef', '2023-07-07 11:21:59', 'uploads/foto_profil_user/undraw_profile.svg'),
(6489077, '213123', 'awdawda', 'awdawdawd', 'awaaa@gmail', '2023-08-01 05:37:16', '$2y$10$FeX0..2B83hLcejlAjN6GuX5DWGTneIl2fmBJKG2BgvCRQBqgUgpu', 'niUbe6b18h', '2023-08-01 05:37:16', 'user', '2023-08-01 05:37:16', 'uploads/foto_profil_user/undraw_profile.svg'),
(6489231, '08967083231', 'Eva Novianti', 'eva1234', 'unsada.ac@gmail.com', '2023-07-08 06:09:33', '$2y$10$pAbRRp4lfM7lbCNu9pn98eFxg.AOAojeiQ3mKXUoNnf6AZRK9gM6S', 'idhKu7xAkgBMtfUV36EUaRGM40RcVmaw39sfJyfJGUcr0roDoXfrozKBThdd', '2023-07-08 06:09:33', 'user', '2023-07-08 06:09:33', 'uploads/foto_profil_user/undraw_profile.svg'),
(6489432, '123132', 'd', 'awdwadaw', 'juju@gmail.com', '2023-08-01 05:15:08', '$2y$10$BATqkkbrWtDKnZZnySUre.7zoimYYqvI2WbwblCgUioY9X6GVtBS2', 'ert3AF7K7Z', '2023-08-01 05:15:08', 'user', '2023-08-01 05:15:08', 'uploads/foto_profil_user/undraw_profile.svg'),
(6494536, '111', 'awdawd', 'wdawdwad', 'awdlajwdl@gmial.com', '2023-06-29 11:19:49', '$2y$10$m3pkNR/Q/pApE335pcgQuezusDkS7XGF5IaPn2F.l4C6VlmXwUbkK', 'X20u8rsRcQ', '2023-06-29 11:19:49', 'user', '2023-06-29 11:19:49', 'uploads/foto_profil_user/undraw_profile.svg'),
(64897977, '12313', 'awdawdawd', 'awdawd', 'awdad@gmail.com', '2023-08-01 05:51:57', '$2y$10$uwetBxoA8XTqTv2BCynEOuYzhb3K2LRbPy1Dmqo.P4BNBUWfMuYyS', 'rf30L2InX6', '2023-08-01 05:51:57', 'user', '2023-08-01 05:51:57', 'uploads/foto_profil_user/undraw_profile.svg'),
(64899946, '213131', 'awdawda', 'awdawdawd', 'awdahwdhawd@gmailc.awd', '2023-08-01 05:37:01', '$2y$10$f5QTpRWSdI2mnopZLEzoHe/czguXUBoKlxEaFijwvyTJ3HwyXbGN6', 'BuEDjfWTV9', '2023-08-01 05:37:01', 'user', '2023-08-01 05:37:01', 'uploads/foto_profil_user/undraw_profile.svg'),
(64900329, '11091', 'kakiayam', 'kakiayam22', 'kakiayam22@gmail.com', '2023-06-29 11:43:12', '$2y$10$SBqfuh4Z7q6phux1uQWnRO9HTOJjbwRrhJgdiPGwPd/qdnqrdBDoq', 'zbHaOWVFxtcsthShmxocqFGPS13c0Qze29DLmraILUvzP9qVI4mkcFoO4Hbe', '2023-06-29 11:43:12', 'user', '2023-06-29 11:43:12', 'uploads/foto_profil_user/undraw_profile.svg'),
(64971371, '213131', 'awdawdjalwd', 'dwaljalwdj', 'djwaljda@gmail.com', '2023-06-29 11:20:42', '$2y$10$SOQ/s9bwf/ebyJaY3GgjR.05MwewkEdd/kMzslv8CN/nIYiWiCMqC', 'XS9HYNcyby', '2023-06-29 11:20:42', 'user', '2023-06-29 11:20:42', 'uploads/foto_profil_user/undraw_profile.svg'),
(648577674, '087865683688', 'admin satu', 'adminsatu', 'adminsatu@gmail.com', '2023-07-07 11:20:38', '$2y$10$1SMaJinC9/dhGc0gJqh9F.Ovd/Hy4LH87kWpMEt5nOb7Ey44npaiy', 'ZFvY4pEdjXpaizaLtlw2zdR7CXvsQOBh6iFwoefdd1IS4xBOrofGwRDnq9Fq', '2023-07-07 11:20:38', 'admin', '2023-07-07 11:20:38', 'uploads/foto_profil_user/undraw_profile.svg'),
(648674886, '089615309417', 'asipa', 'asipa', 'asipa@gmail.com', '2023-07-07 12:41:40', '$2y$10$VwRB65GSCWPhvIVw6E7Tt.g9l35tb8NAHw5vPAzXsmwh3OpNVXQUK', 'HKDaAYAYDBQD7BD2T5NZNQYlRcUlF2eizrrgAJvz0hJkPkhUBGodojJsqvvV', '2023-07-07 12:41:40', 'user', '2023-07-07 12:41:40', 'uploads/foto_profil_user/undraw_profile.svg'),
(648997890, '21313', 'awdawdawd', 'awdawd', 'awdawdada', '2023-08-01 05:34:48', '$2y$10$Nso..MyuxuFIZCsp47Bsu.3dndDMMtJHrUwQn3VkAP.FPKaf7X5ym', 'FPhLU7ciK5', '2023-08-01 05:34:48', 'user', '2023-08-01 05:34:48', 'uploads/foto_profil_user/undraw_profile.svg'),
(649777943, '1234567', 'adwwawd', 'register', 'register@gmail.com', '2023-06-29 12:33:11', '$2y$10$bFQ1/67uyAVbzDxQ4vlILOYCA34GAy4/4jG2rN0QGTRU2vr0Srk8C', 'Mjr726FdwMm2BVCeBMftmH73VKS3DfK7rOClr0x9EXTXXVcZbEJQ7YXGqQjB', '2023-06-29 12:33:11', 'user', '2023-07-03 09:10:48', 'uploads/foto_profil_user/1688400648_deeplearningjpg'),
(6489567489, '12213', 'awdawdawd', 'awdawd', 'awdawda@gmail.com', '2023-08-01 05:17:35', '$2y$10$kZVMvKVWg3Vc55upbA4E6.yiJHRfR1Lv4bOFrU4dmmPDh9Ja6B59m', 'AMLnWgAonM', '2023-08-01 05:17:35', 'user', '2023-08-01 05:17:35', 'uploads/foto_profil_user/undraw_profile.svg'),
(64784946942, '111109', 'coba', 'coba', 'cob@gmail.com', '2023-07-06 20:22:33', '$2y$10$WHFUPBX5xfTyVSJaNWvF6.BIjbNjT530nRf8RtgbD7aqjd2fBusT2', 'JP9HALI3mcrX2RsP0WDHaMq4Kfla0OzdhYE9bomUxo3fKLEIc0jJ059vFyMi', '2023-07-06 20:22:33', 'user', '2023-07-06 20:22:33', 'uploads/foto_profil_user/undraw_profile.svg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksis`
--
ALTER TABLE `detail_transaksis`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeries`
--
ALTER TABLE `galeries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_sehats`
--
ALTER TABLE `menu_sehats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pesanans`
--
ALTER TABLE `pesanans`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeries`
--
ALTER TABLE `galeries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `menu_sehats`
--
ALTER TABLE `menu_sehats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=389;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
