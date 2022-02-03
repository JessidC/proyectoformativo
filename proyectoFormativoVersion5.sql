-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-02-2022 a las 21:59:09
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectoformativo`
--
CREATE DATABASE IF NOT EXISTS `proyectoformativo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `proyectoformativo`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(10) NOT NULL,
  `nombre_categoria` varchar(20) NOT NULL,
  `estado` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`, `estado`) VALUES
(1, 'Tecnologia', NULL),
(2, 'Hogar', NULL),
(3, 'Deportes', NULL),
(5, 'Electrodomésticos', NULL),
(8, 'Otros', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_departamento` int(10) NOT NULL,
  `nombre_departamento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_departamento`, `nombre_departamento`) VALUES
(5, 'ANTIOQUIA'),
(8, 'ATLÁNTICO'),
(11, 'BOGOTÁ, D.C.'),
(13, 'BOLÍVAR'),
(15, 'BOYACÁ'),
(17, 'CALDAS'),
(18, 'CAQUETÁ'),
(19, 'CAUCA'),
(20, 'CESAR'),
(23, 'CÓRDOBA'),
(25, 'CUNDINAMARCA'),
(27, 'CHOCÓ'),
(41, 'HUILA'),
(44, 'LA GUAJIRA'),
(47, 'MAGDALENA'),
(50, 'META'),
(52, 'NARIÑO'),
(54, 'NORTE DE SANTANDER'),
(63, 'QUINDIO'),
(66, 'RISARALDA'),
(68, 'SANTANDER'),
(70, 'SUCRE'),
(73, 'TOLIMA'),
(76, 'VALLE DEL CAUCA'),
(81, 'ARAUCA'),
(85, 'CASANARE'),
(86, 'PUTUMAYO'),
(88, 'ARCHIPIÉLAGO DE SAN ANDRÉS, PROVIDENCIA Y SANTA CATALINA'),
(91, 'AMAZONAS'),
(94, 'GUAINÍA'),
(95, 'GUAVIARE'),
(97, 'VAUPÉS'),
(99, 'VICHADA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `id_direccion` int(10) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `barrio` varchar(30) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `id_municipio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(10) NOT NULL,
  `nombre_marcas` varchar(20) NOT NULL,
  `estado` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `nombre_marcas`, `estado`) VALUES
