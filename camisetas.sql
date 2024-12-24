-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-12-2024 a las 23:56:46
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `camisetas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camisetas`
--

CREATE TABLE `camisetas` (
  `id_camiseta` int(11) NOT NULL,
  `nombre_producto` varchar(255) NOT NULL,
  `talle_id` int(11) NOT NULL,
  `precio_producto` int(11) NOT NULL,
  `imagen_producto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `camisetas`
--

INSERT INTO `camisetas` (`id_camiseta`, `nombre_producto`, `talle_id`, `precio_producto`, `imagen_producto`) VALUES
(1, '24-25 Argentina edición 50 aniversario - Fan', 1, 30000, ''),
(2, '98-99 Roma local', 2, 25000, NULL),
(3, '24-25 Real Madrid local - Jugador', 3, 40000, NULL),
(4, '96-97 Liverpool visitante manga larga', 4, 35000, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre_categoria`) VALUES
(1, 'Hombre'),
(2, 'Mujer'),
(3, 'Niños'),
(4, 'Retro'),
(5, 'Jugador'),
(6, 'Fanático'),
(7, 'Club'),
(8, 'Selección'),
(9, 'Primera División Argentina'),
(10, 'Premier League'),
(11, 'La Liga'),
(12, 'Serie A'),
(13, 'Bundesliga'),
(14, 'Ligue 1'),
(15, 'MLS'),
(16, 'Roshn Saudi League'),
(17, 'Brasileirao'),
(18, 'Otras ligas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `camiseta_id` int(11) NOT NULL,
  `talle_id` int(11) NOT NULL,
  `cantidad_producto` int(11) NOT NULL,
  `destacado` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `camiseta_id`, `talle_id`, `cantidad_producto`, `destacado`) VALUES
(5, 1, 1, 10, 0),
(6, 2, 2, 5, 0),
(7, 3, 3, 20, 0),
(8, 4, 4, 7, 0),
(15, 1, 5, 6, 0),
(16, 2, 6, 3, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talles`
--

CREATE TABLE `talles` (
  `id_talle` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `medida` varchar(64) NOT NULL,
  `ancho_talle` int(11) NOT NULL,
  `largo_talle` int(11) NOT NULL,
  `altura_recomendada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `talles`
--

INSERT INTO `talles` (`id_talle`, `categoria_id`, `medida`, `ancho_talle`, `largo_talle`, `altura_recomendada`) VALUES
(1, 1, 'XS', 48, 69, 160),
(2, 1, 'S', 50, 71, 165),
(3, 1, 'M', 52, 73, 170),
(4, 1, 'L', 54, 75, 175),
(5, 1, 'XL', 56, 77, 180),
(6, 1, 'XXL', 58, 78, 185),
(8, 4, 'S', 48, 68, 165),
(9, 4, 'M', 50, 70, 170),
(10, 4, 'L', 52, 72, 175),
(11, 4, 'XL', 54, 74, 180),
(12, 4, 'XXL', 56, 76, 185),
(13, 2, 'S', 42, 63, 160),
(14, 2, 'M', 44, 66, 165),
(15, 2, 'L', 46, 69, 170),
(16, 2, 'XL', 49, 71, 175),
(17, 2, 'XXL', 52, 73, 180),
(18, 3, 'S', 33, 42, 100),
(19, 3, 'M', 35, 45, 105),
(20, 3, 'L', 37, 48, 115),
(21, 3, 'XL', 39, 50, 125),
(22, 3, 'XXL', 43, 55, 135);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `email`, `password`) VALUES
(1, 'tomas', 'correo@gmail.com', '$2y$10$T/RknsRePIhqLe9X6JiT6./nGj2IczF1Xel7Xj3vb6WiAtdRoF0ZO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `camisetas`
--
ALTER TABLE `camisetas`
  ADD PRIMARY KEY (`id_camiseta`),
  ADD KEY `talles` (`talle_id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `camisetas` (`camiseta_id`),
  ADD KEY `talles` (`talle_id`);

--
-- Indices de la tabla `talles`
--
ALTER TABLE `talles`
  ADD PRIMARY KEY (`id_talle`),
  ADD KEY `Categorias` (`categoria_id`);

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
  MODIFY `id_camiseta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `talles`
--
ALTER TABLE `talles`
  MODIFY `id_talle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `camisetas` FOREIGN KEY (`camiseta_id`) REFERENCES `camisetas` (`id_camiseta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `talles` FOREIGN KEY (`talle_id`) REFERENCES `talles` (`id_talle`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `talles`
--
ALTER TABLE `talles`
  ADD CONSTRAINT `Categorias` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
