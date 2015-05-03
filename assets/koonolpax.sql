-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-05-2015 a las 17:35:35
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `koonolpax`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `cod_cat` smallint(3) NOT NULL,
  `desc_cat` varchar(80) NOT NULL
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
  `cod_cat` smallint(3) NOT NULL,
  `precio_d` float NOT NULL,
  `fec_d` date NOT NULL
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
-- Estructura de tabla para la tabla `pedidos_d`
--

CREATE TABLE IF NOT EXISTS `pedidos_d` (
  `cod_p` int(11) NOT NULL,
  `cod_d` int(6) NOT NULL,
  `cant_d` smallint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos_m`
--

CREATE TABLE IF NOT EXISTS `pedidos_m` (
`cod_p` int(11) NOT NULL,
  `cod_u` int(6) NOT NULL,
  `fec_p` date NOT NULL,
  `fin_p` varchar(1) NOT NULL
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
  `pass_u` varchar(80) NOT NULL
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
 ADD PRIMARY KEY (`cod_d`);

--
-- Indices de la tabla `interprete`
--
ALTER TABLE `interprete`
 ADD PRIMARY KEY (`cod_i`);

--
-- Indices de la tabla `pedidos_d`
--
ALTER TABLE `pedidos_d`
 ADD PRIMARY KEY (`cod_p`,`cod_d`);

--
-- Indices de la tabla `pedidos_m`
--
ALTER TABLE `pedidos_m`
 ADD PRIMARY KEY (`cod_p`);

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
-- AUTO_INCREMENT de la tabla `pedidos_m`
--
ALTER TABLE `pedidos_m`
MODIFY `cod_p` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `cod_u` int(6) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
