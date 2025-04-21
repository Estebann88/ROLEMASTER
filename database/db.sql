-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2024 a las 05:56:25
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rolemaster`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion_instituciones`
--

CREATE TABLE `configuracion_instituciones` (
  `id_config_institucion` int(11) NOT NULL,
  `nombre_institucion` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `celular` varchar(100) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `estado` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `configuracion_instituciones`
--

INSERT INTO `configuracion_instituciones` (`id_config_institucion`, `nombre_institucion`, `logo`, `direccion`, `telefono`, `celular`, `correo`, `fyh_creacion`, `fyh_actualizacion`, `estado`) VALUES
(2, 'CORPORACION UNIVERSITARIA BARRANQUILLA', '2024-09-23-18-48-56Imagen de WhatsApp 2024-06-01 a las 15.40.05_6c588690.jpg', 'clle43 #26B-30', '3623510', '329042924', 'cub2024@inst.edu.co', '2024-09-23 18:48:56', NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestiones`
--

CREATE TABLE gestiones (

  id_gestion      INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  gestion         VARCHAR (255) NOT NULL,

  fyh_creacion   DATETIME NULL,
  fyh_actualizacion DATETIME NULL,
  estado        VARCHAR (11)

)ENGINE=InnoDB;
INSERT INTO gestiones (gestion,fyh_creacion,estado)
VALUES ('GESTIÓN 2024','2024-11-20 20:29:10','1');

CREATE TABLE niveles (

  id_nivel       INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  gestion_id     INT (11) NOT NULL,
  nivel          VARCHAR (255) NOT NULL,
  turno          VARCHAR (255) NOT NULL,

  fyh_creacion   DATETIME NULL,
  fyh_actualizacion DATETIME NULL,
  estado        VARCHAR (11),

  FOREIGN KEY (gestion_id) REFERENCES gestiones (id_gestion) on delete no action on update cascade

)ENGINE=InnoDB;
INSERT INTO niveles (gestion_id,nivel,turno,fyh_creacion,estado)
VALUES ('1','TECNICO','MAÑANA','2024-12-28 20:29:10','1');

CREATE TABLE `grados` (
  id_grados int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  nivel_id int(11) NOT NULL,
  curso varchar(255) NOT NULL,
  grupo varchar(255) NOT NULL,
  fyh_creacion datetime DEFAULT NULL,
  fyh_actualizacion datetime DEFAULT NULL,
  estado varchar(11) DEFAULT NULL,
 FOREIGN KEY (nivel_id) REFERENCES niveles (id_nivel) ON DELETE NO ACTION ON UPDATE CASCADE
 
 ) ENGINE=InnoDB; 
INSERT INTO grados (nivel_id, curso, grupo, fyh_creacion, estado)
VALUES ('1', 'TECNOLOGO - 1', 'A', '2024-11-20 16:26:10', '1');





-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` varchar(255) NOT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `estado` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre_rol`, `fyh_creacion`, `fyh_actualizacion`, `estado`) VALUES
(1, 'ADMINISTRADOR', '2024-01-03 16:20:20', NULL, '1'),
(2, 'DIRECTOR ACADÉMICO', '2024-01-03 16:20:20', NULL, '1'),
(3, 'DIRECTOR ADMINISTRATIVO', '2024-01-03 16:20:20', NULL, '1'),
(4, 'CONTADOR', '2024-01-03 16:20:20', NULL, '1'),
(5, 'SECRETARIA', '2024-01-03 16:20:20', NULL, '1'),
(7, 'ESTUDIANTE', '2024-09-23 20:50:33', NULL, '1'),
(8, 'PROFESOR', '2024-09-23 20:56:57', NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `estado` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `rol_id`, `email`, `password`, `fyh_creacion`, `fyh_actualizacion`, `estado`) VALUES
(1, 'Juan Esteban', 1, 'juanescaro88@gmail.com', '$2y$10$3ibS4GuS/eAmT1jFd8tfKu/d2NNaWRnxzZQCWRah0bYI2K7A3tcvi', '2024-09-22 20:40:12', NULL, '1'),
(3, 'Hernesto Valbuena', 4, 'hernval@gmail.com', '$2y$10$Aej5qjUSXyGDKmuMmrsWlOhdVe.EU7yrN379FX1Ltkify0e5Zb2u.', '2024-09-23 19:32:33', NULL, '1'),
(4, 'Sheylin Meza', 1, 'shelopato26@gmail.com', '$2y$10$rySnG1WlKI0uZYjIKjWeBu7DGRrSwEBIqUgXpWXQKwrjvPuc0yFWy', '2024-09-23 18:41:37', NULL, '1'),
(5, 'Leonardo Palacio', 1, 'leopalacio@gmail.com', '$2y$10$Kmmi.ws8TdpNNJb5IqYQkuCZdA9ICwJRwAOhoKZPZDghrNi5w.j7.', '2024-09-23 22:10:54', '2024-09-23 22:11:12', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `configuracion_instituciones`
--
ALTER TABLE `configuracion_instituciones`
  ADD PRIMARY KEY (`id_config_institucion`);

--
-- Indices de la tabla `gestiones`
--
ALTER TABLE `gestiones`
  ADD PRIMARY KEY (`id_gestion`);

--
-- Indices de la tabla `niveles`
--
ALTER TABLE `niveles`
  ADD PRIMARY KEY (`id_nivel`),
  ADD KEY `gestion_id` (`gestion_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`),
  ADD UNIQUE KEY `nombre_rol` (`nombre_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `rol_id` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `configuracion_instituciones`
--
ALTER TABLE `configuracion_instituciones`
  MODIFY `id_config_institucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `gestiones`
--
ALTER TABLE `gestiones`
  MODIFY `id_gestion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `niveles`
--
ALTER TABLE `niveles`
  MODIFY `id_nivel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `niveles`
--
ALTER TABLE `niveles`
  ADD CONSTRAINT `niveles_ibfk_1` FOREIGN KEY (`gestion_id`) REFERENCES `gestiones` (`id_gestion`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id_rol`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