(1, 'xiaom', NULL),
(2, 'samsung', NULL),
(3, 'Otra', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `id_municipio` int(10) NOT NULL,
  `nombre_municipio` varchar(100) NOT NULL,
  `id_departamento` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id_municipio`, `nombre_municipio`, `id_departamento`) VALUES
(1, 'Abriaquí', 5),
(2, 'Acacías', 50),
(3, 'Acandí', 27),
(4, 'Acevedo', 41),
(5, 'Achí', 13),
(6, 'Agrado', 41),
(7, 'Agua de Dios', 25),
(8, 'Aguachica', 20),
(9, 'Aguada', 68),
(10, 'Aguadas', 17),
(11, 'Aguazul', 85),
(12, 'Agustín Codazzi', 20),
(13, 'Aipe', 41),
(14, 'Albania', 18),
(15, 'Albania', 44),
(16, 'Albania', 68),
(17, 'Albán', 25),
(18, 'Albán (San José)', 52),
(19, 'Alcalá', 76),
(20, 'Alejandria', 5),
(21, 'Algarrobo', 47),
(22, 'Algeciras', 41),
(23, 'Almaguer', 19),
(24, 'Almeida', 15),
(25, 'Alpujarra', 73),
(26, 'Altamira', 41),
(27, 'Alto Baudó (Pie de Pato)', 27),
(28, 'Altos del Rosario', 13),
(29, 'Alvarado', 73),
(30, 'Amagá', 5),
(31, 'Amalfi', 5),
(32, 'Ambalema', 73),
(33, 'Anapoima', 25),
(34, 'Ancuya', 52),
(35, 'Andalucía', 76),
(36, 'Andes', 5),
(37, 'Angelópolis', 5),
(38, 'Angostura', 5),
(39, 'Anolaima', 25),
(40, 'Anorí', 5),
(41, 'Anserma', 17),
(42, 'Ansermanuevo', 76),
(43, 'Anzoátegui', 73),
(44, 'Anzá', 5),
(45, 'Apartadó', 5),
(46, 'Apulo', 25),
(47, 'Apía', 66),
(48, 'Aquitania', 15),
(49, 'Aracataca', 47),
(50, 'Aranzazu', 17),
(51, 'Aratoca', 68),
(52, 'Arauca', 81),
(53, 'Arauquita', 81),
(54, 'Arbeláez', 25),
(55, 'Arboleda (Berruecos)', 52),
(56, 'Arboledas', 54),
(57, 'Arboletes', 5),
(58, 'Arcabuco', 15),
(59, 'Arenal', 13),
(60, 'Argelia', 5),
(61, 'Argelia', 19),
(62, 'Argelia', 76),
(63, 'Ariguaní (El Difícil)', 47),
(64, 'Arjona', 13),
(65, 'Armenia', 5),
(66, 'Armenia', 63),
(67, 'Armero (Guayabal)', 73),
(68, 'Arroyohondo', 13),
(69, 'Astrea', 20),
(70, 'Ataco', 73),
(71, 'Atrato (Yuto)', 27),
(72, 'Ayapel', 23),
(73, 'Bagadó', 27),
(74, 'Bahía Solano (Mútis)', 27),
(75, 'Bajo Baudó (Pizarro)', 27),
(76, 'Balboa', 19),
(77, 'Balboa', 66),
(78, 'Baranoa', 8),
(79, 'Baraya', 41),
(80, 'Barbacoas', 52),
(81, 'Barbosa', 5),
(82, 'Barbosa', 68),
(83, 'Barichara', 68),
(84, 'Barranca de Upía', 50),
(85, 'Barrancabermeja', 68),
(86, 'Barrancas', 44),
(87, 'Barranco de Loba', 13),
(88, 'Barranquilla', 8),
(89, 'Becerríl', 20),
(90, 'Belalcázar', 17),
(91, 'Bello', 5),
(92, 'Belmira', 5),
(93, 'Beltrán', 25),
(94, 'Belén', 15),
(95, 'Belén', 52),
(96, 'Belén de Bajirá', 27),
(97, 'Belén de Umbría', 66),
(98, 'Belén de los Andaquíes', 18),
(99, 'Berbeo', 15),
(100, 'Betania', 5),
(101, 'Beteitiva', 15),
(102, 'Betulia', 5),
(103, 'Betulia', 68),
(104, 'Bituima', 25),
(105, 'Boavita', 15),
(106, 'Bochalema', 54),
(107, 'Bogotá D.C.', 11),
(108, 'Bojacá', 25),
(109, 'Bojayá (Bellavista)', 27),
(110, 'Bolívar', 5),
(111, 'Bolívar', 19),
(112, 'Bolívar', 68),
(113, 'Bolívar', 76),
(114, 'Bosconia', 20),
(115, 'Boyacá', 15),
(116, 'Briceño', 5),
(117, 'Briceño', 15),
(118, 'Bucaramanga', 68),
(119, 'Bucarasica', 54),
(120, 'Buenaventura', 76),
(121, 'Buenavista', 15),
(122, 'Buenavista', 23),
(123, 'Buenavista', 63),
(124, 'Buenavista', 70),
(125, 'Buenos Aires', 19),
(126, 'Buesaco', 52),
(127, 'Buga', 76),
(128, 'Bugalagrande', 76),
(129, 'Burítica', 5),
(130, 'Busbanza', 15),
(131, 'Cabrera', 25),
(132, 'Cabrera', 68),
(133, 'Cabuyaro', 50),
(134, 'Cachipay', 25),
(135, 'Caicedo', 5),
(136, 'Caicedonia', 76),
(137, 'Caimito', 70),
(138, 'Cajamarca', 73),
(139, 'Cajibío', 19),
(140, 'Cajicá', 25),
(141, 'Calamar', 13),
(142, 'Calamar', 95),
(143, 'Calarcá', 63),
(144, 'Caldas', 5),
(145, 'Caldas', 15),
(146, 'Caldono', 19),
(147, 'California', 68),
(148, 'Calima (Darién)', 76),
(149, 'Caloto', 19),
(150, 'Calí', 76),
(151, 'Campamento', 5),
(152, 'Campo de la Cruz', 8),
(153, 'Campoalegre', 41),
(154, 'Campohermoso', 15),
(155, 'Canalete', 23),
(156, 'Candelaria', 8),
(157, 'Candelaria', 76),
(158, 'Cantagallo', 13),
(159, 'Cantón de San Pablo', 27),
(160, 'Caparrapí', 25),
(161, 'Capitanejo', 68),
(162, 'Caracolí', 5),
(163, 'Caramanta', 5),
(164, 'Carcasí', 68),
(165, 'Carepa', 5),
(166, 'Carmen de Apicalá', 73),
(167, 'Carmen de Carupa', 25),
(168, 'Carmen de Viboral', 5),
(169, 'Carmen del Darién (CURBARADÓ)', 27),
(170, 'Carolina', 5),
(171, 'Cartagena', 13),
(172, 'Cartagena del Chairá', 18),
(173, 'Cartago', 76),
(174, 'Carurú', 97),
(175, 'Casabianca', 73),
(176, 'Castilla la Nueva', 50),
(177, 'Caucasia', 5),
(178, 'Cañasgordas', 5),
(179, 'Cepita', 68),
(180, 'Cereté', 23),
(181, 'Cerinza', 15),
(182, 'Cerrito', 68),
(183, 'Cerro San Antonio', 47),
(184, 'Chachaguí', 52),
(185, 'Chaguaní', 25),
(186, 'Chalán', 70),
(187, 'Chaparral', 73),
(188, 'Charalá', 68),
(189, 'Charta', 68),
(190, 'Chigorodó', 5),
(191, 'Chima', 68),
(192, 'Chimichagua', 20),
(193, 'Chimá', 23),
(194, 'Chinavita', 15),
(195, 'Chinchiná', 17),
(196, 'Chinácota', 54),
(197, 'Chinú', 23),
(198, 'Chipaque', 25),
(199, 'Chipatá', 68),
(200, 'Chiquinquirá', 15),
(201, 'Chiriguaná', 20),
(202, 'Chiscas', 15),
(203, 'Chita', 15),
(204, 'Chitagá', 54),
(205, 'Chitaraque', 15),
(206, 'Chivatá', 15),
(207, 'Chivolo', 47),
(208, 'Choachí', 25),
(209, 'Chocontá', 25),
(210, 'Chámeza', 85),
(211, 'Chía', 25),
(212, 'Chíquiza', 15),
(213, 'Chívor', 15),
(214, 'Cicuco', 13),
(215, 'Cimitarra', 68),
(216, 'Circasia', 63),
(217, 'Cisneros', 5),
(218, 'Ciénaga', 15),
(219, 'Ciénaga', 47),
(220, 'Ciénaga de Oro', 23),
(221, 'Clemencia', 13),
(222, 'Cocorná', 5),
(223, 'Coello', 73),
(224, 'Cogua', 25),
(225, 'Colombia', 41),
(226, 'Colosó (Ricaurte)', 70),
(227, 'Colón', 86),
(228, 'Colón (Génova)', 52),
(229, 'Concepción', 5),
(230, 'Concepción', 68),
(231, 'Concordia', 5),
(232, 'Concordia', 47),
(233, 'Condoto', 27),
(234, 'Confines', 68),
(235, 'Consaca', 52),
(236, 'Contadero', 52),
(237, 'Contratación', 68),
(238, 'Convención', 54),
(239, 'Copacabana', 5),
(240, 'Coper', 15),
(241, 'Cordobá', 63),
(242, 'Corinto', 19),
(243, 'Coromoro', 68),
(244, 'Corozal', 70),
(245, 'Corrales', 15),
(246, 'Cota', 25),
(247, 'Cotorra', 23),
(248, 'Covarachía', 15),
(249, 'Coveñas', 70),
(250, 'Coyaima', 73),
(251, 'Cravo Norte', 81),
(252, 'Cuaspud (Carlosama)', 52),
(253, 'Cubarral', 50),
(254, 'Cubará', 15),
(255, 'Cucaita', 15),
(256, 'Cucunubá', 25),
(257, 'Cucutilla', 54),
(258, 'Cuitiva', 15),
(259, 'Cumaral', 50),
(260, 'Cumaribo', 99),
(261, 'Cumbal', 52),
(262, 'Cumbitara', 52),
(263, 'Cunday', 73),
(264, 'Curillo', 18),
(265, 'Curití', 68),
(266, 'Curumaní', 20),
(267, 'Cáceres', 5),
(268, 'Cáchira', 54),
(269, 'Cácota', 54),
(270, 'Cáqueza', 25),
(271, 'Cértegui', 27),
(272, 'Cómbita', 15),
(273, 'Córdoba', 13),
(274, 'Córdoba', 52),
(275, 'Cúcuta', 54),
(276, 'Dabeiba', 5),
(277, 'Dagua', 76),
(278, 'Dibulla', 44),
(279, 'Distracción', 44),
(280, 'Dolores', 73),
(281, 'Don Matías', 5),
(282, 'Dos Quebradas', 66),
(283, 'Duitama', 15),
(284, 'Durania', 54),
(285, 'Ebéjico', 5),
(286, 'El Bagre', 5),
(287, 'El Banco', 47),
(288, 'El Cairo', 76),
(289, 'El Calvario', 50),
(290, 'El Carmen', 54),
(291, 'El Carmen', 68),
(292, 'El Carmen de Atrato', 27),
(293, 'El Carmen de Bolívar', 13),
(294, 'El Castillo', 50),
(295, 'El Cerrito', 76),
(296, 'El Charco', 52),
(297, 'El Cocuy', 15),
(298, 'El Colegio', 25),
(299, 'El Copey', 20),
(300, 'El Doncello', 18),
(301, 'El Dorado', 50),
(302, 'El Dovio', 76),
(303, 'El Espino', 15),
(304, 'El Guacamayo', 68),
(305, 'El Guamo', 13),
(306, 'El Molino', 44),
(307, 'El Paso', 20),
(308, 'El Paujil', 18),
(309, 'El Peñol', 52),
(310, 'El Peñon', 13),
(311, 'El Peñon', 68),
(312, 'El Peñón', 25),
(313, 'El Piñon', 47),
(314, 'El Playón', 68),
(315, 'El Retorno', 95),
(316, 'El Retén', 47),
(317, 'El Roble', 70),
(318, 'El Rosal', 25),
(319, 'El Rosario', 52),
(320, 'El Tablón de Gómez', 52),
(321, 'El Tambo', 19),
(322, 'El Tambo', 52),
(323, 'El Tarra', 54),
(324, 'El Zulia', 54),
(325, 'El Águila', 76),
(326, 'Elías', 41),
(327, 'Encino', 68),
(328, 'Enciso', 68),
(329, 'Entrerríos', 5),
(330, 'Envigado', 5),
(331, 'Espinal', 73),
(332, 'Facatativá', 25),
(333, 'Falan', 73),
(334, 'Filadelfia', 17),
(335, 'Filandia', 63),
(336, 'Firavitoba', 15),
(337, 'Flandes', 73),
(338, 'Florencia', 18),
(339, 'Florencia', 19),
(340, 'Floresta', 15),
(341, 'Florida', 76),
(342, 'Floridablanca', 68),
(343, 'Florián', 68),
(344, 'Fonseca', 44),
(345, 'Fortúl', 81),
(346, 'Fosca', 25),
(347, 'Francisco Pizarro', 52),
(348, 'Fredonia', 5),
(349, 'Fresno', 73),
(350, 'Frontino', 5),
(351, 'Fuente de Oro', 50),
(352, 'Fundación', 47),
(353, 'Funes', 52),
(354, 'Funza', 25),
(355, 'Fusagasugá', 25),
(356, 'Fómeque', 25),
(357, 'Fúquene', 25),
(358, 'Gachalá', 25),
(359, 'Gachancipá', 25),
(360, 'Gachantivá', 15),
(361, 'Gachetá', 25),
(362, 'Galapa', 8),
(363, 'Galeras (Nueva Granada)', 70),
(364, 'Galán', 68),
(365, 'Gama', 25),
(366, 'Gamarra', 20),
(367, 'Garagoa', 15),
(368, 'Garzón', 41),
(369, 'Gigante', 41),
(370, 'Ginebra', 76),
(371, 'Giraldo', 5),
(372, 'Girardot', 25),
(373, 'Girardota', 5),
(374, 'Girón', 68),
(375, 'Gonzalez', 20),
(376, 'Gramalote', 54),
(377, 'Granada', 5),
(378, 'Granada', 25),
(379, 'Granada', 50),
(380, 'Guaca', 68),
(381, 'Guacamayas', 15),
(382, 'Guacarí', 76),
(383, 'Guachavés', 52),
(384, 'Guachené', 19),
(385, 'Guachetá', 25),
(386, 'Guachucal', 52),
(387, 'Guadalupe', 5),
(388, 'Guadalupe', 41),
(389, 'Guadalupe', 68),
(390, 'Guaduas', 25),
(391, 'Guaitarilla', 52),
(392, 'Gualmatán', 52),
(393, 'Guamal', 47),
(394, 'Guamal', 50),
(395, 'Guamo', 73),
(396, 'Guapota', 68),
(397, 'Guapí', 19),
(398, 'Guaranda', 70),
(399, 'Guarne', 5),
(400, 'Guasca', 25),
(401, 'Guatapé', 5),
(402, 'Guataquí', 25),
(403, 'Guatavita', 25),
(404, 'Guateque', 15),
(405, 'Guavatá', 68),
(406, 'Guayabal de Siquima', 25),
(407, 'Guayabetal', 25),
(408, 'Guayatá', 15),
(409, 'Guepsa', 68),
(410, 'Guicán', 15),
(411, 'Gutiérrez', 25),
(412, 'Guática', 66),
(413, 'Gámbita', 68),
(414, 'Gámeza', 15),
(415, 'Génova', 63),
(416, 'Gómez Plata', 5),
(417, 'Hacarí', 54),
(418, 'Hatillo de Loba', 13),
(419, 'Hato', 68),
(420, 'Hato Corozal', 85),
(421, 'Hatonuevo', 44),
(422, 'Heliconia', 5),
(423, 'Herrán', 54),
(424, 'Herveo', 73),
(425, 'Hispania', 5),
(426, 'Hobo', 41),
(427, 'Honda', 73),
(428, 'Ibagué', 73),
(429, 'Icononzo', 73),
(430, 'Iles', 52),
(431, 'Imúes', 52),
(432, 'Inzá', 19),
(433, 'Inírida', 94),
(434, 'Ipiales', 52),
(435, 'Isnos', 41),
(436, 'Istmina', 27),
(437, 'Itagüí', 5),
(438, 'Ituango', 5),
(439, 'Izá', 15),
(440, 'Jambaló', 19),
(441, 'Jamundí', 76),
(442, 'Jardín', 5),
(443, 'Jenesano', 15),
(444, 'Jericó', 5),
(445, 'Jericó', 15),
(446, 'Jerusalén', 25),
(447, 'Jesús María', 68),
(448, 'Jordán', 68),
(449, 'Juan de Acosta', 8),
(450, 'Junín', 25),
(451, 'Juradó', 27),
(452, 'La Apartada y La Frontera', 23),
(453, 'La Argentina', 41),
(454, 'La Belleza', 68),
(455, 'La Calera', 25),
(456, 'La Capilla', 15),
(457, 'La Ceja', 5),
(458, 'La Celia', 66),
(459, 'La Cruz', 52),
(460, 'La Cumbre', 76),
(461, 'La Dorada', 17),
(462, 'La Esperanza', 54),
(463, 'La Estrella', 5),
(464, 'La Florida', 52),
(465, 'La Gloria', 20),
(466, 'La Jagua de Ibirico', 20),
(467, 'La Jagua del Pilar', 44),
(468, 'La Llanada', 52),
(469, 'La Macarena', 50),
(470, 'La Merced', 17),
(471, 'La Mesa', 25),
(472, 'La Montañita', 18),
(473, 'La Palma', 25),
(474, 'La Paz', 68),
(475, 'La Paz (Robles)', 20),
(476, 'La Peña', 25),
(477, 'La Pintada', 5),
(478, 'La Plata', 41),
(479, 'La Playa', 54),
(480, 'La Primavera', 99),
(481, 'La Salina', 85),
(482, 'La Sierra', 19),
(483, 'La Tebaida', 63),
(484, 'La Tola', 52),
(485, 'La Unión', 5),
(486, 'La Unión', 52),
(487, 'La Unión', 70),
(488, 'La Unión', 76),
(489, 'La Uvita', 15),
(490, 'La Vega', 19),
(491, 'La Vega', 25),
(492, 'La Victoria', 15),
(493, 'La Victoria', 17),
(494, 'La Victoria', 76),
(495, 'La Virginia', 66),
(496, 'Labateca', 54),
(497, 'Labranzagrande', 15),
(498, 'Landázuri', 68),
(499, 'Lebrija', 68),
(500, 'Leiva', 52),
(501, 'Lejanías', 50),
(502, 'Lenguazaque', 25),
(503, 'Leticia', 91),
(504, 'Liborina', 5),
(505, 'Linares', 52),
(506, 'Lloró', 27),
(507, 'Lorica', 23),
(508, 'Los Córdobas', 23),
(509, 'Los Palmitos', 70),
(510, 'Los Patios', 54),
(511, 'Los Santos', 68),
(512, 'Lourdes', 54),
(513, 'Luruaco', 8),
(514, 'Lérida', 73),
(515, 'Líbano', 73),
(516, 'López (Micay)', 19),
(517, 'Macanal', 15),
(518, 'Macaravita', 68),
(519, 'Maceo', 5),
(520, 'Machetá', 25),
(521, 'Madrid', 25),
(522, 'Magangué', 13),
(523, 'Magüi (Payán)', 52),
(524, 'Mahates', 13),
(525, 'Maicao', 44),
(526, 'Majagual', 70),
(527, 'Malambo', 8),
(528, 'Mallama (Piedrancha)', 52),
(529, 'Manatí', 8),
(530, 'Manaure', 44),
(531, 'Manaure Balcón del Cesar', 20),
(532, 'Manizales', 17),
(533, 'Manta', 25),
(534, 'Manzanares', 17),
(535, 'Maní', 85),
(536, 'Mapiripan', 50),
(537, 'Margarita', 13),
(538, 'Marinilla', 5),
(539, 'Maripí', 15),
(540, 'Mariquita', 73),
(541, 'Marmato', 17),
(542, 'Marquetalia', 17),
(543, 'Marsella', 66),
(544, 'Marulanda', 17),
(545, 'María la Baja', 13),
(546, 'Matanza', 68),
(547, 'Medellín', 5),
(548, 'Medina', 25),
(549, 'Medio Atrato', 27),
(550, 'Medio Baudó', 27),
(551, 'Medio San Juan (ANDAGOYA)', 27),
(552, 'Melgar', 73),
(553, 'Mercaderes', 19),
(554, 'Mesetas', 50),
(555, 'Milán', 18),
(556, 'Miraflores', 15),
(557, 'Miraflores', 95),
(558, 'Miranda', 19),
(559, 'Mistrató', 66),
(560, 'Mitú', 97),
(561, 'Mocoa', 86),
(562, 'Mogotes', 68),
(563, 'Molagavita', 68),
(564, 'Momil', 23),
(565, 'Mompós', 13),
(566, 'Mongua', 15),
(567, 'Monguí', 15),
(568, 'Moniquirá', 15),
(569, 'Montebello', 5),
(570, 'Montecristo', 13),
(571, 'Montelíbano', 23),
(572, 'Montenegro', 63),
(573, 'Monteria', 23),
(574, 'Monterrey', 85),
(575, 'Morales', 13),
(576, 'Morales', 19),
(577, 'Morelia', 18),
(578, 'Morroa', 70),
(579, 'Mosquera', 25),
(580, 'Mosquera', 52),
(581, 'Motavita', 15),
(582, 'Moñitos', 23),
(583, 'Murillo', 73),
(584, 'Murindó', 5),
(585, 'Mutatá', 5),
(586, 'Mutiscua', 54),
(587, 'Muzo', 15),
(588, 'Málaga', 68),
(589, 'Nariño', 5),
(590, 'Nariño', 25),
(591, 'Nariño', 52),
(592, 'Natagaima', 73),
(593, 'Nechí', 5),
(594, 'Necoclí', 5),
(595, 'Neira', 17),
(596, 'Neiva', 41),
(597, 'Nemocón', 25),
(598, 'Nilo', 25),
(599, 'Nimaima', 25),
(600, 'Nobsa', 15),
(601, 'Nocaima', 25),
(602, 'Norcasia', 17),
(603, 'Norosí', 13),
(604, 'Novita', 27),
(605, 'Nueva Granada', 47),
(606, 'Nuevo Colón', 15),
(607, 'Nunchía', 85),
(608, 'Nuquí', 27),
(609, 'Nátaga', 41),
(610, 'Obando', 76),
(611, 'Ocamonte', 68),
(612, 'Ocaña', 54),
(613, 'Oiba', 68),
(614, 'Oicatá', 15),
(615, 'Olaya', 5),
(616, 'Olaya Herrera', 52),
(617, 'Onzaga', 68),
(618, 'Oporapa', 41),
(619, 'Orito', 86),
(620, 'Orocué', 85),
(621, 'Ortega', 73),
(622, 'Ospina', 52),
(623, 'Otanche', 15),
(624, 'Ovejas', 70),
(625, 'Pachavita', 15),
(626, 'Pacho', 25),
(627, 'Padilla', 19),
(628, 'Paicol', 41),
(629, 'Pailitas', 20),
(630, 'Paime', 25),
(631, 'Paipa', 15),
(632, 'Pajarito', 15),
(633, 'Palermo', 41),
(634, 'Palestina', 17),
(635, 'Palestina', 41),
(636, 'Palmar', 68),
(637, 'Palmar de Varela', 8),
(638, 'Palmas del Socorro', 68),
(639, 'Palmira', 76),
(640, 'Palmito', 70),
(641, 'Palocabildo', 73),
(642, 'Pamplona', 54),
(643, 'Pamplonita', 54),
(644, 'Pandi', 25),
(645, 'Panqueba', 15),
(646, 'Paratebueno', 25),
(647, 'Pasca', 25),
(648, 'Patía (El Bordo)', 19),
(649, 'Pauna', 15),
(650, 'Paya', 15),
(651, 'Paz de Ariporo', 85),
(652, 'Paz de Río', 15),
(653, 'Pedraza', 47),
(654, 'Pelaya', 20),
(655, 'Pensilvania', 17),
(656, 'Peque', 5),
(657, 'Pereira', 66),
(658, 'Pesca', 15),
(659, 'Peñol', 5),
(660, 'Piamonte', 19),
(661, 'Pie de Cuesta', 68),
(662, 'Piedras', 73),
(663, 'Piendamó', 19),
(664, 'Pijao', 63),
(665, 'Pijiño', 47),
(666, 'Pinchote', 68),
(667, 'Pinillos', 13),
(668, 'Piojo', 8),
(669, 'Pisva', 15),
(670, 'Pital', 41),
(671, 'Pitalito', 41),
(672, 'Pivijay', 47),
(673, 'Planadas', 73),
(674, 'Planeta Rica', 23),
(675, 'Plato', 47),
(676, 'Policarpa', 52),
(677, 'Polonuevo', 8),
(678, 'Ponedera', 8),
(679, 'Popayán', 19),
(680, 'Pore', 85),
(681, 'Potosí', 52),
(682, 'Pradera', 76),
(683, 'Prado', 73),
(684, 'Providencia', 52),
(685, 'Providencia', 88),
(686, 'Pueblo Bello', 20),
(687, 'Pueblo Nuevo', 23),
(688, 'Pueblo Rico', 66),
(689, 'Pueblorrico', 5),
(690, 'Puebloviejo', 47),
(691, 'Puente Nacional', 68),
(692, 'Puerres', 52),
(693, 'Puerto Asís', 86),
(694, 'Puerto Berrío', 5),
(695, 'Puerto Boyacá', 15),
(696, 'Puerto Caicedo', 86),
(697, 'Puerto Carreño', 99),
(698, 'Puerto Colombia', 8),
(699, 'Puerto Concordia', 50),
(700, 'Puerto Escondido', 23),
(701, 'Puerto Gaitán', 50),
(702, 'Puerto Guzmán', 86),
(703, 'Puerto Leguízamo', 86),
(704, 'Puerto Libertador', 23),
(705, 'Puerto Lleras', 50),
(706, 'Puerto López', 50),
(707, 'Puerto Nare', 5),
(708, 'Puerto Nariño', 91),
(709, 'Puerto Parra', 68),
(710, 'Puerto Rico', 18),
(711, 'Puerto Rico', 50),
(712, 'Puerto Rondón', 81),
(713, 'Puerto Salgar', 25),
(714, 'Puerto Santander', 54),
(715, 'Puerto Tejada', 19),
(716, 'Puerto Triunfo', 5),
(717, 'Puerto Wilches', 68),
(718, 'Pulí', 25),
(719, 'Pupiales', 52),
(720, 'Puracé (Coconuco)', 19),
(721, 'Purificación', 73),
(722, 'Purísima', 23),
(723, 'Pácora', 17),
(724, 'Páez', 15),
(725, 'Páez (Belalcazar)', 19),
(726, 'Páramo', 68),
(727, 'Quebradanegra', 25),
(728, 'Quetame', 25),
(729, 'Quibdó', 27),
(730, 'Quimbaya', 63),
(731, 'Quinchía', 66),
(732, 'Quipama', 15),
(733, 'Quipile', 25),
(734, 'Ragonvalia', 54),
(735, 'Ramiriquí', 15),
(736, 'Recetor', 85),
(737, 'Regidor', 13),
(738, 'Remedios', 5),
(739, 'Remolino', 47),
(740, 'Repelón', 8),
(741, 'Restrepo', 50),
(742, 'Restrepo', 76),
(743, 'Retiro', 5),
(744, 'Ricaurte', 25),
(745, 'Ricaurte', 52),
(746, 'Rio Negro', 68),
(747, 'Rioblanco', 73),
(748, 'Riofrío', 76),
(749, 'Riohacha', 44),
(750, 'Risaralda', 17),
(751, 'Rivera', 41),
(752, 'Roberto Payán (San José)', 52),
(753, 'Roldanillo', 76),
(754, 'Roncesvalles', 73),
(755, 'Rondón', 15),
(756, 'Rosas', 19),
(757, 'Rovira', 73),
(758, 'Ráquira', 15),
(759, 'Río Iró', 27),
(760, 'Río Quito', 27),
(761, 'Río Sucio', 17),
(762, 'Río Viejo', 13),
(763, 'Río de oro', 20),
(764, 'Ríonegro', 5),
(765, 'Ríosucio', 27),
(766, 'Sabana de Torres', 68),
(767, 'Sabanagrande', 8),
(768, 'Sabanalarga', 5),
(769, 'Sabanalarga', 8),
(770, 'Sabanalarga', 85),
(771, 'Sabanas de San Angel (SAN ANGEL)', 47),
(772, 'Sabaneta', 5),
(773, 'Saboyá', 15),
(774, 'Sahagún', 23),
(775, 'Saladoblanco', 41),
(776, 'Salamina', 17),
(777, 'Salamina', 47),
(778, 'Salazar', 54),
(779, 'Saldaña', 73),
(780, 'Salento', 63),
(781, 'Salgar', 5),
(782, 'Samacá', 15),
(783, 'Samaniego', 52),
(784, 'Samaná', 17),
(785, 'Sampués', 70),
(786, 'San Agustín', 41),
(787, 'San Alberto', 20),
(788, 'San Andrés', 68),
(789, 'San Andrés Sotavento', 23),
(790, 'San Andrés de Cuerquía', 5),
(791, 'San Antero', 23),
(792, 'San Antonio', 73),
(793, 'San Antonio de Tequendama', 25),
(794, 'San Benito', 68),
(795, 'San Benito Abad', 70),
(796, 'San Bernardo', 25),
(797, 'San Bernardo', 52),
(798, 'San Bernardo del Viento', 23),
(799, 'San Calixto', 54),
(800, 'San Carlos', 5),
(801, 'San Carlos', 23),
(802, 'San Carlos de Guaroa', 50),
(803, 'San Cayetano', 25),
(804, 'San Cayetano', 54),
(805, 'San Cristobal', 13),
(806, 'San Diego', 20),
(807, 'San Eduardo', 15),
(808, 'San Estanislao', 13),
(809, 'San Fernando', 13),
(810, 'San Francisco', 5),
(811, 'San Francisco', 25),
(812, 'San Francisco', 86),
(813, 'San Gíl', 68),
(814, 'San Jacinto', 13),
(815, 'San Jacinto del Cauca', 13),
(816, 'San Jerónimo', 5),
(817, 'San Joaquín', 68),
(818, 'San José', 17),
(819, 'San José de Miranda', 68),
(820, 'San José de Montaña', 5),
(821, 'San José de Pare', 15),
(822, 'San José de Uré', 23),
(823, 'San José del Fragua', 18),
(824, 'San José del Guaviare', 95),
(825, 'San José del Palmar', 27),
(826, 'San Juan de Arama', 50),
(827, 'San Juan de Betulia', 70),
(828, 'San Juan de Nepomuceno', 13),
(829, 'San Juan de Pasto', 52),
(830, 'San Juan de Río Seco', 25),
(831, 'San Juan de Urabá', 5),
(832, 'San Juan del Cesar', 44),
(833, 'San Juanito', 50),
(834, 'San Lorenzo', 52),
(835, 'San Luis', 73),
(836, 'San Luís', 5),
(837, 'San Luís de Gaceno', 15),
(838, 'San Luís de Palenque', 85),
(839, 'San Marcos', 70),
(840, 'San Martín', 20),
(841, 'San Martín', 50),
(842, 'San Martín de Loba', 13),
(843, 'San Mateo', 15),
(844, 'San Miguel', 68),
(845, 'San Miguel', 86),
(846, 'San Miguel de Sema', 15),
(847, 'San Onofre', 70),
(848, 'San Pablo', 13),
(849, 'San Pablo', 52),
(850, 'San Pablo de Borbur', 15),
(851, 'San Pedro', 5),
(852, 'San Pedro', 70),
(853, 'San Pedro', 76),
(854, 'San Pedro de Cartago', 52),
(855, 'San Pedro de Urabá', 5),
(856, 'San Pelayo', 23),
(857, 'San Rafael', 5),
(858, 'San Roque', 5),
(859, 'San Sebastián', 19),
(860, 'San Sebastián de Buenavista', 47),
(861, 'San Vicente', 5),
(862, 'San Vicente del Caguán', 18),
(863, 'San Vicente del Chucurí', 68),
(864, 'San Zenón', 47),
(865, 'Sandoná', 52),
(866, 'Santa Ana', 47),
(867, 'Santa Bárbara', 5),
(868, 'Santa Bárbara', 68),
(869, 'Santa Bárbara (Iscuandé)', 52),
(870, 'Santa Bárbara de Pinto', 47),
(871, 'Santa Catalina', 13),
(872, 'Santa Fé de Antioquia', 5),
(873, 'Santa Genoveva de Docorodó', 27),
(874, 'Santa Helena del Opón', 68),
(875, 'Santa Isabel', 73),
(876, 'Santa Lucía', 8),
(877, 'Santa Marta', 47),
(878, 'Santa María', 15),
(879, 'Santa María', 41),
(880, 'Santa Rosa', 13),
(881, 'Santa Rosa', 19),
(882, 'Santa Rosa de Cabal', 66),
(883, 'Santa Rosa de Osos', 5),
(884, 'Santa Rosa de Viterbo', 15),
(885, 'Santa Rosa del Sur', 13),
(886, 'Santa Rosalía', 99),
(887, 'Santa Sofía', 15),
(888, 'Santana', 15),
(889, 'Santander de Quilichao', 19),
(890, 'Santiago', 54),
(891, 'Santiago', 86),
(892, 'Santo Domingo', 5),
(893, 'Santo Tomás', 8),
(894, 'Santuario', 5),
(895, 'Santuario', 66),
(896, 'Sapuyes', 52),
(897, 'Saravena', 81),
(898, 'Sardinata', 54),
(899, 'Sasaima', 25),
(900, 'Sativanorte', 15),
(901, 'Sativasur', 15),
(902, 'Segovia', 5),
(903, 'Sesquilé', 25),
(904, 'Sevilla', 76),
(905, 'Siachoque', 15),
(906, 'Sibaté', 25),
(907, 'Sibundoy', 86),
(908, 'Silos', 54),
(909, 'Silvania', 25),
(910, 'Silvia', 19),
(911, 'Simacota', 68),
(912, 'Simijaca', 25),
(913, 'Simití', 13),
(914, 'Sincelejo', 70),
(915, 'Sincé', 70),
(916, 'Sipí', 27),
(917, 'Sitionuevo', 47),
(918, 'Soacha', 25),
(919, 'Soatá', 15),
(920, 'Socha', 15),
(921, 'Socorro', 68),
(922, 'Socotá', 15),
(923, 'Sogamoso', 15),
(924, 'Solano', 18),
(925, 'Soledad', 8),
(926, 'Solita', 18),
(927, 'Somondoco', 15),
(928, 'Sonsón', 5),
(929, 'Sopetrán', 5),
(930, 'Soplaviento', 13),
(931, 'Sopó', 25),
(932, 'Sora', 15),
(933, 'Soracá', 15),
(934, 'Sotaquirá', 15),
(935, 'Sotara (Paispamba)', 19),
(936, 'Sotomayor (Los Andes)', 52),
(937, 'Suaita', 68),
(938, 'Suan', 8),
(939, 'Suaza', 41),
(940, 'Subachoque', 25),
(941, 'Sucre', 19),
(942, 'Sucre', 68),
(943, 'Sucre', 70),
(944, 'Suesca', 25),
(945, 'Supatá', 25),
(946, 'Supía', 17),
(947, 'Suratá', 68),
(948, 'Susa', 25),
(949, 'Susacón', 15),
(950, 'Sutamarchán', 15),
(951, 'Sutatausa', 25),
(952, 'Sutatenza', 15),
(953, 'Suárez', 19),
(954, 'Suárez', 73),
(955, 'Sácama', 85),
(956, 'Sáchica', 15),
(957, 'Tabio', 25),
(958, 'Tadó', 27),
(959, 'Talaigua Nuevo', 13),
(960, 'Tamalameque', 20),
(961, 'Tame', 81),
(962, 'Taminango', 52),
(963, 'Tangua', 52),
(964, 'Taraira', 97),
(965, 'Tarazá', 5),
(966, 'Tarqui', 41),
(967, 'Tarso', 5),
(968, 'Tasco', 15),
(969, 'Tauramena', 85),
(970, 'Tausa', 25),
(971, 'Tello', 41),
(972, 'Tena', 25),
(973, 'Tenerife', 47),
(974, 'Tenjo', 25),
(975, 'Tenza', 15),
(976, 'Teorama', 54),
(977, 'Teruel', 41),
(978, 'Tesalia', 41),
(979, 'Tibacuy', 25),
(980, 'Tibaná', 15),
(981, 'Tibasosa', 15),
(982, 'Tibirita', 25),
(983, 'Tibú', 54),
(984, 'Tierralta', 23),
(985, 'Timaná', 41),
(986, 'Timbiquí', 19),
(987, 'Timbío', 19),
(988, 'Tinjacá', 15),
(989, 'Tipacoque', 15),
(990, 'Tiquisio (Puerto Rico)', 13),
(991, 'Titiribí', 5),
(992, 'Toca', 15),
(993, 'Tocaima', 25),
(994, 'Tocancipá', 25),
(995, 'Toguí', 15),
(996, 'Toledo', 5),
(997, 'Toledo', 54),
(998, 'Tolú', 70),
(999, 'Tolú Viejo', 70),
(1000, 'Tona', 68),
(1001, 'Topagá', 15),
(1002, 'Topaipí', 25),
(1003, 'Toribío', 19),
(1004, 'Toro', 76),
(1005, 'Tota', 15),
(1006, 'Totoró', 19),
(1007, 'Trinidad', 85),
(1008, 'Trujillo', 76),
(1009, 'Tubará', 8),
(1010, 'Tuchín', 23),
(1011, 'Tulúa', 76),
(1012, 'Tumaco', 52),
(1013, 'Tunja', 15),
(1014, 'Tunungua', 15),
(1015, 'Turbaco', 13),
(1016, 'Turbaná', 13),
(1017, 'Turbo', 5),
(1018, 'Turmequé', 15),
(1019, 'Tuta', 15),
(1020, 'Tutasá', 15),
(1021, 'Támara', 85),
(1022, 'Támesis', 5),
(1023, 'Túquerres', 52),
(1024, 'Ubalá', 25),
(1025, 'Ubaque', 25),
(1026, 'Ubaté', 25),
(1027, 'Ulloa', 76),
(1028, 'Une', 25),
(1029, 'Unguía', 27),
(1030, 'Unión Panamericana (ÁNIMAS)', 27),
(1031, 'Uramita', 5),
(1032, 'Uribe', 50),
(1033, 'Uribia', 44),
(1034, 'Urrao', 5),
(1035, 'Urumita', 44),
(1036, 'Usiacuri', 8),
(1037, 'Valdivia', 5),
(1038, 'Valencia', 23),
(1039, 'Valle de San José', 68),
(1040, 'Valle de San Juan', 73),
(1041, 'Valle del Guamuez', 86),
(1042, 'Valledupar', 20),
(1043, 'Valparaiso', 5),
(1044, 'Valparaiso', 18),
(1045, 'Vegachí', 5),
(1046, 'Venadillo', 73),
(1047, 'Venecia', 5),
(1048, 'Venecia (Ospina Pérez)', 25),
(1049, 'Ventaquemada', 15),
(1050, 'Vergara', 25),
(1051, 'Versalles', 76),
(1052, 'Vetas', 68),
(1053, 'Viani', 25),
(1054, 'Vigía del Fuerte', 5),
(1055, 'Vijes', 76),
(1056, 'Villa Caro', 54),
(1057, 'Villa Rica', 19),
(1058, 'Villa de Leiva', 15),
(1059, 'Villa del Rosario', 54),
(1060, 'Villagarzón', 86),
(1061, 'Villagómez', 25),
(1062, 'Villahermosa', 73),
(1063, 'Villamaría', 17),
(1064, 'Villanueva', 13),
(1065, 'Villanueva', 44),
(1066, 'Villanueva', 68),
(1067, 'Villanueva', 85),
(1068, 'Villapinzón', 25),
(1069, 'Villarrica', 73),
(1070, 'Villavicencio', 50),
(1071, 'Villavieja', 41),
(1072, 'Villeta', 25),
(1073, 'Viotá', 25),
(1074, 'Viracachá', 15),
(1075, 'Vista Hermosa', 50),
(1076, 'Viterbo', 17),
(1077, 'Vélez', 68),
(1078, 'Yacopí', 25),
(1079, 'Yacuanquer', 52),
(1080, 'Yaguará', 41),
(1081, 'Yalí', 5),
(1082, 'Yarumal', 5),
(1083, 'Yolombó', 5),
(1084, 'Yondó (Casabe)', 5),
(1085, 'Yopal', 85),
(1086, 'Yotoco', 76),
(1087, 'Yumbo', 76),
(1088, 'Zambrano', 13),
(1089, 'Zapatoca', 68),
(1090, 'Zapayán (PUNTA DE PIEDRAS)', 47),
(1091, 'Zaragoza', 5),
(1092, 'Zarzal', 76),
(1093, 'Zetaquirá', 15),
(1094, 'Zipacón', 25),
(1095, 'Zipaquirá', 25),
(1096, 'Zona Bananera (PRADO - SEVILLA)', 47),
(1097, 'Ábrego', 54),
(1098, 'Íquira', 41),
(1099, 'Úmbita', 15),
(1100, 'Útica', 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedidos` int(10) NOT NULL,
  `id_direccion` int(10) NOT NULL,
  `fecha_pedido` date NOT NULL,
  `valor_total_factura` double NOT NULL,
  `num_factura` varchar(45) DEFAULT NULL,
  `fecha_fact` date DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_x_producto`
--

CREATE TABLE `pedido_x_producto` (
  `id_pedido_x_producto` int(10) NOT NULL,
  `id_pedido` int(10) NOT NULL,
  `id_producto` int(10) NOT NULL,
  `cantidad` int(20) NOT NULL,
  `valor_producto_venta` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pqrs`
--

CREATE TABLE `pqrs` (
  `id_pqrs` int(10) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `nombre_pqrs` varchar(20) NOT NULL,
  `descripcion_pqrs` longtext NOT NULL,
  `estado` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(10) NOT NULL,
  `id_subcategoria` int(10) NOT NULL,
  `nombre_producto` varchar(20) NOT NULL,
  `valor_actual` double NOT NULL,
  `cantidad_existente` int(50) NOT NULL,
  `descripcion_producto` varchar(40) NOT NULL,
  `imagen_producto` varchar(100) NOT NULL,
  `marcas_id_marcas` int(10) NOT NULL,
  `descuento` int(11) DEFAULT NULL,
  `garantia` int(11) DEFAULT NULL,
  `users_id` int(10) NOT NULL,
  `tiemp_entrega` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `id_subcategoria`, `nombre_producto`, `valor_actual`, `cantidad_existente`, `descripcion_producto`, `imagen_producto`, `marcas_id_marcas`, `descuento`, `garantia`, `users_id`, `tiemp_entrega`) VALUES
(100, 8, 'Altavoz Inteligente ', 199900, 1, 'Tipo: Parlantes inalambricos\nPotencia RM', 'https://bluetransporte.com/184/img/100.jpg', 3, 0, 0, 3, NULL),
(101, 1, 'Parlante Bluetooth S', 169000, 1, 'Tipo	Parlantes port?tiles Potencia RMS	1', 'https://bluetransporte.com/184/img/101.jpg', 3, 0, 0, 3, NULL),
(102, 8, 'Asistente de Voz Goo', 149900, 1, 'Tipo	Parlantes inal?mbricos\nPotencia RMS', 'https://bluetransporte.com/184/img/102.jpg', 3, 0, 0, 3, NULL),
(103, 8, 'Kit hikvision dvr 4 ', 820000, 1, 'Marca	HIKVISION\nModelo	dvr4\nTipo	Segurid', 'https://bluetransporte.com/184/img/103.jpg', 3, 0, 0, 3, NULL),
(104, 8, 'Mi 360 Home Security', 249900, 1, 'Megap?xeles	1296\nSensibilidad ISO	ISO Au', 'https://bluetransporte.com/184/img/104.jpg', 3, 0, 0, 3, NULL),
(105, 8, 'Cerradura Digital de', 2028500, 1, 'Marca	Yale\nModelo	YMF40\nTipo	Seguridad/ ', 'https://bluetransporte.com/184/img/105.jpg', 3, 0, 0, 3, NULL),
(107, 8, 'Combo drone dji tell', 709900, 1, 'Marca	DJI\nModelo	CP.TL.00000014.\nTipo	Dr', 'https://bluetransporte.com/184/img/107.jpg', 3, 0, 0, 3, NULL),
(108, 8, 'Drone dji mavic mini', 2469900, 1, 'Marca	DJI\nModelo	Mavic Air 2 Fly More Co', 'https://bluetransporte.com/184/img/108.jpg', 3, 0, 0, 3, NULL),
(109, 8, 'Lavadora Secadora Sa', 4999900, 1, '(AltoxAnchoxProfundidad)	98.4 x 68.6 x 7', 'https://bluetransporte.com/184/img/109.jpg', 3, 0, 0, 3, NULL),
(110, 8, 'Mi Robot Vacuum-Mop ', 1599900, 1, 'App	S?\nDuraci?n aproximada de la bater?a', 'https://bluetransporte.com/184/img/111.jpg', 3, 0, 0, 3, NULL),
(112, 8, 'Bombillo inteligente', 189900, 1, 'Marca	WiZ\nModelo	RGB (16 millones de col', 'https://bluetransporte.com/184/img/112.jpg', 3, 0, 0, 3, NULL),
(113, 8, 'Router Huawei WIFI A', 299900, 1, 'Marca	Huawei\nModelo	WS7200-30\nTipo	Route', 'https://bluetransporte.com/184/img/113.jpg', 3, 0, 0, 3, NULL),
(114, 8, 'Router Inal?mbrico 4', 99900, 1, 'Marca	TP-Link\nModelo	TL-WR940N\nTipo	Rout', 'https://bluetransporte.com/184/img/114.jpg', 3, 0, 0, 3, NULL),
(115, 8, 'Sensor wi-fi* para p', 63900, 1, 'Marca	STEREN\nModelo	SHOME-142\nTipo	Segur', 'https://bluetransporte.com/184/img/115.jpg', 3, 0, 0, 3, NULL),
(119, 3, 'iPhone 12 Mini 64GB', 3749900, 1, 'Tamano de la pantalla	5.4 pulgadas\nC?mar', 'https://bluetransporte.com/184/img/119.jpg', 3, 0, 0, 3, NULL),
(120, 3, 'iPhone SE 128GB', 2299900, 1, 'Tamano de la pantalla	5.4 pulgadas\nC?mar', 'https://bluetransporte.com/184/img/120.jpg', 3, 0, 0, 3, NULL),
(121, 3, 'iPhone 13 Pro 1?TB', 7999900, 1, 'Tamano de la pantalla	6.1 pulgadas\nC?mar', 'https://bluetransporte.com/184/img/121.jpg', 3, 0, 0, 3, NULL),
(122, 3, 'Celular Samsung Gala', 3399900, 1, 'Tamano de la pantalla	6.7 pulgadas\nC?mar', 'https://bluetransporte.com/184/img/122.jpg', 3, 0, 0, 3, NULL),
(123, 3, 'Celular Samsung Gala', 797900, 1, 'Tamano de la pantalla	6.3 pulgadas\nC?mar', 'https://bluetransporte.com/184/img/124.jpg', 3, 0, 0, 3, NULL),
(125, 3, 'Celular Huawei Y9A 1', 1090900, 1, 'Tamano de la pantalla	6.6 pulgadas\nC?mar', 'https://bluetransporte.com/184/img/126.jpg', 3, 0, 0, 3, NULL),
(127, 3, 'Celular Huawei Y6P 6', 649900, 1, 'Tamano de la pantalla	6.3 pulgadas\nC?mar', 'https://bluetransporte.com/184/img/127.jpg', 3, 0, 0, 3, NULL),
(128, 3, 'Celular Xiaomi MI 11', 1929900, 1, 'Tamano de la pantalla	6.5 pulgadas\nC?mar', 'https://bluetransporte.com/184/img/128.jpg', 3, 0, 0, 3, NULL),
(129, 3, 'Celular Xiaomi Mi 10', 2399900, 1, 'Tamano de la pantalla	6.5 pulgadas\nC?mar', 'https://bluetransporte.com/184/img/129.jpg', 3, 0, 0, 3, NULL),
(130, 3, 'Celular Xiaomi Poco ', 1750000, 1, 'Tamano de la pantalla	6.7 pulgadas\nC?mar', 'https://bluetransporte.com/184/img/130.jpg', 3, 0, 0, 3, NULL),
(131, 3, 'Celular Xiaomi Redmi', 429900, 1, 'Tamano de la pantalla	6.5 pulgadas\nC?mar', 'https://bluetransporte.com/184/img/131.jpg', 3, 0, 0, 3, NULL),
(132, 3, 'Celular Xiaomi Poco ', 1199900, 1, 'Tamano de la pantalla	6.67 pulgadas\nC?ma', 'https://bluetransporte.com/184/img/132.jpg', 3, 0, 0, 3, NULL),
(133, 3, 'Celular Xiaomi Redmi', 699900, 1, 'Tamano de la pantalla	6.5 pulgadas\nC?mar', 'https://bluetransporte.com/184/img/133.jpg', 3, 0, 0, 3, NULL),
(134, 3, 'Celular Motorola Mot', 797900, 1, 'Tamano de la pantalla	6.8 pulgadas\nC?mar', 'https://bluetransporte.com/184/img/134.jpg', 3, 0, 0, 3, NULL),
(135, 3, 'Celular Motorola E6I', 379900, 1, 'Tamano de la pantalla	6.1 pulgadas\nC?mar', 'https://bluetransporte.com/184/img/135.jpg', 3, 0, 0, 3, NULL),
(136, 3, 'Celular Moto G30 128', 797900, 1, 'Tamano de la pantalla	6.5 pulgadas\nC?mar', 'https://bluetransporte.com/184/img/136.jpg', 3, 0, 0, 3, NULL),
(137, 3, 'Celular Vivo Y33S 8G', 969900, 1, 'Tamano de la pantalla	6.4 pulgadas\nC?mar', 'https://bluetransporte.com/184/img/137.jpg', 3, 0, 0, 3, NULL),
(138, 3, 'Celular vivo Y11S 32', 499900, 1, 'Tamano de la pantalla	6.5 pulgadas\nC?mar', 'https://bluetransporte.com/184/img/138.jpg', 3, 0, 0, 3, NULL),
(139, 3, 'Celular Vivo Y20s 12', 649900, 1, 'Tamano de la pantalla	6.5 pulgadas\nC?mar', 'https://bluetransporte.com/184/img/139.jpg', 3, 0, 0, 3, NULL),
(140, 3, 'Celular Tecno Camon ', 1799900, 1, 'Tamano de la pantalla	6.7 pulgadas\nC?mar', 'https://bluetransporte.com/184/img/142.jpg', 3, 0, 0, 3, NULL),
(143, 3, 'Celular Oppo Reno 5 ', 1259900, 1, 'Tamano de la pantalla	6.4 pulgadas\nC?mar', 'https://bluetransporte.com/184/img/143.jpg', 3, 0, 0, 3, NULL),
(144, 3, 'Celular Oppo A 15 32', 529900, 1, 'Tamano de la pantalla	6.5 pulgadas\nC?mar', 'https://bluetransporte.com/184/img/144.jpg', 3, 0, 0, 3, NULL),
(145, 3, 'Celular Oppo A 16 64', 699900, 1, 'Tamano de la pantalla	6.5 pulgadas\nC?mar', 'https://bluetransporte.com/184/img/145.jpg', 3, 0, 0, 3, NULL),
(146, 3, 'Celular Nokia 1.4 32', 419900, 1, 'Tamano de la pantalla	6.5 pulgadas\nC?mar', 'https://bluetransporte.com/184/img/148.jpg', 3, 0, 0, 3, NULL),
(149, 3, 'Realme 7Pro Espejo 8', 1499900, 1, 'Tamano de la pantalla	6.4 pulgadas\nC?mar', 'https://bluetransporte.com/184/img/149.jpg', 3, 0, 0, 3, NULL),
(150, 3, 'Celular Realme C11 2', 399900, 1, 'Tamano de la pantalla	6.5 pulgadas\nC?mar', 'https://bluetransporte.com/184/img/150.jpg', 3, 0, 0, 3, NULL),
(200, 5, 'Juego De Vajilla', 99000, 1, '\n? Color: Verde con Blanco y Naranja\n? M', 'https://bluetransporte.com/184/img/200.png', 3, 0, 0, 3, NULL),
(201, 5, 'Recipiente Refractar', 32000, 1, 'Set de 3 recipientes refractarios rectan', 'https://bluetransporte.com/184/img/201.png', 3, 0, 0, 3, NULL),
(202, 5, '\nJuego De Cubiertos', 45000, 1, '6 Tenedores de mesa/comida\n6 Cuchillos d', 'https://bluetransporte.com/184/img/202.png', 3, 0, 0, 3, NULL),
(203, 5, 'Olla A Presi?n Acero', 200000, 1, '? Sistema Abre IMUSA para abrir y cerrar', 'https://bluetransporte.com/184/img/203.png', 3, 0, 0, 3, NULL),
(204, 5, 'Sartenes X 6 Piezas ', 160000, 1, 'CARACTER?STICAS PRINCIPALES\n\nRevestimien', 'https://bluetransporte.com/184/img/204.png', 3, 0, 0, 3, NULL),
(205, 5, 'Sarten Arepas Smart ', 30000, 1, 'El Sart?n Para Arepas Antiadherente IMUS', 'https://bluetransporte.com/184/img/205.png', 3, 0, 0, 3, NULL),
(206, 5, 'Tijeras De Cocina Co', 20000, 1, 'Productos Originales directamente desde ', 'https://bluetransporte.com/184/img/206.png', 3, 0, 0, 3, NULL),
(207, 5, 'Set De Copas Ginebra', 11000, 1, 'Copas Gin Tonic set por 2 Piezas Materia', 'https://bluetransporte.com/184/img/207.png', 3, 0, 0, 3, NULL),
(208, 5, 'Cuchillo Sierra Mang', 10000, 1, 'REFERENCIA: WF1701\n\nDESCRIPCI?N\n? Cuchil', 'https://bluetransporte.com/184/img/208.png', 3, 0, 0, 3, NULL),
(209, 5, 'Filtro 16 Litros Pur', 100000, 1, 'CARACTER?STICAS PRINCIPALES\n\nNo necesita', 'https://bluetransporte.com/184/img/209.png', 3, 0, 0, 3, NULL),
(210, 5, 'Molino De Carne Manu', 95000, 1, '\n? Molino De Carne Manual Prensa #8 Wolf', 'https://bluetransporte.com/184/img/210.png', 3, 0, 0, 3, NULL),
(211, 5, 'Colador Talent Maste', 18000, 1, 'Productos Originales directamente desde ', 'https://bluetransporte.com/184/img/211.png', 3, 0, 0, 3, NULL),
(212, 5, 'Chocolatera En Alumi', 24000, 1, 'Cuenta con una forma perfecta para prepa', 'https://bluetransporte.com/184/img/212.png', 3, 0, 0, 3, NULL),
(213, 5, 'Vajilla Corona 4 Pue', 80000, 1, 'Uso Hogar\nResidencial\n\nMateriales: Loza\n', 'https://bluetransporte.com/184/img/213.', 3, 0, 0, 3, NULL),
(214, 5, 'Picatodo Manual 500m', 30000, 1, 'El Picatodo Manual TeFal en solo 5 Segun', 'https://bluetransporte.com/184/img/214.png', 3, 0, 0, 3, NULL),
(215, 1, 'Escritorio En L Made', 300000, 1, 'CENTRO DE COMPUTO EN L MADERKIT M01326\n\n', 'https://bluetransporte.com/184/img/215.png', 3, 0, 0, 3, NULL),
(216, 1, 'Cama Kenia', 610000, 1, 'Disfruta de una cama elaborada en madera', 'https://bluetransporte.com/184/img/216.png', 3, 0, 0, 3, NULL),
(217, 1, 'Espaldar Tapizado', 210000, 1, 'Nuestro espaldar tapizado capitoneado es', 'https://bluetransporte.com/184/img/217.png', 3, 0, 0, 3, NULL),
(218, 1, 'Closet Hogar Econ?mi', 350000, 1, 'Closet Hogar Econ?mico color rovere- tie', 'https://bluetransporte.com/184/img/218.png', 3, 0, 0, 3, NULL),
(221, 1, 'Mesa De Noche Mn5310', 140000, 1, 'Mesa de noche Marca INVAL- Referencia Mn', 'https://bluetransporte.com/184/img/221.png', 3, 0, 0, 3, NULL),
(222, 1, 'Repisa Decorativa Re', 100000, 1, 'Repisa decorativa Marca INVAL- Referenci', 'https://bluetransporte.com/184/img/222.png', 3, 0, 0, 3, NULL),
(223, 1, 'Santino 4 Cajones We', 266000, 1, '*DESCRIPCION:\n\nC?moda Santino 4 Cajones ', 'https://bluetransporte.com/184/img/223.png', 3, 0, 0, 3, NULL),
(224, 1, 'Gabinete De Bano Rta', 134000, 1, 'Diseno moderno y puertas con espejo\nM?lt', 'https://bluetransporte.com/184/img/224.png', 3, 0, 0, 3, NULL),
(225, 1, 'Camarote Multifuncio', 1560000, 1, 'CARACTER?STICAS PRINCIPALES\n\nCOLOR WENGU', 'https://bluetransporte.com/184/img/225.png', 3, 0, 0, 3, NULL),
(226, 1, 'Biblioteca Escalera ', 310000, 1, 'DESCRIPCION:\n\nBiblioteca Escalera Beijin', 'https://bluetransporte.com/184/img/226.png', 3, 0, 0, 3, NULL),
(227, 1, 'Closet Amatista Rta ', 1100000, 1, 'Cuenta tambi?n con tubos para colgar y o', 'https://bluetransporte.com/184/img/228.png', 3, 0, 0, 3, NULL),
(229, 1, 'Silla Escritorio Osl', 345789, 1, 'La silla Escritorio Oslo tiene color Neg', 'https://bluetransporte.com/184/img/229.png', 3, 0, 0, 3, NULL),
(230, 10, 'Sofacama Carvallo 3 ', 789678, 1, 'Sof?cama con diseno funcional- ideal par', 'https://bluetransporte.com/184/img/230.png', 3, 0, 0, 3, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria`
--

CREATE TABLE `subcategoria` (
  `id_subcategoria` int(10) NOT NULL,
  `id_categoria` int(10) NOT NULL,
  `nombre_subcategoria` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `subcategoria`
--

INSERT INTO `subcategoria` (`id_subcategoria`, `id_categoria`, `nombre_subcategoria`) VALUES
(1, 2, 'ALCOBAS '),
(2, 3, 'BALONCESTO'),
(3, 1, 'CELULARES'),
(4, 3, 'CICLISMO'),
(5, 2, 'COCINAS'),
(6, 3, 'FUTBOL'),
(7, 3, 'GOLF'),
(8, 2, 'HOGAR'),
(9, 3, 'NATACION'),
(10, 2, 'SALAS'),
(11, 3, 'VOLEIBOL'),
(12, 2, 'HOGAR'),
(13, 1, 'TECNOLOGICOS'),
(14, 5, 'ASPIRADORAS ROBOTS'),
(15, 1, 'TELEVISORES'),
(16, 5, 'LAVADORAS'),
(17, 5, 'AIR FRIER'),
(18, 5, 'AIRE ACONDICIONADO'),
(19, 5, 'NEVERAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE `tipos` (
  `id` int(10) NOT NULL,
  `nombre_tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`id`, `nombre_tipo`) VALUES
(3, 'admin'),
(4, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipos_id_tipo` int(10) NOT NULL,
  `documento` varchar(45) DEFAULT NULL,
  `fidelizacion_id` int(11) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `tipos_id_tipo`, `documento`, `fidelizacion_id`, `telefono`, `estado`) VALUES
(3, 'Diana Marcela Cardona Mera', 'dianitac2306@gmail.com', '$2y$10$Dj/JnyDwQ9CrYHZBZgAieOHIt95mhVYe8xZv5J0DkiMmQhCiCPu2S', '2021-12-06 20:42:25', '2021-12-06 20:42:25', 4, NULL, 1, NULL, NULL),
(4, 'ALLAND NARANJO', 'alan234@hotmail.com', '$2y$10$HL31dGEzIflyvQeb05ghXepnGPSPwikrYmvZEcLmwGGkaRT.9v56O', '2021-12-10 06:03:56', '2021-12-10 06:03:56', 4, NULL, 1, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id_direccion`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_municipio` (`id_municipio`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id_municipio`),
  ADD KEY `id_departamento` (`id_departamento`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedidos`),
  ADD KEY `id_direccion` (`id_direccion`);

--
-- Indices de la tabla `pedido_x_producto`
--
ALTER TABLE `pedido_x_producto`
  ADD PRIMARY KEY (`id_pedido_x_producto`),
  ADD KEY `id_pedido` (`id_pedido`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `pqrs`
--
ALTER TABLE `pqrs`
  ADD PRIMARY KEY (`id_pqrs`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_subcategoria` (`id_subcategoria`),
  ADD KEY `fk_producto_marcas1_idx` (`marcas_id_marcas`),
  ADD KEY `fk_producto_users1_idx` (`users_id`);

--
-- Indices de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD PRIMARY KEY (`id_subcategoria`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipos_id_tipo` (`tipos_id_tipo`),
  ADD KEY `fidelizacion_id` (`fidelizacion_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_departamento` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id_direccion` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id_municipio` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1101;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedidos` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido_x_producto`
--
ALTER TABLE `pedido_x_producto`
  MODIFY `id_pedido_x_producto` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pqrs`
--
ALTER TABLE `pqrs`
  MODIFY `id_pqrs` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `id_subcategoria` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `tipos`
--
ALTER TABLE `tipos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD CONSTRAINT `direccion_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `direccion_ibfk_2` FOREIGN KEY (`id_municipio`) REFERENCES `municipio` (`id_municipio`);

--
-- Filtros para la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD CONSTRAINT `municipio_ibfk_1` FOREIGN KEY (`id_departamento`) REFERENCES `departamento` (`id_departamento`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`id_direccion`) REFERENCES `direccion` (`id_direccion`);

--
-- Filtros para la tabla `pedido_x_producto`
--
ALTER TABLE `pedido_x_producto`
  ADD CONSTRAINT `pedido_x_producto_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id_pedidos`),
  ADD CONSTRAINT `pedido_x_producto_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `pqrs`
--
ALTER TABLE `pqrs`
  ADD CONSTRAINT `pqrs_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_producto_marcas1` FOREIGN KEY (`marcas_id_marcas`) REFERENCES `marcas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_producto_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_subcategoria`) REFERENCES `subcategoria` (`id_subcategoria`);

--
-- Filtros para la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD CONSTRAINT `subcategoria_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`tipos_id_tipo`) REFERENCES `tipos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
