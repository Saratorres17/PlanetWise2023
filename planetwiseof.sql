-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 18-08-2023 a las 17:56:32
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `planetwiseof`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int NOT NULL,
  `firstName` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `foto_path` varchar(6000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `firstName`, `email`, `foto_path`, `contraseña`) VALUES
(3, 'Sara Torres', 'Sara.torres2710@gmail.com', '/src/php/functions/fotoadm.jpg', 'cieloazul45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datoscuriosos`
--

CREATE TABLE `datoscuriosos` (
  `id` int NOT NULL,
  `titulo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fuente` varchar(100) NOT NULL,
  `foto_path` varchar(6000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `informacion` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `datoscuriosos`
--

INSERT INTO `datoscuriosos` (`id`, `titulo`, `fuente`, `foto_path`, `informacion`) VALUES
(9, 'El festival de las hojas de color', 'k', '../../php/functions/Captura de pantalla 2023-03-11 232536.png', 'las hojas de color en el año......'),
(10, 'fff', 'popp', '../../php/functions/Captura de pantalla 2023-03-11 232414.png', 'WAZAAAAAAX2222'),
(12, 'ddddddddd', 'ssssssssss', '../../php/functions/cotuza.png', 'ssssssssss');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias destacadas`
--

CREATE TABLE `noticias destacadas` (
  `id` int NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `fuente` varchar(100) NOT NULL,
  `subtitulo` varchar(100) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `foto` varchar(6000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroinformacion1`
--

CREATE TABLE `registroinformacion1` (
  `id` int NOT NULL,
  `titulo` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `descripcion` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `informacion` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `foto_path` varchar(6000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `registroinformacion1`
--

INSERT INTO `registroinformacion1` (`id`, `titulo`, `descripcion`, `informacion`, `foto_path`) VALUES
(4, 'WAZAAAAAAAAAAAAA', 'KOKAKOLA', 'WAZAAAAAAX2222', 'C:\\Users\\sarat\\OneDrive\\Escritorio\\PlanetWise2023\\src\\php\\functions/assets/Captura de pantalla 2023-03-05 113200.png'),
(5, 'El festival de las hojas de color', '444444444444444', 'WAZAAAAAAX2222', '../../php/functions/Captura de pantalla 2022-09-04 202117.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrousuario`
--

CREATE TABLE `registrousuario` (
  `id` int NOT NULL,
  `firstName` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lastName` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `interests` varchar(4000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `gender` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `foto_path` varchar(6000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `contraseña` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `registrousuario`
--

INSERT INTO `registrousuario` (`id`, `firstName`, `lastName`, `email`, `interests`, `gender`, `foto_path`, `contraseña`) VALUES
(66, 'tommy', 'nu;ez', 'tommy@gmail.com', 'matelover', 'Masculino', '../../php/functions/jj.jpg', 'matelover100');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datoscuriosos`
--
ALTER TABLE `datoscuriosos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias destacadas`
--
ALTER TABLE `noticias destacadas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registroinformacion1`
--
ALTER TABLE `registroinformacion1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registrousuario`
--
ALTER TABLE `registrousuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `datoscuriosos`
--
ALTER TABLE `datoscuriosos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `noticias destacadas`
--
ALTER TABLE `noticias destacadas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registroinformacion1`
--
ALTER TABLE `registroinformacion1`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `registrousuario`
--
ALTER TABLE `registrousuario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
