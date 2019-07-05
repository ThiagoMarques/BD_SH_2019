-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 05/07/2019 às 19:25
-- Versão do servidor: 5.7.26-0ubuntu0.18.04.1
-- Versão do PHP: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_hospital`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `consulta`
--

CREATE TABLE `consulta` (
  `ID_Con` int(11) NOT NULL,
  `Nome_Pac` varchar(200) NOT NULL,
  `Nome_Med` varchar(200) NOT NULL,
  `Data_Consulta` date DEFAULT NULL,
  `Horario` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `consulta`
--

INSERT INTO `consulta` (`ID_Con`, `Nome_Pac`, `Nome_Med`, `Data_Consulta`, `Horario`) VALUES
(1, 'JosÃ© Maria de Oliveira', 'Osvaldo Cruz', '2005-05-05', '10:00:00'),
(2, 'JosÃ© Maria de Oliveira', 'Otavio Luiz Ribeiro', '2019-07-05', '11:11:00'),
(5, 'Marcos Silva Santo', 'Osvaldo Cruz', '2020-05-06', '10:00:00'),
(6, 'Ricardo Alves', 'Ricardo Santos', '2010-05-07', '11:11:00'),
(7, 'Gabriel dos Santos', 'Ricardo Santos', '2019-07-05', '11:11:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `enfermeiro`
--

CREATE TABLE `enfermeiro` (
  `ID_Enf` int(11) NOT NULL,
  `COREN` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `enfermeiro`
--

INSERT INTO `enfermeiro` (`ID_Enf`, `COREN`) VALUES
(16, '7474');

-- --------------------------------------------------------

--
-- Estrutura para tabela `estoque`
--

CREATE TABLE `estoque` (
  `ID_Prod` int(11) NOT NULL,
  `Nome_prod` varchar(300) NOT NULL,
  `Descricao` varchar(1000) NOT NULL,
  `Data_Movimentacao` varchar(300) NOT NULL,
  `Qtd_Estoque` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `estoque`
--

INSERT INTO `estoque` (`ID_Prod`, `Nome_prod`, `Descricao`, `Data_Movimentacao`, `Qtd_Estoque`) VALUES
(2, 'Dorflex', 'Remessa 77', '2019-06-05', '90'),
(3, 'Dorflex', 'Remessa 209', '2019-05-07', '80');

-- --------------------------------------------------------

--
-- Estrutura para tabela `hospital`
--

CREATE TABLE `hospital` (
  `ID_Hos` int(11) NOT NULL,
  `CNPJ` varchar(15) NOT NULL,
  `Endereco` varchar(300) NOT NULL,
  `Nome` varchar(250) NOT NULL,
  `Telefone` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `hospital`
--

INSERT INTO `hospital` (`ID_Hos`, `CNPJ`, `Endereco`, `Nome`, `Telefone`) VALUES
(1, '88717118000186', 'SGAN 601 Quadra 6 Bloco 2', 'Hospital Regional BD1', '6133220102');

-- --------------------------------------------------------

--
-- Estrutura para tabela `medicamento`
--

CREATE TABLE `medicamento` (
  `ID_Medicamento` int(11) NOT NULL,
  `Nome_Prod` varchar(300) NOT NULL,
  `Marca_Prod` varchar(300) NOT NULL,
  `Validade` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `medicamento`
--

INSERT INTO `medicamento` (`ID_Medicamento`, `Nome_Prod`, `Marca_Prod`, `Validade`) VALUES
(1, 'Paracetamol', 'CIMED', '2029-09-09'),
(2, 'Novalgina', 'Rexol', '2022-09-05'),
(3, 'Dorflex', 'CIMED', '2025-09-08');

-- --------------------------------------------------------

--
-- Estrutura para tabela `medico`
--

CREATE TABLE `medico` (
  `ID_Med` int(11) NOT NULL,
  `CRM` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `medico`
--

INSERT INTO `medico` (`ID_Med`, `CRM`) VALUES
(10, '9809'),
(15, '8574');

-- --------------------------------------------------------

--
-- Estrutura para tabela `paciente`
--

CREATE TABLE `paciente` (
  `ID_Pac` int(11) NOT NULL,
  `Data_Abertura` date DEFAULT NULL,
  `Nome` varchar(50) NOT NULL,
  `Data_Nasc` date DEFAULT NULL,
  `Sex` varchar(1) DEFAULT NULL,
  `Endereco` varchar(300) NOT NULL,
  `Telefone` varchar(300) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `paciente`
--

INSERT INTO `paciente` (`ID_Pac`, `Data_Abertura`, `Nome`, `Data_Nasc`, `Sex`, `Endereco`, `Telefone`, `Email`) VALUES
(2, '2019-05-07', 'JosÃ© Maria de Oliveira', '1958-03-04', 'M', 'SQS 204 Bloco G 606', '6134210290', 'josemaria@gmail.com'),
(4, '2019-07-05', 'Ricardo Alves', '1994-07-01', 'M', 'SQS 405 Bloco H', '6199222332', 'ricardo@gmail.com'),
(5, '2019-09-05', 'Gabriel dos Santos', '1988-09-02', 'M', 'SHTQ Quadra 02 Casa 06', '61222222', 'gabriel@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `prescricao`
--

CREATE TABLE `prescricao` (
  `ID_Pres` int(11) NOT NULL,
  `Nome_Med` varchar(300) NOT NULL,
  `Nome_Pac` varchar(300) NOT NULL,
  `Nome_Medicamento` varchar(300) NOT NULL,
  `Descricao` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `prescricao`
--

INSERT INTO `prescricao` (`ID_Pres`, `Nome_Med`, `Nome_Pac`, `Nome_Medicamento`, `Descricao`) VALUES
(7, 'Ricardo Santos', 'Gabriel dos Santos', 'Paracetamol', 'Tomar antes de dormir');

-- --------------------------------------------------------

--
-- Estrutura para tabela `retorno`
--

CREATE TABLE `retorno` (
  `ID_Ret` int(11) NOT NULL,
  `ID_Con` int(11) NOT NULL,
  `Nome_Med` varchar(200) NOT NULL,
  `Data_Consulta` date DEFAULT NULL,
  `Horario` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `ID_Usuario` int(11) NOT NULL,
  `Matricula` varchar(180) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Senha` varchar(16) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Data_Nasc` date DEFAULT NULL,
  `Sex` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`ID_Usuario`, `Matricula`, `Nome`, `Senha`, `Email`, `Data_Nasc`, `Sex`) VALUES
(1, '2211', 'Thiago Santana Marques', '123', 'thiagossmarques@gmail.com', '1995-07-02', 'M'),
(10, '29780', 'Osvaldo Cruz', '123', 'osvaldo@med.com', '1872-05-05', 'M'),
(12, '345', 'Jose Hernandes Silva', '8899', 'jose@hotmail.com', '1967-09-07', 'M'),
(14, '123', 'Thiago Santana Marques', '4343', 'thiagossmarques@gmail.com', '1901-01-01', 'F'),
(15, '5676', 'Otavio Luiz Ribeiro', '12345', 'otavio@med.com', '1965-05-03', 'M'),
(16, '8765', 'Maria da Costa Silva', '12345', 'maria@enf.com', '1965-03-02', 'F'),
(18, '5050', 'Flavio Amaral Silva', '123', 'flavio@gmail.com', '1980-05-06', 'M');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`ID_Con`);

--
-- Índices de tabela `enfermeiro`
--
ALTER TABLE `enfermeiro`
  ADD UNIQUE KEY `ID_Enf` (`ID_Enf`);

--
-- Índices de tabela `estoque`
--
ALTER TABLE `estoque`
  ADD UNIQUE KEY `ID_Enf` (`ID_Prod`);

--
-- Índices de tabela `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`ID_Hos`);

