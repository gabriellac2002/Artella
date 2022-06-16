-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Jun-2022 às 14:31
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `artella`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(23, 'Esculturas'),
(22, 'NFTs'),
(21, 'Pinturas'),
(20, 'Telas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) NOT NULL,
  `productId` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `images`
--

INSERT INTO `images` (`id`, `url`, `productId`) VALUES
(105, 'StarryNight-3.jpg', 133),
(106, 'StarryNight-2.jpg', 133),
(107, 'StarryNight-1.jpg', 133),
(108, 'noiteEstrelada3.jpg', 134),
(109, 'noiteEstrelada2.jpg', 134),
(110, 'noiteEstrelada.jpg', 134),
(114, 'Operarios3.png', 137),
(115, 'Operarios2.png', 137),
(116, 'Operarios1.png', 137),
(117, 'monalisa3.png', 138),
(118, 'monalisa2.png', 138),
(119, 'monalisa1.png', 138),
(120, 'mariaecristo3.jpg', 139),
(121, 'mariaecristo2.jpg', 139),
(122, 'mariaecristo1.jpg', 139),
(123, 'aleijadinho3.jpg', 140),
(124, 'aleijadinho2.jpg', 140),
(125, 'aleijadinho1.jpg', 140),
(126, 'akhenaton3.jpeg', 141),
(127, 'akhenaton2.jpeg', 141),
(128, 'akhenaton1.jpeg', 141),
(129, 'opensador3.jpg', 142),
(130, 'opensador2.jpg', 142),
(131, 'opensador.jpg', 142),
(132, 'davi3.jpg', 143),
(133, 'davi2.jpg', 143),
(134, 'davi1.jpg', 143),
(135, 'LAOCOONESEUSFILHOS3.jpg', 144),
(136, 'LAOCOONESEUSFILHOS2.jpg', 144),
(137, 'LAOCOONESEUSFILHOS1.jpg', 144),
(138, 'acriacaodeadao2.png', 145),
(139, 'acriacaodeadao3.png', 145),
(140, 'acriacaodeadao1.png', 145),
(141, 'JuizoFina3.png', 146),
(142, 'JuizoFina2.png', 146),
(143, 'JuizoFina1.png', 146),
(144, 'ONascimentodeVenus3.jpg', 147),
(145, 'ONascimentodeVenus2.jpg', 147),
(146, 'ONascimentodeVenus1.jpg', 147),
(147, 'ultimaceia3.jpg', 148),
(148, 'ultimaceia2.jpg', 148),
(149, 'ultimaceia1.jpg', 148),
(150, 'LadywithanErmine3.jpg', 149),
(151, 'LadywithanErmine2.jpg', 149),
(152, 'LadywithanErmine1.jpg', 149),
(153, 'virgemDasRochas3.jpg', 150),
(154, 'virgemDasRochas2.jpg', 150),
(155, 'virgemDasRochas1.jpg', 150),
(156, 'tarsiladoamaral3.jpg', 136),
(157, 'tarsiladoamaral1.jpg', 136),
(158, 'tarsiladoamaral2.jpg', 136),
(159, 'autoretrato3.jpg', 135),
(160, 'autoretrato2.jpg', 135),
(161, 'autoretrato.jpg', 135),
(162, 'BoredApe1.jpg', 151),
(163, 'BoredApe2.jpg', 151),
(164, 'BoredApe3.jpg', 151),
(165, 'BoredApeMarinheiro1.jpg', 152),
(166, 'BoredApeMarinheiro2.jpg', 152),
(167, 'BoredApeMarinheiro3.jpg', 152),
(168, 'BoredApeaviador1.jpg', 153),
(169, 'BoredApeaviador2.jpg', 153),
(170, 'BoredApeaviador3.jpg', 153),
(171, 'BoredApelazer1.jpg', 154),
(172, 'BoredApelazer2.jpg', 154),
(173, 'BoredApelazer3.jpg', 154),
(174, 'BoredApeNY1.jpg', 155),
(175, 'BoredApeNY2.jpg', 155),
(176, 'BoredApeNY3.jpg', 155),
(177, 'BoredApeOculos1.jpg', 156),
(178, 'BoredApeOculos2.jpg', 156),
(179, 'BoredApeOculos3.jpg', 156);

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(128) NOT NULL,
  `price` decimal(11,2) UNSIGNED NOT NULL,
  `categoryId` int(11) UNSIGNED NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `categoryId`, `description`) VALUES
