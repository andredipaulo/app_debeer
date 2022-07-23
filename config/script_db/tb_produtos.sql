CREATE TABLE `tb_produtos` (
    `id` int NOT NULL AUTO_INCREMENT primary key,
    `produto` varchar(100) NOT NULL,
    `descricao` text,
    `data_cadastro` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
)
    ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_0900_ai_ci;
