-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2022 a las 00:27:01
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
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desarrollador`
--

CREATE TABLE `desarrollador` (
  `idDesarrollador` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `pais` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `desarrollador`
--

INSERT INTO `desarrollador` (`idDesarrollador`, `nombre`, `pais`) VALUES
(3, 'Bungie', 'EEUU'),
(4, 'Insomaniac Games', 'EEUU'),
(5, 'Naughty Dog', 'EEUU'),
(6, 'Santa Monica Studios', 'EEUU'),
(7, 'Tequila works', 'España'),
(8, 'Square Enix', 'Japón'),
(9, 'Riot Games', 'China'),
(10, 'Nintendo Studios', 'Japón'),
(11, 'Ubisoft', 'Canada'),
(12, 'Microsoft Studios', 'Bélgica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plataformas`
--

CREATE TABLE `plataformas` (
  `idPlataforma` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `compañia` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `plataformas`
--

INSERT INTO `plataformas` (`idPlataforma`, `nombre`, `compañia`) VALUES
(1, 'PlayStation ', 'Sony'),
(7, 'PlayStation 2', 'Sony'),
(8, 'PlayStation 3', 'Sony'),
(9, 'PlayStation 4', 'Sony'),
(10, 'PlayStation 5', 'Sony'),
(11, 'Xbox', 'Microsoft'),
(12, 'Xbox 360', 'Microsoft'),
(13, 'Xbox One', 'Microsoft'),
(14, 'Xbox Series X', 'Microsoft'),
(16, 'Wii', 'Nintendo'),
(17, 'Wii U', 'Nintendo'),
(18, 'Switch', 'Nintendo'),
(19, 'Steam Deck', 'Valve');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuegos`
--

CREATE TABLE `videojuegos` (
  `idVideojuego` int(11) NOT NULL,
  `titulo` varchar(80) NOT NULL,
  `genero` varchar(80) NOT NULL,
  `fLanzamiento` date NOT NULL,
  `idDesarrollador` int(11) NOT NULL,
  `idPlataforma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `videojuegos`
--

INSERT INTO `videojuegos` (`idVideojuego`, `titulo`, `genero`, `fLanzamiento`, `idDesarrollador`, `idPlataforma`) VALUES
(18, 'Destiny 3', 'Shooter', '2020-11-10', 3, 9),
(19, 'Ratchet & clank : Una dimensión aparte', 'Plataformas', '2021-06-11', 4, 10),
(20, 'The Last of Us parte II', 'Aventura', '2020-06-19', 5, 9),
(21, 'God of War', 'Accion', '2018-04-20', 6, 9),
(22, 'Song of nunu', 'Aventura', '2022-12-19', 7, 19),
(23, 'Final Fantasy VII remake intergrade', 'JRPG', '2020-04-10', 8, 10),
(24, 'Final Fatasy VII', 'JRPG', '1997-01-31', 8, 1),
(25, 'Forza Horizon 4', 'Carreras', '2018-09-28', 12, 14),
(26, 'Halo Infinite', 'Shooter', '2021-11-15', 12, 14),
(27, 'Mario Maker 2', 'Plataformas', '2019-06-28', 10, 18),
(28, 'final fantasy tactics', 'tactico', '2010-11-11', 3, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `desarrollador`
--
ALTER TABLE `desarrollador`
  ADD PRIMARY KEY (`idDesarrollador`);

--
-- Indices de la tabla `plataformas`
--
ALTER TABLE `plataformas`
  ADD PRIMARY KEY (`idPlataforma`);

--
-- Indices de la tabla `videojuegos`
--
ALTER TABLE `videojuegos`
  ADD PRIMARY KEY (`idVideojuego`),
  ADD KEY `idDesarrollador` (`idDesarrollador`),
  ADD KEY `idPlataforma` (`idPlataforma`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `desarrollador`
--
ALTER TABLE `desarrollador`
  MODIFY `idDesarrollador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `plataformas`
--
ALTER TABLE `plataformas`
  MODIFY `idPlataforma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `videojuegos`
--
ALTER TABLE `videojuegos`
  MODIFY `idVideojuego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `videojuegos`
--
ALTER TABLE `videojuegos`
  ADD CONSTRAINT `videojuegos_ibfk_1` FOREIGN KEY (`idDesarrollador`) REFERENCES `desarrollador` (`idDesarrollador`),
  ADD CONSTRAINT `videojuegos_ibfk_2` FOREIGN KEY (`idPlataforma`) REFERENCES `plataformas` (`idPlataforma`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
