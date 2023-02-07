CREATE TABLE IF NOT EXISTS `member` (
  `mem_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `experience2` varchar(100) NOT NULL,
  `habitat` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `about` varchar(100) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `workdate` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `docx` varchar(100) NOT NULL,
   PRIMARY KEY (`mem_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;