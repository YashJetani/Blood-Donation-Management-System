CREATE DATABASE IF NOT EXISTS donatetheblood;
USE donatetheblood;

CREATE TABLE IF NOT EXISTS donor (
    id INT(10) NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    city VARCHAR(50) NOT NULL,
    dob DATE NOT NULL,
    contact_no VARCHAR(10) NOT NULL,
    save_life_date VARCHAR(20) DEFAULT NULL,
    password VARCHAR(100) NOT NULL,
    blood_group VARCHAR(5) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS receiver (
    id INT(10) NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    city VARCHAR(50) NOT NULL,
    dob DATE NOT NULL,
    contact_no VARCHAR(10) NOT NULL,
    save_life_date VARCHAR(20) DEFAULT NULL,
    password VARCHAR(100) NOT NULL,
    blood_group VARCHAR(5) NOT NULL,
    PRIMARY KEY (id)
);


-- Add other table definitions here
