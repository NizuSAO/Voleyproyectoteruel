-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2021 a las 22:41:48
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina-alumno`
--

CREATE TABLE `pagina-alumno` (
  `deporte` varchar(50) NOT NULL,
  `horarios` varchar(50) NOT NULL,
  `profesor` varchar(50) NOT NULL,
  `contacto` int(50) NOT NULL,
  `ubicacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pagina-alumno`
--

INSERT INTO `pagina-alumno` (`deporte`, `horarios`, `profesor`, `contacto`, `ubicacion`) VALUES
('Voleyball', '13:00 - 17:00', 'Federico Hernandez', 1126487591, 'Sarandi 1300'),
('Futboll', '10:00 - 12:00', 'Maximiliano Perez', 1147895132, 'Sarandi 1300'),
('Ping Pong', '12:00 - 13:00', 'Lucas Javier', 1129307771, 'Sarandi 1300'),
('Tennis', '17:00 - 19:00', 'Agustina Torrez', 1191257810, 'Sarandi 1300');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;