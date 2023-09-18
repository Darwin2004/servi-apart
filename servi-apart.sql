-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2023 at 04:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `servi-apart`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventario_salon`
--

CREATE TABLE `inventario_salon` (
  `id_inv` int(11) NOT NULL,
  `num_sillas` int(11) NOT NULL,
  `num_mesas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `novedad_vehiculo`
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
-- Table structure for table `paqueteria`
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
-- Dumping data for table `paqueteria`
--

INSERT INTO `paqueteria` (`id`, `destinatario`, `remitente`, `torre`, `apartamento`, `telefono`, `fecha`) VALUES
(1, '0', '0', '4', '0', '3214444', '2023-09-16');

-- --------------------------------------------------------

--
-- Table structure for table `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id_publi` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `publicaciones`
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
-- Table structure for table `reserva_salon`
--

CREATE TABLE `reserva_salon` (
  `id_reserva` int(11) NOT NULL,
  `identificacion` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `telefonos` int(11) NOT NULL,
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
-- Dumping data for table `reserva_salon`
--

INSERT INTO `reserva_salon` (`id_reserva`, `identificacion`, `nombre`, `apellidos`, `telefonos`, `correo`, `dia_reserva`, `torre`, `apartamento`, `hora_inicio`, `hora_finalizacion`, `mesas`, `sillas`) VALUES
(4, 1106, 'joh', 'mar', 3196, 'm@gmail.com', '2023-09-12', 22, 33, '23:38:00', '23:27:00', 200, 300);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `identificacion` int(11) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`identificacion`, `tipo_doc`, `nombres`, `apellidos`, `email`, `telefono`, `clave`, `rol`, `estado`, `foto`, `torre`, `apartamento`) VALUES
(231, 'CC', 'admin', 'admin', 'admin@gmail.com', '321', '202cb962ac59075b964b07152d234b70', 'Administrador', 'Activo', NULL, '1', '101'),
(4546, 'CC', 'antonio', 'Cortés', 'facortes839@soy.sena.edu.co', '456879', '4546', 'Administrador', 'Activo', '../Uploads/Usuarios/', '', ''),
(6456456, 'CC', 'Franklin', 'GOMEZ', 'enri@gmail.com', '456456', '6456456', 'Residente', 'Activo', '../Uploads/Usuarios/', 'C', '32');

-- --------------------------------------------------------

--
-- Table structure for table `vehiculo`
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
-- Dumping data for table `vehiculo`
--

INSERT INTO `vehiculo` (`identificacion`, `placa`, `marca`, `referencia`, `modelo`, `fecha`, `foto1`, `foto2`, `foto3`, `foto4`) VALUES
(231, 'eee111', 'nissan', 'explores', 35435, '2023-09-06', '../Uploads/vehiculos/f.jpg', '../Uploads/vehiculos/', '../Uploads/vehiculos/', '../Uploads/vehiculos/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventario_salon`
--
ALTER TABLE `inventario_salon`
  ADD PRIMARY KEY (`id_inv`);

--
-- Indexes for table `novedad_vehiculo`
--
ALTER TABLE `novedad_vehiculo`
  ADD PRIMARY KEY (`id_nov`),
  ADD KEY `placa` (`placa`),
  ADD KEY `identificacion` (`identificacion`);

--
-- Indexes for table `paqueteria`
--
ALTER TABLE `paqueteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id_publi`);

--
-- Indexes for table `reserva_salon`
--
ALTER TABLE `reserva_salon`
  ADD PRIMARY KEY (`id_reserva`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`identificacion`);

--
-- Indexes for table `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`placa`),
  ADD KEY `identificacion` (`identificacion`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `novedad_vehiculo`
--
ALTER TABLE `novedad_vehiculo`
  MODIFY `id_nov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paqueteria`
--
ALTER TABLE `paqueteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id_publi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reserva_salon`
--
ALTER TABLE `reserva_salon`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `novedad_vehiculo`
--
ALTER TABLE `novedad_vehiculo`
  ADD CONSTRAINT `novedad_vehiculo_ibfk_1` FOREIGN KEY (`placa`) REFERENCES `vehiculo` (`placa`),
  ADD CONSTRAINT `novedad_vehiculo_ibfk_2` FOREIGN KEY (`identificacion`) REFERENCES `usuarios` (`identificacion`);

--
-- Constraints for table `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `vehiculo_ibfk_1` FOREIGN KEY (`identificacion`) REFERENCES `usuarios` (`identificacion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
