-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2024 a las 05:14:33
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_dw_taller1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `balon`
--

CREATE TABLE `balon` (
  `id_balon` int(11) NOT NULL,
  `marca` varchar(25) NOT NULL,
  `precio` float NOT NULL,
  `color` varchar(25) NOT NULL,
  `deporte` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `balon`
--

INSERT INTO `balon` (`id_balon`, `marca`, `precio`, `color`, `deporte`) VALUES
(1, 'Adidas', 60, 'Blanco', 'Futbol'),
(2, 'Nike', 100, 'amarillo', 'basket'),
(3, 'Mikasa', 50, 'Rojo', 'Futbol'),
(4, 'Mikasa', 40, 'Azul', 'Voley');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `balon`
--
ALTER TABLE `balon`
  ADD PRIMARY KEY (`id_balon`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `balon`
--
ALTER TABLE `balon`
  MODIFY `id_balon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
