-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 16-09-2020 a las 16:37:17
-- Versión del servidor: 10.5.5-MariaDB-1:10.5.5+maria~focal
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coches`
--

CREATE TABLE `coches` (
  `matricula` VARCHAR(7) NOT NULL,
  `marca` text NOT NULL,
  `color` text NOT NULL,
  `kilometros` int NOT NULL,`fechaCompra` DATE NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `usuarios` (
  `NombreApellidos` TEXT NOT NULL,
  `DNI` VARCHAR(9) NOT NULL,
  `telefono` VARCHAR(9) NOT NULL,
  `fechaNcto` DATE NOT NULL,
  `email` VARCHAR(55) NOT NULL,
  `nombreUsuario` VARCHAR(25)  NOT NULL,
  `contra`  VARCHAR(50) NOT NULL,
  CONSTRAINT chk_dni CHECK (DNI REGEXP '^[0-9]{8}-[A-Z]$' AND 
                           SUBSTRING('TRWAGMYFPDXBNJZSQVHLCKE', 
                                     MOD(CONVERT(SUBSTRING(DNI, 1, 8), UNSIGNED), 23) + 1, 1) = SUBSTRING(DNI, 10, 1)),
  CONSTRAINT chk_telefono CHECK (telefono REGEXP '^[0-9]{9}$'),
  CONSTRAINT chk_fechaNcto CHECK (fechaNcto REGEXP '^[0-9]{4}-[0-9]{2}-[0-9]{2}$'),
  CONSTRAINT chk_email CHECK (email REGEXP '^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Z|a-z]{2,}$')
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `coches` (`matricula`, `marca`, `color`, `kilometros`,`fechaCompra`) VALUES
('1234BBC', 'kia miraz 5.7L V8', 'azul', 123454333,'1999-08-23'),
('3563DBF', 'seat grandes 1.2 TSI', 'negro', 199933,'2021-03-02');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `coches`
--
ALTER TABLE `coches` ADD PRIMARY KEY (`matricula`);

ALTER TABLE `usuarios` ADD PRIMARY KEY (`DNI`), ADD UNIQUE KEY (`nombreUsuario`);
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
