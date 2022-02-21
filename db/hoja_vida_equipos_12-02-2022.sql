-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-02-2022 a las 15:09:08
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

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
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id` int(11) NOT NULL,
  `codigo_administrativo` varchar(11) DEFAULT NULL,
  `sucursal` varchar(50) DEFAULT 'select',
  `area` varchar(50) DEFAULT 'select',
  `funcionario_responsable` varchar(50) DEFAULT NULL,
  `nombre_equipo` varchar(20) DEFAULT NULL,
  `lugar_de_trabajo` varchar(10) DEFAULT NULL,
  `paquete_ofimatico` varchar(10) DEFAULT NULL,
  `version_office` varchar(5) DEFAULT NULL,
  `novedades` varchar(100) DEFAULT NULL,
  `tipo_equipo` varchar(15) DEFAULT 'select',
  `marca` varchar(100) DEFAULT 'select',
  `modelo` varchar(100) DEFAULT NULL,
  `serial` varchar(100) DEFAULT NULL,
  `fecha_fabricacion` date DEFAULT NULL,
  `procesador` varchar(100) DEFAULT 'select',
  `generacion_procesador` varchar(100) DEFAULT NULL,
  `nucleos` int(11) DEFAULT NULL,
  `velocidad_mz` int(11) DEFAULT NULL,
  `ram_gb` int(11) DEFAULT NULL,
  `tipo_memoria` varchar(100) DEFAULT 'select',
  `adaptador_multimedia` varchar(100) DEFAULT NULL,
  `adaptador_video` varchar(100) DEFAULT NULL,
  `marca_disco_duro` varchar(100) DEFAULT 'select',
  `capacidad_disco` varchar(100) DEFAULT NULL,
  `tipo_disco` varchar(100) DEFAULT 'select',
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
  `cargador` varchar(100) DEFAULT NULL,
  `voltaje` varchar(100) DEFAULT NULL,
  `salida_plug` varchar(100) DEFAULT NULL,
  `os` varchar(100) DEFAULT NULL,
  `bit` int(11) DEFAULT NULL,
  `licencia` varchar(100) DEFAULT NULL,
  `repotencializado` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla de la hoja de vida de los equipos';

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `codigo_administrativo`, `sucursal`, `area`, `funcionario_responsable`, `nombre_equipo`, `lugar_de_trabajo`, `paquete_ofimatico`, `version_office`, `novedades`, `tipo_equipo`, `marca`, `modelo`, `serial`, `fecha_fabricacion`, `procesador`, `generacion_procesador`, `nucleos`, `velocidad_mz`, `ram_gb`, `tipo_memoria`, `adaptador_multimedia`, `adaptador_video`, `marca_disco_duro`, `capacidad_disco`, `tipo_disco`, `red_ethernet`, `ip`, `mac_ethernet`, `red_wifi`, `mac`, `marca_monitor`, `tipo_monitor`, `serial_monitor`, `modelo_monitor`, `pulgadas`, `cables_poder`, `vga`, `pass_core`, `bateria`, `carga_electrica`, `cargador`, `voltaje`, `salida_plug`, `os`, `bit`, `licencia`, `repotencializado`) VALUES
(1, '001', 'Administración', 'Administrador de canales y productos', 'Camilo Andres Perez', 'DA-GD-PC-01', 'Oficina', 'Office', '2013', ' ', 'Desktop', 'HP', 'HP Compaq 6200 Pro SFF', 'MXL21405X1', '2011-10-11', 'DualCore Intel Core i3', '2120-', 2, 3300, 8, 'DDR3', 'Intel Coug', 'Intel(R) HD Graphics 2000 (2108 MB)', 'TOSHIBA', '1TB', 'SATA III', 'Intel(R) 82579LM Gigabit Network Connection', '', 'E8-39-35-4E-8B-36', 'N.A', 'N.A', 'HP', 'LCD', 'CNC212RJLW', 'HP LV2011', '20', 2, 1, 1, 'N.A', 'N.A', 'N.A', 'N.A', 'N.A', 'Microsoft Windows 10 Pro', 64, 'BBBBB-BBBBB-BBBBB-BBBBB-BBBBB', 'N.A'),
(2, '001', 'Administración', 'select', 'Angie Valentina Rodriguez Moreno', 'GG-AI-PT-01', 'Oficina', 'Office', '365', ' ', 'Portatil', 'HP', 'HP Laptop 15-bs0xx', 'CND7182T4S', '2017-07-04', 'DualCore Intel Core i7', '7500U-', 2, 3500, 12, 'DDR4', 'Intel Kaby', 'Intel(R) HD Graphics 620 (1 GB)', 'SEAGATE', '1TB', 'SATA III', 'Realtek PCIe GbE Family Controller', '', '3C-52-82-E8-CB-CF', 'Realtek RTL8723BE 802.11 bgn Wi-Fi Adapter', '3C-95-09-B8-1C-0F', 'HP', 'LCD', 'N.A', 'AUO70EC', '15,5', 0, 0, 2, 'VI04', '2200 mAh', 'HP', '19.5V - 3.33A', '4.5mm * 3.0mm', 'Microsoft Windows 10 Pro', 64, '7VDN8-JJ7G6-BHJTY-QJY32-2DKTP', 'N.A'),
(3, '001', 'Administración', 'select', 'Arnold Stiven Ramirez Castro', 'GG-AB-PT-01', 'Oficina', 'Office', '365', ' ', 'Portatil', 'HP', 'HP ProBook 450 G5', '5CD9106DMK', '2019-03-01', 'DualCore Intel Core i7', '8550U-', 4, 3400, 23, 'DDR4', 'Intel Kaby', 'Intel(R) HD Graphics 620 (1 GB)', 'TOSHIBA', '1TB', 'SATA III', 'Realtek PCIe GBE Family Controller', '', 'B0-0C-D1-6A-6C-D8', 'Intel(R) Dual Band Wireless-AC 8265', 'D8-F2-CA-A1-20-F7', 'HP', 'LED', 'NINGUNO', 'BOE06A5', '15,5', 0, 0, 1, '440 445 450 455 470 Fp06 Fp09', '4400 mAh', 'HP', '18,5 V- 3,5A', '4.5mm * 3.0mm', 'Microsoft Windows 10 Pro', 64, 'PHNVR-463CJ-TR7XM-XH3DX-WTYP2', 'N.A'),
(4, '001', 'Administración', 'select', 'Erwin Skit Prada', 'DF-CA-PC-06', 'Oficina', 'Office', '365', 'Se cambio el disco por uno de 500GB SSD', 'Desktop', 'Lenovo', 'HP ProDesk 400 G1 SFF', 'MXL4260SBD', '2014-11-10', 'DualCore Intel Core i3', '4130-', 2, 3400, 4, 'DDR3', 'Realtek AL', 'Intel(R) HD Graphics 4400 (1GB)', 'SEAGATE', '500', 'SATA  II', 'Realtek PCIe GbE Family Controller', '', '40-A8-F0-44-70-16', 'N.A', 'N.A', 'HP', 'LCD', '6CM3233H2G', 'HP LV1911', '18,5', 2, 1, 1, 'N.A', 'N.A', 'N.A', 'N.A', 'N.A', 'MIcrosoft Windows 10 Pro', 64, 'RCQHC-N2Y4P-QYG64-HRPPJ-F3KTT ', 'Si'),
(5, '001', 'Administración', 'select', 'Anyi Carolina Valencia Vasquez', 'DF-CA-PC-02', 'Oficina', 'Office', '2013', ' ', 'All in one', 'Lenovo', 'IdeaCentre A340-24IWL', 'MP1FUZ0R', '2019-05-10', 'QuadCore Intel Core i5', '8250U-', 4, 3900, 8, 'DDR4', 'Realtek AL', 'Intel(R) UHD Graphics 620 (1 GB)', 'TOSHIBA', '1TB', 'SATA III', '\" Realtek RTL8168/8111 PCI-E Gigabit Ethernet Adapter\"', '', '9C-5A-44-89-71-00', 'Realtek 8821CE Wireless LAN 802.11ac PCI-E NIC', '28-39-26-35-B1-77', 'LENOVO', 'LED', '28261-', 'LEN-A340W-B-A', '23,8', 0, 0, 1, 'N.A', 'N.A', 'LENOVO', '20 V -6A', 'TIPO USB', 'Microsoft Windows 10 Pro', 64, 'BBBBB-BBBBB-BBBBB-BBBBB-BBBBB', 'N.A'),
(6, '001', 'Administración', 'select', 'Gladys Cecilia Cerquera Castellanos ', 'DF-CA-PC-03', 'Oficina', 'No tiene', '0', ' ', 'All in one', 'HP', 'HP All-in-One - 20-c405la', '8CC90814F5', '2019-04-24', 'QuadCore Intel Core i5', '7200U-', 2, 2715, 4, 'DDR3', '\"	Intel Ka', 'Intel(R) HD Graphics 620 (1 GB)', 'TOSHIBA', '1TB', 'SATA III', 'Realtek PCIe GbE Family Controller', '', 'B0-0C-D1-63-46-CA', 'Realtek RTL8723BE 802.11 bgn Wi-Fi Adapter', 'F8-A2-D6-6F-2C-5F', 'HP', 'LCD', 'M195FGE-L23', 'HPN4029', '19,5', 0, 0, 1, 'N.A', 'N.A', 'HP', '19,5V -2.31A', '4.5x3mm', 'MIcrosoft Windows 10 Home', 64, 'HNKC7-2MWGW-X74QH-VM26K-TF4BP', 'No'),
(7, '001', 'Administración', 'select', 'Johanna Patricia Forero Florez', 'DF-CA-PC-03', 'Oficina', 'Office', '2013', 'El office no  esta activado', 'Desktop', 'HP', 'HP Compaq 8200 Elite', 'MXL20216X2', '2010-09-06', 'DualCore Intel Core i3', '2120-', 2, 3300, 2, 'DDR3', 'Intel Ibex', 'Intel(R) HD Graphics (749204 kB)', 'SEAGATE', '500GB', 'SATA III', 'Intel(R) 82578DM Gigabit Network Connection', '', '2C-41-38-AB-FF-D0', 'N.A', 'N.A', 'HP', 'LCD', '3CQ44408GL', 'HP V193', '18,5', 2, 1, 1, 'N.A', 'N.A', 'N.A', 'N.A', 'N.A', 'MIcrosoft Windows 10 Pro', 64, 'P26NH-VRM2W-883F7-DJ6HM-FGDGT ', 'SI'),
(8, '001', 'Administración', 'select', 'Lina Maria Quintero Avila ', 'DF-PC-PC-08', 'Oficina', 'Office', '2013', 'El office no  esta activado', 'Desktop', 'Lenovo', 'ThinkCentre E73', 'PC08EJAS', '2015-04-08', 'QuadCore Intel Core i5', '4460S-', 4, 2900, 4, 'DDR3', 'Realtek AL', 'Intel(R) HD Graphics 4600 (1823180 kB)', 'SEAGATE', '500GB', 'SATA III', 'Realtek PCIe GBE Family Controller', '', '00-01-6C-CC-0B-E4', 'N.A', 'N.A', 'LENOVO', 'LCD', 'V901Z16G', 'E1922 Wide', '18,5', 2, 1, 1, 'N.A', 'N.A', 'N.A', 'N.A', 'N.A', 'MIcrosoft Windows 10 Pro', 64, 'NF6HC-QH89W-F8WYV-WWXV4-WFG6P ', 'Si'),
(9, '001', 'Administración', 'select', 'Herlichs Adolfo Vergara Sanchez', 'DF-CA-PC-06', 'Oficina', 'Office', '2010', ' ', 'All in one', 'Lenovo', 'V310z AlO', 'S1H05WG8', '2017-11-15', 'QuadCore Intel Core i5', '7400-', 4, 3400, 4, 'DDR4', 'Intel Kaby', 'Intel(R) HD Graphics 630 (1 GB)', 'WESTERNDIGITAL', '1TB', 'SATA III', 'Realtek PCIe GBE Family Controller', '', '98-EE-CB-83-6F-73', 'Intel(R) Dual Band Wireless-AC 3165', '94-B8-6D-81-70-1D', 'LENOVO', 'LCD', '25011', 'Lenovo AIO', '19,4', 0, 0, 1, 'N.A', 'N.A', 'LENOVO', '20 V -6A', 'TIPO USB', 'Microsoft Windows 10 Pro', 64, 'BRT9D-N46BM-RF86C-T32BT-PDKTP', 'N.A'),
(10, '001', 'Administración', 'select', 'SIN USUARIO', 'DF-CA-PC-07', 'Oficina', 'N.A', '0', 'Era el equipo de la pasante', 'Desktop', 'HP', 'Compaq dc5800 Small Form Factor', 'MXJ91602D0', '2008-08-27', 'DualCore Intel Pentium', 'E5200-', 2, 2500, 4, 'DDR2', 'Analog Dev', 'Intel(R) Q33 Express Chipset Family (256 MB)', 'SEAGATE', '500GB', 'SATA III', 'Gigabit Intel(R) 82566DM-2', '', '00-24-81-0A-8E-F9', 'N.A', 'N.A', 'HP', 'LCD', 'CNC212RJLW', 'HP LV2011', '20', 2, 1, 1, 'N.A', 'N.A', 'N.A', 'N.A', 'N.A', 'Microsoft Windows 7 Professional', 64, '74T2M-DKDBC-788W3-H689G-6P6GT', 'N.A'),
(11, '001', 'Administración', 'select', 'Viviana Paola Tabares', 'DF-CA-PC-08', 'Oficina', 'Office', '2010', ' ', 'Desktop', 'HP', 'Hp compac Pro 4300', 'MXL3322PX9', '2013-03-08', 'QuadCore Intel Core i5', '3470S-', 4, 3600, 4, 'DDR3', ' Realtek A', 'Intel(R) HD Graphics (2112 MB)', 'SEAGATE', '500GB', 'SATA  II', 'Broadcom NetLink (TM) Gigabit Ethernet', '', '78-E3-B5-C2-0F-7A', 'N.A', 'N.A', 'HP', 'LCD', '6CM3233HG0', 'HP LV1911', '18,5', 2, 1, 2, 'N.A', 'N.A', 'N.A', 'N.A', 'N.A', 'Microsoft Windows 10 Pro', 64, 'VK7JG-NPHTM-C97JM-9MPGT-3V66T', 'N.A'),
(12, '001', 'Administración', 'select', 'Maryi sorany moreno rodriguez', 'GG-PO-PC-02', 'Oficina', 'WPS', '0', 'EQUIPO SE FORMATEO Y SE RENOMBRO', 'All in one', 'Lenovo', 'V310z AlO', 'S1H05WMZ', '2017-11-15', 'QuadCore Intel Core i5', '7400-', 4, 3400, 4, 'DDR4', 'Intel Kaby', 'Intel(R) HD Graphics 630 (1 GB)', 'SEAGATE', '500GB', 'SATA III', 'Realtek PCIe GBE Family Controller', '', '98-EE-CB-83-6D-FC', 'Intel(R) Dual Band Wireless-AC 3165', '94-B8-6D-8C-A6-54', 'LENOVO', 'LCD', '25013', 'Lenovo AIO', '19,4', 0, 0, 1, 'N.A', 'N.A', 'LENOVO', '20 V -6A', 'TIPO USB', 'Microsoft Windows 10 Pro', 64, 'XNX3G-JQT3D-BKVBX-72GGM-88F9C ', 'Si'),
(13, '001', 'Administración', 'select', 'Amalia Valdez Sanchez', 'GG-OC-PT-01', 'Oficina', 'Office', '365', ' ', 'Portatil', 'HP', '\" HP Laptop 15-bs0xx\"', 'CND9093G8K', '2017-07-04', 'DualCore Intel Core i7', '7500U-', 2, 3500, 12, 'DDR4', 'Intel Kaby', 'Intel(R) HD Graphics 620 (1 GB)', 'WESTERNDIGITAL', '1TB', 'SATA III', 'Realtek PCIe GbE Family Controller', '', 'B0-0C-D1-EF-FE-35', 'Realtek RTL8723BE 802.11 bgn Wi-Fi Adapter', 'DC-F5-05-2E-61-01', 'HP', 'LCD', 'NINGUNO', 'AUO70EC', '15,5', 0, 0, 2, 'VI04', '2200 mAh', 'HP', '19.5V - 3.33A', 'Microsoft Windows 10 Pro', 'Microsoft Windows 10 Pro', 64, 'VK7JG-NPHTM-C97JM-9MPGT-3V66T', 'N.A'),
(14, '001', 'Administración', 'select', 'Jeidy Lorena Guarin Lizcano', 'GG-RI-PT-01', 'Oficina', 'Office', '365', ' ', 'Portatil', 'HP', 'HP ProBook 450 G5', '5CD9073R08', '2109-03-01', 'DualCore Intel Core i7', '8550U-', 4, 2000, 12, 'DDR4', 'Intel Kaby', 'Intel(R) HD Graphics 620 (1 GB)', 'WESTERNDIGITAL', '480gb', 'SSD', 'Realtek PCIe GBE Family Controller', '', 'B0-0C-D1-5F-C4-EC', 'Intel(R) Dual Band Wireless-AC 8265', '50-76-AF-27-F5-C4', 'HP', 'LED', 'NINGUNO', 'BOE06A5', '15,5', 0, 0, 1, '440 445 450 455 470 Fp06 Fp09', '4400 mAh', 'HP', '18,5 V- 3,5A', '4.5mm * 3.0mm', 'Microsoft Windows 10 Pro', 64, 'RJTN9-XFT8B-6QHDP-Y3HG7-RGDGP', 'N.A'),
(15, '001', 'Administración', 'select', 'Cesar Augusto Ariza Caycedo', 'DF-CR-PC-01', 'Oficina', 'Office', '2010', 'equipo que estaba usando zulein en casa', 'Desktop', 'HP', 'HP ProDesk 400 G1 SFF', 'MXL42118JW', '2014-03-01', 'QuadCore Intel Core i5', '4570-', 4, 3500, 4, 'DDR3', 'Realtek AL', 'Intel(R) HD Graphics 4600 (1831012 kB)', 'SEAGATE', '500GB', 'SATA III', 'Realtek PCIe GBE Family Controller', '', 'A0-D3-C1-23-74-86', 'N.A', 'N.A', 'HP', 'LCD', 'CNC114Q0R3', 'HP S1933', '18,7', 2, 1, 1, 'N.A', 'N.A', 'N.A', 'N.A', 'N.A', 'Microsoft Windows 7 Professional', 64, 'FJGCP-4DFJD-GJY49-VJBQ7-HYRR2', 'No'),
(16, '001', 'Administración', 'select', 'Johanna Alejandra Campos Parra ', 'DF-CR-PC-02', 'Oficina', 'Office', '2013', 'El office no  esta activado', 'Desktop', 'Lenovo', 'ThinkCentre E73', 'PC08EJ9B', '2015-04-08', 'QuadCore Intel Core i5', '4460S-', 4, 2900, 4, 'DDR3', 'Realtek AL', 'Intel(R) HD Graphics 4600 (1823180 kB)', 'SEAGATE', '500GB', 'SATA III', 'Realtek PCIe GBE Family Controller', '', '00-01-6C-CC-09-92', 'N.A', 'N.A', 'LENOVO', 'LCD', 'V901Z17F', 'E1922 Wide', '18,5', 2, 1, 2, 'N.A', 'N.A', 'N.A', 'N.A', 'N.A', 'MIcrosoft Windows 10 Pro', 64, 'NF6HC-QH89W-F8WYV-WWXV4-WFG6P', 'Si'),
(17, '001', 'Administración', 'select', 'Angela Maria Rojas Rincon', 'DF-CR-PC-03', 'Oficina', 'Office', '2013', 'El office no  esta activado', 'Desktop', 'Lenovo', 'ThinkCentre E73', 'PC08EJ8H', '2015-04-08', 'QuadCore Intel Core i5', '4460S-', 4, 2900, 4, 'DDR3', 'Realtek AL', 'Intel(R) HD Graphics 4600 (1823180 kB)', 'SEAGATE', '1TB', 'SATA III', 'Realtek PCIe GBE Family Controller', '', '00-01-6C-CC-0B-E4', 'N.A', 'N.A', 'SAMSUNG', 'LCD', 'H4LFC00867', 'S22D300', '22', 1, 2, 2, 'N.A', 'N.A', 'N.A', 'N.A', 'N.A', 'MIcrosoft Windows 10 Pro', 64, '237XB-GDJ7B-MV8MH-98QJM-24367', 'Si'),
(18, '001', 'Administración', 'select', 'Oscar Hernando Mosquera Tinoco', 'DF-CR-PC-04', 'Oficina', 'Office', '2013', 'El office no  esta activado', 'Desktop', 'HP', 'HP Pro 3000 Small Form Factor PC', 'MXL0240BWJ', '2008-09-27', 'DualCore Intel Pentium E5200', 'E5200-', 2, 2500, 4, 'DDR3', 'Realtek AL', 'Intel(R) G45/G43 Express Chipset (1899100 kB)', 'SEAGATE', '500GB', 'SATA  II', 'Realtek RTL8168D/8111D Family PCI-E Gigabit Ethernet NIC (NDIS 6.20)', '', '40-61-86-F5-82-F9', 'N.A', 'N.A', 'HP', 'LCD', 'CNC212RJLW', 'HP LV2011', '20', 2, 1, 1, 'N.A', 'N.A', 'N.A', 'N.A', 'N.A', 'MIcrosoft Windows 10 Pro', 64, '7WXNY-XG42D-MCQ7D-M99VC-BTDGT ', 'Si'),
(19, '001', 'Administración', 'select', 'William Alberto Liberato Rodriguez', 'DF-CR-PC-05', 'Casa', 'Office', '2010', ' ', 'All in one', 'Lenovo', 'V310z AlO', 'S1H05WKU', '2017-11-15', 'QuadCore Intel Core i5', '7400-', 4, 3400, 4, 'DDR4', 'Intel Kaby', 'Intel(R) HD Graphics 630 (1 GB)', 'WESTERNDIGITAL', '1TB', 'SATA III', 'Realtek PCIe GBE Family Controller', '', '98-EE-CB-83-6E-4E', 'Intel(R) Dual Band Wireless-AC 3165', '94-B8-6D-8C-8E-2B', 'LENOVO', 'LCD', '25011', 'Lenovo AIO', '19,4', 0, 0, 1, 'N.A', 'N.A', 'LENOVO', '20 V -6A', 'TIPO USB', 'Microsoft Windows 10 Pro', 64, 'VK7JG-NPHTM-C97JM-9MPGT-3V66T', 'N.A'),
(20, '001', 'Administración', 'select', 'Ana Maria Moreno', 'DF-CA-PT-08', 'Casa', 'Office', '2010', 'EQUIPO DEBE SER RENOMBRADO', 'Portatil', 'Lenovo', 'Lenovo ThinkPad T420', 'R8TPW5H', '2012-06-12', 'Mobile DualCore Intel Core i5', '2430M-', 2, 2400, 4, 'DDR3', 'Conexant C', 'Intel(R) HD Graphics Family (1840752 kB)', 'HITACHI', '500GB', 'SATA III', 'Intel(R) 82579LM Gigabit Network Connection', '', '00-21-CC-B8-28-D6', 'Wireless LAN PCI Express Half Mini Card Adapter', '9C-B7-0D-1F-4F-60', 'LENOVO', 'LCD', 'NINGUNO', 'BOE05C4', '13,9', 0, 0, 1, '70+', '5000mAh', 'LENOVO', '20V-3.9A', '7.9*5.5mm', 'Microsoft Windows 7 Professional', 64, '237XB-GDJ7B-MV8MH-98QJM-24367', 'No');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
