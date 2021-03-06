drop database FindJobRD

create database FindJobRD
Go

Use FindJobRD 
go

create table Rol
(
ID_ROL int not null IDENTITY(1,1),
constraint pk_IDROL PRIMARY KEY (ID_ROL),
NOMBRE VARCHAR (25) 
)

create Table Administrador
(
Id_Administrador int not null IDENTITY(1,1),
constraint pk_IdAdministrador primary key (Id_Administrador),
NOMBRE VARCHAR (50)NOT NULL,
APELLIDO VARCHAR(50),
EMAIL VARCHAR (150) UNIQUE NOT NULL,
USERNAME VARCHAR (50) UNIQUE NOT NULL,
PASS VARCHAR(150) NOT NULL,
DESCRIPCION VARCHAR(500),
TELEFONO VARCHAR(15),
DIRECCION VARCHAR(500),
ID_ROL INT NOT NULL 
)

create table Empresa
(
ID_Empresa INT NOT NULL IDENTITY(1,1),
CONSTRAINT pk_IDEmpresa PRIMARY KEY(ID_Empresa),
NOMBRE VARCHAR(100),
RNC VARCHAR(20) UNIQUE NOT NULL,
ACTIVIDAD VARCHAR(100) NOT NULL,
UBICACION VARCHAR(100),
DESCRIPCION VARCHAR(200),
ID_REPRESENTANTE INT,
ID_PAIS INT NOT NULL,
ID_CIUDAD INT
)

CREATE TABLE POSTULANTE
(
ID_Postulante INT NOT NULL IDENTITY(1,1),
CONSTRAINT pk_Postulante_IDPostulante PRIMARY KEY(ID_Postulante),
NOMBRE VARCHAR(50) NOT NULL,
APELLIDO VARCHAR(50) NOT NULL,
EMAIL VARCHAR(150) UNIQUE NOT NULL,
USERNAME VARCHAR(50) UNIQUE NOT NULL,
PASS VARCHAR(150) NOT NULL,
CURRICULUM VARCHAR(500),
TELEFONO VARCHAR(15) NOT NULL,
DIRECCION VARCHAR(500),
CODIGO_POSTAL VARCHAR(15),
ID_AREA INT NOT NULL,
ID_PAIS INT NOT NULL,
ID_CIUDAD INT NOT NULL,
ID_Rol INT NOT NULL
)

CREATE TABLE PAIS
(
ID_PAIS INT NOT NULL IDENTITY(1,1),
CONSTRAINT PK_PAIS_IDPAIS PRIMARY KEY(ID_PAIS),
NOMBRE VARCHAR(150) NOT NULL
)

CREATE TABLE CIUDAD
(
ID_CIUDAD INT NOT NULL IDENTITY(1,1),
CONSTRAINT PK_CIUDAD_IDCIUDAD PRIMARY KEY(ID_CIUDAD),
NOMBRE VARCHAR(100) NOT NULL,
ID_PAIS INT NOT NULL
)

CREATE TABLE HABILIDADES
(
ID_HABILIDAD INT NOT NULL IDENTITY(1,1),
CONSTRAINT PK_HABILIDADES_IDHABILIDAD PRIMARY KEY(ID_HABILIDAD),
NOMBRE VARCHAR(100) NOT NULL,
A�OS_EXPERIENCIA INT,
NIVEL_AUTOEVALUADO INT,
ID_Postulante INT NOT NULL
)

CREATE TABLE EXPERIENCIAS
(
ID_EXPERIENCIA INT NOT NULL IDENTITY(1,1),
CONSTRAINT PK_EXPERIENCIAS_IDEXPERIENCIA PRIMARY KEY(ID_EXPERIENCIA),
POSICION VARCHAR(50),
EMPRESA VARCHAR(50),
FECHA_INICIO DATE,
FECHA_FINAL DATE,
DESCRIPCION VARCHAR(500),
ID_Postulante INT NOT NULL
)

CREATE TABLE REFERENCIAS
(
ID_REFERENCIA INT NOT NULL IDENTITY(1,1),
CONSTRAINT PK_REFERENCIAS_IDREFERENCIA PRIMARY KEY(ID_REFERENCIA),
NOMBRE VARCHAR(50),
APELLIDO VARCHAR(50),
TELEFONO VARCHAR(15),
EMAIL VARCHAR(25),
ID_Postulante INT NOT NULL
)

CREATE TABLE FORMACION_CANDIDATO
(
ID_FORMACION INT NOT NULL IDENTITY(1,1),
CONSTRAINT PK_FORMACION_IDFORMACION PRIMARY KEY(ID_FORMACION),
TITULO VARCHAR(150),
CARRERA VARCHAR(150),
UNIVERSIDAD VARCHAR(150),
FECHA_INICIO DATE,
FECHA_FIN DATE,
ID_Postulante INT NOT NULL
)
 
