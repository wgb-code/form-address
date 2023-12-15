CREATE TABLE endereco(
    id_endereco BIGINT AUTO_INCREMENT PRIMARY KEY,
    endereco VARCHAR(150) NOT NULL,
    cidade  VARCHAR(50) NOT NULL,
    pais VARCHAR(30) NOT NULL,
    cep VARCHAR(10),
    descricao VARCHAR(255)
);