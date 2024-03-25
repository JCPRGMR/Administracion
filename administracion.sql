-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 25-03-2024 a las 16:56:18
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
-- Base de datos: `administracion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id_area` bigint NOT NULL,
  `des_area` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_registro_area` date NOT NULL,
  `h_registro_area` time NOT NULL,
  `alter_area` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id_area`, `des_area`, `f_registro_area`, `h_registro_area`, `alter_area`) VALUES
(0, '', '2024-01-03', '14:48:37', '2024-01-25 21:40:43'),
(1, 'SEGURIDAD', '2024-01-18', '16:35:18', '2024-01-18 16:35:18'),
(2, 'ADMINISTRACION', '2024-01-25', '16:15:55', '2024-01-25 16:15:55'),
(3, 'PRESIDENCIA', '2024-01-25', '16:16:13', '2024-01-25 16:16:13'),
(4, 'COMERCIAL', '2024-01-25', '16:16:20', '2024-01-25 16:16:20'),
(5, 'TECNICA', '2024-01-25', '16:16:32', '2024-01-25 16:22:04'),
(6, 'PROGRAMACION Y PRODUCCION', '2024-01-25', '16:22:16', '2024-01-25 16:22:16'),
(7, 'INFORMATICA', '2024-01-25', '16:22:26', '2024-01-25 16:22:33'),
(8, 'OPERACIONES', '2024-01-25', '16:22:46', '2024-01-25 16:22:46'),
(9, 'PRENSA CANAL 4', '2024-01-25', '16:30:24', '2024-01-26 16:21:26'),
(10, 'TRIBUNA LIBRE', '2024-01-25', '16:33:56', '2024-01-25 16:33:56'),
(11, 'PRENSA METROPOLITANA', '2024-01-25', '16:34:34', '2024-01-25 16:34:34'),
(12, 'OPERACIONES METROPOLITANA', '2024-01-25', '16:34:49', '2024-01-26 16:21:52'),
(13, 'LOCUCION METROPOLITANA', '2024-01-25', '16:34:59', '2024-01-25 16:34:59'),
(14, 'DIRECCION DOBLE OCHO', '2024-01-25', '16:35:11', '2024-01-25 16:36:46'),
(15, 'LOCUCION Y OPERACIONES DOBLE OCHO', '2024-01-25', '16:35:33', '2024-01-25 16:36:36'),
(17, 'OPERACIONES', '2024-01-26', '16:13:10', '2024-01-26 16:13:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id_cargo` bigint NOT NULL,
  `des_cargo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_registro_cargo` date NOT NULL,
  `h_registro_cargo` time NOT NULL,
  `alter_cargo` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id_cargo`, `des_cargo`, `f_registro_cargo`, `h_registro_cargo`, `alter_cargo`) VALUES
(1, 'COORDINADORA', '2024-01-17', '16:02:53', '2024-01-17 16:02:53'),
(2, 'GERENTE ESTRATEGICO', '2024-01-17', '16:02:53', '2024-01-17 16:02:53'),
(3, 'GERENTE GENERAL', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(4, 'PRESIDENTE EJEC. DIRECTORIO', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(5, 'CHOFER', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(6, 'GERENTE ADM. FINANCIERO', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(7, 'JEFE DE CONTABILIDAD', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(8, 'AUXILIAR CONTABLE III', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(9, 'RESP.REGISTRO Y CONTROL ACTIVOS FIJOS', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(10, 'ENCARGADA DE COBRANZAS', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(11, 'COBRADOR', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(12, 'ASISTENTE GENERAL', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(13, 'ASISTENTE DE GERENCIA', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(14, 'GERENTE COMERCIAL', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(15, 'EJECUTIVA DE VENTAS I', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(16, 'EJECUTIVA DE VENTAS II', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(17, 'OPERADOR DEL SISTEMA', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(18, 'SECRETARIA II', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(19, 'MENSAJERO II', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(20, 'EDITOR PUBLICITARIO', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(21, 'DIRECTOR TECNICO DE ALTA Y BAJA', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(22, 'ENCARGADO PLANTA EL ALTO', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(23, 'TECNICO I', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(24, 'ASESOR TECNICO', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(25, 'JEFE DE PRODUCCION', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(26, 'PRODUCTOR TRIBUNA LIBRE', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(27, 'PRODUCTOR LA WISLLA POPULAR', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(28, 'PRODUCTOR TAYPI ', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(29, 'EDITOR DE AVANCES Y SPOTS', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(30, 'CAMAROGRAFO EDITOR DE PRODUCCION', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(31, 'EDITOR DE POST PRODUCCIÓN', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(32, 'CO-COND. PROG. WISLLA POP.', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(33, 'CO-CONDUCTORA PROG. WISLLA POPULAR', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(34, 'CONDUCTOR - PRODUCTOR', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(35, 'CONDUCTOR -TOMANDO PULSO', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(36, 'JEFE DE SISTEMAS', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(37, 'ASISTENTE DE SISTEMAS E INFORMATICA', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(38, 'JEFE DE OPERACIONES', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(39, 'REALIZADOR IV', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(40, 'REALIZADORA', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(41, 'CAMAROGRAFO ESTUDIO I', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(42, 'REALIZADOR II', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(43, 'CAMAROGRAFO DE ESTUDIO III', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(44, 'CAMAROGRAFO ESTUDIO III', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(45, 'SWITCHER II', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(46, 'CHOFER ', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(47, 'GENERADOR CARACTERES II', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(48, 'MAQUILLADORA', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(49, 'SWITCHER', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(50, 'SONIDISTA', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(51, 'DIR. CONTENIDO EDITORIAL', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(52, 'JEFE DPTO. DE NOTICIAS', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(53, 'PERIODISTA I', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(54, 'PERIODISTA I TELEPOLICIAL', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(55, 'PERODISTA I', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(56, 'COORDINADOR I', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(57, 'PERIODISTA III', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(58, 'CAMAROGRAFO EDITOR I', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(59, 'CAMAROGRAFO EDITOR III', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(60, 'PERIODISTA SUPLENTE', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(61, 'CHOFER III', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(62, 'CO- CONDUCTORA REVISTA INFORMATIVA', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(63, 'POST PRODUCTOR DE NOTICIAS', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(64, 'CONDUTOR TRIBUNA LIBRE', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(65, 'TRABAJADORA SOCIAL', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(66, 'CONDUCTORA', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(67, 'SWITCHER SANTA CRUZ ', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(68, 'CAMAROGRAFO EDITOR', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(69, 'CAMAROGRAFO REPORTERO', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(70, 'OPERADOR ', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(71, 'ENC.PLANTA VILLA INGENIO', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(72, 'LOCUTOR AYMARISTA', '2024-01-17', '16:02:54', '2024-01-17 16:02:54'),
(73, 'DIRECTOR RADIO DOBLE OCHO', '2024-01-17', '16:02:55', '2024-01-17 16:02:55'),
(74, 'LOCUTOR-OPERADOR FM.', '2024-01-17', '16:02:55', '2024-01-17 16:02:55'),
(75, 'SEGURIDAD EL ALTO', '2024-01-18', '15:46:01', '2024-01-18 15:46:01'),
(76, 'SEGURIDAD LA PAZ', '2024-01-18', '15:54:54', '2024-01-18 15:54:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `id_ciudad` int NOT NULL,
  `des_ciudad` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_registro_ciudad` date NOT NULL,
  `h_registro_ciudad` time NOT NULL,
  `alter_ciudad` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`id_ciudad`, `des_ciudad`, `f_registro_ciudad`, `h_registro_ciudad`, `alter_ciudad`) VALUES
