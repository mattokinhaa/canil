create database petfinder;

use petfinder;

/* a tabela cliente é para aquela pessoa que não vai registrar o pet perdido, ela só vai usar o site*/

create table tb_cliente(
id_cliente int primary key,
nome_cliente varchar(60) not null,
email_cliente varchar(60) not null unique,
senha_cliente varchar(60) not null unique,
cpf_cliente int not null unique,
endereco_cliente varchar(60) not null,
cep_cliente int  not null,
telefone_cliente  int  not null unique
);

/* a tabela dono é para aquela pessoa que vai registrar o pet perdido e usar o site*/

create table tb_dono(
id_dono int primary key,
nome_dono varchar(60) not null,
email_dono varchar(60) not null unique,
senha_dono varchar(60) not null unique,
cpf_dono int not null unique,
endereco_dono varchar(60) not null,
cep_dono int  not null,
telefone_dono  int  not null unique
);

create table tb_pet(
id_pet int primary key,
nome_pet varchar(60) not null,
raca_pet varchar(60) not null,
descricao_pet varchar(60) not null,
especie_pet varchar(60)not null,
coordenadas_pet int not null,
locais_pet varchar(60) not null,
cd_dono int not null,
foreign key(cd_dono) references tb_dono(id_dono)
);
