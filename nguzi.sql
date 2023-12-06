-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 05:19 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nguzi`
--

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
(5, '2023_12_06_135550_create_services_table', 1);

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `slung` varchar(255) NOT NULL,
  `meta` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `category`, `slung`, `meta`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Precision in Numbers: Tailored Accounting Services for Your Financial Success', 'Acounting Services', 'acounting-services', '', 'Welcome to Nguzi & Associates, your trusted partner in redefining financial excellence through our premier Accounting as a Service (AaaS). At Nguzi, we understand that managing finances is a critical aspect of any successful business, and our dedicated team is here to streamline your accounting processes with precision and expertise.\r\n\r\nOur Accounting as a Service is more than just number-crunching; it\'s a comprehensive solution tailored to meet the unique needs of your business. From meticulous bookkeeping and financial reporting to strategic financial planning, we go beyond the basics to provide insights that empower your decision-making.\r\n\r\nWith Nguzi & Associates, you gain access to a team of seasoned professionals who are committed to accuracy, transparency, and efficiency. We leverage cutting-edge technology and industry best practices to ensure your financial records are not only compliant but also serve as a strategic asset for your business growth.\r\n\r\nExperience peace of mind as we handle the complexities of accounting, allowing you to focus on what you do best – driving your business forward. Nguzi & Associates is your dedicated partner in financial success, providing Accounting as a Service that goes beyond the numbers. Welcome to a new era of financial excellence. Welcome to Nguzi & Associates.', 'accounting.jpg', NULL, NULL),
(2, 'Precision in Finance: Comprehensive Tax Services for Your Financial Success', 'Tax Services', 'tax-services', '', 'Our dedicated team of experts at Nguzi & Associates understands the critical role that sound tax management plays in the success of businesses and individuals alike. With a commitment to excellence, we offer comprehensive tax services tailored to meet your unique needs. Whether you are a small business, a startup, or an established enterprise, our seasoned professionals are here to provide strategic insights and personalized solutions to optimize your tax position.\r\n<br><br>\r\nAt Nguzi & Associates, we pride ourselves on staying abreast of the ever-evolving tax landscape. Our services extend beyond mere compliance; we aim to proactively identify opportunities to minimize tax liabilities and maximize your financial efficiency. From individual tax planning to corporate tax strategy, our seasoned tax consultants are equipped with the knowledge and expertise to guide you through the intricacies of tax regulations, ensuring compliance while optimizing your financial outcomes.\r\n<br><br>\r\nDiscover peace of mind and financial empowerment with Nguzi & Associates. As your dedicated tax partner, we are committed to delivering transparent, reliable, and client-centric tax services. Whether you seek assistance with tax preparation, strategic planning, or resolution of complex tax issues, Nguzi & Associates is here to ensure that your financial interests are safeguarded and your tax strategy aligns seamlessly with your broader business objectives.', 'pexels-nataliya-vaitkevich-6863186.jpg', NULL, NULL),
(3, 'Navigating Assurance: The Crucial Role of Internal Audit in Organizational Integrity', 'Internal Audit', 'internal-audit', '', 'Welcome to Nguzi & Associates, where precision meets assurance in our comprehensive Internal Audit services. As a trusted partner, we understand the critical role internal auditing plays in enhancing organizational resilience and ensuring robust governance. Our seasoned team of auditors brings a wealth of expertise to the table, meticulously examining your internal processes, risk management protocols, and compliance frameworks. At Nguzi & Associates, we go beyond the conventional audit process – we are committed to providing insights that empower your organization to optimize operations, fortify controls, and navigate the complex landscape of regulatory compliance with confidence.\r\n<br><br>\r\nOur Internal Audit services at Nguzi & Associates are tailored to meet the unique needs of your business. Leveraging a proactive and risk-focused approach, we work collaboratively with your team to identify potential vulnerabilities and opportunities for improvement. Through a combination of cutting-edge technology and industry best practices, we not only detect potential issues but also offer strategic recommendations for enhancing efficiency and mitigating risks. Whether you are a multinational corporation or a growing enterprise, Nguzi & Associates is your dedicated partner in fortifying the foundations of your business through meticulous Internal Audit services.\r\n<br><br>\r\nNguzi & Associates takes pride in our commitment to excellence and client satisfaction. With a client-centric focus, we prioritize transparency, open communication, and a results-driven mindset. Our Internal Audit services are designed not only to meet regulatory requirements but to serve as a catalyst for organizational growth. Join hands with Nguzi & Associates, and let us embark on a journey of elevating your internal controls, risk management, and overall governance to new heights.', 'pexels-pixabay-265087.jpg', NULL, NULL),
(4, 'Reclaiming Financial Harmony: Expert Debt Collection Solutions', 'Debt Collection', 'debt-collection', '', 'Welcome to Nguzi & Associates, your trusted partner in comprehensive debt collection solutions. At Nguzi & Associates, we understand the critical role that efficient debt recovery plays in maintaining your financial stability. With a proven track record and a team of seasoned professionals, we specialize in providing tailored debt collection services that prioritize both results and client satisfaction.\r\n<br><br>\r\nOur approach at Nguzi & Associates is rooted in a commitment to ethical practices and legal compliance. We recognize the sensitivity of debt recovery and prioritize respectful communication to preserve relationships while ensuring the retrieval of outstanding debts. Leveraging cutting-edge technology and industry expertise, we streamline the debt collection process, offering transparent and efficient solutions that meet the unique needs of each client.\r\n<br><br>\r\nNguzi & Associates goes beyond the conventional debt collection service, aiming to be your strategic ally in financial recovery. We pride ourselves on delivering personalized, client-centric solutions that align with your specific goals and challenges. Whether you are a business seeking to recover outstanding payments or an individual navigating financial complexities, Nguzi & Associates is here to provide reliable, effective, and ethical debt collection services tailored to your unique circumstances.', 'pexels-towfiqu-barbhuiya-9882203.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
