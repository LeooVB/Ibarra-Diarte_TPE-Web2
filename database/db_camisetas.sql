-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2023 a las 23:22:45
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
-- Base de datos: `db_camisetas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camisetas`
--

CREATE TABLE `camisetas` (
  `id` int(10) NOT NULL,
  `nombre_equipo` varchar(50) NOT NULL,
  `categoria_camiseta` varchar(50) NOT NULL,
  `tipo_camiseta` varchar(50) NOT NULL,
  `id_decada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `camisetas`
--

INSERT INTO `camisetas` (`id`, `nombre_equipo`, `categoria_camiseta`, `tipo_camiseta`, `id_decada`) VALUES
(0, 'Francia', 'Seleccion', 'Titular', 90),
(91, 'Brasil', 'Seleccion', 'Titular', 2000),
(92, 'Barcelona', 'Club', 'Titular', 80);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `decadas`
--

CREATE TABLE `decadas` (
  `id` int(11) NOT NULL,
  `numero_decada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `decadas`
--

INSERT INTO `decadas` (`id`, `numero_decada`) VALUES
(60, 60),
(70, 70),
(80, 80),
(90, 90),
(2000, 2000),
(2010, 2010);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(250) NOT NULL,
  `nombre_usuario` int(50) NOT NULL,
  `contraseña` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `camisetas`
--
ALTER TABLE `camisetas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT de la tabla `decadas`
--
ALTER TABLE `decadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2012;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(250) NOT NULL AUTO_INCREMENT;

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
