-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 03 Kas 2024, 15:03:28
-- Sunucu sürümü: 5.7.43-log
-- PHP Sürümü: 8.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `logindb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin_options`
--

CREATE TABLE `admin_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `options` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `admin_options`
--

INSERT INTO `admin_options` (`id`, `key`, `value`, `options`, `created_at`, `updated_at`) VALUES
(1, 'kampanya_link', 'home', NULL, '2024-09-03 14:00:31', '2024-09-03 14:00:31'),
(2, 'yasak_yonlendirme_link', '404', NULL, '2024-09-03 14:00:31', '2024-09-03 14:00:31'),
(3, 'yurtdisi_giris', 'acik', NULL, '2024-09-03 14:00:31', '2024-09-03 14:00:31');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `forbiddens`
--

CREATE TABLE `forbiddens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `redirect` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `forbiddens`
--

INSERT INTO `forbiddens` (`id`, `tip`, `value`, `redirect`, `created_at`, `updated_at`) VALUES
(2, 'querystring', 'fbclid', NULL, '2024-06-19 07:23:54', '2024-06-19 07:23:54'),
(3, 'querystring', 'http://127.0.0.1:8000/', NULL, '2024-07-04 18:18:46', '2024-07-04 18:18:46'),
(4, 'querystring', 'facebook', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ip_list`
--

CREATE TABLE `ip_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ban` tinyint(4) NOT NULL DEFAULT '0',
  `tarih` timestamp NOT NULL,
  `info` text COLLATE utf8mb4_unicode_ci,
  `total` int(10) UNSIGNED ZEROFILL NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `logins`
--

CREATE TABLE `logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `try` tinyint(4) NOT NULL DEFAULT '0',
  `user_agent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `system` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `site` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `system_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `logins`
--

INSERT INTO `logins` (`id`, `tc`, `password`, `phone`, `try`, `user_agent`, `system`, `ip`, `date`, `site`, `created_at`, `updated_at`, `deleted_at`, `system_id`) VALUES
(1, '17918682518', '111111', '5414444444', 1, 'Chrome Mozilla/5.0 (Linux; Android 13; K) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.58 Mobile Safari/537.36', 'Mobile', '172.71.148.22', '2024-11-01 08:11:16', 'avantajlipromo.com', '2024-11-01 08:11:16', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(2, '48031445346', '414141', '05319295731', 1, 'Chrome Mozilla/5.0 (Linux; Android 11; Redmi Note 8 Pro Build/RP1A.200720.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.69.109.123', '2024-11-01 10:36:25', 'avantajlipromo.com', '2024-11-01 10:36:25', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(3, '48031445346', '123456', NULL, 1, 'Chrome Mozilla/5.0 (Linux; Android 11; Redmi Note 8 Pro Build/RP1A.200720.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.69.109.123', '2024-11-01 10:38:07', 'avantajlipromo.com', '2024-11-01 10:38:07', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(4, '42964087864', '392075', '5322454614', 1, 'Chrome Mozilla/5.0 (Linux; Android 10; SM-A105F Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.24 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/486.0.0.66.70;IABMV/1;]', 'Mobile', '162.158.251.96', '2024-11-01 10:38:59', 'avantajlipromo.com', '2024-11-01 10:38:59', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(5, '22829267648', '702270', '0(543) 288 77 39', 1, 'Chrome Mozilla/5.0 (Linux; Android 13; S19 MaxL 128GB Build/T00624; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.58 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.251.96', '2024-11-01 10:44:59', 'avantajlipromo.com', '2024-11-01 10:44:59', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(6, '16159365310', '193699', '05372127904', 1, 'Chrome Mozilla/5.0 (Linux; Android 12; SM-A315F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.19.73', '2024-11-01 11:14:22', 'avantajlipromo.com', '2024-11-01 11:14:22', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(7, '59854398832', '613448', '+905336330404', 1, 'Mozilla Mozilla/5.0 (iPhone; CPU iPhone OS 17_6_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/21G93 [FBAN/FBIOS;FBAV/487.1.0.65.115;FBBV/656141140;FBDV/iPhone14,5;FBMD/iPhone;FBSN/iOS;FBSV/17.6.1;FBSS/3;FBID/phone;FBLC/tr_TR;FBOP/5;FBRV', 'Mobile', '172.71.182.118', '2024-11-01 11:15:23', 'avantajlipromo.com', '2024-11-01 11:15:23', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(8, '37552825300', '454545', '05538279709', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; SM-A137F Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.58 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/486.0.0.66.70;IABMV/1;]', 'Mobile', '162.158.19.73', '2024-11-01 12:51:34', 'avantajlipromo.com', '2024-11-01 12:51:34', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(9, '21610375128', '362514', '5551418593', 1, 'Chrome Mozilla/5.0 (Linux; Android 10; SM-J610F Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.71.98.19', '2024-11-01 12:56:00', 'avantajlipromo.com', '2024-11-01 12:56:00', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(10, '13555731022', '105909', '5352811706', 1, 'Chrome Mozilla/5.0 (Linux; Android 13; M2103K19G Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.70.47.148', '2024-11-01 12:59:56', 'avantajlipromo.com', '2024-11-01 12:59:56', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(11, '51178465276', '200572', '0(533) 485 14 54', 1, 'Chrome Mozilla/5.0 (Linux; Android 11; S19 Max Pro Build/RP1A.201005.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.68.193.197', '2024-11-01 13:39:24', 'avantajlipromo.com', '2024-11-01 13:39:24', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(12, '42508606506', '112580', '5302182456', 1, 'Chrome Mozilla/5.0 (Linux; Android 11; SM-A205F Build/RP1A.200720.012; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.71.99.173', '2024-11-01 13:50:06', 'avantajlipromo.com', '2024-11-01 13:50:06', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(13, '31964421426', '258025', NULL, 1, 'Chrome Mozilla/5.0 (Linux; Android 14; TECNO CK6n Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.58 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.251.220', '2024-11-01 14:16:17', 'avantajlipromo.com', '2024-11-01 14:16:17', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(14, '40766175758', '811455', '5466320892', 1, 'Chrome Mozilla/5.0 (Linux; Android 11; CPH1917 Build/RKQ1.201217.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.70.46.121', '2024-11-01 14:26:49', 'avantajlipromo.com', '2024-11-01 14:26:49', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(15, '40766175758', '811454', '5466320892', 1, 'Chrome Mozilla/5.0 (Linux; Android 11; CPH1917 Build/RKQ1.201217.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.70.46.121', '2024-11-01 14:27:33', 'avantajlipromo.com', '2024-11-01 14:27:33', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(16, '27250119894', '357931', '+905324520259', 1, 'Chrome Mozilla/5.0 (Linux; Android 10; SNE-LX1 Build/HUAWEISNE-L01; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.69.199.195', '2024-11-01 14:31:22', 'avantajlipromo.com', '2024-11-01 14:31:22', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(17, '17576328650', '797402', '0538 883 7013', 1, 'Chrome Mozilla/5.0 (Linux; Android 13; SM-A325F Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.68.193.187', '2024-11-01 14:38:36', 'avantajlipromo.com', '2024-11-01 14:38:36', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(18, '18352397020', '262143', NULL, 1, 'Chrome Mozilla/5.0 (Linux; Android 14; SM-A137F Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/129.0.6668.102 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/485.0.0.70.77;IABMV/1;]', 'Mobile', '172.71.102.45', '2024-11-01 14:44:45', 'avantajlipromo.com', '2024-11-01 14:44:45', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(19, '14954568776', '156363', NULL, 1, 'Chrome Mozilla/5.0 (Linux; Android 12; V2027 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.19.73', '2024-11-01 14:49:35', 'avantajlipromo.com', '2024-11-01 14:49:35', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(20, '27643190394', '852963', '5324869086', 1, 'Chrome Mozilla/5.0 (Linux; Android 11; CPH1951 Build/RP1A.200720.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.14.99', '2024-11-01 14:59:32', 'avantajlipromo.com', '2024-11-01 14:59:32', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(21, '27527233506', '151515', NULL, 1, 'Chrome Mozilla/5.0 (Linux; Android 12; Infinix X665E Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.58 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.69.150.201', '2024-11-01 15:18:30', 'avantajlipromo.com', '2024-11-01 15:18:30', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(22, '21187429262', '125858', '5462517006', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; SM-A045F Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.251.97', '2024-11-01 15:27:36', 'avantajlipromo.com', '2024-11-01 15:27:36', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(23, '15337950058', '153344', '05060318347', 1, 'Chrome Mozilla/5.0 (Linux; Android 13; TECNO KI5q Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.71.172.74', '2024-11-01 16:09:33', 'avantajlipromo.com', '2024-11-01 16:09:33', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(24, '27790998034', '714894', '5431746471', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; SM-A055F Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.58 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/483.0.0.51.72;IABMV/1;]', 'Mobile', '162.158.251.156', '2024-11-01 16:17:12', 'avantajlipromo.com', '2024-11-01 16:17:12', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(25, '49471762932', '258147', '5301655763', 1, 'Chrome Mozilla/5.0 (Linux; Android 6.0.1; SM-N910C Build/MMB29K; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/95.0.4638.74 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/436.0.0.35.101;]', 'Mobile', '162.158.251.97', '2024-11-01 16:30:52', 'avantajlipromo.com', '2024-11-01 16:30:52', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(26, '60442089070', '396090', '5426637558', 1, 'Chrome Mozilla/5.0 (Linux; Android 12; 2201116TG Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.69.199.193', '2024-11-01 17:20:08', 'avantajlipromo.com', '2024-11-01 17:20:08', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(27, '53080415264', '526152', '', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; 23078PND5G Build/UP1A.230905.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.251.225', '2024-11-01 17:30:39', 'avantajlipromo.com', '2024-11-01 17:30:39', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(28, '50029360814', '123456', '+9053424641', 1, 'Chrome Mozilla/5.0 (Linux; Android 10; CPH2185 Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.24 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/486.0.0.66.70;IABMV/1;]', 'Mobile', '162.158.251.225', '2024-11-01 17:33:27', 'avantajlipromo.com', '2024-11-01 17:33:27', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(29, '80601777792', '999999', '12154546464', 1, 'Chrome Mozilla/5.0 (Linux; Android 13; 23053RN02A Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.58 Mobile Safari/537.36[FBAN/PAAA;FBAV/475.0.0.58.109;FBDM/{density=2.75,width=1080,height=2226};FBLC/tr_TR;F', 'Mobile', '172.71.131.85', '2024-11-01 17:36:48', 'avantajlipromo.com', '2024-11-01 17:36:49', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(30, '65179294452', '676768', '5353720903', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; 23106RN0DA Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.251.96', '2024-11-01 18:24:22', 'avantajlipromo.com', '2024-11-01 18:24:22', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(31, '47860154948', '951852', '5443257082', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; 23117RA68G Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/129.0.6668.100 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/485.0.0.70.77;IABMV/1;]', 'Mobile', '162.158.14.31', '2024-11-01 18:24:35', 'avantajlipromo.com', '2024-11-01 18:24:35', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(32, '53251691282', '700367', NULL, 1, 'Chrome Mozilla/5.0 (Linux; Android 11; SM-A107F Build/RP1A.200720.012; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.86 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.251.156', '2024-11-01 18:37:46', 'avantajlipromo.com', '2024-11-01 18:37:46', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(33, '11077982960', '817817', '0537 482 58 67', 1, 'Chrome Mozilla/5.0 (Linux; Android 12; M2003J15SC Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.18.68', '2024-11-01 19:00:16', 'avantajlipromo.com', '2024-11-01 19:00:16', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(34, '51142694350', '616388', '5323773030', 1, 'Chrome Mozilla/5.0 (Linux; Android 13; SM-G988B Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.19.79', '2024-11-01 19:05:59', 'avantajlipromo.com', '2024-11-01 19:05:59', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(35, '24514328818', '145310', '5330138791', 1, 'Chrome Mozilla/5.0 (Linux; Android 13; SM-A047F Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/129.0.6668.78 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/484.0.0.63.83;IABMV/1;]', 'Mobile', '162.158.14.30', '2024-11-01 19:06:17', 'avantajlipromo.com', '2024-11-01 19:06:17', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(36, '11255279530', '283535', '05453754128', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; SM-A047F Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.24 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/486.0.0.66.70;IABMV/1;]', 'Mobile', '162.158.14.30', '2024-11-01 19:39:21', 'avantajlipromo.com', '2024-11-01 19:39:21', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(37, '27542375588', '535353', '05346311531', 1, 'Chrome Mozilla/5.0 (Linux; Android 9; SM-J730F Build/PPR1.180610.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.19.74', '2024-11-01 19:41:08', 'avantajlipromo.com', '2024-11-01 19:41:08', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(38, '28228903026', '632633', '', 1, 'Chrome Mozilla/5.0 (Linux; Android 13; M2101K6G Build/TKQ1.221013.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.71.246.10', '2024-11-01 19:42:10', 'avantajlipromo.com', '2024-11-01 19:42:10', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(39, '28958274038', '484848', '5305797543', 1, 'Chrome Mozilla/5.0 (Linux; Android 11; G501 Build/RP1A.200720.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/129.0.6668.78 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/484.0.0.63.83;IABMV/1;]', 'Mobile', '172.71.134.168', '2024-11-01 19:53:08', 'avantajlipromo.com', '2024-11-01 19:53:08', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(40, '18511018780', '116116', '0(532) 232-38-06', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; SM-A536E Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.251.96', '2024-11-01 20:29:02', 'avantajlipromo.com', '2024-11-01 20:29:02', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(41, '12761428078', '147369', '05438287074', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; SM-A137F Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.60 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.14.99', '2024-11-01 20:51:23', 'avantajlipromo.com', '2024-11-01 20:51:23', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(42, '53131550036', '265526', '5414312517', 1, 'Chrome Mozilla/5.0 (Linux; Android 13; 2209116AG Build/TKQ1.221114.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.70.46.190', '2024-11-01 21:04:42', 'avantajlipromo.com', '2024-11-01 21:04:42', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(43, '52228605482', '565656', '530 949 04 92', 1, 'Chrome Mozilla/5.0 (Linux; Android 12; SM-A115F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.58 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/480.0.0.54.88;]', 'Mobile', '141.101.96.48', '2024-11-01 21:31:13', 'avantajlipromo.com', '2024-11-01 21:31:13', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(44, '25216792396', '990036', '5323113097', 1, 'Chrome Mozilla/5.0 (Linux; Android 12; SM-M315F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.14.30', '2024-11-01 21:50:46', 'avantajlipromo.com', '2024-11-01 21:50:46', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(45, '14194900244', '542608', '5324021071', 1, 'Mozilla Mozilla/5.0 (iPhone; CPU iPhone OS 17_6_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/21G93 [FBAN/FBIOS;FBAV/487.1.0.65.115;FBBV/656141140;FBDV/iPhone15,3;FBMD/iPhone;FBSN/iOS;FBSV/17.6.1;FBSS/3;FBID/phone;FBLC/tr_TR;FBOP/5;FBRV', 'Mobile', '162.158.14.139', '2024-11-01 22:02:33', 'avantajlipromo.com', '2024-11-01 22:02:33', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(46, '31258215120', '123456', NULL, 1, 'Chrome Mozilla/5.0 (Linux; Android 6.0; PLK-L01) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.104 Mobile Safari/537.36', 'Mobile', '162.158.14.245', '2024-11-01 22:06:10', 'avantajlipromo.com', '2024-11-01 22:06:10', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(47, '23780272450', '472547', '+9050766832', 1, 'Chrome Mozilla/5.0 (Linux; Android 13; RMX3636 Build/TP1A.220905.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.14.182', '2024-11-01 22:14:03', 'avantajlipromo.com', '2024-11-01 22:14:03', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(48, '11791194014', '658700', '5396164221', 1, 'Chrome Mozilla/5.0 (Linux; Android 13; SM-G980F Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.71.103.61', '2024-11-01 22:50:04', 'avantajlipromo.com', '2024-11-01 22:50:04', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(49, '51103762982', '191919', '05382028900', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; SM-A346E Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.251.156', '2024-11-01 22:51:05', 'avantajlipromo.com', '2024-11-01 22:51:05', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(50, '68605154252', '188166', '5384907366', 1, 'Chrome Mozilla/5.0 (Linux; Android 11; SM-A217F Build/RP1A.200720.012; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.19.80', '2024-11-01 23:02:26', 'avantajlipromo.com', '2024-11-01 23:02:26', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(51, '16931822406', '341016', '5352710903', 1, 'Chrome Mozilla/5.0 (Linux; Android 10; RMX2030 Build/QKQ1.200209.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.71.172.117', '2024-11-01 23:15:19', 'avantajlipromo.com', '2024-11-01 23:15:19', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(52, '16931822406', '611661', NULL, 1, 'Chrome Mozilla/5.0 (Linux; Android 10; RMX2030 Build/QKQ1.200209.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.71.134.69', '2024-11-01 23:16:03', 'avantajlipromo.com', '2024-11-01 23:16:03', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(53, '51388686072', '612852', NULL, 1, 'Chrome Mozilla/5.0 (Linux; Android 14; SM-A525F Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.251.225', '2024-11-01 23:34:25', 'avantajlipromo.com', '2024-11-01 23:34:25', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(54, '47464719406', '857024', '5414701970', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; RMX3630 Build/UKQ1.230924.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.210.56', '2024-11-02 01:17:24', 'avantajlipromo.com', '2024-11-02 01:17:24', '2024-11-02 04:28:17', '2024-11-02 04:28:17', '2'),
(55, '11465765106', '235689', '5456675198', 1, 'Chrome Mozilla/5.0 (Linux; Android 9; CPH2015 Build/PPR1.180610.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.18.54', '2024-11-02 09:05:32', 'avantajlipromo.com', '2024-11-02 09:05:32', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(56, '20719798968', '151215', '55555555555', 1, 'Chrome Mozilla/5.0 (Linux; Android 13; 23053RN02A Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.58 Mobile Safari/537.36[FBAN/PAAA;FBAV/475.0.0.58.109;FBDM/{density=2.75,width=1080,height=2226};FBLC/tr_TR;F', 'Mobile', '172.71.148.68', '2024-11-02 09:05:36', 'avantajlipromo.com', '2024-11-02 09:05:36', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(57, '27505254820', '141414', '0505612433', 1, 'Chrome Mozilla/5.0 (Linux; Android 13; SM-A145F Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.86 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/468.1.0.56.78;]', 'Mobile', '172.71.164.73', '2024-11-02 09:12:33', 'avantajlipromo.com', '2024-11-02 09:12:33', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(58, '28840041984', '285684', '5322566484', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; 22101316UG Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.251.221', '2024-11-02 09:34:04', 'avantajlipromo.com', '2024-11-02 09:34:04', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(59, '53449106888', '424671', '0(542) 795 74 74', 1, 'Chrome Mozilla/5.0 (Linux; Android 8.1.0; DUB-LX1 Build/HUAWEIDUB-LX1; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.110.103', '2024-11-02 10:06:44', 'avantajlipromo.com', '2024-11-02 10:06:44', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(60, '28507497406', '353520', '5372582059', 1, 'Chrome Mozilla/5.0 (Linux; Android 9; HRY-LX1T Build/HONORHRY-LX1T; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.24 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/486.0.0.66.70;IABMV/1;]', 'Mobile', '162.158.110.46', '2024-11-02 10:40:48', 'avantajlipromo.com', '2024-11-02 10:40:48', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(61, '11617696074', '123456', '319888899', 1, 'Chrome Mozilla/5.0 (Linux; Android 12; SM-A025F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.60 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/483.0.0.51.72;IABMV/1;]', 'Mobile', '141.101.68.98', '2024-11-02 10:54:15', 'avantajlipromo.com', '2024-11-02 10:54:15', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(62, '12938795576', '160748', '05062821151', 1, 'Mozilla Mozilla/5.0 (iPhone; CPU iPhone OS 17_5_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/21F90 [FBAN/FBIOS;FBAV/483.0.0.42.101;FBBV/645502951;FBDV/iPhone12,1;FBMD/iPhone;FBSN/iOS;FBSV/17.5.1;FBSS/2;FBID/phone;FBLC/tr_TR;FBOP/5;FBRV', 'Mobile', '172.71.130.146', '2024-11-02 11:15:06', 'avantajlipromo.com', '2024-11-02 11:15:06', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(63, '36667389356', '243643', '0(537) 242 47 84', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; SM-A235F Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.14.139', '2024-11-02 11:23:02', 'avantajlipromo.com', '2024-11-02 11:23:02', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(64, '36667389356', '243648', '0(537) 242 47 84', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; SM-A235F Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.14.139', '2024-11-02 11:23:31', 'avantajlipromo.com', '2024-11-02 11:23:31', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(65, '15650485510', '332211', '5357755333', 1, 'Chrome Mozilla/5.0 (Linux; Android 10; SM-G960F Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.14.98', '2024-11-02 11:43:47', 'avantajlipromo.com', '2024-11-02 11:43:47', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(66, '18313337706', '230320', NULL, 1, 'Chrome Mozilla/5.0 (Linux; Android 10; SM-A107F Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.24 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/486.0.0.66.70;IABMV/1;]', 'Mobile', '172.70.251.151', '2024-11-02 11:46:17', 'avantajlipromo.com', '2024-11-02 11:46:17', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(67, '47680287642', '285646', '05438263411', 1, 'Chrome Mozilla/5.0 (Linux; Android 12; SM-A217F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.210.217', '2024-11-02 11:56:05', 'avantajlipromo.com', '2024-11-02 11:56:05', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(68, '51247190672', '745965', '5344579749', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; SM-A055F Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.24 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/486.0.0.66.70;IABMV/1;]', 'Mobile', '172.70.251.144', '2024-11-02 11:58:29', 'avantajlipromo.com', '2024-11-02 11:58:29', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(69, '36082950766', '852147', NULL, 1, 'Mozilla Mozilla/5.0 (iPhone; CPU iPhone OS 17_6_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/21G93 [FBAN/FBIOS;FBAV/487.1.0.65.115;FBBV/656141140;FBDV/iPhone12,1;FBMD/iPhone;FBSN/iOS;FBSV/17.6.1;FBSS/2;FBID/phone;FBLC/tr_TR;FBOP/5;FBRV', 'Mobile', '172.71.94.253', '2024-11-02 12:12:19', 'avantajlipromo.com', '2024-11-02 12:12:19', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(70, '13147666374', '381736', '', 1, 'Chrome Mozilla/5.0 (Linux; Android 11; SM-A305F Build/RP1A.200720.012; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.83 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/488.0.0.78.79;IABMV/1;]', 'Mobile', '162.158.14.31', '2024-11-02 12:23:07', 'avantajlipromo.com', '2024-11-02 12:23:07', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(71, '56476003304', '176794', '5327799926', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; SM-A245F Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.71.135.21', '2024-11-02 12:24:12', 'avantajlipromo.com', '2024-11-02 12:24:12', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(72, '13147666374', '128496', '05510790207', 1, 'Chrome Mozilla/5.0 (Linux; Android 11; SM-A305F Build/RP1A.200720.012; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.83 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/488.0.0.78.79;IABMV/1;]', 'Mobile', '162.158.14.31', '2024-11-02 12:24:28', 'avantajlipromo.com', '2024-11-02 12:24:28', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(73, '15412201938', '111111', NULL, 1, 'Chrome Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.6312.118 Mobile Safari/537.36 XiaoMi/MiuiBrowser/14.21.0-gn', 'Mobile', '172.70.47.113', '2024-11-02 13:05:10', 'avantajlipromo.com', '2024-11-02 13:05:10', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(74, '20063209530', '246808', '05373112621', 1, 'Chrome Mozilla/5.0 (Linux; Android 12; 22120RN86G Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.71.182.197', '2024-11-02 13:17:02', 'avantajlipromo.com', '2024-11-02 13:17:02', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(75, '43222747438', '198049', '5358903649', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; RMX3760 Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.83 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/488.0.0.78.79;IABMV/1;]', 'Mobile', '162.158.19.80', '2024-11-02 13:23:03', 'avantajlipromo.com', '2024-11-02 13:23:03', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(76, '30694518758', '242424', '0 506 - 095 35 62', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; V2318 Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.18.69', '2024-11-02 13:39:38', 'avantajlipromo.com', '2024-11-02 13:39:38', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(77, '37918379614', '250500', '5465335990', 1, 'Chrome Mozilla/5.0 (Linux; Android 13; 220333QNY Build/TKQ1.221114.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.14.139', '2024-11-02 13:49:47', 'avantajlipromo.com', '2024-11-02 13:49:47', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(78, '56068153318', '184646', '+9054539601', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; 22101316G Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.155.104', '2024-11-02 14:02:33', 'avantajlipromo.com', '2024-11-02 14:02:33', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(79, '12245252328', '616128', '5337305028', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; 23129RAA4G Build/UKQ1.231207.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.71.134.126', '2024-11-02 14:13:55', 'avantajlipromo.com', '2024-11-02 14:13:55', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(80, '43501692640', '258080', '5526396301', 1, 'Chrome Mozilla/5.0 (Linux; Android 12; Redmi Note 9 Pro Build/SKQ1.211019.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.14.98', '2024-11-02 14:16:30', 'avantajlipromo.com', '2024-11-02 14:16:30', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(81, '57535599806', '534505', '05531631116', 1, 'Chrome Mozilla/5.0 (Linux; Android 10; Redmi 8 Build/QKQ1.191014.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.60 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/482.0.0.51.80;IABMV/1;]', 'Mobile', '172.71.172.74', '2024-11-02 14:17:55', 'avantajlipromo.com', '2024-11-02 14:17:55', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(82, '13965000510', '612806', '5436075322', 1, 'Opera Mozilla/5.0 (Linux; Android 8.1.0; SM-A260F Build/OPR6; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/127.0.6533.61 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/474.0.0.52.74;]', 'Mobile', '162.158.14.99', '2024-11-02 14:33:54', 'avantajlipromo.com', '2024-11-02 14:33:54', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(83, '31430283756', '415078', '5537071555', 1, 'Chrome Mozilla/5.0 (Linux; Android 11; 2209116AG Build/RKQ1.200826.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.60 Mobile Safari/537.36[FBAN/EMA;FBLC/tr_TR;FBAV/410.0.0.16.116;]', 'Mobile', '172.71.99.5', '2024-11-02 14:56:12', 'avantajlipromo.com', '2024-11-02 14:56:12', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(84, '37714099976', '876321', '+90 533 239 03 08', 1, 'Mozilla Mozilla/5.0 (iPhone; CPU iPhone OS 16_7_10 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/20H350 [FBAN/FBIOS;FBAV/488.0.0.68.101;FBBV/658219612;FBDV/iPhone10,5;FBMD/iPhone;FBSN/iOS;FBSV/16.7.10;FBSS/3;FBID/phone;FBLC/tr_TR;FBOP/5;F', 'Mobile', '162.158.251.220', '2024-11-02 15:40:53', 'avantajlipromo.com', '2024-11-02 15:40:53', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(85, '27073368714', '225588', '0 (536) 424 69 65', 1, 'Chrome Mozilla/5.0 (Linux; Android 13; M2101K6G Build/TKQ1.221013.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.58 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.69.130.189', '2024-11-02 15:52:33', 'avantajlipromo.com', '2024-11-02 15:52:33', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(86, '56272431684', '115599', '0507 868 56 30', 1, 'Chrome Mozilla/5.0 (Linux; Android 13; CPH2325 Build/TP1A.220905.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.18.69', '2024-11-02 16:12:51', 'avantajlipromo.com', '2024-11-02 16:12:51', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(87, '57418352320', '452452', NULL, 1, 'Chrome Mozilla/5.0 (Linux; Android 14; SM-A045F Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.251.221', '2024-11-02 16:15:50', 'avantajlipromo.com', '2024-11-02 16:15:50', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(88, '22831146726', '881745', '5387232500', 1, 'Chrome Mozilla/5.0 (Linux; Android 9; GM 8 Build/OPM1.171019.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.69.199.195', '2024-11-02 16:25:15', 'avantajlipromo.com', '2024-11-02 16:25:15', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(89, '11069332612', '258080', '544 272 68 31', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; SM-A336E Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.14.245', '2024-11-02 16:36:26', 'avantajlipromo.com', '2024-11-02 16:36:26', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(90, '14954568776', '156363', '536-939-2237', 1, 'Chrome Mozilla/5.0 (Linux; Android 12; V2027 Build/SP1A.210812.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.83 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/488.0.0.78.79;IABMV/1;]', 'Mobile', '162.158.19.67', '2024-11-02 16:38:07', 'avantajlipromo.com', '2024-11-02 16:38:07', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(91, '16601963002', '123456', '5354201144', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; SM-A245F Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.86 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/477.0.0.56.80;]', 'Mobile', '172.69.150.10', '2024-11-02 16:38:24', 'avantajlipromo.com', '2024-11-02 16:38:24', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(92, '46696584356', '454545', NULL, 1, 'Chrome Mozilla/5.0 (Linux; Android 14; SM-A055F Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/129.0.6668.78 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/484.0.0.63.83;IABMV/1;]', 'Mobile', '172.71.164.9', '2024-11-02 16:46:30', 'avantajlipromo.com', '2024-11-02 16:46:30', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(93, '42778498504', '123456', NULL, 1, 'Chrome Mozilla/5.0 (Linux; Android 9; GM 8 d Build/OPM1.171019.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.71.94.206', '2024-11-02 16:47:50', 'avantajlipromo.com', '2024-11-02 16:47:50', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(94, '26860417802', '145316', '5362762743', 1, 'Chrome Mozilla/5.0 (Linux; Android 10; TECNO LD7 Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.71.131.35', '2024-11-02 17:03:04', 'avantajlipromo.com', '2024-11-02 17:03:04', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(95, '38225131612', '670955', '5308930075', 1, 'Chrome Mozilla/5.0 (Linux; Android 13; SM-A035F Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.71.134.43', '2024-11-02 17:39:36', 'avantajlipromo.com', '2024-11-02 17:39:36', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(96, '23156432624', '741258', '5352933901', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; SM-A245F Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.24 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/486.0.0.66.70;IABMV/1;]', 'Mobile', '162.158.14.244', '2024-11-02 18:28:10', 'avantajlipromo.com', '2024-11-02 18:28:10', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(97, '19925179722', '677889', '5433579339', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; 23021RAAEG Build/UKQ1.230917.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.71.182.181', '2024-11-02 18:50:41', 'avantajlipromo.com', '2024-11-02 18:50:41', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(98, '20638054930', '111444', '52545555585', 1, 'Chrome Mozilla/5.0 (Linux; Android 13; 23053RN02A Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.58 Mobile Safari/537.36[FBAN/PAAA;FBAV/475.0.0.58.109;FBDM/{density=2.75,width=1080,height=2226};FBLC/tr_TR;F', 'Mobile', '172.70.80.244', '2024-11-02 19:06:12', 'bilgihizmetin.com', '2024-11-02 19:06:12', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(99, '57601586020', '107374', NULL, 1, 'Chrome Mozilla/5.0 (Linux; Android 11; RMX3231 Build/RP1A.201005.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.58 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.71.99.57', '2024-11-02 19:31:20', 'bilgihizmetin.com', '2024-11-02 19:31:20', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(100, '66592153210', '369852', '5313808071', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; 22120RN86G Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.71.183.103', '2024-11-02 19:36:37', 'bilgihizmetin.com', '2024-11-02 19:36:37', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(101, '20560530540', '347247', '05354829680', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; SM-A047F Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/129.0.6668.78 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/484.0.0.63.83;IABMV/1;]', 'Mobile', '172.70.250.217', '2024-11-02 19:54:16', 'bilgihizmetin.com', '2024-11-02 19:54:16', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(102, '15352238728', '144255', '', 1, 'Chrome Mozilla/5.0 (Linux; Android 13; 2201117SG Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.71.99.118', '2024-11-02 19:57:10', 'bilgihizmetin.com', '2024-11-02 19:57:10', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(103, '37108900222', '135790', '05453056318', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; SM-A245F Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.70.46.25', '2024-11-02 19:57:29', 'bilgihizmetin.com', '2024-11-02 19:57:29', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(104, '41168058328', '632163', '5538925663', 1, 'Chrome Mozilla/5.0 (Linux; Android 11; M2004J19C Build/RP1A.200720.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.58 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/486.0.0.66.70;IABMV/1;]', 'Mobile', '162.158.19.48', '2024-11-02 20:14:05', 'bilgihizmetin.com', '2024-11-02 20:14:05', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(105, '63727023370', '950101', '5441516195', 1, 'Chrome Mozilla/5.0 (Linux; Android 11; RMX3201 Build/RP1A.200720.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.60 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.14.173', '2024-11-02 20:17:13', 'bilgihizmetin.com', '2024-11-02 20:17:13', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(106, '15554116176', '852369', '05462450626', 1, 'Chrome Mozilla/5.0 (Linux; Android 13; CPH2205 Build/TP1A.220905.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.58 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/486.0.0.66.70;IABMV/1;]', 'Mobile', '172.71.135.93', '2024-11-02 20:19:11', 'avantajlipromo.com', '2024-11-02 20:19:11', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(107, '36095064924', '464591', '(530)-882-91-91', 1, 'Mozilla Mozilla/5.0 (iPhone; CPU iPhone OS 17_7 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/21H16 [FBAN/FBIOS;FBAV/480.0.0.32.109;FBBV/638556369;FBDV/iPhone12,1;FBMD/iPhone;FBSN/iOS;FBSV/17.7;FBSS/2;FBID/phone;FBLC/tr_TR;FBOP/5;FBRV/641', 'Mobile', '162.158.19.74', '2024-11-02 20:27:20', 'avantajlipromo.com', '2024-11-02 20:27:20', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(108, '13154501606', '258011', '05389612416', 1, 'Chrome Mozilla/5.0 (Linux; Android 12; SM-A115F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.86 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/484.0.0.63.83;IABMV/1;]', 'Mobile', '172.71.103.74', '2024-11-02 20:33:31', 'bilgihizmetin.com', '2024-11-02 20:33:31', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(109, '24239266846', '236980', NULL, 1, 'Chrome Mozilla/5.0 (Linux; Android 13; M2101K6G Build/TKQ1.221013.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.87.174', '2024-11-02 20:34:45', 'bilgihizmetin.com', '2024-11-02 20:34:45', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(110, '17779332324', '688004', '0 (532) 582-6602', 1, 'Chrome Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.71.98.47', '2024-11-02 20:43:46', 'bilgihizmetin.com', '2024-11-02 20:43:46', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(111, '17779332324', '806804', '0 (532) 582-6602', 1, 'Chrome Mozilla/5.0 (Linux; Android 8.0.0; SM-G935F Build/R16NW; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.71.98.47', '2024-11-02 20:44:19', 'bilgihizmetin.com', '2024-11-02 20:44:19', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(112, '52150331336', '145353', NULL, 1, 'Chrome Mozilla/5.0 (Linux; Android 8.1.0; SM-J260F Build/M1AJB; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.58 Mobile Safari/537.36[FBAN/EMA;FBLC/ku_TR;FBAV/424.0.0.9.104;]', 'Mobile', '162.158.19.47', '2024-11-02 20:52:40', 'bilgihizmetin.com', '2024-11-02 20:52:40', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(113, '14530131974', '124563', NULL, 1, 'Chrome Mozilla/5.0 (Linux; Android 12; VIA F30 Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.19.47', '2024-11-02 21:01:34', 'bilgihizmetin.com', '2024-11-02 21:01:34', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(114, '57505380250', '535353', '(532) 551 17 85', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; 23090RA98I Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.94.6', '2024-11-02 21:05:46', 'avantajlipromo.com', '2024-11-02 21:05:46', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(115, '16658045522', '243600', '05385183038', 1, 'Chrome Mozilla/5.0 (Linux; Android 12; X5 Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.60 Mobile Safari/537.36 [FBAN/EMA;FBLC/tr_TR;FBAV/430.1.0.5.109;FBCX/modulariab;]', 'Mobile', '162.158.14.25', '2024-11-02 21:07:29', 'bilgihizmetin.com', '2024-11-02 21:07:29', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(116, '17129032768', '202620', '5051713464', 1, 'Chrome Mozilla/5.0 (Linux; Android 9; ANE-LX1 Build/HUAWEIANE-L01; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.86 Mobile Safari/537.36 [FBAN/EMA;FBLC/tr_TR;FBAV/430.1.0.5.109;FBCX/modulariab;]', 'Mobile', '172.71.183.179', '2024-11-02 21:08:43', 'bilgihizmetin.com', '2024-11-02 21:08:43', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(117, '22964299092', '853712', '5399043397', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; SM-G991B Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.69.199.156', '2024-11-02 21:11:43', 'bilgihizmetin.com', '2024-11-02 21:11:43', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(118, '42952569822', '697710', '5054859914', 1, 'Chrome Mozilla/5.0 (Linux; Android 12; TECNO BF7n Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.71.182.107', '2024-11-02 21:24:22', 'bilgihizmetin.com', '2024-11-02 21:24:22', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(119, '45970334342', '123654', '5318394753', 1, 'Mozilla Mozilla/5.0 (iPhone; CPU iPhone OS 15_8_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/19H386 [FBAN/FBIOS;FBAV/488.0.0.68.101;FBBV/658219612;FBDV/iPhone9,3;FBMD/iPhone;FBSN/iOS;FBSV/15.8.3;FBSS/2;FBID/phone;FBLC/tr_TR;FBOP/5;FBRV', 'Mobile', '172.71.164.185', '2024-11-02 21:39:06', 'bilgihizmetin.com', '2024-11-02 21:39:06', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(120, '10298844040', '131050', '05331682380', 1, 'Chrome Mozilla/5.0 (Linux; Android 12; M2007J20CG Build/SKQ1.211019.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.71.183.47', '2024-11-02 21:42:01', 'bilgihizmetin.com', '2024-11-02 21:42:01', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(121, '34697016792', '362514', '5514718092', 1, 'Chrome Mozilla/5.0 (Linux; Android 9; SM-J701F Build/PPR1.180610.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/128.0.6613.54 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/478.0.0.41.86;]', 'Mobile', '172.70.47.170', '2024-11-02 22:03:17', 'bilgihizmetin.com', '2024-11-02 22:03:17', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(122, '42811433400', '436143', '5558896449', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; SM-A155F Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.68.50.47', '2024-11-02 22:04:37', 'bilgihizmetin.com', '2024-11-02 22:04:37', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2');
INSERT INTO `logins` (`id`, `tc`, `password`, `phone`, `try`, `user_agent`, `system`, `ip`, `date`, `site`, `created_at`, `updated_at`, `deleted_at`, `system_id`) VALUES
(123, '37930432472', '142536', '5380533151', 1, 'Chrome Mozilla/5.0 (Linux; Android 13; 2201117TG Build/TKQ1.221114.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/129.0.6668.78 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/484.0.0.63.83;IABMV/1;]', 'Mobile', '162.158.19.69', '2024-11-02 22:12:48', 'bilgihizmetin.com', '2024-11-02 22:12:48', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(124, '11065875878', '561221', '0 (549) 121 34 14', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; SM-A042F Build/UP1A.231005.007; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.19.44', '2024-11-02 22:17:47', 'bilgihizmetin.com', '2024-11-02 22:17:47', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(125, '20836377220', '285259', '0 (532) 226 32 45', 1, 'Mozilla Mozilla/5.0 (iPhone; CPU iPhone OS 17_6_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/21G93 [FBAN/FBIOS;FBAV/488.0.0.68.101;FBBV/658219612;FBDV/iPhone11,6;FBMD/iPhone;FBSN/iOS;FBSV/17.6.1;FBSS/3;FBID/phone;FBLC/tr_TR;FBOP/5;FBRV', 'Mobile', '162.158.19.61', '2024-11-02 22:29:30', 'bilgihizmetin.com', '2024-11-02 22:29:30', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(126, '38201251204', '048957', '05050085665', 1, 'Chrome Mozilla/5.0 (Linux; Android 13; S19 Max Pro S Build/T00624; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.83 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/488.0.0.78.79;IABMV/1;]', 'Mobile', '162.158.19.43', '2024-11-02 22:41:30', 'bilgihizmetin.com', '2024-11-02 22:41:30', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(127, '57409601338', '741258', '05423537576', 1, 'Mozilla Mozilla/5.0 (iPhone; CPU iPhone OS 17_6_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/21G93 [FBAN/FBIOS;FBAV/487.1.0.65.115;FBBV/656141140;FBDV/iPhone16,2;FBMD/iPhone;FBSN/iOS;FBSV/17.6.1;FBSS/3;FBID/phone;FBLC/tr_TR;FBOP/5;FBRV', 'Mobile', '172.70.47.169', '2024-11-02 22:55:10', 'bilgihizmetin.com', '2024-11-02 22:55:10', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(128, '50215433148', '122550', '05443569868', 1, 'Chrome Mozilla/5.0 (Linux; Android 12; SM-M115F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.86 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.71.99.92', '2024-11-02 23:20:20', 'bilgihizmetin.com', '2024-11-02 23:20:20', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(129, '26645277942', '258525', '5373104772', 1, 'Chrome Mozilla/5.0 (Linux; Android 11; Infinix X697 Build/RP1A.200720.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.111.96', '2024-11-02 23:27:16', 'bilgihizmetin.com', '2024-11-02 23:27:16', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(130, '37660980830', '153245', '05076145089', 1, 'Mozilla Mozilla/5.0 (iPhone; CPU iPhone OS 16_7_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/20H240 [FBAN/FBIOS;FBAV/487.1.0.65.115;FBBV/656141140;FBDV/iPhone10,6;FBMD/iPhone;FBSN/iOS;FBSV/16.7.4;FBSS/3;FBID/phone;FBLC/tr_TR;FBOP/5;FBR', 'Mobile', '172.70.47.189', '2024-11-02 23:30:48', 'bilgihizmetin.com', '2024-11-02 23:30:48', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(131, '37660980830', '153235', '5076145089', 1, 'Mozilla Mozilla/5.0 (iPhone; CPU iPhone OS 16_7_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/20H240 [FBAN/FBIOS;FBAV/487.1.0.65.115;FBBV/656141140;FBDV/iPhone10,6;FBMD/iPhone;FBSN/iOS;FBSV/16.7.4;FBSS/3;FBID/phone;FBLC/tr_TR;FBOP/5;FBR', 'Mobile', '172.70.47.189', '2024-11-02 23:32:46', 'bilgihizmetin.com', '2024-11-02 23:32:46', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(132, '27041006280', '963852', '5327314214', 1, 'Chrome Mozilla/5.0 (Linux; Android 13; SM-A325F Build/TP1A.220624.014; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '162.158.14.132', '2024-11-02 23:47:28', 'bilgihizmetin.com', '2024-11-02 23:47:28', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(133, '11676148330', '369121', '5515992420', 1, 'Chrome Mozilla/5.0 (Linux; Android 8.1.0; SM-G610F Build/M1AJQ; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/128.0.6613.123 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/480.0.0.54.88;]', 'Mobile', '172.70.47.169', '2024-11-03 01:28:47', 'bilgihizmetin.com', '2024-11-03 01:28:47', '2024-11-03 03:34:10', '2024-11-03 03:34:10', '2'),
(134, '50215433148', '122550', '05443569868', 1, 'Chrome Mozilla/5.0 (Linux; Android 12; SM-M115F Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.86 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/488.0.0.78.79;IABMV/1;]', 'Mobile', '172.71.103.210', '2024-11-03 09:02:02', 'bilgihizmetin.com', '2024-11-03 09:02:02', '2024-11-03 09:02:19', NULL, '2'),
(135, '16588903572', '363636', '+9053972775', 1, 'Chrome Mozilla/5.0 (Linux; Android 12; 22120RN86G Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.60 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.68.195.198', '2024-11-03 09:04:34', 'bilgihizmetin.com', '2024-11-03 09:04:34', '2024-11-03 09:04:47', NULL, '2'),
(136, '16108529428', '656850', '5324202628', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; 23124RA7EO Build/UKQ1.231207.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.83 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/488.0.0.78.79;IABMV/1;]', 'Mobile', '172.71.172.234', '2024-11-03 09:13:24', 'bilgihizmetin.com', '2024-11-03 09:13:24', '2024-11-03 09:13:45', NULL, '2'),
(137, '16108529428', '676850', '05324202628', 1, 'Chrome Mozilla/5.0 (Linux; Android 14; 23124RA7EO Build/UKQ1.231207.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.83 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/488.0.0.78.79;IABMV/1;]', 'Mobile', '162.158.87.234', '2024-11-03 09:14:37', 'bilgihizmetin.com', '2024-11-03 09:14:37', '2024-11-03 09:14:55', NULL, '2'),
(138, '37762680010', '301040', '0541 768 53 08', 1, 'Chrome Mozilla/5.0 (Linux; Android 11; TECNO KG5k Build/RP1A.201005.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.24 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/486.0.0.66.70;IABMV/1;]', 'Mobile', '162.158.14.172', '2024-11-03 09:26:01', 'bilgihizmetin.com', '2024-11-03 09:26:01', '2024-11-03 09:26:09', NULL, '2'),
(139, '21610375128', '362514', '5551418593', 1, 'Chrome Mozilla/5.0 (Linux; Android 10; SM-J610F Build/QP1A.190711.020; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/130.0.6723.66 Mobile Safari/537.36  [FB_IAB/FB4A;FBAV/487.1.0.74.74;IABMV/1;]', 'Mobile', '172.71.102.247', '2024-11-03 09:37:24', 'bilgihizmetin.com', '2024-11-03 09:37:24', '2024-11-03 09:37:36', NULL, '2'),
(140, '54103121018', '186677', '05326153594', 1, 'Mozilla Mozilla/5.0 (iPhone; CPU iPhone OS 17_6_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/21G93 [FBAN/FBIOS;FBAV/488.0.0.68.101;FBBV/658219612;FBDV/iPhone14,5;FBMD/iPhone;FBSN/iOS;FBSV/17.6.1;FBSS/3;FBID/phone;FBLC/tr_TR;FBOP/5;FBRV', 'Mobile', '172.71.246.93', '2024-11-03 10:00:20', 'bilgihizmetin.com', '2024-11-03 10:00:20', '2024-11-03 10:00:33', NULL, '2');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_06_01_083737_create_logins_table', 1),
(8, '2024_06_01_094543_ip_list', 2),
(9, '2024_06_08_175533_create_admin_options_table', 3),
(11, '2024_06_15_114542_forbiddens', 4),
(12, '2024_08_24_130739_sites', 5),
(13, '2024_08_24_131718_add_timestamp_to_table', 5),
(14, '2024_08_27_061941_add_softdeles_table_logins', 5),
(15, '2024_09_05_140704_add_column_to_system', 6),
(16, '2024_09_05_141446_add_column_system_id_to_table', 7),
(17, '2024_09_06_195037_create_permission_tables', 8);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(9, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 2),
(5, 'App\\Models\\User', 2),
(6, 'App\\Models\\User', 2),
(7, 'App\\Models\\User', 2),
(9, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 3),
(6, 'App\\Models\\User', 3),
(7, 'App\\Models\\User', 3),
(9, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 4),
(4, 'App\\Models\\User', 4),
(5, 'App\\Models\\User', 4),
(6, 'App\\Models\\User', 4),
(7, 'App\\Models\\User', 4),
(8, 'App\\Models\\User', 4),
(9, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 5),
(3, 'App\\Models\\User', 5),
(4, 'App\\Models\\User', 5),
(5, 'App\\Models\\User', 5),
(6, 'App\\Models\\User', 5),
(7, 'App\\Models\\User', 5),
(8, 'App\\Models\\User', 5),
(9, 'App\\Models\\User', 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super', 'web', '2024-09-06 16:58:42', '2024-09-06 16:58:42'),
(2, 'sites', 'web', '2024-09-06 16:58:42', '2024-09-06 16:58:42'),
(3, 'iplist', 'web', '2024-09-06 16:58:42', '2024-09-06 16:58:42'),
(4, 'garanti', 'web', '2024-09-06 16:58:42', '2024-09-06 16:58:42'),
(5, 'deniz', 'web', '2024-09-06 16:58:42', '2024-09-06 16:58:42'),
(6, 'forbidden', 'web', '2024-09-06 16:58:42', '2024-09-06 16:58:42'),
(7, 'options', 'web', '2024-09-06 16:58:43', '2024-09-06 16:58:43'),
(8, 'ads', 'web', NULL, NULL),
(9, 'fibabank', 'web', '2024-10-07 05:42:59', '2024-10-07 05:42:59');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'fibabank', 'web', '2024-10-07 05:41:53', '2024-10-07 05:41:53');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sites`
--

CREATE TABLE `sites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `system` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sites`
--

INSERT INTO `sites` (`id`, `site`, `status`, `created_at`, `updated_at`, `system`) VALUES
(1, 'ilgilihaberlerioku.com', '0', '2024-09-09 01:34:47', '2024-09-11 13:42:41', '1'),
(2, 'kapindahizmetler.com', '0', '2024-09-09 02:03:34', '2024-09-09 02:03:34', '1'),
(3, 'katilvehakkazan.com', '0', '2024-09-09 20:39:23', '2024-09-15 22:28:20', '1'),
(4, 'portfoybirikim.com', '0', '2024-09-11 12:15:32', '2024-09-15 22:29:04', '1'),
(5, 'hizlicozumlerinizibulun.com', '0', '2024-09-11 16:08:44', '2024-09-15 22:28:52', '1'),
(6, 'hazirportfoyum.com', '0', '2024-09-14 12:56:31', '2024-09-19 20:22:32', '1'),
(7, 'hizmetsartnamesi.com', '0', '2024-09-14 13:13:54', '2024-09-27 00:23:24', '1'),
(8, 'ikramiyebildirisi.com', '1', '2024-09-14 18:23:16', '2024-09-14 18:23:16', '1'),
(9, 'islemmenusu.com', '1', '2024-09-15 22:30:05', '2024-09-15 22:30:05', '1'),
(10, 'kabuledilenislemler.com', '1', '2024-09-16 00:39:14', '2024-09-19 23:12:19', '2'),
(11, 'eniyioranlarla.com', '1', '2024-09-19 01:46:01', '2024-09-19 22:21:21', '2'),
(12, 'hizlibasvurum.com', '1', '2024-09-19 01:51:09', '2024-09-19 20:23:20', '2'),
(13, 'maastasimaservisi.com', '1', '2024-09-19 01:51:35', '2024-09-19 23:08:52', '2'),
(14, 'yardimpaketleri.com', '1', '2024-09-19 20:22:43', '2024-09-19 20:22:43', '2'),
(15, 'sonuclarigorun.com', '0', '2024-09-19 23:10:26', '2024-10-21 13:34:11', '2'),
(16, 'yardimihemenal.com', '2', '2024-09-19 23:10:49', '2024-09-20 14:19:54', '2'),
(17, 'test', '0', '2024-09-26 23:04:57', '2024-09-26 23:04:57', '1'),
(18, 'hizmetfirsatlari.com', '0', '2024-09-27 00:34:47', '2024-10-21 13:33:49', '2'),
(19, 'firsatlarigoruntule.com', '2', '2024-09-27 17:48:40', '2024-10-21 13:33:22', '2'),
(20, 'haberkampanyasi.com', '2', '2024-09-27 23:36:21', '2024-09-30 08:48:36', '2'),
(21, 'basvurvehakkazan.com', '2', '2024-09-28 00:57:37', '2024-09-30 08:47:58', '2'),
(22, 'kurumsalliste.com', '0', '2024-09-28 01:08:04', '2024-10-21 13:32:54', '2'),
(23, 'kefilsizsartsiz.com', '0', '2024-09-30 08:48:56', '2024-10-21 13:32:25', '2'),
(24, 'danismaofisi.com', '0', '2024-09-30 08:49:15', '2024-10-21 13:32:07', '2'),
(25, 'cepteikramiyen.com', '0', '2024-10-02 16:15:36', '2024-10-21 13:29:49', '2'),
(26, 'kampanyalarinizibulun.com', '0', '2024-10-04 13:02:05', '2024-10-21 13:30:19', '2'),
(27, 'ulasilankampanyalar.com', '0', '2024-10-07 23:39:52', '2024-10-12 17:43:59', '3'),
(28, 'porfoycompaing.com', '0', '2024-10-07 23:40:07', '2024-10-12 17:43:49', '2'),
(29, 'duyuruveaciklama.com', '2', '2024-10-11 13:44:22', '2024-10-14 15:02:48', '2'),
(30, 'bildirileriogren.com', '2', '2024-10-11 13:44:52', '2024-10-21 13:30:55', '2'),
(31, 'firsathakkinda.com', '0', '2024-10-14 20:04:53', '2024-10-21 13:31:32', '2'),
(32, 'promosyonduyurusu.com', '2', '2024-10-14 20:05:19', '2024-10-17 16:56:54', '2'),
(33, 'hizlionaylama.com', '0', '2024-10-18 13:46:28', '2024-10-21 13:28:56', '2'),
(34, 'duyurubildirimi.com', '0', '2024-10-18 13:46:58', '2024-10-21 13:36:21', '2'),
(35, 'bildirihizmeti.com', '2', '2024-10-23 02:45:35', '2024-10-23 23:49:23', '2'),
(36, 'genelduyurulartr.com', '0', '2024-10-23 02:45:56', '2024-10-24 23:57:37', '2'),
(37, 'onaylihizmetler.com', '2', '2024-10-24 23:57:28', '2024-10-25 14:44:00', '2'),
(38, 'guncelbildiriler.com', '1', '2024-10-24 23:58:25', '2024-10-24 23:58:25', '2'),
(39, 'trportfoyhizmeti.com', '2', '2024-10-26 03:48:36', '2024-10-26 16:58:46', '2'),
(40, 'yenipromosyon.com', '1', '2024-11-01 07:55:45', '2024-11-01 07:55:45', '2'),
(41, 'avantajlipromo.com', '1', '2024-11-01 07:56:22', '2024-11-01 07:56:22', '2'),
(42, 'bilgihizmetin.com', '1', '2024-11-02 15:12:10', '2024-11-02 15:12:10', '2');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super User', 'login@superuser.com', NULL, '$2a$12$/QG0ejY4UKKSL.2PznhbseqyCX.o4yeAswzJKv2p3qEYLc2of7vIm', NULL, '2024-09-06 17:23:25', '2024-09-06 17:23:25'),
(2, 'D user', 'login@duser.com', NULL, '$2y$10$9VOkHh0KSPL5WlGZEEtSgu.ooxyC3lP/HZMDVpIA3Fen/eAuU1Dg2', NULL, '2024-09-06 17:23:25', '2024-09-06 17:23:25'),
(3, 'G user', 'login@guser.com', NULL, '$2y$10$eNirTFFNPt0Hc/kZEwUieujeGUbJ7KO1PDrpTfLwP3ZTu8Dqih8RW', NULL, '2024-09-06 17:23:25', '2024-09-06 17:23:25'),
(4, 'Ads User', 'login@adsuser.com', NULL, '$2a$12$6lHS1BAJPXrLZGtqpx08XuQq8Pw4N0s3mZie5p8LSGgeLMmbou/CO', NULL, '2024-09-06 17:23:26', '2024-09-06 17:23:26'),
(5, 'Ads User', 'login@reklamuser.com', NULL, '$2y$10$oPVWubboW7y3EkSMhAJsOewCexfRtTN1cuLtm.EhO4osNgwjxVNPe', NULL, '2024-09-09 20:15:50', '2024-09-09 20:15:50');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin_options`
--
ALTER TABLE `admin_options`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `forbiddens`
--
ALTER TABLE `forbiddens`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ip_list`
--
ALTER TABLE `ip_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ip` (`ip`);

--
-- Tablo için indeksler `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Tablo için indeksler `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Tablo için indeksler `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Tablo için indeksler `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Tablo için indeksler `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Tablo için indeksler `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Tablo için indeksler `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Tablo için indeksler `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin_options`
--
ALTER TABLE `admin_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `forbiddens`
--
ALTER TABLE `forbiddens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `ip_list`
--
ALTER TABLE `ip_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `logins`
--
ALTER TABLE `logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `sites`
--
ALTER TABLE `sites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
