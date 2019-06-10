create database bitacora;

use bitacora;

create table modificaciones
(
   id_commit int(6) auto_increment,
   codigo varchar(99),
   titulo varchar(150),
   autor varchar(20),
   fecha date,
   entrada varchar(1000),
   salida varchar(1000),
   id_prueba int(6),
   id_modulo int(6),

   constraint PK_modificaciones primary key (id_commit) 
);

create table prueba
(
	id_prueba int(6) auto_increment,
	nombre_prueba varchar(50),

	constraint PK_prueba primary key (id_prueba)
);

create table modulo
(
	id_modulo int(6) auto_increment,
	nombre_modulo varchar(50),

	constraint PK_modulo primary key (id_modulo)
);

