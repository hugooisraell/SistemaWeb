-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-01-2025 a las 22:48:32
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
-- Base de datos: `sistemaeducativo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `hora` time NOT NULL,
  `fecha` date NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `lugar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `titulo`, `hora`, `fecha`, `categoria`, `descripcion`, `lugar`) VALUES
(3, 'Conferencia sobre Tecnología', '09:00:00', '2025-01-10', 'Conferencia', 'Una conferencia sobre avances tecnológicos', 'Auditorio A'),
(4, 'Conferencia de PHP', '10:30:00', '2024-12-30', 'Tecnología', 'Una conferencia sobre desarrollo web con PHP', 'Auditorio Central'),
(6, 'CSS en Diseño web', '10:00:00', '2024-12-28', 'Tecnología', 'Una conferencia sobre diseño web con CSS', 'Aula Virtual'),
(7, 'Cyber Security', '19:00:00', '2025-01-10', 'Tecnologia', 'Conferencia de seguridad informática', 'Auditorio C2'),
(8, 'Taller de Moodle', '15:00:00', '2025-01-30', 'Tecnologia', 'Charla sobre el desarrollo de cursos en Moodle', 'Aula 35'),
(9, 'Reunión Sistemas', '16:00:00', '2025-02-06', 'Reunión', 'Reunión sobre desarrollo de una Base de Datos', 'Auditorio Central');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
