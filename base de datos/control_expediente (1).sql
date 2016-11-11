-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2016 a las 01:48:14
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `control_expediente`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encargado`
--

CREATE TABLE `encargado` (
  `id_encargado` int(11) NOT NULL,
  `encargado` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `encargado`
--

INSERT INTO `encargado` (`id_encargado`, `encargado`) VALUES
(1, 'Padre'),
(2, 'Madre'),
(3, 'Encargado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id_estudiante` int(11) NOT NULL,
  `NIE` varchar(45) DEFAULT NULL,
  `grado` varchar(45) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `lugar_nacimiento` varchar(255) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `estudio_anterior` varchar(255) DEFAULT NULL,
  `razon_retiro` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `direccion_casa` varchar(255) DEFAULT NULL,
  `telefono_casa` varchar(45) DEFAULT NULL,
  `genero` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_estudiante`, `NIE`, `grado`, `fecha_nacimiento`, `lugar_nacimiento`, `edad`, `estudio_anterior`, `razon_retiro`, `nombre`, `apellido`, `direccion_casa`, `telefono_casa`, `genero`) VALUES
(23, '5151', '6', '1994-12-28', 'Estados unidos de ameria california', 22, 'Instituto tecnico de exsalunos salecianos', '-', 'Jose Anthony', 'Melgar Aguilar', 'Colonia el milagro #2 guazapa casa 23-a', '78787887', 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha_medica`
--