CREATE TABLE AREA
(
ID_AREA INT NOT NULL IDENTITY(1,1),
CONSTRAINT PK_Postulante_IDAREA PRIMARY KEY(ID_AREA),
NOMBRE VARCHAR(50) NOT NULL
)

CREATE TABLE SUB_AREA
(
ID_SUBAREA INT NOT NULL IDENTITY(1,1),
CONSTRAINT PK_SUBAREA_IDSUBAREA PRIMARY KEY(ID_SUBAREA),
NOMBRE VARCHAR(100),
ID_AREA INT NOT NULL
)

CREATE TABLE REPRESENTANTE
(
ID_REPRESENTANTE INT NOT NULL IDENTITY(1,1),
CONSTRAINT PK_IDEPRESENTANTE PRIMARY KEY(ID_REPRESENTANTE),
NOMBRE VARCHAR(50),
APELLIDO VARCHAR(50),
EMPRESA VARCHAR(150) NOT NULL,
EMAIL VARCHAR(150) UNIQUE NOT NULL,
USERNAME VARCHAR(50) UNIQUE NOT NULL,
PASS VARCHAR(150) NOT NULL,
TELEFONO VARCHAR(15),
ID_PAIS INT,
ID_ROL INT NOT NULL
)

CREATE TABLE EMPLEOS
(
ID_EMPLEO INT NOT NULL IDENTITY(1,1),
CONSTRAINT PK_IDEMPLEO PRIMARY KEY(ID_EMPLEO),
PUESTO VARCHAR(50) NOT NULL,
UBICACION VARCHAR(500),
TIPO_EMPLEO VARCHAR(150) NOT NULL,
EXPERIENCIA_REQUERIDA VARCHAR(150),
FORMACION VARCHAR(100),
SALARIO DECIMAL(13,2),
HABILIDADES_REQUERIDAS VARCHAR(500) NOT NULL,
DESCRIPCION VARCHAR(500),
ID_EMPRESA INT NOT NULL,
ID_AREA INT NOT NULL,
ID_SUB_AREA INT NOT NULL,
ID_PAIS INT NOT NULL,
ID_CIUDAD INT NOT NULL
)
 
CREATE TABLE EMPRESAS_SEGUIDAS
(
ID_EMPRESASSEGUIDA INT NOT NULL IDENTITY(1,1),
CONSTRAINT PK_IDEMPRESASEGUIDA PRIMARY KEY(ID_EMPRESASSEGUIDA),
ID_Postulante INT NOT NULL,
ID_Empresa INT NOT NULL,
)

CREATE TABLE SOLICITUDES_EMPLEOS
 (
ID_SOLICITUD INT NOT NULL IDENTITY(1,1),
CONSTRAINT PK_SOLICITUDES_IDsOLICITUD PRIMARY KEY(ID_SOLICITUD),
ID_EMPLEO INT NOT NULL,
ID_Postulante INT NOT NULL,
STATUS BIT DEFAULT 0 NOT NULL
 )

--CONSTRAINTS		 

--ADMINISTRADOR
	ALTER TABLE Administrador ADD CONSTRAINT FK_ADMINISTRADOR_IDROL FOREIGN KEY (ID_ROL) REFERENCES ROL(ID_ROL)

--EMPRESA
	ALTER TABLE Empresa ADD CONSTRAINT FK_EMPRESA_IDREPRESENTATE FOREIGN KEY(ID_REPRESENTANTE) REFERENCES REPRESENTANTE(ID_REPRESENTANTE)
	ALTER TABLE Empresa ADD CONSTRAINT FK_EMPRESA_IDPAIS FOREIGN KEY(ID_PAIS) REFERENCES PAIS(ID_PAIS)
	ALTER TABLE Empresa ADD CONSTRAINT FK_EMPRESA_IDCIUDAD FOREIGN KEY(ID_CIUDAD) REFERENCES CIUDAD(ID_CIUDAD)

--Postulante
	ALTER TABLE Postulante ADD CONSTRAINT FK_Postulante_IDAREA FOREIGN KEY(ID_AREA) REFERENCES AREA(ID_AREA)
	ALTER TABLE Postulante ADD CONSTRAINT FK_Postulante_IDCIUDAD FOREIGN KEY(ID_CIUDAD) REFERENCES CIUDAD(ID_CIUDAD)
	ALTER TABLE Postulante ADD CONSTRAINT FK_Postulante_IDROL FOREIGN KEY (ID_ROL) REFERENCES ROL(ID_ROL)

--CIUDAD
	ALTER TABLE CIUDAD ADD CONSTRAINT FK_CIUDAD_IDPAIS FOREIGN KEY (ID_PAIS) REFERENCES PAIS(ID_PAIS)

