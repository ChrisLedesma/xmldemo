CREATE DATABASE db_1820521;

USE db_1820521;

CREATE TABLE `tbl_pet` (
	`pet_id` INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
	`pet_name` VARCHAR(180) NOT NULL DEFAULT '',
   `pet_breed` VARCHAR(180) NOT NULL DEFAULT '',
	`pet_age` INT(2) NOT NULL DEFAULT '0',
	`pet_color` VARCHAR(180) NOT NULL DEFAULT '',
	PRIMARY KEY (`pet_id`)
)
COLLATE='latin1_swedish_ci'
ENGINE=MyISAM
AUTO_INCREMENT=10000
;

INSERT INTO tbl_pet(pet_name, pet_breed, pet_age, pet_color) VALUES("Mochi", "Dog", "1", "Black and White");
INSERT INTO tbl_pet(pet_name, pet_breed, pet_age, pet_color) VALUES("Blitz", "Dog", "1", "Black");
INSERT INTO tbl_pet(pet_name, pet_breed, pet_age, pet_color) VALUES("Dexter", "Dog", "2", "Black and White");
INSERT INTO tbl_pet(pet_name, pet_breed, pet_age, pet_color) VALUES("Babbit", "Rabbit", "1", "Black");
INSERT INTO tbl_pet(pet_name, pet_breed, pet_age, pet_color) VALUES("Awa", "Cat", "1", "Pink");
INSERT INTO tbl_pet(pet_name, pet_breed, pet_age, pet_color) VALUES("Tet", "Dog", "1", "Yellow");

