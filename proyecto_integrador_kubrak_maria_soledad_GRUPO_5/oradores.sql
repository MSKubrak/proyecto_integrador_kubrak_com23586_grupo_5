-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2023 a las 00:25:15
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `integrador_cac`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oradores`
--

CREATE TABLE `oradores` (
  `id_orador` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `tema` varchar(200) NOT NULL,
  `fecha_alta` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `oradores`
--

INSERT INTO `oradores` (`id_orador`, `nombre`, `apellido`, `mail`, `tema`, `fecha_alta`) VALUES
(0, 'Steve', 'Jobs', 'steve_jobs@gmail.com', 'Javascript\r\nReact', '2023-11-12 18:58:06'),
(1, 'bill', 'gates', 'bill_gates@gmail.com', 'javascript\r\nreact', '2023-11-12 19:29:22'),
(2, 'Ada', 'Lovelace', 'ada_lovelace@gmail.com', 'Negocios\r\nStartups', '2023-11-12 19:34:48'),
(4, 'Roberto', 'Romero', 'roberto_romero@gmail.com', 'Industrias\r\nNegocios', '2023-11-12 19:44:13'),
(5, 'Rosario', 'Francesca', 'rosario_francesca@gmail.com', 'Industrias\r\nNegocios', '2023-11-12 19:46:16'),
(6, 'Joel', 'Kubrak', 'joel_kubrak@gmail.com', 'Estudios\r\nTrabajo', '2023-11-12 19:54:30'),
(7, 'Franco', 'Romero', 'franco_romero@gmail.com', 'Estudios\r\nTrabajo', '2023-11-12 19:57:28'),
(8, 'Edgardo', 'Raúl', 'edgardo_raul@yahoo.com', 'Químicos\r\nEmpresas', '2023-11-12 20:00:21'),
(9, 'María', 'Pérez', 'maria@yahoo.com', 'Programas\r\nComidas', '2023-11-12 20:01:55');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `oradores`
--
ALTER TABLE `oradores`
  ADD PRIMARY KEY (`id_orador`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
