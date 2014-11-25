DROP TABLE IF EXISTS imagen;

CREATE TABLE imagen (  
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,  
titulo VARCHAR( 50 ) NOT NULL ,
categoria VARCHAR( 50 ) NOT NULL ,    
descripcion TEXT NOT NULL ,  
costo NUMERIC NOT NULL ,  
archivo VARCHAR( 100 ) NOT NULL  
);


INSERT INTO imagen (titulo, categoria, descripcion, costo, archivo) VALUES ('Paisaje 1', 'Paisajes', 'Dia de playa nublado', '2.000', 'imagenes/1.jpg');
INSERT INTO imagen (titulo, categoria, descripcion, costo,  archivo) VALUES ('Paisaje 2', 'Paisajes', 'Sierra en invierno', '2.000', 'imagenes/2.jpg');
INSERT INTO imagen (titulo, categoria, descripcion, costo, archivo) VALUES ('Paisaje 3', 'Paisajes', 'Luna llena', '2.000', 'imagenes/3.jpg');
INSERT INTO imagen (titulo, categoria, descripcion, costo,  archivo) VALUES ('Mariposa', 'Animales', 'Mariposa en una rama', '2.000', 'imagenes/4.jpg');
INSERT INTO imagen (titulo, categoria, descripcion, costo,  archivo)VALUES ('Paisaje', 'Paisajes', 'Dia de campo', '2.000', 'imagenes/5.jpg');

DROP TABLE IF EXISTS eventos;

CREATE TABLE evento (  
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,  
administrador VARCHAR( 50 ) NOT NULL,
pais  VARCHAR( 50 ) NOT NULL,
localidad VARCHAR( 50 ) NOT NULL,
fecha DATE NOT NULL,
hora int NOT NULL,
descripcion VARCHAR( 150 ) NOT NULL
);

INSERT INTO evento (administrador, pais, localidad, fecha, hora, descripcion) VALUES ('Administrador', 'Argentina', 'Tandil', '2014-07-12', '19', 'Argentina campeon');

INSERT INTO evento (administrador, pais, localidad, fecha, hora, descripcion) VALUES ('Administrador', 'Espa&ntildea', ' Pamplona', '2014-07-3', '19', 'Casamiento');

INSERT INTO evento (administrador, pais, localidad, fecha, hora, descripcion) VALUES ('Administrador', 'Italia', 'Minturno', '2014-08-3', '19', 'Cumplea&ntildeos de 15');

INSERT INTO evento (administrador, pais, localidad, fecha, hora, descripcion) VALUES ('Administrador', 'Francia', 'Avi&ntildeon', '2014-09-3', '19', 'Desfile');

DROP TABLE IF EXISTS USUARI

CREATE TABLE usuario(
nombre varchar(50) NOT NULL,
email varchar(100) NOT NULL,
pass varchar(25) NOT NULL 
);

INSERT INTO usuario (nombre, mail, pass) VALUES ('Matias', 'mirazabal@gmail.com', 'mira534');


CREATE TABLE comentarios (  
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,  
nombre VARCHAR( 50 ) NOT NULL,
email  VARCHAR( 50 ) NOT NULL,
mensaje VARCHAR( 500 ) NOT NULL,
);





CREATE TABLE usuario (
	id INT NOT NULL AUTO_INCREMENT,
	nombre	 VARCHAR(50) NOT NULL,
	mail    VARCHAR(50)     NOT NULL,
	pass    VARCHAR(50)     NOT NULL,
	CONSTRAINT PK_USUARIO PRIMARY KEY (id)
)ENGINE=InnoDB  DEFAULT CHARSET="utf8" AUTO_INCREMENT=1;


CREATE TABLE compras (
	idc       INT(10) NOT NULL AUTO_INCREMENT,
id INT(10) NOT NULL,
	email 	   VARCHAR (50) NOT NULL,
	idfoto		   INT NOT NULL,
	cant			   INT(10) NOT NULL,
	tarjeta 	   VARCHAR (50) NOT NULL,

	CONSTRAINT PK_COMPRAS PRIMARY KEY (idc),
	CONSTRAINT FK_COMPRAS_USUARIO FOREIGN KEY (id) 
REFERENCES usuario (id) ON DELETE CASCADE

)ENGINE=InnoDB  DEFAULT CHARSET="utf8" AUTO_INCREMENT=1;




INSERT INTO `imagenes`.`compras` (`idc`, `id`, `email`, `idfoto`, `cant`, `tarjeta`) VALUES (NULL, '1', 'lalala', '1', '1', 'dckldshvbilsd');

SELECT * 
FROM compras c
JOIN usuario u ON(u.id = c.id)
