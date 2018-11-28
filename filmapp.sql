CREATE USER 'filmadmin'@'%' IDENTIFIED BY 'filmadmin';

CREATE USER 'filmadmin'@'localhost' IDENTIFIED BY 'filmadmin';

GRANT ALL ON *.* TO '@user'@'%';

FLUSH PRIVILEGES;

CREATE DATABASE films;

USE films;

CREATE TABLE films (id INT NOT NULL AUTO_INCREMENT, name VARCHAR(255),year INT(11), format VARCHAR(255), actors VARCHAR(255), PRIMARY KEY(id));
