-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3307
-- Время создания: Дек 30 2015 г., 12:46
-- Версия сервера: 5.5.38-log
-- Версия PHP: 5.5.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `novosti`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `categoria`
--

INSERT INTO `categoria` (`id`, `name`) VALUES
(1, 'qwert'),
(2, 'qwrqwrqw'),
(3, 'asd');

-- --------------------------------------------------------

--
-- Структура таблицы `forms`
--

CREATE TABLE IF NOT EXISTS `forms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` tinytext NOT NULL,
  `login` tinytext NOT NULL,
  `password` tinytext NOT NULL,
  `datareg` date NOT NULL,
  `lastvisit` datetime NOT NULL,
  `blockunblock` enum('unblock','block') DEFAULT 'unblock',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Дамп данных таблицы `forms`
--

INSERT INTO `forms` (`id`, `email`, `login`, `password`, `datareg`, `lastvisit`, `blockunblock`) VALUES
(1, ' 1@q.q', 'w', 'q', '2015-12-09', '2015-12-09 10:11:08', 'unblock'),
(2, ' 1@q.q', '114144', '123', '2015-12-09', '2015-12-09 10:23:14', 'unblock'),
(3, ' 1@q.q', 'w', '1', '2015-12-09', '2015-12-09 10:29:12', 'unblock'),
(4, ' 1@q.q', 'w', '1', '2015-12-09', '2015-12-09 10:29:26', 'unblock'),
(5, ' 123@nbv.ru', '2', 'q', '2015-12-09', '2015-12-09 10:32:41', 'unblock'),
(6, ' 8as@mail.ru', 'qwerty', '1234', '2015-12-09', '2015-12-09 11:17:05', 'unblock'),
(8, ' ', 'qwes', 's', '2015-12-09', '2015-12-09 11:33:56', 'unblock'),
(9, ' ', '', '', '2015-12-09', '2015-12-09 11:40:28', 'unblock'),
(10, ' ', '', '', '2015-12-09', '2015-12-09 11:41:06', 'unblock'),
(11, ' ', '', '', '2015-12-09', '2015-12-09 11:41:33', 'unblock'),
(12, ' ', 'qwerty', '1234', '2015-12-09', '2015-12-09 11:44:38', 'unblock'),
(19, ' ', 'qwerty', '1234', '2015-12-09', '2015-12-09 11:56:16', 'unblock'),
(20, ' ', 'qwerty', '1234', '2015-12-09', '2015-12-09 11:57:01', 'unblock'),
(21, ' ', '123', '123', '2015-12-09', '2015-12-09 12:00:31', 'unblock'),
(22, ' ', 'q45werty', '45', '2015-12-09', '2015-12-09 12:02:57', 'unblock'),
(23, '', '', '', '2015-12-11', '2015-12-11 10:42:56', 'unblock'),
(24, '', '', '', '2015-12-11', '2015-12-11 10:42:58', 'unblock'),
(25, '', '', '', '2015-12-11', '2015-12-11 10:42:59', 'unblock'),
(26, '', '', '', '2015-12-11', '2015-12-11 10:43:00', 'unblock'),
(27, '', '', '', '2015-12-11', '2015-12-11 10:49:24', 'unblock'),
(28, '', '', '', '2015-12-11', '2015-12-11 11:01:58', 'unblock'),
(29, '', '', '', '2015-12-11', '2015-12-11 11:02:19', 'unblock'),
(30, '', '', '', '2015-12-11', '2015-12-11 11:02:19', 'unblock'),
(31, '', '', '', '2015-12-11', '2015-12-11 11:02:20', 'unblock'),
(32, '123', '123@nbv.ru', '1', '2015-12-11', '2015-12-11 11:02:40', 'unblock'),
(33, '', '', '', '2015-12-11', '2015-12-11 11:03:34', 'unblock'),
(34, '', '', '', '2015-12-11', '2015-12-11 11:04:04', 'unblock'),
(35, '', '', '', '2015-12-11', '2015-12-11 11:04:13', 'unblock'),
(36, '', '', '', '2015-12-11', '2015-12-11 11:14:08', 'unblock'),
(37, '', '', '', '2015-12-11', '2015-12-11 11:14:12', 'unblock'),
(38, '', '', '', '2015-12-11', '2015-12-11 11:14:15', 'unblock'),
(39, '', '', '', '2015-12-11', '2015-12-11 11:15:27', 'unblock'),
(40, '', '', '', '2015-12-11', '2015-12-11 11:25:16', 'unblock'),
(41, '', '', '', '2015-12-14', '2015-12-14 09:16:05', 'unblock'),
(42, '', '', '', '2015-12-14', '2015-12-14 11:49:30', 'unblock'),
(43, '12345', '1@q.q', '1', '2015-12-14', '2015-12-14 11:53:58', 'unblock');

-- --------------------------------------------------------

--
-- Структура таблицы `maintexts`
--

CREATE TABLE IF NOT EXISTS `maintexts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `body` text NOT NULL,
  `url` tinytext NOT NULL,
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show',
  `lang` enum('ru','en') NOT NULL DEFAULT 'ru',
  `putdate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `maintexts`
--

INSERT INTO `maintexts` (`id`, `name`, `body`, `url`, `showhide`, `lang`, `putdate`) VALUES
(1, 'добро пожаловать на сайт', 'всем привет, тут появиться скоро очень интересная новость', 'index', 'show', 'ru', '2015-12-04 00:00:00'),
(2, 'контакты', 'номер телефона: + 123-45-789-87-65\r\nадрес: минск\r\nпочта: нету', 'contact', 'show', 'ru', '2015-12-04 00:00:00'),
(3, 'раз', 'картинка будет тут и все)', 'risynok', 'show', 'ru', '2015-12-03 00:00:00'),
(4, 'спасибо', 'спасибо', 'thankyoupage', 'show', 'ru', '2015-12-11 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `prices`
--

CREATE TABLE IF NOT EXISTS `prices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `vv0` text NOT NULL,
  `vv1` text NOT NULL,
  `vv2` text NOT NULL,
  `vv3` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Дамп данных таблицы `prices`
--

INSERT INTO `prices` (`id`, `user_id`, `vv0`, `vv1`, `vv2`, `vv3`) VALUES
(25, 1, 'елка', 'калючая', '100', 'qwert'),
(26, 1, 'ручка', 'пишущая', '20', 'asd');

-- --------------------------------------------------------

--
-- Структура таблицы `statias`
--

CREATE TABLE IF NOT EXISTS `statias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` tinytext NOT NULL,
  `name_categoria` tinytext NOT NULL,
  `editor1` text NOT NULL,
  `file_foto` tinytext NOT NULL,
  `table-categoria` tinytext NOT NULL,
  `data_reg` datetime NOT NULL,
  `blockunblock` enum('block','unblock') NOT NULL DEFAULT 'unblock',
  `user_id` int(11) NOT NULL,
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show',
  `update1` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Дамп данных таблицы `statias`
--

INSERT INTO `statias` (`id`, `cat_id`, `name_categoria`, `editor1`, `file_foto`, `table-categoria`, `data_reg`, `blockunblock`, `user_id`, `showhide`, `update1`) VALUES
(37, '1', 'qwe', '<p>qweqweqweq</p>\r\n', '15_12_28_12_32_41.jpg', '', '2015-12-28 11:32:41', 'unblock', 1, 'show', '2015-12-28'),
(38, '1', '1234', '<p>1</p>\r\n', '15_12_30_10_20_05.png', '', '2015-12-30 09:20:05', 'unblock', 1, 'show', '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
