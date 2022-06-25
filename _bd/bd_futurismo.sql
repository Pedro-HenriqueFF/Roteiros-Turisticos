SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE futurismo;
USE futurismo;

CREATE TABLE `generos` (
  `id_genero` int(11) NOT NULL,
  `nome_genero` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `pessoas` (
  `id_pessoa` int(11) NOT NULL,
  `nome_pessoa` varchar(255) NOT NULL,
  `email_pessoa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `cidades` (
  `id_cidade` int(11) NOT NULL,
  `nome_cidade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `enderecos` (
  `id_endereco` int(11) NOT NULL,
  `numero_endereco`varchar(255) NOT NULL,
  `rua_endereco` varchar(255) NOT NULL,
  `bairro_endereco` varchar(255) NOT NULL,
  `get_id_cidade` int(11) NOT NULL,
  `cep_endereco`varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `locais` (
  `id_local` int(11) NOT NULL,
  `nome_local`varchar(255) NOT NULL,
  `get_id_genero_1` int(11) NOT NULL,
  `get_id_genero_2` int(11),
  `get_id_genero_3` int(11),
  `get_id_endereco` int(11) NOT NULL,
  `valor_local` varchar(255) NOT NULL,
  `horario_local` varchar(255) NOT NULL,
  `descricao_local` varchar(255) NOT NULL,
  `pathing_local` varchar(255) NOT NULL,
  `inclusivo_local` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `notificacoes` (
  `id_notif` int(11) NOT NULL,
  `get_id_pessoa` int(11) NOT NULL,
  `get_id_genero_1` int(11) NOT NULL,
  `get_id_genero_2` int(11),
  `get_id_genero_3` int(11)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `sugestoes` (
  `id_sugestao` int(11) NOT NULL,
  `get_id_pessoa` int(11) NOT NULL,
  `nome_sugestao` varchar(255) NOT NULL,
  `get_id_genero_1` int(11) NOT NULL,
  `get_id_genero_2` int(11),
  `get_id_genero_3` int(11),
  `texto_sugestao` varchar(255)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `generos`
  ADD PRIMARY KEY (`id_genero`);

ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id_pessoa`);

ALTER TABLE `cidades`
  ADD PRIMARY KEY (`id_cidade`);

ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`id_endereco`);
  
  ALTER TABLE `locais`
    ADD PRIMARY KEY (`id_local`);

ALTER TABLE `notificacoes`
  ADD PRIMARY KEY (`id_notif`);

ALTER TABLE `sugestoes`
  ADD PRIMARY KEY (`id_sugestao`);

ALTER TABLE `generos`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `pessoas`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `cidades`
  MODIFY `id_cidade` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `enderecos`
  MODIFY `id_endereco` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `locais`
  MODIFY `id_local` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `notificacoes`
  MODIFY `id_notif` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `sugestoes`
  MODIFY `id_sugestao` int(11) NOT NULL AUTO_INCREMENT;

INSERT INTO generos (nome_genero) VALUES
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

INSERT INTO cidades (nome_cidade) VALUES
  ('Juazeiro do Norte'),
  ('Crato'),
  ('Barbalha'),
  ('Jardim'),
  ('Missão Velha'),
  ('Caririaçu'),
  ('Farias Brito'),
  ('Nova Olinda'),
  ('Santana do Cariri');

ALTER TABLE `enderecos`
  ADD CONSTRAINT `enderecos_ibfk_1` FOREIGN KEY (`get_id_cidade`) REFERENCES `cidades` (`id_cidade`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `locais`
  ADD CONSTRAINT `locais_ibfk_1` FOREIGN KEY (`get_id_genero_1`) REFERENCES `generos` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `locais_ibfk_2` FOREIGN KEY (`get_id_genero_2`) REFERENCES `generos` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `locais_ibfk_3` FOREIGN KEY (`get_id_genero_3`) REFERENCES `generos` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `locais_ibfk_4` FOREIGN KEY (`get_id_endereco`) REFERENCES `enderecos` (`id_endereco`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `notificacoes`
  ADD CONSTRAINT `notificacoes_ibfk_1` FOREIGN KEY (`get_id_pessoa`) REFERENCES `pessoas` (`id_pessoa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notificacoes_ibfk_2` FOREIGN KEY (`get_id_genero_1`) REFERENCES `generos` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notificacoes_ibfk_3` FOREIGN KEY (`get_id_genero_2`) REFERENCES `generos` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notificacoes_ibfk_4` FOREIGN KEY (`get_id_genero_3`) REFERENCES `generos` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `sugestoes`
  ADD CONSTRAINT `sugestoes_ibfk_1` FOREIGN KEY (`get_id_pessoa`) REFERENCES `pessoas` (`id_pessoa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sugestoes_ibfk_2` FOREIGN KEY (`get_id_genero_1`) REFERENCES `generos` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sugestoes_ibfk_3` FOREIGN KEY (`get_id_genero_2`) REFERENCES `generos` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sugestoes_ibfk_4` FOREIGN KEY (`get_id_genero_3`) REFERENCES `generos` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE;