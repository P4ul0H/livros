drop database if exists biblioteca;
create database biblioteca;

use biblioteca;

create table if not exists livros(
    codigo int not null auto_increment,
    nome varchar(100) not null,
    editora varchar(100) not null,
    autora varchar(100) not null,
    primary key(codigo)
);