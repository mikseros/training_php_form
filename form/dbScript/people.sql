CREATE DATABASE people;
USE people;
CREATE TABLE listing(name VARCHAR(35), surname VARCHAR(35), email VARCHAR(45), password VARCHAR(500), dob date, gender VARCHAR(6), nationality VARCHAR(25), comment VARCHAR(200));
INSERT INTO listing VALUES('DOE', 'John', 'john.doe@cote-azur.cci.com', '123456', '2000-01-04', 'Homme', 'FR', 'Un formateur sadique'),
('SMITH', 'Joe', 'joe.smith@cote-azur.cci.com', '654321', '2002-02-05', 'Homme', 'FR', 'Un autre sadique');
CREATE USER 'xxx'@'localhost' IDENTIFIED BY 'xxx123!';
GRANT INSERT ON listing TO 'xxx'@'localhost';
GRANT SELECT ON listing TO 'xxx'@'localhost';