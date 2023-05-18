CREATE TABLE `pedido` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
  `Número do Pedido` varchar(255) NOT NULL,
  `Número do Cliente` varchar(255) NOT NULL,
  `Nome e Sobrenome` varchar(20) NOT NULL
  `Cidade Natal` varchar(255) NOT NULL,
  `Região` varchar(255) NOT NULL,
  `Rua` varchar(20) NOT NULL
  `Cep` varchar(255) NOT NULL,
  `Número da Residência` varchar(20) NOT NULL
  `E-mail` varchar(255) NOT NULL,
  `CPF` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