(1, 'LA PAZ', '2024-01-17', '12:14:27', '2024-01-17 16:14:28'),
(2, 'EL ALTO', '2024-01-17', '12:14:27', '2024-01-17 16:14:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `controles`
--

CREATE TABLE `controles` (
  `id_control` int NOT NULL,
  `ingreso` time DEFAULT NULL,
  `registro_ingreso` datetime DEFAULT NULL,
  `salida` time DEFAULT NULL,
  `registro_salida` datetime DEFAULT NULL,
  `id_fk_empleado` bigint NOT NULL,
  `id_fk_ciudad` int NOT NULL,
  `f_registro_control` date NOT NULL,
  `h_registro_control` time NOT NULL,
  `alter_control` datetime NOT NULL,
  `obs_ingreso` text COLLATE utf8mb4_unicode_ci,
  `obs_salida` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` bigint NOT NULL,
  `nombres` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ci` bigint NOT NULL,
  `expedido` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular` bigint DEFAULT NULL,
  `id_fk_area` bigint DEFAULT NULL,
  `id_fk_cargo` bigint NOT NULL,
  `f_registro_empleado` date NOT NULL,
  `h_registro_empleado` time NOT NULL,
  `alter_empleado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `nombres`, `apellidos`, `ci`, `expedido`, `celular`, `id_fk_area`, `id_fk_cargo`, `f_registro_empleado`, `h_registro_empleado`, `alter_empleado`) VALUES
(1, 'MONICA DENISSE CANDELARIA', 'MEDINA TELLEZ', 154826, '', 0, 3, 1, '2024-01-17', '16:05:11', '2024-01-26 15:24:49'),
(2, 'LUIS CARLOS', 'VILLAZON MARTINEZ', 2374380, '', 0, 3, 2, '2024-01-17', '16:05:11', '2024-01-26 15:25:08'),
(3, 'JORGE LUIS', 'PALENQUE MEDINA', 4938447, '', 0, 3, 3, '2024-01-17', '16:05:11', '2024-01-26 15:25:24'),
(4, 'TERESA', 'JUSTINIANO ROCA', 2227806, '', 0, 3, 4, '2024-01-17', '16:05:11', '2024-01-26 15:26:29'),
(5, 'RUBEN', 'APAZA CHAIÑA', 6821416, '', 0, 3, 5, '2024-01-17', '16:05:11', '2024-01-26 15:27:03'),
(6, 'CLAUDIA MIREYA', 'BENITEZ AVILA', 1828942, '', 0, 2, 6, '2024-01-17', '16:05:11', '2024-01-26 15:29:59'),
(7, 'NINOSKA', 'QUISBERT ROJAS', 4339868, '', 0, 2, 7, '2024-01-17', '16:05:11', '2024-01-26 15:34:57'),
(8, 'MAPI IRIS', 'ROJAS ROJAS', 2702252, '', 0, 2, 8, '2024-01-17', '16:05:11', '2024-01-26 15:35:39'),
(9, 'EMILIO FERNANDO', 'TORREZ CLAROS', 1998401, '', 0, 2, 9, '2024-01-17', '16:05:11', '2024-01-26 15:35:56'),
(10, 'WENDY LORENA', 'PEÑAYLILLO SANTOS', 5969731, '', 0, 2, 10, '2024-01-17', '16:05:11', '2024-01-26 15:36:42'),
(11, 'ALCIDES', 'MIRANDA FERNANDEZ', 3336944, '', 0, 2, 11, '2024-01-17', '16:05:11', '2024-01-26 15:37:13'),
(12, 'DELFIN MAX', 'VALDEZ KUSIJANOVIC', 2372586, '', 0, 2, 12, '2024-01-17', '16:05:11', '2024-01-26 15:37:50'),
(13, 'JOHNNY', 'JIMENEZ VILLCA', 3372592, '', 0, 2, 13, '2024-01-17', '16:05:11', '2024-01-26 15:38:23'),
(14, 'JAMIL ROBERTO', 'SILES ROJAS', 4273869, '', 0, 4, 14, '2024-01-17', '16:05:11', '2024-01-26 15:40:54'),
(15, 'LUISA VIVIAN', 'MANCILLA SALINAS', 2203824, '', 0, 4, 15, '2024-01-17', '16:05:11', '2024-01-26 15:42:53'),
(16, 'ALEJANDRA BELEN', 'RODRIGUEZ CARDENAS', 6953485, '', 0, 1, 16, '2024-01-17', '16:05:11', '2024-01-18 16:35:50'),
(17, 'BENITO', 'TORREZ MENDOZA', 2375492, '', 0, 4, 17, '2024-01-17', '16:05:11', '2024-01-26 15:46:41'),
(18, 'FATIMA SARINA', 'RETAMOZO CASTRO', 4299393, '', 0, 4, 18, '2024-01-17', '16:05:11', '2024-01-26 15:46:58'),
(19, 'ROLANDO', 'VILLANUEVA NUÑEZ', 4784064, '', 0, 4, 19, '2024-01-17', '16:05:11', '2024-01-26 15:47:28'),
(20, 'EDWIN ANGEL', 'CARRILLO YUJRA', 2479511, '', 0, 4, 20, '2024-01-17', '16:05:11', '2024-01-26 15:47:56'),
(21, 'MARCELO ABDON', 'ALBORTA ANTEZANA', 6099215, '', 0, 5, 21, '2024-01-17', '16:05:11', '2024-01-26 15:52:20'),
(22, 'TEODORO', 'CONDORI CONDORI', 3398466, '', 0, 5, 22, '2024-01-17', '16:05:11', '2024-01-26 15:52:45'),
(23, 'SERGIO GERONIMO', 'AYLLON MARQUEZ', 4757303, '', 0, 5, 23, '2024-01-17', '16:05:11', '2024-01-26 15:54:15'),
(24, 'ROSA JULIA', 'MALLCU GERONIMO', 3448338, '', 0, 5, 24, '2024-01-17', '16:05:11', '2024-01-26 15:54:30'),
(25, 'CESAR', 'AJPI JALJA', 2713747, '', 0, 6, 25, '2024-01-17', '16:05:11', '2024-01-26 15:56:28'),
(26, 'ANTONIO', 'QUISPE ROJAS', 2445489, '', 0, 6, 26, '2024-01-17', '16:05:11', '2024-01-26 15:57:04'),
(27, 'JOSAN EUGENIO', 'DELGADO MORALES', 6987625, '', 0, 6, 27, '2024-01-17', '16:05:11', '2024-01-26 15:57:26'),
(28, 'RONALD JOSE', 'CHOQUE QUISBERT', 6103485, '', 0, 6, 28, '2024-01-17', '16:05:11', '2024-01-26 15:58:36'),
(29, 'GUILLERMO ENRIQUE', 'MIRANDA RUIZ', 4927102, '', 0, 6, 29, '2024-01-17', '16:05:11', '2024-01-26 15:59:00'),
(30, 'GUIMBER DOUGLAS', 'CAPRIONA AVINE', 6093689, '', 0, 6, 30, '2024-01-17', '16:05:11', '2024-01-26 16:01:19'),
(31, 'LUIS FERNANDO', 'FLORES QUISBERT', 6982338, '', 0, 6, 31, '2024-01-17', '16:05:11', '2024-01-26 16:01:37'),
(32, 'JULIO CESAR', 'TALAVERA ARAUZ', 3930182, '', 0, 6, 32, '2024-01-17', '16:05:11', '2024-01-26 16:07:07'),
(33, 'AYDEÉ VERÓNICA', 'MENDEZ QUISBERT', 5951841, '', 0, 6, 33, '2024-01-17', '16:05:11', '2024-01-26 16:07:30'),
(34, 'ANGEL HORACIO', 'DOMINGUEZ CAREAGA', 4794660, '', 0, 6, 34, '2024-01-17', '16:05:12', '2024-01-26 16:07:48'),
(35, 'VICTOR HUGO', 'ROSALES DAZA', 3104468, '', 0, 6, 35, '2024-01-17', '16:05:12', '2024-01-26 16:08:10'),
(36, 'GROVER RONALD', 'SILES ROJAS', 4273871, '', 0, 7, 36, '2024-01-17', '16:05:12', '2024-01-26 16:11:33'),
(37, 'LUIS BEIMAR', 'SALAZAR CALLE', 8295814, '', 0, 7, 37, '2024-01-17', '16:05:12', '2024-01-26 16:12:04'),
(38, 'JORGE MANUEL', 'VASQUEZ ALVAREZ', 4362969, '', 0, 17, 38, '2024-01-17', '16:05:12', '2024-01-26 16:13:24'),
(39, 'JESUS MANUEL', 'ROMERO FLORES', 2695796, '', 0, 17, 39, '2024-01-17', '16:05:12', '2024-01-26 16:13:48'),
(40, 'SHIRLEY JHENNY', 'SANTOS QUISBERT', 4843342, '', 0, 17, 40, '2024-01-17', '16:05:12', '2024-01-26 16:14:01'),
(41, 'WALTER ', 'MIRANDA GUTIERREZ', 3384368, '', 0, 17, 41, '2024-01-17', '16:05:12', '2024-01-26 16:14:18'),
(42, 'MIGUEL ANGEL', 'RAMOS CONDORI', 4946672, '', 0, 17, 42, '2024-01-17', '16:05:12', '2024-01-26 16:14:44'),
(43, 'JUAN CARLOS', 'CAMARGO QUISPE', 6816759, '', 0, 17, 43, '2024-01-17', '16:05:12', '2024-01-26 16:14:57'),
(44, 'RICHAR ELVIS', 'PATZI PAZ', 10000861, '', 0, 17, 44, '2024-01-17', '16:05:12', '2024-01-26 16:15:14'),
(45, 'VALERIA PACESA', 'MEDINA COPAJIRA', 6103197, '', 0, 17, 45, '2024-01-17', '16:05:12', '2024-01-26 16:15:43'),
(46, 'EDDY RAMIRO', 'RODRIGUEZ CALLIZAYA', 4854103, '', 0, 17, 5, '2024-01-17', '16:05:12', '2024-01-26 16:15:58'),
(47, 'CLAUDIA MILENKA', 'ARCE VELASCO', 6784411, '', 0, 17, 43, '2024-01-17', '16:05:12', '2024-01-26 16:19:38'),
(48, 'HENRY EDSON', 'PONGOFIN MAMANI', 6034050, '', 0, 17, 47, '2024-01-17', '16:05:12', '2024-01-26 16:19:48'),
(49, 'NANCY BRIGIDA', 'QUISBERT SORIA', 2311836, '', 0, 17, 48, '2024-01-17', '16:05:12', '2024-01-26 16:20:14'),
(50, 'ROSENDO', 'QUISPE ALANOCA', 3494899, '', 0, 17, 49, '2024-01-17', '16:05:12', '2024-01-26 16:20:32'),
(51, 'FERNANDO', 'QUISPE LIMACHI', 6017782, '', 0, 17, 50, '2024-01-17', '16:05:12', '2024-01-26 16:20:48'),
(52, 'EDUARDO FRANCISCO', 'GODOY PEÑA', 2294879, '', 0, 9, 51, '2024-01-17', '16:05:12', '2024-01-26 16:25:03'),
(53, 'IRGUEN EDWIN', 'PASTEN BRAÑEZ', 4288439, '', 0, 9, 52, '2024-01-17', '16:05:12', '2024-01-26 16:28:30'),
(54, 'JUAN PASTOR', 'CANCARI NINA', 4306096, '', 0, 9, 53, '2024-01-17', '16:05:12', '2024-01-26 16:28:41'),
(55, 'WILSON', 'MALDONADO TORRICO', 4850316, '', 0, 9, 54, '2024-01-17', '16:05:12', '2024-01-26 16:28:55'),
(56, 'ROSSIO CONSUELO', 'VIA PAREDES', 3480896, '', 0, 9, 55, '2024-01-17', '16:05:12', '2024-01-26 16:29:08'),
(57, 'MARIA TERESA', 'CUPANA HUANACO', 2696236, '', 0, 9, 56, '2024-01-17', '16:05:12', '2024-01-26 16:29:27'),
(58, 'ANGEL JAIME', 'LOZANO VARGAS', 3480658, '', 0, 9, 57, '2024-01-17', '16:05:12', '2024-01-26 16:29:38'),
(59, 'RUBEN', 'PABON ARIAS', 4836762, '', 0, 9, 58, '2024-01-17', '16:05:12', '2024-01-26 16:29:53'),
(60, 'ANDRES ', 'AVALOS QUISBERT', 4982677, '', 0, 9, 58, '2024-01-17', '16:05:12', '2024-01-26 16:31:23'),
(61, 'JAVIER GONZALO', 'BAUTISTA SUXO', 4809589, '', 0, 9, 53, '2024-01-17', '16:05:12', '2024-01-26 16:33:00'),
(62, 'WILMA ', 'CATARI CALLE', 6744839, '', 0, 9, 57, '2024-01-17', '16:05:12', '2024-01-26 16:33:12'),
(63, 'EDGAR GREGORIO', 'MAMANI ARUQUIPA', 3369428, '', 0, 9, 59, '2024-01-17', '16:05:12', '2024-01-26 16:33:30'),
(64, 'MIGUEL ANGEL', 'ALARCON JOVE', 4763303, '', 0, 9, 59, '2024-01-17', '16:05:12', '2024-01-26 16:34:05'),
(65, 'RONAL', 'ERGUETA PAREDES', 4885848, '', 0, 9, 59, '2024-01-17', '16:05:12', '2024-01-26 16:34:34'),
(66, 'MARCELO IVAN', 'ALCOREZA AGUILAR', 4775051, '', 0, 9, 59, '2024-01-17', '16:05:12', '2024-01-26 16:34:51'),
(67, 'ROLY', 'FLORES HUAYHUA', 6897691, '', 0, 9, 57, '2024-01-17', '16:05:12', '2024-01-26 18:00:09'),
(68, 'JUAN RAMIRO', 'CHARCAS TERÁN', 6906185, '', 0, 9, 60, '2024-01-17', '16:05:12', '2024-01-26 18:00:24'),
(69, 'SIMON', 'LUQUE KANTUTA', 4754784, '', 0, 9, 61, '2024-01-17', '16:05:12', '2024-01-26 18:00:58'),
(70, 'RENE WENSESLAO', 'VARGAS BAPTISTA', 4788336, '', 0, 9, 56, '2024-01-17', '16:05:12', '2024-01-26 18:02:23'),
(71, 'VALERIA FERNANDA', 'GONZALES FARAH', 3354099, '', 0, 9, 62, '2024-01-17', '16:05:12', '2024-01-26 18:02:39'),
(72, 'GONZALO MAX', 'VALDIVIA QUISBERT', 3457500, '', 0, 9, 63, '2024-01-17', '16:05:12', '2024-01-26 18:03:04'),
(73, 'CRISPIN JOSE', 'BUSSON OBLITAS', 3442874, '', 0, 9, 59, '2024-01-17', '16:05:12', '2024-01-26 18:03:31'),
(74, 'JOSE EDUARDO', 'MURILLO MENDIZABAL', 332467, '', 0, 10, 64, '2024-01-17', '16:05:12', '2024-01-26 18:12:25'),
(75, 'MERY ', 'ESCALANTE FLORES', 4880060, '', 0, 10, 65, '2024-01-17', '16:05:12', '2024-01-26 18:12:39'),
(76, 'INES OLGA', 'QUISPE TICONA', 4775515, '', 0, 10, 66, '2024-01-17', '16:05:12', '2024-01-26 18:15:05'),
(77, 'LUISA ', 'VALLEJOS QUISPE', 4891733, '', 0, 10, 65, '2024-01-17', '16:05:12', '2024-01-26 18:15:41'),
(78, 'UVALDO ', 'ARIAS MENDEZ', 2977060, NULL, NULL, NULL, 67, '2024-01-17', '16:05:12', '2024-01-17 16:05:12'),
(79, 'DANIEL ', 'COCA ORTIZ', 9632830, NULL, NULL, NULL, 68, '2024-01-17', '16:05:12', '2024-01-17 16:05:12'),
(80, 'JIMMY ', 'BENAVIDES AYALA', 6221069, NULL, NULL, NULL, 69, '2024-01-17', '16:05:12', '2024-01-17 16:05:12'),
(81, 'JOEL ', 'LÓPEZ SIÑANI', 6946825, '', 0, 11, 57, '2024-01-17', '16:05:12', '2024-01-26 18:24:25'),
(82, 'MARISOL JIMENA', 'MURILLO ESCOBAR', 6822918, '', 0, 11, 57, '2024-01-17', '16:05:12', '2024-01-26 18:24:48'),
(83, 'FELIPE ', 'CHOQUE HUANCA', 2327188, '', 0, 12, 70, '2024-01-17', '16:05:12', '2024-01-26 18:25:36'),
(84, 'JUAN GONZALO', 'POMA FLORES', 4862525, '', 0, 12, 70, '2024-01-17', '16:05:12', '2024-01-26 18:25:55'),
(85, 'SEBASTIAN ', 'YUJRA TORREZ', 2506400, '', 0, 12, 71, '2024-01-17', '16:05:12', '2024-01-26 18:26:22'),
(86, 'JOSÉ HERNAN', 'AMARU LAYME', 8333057, '', 0, 13, 72, '2024-01-17', '16:05:12', '2024-01-26 18:27:23'),
(87, 'JUAN FREDDY', 'MORALES VARGAS', 4718468, '', 0, 14, 73, '2024-01-17', '16:05:12', '2024-01-26 18:28:54'),
(88, 'NEFTA MARILYN', 'AGUILAR SANTALLA', 4259808, '', 0, 15, 74, '2024-01-17', '16:05:12', '2024-01-26 18:29:12'),
(89, 'seguridad', 'el alto', 1, 'S/C', 1, 1, 75, '2024-01-18', '19:03:07', '2024-01-18 19:03:07'),
(90, 'seguridad', 'la paz', 2, 'S/C', 2, 1, 76, '2024-01-18', '19:03:25', '2024-01-18 19:03:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `omisiones`
--

CREATE TABLE `omisiones` (
  `id_omision` int NOT NULL,
  `justificacion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiempo_omision` int NOT NULL,
  `medida` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingreso` int DEFAULT NULL,
  `salida` int DEFAULT NULL,
  `marcacion` int DEFAULT NULL,
  `id_fk_empleado` bigint NOT NULL,
  `id_fk_ciudad` int NOT NULL,
  `f_registro_omision` date NOT NULL,
  `h_registro_omision` time NOT NULL,
  `alter_omision` datetime NOT NULL,
  `fecha_registro_omision` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int NOT NULL,
  `des_rol` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_registro_rol` date NOT NULL,
  `h_registro_rol` time NOT NULL,
  `alter_rol` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `des_rol`, `f_registro_rol`, `h_registro_rol`, `alter_rol`) VALUES
(1, 'Administrador', '2024-01-17', '12:24:42', '2024-01-17 16:24:44'),
(2, 'Usuario', '2024-01-17', '12:24:42', '2024-01-17 19:25:32'),
(3, 'seguridad', '2024-01-17', '12:24:42', '2024-01-18 15:59:46'),
(5, 'Reportes', '2024-01-17', '12:24:42', '2024-02-16 19:57:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` bigint NOT NULL,
  `usuario` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contrasena` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_fk_rol` int NOT NULL,
  `id_fk_empleado` bigint DEFAULT NULL,
  `f_registro_usuario` date NOT NULL,
  `h_registro_usuario` time NOT NULL,
  `alter_usuario` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `contrasena`, `id_fk_rol`, `id_fk_empleado`, `f_registro_usuario`, `h_registro_usuario`, `alter_usuario`) VALUES
(1, 'admin', 'S1ST3M4S@rtp', 1, 36, '2024-01-03', '13:09:41', '2024-01-17 19:24:39'),
(2, 'seguridad1', 'seguridad1', 3, 89, '2024-01-18', '19:05:30', '2024-01-18 19:05:30'),
(3, 'seguridad2', 'seguridad2', 3, 90, '2024-01-18', '19:05:46', '2024-01-18 19:05:46'),
(7, 'teresa', 't3r3s4rtp', 2, 4, '2024-01-26', '20:09:08', '2024-01-26 20:09:08'),
(8, 'marcelo', 'm4rc3l0', 2, 21, '2024-01-26', '20:11:01', '2024-01-26 20:11:01'),
(9, 'mapi', 'm4p1r0j45', 5, 8, '2024-01-26', '20:11:58', '2024-01-26 20:11:58'),
(10, 'jamil', 'j4m1L', 2, 14, '2024-01-26', '20:12:40', '2024-01-26 20:12:40'),
(11, 'claudia', 'cl4ud14', 2, 6, '2024-01-26', '20:13:16', '2024-01-26 20:13:16');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_controles`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_controles` (
`alter_ciudad` datetime
,`alter_control` datetime
,`alter_empleado` datetime
,`apellidos` varchar(100)
,`celular` bigint
,`ci` bigint
,`des_area` varchar(100)
,`des_cargo` varchar(100)
,`des_ciudad` varchar(100)
,`expedido` varchar(100)
,`f_registro_ciudad` date
,`f_registro_control` date
,`f_registro_empleado` date
,`h_registro_ciudad` time
,`h_registro_control` time
,`h_registro_empleado` time
,`id_ciudad` int
,`id_control` int
,`id_empleado` bigint
,`id_fk_area` bigint
,`id_fk_cargo` bigint
,`id_fk_ciudad` int
,`id_fk_empleado` bigint
,`ingreso` time
,`nombres` varchar(100)
,`obs_ingreso` text
,`obs_salida` text
,`registro_ingreso` datetime
,`registro_salida` datetime
,`salida` time
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_empleados`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_empleados` (
`alter_empleado` datetime
,`apellidos` varchar(100)
,`celular` bigint
,`ci` bigint
,`des_area` varchar(100)
,`des_cargo` varchar(100)
,`expedido` varchar(100)
,`f_registro_empleado` date
,`h_registro_empleado` time
,`id_empleado` bigint
,`id_fk_area` bigint
,`id_fk_cargo` bigint
,`nombres` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_omisiones`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_omisiones` (
`alter_ciudad` datetime
,`alter_empleado` datetime
,`alter_omision` datetime
,`apellidos` varchar(100)
,`celular` bigint
,`ci` bigint
,`des_area` varchar(100)
,`des_cargo` varchar(100)
,`des_ciudad` varchar(100)
,`expedido` varchar(100)
,`f_registro_ciudad` date
,`f_registro_empleado` date
,`f_registro_omision` date
,`fecha_registro_omision` date
,`h_registro_ciudad` time
,`h_registro_empleado` time
,`h_registro_omision` time
,`id_ciudad` int
,`id_empleado` bigint
,`id_fk_area` bigint
,`id_fk_cargo` bigint
,`id_fk_ciudad` int
,`id_fk_empleado` bigint
,`id_omision` int
,`ingreso` int
,`justificacion` text
,`marcacion` int
,`medida` varchar(250)
,`nombres` varchar(100)
,`salida` int
,`tiempo_omision` int
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vista_usuarios`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vista_usuarios` (
`alter_empleado` datetime
,`alter_rol` datetime
,`alter_usuario` datetime
,`apellidos` varchar(100)
,`celular` bigint
,`ci` bigint
,`contrasena` text
,`des_rol` varchar(100)
,`expedido` varchar(100)
,`f_registro_empleado` date
,`f_registro_rol` date
,`f_registro_usuario` date
,`h_registro_empleado` time
,`h_registro_rol` time
,`h_registro_usuario` time
,`id_empleado` bigint
,`id_fk_area` bigint
,`id_fk_cargo` bigint
,`id_fk_empleado` bigint
,`id_fk_rol` int
,`id_rol` int
,`id_usuario` bigint
,`nombres` varchar(100)
,`usuario` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_controles`
--
DROP TABLE IF EXISTS `vista_controles`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_controles`  AS SELECT `controles`.`id_control` AS `id_control`, `controles`.`ingreso` AS `ingreso`, `controles`.`registro_ingreso` AS `registro_ingreso`, `controles`.`salida` AS `salida`, `controles`.`registro_salida` AS `registro_salida`, `controles`.`id_fk_empleado` AS `id_fk_empleado`, `controles`.`id_fk_ciudad` AS `id_fk_ciudad`, `controles`.`f_registro_control` AS `f_registro_control`, `controles`.`h_registro_control` AS `h_registro_control`, `controles`.`alter_control` AS `alter_control`, `controles`.`obs_ingreso` AS `obs_ingreso`, `controles`.`obs_salida` AS `obs_salida`, `vista_empleados`.`id_empleado` AS `id_empleado`, `vista_empleados`.`nombres` AS `nombres`, `vista_empleados`.`apellidos` AS `apellidos`, `vista_empleados`.`ci` AS `ci`, `vista_empleados`.`expedido` AS `expedido`, `vista_empleados`.`celular` AS `celular`, `vista_empleados`.`id_fk_area` AS `id_fk_area`, `vista_empleados`.`id_fk_cargo` AS `id_fk_cargo`, `vista_empleados`.`f_registro_empleado` AS `f_registro_empleado`, `vista_empleados`.`h_registro_empleado` AS `h_registro_empleado`, `vista_empleados`.`alter_empleado` AS `alter_empleado`, `vista_empleados`.`des_area` AS `des_area`, `vista_empleados`.`des_cargo` AS `des_cargo`, `ciudades`.`id_ciudad` AS `id_ciudad`, `ciudades`.`des_ciudad` AS `des_ciudad`, `ciudades`.`f_registro_ciudad` AS `f_registro_ciudad`, `ciudades`.`h_registro_ciudad` AS `h_registro_ciudad`, `ciudades`.`alter_ciudad` AS `alter_ciudad` FROM ((`controles` join `vista_empleados` on((`vista_empleados`.`id_empleado` = `controles`.`id_fk_empleado`))) join `ciudades` on((`ciudades`.`id_ciudad` = `controles`.`id_fk_ciudad`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_empleados`
--
DROP TABLE IF EXISTS `vista_empleados`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_empleados`  AS SELECT `empleados`.`id_empleado` AS `id_empleado`, `empleados`.`nombres` AS `nombres`, `empleados`.`apellidos` AS `apellidos`, `empleados`.`ci` AS `ci`, `empleados`.`expedido` AS `expedido`, `empleados`.`celular` AS `celular`, `empleados`.`id_fk_area` AS `id_fk_area`, `empleados`.`id_fk_cargo` AS `id_fk_cargo`, `empleados`.`f_registro_empleado` AS `f_registro_empleado`, `empleados`.`h_registro_empleado` AS `h_registro_empleado`, `empleados`.`alter_empleado` AS `alter_empleado`, `areas`.`des_area` AS `des_area`, `cargos`.`des_cargo` AS `des_cargo` FROM ((`empleados` left join `areas` on((`areas`.`id_area` = `empleados`.`id_fk_area`))) left join `cargos` on((`cargos`.`id_cargo` = `empleados`.`id_fk_cargo`))) ORDER BY `empleados`.`f_registro_empleado` DESC, `empleados`.`h_registro_empleado` DESC ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_omisiones`
--
DROP TABLE IF EXISTS `vista_omisiones`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_omisiones`  AS SELECT `omisiones`.`id_omision` AS `id_omision`, `omisiones`.`justificacion` AS `justificacion`, `omisiones`.`tiempo_omision` AS `tiempo_omision`, `omisiones`.`medida` AS `medida`, `omisiones`.`ingreso` AS `ingreso`, `omisiones`.`salida` AS `salida`, `omisiones`.`marcacion` AS `marcacion`, `omisiones`.`id_fk_empleado` AS `id_fk_empleado`, `omisiones`.`id_fk_ciudad` AS `id_fk_ciudad`, `omisiones`.`f_registro_omision` AS `f_registro_omision`, `omisiones`.`h_registro_omision` AS `h_registro_omision`, `omisiones`.`alter_omision` AS `alter_omision`, `omisiones`.`fecha_registro_omision` AS `fecha_registro_omision`, `vista_empleados`.`id_empleado` AS `id_empleado`, `vista_empleados`.`nombres` AS `nombres`, `vista_empleados`.`apellidos` AS `apellidos`, `vista_empleados`.`ci` AS `ci`, `vista_empleados`.`expedido` AS `expedido`, `vista_empleados`.`celular` AS `celular`, `vista_empleados`.`id_fk_area` AS `id_fk_area`, `vista_empleados`.`id_fk_cargo` AS `id_fk_cargo`, `vista_empleados`.`f_registro_empleado` AS `f_registro_empleado`, `vista_empleados`.`h_registro_empleado` AS `h_registro_empleado`, `vista_empleados`.`alter_empleado` AS `alter_empleado`, `vista_empleados`.`des_area` AS `des_area`, `vista_empleados`.`des_cargo` AS `des_cargo`, `ciudades`.`id_ciudad` AS `id_ciudad`, `ciudades`.`des_ciudad` AS `des_ciudad`, `ciudades`.`f_registro_ciudad` AS `f_registro_ciudad`, `ciudades`.`h_registro_ciudad` AS `h_registro_ciudad`, `ciudades`.`alter_ciudad` AS `alter_ciudad` FROM ((`omisiones` join `vista_empleados` on((`vista_empleados`.`id_empleado` = `omisiones`.`id_fk_empleado`))) join `ciudades` on((`ciudades`.`id_ciudad` = `omisiones`.`id_fk_ciudad`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vista_usuarios`
--
DROP TABLE IF EXISTS `vista_usuarios`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vista_usuarios`  AS SELECT `usuarios`.`id_usuario` AS `id_usuario`, `usuarios`.`usuario` AS `usuario`, `usuarios`.`contrasena` AS `contrasena`, `usuarios`.`id_fk_rol` AS `id_fk_rol`, `usuarios`.`id_fk_empleado` AS `id_fk_empleado`, `usuarios`.`f_registro_usuario` AS `f_registro_usuario`, `usuarios`.`h_registro_usuario` AS `h_registro_usuario`, `usuarios`.`alter_usuario` AS `alter_usuario`, `empleados`.`id_empleado` AS `id_empleado`, `empleados`.`nombres` AS `nombres`, `empleados`.`apellidos` AS `apellidos`, `empleados`.`ci` AS `ci`, `empleados`.`expedido` AS `expedido`, `empleados`.`celular` AS `celular`, `empleados`.`id_fk_area` AS `id_fk_area`, `empleados`.`id_fk_cargo` AS `id_fk_cargo`, `empleados`.`f_registro_empleado` AS `f_registro_empleado`, `empleados`.`h_registro_empleado` AS `h_registro_empleado`, `empleados`.`alter_empleado` AS `alter_empleado`, `roles`.`id_rol` AS `id_rol`, `roles`.`des_rol` AS `des_rol`, `roles`.`f_registro_rol` AS `f_registro_rol`, `roles`.`h_registro_rol` AS `h_registro_rol`, `roles`.`alter_rol` AS `alter_rol` FROM ((`usuarios` join `empleados` on((`empleados`.`id_empleado` = `usuarios`.`id_fk_empleado`))) join `roles` on((`roles`.`id_rol` = `usuarios`.`id_fk_rol`))) ORDER BY `usuarios`.`f_registro_usuario` DESC ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`id_ciudad`);

--
-- Indices de la tabla `controles`
--
ALTER TABLE `controles`
  ADD PRIMARY KEY (`id_control`),
  ADD KEY `id_fk_empleado` (`id_fk_empleado`),
  ADD KEY `id_fk_ciudad` (`id_fk_ciudad`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`),
  ADD KEY `id_fk_area` (`id_fk_area`),
  ADD KEY `id_fk_cargo` (`id_fk_cargo`);

--
-- Indices de la tabla `omisiones`
--
ALTER TABLE `omisiones`
  ADD PRIMARY KEY (`id_omision`),
  ADD KEY `id_fk_empleado` (`id_fk_empleado`),
  ADD KEY `id_fk_ciudad` (`id_fk_ciudad`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_fk_rol` (`id_fk_rol`),
  ADD KEY `id_fk_empleado` (`id_fk_empleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id_area` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id_cargo` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `id_ciudad` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `controles`
--
ALTER TABLE `controles`
  MODIFY `id_control` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT de la tabla `omisiones`
--
ALTER TABLE `omisiones`
  MODIFY `id_omision` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `controles`
--
ALTER TABLE `controles`
  ADD CONSTRAINT `controles_ibfk_1` FOREIGN KEY (`id_fk_empleado`) REFERENCES `empleados` (`id_empleado`),
  ADD CONSTRAINT `controles_ibfk_2` FOREIGN KEY (`id_fk_ciudad`) REFERENCES `ciudades` (`id_ciudad`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`id_fk_area`) REFERENCES `areas` (`id_area`),
  ADD CONSTRAINT `empleados_ibfk_2` FOREIGN KEY (`id_fk_cargo`) REFERENCES `cargos` (`id_cargo`);

--
-- Filtros para la tabla `omisiones`
--
ALTER TABLE `omisiones`
  ADD CONSTRAINT `omisiones_ibfk_1` FOREIGN KEY (`id_fk_empleado`) REFERENCES `empleados` (`id_empleado`),
  ADD CONSTRAINT `omisiones_ibfk_2` FOREIGN KEY (`id_fk_ciudad`) REFERENCES `ciudades` (`id_ciudad`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_fk_rol`) REFERENCES `roles` (`id_rol`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`id_fk_empleado`) REFERENCES `empleados` (`id_empleado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
