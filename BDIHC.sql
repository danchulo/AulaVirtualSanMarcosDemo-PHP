-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.31-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for inthc
CREATE DATABASE IF NOT EXISTS `inthc` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `inthc`;

-- Dumping structure for table inthc.clase
CREATE TABLE IF NOT EXISTS `clase` (
  `idClase` int(11) NOT NULL AUTO_INCREMENT,
  `idCurso` int(11) DEFAULT NULL,
  `semana` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `fecha_subida` date DEFAULT NULL,
  `archivo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idClase`),
  KEY `FK_clase_curso` (`idCurso`),
  CONSTRAINT `FK_clase_curso` FOREIGN KEY (`idCurso`) REFERENCES `curso` (`idCurso`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table inthc.clase: ~2 rows (approximately)
/*!40000 ALTER TABLE `clase` DISABLE KEYS */;
INSERT INTO `clase` (`idClase`, `idCurso`, `semana`, `nombre`, `descripcion`, `fecha_subida`, `archivo`) VALUES
	(1, 1, 1, 'clase1', 'descripcion clase 1', '2018-11-03', 'clase1.pdf'),
	(2, 1, 2, 'clase2', 'descripcion clase 2', '2018-11-03', 'direccion2.pdf'),
	(3, 2, 2, 'clase2', 'descripcion de lenguajes', '2018-11-06', 'clased2');
/*!40000 ALTER TABLE `clase` ENABLE KEYS */;

-- Dumping structure for table inthc.curso
CREATE TABLE IF NOT EXISTS `curso` (
  `idCurso` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `codCurso` varchar(30) DEFAULT NULL,
  `ciclo` int(11) DEFAULT NULL,
  `grupo` int(11) DEFAULT NULL,
  `horasLectivas` int(11) DEFAULT NULL,
  `idProfesor` int(11) DEFAULT NULL,
  PRIMARY KEY (`idCurso`),
  KEY `FK_curso_usuario` (`idProfesor`),
  CONSTRAINT `FK_curso_usuario` FOREIGN KEY (`idProfesor`) REFERENCES `usuario` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table inthc.curso: ~5 rows (approximately)
/*!40000 ALTER TABLE `curso` DISABLE KEYS */;
INSERT INTO `curso` (`idCurso`, `nombre`, `codCurso`, `ciclo`, `grupo`, `horasLectivas`, `idProfesor`) VALUES
	(1, 'Interfaz Hombre Computador', 'int001', 8, 1, 4, 1),
	(2, 'Lenguaje y compiladores', 'len002', 7, 2, 4, 2),
	(3, 'Sistemas Operativos', 'sis003', 6, 3, 4, NULL),
	(4, 'Calidad y prueba de software', 'cal004', 8, 1, 4, NULL),
	(5, 'Computacion Fisica', 'com005', 7, 2, 4, NULL);
/*!40000 ALTER TABLE `curso` ENABLE KEYS */;

-- Dumping structure for table inthc.detalle_curso
CREATE TABLE IF NOT EXISTS `detalle_curso` (
  `idDetalle-curso` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) DEFAULT NULL,
  `idCurso` int(11) DEFAULT NULL,
  PRIMARY KEY (`idDetalle-curso`),
  KEY `FK_detalle_curso_usuario` (`idUsuario`),
  KEY `FK_detalle_curso_curso` (`idCurso`),
  CONSTRAINT `FK_detalle_curso_curso` FOREIGN KEY (`idCurso`) REFERENCES `curso` (`idCurso`),
  CONSTRAINT `FK_detalle_curso_usuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table inthc.detalle_curso: ~4 rows (approximately)
/*!40000 ALTER TABLE `detalle_curso` DISABLE KEYS */;
INSERT INTO `detalle_curso` (`idDetalle-curso`, `idUsuario`, `idCurso`) VALUES
	(1, 1, 1),
	(2, 2, 2),
	(3, 3, 1),
	(4, 3, 2);
/*!40000 ALTER TABLE `detalle_curso` ENABLE KEYS */;

-- Dumping structure for table inthc.tarea
CREATE TABLE IF NOT EXISTS `tarea` (
  `idTarea` int(11) NOT NULL AUTO_INCREMENT,
  `idDetalle_curso` int(11) NOT NULL DEFAULT '0',
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `archivo` varchar(50) DEFAULT NULL,
  `fecha_subida` date DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `fecha_limite` date DEFAULT NULL,
  PRIMARY KEY (`idTarea`),
  KEY `FK_tarea_detalle_curso` (`idDetalle_curso`),
  CONSTRAINT `FK_tarea_detalle_curso` FOREIGN KEY (`idDetalle_curso`) REFERENCES `detalle_curso` (`idDetalle-curso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table inthc.tarea: ~0 rows (approximately)
/*!40000 ALTER TABLE `tarea` DISABLE KEYS */;
/*!40000 ALTER TABLE `tarea` ENABLE KEYS */;

-- Dumping structure for table inthc.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) DEFAULT NULL,
  `apellidos` varchar(40) DEFAULT NULL,
  `codigo` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table inthc.usuario: ~3 rows (approximately)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`idUsuario`, `nombre`, `apellidos`, `codigo`, `correo`, `telefono`, `foto`, `tipo`, `password`) VALUES
	(1, 'profesor1', 'Profesor1', '000001', 'profesor1@unmsm.edu.pe', 999999001, 'delgadillo.png', 'profesor', '1111'),
	(2, 'profesor2', 'Profesor2', '000002', 'profesor2@unmsm.edu.pe', 999999002, 'pariona.png', 'profesor', '2222'),
	(3, 'Martin', 'Luque', '100001', 'alumno1@unmsm.edu.pe', 999999003, 'martinluque.png', 'alumno', '1111');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
