-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 07-09-2023 a las 04:25:54
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
(16, 'La jirafa sin manchas reaparece medio siglo después de su último avistamiento', 'POR DINA FINE MARON PUBLICADO 24 AGO 2023, 9:51 CEST , ACTUALIZADO 28 AGO 2023, 15:19 CEST', '../../php/functions/jirafa.png', 'Con apenas unas semanas de vida y aún sin nombre, la jirafa recién nacida en un zoo del noreste de Tennessee (Estados Unidos) podría ser apodada, con razón, &quot;inmaculada&quot;.  La jirafa hembra nacida sin sus características manchas luce en cambio un sólido pelaje marrón, un fenómeno que no se había observado en ninguna jirafa desde hace más de 50 años. Nació el mes pasado en el zoo Brights, una instalación familiar de Limestone, Tennessee. La última vez que se tuvo noticia de una jirafa sin manchas fue en un zoo de Tokio en 1972.  &quot;La cría de jirafa sin manchas es sin duda un caso interesante&quot;, y ese tipo de coloración nunca se ha visto en estado salvaje, afirma Sara Ferguson, veterinaria de animales salvajes y coordinadora de salud y conservación de la Fundación para la Conservación de la Jirafa.  La rara coloración del animal se debe probablemente a algún tipo de mutación en uno o más genes, afirma. Pero no hay indicios de problemas médicos subyacentes ni de que la jirafa reticulada recién nacida (una subespecie originaria de África oriental) esté en desventaja genética.  David Bright, director del zoo de Brights, afirma que la madre de la cría, Shenna, de nueve años, había dado a luz anteriormente a otras tres crías y que el trío había sido moteado. Esta última incorporación a la familia de jirafas del zoo nació con un peso de unos 90 kilos, dice, y su equipo de atención veterinaria concluyó que &quot;está sana y es normal&quot;, aunque su coloración fue una sorpresa.'),
(18, 'Explorando el fascinante mundo del olfato de los tiburones', 'Nationalgeographic.es', '../../php/functions/tiburones.jpg', 'Para detectar a sus presas, el tiburón está equipado con una serie de órganos y sensores sensoriales que le permiten orientarse y moverse, lo que le convierte en un depredador eficaz.  No es un sentido en particular el que da ventaja al tiburón, sino la complementariedad y sinergia entre todos ellos. Dependiendo de las condiciones ambientales, serán útiles en diferentes momentos.  El sentido del olfato es eficaz a unas decenas de kilómetros, para detectar presas a distancia; la visión permite preparar un ataque a unas decenas de metros, y la detección de campos eléctricos permite explorar los alrededores en un radio de dos metros.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `feedreports`
--

CREATE TABLE `feedreports` (
  `id` int NOT NULL,
  `postId` int NOT NULL,
  `reporte` varchar(500) NOT NULL,
  `usuarioReport` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `feedreports`
--

INSERT INTO `feedreports` (`id`, `postId`, `reporte`, `usuarioReport`) VALUES
(5, 41, 'aaaa', 85),
(6, 40, 'aaaa', 85),
(7, 40, 'aaaa', 85),
(8, 40, 'no se', 85),
(9, 37, 'jsjkasjka', 85),
(10, 34, 'esta feo\r\n', 85),
(11, 42, 'asdasd', 85),
(12, 34, 'no tiene imagen', 87);

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

--
-- Volcado de datos para la tabla `notificaciones`
--

INSERT INTO `notificaciones` (`id`, `reporte`, `id_usuario`, `accept`) VALUES
(15, 'es loco', 80, 0),
(16, 'sex', 85, 1);

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
(34, 'Convivir con basura: el futuro que no queremos', 'Todos los dias una persona bota basura en la calle..', 'Inundaciones, enfermedades, océanos contaminados son algunas de las muchas consecuencias por no tratar lo que desperdiciamos. Es que la basura no solo termina en grandes vertederos de mal olor: tiene un impacto devastador sobre el planeta y podría ser aún peor en el futuro.  Esta es una de las conclusiones del informe del Banco Mundial “What a waste 2.0” (Los desechos 2.0), que pone el foco en la generación, recolección y tratamiento de los residuos a nivel municipal como punto de partida para luchar contra la contaminación de residuos sólidos.  De acuerdo al estudio, en el mundo se generan al año 2.010 millones de toneladas de desechos sólidos municipales, y al menos 33% de ellos no son tratados. Se proyecta que la rápida urbanización, el crecimiento de la población y el desarrollo económico harán que la cantidad de desechos a nivel mundial aumenten un 70% en los próximos 30 años si no se toman medidas urgentes. Un futuro donde convivir con basura podría ser la nueva normalidad.  Pero no son solo las grandes urbes norteamericanas, europeas o asiáticas las que podrían tener este devenir. Los latinoamericanos no estamos exentos de este problema: cada uno de sus habitantes genera casi un kilo de basura por día, pero solo se recicla el 4,5% de los desechos a nivel regional. Por ello, es clave conocer el impacto de tirar algo sin separarlo o tratarlo.', '../../php/functions/botara basura en la calle.jpg', 80, '2023-08-28 14:57:41'),
(37, 'Basura en el agua y sus efectos..', 'Que efectos tiene la cotaminacion del agua?', 'El planeta nos recuerda de forma cada vez más frecuente que sin agua no hay vida, por ejemplo a través de sequías cada vez más extremas que ponen en jaque el acceso al agua potable en diferentes lugres del mundo. Los  diferentes tipos de contaminación del agua suponen el empeoramiento de la calidad de este valioso recurso y por tanto, una amenaza para la salud del planeta.  Desgraciadamente, agua y contaminación son dos palabras íntimamente relacionadas como consecuencia de la actividad humana. Los tipos de contaminación del agua que tienen su origen en los seres humanos son, además, muy variados.  El agua se contamina a través de los medicamentos que tiramos por el retrete o el aceite que vertimos por el fregadero. Los residuos que se arrojan al mar o los ríos, son otro ejemplos. También lo son los micro plásticos, cuyas concentraciones en el mar están aumentando de manera acelerada. Y es que cada año, 8 millones de plásticos acaban en el mar alterando la vida de los ecosistemas que viven en ellos, según datos de la ONU.  Precisamente, este organismos internacional define la contaminación del agua como aquella que sufre cambios en su composición hasta quedar inservible. El agua contaminada supone la imposibilidad de uso humano de este recurso tan valioso. Este deterioro supone un grave peligro para el planeta y no hace más que exacerbar la pobreza entre los más vulnerables.', '../../php/functions/oceanos-plastico.jpg', 81, '2023-08-28 15:37:54'),
(38, 'Descubri arboles de colores..', 'Otoño o otras temporadas...?', 'Durante el otoño, muchos árboles caducifolios cambian de color, pasando de verde a tonos de amarillo, naranja, rojo o incluso púrpura. Esto ocurre debido a que las hojas dejan de producir clorofila y otros pigmentos presentes en las hojas, como los carotenoides y antocianinas, se vuelven más visibles.', '../../php/functions/arbol de colores.jpg', 81, '2023-08-28 15:46:08'),
(39, 'Las ballenas..', 'sabias que....', 'Las ballenas varían en tamaño desde las más pequeñas, como la ballena franca pigmea, que mide alrededor de 2,7 metros, hasta las más grandes, como la ballena azul, que puede superar los 30 metros de longitud y ser el animal más grande que haya existido en la Tierra. A lo largo de la historia, las ballenas han sido cazadas por su carne, aceite y otros productos, lo que llevó a la disminución de muchas poblaciones. Sin embargo, en la segunda mitad del siglo XX, se implementaron regulaciones internacionales para proteger a las ballenas, como la moratoria sobre la caza comercial de ballenas en 1986. Aunque algunas poblaciones se están recuperando, todavía enfrentan amenazas como la colisión con barcos, la contaminación y el cambio climático.', '../../php/functions/ballenas.jpg', 80, '2023-08-28 16:20:24'),
(40, 'Hoy conocí los koalas...', 'Osos de peluches?', 'A pesar de que parecen verdaderos osos de peluche, este adorable animal es un marsupial emparentado con los canguros que nada tiene que ver con los osos. Este animal icónico de Australia, que no está incluido entre los símbolos nacionales del país, se alimenta a base de hojas de eucalipto y es capaz de dormir hasta tres cuartas partes del día. Pero, pese a la falta de reconocimiento oficial, su imagen está estrechamente ligada a la del país oceánico.  Como la mayoría de los marsupiales tienen bolsas donde se desarrollan los recién nacidos, y en el caso de los koalas, las hembras - que suelen dar a luz a una única cría cada vez - llevan a los recién nacidos en la bolsa durante seis meses aproximadamente.  Un koala recién nacido es del tamaño de una gominola. Llamado joey, el bebé nace ciego y sin orejas. Tan pronto como nace, esta pequeña criatura se abre camino desde el canal de parto hasta la bolsa de su madre. Usando dos sentidos con los que nace bien desarrollados, el olfato y el tacto, junto con sus fuertes patas delanteras y un instinto que le dice en qué dirección dirigirse, el bebé koala llega hasta la bolsa.   Cuando la cría ha estado en la bolsa durante unos seis meses, su madre comienza a producir una sustancia especial llamada papilla. El joey se alimenta de ella además de la leche que ya está recibiendo. La papilla proviene de los intestinos de la madre y contiene bacterias que el joey necesita tener en su interior para poder digerir una dieta adulta de hojas de eucalipto.', '../../php/functions/leandro koala.jpg', 83, '2023-08-28 19:45:57'),
(41, 'Este collar de 9000 años es extraordinario, pero su dueño lo es aun más', 'conoci el collar mas viejo en la historia de la naturaleza..', 'Los arqueólogos han hallado otros adornos corporales en las antiguas tumbas de niños y adultos en Ba&#039;ja y otros yacimientos de Oriente Próximo, como Siria y Turquía. Pero Alarashi dice que nunca había encontrado uno tan elaborado y complejo. Los distintos tipos de cuentas (tubulares, planas o en forma de disco) son casi idénticos en tamaño y forma, lo que sugiere que una persona o un grupo de personas altamente cualificadas utilizaron herramientas especializadas para crearlas, afirma.  Algunas de las cuentas están hechas con materiales locales, mientras que otras proceden de lugares lejanos, como las conchas del Mar Rojo, a unos 100 km al sur, y la turquesa, probablemente de la península del Sinaí, a 240 km. Y puesto que la comunidad de Ba&#039;ja habitaba en un lugar remoto y escarpado en las montañas cercanas a Petra, esto plantea interrogantes sobre cómo y por qué el grupo habría obtenido tales materiales, dice Alarashi, que está afiliada al Consejo Superior de Investigaciones Científicas (CSIC) y a la Universidad de la Costa Azul (Francia). &quot;Es un misterio&quot;, afirma. &quot;A pesar de su aislamiento geográfico y topográfico, están muy bien conectados&quot;.  Las cuentas también presentan otros enigmas. Por ejemplo, algunas parecen recién hechas en el momento del enterramiento, mientras que otras ya estaban muy desgastadas. &quot;Estas diferencias significan algo, pero aún no sabemos qué&quot;, dice Alarashi. &quot;¿Quién le dio las cuentas usadas a este niño? Tal vez, con motivo de la muerte, el mayor de este niño dio o participó en la creación del collar dando sus propias cuentas viejas. O tal vez le dieron las cuentas a la niña al nacer&quot;.', '../../php/functions/collar viejo.jpg', 83, '2023-08-28 19:49:23'),
(42, 'Areas naturales de El Salvador', 'Esta limpio', 'El agua esta hecha con H2O', '../../php/functions/Captura de pantalla 2023-09-02 111549.png', 85, '2023-09-07 02:07:45'),
(43, 'affdsf', 'Pastel con forma de corazon, sabor a fresa con relleno de crema pastelera', 'ola, me gusta el qso', '../../php/functions/Captura de pantalla 2023-09-02 115207.png', 87, '2023-09-07 03:54:41');

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
(81, 'Jason Steven', 'Rodriguez Iraheta', 'Jason.Steven@gmail.com', 'Me gustan los gatos, las plantas y conocer sobre los animales maritimos', 'Masculino', '../../php/functions/jason.jpg', 'hola1234'),
(83, 'Leandro Alberto', 'Valencia Escobar', 'Leandro.Escobar@gmail.com', 'Me gustan los pajaros y conocer la diversidad de los animales.', 'Masculino', '../../php/functions/lenadro11.jpg', 'hola12345'),
(84, 'adrian', 'lopez', 'sapo123@gmail.com', 'soy loco', 'Masculino', '', '$2y$10$pZA522MC.1hB4LXIn0LwfOWZiq/B5ivROOCeyxFzJ6vEfiZ1TykMS'),
(85, 'jose', 'medina', 'hola@gmail.com', 'nose', 'Masculino', '../../php/functions/Captura de pantalla 2023-09-01 212233.png', '$2y$10$VEsV6rOddjkJM8ZPA/nvqOUrxc0.qFQ4Q2kGq7Je7FipY6twmBm8W'),
(86, 'chepea', 'adsad', 'cdb123@cdb.edu.sv', 'me gusta el pollo frito', 'Masculino', '../../php/functions/Captura de pantalla 2023-09-05 204642.png', '$2y$10$aiS09w1JsbLA5TIKORcSFOgE3YbWGZ5qJKkUahCZPKaCN/.2Vc8jW'),
(87, 'aaa', 'aaa', 'cocolito20006@gmail.com', 'me gusta la lucyaaa', 'Masculino', '../../php/functions/Captura de pantalla 2023-09-01 214609.png', '$2y$10$.NphMgkhoOI3RKBiRmje6e.o8.lkrqiNWHurslhorzFjrLDKTWZZe');

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
-- Indices de la tabla `feedreports`
--
ALTER TABLE `feedreports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_posts` (`postId`),
  ADD KEY `fk_users` (`usuarioReport`);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `feedreports`
--
ALTER TABLE `feedreports`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `noticias destacadas`
--
ALTER TABLE `noticias destacadas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `registroinformacion1`
--
ALTER TABLE `registroinformacion1`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `registrousuario`
--
ALTER TABLE `registrousuario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `feedreports`
--
ALTER TABLE `feedreports`
  ADD CONSTRAINT `fk_posts` FOREIGN KEY (`postId`) REFERENCES `registroinformacion1` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_users` FOREIGN KEY (`usuarioReport`) REFERENCES `registrousuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
