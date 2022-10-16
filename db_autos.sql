-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-09-2022 a las 18:06:03
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
-- Base de datos: `db_autos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'Urbano'),
(2, 'Pick up'),
(3, 'Comercial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id` int(11) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `año` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `id_categoria` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id`, `marca`, `modelo`, `año`, `precio`, `descripcion`, `id_categoria`) VALUES
(2, 'Ford', 'Fiesta', '2012', 2325000, 'Fiesta usado color blanco, 98000km, tipo de combustible nafta/gnc, 5 puertas, transmisión manual, motor 1.6, dirección eléctrica.\r\n', 1),
(4, 'Chevrolet', 'Agile', '2015', 2100000, 'Agile usado color gris, 84000km, tipo de combustible nafta, 5 puertas, transmisión manual, motor 1.4, dirección hidráulica.', 1),
(5, 'Renault', 'Clio', '2017', 2000000, 'Clio usado color negro, 70000km, tipo de combustible nafta, 3 puertas, transmisión manual, motor 1.2, dirección hidráulica. ', 1),
(7, 'Toyota', 'Yaris', '2019', 4300000, 'Yaris usado color gris, 117000km, tipo de combustible nafta, 4 puertas, transmisión automática, motor 1.5, dirección asistida.', 1),
(8, 'Ford', 'Ranger', '2011', 3700000, 'Ranger usada color rojo, 122000km, tipo de combustible nafta/gnc, 4 puertas, transmisión manual, motor 2.3, dirección hidráulica. \r\n', 2),
(9, 'Toyota', 'Hilux', '2015', 6000000, 'Hilux usada color blanco, 250000km, tipo de combustible diésel, 4 puertas, transmisión automática, motor 3.0, dirección hidráulica.', 2),
(10, 'Volkswagen', 'Amarok', '2018', 10000000, 'Amarok usada color azul, 85000km, tipo de combustible diésel, 4 puertas, transmisión automática, motor 3.0, dirección hidráulica.', 2),
(11, 'Chevrolet', 'S10', '2015', 6000000, 'S10 usada color blanco, 175000k, tipo de combustible diésel, 4 puertas, transmisión automática, motor 2.8, dirección hidráulica. ', 2),
(12, 'Renault', 'Kangoo', '2011', 1800000, 'Furgón Kangoo usado color blanco, 110000km, tipo de combustible diésel, 3 puertas, transmisión manual, motor 1.5, dirección hidráulica.', 3),
(13, 'Fiat', 'Fiorino', '2017', 2780000, 'Furgón Fiorino usado color gris, 90000km, tipo de combustible nafta, 4 puertas, transmisión manual, motor 1.5, dirección hidráulica.', 3),
(14, 'Citroën', 'Berlingo', '2018', 2800000, 'Furgón Berlingo usado color azul, 100000k, tipo de combustible diésel, 3 puertas, transmisión manual, motor 1.6, dirección hidráulica.', 3),
(16, 'Peugeot', 'Boxter', '2000', 380000, 'Furgón Boxter usado color blanco, 110000km, tipo de combustible diésel, 3 puertas, transmisión manual, motor 2.8, dirección hidráulica.', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria_fk` (`id_categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `id_categoria_fk` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
