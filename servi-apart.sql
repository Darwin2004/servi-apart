-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 09:08 PM
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

--
-- Dumping data for table `novedad_vehiculo`
--

INSERT INTO `novedad_vehiculo` (`id_nov`, `placa`, `novedad`, `identificacion`, `fecha_rev`) VALUES
(3, 'AIO654', 'rayon en el lado izquierdo del automovil', 537837838, '2023-09-19 14:19:59'),
(4, 'eee111', 'fuga de aceite', 537837838, '2023-09-19 14:19:59'),
(5, 'QRP456', 'llanta pinchada', 2147483647, '2023-09-19 14:19:59');

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
(1, '0', '0', '4', '0', '3214444', '2023-09-16'),
(2, 'johan', 'apple', '4272', '2327', '3196419848', '2023-09-18'),
(3, 'ANDRES', 'BIOBOLSA', 'B', '609', '3194564165', '2023-09-19'),
(4, 'MIGUEL ', 'APPLE', 'C', '245', '38464652', '2023-09-19');

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
(3, 'agua', 'El dia de hoy por temas de acueducto tendremos problemas con tema de agua, por lo tanto no tendremos este servicio durante las 8:00 pm a 10:00 pm, muchas gracias por su atencion. ', '2023-09-14 18:15:37'),
(9, 'REMODELACIONES EN EL EDIFICIO', 'POR POR PROBLEMAS EN LA RED ELECTRICA', '2023-09-19 14:09:12'),
(10, 'FUGA DE GAZ', 'FUGA DE GAS EN EL APARTEMENTO 601', '2023-09-19 14:09:34');

-- --------------------------------------------------------

--
-- Table structure for table `reserva_salon`
--

CREATE TABLE `reserva_salon` (
  `id_reserva` int(11) NOT NULL,
  `identificacion` int(11) NOT NULL,
  `dia_reserva` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_finalizacion` time NOT NULL,
  `mesas` int(11) NOT NULL,
  `sillas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `reserva_salon`
--

INSERT INTO `reserva_salon` (`id_reserva`, `identificacion`, `dia_reserva`, `hora_inicio`, `hora_finalizacion`, `mesas`, `sillas`) VALUES
(15, 321654987, '2023-10-17', '15:43:00', '03:00:00', 56, 54),
(17, 231, '2023-10-24', '11:34:00', '03:00:00', 56, 56),
(18, 654321, '2023-10-28', '13:04:00', '03:00:00', 1, 1),
(19, 563453783, '2023-10-26', '12:13:00', '03:00:00', 2, 2),
(20, 563453783, '2023-10-07', '16:10:00', '03:00:00', 3, 3),
(21, 231, '2023-10-29', '15:11:00', '03:00:00', 22, 22);

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
  `rol` enum('Residente','Administrador','Seguridad') NOT NULL,
  `estado` enum('Activo','Pendiente') DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `torre` varchar(15) DEFAULT NULL,
  `apartamento` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`identificacion`, `tipo_doc`, `nombres`, `apellidos`, `email`, `telefono`, `clave`, `rol`, `estado`, `foto`, `torre`, `apartamento`) VALUES
