CREATE TABLE `cliente` (
  `numero_cliente` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `nome` varchar(255) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `complemento` varchar(255) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `curso` (
  `numero_curso` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `parceria` (
  `nome_empresa` int(50) PRIMARY KEY AUTO_INCREMENT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;