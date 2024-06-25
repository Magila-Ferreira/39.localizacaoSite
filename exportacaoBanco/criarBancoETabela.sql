CREATE DATABASE posts;
USE posts;

CREATE TABLE post (
    cod_post INT NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(255) NOT NULL,
    texto TEXT NOT NULL,
    autor VARCHAR(100) NOT NULL,
    data_post DATE NOT NULL,
    email VARCHAR(255) NOT NULL,
    PRIMARY KEY (cod_post)
);

CREATE TABLE imagem (
    cod_imagem INT NOT NULL AUTO_INCREMENT,
    nome_arquivo VARCHAR(100) NOT NULL,
    fk_cod_post INT NOT NULL,
    FOREIGN KEY (fk_cod_post) REFERENCES post (cod_post),
    PRIMARY KEY (cod_imagem)
);