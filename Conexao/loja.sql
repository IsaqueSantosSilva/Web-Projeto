CREATE SCHEMA IF NOT EXISTS loja;
CREATE TABLE IF NOT EXISTS loja.register(
	id_reg INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	name VARCHAR(255) NOT NULL,
	age INT(255) NOT NULL,
	password VARCHAR(8) NOT NULL,
	c_password VARCHAR(8) NOT NULL

);