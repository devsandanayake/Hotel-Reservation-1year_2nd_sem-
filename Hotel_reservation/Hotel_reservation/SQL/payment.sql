 
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `payment` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Card_Num` int(11) NOT NULL,
  `Expire_Month` int(11) NOT NULL,
  `Expire_Year` int(11) NOT NULL,
  `CVV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `payment`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `payment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=01;
COMMIT;
