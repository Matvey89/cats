-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 19 2017 г., 18:57
-- Версия сервера: 5.6.22-log
-- Версия PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `cats`
--

-- --------------------------------------------------------

--
-- Структура таблицы `aboutusers`
--

CREATE TABLE IF NOT EXISTS `aboutusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `about` tinytext NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `aboutusers`
--

INSERT INTO `aboutusers` (`id`, `name`, `about`, `image`) VALUES
(1, '123', '123', '/media/uplouds/fon.jpg'),
(3, '123', '21321', '/media/uplouds/fon.jpg'),
(4, '1323333333333333', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `gallerys`
--

CREATE TABLE IF NOT EXISTS `gallerys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `picture` tinytext NOT NULL,
  `user_id` int(11) NOT NULL,
  `putdate` date NOT NULL,
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `gallerys`
--

INSERT INTO `gallerys` (`id`, `name`, `picture`, `user_id`, `putdate`, `showhide`) VALUES
(1, 'test1', '/media/uplouds/test.jpg', 0, '0000-00-00', 'show'),
(2, 'test2', '/media/uplouds/test2.jpg', 0, '0000-00-00', 'show'),
(3, 'test3', '/media/uplouds/test3.jpg', 0, '0000-00-00', 'show');

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
  `putdate` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `maintexts`
--

