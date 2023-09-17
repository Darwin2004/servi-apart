-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2023 a las 04:45:17
-- Versión del servidor: 8.0.32
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `servi-apart`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_salon`
--

CREATE TABLE `inventario_salon` (
  `id_inv` int NOT NULL,
  `num_sillas` int NOT NULL,
  `num_mesas` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedad_vehiculo`
--

CREATE TABLE `novedad_vehiculo` (
  `id_nov` int NOT NULL,
  `placa` varchar(7) NOT NULL,
  `novedad` varchar(500) DEFAULT NULL,
  `identificacion` int NOT NULL,
  `fecha_rev` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paqueteria`
--

CREATE TABLE `paqueteria` (
  `id` int NOT NULL,
  `destinatario` int DEFAULT NULL,
  `remitente` int DEFAULT NULL,
  `torre` int DEFAULT NULL,
  `apartamento` int DEFAULT NULL,
  `telefono` int DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `paqueteria`
--

INSERT INTO `paqueteria` (`id`, `destinatario`, `remitente`, `torre`, `apartamento`, `telefono`, `fecha`) VALUES
(1, 0, 0, 4, 0, 3214444, '2023-09-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id_publi` int NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id_publi`, `titulo`, `descripcion`, `fecha`) VALUES
(1, 'Array', 'asddddd', '2023-09-14 18:15:37'),
(2, 'dsssssss', 'ddddddddddddddddd', '2023-09-14 18:15:37'),
(3, 'agua', 'El dia de hoy por temas de acueducto tendremos problemas con tema de agua, por lo tanto no tendremos este servicio durante las 8:00 pm a 10:00 pm, muchas gracias por su atencion. ', '2023-09-14 18:15:37'),
(4, 'SSSSSS', 'DDDDDDDDDDDDDDDD', '2023-09-14 18:15:47'),
(5, 'sasasasasasasasa', 'dddddddddddddddddddd', '2023-09-14 21:42:06'),
(6, 'soy darwin el lindo', 'jejejejej', '2023-09-14 21:42:47'),
(7, 'hola amigos', 'soy darwin', '2023-09-14 21:59:56'),
(8, 'dsadasd', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaab', '2023-09-15 21:36:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva_salon`
--

CREATE TABLE `reserva_salon` (
  `id_reserva` int NOT NULL,
  `identificacion` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `telefonos` int NOT NULL,
  `correo` varchar(100) NOT NULL,
  `dia_reserva` date NOT NULL,
  `torre` int NOT NULL,
  `apartamento` int NOT NULL,
  `hora_inicio` time(6) NOT NULL,
  `hora_finalizacion` datetime(6) NOT NULL,
  `mesas` int NOT NULL,
  `sillas` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `reserva_salon`
--

INSERT INTO `reserva_salon` (`id_reserva`, `identificacion`, `nombre`, `apellidos`, `telefonos`, `correo`, `dia_reserva`, `torre`, `apartamento`, `hora_inicio`, `hora_finalizacion`, `mesas`, `sillas`) VALUES
(1, 111, '12222', '2121221', 121212, '1212@gmail.com', '2023-09-06', 1, 2, '19:42:00.000000', '2023-09-30 19:39:00.000000', 12, 455),
(2, 1109411577, 'Johan', 'Marin', 319641, 'Marin@gmail.com', '2023-09-08', 1, 12, '23:25:00.000000', '2023-09-18 20:25:00.000000', 12, 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `identificacion` int NOT NULL,
  `tipo_doc` enum('CC','CE','PASAPORTE') NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `clave` varchar(200) NOT NULL,
  `rol` enum('Residente','Administrador','Personal de Seguridad') NOT NULL,
  `estado` enum('Activo','Pendiente') DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `torre` varchar(15) DEFAULT NULL,
  `apartamento` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`identificacion`, `tipo_doc`, `nombres`, `apellidos`, `email`, `telefono`, `clave`, `rol`, `estado`, `foto`, `torre`, `apartamento`) VALUES
(231, 'CC', 'admin', 'admin', 'admin@gmail.com', '321', '202cb962ac59075b964b07152d234b70', 'Administrador', 'Activo', NULL, '1', '101'),
(4546, 'CC', 'antonio', 'Cortés', 'facortes839@soy.sena.edu.co', '456879', '4546', 'Administrador', 'Activo', '../Uploads/Usuarios/', '', ''),
(6456456, 'CC', 'Franklin', 'GOMEZ', 'enri@gmail.com', '456456', '6456456', 'Residente', 'Activo', '../Uploads/Usuarios/', 'C', '32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `identificacion` int NOT NULL,
  `placa` varchar(7) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `referencia` varchar(30) NOT NULL,
  `modelo` int NOT NULL,
  `fecha` date NOT NULL,
  `foto1` varchar(500) DEFAULT NULL,
  `foto2` varchar(200) DEFAULT NULL,
  `foto3` varchar(200) DEFAULT NULL,
  `foto4` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`identificacion`, `placa`, `marca`, `referencia`, `modelo`, `fecha`, `foto1`, `foto2`, `foto3`, `foto4`) VALUES
(231, 'eee111', 'toyota', 'explores', 2023, '2023-09-01', '../Uploads/vehiculos/ro.jpg', '../Uploads/vehiculos/ru.jpg', '../Uploads/vehiculos/ra.jpg', '../Uploads/vehiculos/ri.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inventario_salon`
--
ALTER TABLE `inventario_salon`
  ADD PRIMARY KEY (`id_inv`);

--
-- Indices de la tabla `novedad_vehiculo`
--
ALTER TABLE `novedad_vehiculo`
  ADD PRIMARY KEY (`id_nov`),
  ADD KEY `placa` (`placa`),
  ADD KEY `identificacion` (`identificacion`);

--
-- Indices de la tabla `paqueteria`
--
ALTER TABLE `paqueteria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id_publi`);

--
-- Indices de la tabla `reserva_salon`
--
ALTER TABLE `reserva_salon`
  ADD PRIMARY KEY (`id_reserva`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`identificacion`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`placa`),
  ADD KEY `identificacion` (`identificacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `novedad_vehiculo`
--
ALTER TABLE `novedad_vehiculo`
  MODIFY `id_nov` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `paqueteria`
--
ALTER TABLE `paqueteria`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id_publi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `reserva_salon`
--
ALTER TABLE `reserva_salon`
  MODIFY `id_reserva` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `novedad_vehiculo`
--
ALTER TABLE `novedad_vehiculo`
  ADD CONSTRAINT `novedad_vehiculo_ibfk_1` FOREIGN KEY (`placa`) REFERENCES `vehiculo` (`placa`),
  ADD CONSTRAINT `novedad_vehiculo_ibfk_2` FOREIGN KEY (`identificacion`) REFERENCES `usuarios` (`identificacion`);

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `vehiculo_ibfk_1` FOREIGN KEY (`identificacion`) REFERENCES `usuarios` (`identificacion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
