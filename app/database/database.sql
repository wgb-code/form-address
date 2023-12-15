CREATE TABLE numero (
    id_numero BIGINT AUTO_INCREMENT PRIMARY KEY,
    ddd INT NOT NULL,
    numero VARCHAR(50) NOT NULL
);

CREATE TABLE codigo_validacao(
    id_codigo BIGINT AUTO_INCREMENT PRIMARY KEY,
    codigo VARCHAR(10) NOT NULL,
    FOREIGN KEY (numero) REFERENCES numero(id);
);

CREATE TABLE email(
    id_email BIGINT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(50) NOT NULL
);

CREATE TABLE usuario(
    id_usuario BIGINT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    sobrenome VARCHAR(255) NOT NULL,
    nascimento DATE,
    local_nascimento VARCHAR(255)
);

CREATE TABLE contatos(
    id_contatos BIGINT AUTO_INCREMENT PRIMARY KEY,
    rede VARCHAR(255),
    usuario VARCHAR(255)
);

CREATE TABLE endereco(
    id_endereco BIGINT AUTO_INCREMENT PRIMARY KEY,
    endereco VARCHAR(150) NOT NULL,
    cidade  VARCHAR(50) NOT NULL,
    pais VARCHAR(30) NOT NULL,
    cep VARCHAR(10),
    descricao VARCHAR(255)
);