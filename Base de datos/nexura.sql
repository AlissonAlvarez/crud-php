CREATE DATABASE nexura;

USE nexura;

CREATE TABLE areas (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL
);

CREATE TABLE roles (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL
);

CREATE TABLE empleados (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    sexo CHAR(1) NOT NULL,
    area_id INT(11) NOT NULL,
    boletin INT(11) DEFAULT 0,
    descripcion TEXT NOT NULL,
    FOREIGN KEY (area_id) REFERENCES areas(id)
);

CREATE TABLE empleado_rol (
    empleado_id INT(11) NOT NULL,
    rol_id INT(11) NOT NULL,
    FOREIGN KEY (empleado_id) REFERENCES empleados(id),
    FOREIGN KEY (rol_id) REFERENCES roles(id)
);
