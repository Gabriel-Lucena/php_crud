create table tbl_administrador(
    cod_pessoa int unsigned auto_increment primary key,
    nome varchar(250) not null,
    senha varchar(250) not null
);

insert into
    tbl_administrador (nome, senha)
values
    ('a', 'a');
