-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 15 2018 г., 16:08
-- Версия сервера: 5.5.25
-- Версия PHP: 5.4.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- База данных: `books`
--

-- --------------------------------------------------------

--
-- Структура таблицы `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `book`
--

INSERT INTO `book` (`id`, `name`, `author`) VALUES
(1, 'Книга 1', 'Автор 1'),
(2, 'Книга 2', 'Автор 2');

-- --------------------------------------------------------

--
-- Структура таблицы `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `book_id` int(10) unsigned NOT NULL,
  `num` int(10) unsigned NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `book_id` (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `page`
--

INSERT INTO `page` (`id`, `book_id`, `num`, `text`) VALUES
(1, 2, 1, 'Страница 1 Книга 2'),
(2, 2, 2, 'Страница 2 Книга 2'),
(3, 1, 1, 'Страница 1'),
(4, 1, 2, 'Страница 2');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `page`
--
ALTER TABLE `page`
  ADD CONSTRAINT `page_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`);
