/*Este es el esquelo base de la base de datos que se maneja en el proyecte, aqui se encuentran todas las
tablas que se necesitan para que el proyecto funcione
*/

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2021 a las 21:43:40
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.24

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
  `id` int(11) NOT NULL,
  `sucursal` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `funcionario_responsable` varchar(100) NOT NULL,
  `nombre_equipo` varchar(100) NOT NULL,
  `lugar_de_trabajo` varchar(100) NOT NULL,
  `novedades` varchar(100) NOT NULL,
  `tipo_equipo` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `serial` varchar(100) NOT NULL,
  `fecha_fabricacion` date DEFAULT NULL,
  `procesador` varchar(100) NOT NULL,
  `generacion_procesador` varchar(100) NOT NULL,
  `nucleos` int(11) NOT NULL,
  `velocidad_mz` int(11) NOT NULL,
  `ram_gb` int(11) NOT NULL,
  `tipo_memoria` varchar(100) NOT NULL,
  `adaptador_multimedia` varchar(100) NOT NULL,
  `adaptador_video` varchar(100) NOT NULL,
  `marca_disco_duro` varchar(100) NOT NULL,
  `capacidad_disco` varchar(100) NOT NULL,
  `tipo_disco` varchar(100) NOT NULL,
  `red_ethernet` varchar(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `mac_ethernet` varchar(100) NOT NULL,
  `red_wifi` varchar(100) NOT NULL,
  `mac` varchar(100) NOT NULL,
  `marca_monitor` varchar(100) NOT NULL,
  `tipo_monitor` varchar(100) NOT NULL,
  `serial_monitor` varchar(100) NOT NULL,
  `modelo_monitor` varchar(100) NOT NULL,
  `pulgadas` varchar(60) NOT NULL,
  `cables_poder` int(60) NOT NULL,
  `vga` int(60) NOT NULL,
  `pass_core` int(60) NOT NULL,
  `bateria` varchar(100) NOT NULL,
  `carga_electrica` varchar(100) NOT NULL,
  `cargador` varchar(200) NOT NULL,
  `voltaje` varchar(100) NOT NULL,
  `salida_plug` varchar(100) NOT NULL,
  `os` varchar(100) NOT NULL,
  `bit` int(11) NOT NULL,
  `licencia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla de la hoja de vida de los equipos';

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `sucursal`, `area`, `funcionario_responsable`, `nombre_equipo`, `lugar_de_trabajo`, `novedades`, `tipo_equipo`, `marca`, `modelo`, `serial`, `fecha_fabricacion`, `procesador`, `generacion_procesador`, `nucleos`, `velocidad_mz`, `ram_gb`, `tipo_memoria`, `adaptador_multimedia`, `adaptador_video`, `marca_disco_duro`, `capacidad_disco`, `tipo_disco`, `red_ethernet`, `ip`, `mac_ethernet`, `red_wifi`, `mac`, `marca_monitor`, `tipo_monitor`, `serial_monitor`, `modelo_monitor`, `pulgadas`, `cables_poder`, `vga`, `pass_core`, `bateria`, `carga_electrica`, `cargador`, `voltaje`, `salida_plug`, `os`, `bit`, `licencia`) VALUES
(1, 'Administración', 'Talento humano', 'Camilo Andres Perez', 'DA-GD-PC-01', 'Oficina', 'HP Compaq 6200 Pro SFF', 'Desktop', 'HP', '', 'MXL21405X1', '0000-00-00', 'DualCore Intel Core i3', '2120-', 2, 3300, 8, 'DDR3', 'Intel Cougar Point HDMI @ Intel Cougar Point PCH - High Definition Audio Controller [B-2]', 'Intel(R) HD Graphics 2000 (2108 MB)', 'TOSHIBA', '1TB', 'SATA III', 'Intel(R) 82579LM Gigabit Network Connection', '', 'E8-39-35-4E-8B-36', 'NO', 'NO', 'HP', 'LCD', 'CNC212RJLW', 'HP LV2011', '20,0', 2, 1, 1, 'NO APLICA', 'NO APLICA', '', 'NO APLICA', 'NO APLICA', 'Microsoft Windows 10 Pro', 64, 'BBBBB-BBBBB-BBBBB-BBBBB-BBBBB'),
(2, 'Administración', 'Auditoria', 'Angie Valentina Rodriguez Moreno ', 'GG-AI-PT-01', 'Oficina', '', 'Portatil', 'HP', 'HP Laptop 15-bs0xx', 'CND7182T4S', '0000-00-00', 'DualCore Intel Core i7', '7500U-', 2, 3500, 12, 'DDR4', 'Intel Kaby Lake HDMI @ Intel Sunrise Point-LP PCH - High Definition Audio Controller', 'Intel(R) HD Graphics 620 (1 GB)', 'SEAGATE', '1TB', 'SATA III', 'Realtek PCIe GbE Family Controller', '', '3C-52-82-E8-CB-CF', '', '3C-95-09-B8-1C-0F', 'HP', 'LCD', 'NINGUNO', 'AUO70EC', '15,5', 0, 0, 2, 'VI04', '2200 mAh', 'hp', '19.5V - 3.33A', '4.5mm * 3.0mm', 'Microsoft Windows 10 Pro', 64, '\" 7VDN8-JJ7G6-BHJTY-QJY32-2DKTP\"'),
(3, 'Administración', 'Aux Riesgos', 'Arnold Stiven Ramirez Castro', 'GG-AI-PT-02', 'Oficina', '', 'Portatil', 'Toshiba', 'Toshiba Satellite L45-B', '7E150872', '0000-00-00', 'Mobile DualCore Intel Core i3', '4005U-', 2, 1700, 8, 'DDR3', 'Realtek ALC233 @ Intel Lynx Point-LP PCH - High Definition Audio Controller', 'Intel(R) HD Graphics Family (2080 MB)', 'HITACHI', '480GB', 'SSD', 'Realtek PCIe FE Family Controller', '', '60-02-92-45-B7-30', 'Qualcomm Atheros AR956x Wireless Network Adapter', '64-5A-04-AF-61-F6', 'LG', 'LCD', 'NINGUNO', 'LP140WH2-TPS1', '14,0', 0, 0, 2, 'Satellite L45-B4176WM', '2800 mAh', 'toshiba', '19 V-3.42A', '5.5*2.5mm', 'Microsoft Windows 10 Pro', 64, 'NWMW6-BH8DD-8YQXD-PB6KK-BKKHP');

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
(1, 'Calle14', 'Caja', 'Validadora', 'EPSON', 'TM-U675', 'EZWF011405', 'NO APLICA', 'NO APLICA', 'NO APLICA', '', 'Papel quimico');

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
(1, 'Administración', 'Cartera', 'Erwin Skit Prada', 'Entrega de la tablet', 'Lenovo', 'tab m10 hd tb-x306X', 'MEDIATEK HELIO P22T TAB', 8, 2, '1280*800', 'HA1AKQA1', 2147483647, 5100, 32, 5, 8, 'Android 10');

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
(1, 'admin', 'admin');

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
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `impresoras`
--
ALTER TABLE `impresoras`
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
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
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
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `impresoras`
--
ALTER TABLE `impresoras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;

--
-- AUTO_INCREMENT de la tabla `tablets`
--
ALTER TABLE `tablets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipos_disco`
--
ALTER TABLE `tipos_disco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
