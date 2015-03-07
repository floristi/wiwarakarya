-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 07 Mar 2015 pada 06.10
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `wiwarakarya`
--
CREATE DATABASE IF NOT EXISTS `wiwarakarya` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wiwarakarya`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `applicants`
--

CREATE TABLE IF NOT EXISTS `applicants` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `last_education` text,
  `cv_path` text,
  `pob` text,
  `dob` date DEFAULT NULL,
  `is_premium` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `applicants`
--

INSERT INTO `applicants` (`id`, `name`, `last_education`, `cv_path`, `pob`, `dob`, `is_premium`) VALUES
(6, 'First User', 'S1', NULL, 'Jakarta', '1988-02-02', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `applications`
--

CREATE TABLE IF NOT EXISTS `applications` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `applicant_id` bigint(20) NOT NULL,
  `job_id` bigint(20) NOT NULL,
  `status` text NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `phone` text NOT NULL,
  `contact_name` text NOT NULL,
  `status` int(11) NOT NULL,
  `description` text NOT NULL,
  `photo_url` text NOT NULL,
  `email` text NOT NULL,
  `web` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `companies`
--

INSERT INTO `companies` (`id`, `name`, `address`, `city`, `phone`, `contact_name`, `status`, `description`, `photo_url`, `email`, `web`) VALUES
(1, 'PT Astra International, Tbk.', 'Jalan Gaya Motor Raya, Jakarta Utara', 'Jakarta', '0812345678', 'Setyawan Eko', 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 'career@astra-international.com', '0'),
(2, 'PT Badr Interactive', 'Jalan Juanda Raya, Depok', 'Depok', '0812345678', '  Carson Sammie', 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '', 'career@badr-interactive.com', '0'),
(3, 'Samsung R&D Institute Indonesia', 'Wisma GKBI lt 26, Jalan Sudirman, Jakarta', 'Jakarta', '0213456789', '  Sal Mickey', 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '', 'career@samsungmsci.com', '0'),
(4, 'PT Integrasi Logistik Cipta Solusi', 'Jalan Yos Sudarso, Jakarta', 'Jakarta', '021345678', '  Leigh Terry', 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '', 'career@ilcs.com', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `location` text NOT NULL,
  `time` datetime NOT NULL,
  `quota` int(11) NOT NULL,
  `speaker` text NOT NULL,
  `price` text NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `quota_remaining` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `name`, `description`, `location`, `time`, `quota`, `speaker`, `price`, `created_by`, `quota_remaining`) VALUES
(1, 'Job Fair & Expo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'Jakarta Convention Center, Hall B', '2015-04-10 08:00:00', 100, '  Florence Shelly', '100000', 4, 100),
(2, 'Career Path Talk & Seminar', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'Hotel Grand Sahid, Sriwijaya Ballroom', '2015-04-20 08:00:00', 200, '  Jules Beverly', '200000', 3, 200);

-- --------------------------------------------------------

--
-- Struktur dari tabel `event_registrations`
--

CREATE TABLE IF NOT EXISTS `event_registrations` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `event_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `position` text NOT NULL,
  `position_category` text NOT NULL,
  `due_date` datetime NOT NULL,
  `major` text NOT NULL,
  `last_education` text NOT NULL,
  `salary` text NOT NULL,
  `tnc` text NOT NULL,
  `created_by` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `position`, `position_category`, `due_date`, `major`, `last_education`, `salary`, `tnc`, `created_by`) VALUES
(1, 'Android Developer', 'IT ', 'Staff ', '2015-12-10 23:59:00', 'Computer Science', 'S1', '5000000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 3),
(2, 'System Analyst', 'IT  ', 'Assistant Manager', '2015-12-10 23:59:00', 'Computer Science', 'S1', '6000000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 1),
(3, 'IT Strategic and Planning', 'IT', 'Senior Staff', '2015-04-29 23:59:00', 'Information System', 'S1', '10000000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 4),
(4, 'Public Relation', 'Marketing', 'Manager', '2015-04-15 23:59:00', 'Communication', 'S2', '8000000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 2),
(5, 'Network Engineer', 'IT', 'Staff', '2015-04-20 23:59:00', 'Computer Science', 'S1', '4000000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 3),
(6, 'Quality Assurance', 'IT', 'Senior Staff', '2015-04-10 23:59:00', 'Information Technology', 'S1', '4000000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` text NOT NULL,
  `role` varchar(20) NOT NULL,
  `applicant_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `applicants_applicant_id_fk` (`applicant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`, `role`, `applicant_id`) VALUES
(8, 'admin', 'admin', '', 'ADMIN', 0),
(9, 'user1', 'user1', '0', 'APPLICANT', 6);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
