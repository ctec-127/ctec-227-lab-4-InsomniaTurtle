-- phpMyAdmin SQL Dump
-- version 4.8.4

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT
= 0;
START TRANSACTION;
SET time_zone
= "+00:00";

-- Current database is `imagebumble`

CREATE TABLE `user`
(
  `user_id` int
(11) NOT NULL,
  `email` varchar
(64) NOT NULL,
  `first_name` varchar
(30) NOT NULL,
  `last_name` varchar
(30) NOT NULL,
  `password` varchar
(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Datadump

INSERT INTO `user`
    (`user_id`, `email
`, `first_name`, `last_name`, `password`) VALUES
(1, 'c.young19@clark.students.edu', 'Colin', 'Young', 'nubbins'),
(5, 'colinyoung1017@gmail.com', 'C', 'Y', 'applesngrapes'),
(7, 'andrew@cole.com', 'andrew', 'cogdillecole', 'colinisadork'),
(10, 'silly@park.com', 'break', 'hallibut', 'fishpun'),
(15, 'elder@brook.com', 'old', 'friend', 'bop'),
(17, 'poutine@canada.org', 'potat', 'curds', 'gravyboat'),
(20, 'covid@19.com', 'stuck', 'in', 'doors'),
(21, 'd@d.com', 'old', 'lizard', 'skink'),
(24, 'scott@pilgrim.com', 'change', 'bread', 'breadmakesyoufat?'),
(35, 'pets@pantry', 'Cat', 'sneaks', 'insideverytimeiopenthedoorandshethinkssheslickbutisnt'),
(51, 'doodledip@recipe.com', 'bake', 'and', 'cook');

-- Indexes for `user` table

ALTER TABLE `user`
ADD PRIMARY KEY
(`user_id`,`email`),
ADD UNIQUE KEY `email`
(`email`);

ALTER TABLE `user`
  MODIFY `user_id` int
(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;
