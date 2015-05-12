-- phpMyAdmin SQL Dump
-- version 4.4.6
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-05-2015 a las 21:14:39
-- Versión del servidor: 10.0.18-MariaDB-log
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `KoonolPax`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `cod_cat` smallint(3) NOT NULL,
  `desc_cat` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disco`
--

CREATE TABLE IF NOT EXISTS `disco` (
  `cod_d` int(6) NOT NULL,
  `nom_d` varchar(80) NOT NULL,
  `cod_i` int(11) NOT NULL,
  `cant_d` int(11) NOT NULL,
  `cod_s` smallint(3) NOT NULL,
  `precio_d` float NOT NULL,
  `fec_d` date NOT NULL,
  `cod_cat` smallint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `interprete`
--

CREATE TABLE IF NOT EXISTS `interprete` (
  `cod_i` int(11) NOT NULL,
  `desc_i` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_d`
--

CREATE TABLE IF NOT EXISTS `pedido_d` (
  `cod_p` int(11) NOT NULL,
  `cod_d` int(6) NOT NULL,
  `cant_d` smallint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_m`
--

CREATE TABLE IF NOT EXISTS `pedido_m` (
  `cod_p` int(11) NOT NULL,
  `fec_p` datetime NOT NULL,
  `fin_p` varchar(1) NOT NULL,
  `cod_u` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sello`
--

CREATE TABLE IF NOT EXISTS `sello` (
  `cod_s` smallint(3) NOT NULL,
  `desc_s` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `cod_u` int(6) NOT NULL,
  `nick_u` varchar(80) NOT NULL,
  `pass_u` varchar(80) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cod_cat`);

--
-- Indices de la tabla `disco`
--
ALTER TABLE `disco`
  ADD PRIMARY KEY (`cod_d`),
  ADD KEY `fk_disco_interprete1_idx` (`cod_i`),
  ADD KEY `fk_disco_sello1_idx` (`cod_s`),
  ADD KEY `fk_disco_categoria1_idx` (`cod_cat`);

--
-- Indices de la tabla `interprete`
--
ALTER TABLE `interprete`
  ADD PRIMARY KEY (`cod_i`);

--
-- Indices de la tabla `pedido_d`
--
ALTER TABLE `pedido_d`
  ADD KEY `fk_table1_pedidos_m1_idx` (`cod_p`),
  ADD KEY `fk_pedido_d_disco1_idx` (`cod_d`);

--
-- Indices de la tabla `pedido_m`
--
ALTER TABLE `pedido_m`
  ADD PRIMARY KEY (`cod_p`),
  ADD KEY `fk_pedidos_m_usuario1_idx` (`cod_u`);

--
-- Indices de la tabla `sello`
--
ALTER TABLE `sello`
  ADD PRIMARY KEY (`cod_s`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_u`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cod_cat` smallint(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `disco`
--
ALTER TABLE `disco`
  MODIFY `cod_d` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `interprete`
--
ALTER TABLE `interprete`
  MODIFY `cod_i` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pedido_m`
--
ALTER TABLE `pedido_m`
  MODIFY `cod_p` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `sello`
--
ALTER TABLE `sello`
  MODIFY `cod_s` smallint(3) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `disco`
--
ALTER TABLE `disco`
  ADD CONSTRAINT `fk_disco_categoria` FOREIGN KEY (`cod_cat`) REFERENCES `categoria` (`cod_cat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_disco_interprete` FOREIGN KEY (`cod_i`) REFERENCES `interprete` (`cod_i`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_disco_sello` FOREIGN KEY (`cod_s`) REFERENCES `sello` (`cod_s`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedido_d`
--
ALTER TABLE `pedido_d`
  ADD CONSTRAINT `fk_pedidos_m` FOREIGN KEY (`cod_p`) REFERENCES `pedido_m` (`cod_p`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
