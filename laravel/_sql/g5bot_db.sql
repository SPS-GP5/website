--
-- Datenbank: `g5bot_db`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `diaryentries`
--

CREATE TABLE `diaryentries` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `hours` decimal(10,2) NOT NULL,
  `description` varchar(500) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(300) NOT NULL,
  `remember_token` varchar(200) NOT NULL,
  `confirmcode` varchar(200) NOT NULL,
  `confirmed` int(11) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '0',
  `role` int(11) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Indizes für die Tabelle `diaryentries`
--
ALTER TABLE `diaryentries`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `diaryentries`
--
ALTER TABLE `diaryentries`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;








-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE IF NOT EXISTS `stats` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `duration` time NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`id`, `firstName`, `lastName`, `time`, `duration`, `description`) VALUES
(1, 'Patrick', 'Keller', '2016-03-14 19:57:04', '00:30:00', 'Test'),
(2, 'Alen', 'Kocaj', '2016-03-14 19:59:48', '00:00:00', 'Test_Test'),
(3, 'Michael', 'Ester', '2016-03-14 19:59:48', '01:30:00', 'Validation'),
(4, 'Daniel', 'Stigler', '2016-03-14 19:59:48', '00:00:50', 'HAHA'),
(5, 'Patrick', 'Keller', '2016-03-14 20:15:52', '01:50:00', 'TESTnachTest');

-- --------------------------------------------------------

--
-- Table structure for table `statsview`
--

CREATE TABLE IF NOT EXISTS `statsview` (
  `id` int(11) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `timeSpent` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


