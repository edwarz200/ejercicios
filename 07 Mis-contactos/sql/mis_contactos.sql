/*
comentario
SQL Structure Query Language - Lenguaje
Estructurado de Consulta

Base de Datos: Una coleccion de datos que estan organizados

gestores o manejadores de BD son los programas que nos permiten administrar los datos

QUE ES UN CAMPO
QUE ES UN REGIISTRO
QUE ES UNA TABLA

ejemplos de gestores de BD: Microsoft Acces, Microsoft SQL Server, Oracle, Informix, DBASE, SQL LITE, PostgreSQL, MYSQL

una sentencia SQL es una linea de codigo para trabajar con nuestra BD

Existen 2 tipos de sentencias SQL:

1)Sentencias Estructurales: Son las que nos permiten crear, modificar o eliminar objetos, usuarios, y propiedades de nuestra BD

2)Sentencias de Datos: son las que nos permitiran insertar, elimiar, modificar y buscar informacion en nuiestra BD

en MYSQL existen 2 tipos de engine para tablas:
1)MyISAM -Tablas Planas, son como si fuera a trabajar datos en Excel
2) InnoDB - Tablas Relacionales, son como si fuera a trabajar datos en Acces
*/

CREATE DATABASE mis_contactos;

USE mis_contactos;

CREATE TABLE contactos(
    email VARCHAR(50) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    sexo CHAR(1),
    nacimiento DATE,
    telefono VARCHAR(13),
    pais VARCHAR(50) NOT NULL,
    imagen VARCHAR(50),
    PRIMARY KEY(email),
    FULLTEXT KEY buscador(email, nombre, sexo, telefono, pais)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE pais (
    id_pais INT NOT NULL AUTO_INCREMENT,
    pais VARCHAR(50) NOT NULL,
    PRIMARY KEY(id_pais)
)ENGINE= MyISAM DEFAULT CHARSET=latin1;

INSERT INTO pais(id_pais,pais) VALUES
    (1,"México"),
    (2,"Colombia"),
    (3,"Guatemala"),
    (4,"España"),
    (5,"Brasil"),
    (6,"Uruguay"),
    (7,"Perú"),
    (8,"Argentina"),
    (9,"Chile"),
    (10,"Paraguay"),
    (11,"Honduras"),
    (12,"El Salvador"),
    (13,"Nicaragua"),
    (14,"Costa Rica"),
    (15,"Panamá"),
    (16,"Venezuela"),
    (17,"Ecuador"),
    (18,"Bolivia"),
    (19,"Canada"),
    (20,"Estador Unidos"),
    (21,"Groenlandia"),
    (22,"República Dominicana"),
    (23,"Haití"),
    (24,"Cuba"),
    (25,"Belice"),
    (26,"Inglaterra"),
    (27,"Francia"),
    (28,"Alemania"),
    (29,"Italia"),
    (30,"Japón"),
    (31,"China"),
    (32,"Egisto"),
    (33,"Sudafrica"),
    (34,"Australia"),
    (35,"Nueva Zelanda");