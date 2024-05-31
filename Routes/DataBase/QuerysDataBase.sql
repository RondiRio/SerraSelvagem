-- Criar o banco de dados SerraSelvagem se ainda não existir
CREATE DATABASE IF NOT EXISTS SerraSelvagem;

-- Selecionar o banco de dados recém-criado
USE SerraSelvagem;

-- Criar a tabela de usuários
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    senha VARCHAR(255)
);

-- Criar a tabela de recuperação de senha
CREATE TABLE IF NOT EXISTS recuperacao (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    token VARCHAR(255),
    expiracao DATETIME,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);

-- Criar a tabela de ataques
CREATE TABLE IF NOT EXISTS Atack (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    tipo VARCHAR(100),
    data TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);


CREATE TABLE especies_animais (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    foto VARCHAR(255),
    descricao TEXT,
    habitos_alimentares TEXT,
    areas_habitat TEXT,
    comportamento TEXT
);