(133, 'Noite Estrelada ', '899.99', 20, '\r\n          A Noite Estrelada é uma pintura de Vincent van Gogh de 1889. A obra retrata a vista da janela de um quarto do hospício de Saint-Rémy-de-Provence, pouco antes do nascer do sol, com a adição de um vilarejo idealizado pelo artista.A tela faz part'),
(134, 'Noite Estrelada Sobre o Ródano', '799.99', 20, 'Noite Estrelada é uma pintura de 1888 do pintor holandês Vincent van Gogh. O quadro foi pintado após a sua mudança para Arles, no sul da França, nove meses antes de ser hospitalizado e dois anos antes de cometer suicídio. Em Arles, Van Gogh produziu outra'),
(135, 'Auto Retrato van gogh', '695.99', 20, '\r\n          Autorretrato com a Orelha Enfaixada ou Autorretrato com a Orelha Cortada é uma obra feita a partir da técnica de óleo sobre tela, por Vincent Van Gogh, em um autorretrato, como o título da pintura sugere.\r\n\r\nEm 23 de dezembro de 1888, antevésp'),
(136, 'O pescador', '249.99', 20, '\r\n          Tarsila do Amaral (1886-1973) foi uma das mais importantes artistas do Brasil. Após passar dois anos em Paris, retorna a São Paulo em 1922 para integrar o “Grupo dos Cinco ”, que defende as ideias da Semana de Arte Moderna e toma a frente do M'),
(137, 'Operários', '549.99', 20, 'Operários é um quadro pintado em 1933 por Tarsila do Amaral que representa o processo de industrialização do estado de São Paulo e o imenso número e a variedade étnica das pessoas vindas de todas as partes do Brasil para trabalhar nas fábricas, que começa'),
(138, 'Mona Lisa', '899.99', 20, 'Mona Lisa (\"Senhora Lisa\") também conhecida como A Gioconda(em italiano: La Gioconda, \"a sorridente\"; em francês, La Joconde) ou ainda Mona Lisa del Giocondo (\"Senhora Lisa esposa de Giocondo\") é a mais notável e conhecida obra de Leonardo da Vinci, um do'),
(139, 'Maria e Cristo', '799.89', 23, 'Óleo sobre madeira (168 cm x 112 cm), é obra de Leonardo da Vinci, pintada em Milão entre 1508 e 1513. Leonardo nunca finalizou este painel. Leonardo havia conquistado total maestria ao modelar o rosto humano. A Virgem e Santa Ana nesta pintura têm as mes'),
(140, 'Luz, cedro e pedra', '499.00', 23, 'Obra de Antonio Francisco Lisboa, o Aleijadinho (1730-1814), compreendido por Coppola como artista integral, isto é, arquiteto, escultor e “ornamentista sacro”. As referências que podem ter levado Coppola ao artista mineiro naquela época vão de artigos do'),
(141, 'Akhenaton', '299.00', 23, 'Aquenáton (Akhenaton: \"Aquele que louva Aton\", \"Util a Aton\" ou \"Usado por Aton\") conhecido antes do quinto ano de reinado como Amenófis IV ou em egípcio antigo Amenotepe IV, foi um Faraó da XVIII dinastia do Egito que reinou por dezessete anos e morreu e'),
(142, 'O Pensador', '899.99', 23, 'O Pensador (francês: Le Penseur) é uma das mais famosas esculturas de bronze do escultor francês Auguste Rodin. Retrata um homem em meditação soberba, lutando com uma poderosa força interna.'),
(143, 'Davi', '499.99', 23, '\r\n          \r\n                David ou Davi é uma das esculturas mais famosas do artista renascentista Michelangelo. O trabalho retrata o herói bíblico com realismo anatômico impressionante, sendo considerada uma das mais importantes obras do Renascimento'),
(144, 'LAOCOÖN E SEUS FILHOS', '499.89', 23, '\r\n          É uma das mais famosas esculturas antigas desde que foi escavada em Roma em 1506.A estátua representa Laocoonte e seus dois filhos, Antífantes e Timbreu, sendo estrangulados por duas serpentes marinhas, uma lenda da Guerra de Troia também rela'),
(145, 'A Criação de Adão', '799.00', 21, '\r\n          A Criação de Adão é um fresco de 280 cm x 570 cm, pintado por Michelangelo Buonarotti por volta de 1511. A cena representa um episódio do Livro do Gênesis no qual Deus cria o primeiro homem a partir do pó da terra: Adão.\r\n          \r\n         '),
(146, 'Juízo Final ', '399.00', 21, '\r\n          O Dia do Juízo Final é um fresco do pintor renascentista italiano Michelangelo Buonarroti medindo 13,7 m x 12,2 m. É na visão do artista, uma representação do Juízo Final inspirada na narrativa bíblica.\r\n          \r\n                           '),
(147, 'O Nascimento de Vênus', '699.00', 21, '\r\n          O Nascimento de Vênus é uma pintura de Sandro Botticelli, encomendada por Lorenzo di Pierfrancesco de Médici para a Villa Medicea di Castello.E de têmpera sobre tela e mede 172,5 cm de altura por 278,5 cm de largura.\r\n\r\nA pintura representa a '),
(148, 'A Última Ceia', '899.99', 21, '\r\n          \r\n          A Última Ceia (em italiano: L\'Ultima Cena e também Il Cenacolo) é um afresco de Leonardo da Vinci para a igreja de Santa Maria delle Grazie em Milão, Itália. O trabalho presume-se que tenha sido iniciado por volta de 1495-96 e foi '),
(149, 'Lady with an Ermine', '499.99', 21, '\r\nDama com Arminho é uma pintura feita no ano de 1489-1490 pelo artista Leonardo da Vinci. A obra, feita em óleo sobre madeira, é um retrato de Cecília Gallerani, encomendado pelo amante dela, Ludovico Sforza.\r\n\r\nCecília fez parte de uma família abastada '),
(150, 'Virgem das Rochas', '399.99', 21, 'Esta versão foi pintada em torno de 1483-1486, ou mais cedo. A pintura é poucos centímetros maior que a versão de Londres.[1] A maioria dos estudiosos são unânimes em afirmar que o trabalho foi em sua maior parte executado por Leonardo, e é a primeira das'),
(151, 'Bored Ape, Arco-íris', '399.99', 22, 'O Bored Ape Yacht Club, ou muitas vezes coloquialmente chamado Bored Ape, é uma coleção de tokens não fungíveis construída na blockchain Ethereum. A coleção apresenta fotos de perfil de macacos de desenho animado que são gerados proceduralmente por um alg'),
(152, 'Bored Ape, Marinheiro ', '599.99', 22, '\r\n           Bored Ape Yacht Club, ou muitas vezes coloquialmente chamado Bored Ape, é uma coleção de tokens não fungíveis construída na blockchain Ethereum. A coleção apresenta fotos de perfil de macacos de desenho animado que são gerados proceduralmente'),
(153, 'Bored Ape, Aviador', '699.00', 22, 'O Bored Ape Yacht Club, ou muitas vezes coloquialmente chamado Bored Ape, é uma coleção de tokens não fungíveis construída na blockchain Ethereum. A coleção apresenta fotos de perfil de macacos de desenho animado que são gerados proceduralmente por um alg'),
(154, 'Bored Ape, Lazer', '799.00', 22, 'O Bored Ape Yacht Club, ou muitas vezes coloquialmente chamado Bored Ape, é uma coleção de tokens não fungíveis construída na blockchain Ethereum. A coleção apresenta fotos de perfil de macacos de desenho animado que são gerados proceduralmente por um alg'),
(155, 'Bored Ape, NY', '899.00', 22, 'O Bored Ape Yacht Club, ou muitas vezes coloquialmente chamado Bored Ape, é uma coleção de tokens não fungíveis construída na blockchain Ethereum. A coleção apresenta fotos de perfil de macacos de desenho animado que são gerados proceduralmente por um alg'),
(156, 'Bored Ape, Óculos', '599.00', 22, '\r\n          O Bored Ape Yacht Club, ou muitas vezes coloquialmente chamado Bored Ape, é uma coleção de tokens não fungíveis construída na blockchain Ethereum. A coleção apresenta fotos de perfil de macacos de desenho animado que são gerados proceduralment');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(32) NOT NULL
) ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(5, 'kleiton123', 'kleiton123@gmail.com', 'kleiton123'),
(6, 'pedro123', 'pedro123@gmail.com', 'pedro123'),
(7, 'lucas123', 'lucas123@gmail.com', 'lucas123'),
(8, 'gustavo123', 'gustavo123@gmail.com', 'gustavo123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Índices para tabela `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ProductFK` (`productId`);

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `nameindex` (`name`),
  ADD KEY `CategoryFK` (`categoryId`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `ProductFK` FOREIGN KEY (`productId`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `CategoryFK` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
