-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 05 2022 г., 10:26
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `loya`
--

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `studio` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `year` varchar(4) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `alt_picture` varchar(255) NOT NULL,
  `index_show` tinyint(1) NOT NULL,
  `animated` tinyint(1) NOT NULL,
  `portfolio_visible` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id`, `name`, `studio`, `type`, `year`, `picture`, `alt_picture`, `index_show`, `animated`, `portfolio_visible`) VALUES
(1, 'Атака Титанов', 'Wit Studio, MAPPA', 'Полное дублирование', '2013', 'aot.jpg', 'aot.jpg', 1, 0, 1),
(2, 'Реинкарнация безработного', 'Studio Bind', 'Закадровая', '2021', 'jobless_reincarnation.jpg', 'jobless_reincarnation.jpg', 1, 0, 1),
(3, 'Доктор Хаус', 'FOX', 'Закадровая', '2004', 'doctor_house.jpg', 'doctor_house.jpg', 0, 0, 1),
(4, 'Дороро', 'MAPPA', 'Полное дублирование', '2019', 'dororo.jpg', 'dororo.jpg', 1, 1, 1),
(5, 'Пламенный отряд', 'David Production', 'Полное дублирование', '2019', 'fireforce.jpg', 'fireforce.jpg', 1, 1, 1),
(6, 'Клинок рассекающий демонов', 'ufotable', 'Полное дублирование', '2019', 'demon_slayer.jpg', 'demon_slayer.jpg', 1, 1, 1),
(7, 'Чёрный клевер', 'Studio Pierrot', 'Полное дублирование', '2017', 'black_clover.jpg', 'black_clover.jpg', 0, 0, 1),
(8, 'Пищеблок', 'Кинопоиск', 'Закадровая', '2021', 'pisheblok.jpg', 'pisheblok.jpg', 0, 0, 1),
(9, 'Эйфория', 'HBO', 'Полное дублирование', '2022', 'euphoria.jpg', 'euphoria.jpg', 0, 0, 1),
(10, 'Доктор Стоун', 'TMS Entertainment', 'Полное дублирование', '2019', 'doctor_stone.jpg', 'doctor_stone.jpg', 0, 0, 1),
(11, 'Конец ***ного мира', 'Netflix', 'Полное дублирование', '2017', 'the_end_of_fucking_world.jpg', 'the_end_of_the_fucking_world.jpg', 0, 0, 1),
(12, 'Академия смерти', 'SYFY', 'Закадровый', '2019', 'deadly_class.jpg', 'deadly_class.jpg', 0, 0, 1),
(13, 'Эхо террора', 'MAPPA', 'Полное дублирование', '2014', 'terror_in_resonance.jpg', 'terror_in_resonance.jpg', 0, 0, 1),
(14, 'Ковбой Бибоп', 'Sunrise', 'Полное дублирование', '1998', 'cowboy_bibop.jpg', 'cowboy_bibop.jpg', 0, 0, 1),
(15, 'Платиновый предел', 'Signal M.D.', 'Полное дублирование', '2021', 'platinum_end.jpg', 'platinum_end.jpg', 0, 0, 1),
(16, 'Шарлотта', 'P. A. Works', 'Полное дублирование', '2015', 'sharlotte.jpg', 'sharlotte.jpg', 0, 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `character1_name` varchar(40) NOT NULL,
  `character1_anime` varchar(50) NOT NULL,
  `character1_picture` varchar(255) NOT NULL,
  `character2_name` varchar(40) NOT NULL,
  `character2_anime` varchar(50) NOT NULL,
  `character2_picture` varchar(255) NOT NULL,
  `animated` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `team`
--

INSERT INTO `team` (`id`, `name`, `photo`, `character1_name`, `character1_anime`, `character1_picture`, `character2_name`, `character2_anime`, `character2_picture`, `animated`) VALUES
(1, 'Кирилл Пономарёв', '1.jpg', 'Иноске', 'Клинок рассекающий демонов', 'inoske.jpg', 'Юно', 'Чёрный клевер', 'uno.jpg', 0),
(2, 'Дмитрий Чернов', '2.png', 'Джокер', 'Пламенный отряд', 'joker.jpg', 'Руиджерд Спердиа', 'Реинкарнация безработного', 'ruijerd.jpg', 0),
(3, 'Дарья Никулина', '6.jpg', 'Криста', 'Атака Титанов', 'krista.jpg', 'Эйрис', 'Реинкарнация безработного', 'iris.jpg', 0),
(4, 'Марк Худяков', '4.jpg', 'Эрен Йегер', 'Атака Титанов', 'eren.jpg', 'Аста', 'Чёрный Клевер', 'asta.jpg', 1),
(5, 'Никита Морозов', '3.jpg', 'Тандзиро Камадо', 'Клинок рассекающий демонов', 'tanjiro.jpg', 'Шинра Кусакабэ', 'Пламенный отряд', 'shinra.jpg', 1),
(6, 'Ева Кудрявцева', '5.jpg', 'Микаса Аккерман', 'Атака Титанов', 'mikasa.jpg', 'Микако', 'Пламенный отряд', 'mikako.jpg', 1),
(7, 'Елизавета Маркова', '7.jpg', 'Кохаку', 'Доктор Стоуна', 'kohaku.jpg', 'Алиса', 'Конец ***ного мира', 'alissa.jpg', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
