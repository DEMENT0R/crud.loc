-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 02 2018 г., 19:25
-- Версия сервера: 5.6.38
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `u5055967_upwork`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tblktr`
--

CREATE TABLE `tblktr` (
  `date` timestamp NOT NULL,
  `name` text NOT NULL,
  `kpowner` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `percentage` int(11) NOT NULL,
  `acctype` int(11) NOT NULL,
  `haul` text NOT NULL,
  `tujuan` text NOT NULL,
  `amount` int(11) NOT NULL,
  `consultantid` text NOT NULL,
  `method` text NOT NULL,
  `asnafLuar` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `tblktr`
--

INSERT INTO `tblktr` (`date`, `name`, `kpowner`, `phone`, `address`, `percentage`, `acctype`, `haul`, `tujuan`, `amount`, `consultantid`, `method`, `asnafLuar`, `status`) VALUES
('0000-00-00 00:00:00', '12', '', '', '', 0, 0, '', '', 0, '', '', '', 0),
('0000-00-00 00:00:00', 'test tester', 'dsa', '123', 'dsdadsa, 1', 10, 1, 'qwe', 'asd', 10, '3', 'zxc', 'cxz', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
