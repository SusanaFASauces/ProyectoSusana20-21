-- Autor: Susana Fabián Antón
-- Fecha creación: 20/01/2021
-- Última modificación: 20/01/2021

-- creamos la base de datos
CREATE DATABASE IF NOT EXISTS DAW208DBSusana2021;

-- creamos el usuario administrador de la base de datos
CREATE USER IF NOT EXISTS 'usuarioDAW208DBSusana2021'@'%' IDENTIFIED BY 'P@ssw0rd';

-- utilizamos de la base de datos
USE DAW208DBSusana2021;

-- creamos las tablas que va a usar nuestra base de datos
CREATE TABLE IF NOT EXISTS T01_Usuario (
    T01_CodUsuario VARCHAR(15) NOT NULL,
    T01_Password VARCHAR(64) NOT NULL,
    T01_DescUsuario VARCHAR(255) NOT NULL,
    T01_NumAccesos INT DEFAULT 0,
    T01_FechaHoraUltimaConexion TIMESTAMP ,
    T01_FechaHoraUltimaConexionAnterior TIMESTAMP ,
    T01_Perfil ENUM('administrador', 'usuario') DEFAULT 'usuario',
    PRIMARY KEY(T01_CodUsuario)
);

-- otorgamos permisos al usuario sobre las tablas de la base de datos
GRANT ALL PRIVILEGES ON DAW208DBSusana2021.* TO 'usuarioDAW208DBSusana2021'@'%';