--HABILIDADES
	ALTER TABLE HABILIDADES ADD CONSTRAINT FK_HABILIDADES_IDPostulante FOREIGN KEY(ID_Postulante) REFERENCES Postulante(ID_Postulante)	

--EXPERIENCIAS
	ALTER TABLE EXPERIENCIAS ADD CONSTRAINT FK_EXPERIENCIAS_IDPostulante FOREIGN KEY(ID_Postulante) REFERENCES Postulante(ID_Postulante)

--REFERENCIAS
	ALTER TABLE REFERENCIAS ADD CONSTRAINT FK_REFERENCIAS_IDPostulante FOREIGN KEY(ID_Postulante) REFERENCES Postulante(ID_Postulante)

--FORMACION_CANDIDTO
	ALTER TABLE FORMACION_CANDIDATO ADD CONSTRAINT FK_FORMACION_IDPostulante FOREIGN KEY(ID_Postulante) REFERENCES Postulante(ID_Postulante)

--SUB_AREA
	ALTER TABLE SUB_AREA ADD CONSTRAINT FK_AREA_IDSUBAREA FOREIGN KEY(ID_AREA) REFERENCES AREA(ID_AREA)

--REPRESENTANTE
	ALTER TABLE REPRESENTANTE ADD CONSTRAINT FK_REPRESENTANTE_ID_ROL FOREIGN KEY (ID_ROL) REFERENCES ROL(ID_ROL)
	ALTER TABLE REPRESENTANTE ADD CONSTRAINT FK_REPRESENTANTE_IDPAIS FOREIGN KEY(ID_PAIS) REFERENCES PAIS(ID_PAIS)

--EMPLEOS
	ALTER TABLE EMPLEOS ADD CONSTRAINT FK_EMPLEOS_IDEMPRESA FOREIGN KEY(ID_Empresa) REFERENCES Empresa(ID_Empresa)
	ALTER TABLE EMPLEOS ADD CONSTRAINT FK_EMPLEOS_IDPAIS FOREIGN KEY(ID_PAIS) REFERENCES PAIS(ID_PAIS)
	ALTER TABLE EMPLEOS ADD CONSTRAINT FK_EMPLEOS_IDCIUDAD FOREIGN KEY(ID_CIUDAD) REFERENCES CIUDAD(ID_CIUDAD)

--EMPRESAS_SEGUIDAS
	ALTER TABLE EMPRESAS_SEGUIDAS ADD CONSTRAINT FK_EMPRESAS_SEGUIDAS_IDPostulante FOREIGN KEY(ID_Postulante) REFERENCES Postulante(ID_Postulante)
	ALTER TABLE EMPRESAS_SEGUIDAS ADD CONSTRAINT FK_EMPRESAS_SEGUIDAS_IDEMPRESA FOREIGN KEY(ID_Empresa) REFERENCES Empresa(ID_Empresa)

--SOLICITUDES_EMPLEOS
	ALTER TABLE SOLICITUDES_EMPLEOS ADD CONSTRAINT FK_SOLICITUDES_IDEMPLEO FOREIGN KEY(ID_EMPLEO) REFERENCES EMPLEOS(ID_EMPLEO)
	ALTER TABLE SOLICITUDES_EMPLEOS ADD CONSTRAINT FK_SOLICITUDES_IDPostulante FOREIGN KEY(ID_Postulante) REFERENCES Postulante(ID_Postulante)

--INSERTS		
INSERT INTO ROL VALUES ('ADMINISTRADOR'),
						 ('CANDIDATO'),
						 ('EMPRESA')

INSERT INTO ADMINISTRADOR VALUES ('Fausto Jes�s', 'De La Cruz Caminero', '20142261@itla.edu.do', 'YohanselFausto', '123456', 'Administrador', '829-978-3809', 'Invivienda', 1)

INSERT INTO PAIS VALUES ('Rep�blica Dominicana')

INSERT INTO CIUDAD VALUES ('SANTO DOMINGO', 1)

INSERT INTO AREA VALUES ('Programaci�n')

INSERT INTO SUB_AREA VALUES ('Java', 1)

INSERT INTO Postulante VALUES ('Franklin', 'Sandoval Garc�a', '20142448@itla.edu.do', 'Franklin0724', '123456', 'Curriculum,', '809-357-1565', 'Los mina', '0', 1, 1, 1, 2)

INSERT INTO FORMACION_CANDIDATO VALUES ('INGENIERO', 'Sistemas Computacionales', 'APEC', '2012-01-01', '2016-09-05', 1)

--SELECTS		
SELECT * FROM Postulante
SELECT * FROM Empresa 
SELECT * FROM Administrador
SELECT * FROM REPRESENTANTE
SELECT * FROM EMPLEOS
SELECT * FROM CIUDAD
