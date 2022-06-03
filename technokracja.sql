-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Czas generowania: 02 Cze 2022, 23:36
-- Wersja serwera: 5.7.34
-- Wersja PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `technokracja`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `messages`
--

CREATE TABLE `messages` (
  `idMessages` int(11) NOT NULL,
  `idUMessages` int(11) DEFAULT NULL,
  `nameMessages` tinytext COLLATE utf8_polish_ci NOT NULL,
  `emailMessages` tinytext COLLATE utf8_polish_ci NOT NULL,
  `phoneMessages` int(11) NOT NULL,
  `msgMessages` longtext COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `messages`
--

INSERT INTO `messages` (`idMessages`, `idUMessages`, `nameMessages`, `emailMessages`, `phoneMessages`, `msgMessages`) VALUES
(1, 10, 'piwko', 'piwko@gmail.com', 123456789, 'Siema siema o tej porze każdy wypić może\nJakby nie było jest bardzo miło, nie\nNormalnie walimy to co mamy, nie\nTak kminimy normalnie\nNa lewo to nie jest zgrzewo\nJakby nie było jest bardzo miło\nZwolnij bo to jest jednokierunkowa\nPanie pij od nowa... *gul gul*\nDwa łyki były dla filarty stylistyki\nTera pijemy pod BWA, bo to jest artykuł 202, nie\nEee spoko luzik bluzik... *gul*\nFacet z aparatem normalnie sobie jaja kmini\nMówiła Myszka Miki, że zdjął kolczyki normalnie\nKiedyś był zakuty normalnie w kajdany\nAle normalnie dowiedział się od mamy że go rozkuli\nTacy byli mili że go normalnie wypuścili (he he he)\nJakby nie było będzie bardzo miło...\nDobra, co nam jeszcze powiesz?\nJa nie wiem proszę cię macie\nO tej porze każdy coś powiedzieć może, nie\nProszę Panią pochodzimy dwa tygodnie\nA potem Panią opuszczę i się normalnie wezmę rozwód w kościele\nJak się normalnie zamienisz w aniele...\nDobra, powiedz teraz \"Witamy w Jackassie\"\nWitamy w przekazie chłopaki nie róbcie draki\nPuśćcie to normalnie na internet\nPająk Spajdermen normalnie dalej rozrabia\nJakby nie było będzie bardzo miło\nKtoś dostanie w zęby\nTo niech go nie boli bo jest z Nowej Soli, nie\n'),
(2, NULL, 'Joe Mamma', 'GFO@gmail.com', 999888777, 'abc'),
(3, 3, 'piwko', 'piwko@gmail.com', 1, 'a');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `nameUsers` tinytext COLLATE utf8_polish_ci,
  `surnameUsers` tinytext COLLATE utf8_polish_ci,
  `usernameUsers` tinytext COLLATE utf8_polish_ci NOT NULL,
  `emailUsers` tinytext COLLATE utf8_polish_ci NOT NULL,
  `passwordUsers` longtext COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`idUsers`, `nameUsers`, `surnameUsers`, `usernameUsers`, `emailUsers`, `passwordUsers`) VALUES
(1, 'Filip', 'Pietrzak', 'xkoza', 'xkoza@gfo.pl', '$2y$10$LG6u/Fk4w0IO6jPK0NfBfuTLtP1efI/4ILbQmpKMIBWkzWXt6QOxq'),
(2, NULL, NULL, 'test', 'test@gmail.com', '$2y$10$0/u8B8RcsO5UA6tQqgsE6u8eP9xE5sJ7l08sA/CSnwkfhIxQ34wXq'),
(3, 'piwko', NULL, 'piwko', 'piwko@gmail.com', '$2y$10$InJ1GS0KiCCx3snWFsAQluVZC2x90sin0Tjmp62qEM98gV0V8.hz6');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`idMessages`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `messages`
--
ALTER TABLE `messages`
  MODIFY `idMessages` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
