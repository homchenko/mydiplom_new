-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 23 2019 г., 20:52
-- Версия сервера: 5.7.20
-- Версия PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mydiplom`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `old_price` decimal(10,2) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `fat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filler` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '0',
  `is_new` tinyint(4) NOT NULL DEFAULT '0',
  `is_hit` tinyint(4) NOT NULL DEFAULT '0',
  `is_recommended` tinyint(4) NOT NULL DEFAULT '0',
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `slug`, `title`, `image`, `category_id`, `content`, `old_price`, `price`, `fat`, `filler`, `is_active`, `is_new`, `is_hit`, `is_recommended`, `excerpt`, `created_at`, `updated_at`) VALUES
(1, 'creamy-citrus-icecream', 'Сливочное с апельсиновым джемом и цитрусовой стружкой', 'image.jpg', 1, NULL, '3.00', '2.00', '10', '', 1, 0, 1, 1, NULL, NULL, NULL),
(2, 'creamy-coffee-chocolate-icecream', 'Сливочно-кофейное с кусочками шоколада', 'image.jpg', 1, NULL, '25.00', NULL, '30', 'chocolate', 1, 1, 1, 1, NULL, NULL, NULL),
(3, 'creamy-strawberry-chocolate-icecream', 'Сливочно-клубничное с присыпкой из белого шоколада', 'image.jpg', 1, NULL, '26.00', NULL, '25', 'chocolate', 1, 0, 0, 0, NULL, NULL, NULL),
(4, 'creamy-crèmebrulee-caramel-icecream', 'Сливочное крем-брюле с карамельной подливкой', 'image.jpg', 1, NULL, '40.00', NULL, '35', 'caramel', 1, 0, 1, 0, NULL, NULL, NULL),
(5, 'creamy-lingonberry jam-icecream', 'Сливочное с брусничным джемом', 'image.jpg', 1, NULL, '25.00', NULL, '15', 'jam', 1, 0, 1, 0, NULL, NULL, NULL),
(6, '\r\ncreamy-blueberry-icecream', 'Сливочно-черничное с цельными ягодами черники', 'image.jpg', 1, NULL, '30.00', NULL, '35', '\r\nfruits', 1, 0, 1, 0, NULL, NULL, NULL),
(7, 'creamy-lemon-icecream', 'Сливочно-лимонное с карамельной присыпкой', 'image.jpg', 1, NULL, '20.00', NULL, '35', 'caramel', 1, 0, 1, 0, NULL, NULL, NULL),
(8, 'creamy-сhocolate-icecream', 'Сливочное с шоколадной стружкой', 'image.jpg', 1, NULL, '15.00', NULL, '20', 'chocolate', 1, 0, 1, 0, NULL, NULL, NULL),
(9, 'creamy-vanilla-icecream', 'Сливочно-ванильное с кусочками шоколада', 'image.jpg', 1, NULL, '20.00', NULL, '20', 'chocolate', 1, 0, 1, 0, NULL, NULL, NULL),
(10, 'creamy-menthol-icecream', 'Сливочное с ментоловым сиропом', 'image.jpg', 1, NULL, '25.00', NULL, '10', 'syrup', 1, 0, 1, 1, NULL, NULL, NULL),
(11, 'creamy-black-chocolate-icecream', 'Сливочное с кусочками черного шоколада', 'image.jpg', 1, NULL, '20.00', NULL, '15', 'chocolate', 1, 0, 0, 0, NULL, NULL, NULL),
(12, 'creamy-mint-icecream', 'Сливочное с мятным сиропом', 'image.jpg', 1, NULL, '20.00', NULL, '5', 'syrup', 1, 1, 0, 0, NULL, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
