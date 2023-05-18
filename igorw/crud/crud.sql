SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome_completo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `data_de_nascimento` varchar(255) NOT NULL,
  `cep` varchar(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;
