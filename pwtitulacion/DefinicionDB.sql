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
    fecha_inicio_tramite DATE,
    asesor VARCHAR(150),
    fecha_titulacion DATE,
    FOREIGN KEY (modalidad) REFERENCES modalidades(id_modalidad)
);
