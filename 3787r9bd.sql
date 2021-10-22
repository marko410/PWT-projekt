-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 172.17.0.1:3314
-- Generation Time: May 25, 2021 at 02:58 PM
-- Server version: 8.0.19-10
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3787r9bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `absolvents`
--

CREATE TABLE `absolvents` (
  `id` bigint UNSIGNED NOT NULL,
  `f_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_num` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absolvents`
--

INSERT INTO `absolvents` (`id`, `f_name`, `l_name`, `phone_num`, `email`, `created_at`, `updated_at`) VALUES
(3, 'Jerguš', 'Kováčik', '0911123123', 'jergus@gmail.com', '2021-04-10 18:25:58', '2021-04-11 10:07:28');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_08_193059_create_ziaktickets_table', 2),
(5, '2021_03_08_193148_create_pilottickets_table', 2),
(6, '2021_04_08_182321_create_absolvents_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pilottickets`
--

CREATE TABLE `pilottickets` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `preukaz_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preukaz_num` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sep` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sep_to` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mep` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mep_to` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `z137t` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `z137t_to` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fi_to` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zdrav_sp1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zdrav_sp1_to` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zdrav_sp2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zdrav_sp2_to` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `radio_has` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `radio_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `radio_num` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `radio_unl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `radio_to` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pilottickets`
--

INSERT INTO `pilottickets` (`id`, `user_id`, `preukaz_type`, `preukaz_num`, `sep`, `sep_to`, `mep`, `mep_to`, `z137t`, `z137t_to`, `fi`, `fi_to`, `zdrav_sp1`, `zdrav_sp1_to`, `zdrav_sp2`, `zdrav_sp2_to`, `radio_has`, `radio_type`, `radio_num`, `radio_unl`, `radio_to`, `created_at`, `updated_at`) VALUES
(15, 8, 'PPL', 'SVK FCL 12345678', '1', '30-07-2017', '2', NULL, '1', '10-06-2021', '1', '31-12-2016', '1', '21-12-2016', '1', '21-06-2017', '1', 'Všeobecný', 'VVR 00/2006', '1', NULL, '2021-04-10 19:18:55', '2021-04-11 07:50:56'),
(20, 19, 'ATPL', NULL, '1', NULL, '1', NULL, '1', NULL, '1', NULL, '1', NULL, '1', NULL, '1', 'Všeobecný', NULL, '1', NULL, '2021-04-11 13:37:21', '2021-04-11 13:37:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rod_cislo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dat_nar` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ulica` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_ulice` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `psc` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int DEFAULT NULL,
  `has_ticket` int DEFAULT '0',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `f_name`, `l_name`, `rod_cislo`, `dat_nar`, `ulica`, `c_ulice`, `city`, `psc`, `phone_1`, `phone_2`, `email`, `email_verified_at`, `password`, `role`, `has_ticket`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'pbenik', 'Peter', 'Beník ml.', '700605/6772', '5.6.1970', NULL, NULL, NULL, NULL, NULL, NULL, 'peto.benik@gmail.com', NULL, '$2y$10$cD.MO7SL1l/gUz0GxWV2WOGlpDpig1fG4lTG4g5I6Aam3qtHEzkN6', 2, 0, NULL, '2021-02-18 16:27:40', '2021-02-18 16:27:40'),
(6, 'rbiskupic', 'Roman', 'Biskupič', '850325/6410', '25.3.1985', 'Terchovská', '199/12', 'Zálesie', '90028', '0949215940', NULL, 'Bickupic.roman@gmail.com', NULL, '$2y$10$JOJrlczSkKVrY/yu7i5aW.DrgNaoihEuN5XGA0keC8ogiZzM5D4Su', 2, 0, NULL, '2021-02-18 17:20:21', '2021-02-18 17:20:21'),
(7, 'vfilo', 'Vladimír', 'Filo', '591015/6758', '15.10.1959', 'Podlavická cesta', '25', 'Banská Bystrica', '97409', '0903417662', '484800773', 'filo@windowslive.com', NULL, '$2y$10$AQ9WKA5lznI4pbSSUYB0weWnF6eCE81de3nfoWG7kPUukSJTtPVgC', 2, 0, NULL, '2021-02-18 17:20:21', '2021-02-18 17:20:21'),
(8, 'ihrcka', 'Ivan', 'H....', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$UPkssn/fOMfDGZPGHlSH1evR3fq4r9kjc9DT9YllJYdGH2wBwR2HG', 2, 1, NULL, '2021-02-18 17:20:21', '2021-04-11 12:32:27'),
(9, 'mknazek', 'Miloš', 'Kňažek', '690824/7236', '24.8.1969', 'Malý Lapáš', '3', 'Malý Lapáš', '95104', '0903205429', NULL, 'milos.knazek@gmail.com', NULL, '$2y$10$Ufk4ibqys/kdW5bCBTWCqORzQBVT9mMAqt1wG.Z3XmXpWAcHkIMfi', 2, 0, NULL, '2021-02-18 17:20:21', '2021-02-18 17:20:21'),
(10, 'lkovacik', 'Ľubomír', 'Kováčik ml.', '801026/6770', '26.10.1980', 'Jókayho', '429/17', 'Štitáre', '95101', '0903368572', NULL, 'kovacikl@gmail.com', NULL, '$2y$10$aEULqRrgo.RTpxkixQLzfeJQxJezfUUWbVwfpW/J2uie76fBLqSgO', 2, 0, NULL, '2021-02-18 17:20:21', '2021-04-10 18:43:12'),
(11, 'jmajzlan', 'Jaroslav', 'Majzlan', '490222/188', '22.2.1949', 'Mierová', '1185/28', 'Tornaľa', '98201', '0911868823', '475523786', 'jaroslavmajzlan@gmail.com', NULL, '$2y$10$a9Ey7gU6/Cz.UjGc9gPhXeCwUvGyg6GW4.8ONj1j.9nOTxa690Zga', 2, 0, NULL, '2021-02-18 17:20:21', '2021-04-10 15:19:58'),
(12, 'rmakoviny', 'Róbert', 'Makovíny', '690320/8279', '20.3.1969', 'Školská', '84', 'Zvolen', '96001', '0911868823', NULL, 'bat24@post.sk', NULL, '$2y$10$ac.Uwl8zk1jcyHURrMTdR.UDWRCbQECJx1gC4TlgsKCx.fC3Imrf2', 2, 0, NULL, '2021-02-18 17:20:21', '2021-02-18 17:20:21'),
(13, 'jmoravcik', 'Jozef', 'Moravčík', '90312/221', '12.3.1949', 'Sandrická', '17', 'Žarnovica', '96681', '0905680769', NULL, 'appolojetsro@gmail.com', NULL, '$2y$10$91vQOSo0/kCMVEENqjYysePYbB.85ObtbG3WS9xQG2oGjAujAsfNe', 2, 0, NULL, '2021-02-18 17:20:22', '2021-04-10 18:21:42'),
(14, 'mnagy', 'Milan', 'Nagy', '550525/2544', '25.5.1955', 'Prachatická', '2255/37', 'Zvolen', '96001', '0905229374', NULL, 'nagymilanzv@gmail.com', NULL, '$2y$10$K2qvq2Ffe86cukSyWOf6au1CJZ682pp8djtyLBHfp5gNxBnnGz3fa', 2, 0, NULL, '2021-02-18 17:20:22', '2021-02-18 17:20:22'),
(15, 'rpestun', 'Rastislav', 'Pestún', NULL, '24.10.1987', 'Zábranie', '10', 'Hlohovec', '92001', '0904644871', NULL, 'Rasto.pestun@gmail.com', NULL, '$2y$10$F6oTR09ArMnMkQ0FJmMrlOre5CA/1TGyS3nNzqNo0eKzsnXUJQ3TO', 2, 0, NULL, '2021-02-18 17:20:22', '2021-02-18 17:20:22'),
(16, 'sstacho', 'Štefan', 'Stacho', '610609/6183', '9.6.1961', 'Slnečná', '3', 'Palárikovo', '94111', '0948510602', '356493671', 'stachostefan@gmail.com', NULL, '$2y$10$A0PavvziyoH7b0ecVuaiDe.2jAS5BpbZirYtq/WIoNd/KSb1sMHaC', 2, 0, NULL, '2021-02-18 17:20:22', '2021-02-18 17:20:22'),
(17, 'msenkyr', 'Miroslav', 'Šenkýr', '560501/6032', '1.5.1956', 'Vrbovská cesta', '26', 'Piešťany', '92101', '0903388628', '337623343', NULL, NULL, '$2y$10$MewnHeJMl1UhicLfdHgqQORKsA9XcjCRHl.NAgGCxv1dYsqDAjXte', 2, 0, NULL, '2021-02-18 17:20:22', '2021-02-18 17:20:22'),
(18, 'msiska', 'Milan', 'Šiška', '541031/2919', '31.10.1954', 'Rovniakova', '3908/4', 'Bratislava', NULL, NULL, NULL, NULL, NULL, '$2y$10$vSfxAA82fKlaPhvXqhNEr.v.zDNme7vzY/AoobJrh5xR1UioFHP4.', 2, 0, NULL, '2021-02-18 17:20:22', '2021-04-10 18:45:43'),
(19, 'jvanco', 'Ján', 'V....', '580604/6686', '4.6.1958', 'Tolstého', '12', 'Lučenec', '98403', '0903417661', '474320715', 'vanco.jan@gmail.com', NULL, '$2y$10$GwmgQ7.3G2eTWuBzzf9px.67ElCHbQEMVZYtpWpwYYq/J3j7qCyy.', 2, 1, NULL, '2021-02-18 17:20:22', '2021-04-11 13:37:21'),
(20, 'mvasko', 'Marián', 'Vaško', '560911/7360', '11.9.1956', 'Čajkovského', '11', 'Nitra', '94911', '0908417660', NULL, NULL, NULL, '$2y$10$FAglEtc0BTFTgNKfpHspCuNCWh3bxmIOSszKztIggNI4F5GWMth7C', 2, 0, NULL, '2021-02-18 17:20:22', '2021-04-10 19:16:32'),
(21, 'rzozulak', 'Radoslav', 'Zozulák', '730920/9369', '20.9.1973', 'Moravská', '23', 'Košice', '04001', '0911427427', NULL, 'rado.zozulak@goldwing.aero', NULL, '$2y$10$mcujrvFyouZYEWl3DSLYT.rlxPRDPK76Ju.xNjOfVp7aAy3MM57lS', 2, 0, NULL, '2021-02-18 17:20:22', '2021-02-18 17:20:22'),
(22, 'pciger', 'Peter', 'Cíger', NULL, '29.5.1961', 'Golianova', '3908/13', 'Banská Bystrica', '97401', '0905235559', NULL, 'petociger@gmailo.com', NULL, '$2y$10$nQKTDFSJEbOQLNhjClBRBOF8saSq/o1QBmmErzxuzLBCfbJEs/1qy', 2, 0, NULL, '2021-02-18 17:20:22', '2021-02-18 17:20:22'),
(23, 'mszabo', 'Marián', 'Szabó', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$k3qSeNIJIZLaMg65HST/u.vpDBDR6LfAB9gsQIg2p7vir6koeZuia', 2, 0, NULL, '2021-02-18 17:20:22', '2021-04-08 12:11:16'),
(32, 'mvozar', 'Martin', 'Vozár', NULL, '13.5.1978', 'Kostolná', '153', 'Dolné Lefantovce', '95145', '0907868366', NULL, 'matovozar@gmail.com', NULL, '$2y$10$j9Dhw5H.RpFWESQfB53AWeh2rL3gs7G/jub.ik5Juj6clf9jbnnL2', 1, 0, NULL, '2021-03-08 17:45:55', '2021-04-11 08:16:32'),
(33, 'stomecek', 'Samuel', 'Tomeček', NULL, '22.5.1986', 'Iľjušinova', '12', 'Bratislavva', '85101', '0948626322', NULL, 'samotomecek@gmail.com', NULL, '$2y$10$Hvii3HMI3MMSfnLkYf9o8uCo.TAkvYR2XE8neidSHucv3xhuJNMGe', 1, 0, NULL, '2021-03-08 17:45:55', '2021-04-10 19:16:59'),
(34, 'avondrak', 'Andrej', 'V......', NULL, '13.6.1981', 'Inovecká', '25A', 'Nitra', '94901', '0902909498', NULL, 'avondo13@yahoo.com', NULL, '$2y$10$Pmo3uKz9v1a1vKkrCWgJPevVZap.ujW3FwcguhEQkfTTFLe780dum', 1, 0, NULL, '2021-03-08 17:45:55', '2021-04-11 10:00:52'),
(35, 'msokol', 'Michal', 'Sokol', NULL, '11.10.1989', 'Čierne nad Topľou', '235', 'Čierne nad Topľou', '09434', '0915859408', NULL, 'michal.sokol.uk@gmail.com', NULL, '$2y$10$Wxp1wJZ8iaq27EmdC862leB1ZLlxELHeUJbTBnBUxPfjLTh1GnPz6', 1, 0, NULL, '2021-03-08 17:45:56', '2021-03-08 17:45:56'),
(36, 'jkubik', 'Jozef', 'Kubík', NULL, '5.5.1973', 'Senická cesta', '4559/29', 'Banská Bystrica', '97401', '', NULL, 'jozef.kubík@gmail.com', NULL, '$2y$10$QZm3WslzSkTGvABFAigD8uCq/VetsthslyMn/0nwG.MrGnsYiEs/K', 1, 0, NULL, '2021-03-08 17:45:56', '2021-03-08 17:45:56'),
(37, 'rsmalik', 'Richard', 'Šmálik', NULL, '17.2.1978', 'J. Kozačeka', '2068/29', 'Zvolen', '96001', '0907813482', NULL, '', NULL, '$2y$10$cPh4YrGDBlc9eu2zeY501egOU.pkdHSzJfnllRSJLKwPWeT86mkOW', 1, 0, NULL, '2021-03-08 17:45:56', '2021-03-08 17:45:56'),
(38, 'amartincova', 'Alexandra', 'M.........', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$rWNtolWC8QI6xxjIlgARveRc262UZG0Xm7NAPR2qWjSpQYGx6kbfO', 1, 1, NULL, '2021-03-08 17:45:56', '2021-04-11 09:32:04'),
(39, 'mgazdik', 'Michal', 'Gazdík', NULL, '10.8.1977', 'Dubovská', '404/18', 'Dobrá Niva', '96261', '', NULL, 'mgazdik', NULL, '$2y$10$AzhvfG5fTR042XlX5N/f/eRNN9NaYnplbFIg3trVOT5NRXC.MpUzK', 1, 0, NULL, '2021-03-08 18:05:58', '2021-03-08 18:05:58'),
(40, 'osvoren', 'Ondrej', 'Svoreň', NULL, '16.8.2000', 'Zončekova', '5', 'Nitra', '94901', '0918267594', NULL, 'andrejsvoren@gmail.com', NULL, '$2y$10$dXTREqeAd7fr53/C5AsMNebxvJk72S3Zqb95SFR/2xJV05ehibOMm', 1, 0, NULL, '2021-03-08 18:05:58', '2021-03-08 18:05:58'),
(41, 'fceri', 'Filip', 'Čeri', NULL, '8.12.1994', 'Ovocinárska', '37', 'Nitra', '94901', '0918247698', NULL, 'filip.ceri@centrum.sk', NULL, '$2y$10$HM77N96U7Qe.quBE2cVT8.Z952jzfRmOKA97cKjlZVktrlFIRgmCW', 1, 0, NULL, '2021-03-08 18:05:58', '2021-03-08 18:05:58'),
(42, 'jgucky', 'Jozef', 'Gúcky', NULL, '7.8.1998', 'Hlboká', '4206/9', 'Nové Zámky', '94062', '0908063232', NULL, 'j.gucky7@vgmail.com', NULL, '$2y$10$RagSBLzAgX76ZJGK726r4usyK/aEOOv8IrC/9atsjh0JRdyUspW1W', 1, 0, NULL, '2021-03-08 18:05:58', '2021-03-08 18:05:58'),
(43, 'jstupar', 'Jozef', 'Stupár', NULL, '23.11.1972', 'Puškinova', '1688/77', 'Poprad- Matejovce', '05951', '0903990707', NULL, 'jozuepp@gmail.com', NULL, '$2y$10$KLEpFU6C/M.EKKoHWR62yOnK4WAmNvgFbc49tPnal5I3zwrDo/TZK', 1, 0, NULL, '2021-03-08 18:05:58', '2021-03-08 18:05:58'),
(44, 'mpolesensky', 'Marek', 'Polešenský', NULL, '22.6.1987', 'Sitnianska', '6596/11', 'Banská Bystrica- Sásová', '97401', '', NULL, 'mpolesensky', NULL, '$2y$10$SD4todADoSFaf9hl.Z89oO/.lVSeVvR7uoVqqLfFu/oVCUaRDcXFi', 1, 0, NULL, '2021-03-08 18:05:58', '2021-03-08 18:05:58'),
(45, 'fgergely', 'Filip', 'Gergely', NULL, '15.7.1988', 'Kasalova', '27', 'Nitra', '94901', '0911401037', NULL, 'fgergely', NULL, '$2y$10$ynv.0esVPbbMj6n51HRxquQ2C4a.Jw0XVmVf96R3ycU8qh7AMr3zi', 1, 0, NULL, '2021-03-08 18:05:58', '2021-03-08 18:05:58'),
(46, 'kcernak', 'Kristián', 'Černák', NULL, '15.5.1996', 'MDŽ', '3', 'Šurany', '94201', '0908606014', NULL, 'cernak.kiko@gmail.com', NULL, '$2y$10$g293T3S6cxgQB6G90r8BFe1Ztg2nljKZu2vY4CQAzs0EbtY2uhh6i', 1, 0, NULL, '2021-03-08 18:05:58', '2021-03-08 18:05:58'),
(47, 'eantal', 'Emanuel', 'Antal', NULL, '30.11.1980', 'J. Wolker', '1306/32', 'Spišská Nová Ves', '05201', '', NULL, 'emanuel.antal@gmail.com', NULL, '$2y$10$0XErnCids1Za3ePEU9b1OudA2GNOSiQohtDDjozEH8YMR0vvF4H/O', 1, 0, NULL, '2021-03-08 18:05:58', '2021-03-08 18:05:58'),
(48, 'pbokora', 'Peter', 'Bokora', NULL, '18.5.1986', 'Šomodská', '1341/1', 'Hlohovec', '92001', '', NULL, 'pbokora', NULL, '$2y$10$4oifx.49dLl4negU/luqK.mf8MeQJRN39I74Lz50UivzKNGPA72D2', 1, 0, NULL, '2021-03-08 18:05:58', '2021-03-08 18:05:58'),
(49, 'sbalaz', 'Štefan', 'Baláž', NULL, '7.7.2001', 'Záborské', '20', 'Záborské', '08253', '0948176456', NULL, 'waterlo627@gmail.com', NULL, '$2y$10$hFIrRDBEAFwdmDOokoLEuuaogHPQ1w91pJ6.L7CaC5gbh0KZOOzlu', 1, 0, NULL, '2021-03-08 18:05:58', '2021-03-08 18:05:58'),
(50, 'rkosoru', 'Roman', 'Kosoru', NULL, '23.5.1974', 'Mostná', '1', 'Nitra', '94901', '0902440044', NULL, 'Roman.kosoru@gmail.com', NULL, '$2y$10$lvDRGqEs3egpMG9bk5uCVuLL1BueMpryg/OB36vghFeLlia6F.ZuC', 1, 0, NULL, '2021-03-08 18:05:58', '2021-03-08 18:05:58'),
(68, 'jkovacik', 'Július', 'Kováčik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kovacik.duso@gmail.com', NULL, '$2y$10$uHtO4i.j.HMCtG3LNgjHVe8otvOIfA/k5s4D3.yBEN67wEgfJ9w/C', 3, 0, NULL, '2021-04-08 19:41:33', '2021-04-08 19:41:33'),
(69, 'riaditel1', 'Riaditel', 'Riaditel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'riaditel@gmail.com', NULL, '$2y$10$Eo/0OISg/WFCWVnGdDoxLOgholt621OuK.f/RTU6PmRDtXDDdB4hG', 3, 0, NULL, '2021-04-10 16:36:13', '2021-04-10 16:36:13'),
(70, 'pilot1', 'Pilot', 'Pilot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pilot@gmail.com', NULL, '$2y$10$Zld8542datC39RL3EmJqNepOTz5go.GQ/6oupfIJXyLqN9/c77bb2', 2, 0, NULL, '2021-04-10 16:36:13', '2021-04-10 20:10:22'),
(71, 'ziak1', 'Ziak', 'Ziak', NULL, NULL, NULL, NULL, 'Nitra', NULL, NULL, NULL, 'ziak@gmail.com', NULL, '$2y$10$EHdKSjk/C3jiQ.Xv5SRZz.jUZ4lHZTpDcjd8oTEtfadd3Crypm36O', 1, 0, NULL, '2021-04-10 16:36:13', '2021-04-11 09:49:35');

-- --------------------------------------------------------

--
-- Table structure for table `ziaktickets`
--

CREATE TABLE `ziaktickets` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `preukaz_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preukaz_num` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sep` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sep_to` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `zdrav_sp1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zdrav_sp1_to` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `zdrav_sp2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zdrav_sp2_to` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `radio_has` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `radio_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `radio_num` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `radio_unl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `radio_to` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ziaktickets`
--

INSERT INTO `ziaktickets` (`id`, `user_id`, `preukaz_type`, `preukaz_num`, `sep`, `sep_to`, `zdrav_sp1`, `zdrav_sp1_to`, `zdrav_sp2`, `zdrav_sp2_to`, `radio_has`, `radio_type`, `radio_num`, `radio_unl`, `radio_to`, `created_at`, `updated_at`) VALUES
(4, 38, 'PPL', 'SVK FCL 12345678', '1', '16-06-2021', '1', '16-03-2021', '1', '14-03-2021', '1', 'Všeobecný', 'VVR 00/2006', '1', NULL, '2021-04-10 19:19:10', '2021-04-11 09:51:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absolvents`
--
ALTER TABLE `absolvents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pilottickets`
--
ALTER TABLE `pilottickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `ziaktickets`
--
ALTER TABLE `ziaktickets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absolvents`
--
ALTER TABLE `absolvents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pilottickets`
--
ALTER TABLE `pilottickets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `ziaktickets`
--
ALTER TABLE `ziaktickets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
