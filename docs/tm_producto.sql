-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 21-03-2023 a las 20:56:44
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crudphp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_producto`
--

CREATE TABLE `tm_producto` (
  `prod_id` int NOT NULL,
  `prod_name` varchar(150) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `prod_desc` varchar(500) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `fech_create` datetime NOT NULL,
  `fech_mod` datetime DEFAULT NULL,
  `fech_delete` datetime DEFAULT NULL,
  `estado` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `tm_producto`
--

INSERT INTO `tm_producto` (`prod_id`, `prod_name`, `prod_desc`, `fech_create`, `fech_mod`, `fech_delete`, `estado`) VALUES
(1, 'Auriculares', 'MPOW', '2023-03-17 08:30:08', NULL, NULL, 1),
(2, 'Mouse', 'Logitech', '2023-03-17 08:31:24', NULL, '2023-03-17 15:59:25', 0),
(3, 'Teclado', 'MPOW', '2023-03-17 08:32:14', NULL, NULL, 1),
(4, 'Monitor', 'Siragon', '2023-03-17 12:04:54', NULL, NULL, 1),
(10, 'Cornetas', 'JBL', '2023-03-21 16:54:46', NULL, NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tm_producto`
--
ALTER TABLE `tm_producto`
  ADD PRIMARY KEY (`prod_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tm_producto`
--
ALTER TABLE `tm_producto`
  MODIFY `prod_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
