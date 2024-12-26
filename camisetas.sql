-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-12-2024 a las 00:41:52
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
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id_admin` int(11) NOT NULL,
  `admin` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id_admin`, `admin`, `password`) VALUES
(1, 'tomas', 'contraseña123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre_categoria` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre_categoria`) VALUES
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
-- Estructura de tabla para la tabla `categoria_producto`
--

CREATE TABLE `categoria_producto` (
  `id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria_producto`
--

INSERT INTO `categoria_producto` (`id`, `categoria_id`, `producto_id`) VALUES
(1, 5, 5),
(4, 4, 6),
(7, 11, 7),
(8, 5, 7),
(11, 10, 8),
(13, 8, 5),
(14, 8, 16),
(15, 9, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guia_talles`
--

CREATE TABLE `guia_talles` (
  `id_talle` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `medida` varchar(64) NOT NULL,
  `ancho_talle` int(11) NOT NULL,
  `largo_talle` int(11) NOT NULL,
  `altura_recomendada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `guia_talles`
--

INSERT INTO `guia_talles` (`id_talle`, `categoria_id`, `medida`, `ancho_talle`, `largo_talle`, `altura_recomendada`) VALUES
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
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(250) NOT NULL,
  `precio_producto` int(11) NOT NULL,
  `imagen_producto` varchar(250) NOT NULL,
  `destacado` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre_producto`, `precio_producto`, `imagen_producto`, `destacado`) VALUES
(5, '24-25 Argentina edición 50 aniversario - Jugador', 30000, '', 1),
(6, '98-99 Roma local', 25000, '', 0),
(7, '24-25 Real Madrid local - Jugador', 40000, '', 0),
(8, '96-97 Liverpool visitante manga larga', 35000, '', 1),
(15, '24-25 Boca Jrs local - fan', 30000, '', 1),
(16, '95 Italia local ', 40000, '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_talle`
--

CREATE TABLE `producto_talle` (
  `id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `talle_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto_talle`
--

INSERT INTO `producto_talle` (`id`, `producto_id`, `talle_id`, `cantidad`) VALUES
(1, 5, 1, 10),
(2, 5, 2, 5),
(3, 5, 3, 3),
(4, 5, 4, 8),
(5, 5, 5, 10),
(6, 5, 6, 7),
(7, 15, 3, 2),
(8, 15, 4, 3),
(9, 15, 5, 4),
(10, 15, 6, 1),
(11, 7, 3, 10),
(12, 16, 5, 4),
(13, 16, 6, 5),
(14, 16, 3, 10),
(15, 7, 5, 3),
(16, 7, 1, 7),
(17, 8, 6, 10),
(18, 8, 3, 4),
(19, 8, 5, 7),
(21, 8, 4, 3),
(22, 8, 2, 7),
(23, 6, 1, 1),
(24, 6, 6, 4),
(25, 6, 5, 4),
(26, 6, 3, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talles`
--

CREATE TABLE `talles` (
  `id` int(11) NOT NULL,
  `medida` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `talles`
--

INSERT INTO `talles` (`id`, `medida`) VALUES
(1, 'XS'),
(2, 'S'),
(3, 'M'),
(4, 'L'),
(5, 'XL'),
(6, 'XXL');

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
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria_producto`
--
ALTER TABLE `categoria_producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorias_productos` (`categoria_id`),
  ADD KEY `productos` (`producto_id`);

--
-- Indices de la tabla `guia_talles`
--
ALTER TABLE `guia_talles`
  ADD PRIMARY KEY (`id_talle`),
  ADD KEY `Categorias` (`categoria_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `producto_talle`
--
ALTER TABLE `producto_talle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `talles` (`talle_id`),
  ADD KEY `productos_talles` (`producto_id`);

--
-- Indices de la tabla `talles`
--
ALTER TABLE `talles`
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
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `categoria_producto`
--
ALTER TABLE `categoria_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `guia_talles`
--
ALTER TABLE `guia_talles`
  MODIFY `id_talle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `producto_talle`
--
ALTER TABLE `producto_talle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `talles`
--
ALTER TABLE `talles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categoria_producto`
--
ALTER TABLE `categoria_producto`
  ADD CONSTRAINT `categorias_productos` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `productos` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `guia_talles`
--
ALTER TABLE `guia_talles`
  ADD CONSTRAINT `tablaTalles_categorias` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `producto_talle`
--
ALTER TABLE `producto_talle`
  ADD CONSTRAINT `productos_talles` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `talles` FOREIGN KEY (`talle_id`) REFERENCES `talles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
