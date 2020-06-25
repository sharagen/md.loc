-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 17 2020 г., 23:52
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `middb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `adm`
--

CREATE TABLE `adm` (
  `id` int(10) NOT NULL,
  `login` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `adm`
--

INSERT INTO `adm` (`id`, `login`, `pass`) VALUES
(1, 'admin', 'root');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(255) NOT NULL,
  `name` varchar(40) NOT NULL,
  `desc` text NOT NULL,
  `cost` int(100) NOT NULL,
  `img` tinytext NOT NULL,
  `goodsID` int(10) NOT NULL,
  `new` int(10) NOT NULL,
  `rec` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `desc`, `cost`, `img`, `goodsID`, `new`, `rec`) VALUES
(1, 'Футболка midnight', 'Футболка owersize с широкими плечами. Коллекция MIDNIGHT. \r\n<br><br>\r\nТкань сорта пенье\r\nСостав: 95% cotton, 5% spandex. Плотность 170 г/м²', 1500, 'goods/1/1', 1, 0, 0),
(2, 'Футболка ЗАКАТ', 'Футболка owersize с широкими плечами. Коллекция закат. \r\n<br><br>\r\nТкань сорта пенье\r\nСостав: 95% cotton, 5% spandex. Плотность 170 г/м²', 1700, 'goods/1/2', 1, 0, 0),
(3, 'Футболка базовая', 'простая Футболка owersize без принта с широкими плечами. \r\n<br><br>\r\nТкань сорта пенье\r\nСостав: 95% cotton, 5% spandex. Плотность 170 г/м²', 950, 'goods/1/3', 1, 0, 0),
(4, 'Футболка FEELENGS', 'Футболка owersize с широкими плечами. Коллекция Feelings.\r\n<br><br>\r\nТкань сорта пенье Состав: 95% cotton, 5% spandex. Плотность 170 г/м² ', 2000, 'goods/1/4', 1, 0, 0),
(5, 'Футболка moon', 'Футболка owersize с широкими плечами. Коллекция MOON.\r\n<br><br>\r\nТкань сорта пенье Состав: 95% cotton, 5% spandex. Плотность 170 г/м² ', 1500, 'goods/1/5', 1, 1, 0),
(6, 'Футболка SПУТНИК', 'Футболка owersize с широкими плечами. Коллекция SПУТНИК.\r\n<br><br>\r\nТкань сорта пенье Состав: 95% cotton, 5% spandex. Плотность 170 г/м² ', 2000, 'goods/1/6', 1, 1, 0),
(7, 'тостовка с молнией ', 'Худи свободного кроя изготовлено из плотного, премиального качества трикотажа сорта пенье, с добавлением приятного начеса. Внутренняя отделка из сетки. Модель с карманами, эластичными манжетами на рукавах и поясе дополнена застёжкой-молнией и капюшоном.\r\n<BR><BR>\r\nСостав 70% cotton, (внешняя часть) 30% polyester (начес, внутренняя)\r\n\r\n\r\n', 2500, 'goods/2/1', 2, 1, 0),
(8, 'толсктовка базовая ', 'Просто. Ничего больше.\r\n<br>\r\nПо бокам в швах имеются скрытые карманы для телефона и прочих вещей\r\n<br><br>\r\nСостав: 100% cotton. Плотность 220 г/м² ', 2000, 'goods/2/2', 2, 0, 0),
(9, 'Толстовка \"S\"', 'Тёплая толстовка. \r\n<br><br>\r\nТкань сорта пенье\r\nСостав: 100% cotton.', 2000, 'goods/2/3', 2, 0, 0),
(10, 'Толстовка MOON', 'Тёплая толстовка коллекции MOON.\r\nСвободного кроя изготовлено из плотного, премиального качества трикотажа сорта пенье, с добавлением приятного начеса. Внутренняя отделка из сетки. Модель с карманами, эластичными манжетами на рукавах и поясе дополнена застёжкой-молнией и капюшоном.\r\nСостав 70% cotton, (внешняя часть) 30% polyester (начес, внутренняя)\r\n', 2300, 'goods/2/4', 2, 0, 0),
(11, 'Толстовка MIDNIGHT', 'Тёплая толстовка коллекции MIDNIGHT.\r\nСвободного кроя изготовлено из плотного, премиального качества трикотажа сорта пенье, с добавлением приятного начеса. Внутренняя отделка из сетки. Модель с карманами, эластичными манжетами на рукавах и поясе дополнена застёжкой-молнией и капюшоном.\r\nСостав 70% cotton, (внешняя часть) 30% polyester (начес, внутренняя)\r\n', 2300, 'goods/2/5', 2, 1, 1),
(12, 'Свитшот базовый ', 'Простой и удобный свитшот.\r\n<BR><BR>\r\nСостав 70% cotton, 30% polyester', 1700, 'goods/3/1', 3, 0, 0),
(13, 'Свитшот MIDNIGHT', 'Свитшот коллекции MIDNIGHT\r\n<BR><BR>\r\nСостав 70% cotton, 30% polyester', 2200, 'goods/3/2', 3, 0, 1),
(14, 'Свитшот Лунный монах', 'Свитшот от волка для волка.\r\n<BR><BR>\r\nСостав 100% шерсть волка', 2700, 'goods/3/3', 3, 0, 0),
(15, 'Свитшот MOON', 'Свитшот коллекции MOON\r\n<BR><BR>\r\nСостав 70% cotton, 30% polyester', 2200, 'goods/3/4', 3, 0, 0),
(16, 'Рубашка с коротким рукавом', 'Легкая рубашка с коротким руковом\r\n<BR><BR>\r\nСостав 75% cotton, 25% polyester', 3000, 'goods/4/1', 4, 0, 1),
(17, 'Рубашка с длинным рукавом', 'Легкая рубашка с длинным руковом\r\n<BR><BR>\r\nСостав 75% cotton, 25% polyester', 3200, 'goods/4/2', 4, 1, 0),
(18, 'Рюкзак №1', 'Рюкзак для ноутбука\r\nвыполнен из качественных твердых материалов.', 3200, 'goods/5/1', 5, 1, 0),
(19, 'Рюкзак №2', 'Рюкзак для повседневных задач\r\nвыполнен из качественных твердых материалов.', 3200, 'goods/5/2', 5, 0, 0),
(20, 'Рюкзак №3', 'Большой рюкзак\r\nвыполнен из качественных твердых материалов.', 3200, 'goods/5/3', 5, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `name` varchar(40) NOT NULL,
  `cost` int(100) NOT NULL,
  `collor` varchar(10) NOT NULL,
  `size` varchar(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `cost`, `collor`, `size`, `quantity`) VALUES
(1, 'ff', 11, 'b', 's', 1),
(2, '1', 1, '1', '1', 1),
(3, 'черная', 1223, 'белый', 's', 2),
(4, '1', 2, '3', '4', 5);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