--
-- Índices de tabela `medicamento`
--
ALTER TABLE `medicamento`
  ADD PRIMARY KEY (`ID_Medicamento`);

--
-- Índices de tabela `medico`
--
ALTER TABLE `medico`
  ADD UNIQUE KEY `ID_Med` (`ID_Med`);

--
-- Índices de tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`ID_Pac`);

--
-- Índices de tabela `prescricao`
--
ALTER TABLE `prescricao`
  ADD PRIMARY KEY (`ID_Pres`);

--
-- Índices de tabela `retorno`
--
ALTER TABLE `retorno`
  ADD PRIMARY KEY (`ID_Ret`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_Usuario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `consulta`
--
ALTER TABLE `consulta`
  MODIFY `ID_Con` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de tabela `enfermeiro`
--
ALTER TABLE `enfermeiro`
  MODIFY `ID_Enf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `ID_Prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `hospital`
--
ALTER TABLE `hospital`
  MODIFY `ID_Hos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `medicamento`
--
ALTER TABLE `medicamento`
  MODIFY `ID_Medicamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `medico`
--
ALTER TABLE `medico`
  MODIFY `ID_Med` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `ID_Pac` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de tabela `prescricao`
--
ALTER TABLE `prescricao`
  MODIFY `ID_Pres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de tabela `retorno`
--
ALTER TABLE `retorno`
  MODIFY `ID_Ret` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `enfermeiro`
--
ALTER TABLE `enfermeiro`
  ADD CONSTRAINT `enfermeiro_ibfk_1` FOREIGN KEY (`ID_Enf`) REFERENCES `usuario` (`ID_Usuario`);

--
-- Restrições para tabelas `estoque`
--
ALTER TABLE `estoque`
  ADD CONSTRAINT `estoque_ibfk_1` FOREIGN KEY (`ID_Prod`) REFERENCES `medicamento` (`ID_Medicamento`);

--
-- Restrições para tabelas `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `medico_ibfk_1` FOREIGN KEY (`ID_Med`) REFERENCES `usuario` (`ID_Usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
