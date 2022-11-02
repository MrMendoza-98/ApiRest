

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `user` varchar(256) NOT NULL,
  `description` varchar(500) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(500) NOT NULL,
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


INSERT INTO `tickets` (`id`, `user`, `description`, `created`, `modified`, `status`) VALUES
(1, 'Bret', 'My first awesome phone!', '2014-06-01 01:12:26', '2014-05-31 17:42:26', 'abierto'),
(2, 'Antonette', 'The most awesome phone of 2013!',  '2014-06-01 01:12:26', '2014-05-31 17:42:26', 'cerrado'),
(3, 'Samantha', 'How about no?',  '2014-06-01 01:12:26', '2014-05-31 17:42:26', 'cerrado'),
(6, 'Karianne', 'The best shirt!',  '2014-06-01 01:12:26', '2014-05-31 02:42:21', 'abierto'),
(7, 'Kamren', 'My business partner.',  '2014-06-01 01:13:45', '2014-05-31 02:43:39', 'cerrado'),
(8, 'Leopoldo_Corkery', 'Good tablet.',  '2014-06-01 01:14:13', '2014-05-31 02:44:08', 'abierto'),
(9, 'Elwyn.Skiles', 'My sports watch.',  '2014-06-01 01:18:36', '2014-05-31 02:48:31', 'abierto'),
(10, 'Maxime_Nienow', 'The coolest smart watch!',  '2014-06-06 17:10:01', '2014-06-05 18:39:51', 'cerrado'),
(11, 'Delphine', 'For testing purposes.',  '2014-06-06 17:11:04', '2014-06-05 18:40:54', 'abierto'),
(12, 'Moriah.Stanton', 'Perfect as gift!',  '2014-06-06 17:12:21', '2014-06-05 18:42:11', 'abierto'),
(13, 'Hayden', 'Cool red shirt!',  '2014-06-06 17:12:59', '2014-06-05 18:42:49', 'abierto'),
(26, 'Presley', 'Awesome product!',  '2014-11-22 19:07:34', '2014-11-21 21:37:34', 'cerrado'),
(28, 'Wallet', 'You can absolutely use this one!',  '2014-12-04 21:12:03', '2014-12-03 23:42:03', 'abierto'),
(31, 'Dallas', 'New awesome shirt!',  '2014-12-13 00:52:54', '2014-12-12 03:22:54', 'abierto'),
(42, 'Meghan_Littel', 'Nike Shoes',  '2015-12-12 06:47:08', '2015-12-12 07:17:08', 'abierto'),
(48, 'Carmen_Keeling', 'Awesome shoes.',  '2016-01-08 06:36:37', '2016-01-08 07:06:37', 'cerrado'),
(60, 'Kariane', 'Luxury watch.',  '2016-01-11 15:46:02', '2016-01-11 16:16:02', 'abierto');


ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

