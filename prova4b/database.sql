CREATE DATABASE login_database;

USE login_database;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
);
