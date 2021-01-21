-- Autor: Susana Fabián Antón
-- Fecha creación: 20/01/2021
-- Última modificación: 20/01/2021

-- utilizamos de la base de datos
USE DAW208DBSusana2021;

-- insertamos datos en la tablas de nuestra base de datos
INSERT INTO T01_Usuario(T01_CodUsuario, T01_Password, T01_DescUsuario) VALUES
    ('nereaa',SHA2('nereaapaso',256),'Nerea Álvarez'),
    ('miguel',SHA2('miguelpaso',256),'Miguel Ángel Aranda'),
    ('beatiz',SHA2('beatrizpaso',256),'Beatriz Merino'),
    ('nerean',SHA2('nereanpaso',256),'Nerea Nuevo'),
    ('cristinam',SHA2('cristinampaso',256),'Cristina Manjón'),
    ('susana',SHA2('susanapaso',256),'Susana Fabián'),
    ('sonia',SHA2('soniapaso',256),'Sonia Antón'),
    ('elena',SHA2('elenapaso',256),'Elena de Antón'),
    ('nacho',SHA2('nachopaso',256),'Nacho del Prado'),
    ('raul',SHA2('raulpaso',256),'Raúl Núñez'),
    ('luis',SHA2('luispaso',256),'Luis Puente'),
    ('arkaitz',SHA2('arkaitzpaso',256),'Arkaitz Rodríguez'),
    ('rodrigo',SHA2('rodrigopaso',256),'Rodrigo Robles'),
    ('javier',SHA2('javierpaso',256),'Javier Nieto'),
    ('cristinan',SHA2('cristinanpaso',256),'Cristina Nuñez'),
    ('heraclio',SHA2('heracliopaso',256),'Heraclio Borbujo'),
    ('amor',SHA2('amorpaso',256),'Amor Rodriguez'),
    ('antonio',SHA2('antoniopaso',256),'Antonio Jáñez'),
    ('leticia',SHA2('leticiapaso',256),'Leticia Núñez');

-- insertamos el usuario con el rol administrador
INSERT INTO T01_Usuario(T01_CodUsuario, T01_Password, T01_DescUsuario, T01_Perfil) VALUES ('admin',SHA2('adminpaso',256),'Administrador','administrador');