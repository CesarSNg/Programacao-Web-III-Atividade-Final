create database dbClientes CHARACTER SET utf8 COLLATE utf8_general_ci;

use dbClientes;

create table tbClientes(
id int not null auto_increment,
produto varchar(100),
marca varchar(100),
cor varchar(100),
preco int(6),
primary key(codCli))ENGINE=InnoDB DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci;