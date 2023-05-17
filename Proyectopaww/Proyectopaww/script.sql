CREATE DATABASE pawarroyo;
use GuauMiau;
create table Usuarios(
    Id int PRIMARY key AUTO_INCREMENT,
    Nombre varchar(120),
    Correo varchar(120),
    Clave varchar(120),
);


INSERT INTO Usuarios (Nombre, Correo, Clave)
VALUES ('Gustavo', 'gugamayoral@gmail.com', '12345');

CREATE TABLE usuarios_administradores (
   id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
   nombre VARCHAR(50) NOT NULL,
   correo VARCHAR(100) NOT NULL UNIQUE,
   contrasena VARCHAR(255) NOT NULL,
   fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO usuarios_administradores (nombre, correo, contrasena) 
VALUES ('Gustavo', 'gugamayoral@gmail.com', '12345');