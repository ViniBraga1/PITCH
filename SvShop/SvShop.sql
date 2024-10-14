create database svshop;
use svshop;

DROP TABLE IF EXISTS `camisa`;
CREATE TABLE IF NOT EXISTS `camisa` (
  `idCamisa` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `tamanho` char(1) NOT NULL,
  `sexo` char(1) NOT NULL,
  `preco` varchar(10) NOT NULL,
  `foto_frente` varchar(255) DEFAULT NULL,
  `foto_verso` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idCamisa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `idCliente` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE IF NOT EXISTS `venda` (
  `idVenda` int NOT NULL AUTO_INCREMENT,
  `idCliente` int NOT NULL,
  `idCamisa` int NOT NULL,
  `preco_total` varchar(10) NOT NULL,
  PRIMARY KEY (`idVenda`),
  FOREIGN KEY (`idCliente`) REFERENCES `cliente`(`idCliente`),
  FOREIGN KEY (`idCamisa`) REFERENCES `camisa`(`idCamisa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

select * from camisa;
select * from cliente;
select * from venda;
