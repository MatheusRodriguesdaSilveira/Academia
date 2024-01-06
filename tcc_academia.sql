create database tcca;

use tcca;

create table cliente(
ID_CLIENTE  Int unique  NOT NULL PRIMARY KEY,
NOME_CLIENTE varchar (60) NOT NULL,
FONE_CLIENTE varchar (16) NOT NULL,
EMAIL_CLIENTE varchar(40) NOT NULL,
PASS_CLEINTE varchar(20) NOT NULL);

SELECT * FROM cliente;

create table adm(
ID_ADM  Int unique  NOT NULL PRIMARY KEY,
NOME_ADM varchar (60) NOT NULL,
FONE_ADM char (16) NOT NULL,
EMAIL_ADM varchar(40) NOT NULL,
CARGO_ADM varchar(15) NOT NULL);

SELECT * FROM adm;

create table planos(
TIPO_PLANO  Int unique  NOT NULL PRIMARY KEY,
NOME_PLANO varchar (60) NOT NULL,
CICLO_PLANO numeric (12) NOT NULL,
C_COMP varchar (15) NOT NULL);

SELECT * FROM planos;

create table instrutor(
ID_INSTRUTOR  Int unique  NOT NULL PRIMARY KEY,
NOME_INSTRUTOR varchar (60) NOT NULL,
FONE_INSTRUTOR char (16) NOT NULL,
EMAIL_INSTRUTOR varchar(40) NOT NULL,
INSPEC_INSTRUTOR varchar(30) NOT NULL);

SELECT * FROM instrutor;

create table assinatura(
ID_ASSINANTE Int unique  NOT NULL PRIMARY KEY,
NOME_ASSINANTE varchar (60) NOT NULL,
VENCIMENTO date NOT NULL,
FORMA_PAG varchar (35) NOT NULL,
CICLO_ASSINANTE numeric(12) NOT NULL);

SELECT * FROM assinatura;

create table treino(
ID_TREINO Int unique  NOT NULL PRIMARY KEY,
IDENTIFICADOR_TREINO varchar (10) NOT NULL,
NOME_TREINO varchar (60) NOT NULL,
EXERCICIO_TREINO varchar (35) NOT NULL,
EXERCICIO_DESC_TREINO varchar (255) NOT NULL );

SELECT * FROM treino;


