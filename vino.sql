
    


CREATE TABLE tabla_banner (
	id INT NOT NULL UNIQUE AUTO_INCREMENT,
	nombre VARCHAR(50) NOT NULL,
	imagen LONGBLOB NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE tabla_productos (
	id INT NOT NULL UNIQUE AUTO_INCREMENT,
	nombre VARCHAR(100) NOT NULL,
	imagen LONGBLOB NOT NULL,
	precio VARCHAR(50) NOT NULL,
	descripcion VARCHAR(255) NOT NULL,
	categoria VARCHAR(50) NOT NULL,
	pais VARCHAR(50) NOT NULL,
	cepa VARCHAR(50) NOT NULL,
	prioridad INT NOT NULL,
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