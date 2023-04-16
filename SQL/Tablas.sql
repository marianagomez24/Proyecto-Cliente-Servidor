/*create database gym_capital  */



CREATE TABLE membresias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255),
    precio DECIMAL(10,2),
    descripcion VARCHAR(100)
);


INSERT INTO membresias (nombre, precio, descripcion) VALUES
('Plan gold', 40.00, 'Membresía con acceso a todas las instalaciones y servicios del gimnasio'),
('Plan smart', 35.00, 'Membresía con acceso limitado a algunas instalaciones y servicios del gimnasio'),
('Plan basic', 20.00, 'Membresía con acceso limitado a pocas instalaciones y servicios del gimnasio');

CREATE TABLE usuarios (
  id int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(100) NOT NULL,
  apellido_paterno varchar(100) NOT NULL,
  apellido_materno varchar(100) NOT NULL,
  correo varchar(150) NOT NULL,
  contrasena varchar(100) NOT NULL,
  foto_perfil blob DEFAULT NULL,
  fecha_creacion date DEFAULT NULL,
  membresiaId int(11) DEFAULT NULL,
  PRIMARY KEY (id),
  CONSTRAINT fk_usuarios_membresiasId FOREIGN KEY (membresiaId) REFERENCES membresias (id) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE mensaje (
    Remitente VARCHAR(100) NOT NULL,
    Mail VARCHAR(100) NOT NULL,
    Mensaje VARCHAR(500) NOT NULL
);
CREATE VIEW vista_usuarios AS
SELECT u.nombre, u.apellido_paterno, u.apellido_materno, u.fecha_creacion, m.nombre AS membresia, u.correo
FROM usuarios u
LEFT JOIN membresias m ON u.membresiaId = m.id;