CREATE TABLE `ficha_medica` (
  `id_ficha_medica` int(11) NOT NULL,
  `periodo_actualizacion` date DEFAULT NULL,
  `tipo_sangre` varchar(45) DEFAULT NULL,
  `historia_enfermedad` varchar(255) DEFAULT NULL,
  `enfermedad` varchar(255) DEFAULT NULL,
  `medicamentos` varchar(255) DEFAULT NULL,
  `nombre_medico` varchar(255) DEFAULT NULL,
  `telefono_medico` varchar(45) DEFAULT NULL,
  `otro` varchar(255) DEFAULT NULL,
  `telefono_otro` varchar(255) NOT NULL,
  `id_estudiante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion_encargado`
--

CREATE TABLE `informacion_encargado` (
  `id_informacion_encargado` int(11) NOT NULL,
  `dui` varchar(45) DEFAULT NULL,
  `cargo` varchar(45) DEFAULT NULL,
  `profesion` varchar(45) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `direccion_casa_encargado` varchar(255) NOT NULL,
  `telefono_casa_encargado` varchar(255) NOT NULL,
  `telefono_trabajo` varchar(45) DEFAULT NULL,
  `direccion_trabajo` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `id_encargado` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `informacion_encargado`
--

INSERT INTO `informacion_encargado` (`id_informacion_encargado`, `dui`, `cargo`, `profesion`, `correo`, `direccion_casa_encargado`, `telefono_casa_encargado`, `telefono_trabajo`, `direccion_trabajo`, `celular`, `nombre`, `apellido`, `id_encargado`, `id_estudiante`) VALUES
(51, '1323232', 'jefe', 'nada', '-', 'Colonia el milagro #2 guazapa casa 23-a', '78787878', '78788787', 'Colonia el milagro #2 guazapa casa 23-a', '78788787', 'Jose Arnulfo', 'melgar', 1, 23),
(52, '12332112', '-', '-', '-', 'Colonia el milagro #2 guazapa casa 23-a', '-', '-', 'Colonia el milagro #2 guazapa casa 23-a', '-', 'Regina Marlene', 'Aguilar', 2, 23),
(53, '323123', '-', '-', '-', 'Colonia el milagro #2 guazapa casa 23-a', '78778777', '78787878', 'Colonia el milagro #2 guazapa casa 23-a', '78787878', 'Gabriela Lourdes ', 'Carranza Flores', 3, 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otros_datos`
--

CREATE TABLE `otros_datos` (
  `id_otro_datos` int(11) NOT NULL,
  `estado_civil` varchar(255) DEFAULT NULL,
  `iglesia` varchar(255) DEFAULT NULL,
  `emergencia` varchar(255) DEFAULT NULL,
  `parentesco` varchar(45) DEFAULT NULL,
  `telefono_paren` varchar(45) DEFAULT NULL,
  `persona_autorizada` varchar(255) DEFAULT NULL,
  `telefono_autorizado` varchar(45) DEFAULT NULL,
  `otra_persona` varchar(255) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `persona_micro` varchar(255) DEFAULT NULL,
  `celular_micro` varchar(45) DEFAULT NULL,
  `id_estudiante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `otros_datos`
--

INSERT INTO `otros_datos` (`id_otro_datos`, `estado_civil`, `iglesia`, `emergencia`, `parentesco`, `telefono_paren`, `persona_autorizada`, `telefono_autorizado`, `otra_persona`, `telefono`, `persona_micro`, `celular_micro`, `id_estudiante`) VALUES
(29, 'Casado', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pantalla`
--

CREATE TABLE `pantalla` (
  `id_pantalla` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `patalla` varchar(255) NOT NULL,
  `descripcion_pantalla` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pantalla`
--

INSERT INTO `pantalla` (`id_pantalla`, `id_rol`, `patalla`, `descripcion_pantalla`) VALUES
(1, 1, 'home.php', 'Agregar Usuario'),
(2, 1, 'agregar_estudiante.php', 'Agregar Estudiante\r\n'),
(3, 2, 'agregar_estudiante.php', 'Agregar Estudiante\r\n'),
(4, 1, 'mostrar_estudiante.php', 'Estudiantes '),
(5, 2, 'mostrar_estudiante_usuario.php', 'Estudiantes ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(45) DEFAULT NULL,
  `descripcion_rol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `rol`, `descripcion_rol`) VALUES
(1, 'Administrador', 'Puede ver todo'),
(2, 'Usuario', 'solo puede ingresar estudiantes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `genero` varchar(45) DEFAULT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `password`, `estado`, `nombre`, `apellido`, `genero`, `id_rol`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', 'Anthony', 'Melgar', 'Masculino', 1),
(9, 'docente', 'e10adc3949ba59abbe56e057f20f883e', '1', 'jose', 'melgar', 'Masculino', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `encargado`
--
ALTER TABLE `encargado`
  ADD PRIMARY KEY (`id_encargado`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id_estudiante`);

--
-- Indices de la tabla `ficha_medica`
--
ALTER TABLE `ficha_medica`
  ADD PRIMARY KEY (`id_ficha_medica`),
  ADD KEY `fk_ficha_medica_estudiante1_idx` (`id_estudiante`);

--
-- Indices de la tabla `informacion_encargado`
--
ALTER TABLE `informacion_encargado`
  ADD PRIMARY KEY (`id_informacion_encargado`),
  ADD KEY `fk_informacion_encargado_encargado_idx` (`id_encargado`),
  ADD KEY `fk_informacion_encargado_estudiante1_idx` (`id_estudiante`);

--
-- Indices de la tabla `otros_datos`
--
ALTER TABLE `otros_datos`
  ADD PRIMARY KEY (`id_otro_datos`),
  ADD KEY `fk_otros_datos_estudiante1_idx` (`id_estudiante`);

--
-- Indices de la tabla `pantalla`
--
ALTER TABLE `pantalla`
  ADD PRIMARY KEY (`id_pantalla`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_usuario_rol1_idx` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `encargado`
--
ALTER TABLE `encargado`
  MODIFY `id_encargado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id_estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `ficha_medica`
--
ALTER TABLE `ficha_medica`
  MODIFY `id_ficha_medica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `informacion_encargado`
--
ALTER TABLE `informacion_encargado`
  MODIFY `id_informacion_encargado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT de la tabla `otros_datos`
--
ALTER TABLE `otros_datos`
  MODIFY `id_otro_datos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `pantalla`
--
ALTER TABLE `pantalla`
  MODIFY `id_pantalla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ficha_medica`
--
ALTER TABLE `ficha_medica`
  ADD CONSTRAINT `fk_ficha_medica_estudiante1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `informacion_encargado`
--
ALTER TABLE `informacion_encargado`
  ADD CONSTRAINT `fk_informacion_encargado_encargado` FOREIGN KEY (`id_encargado`) REFERENCES `encargado` (`id_encargado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_informacion_encargado_estudiante1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `otros_datos`
--
ALTER TABLE `otros_datos`
  ADD CONSTRAINT `fk_otros_datos_estudiante1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pantalla`
--
ALTER TABLE `pantalla`
  ADD CONSTRAINT `pantalla_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_rol1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