(231, 'CC', 'admin', 'admin', 'admin@gmail.com', '321', '202cb962ac59075b964b07152d234b70', 'Administrador', 'Activo', '../Uploads/Usuariospng-clipart-service-information-business-organization-management-administrator-miscellaneous-face.png', '1', '101'),
(999, 'CC', 'ronald', 'rodriguez', 'ronal@gmail.com', '222222', '202cb962ac59075b964b07152d234b70', 'Residente', 'Activo', NULL, '4', 'b-23'),
(4546, 'CC', 'antonio', 'Cortés', 'facortes839@soy.sena.edu.co', '456879', '4546', 'Administrador', 'Activo', '../Uploads/Usuarios/', '', ''),
(35354, 'CE', 'Andres', 'garzon', 'garzon@gmail.com', '3194564165', '35354', 'Residente', 'Activo', '../Uploads/Usuarios/3.jfif', 'B', '609'),
(354534, 'CC', 'angel', 'gallardo', 'gallardo@gmail.com', '318354352', '354534', 'Residente', 'Activo', '../Uploads/Usuarios/5.jfif', 'c', '701'),
(654321, 'PASAPORTE', 'Nicki', 'Nicole', 'nicole@gmail.com', '534378343234', 'c33367701511b4f6020ec61ded352059', 'Residente', 'Activo', '../Uploads/Usuarios/ni.jpg', 'a', '502'),
(6456456, 'CC', 'Franklin', 'GOMEZ', 'enri@gmail.com', '456456', '6456456', 'Residente', 'Activo', '../Uploads/Usuarios/', 'C', '32'),
(123456879, 'CC', 'Johan Stiven ', 'castañeda', 'castanedapaola539@gmail.com', '31941', '97b290acab82d5937fb87a28b06181a3', 'Seguridad', 'Activo', '../Uploads/Usuarios/Plantilla-Foto-Nota.jpg', NULL, NULL),
(321654987, 'PASAPORTE', 'Manuel', 'Turizo', 'turizo@gmailc.om', '316163', 'd1b2cc725d846f0460ff290c60925070', 'Residente', 'Activo', '../Uploads/Usuarios/ma.png', 'g', '101'),
(537837838, 'CC', 'luis', 'eduardo', 'eduardo@gmail.com', '31615', '537837838', '', 'Activo', '../Uploads/Usuarios/2.jfif', NULL, NULL),
(563453783, 'CC', 'miguel', 'lopez', 'lopez@gmail.com', '38464652', '563453783', 'Residente', 'Pendiente', '../Uploads/Usuarios/6.jfif', 'c', '245'),
(2147483647, 'PASAPORTE', 'carlos', 'alberto', 'alberto@gmail.com', '3149848', '37837833453', '', 'Activo', '../Uploads/Usuarios/1.jfif', NULL, NULL);

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
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `foto1` varchar(500) DEFAULT NULL,
  `foto2` varchar(200) DEFAULT NULL,
  `foto3` varchar(200) DEFAULT NULL,
  `foto4` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `vehiculo`
--

INSERT INTO `vehiculo` (`identificacion`, `placa`, `marca`, `referencia`, `modelo`, `fecha`, `foto1`, `foto2`, `foto3`, `foto4`) VALUES
(6456456, 'AIO654', 'chevrolet', 'AVEO', 2010, '2023-09-06 00:00:00', '../Uploads/vehiculos/8.jfif', '../Uploads/vehiculos/9.jfif', '../Uploads/vehiculos/10.jfif', '../Uploads/vehiculos/11.jfif'),
(231, 'eee111', 'nissan', 'explores', 35435, '2023-09-06 00:00:00', '../Uploads/vehiculos/f.jpg', '../Uploads/vehiculos/', '../Uploads/vehiculos/', '../Uploads/vehiculos/'),
(231, 'PPP123', 'chevrolet', 'Vitara', 2008, '2023-10-01 17:13:38', '../Uploads/vehiculos/10-770x578.jpg', '../Uploads/vehiculos/', '../Uploads/vehiculos/', '../Uploads/vehiculos/'),
(354534, 'QRP456', 'mazda', 'CR5', 2023, '2023-09-08 00:00:00', '../Uploads/vehiculos/20.jfif', '../Uploads/vehiculos/21.jfif', '../Uploads/vehiculos/22.jfif', '../Uploads/vehiculos/23.jfif');

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
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `reserva_salon_ibfk_1` (`identificacion`);

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
  MODIFY `id_nov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `paqueteria`
--
ALTER TABLE `paqueteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id_publi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reserva_salon`
--
ALTER TABLE `reserva_salon`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
-- Constraints for table `reserva_salon`
--
ALTER TABLE `reserva_salon`
  ADD CONSTRAINT `reserva_salon_ibfk_1` FOREIGN KEY (`identificacion`) REFERENCES `usuarios` (`identificacion`);

--
-- Constraints for table `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `vehiculo_ibfk_1` FOREIGN KEY (`identificacion`) REFERENCES `usuarios` (`identificacion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
