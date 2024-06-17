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
--alteração feita apenas porque foi necessária
alter table especies_animais add column nome_cientifico varchar(100);
INSERT INTO especies_animais (id, nome, foto, descricao, habitos_alimentares, areas_habitat, comportamento, nome_cientifico) VALUES
(1, 'Gambá-de-quatro-olhos', NULL, 'O Philander frenatus é um mamífero encontrado na região serrana do Rio de Janeiro. Ele é conhecido por suas habilidades de escavação e por se alimentar principalmente de insetos e frutas.', 'Onívoro, se alimenta principalmente de insetos e frutas.', 'Florestas tropicais e áreas arbustivas.', 'O Philander frenatus é noturno e solitário, passando a maior parte do tempo nas árvores.', 'Philander frenatus'),
(2, 'Esquilo-caxinguelê', NULL, 'O Guerlinguetus brasiliensis, também conhecido como esquilo, é comum na região serrana do Rio de Janeiro. Ele é um pequeno mamífero que se alimenta de sementes, frutas e insetos.', 'Herbívoro, se alimenta principalmente de sementes e frutas.', 'Florestas tropicais e áreas arborizadas.', 'O Guerlinguetus brasiliensis é ágil e rápido, passando a maior parte do tempo nas árvores em busca de alimento.', 'Guerlinguetus brasiliensis'),
(3, 'Rato-do-mato', NULL, 'O Abrawayaomys ruschii é um pequeno roedor nativo da região serrana do Rio de Janeiro. Ele é conhecido por sua dieta variada, que inclui sementes, frutas e pequenos insetos.', 'Onívoro, se alimenta de uma variedade de alimentos, incluindo sementes, frutas e insetos.', 'Florestas tropicais e áreas arborizadas.', 'O Abrawayaomys ruschii é um roedor tímido e geralmente é encontrado em locais com boa cobertura vegetal.', 'Abrawayaomys ruschii'),
(4, 'Rato-do-campo', NULL, 'O Akodon cursor é um pequeno roedor que habita a região serrana do Rio de Janeiro. Ele é conhecido por sua agilidade e hábitos noturnos. Sua dieta consiste principalmente de sementes e pequenos insetos.', 'Onívoro, se alimenta principalmente de sementes e pequenos insetos.', 'Florestas tropicais e áreas arborizadas.', 'O Akodon cursor é noturno e solitário, passando a maior parte do tempo no chão da floresta.', 'Akodon cursor'),
(5, 'Rato-montês', NULL, 'O Akodon montensis é um roedor encontrado na região serrana do Rio de Janeiro. Ele se alimenta principalmente de sementes e insetos. É conhecido por ser ágil e rápido em seus movimentos.', 'Onívoro, se alimenta principalmente de sementes e insetos.', 'Florestas tropicais e áreas arbustivas.', 'O Akodon montensis é um roedor noturno que passa a maior parte do tempo no solo da floresta.', 'Akodon montensis'),
(6, 'Rato-de-lábios-rosados', NULL, 'O Bibimys labiosus é um roedor comum na região serrana do Rio de Janeiro. Ele se alimenta principalmente de sementes e frutas. É conhecido por sua natureza tímida e evasiva.', 'Herbívoro, se alimenta principalmente de sementes e frutas.', 'Florestas tropicais e áreas arborizadas.', 'O Bibimys labiosus é um roedor tímido que passa a maior parte do tempo no solo da floresta, evitando predadores.', 'Bibimys labiosus'),
(7, 'Rato-toupeira-brasileiro', NULL, 'O Blarinomys breviceps é um pequeno roedor nativo da região serrana do Rio de Janeiro. Ele se alimenta principalmente de insetos e pequenos vertebrados. É conhecido por sua habilidade de cavar tocas no solo.', 'Onívoro, se alimenta principalmente de insetos e pequenos vertebrados.', 'Florestas tropicais e áreas arbustivas.', 'O Blarinomys breviceps é um roedor noturno que passa a maior parte do tempo no solo da floresta, onde cava tocas para se abrigar e se reproduzir.', 'Blarinomys breviceps'),
(8, 'Rato-de-patterson', NULL, 'O Brucepattersonius griserufescens é um pequeno roedor encontrado na região serrana do Rio de Janeiro. Ele se alimenta principalmente de sementes, frutas e pequenos insetos. É conhecido por sua natureza curiosa e por explorar seu ambiente.', 'Onívoro, se alimenta principalmente de sementes, frutas e pequenos insetos.', 'Florestas tropicais e áreas arbustivas.', 'O Brucepattersonius griserufescens é um roedor noturno que passa a maior parte do tempo no solo da floresta, explorando seu ambiente em busca de alimento e abrigo.', 'Brucepattersonius griserufescens'),
(9, 'Rato-castor', NULL, 'O Castoria angustidens é um pequeno roedor nativo da região serrana do Rio de Janeiro. Ele se alimenta principalmente de sementes, frutas e pequenos insetos. É conhecido por sua habilidade de escalar árvores.', 'Onívoro, se alimenta principalmente de sementes, frutas e pequenos insetos.', 'Florestas tropicais e áreas arbustivas.', 'O Castoria angustidens é um roedor noturno e arborícola, passando a maior parte do tempo nas árvores em busca de alimento.', 'Castoria angustidens'),
(10, 'Rato-de-dorso-cinza', NULL, 'O Delomys dorsalis é um roedor encontrado na região serrana do Rio de Janeiro. Ele se alimenta principalmente de sementes e pequenos insetos. É conhecido por sua coloração dorsal distintiva e por viver em árvores.', 'Onívoro, se alimenta principalmente de sementes e pequenos insetos.', 'Florestas tropicais e áreas arbustivas.', 'O Delomys dorsalis é um roedor noturno que passa a maior parte do tempo nas árvores, onde constrói ninhos para se abrigar.', 'Delomys dorsalis'),
(11, 'Rato-de-listra-dorsal', NULL, 'O Delomys sublineatus é um pequeno roedor nativo da região serrana do Rio de Janeiro. Ele se alimenta principalmente de sementes, frutas e pequenos insetos. É conhecido por sua coloração dorsal listrada.', 'Onívoro, se alimenta principalmente de sementes, frutas e pequenos insetos.', 'Florestas tropicais e áreas arbustivas.', 'O Delomys sublineatus é um roedor noturno que passa a maior parte do tempo no solo da floresta, explorando seu ambiente em busca de alimento e abrigo.', 'Delomys sublineatus'),
(12, 'Rato-de-oryzomys', NULL, 'O Euryoryzomys russatus é um pequeno roedor comum na região serrana do Rio de Janeiro. Ele se alimenta principalmente de sementes, frutas e pequenos insetos. É conhecido por sua coloração avermelhada e por ser encontrado em áreas de vegetação densa.', 'Onívoro, se alimenta principalmente de sementes, frutas e pequenos insetos.', 'Florestas tropicais e áreas arbustivas.', 'O Euryoryzomys russatus é um roedor noturno e arborícola, passando a maior parte do tempo nas árvores em busca de alimento e abrigo.', 'Euryoryzomys russatus'),
(13, 'Rato-julio', NULL, 'O Juliomys ossitenuis é um pequeno roedor encontrado na região serrana do Rio de Janeiro. Ele se alimenta principalmente de sementes, frutas e pequenos insetos. É conhecido por sua cauda preênsil e por ser encontrado em áreas de floresta densa.', 'Onívoro, se alimenta principalmente de sementes, frutas e pequenos insetos.', 'Florestas tropicais e áreas arbustivas.', 'O Juliomys ossitenuis é um roedor noturno e arborícola, passando a maior parte do tempo nas árvores em busca de alimento e abrigo.', 'Juliomys ossitenuis'),
(14, 'Rato-pintado', NULL, 'O Juliomys pictipes é um pequeno roedor nativo da região serrana do Rio de Janeiro. Ele se alimenta principalmente de sementes, frutas e pequenos insetos. É conhecido por suas patas traseiras listradas e por ser encontrado em áreas de floresta densa.', 'Onívoro, se alimenta principalmente de sementes, frutas e pequenos insetos.', 'Florestas tropicais e áreas arbustivas.', 'O Juliomys pictipes é um roedor noturno e arborícola, passando a maior parte do tempo nas árvores em busca de alimento e abrigo.', 'Juliomys pictipes'),
(15, 'Rato-dágua', NULL, 'O Nectomys squamipes é um pequeno roedor nativo da região serrana do Rio de Janeiro. Ele se alimenta principalmente de sementes, frutas e pequenos insetos. É conhecido por suas habilidades de natação e por ser encontrado em áreas alagadas.', 'Onívoro, se alimenta principalmente de sementes, frutas e pequenos insetos.', 'Florestas tropicais e áreas alagadas.', 'O Nectomys squamipes é um roedor noturno e semi-aquático, passando a maior parte do tempo próximo a corpos d água em busca de alimento.', 'Nectomys squamipes'),
(16, 'Rato-do-campo', NULL, 'O Necromys lasiurus é um pequeno roedor nativo da região serrana do Rio de Janeiro. Ele se alimenta principalmente de sementes, frutas e pequenos insetos. É conhecido por sua habilidade de cavar tocas no solo.', 'Onívoro, se alimenta principalmente de sementes, frutas e pequenos insetos.', 'Florestas tropicais e áreas arbustivas.', 'O Necromys lasiurus é um roedor noturno e fossorial, passando a maior parte do tempo no solo da floresta, onde cava tocas para se abrigar.', 'Necromys lasiurus'),
(17, 'Cuíca', NULL, 'A Monodelphis americana, também conhecida como cuíca, é um pequeno mamífero encontrado na região serrana do Rio de Janeiro. Ela se alimenta principalmente de insetos e frutas. É conhecida por sua agilidade e por viver em áreas de floresta densa.', 'Onívoro, se alimenta principalmente de insetos e frutas.', 'Florestas tropicais e áreas arbustivas.', 'A Monodelphis americana é noturna e terrestre, passando a maior parte do tempo no solo da floresta em busca de alimento.', 'Monodelphis americana');x