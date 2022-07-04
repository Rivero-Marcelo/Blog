CREATE TABLE usuario(
    id int primary key auto_increment,
    username varchar(50) unique,
    password varchar(255)
);



CREATE TABLE `blog`.`publicacion` (
  `idPublicacion` INT NOT NULL AUTO_INCREMENT,
  `idAutor` INT NOT NULL,
  `fechaHora` DATETIME NOT NULL,
  `cuerpo` VARCHAR(1000) NOT NULL,
  PRIMARY KEY (`idPublicacion`));