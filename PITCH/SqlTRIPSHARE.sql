create database tripshare;
use tripshare;

DROP TABLE IF EXISTS `avaliacao`;
CREATE TABLE IF NOT EXISTS `avaliacao` (
  `idAvaliacao` int NOT NULL AUTO_INCREMENT,
  `Estrela` char(1) NOT NULL,
  PRIMARY KEY (`idAvaliacao`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `idCliente` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `sexo` char(1) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `endereco` varchar(35) NOT NULL,
  `numero` int NOT NULL,
  `complemento` text NOT NULL,
  `bairro` varchar(25) NOT NULL,
  `cidade` varchar(35) NOT NULL,
  `UF` varchar(2) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `motorista`;
CREATE TABLE IF NOT EXISTS `motorista` (
  `idMotorista` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `sexo` char(1) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `endereco` varchar(35) NOT NULL,
  `numero` int NOT NULL,
  `complemento` text NOT NULL,
  `bairro` varchar(25) NOT NULL,
  `cidade` varchar(35) NOT NULL,
  `cnh` varchar(10) NOT NULL,
  `datavenc` varchar(15) NOT NULL,
  `categoriacnh` char(1) NOT NULL,
  `carro` varchar(50) NOT NULL,
  `placa` varchar(15) NOT NULL,
  `codigo` varchar(25) NOT NULL,
  `UF` varchar(2) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `estrela` char(1) NOT NULL,
  PRIMARY KEY (`idMotorista`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

select * from avaliacao;
select * from cliente;
select * from motorista;
