-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 28-08-2023 a las 15:54:39
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
  `id_usuario` int NOT NULL,
  `accept` tinyint(1) NOT NULL DEFAULT '0'
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
  `foto_path` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `usuarioId` int NOT NULL,
  `fecha_registro` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `registroinformacion1`
--

INSERT INTO `registroinformacion1` (`id`, `titulo`, `descripcion`, `informacion`, `foto_path`, `usuarioId`, `fecha_registro`) VALUES
(33, 'Mamíferos que ponen huevos?', '¿Sabías que hay algunos mamíferos que ponen huevos? Se trata del grupo de los llamados monotremas; un grupo de animales muy reducido que cuenta con dos especies representativas: el ornitorrinco y el equidna. Estas especies habitan en Australia y en algunas zonas del continente africano.', 'Dentro del enorme y apasionante mundo de las especies animales, seguro que hay muchas curiosidades de animales que no conoces. ¿Alguna vez te has preguntado por qué los tiburones no duermen? ¿O cuál es el animal más peligroso del planeta? Tanto si eres un fanático de los animales como si tienes vocación para su cuidado, en este artículo te presentamos una buena suma de datos que no te dejarán indiferente, Un animal ovíparo (del latín ovum, &quot;huevo&quot;, y parire, &quot;parir&quot;) presenta una modalidad de reproducción que incluye el depósito de huevos en el medio externo donde completan su desarrollo embrionario antes de la eclosión. Son ovíparos la totalidad de las aves así como la mayoría de los insectos, peces, anfibios y reptiles. Entre los mamíferos solo son ovíparos los monotremas (el ornitorrinco y los equidnas).  Los animales que producen huevos secos que son puestos al aire, como aves, reptiles o insectos, los depositan después de haber seguido un procedimiento de fecundación interna. Los que producen huevos blandos que son puestos en el agua (peces, crustáceos, anfibios...) son depositados sin fecundar, la fecundación se produce cuando el macho vierte su esperma entre los huevos mientras la hembra los deposita (fecundación externa). Estos animales son llamados ovulíparos.  Se denomina ovíparos a todos aquellos animales cuyas hembras ponen huevos, así como los reptiles, los anfibios y las aves.  Cada especie varía en cuanto a la producción de huevos, según su temporada de reproducción, como la tortuga marina que producen entre 70 y 190 huevos, hasta las aves que pueden producir huevos por debajo de las dos docenas.', '../../php/functions/orintorrinco.png', 80, '2023-08-28 14:53:07'),
(34, 'Convivir con basura: el futuro que no queremos', 'Todos los dias una persona bota basura en la calle..', 'Inundaciones, enfermedades, océanos contaminados son algunas de las muchas consecuencias por no tratar lo que desperdiciamos. Es que la basura no solo termina en grandes vertederos de mal olor: tiene un impacto devastador sobre el planeta y podría ser aún peor en el futuro.  Esta es una de las conclusiones del informe del Banco Mundial “What a waste 2.0” (Los desechos 2.0), que pone el foco en la generación, recolección y tratamiento de los residuos a nivel municipal como punto de partida para luchar contra la contaminación de residuos sólidos.  De acuerdo al estudio, en el mundo se generan al año 2.010 millones de toneladas de desechos sólidos municipales, y al menos 33% de ellos no son tratados. Se proyecta que la rápida urbanización, el crecimiento de la población y el desarrollo económico harán que la cantidad de desechos a nivel mundial aumenten un 70% en los próximos 30 años si no se toman medidas urgentes. Un futuro donde convivir con basura podría ser la nueva normalidad.  Pero no son solo las grandes urbes norteamericanas, europeas o asiáticas las que podrían tener este devenir. Los latinoamericanos no estamos exentos de este problema: cada uno de sus habitantes genera casi un kilo de basura por día, pero solo se recicla el 4,5% de los desechos a nivel regional. Por ello, es clave conocer el impacto de tirar algo sin separarlo o tratarlo.', '../../php/functions/botara basura en la calle.jpg', 80, '2023-08-28 14:57:41'),
(37, 'Basura en el agua y sus efectos..', 'Que efectos tiene la cotaminacion del agua?', 'El planeta nos recuerda de forma cada vez más frecuente que sin agua no hay vida, por ejemplo a través de sequías cada vez más extremas que ponen en jaque el acceso al agua potable en diferentes lugres del mundo. Los  diferentes tipos de contaminación del agua suponen el empeoramiento de la calidad de este valioso recurso y por tanto, una amenaza para la salud del planeta.  Desgraciadamente, agua y contaminación son dos palabras íntimamente relacionadas como consecuencia de la actividad humana. Los tipos de contaminación del agua que tienen su origen en los seres humanos son, además, muy variados.  El agua se contamina a través de los medicamentos que tiramos por el retrete o el aceite que vertimos por el fregadero. Los residuos que se arrojan al mar o los ríos, son otro ejemplos. También lo son los micro plásticos, cuyas concentraciones en el mar están aumentando de manera acelerada. Y es que cada año, 8 millones de plásticos acaban en el mar alterando la vida de los ecosistemas que viven en ellos, según datos de la ONU.  Precisamente, este organismos internacional define la contaminación del agua como aquella que sufre cambios en su composición hasta quedar inservible. El agua contaminada supone la imposibilidad de uso humano de este recurso tan valioso. Este deterioro supone un grave peligro para el planeta y no hace más que exacerbar la pobreza entre los más vulnerables.', '../../php/functions/oceanos-plastico.jpg', 81, '2023-08-28 15:37:54'),
(38, 'Descubri arboles de colores..', 'Otoño o otras temporadas...?', 'Durante el otoño, muchos árboles caducifolios cambian de color, pasando de verde a tonos de amarillo, naranja, rojo o incluso púrpura. Esto ocurre debido a que las hojas dejan de producir clorofila y otros pigmentos presentes en las hojas, como los carotenoides y antocianinas, se vuelven más visibles.', '../../php/functions/arbol de colores.jpg', 81, '2023-08-28 15:46:08');

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
  `contraseña` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `registrousuario`
--

INSERT INTO `registrousuario` (`id`, `firstName`, `lastName`, `email`, `interests`, `gender`, `foto_path`, `contraseña`) VALUES
(80, 'Christopher Tommy', 'Nu;ez Pineda', 'Christopher.tommy@gmail.com', 'Me gustan los animales, el reciclaje, y plantar flores.', 'Masculino', '../../php/functions/tommy.png', 'hola123'),
(81, 'Jason Steven', 'Rodriguez Iraheta', 'Jason.Steven@gmail.com', 'Me gustan los gatos, las plantas y conocer sobre los animales maritimos', 'Masculino', '../../php/functions/jason.jpg', 'hola1234');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `registroinformacion1`
--
ALTER TABLE `registroinformacion1`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `registrousuario`
--
ALTER TABLE `registrousuario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

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
