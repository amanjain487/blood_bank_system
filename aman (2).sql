

CREATE TABLE IF NOT EXISTS `bloodgroup` (
  `bg` varchar(100) NOT NULL,
  PRIMARY KEY (`bg`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1  ;
INSERT INTO `bloodgroup` (`bg`) VALUES('O-pos'),
( 'O-neg'),
('AB-pos'),
('AB-neg'),
('A-pos'),
('A-neg'),
('B-pos'),
('B-neg');






CREATE TABLE IF NOT EXISTS `registereddonors` (
  `donorid` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(3) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `b_g` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL, `city` varchar(100) NOT NULL,
  PRIMARY KEY (`donorid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=01 ;
INSERT INTO `registereddonors` (`name`, `gender`, `age`, `mobile`, `b_g`, `email`, `city`) VALUES
('Aman Kumar','Male', '20','6385644990', 'O-pos', 'aman487jain@gmail.com', 'Thirthuraipoondi'),
('Derec Christian','Male', '21','9840745889' ,'O-pos', 'derec.chris@gmail.com', 'Chennai'),('Aadhavan','Male', '20','8870009871', 'O-neg', 'aadhavansridhar@gmail.com', 'Pondicherry'),('S Kavitha','Female', '19','7550056788', 'A-pos', 'kaviraj1207@gmail.com', 'Vellore'),('Gunaraman','Male', '20','9094750175', 'A-pos', 'crazyguna@gmail.com', 'Chennai'),('Karthick Shyam','Male', '20','9080238522', 'A-neg', 'karthickshyam@gmail.com', 'Chennai'),('Ram Kumar','Male', '20','9003295605', 'AB-neg', 'ramkumar11@gmail.com', 'Chennai'),('Pooja Jain','Female', '20','7010073719', 'AB-pos', 'jeevikanabera@gmail.com', 'Myladthurai'),('Jason','Male', '22','8015202836', 'B-pos', 'jasonchristopher1996@gmailcom', 'Bangalore'),('Arpith','Male', '22','8939264144', 'B-neg', 'arpithpauldaniel@gmail.com', 'Chennai'),('Praveen Kumar','Male', '22','9789851705', 'AB-pos', 'praveenlpk@gmail.com', 'Thirthuraipoondi'),('Abishek S','Male', 23,'9003229154', 'O-neg', 'abidon009@gmail.com', 'Chennai'),('Jonathon','Male', '23','7358209661', 'O-neg', 'jonathonvineeth@gmail.com', 'Chennai'),
('Ben Chrys','Male', '22','8056313471', 'A-pos', 'ben.chrys@gmail.com', 'Chennai'),
('Moses Karun','Male', '22','9710039082', 'A-neg', 'moseskarun@gmail.com', 'Chennai');








CREATE TABLE IF NOT EXISTS `request` (
  `reqid` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `mobile` varchar(13) NOT NULL,
 `bg` varchar(15) NOT NULL, `email` varchar(100) NOT NULL,
    `deadline` date NOT NULL,
  `detail` varchar(500) NOT NULL,
  PRIMARY KEY (`reqid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=01 ;

 
INSERT INTO `request` (`name`, `gender`, `age`, `mobile`, `bg`, `email`, `deadline`, `detail`) VALUES


('Ajith','Male', '35','9176247921', 'O-pos', 'ajiththala01@gmail.com', '2019-10-01', 'Liver Transplant'),


('Akash Kumar','Male', '27','6693209651', 'AB-pos', 'akashkumar487@gmail.com', '2019-05-12', 'Kidney Surgery'),


('Arun','Male', '29','6385644990', 'B-pos', 'arundon@gmail.com', '2019-05-29', 'Involved in accident'),('Vijay','Male', '33','9566246328', 'B-pos', 'arundon@gmail.com', '2019-05-29', 'Involved in accident'),('Surya','Male', '38','7598219306', 'AB-pos', 'arundon@gmail.com', '2019-06-08', 'Kidney Surgery');







CREATE TABLE IF NOT EXISTS `camp` (
  `campid` int(100) NOT NULL AUTO_INCREMENT,
  `campname` varchar(500) NOT NULL, `organisedby` varchar(500) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
   `detail` varchar(1000) NOT NULL,
  PRIMARY KEY (`campid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;
INSERT INTO `camp` (`campname`, `organisedby`, `city`, `state`, `detail`) VALUES
('Give Life', 'ABC Hospital', 'Chennai', 'TN', 'dets'),
('Blood Drive', 'Red Cross', 'Chennai', 'TN', 'On 11-01-2019'),('Blood Drive', 'Red Cross', 'Vellore', 'TN', 'On 11-01-2019'),('Blood Drive', 'Red Cross', 'Madurai', 'TN', 'On 11-01-2019');


CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL, `adminname` varchar(100) NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `admin` (`username`, `pwd`, `adminname`) VALUES
('aman', 'aman', 'Aman Kumar'),
('derec', 'derec', 'Derec Christian');








CREATE TABLE IF NOT EXISTS `contacts` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  
  `subj` varchar(700) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;
INSERT INTO `contacts`(`name`,`email`,`mobile`,`subj`) VALUES('aman','aman487jain@gmail.com','7598219306','hey there');



CREATE TABLE IF NOT EXISTS `superadmin` (
  `username` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL, `adminname` varchar(100) NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `superadmin`(`username`,`pwd`,`adminname`) VALUES('aman', 'aman', 'Aman Kumar');





CREATE DEFINER=`root`@`localhost` EVENT `contacts` ON SCHEDULE EVERY 1 DAY STARTS '2019-01-08 00:00:00' ON COMPLETION PRESERVE ENABLE DO DELETE FROM `contacts` WHERE date < DATE_SUB(NOW(),INTERVAL 1 DAY);
CREATE DEFINER=`root`@`localhost` EVENT `request` ON SCHEDULE EVERY 1 HOUR STARTS '2019-01-05 00:00:00' ON COMPLETION PRESERVE ENABLE DO DELETE FROM `request` WHERE deadline < DATE_SUB(NOW(),INTERVAL 15 DAY);
