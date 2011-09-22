SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `_kickboxing` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `_kickboxing` ;

-- -----------------------------------------------------
-- Table `_kickboxing`.`event`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `_kickboxing`.`event` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL ,
  `description` LONGTEXT NULL ,
  `start` DATE NULL ,
  `end` DATE NULL ,
  `register_by` DATE NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `_kickboxing`.`team_administrator`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `_kickboxing`.`team_administrator` (
  `id` INT NOT NULL ,
  `event_id` INT NOT NULL ,
  `first_name` VARCHAR(45) NULL ,
  `last_name` VARCHAR(45) NULL ,
  `username` VARCHAR(45) NULL ,
  `password` VARCHAR(45) NULL ,
  `email` VARCHAR(45) NULL ,
  `team_name` VARCHAR(64) NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_team_administrator_event` (`event_id` ASC) ,
  CONSTRAINT `fk_team_administrator_event`
    FOREIGN KEY (`event_id` )
    REFERENCES `_kickboxing`.`event` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `_kickboxing`.`discipline`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `_kickboxing`.`discipline` (
  `id` INT NOT NULL ,
  `event_id` INT NOT NULL ,
  `name` VARCHAR(45) NULL ,
  `sex` ENUM('Male','Female') NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_disipline_event1` (`event_id` ASC) ,
  CONSTRAINT `fk_disipline_event1`
    FOREIGN KEY (`event_id` )
    REFERENCES `_kickboxing`.`event` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `_kickboxing`.`division`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `_kickboxing`.`division` (
  `id` INT NOT NULL ,
  `discipline_id` INT NOT NULL ,
  `category` VARCHAR(45) NULL ,
  `weight` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`, `discipline_id`) ,
  INDEX `fk_division_discipline1` (`discipline_id` ASC) ,
  CONSTRAINT `fk_division_discipline1`
    FOREIGN KEY (`discipline_id` )
    REFERENCES `_kickboxing`.`discipline` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `_kickboxing`.`type`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `_kickboxing`.`type` (
  `id` INT NOT NULL ,
  `name` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `_kickboxing`.`attendee`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `_kickboxing`.`attendee` (
  `id` INT NOT NULL ,
  `team_administrator_id` INT NOT NULL ,
  `division_id` INT NOT NULL ,
  `type_id` INT NOT NULL ,
  `first_name` VARCHAR(45) NULL ,
  `last_name` VARCHAR(45) NULL ,
  `accomodation` VARCHAR(45) NULL ,
  `sharing_with` VARCHAR(45) NULL ,
  `flight_datetime` DATETIME NULL ,
  `flight_number` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_attendee_team_administrator1` (`team_administrator_id` ASC) ,
  INDEX `fk_attendee_division1` (`division_id` ASC) ,
  INDEX `fk_attendee_type1` (`type_id` ASC) ,
  CONSTRAINT `fk_attendee_team_administrator1`
    FOREIGN KEY (`team_administrator_id` )
    REFERENCES `_kickboxing`.`team_administrator` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_attendee_division1`
    FOREIGN KEY (`division_id` )
    REFERENCES `_kickboxing`.`division` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_attendee_type1`
    FOREIGN KEY (`type_id` )
    REFERENCES `_kickboxing`.`type` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

