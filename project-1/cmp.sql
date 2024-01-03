-- Tables ---------------------------------------------------------------

CREATE TABLE `moonhee42_adv_web`.`models` (`modelID` INT NOT NULL AUTO_INCREMENT , `modelName` VARCHAR(256) NOT NULL , `partID` INT NOT NULL , `brandID` INT NOT NULL , 
`compatibilityID` INT NOT NULL , `price` INT NOT NULL , `stock` INT NOT NULL , PRIMARY KEY (`modelID`)) ENGINE = InnoDB;
INSERT INTO `models` (`modelID`, `modelName`, `partID`, `brandID`, `compatibilityID`, `price`, `stock`) VALUES (NULL, 'iCore', '1', '1', '1', '489', '45'), 
(NULL, 'Ryzen', '1', '2', '1', '288', '55'), (NULL, 'DDR4-C', '2', '3', '2', '110', '80'), (NULL, 'DDR4-K', '2', '4', '2', '88', '100'), 
(NULL, 'EVO-PCIe', '3', '5', '2', '120', '65'), (NULL, 'BarraCuda', '4', '6', '2', '75', '120'), (NULL, 'Prime', '5', '7', '1', '199', '45'), 
(NULL, 'B550', '5', '8', '1', '149', '35'), (NULL, 'GeForce', '6', '9', '2', '499', '60'), (NULL, 'Radeon', '6', '2', '2', '358', '50'), 
(NULL, '100-N1', '7', '10', '2', '109', '20'), (NULL, 'RMX', '7', '3', '2', '139', '50'), (NULL, 'Case-N', '8', '11', '2', '109', '40'), 
(NULL, 'Case-C', '8', '3', '2', '137', '25'), (NULL, 'Redux', '9', '12', '2', '62', '40'), (NULL, 'Hyper-212', '9', '13', '2', '59', '60'), 
(NULL, '27inch-dell', '10', '14', '2', '249', '80'), (NULL, '27inch-lg', '10', '15', '2', '299', '60'), (NULL, 'Wireless-logit', '11', '16', '2', '69', '90'), 
(NULL, 'BlackWidow', '11', '17', '2', '100', '70'), (NULL, 'Mouse-logit', '12', '16', '2', '54', '120'), (NULL, 'Mouse-hp', '12', '18', '2', '42', '70');


CREATE TABLE `moonhee42_adv_web`.`parts` (`partID` INT NOT NULL AUTO_INCREMENT , `partName` VARCHAR(256) NOT NULL , PRIMARY KEY (`partID`)) ENGINE = InnoDB;
INSERT INTO `parts` (`partID`, `partName`) VALUES (NULL, 'CPU'), (NULL, 'RAM'), (NULL, 'Storage(SSD)'), (NULL, 'Storage(HDD)'), (NULL, 'Motherboard'), (NULL, 'GPU'), 
(NULL, 'PSU'), (NULL, 'Case'), (NULL, 'Cooler'), (NULL, 'Monitor'), (NULL, 'Keyboard'), (NULL, 'Mouse');


CREATE TABLE `moonhee42_adv_web`.`brands` (`brandID` INT NOT NULL AUTO_INCREMENT , `brandName` VARCHAR(256) NOT NULL , PRIMARY KEY (`brandID`)) ENGINE = InnoDB;
INSERT INTO `brands` (`brandID`, `brandName`) VALUES (NULL, 'Intel'), (NULL, 'AMD'), (NULL, 'Corsair'), (NULL, 'Kingston'), (NULL, 'Samsung'), (NULL, 'Seagate'), 
(NULL, 'ASUS'), (NULL, 'MSI'), (NULL, 'NVIDIA'), (NULL, 'EVGA'), (NULL, 'NZXT'), (NULL, 'Noctua'), (NULL, 'Cooler Master'), (NULL, 'Dell'), (NULL, 'LG'), (NULL, 'Logitech'), 
(NULL, 'Razer'), (NULL, 'HP');


CREATE TABLE `moonhee42_adv_web`.`compatibility` (`compatibilityID` INT NOT NULL AUTO_INCREMENT , `compatibilityName` VARCHAR(256) NOT NULL , PRIMARY KEY (`compatibilityID`)) ENGINE = InnoDB;
INSERT INTO `compatibility` (`compatibilityID`, `compatibilityName`) VALUES (NULL, 'Intel & AMD'), (NULL, 'Universal');


-- Foreign Keys ---------------------------------------------------------

ALTER TABLE `models` ADD CONSTRAINT `partID` FOREIGN KEY (`partID`) REFERENCES `parts`(`partID`) ON DELETE RESTRICT ON UPDATE RESTRICT; 
ALTER TABLE `models` ADD CONSTRAINT `brandID` FOREIGN KEY (`brandID`) REFERENCES `brands`(`brandID`) ON DELETE RESTRICT ON UPDATE RESTRICT; 
ALTER TABLE `models` ADD CONSTRAINT `compatibilityID` FOREIGN KEY (`compatibilityID`) REFERENCES `compatibility`(`compatibilityID`) ON DELETE RESTRICT ON UPDATE RESTRICT;


-- Set operations (SQL) -------------------------------------------------------

SELECT * FROM `models` ORDER BY `stock` DESC;
SELECT * FROM `models` WHERE `price` > 100 ORDER BY `price` DESC;
SELECT * FROM `models` NATURAL JOIN `brands` NATURAL JOIN `parts` NATURAL JOIN `compatibility`;
SELECT * FROM models LEFT OUTER JOIN parts ON models.modelID = parts.partID;
SELECT * FROM `models` WHERE price < 1000 INTERSECT SELECT * FROM `models` WHERE price > 100;
SELECT * FROM `models` WHERE price < 1000 EXCEPT SELECT * FROM `models` WHERE price > 100;
