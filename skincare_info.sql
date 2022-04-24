-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Abr-2022 às 19:05
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `skincare_info`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `customer`
--

INSERT INTO `customer` (`id`, `username`, `email`, `phone`, `password`) VALUES
(4, 'Julio', 'julio@teste.com', '87 445 4675', '$2y$10$hlsICucewvWG1nq9X9r58eXMMUFUErifCKTKnNgFrxc8uuBeOV.Z2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `instock` tinyint(1) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `brand`, `type`, `instock`, `price`, `image`) VALUES
(28, 'Olay Regenerist Whip Cream - 50ml', 'Olay Regenerist Whip Cream is a light as air, anti-ageing moisturiser for effective firming & reduced look of wrinkles.', 'OLAY', 'moisturizer', 0, 35, 'uploads/olay-vitamin-c-24-gel-cream.jpg'),
(29, 'CeraVe Moisturising Cream For Dry to Very Dry Skin', 'CeraVe Moisturising Cream is a rich moisturiser with Ceramides to help protect and repair skin&#39;s natural barriers. Suitable for both face and body, this CeraVe moisturiser is ideal for Eczema-prone skin. ', 'CeraVe', 'moisturizer', 0, 5, 'uploads/71FygrSD1uL._SL1500_.jpg'),
(30, 'Cien Aqua Moisturising Cream Gel ', 'Aqua Moisturizing Cream. Essential protection for all skin types. No added Mineral Oils. With UV Protection. With Glycerol & Panthenol', 'Cien', 'moisturizer', 0, 15, 'uploads/61zSeHGKigL.jpg'),
(31, 'Flash Nap - Instant Revival Eye Gel Cream', 'Puffiness and dark circles – chill: Fake a flash nap and instantly wake up tired-looking eyes with this 2-in-1 eye cream and concealer primer. ', 'Fenty', 'eye cream', 0, 47, 'uploads/fenty-beauty-eye-massage-tool-z.jpg'),
(32, 'Neutrogena® Hydro Boost Gel-Cream Eye', 'Keep your skin looking supple and hydrated every day. Our unique water gel-cream formula absorbs quickly, like a gel, but has the long-lasting moisturizing power of a cream to quench your extra-dry skin’s thirst.', 'Neutrogena', 'eye cream', 0, 22, 'uploads/6811049_alt_1.jpg'),
(33, 'rise & reset eye cream 24-hr hydration', 'Rich, nourishing formula feels velvety on skin & enhances concealer performance making it the perfect treatment for day or night.', 'Tarte', 'eye cream', 0, 36, 'uploads/1438-Rise-Reset-eye-cream-AWAKE_main-img-MAIN.jpg'),
(34, 'Knockout Tingle Treatment Toner', 'A vegan, skin-tingling toner treatment that acts as a complexion workout in a bottle to help resurface your skin and balance its pH.', 'Tarte', 'toner', 0, 39, 'uploads/20190428_184316.jpg'),
(35, 'Kylie Skin by Kylie Jenner Clarifying Exfoliating Toner (150ml)', 'Part of Kylie Skin’s two-step clarifying routine, the Clarifying Exfoliating Toner is a lightweight formula that, with regular use, helps to soothe and refresh the skin.', 'Kylie Skin', 'toner', 0, 34, 'uploads/17885325_38024034_2048.jpg'),
(36, 'Nourishing Facial Toner With Natural Almond Oil', 'A delicate scent envelops your skin, while a mild formula with natural almond oil soothes and nourishes. Dirt and residues are removed thoroughly, while skin is ideally supplied with moisture.', 'NIVEA', 'toner', 0, 5, 'uploads/nivea-nourishing-facial-toner-200-ml-203263-en.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
