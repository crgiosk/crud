-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-04-2019 a las 02:39:33
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `riviera`
--
CREATE DATABASE IF NOT EXISTS `riviera` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `riviera`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagosxrecibo`
--

CREATE TABLE `pagosxrecibo` (
  `PREid` bigint(20) UNSIGNED NOT NULL,
  `PRECid` int(11) NOT NULL,
  `PREvalor` int(11) NOT NULL,
  `PREfecha` date NOT NULL,
  `PREtipo` varchar(1) DEFAULT NULL,
  `PREobservacion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
