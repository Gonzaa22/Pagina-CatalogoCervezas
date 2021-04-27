DROP DATABASE CatalogoCervezas;
CREATE DATABASE CatalogoCervezas;
USE CatalogoCervezas;

CREATE TABLE Cervezas(
    id int primary key auto_increment,
    marca varchar(15),
    tipo varchar(15),
    litros float(3),
    precio float(5),
    img varchar(50)
);

CREATE TABLE Usuarios(
    id int auto_increment primary key not null,
    nombre varchar(25) not null,
    contrasenia varchar(50) not null
);


INSERT INTO Cervezas(marca, tipo, litros, precio, img) VALUES
("Quilmes","Clasica","1","90","IMAGENES/quilmes.jpg"),
("Imperial"," APA","1","110","IMAGENES/imperial.jpg"),
("Andes","IPA","1","125","IMAGENES/andes.jpg"),
("Heineken","Clasica","1","140","IMAGENES/heineken.jpg"),
("Barba roja","Lemon","1","150","IMAGENES/barbaroja.jpg"),
("Budweiser","Clasica","1","85","IMAGENES/budweiser.jpg"),
("Stella Artois","Clasica","1","105","IMAGENES/stellaartois.jpg"),
("Corona","Clasica","1","150","IMAGENES/corona.jpg"),
("Brahma","Clasica","1","70","IMAGENES/brahma.jpg");


INSERT INTO Usuarios (nombre, contrasenia) VALUES
("Gonzalo","123"),
("Luca","123");
