/*SCRIPT PARA CRIAR O BANCO DE DADOS QUE IRÁ RECEBER OS DADOS DO FORMULÁRIO*/

CREATE DATABASE chilipeppers;

USE chilipeppers;

CREATE TABLE cadastro(
  nome VARCHAR(25),
  sobrenome VARCHAR(25),
  idade VARCHAR(3),
  telefone VARCHAR(11),
  album VARCHAR(25),
  integrante VARCHAR(25)
);

SELECT * FROM cadastro;
