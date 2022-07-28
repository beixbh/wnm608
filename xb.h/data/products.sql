-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2022 at 09:25 PM
-- Server version: 5.7.38-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `WNM608xbhe`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `url`, `price`, `category`, `date_create`, `description`, `thumbnail`, `images`) VALUES
(1, 'crimson glory', '', 60.00, 's-clasp frame', '0000-00-00 00:00:00', 'This is my treasured rose fabric, I like its color scheme, very elegant but not too boring, the design is inspired by autumn weddings, the bridesmaids wear burgundy dresses, with this bag embellishment, very charming.\r\nThis bag type is very retro classic and practical, just the right size, like a beautiful jewelry box, hiding the secrets of women. Whether you wear a dress or jeans, it will match perfectly!', 'crimson glory thumb.jpg', 'crimson glory 1.jpg,crimson glory 2.jpg,crimson glory 3.jpg'),
(2, 'pentatonic', '', 68.00, 's-clasp frame', '0000-00-00 00:00:00', 'As an artist, I love all forms of art, including music of course, and this is a delightful and classic pentatonic pattern that makes me feel good whenever I wear it.', 'pentatonic thumb.jpg', 'pentatonic 1.jpg,pentatonic 2.jpg,pentatonic 3.jpg'),
(3, 'lace purple rose', '', 99.00, 's-clasp frame', '0000-00-00 00:00:00', 'cheongsam style sweet and cute wedding gift purse', 'lace purple rose thumb.jpg', 'lace purple rose 1.jpg,lace purple rose 2.jpg,lace purple rose 3.jpg'),
(4, 'goldfish bubble', '', 80.00, 's-clasp frame', '0000-00-00 00:00:00', 'A Pink frilly bag with red flowers and rhinestone clasp and pearl chain. Perfect for a wedding or special occasion!', 'goldfish bubble thumb.jpg', 'goldfish bubble 1.jpg,goldfish bubble 2.jpg,goldfish bubble 3.jpg'),
(5, 'vintage cheongsam style kiss lock handbag ', '', 137.00, 'm-clasp frame', '0000-00-00 00:00:00', 'Mosaic bag with mural painting patterns made from faux leather and soft strap, metal clasp and great for daily use. The bag has a soft easy to hold strap, and a metal clasp to hold things inside. Great for everyday use!\r\n', 'vintage thumb.jpg', 'vintage 1.jpg,vintage 2.jpg,vintage 3.jpg'),
(6, 'ribbon flower', '', 105.00, 'm-clasp frame', '0000-00-00 00:00:00', 'I used a vintage kimono belt to make a kiss lock bag. I\'m fascinated by the traditional patterns and the unique sense of time of the period, and I finally found a suitable belt that incorporates modern techniques to complete this mixed style piece.', 'ribbon flower thumb.jpg', 'ribbon flower 1.jpg,ribbon flower 2.jpg,ribbon flower 3.jpg'),
(7, 'white rose', '', 101.00, 'm-clasp frame', '0000-00-00 00:00:00', 'White is the color of purity, chastity and innocence.\r\nWhite flowers are generally associated with new beginnings and make an ideal\r\naccompaniment to a first-time bride walking down the aisle.\r\n', 'white rose thumb.jpg', 'white rose 1.jpg,white rose 2.jpg,white rose 3.jpg'),
(8, 'crane dancing', '', 159.00, 'm-clasp frame', '0000-00-00 00:00:00', 'In addition to the crane embroidery on the top is very delicate, the black part also conceals the dark peony pattern, noble and practical design of a bag.', 'crane dancing thumb.jpg', 'crane dancing 1.jpg,crane dancing 2.jpg,crane dancing 3.jpg'),
(9, 'japanese fenland', '', 125.00, 'm-clasp frame', '0000-00-00 00:00:00', 'Japanese SOU SOU and Finland\'s Marimekko are both brands that specialize in prints, and I especially like their print designs. This fabric is like a combination of both elements, so I fell in love with it right away!\r\nThis style is a shoulder design, the opening is very large and easy to take things,\r\npresenting a sense of sophistication and casualness.', 'japanese fenland thumb.jpg', 'japanese fenland 1.jpg,japanese fenland 2.jpg,japanese fenland 3.jpg'),
(10, 'colorful houndstooth', '', 105.00, 'm-clasp frame', '0000-00-00 00:00:00', 'Colorful Houndstooth kiss lock handbagswith gold color chain artistic evening handbags', 'colorful houndstooth thumb.jpg', 'colorful houndstooth 1.jpg,colorful houndstooth 2.jpg,colorful houndstooth 3.jpg'),
(11, 'autumn heart', '', 137.00, 'l-clasp frame', '0000-00-00 00:00:00', 'An Auburn flower bag with light turquoise background, wood frame and acrylic chain, an incredibly unique purse for any occasion!', 'autumn heart thumb.jpg', 'autumn heart 1.jpg,autumn heart 2.jpg,autumn heart 3.jpg'),
(12, 'fullness', '', 128.00, 'l-clasp frame', '0000-00-00 00:00:00', 'Modern Chinese style handbag can add a cultural touch to fashion, and the exquisite embroidery makes the bag in your hand a different landscape.', 'fullness thumb.jpg', 'fullness 1.jpg,fullness 2.jpg,fullness 3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
