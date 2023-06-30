 
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `sign_up` (
  `Member_ID` int(11) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Mobile_Number` int(11) NOT NULL,
  `Birth` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`Member_ID`);


ALTER TABLE `sign_up`
  MODIFY `Member_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=01;
COMMIT;
