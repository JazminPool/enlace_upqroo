-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2018 a las 05:30:29
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `enlace_upqroo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_vinculacion`
--

CREATE TABLE `admin_vinculacion` (
  `idadmin_vinculacion` int(11) NOT NULL,
  `nombre_admin` varchar(45) NOT NULL,
  `apellido_admin` varchar(45) NOT NULL,
  `contrasena_admin` varchar(45) NOT NULL,
  `usuario_admin` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin_vinculacion`
--

INSERT INTO `admin_vinculacion` (`idadmin_vinculacion`, `nombre_admin`, `apellido_admin`, `contrasena_admin`, `usuario_admin`) VALUES
(1234, 'Lorena', 'Herrera', '12345', 'lorena@uproo.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aliados_archivos`
--

CREATE TABLE `aliados_archivos` (
  `idaliados_archivos` varchar(20) NOT NULL,
  `archivos_idarchivos` int(11) NOT NULL,
  `fecha_archivo` date NOT NULL,
  `descripcion_archivo` varchar(45) NOT NULL,
  `validado_archivo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aliados_archivos`
--

INSERT INTO `aliados_archivos` (`idaliados_archivos`, `archivos_idarchivos`, `fecha_archivo`, `descripcion_archivo`, `validado_archivo`) VALUES
('12356156', 3, '2018-07-13', 'Ven aki', 'N');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aliados_estrategicos`
--

CREATE TABLE `aliados_estrategicos` (
  `idaliados_estrategicos` varchar(20) NOT NULL,
  `nombre_empresa` varchar(45) NOT NULL,
  `contacto_empresa` int(10) NOT NULL,
  `extension_empresa` int(10) DEFAULT NULL,
  `correo_empresa` varchar(35) NOT NULL,
  `pagoficial_empresa` varchar(45) NOT NULL,
  `archivos_idarchivos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aliados_estrategicos`
--

INSERT INTO `aliados_estrategicos` (`idaliados_estrategicos`, `nombre_empresa`, `contacto_empresa`, `extension_empresa`, `correo_empresa`, `pagoficial_empresa`, `archivos_idarchivos`) VALUES
('12356156', 'Gloria la mejor', 1282, NULL, 'glorialamejorporsiempre@gmail.com', 'gloria.com', 3),
('6548646', 'lossangoogles', 4645654, NULL, 'lsoandsds@gmail.com', 'www.google.com.mx', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos_practicantes`
--

CREATE TABLE `alumnos_practicantes` (
  `idalumnos_practicantes` int(9) NOT NULL,
  `carreras_idcarreras` int(10) NOT NULL,
  `tipos_est_idtipos_est` int(11) NOT NULL,
  `archivos_idarchivos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos_practicantes`
--

INSERT INTO `alumnos_practicantes` (`idalumnos_practicantes`, `carreras_idcarreras`, `tipos_est_idtipos_est`, `archivos_idarchivos`) VALUES
(201600056, 1, 1, 2),
(201600108, 4, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE `archivos` (
  `idarchivos` int(11) NOT NULL,
  `carpeta_uno` varchar(15) NOT NULL,
  `carpeta_dos` varchar(15) NOT NULL,
  `archivo_adjunto` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `archivos`
--

INSERT INTO `archivos` (`idarchivos`, `carpeta_uno`, `carpeta_dos`, `archivo_adjunto`) VALUES
(1, 'archivos', 'CV', 'gloria.pdf'),
(2, 'archivos', 'CV', 'jazmin.pdf'),
(3, 'archivos', 'anuncio', 'prueba.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `idcarreras` int(10) NOT NULL,
  `descripcion_carrera` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`idcarreras`, `descripcion_carrera`) VALUES
(1, 'Ing. en Software'),
(2, 'Ing. en Biotecnologia'),
(3, 'Ing. Financiera'),
(4, 'Ing. Biomedica'),
(5, 'Lic. PyMEs'),
(6, 'Lic. Terapia Fisica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_est`
--

CREATE TABLE `tipos_est` (
  `idtipos_est` int(11) NOT NULL,
  `descripcion_est` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipos_est`
--

INSERT INTO `tipos_est` (`idtipos_est`, `descripcion_est`) VALUES
(1, 'Estancias'),
(2, 'Estadías');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin_vinculacion`
--
ALTER TABLE `admin_vinculacion`
  ADD PRIMARY KEY (`idadmin_vinculacion`);

--
-- Indices de la tabla `aliados_archivos`
--
ALTER TABLE `aliados_archivos`
  ADD PRIMARY KEY (`idaliados_archivos`,`archivos_idarchivos`),
  ADD KEY `fk_aliados_estrategicos_has_archivos_archivos1_idx` (`archivos_idarchivos`),
  ADD KEY `fk_aliados_estrategicos_has_archivos_aliados_estrategicos_idx` (`idaliados_archivos`);

--
-- Indices de la tabla `aliados_estrategicos`
--
ALTER TABLE `aliados_estrategicos`
  ADD PRIMARY KEY (`idaliados_estrategicos`),
  ADD KEY `fk_aliados_estrategicos_archivos1_idx` (`archivos_idarchivos`);

--
-- Indices de la tabla `alumnos_practicantes`
--
ALTER TABLE `alumnos_practicantes`
  ADD PRIMARY KEY (`idalumnos_practicantes`,`carreras_idcarreras`,`tipos_est_idtipos_est`,`archivos_idarchivos`),
  ADD KEY `fk_alumnos_practicantes_carreras1_idx` (`carreras_idcarreras`),
  ADD KEY `fk_alumnos_practicantes_tipos_est1_idx` (`tipos_est_idtipos_est`),
  ADD KEY `fk_alumnos_practicantes_archivos1_idx` (`archivos_idarchivos`);

--
-- Indices de la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD PRIMARY KEY (`idarchivos`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`idcarreras`);

--
-- Indices de la tabla `tipos_est`
--
ALTER TABLE `tipos_est`
  ADD PRIMARY KEY (`idtipos_est`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `idcarreras` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tipos_est`
--
ALTER TABLE `tipos_est`
  MODIFY `idtipos_est` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aliados_archivos`
--
ALTER TABLE `aliados_archivos`
  ADD CONSTRAINT `fk_aliados_estrategicos_has_archivos_aliados_estrategicos` FOREIGN KEY (`idaliados_archivos`) REFERENCES `aliados_estrategicos` (`idaliados_estrategicos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_aliados_estrategicos_has_archivos_archivos1` FOREIGN KEY (`archivos_idarchivos`) REFERENCES `archivos` (`idarchivos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `aliados_estrategicos`
--
ALTER TABLE `aliados_estrategicos`
  ADD CONSTRAINT `fk_aliados_estrategicos_archivos1` FOREIGN KEY (`archivos_idarchivos`) REFERENCES `archivos` (`idarchivos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `alumnos_practicantes`
--
ALTER TABLE `alumnos_practicantes`
  ADD CONSTRAINT `fk_alumnos_practicantes_archivos1` FOREIGN KEY (`archivos_idarchivos`) REFERENCES `archivos` (`idarchivos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_alumnos_practicantes_carreras1` FOREIGN KEY (`carreras_idcarreras`) REFERENCES `carreras` (`idcarreras`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_alumnos_practicantes_tipos_est1` FOREIGN KEY (`tipos_est_idtipos_est`) REFERENCES `tipos_est` (`idtipos_est`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
