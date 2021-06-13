-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 13 Cze 2021, 16:13
-- Wersja serwera: 10.4.17-MariaDB
-- Wersja PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `pizza`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL,
  `cena` int(11) NOT NULL,
  `id_service` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `service`
--

CREATE TABLE `service` (
  `id_service` int(11) NOT NULL,
  `service_name` varchar(250) COLLATE utf8mb4_polish_ci NOT NULL,
  `service_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `service`
--

INSERT INTO `service` (`id_service`, `service_name`, `service_price`) VALUES
(1, 'Margharita (sos, ser)', 28),
(2, 'Funghi (sos,ser,pieczarki)', 30),
(3, 'Cardinale(sos,ser,szynka)', 31),
(4, 'Hawaii(sos,ser,szynka,ananas)', 34),
(5, 'Salami(sos,ser,salami)	', 31),
(7, 'Frytki(150g)	', 8),
(10, 'Frytki belgijskie(150g)	', 12),
(12, 'Sos(czosnkowy,pomidorowy,barbecue)	', 3),
(15, 'Napój gazowany 500ml(pepsi, cola, mirinda, sprite)	', 6),
(16, 'Herbata(czarna, zielona, owocowa)	', 7),
(18, 'Kawa(czarna, z mlekiem)	', 7),
(19, 'DOWÓZ', 10);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_polish_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `address` varchar(45) COLLATE utf8mb4_polish_ci NOT NULL,
  `e_mail` varchar(45) COLLATE utf8mb4_polish_ci NOT NULL,
  `login` varchar(45) COLLATE utf8mb4_polish_ci NOT NULL,
  `password` varchar(45) COLLATE utf8mb4_polish_ci NOT NULL,
  `role` varchar(45) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id_user`, `name`, `phone_number`, `address`, `e_mail`, `login`, `password`, `role`) VALUES
(1, 'ADMIN', 794607620, 'ADMIN', 'ADMIN', 'root', 'root', 'root'),
(4, 'Piotr Herdzina', 794607990, 'Czerwionka - Leszczyny, ul. Dębowa 12', 'test@gmail.com', 'user2', 'user2', 'user'),
(6, 'Paweł', 843284862, 'Warszawa - Puławska 12', 'testing@gmail.com', 'user', 'user', 'user'),
(8, 'Kamil', 666555444, '', 'kamil@gmail.com', 'kamil@gmail.com', '12345', 'user'),
(9, 'marcin', 999555666, '', 'marcin@gmail.com', 'marcin@gmail.com', '12345', 'root');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia`
--

CREATE TABLE `zamowienia` (
  `id_zamowienia` int(11) NOT NULL,
  `nazwa` varchar(1000) COLLATE utf8mb4_polish_ci NOT NULL,
  `cena` int(11) NOT NULL,
  `adres` varchar(1000) COLLATE utf8mb4_polish_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `zrealizowane` tinyint(1) NOT NULL,
  `przygotowane_do_dostawy` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `zamowienia`
--

INSERT INTO `zamowienia` (`id_zamowienia`, `nazwa`, `cena`, `adres`, `id_user`, `zrealizowane`, `przygotowane_do_dostawy`) VALUES
(9, 'Frytki belgijskie(150g)	 + Hawaii(sos,ser,szynka,ananas) + Kawa(czarna, z mlekiem)	 + ', 53, 'Czerwionka-Leszczyny - ul. Borowa 52a', 4, 1, 1),
(10, 'Margharita (sos, ser) + Sos(czosnkowy,pomidorowy,barbecue)	 + ', 31, 'Katowice- chorzowska 50', 6, 1, 1),
(11, 'Margharita (sos, ser) + Herbata(czarna, zielona, owocowa)	 + ', 35, 'Czerwionka-Leszczyny - ul. Borowa 52a', 6, 1, 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `idx_service` (`id_service`),
  ADD KEY `idx_user` (`id_user`) USING BTREE;

--
-- Indeksy dla tabeli `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeksy dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`id_zamowienia`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT dla tabeli `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `id_zamowienia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id_service`) REFERENCES `service` (`id_service`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
