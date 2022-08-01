DROP DATABASE IF EXISTS cadastro;

CREATE DATABASE cadastro CHARACTER SET utf8 COLLATE utf8_general_ci;

USE cadastro;

CREATE TABLE usuarios (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    data TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    avatar VARCHAR(255) NOT NULL,
    nascimento DATE NOT NULL,
    bio TEXT,
    tipo ENUM('admin','moderador', 'user') DEFAULT 'user',
    status ENUM('on', 'off', 'deleted') DEFAULT 'on'
);


