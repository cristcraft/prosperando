-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 31-01-2022 a las 23:02:10
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
  `id` int(11) NOT NULL,
  `codigo_administrativo` varchar(11) DEFAULT NULL,
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
  `licencia` varchar(100) DEFAULT NULL,
  `repotencializado` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla de la hoja de vida de los equipos';

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `codigo_administrativo`, `sucursal`, `area`, `funcionario_responsable`, `nombre_equipo`, `lugar_de_trabajo`, `paquete_ofimatico`, `version_office`, `novedades`, `tipo_equipo`, `marca`, `modelo`, `serial`, `fecha_fabricacion`, `procesador`, `generacion_procesador`, `nucleos`, `velocidad_mz`, `ram_gb`, `tipo_memoria`, `adaptador_multimedia`, `adaptador_video`, `marca_disco_duro`, `capacidad_disco`, `tipo_disco`, `red_ethernet`, `ip`, `mac_ethernet`, `red_wifi`, `mac`, `marca_monitor`, `tipo_monitor`, `serial_monitor`, `modelo_monitor`, `pulgadas`, `cables_poder`, `vga`, `pass_core`, `bateria`, `carga_electrica`, `cargador`, `voltaje`, `salida_plug`, `os`, `bit`, `licencia`, `repotencializado`) VALUES
(1, '001', 'Administración', 'Talento humano', 'Camilo Andres Perez', 'DA-GD-PC-01', 'Oficina', 'Office', '2013', ' ', 'Desktop', 'HP', 'HP Compaq 6200 Pro SFF', 'MXL21405X1', '2011-10-11', 'DualCore Intel Core i3', '2120-', 2, 3300, 8, 'DDR3', 'Intel Cougar Point HDMI @ Intel Cougar Point PCH - High Definition Audio Controller [B-2]', 'Intel(R) HD Graphics 2000 (2108 MB)', 'TOSHIBA', '1TB', 'SATA III', 'Intel(R) 82579LM Gigabit Network Connection', '', 'E8-39-35-4E-8B-36', 'N.A', 'N.A', 'HP', 'LCD', 'CNC212RJLW', 'HP LV2011', '20', 2, 1, 1, 'N.A', 'N.A', 'N.A', 'N.A', 'N.A', 'Microsoft Windows 10 Pro', 64, 'BBBBB-BBBBB-BBBBB-BBBBB-BBBBB', 'N.A'),
(2, '001', 'Administración', 'Auditoria', 'Angie Valentina Rodriguez Moreno', 'GG-AI-PT-01', 'Oficina', 'Office', '365', ' ', 'Portatil', 'HP', 'HP Laptop 15-bs0xx', 'CND7182T4S', '2017-07-04', 'DualCore Intel Core i7', '7500U-', 2, 3500, 12, 'DDR4', 'Intel Kaby Lake HDMI @ Intel Sunrise Point-LP PCH - High Definition Audio Controller', 'Intel(R) HD Graphics 620 (1 GB)', 'SEAGATE', '1TB', 'SATA III', 'Realtek PCIe GbE Family Controller', '', '3C-52-82-E8-CB-CF', 'Realtek RTL8723BE 802.11 bgn Wi-Fi Adapter', '3C-95-09-B8-1C-0F', 'HP', 'LCD', 'N.A', 'AUO70EC', '15,5', 0, 0, 2, 'VI04', '2200 mAh', 'HP', '19.5V - 3.33A', '4.5mm * 3.0mm', 'Microsoft Windows 10 Pro', 64, '7VDN8-JJ7G6-BHJTY-QJY32-2DKTP', 'N.A'),
(3, '001', 'Administración', 'Base de Datos', 'Arnold Stiven Ramirez Castro', 'GG-AB-PT-01', 'Oficina', 'Office', '365', ' ', 'Portatil', 'HP', 'HP ProBook 450 G5', '5CD9106DMK', '2019-03-01', 'DualCore Intel Core i7', '8550U-', 4, 3400, 23, 'DDR4', 'Intel Kaby Lake HDMI @ Intel Sunrise Point-LP PCH - High Definition Audio Controller', 'Intel(R) HD Graphics 620 (1 GB)', 'TOSHIBA', '1TB', 'SATA III', 'Realtek PCIe GBE Family Controller', '', 'B0-0C-D1-6A-6C-D8', 'Intel(R) Dual Band Wireless-AC 8265', 'D8-F2-CA-A1-20-F7', 'HP', 'LED', 'NINGUNO', 'BOE06A5', '15,5', 0, 0, 1, '440 445 450 455 470 Fp06 Fp09', '4400 mAh', 'HP', '18,5 V- 3,5A', '4.5mm * 3.0mm', 'Microsoft Windows 10 Pro', 64, 'PHNVR-463CJ-TR7XM-XH3DX-WTYP2', 'N.A'),
(4, '001', 'Administración', 'Cartera', 'Erwin Skit Prada', 'DF-CA-PC-06', 'Oficina', 'Office', '365', 'Se cambio el disco por uno de 500GB SSD', 'Desktop', 'Lenovo', 'HP ProDesk 400 G1 SFF', 'MXL4260SBD', '2014-11-10', 'DualCore Intel Core i3', '4130-', 2, 3400, 4, 'DDR3', 'Realtek ALC221 @ Intel Lynx Point PCH - High Definition Audio Controller [C-1]', 'Intel(R) HD Graphics 4400 (1GB)', 'SEAGATE', '500', 'SATA  II', 'Realtek PCIe GbE Family Controller', '', '40-A8-F0-44-70-16', 'N.A', 'N.A', 'HP', 'LCD', '6CM3233H2G', 'HP LV1911', '18,5', 2, 1, 1, 'N.A', 'N.A', 'N.A', 'N.A', 'N.A', 'MIcrosoft Windows 10 Pro', 64, 'RCQHC-N2Y4P-QYG64-HRPPJ-F3KTT ', 'Si'),
(5, '001', 'Administración', 'Cartera', 'Anyi Carolina Valencia Vasquez', 'DF-CA-PC-02', 'Oficina', 'Office', '2013', ' ', 'All in one', 'Lenovo', 'IdeaCentre A340-24IWL', 'MP1FUZ0R', '2019-05-10', 'QuadCore Intel Core i5', '8250U-', 4, 3900, 8, 'DDR4', 'Realtek ALC221 @ Intel Lynx Point PCH - High Definition Audio Controller [C-1]', 'Intel(R) UHD Graphics 620 (1 GB)', 'TOSHIBA', '1TB', 'SATA III', '\" Realtek RTL8168/8111 PCI-E Gigabit Ethernet Adapter\"', '', '9C-5A-44-89-71-00', 'Realtek 8821CE Wireless LAN 802.11ac PCI-E NIC', '28-39-26-35-B1-77', 'LENOVO', 'LED', '28261-', 'LEN-A340W-B-A', '23,8', 0, 0, 1, 'N.A', 'N.A', 'LENOVO', '20 V -6A', 'TIPO USB', 'Microsoft Windows 10 Pro', 64, 'BBBBB-BBBBB-BBBBB-BBBBB-BBBBB', 'N.A'),
(6, '001', 'Administración', 'Cartera', 'Gladys Cecilia Cerquera Castellanos ', 'DF-CA-PC-03', 'Oficina', 'No tiene', '0', ' ', 'All in one', 'HP', 'HP All-in-One - 20-c405la', '8CC90814F5', '2019-04-24', 'QuadCore Intel Core i5', '7200U-', 2, 2715, 4, 'DDR3', '\"	Intel Kaby Lake HDMI @ Intel Sunrise Point-LP PCH - High Definition Audio Controller', 'Intel(R) HD Graphics 620 (1 GB)', 'TOSHIBA', '1TB', 'SATA III', 'Realtek PCIe GbE Family Controller', '', 'B0-0C-D1-63-46-CA', 'Realtek RTL8723BE 802.11 bgn Wi-Fi Adapter', 'F8-A2-D6-6F-2C-5F', 'HP', 'LCD', 'M195FGE-L23', 'HPN4029', '19,5', 0, 0, 1, 'N.A', 'N.A', 'HP', '19,5V -2.31A', '4.5x3mm', 'MIcrosoft Windows 10 Home', 64, 'HNKC7-2MWGW-X74QH-VM26K-TF4BP', 'No'),
(7, '001', 'Administración', 'Cartera', 'Johanna Patricia Forero Florez', 'DF-CA-PC-03', 'Oficina', 'Office', '2013', 'El office no  esta activado', 'Desktop', 'HP', 'HP Compaq 8200 Elite', 'MXL20216X2', '2010-09-06', 'DualCore Intel Core i3', '2120-', 2, 3300, 2, 'DDR3', 'Intel Ibex Peak HDMI @ Intel Ibex Peak PCH - High Definition Audio Controller [B-2]', 'Intel(R) HD Graphics (749204 kB)', 'SEAGATE', '500GB', 'SATA III', 'Intel(R) 82578DM Gigabit Network Connection', '', '2C-41-38-AB-FF-D0', 'N.A', 'N.A', 'HP', 'LCD', '3CQ44408GL', 'HP V193', '18,5', 2, 1, 1, 'N.A', 'N.A', 'N.A', 'N.A', 'N.A', 'MIcrosoft Windows 10 Pro', 64, 'P26NH-VRM2W-883F7-DJ6HM-FGDGT ', 'SI'),
(8, '001', 'Administración', 'Credito', 'Lina Maria Quintero Avila ', 'DF-PC-PC-08', 'Oficina', 'Office', '2013', 'El office no  esta activado', 'Desktop', 'Lenovo', 'ThinkCentre E73', 'PC08EJAS', '2015-04-08', 'QuadCore Intel Core i5', '4460S-', 4, 2900, 4, 'DDR3', 'Realtek ALC662 @ Intel Lynx Point PCH - High Definition Audio Controller [C-1]', 'Intel(R) HD Graphics 4600 (1823180 kB)', 'SEAGATE', '500GB', 'SATA III', 'Realtek PCIe GBE Family Controller', '', '00-01-6C-CC-0B-E4', 'N.A', 'N.A', 'LENOVO', 'LCD', 'V901Z16G', 'E1922 Wide', '18,5', 2, 1, 1, 'N.A', 'N.A', 'N.A', 'N.A', 'N.A', 'MIcrosoft Windows 10 Pro', 64, 'NF6HC-QH89W-F8WYV-WWXV4-WFG6P ', 'Si'),
(9, '001', 'Administración', 'Cartera', 'Herlichs Adolfo Vergara Sanchez', 'DF-CA-PC-06', 'Oficina', 'Office', '2010', ' ', 'All in one', 'Lenovo', 'V310z AlO', 'S1H05WG8', '2017-11-15', 'QuadCore Intel Core i5', '7400-', 4, 3400, 4, 'DDR4', 'Intel Kaby Lake HDMI @ Intel Sunrise Point PCH - High Definition Audio Controller', 'Intel(R) HD Graphics 630 (1 GB)', 'WESTERNDIGITAL', '1TB', 'SATA III', 'Realtek PCIe GBE Family Controller', '', '98-EE-CB-83-6F-73', 'Intel(R) Dual Band Wireless-AC 3165', '94-B8-6D-81-70-1D', 'LENOVO', 'LCD', '25011', 'Lenovo AIO', '19,4', 0, 0, 1, 'N.A', 'N.A', 'LENOVO', '20 V -6A', 'TIPO USB', 'Microsoft Windows 10 Pro', 64, 'BRT9D-N46BM-RF86C-T32BT-PDKTP', 'N.A'),
(10, '001', 'Administración', 'sistemas', 'SIN USUARIO', 'DF-CA-PC-07', 'Oficina', 'N.A', '0', 'Era el equipo de la pasante', 'Desktop', 'HP', 'Compaq dc5800 Small Form Factor', 'MXJ91602D0', '2008-08-27', 'DualCore Intel Pentium', 'E5200-', 2, 2500, 4, 'DDR2', 'Analog Devices AD1884 @ Intel 82801IB ICH9 - High Definition Audio Controller [A-2]', 'Intel(R) Q33 Express Chipset Family (256 MB)', 'SEAGATE', '500GB', 'SATA III', 'Gigabit Intel(R) 82566DM-2', '', '00-24-81-0A-8E-F9', 'N.A', 'N.A', 'HP', 'LCD', 'CNC212RJLW', 'HP LV2011', '20', 2, 1, 1, 'N.A', 'N.A', 'N.A', 'N.A', 'N.A', 'Microsoft Windows 7 Professional', 64, '74T2M-DKDBC-788W3-H689G-6P6GT', 'N.A'),
(11, '001', 'Administración', 'Cartera', 'Viviana Paola Tabares', 'DF-CA-PC-08', 'Oficina', 'Office', '2010', ' ', 'Desktop', 'HP', 'Hp compac Pro 4300', 'MXL3322PX9', '2013-03-08', 'QuadCore Intel Core i5', '3470S-', 4, 3600, 4, 'DDR3', ' Realtek ALC221 @ Intel Cougar Point PCH - High Definition Audio Controller [B-3]', 'Intel(R) HD Graphics (2112 MB)', 'SEAGATE', '500GB', 'SATA  II', 'Broadcom NetLink (TM) Gigabit Ethernet', '', '78-E3-B5-C2-0F-7A', 'N.A', 'N.A', 'HP', 'LCD', '6CM3233HG0', 'HP LV1911', '18,5', 2, 1, 2, 'N.A', 'N.A', 'N.A', 'N.A', 'N.A', 'Microsoft Windows 10 Pro', 64, 'VK7JG-NPHTM-C97JM-9MPGT-3V66T', 'N.A'),
(12, '001', 'Administración', 'Aux Control y Sarlaft', 'Maryi sorany moreno rodriguez', 'GG-PO-PC-02', 'Oficina', 'WPS', '0', 'EQUIPO SE FORMATEO Y SE RENOMBRO', 'All in one', 'Lenovo', 'V310z AlO', 'S1H05WMZ', '2017-11-15', 'QuadCore Intel Core i5', '7400-', 4, 3400, 4, 'DDR4', 'Intel Kaby Lake HDMI @ Intel Sunrise Point PCH - High Definition Audio Controller', 'Intel(R) HD Graphics 630 (1 GB)', 'SEAGATE', '500GB', 'SATA III', 'Realtek PCIe GBE Family Controller', '', '98-EE-CB-83-6D-FC', 'Intel(R) Dual Band Wireless-AC 3165', '94-B8-6D-8C-A6-54', 'LENOVO', 'LCD', '25013', 'Lenovo AIO', '19,4', 0, 0, 1, 'N.A', 'N.A', 'LENOVO', '20 V -6A', 'TIPO USB', 'Microsoft Windows 10 Pro', 64, 'XNX3G-JQT3D-BKVBX-72GGM-88F9C ', 'Si'),
(13, '001', 'Administración', 'Control y Sarlaft', 'Amalia Valdez Sanchez', 'GG-OC-PT-01', 'Oficina', 'Office', '365', ' ', 'Portatil', 'HP', '\" HP Laptop 15-bs0xx\"', 'CND9093G8K', '2017-07-04', 'DualCore Intel Core i7', '7500U-', 2, 3500, 12, 'DDR4', 'Intel Kaby Lake HDMI @ Intel Sunrise Point-LP PCH - High Definition Audio Controller', 'Intel(R) HD Graphics 620 (1 GB)', 'WESTERNDIGITAL', '1TB', 'SATA III', 'Realtek PCIe GbE Family Controller', '', 'B0-0C-D1-EF-FE-35', 'Realtek RTL8723BE 802.11 bgn Wi-Fi Adapter', 'DC-F5-05-2E-61-01', 'HP', 'LCD', 'NINGUNO', 'AUO70EC', '15,5', 0, 0, 2, 'VI04', '2200 mAh', 'HP', '19.5V - 3.33A', 'Microsoft Windows 10 Pro', 'Microsoft Windows 10 Pro', 64, 'VK7JG-NPHTM-C97JM-9MPGT-3V66T', 'N.A'),
(14, '001', 'Administración', 'Control de riesgos', 'Jeidy Lorena Guarin Lizcano', 'GG-RI-PT-01', 'Oficina', 'Office', '365', ' ', 'Portatil', 'HP', 'HP ProBook 450 G5', '5CD9073R08', '2109-03-01', 'DualCore Intel Core i7', '8550U-', 4, 2000, 12, 'DDR4', 'Intel Kaby Lake HDMI @ Intel Sunrise Point-LP PCH - High Definition Audio Controller', 'Intel(R) HD Graphics 620 (1 GB)', 'WESTERNDIGITAL', '480gb', 'SSD', 'Realtek PCIe GBE Family Controller', '', 'B0-0C-D1-5F-C4-EC', 'Intel(R) Dual Band Wireless-AC 8265', '50-76-AF-27-F5-C4', 'HP', 'LED', 'NINGUNO', 'BOE06A5', '15,5', 0, 0, 1, '440 445 450 455 470 Fp06 Fp09', '4400 mAh', 'HP', '18,5 V- 3,5A', '4.5mm * 3.0mm', 'Microsoft Windows 10 Pro', 64, 'RJTN9-XFT8B-6QHDP-Y3HG7-RGDGP', 'N.A'),
(15, '001', 'Administración', 'Credito', 'Cesar Augusto Ariza Caycedo', 'DF-CR-PC-01', 'Oficina', 'Office', '2010', 'equipo que estaba usando zulein en casa', 'Desktop', 'HP', 'HP ProDesk 400 G1 SFF', 'MXL42118JW', '2014-03-01', 'QuadCore Intel Core i5', '4570-', 4, 3500, 4, 'DDR3', 'Realtek ALC221 @ Intel Lynx Point PCH - High Definition Audio Controller [C-1]', 'Intel(R) HD Graphics 4600 (1831012 kB)', 'SEAGATE', '500GB', 'SATA III', 'Realtek PCIe GBE Family Controller', '', 'A0-D3-C1-23-74-86', 'N.A', 'N.A', 'HP', 'LCD', 'CNC114Q0R3', 'HP S1933', '18,7', 2, 1, 1, 'N.A', 'N.A', 'N.A', 'N.A', 'N.A', 'Microsoft Windows 7 Professional', 64, 'FJGCP-4DFJD-GJY49-VJBQ7-HYRR2', 'No'),
(16, '001', 'Administración', 'Credito', 'Johanna Alejandra Campos Parra ', 'DF-CR-PC-02', 'Oficina', 'Office', '2013', 'El office no  esta activado', 'Desktop', 'Lenovo', 'ThinkCentre E73', 'PC08EJ9B', '2015-04-08', 'QuadCore Intel Core i5', '4460S-', 4, 2900, 4, 'DDR3', 'Realtek ALC662 @ Intel Lynx Point PCH - High Definition Audio Controller [C-1]', 'Intel(R) HD Graphics 4600 (1823180 kB)', 'SEAGATE', '500GB', 'SATA III', 'Realtek PCIe GBE Family Controller', '', '00-01-6C-CC-09-92', 'N.A', 'N.A', 'LENOVO', 'LCD', 'V901Z17F', 'E1922 Wide', '18,5', 2, 1, 2, 'N.A', 'N.A', 'N.A', 'N.A', 'N.A', 'MIcrosoft Windows 10 Pro', 64, 'NF6HC-QH89W-F8WYV-WWXV4-WFG6P', 'Si'),
(17, '001', 'Administración', 'Credito', 'Angela Maria Rojas Rincon', 'DF-CR-PC-03', 'Oficina', 'Office', '2013', 'El office no  esta activado', 'Desktop', 'Lenovo', 'ThinkCentre E73', 'PC08EJ8H', '2015-04-08', 'QuadCore Intel Core i5', '4460S-', 4, 2900, 4, 'DDR3', 'Realtek ALC662 @ Intel Lynx Point PCH - High Definition Audio Controller [C-1]', 'Intel(R) HD Graphics 4600 (1823180 kB)', 'SEAGATE', '1TB', 'SATA III', 'Realtek PCIe GBE Family Controller', '', '00-01-6C-CC-0B-E4', 'N.A', 'N.A', 'SAMSUNG', 'LCD', 'H4LFC00867', 'S22D300', '22', 1, 2, 2, 'N.A', 'N.A', 'N.A', 'N.A', 'N.A', 'MIcrosoft Windows 10 Pro', 64, '237XB-GDJ7B-MV8MH-98QJM-24367', 'Si'),
(18, '001', 'Administración', 'Credito', 'Oscar Hernando Mosquera Tinoco', 'DF-CR-PC-04', 'Oficina', 'Office', '2013', 'El office no  esta activado', 'Desktop', 'HP', 'HP Pro 3000 Small Form Factor PC', 'MXL0240BWJ', '2008-09-27', 'DualCore Intel Pentium E5200', 'E5200-', 2, 2500, 4, 'DDR3', 'Realtek ALC662 @ Intel 82801JB ICH10 - High Definition Audio Controller', 'Intel(R) G45/G43 Express Chipset (1899100 kB)', 'SEAGATE', '500GB', 'SATA  II', 'Realtek RTL8168D/8111D Family PCI-E Gigabit Ethernet NIC (NDIS 6.20)', '', '40-61-86-F5-82-F9', 'N.A', 'N.A', 'HP', 'LCD', 'CNC212RJLW', 'HP LV2011', '20', 2, 1, 1, 'N.A', 'N.A', 'N.A', 'N.A', 'N.A', 'MIcrosoft Windows 10 Pro', 64, '7WXNY-XG42D-MCQ7D-M99VC-BTDGT ', 'Si'),
(19, '001', 'Administración', 'Credito', 'William Alberto Liberato Rodriguez', 'DF-CR-PC-05', 'Casa', 'Office', '2010', ' ', 'All in one', 'Lenovo', 'V310z AlO', 'S1H05WKU', '2017-11-15', 'QuadCore Intel Core i5', '7400-', 4, 3400, 4, 'DDR4', 'Intel Kaby Lake HDMI @ Intel Sunrise Point PCH - High Definition Audio Controller', 'Intel(R) HD Graphics 630 (1 GB)', 'WESTERNDIGITAL', '1TB', 'SATA III', 'Realtek PCIe GBE Family Controller', '', '98-EE-CB-83-6E-4E', 'Intel(R) Dual Band Wireless-AC 3165', '94-B8-6D-8C-8E-2B', 'LENOVO', 'LCD', '25011', 'Lenovo AIO', '19,4', 0, 0, 1, 'N.A', 'N.A', 'LENOVO', '20 V -6A', 'TIPO USB', 'Microsoft Windows 10 Pro', 64, 'VK7JG-NPHTM-C97JM-9MPGT-3V66T', 'N.A'),
(20, '001', 'Administración', 'Credito', 'Ana Maria Moreno', 'DF-CA-PT-08', 'Casa', 'Office', '2010', 'EQUIPO DEBE SER RENOMBRADO', 'Portatil', 'Lenovo', 'Lenovo ThinkPad T420', 'R8TPW5H', '2012-06-12', 'Mobile DualCore Intel Core i5', '2430M-', 2, 2400, 4, 'DDR3', 'Conexant Cx20590 @ Intel Cougar Point PCH - High Definition Audio Controller [B-2]', 'Intel(R) HD Graphics Family (1840752 kB)', 'HITACHI', '500GB', 'SATA III', 'Intel(R) 82579LM Gigabit Network Connection', '', '00-21-CC-B8-28-D6', 'Wireless LAN PCI Express Half Mini Card Adapter', '9C-B7-0D-1F-4F-60', 'LENOVO', 'LCD', 'NINGUNO', 'BOE05C4', '13,9', 0, 0, 1, '70+', '5000mAh', 'LENOVO', '20V-3.9A', '7.9*5.5mm', 'Microsoft Windows 7 Professional', 64, '237XB-GDJ7B-MV8MH-98QJM-24367', 'No');

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
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
