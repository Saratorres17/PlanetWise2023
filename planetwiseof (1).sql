-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-08-2023 a las 05:13:52
-- Versión del servidor: 8.0.34
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
(15, 'BLOG PROF', 'pepito', '../../php/functions/CDB.png', 'nose');

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
-- Estructura de tabla para la tabla `notificaciones`
--

CREATE TABLE `notificaciones` (
  `id` int NOT NULL,
  `reporte` varchar(500) NOT NULL,
  `id_usuario` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `notificaciones`
--

INSERT INTO `notificaciones` (`id`, `reporte`, `id_usuario`) VALUES
(5, 'hola', 70),
(6, 'se', 70),
(7, 'se', 71);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroinformacion1`
--

CREATE TABLE `registroinformacion1` (
  `id` int NOT NULL,
  `titulo` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `descripcion` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `informacion` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `foto_path` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `usuarioId` int NOT NULL,
  `fecha_registro` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `registroinformacion1`
--

INSERT INTO `registroinformacion1` (`id`, `titulo`, `descripcion`, `informacion`, `foto_path`, `usuarioId`, `fecha_registro`) VALUES
(8, 'Areas naturales de El Salvador', 'eldiablo', 'nose', '../../php/functions/logoColegio.jpg', 70, '2023-08-22 05:04:39'),
(9, 'Colegio Don Bosco', 'The war of words comes after the governor sued the Atlanta mayor over her city’s mask mandate.aa', 'Georgia Gov. Brian Kemp and Atlanta Mayor Keisha Lance Bottoms hurled insults at one another Friday, as their legal battle over whether to mandate masks in the state’s capital city entered its second day.\n\nDuring dueling appearances at a Capitol news briefing and in an interview with CNN, the Republican governor and the Democratic mayor both accused the other’s office of playing politics amid a pandemic that continues to ravage communities across Georgia.\n\nUpdating members of the media on the state’s coronavirus response, Kemp defended his decision to sue Atlanta’s mayor and city council in an effort to block local officials there from enforcing an order requiring residents to wear a mask in public.\n\n“Mayor Bottoms’ mask mandate cannot be enforced, but her decision to shutter businesses and undermine economic growth is devastating,” Kemp told reporters in Atlanta, likening his administration’s legal action to “sending in the National Guard.”\n\n“I refuse to sit back and watch as disastrous policies threaten the lives and livelihoods of our citizens,” he said. “We will fight to stop reckless actions and put people over pandemic politics.”\n\nMeanwhile, on CNN, Bottoms dismissed Kemp’s unfolding criticism as “propaganda” and “completely inaccurate,” and called the escalating controversy over face coverings “very bizarre, quite frankly.”\n\nBottoms also charged that the governor’s lawsuit was politically motivated, remarking that she did not “think it was happenstance” that Kemp pursued litigation one day after President Donald Trump visited Atlanta.\n\nFurthermore, Bottoms alleged the lawsuit represented an act of “personal retaliation.” She noted that other Georgia cities had imposed similar mask orders, and said the governor “sued us personally. He did not sue the city of Atlanta. He filed suit against myself and our city council personally.”\n\nThe high-profile clash between two of Georgia’s top leaders came after Kemp issued a statewide order Wednesday banning local mask mandates. But Bottoms said her city’s order requiring face coverings would continue to apply, provoking Kemp to file his lawsuit in state court Thursday.\n\nThe feud has served to further elevate the national profile of Bottoms, who revealed this month that she had tested positive for Covid-19 and has attained greater public prominence due to reports that she is being vetted for the role of running mate to presumptive Democratic presidential nominee Joe Biden.\n\nAs for Kemp, the rift with Bottoms has dredged up earlier criticisms of his management of Georgia’s coronavirus outbreak.\n\nThe governor lifted his stay-at-home order at the end of April after memorably admitting earlier in the month that he had just learned asymptomatic infected people could spread the disease, and state officials were caught misrepresenting Covid-19 reporting data in May.\n\nKemp’s latest opposition to Bottoms’ order, at a time when even the Trump administration is encouraging deference to local coronavirus directives, has drawn significant criticism. It also diverges from the approaches of Republican governors in Southern states including Alabama, Arkansas and Texas, who have issued statewide mask mandates in recent days.\n\nKemp’s own lieutenant governor, Republican Geoff Duncan, appeared reluctant to offer a full-throated defense of the governor’s lawsuit Friday, instead repeatedly emphasizing the importance of mask-wearing.\n\n“I hope we move past it,” Duncan told CNN of the ongoing controversy, adding that the “whole conversation around the mandate doesn’t help us get through this. It becomes a distraction [from] the health and well-being of 11 million Georgians.”\n\nAlthough elected officials averse to mask mandates argue Americans should be able to make their own assessments regarding their safety, public health experts have warned that Covid-19 remains a highly contagious disease — and that those not wearing masks risk infecting other, potentially more vulnerable, people.', '../../php/functions/PlantillaPiedePaginaCREAJ.jpg', 71, '2023-08-23 04:50:44');

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
  `foto_path` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `contraseña` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `registrousuario`
--

INSERT INTO `registrousuario` (`id`, `firstName`, `lastName`, `email`, `interests`, `gender`, `foto_path`, `contraseña`) VALUES
(70, 'yoi', 'yoi', 'ja044840@gmail.com', 'soy loco', 'Masculino', '', '123'),
(71, 'jose', 'lopez', 'hola@gmail.com', 'nose', 'Masculino', '', '123');

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
-- Indices de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_reportes_usu` (`id_usuario`);

--
-- Indices de la tabla `registroinformacion1`
--
ALTER TABLE `registroinformacion1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuarios` (`usuarioId`);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `noticias destacadas`
--
ALTER TABLE `noticias destacadas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `registroinformacion1`
--
ALTER TABLE `registroinformacion1`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `registrousuario`
--
ALTER TABLE `registrousuario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD CONSTRAINT `fk_reportes_usu` FOREIGN KEY (`id_usuario`) REFERENCES `registrousuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `registroinformacion1`
--
ALTER TABLE `registroinformacion1`
  ADD CONSTRAINT `fk_usuarios` FOREIGN KEY (`usuarioId`) REFERENCES `registrousuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
