-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2023 a las 04:48:08
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `camisetas_futbol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camisetas`
--

CREATE TABLE `camisetas` (
  `id` int(10) NOT NULL,
  `categoria_camiseta` varchar(50) NOT NULL,
  `tipo_camiseta` varchar(50) NOT NULL,
  `imagen_camiseta` blob NOT NULL,
  `id_decada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `decadas`
--

CREATE TABLE `decadas` (
  `id` int(11) NOT NULL,
  `numero_decada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `camisetas`
--
ALTER TABLE `camisetas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `decadas_id` (`id_decada`);

--
-- Indices de la tabla `decadas`
--
ALTER TABLE `decadas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `camisetas`
--
ALTER TABLE `camisetas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `decadas`
--
ALTER TABLE `decadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `camisetas`
--
ALTER TABLE `camisetas`
  ADD CONSTRAINT `decadas_id` FOREIGN KEY (`id_decada`) REFERENCES `decadas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
