-- CREATE DATABASE futurismo;
-- USE futurismo;

CREATE TABLE `pessoas` (
  `id_pessoa` int(11) NOT NULL,
  `nome_pessoa` tinytext NOT NULL,
  `email_pessoa` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `sugestoes` (
  `id_sugestao` int(11) NOT NULL,
  `get_id_pessoa` int(11) NOT NULL,
  `nome_local` tinytext NOT NULL,
  `tipo_local` tinytext NOT NULL,
  `texto_sugestao` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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