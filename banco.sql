-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.14 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para gerenciamento
DROP DATABASE IF EXISTS `gerenciamento`;
CREATE DATABASE IF NOT EXISTS `gerenciamento` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `gerenciamento`;

-- Copiando estrutura para tabela gerenciamento.cadastro_senha
DROP TABLE IF EXISTS `cadastro_senha`;
CREATE TABLE IF NOT EXISTS `cadastro_senha` (
  `idcadastro_senha` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `senha` varchar(70) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `url` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `idusuario` int(11) unsigned NOT NULL,
  `usuario` varchar(45) NOT NULL,
  PRIMARY KEY (`idcadastro_senha`),
  KEY `fk_id_user_cad_senha` (`idusuario`),
  CONSTRAINT `fk_id_user_cad_senha` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela gerenciamento.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `pergunta_s` varchar(45) NOT NULL,
  `resposta_s` varchar(100) NOT NULL,
  PRIMARY KEY (`idusuario`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
