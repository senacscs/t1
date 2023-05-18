SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

CREATE TABLE `products` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `manufactory` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `vendor` varchar(255),    
  `cost` float(20) NOT NULL,
  `storage` int(10) NOT NULL,
  `description` varchar(2000)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;