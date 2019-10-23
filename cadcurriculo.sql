-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Set-2019 às 13:13
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadcurriculo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_dadospessoais`
--

CREATE TABLE `tb_dadospessoais` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) CHARACTER SET utf8 NOT NULL,
  `datadenasc` date NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `nacionalidade` varchar(50) CHARACTER SET utf8 NOT NULL,
  `naturalidade` varchar(50) CHARACTER SET utf8 NOT NULL,
  `bairro` varchar(50) CHARACTER SET utf8 NOT NULL,
  `endereco` varchar(100) CHARACTER SET utf8 NOT NULL,
  `estadocivil` varchar(50) CHARACTER SET utf8 NOT NULL,
  `cep` int(11) NOT NULL,
  `estado` varchar(100) CHARACTER SET utf8 NOT NULL,
  `contato` int(11) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `pis` int(11) NOT NULL,
  `escolaridade` varchar(200) NOT NULL,
  `formacao` varchar(200) CHARACTER SET utf8 NOT NULL,
  `experiencia` varchar(500) CHARACTER SET utf8 NOT NULL,
  `exp` varchar(100) NOT NULL,
  `objetivo` varchar(100) CHARACTER SET utf8 NOT NULL,
  `cursos` varchar(250) CHARACTER SET utf8 NOT NULL,
  `perfil` text CHARACTER SET utf8 NOT NULL,
  `sc` int(11) NOT NULL,
  `tc` int(11) NOT NULL,
  `sd` int(11) NOT NULL,
  `ax` int(11) NOT NULL,
  `ed` int(11) NOT NULL,
  `sg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_dadospessoais`
--

INSERT INTO `tb_dadospessoais` (`id`, `nome`, `datadenasc`, `sexo`, `nacionalidade`, `naturalidade`, `bairro`, `endereco`, `estadocivil`, `cep`, `estado`, `contato`, `email`, `pis`, `escolaridade`, `formacao`, `experiencia`, `exp`, `objetivo`, `cursos`, `perfil`, `sc`, `tc`, `sd`, `ax`, `ed`, `sg`) VALUES
(70, 'Antonio Rocha Alves', '0000-00-00', 'Masculino', 'Brasileiro', 'Brasileiro', 'Parque VitÃ³ria', 'Rua Walter Brasileiro nÂº.02', '---', 62670000, 'CearÃ¡', 0, '---', 0, '', 'Ensino MÃ©dio Completo', 'Sistema EletrÃ´nico de SeguranÃ§a - Norte  SeguranÃ§a\r\nCargo: Porteiro\r\nPerÃ­odo: 1 ano e 5 meses\r\n//\r\nServis SeguranÃ§as\r\nCargo: Vigilante\r\nPerÃ­odo: 2 anos e 4 meses\r\n//\r\nCorpo de SeguranÃ§a do Nordeste LTDA\r\nCargo: Vigilante\r\nPerÃ­odo: 4 anos\r\n//\r\nServÃ­ams ServiÃ§o de SeguranÃ§a Armada\r\nCargo: Vigilante\r\nPerÃ­odo: 1 ano e 9 meses\r\n', ' ServiÃ§os Gerais ', '---', 'Vigilante, CMACK - 120 hrs //\r\nReciclagem do Curso de Vigilante, CMACK (Setembro/2013) //\r\nBÃ¡sico InformÃ¡tica //\r\nRecepcionista de CrediÃ¡rio', 'DedicaÃ§Ã£o exclusiva ao trabalho, cumprimento rigoroso de horÃ¡rios, soluÃ§Ã£o de problemas com seguranÃ§a  ', 0, 0, 0, 0, 0, 6);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_dadospessoais`
--
ALTER TABLE `tb_dadospessoais`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_dadospessoais`
--
ALTER TABLE `tb_dadospessoais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
