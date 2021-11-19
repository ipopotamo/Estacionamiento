-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2021 a las 19:33:32
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estacionamiento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_auto`
--

CREATE TABLE `persona_auto` (
  `id_client` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `dni` int(11) NOT NULL,
  `patente` varchar(11) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `persona_auto`
--

INSERT INTO `persona_auto` (`id_client`, `nombre`, `apellido`, `dni`, `patente`) VALUES
(0, 'fewf', 'fsf', 158913, 'ert 156'),
(1, 'sdfw', 'ewfds', 1565947, 'das 10'),
(5, 'tre', 'ert', 156549, 'nji 159'),
(6, 'sdf', 'fsd', 5235, 'klñ 453'),
(7, 'trw', 'rew', 4567682, 'ttt 78'),
(8, 'frsd', 'sdf', 10002, 'wed 45'),
(32, 'dw', 'qw', 156458, 'qwe 54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pisos`
--

CREATE TABLE `pisos` (
  `lugar` int(11) NOT NULL,
  `piso` int(11) NOT NULL,
  `estado` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `id_cli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `pisos`
--

INSERT INTO `pisos` (`lugar`, `piso`, `estado`, `id_cli`) VALUES
(1, 1, 'ocupado', 1),
(2, 1, 'libre', 0),
(3, 1, 'libre', 0),
(4, 1, 'libre', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `persona_auto`
--
ALTER TABLE `persona_auto`
  ADD PRIMARY KEY (`id_client`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
