SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `user` (`user_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(1, 'admin', 'admin', 'Admin', 'joe');

CREATE TABLE IF NOT EXISTS `users` (
`users_id` int(11) NOT NULL,
  `users_name` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `account` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;



INSERT INTO `users` (`users_id`, `users_name`, `password`, `firstname`, `lastname`, `status`, `account`) VALUES
(1, 21241523, 'UWex7rTR', 'Navigus', 'Bangalore', 'Logged', 'Active'),
(2, 123456789, 'qHn6DpQE', 'abc', 'def', 'Logged', 'Active');


ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`);


ALTER TABLE `users`
 ADD PRIMARY KEY (`users_id`);


ALTER TABLE `user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;


ALTER TABLE `users`
MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
