DROP DATABASE IF EXISTS eggProject;

create database eggProject character set UTF8mb4 collate utf8mb4_bin;

USE eggProject;

CREATE TABLE score
(
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
name1 VARCHAR(100) NOT NULL,
name2 VARCHAR(100) NOT NULL,
score1 INT NOT NULL,
score2 INT NOT NULL
);