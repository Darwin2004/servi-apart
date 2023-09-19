-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
<<<<<<< HEAD
-- Tiempo de generación: 19-09-2023 a las 20:36:50
-- Versión del servidor: 10.4.28-MariaDB
=======
-- Tiempo de generación: 19-09-2023 a las 07:42:12
-- Versión del servidor: 8.0.32
>>>>>>> e88bd2e9eb11cb99ecc72a6bf899cf1fafaa129b
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
  `id_inv` int(11) NOT NULL,
  `num_sillas` int(11) NOT NULL,
  `num_mesas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedad_vehiculo`
--

CREATE TABLE `novedad_vehiculo` (
  `id_nov` int(11) NOT NULL,
  `placa` varchar(7) NOT NULL,
  `novedad` varchar(500) DEFAULT NULL,
  `identificacion` int(11) NOT NULL,
  `fecha_rev` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paqueteria`
--

CREATE TABLE `paqueteria` (
  `id` int(11) NOT NULL,
  `destinatario` varchar(50) DEFAULT NULL,
  `remitente` varchar(50) DEFAULT NULL,
  `torre` varchar(20) DEFAULT NULL,
  `apartamento` varchar(20) DEFAULT NULL,
  `telefono` varchar(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `paqueteria`
--

INSERT INTO `paqueteria` (`id`, `destinatario`, `remitente`, `torre`, `apartamento`, `telefono`, `fecha`) VALUES
(1, '0', '0', '4', '0', '3214444', '2023-09-16'),
(2, 'johan', 'apple', '4272', '2327', '3196419848', '2023-09-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id_publi` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
  `id_reserva` int(11) NOT NULL,
  `identificacion` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `telefonos` varchar(10) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `dia_reserva` date NOT NULL,
  `torre` int(11) NOT NULL,
  `apartamento` int(11) NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_finalizacion` time NOT NULL,
  `mesas` int(11) NOT NULL,
  `sillas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `reserva_salon`
--

INSERT INTO `reserva_salon` (`id_reserva`, `identificacion`, `nombre`, `apellidos`, `telefonos`, `correo`, `dia_reserva`, `torre`, `apartamento`, `hora_inicio`, `hora_finalizacion`, `mesas`, `sillas`) VALUES
(7, 1109411577, 'Johan', 'Marin', '3196419848', 'Marin@gmail.com', '2023-09-04', 1, 101, '12:58:00', '03:00:00', 110, 100),
(8, 1109411577, 'Franklin', 'Cortez', '3196419848', 'Cortez@gmail.com', '2023-09-19', 4, 502, '15:58:00', '03:00:00', 50, 55),
(9, 324534, 'carlos', 'lassso', '13513', 'lassso@gmail.com', '2023-09-20', 123, 23456, '00:04:00', '03:00:00', 123456, 123456),
(10, 38196448, 'Camilo', 'Pinilla', '312026', 'pinilla@gmail.com', '2023-09-27', 123, 3456, '00:19:00', '03:00:00', 123, 546),
(11, 45345, 'Juan', 'Garzon', '1641613', 'garzon@gmail.com', '2023-09-26', 89, 78, '00:30:00', '03:00:00', 12, 456),
(12, 15363851, 'Tania', 'Marin', '1638', 'tania@gmail.com', '2023-09-06', 323243, 4343, '16:43:00', '03:00:00', 4534, 43453);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `identificacion` int(11) NOT NULL,
  `tipo_doc` enum('CC','CE','PASAPORTE') NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `clave` varchar(200) NOT NULL,
  `rol` enum('Residente','Administrador','Seguridad') NOT NULL,
  `estado` enum('Activo','Pendiente') DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `torre` varchar(15) DEFAULT NULL,
  `apartamento` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`identificacion`, `tipo_doc`, `nombres`, `apellidos`, `email`, `telefono`, `clave`, `rol`, `estado`, `foto`, `torre`, `apartamento`) VALUES
(231, 'CC', 'admin', 'admin', 'admin@gmail.com', '321', '202cb962ac59075b964b07152d234b70', 'Administrador', 'Activo', NULL, '1', '101'),
(4546, 'CC', 'antonio', 'Cortés', 'facortes839@soy.sena.edu.co', '456879', '4546', 'Administrador', 'Activo', '../Uploads/Usuarios/', '', ''),
(123123, 'CC', 'Camili', 'Pinilla', 'Seguridad@gmail.com', '123123', '202cb962ac59075b964b07152d234b70', 'Seguridad', 'Activo', NULL, '3', 'f4'),
(6456456, 'CC', 'Franklin', 'GOMEZ', 'enri@gmail.com', '456456', '6456456', 'Residente', 'Activo', '../Uploads/Usuarios/', 'C', '32'),
(12312312, 'CC', 'asdasd', 'qeqwe', 'residente@gmail.com', '123123123', '202cb962ac59075b964b07152d234b70', 'Residente', 'Activo', NULL, '3', 'f1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `identificacion` int(11) NOT NULL,
  `placa` varchar(7) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `referencia` varchar(30) NOT NULL,
  `modelo` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `foto1` varchar(500) DEFAULT NULL,
  `foto2` varchar(200) DEFAULT NULL,
  `foto3` varchar(200) DEFAULT NULL,
  `foto4` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`identificacion`, `placa`, `marca`, `referencia`, `modelo`, `fecha`, `foto1`, `foto2`, `foto3`, `foto4`) VALUES
(231, 'eee111', 'nissan', 'explores', 35435, '2023-09-06', '../Uploads/vehiculos/f.jpg', '../Uploads/vehiculos/', '../Uploads/vehiculos/', '../Uploads/vehiculos/');

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
  MODIFY `id_nov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `paqueteria`
--
ALTER TABLE `paqueteria`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
=======
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
>>>>>>> e88bd2e9eb11cb99ecc72a6bf899cf1fafaa129b

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id_publi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `reserva_salon`
--
ALTER TABLE `reserva_salon`
<<<<<<< HEAD
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
=======
  MODIFY `id_reserva` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
>>>>>>> e88bd2e9eb11cb99ecc72a6bf899cf1fafaa129b

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
