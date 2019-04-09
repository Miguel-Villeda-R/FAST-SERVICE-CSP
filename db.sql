
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



CREATE TABLE `REGISTERS_COURSE` (
  `id` int(11) NOT NULL,
  `folio` int(100) NOT NULL,
  `course` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `assistence` int(3) DEFAULT '0',
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `code` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `REGISTERS_COURSE`
--

INSERT INTO `REGISTERS_COURSE` (`id`, `folio`, `course`, `status`, `assistence`, `time_stamp`, `code`) VALUES
(24, 'omar', 'castillo', 'omarc@goigni.com', 1, 1, 0, '2019-01-23 21:53:30', 'C010ex10n'),
(25, 'omar', 'castillo', 'omar.castillo.rosales@gmail.com', 1, 0, 0, '2019-01-25 18:00:01', 'C012kus6l');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `REGISTERS_COURSE`
--
ALTER TABLE `REGISTERS_COURSE`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `REGISTERS_COURSE`
--
ALTER TABLE `REGISTERS_COURSE`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
