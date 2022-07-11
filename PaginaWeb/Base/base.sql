--Creacion de la base de datos
create database bici default character set utf8;

--Posicionamiento y uso de la basa de datos
use bici;

--creacion de la tabla contacto

create table CONTACTO(
    idContacto integer not null auto_increment primary key,
    nombres varchar(50) not null,
    correo varchar (35) not null,
    mensaje varchar (250) not null
)ENGINE=INNODB;

