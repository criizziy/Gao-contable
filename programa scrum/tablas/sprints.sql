-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-03-2016 a las 20:04:12
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
-- Estructura de tabla para la tabla `sprints`
--

CREATE TABLE `sprints` (
  `id_sprint` int(11) NOT NULL,
  `txtSprint` varchar(400) NOT NULL,
  `tiempo` varchar(10) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sprints`
--

INSERT INTO `sprints` (`id_sprint`, `txtSprint`, `tiempo`, `cargo`, `estado`) VALUES
(1, 'Nueva Sprint', '0', 'Ninguno', 'Planeando'),
(2, 'Nueva Sprint', '0', 'Ninguno', 'Planeando'),
(3, 'Nueva Sprint', '0', 'Ninguno', 'Planeando'),
(4, 'Nueva Sprint', '0', 'Ninguno', 'Planeando'),
(5, 'Nueva Sprint', '0', 'Ninguno', 'Planeando'),
(6, 'Nueva Sprint', '0', 'Ninguno', 'Planeando'),
(7, 'Nueva Sprint', '0', 'Ninguno', 'Planeando'),
(8, 'Nueva Sprint', '0', 'Ninguno', 'Planeando'),
(9, 'Nueva Sprint', '0', 'Ninguno', 'Planeando'),
(10, 'Nueva Sprint', '0', 'Ninguno', 'Planeando'),
(11, 'Nueva Sprint', '0', 'Ninguno', 'Planeando'),
(12, 'Nueva Sprint', '0', 'Ninguno', 'Planeando'),
(13, 'Nueva Sprint', '0', 'Ninguno', 'Planeando'),
(14, 'Nueva Sprint', '0', 'Ninguno', 'Planeando'),
(15, 'Nueva Sprint', '0', 'Ninguno', 'Planeando');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `sprints`
--
ALTER TABLE `sprints`
  ADD UNIQUE KEY `id_sprint` (`id_sprint`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `sprints`
--
ALTER TABLE `sprints`
  MODIFY `id_sprint` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