INSERT INTO `maintexts` (`id`, `name`, `body`, `url`, `showhide`, `lang`, `putdate`) VALUES
(1, 'Нужна ли кошка в квартире?', '<p>Кошки сопровождают человека со времен пещер и мамонтов. Они всегда рядом, даже если гуляют где-то сами по себе.\r\n				Отношение человека к кошкам постоянно менялось. \r\n				Кошек любили и ненавидели, обожествляли и убивали, считали благом и недругами. \r\n				А кошки по-прежнему рядом с нами.\r\n				</p>\r\n				Завести в доме кошку – прекрасная идея и смелый шаг. \r\n				Но прежде чем решиться на него, необходимо взвесить все плюсы и минусы содержания кошки в собственной квартире. \r\n				Тут нельзя руководствоваться только эмоциями. \r\n				Всё-таки кошка не игрушка, это живое создание, за которого хозяин несёт ответственность.\r\n				Не зря Антуан де Сент-Экзюпери писал: «Мы в ответе за тех, кого приручили».\r\n				<p>\r\n				<p>Людям нужны кошки.\r\n				Просто необходимы. \r\n				И вовсе не ради борьбы с грызунами или для лечения мигрени.\r\n				А просто для того, чтобы их можно было любить, любоваться ими. \r\n				И каждому, кто держит на коленях спящую кошку, глубоко наплевать — инопланетного она происхождения или вполне земного, передает куда-то информацию о людях или просто спит. \r\n				Лишь бы только кошка позволила себя гладить, лишь бы сладко урчала, когда ее чешут за ухом…\r\n				</p>', 'index', 'show', 'ru', '2017-05-31'),
(2, 'контакты для связи\r\n', 'Мы находимся по адресу:\r\nг. Борисов, ул Н-Неман 18а-23\r\nТелефоны для связи:\r\nМоб. +375292525366;\r\nГород. 95-94-99.\r\n', 'contacts', 'show', 'ru', '2017-05-31'),
(3, 'Кошки среди нас.......', ' \n<pre>Она всегда была немного кошкой...\nона любила спать и молоко.. \nи под перчаткой каждая ладошка\nскрывала пять изящных коготков... \n\nКогда в глазах её блестящих \nлуна свой отражала свет слегка ,  \nона казалась кошкой настоящей\nготовой для внезапного прыжка \n\nОна спала калачиком под пледом,\nа иногда и вовсе не спала\nно каждый день , назло дождям и бедам \n была непринуждённо весела\n,\nНе каждый мог её погладить шёрстку\nиной ,  кто часом мимо проходил\nтрепал за ушком..  но мечтала кошка.. \nчто б кто-то добрый кошку приручил!\n\nПушистый снег её волшебством казался , \nа шоколад - лекарством от разлук.. \nк рассвету нежный сон её касался\nво сне ей снилась пара тёплых рук..\n\nОна от скуки затевала игры ,\n но вскоре устала и от игр..\nтак часто ,  под шикарной шкуркой тигра\nскрывался кот облезлый ,  а не тигр...\n\nМерцает светом лунная дорожка\nчуть слышен звук шагов её в ночи.. \nоднажды навсегда уходит кошка..\nкоторую не смог ты приручить...... \n\nа есть ли кошки среди людей? как их распознать? как сберечь?</pre>', 'about', 'show', 'ru', '2017-06-01'),
(4, 'породы кошек', '<h2>Породы кошек</h2>\r\n\r\n <p>Кошки бывают разными, ласковыми или строптивыми, могут быть голыми или пушистыми, бывают кошки непоседы или наоборот лежебоки.\r\n В настоящее время насчитывается около сотни пород кошек и у каждой породы набор свойственных этой породе характеристик, темперамент, внешние черты и т.д. \r\n Если вы решили завести кошку, самое время посмотреть фотографии кошек на нашем сайте, изучить повадки той или иной породы и сделать правильный выбор! \r\n Перечень рекомендаций, поможет подобрать котенка понравившейся породы для всей семьи.\r\n Раздел «Породы кошек» на нашем сайте, что-то вроде энциклопедии про кошек и котов.\r\n Подробное описание каждой породы, фото и видео кошек, описаны черты характера присущие именно этой породе.\r\n Помимо прочего вы узнаете происхождение породы.\r\n Мы расскажем какие болезни характерны именно для этой породы кошек.\r\n Читая статью, вы всегда можете посмотреть реальные фотографии и видео этой породы кошек.\r\n Помните помимо фотографии стоит ознакомиться с характеристиками понравившейся породы.</p>\r\n', 'breed', 'show', 'ru', '2017-06-01'),
(5, 'Уход за кошками', '<h2>Уход за кошками</h2>\r\n\r\n<p>Добро пожаловать в категорию «Уход за кошками» на нашем сайте, мы постараемся дать вам исчерпывающую информацию о том, как ухаживать за кошкой на всех этапах ее развития.\r\n Уход за котятами, кормление и содержание. \r\n Дельные советы, о том, как приучить котенка или взрослую кошку к туалету.\r\n Так же узнаете, как ухаживать за шерстью вашего кота или кошечки. \r\n Как часто купать кошку и т.д. \r\n Поверьте, ваша кошка будет вам благодарна!\r\n Множество информации о том, каким кормом кормить вашего питомца.\r\n Если вас интересует информация о домиках для кошек с фото и видео милости просим.</p>', 'care', 'show', 'ru', '2017-06-01'),
(6, 'Интересные факты', '\r\n<h2>Интересные факты.</h2>\r\n<p>Если вам хочется узнать интересные факты о кошках, значит, вы попали по адресу.\r\n Мы приготовили для вас самые увлекательные факты, которые некоторых повеселят, а может даже и удивят.\r\n Итак, приступаем к нашим «кошачьим» фактам!</p>\r\n	<ol>\r\n        <li>Уши кошек состоят из 32 мышц, причем двенадцатью они пользуются регулярно. </li>\r\n        <li>Коты могут поворачивать уши практически на 180 градусов, поэтому будьте осторожны, рассказывая при них секреты.</li>\r\n        <li>У кошек в 14 раз более сильное обоняние, чем у людей.</li>\r\n			Поэтому если вы забыли колбасу в сумке, которая к тому же надежно завернута в полиэтиленовый пакетик, не сомневайтесь, - ваш питомец найдет ее.\r\n        <li>Средняя продолжительность жизни домашней кошки – 15 лет. \r\n			Если коту три года, то это соответствует двадцатилетнему возрасту человека.\r\n			Если коту 8 лет – то это 40 лет, в пересчете на наши годы, а если домашнему любимцу 15 – то это наших 70 лет.\r\n		<li>Самцы требуют почти в десять раз большую территорию для своей жизнедеятельности, чем самки.</li>\r\n		<li>Кошки не могут полноценно существовать, если вы не будете кормить их мясом, так как именно в нем содержится важнейшая для котов аминокислота (аргинин).</li>\r\n		<li>Коты предпочитают теплую или комнатную еду, а не холодную или горячую.</li>\r\n		<li>Некоторые люди лечат своих любимцев человеческими лекарствами. Интересен факт, что кошки могут смертельно отравиться обычной таблеткой Аспирина.</li>\r\n		<li>А знаете, сколько раз в минуту бьется сердце у кошки? – это около 140 ударов. Для сравнения, у людей норма равна 80 ударам.</li>\r\n		<li>Все знают, что по отпечаткам пальцев можно идентифицировать любого человека, так как они не повторяются, являясь абсолютно уникальными. То же самое касается и отпечатка носа у кошки.</li>\r\n		<li>В Австралии в 90% домах имеются кошки. Такое себе «кошачье государство»!</li>\r\n		<li>У котят тоже выпадают молочные зубы, как и у людей.</li>\r\n		<li>Все кошки страшно любят играть с коробками. В интернете есть много весьма забавного видео по этой теме.</li>\r\n		<li>В Египте очень почитали кошек. В том случае, если домашний любимец умирал, все члены семьи сбривали себе брови в знак скорби.</li>\r\n		<li>Как это ни удивительно, но кошачье племя не потеет. Да-да, у них могут увлажняться только подушки лап.</li>\r\n		<li>Особо способные коты могут спокойно перенести падение даже с высоты девятиэтажного дома.</li>\r\n		<li>И, наконец, последний факт. Знаете ли вы, что кошки способны мяукать на протяжении нескольких часов подряд? \r\n			Они очень настойчивые...</li>\r\n	</ol>', 'facts', 'show', 'ru', '2017-06-01');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` tinytext NOT NULL,
  `password` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `datereg` date NOT NULL,
  `lastvisit` datetime NOT NULL,
  `blockundblok` enum('block','unblock') NOT NULL DEFAULT 'unblock',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `datereg`, `lastvisit`, `blockundblok`) VALUES
(5, 'matvey', '123', '1234@mail.ru', '2017-06-07', '2017-06-07 20:41:42', 'unblock'),
(6, '000', '111', '12@12.io', '2017-06-09', '2017-06-09 20:04:20', 'unblock');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
