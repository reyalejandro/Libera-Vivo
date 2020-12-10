-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2020 a las 20:40:16
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `diario`
--
CREATE DATABASE IF NOT EXISTS `diario` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `diario`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `copete` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `cuerpo` varchar(9999) NOT NULL,
  `imagen_cuerpo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `copete`, `imagen`, `cuerpo`, `imagen_cuerpo`) VALUES
(2, 'Así están las encuestas de las elecciones en EEUU 2020', 'El demócrata Joe Biden aventaja al presidente Trump en ocho puntos', 'https://www.diariosumario.com.ar/u/fotografias/m/2020/11/2/f800x450-25861_77307_5050.jpg', 'A 24 horas para las elecciones del 3 de noviembre en Estados Unidos, el exvicepresidente Joe Biden aventaja al presidente Donald Trump por 7,2 puntos porcentuales en la intención de voto a nivel nacional, según la media de distintos sondeos elaborada por la web de noticias políticas estadounidense Real Clear Politics. La ventaja del candidato demócrata se mantiene en esta recta final de la campaña, con los dos aspirantes apurando las últimas horas de campaña en el puñado de estados que decidirán las eleccciones.      Las fuentes utilizadas para hacer la media, de forma individual, constatan la ventaja del que fuera vicepresidente con oscilaciones entre los 3 puntos porcentuales y 11 puntos.   Un simpatizantes de Trump el sábado en Idaho. Más información  ¿Cuáles son los 9 estados clave de las elecciones de EEUU 2020?  En los últimos meses, Biden, de 77 años, ha superado fácilmente a Trump, de 74, en la media de intención de voto y en las últimas semanas la ha aumentado. La controvertida gestión que el preside', 'https://ichef.bbci.co.uk/news/800/cpsprodpb/EB25/production/_113979106_788cafdb-afda-4718-90f4-7212c3e16662.jpg'),
(3, 'Argentina-Paraguay: la selección debió conformarse con un empate con sabor a poco', 'Argentina igualó ante Paraguay como local por la tercera fecha de las eliminatorias sudamericanas', 'https://bucket2.glanacion.com/anexos/fotos/74/3484374w740.jpg', 'El seleccionado argentino empató 1 a 1 con Paraguay en la Bombonera y dejó sus primeros dos puntos en estas Eliminatorias Sudamericanas, al cabo de tres presentaciones, en un partido al que a instancias del VAR le anularon un gol a Lionel Messi y el técnico Lionel Scaloni acertó al reemplazar al lesionado defensor Nicolás Tagliafico por el delantero Nicolás González, autor del tanto Albiceleste.\r\n\r\nEl compromiso no se presentaba propicio para Argentina. Más allá de una previa con varios integrantes del plantel que llegaron \"tocados\" desde Europa, las presencia de Lionel Messi y el retorno de Ángel Di María invitaban por sí solos para el optimismo. Además, por supuesto, del envión provocado por las dos primeras victorias sobre Ecuador y Bolivia.\r\n\r\n', 'https://bucket1.glanacion.com/anexos/fotos/11/3484411w740.jpg'),
(4, 'PlayStation 5: ¿Cuándo llega a la Argentina y cuánto costará?', 'La nueva generación de la consola de Sony arribó al mercado 2 días después que la Xbox Series. ¿Cuándo llegará a Argentina?', 'https://media.ambito.com/p/7f85e144e4a4819da4d6b06a11d9f7fe/adjuntos/239/imagenes/038/242/0038242142/asi-se-ve-la-parte-superior-la-ps5.jpg', 'La batalla entre Sony y Microsoft entró el pasado jueves en su fase decisiva con el lanzamiento por parte de la empresa japonesa de su nueva consola PlayStation 5, dos días después de que su rival estadounidense sacara a la venta la Xbox Series. A diferencia de Microsoft, que apostó por un único lanzamiento global, Sony pone en venta la consola en dos etapas: Australia, Nueva Zelanda, Japón, Corea del Sur, Estados Unidos, Canadá y México a partir del pasado jueves. El resto del mundo, y en particular Europa, tendrá que esperar al 19 de noviembre.  Debido a la pandemia, las compras se harán en línea. Sony advirtió que ninguna consola se venderá en las tiendas los días de lanzamiento. La PlayStation 5 salió a la venta la semana pasada en Estados Unidos, Canadá, México, Japón y Corea del Sur, el 19 completa con algunos otros países como España y a la Argentina llegará el próximo 4 de diciembre.', 'https://www.rosario3.com/__export/1605629104403/sites/rosario3/img/2020/11/17/diseno-de-la-nueva-ps5-y-sus-accesorios-1.jpeg_1756841869.jpeg'),
(14, 'Salarios anti crisis: cuánto gana hoy un programador en la Argentina', 'Según el último relevamiento de la Cessi, la media de la industria representa casi cinco veces el salario mínimo vital y móvil', 'https://bucket3.glanacion.com/anexos/fotos/97/3483497w1033.jpg', 'El sector de la informática, internet y las telecomunicaciones se consolida como uno de los que mejores sueldos paga en el país. De acuerdo con un relevamiento de la Cámara de la Industria Argentina del Software (Cessi), la media de la industria está en el orden de los $91.457, lo que representa casi cinco veces el salario mínimo vital y móvil, que se ubica en los $18.900 desde el mes pasado.  El dato se desprende del informe más reciente del Opssi (Observatorio Permanente de la Industria del Software y Servicios Informáticos), el estudio de la industria IT que realiza la Cessi en Argentina. Este año, participaron más de 300 empresas del sector informático de todo el país, lo que equivale a cerca de 25.000 trabajadores, un crecimiento en la muestra del 20% respecto de la edición anterior.El relevamiento muestra que los profesionales juniors de la industria IT en Argentina ganan, en promedio, $55.321 al mes; los semisenior, $83.042; y los senior, $117.941.', 'https://bucket1.glanacion.com/anexos/fotos/82/3380582w740.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
