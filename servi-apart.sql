-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1

-- Tiempo de generación: 19-09-2023 a las 21:22:19
-- Versión del servidor: 10.4.28-MariaDB



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

--
-- Volcado de datos para la tabla `novedad_vehiculo`
--

INSERT INTO `novedad_vehiculo` (`id_nov`, `placa`, `novedad`, `identificacion`, `fecha_rev`) VALUES
(3, 'AIO654', 'rayon en el lado izquierdo del automovil', 537837838, '2023-09-19 14:19:59'),
(4, 'eee111', 'fuga de aceite', 537837838, '2023-09-19 14:19:59'),
(5, 'QRP456', 'vidrio roto en la ventada derecha', 2147483647, '2023-09-19 14:19:59');

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
(2, 'johan', 'apple', '4272', '2327', '3196419848', '2023-09-18'),
(3, 'ANDRES', 'BIOBOLSA', 'B', '609', '3194564165', '2023-09-19'),
(4, 'MIGUEL ', 'APPLE', 'C', '245', '38464652', '2023-09-19');

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
(3, 'agua', 'El dia de hoy por temas de acueducto tendremos problemas con tema de agua, por lo tanto no tendremos este servicio durante las 8:00 pm a 10:00 pm, muchas gracias por su atencion. ', '2023-09-14 18:15:37'),
(9, 'REMODELACIONES EN EL EDIFICIO', 'POR POR PROBLEMAS EN LA RED ELECTRICA', '2023-09-19 14:09:12'),
(10, 'FUGA DE GAZ', 'FUGA DE GAS EN EL APARTEMENTO 601', '2023-09-19 14:09:34');

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
(35354, 'CE', 'Andres', 'garzon', 'garzon@gmail.com', '3194564165', '35354', 'Residente', 'Activo', '../Uploads/Usuarios/3.jfif', 'B', '609'),
(354534, 'CC', 'angel', 'gallardo', 'gallardo@gmail.com', '318354352', '354534', 'Residente', 'Activo', '../Uploads/Usuarios/5.jfif', 'c', '701'),
(6456456, 'CC', 'Franklin', 'GOMEZ', 'enri@gmail.com', '456456', '6456456', 'Residente', 'Activo', '../Uploads/Usuarios/', 'C', '32'),
(537837838, 'CC', 'luis', 'eduardo', 'eduardo@gmail.com', '31615', '537837838', '', 'Activo', '../Uploads/Usuarios/2.jfif', NULL, NULL),
(563453783, 'CC', 'miguel', 'lopez', 'lopez@gmail.com', '38464652', '563453783', 'Residente', 'Pendiente', '../Uploads/Usuarios/6.jfif', 'c', '245'),
(2147483647, 'PASAPORTE', 'carlos', 'alberto', 'alberto@gmail.com', '3149848', '37837833453', '', 'Activo', '../Uploads/Usuarios/1.jfif', NULL, NULL);

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
(6456456, 'AIO654', 'chevrolet', 'AVEO', 2010, '2023-09-06', '../Uploads/vehiculos/8.jfif', '../Uploads/vehiculos/9.jfif', '../Uploads/vehiculos/10.jfif', '../Uploads/vehiculos/11.jfif'),
(231, 'eee111', 'nissan', 'explores', 35435, '2023-09-06', '../Uploads/vehiculos/f.jpg', '../Uploads/vehiculos/', '../Uploads/vehiculos/', '../Uploads/vehiculos/'),
(354534, 'QRP456', 'mazda', 'CR5', 2023, '2023-09-08', '../Uploads/vehiculos/20.jfif', '../Uploads/vehiculos/21.jfif', '../Uploads/vehiculos/22.jfif', '../Uploads/vehiculos/23.jfif');

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
  MODIFY `id_nov` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `paqueteria`
--
ALTER TABLE `paqueteria`

  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`

  MODIFY `id_publi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reserva_salon`
--
ALTER TABLE `reserva_salon`

  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT;


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
