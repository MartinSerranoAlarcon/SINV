-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2017 a las 00:52:19
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base_hilda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `ID_CLIENTE` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `ID_ESTADO` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NOMBRES_CLIENTE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DIRECCION_CLIENTE` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TELEFONO_CLIENTE` varchar(7) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CELULAR_CLIENTE` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentasxcobrar`
--

CREATE TABLE `cuentasxcobrar` (
  `ID_CXC` int(11) NOT NULL,
  `ID_ESTADO` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_ORDEN` int(11) DEFAULT NULL,
  `VALOR_CXC` decimal(6,2) NOT NULL,
  `COBRAR_CXC` decimal(6,2) NOT NULL,
  `CUOTAS_CXC` int(11) NOT NULL,
  `FECHA_CXC` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentasxpagar`
--

CREATE TABLE `cuentasxpagar` (
  `ID_CXP` int(11) NOT NULL,
  `ID_ESTADO` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_PROVEEDOR` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FACTURA_CXP` int(11) NOT NULL,
  `VALOR_CXP` decimal(6,2) NOT NULL,
  `PAGAR_CXP` decimal(6,2) NOT NULL,
  `CUOTAS_CXP` int(11) NOT NULL,
  `FECHA_CXP` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cuentasxpagar`
--

INSERT INTO `cuentasxpagar` (`ID_CXP`, `ID_ESTADO`, `ID_PROVEEDOR`, `FACTURA_CXP`, `VALOR_CXP`, `PAGAR_CXP`, `CUOTAS_CXP`, `FECHA_CXP`) VALUES
(1, 'A', '1', 1, '469.66', '469.66', 3, '2017-06-28'),
(2, 'A', '2', 2, '234.00', '234.00', 4, '2017-06-30'),
(3, 'A', '2', 3, '2.00', '2.00', 2, '2017-06-01'),
(4, 'A', '2', 4, '2.00', '2.00', 2, '2017-06-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_orden`
--

CREATE TABLE `detalle_orden` (
  `ID_PRODUCTO` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_ORDEN` int(11) DEFAULT NULL,
  `LINEA_DETALLE` int(11) NOT NULL,
  `CANTIDAD_DETALLE` int(11) NOT NULL,
  `PRECIO_DETALLE` decimal(6,2) NOT NULL,
  `TOTALPRECIO_DETALLE` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `ID_ESTADO` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `NOMBRE_ESTADO` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`ID_ESTADO`, `NOMBRE_ESTADO`) VALUES
('A', 'Activo'),
('D', 'Desactivado'),
('I', 'Ingresado'),
('L', 'Libre'),
('O', 'Ocupado'),
('P', 'Proceso'),
('T', 'Terminado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `ID_ORDEN` int(11) NOT NULL,
  `ID_USUARIO` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_CLIENTE` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_TRANSPORTE` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_ESTADO` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FECHA_ORDEN` date NOT NULL,
  `SUBTOTAL1_ORDEN` decimal(6,2) NOT NULL,
  `PRECIOTRANSPORTE_ORDEN` decimal(6,2) NOT NULL,
  `SUBTOTAL2_ORDEN` decimal(6,2) NOT NULL,
  `DESCUENTO_ORDEN` decimal(6,2) NOT NULL,
  `SUBTOTAL3_ORDEN` decimal(6,2) NOT NULL,
  `IVA_ORDEN` decimal(6,2) NOT NULL,
  `TOTAL_ORDEN` decimal(6,2) NOT NULL,
  `FSALIDA_ORDEN` datetime NOT NULL,
  `FENTRADA_ORDEN` datetime NOT NULL,
  `OBSERVACION_ORDEN` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ID_PRODUCTO` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ID_TIPOPRODUCTO` int(11) DEFAULT NULL,
  `ID_ESTADO` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_PROVEEDOR` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NOMBRE_PRODUCTO` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `CANTIDAD_PRODUCTO` int(11) NOT NULL,
  `PRECIO_PRODUCTO` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `ID_PROVEEDOR` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `ID_ESTADO` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NOMBRES_PROVEEDOR` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DIRECCION_PROVEEDOR` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TELEFONO_PROVEEDOR` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`ID_PROVEEDOR`, `ID_ESTADO`, `NOMBRES_PROVEEDOR`, `DIRECCION_PROVEEDOR`, `TELEFONO_PROVEEDOR`) VALUES
('1', 'A', 'Prueba1', 'Prueba1', '22222'),
('2', 'A', 'Prueba2', 'Prueba2', '111111'),
('3', 'A', 'Prueba3', 'Prueba3', '665356'),
('4', 'A', 'Prueba4', 'Prueba4', '554432'),
('5', 'A', 'Prueba5', 'Prueba5', '222313');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

CREATE TABLE `tipo_producto` (
  `ID_TIPOPRODUCTO` int(11) NOT NULL,
  `NOMBRE_TIPOPRODUCTO` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `ID_TIPOUSUARIO` int(11) NOT NULL,
  `NOMBRE_TIPOUSUARIO` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`ID_TIPOUSUARIO`, `NOMBRE_TIPOUSUARIO`) VALUES
(1, 'Administrador'),
(2, 'Bodega'),
(3, 'Manteleria'),
(4, 'Oficina'),
(5, 'Secretaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transporte`
--

CREATE TABLE `transporte` (
  `ID_TRANSPORTE` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `ID_ESTADO` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PLACA_TRANSPORTE` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `MARCA_TRANSPORTE` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MODELO_TRANSPORTE` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TIPO_TRANSPORTE` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_USUARIO` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ID_ESTADO` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_TIPOUSUARIO` int(11) DEFAULT NULL,
  `NOMBRES_USUARIO` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `USER_USUARIO` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `PASS_USUARIO` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_USUARIO`, `ID_ESTADO`, `ID_TIPOUSUARIO`, `NOMBRES_USUARIO`, `USER_USUARIO`, `PASS_USUARIO`) VALUES
('1', 'A', 1, 'José Araujo', 'a', 'a'),
('2', 'A', 2, 'Bodega', 'bd', 'bd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID_CLIENTE`),
  ADD KEY `FK_RELATIONSHIP_17` (`ID_ESTADO`);

--
-- Indices de la tabla `cuentasxcobrar`
--
ALTER TABLE `cuentasxcobrar`
  ADD PRIMARY KEY (`ID_CXC`),
  ADD KEY `FK_RELATIONSHIP_13` (`ID_ESTADO`),
  ADD KEY `FK_RELATIONSHIP_9` (`ID_ORDEN`);

--
-- Indices de la tabla `cuentasxpagar`
--
ALTER TABLE `cuentasxpagar`
  ADD PRIMARY KEY (`ID_CXP`),
  ADD KEY `FK_RELATIONSHIP_12` (`ID_ESTADO`),
  ADD KEY `FK_RELATIONSHIP_8` (`ID_PROVEEDOR`);

--
-- Indices de la tabla `detalle_orden`
--
ALTER TABLE `detalle_orden`
  ADD KEY `FK_RELATIONSHIP_2` (`ID_ORDEN`),
  ADD KEY `FK_RELATIONSHIP_3` (`ID_PRODUCTO`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`ID_ESTADO`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`ID_ORDEN`),
  ADD KEY `FK_RELATIONSHIP_1` (`ID_CLIENTE`),
  ADD KEY `FK_RELATIONSHIP_16` (`ID_ESTADO`),
  ADD KEY `FK_RELATIONSHIP_4` (`ID_TRANSPORTE`),
  ADD KEY `FK_RELATIONSHIP_5` (`ID_USUARIO`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ID_PRODUCTO`),
  ADD KEY `FK_RELATIONSHIP_10` (`ID_PROVEEDOR`),
  ADD KEY `FK_RELATIONSHIP_11` (`ID_TIPOPRODUCTO`),
  ADD KEY `FK_RELATIONSHIP_15` (`ID_ESTADO`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`ID_PROVEEDOR`),
  ADD KEY `FK_RELATIONSHIP_14` (`ID_ESTADO`);

--
-- Indices de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  ADD PRIMARY KEY (`ID_TIPOPRODUCTO`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`ID_TIPOUSUARIO`);

--
-- Indices de la tabla `transporte`
--
ALTER TABLE `transporte`
  ADD PRIMARY KEY (`ID_TRANSPORTE`),
  ADD KEY `FK_RELATIONSHIP_19` (`ID_ESTADO`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_USUARIO`),
  ADD KEY `FK_RELATIONSHIP_18` (`ID_ESTADO`),
  ADD KEY `FK_RELATIONSHIP_6` (`ID_TIPOUSUARIO`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `FK_RELATIONSHIP_17` FOREIGN KEY (`ID_ESTADO`) REFERENCES `estado` (`ID_ESTADO`);

--
-- Filtros para la tabla `cuentasxcobrar`
--
ALTER TABLE `cuentasxcobrar`
  ADD CONSTRAINT `FK_RELATIONSHIP_13` FOREIGN KEY (`ID_ESTADO`) REFERENCES `estado` (`ID_ESTADO`),
  ADD CONSTRAINT `FK_RELATIONSHIP_9` FOREIGN KEY (`ID_ORDEN`) REFERENCES `orden` (`ID_ORDEN`);

--
-- Filtros para la tabla `cuentasxpagar`
--
ALTER TABLE `cuentasxpagar`
  ADD CONSTRAINT `FK_RELATIONSHIP_12` FOREIGN KEY (`ID_ESTADO`) REFERENCES `estado` (`ID_ESTADO`),
  ADD CONSTRAINT `FK_RELATIONSHIP_8` FOREIGN KEY (`ID_PROVEEDOR`) REFERENCES `proveedor` (`ID_PROVEEDOR`);

--
-- Filtros para la tabla `detalle_orden`
--
ALTER TABLE `detalle_orden`
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`ID_ORDEN`) REFERENCES `orden` (`ID_ORDEN`),
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`ID_PRODUCTO`) REFERENCES `producto` (`ID_PRODUCTO`);

--
-- Filtros para la tabla `orden`
--
ALTER TABLE `orden`
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`ID_CLIENTE`) REFERENCES `clientes` (`ID_CLIENTE`),
  ADD CONSTRAINT `FK_RELATIONSHIP_16` FOREIGN KEY (`ID_ESTADO`) REFERENCES `estado` (`ID_ESTADO`),
  ADD CONSTRAINT `FK_RELATIONSHIP_4` FOREIGN KEY (`ID_TRANSPORTE`) REFERENCES `transporte` (`ID_TRANSPORTE`),
  ADD CONSTRAINT `FK_RELATIONSHIP_5` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuario` (`ID_USUARIO`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `FK_RELATIONSHIP_10` FOREIGN KEY (`ID_PROVEEDOR`) REFERENCES `proveedor` (`ID_PROVEEDOR`),
  ADD CONSTRAINT `FK_RELATIONSHIP_11` FOREIGN KEY (`ID_TIPOPRODUCTO`) REFERENCES `tipo_producto` (`ID_TIPOPRODUCTO`),
  ADD CONSTRAINT `FK_RELATIONSHIP_15` FOREIGN KEY (`ID_ESTADO`) REFERENCES `estado` (`ID_ESTADO`);

--
-- Filtros para la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD CONSTRAINT `FK_RELATIONSHIP_14` FOREIGN KEY (`ID_ESTADO`) REFERENCES `estado` (`ID_ESTADO`);

--
-- Filtros para la tabla `transporte`
--
ALTER TABLE `transporte`
  ADD CONSTRAINT `FK_RELATIONSHIP_19` FOREIGN KEY (`ID_ESTADO`) REFERENCES `estado` (`ID_ESTADO`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_RELATIONSHIP_18` FOREIGN KEY (`ID_ESTADO`) REFERENCES `estado` (`ID_ESTADO`),
  ADD CONSTRAINT `FK_RELATIONSHIP_6` FOREIGN KEY (`ID_TIPOUSUARIO`) REFERENCES `tipo_usuario` (`ID_TIPOUSUARIO`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
