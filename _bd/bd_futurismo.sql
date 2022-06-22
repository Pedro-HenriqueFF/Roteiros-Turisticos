SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE futurismo;
USE futurismo;

CREATE TABLE `pessoa_notificacao` (
  `id_pessoa_notif` int(11) NOT NULL,
  `nome_pessoa_notif` tinytext NOT NULL,
  `email_pessoa_notif` tinytext NOT NULL,
  `sugestao_notif` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=UTF8 COLLATE=utf8_swedish_ci;

CREATE TABLE `pessoas` (
  `id_pessoa` int(11) NOT NULL,
  `nome_pessoa` tinytext NOT NULL,
  `email_pessoa` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=UTF8 COLLATE=utf8_swedish_ci;

CREATE TABLE `sugestoes` (
  `id_sugestao` int(11) NOT NULL,
  `get_id_pessoa` int(11) NOT NULL,
  `nome_local` tinytext NOT NULL,
  `tipo_local` tinytext NOT NULL,
  `texto_sugestao` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=UTF8 COLLATE=utf8_swedish_ci;

ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id_pessoa`);
  
ALTER TABLE `sugestoes`
  ADD PRIMARY KEY (`id_sugestao`);

ALTER TABLE `pessoas`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT;
  
ALTER TABLE `sugestoes`
  MODIFY `id_sugestao` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `sugestoes`
  ADD CONSTRAINT `sugestoes_ibfk_1` FOREIGN KEY (`get_id_pessoa`) REFERENCES `pessoas` (`id_pessoa`) ON DELETE CASCADE ON UPDATE CASCADE;