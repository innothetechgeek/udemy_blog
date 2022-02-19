-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table my_blog.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table my_blog.categories: 5 rows
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`cat_id`, `cat_name`, `created_at`) VALUES
	(1, 'Web Development', '2021-09-19 17:43:12'),
	(2, 'Fashion', '2021-09-19 17:43:12'),
	(3, 'Inspiration', '2021-09-19 17:43:12'),
	(4, 'Vacation', '2021-09-19 17:43:12'),
	(5, 'Worship', '2021-09-19 17:43:12');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table my_blog.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `com_id` int(11) NOT NULL AUTO_INCREMENT,
  `visitor_name` varchar(50) DEFAULT NULL,
  `comment_body` varchar(50) DEFAULT NULL,
  `visitor_email` varchar(50) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `is_read` int(11) DEFAULT 0,
  `visitor_website` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`com_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table my_blog.comments: 3 rows
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` (`com_id`, `visitor_name`, `comment_body`, `visitor_email`, `post_id`, `is_read`, `visitor_website`, `created_at`) VALUES
	(1, 'sdf', 'dss', NULL, 1, 0, NULL, '2021-09-19 17:43:58'),
	(2, 'Florence Brown', 'Voluptatem ut sed in', 'hiqat@mailinator.com', 13, 0, NULL, '2021-09-19 17:43:58'),
	(3, 'testwebsite', 'test comment', 'test@gmail.com', 18, 0, NULL, '2022-02-19 17:55:31');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;

