create database Avaliacao;
use Avaliacao;

DROP TABLE IF EXISTS `avaliacao`;
CREATE TABLE IF NOT EXISTS `avaliacao` (
  `idAvaliacao` int NOT NULL AUTO_INCREMENT,
  `Estrela1` char(1) NOT NULL,
  `Estrela2` char(1) NOT NULL,
  `Estrela3` char(1) NOT NULL,
  `Estrela4` char(1) NOT NULL,
  `Estrela5` char(1) NOT NULL,
  PRIMARY KEY (`idAvaliacao`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

select * from avaliacao;

