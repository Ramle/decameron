-- MySQL Script generated by MySQL Workbench
-- 07/01/19 10:56:14
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema decameron
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `decameron` ;

-- -----------------------------------------------------
-- Schema decameron
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `decameron` DEFAULT CHARACTER SET utf8 ;
USE `decameron` ;

-- -----------------------------------------------------
-- Table `hoteles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `hoteles` ;

CREATE TABLE IF NOT EXISTS `hoteles` (
  `hot_id` INT NOT NULL AUTO_INCREMENT,
  `hot_fecha_registro` TIMESTAMP NOT NULL,
  `hot_nit` INT(9) NOT NULL,
  `hot_nombre` VARCHAR(100) NOT NULL,
  `hot_ciudad` VARCHAR(80) NOT NULL,
  `hot_direccion` VARCHAR(80) NOT NULL,
  `hot_cantidad_hab` INT(12) NOT NULL,
  PRIMARY KEY (`hot_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `acomodacion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `acomodacion` ;

CREATE TABLE IF NOT EXISTS `acomodacion` (
  `ac_id` INT NOT NULL AUTO_INCREMENT,
  `ac_descripcion` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`ac_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tipo_habitacion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `tipo_habitacion` ;

CREATE TABLE IF NOT EXISTS `tipo_habitacion` (
  `th_id` INT NOT NULL AUTO_INCREMENT,
  `th_descripcion` VARCHAR(60) NOT NULL,
  `ac_id` INT NOT NULL,
  PRIMARY KEY (`th_id`),
  CONSTRAINT `fk_tipo_habitacion_acomodacion`
    FOREIGN KEY (`ac_id`)
    REFERENCES `acomodacion` (`ac_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `asignacion_habitacion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `asignacion_habitacion` ;

CREATE TABLE IF NOT EXISTS `asignacion_habitacion` (
  `as_id` INT NOT NULL AUTO_INCREMENT,
  `as_fecha_asignacion` TIMESTAMP NOT NULL,
  `hot_id` INT NOT NULL,
  `th_id` INT NOT NULL,
  PRIMARY KEY (`as_id`),
  CONSTRAINT `fk_asignacion_habitacion_hoteles1`
    FOREIGN KEY (`hot_id`)
    REFERENCES `hoteles` (`hot_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_asignacion_habitacion_tipo_habitacion1`
    FOREIGN KEY (`th_id`)
    REFERENCES `tipo_habitacion` (`th_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `acomodacion`
-- -----------------------------------------------------
START TRANSACTION;
USE `decameron`;
INSERT INTO `acomodacion` (`ac_id`, `ac_descripcion`) VALUES (1, 'Sencillo');
INSERT INTO `acomodacion` (`ac_id`, `ac_descripcion`) VALUES (2, 'Doble');
INSERT INTO `acomodacion` (`ac_id`, `ac_descripcion`) VALUES (3, 'Triple');
INSERT INTO `acomodacion` (`ac_id`, `ac_descripcion`) VALUES (4, 'Cuadruple');

COMMIT;

