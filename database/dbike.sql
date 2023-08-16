SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;


INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', 'admin', '2017-07-05 11:02:08');

CREATE TABLE IF NOT EXISTS `tblbooking` (
`id` int(11) NOT NULL,
  `userEmail` varchar(100) DEFAULT NULL,
  `VehicleId` int(11) DEFAULT NULL,
  `FromDate` varchar(20) DEFAULT NULL,
  `ToDate` varchar(20) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

INSERT INTO `tblbooking` (`id`, `userEmail`, `VehicleId`, `FromDate`, `ToDate`, `message`, `Status`, `PostingDate`) VALUES
(1, 'bikeshowroom@gmail.com', 1, '11/07/2017', '12/07/2017', 'i want to hire this taxi for few hours', 1, '2017-07-05 11:09:18');

CREATE TABLE IF NOT EXISTS `tblbrands` (
`id` int(11) NOT NULL,
  `BrandName` varchar(120) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
)

INSERT INTO `tblbikes` (`id`, `BikeName`, `CreationDate`, `UpdationDate`) VALUES
(1, 'KTM RC 200', '2017-06-18 16:24:34', '2017-06-19 06:42:23'),
(2, 'KTM RC 390', '2017-06-18 16:24:50', NULL),
(3, 'KTM 200 Duke', '2017-06-18 16:25:03', NULL),
(4, 'KTM 390 Duke', '2017-06-18 16:25:13', NULL),
(5, 'KTM 250 Duke', '2017-06-18 16:25:24', NULL),
(7, 'KTM 1050 Adventure', '2017-06-19 06:22:13', NULL),
(8, 'KTM 790 Adventure R', '2017-07-05 11:02:29', NULL);