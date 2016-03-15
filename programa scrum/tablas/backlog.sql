-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-03-2016 a las 20:04:41
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `scrum`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `backlog`
--

CREATE TABLE `backlog` (
  `id_historias` int(11) NOT NULL,
  `txtHistoria` varchar(400) NOT NULL,
  `tiempo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `backlog`
--

INSERT INTO `backlog` (`id_historias`, `txtHistoria`, `tiempo`) VALUES
(1, 'Historia', '0'),
(2, 'Historia', '0'),
(3, 'Historia', '0'),
(4, 'Historia', '0'),
(5, 'Historia', '0'),
(6, 'Historia', '0'),
(7, 'Historia', '0'),
(8, 'Historia', '0'),
(9, 'Historia', '0'),
(10, 'Historia', '0'),
(11, 'Historia', '0'),
(12, 'Historia', '0'),
(13, 'Historia', '0'),
(14, 'Historia', '0'),
(15, 'Historia', '0'),
(16, 'Historia', '0'),
(17, 'Historia', '0'),
(18, 'Historia', '0'),
(19, 'Historia', '0'),
(20, 'Historia', '0'),
(21, 'Historia', '0'),
(22, 'Historia', '0'),
(23, 'Historia', '0'),
(24, 'Historia', '0'),
(25, 'Historia', '0'),
(26, 'Historia', '0'),
(27, 'Historia', '0'),
(28, 'Historia', '0'),
(29, 'Historia', '0'),
(30, 'Historia', '0'),
(31, 'Historia', '0'),
(32, 'Historia', '0'),
(33, 'Historia', '0'),
(34, 'Historia', '0'),
(35, 'Historia', '0'),
(36, 'Historia', '0'),
(37, 'Historia', '0'),
(38, 'Historia', '0'),
(39, 'Historia', '0'),
(40, 'Historia', '0'),
(41, 'Historia', '0'),
(42, 'Historia', '0'),
(43, 'Historia', '0'),
(44, 'Historia', '0'),
(45, 'Historia', '0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `backlog`
--
ALTER TABLE `backlog`
  ADD UNIQUE KEY `id_historias` (`id_historias`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `backlog`
--
ALTER TABLE `backlog`
  MODIFY `id_historias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
