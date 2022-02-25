/**
 * Criando o bando de dados
 **/

create database cadastro;

/**
 * Habilitando o bando de dados
 **/

use cadastro;

/**
 * Criar a tabela de pessoas no banco
 **/

CREATE TABLE tbl_pessoa(
  cod_pessoa int unsigned auto_increment primary key,
  nome varchar(250) not null,
  sobrenome varchar(500) not null,
  email varchar(500) not null,
  celular varchar(20) not null
);