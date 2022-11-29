-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3305
-- Tiempo de generación: 28-11-2022 a las 06:56:36
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mundial2022`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bracket`
--

CREATE TABLE `bracket` (
  `equipo1` varchar(32) NOT NULL,
  `equipo2` varchar(32) NOT NULL,
  `gol1` int(11) NOT NULL,
  `gol2` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bracket`
--

INSERT INTO `bracket` (`equipo1`, `equipo2`, `gol1`, `gol2`, `id`) VALUES
('Alemania', 'Argentina', 0, 1, 1),
('Australia', 'Belgica', 2, 1, 2),
('Canada', 'Costa Rica', 2, 0, 3),
('Brasil', 'Camerun', 2, 1, 4),
('Ecuador', 'España', 0, 1, 5),
('Corea del Sur', 'Ghana', 2, 1, 6),
('Dinamarca', 'Tunez', 1, 3, 7),
('Iran', 'Japon', 4, 3, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ganador`
--

CREATE TABLE `ganador` (
  `equipo` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ganador`
--

INSERT INTO `ganador` (`equipo`) VALUES
('Brasil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id` int(11) NOT NULL,
  `pais` varchar(32) NOT NULL,
  `grupo` char(1) NOT NULL,
  `puntos` int(11) NOT NULL,
  `jj` int(11) NOT NULL,
  `jg` int(11) NOT NULL,
  `je` int(11) NOT NULL,
  `jp` int(11) NOT NULL,
  `ga` int(11) NOT NULL,
  `gc` int(11) NOT NULL,
  `dif` int(11) NOT NULL,
  `flag` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id`, `pais`, `grupo`, `puntos`, `jj`, `jg`, `je`, `jp`, `ga`, `gc`, `dif`, `flag`) VALUES
(1, 'Qatar', 'A', 0, 0, 0, 0, 0, 0, 0, 0, 'qatar'),
(2, 'Ecuador', 'A', 0, 0, 0, 0, 0, 0, 0, 0, 'ecuador'),
(3, 'Senegal', 'A', 0, 0, 0, 0, 0, 0, 0, 0, 'senegal'),
(4, 'Países Bajos', 'A', 0, 0, 0, 0, 0, 0, 0, 0, 'paisesbajos'),
(5, 'Inglaterra', 'B', 0, 0, 0, 0, 0, 0, 0, 0, 'inglaterra'),
(6, 'Irán', 'B', 0, 0, 0, 0, 0, 0, 0, 0, 'iran'),
(7, 'Estados Unidos', 'B', 0, 0, 0, 0, 0, 0, 0, 0, 'usa'),
(8, 'Gales', 'B', 0, 0, 0, 0, 0, 0, 0, 0, 'gales'),
(9, 'Argentina', 'C', 0, 0, 0, 0, 0, 0, 0, 0, 'argentina'),
(10, 'Arabia Saudita', 'C', 0, 0, 0, 0, 0, 0, 0, 0, 'saudiarabia'),
(11, 'México', 'C', 0, 0, 0, 0, 0, 0, 0, 0, 'mexico'),
(12, 'Polonia', 'C', 0, 0, 0, 0, 0, 0, 0, 0, 'polonia'),
(13, 'Francia', 'D', 0, 0, 0, 0, 0, 0, 0, 0, 'francia'),
(14, 'Australia', 'D', 0, 0, 0, 0, 0, 0, 0, 0, 'australia'),
(15, 'Dinamarca', 'D', 0, 0, 0, 0, 0, 0, 0, 0, 'dinamarca'),
(16, 'Túnez', 'D', 0, 0, 0, 0, 0, 0, 0, 0, 'tunez'),
(17, 'España', 'E', 0, 0, 0, 0, 0, 0, 0, 0, 'españa'),
(18, 'Costa Rica', 'E', 0, 0, 0, 0, 0, 0, 0, 0, 'costarica'),
(19, 'Alemania', 'E', 0, 0, 0, 0, 0, 0, 0, 0, 'alemania'),
(20, 'Japón', 'E', 0, 0, 0, 0, 0, 0, 0, 0, 'japon'),
(21, 'Bélgica', 'F', 0, 0, 0, 0, 0, 0, 0, 0, 'belgica'),
(22, 'Canadá', 'F', 0, 0, 0, 0, 0, 0, 0, 0, 'canada'),
(23, 'Marruecos', 'F', 0, 0, 0, 0, 0, 0, 0, 0, 'marueco'),
(24, 'Croacia', 'F', 0, 0, 0, 0, 0, 0, 0, 0, 'croacia'),
(25, 'Brasil', 'G', 0, 0, 0, 0, 0, 0, 0, 0, 'brasil'),
(26, 'Serbia', 'G', 0, 0, 0, 0, 0, 0, 0, 0, 'serbia'),
(27, 'Suiza', 'G', 0, 0, 0, 0, 0, 0, 0, 0, 'suiza'),
(28, 'Camerún', 'G', 0, 0, 0, 0, 0, 0, 0, 0, 'camerun'),
(29, 'Portugal', 'H', 0, 0, 0, 0, 0, 0, 0, 0, 'portugal'),
(30, 'Ghana', 'H', 0, 0, 0, 0, 0, 0, 0, 0, 'ghana'),
(31, 'Uruguay', 'H', 0, 0, 0, 0, 0, 0, 0, 0, 'uruguay'),
(32, 'Corea del Sur', 'H', 0, 0, 0, 0, 0, 0, 0, 0, 'coreadelsur');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tyc`
--

CREATE TABLE `tyc` (
  `equipo1` varchar(32) NOT NULL,
  `equipo2` varchar(32) NOT NULL,
  `gol1` int(11) NOT NULL,
  `gol2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `admin` int(11) NOT NULL DEFAULT 0,
  `favorito` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `admin`, `favorito`) VALUES
(1, 'admin', 'admin', 1, NULL),
(2, 'prueba', 'prueba', 0, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bracket`
--
ALTER TABLE `bracket`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bracket`
--
ALTER TABLE `bracket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
