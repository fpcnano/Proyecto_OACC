SET NAMES 'utf8';
DROP DATABASE IF EXISTS examen;
CREATE DATABASE IF NOT EXISTS examen DEFAULT CHARACTER SET utf8;
USE examen;

create table alumno(
       cuenta integer primary key,
       nombre varchar(100) not null,
	   apellido_pat varchar(100) not null,
	   apellido_mat varchar(100) not null,
       email varchar(100) not null,
	   
	   CONSTRAINT cuenta_unico UNIQUE(cuenta),
	   CONSTRAINT email_unico UNIQUE(email),
	   CONSTRAINT email_format CHECK(email LIKE '%@aragon.unam.mx')

)DEFAULT CHARACTER SET utf8;

INSERT INTO alumno(cuenta,nombre,apellido_pat,apellido_mat,email)
VALUES(0,'Miguel Angel','Sanchez','Hernandez','miguelsanher@aragon.unam.mx');
INSERT INTO alumno(cuenta,nombre,apellido_pat,apellido_mat,email)
VALUES(1,'Eduardo','Mendieta','Lozano','lalomenlozn@aragon.unam.mx');
INSERT INTO alumno(cuenta,nombre,apellido_pat,apellido_mat,email)
VALUES(2,'Juan Carlos','Perez','Angeles','jucaperang@aragon.unam.mx');
INSERT INTO alumno(cuenta,nombre,apellido_pat,apellido_mat,email)
VALUES(316232544,'Fernando','Perez','Cuevas','fernandoperez316@aragon.unam.mx');