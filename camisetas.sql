-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-12-2024 a las 02:16:51
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
(1, 'tomas', 'contraseña123'),
(2, 'admin2', '$2y$10$Uw4ymJlRDPXDmihea3ytEOfBHB/W45.aNirEaSHEsct2w97u5wKYK');

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
(18, 'Otras ligas'),
(21, 'ejemplo3');

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
(15, 9, 15),
(61, 4, 21),
(62, 7, 21),
(63, 9, 21),
(67, 13, 67),
(68, 7, 67),
(70, 1, 67);

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
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `url` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `producto_id`, `url`) VALUES
(9, 67, '/storage/imagenes/a9cg7jeiupULDM3MPwK2reK3OFUKnU6rJdW7lzEo.webp'),
(10, 67, '/storage/imagenes/2Cpc7UwRlCDorDd1p83kgHCGEDlEGmbsM6pQpwyE.webp'),
(11, 67, '/storage/imagenes/DHcRx0gd2xEhRwneqVAwTVTWOwgvHe1huSo6ONFk.webp'),
(12, 5, '/storage/imagenes/NgFkbZOEkC4Tn3ELqhE9t56q2qaKLveOXyhe3swr.webp'),
(13, 5, '/storage/imagenes/oAzUzz3VU9OfAq4UP3BPWqCCcd4sbhjUg5y63P2K.webp'),
(17, 6, '/storage/imagenes/W7tKi1Q4WsvS1O6ToCOQ8wODhUaIBaONypqD1kah.webp'),
(18, 6, '/storage/imagenes/1C4hth2XMyfiYjeLHAGR6Ycjd2X57WglG4PDJrjB.webp'),
(19, 6, '/storage/imagenes/jR8xbAO9oItiC0EE7Ny9DcVWW1okTtTBjwrT3gEP.webp'),
(20, 7, '/storage/imagenes/23Yx2UKWMHUc60vprWz1T7okpwzcaSOplKzWthJu.webp'),
(21, 7, '/storage/imagenes/MONPzCLDsdcy63NaBLNqXFhhIOhQyVwvHZZXZWeL.webp'),
(22, 7, '/storage/imagenes/K6no6PAB0goiO6gAB49sBecZTowY2V4opSnLd7Ia.webp'),
(23, 8, '/storage/imagenes/9lFa7OhLDip5dodRFeUglD0wiBAIOKTZr8C1XBcU.webp'),
(24, 8, '/storage/imagenes/la4wUKbNhrXnzibuHUQIthCmSCtVU5AvD0B5DhL1.webp'),
(25, 8, '/storage/imagenes/Usfy5d0uoPoxL5xfF80XI7L2vgTFIWD484Msra8Y.webp'),
(26, 15, '/storage/imagenes/QTiLeHKKlqLFC8jLwaKHBLUN06jAjhaDAFL50g2w.webp'),
(27, 15, '/storage/imagenes/pgGVi54mRkspL3SuTk3jNwXyIRifdlm2SrZGqDzk.webp'),
(28, 15, '/storage/imagenes/MePfIywbRKb5NdeOZfn1jmS8FufuyNcirBZMdR5k.webp'),
(29, 16, '/storage/imagenes/iSq4KzCXS0baaidZuvHqiJ1IDfUkddbLCmoZUE0b.webp'),
(30, 16, '/storage/imagenes/JCc2bzCu3Wq7WOWYBRIDye1UuXnyPx0jAUKzgt87.webp'),
(31, 16, '/storage/imagenes/KxxN6d8Lt6fICOROjmO0WCRpWm1nCBP11glaemeP.webp'),
(32, 19, '/storage/imagenes/I8Zvmqw7x3Zgz3WUlsvAG2I6wQLM97mEuIUOPuDw.webp'),
(33, 19, '/storage/imagenes/g7xZIkNPSZNTXlQBkf63M5bw3LF18YaSpHKu7L6A.webp'),
(34, 20, '/storage/imagenes/p9uVkDX8Q5LNv0gKnfPRpWi3BoRS328GbyWmLPbN.webp'),
(35, 20, '/storage/imagenes/RYySExWmjpbmnWxltowWMUhM3yc5vQV01NdxVv76.webp'),
(36, 21, '/storage/imagenes/pxAivm4A1BTrU0BPc3jjpbxtK26J7VFld7UYnHXN.webp'),
(37, 21, '/storage/imagenes/GkT33Otu9709nopFE1OaEUonEPbuHtneWPSZ2Yqy.webp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(250) NOT NULL,
  `precio_producto` int(11) NOT NULL,
  `destacado` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre_producto`, `precio_producto`, `destacado`) VALUES
(5, '24-25 Argentina edición 50 aniversario - Jugador', 30000, 1),
(6, '98-99 Roma local', 25000, 0),
(7, '24-25 Real Madrid local - Jugador', 40000, 0),
(8, '96-97 Liverpool visitante manga larga', 35000, 1),
(15, '24-25 Boca Jrs local - fan', 30000, 1),
(16, '95 Italia local', 40000, 1),
(19, '24-25 Chelsea local - Jugador', 35000, 0),
(20, '24-25 Bayern Arquero local - Fan', 15000, 1),
(21, '06-07 Boca Jrs. Local', 26000, 1),
(67, '12345', 2312, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_talle`
--

CREATE TABLE `producto_talle` (
  `id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `talle_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL DEFAULT 0
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
(14, 16, 3, 9),
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
(26, 6, 3, 8),
(95, 67, 1, 12),
(96, 67, 2, 20);

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
  ADD KEY `productos` (`producto_id`),
  ADD KEY `categorias_productos` (`categoria_id`);

--
-- Indices de la tabla `guia_talles`
--
ALTER TABLE `guia_talles`
  ADD PRIMARY KEY (`id_talle`),
  ADD KEY `Categorias` (`categoria_id`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto` (`producto_id`);

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
  ADD KEY `productos_talles` (`producto_id`),
  ADD KEY `talles` (`talle_id`);

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `categoria_producto`
--
ALTER TABLE `categoria_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `guia_talles`
--
ALTER TABLE `guia_talles`
  MODIFY `id_talle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de la tabla `producto_talle`
--
ALTER TABLE `producto_talle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

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
  ADD CONSTRAINT `categorias_productos` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `productos` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `guia_talles`
--
ALTER TABLE `guia_talles`
  ADD CONSTRAINT `tablaTalles_categorias` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `producto` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto_talle`
--
ALTER TABLE `producto_talle`
  ADD CONSTRAINT `productos_talles` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `talles` FOREIGN KEY (`talle_id`) REFERENCES `talles` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