-- Dumping structure for table my_blog.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_content` text DEFAULT NULL,
  `post_title` varchar(200) DEFAULT NULL,
  `post_image` varchar(200) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `is_featured` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`post_id`),
  KEY `FK_posts_categories` (`cat_id`),
  KEY `FK_user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- Dumping data for table my_blog.posts: 19 rows
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`post_id`, `post_content`, `post_title`, `post_image`, `cat_id`, `is_featured`, `created_at`, `user_id`) VALUES
	(1, 'Dolorum quidem conse. dsfsdf Dolorum quidem conse. dsfsdf Dolorum quidem conse. Dolorum quidem conse. dsfsdf Dolorum quidem conse. dsfsdf dsfsdf', 'Est explicabo Expli', '', 3, NULL, '2021-08-18 12:46:44', NULL),
	(2, 'dsfsd', 'Est explicabo Expresso', 'test.jpg', 1, NULL, '2021-08-18 12:46:45', NULL),
	(3, 'Ex vero dolore iste . sdfsdf tesdsf dsfsd sdfds dfds Dolorum quidem conse. dsfsdf', 'A ab omnis repellend', NULL, 2, NULL, '2021-08-18 12:46:45', NULL),
	(4, 'Ex vero dolore iste . sdfsdf tesdsf dsfsd sdfds dfds Dolorum quidem conse. dsfsdf', 'A ab omnis repellend', '', 1, NULL, '2021-08-18 12:46:46', NULL),
	(5, 'Labore delectus, non. dsfds dsfd sd dsfsf dfsds dsffs sdff sdfssd sdf', 'Quia et nulla omnis ', '', 1, NULL, '2021-08-18 12:46:49', NULL),
	(6, '<p>In est beatae suscip.Dolorum quidem conse. dsfsdf Dolorum quidem conse. dsfsdf Do<br>dsfsdfdsf sdfdsfdsf</p>', 'Et magna Nam ratione', '', 1, NULL, '2021-09-18 12:46:46', NULL),
	(7, '', 'Dummy Title', '', 1, NULL, '2021-09-18 12:46:48', NULL),
	(8, '', 'Test', '', 1, NULL, '2021-09-18 12:46:48', NULL),
	(9, 'Provident, in volupt.', 'Cumque facere odio s', '', 2, NULL, '2021-09-18 12:46:49', NULL),
	(10, 'Provident, in volupt.', 'Cumque facere odio s', 'forest-simon-OLOZGO5NjpY-unsplash.jpg', 2, 1, '2021-09-18 12:46:51', NULL),
	(11, 'Provident, in volupt. Provident, in volupt. &nbsp;Provident, in volupt. Provident, in volupt. &nbsp;Provident, in volupt. Provident, in volupt. Provident, in volupt. Provident, in volupt. Provident, in volupt. Provident, in volupt. Provident, in volupt. Provident, in volupt. Provident, in volupt. Provident, in volupt. Provident, in volupt. Provident, in volupt. Provident, in volupt. Provident, in volupt. Provident, in volupt. Provident, in volupt. Provident, in volupt. Provident, in volupt. Provident, in volupt.', 'Cumque Hello', 'james-yarema-npTT9rD8wd4-unsplash.jpg', 2, NULL, '2021-09-18 12:46:50', NULL),
	(12, '<p id="isPasted" style=\'margin: 0px 0px 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\'>Donec pulvinar elit et purus scelerisque volutpat. Nunc quis blandit nunc, ac convallis erat. Sed ut elementum mi. Aliquam id elit turpis. Nam in rutrum lorem. Sed ac pellentesque erat. Ut in fringilla metus. Pellentesque ullamcorper ante et diam consequat dapibus sit amet a diam. Fusce nibh nunc, scelerisque eget nibh et, molestie bibendum est. Donec venenatis tellus id felis mattis porta. Fusce id consectetur ex, a euismod risus. Pellentesque ligula nisi, pretium quis lacus eu, vulputate tempor nibh. Cras nec nibh vestibulum, tincidunt metus in, sollicitudin arcu. Nullam porttitor sagittis risus id tincidunt.</p><p style=\'margin: 0px 0px 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\'>Vivamus condimentum, risus id euismod aliquet, mi nisl scelerisque lectus, in semper nisi felis ut ipsum. Phasellus aliquam turpis a nisl maximus dapibus. Fusce fermentum viverra ante. Quisque ut nisi eu elit venenatis tempus eget et tortor. Vestibulum nec velit at diam vulputate hendrerit. Vestibulum sed suscipit odio, non sagittis diam. Vestibulum dignissim nisi eget enim viverra lobortis. Donec maximus rhoncus fermentum. Phasellus suscipit venenatis pharetra. Etiam lobortis nibh eu libero bibendum, semper commodo enim lacinia. Nunc feugiat bibendum feugiat. Nulla vitae arcu et justo pellentesque sagittis.&nbsp;</p>', 'Cumque facere odio s', 'asia-culturecenter-YgFUJ4Ef2EY-unsplash.jpg', 2, NULL, '2021-09-18 12:46:53', NULL),
	(13, '<p id="isPasted" style=\'margin: 0px 0px 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\'><span style="font-size: 48px;">l</span>uctus est. Duis finibus massa eu nibh vulputate,&nbsp;</p><p style=\'margin: 0px 0px 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\'>eu scelerisque metus fermentum. Donec nulla nibh, auctor vitae ornare at, euismod a &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; dolor. Integer sit amet pellentesque leo. Vivamus dictum at ex a facilisis. Vivamus eget &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; euismod leo. Nullam vitae vehicula augue. Nullam vel porttitor tellus. Curabitur eros elit, eleifend vestibulum justo sit amet, ultrices ultrices orci. Vestibulum scelerisque, nisl nec consequat imperdiet, lorem ex porta turpis, at lacinia velit lacus non nisl. Mauris accumsan finibus rutrum. Mauris vel euismod nisi. Etiam ultricies diam diam, vel ornare magna laoreet at.</p><p style=\'margin: 0px 0px 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\'>Donec pulvinar elit et purus scelerisque volutpat. Nunc quis blandit nunc, ac convallis erat. Sed ut elementum mi. Aliquam id elit turpis. Nam in rutrum lorem. Sed ac pellentesque erat. Ut in fringilla metus. Pellentesque ullamcorper ante et diam consequat dapibus sit amet a diam. Fusce nibh nunc, scelerisque eget nibh et, molestie bibendum est.</p><br><p id="isPasted" style=\'margin: 0px 0px 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\'>Donec pulvinar elit et purus scelerisque volutpat. Nunc quis blandit nunc, ac convallis erat. Sed ut elementum mi. Aliquam id elit turpis. Nam in rutrum lorem. Sed ac pellentesque erat. Ut in fringilla metus. Pellentesque ullamcorper ante et diam consequat dapibus sit amet a diam. Fusce nibh nunc, scelerisque eget nibh et, molestie bibendum est.</p><br>', 'Visited Cape Town late at night', 'tyler-nix-_nA3wE8LCw8-unsplash.jpg', 1, NULL, '2021-09-18 12:46:52', NULL),
	(14, '<strong><span style="font-size: 18px;">Test title</span></strong><br><br><span id="isPasted" style=\'color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Donec pulvinar elit et purus scelerisque volutpat. Nunc quis blandit nunc, ac convallis erat. Sed ut elementum mi. Aliquam id elit turpis. Nam in rutrum lorem. Sed ac pellentesque erat. Ut in fringilla metus. Pellentesque ullamcorper ante et diam consequat dapibus sit amet a diam. Fusce nibh nunc, scelerisque eget nibh et, molestie bibendum est. Donec venenatis tellus id felis mattis porta. Fusce id consectetur ex, a euismod risus. Pellentesque ligula nisi, pretium quis lacus eu, vulputate tempor nibh. Cras nec nibh vestibulum, tincidunt metus in, sollicitudin arcu. Nullam porttitor sagittis risus id tincidunt.</span>&nbsp;<br><br><span id="isPasted" style=\'color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Donec pulvinar elit et purus scelerisque volutpat. Nunc quis blandit nunc, ac convallis erat. Sed ut elementum mi. Aliquam id elit turpis. Nam in rutrum lorem. Sed ac pellentesque erat. Ut in fringilla metus. Pellentesque ullamcorper ante et diam consequat dapibus sit amet a diam. Fusce nibh nunc, scelerisque eget nibh et, molestie bibendum est. Donec venenatis tellus id felis mattis porta. Fusce id consectetur ex, a euismod risus. Pellentesque ligula nisi, pretium quis lacus eu, vulputate tempor nibh. Cras nec nibh vestibulum, tincidunt metus in, sollicitudin arcu. Nullam porttitor sagittis risus id tincidunt.</span>&nbsp;', 'This is test title', 'hillshire-farm-TWy3jXvtDdc-unsplash.jpg', 3, 1, '2021-09-18 12:46:52', NULL),
	(15, 'Oceans where the feet may fail.<br><br>Where the feet may fail where fear surrounds me. I will call upon your name and keep my eyes above the waves, coz I am yours and you are mine. Tell the devils not today. Crash the devil down, and tell him not today<br><br><table style="width: 80%; margin-right: calc(20%);"><tbody><tr><td style="width: 50%; background-color: rgb(204, 204, 204);">Dummy Header</td><td style="width: 50%; background-color: rgb(204, 204, 204);">Dummy Header 2</td></tr><tr><td style="width: 50.0000%;">Dummy content</td><td style="width: 50.0000%;">Dummy content<br></td></tr><tr><td style="width: 50.0000%;">Dummy content<br></td><td style="width: 50.0000%;">Dummy content<br></td></tr><tr><td style="width: 50.0000%;">Dummy content<br></td><td style="width: 50.0000%;">Dummy content<br></td></tr><tr><td style="width: 50.0000%;"><br></td><td style="width: 50.0000%;"><br></td></tr></tbody></table><br>', 'Oceans', 'prince-oamil-YbOGL8o1Yz8-unsplash.jpg', 1, 1, '2021-09-18 12:46:53', NULL),
	(16, 'Test', 'Test', 'forest-simon-OLOZGO5NjpY-unsplash.jpg', 1, 1, '2021-09-18 12:46:54', NULL),
	(17, 'sdfsdf', 'test test', 'clayton-malquist-P2iaN5Kqk-4-unsplash.jpg', 3, 0, '2021-09-18 12:46:55', NULL),
	(18, 'sdf', 'This is a test tile', 'toa-heftiba-FV3GConVSss-unsplash.jpg', 1, NULL, '2021-09-18 12:46:57', NULL),
	(19, 'sdf<p data-f-id="pbf" style="text-align: center; font-size: 14px; margin-top: 30px; opacity: 0.65; font-family: sans-serif;">Powered by <a href="https://www.froala.com/wysiwyg-editor?pb=1" title="Froala Editor">Froala Editor</a></p>', 'Another test title', 'robson-hatsukami-morgan-NKr0qBAkU4s-unsplash.jpg', 4, 1, '2021-09-18 12:46:22', NULL);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Dumping structure for table my_blog.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table my_blog.users: 3 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`, `name`, `email`, `password`) VALUES
	(1, 'sdf', NULL, NULL),
	(2, 'test', 'test', 'test'),
	(3, 'Admin User', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
