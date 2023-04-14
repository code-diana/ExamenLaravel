-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-04-2023 a las 10:48:43
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebaexamen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pets`
--

CREATE TABLE `pets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nick` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `raza` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `telf` varchar(255) NOT NULL,
  `image` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pets`
--

INSERT INTO `pets` (`id`, `nick`, `password`, `name`, `color`, `raza`, `sex`, `age`, `owner`, `telf`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Ravi', 'a', 'Ravi', 'negre', 'Labrador', 'masculino', 3, 'Ana', '4562342', 'C:\\xampp\\tmp\\php881E.tmp', '2023-04-14 06:42:59', '2023-04-14 06:42:59'),
(4, 'Edgar', 'a', 'edgar', 'marro', 'Labrador', 'masculino', 5, 'Edgar', '65234', 'C:\\xampp\\tmp\\php6E1A.tmp', '2023-04-14 06:43:58', '2023-04-14 06:43:58'),
(5, 'Salma', 'a', 'Salma', 'blanc', 'Caniche', 'femenino', 1, 'Salma', '432423', 'C:\\xampp\\tmp\\phpA4B.tmp', '2023-04-14 06:44:38', '2023-04-14 06:44:38'),
(6, 'Diana', 'a', 'Diana', 'blanc i negre', 'Labrador', 'femenino', 3, 'Diana', '432432', 'C:\\xampp\\tmp\\phpA767.tmp', '2023-04-14 06:45:18', '2023-04-14 06:45:18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pets_nick_unique` (`nick`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pets`
--
ALTER TABLE `pets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
