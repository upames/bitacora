create database encriptarBlowfish;

use encriptarBlowfish;

create table usuario(
idUsuario varchar(30),
nombre_Usuario varchar(25),
email varchar(30),
password varchar(100),
Constraint PK_usuario primary key(idUsuario)
);


create table producto(
id_Codigo varchar(19),
nombre_producto varchar(70),
cantidad int(11),
precio float(15,2),
Constraint PK_producto primary key(id_Codigo)
);
