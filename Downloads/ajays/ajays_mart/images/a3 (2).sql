-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2019 at 09:31 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a3`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `cus_name` varchar(11) NOT NULL,
  `cus_email` varchar(20) NOT NULL,
  `cus_tel` int(20) NOT NULL,
  `cus_address` int(11) NOT NULL,
  `cus_city` varchar(20) NOT NULL,
  `cus_country` varchar(20) NOT NULL,
  `item_title` varchar(100) NOT NULL,
  `item_finalprice` double(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`cus_name`, `cus_email`, `cus_tel`, `cus_address`, `cus_city`, `cus_country`, `item_title`, `item_finalprice`) VALUES
('', '', 0, 0, '', '', '3', 524),
('sara', 'sara@gmail.com', 124498, 35, 'islamabad', 'pakistan', '7', 1),
('anfas', 'anfas@gmail.com', 124466, 22334, 'rawalpindi', 'pakistan', '6', 1),
('javeria zaf', 'javeria123@gmail.com', 56957, 0, 'rawalpindi', 'pakistan', '3', 401),
('javeria zaf', 'javeria123@gmail.com', 124466, 35, 'canada', 'england', '3', 1),
('javeria zaf', 'javeria123@gmail.com', 4524909, 2233, 'canada', 'england', '4', 493),
('anfas', 'anfoo@gmail.com', 4524980, 4546, 'rawalpindi', 'pakistan', '4', 298),
('anfas', 'anfoo@gmail.com', 4524980, 4546, 'rawalpindi', 'pakistan', '4', 298),
('anfas', 'anfoo@gmail.com', 4524980, 4546, 'rawalpindi', 'pakistan', '4', 298),
('anfas', 'anfoo@gmail.com', 4524980, 4546, 'rawalpindi', 'pakistan', '4', 298),
('anfas', 'anfoo@gmail.com', 4524980, 4546, 'rawalpindi', 'pakistan', '4', 298),
('anfas', 'anfoo@gmail.com', 4524980, 4546, 'rawalpindi', 'pakistan', '4', 298),
('anfas', 'anfoo@gmail.com', 4524980, 4546, 'rawalpindi', 'pakistan', '4', 298),
('anfas', 'anfoo@gmail.com', 4524980, 4546, 'rawalpindi', 'pakistan', '4', 298),
('anfas', 'anfoo@gmail.com', 4524980, 4546, 'rawalpindi', 'pakistan', '4', 298),
('anfas', 'anfoo@gmail.com', 4524980, 4546, 'rawalpindi', 'pakistan', '4', 298),
('anfas', 'anfoo@gmail.com', 4524980, 4546, 'rawalpindi', 'pakistan', '4', 298),
('ss', 'sss@hjssss', 899, 78, 'k', 'dx', '5', 428),
('ss', 'ww@lll', 122, 33, 'k', '4g', '3', 373);

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
  `title` text NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`qty`, `id`, `cid`, `pid`, `totalAmount`, `title`, `stock`) VALUES
(2, 10, 2, 11, 180, 'Cinnamon (Dar Chini) ', 0),
(1, 11, 2, 46, 163, 'Bitter Gourds (Kareela)', 0);

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
(7, 'INSTANT FOODS'),
(8, 'HOUSEHOLDS'),
(9, 'GROCERY ITEMS'),
(10, 'BAKERY');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(10) NOT NULL,
  `parent_comment_id` int(10) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `parent_comment_id`, `comment`, `sender_name`, `date`, `product_id`) VALUES
(6, 0, 'ok', 'xyz', '2019-06-25 16:25:17', 58),
(7, 0, 'ddd', 'gh', '2019-06-25 16:50:46', 43),
(8, 0, 'ss', 'gh', '2019-06-25 16:52:24', 43),
(9, 0, 'aaa', 'aa', '2019-06-25 16:54:34', 43),
(10, 0, 'd', 'xyz', '2019-06-25 17:00:44', 43),
(11, 0, 'fffff', 'xyz', '2019-06-25 17:03:48', 43),
(12, 0, 'ddddss', 'dd', '2019-06-25 17:04:50', 43),
(13, 0, 'sss', 'nanaf', '2019-06-25 17:05:19', 10),
(14, 13, 'no', 'ht', '2019-06-25 17:07:02', 10),
(15, 0, 'hhj', 'anfas', '2019-06-25 17:24:32', 10),
(16, 0, 'nice product', 'anfas', '2019-06-25 19:09:36', 2),
(17, 0, 'good quality', 'javeria', '2019-06-25 19:10:01', 9),
(18, 0, 'nice', 'anfas', '2019-06-27 15:11:40', 39),
(19, 18, 'no', 'hell', '2019-06-27 15:14:04', 39),
(20, 0, 'no', 'test', '2019-06-27 15:14:46', 39),
(21, 0, 'nice', 'anfas', '2019-06-27 18:49:46', 42),
(22, 0, 'ok', 'javeria', '2019-06-27 18:50:00', 42),
(23, 22, 'hhh', 'kk', '2019-06-27 18:50:14', 42),
(24, 0, 'no quality', 'test', '2019-06-28 14:57:05', 33),
(25, 0, 'perfect quality', 'javeria', '2019-06-29 13:32:35', 5),
(26, 25, 'thanks', 'anfas', '2019-06-29 13:32:49', 5),
(27, 0, 'best', 'javeria', '2019-06-29 13:33:26', 2),
(28, 0, 'the quality is too good', 'maliha', '2019-06-29 13:33:45', 2);

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
('xyz@gmail.com', 'xyz', 12345, 123, 3849020, 2),
('anfas@gmail.com', 'anfas', 0, 111, 0, 3),
('javeria@gmail.com', 'javeria', 0, 222, 0, 4),
('h@gmail.com', 'Anafas', 0, 0, 0, 5);

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
(1, 'Oreo', 'oreo.jpg', '12gm', 1, 'oreo,biscuit', 120, 6, 1000),
(2, 'Mezan Sun Flower Oil Tin', 'mezan_oil.jpg', '2.5 ltr', 2, 'mezan,oil', 520, 9, 999),
(3, 'Michells', 'michelle.jpg', '450gm', 3, 'mitchells', 139, 9, 983),
(4, 'Olpers', 'olpers.jpg', '1 ltr', 4, 'olpers,milk', 140, 9, 992),
(5, 'Sunridge Chakki Aata ', 'flour.jpg', '10kg Sunridge Chakki Aata', 5, 'sunridge,flour,atta\r\n', 580, 9, 999),
(6, 'Daal Masoor', 'daal.jpg', '1 kg', 6, 'daal,masoor', 110, 9, 999),
(7, 'Red Chilli Whole (Sabut Lal Mi', 'redchilli.jpg', '150 gm', 6, 'redchilli', 114, 9, 1000),
(8, 'Mehran Chicken Curry Masala', 'chicken_masala.jpg', '45 gm', 7, 'mehran,chicken masala', 60, 9, 1000),
(9, 'Dalda Olive Oil Pomace Bottle', 'dalda.jpg', '500 ml', 8, 'dalda,olive, oil', 410, 9, 84),
(10, 'Bay Leaf (Taiz Patta) )', 'bayleaf.jpg', ' 50g Bay Leaf ', 6, 'taiz patta\r\n', 21, 9, 999),
(11, 'Cinnamon (Dar Chini) ', 'darchini.jpg', ' 100g Cinnamon ', 6, 'darchinni', 90, 9, 962),
(12, 'Coconut Powder (Pisa Khopra)', 'coconut_powder.jpg', '100 gm', 6, 'coconut,powder', 120, 9, 1000),
(13, 'Nigella Seed (Kalonji) ', 'kalongi.jpg', '100g  (Kalonji)', 6, 'kalonji', 50, 9, 999),
(14, 'Mezan Banaspati', 'mezanbas.jpg', '1 ltr', 2, 'mezan,ghee,banaspati', 182, 9, 1000),
(15, 'Mehran Refined Iodized Salt ', 'mehran_salt.jpg', '800gm Mehran Refined Iodized Salt', 7, 'mehran,salt', 29, 9, 995),
(16, 'Knorr Chicken Yakhni', 'knorr.jpg', '20 gm', 9, 'knorr,chicken yakhni', 20, 9, 999),
(17, 'Razmin Superior Dark Soy Sauce', 'soysauce.jpg', '250 ml', 10, 'razmin,soy sauce', 235, 9, 1000),
(18, 'Flour (atta)', 'flour.jpg', '10kg', 6, 'flour,atta', 580, 9, 1000),
(21, 'Maida', 'maida.jpg', '500 g', 6, 'maida', 50, 9, 1000),
(22, 'National Corn Flour', 'national_cornflour.jpg', '300 gm', 11, 'national,corn flour', 70, 9, 1000),
(23, 'Daal Mong washed', 'Daal Mong.jpg', '500 gm', 6, 'daal ,moong', 95, 9, 1000),
(24, 'Bake Parlour Chakki Atta', 'bake_parlour_chakki_atta.jpg', '10 kg', 12, 'bake parlour,atta', 490, 9, 1000),
(25, 'Bake Parlour Besan', 'bake_parlour_besan.jpg', '1 kg', 12, 'bake parlour,besan\r\n', 140, 9, 1000),
(26, 'National Iodized Salt', 'natinal salt.jpg', '800 gm', 11, 'national,salt', 25, 9, 1000),
(28, 'Black Pepper', 'Black_pepper.jpg', '100 gm', 6, 'black pepper', 120, 9, 1000),
(29, 'Black Salt (Kala namak)', 'Black_salt.jpg', '400 gm', 6, 'black salt', 30, 9, 988),
(30, 'Cinnamon (Dar chinni)', 'dar_chinni.jpg', '100gm', 6, 'dar chinni', 90, 9, 1000),
(31, 'clo', 'cloves.jpg', '50 gm', 6, 'cloves,long', 0, 0, 0),
(32, 'Tamarind (Imlee)', 'Imlee.jpg', '500 gm', 6, 'Imlee', 200, 9, 1000),
(33, 'Zeera', 'Zeera.jpg', '100 gm', 6, 'zeera', 118, 9, 998),
(34, 'Soya Supreme Ghee', 'Soya_supreme_ghee.jpg', '1  kg', 13, 'soya supreme,ghee', 201, 9, 1000),
(35, 'potatoes', 'potatoes.jpg', '1 Kg', 6, 'potatoes,aloo', 44, 4, 994),
(36, 'Mango(sindhri)', 'mango_sindhri.jpg', '1 Kg', 6, 'mango', 146, 4, 999),
(37, 'Mango (chaunsa)', 'mango_chaunsa.jpg', '1 kg', 6, 'mango', 224, 4, 999),
(38, 'Coconut', 'coconut.jpg', '200 gm', 6, 'coconut', 269, 4, 1000),
(39, 'Onion', 'onion.jpg', '3 Kg', 6, 'onion,piyaaz', 165, 4, 999),
(40, 'Cilantro, Corriander (Dhanyan)', 'dhanyajpg.jpg', '1 Bundle', 6, 'dhanya', 12, 4, 1000),
(41, 'Iceberg', 'iceberg.jpg', '1 Kg', 6, 'iceberg', 230, 4, 999),
(42, ' Corriander (Dhanyan) ', 'dhanya.jpg', '1 Bundle', 6, 'dhanya.jpg', 12, 4, 1000),
(43, 'Iceberg', 'iceberg.jpg', '1 Kg', 6, 'iceberg', 230, 4, 1000),
(44, 'Desi Garlic', 'garlic.jpg', '250gm', 6, 'garlic,lehsan', 68, 4, 1000),
(45, 'German Chilies  (Mirch)', 'mirch.jpg', '250 gm', 6, 'green chilli,mirch', 17, 4, 1000),
(46, 'Bitter Gourds (Kareela)', 'bitter_gourd.jpg', 'bittergourd,kareela', 6, 'kareela,bitter gourd', 163, 4, 999),
(47, 'Sweet Potato (Shakarkandi) ', 'sweet-potato.jpg', '1 Kg', 6, 'sweet-potato,shakarkandi', 81, 4, 999),
(48, 'Taro(Arvi)', 'taro.jpg', '1 kg', 6, 'taro,arvi', 146, 4, 1000),
(49, 'Corn (bhutta)', 'corn.jpg', '1 Kg', 6, 'corn,bhutta', 62, 4, 1000),
(50, 'Salad leaves', 'salad_patta.jpg', '1 Kg', 6, 'salad leaves', 81, 4, 1000),
(51, 'beetroot(chunkandar)', 'beetroot.jpg', '1 Kg', 6, 'beetroot,chukandar', 69, 4, 999),
(52, 'Peppermint (pudina)', 'pudina.jpg', '1 Bundle', 6, 'mint,pudina', 14, 4, 1000),
(53, 'Pea (mutter)', 'pea.jpg', '500 gm', 6, 'pea,mutter', 90, 4, 1000),
(54, 'Cabbage(band gobhi)', 'cabbage.jpg', '1 Kg', 6, 'cabbage,gobhi', 87, 4, 1000),
(55, 'Youngs Chicken Spread', 'y_spread.jpg', '100 ml', 6, 'chicken spread', 65, 5, 1000),
(56, 'Nestle Milkpak', 'milkpak1.jpg', '1 Ltr Carton (Pack Of 12) GET Milkpak 250 Ml Carton FREE\r\n1 Unit', 6, 'nestle,milkpak,milk', 1599, 5, 1000),
(57, 'Alshifa Honey', 'shifa-honey.jpg', '125 gm', 6, 'alshifa,honey', 429, 5, 1000),
(58, 'Olpers Milk', 'olpers-carton.jpg', 'BUY Olpers Milk (1 Ltr X 12) Carton GET Olpers Milk 1 Ltr FREE\r\n1 Ltr x 12 + 1 Ltr', 6, 'olpers,milk', 1560, 5, 983),
(59, 'Dayfresh milk', 'lactose.jpg', '1 Ltr', 6, 'dayfresh,milk', 179, 5, 1000),
(60, 'Dawn Bran Bread', 'dawn-breadjpg.jpg', '400 gm', 6, 'dawn,bread', 70, 5, 999),
(61, 'Everyday Milk', 'everyday.jpg', 'BUY Nestle Everyday Original 900 Gm GET Tapal Danedar Teabags 50 Gm FREE\r\n1 Unit', 6, 'everyday,milk', 840, 5, 1000),
(62, 'Nestle MilkPak', 'milkpak2jpg.jpg', '1 Ltr', 6, 'nestle,milk', 135, 5, 1000),
(63, 'Dawn hot dog bun', 'd_hotdog.jpg', '60 gm', 6, 'Dawn,hot dog', 15, 5, 1000),
(64, 'Dawn Bread', 'd_bread.jpg', '1 Piece', 6, 'dawn,bread', 70, 5, 1000),
(65, 'Nestle Bunyad', 'bunyad.jpg', '260 gm', 6, 'nestle,bunyad,milk', 185, 5, 999),
(69, ' Heinz Complan Chocolate', 'complain.jpg', '200 gm', 6, 'complain,chocolate', 249, 5, 997),
(70, 'Al Marai Sandwich Cheese Slice', 'cheese.jpg', '200gm', 6, 'cheese', 360, 5, 999),
(71, 'Everyday Milk', 'everyday.jpg', 'BUY Nestle Everyday Original 900 Gm GET Tapal Danedar Teabags 50 Gm FREE\r\n1 Unit', 6, 'everyday,milk', 840, 5, 1000),
(72, 'Nestle MilkPak', 'milkpak2jpg.jpg', '1 Ltr', 6, 'nestle,milk', 135, 5, 1000),
(74, 'Dawn Bread', 'd_bread.jpg', '1 Piece', 6, 'dawn,bread', 70, 5, 1000),
(75, 'Nestle Bunyad', 'bunyad.jpg', '260 gm', 6, 'nestle,bunyad,milk', 185, 5, 1000),
(76, 'Pakola Flavored Milk Ice Cream', 'P_ice.jpg', '250 ml', 6, 'pakola,ice cream', 35, 5, 1000),
(77, 'Pakola Flavored Milk Mango', 'p_mango.jpg', '250ml', 6, 'pakola,mango', 35, 5, 999),
(78, 'Pakola Flavored Milk Banana', 'p_banana.jpg\r\n', '250 ml', 6, 'milkpak,banana', 35, 5, 1000),
(79, ' Heinz Complan Chocolate', 'complain.jpg', '200 gm', 6, 'complain,chocolate', 249, 5, 1000),
(80, 'Al Marai Sandwich Cheese Slice', 'cheese.jpg', '200gm', 6, 'cheese', 360, 5, 1000),
(81, 'Nestle Cream', 'cream.jpg', '200 ml', 6, 'nestle,cream', 119, 5, 1000),
(82, 'Nestle Nido +1', 'nido.jpg', '400 gm', 6, 'Nestle,nido', 480, 5, 1000),
(83, 'Youngs Chicken Spread BBQ Pouc', 'young_bbq.jpg', '500 ml', 6, 'young,bbq', 299, 5, 998),
(84, ' Youngs Natural Honey Glass Ja', 'young_honey.jpg', '125 gm', 6, 'youngs,honey', 149, 5, 1000),
(85, 'Alshifa Honey', 'alshifa_honey.jpg', '125 gm', 6, 'alshifa,honey', 429, 5, 1000),
(86, 'Mitchells Mango Jam', 'mango-jam.jpg', '200 gm', 6, 'mango,jam,mitchells', 93, 5, 953),
(87, 'Youngs Chicken Spread BBQ ', 'young_bbq.jpg', '500 ml', 6, 'young,bbq', 299, 5, 1000),
(88, ' Youngs Natural Honey ', 'young_honey.jpg', '125 gm', 6, 'youngs,honey', 149, 5, 1000),
(89, 'Alshifa Honey', 'alshifa_honey.jpg', '125 gm', 6, 'alshifa,honey', 429, 5, 1000),
(90, 'Mitchells Mango Jam', 'mango-jam.jpg', '200 gm', 6, 'mango,jam,mitchells', 93, 5, 1000),
(91, 'Lu Bakeri Nankhatai', 'naan.jpg', '24 pcs', 6, 'lu,nankhatai', 120, 6, 1000),
(92, '  LU Zeera Plus ', 'z_plus.jpg', '1 Piece', 6, 'lu,biscuit,zeera', 40, 6, 998),
(93, 'Beef Boneless Cubes', 'beef.jpg', '1 Kg', 6, 'meat,beef', 843, 5, 1000),
(94, 'Chicken', 'chicken.jpg', '1 Kg', 6, 'chicken', 475, 5, 1000),
(95, 'Mutton', 'mutton.jpg', '1 kg', 6, 'mutton', 1471, 5, 1000),
(96, 'Ding Dong Bubble', 'dingdong.jpg', '12 sticks', 6, 'bubble,dingdong', 110, 6, 1000),
(97, 'Freshup mint', 'freshup.jpg', '12 pcs', 6, 'bubble,freshup', 204, 6, 1000),
(98, 'Peek Freans Gluco ', 'gluco.jpg', '1 Piece', 6, 'gluco,biscuit', 40, 6, 1000),
(99, 'Peek Freans Marie', 'marie.jpg', '1 Piece', 6, 'biscuit,marie', 40, 6, 1000),
(100, 'Cadbury Dairy Milk ', 'dairymilk.jpg', '21 gm', 6, 'chocolate,dairy milk,cadbury', 30, 6, 1000),
(101, 'Cadbury Dairy Milk Bubbly', 'bubbly.jpg', '20 gm', 6, 'chocolate,dairymilk,bubbly', 40, 6, 1000),
(102, 'Kernelpop Cheese  Popcorns', 'popcorn.jpg', '100 gm', 6, 'popcorn,kernel,cheese', 270, 6, 1000),
(103, 'Cheetos Puffs Ketchup', 'cheetos.jpg', '28 gm', 6, 'cheetos', 20, 6, 1000),
(104, 'Wah mix nimco', 'nimco.jpg', '200 gm', 6, 'nimco', 100, 6, 1000),
(105, 'Wah Daal Moth', 'daalmoth.jpg', '34 gm', 6, 'daalmoth', 20, 6, 1000),
(106, 'Wah Daal Channa', 'channa.jpg', '200 gm', 6, 'daal,channa', 105, 6, 1000),
(107, 'Candyland Sonnet', 'sonnet.jpg', '36 pcs', 0, 'chocolate,sonnet', 180, 6, 1000),
(108, 'Candyland Sonnet', 'sonnet.jpg', '36 pcs', 6, 'chocolate,sonnet', 180, 6, 1000),
(111, 'Knorr Noodles Chicken', 'chick-knorr.png', '264 gm', 6, 'knorr,chicken', 110, 7, 1000),
(112, ' Nauras Ice Cream Syrup', 'syrupjpg.jpg', 'BUY Nauras Ice Cream Syrup 800 Ml GET Lazzat Vermicelli 150 Gm FREE\r\n1 Unit', 6, 'syrup,,naurus', 200, 7, 1000),
(113, 'Pheni', 'pheni.jpg', '1 Piece', 0, 'pheni', 60, 7, 1000),
(114, 'Khajla', 'khajla.jpg', '1 Piece', 6, 'khajla', 60, 7, 1000),
(115, 'National Vermicelli', 'vermecelli.jpg', '150 gm', 6, 'vermecelli', 28, 7, 1000),
(116, '  Shan Shoop Noodles Chatpata ', 'chatpata.jpg', '65 gm', 6, 'noodles,shan,chatpata', 25, 7, 1000),
(117, 'Kolson ChunkyChicken Noodle ', 'chunky.jpg', '68 gm', 6, 'noodles,chicken', 30, 7, 1000),
(118, 'Kolson SmokyTikka Noodle', 'smoky.jpg', '68 gm', 6, 'noodle,tikka', 30, 7, 1000),
(119, 'Hersheys Cocoa Powder ', 'cocoa.jpg', '7 oz', 6, 'cocoa', 748, 7, 1000),
(120, 'Falak Kheer Mix', 'kheer.jpg', '155 gm', 6, 'kheer,falak', 65, 7, 1000),
(121, 'Hersheys Syrup Chocolate', 'her.jpg', '24 oz', 6, 'hersheys,chcocolate', 399, 7, 1000),
(122, 'Rafhan Strawberry Jelly', 'jelly.png', '80 gm', 6, 'jelly,rafhan', 60, 7, 1000),
(123, 'Pheni', 'pheni.jpg', '1 Piece', 6, 'pheni', 60, 7, 1000),
(124, 'Khajla', 'khajla.jpg', '1 Piece', 6, 'khajla', 60, 7, 1000),
(125, 'National Vermicelli', 'vermecelli.jpg', '150 gm', 6, 'vermecelli', 28, 7, 1000),
(126, '  Shan Shoop Noodles Chatpata ', 'chatpata.jpg', '65 gm', 6, 'noodles,shan,chatpata', 25, 7, 1000),
(127, 'Kolson ChunkyChicken Noodle ', 'chunky.jpg', '68 gm', 6, 'noodles,chicken', 30, 7, 1000),
(128, 'Kolson SmokyTikka Noodle', 'smoky.jpg', '68 gm', 6, 'noodle,tikka', 30, 7, 1000),
(129, 'Hersheys Cocoa Powder ', 'cocoa.jpg', '7 oz', 6, 'cocoa', 748, 7, 1000),
(130, 'Falak Kheer Mix', 'kheer.jpg', '155 gm', 6, 'kheer,falak', 65, 7, 1000),
(131, 'Hersheys Syrup Chocolate', 'her.jpg', '24 oz', 6, 'hersheys,chcocolate', 399, 7, 1000),
(133, 'HarpicLime ToiletCleaner', 'lime.png', '1 ltr', 6, 'harpic,lime', 335, 8, 1000),
(134, 'Inseguard MosquitoCoil', 'coil.jpg', '1 Piece', 6, 'coil', 65, 8, 1000),
(135, 'King Air Freshener', 'air.jpg', '300 ml', 6, 'airfreshner', 149, 8, 1000),
(136, 'Surf Excel Powder', 'excel.jpg', '1 Kg', 6, 'surf,excel', 310, 8, 1000),
(137, 'Dettol Citrus ', 'dettol.jpg', 'BUY 2 GET 1 FREE Dettol Multi Surface Cleaner Citrus 1 Ltr\r\n1 Unit', 6, 'dettol', 1074, 8, 1000),
(138, ' Dettol Floral ', 'floral.jpg', 'BUY 2 GET 1 FREE Dettol Multi Surface Cleaner Floral 1 Ltr\r\n1 Unit', 6, 'dettol', 1074, 8, 1000),
(139, 'Safai Bundle Mini', 'mini.jpg', '6 pcs', 6, 'bundle', 1253, 8, 1000),
(140, 'Comfort Fabric Conditioner', 'comfort.jpg', '400 ml', 8, 'comfort', 289, 8, 1000),
(141, ' Cherry Blossom White Liquid', 'Cherry Blossom White Liquid.jpg', '100 ml ', 8, '', 0, 8, 0),
(142, ' Surf Excel Powder', 'Surf Excel Powder.jpg', '1kg ', 8, '', 0, 8, 0),
(143, ' BUY 2 GET 1 FREE Harpic Toile', 'FREE Harpic Toilet Cleaner Rose.jpg', '750 ml ', 8, '', 0, 8, 0),
(144, ' Mortein Crawling Insect Kille', 'mortien_1.jpg', '400 ml ', 8, '', 0, 8, 0),
(145, ' Robin Liquid Blue', 'Robin Liquid Blue.jpg', '150 ml ', 8, '', 0, 8, 0),
(146, ' Cherry Blossom Polish Black', 'Cherry Blossom Polish Black.jpg', '90 ml ', 8, '', 0, 8, 0),
(147, ' Frey Air Freshener Jasmine', 'Frey Air Freshener Jasmine.jpg', '300 ml ', 8, '', 0, 8, 0),
(148, ' Persil Capsules Bio 315G', 'Persil Capsules Bio 315G.jpg', '12 Pcs ', 8, '', 0, 8, 0),
(149, 'Tide Liquid Original', 'Tide Liquid Original.jpg', '2.95 Ltr ', 8, '', 0, 8, 0),
(150, 'RB Safai Bundle Mini', 'RB Safai Bundle Mini.jpg', '6 Pcs ', 8, '', 0, 8, 0),
(151, 'Dry Mop Set Local', 'Dry Mop Set Local.jpg', '1 Unit ', 8, '', 0, 8, 0),
(152, ' Hilal Freshup Spearmint Stick', 'Hilal Freshup Spearmint Stick Tray.jpg', '12 Pcs ', 6, '', 0, 6, 0),
(153, ' Peek Freans Gluco Snack Pack', 'Peek Freans Gluco Snack Pack.jpg', '1 Piece ', 6, '', 0, 6, 0),
(154, ' Cadbury Dairy Milk Crackle', 'Cadbury Dairy Milk Crackle.jpg', '21 gm ', 6, '', 0, 6, 0),
(155, ' Youngs Sandwich Spread Pouch', 'Youngs Sandwich Spread Pouch.jpg', '500ml ', 10, '', 0, 10, 0),
(156, ' Langnese Pure Bee Honey', 'Langnese Pure Bee Honey.jpg', '125 gm ', 10, '', 0, 10, 0),
(157, 'Youngs Olive Spread Glass Jar ', 'Youngs Olive Spread Glass Jar.jpg', '300 ml ', 10, '', 0, 10, 0),
(158, ' Dawn Bread', 'Dawn Bread.jpg', '1 Piece ', 10, '', 0, 10, 0),
(159, ' Ahmed Rose Petal Spread', 'rose-petal-spread.jpg', '450 gm ', 10, '', 0, 10, 0),
(160, 'Bake Parlor Barley Porridge Ba', 'Bake Parlor Barley Porridge Bake Parlor Barley Porridge.jpg', '175 gm ', 10, '', 0, 10, 0),
(161, ' Comelle Sweetened Condensed M', 'Comelle Sweetened Condensed Milk.jpg', '400 gm ', 10, '', 0, 10, 0),
(162, 'Hemani Slimming Honey Hemani S', 'Hemani Slimming Honey Hemani Slimming Honey.jpg', ' 310 gm ', 10, '', 0, 10, 0),
(163, ' Millac Skimillac Skimmed Milk', 'Millac Skimillac Skimmed Milk Powder.jpg', '1kg ', 10, '', 0, 10, 0);

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
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

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
