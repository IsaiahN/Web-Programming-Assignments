CREATE TABLE `Purchases` (
  `Purchase No` VARCHAR(40) NOT NULL,
  `Supplier ID` VARCHAR(45) NOT NULL,
  `Date` DATE NULL,
  `Quantity` INT NULL DEFAULT 0,
  `Description` TEXT(255) NULL,
  `Price` DECIMAL(10,2) NULL DEFAULT 0.00,
  PRIMARY KEY (`Purchase No`));


INSERT INTO `Purchases`
(`Purchase No`,
`Supplier ID`,
`Date`,
`Quantity`,
`Description`,
`Price`)
VALUES
("P100", "S101", '2010-03-01', 100, "T-shirts Blue XL", 4.52),
("P101", "S102", '2010-03-01', 30,  "T-shirts Red L", 3.44),
("P102", "S103", '2010-03-04', 45,  "Assorted Band Logos", 0.60),
("P103", "S101", '2010-03-06', 200, "T-shirts Black L", 4.70),
("P104", "S101", '2010-03-07', 150, "T-shirts Black XL", 4.60),
("P105", "S104", '2010-03-10', 190, "T-shirts Blue L Longsleeved", 5.60),
("P106", "S101", '2010-03-15', 60,  "T-shirts Blue XL", 4.52),
("P107", "S103", '2010-03-21', 15,  "Assorted Band Logos", 0.60),
("P108", "S101", '2010-03-22', 55,  "T-shirts Red L", 3.70),
("P109", "S105", '2010-03-22', 50,  "Assorted Band Logos", 0.70),
("P110", "S102", '2010-03-22', 40,  "T-shirts Blue L Longsleeved", 5.30),
("P111", "S101", '2010-03-25', 140, "T-shirts Blue S", 4.12),
("P112", "S102", '2010-03-27', 10,  "T-shirts Red XL Longsleeved", 5.10),
("P113", "S101", '2010-03-28', 15,  "Assorted Band Logos", 0.80),
("P114", "S102", '2010-03-30', 25,  "T-shirts Blue XL", 4.60);