CREATE DATABASE IF NOT EXISTS horario CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE horario;

CREATE TABLE curso (
    idCurso INT(11) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    PRIMARY KEY (idCurso)
) ENGINE=InnoDB;

CREATE TABLE asignatura (
    idAsignatura INT(11) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    siglas VARCHAR(20) NOT NULL,
    PRIMARY KEY (idAsignatura)
) ENGINE=InnoDB;

CREATE TABLE profesores (
    idProfesor INT(11) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(150) DEFAULT NULL,
    PRIMARY KEY (idProfesor)
) ENGINE=InnoDB;

CREATE TABLE horario (
    dia INT(11) NOT NULL,
    hora INT(11) NOT NULL,
    clase INT(11) NOT NULL,
    profesor INT(11) DEFAULT NULL,
    asignatura INT(11) NOT NULL,
    PRIMARY KEY (clase, dia, hora),
    UNIQUE KEY uq_profesor_tramo (profesor, dia, hora),
    FOREIGN KEY (clase) REFERENCES curso(idCurso) ON DELETE CASCADE,
    FOREIGN KEY (profesor) REFERENCES profesores(idProfesor) ON DELETE SET NULL,
    FOREIGN KEY (asignatura) REFERENCES asignatura(idAsignatura) ON DELETE CASCADE
) ENGINE=InnoDB;