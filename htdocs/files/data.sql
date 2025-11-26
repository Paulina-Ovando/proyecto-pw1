CREATE DATABASE IF NOT EXISTS crud_app_proyecto;
USE crud_app_proyecto;

CREATE TABLE IF NOT EXISTS admin (
    id_admin INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

INSERT INTO admin (usuario, password)
VALUES ('Admin CRUD', '12345');

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    telefono VARCHAR(10) UNIQUE
);

INSERT INTO usuarios (nombre, email, telefono)
VALUES
    ('Paulina Ovando Sánchez', 'paulina.ovando@email.com', '5551234567'),
    ('Humberto Omar Rodriguez Medina', 'humberto.rodriguez@email.com', '5554447788'),
    ('Samuel Ivan Roman Zarza', 'samuel.roman@email.com', '5559876543'),
    ('Diego Romero Gonzalez', 'diego.romero@email.com', '5552223344');
