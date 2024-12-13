-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Dez-2024 às 09:23
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `neuara`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `date_start` date NOT NULL,
  `max_student` int(11) NOT NULL,
  `description` text NOT NULL,
  `level` varchar(255) NOT NULL,
  `photo` blob NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `courses`
--

INSERT INTO `courses` (`id`, `category_id`, `department_id`, `price`, `duration`, `date_start`, `max_student`, `description`, `level`, `photo`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 4700.00, '8 meses', '2023-06-19', 150, 'curso', 'Avançado', 0x3030302e4a5047, NULL, '2023-06-16 08:36:03'),
(3, 3, 2, 1500.00, '4 meses', '2023-06-05', 30, 'Informar', 'Médio', 0x62616e6e65722e6a7067, '2023-06-16 08:37:08', '2023-06-16 08:37:08'),
(4, 3, 3, 10.00, '4 meses', '2023-06-27', 30, 'vvvbbbbbb', 'Médio', 0x5f4c6f67696e20536f7374656d2e4a5047, '2023-06-27 08:12:13', '2023-06-27 08:12:13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `course_categories`
--

CREATE TABLE `course_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `course_categories`
--

INSERT INTO `course_categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Programação C#', NULL, NULL),
(2, 'Programação Java- Orientado a objeto', NULL, NULL),
(3, 'Programação Python- Orientado a objeto', NULL, NULL),
(4, 'Redes de computadores', NULL, NULL),
(5, 'Programação gráfica', NULL, NULL),
(6, 'Visual Basic', '2023-06-22 07:15:01', '2023-06-22 07:15:01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `head_dept` varchar(255) NOT NULL,
  `starting_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `departments`
--

INSERT INTO `departments` (`id`, `name`, `head_dept`, `starting_date`, `created_at`, `updated_at`) VALUES
(1, 'CNE', 'Armando Confusio', '2023-06-20', NULL, NULL),
(2, 'TICS2', 'Cláudio  Nhacale', '2023-06-05', NULL, '2023-06-21 20:28:22'),
(3, 'TCT', 'Bilbão Milionário', '2023-06-04', '2023-06-21 20:21:23', '2023-06-21 20:21:23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
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
-- Estrutura da tabela `lerssons`
--

CREATE TABLE `lerssons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_start` date NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pendente ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `lerssons`
--

INSERT INTO `lerssons` (`id`, `course_id`, `title`, `description`, `date_start`, `status`, `created_at`, `updated_at`) VALUES
(4, 3, 'Estruturas de repetição', 'estudare tudo relacionados com repetição de dados', '2023-06-24', 'Pendente', '2023-06-22 16:36:27', '2023-06-22 16:36:27'),
(5, 3, 'Estruturas de repetição', 'dd', '2023-06-20', 'Concluído', '2023-06-22 16:42:09', '2023-06-22 16:59:48');

-- --------------------------------------------------------

--
-- Estrutura da tabela `matriculations`
--

CREATE TABLE `matriculations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Student_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pendente',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `matriculations`
--

INSERT INTO `matriculations` (`id`, `Student_id`, `course_id`, `payment_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 5, 'E-mola', 'Concluído', '2023-06-15 12:27:06', '2023-06-15 12:33:25'),
(2, 1, 5, 'Conta Bancária', 'Pendente', '2023-06-27 06:58:11', '2023-06-27 06:58:11'),
(3, 4, 5, 'M-pesa', 'Pendente', '2023-06-27 07:07:52', '2023-06-27 07:07:52'),
(4, 4, 3, 'M-pesa', 'Pendente', '2023-06-27 07:30:04', '2023-06-27 07:30:04'),
(5, 1, 2, 'Conta Bancária', 'Pendente', '2023-06-27 07:49:38', '2023-06-27 07:49:38'),
(6, 1, 3, 'M-pesa', 'Pendente', '2023-06-27 07:52:19', '2023-06-27 07:52:19'),
(7, 1, 2, 'M-pesa', 'Pendente', '2023-06-27 08:16:38', '2023-06-27 08:16:38');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_05_031603_create_students_table', 1),
(6, '2023_06_11_150041_create_departments_table', 2),
(7, '2023_06_11_150148_create_course_categories_table', 2),
(8, '2023_06_11_151331_create_courses_table', 3),
(9, '2023_06_11_152438_create_professors_table', 4),
(10, '2023_06_11_152452_create_lerssons_table', 4),
(11, '2023_06_11_152654_create_matriculations_table', 4),
(12, '2023_06_11_183411_create_curses_table', 5),
(13, '2023_06_15_141431_create_matriculations_table', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
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
-- Estrutura da tabela `professors`
--

CREATE TABLE `professors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(170) NOT NULL,
  `access_level` varchar(50) NOT NULL DEFAULT 'normal',
  `contact` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `date_birth` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `professors`
--

INSERT INTO `professors` (`id`, `department_id`, `course_id`, `name`, `email`, `password`, `access_level`, `contact`, `city`, `country`, `date_birth`, `created_at`, `updated_at`) VALUES
(6, NULL, NULL, 'Nélia Machava', 'nelia@gmail.com', 'dfdfdf', 'normal', 863733644, 'Chibuto', 'Moçambique', '2003-06-27', '2023-06-21 19:45:10', '2023-06-21 19:45:10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(160) NOT NULL,
  `access_level` varchar(50) NOT NULL DEFAULT 'normal',
  `contact` int(12) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `registration_date` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `password`, `access_level`, `contact`, `city`, `country`, `date_of_birth`, `registration_date`, `created_at`, `updated_at`) VALUES
(1, 'Shelton', 'dd@gmail.com', 'kjjkj', 'normal', 871212345, 'nnbnbbbn', 'Moçambique', '20001127', '20001127', '2023-06-05 04:13:32', '2024-12-01 02:10:06'),
(4, 'Pedro', 'pedro@gmail.com', '111111', 'normal', 884536362, 'Xai-xai', 'Moçambique', '13-04-2001', '12-07-2022', '2023-06-13 06:37:52', '2023-06-13 06:37:52'),
(5, 'Feliciano', 'feliciano@gmail.com', '1234567', 'normal', 0, 'Xai-Xai', 'Gaza', '12/02/2002', '01/12/2024', NULL, NULL),
(6, 'Claudio Nanla', 'claudioussimane15@gmail.com', '00000000', 'normal', 846766417, 'Inhambane', 'Moz', '10-07-200', '01-12-2024', '2024-12-01 02:03:34', '2024-12-01 02:03:34');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
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
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fell Neuara', 'neuara@gmail.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_category_id_foreign` (`category_id`),
  ADD KEY `courses_department_id_foreign` (`department_id`);

--
-- Índices para tabela `course_categories`
--
ALTER TABLE `course_categories`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `lerssons`
--
ALTER TABLE `lerssons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lerssons_course_id_foreign` (`course_id`);

--
-- Índices para tabela `matriculations`
--
ALTER TABLE `matriculations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matriculations_course_id_foreign` (`course_id`),
  ADD KEY `matriculations_student_id_foreign` (`Student_id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `professors_email_unique` (`email`),
  ADD UNIQUE KEY `professors_contact_unique` (`contact`),
  ADD KEY `professors_department_id_foreign` (`department_id`),
  ADD KEY `professors_course_id_foreign` (`course_id`);

--
-- Índices para tabela `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`),
  ADD UNIQUE KEY `contact` (`contact`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `course_categories`
--
ALTER TABLE `course_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `lerssons`
--
ALTER TABLE `lerssons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `matriculations`
--
ALTER TABLE `matriculations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `professors`
--
ALTER TABLE `professors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `course_categories` (`id`),
  ADD CONSTRAINT `courses_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

--
-- Limitadores para a tabela `lerssons`
--
ALTER TABLE `lerssons`
  ADD CONSTRAINT `lerssons_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `course_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `matriculations`
--
ALTER TABLE `matriculations`
  ADD CONSTRAINT `matriculations_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `course_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matriculations_student_id_foreign` FOREIGN KEY (`Student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `professors`
--
ALTER TABLE `professors`
  ADD CONSTRAINT `professors_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `professors_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
