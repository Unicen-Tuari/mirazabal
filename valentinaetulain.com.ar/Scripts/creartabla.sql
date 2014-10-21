DROP TABLE IF EXISTS imagen;

CREATE TABLE imagen (  
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,  
titulo VARCHAR( 50 ) NOT NULL ,  
descripcion TEXT NOT NULL ,  
archivo VARCHAR( 100 ) NOT NULL  
);


INSERT INTO imagen (titulo, descripcion, archivo) VALUES ('Paisaje 1', 'Dia de playa nublado', 'imagenes/1.jpg');
INSERT INTO imagen (titulo, descripcion, archivo) VALUES ('Paisaje 2', 'Sierra en invierno', 'imagenes/2.jpg');
INSERT INTO imagen (titulo, descripcion, archivo) VALUES ('Paisaje 3', 'Luna llena', 'imagenes/3.jpg');
INSERT INTO imagen (titulo, descripcion, archivo) VALUES ('Mariposa', 'Mariposa en una rama', 'imagenes/4.jpg');
INSERT INTO imagen (titulo, descripcion, archivo) VALUES ('Paisaje', 'Dia de campo', 'imagenes/5.jpg');

DROP TABLE IF EXISTS eventos;

CREATE TABLE eventos (  
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,  
administrador VARCHAR( 50 ) NOT NULL,
pais  VARCHAR( 50 ) NOT NULL,
localidad VARCHAR( 50 ) NOT NULL,
fecha DATE NOT NULL,
hora int NOT NULL,
descripcion VARCHAR( 150 ) NOT NULL
);

INSERT INTO eventos (administrador, pais, localidad, fecha, hora, descripcion) VALUES ('Administrador', 'Argentina', 'Tandil', '2014-07-12', '19', 'Argentina campeon);

INSERT INTO eventos (administrador, pais, localidad, fecha, hora, descripcion) VALUES ('Administrador', 'España', ' Pamplona', '2014-07-3', '19', 'Casamiento');

INSERT INTO eventos (administrador, pais, localidad, fecha, hora, descripcion) VALUES ('Administrador', 'Italia', 'Minturno', '2014-08-3', '19', 'Cumpleaños de 15');

INSERT INTO eventos (administrador, pais, localidad, fecha, hora, descripcion) VALUES ('Administrador', 'Francia', 'Aviñon', '2014-09-3', '19', 'Desfile');
