-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2019 at 08:02 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a2`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(10) NOT NULL,
  `company_id` int(10) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `logo_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `qty` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `totalAmount` int(11) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`qty`, `id`, `cid`, `pid`, `totalAmount`, `title`) VALUES
(1, 99, 2, 3, 139, 'Michells'),
(1, 100, 2, 6, 110, 'Daal Masoor'),
(1, 101, 2, 29, 0, 'Black Salt (Kala namak)'),
(1, 102, 2, 13, 0, 'Nigella Seed (Kalonji) '),
(1, 103, 2, 15, 0, 'Mehran Refined Iodized Salt '),
(1, 104, 2, 5, 580, 'Sunridge Chakki Aata '),
(1, 105, 2, 11, 0, 'Cinnamon (Dar Chini) '),
(1, 106, 2, 10, 0, 'Bay Leaf (Taiz Patta) )'),
(1, 107, 2, 21, 0, 'Maida');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_title`) VALUES
(4, 'FRUITS AND VEGETABLES'),
(5, 'MEAT AND EGGS'),
(6, 'BISCUITS AND SNACKS '),
(7, 'BEVERAGES'),
(8, 'HOUSEHOLDS'),
(9, 'GROCERY ITEMS');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(10) NOT NULL,
  `comapny_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `comapny_name`) VALUES
(1, 'National'),
(2, 'Bake parlour'),
(3, 'LU'),
(4, 'SurfExcel'),
(5, 'Harpic');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `email` varchar(100) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `address` int(11) NOT NULL,
  `password` int(10) NOT NULL,
  `mobile` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`email`, `customer_name`, `address`, `password`, `mobile`, `customer_id`) VALUES
('abc@gmail.com', 'abc', 3452, 123, 90078601, 1),
('xyz@gmail.com', 'xyz', 12345, 123, 3849020, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `image` text NOT NULL,
  `product_desc` text NOT NULL,
  `brand_id` int(10) NOT NULL,
  `product_keyword` text NOT NULL,
  `product_price` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `image`, `product_desc`, `brand_id`, `product_keyword`, `product_price`, `cat_id`, `stock`) VALUES
(1, 'Oreo', 'images/oreo.jpg', '12gm', 1, 'oreo,biscuit', 0, 6, 0),
(2, 'Mezan Sun Flower Oil Tin', 'mezan_oil.jpg', '2.5 ltr', 2, 'mezan,oil', 520, 9, 5),
(3, 'Michells', 'michelle.jpg', '450gm', 3, 'mitchells', 139, 9, 100),
(4, 'Olpers', 'olpers.jpg', '1 ltr', 4, 'olpers,milk', 140, 9, 100),
(5, 'Sunridge Chakki Aata ', 'flour.jpg', '10kg Sunridge Chakki Aata', 5, 'sunridge,flour,atta\r\n', 580, 9, 100),
(6, 'Daal Masoor', 'daal.jpg', '1 kg', 6, 'daal,masoor', 110, 9, 5),
(7, 'Red Chilli Whole (Sabut Lal Mi', 'redchilli.jpg', '150 gm', 6, 'redchilli', 114, 9, 100),
(8, 'Mehran Chicken Curry Masala', 'chicken_masala.jpg', '45 gm', 7, 'mehran,chicken masala', 0, 0, 100),
(9, 'Dalda Olive Oil Pomace Bottle', 'dalda.jpg', '500 ml', 8, 'dalda,olive, oil', 0, 0, 100),
(10, 'Bay Leaf (Taiz Patta) )', 'bayleaf.jpg', ' 50g Bay Leaf ', 6, 'taiz patta\r\n', 0, 0, 100),
(11, 'Cinnamon (Dar Chini) ', 'darchini.jpg', ' 100g Cinnamon ', 6, 'darchinni', 0, 0, 100),
(12, 'Coconut Powder (Pisa Khopra)', 'coconut_powder.jpg', '100 gm', 6, 'coconut,powder', 0, 0, 100),
(13, 'Nigella Seed (Kalonji) ', 'kalongi.jpg', '100g  (Kalonji)', 6, 'kalonji', 0, 0, 100),
(14, 'Mezan Banaspati', 'mezanbas.jpg', '1 ltr', 2, 'mezan,ghee,banaspati', 0, 0, 100),
(15, 'Mehran Refined Iodized Salt ', 'mehran_salt.jpg', '800gm Mehran Refined Iodized Salt', 7, 'mehran,salt', 0, 0, 5),
(16, 'Knorr Chicken Yakhni', 'knorr.jpg', '20 gm', 9, 'knorr,chicken yakhni', 0, 0, 0),
(17, 'Razmin Superior Dark Soy Sauce', 'soysauce.jpg', '250 ml', 10, 'razmin,soy sauce', 0, 0, 0),
(18, 'Flour (atta)', 'flour.jpg', '1 kg', 6, 'flour,atta', 0, 0, 0),
(21, 'Maida', 'maida.jpg', '1 kg', 6, 'maida', 0, 0, 0),
(22, 'National Corn Flour', 'national_cornflour.jpg', '300 gm', 11, 'national,corn flour', 0, 0, 0),
(23, 'Daal Mong', 'Daal Mong.jpg', '500 gm', 6, 'daal ,moong', 0, 0, 0),
(24, 'Bake Parlour Chakki Atta', 'bake_parlour_chakki_atta.jpg', '10 kg', 12, 'bake parlour,atta', 0, 0, 0),
(25, 'Bake Parlour Besan', 'bake_parlour_besan.jpg', '1 kg', 12, 'bake parlour,besan\r\n', 0, 0, 0),
(26, 'National Iodized Salt', 'natinal salt.jpg', '800 gm', 11, 'national,salt', 0, 0, 0),
(28, 'Black Pepper', 'Black_pepper.jpg', '100 gm', 6, 'black pepper', 0, 0, 0),
(29, 'Black Salt (Kala namak)', 'Black_salt.jpg', '400 gm', 6, 'black salt', 0, 0, 0),
(30, 'Cinnamon (Dar chinni)', 'dar_chinni.jpg', '100gm', 6, 'dar chinni', 0, 0, 0),
(31, 'Cloves (long)', 'cloves.jpg', '50 gm', 6, 'cloves,long', 0, 0, 0),
(32, 'Tamarind (Imlee)', 'Imlee.jpg', '500 gm', 6, 'Imlee', 0, 0, 0),
(33, 'Zeera', 'Zeera.jpg', '100 gm', 6, 'zeera', 0, 0, 0),
(34, 'Soya Supreme Ghee', 'Soya_supreme_ghee.jpg', '1  kg', 13, 'soya supreme,ghee', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchase_id` int(10) NOT NULL,
  `user_account_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_item`
--

CREATE TABLE `purchase_item` (
  `purchase_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `number_of_item` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `purchase_item`
--
ALTER TABLE `purchase_item`
  ADD PRIMARY KEY (`purchase_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchase_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_item`
--
ALTER TABLE `purchase_item`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
