create database Primaria;
use Primaria;
create table Maestro (id int not null primary key auto_increment,primerNombre varchar(50) not null,segundoNombre varchar(50) default 'NA',apellidoPaterno varchar(60) not null,apellidoMaterno varchar(60) not null,correo varchar(65) not null, telefono int unsigned not null,unique(telefono,correo));
create table Materia (id int not null auto_increment primary key,nombre varchar(60) not null,unique(nombre));
create table Alumno (Ncontrol int not null primary key auto_increment,primerNombre varchar(50) not null,segundoNombre varchar(50) default 'NA',apellidoPaterno varchar(60) not null,apellidoMaterno varchar(60) not null,unique(Ncontrol));
create table Semana (id int not null auto_increment primary key,rangoFechas varchar(60) not null);
create table Tutor (id int not null primary key auto_increment,primerNombre varchar(50) not null,segundoNombre varchar(50) default 'NA',apellidoPaterno varchar(60) not null,apellidoMaterno varchar(60) not null,correo varchar(65) not null, telefono int unsigned not null,unique(correo,telefono));
create table Maestro_Materia(id int not null primary key auto_increment,maestro_id int not null, constraint fk_maestro foreign key(maestro_id) references Maestro(id),materia_id int not null, constraint fk_materia foreign key(materia_id) references Materia(id));
create table Grupo(id int not null primary key auto_increment,maestro_id int not null, constraint fk_maestroGrupo foreign key(maestro_id) references Maestro(id),alumno_id int not null, constraint fk_alumnoGrupo foreign key(alumno_id) references Alumno(Ncontrol));
create table Tutor_Alumno(id int not null primary key auto_increment,tutor_id int not null, constraint fk_tutorAlumno foreign key(tutor_id) references Tutor(id),alumno_id int not null, constraint fk_alumnoTutor foreign key(alumno_id) references Alumno(Ncontrol));
create table Actividad(id int not null primary key auto_increment,tarea TEXT not null,materia_id int not null,constraint fk_materiaActividad foreign key(materia_id) references Materia(id),tema TEXT not null,actividades TEXT not null,producto TEXT not null,dia Date not null);
create table PPM(id int not null primary key auto_increment,semana_id int not null,maestro_id int not null,grupo_id int not null,constraint fk_semanaPPM foreign key(semana_id) references Semana(id),constraint fk_maestroPPM foreign key(maestro_id) references Maestro(id),constraint fk_grupoPPM foreign key(grupo_id) references Grupo(id));
create table PPMR(id int not null primary key auto_increment,ppm_id int not null,actividad_id int not null,constraint fk_ppmPPMR foreign key(ppm_id) references PPM(id),constraint fk_actividadPPMR foreign key(actividad_id) references Actividad(id));
 delimiter //
create procedure InsertarMaestro(primerNombre varchar(50),segundoNombre varchar(50),apellidoPaterno varchar(60),apellidoMaterno varchar(60),correo varchar(65),telefono int)
     begin
     insert into Maestro values(0,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,correo,telefono);
     commit;
     end //

      delimiter //
create procedure InsertarMateria(nombre varchar(60))
     begin
     insert into Materia values(0,nombre);
     commit;
     end //

 delimiter //
create procedure InsertarActividad(tarea text,materia int,tema text,actividades text,producto text,dia date)
     begin
     insert into Actividad values(0,tarea,materia,tema,actividades,producto,dia);
     commit;
     end //

delimiter ;
