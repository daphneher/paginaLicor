CREATE DATABASE vino
    DEFAULT CHARACTER SET utf8;

USE vino;

CREATE TABLE tabla_banner (
	id INT NOT NULL UNIQUE AUTO_INCREMENT,
	nombre VARCHAR(50) NOT NULL,
	imagen LONGBLOB NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE tabla_vino_tinto (
	id INT NOT NULL UNIQUE AUTO_INCREMENT,
	nombre VARCHAR(50) NOT NULL,
	imagen LONGBLOB NOT NULL,
	descripcion VARCHAR(500) NOT NULL,
	precio VARCHAR(20) NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE tabla_vino_blanco (
	id INT NOT NULL UNIQUE AUTO_INCREMENT,
	nombre VARCHAR(50) NOT NULL,
	imagen LONGBLOB NOT NULL,
	descripcion VARCHAR(500) NOT NULL,
	precio VARCHAR(20) NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE tabla_vino_rosa (
	id INT NOT NULL UNIQUE AUTO_INCREMENT,
	nombre VARCHAR(50) NOT NULL,
	imagen LONGBLOB NOT NULL,
	descripcion VARCHAR(500) NOT NULL,
	precio VARCHAR(20) NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE tabla_blog (
	id INT NOT NULL UNIQUE AUTO_INCREMENT,
	fecha DATETIME NOT NULL,
	autor VARCHAR(50) NOT NULL,
	categoria VARCHAR(50) NOT NULL,
	titulo VARCHAR(150) NOT NULL,
	img_presentacion LONGBLOB NOT NULL,
	presentacion VARCHAR(250) NOT NULL,
	texto1 MEDIUMTEXT NOT NULL,
	img1 LONGBLOB NOT NULL,
	texto2 MEDIUMTEXT,
	img2 LONGBLOB,
	PRIMARY KEY(id)
);