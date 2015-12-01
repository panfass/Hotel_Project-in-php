-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 14 Ιουν 2015 στις 18:59:02
-- Έκδοση διακομιστή: 5.6.21
-- Έκδοση PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Βάση δεδομένων: `AnaktisiHotel`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `reservations`
--

CREATE TABLE IF NOT EXISTS `reservations` (
`res_id` int(6) NOT NULL,
  `user_id` int(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `day0` varchar(20) DEFAULT NULL,
  `day1` varchar(20) DEFAULT NULL,
  `room_id` int(6) NOT NULL,
  `room_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `reservations`
--

INSERT INTO `reservations` (`res_id`, `user_id`, `name`, `surname`, `day0`, `day1`, `room_id`, `room_name`) VALUES
(100, 1, 'Takis', 'Fassaris', '18-06-2015', '25-06-2015', 40, 'Luxury'),
(200, 2, 'Giorgos', 'Xilopitas', '19-06-2015', '30-06-2015', 20, 'Double');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
`room_id` int(6) NOT NULL,
  `room_name` varchar(20) DEFAULT NULL,
  `description` varchar(700) DEFAULT NULL,
  `count` int(2) DEFAULT NULL,
  `max_adults` int(2) DEFAULT NULL,
  `max_children` int(2) DEFAULT NULL,
  `available` varchar(15) DEFAULT NULL,
  `price` decimal(15,2) DEFAULT NULL,
  `path` varchar(60) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_name`, `description`, `count`, `max_adults`, `max_children`, `available`, `price`, `path`) VALUES
(10, 'Single', 'Rooms measuring 15 m² equipped with all the details expected of a superior 4 star hotel. Services: Wake up call service, Customer service, Laundry service and express laundry, Concierge service, Pillow menu.', 15, 1, 0, 'available', '299.99', 'images/rooms_icons/single_icon_thumb.jpg'),
(20, 'Double', 'Modern and functional rooms measuring approximately 20-25 m² equipped with all the details expected of the hotel. The rooms have a king or queen size bed or two single beds, in addition to beds measuring 1 by 2.2 metres ideal for sports teams.', 10, 2, 1, 'available', '599.99', 'images/rooms_icons/double_icon_thumb.jpg'),
(30, 'Superior', 'Spacious rooms with exquisite decor, measuring approximately 25-30 m² and equipped with all the details expected of the hotel hotel. The rooms have a king or queen size bed or two single beds, in addition to beds measuring 1 by 2.2 metres.', 5, 3, 1, 'available', '899.99', 'images/rooms_icons/superior_icon_thumb.jpg'),
(40, 'Luxury', 'Spacious rooms with exquisite decor measuring approximately 25-30 m² and equipped with all the details expected of a superior 4 star Hotel. The rooms have a king or queen size bed or two single beds, and views of the streets.', 3, 4, 2, 'available', '1550.00', 'images/rooms_icons/luxury_icon_thumb.jpg');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
`tes_id` int(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `text` varchar(500) DEFAULT NULL,
  `user_id` int(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `testimonials`
--

INSERT INTO `testimonials` (`tes_id`, `name`, `surname`, `location`, `text`, `user_id`) VALUES
(11, 'Giorgos', 'Xilopitas', 'Greece', 'Hiiii', 2),
(12, 'Takis', 'Fassaris', 'Greece', 'Teliooooooooooo', 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(6) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `location` varchar(30) NOT NULL,
  `phone` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `name`, `surname`, `email`, `location`, `phone`) VALUES
(1, 'admin', 'admin', 'Takis', 'Fassaris', 'admin@admin.com', 'Greece', '6999999999'),
(2, 'george', 'george', 'Giorgos', 'Xilopitas', 'nino@heaven.gr', 'Greece', '6999999999'),
(3, 'michael', 'douglas', 'Michael', 'Douglas', 'michael@yahoo.gr', 'USA', '5452154525'),
(4, 'Stelios', 'Livanos', 'George', 'Livanos', 'privacy@priv.com', 'Greece', '6951233654'),
(5, 'makis', '1234', 'Makis', 'Kotsabasis', 'makis@kotsabasis.com', 'Greece', '6942954196'),
(7, 'Lakis', 'Gavalas', 'Lakis', 'Gavalas', 'tata', '123123', '123123');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `reservations`
--
ALTER TABLE `reservations`
 ADD PRIMARY KEY (`res_id`), ADD KEY `user_id` (`user_id`), ADD KEY `room_id` (`room_id`);

--
-- Ευρετήρια για πίνακα `rooms`
--
ALTER TABLE `rooms`
 ADD PRIMARY KEY (`room_id`);

--
-- Ευρετήρια για πίνακα `testimonials`
--
ALTER TABLE `testimonials`
 ADD PRIMARY KEY (`tes_id`), ADD KEY `user_id` (`user_id`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `reservations`
--
ALTER TABLE `reservations`
MODIFY `res_id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=201;
--
-- AUTO_INCREMENT για πίνακα `rooms`
--
ALTER TABLE `rooms`
MODIFY `room_id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT για πίνακα `testimonials`
--
ALTER TABLE `testimonials`
MODIFY `tes_id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `reservations`
--
ALTER TABLE `reservations`
ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`room_id`);

--
-- Περιορισμοί για πίνακα `testimonials`
--
ALTER TABLE `testimonials`
ADD CONSTRAINT `testimonials_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
