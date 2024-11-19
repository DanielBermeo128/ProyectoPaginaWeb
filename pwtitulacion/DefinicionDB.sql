CREATE DATABASE registros;
USE registros;

CREATE TABLE modalidades (
    id_modalidad INTEGER PRIMARY KEY,
    nombre_modalidad VARCHAR(100) UNIQUE
);

CREATE TABLE registros_modalidad (
    no_cuenta INTEGER PRIMARY KEY,
    ap_paterno VARCHAR(30),
    ap_materno VARCHAR(30),
    nombre VARCHAR(50),
    modalidad INTEGER,
    d_modalidad VARCHAR(80),
    fecha_inicio_tramite DATE,
    asesor VARCHAR(150),
    fecha_titulacion DATE,
    FOREIGN KEY (modalidad) REFERENCES modalidades(id_modalidad)
);

-- Tabla para implementar login de admin
CREATE TABLE admins (
    no_cuenta INTEGER PRIMARY KEY,
    contrasena VARCHAR(255) NOT NULL,
    correo VARCHAR(150) UNIQUE NOT NULL
);

-- Inserciones de incio para crear los tipos de modalidad
INSERT INTO modalidades (id_modalidad, nombre_modalidad) VALUES
(1, 'Tesis'),
(2, 'Examen Profesional'),
(3, 'Curso de Titulación');