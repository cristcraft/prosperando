-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-01-2022 a las 16:01:32
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hoja_vida_equipos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id`, `nombre`) VALUES
(2, 'Administrador de canales y productos'),
(3, 'Asistente de gerencia'),
(4, 'Auditoria'),
(5, 'Aux Contable'),
(6, 'Aux Control y Sarlaft'),
(7, 'Aux Riesgos'),
(8, 'Base de Datos'),
(9, 'Cartera'),
(10, 'Contadora'),
(11, 'Control de riesgos'),
(12, 'Control y Sarlaft'),
(13, 'Convenios'),
(14, 'Coordinador de cartera'),
(15, 'Coordinador Procesos'),
(16, 'Coordinadora de credito'),
(17, 'Coordinadora Mercadeo'),
(18, 'Credito'),
(19, 'Financiera'),
(20, 'Gerencia'),
(21, 'Lider de Convenios'),
(22, 'Mercadeo'),
(23, 'Microcredito'),
(24, 'Operaciones'),
(25, 'sistemas'),
(26, 'Talento humano'),
(27, 'Tesoreria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas_impresoras`
--

CREATE TABLE `areas_impresoras` (
  `id` int(11) NOT NULL,
  `area` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `areas_impresoras`
--

INSERT INTO `areas_impresoras` (`id`, `area`) VALUES
(1, 'Asistentes'),
(2, 'Caja'),
(3, 'Caja auxiliar'),
(4, 'Cartera y credito'),
(5, 'Contingencia'),
(6, 'General'),
(7, 'Gerencia'),
(8, 'Operaciones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas_tablets`
--

CREATE TABLE `areas_tablets` (
  `id` int(11) NOT NULL,
  `area` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `areas_tablets`
--

INSERT INTO `areas_tablets` (`id`, `area`) VALUES
(1, 'Administracion'),
(2, 'Asesora externa'),
(3, 'Aux auditoria'),
(5, 'Girardot'),
(6, 'Profecional de microcredito'),
(7, 'Cartera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `codigo_administrativo` varchar(50) NOT NULL,
  `sucursal` varchar(50) DEFAULT NULL,
  `area` varchar(50) DEFAULT NULL,
  `funcionario_responsable` varchar(50) DEFAULT NULL,
  `nombre_equipo` varchar(20) DEFAULT NULL,
  `lugar_de_trabajo` varchar(10) DEFAULT NULL,
  `paquete_ofimatico` varchar(10) DEFAULT NULL,
  `version_office` varchar(5) DEFAULT NULL,
  `novedades` varchar(100) DEFAULT NULL,
  `tipo_equipo` varchar(15) DEFAULT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `serial` varchar(100) DEFAULT NULL,
  `fecha_fabricacion` date DEFAULT NULL,
  `procesador` varchar(100) DEFAULT NULL,
  `generacion_procesador` varchar(100) DEFAULT NULL,
  `nucleos` int(11) DEFAULT NULL,
  `velocidad_mz` int(11) DEFAULT NULL,
  `ram_gb` int(11) DEFAULT NULL,
  `tipo_memoria` varchar(100) DEFAULT NULL,
  `adaptador_multimedia` varchar(100) DEFAULT NULL,
  `adaptador_video` varchar(100) DEFAULT NULL,
  `marca_disco_duro` varchar(100) DEFAULT NULL,
  `capacidad_disco` varchar(100) DEFAULT NULL,
  `tipo_disco` varchar(100) DEFAULT NULL,
  `red_ethernet` varchar(100) DEFAULT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `mac_ethernet` varchar(100) DEFAULT NULL,
  `red_wifi` varchar(100) DEFAULT NULL,
  `mac` varchar(100) DEFAULT NULL,
  `marca_monitor` varchar(100) DEFAULT NULL,
  `tipo_monitor` varchar(100) DEFAULT NULL,
  `serial_monitor` varchar(100) DEFAULT NULL,
  `modelo_monitor` varchar(100) DEFAULT NULL,
  `pulgadas` varchar(60) DEFAULT NULL,
  `cables_poder` int(60) DEFAULT NULL,
  `vga` int(60) DEFAULT NULL,
  `pass_core` int(60) DEFAULT NULL,
  `bateria` varchar(100) DEFAULT NULL,
  `carga_electrica` varchar(100) DEFAULT NULL,
  `cargador` varchar(200) DEFAULT NULL,
  `voltaje` varchar(100) DEFAULT NULL,
  `salida_plug` varchar(100) DEFAULT NULL,
  `os` varchar(100) DEFAULT NULL,
  `bit` int(11) DEFAULT NULL,
  `licencia` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla de la hoja de vida de los equipos';

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`codigo_administrativo`, `sucursal`, `area`, `funcionario_responsable`, `nombre_equipo`, `lugar_de_trabajo`, `paquete_ofimatico`, `version_office`, `novedades`, `tipo_equipo`, `marca`, `modelo`, `serial`, `fecha_fabricacion`, `procesador`, `generacion_procesador`, `nucleos`, `velocidad_mz`, `ram_gb`, `tipo_memoria`, `adaptador_multimedia`, `adaptador_video`, `marca_disco_duro`, `capacidad_disco`, `tipo_disco`, `red_ethernet`, `ip`, `mac_ethernet`, `red_wifi`, `mac`, `marca_monitor`, `tipo_monitor`, `serial_monitor`, `modelo_monitor`, `pulgadas`, `cables_poder`, `vga`, `pass_core`, `bateria`, `carga_electrica`, `cargador`, `voltaje`, `salida_plug`, `os`, `bit`, `licencia`) VALUES
('010', 'Administración', 'Administrador de canales y productos', 'asdf', 'asdf', 'Oficina', 'asdf', 'asfd', 'asfd', 'Portatil', 'Dell', 'asdf', 'asdf', '2022-01-21', 'QuadCore Intel Core i5', 'sadf', 23, 3, 2, 'DDR2', 'asdf', 'sadf', 'HITACHI', 'asdf', 'IDE', 'asdf', 'sfd', 'asdf', 'asd', 'asdf', 'asdf', 'asdf', 'asdf', 'fdasdf', '2', 3, 4, 2, 'fd', 'asdf', 'sadf', 'sadf', 'fds', 'asfd', 3, 'asdf'),
('012', 'Administración', 'sistemas', 'Jessica Moreno', 'DA-CS-PT-07', 'Casa', 'Office', '2011', '', 'Portatil', 'Lenovo', 'Lenovo ThinkBook 14-IIL', 'pendiente', '2021-11-17', 'QuadCore Intel Core i5', '1035G1', 4, 3300, 8, 'DDR4', 'Realtek ALC257 @ Intel Ice Point-LP PCH - cAVS (Audio, Voice, Speech)', '	Intel(R) UHD Graphics (1 GB)', 'SEAGATE', '1TB', 'SSD', 'Realtek PCIe GbE Family Controller', 'N.A', 'C0-18-50-26-28-D0', 'Intel(R) Wi-Fi 6 AX201 160MHz', '70-CF-49-D1-A8-1C', 'CMN N140HGA-EA1', 'LCD', 'pendiente', 'CMN', '14,0', -12, 0, 2, '45000 ', 'L19L3PF8', 'LENOVO', '12.536V', 'tipo C', 'Microsoft Windows 10 Pro', 64, 'pendiente'),
('501', 'Administración', 'sistemas', 'Juan Manuel Medina Ocampo', 'DA-CS-PT-08', 'Oficina', 'WPS', 'N.A', '', 'Portatil', 'Lenovo', 'Lenovo ThinkBook 14-IIL', 'pendiente', '2021-11-17', 'QuadCore Intel Core i5', '1035G1', 4, 3300, 8, 'DDR4', 'Realtek ALC257 @ Intel Ice Point-LP PCH - cAVS (Audio, Voice, Speech)', '	Intel(R) UHD Graphics (1 GB)', 'SEAGATE', '1TB', 'SSD', '	Realtek PCIe GbE Family Controller', 'N.A', 'C0-18-50-26-28-51', 'Intel(R) Wi-Fi 6 AX201 160MHz', '70-CF-49-CE-79-F3', 'CMN N140HGA-EA1', 'LCD', 'CMN14E5', 'CMN', '13.9', 0, 0, 2, 'L19C3PF9', '46840 ', 'lenovo', '12.515 ', 'tipo C', 'Microsoft Windows 10 Pro', 64, 'pendiente'),
('PC001', 'Administración', 'Talento humano', 'Camilo Andres Perez', 'DA-GD-PC-01', 'Oficina', 'OFFICE', '2010', 'HP Compaq 6200 Pro SFF', 'Desktop', 'HP', 'HP', 'MXL21405X1', '2022-01-27', 'DualCore Intel Core i3', '2120-', 2, 3300, 8, 'DDR3', 'Intel Cougar Point HDMI @ Intel Cougar Point PCH - High Definition Audio Controller [B-2]', 'Intel(R) HD Graphics 2000 (2108 MB)', 'TOSHIBA', '1TB', 'SATA III', 'Intel(R) 82579LM Gigabit Network Connection', '', 'E8-39-35-4E-8B-36', 'NO', 'NO', 'HP', 'LCD', 'CNC212RJLW', 'HP LV2011', '20,0', 2, 1, 1, 'NO APLICA', 'NO APLICA', 'NO APLICA', 'NO APLICA', 'NO APLICA', 'Microsoft Windows 10 Pro', 64, 'BBBBB-BBBBB-BBBBB-BBBBB-BBBBB'),
('PC002', 'Administración', 'Auditoria', 'Angie Valentina Rodriguez Moreno ', 'GG-AI-PT-01', 'Oficina', 'Office', '365', '', 'Portatil', 'HP', 'HP Laptop 15-bs0xx', 'CND7182T4S', '2022-01-09', 'DualCore Intel Core i7', '7500U-', 2, 3500, 12, 'DDR4', 'Intel Kaby Lake HDMI @ Intel Sunrise Point-LP PCH - High Definition Audio Controller', 'Intel(R) HD Graphics 620 (1 GB)', 'SEAGATE', '1TB', 'SATA III', 'Realtek PCIe GbE Family Controller', '', '3C-52-82-E8-CB-CF', 'N.A', '3C-95-09-B8-1C-0F', 'HP', 'LCD', 'NINGUNO', 'AUO70EC', '15,5', 0, 0, 2, 'VI04', '2200 mAh', 'hp', '19.5V - 3.33A', '4.5mm * 3.0mm', 'Microsoft Windows 10 Pro', 64, 'BBBBB-BBBBB-BBBBB-BBBBB-BBBBB'),
('PC003', NULL, 'Aux Riesgos', 'Arnold Stiven Ramirez Castro', 'GG-AI-PT-02', 'Oficina', '', '', '', 'Portatil', 'Toshiba', 'Toshiba Satellite L45-B', '7E150872', '0000-00-00', 'Mobile DualCore Intel Core i3', '4005U-', 2, 1700, 8, 'DDR3', 'Realtek ALC233 @ Intel Lynx Point-LP PCH - High Definition Audio Controller', 'Intel(R) HD Graphics Family (2080 MB)', 'HITACHI', '480GB', 'SSD', 'Realtek PCIe FE Family Controller', '', '60-02-92-45-B7-30', 'Qualcomm Atheros AR956x Wireless Network Adapter', '64-5A-04-AF-61-F6', 'LG', 'LCD', 'NINGUNO', 'LP140WH2-TPS1', '14,0', 0, 0, 2, 'Satellite L45-B4176WM', '2800 mAh', 'toshiba', '19 V-3.42A', '5.5*2.5mm', 'Microsoft Windows 10 Pro', 64, 'NWMW6-BH8DD-8YQXD-PB6KK-BKKHP');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impresoras`
--

CREATE TABLE `impresoras` (
  `id` int(11) NOT NULL,
  `sucursal` varchar(200) NOT NULL,
  `area` varchar(200) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `marca` varchar(200) NOT NULL,
  `modelo` varchar(200) NOT NULL,
  `serial` varchar(200) NOT NULL,
  `ip` varchar(200) DEFAULT NULL,
  `mac` varchar(200) DEFAULT NULL,
  `nombre_host` varchar(200) NOT NULL,
  `novedades` varchar(200) DEFAULT NULL,
  `tipo_papel` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `impresoras`
--

INSERT INTO `impresoras` (`id`, `sucursal`, `area`, `tipo`, `marca`, `modelo`, `serial`, `ip`, `mac`, `nombre_host`, `novedades`, `tipo_papel`) VALUES
(1, 'Calle14', 'Caja', 'Validadora', 'EPSON', 'TM-U675', 'EZWF011405', 'NO APLICA', 'NO APLICA', 'NO APLICA', '', 'Papel quimico'),
(2, 'Administración', 'Asistentes', 'Escaner', 'EPSON', 'asdf', 'sadf', 'asdf', 'asdf', 'asdf', 'asdf', 'Papel Normal, Papel Bond, Papel Reciclado, Sobre, Cartulina, Transparencies, Etiquetas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar_trabajo`
--

CREATE TABLE `lugar_trabajo` (
  `lugar_de_trabajo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lugar_trabajo`
--

INSERT INTO `lugar_trabajo` (`lugar_de_trabajo`) VALUES
('Oficina'),
('Casa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimientos_equipos`
--

CREATE TABLE `mantenimientos_equipos` (
  `id` int(11) NOT NULL,
  `codigo_administrativo` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre_equipo` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  `tipo_mantenimiento` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion_mantenimiento` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre_tecnico` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre_encargado` varchar(200) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `mantenimientos_equipos`
--

INSERT INTO `mantenimientos_equipos` (`id`, `codigo_administrativo`, `nombre_equipo`, `fecha`, `tipo_mantenimiento`, `descripcion_mantenimiento`, `nombre_tecnico`, `nombre_encargado`) VALUES
(1, '001', 'DM-DM-01', '2021-11-03', 'preventivo', 'prueba 1', 'cris', 'n.a'),
(2, '002', 'DM-DM-02', '2021-11-04', 'correctivo', 'prueba', 'cris', 'n.a'),
(3, '003', 'DM-DM-03', '2021-11-17', 'ambos', 'se previnio y arreglo el error en el computador de mercadeo y cambio del pc', 'cris', 'n.a'),
(4, '004', 'DM-DM-04', '2021-11-11', 'preventivo', 'se previnio daño leve solo eso', 'cris', 'n.a'),
(17, 'PC001', '', '0000-00-00', 'preventivo', '', '', ''),
(18, 'PC001', 'este', '2021-11-23', 'correctivo', 'esto es una prueba', 'cristian peña', 'n.a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimientos_impresoras`
--

CREATE TABLE `mantenimientos_impresoras` (
  `id` int(11) NOT NULL,
  `ciudad` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `cliente` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  `direccion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `encargado` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_impresora` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `marca` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `modelo` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `serial` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `reporte_tecnico` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `observaciones` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo_mantenimiento` varchar(200) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `mantenimientos_impresoras`
--

INSERT INTO `mantenimientos_impresoras` (`id`, `ciudad`, `cliente`, `fecha`, `direccion`, `telefono`, `encargado`, `tipo_impresora`, `marca`, `modelo`, `serial`, `reporte_tecnico`, `observaciones`, `tipo_mantenimiento`) VALUES
(1, 'ibague', 'prosperando', '2021-12-11', 'cra 5ta', '123456', 'Cristian Peña', 'multif', 'kyocera', 'm3040idn', '123456', 'se arreglo', 'estaba dificil', 'correctivo'),
(4, 'ibague', 'Prosperando', '2022-01-25', 'Aqui', '1324', 'Cris', 'escaner', 'epson', 'F-01', 'a1a2s3d', 'Se reparo', 'Se observo', 'preventivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimientos_servidores`
--

CREATE TABLE `mantenimientos_servidores` (
  `id` int(11) NOT NULL,
  `serial` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `ip` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `tipo_mantenimiento` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion_mantenimiento` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre_tecnico` varchar(200) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `mantenimientos_servidores`
--

INSERT INTO `mantenimientos_servidores` (`id`, `serial`, `ip`, `fecha`, `tipo_mantenimiento`, `descripcion_mantenimiento`, `nombre_tecnico`) VALUES
(1, '1234', '192.178.0.18', '2021-12-14 09:28:00', 'preventivo', 'Se limpio el cache', 'N.A'),
(2, '1', '192.178.0.12', '2021-12-14 00:00:00', 'correctivo', 'se cambio disco duro', 'N.A'),
(3, 'asfd', '192.178.0.15', '2021-12-18 08:00:00', 'preventivo', '', ''),
(4, '54321', '192.178.0.226', '2021-12-19 15:06:00', 'ambos', 'test', 'cris');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `marca` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `marca`) VALUES
(1, 'Dell'),
(2, 'HP'),
(3, 'Lenovo'),
(4, 'Toshiba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas_disco_duro`
--

CREATE TABLE `marcas_disco_duro` (
  `id` int(11) NOT NULL,
  `marca_disco_duro` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marcas_disco_duro`
--

INSERT INTO `marcas_disco_duro` (`id`, `marca_disco_duro`) VALUES
(1, 'HITACHI'),
(2, 'KINGSTON'),
(3, 'LEXAR'),
(4, 'SAMSUNG'),
(5, 'SEAGATE'),
(6, 'TOSHIBA'),
(7, 'WESTERNDIGITAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas_impresoras`
--

CREATE TABLE `marcas_impresoras` (
  `id` int(11) NOT NULL,
  `marca` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marcas_impresoras`
--

INSERT INTO `marcas_impresoras` (`id`, `marca`) VALUES
(1, 'EPSON'),
(2, 'FUJITSU'),
(3, 'HID'),
(4, 'HP'),
(5, 'KYOCERA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas_tablets`
--

CREATE TABLE `marcas_tablets` (
  `id` int(11) NOT NULL,
  `marcas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marcas_tablets`
--

INSERT INTO `marcas_tablets` (`id`, `marcas`) VALUES
(1, 'Samsung'),
(2, 'Lenovo'),
(3, 'Xiaomi'),
(5, 'Google Pixel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `os_tablets`
--

CREATE TABLE `os_tablets` (
  `os` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `os_tablets`
--

INSERT INTO `os_tablets` (`os`, `id`) VALUES
('Androd 7.1.1', 1),
('Android 9', 2),
('Android 10', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesadores`
--

CREATE TABLE `procesadores` (
  `id` int(11) NOT NULL,
  `procesador` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `procesadores`
--

INSERT INTO `procesadores` (`id`, `procesador`) VALUES
(1, 'QuadCore Intel Core i5'),
(2, 'DualCore Intel Celeron'),
(3, 'DualCore Intel Core 2 Duo'),
(4, 'DualCore Intel Core i3'),
(5, 'DualCore Intel Core i5'),
(6, 'DualCore Intel Core i7'),
(7, 'DualCore Intel Pentium'),
(8, 'DualCore Intel Pentium E5200'),
(9, 'FALTA RAM Y HDD'),
(10, 'HexaCore Intel Core i7'),
(11, 'I3 500G falta ram'),
(12, 'I5 500G 4RAM'),
(13, 'Mobile DualCore Intel Celeron'),
(14, 'Mobile DualCore Intel Core i3'),
(15, 'Mobile DualCore Intel Core i5'),
(16, 'OctaCore Intel core i5'),
(17, 'QuadCore Intel Core i5'),
(18, 'QuadCore Intel Core i7');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesadores_tablets`
--

CREATE TABLE `procesadores_tablets` (
  `id` int(11) NOT NULL,
  `procesador` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `procesadores_tablets`
--

INSERT INTO `procesadores_tablets` (`id`, `procesador`) VALUES
(1, 'QUALCOMM SNAPDRAGON 410'),
(2, 'SAMSUNG EXYNOS 7904'),
(3, 'MEDIATEK HELIO P22T TAB');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resolucion_tablets`
--

CREATE TABLE `resolucion_tablets` (
  `id` int(11) NOT NULL,
  `resolucion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `resolucion_tablets`
--

INSERT INTO `resolucion_tablets` (`id`, `resolucion`) VALUES
(1, '1280*800'),
(2, '1024*768'),
(3, '1920*1200');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servidores`
--

CREATE TABLE `servidores` (
  `id` int(11) NOT NULL,
  `serial` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `marca` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `modelo` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  `nombre_equipo` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `procesador` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `generacion` int(11) NOT NULL,
  `nucleos` int(11) NOT NULL,
  `velocidad_mz` int(11) NOT NULL,
  `ram` int(11) NOT NULL,
  `tipo_memoria` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `adaptador_multimedia` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `adaptador_video` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `red_ethernet` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `mac` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `ip` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `red_ethernet1` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `mac1` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `ip1` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `so` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `licencia` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `total_discos` int(11) NOT NULL,
  `marca1` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `capacidad1` int(11) DEFAULT NULL,
  `marca2` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `capacidad2` int(11) DEFAULT NULL,
  `marca3` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `capacidad3` int(11) DEFAULT NULL,
  `marca4` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `capacidad4` int(11) DEFAULT NULL,
  `marca5` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `capacidad5` int(11) DEFAULT NULL,
  `marca6` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `capacidad6` int(11) DEFAULT NULL,
  `marca7` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `capacidad7` int(11) DEFAULT NULL,
  `marca8` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `capacidad8` int(11) DEFAULT NULL,
  `marca9` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `capacidad9` int(11) DEFAULT NULL,
  `marca10` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `capacidad10` int(11) DEFAULT NULL,
  `marca11` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `capacidad11` int(11) DEFAULT NULL,
  `marca12` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `capacidad12` int(11) DEFAULT NULL,
  `marca13` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `capacidad13` int(11) DEFAULT NULL,
  `marca14` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `capacidad14` int(11) DEFAULT NULL,
  `marca15` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `capacidad15` int(11) DEFAULT NULL,
  `marca16` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `capacidad16` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `servidores`
--

INSERT INTO `servidores` (`id`, `serial`, `marca`, `modelo`, `fecha`, `nombre_equipo`, `procesador`, `generacion`, `nucleos`, `velocidad_mz`, `ram`, `tipo_memoria`, `adaptador_multimedia`, `adaptador_video`, `red_ethernet`, `mac`, `ip`, `red_ethernet1`, `mac1`, `ip1`, `so`, `licencia`, `total_discos`, `marca1`, `capacidad1`, `marca2`, `capacidad2`, `marca3`, `capacidad3`, `marca4`, `capacidad4`, `marca5`, `capacidad5`, `marca6`, `capacidad6`, `marca7`, `capacidad7`, `marca8`, `capacidad8`, `marca9`, `capacidad9`, `marca10`, `capacidad10`, `marca11`, `capacidad11`, `marca12`, `capacidad12`, `marca13`, `capacidad13`, `marca14`, `capacidad14`, `marca15`, `capacidad15`, `marca16`, `capacidad16`) VALUES
(1, '123456', 'HP', '21', '2021-11-01', 'PRUEBA', '1', 1, 11, 1, 1, 'DDR3', 'NO', 'SI', 'SI', 'SI', '123', 'NO', 'NO', 'NO', 'WIDOWS', 'SI', 16, 'HP', 1, 'HP1', 1, 'A', 3, 'D', 3, 'F', 3, 'F3', 3, 'F', 3, '3', 4, 'R', 5, 'R', 6, '5', 4, 'F5', 5, 'hp', 3, 'zp', 2, 'xp', 1, 'vista', 10),
(4, '0987654321', 'asdf', 'el ultimo de este año 20215', '2021-11-04', 'este', '3', 5, 5, 5, 5, 'ddr4', '4', 'Intel(R) HD Graphics 620 (1 GB)', 'Intel(R) 82579LM Gigabit Network Connection', 'N.A', 'N.A', '123', '321', '1234', 'linux', 'pendiente', 5, '1', 5, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE `sucursales` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `estado` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`id`, `nombre`, `estado`) VALUES
(1, 'Administración', NULL),
(2, 'Calle14', 'activa'),
(3, 'Bogotá', 'activa'),
(4, 'Girardot', 'activa'),
(6, 'Salado', 'activa'),
(7, 'Cartagena', 'activa'),
(8, 'Chaparral', 'activa'),
(9, 'Mariquita', 'avctiva');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `switches`
--

CREATE TABLE `switches` (
  `id` int(11) NOT NULL,
  `marca` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `modelo` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `serial` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `mac` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `ip` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `manual` varchar(200) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `switches`
--

INSERT INTO `switches` (`id`, `marca`, `modelo`, `serial`, `mac`, `ip`, `manual`) VALUES
(1, 'HP', 'HP-V1910-48G', 'CN19BXS0Z1', '20FDF1EF4135', 'PENDIETE', 'https://support.hpe.com/hpesc/public/docDisplay?docId=emr_na-c02965322'),
(4, 'anyi', 'f2', '123456', '2123456', '192.788.0.18', 'https://www.google.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablets`
--

CREATE TABLE `tablets` (
  `id` int(11) NOT NULL,
  `sucursal` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `funcionario_responsable` varchar(100) NOT NULL,
  `novedades` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `procesador` varchar(100) NOT NULL,
  `nucleos` int(11) NOT NULL,
  `ram` int(11) NOT NULL,
  `resolucion` varchar(100) NOT NULL,
  `serial` varchar(100) NOT NULL,
  `imei` int(11) NOT NULL,
  `bateria` int(11) NOT NULL,
  `rom` int(11) NOT NULL,
  `camara_frontal` int(11) NOT NULL,
  `camara_trasera` int(11) NOT NULL,
  `os` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tablets`
--

INSERT INTO `tablets` (`id`, `sucursal`, `area`, `funcionario_responsable`, `novedades`, `marca`, `modelo`, `procesador`, `nucleos`, `ram`, `resolucion`, `serial`, `imei`, `bateria`, `rom`, `camara_frontal`, `camara_trasera`, `os`) VALUES
(1, 'Administración', 'Administracion', 'dfasdf', 'asdf', 'Samsung', 'HP-V1910-48G aaa', 'QUALCOMM SNAPDRAGON 410', 0, 0, '1280*800', 'CN19BXS0Z1', 0, 0, 0, 0, 0, 'Androd 7.1.1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_disco`
--

CREATE TABLE `tipos_disco` (
  `id` int(11) NOT NULL,
  `tipo_disco` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipos_disco`
--

INSERT INTO `tipos_disco` (`id`, `tipo_disco`) VALUES
(1, 'IDE'),
(2, 'SATA  II'),
(3, 'SATA III'),
(4, 'SSD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_equipo`
--

CREATE TABLE `tipo_equipo` (
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_equipo`
--

INSERT INTO `tipo_equipo` (`tipo`) VALUES
('Portatil'),
('Desktop'),
('All in one');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_impresoras`
--

CREATE TABLE `tipo_impresoras` (
  `id` int(11) NOT NULL,
  `impresora` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_impresoras`
--

INSERT INTO `tipo_impresoras` (`id`, `impresora`) VALUES
(1, 'Escaner'),
(2, 'Impresion/Escaner/Copia'),
(3, 'Impresion/Escaner/Copia/Fax'),
(4, 'Impresora codificadora de tarjetas monocromatica'),
(5, 'Validadora');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_memorias`
--

CREATE TABLE `tipo_memorias` (
  `id` int(11) NOT NULL,
  `tipo_memoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_memorias`
--

INSERT INTO `tipo_memorias` (`id`, `tipo_memoria`) VALUES
(1, 'DDR2'),
(2, 'DDR3'),
(3, 'DDR4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_papel`
--

CREATE TABLE `tipo_papel` (
  `id` int(11) NOT NULL,
  `tipo_papel` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_papel`
--

INSERT INTO `tipo_papel` (`id`, `tipo_papel`) VALUES
(1, 'Papel Normal, Papel Bond, Papel Reciclado, Sobre, Cartulina, Transparencies, Etiquetas'),
(2, 'Papel Normal, Papel Bond, Papel Reciclado, Sobres, OHP, Pergamino, Papel Con Membrete, Etiquetas'),
(3, 'Papel quimico'),
(4, 'solo escaner'),
(5, 'Tarjetas'),
(7, 'futcia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user`, `password`) VALUES
(1, 'admin', 'adminPSP');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `areas_impresoras`
--
ALTER TABLE `areas_impresoras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `areas_tablets`
--
ALTER TABLE `areas_tablets`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`codigo_administrativo`);

--
-- Indices de la tabla `impresoras`
--
ALTER TABLE `impresoras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mantenimientos_equipos`
--
ALTER TABLE `mantenimientos_equipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mantenimientos_impresoras`
--
ALTER TABLE `mantenimientos_impresoras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mantenimientos_servidores`
--
ALTER TABLE `mantenimientos_servidores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marcas_disco_duro`
--
ALTER TABLE `marcas_disco_duro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marcas_impresoras`
--
ALTER TABLE `marcas_impresoras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marcas_tablets`
--
ALTER TABLE `marcas_tablets`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `os_tablets`
--
ALTER TABLE `os_tablets`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `procesadores`
--
ALTER TABLE `procesadores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `procesadores_tablets`
--
ALTER TABLE `procesadores_tablets`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `resolucion_tablets`
--
ALTER TABLE `resolucion_tablets`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servidores`
--
ALTER TABLE `servidores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `switches`
--
ALTER TABLE `switches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tablets`
--
ALTER TABLE `tablets`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipos_disco`
--
ALTER TABLE `tipos_disco`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_impresoras`
--
ALTER TABLE `tipo_impresoras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_memorias`
--
ALTER TABLE `tipo_memorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_papel`
--
ALTER TABLE `tipo_papel`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `areas_impresoras`
--
ALTER TABLE `areas_impresoras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `areas_tablets`
--
ALTER TABLE `areas_tablets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `impresoras`
--
ALTER TABLE `impresoras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `mantenimientos_equipos`
--
ALTER TABLE `mantenimientos_equipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `mantenimientos_impresoras`
--
ALTER TABLE `mantenimientos_impresoras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `mantenimientos_servidores`
--
ALTER TABLE `mantenimientos_servidores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `marcas_disco_duro`
--
ALTER TABLE `marcas_disco_duro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `marcas_impresoras`
--
ALTER TABLE `marcas_impresoras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `marcas_tablets`
--
ALTER TABLE `marcas_tablets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `os_tablets`
--
ALTER TABLE `os_tablets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `procesadores`
--
ALTER TABLE `procesadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `procesadores_tablets`
--
ALTER TABLE `procesadores_tablets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `resolucion_tablets`
--
ALTER TABLE `resolucion_tablets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `servidores`
--
ALTER TABLE `servidores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;

--
-- AUTO_INCREMENT de la tabla `switches`
--
ALTER TABLE `switches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tablets`
--
ALTER TABLE `tablets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipos_disco`
--
ALTER TABLE `tipos_disco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tipo_impresoras`
--
ALTER TABLE `tipo_impresoras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipo_memorias`
--
ALTER TABLE `tipo_memorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipo_papel`
--
ALTER TABLE `tipo_papel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
