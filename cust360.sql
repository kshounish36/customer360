-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 12:53 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cust360`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `balance` double NOT NULL,
  `total_debit_due` double NOT NULL,
  `exported_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contract_vehicles`
--

CREATE TABLE `contract_vehicles` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `contract_id` int(11) NOT NULL,
  `license_plate` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_versions`
--

CREATE TABLE `customer_versions` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_private` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `phone_home` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_business` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_mobile` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_versions`
--

INSERT INTO `customer_versions` (`id`, `customer_id`, `firstname`, `surname`, `email_private`, `date_of_birth`, `phone_home`, `phone_business`, `phone_mobile`, `street`, `house_number`, `zip`, `city`, `country_id`) VALUES
(1, 1, 'Prasanna', 'Mondal', 'prasannawitcher@gmail.com', '1989-07-18', '9836240762', '9836240762', '9836240762', 'Diamond Harbor Road', '127/3/1', '700063', 'Kolkata', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20211209105307', '2021-12-09 11:53:21', 55);

-- --------------------------------------------------------

--
-- Table structure for table `product_versions`
--

CREATE TABLE `product_versions` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `contract_invoice_cycle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_invoice_cycle_interval` int(11) DEFAULT NULL,
  `contract_invoice_cycle_interval_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contractinitial_duration` int(11) NOT NULL,
  `contractinitial_duration_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_extensiontime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_extensiontime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_cancellation_time_period` int(11) DEFAULT NULL,
  `contract_cancellation_time_period_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contract_vehicles`
--
ALTER TABLE `contract_vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_versions`
--
ALTER TABLE `customer_versions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `product_versions`
--
ALTER TABLE `product_versions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contract_vehicles`
--
ALTER TABLE `contract_vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_versions`
--
ALTER TABLE `customer_versions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_versions`
--
ALTER TABLE `product_versions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
