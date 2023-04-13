/*create database gym_capital  */


CREATE TABLE usuarios (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    apellido_paterno VARCHAR(100) NOT NULL,
    apellido_materno VARCHAR(100) NOT NULL,
    correo VARCHAR(150) NOT NULL,
    contrasena VARCHAR(100) NOT NULL,
    foto_perfil BLOB,
    fecha_creacion DATE
);
CREATE TABLE mensaje (
    Remitente VARCHAR(100) NOT NULL,
    Mail VARCHAR(100) NOT NULL,
    Mensaje VARCHAR(500) NOT NULL
);
