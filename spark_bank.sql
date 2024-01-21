SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `accountdetails` (
  `sno` int(11) NOT NULL,
  `accID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `accountdetails` (`sno`, `accID`, `name`, `email`, `balance`) VALUES
(1, 1234, 'swati', 'swati@gmail.com', 3137),
(2, 4211, 'nitin', 'nitin@gmail.com', 5655),
(3, 6789, 'nishant', 'nishant@gmail.com', 880),
(4, 1122, 'shipra', 'ship@gmail.com', 5000),
(5, 5467, 'aman', 'aman@gmail.com', 2000),
(6, 9999, 'sumit', 'sumit@gmail.com', 6000),
(7, 7878, 'kartik', 'kartik@gmail.com', 8890),
(8, 4321, 'shreesh', 'shreesh@gmail.com', 1210),
(9, 1444, 'sheetal', 'st@gmail.com', 8900),
(10, 7777, 'divya', 'divya@gmail.com', 4703),
(11, 2430, 'krishan', 'krish@gmail.com', 4340);

CREATE TABLE `history` (
  `sno` int(11) NOT NULL,
  `payer` text NOT NULL,
  `payerAcc` int(11) NOT NULL,
  `payee` text NOT NULL,
  `payeeAcc` int(11) NOT NULL,
  `amount` double NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `history` (`sno`, `payer`, `payerAcc`, `payee`, `payeeAcc`, `amount`, `time`) VALUES
(1, 'nitin', 4211, 'nishant', 6789, 100, '2021-03-11 23:40:09'),
(2, 'swati', 1234, 'divya', 7777, 100, '2021-03-14 19:56:22');


ALTER TABLE `accountdetails`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `email` (`email`);


ALTER TABLE `history`
  ADD PRIMARY KEY (`sno`);


ALTER TABLE `accountdetails`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

ALTER TABLE `history`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;  
