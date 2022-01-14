-- MySQL Script generated by MySQL Workbench
-- Fri Jan 14 11:13:11 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema people
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema people
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `people` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci ;
USE `people` ;

-- -----------------------------------------------------
-- Table `people`.`listing`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `people`.`listing` (
  `name` VARCHAR(35) NULL DEFAULT NULL,
  `surname` VARCHAR(35) NULL DEFAULT NULL,
  `email` VARCHAR(45) NULL DEFAULT NULL,
  `password` VARCHAR(500) NULL DEFAULT NULL,
  `dob` DATE NULL DEFAULT NULL,
  `gender` VARCHAR(6) NULL DEFAULT NULL,
  `nationality` VARCHAR(25) NULL DEFAULT NULL,
  `comment` VARCHAR(200) NULL DEFAULT NULL)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
