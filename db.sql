
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



CREATE TABLE `REGISTERS_COURSE` (
  `id` int(11) NOT NULL,
  `folio` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `REGISTERS_COURSE`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `REGISTERS_COURSE`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
