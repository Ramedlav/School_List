-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 09 2019 г., 00:15
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `eye_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `course` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `deportaments`
--

CREATE TABLE `deportaments` (
  `id` int(11) NOT NULL,
  `deportament_name` varchar(28) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `deportaments`
--

INSERT INTO `deportaments` (`id`, `deportament_name`) VALUES
(0, 'programming ingenery'),
(1, 'apply math');

-- --------------------------------------------------------

--
-- Структура таблицы `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `faculty_name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `faculty`
--

INSERT INTO `faculty` (`id`, `faculty_name`) VALUES
(1, 'AppliedMath'),
(2, 'economics and audit'),
(3, 'sport');

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(5) NOT NULL,
  `id_speciality` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`id`, `group_name`, `id_speciality`) VALUES
(1, '1', 1),
(2, '2', 1),
(3, '1', 2),
(4, '2', 2),
(5, '1', 3),
(6, '2', 3),
(7, '1', 4),
(8, '2', 4),
(9, '1', 5),
(10, '2', 5),
(11, '1', 6),
(12, '2', 6),
(13, '1', 7),
(14, '2', 7),
(15, '1', 8),
(16, '2', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `rating`
--

CREATE TABLE `rating` (
  `id` int(20) NOT NULL,
  `rating` varchar(8) NOT NULL,
  `id_student` int(20) DEFAULT NULL,
  `id_subject` int(5) DEFAULT NULL,
  `id_teacher` int(11) DEFAULT NULL,
  `id_status_rating` int(5) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rating`
--

INSERT INTO `rating` (`id`, `rating`, `id_student`, `id_subject`, `id_teacher`, `id_status_rating`, `date`) VALUES
(1, '75', 2, 0, 1, 1, '2019-09-25'),
(2, '65', 2, 1, 2, 1, '2019-09-25'),
(3, '60', 2, 1, 2, 1, '2019-10-27'),
(4, '87', 2, 1, 2, 1, '2019-09-25'),
(5, '77', 2, 1, 2, 1, '2019-11-11');

-- --------------------------------------------------------

--
-- Структура таблицы `sex`
--

CREATE TABLE `sex` (
  `id` int(11) NOT NULL,
  `gender` varchar(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sex`
--

INSERT INTO `sex` (`id`, `gender`) VALUES
(1, 'male'),
(2, 'famale');

-- --------------------------------------------------------

--
-- Структура таблицы `speciality`
--

CREATE TABLE `speciality` (
  `id` int(11) NOT NULL,
  `speciality_name` varchar(35) NOT NULL,
  `id_faculty` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `speciality`
--

INSERT INTO `speciality` (`id`, `speciality_name`, `id_faculty`) VALUES
(1, 'mathematic', 1),
(2, 'programming ingenering', 1),
(3, 'informathic', 1),
(4, 'accounting', 2),
(5, 'finance and audit', 2),
(6, 'boxing', 3),
(7, 'serfing', 3),
(8, 'powerlifting', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status_name` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`id`, `status_name`) VALUES
(1, 'student'),
(2, 'teacher');

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `surname` varchar(35) NOT NULL,
  `id_status` int(11) DEFAULT NULL,
  `login` varchar(11) DEFAULT NULL,
  `password` varchar(12) DEFAULT NULL,
  `father_name` varchar(35) DEFAULT NULL,
  `burn_date` date DEFAULT NULL,
  `id_sex` int(11) DEFAULT NULL,
  `id_faculty` int(11) DEFAULT NULL,
  `id_speciality` int(11) DEFAULT NULL,
  `id_group` int(11) DEFAULT NULL,
  `id_course` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id`, `name`, `surname`, `id_status`, `login`, `password`, `father_name`, `burn_date`, `id_sex`, `id_faculty`, `id_speciality`, `id_group`, `id_course`) VALUES
(1, 'wqw', 'wqww', 1, NULL, NULL, 'qwqw', '2000-10-10', 1, 1, 1, 1, NULL),
(2, 'sas', 'sass', 1, NULL, NULL, 'sassas', '2000-10-10', 1, 1, 1, 1, NULL),
(3, 'dodo', 'dodo', 1, NULL, NULL, 'dodo', '2000-10-10', 1, 1, 1, 1, NULL),
(4, 'wwwe', 'weww', 2, NULL, NULL, ' ', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'ddd', 'ddd', 2, NULL, NULL, ' ', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'tet', 'tet', 1, NULL, NULL, 'tet', '2000-10-10', 1, 1, 1, 1, NULL),
(7, 'gangl', 'big', 1, NULL, NULL, 'biger', '1989-12-22', 1, 1, 1, 1, NULL),
(8, 'greg', 'wilson', 1, NULL, NULL, 'stain', '2000-10-10', 2, 1, 1, 2, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`) VALUES
(0, 'mathematical analysis'),
(1, 'mathematical logics');

-- --------------------------------------------------------

--
-- Структура таблицы `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `teacher_surname` varchar(25) NOT NULL,
  `teacher_name` varchar(26) NOT NULL,
  `teacher_three_name` varchar(25) NOT NULL,
  `faculty` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `teachers`
--

INSERT INTO `teachers` (`id`, `teacher_surname`, `teacher_name`, `teacher_three_name`, `faculty`) VALUES
(1, 'lamzuk', 'andrey', 'alexeevich', '1'),
(2, 'kazakova', 'svetlana', 'anatolievna', '1'),
(3, 'ganja', 'andrey', 'pavlovich', '0'),
(6, 'perelman', 'georgiy', 'jakovlevich', '1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `deportaments`
--
ALTER TABLE `deportaments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sex`
--
ALTER TABLE `sex`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `speciality`
--
ALTER TABLE `speciality`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `sex`
--
ALTER TABLE `sex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `speciality`
--
ALTER TABLE `speciality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
