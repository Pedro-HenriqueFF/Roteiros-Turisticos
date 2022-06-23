SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE futurismo;
USE futurismo;

CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL,
  `nome_genero` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `pessoas` (
  `id_pessoa` int(11) NOT NULL,
  `nome_pessoa` tinytext NOT NULL,
  `email_pessoa` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `locais` (
  `id_local` int(11) NOT NULL,
  `get_id_pessoa` int(11) NOT NULL,
  `get_id_genero_1` int(11) NOT NULL,
  `get_id_genero_2` int(11),
  `get_id_genero_3` int(11),
  `nome_local`tinytext NOT NULL,
  `cidade_local` tinytext NOT NULL,
  `endereco_local` tinytext NOT NULL,
  `valor_local` tinytext NOT NULL,
  `horario_local` tinytext NOT NULL,
  `descricao_local` tinytext NOT NULL,
  `inclusivo_local` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `notificacao` (
  `id_notif` int(11) NOT NULL,
  `get_id_pessoa` int(11) NOT NULL,
  `get_id_genero_1` int(11) NOT NULL,
  `get_id_genero_2` int(11),
  `get_id_genero_3` int(11)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `sugestoes` (
  `id_sugestao` int(11) NOT NULL,
  `get_id_pessoa` int(11) NOT NULL,
  `nome_sugestao` tinytext NOT NULL,
  `get_id_genero_1` int(11) NOT NULL,
  `get_id_genero_2` int(11),
  `get_id_genero_3` int(11),
  `texto_sugestao` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id_pessoa`);
  
  ALTER TABLE `locais`
    ADD PRIMARY KEY (`id_local`);

ALTER TABLE `notificacao`
  ADD PRIMARY KEY (`id_notif`);

ALTER TABLE `sugestoes`
  ADD PRIMARY KEY (`id_sugestao`);

ALTER TABLE `genero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `pessoas`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `locais`
  MODIFY `id_local` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `notificacao`
  MODIFY `id_notif` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `sugestoes`
  MODIFY `id_sugestao` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `locais`
  ADD CONSTRAINT `locais_ibfk_1` FOREIGN KEY (`get_id_pessoa`) REFERENCES `pessoas` (`id_pessoa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `locais_ibfk_2` FOREIGN KEY (`get_id_genero_1`) REFERENCES `genero` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `locais_ibfk_3` FOREIGN KEY (`get_id_genero_2`) REFERENCES `genero` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `locais_ibfk_4` FOREIGN KEY (`get_id_genero_3`) REFERENCES `genero` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `notificacao`
  ADD CONSTRAINT `notificacao_ibfk_1` FOREIGN KEY (`get_id_pessoa`) REFERENCES `pessoas` (`id_pessoa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notificacao_ibfk_2` FOREIGN KEY (`get_id_genero_1`) REFERENCES `genero` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notificacao_ibfk_3` FOREIGN KEY (`get_id_genero_2`) REFERENCES `genero` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notificacao_ibfk_4` FOREIGN KEY (`get_id_genero_3`) REFERENCES `genero` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `sugestoes`
  ADD CONSTRAINT `sugestoes_ibfk_1` FOREIGN KEY (`get_id_pessoa`) REFERENCES `pessoas` (`id_pessoa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sugestoes_ibfk_2` FOREIGN KEY (`get_id_genero_1`) REFERENCES `genero` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sugestoes_ibfk_3` FOREIGN KEY (`get_id_genero_2`) REFERENCES `genero` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sugestoes_ibfk_4` FOREIGN KEY (`get_id_genero_3`) REFERENCES `genero` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE;

INSERT INTO genero (nome_genero) VALUES
  ('Religioso'),
  ('Artesanal'),
  ('Cultural'),
  ('Histórico'),
  ('Lazer'),
  ('Ecológico'),
  ('Aventura'),
  ('Aquático'),
  ('Comércio'),
  ('Esportivo'),
  ('Científico');