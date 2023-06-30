
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `contact` (
  `Custemer_ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `TP` int(11) NOT NULL,
  `Msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `contact`
  ADD PRIMARY KEY (`Custemer_ID`);


ALTER TABLE `contact`
  MODIFY `Custemer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

