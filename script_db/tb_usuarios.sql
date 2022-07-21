CREATE TABLE `tb_usuarios` (
   `id` int NOT NULL AUTO_INCREMENT,
   `nome` varchar(100) NOT NULL,
   `sobrenome` varchar(250) NOT NULL,
   `email` varchar(100) NOT NULL,
   `senha` varchar(20) NOT NULL,
   `data_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;