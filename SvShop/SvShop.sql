create database svshop;
use svshop;

DROP TABLE IF EXISTS `camisa`;
CREATE TABLE IF NOT EXISTS `camisa` (
  `idCamisa` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  'descricao' varchar(100) NOT NULL,
  `tamanho` varchar(5) NOT NULL,
  `sexo` char(1) NOT NULL,
  `preco` varchar(10) NOT NULL,
  PRIMARY KEY (`idCamisa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `idCliente` int NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` char(1) NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

select * from camisa;
select * from cliente;
