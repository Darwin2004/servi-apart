-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2023 a las 05:18:26
-- Versión del servidor: 8.0.34
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedad_vehiculo`
--

CREATE TABLE `novedad_vehiculo` (
  `id_nov` int NOT NULL,
  `placa` varchar(7) NOT NULL,
  `novedad` varchar(500) DEFAULT NULL,
  `fecha_rev` date NOT NULL,
  `identificacion` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `tel-destinatario` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id_publi` int NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `id_salon` int NOT NULL,
  `identificacion` int NOT NULL,
  `id_inv` int NOT NULL,
  `fecha_reserva` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `torre` int DEFAULT NULL,
  `apartamento` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`identificacion`, `tipo_doc`, `nombres`, `apellidos`, `email`, `telefono`, `clave`, `rol`, `estado`, `foto`, `torre`, `apartamento`) VALUES
(231, 'CC', 'admin', 'admin', 'admin@gmail.com', '321', '202cb962ac59075b964b07152d234b70', 'Administrador', 'Activo', NULL, 2, '101'),
(5444, 'CC', 'Darwin', 'Gonzalez', 'dargonzalez@misena.edu.co', '564645645', '5444', 'Residente', 'Activo', '../Uploads/Usuarios/5.jpg', 0, '09');

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
  `foto1` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `foto2` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `foto3` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `foto4` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  ADD PRIMARY KEY (`id_salon`),
  ADD KEY `identificacion` (`identificacion`),
  ADD KEY `id_inv` (`id_inv`);

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
-- AUTO_INCREMENT de la tabla `paqueteria`
--
ALTER TABLE `paqueteria`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id_publi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- Filtros para la tabla `reserva_salon`
--
ALTER TABLE `reserva_salon`
  ADD CONSTRAINT `reserva_salon_ibfk_1` FOREIGN KEY (`identificacion`) REFERENCES `usuarios` (`identificacion`),
  ADD CONSTRAINT `reserva_salon_ibfk_2` FOREIGN KEY (`id_inv`) REFERENCES `inventario_salon` (`id_inv`);

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `vehiculo_ibfk_1` FOREIGN KEY (`identificacion`) REFERENCES `usuarios` (`identificacion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
