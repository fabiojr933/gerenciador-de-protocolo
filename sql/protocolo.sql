-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Out-2021 às 01:20
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 7.3.29
SET
    SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
    time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;

/*!40101 SET NAMES utf8mb4 */
;

--
-- Banco de dados: `protocolo`
--
-- --------------------------------------------------------
--
-- Estrutura da tabela `aluno`
--
CREATE TABLE `aluno` (
    `id_aluno` int(11) NOT NULL,
    `nome` varchar(50) NOT NULL,
    `endereco` varchar(50) NOT NULL,
    `bairro` varchar(20) NOT NULL,
    `cidade` varchar(20) NOT NULL,
    `telefone` varchar(15) NOT NULL,
    `matricula` int(11) NOT NULL,
    `email` varchar(50) NOT NULL,
    `id_curso` int(11) NOT NULL,
    `data_cadastro` date NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- --------------------------------------------------------
--
-- Estrutura da tabela `curso`
--
CREATE TABLE `curso` (
    `id_curso` int(11) NOT NULL,
    `descricao` varchar(50) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Extraindo dados da tabela `curso`
--
INSERT INTO
    `curso` (`id_curso`, `descricao`)
VALUES
    (9, 'ADMINISTRACAO '),
    (10, 'AGRONOMIA'),
    (11, 'ARQUITETURA E URBANISMO '),
    (12, 'BIOMEDICINA '),
    (13, 'CIÊNCIAS CONTÁBEIS '),
    (14, 'DIREITO '),
    (15, 'ECONOMIA '),
    (16, 'EDUCAÇÃO FÍSICA '),
    (17, 'ENFERMAGEM'),
    (18, 'ENGENHARIA CIVIL'),
    (20, 'FARMÁCIA '),
    (21, 'FISIOTERAPIA'),
    (22, 'JORNALISMO'),
    (23, 'LETRAS'),
    (24, 'NUTRIÇÃO'),
    (25, 'ODONTOLOGIA');

-- --------------------------------------------------------
--
-- Estrutura da tabela `documento`
--
CREATE TABLE `documento` (
    `id_documento` int(11) NOT NULL,
    `id_curso` int(11) NOT NULL,
    `id_aluno` int(11) NOT NULL,
    `protocolo` varchar(150) NOT NULL,
    `data_cadastro` date DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- --------------------------------------------------------
--
-- Estrutura da tabela `documento_certificado_casamento_nascimento`
--
CREATE TABLE `documento_certificado_casamento_nascimento` (
    `id` int(11) NOT NULL,
    `id_documento` int(11) NOT NULL,
    `certificado_casamento_nascimento01_basename` varchar(50) DEFAULT NULL,
    `certificado_casamento_nascimento01_extension` varchar(50) DEFAULT NULL,
    `certificado_casamento_nascimento01_filename` varchar(50) DEFAULT NULL,
    `certificado_casamento_nascimento02_basename` varchar(50) DEFAULT NULL,
    `certificado_casamento_nascimento02_extension` varchar(50) DEFAULT NULL,
    `certificado_casamento_nascimento02_filename` varchar(50) DEFAULT NULL,
    `certificado_casamento_nascimento03_basename` varchar(50) DEFAULT NULL,
    `certificado_casamento_nascimento03_extension` varchar(50) DEFAULT NULL,
    `certificado_casamento_nascimento03_filename` varchar(50) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- --------------------------------------------------------
--
-- Estrutura da tabela `documento_certificado_ensino_medio`
--
CREATE TABLE `documento_certificado_ensino_medio` (
    `id` int(11) NOT NULL,
    `id_documento` int(11) NOT NULL,
    `certificado_ensino_medio01_basename` varchar(50) DEFAULT NULL,
    `certificado_ensino_medio01_extension` varchar(50) DEFAULT NULL,
    `certificado_ensino_medio01_filename` varchar(50) DEFAULT NULL,
    `certificado_ensino_medio02_basename` varchar(50) DEFAULT NULL,
    `certificado_ensino_medio02_extension` varchar(50) DEFAULT NULL,
    `certificado_ensino_medio02_filename` varchar(50) DEFAULT NULL,
    `certificado_ensino_medio03_basename` varchar(50) DEFAULT NULL,
    `certificado_ensino_medio03_extension` varchar(50) DEFAULT NULL,
    `certificado_ensino_medio03_filename` varchar(50) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- --------------------------------------------------------
--
-- Estrutura da tabela `documento_cpf`
--
CREATE TABLE `documento_cpf` (
    `id` int(11) NOT NULL,
    `id_documento` int(11) NOT NULL,
    `cpf01_basename` varchar(50) DEFAULT NULL,
    `cpf01_extension` varchar(50) DEFAULT NULL,
    `cpf01_filename` varchar(50) DEFAULT NULL,
    `cpf02_basename` varchar(50) DEFAULT NULL,
    `cpf02_extension` varchar(50) DEFAULT NULL,
    `cpf02_filename` varchar(50) DEFAULT NULL,
    `cpf03_basename` varchar(50) DEFAULT NULL,
    `cpf03_extension` varchar(50) DEFAULT NULL,
    `cpf03_filename` varchar(50) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- --------------------------------------------------------
--
-- Estrutura da tabela `documento_foto_aluno`
--
CREATE TABLE `documento_foto_aluno` (
    `id` int(11) NOT NULL,
    `id_documento` int(11) NOT NULL,
    `foto_aluno01_basename` varchar(50) DEFAULT NULL,
    `foto_aluno01_extension` varchar(50) DEFAULT NULL,
    `foto_aluno01_filename` varchar(50) DEFAULT NULL,
    `foto_aluno02_basename` varchar(50) DEFAULT NULL,
    `foto_aluno02_extension` varchar(50) DEFAULT NULL,
    `foto_aluno02_filename` varchar(50) DEFAULT NULL,
    `foto_aluno03_basename` varchar(50) DEFAULT NULL,
    `foto_aluno03_extension` varchar(50) DEFAULT NULL,
    `foto_aluno03_filename` varchar(50) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- --------------------------------------------------------
--
-- Estrutura da tabela `documento_historico_escolar`
--
CREATE TABLE `documento_historico_escolar` (
    `id` int(11) NOT NULL,
    `id_documento` int(11) NOT NULL,
    `historico_escolar01_basename` varchar(50) DEFAULT NULL,
    `historico_escolar01_extension` varchar(50) DEFAULT NULL,
    `historico_escolar01_filename` varchar(50) DEFAULT NULL,
    `historico_escolar02_basename` varchar(50) DEFAULT NULL,
    `historico_escolar02_extension` varchar(50) DEFAULT NULL,
    `historico_escolar02_filename` varchar(50) DEFAULT NULL,
    `historico_escolar03_basename` varchar(50) DEFAULT NULL,
    `historico_escolar03_extension` varchar(50) DEFAULT NULL,
    `historico_escolar03_filename` varchar(50) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- --------------------------------------------------------
--
-- Estrutura da tabela `documento_reservista`
--
CREATE TABLE `documento_reservista` (
    `id` int(11) NOT NULL,
    `id_documento` int(11) NOT NULL,
    `reservista01_basename` varchar(50) DEFAULT NULL,
    `reservista01_extension` varchar(50) DEFAULT NULL,
    `reservista01_filename` varchar(50) DEFAULT NULL,
    `reservista02_basename` varchar(50) DEFAULT NULL,
    `reservista02_extension` varchar(50) DEFAULT NULL,
    `reservista02_filename` varchar(50) DEFAULT NULL,
    `reservista03_basename` varchar(50) DEFAULT NULL,
    `reservista03_extension` varchar(50) DEFAULT NULL,
    `reservista03_filename` varchar(50) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- --------------------------------------------------------
--
-- Estrutura da tabela `documento_rg`
--
CREATE TABLE `documento_rg` (
    `id` int(11) NOT NULL,
    `id_documento` int(11) NOT NULL,
    `rg01_basename` varchar(50) DEFAULT NULL,
    `rg01_extension` varchar(50) DEFAULT NULL,
    `rg01_filename` varchar(50) DEFAULT NULL,
    `rg02_basename` varchar(50) DEFAULT NULL,
    `rg02_extension` varchar(50) DEFAULT NULL,
    `rg02_filename` varchar(50) DEFAULT NULL,
    `rg03_basename` varchar(50) DEFAULT NULL,
    `rg03_extension` varchar(50) DEFAULT NULL,
    `rg03_filename` varchar(50) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- --------------------------------------------------------
--
-- Estrutura da tabela `documento_titulo_eleitor`
--
CREATE TABLE `documento_titulo_eleitor` (
    `id` int(11) NOT NULL,
    `id_documento` int(11) NOT NULL,
    `titulo_eleitor01_basename` varchar(50) DEFAULT NULL,
    `titulo_eleitor01_extension` varchar(50) DEFAULT NULL,
    `titulo_eleitor01_filename` varchar(50) DEFAULT NULL,
    `titulo_eleitor02_basename` varchar(50) DEFAULT NULL,
    `titulo_eleitor02_extension` varchar(50) DEFAULT NULL,
    `titulo_eleitor02_filename` varchar(50) DEFAULT NULL,
    `titulo_eleitor03_basename` varchar(50) DEFAULT NULL,
    `titulo_eleitor03_extension` varchar(50) DEFAULT NULL,
    `titulo_eleitor03_filename` varchar(50) DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

-- --------------------------------------------------------
--
-- Estrutura da tabela `usuario`
--
CREATE TABLE `usuario` (
    `id_usuario` int(11) NOT NULL,
    `nome` varchar(55) NOT NULL,
    `email` varchar(50) NOT NULL,
    `senha` varchar(150) NOT NULL,
    `data_cadastro` date DEFAULT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--
INSERT INTO
    `usuario` (
        `id_usuario`,
        `nome`,
        `email`,
        `senha`,
        `data_cadastro`
    )
VALUES
    (
        28,
        'ADMIN',
        'admin@gmail.com',
        '202cb962ac59075b964b07152d234b70',
        '2021-10-11'
    ),
    (
        29,
        'FABIO JUNIOR',
        'fabio@gmail.com',
        '202cb962ac59075b964b07152d234b70',
        '2021-10-11'
    ),
    (
        30,
        'TESTE',
        'teste@gmail.com',
        'e2a6683a650322d33adb8a87fa77ba6a',
        '2021-10-11'
    ),
    (
        31,
        'ADMINISTRADOR 123',
        'ffedcdcwfe@gmail.com',
        '14ef36d0b875c9f0e644fc26b85826c7',
        '2021-10-11'
    ),
    (
        32,
        'TESTE',
        'fa@gmail.com',
        '0cad0b2e0d14f63415d32db29896eb84',
        '2021-10-11'
    ),
    (
        33,
        'ADMINISTRADOR 123',
        'ffedcdcwfe@gmail.com',
        '8d94eae3288c5518fcba56252b22ce4b',
        '2021-10-11'
    );

--
-- Índices para tabelas despejadas
--
--
-- Índices para tabela `aluno`
--
ALTER TABLE
    `aluno`
ADD
    PRIMARY KEY (`id_aluno`),
ADD
    KEY `fk_id_curso` (`id_curso`);

--
-- Índices para tabela `curso`
--
ALTER TABLE
    `curso`
ADD
    PRIMARY KEY (`id_curso`);

--
-- Índices para tabela `documento`
--
ALTER TABLE
    `documento`
ADD
    PRIMARY KEY (`id_documento`),
ADD
    KEY `fk_id_Curso_doc` (`id_curso`),
ADD
    KEY `fk_id_aluno_doc` (`id_aluno`);

--
-- Índices para tabela `documento_certificado_casamento_nascimento`
--
ALTER TABLE
    `documento_certificado_casamento_nascimento`
ADD
    PRIMARY KEY (`id`),
ADD
    KEY `fk_id_documento_certificado_casamento_nascimento` (`id_documento`);

--
-- Índices para tabela `documento_certificado_ensino_medio`
--
ALTER TABLE
    `documento_certificado_ensino_medio`
ADD
    PRIMARY KEY (`id`),
ADD
    KEY `fk_id_documento_certificado_ensino_medio` (`id_documento`);

--
-- Índices para tabela `documento_cpf`
--
ALTER TABLE
    `documento_cpf`
ADD
    PRIMARY KEY (`id`),
ADD
    KEY `fk_id_documento_cpf` (`id_documento`);

--
-- Índices para tabela `documento_foto_aluno`
--
ALTER TABLE
    `documento_foto_aluno`
ADD
    PRIMARY KEY (`id`),
ADD
    KEY `fk_id_documento_foto_aluno` (`id_documento`);

--
-- Índices para tabela `documento_historico_escolar`
--
ALTER TABLE
    `documento_historico_escolar`
ADD
    PRIMARY KEY (`id`),
ADD
    KEY `fk_id_documento_historico_escolar` (`id_documento`);

--
-- Índices para tabela `documento_reservista`
--
ALTER TABLE
    `documento_reservista`
ADD
    PRIMARY KEY (`id`),
ADD
    KEY `fk_id_documento_reservista` (`id_documento`);

--
-- Índices para tabela `documento_rg`
--
ALTER TABLE
    `documento_rg`
ADD
    PRIMARY KEY (`id`),
ADD
    KEY `fk_id_documento_rg` (`id_documento`);

--
-- Índices para tabela `documento_titulo_eleitor`
--
ALTER TABLE
    `documento_titulo_eleitor`
ADD
    PRIMARY KEY (`id`),
ADD
    KEY `fk_id_documento_titulo_eleitor` (`id_documento`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE
    `usuario`
ADD
    PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--
--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE
    `aluno`
MODIFY
    `id_aluno` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 37;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE
    `curso`
MODIFY
    `id_curso` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 36;

--
-- AUTO_INCREMENT de tabela `documento`
--
ALTER TABLE
    `documento`
MODIFY
    `id_documento` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 200;

--
-- AUTO_INCREMENT de tabela `documento_certificado_casamento_nascimento`
--
ALTER TABLE
    `documento_certificado_casamento_nascimento`
MODIFY
    `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 7;

--
-- AUTO_INCREMENT de tabela `documento_certificado_ensino_medio`
--
ALTER TABLE
    `documento_certificado_ensino_medio`
MODIFY
    `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 18;

--
-- AUTO_INCREMENT de tabela `documento_cpf`
--
ALTER TABLE
    `documento_cpf`
MODIFY
    `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 52;

--
-- AUTO_INCREMENT de tabela `documento_foto_aluno`
--
ALTER TABLE
    `documento_foto_aluno`
MODIFY
    `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 10;

--
-- AUTO_INCREMENT de tabela `documento_historico_escolar`
--
ALTER TABLE
    `documento_historico_escolar`
MODIFY
    `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 27;

--
-- AUTO_INCREMENT de tabela `documento_reservista`
--
ALTER TABLE
    `documento_reservista`
MODIFY
    `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 14;

--
-- AUTO_INCREMENT de tabela `documento_rg`
--
ALTER TABLE
    `documento_rg`
MODIFY
    `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 81;

--
-- AUTO_INCREMENT de tabela `documento_titulo_eleitor`
--
ALTER TABLE
    `documento_titulo_eleitor`
MODIFY
    `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 12;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE
    `usuario`
MODIFY
    `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 40;

--
-- Restrições para despejos de tabelas
--
--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE
    `aluno`
ADD
    CONSTRAINT `fk_id_curso` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`);

--
-- Limitadores para a tabela `documento`
--
ALTER TABLE
    `documento`
ADD
    CONSTRAINT `fk_id_Curso_doc` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`),
ADD
    CONSTRAINT `fk_id_aluno_doc` FOREIGN KEY (`id_aluno`) REFERENCES `aluno` (`id_aluno`);

--
-- Limitadores para a tabela `documento_certificado_casamento_nascimento`
--
ALTER TABLE
    `documento_certificado_casamento_nascimento`
ADD
    CONSTRAINT `fk_id_documento_certificado_casamento_nascimento` FOREIGN KEY (`id_documento`) REFERENCES `documento` (`id_documento`);

--
-- Limitadores para a tabela `documento_certificado_ensino_medio`
--
ALTER TABLE
    `documento_certificado_ensino_medio`
ADD
    CONSTRAINT `fk_id_documento_certificado_ensino_medio` FOREIGN KEY (`id_documento`) REFERENCES `documento` (`id_documento`);

--
-- Limitadores para a tabela `documento_cpf`
--
ALTER TABLE
    `documento_cpf`
ADD
    CONSTRAINT `fk_id_documento_cpf` FOREIGN KEY (`id_documento`) REFERENCES `documento` (`id_documento`);

--
-- Limitadores para a tabela `documento_foto_aluno`
--
ALTER TABLE
    `documento_foto_aluno`
ADD
    CONSTRAINT `fk_id_documento_foto_aluno` FOREIGN KEY (`id_documento`) REFERENCES `documento` (`id_documento`);

--
-- Limitadores para a tabela `documento_historico_escolar`
--
ALTER TABLE
    `documento_historico_escolar`
ADD
    CONSTRAINT `fk_id_documento_historico_escolar` FOREIGN KEY (`id_documento`) REFERENCES `documento` (`id_documento`);

--
-- Limitadores para a tabela `documento_reservista`
--
ALTER TABLE
    `documento_reservista`
ADD
    CONSTRAINT `fk_id_documento_reservista` FOREIGN KEY (`id_documento`) REFERENCES `documento` (`id_documento`);

--
-- Limitadores para a tabela `documento_rg`
--
ALTER TABLE
    `documento_rg`
ADD
    CONSTRAINT `fk_id_documento_rg` FOREIGN KEY (`id_documento`) REFERENCES `documento` (`id_documento`);

--
-- Limitadores para a tabela `documento_titulo_eleitor`
--
ALTER TABLE
    `documento_titulo_eleitor`
ADD
    CONSTRAINT `fk_id_documento_titulo_eleitor` FOREIGN KEY (`id_documento`) REFERENCES `documento` (`id_documento`);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;