-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 29, 2021 at 01:23 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `Cart`
--

CREATE TABLE `Cart` (
  `cart_id` int(100) NOT NULL,
  `cart_product` varchar(100) NOT NULL,
  `cart_price` varchar(100) NOT NULL,
  `cart_subtotal` varchar(100) NOT NULL,
  `cart_quantity` varchar(100) NOT NULL,
  `cart_status` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Cart`
--

INSERT INTO `Cart` (`cart_id`, `cart_product`, `cart_price`, `cart_subtotal`, `cart_quantity`, `cart_status`, `user_id`) VALUES
(1, 'Sport Sandle', '90', '90', '1', 'Paid', 1),
(2, 'Sport Sandle', '90', '450', '5', 'Paid', 1),
(3, 'Backpack', '120', '120', '1', 'Paid', 1),
(4, 'Sport Sandle', '90', '90', '1', 'Paid', 1),
(5, 'Sport Sandle', '90', '90', '1', 'Paid', 1),
(6, 'Hiking Shoes', '100', '100', '1', 'Paid', 3);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `user_id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `display_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`user_id`, `first_name`, `last_name`, `display_name`, `email`, `password`) VALUES
(1, 'naoko', 'yamaguchi', 'nao', 'Naoko.Yamaguchi@gmail.com', '123'),
(2, 'Ayumi', 'Yamaguchi', 'Ayu', 'Ayumi.Yamaguchi@gmail.com', '456'),
(3, 'Haruka', 'Yamaguchi', 'Haru', 'Haruka.Yamaguchi@gmail.com', '789');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_color` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `short_description` varchar(100) NOT NULL,
  `product_description` varchar(1000) NOT NULL,
  `product_quantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_color`, `product_price`, `product_image`, `short_description`, `product_description`, `product_quantity`) VALUES
(10, 'Sport Sandle', 'Black', '90', 'sandle.jpeg', 'short description for homegage', 'Hybrid wear that can be worn all year round by changing the combination of barefoot to socks\r\nAmphibious and lightweight, perfect for urban and travel use\r\nThe upper is made of polyester material that is water and stain resistant\r\nShock absorbing performance midsole and outsole with excellent abrasion resistance and grip', '100'),
(12, 'Tent', 'Green', '60', 'tentgreen.jpg', 'short description for homegage', 'Taped seams - all seams on flysheet are factory taped, providing a watertight seal\r\nAluminium Poles - Lightweight and strong\r\nSewn-in Groundsheet - Prevents insects and drafts from entering your tent\r\nWaterproof - 2000mm Hydrostatic head, providing good waterproof protection from weather.\r\nTotal weight - 2kg     ', '100'),
(13, 'Rain Jacket', 'Black', '220', 'jacket.jpg', 'short description for homegage', 'Don’t miss a second of the great outdoors in this robust, waterproof jacket. Made from 2-layer GORE-TEX® fabric with storm-level construction, it’s packed with smart water stopping tricks and is highly breathable for extra comfort. That’s not all, water repellent YKK® AquaGuard® underarm zips add ventilation to help keep you cool when the hike gets really tough. As for smiling through that lashing rain, our fully adjustable hood will help keep you going whatever the weather while the dropped hem gives extra weather protection. ', '100'),
(14, 'Backpack', 'Red', '120', 'backpack.jpeg', 'short description for homegage', 'This is a sample backpack description', '100'),
(15, 'Hiking Shoes', 'Brown', '100', 'hikingShoes.jpg', 'short description for homegage', 'Strong and socklike FirmaKnit™ uppers are made from 99% recycled PET polyester and are designed for lightweight yet durable comfort right out of the box\r\nHydroWall™ complete waterproof/breathable protection keeps your feet dry when the trail ahead isn’t—and uses 75% recycled polyester to do so\r\n20% recycled rubber TerraGrip™ tread provides anti-slip grip on all kinds of terrain with 4 mm forefoot climbing lugs for going up and 4 mm heel braking lugs for coming down\r\nTerraLoft™ midsoles use 10% algae-based BLOOM™ foam to cradle your feet with a cushioning system that feels like your favorite trail-running shoes (soft, but not too soft)\r\nTrailBed™ insoles use Insite® Contoura® technology created with podiatrists to ensure support and comfort; plus, it’s made with 25% USDA-certified bio-based Susterra® compound', '100'),
(16, 'Sleeping Bag', 'Blue', '90', 'sleepingbag.png', 'short description for homegage', 'Product Size: 82.7 x 31.5 inches (210 x 80 cm) when unfolded\r\nSUPER WARM AND COZY: No more chattering under the cold, harsh winds. Stay warm and cozy even when it is 32F~ 50F, this sleeping bag is extremely comfortable and super warm\r\nSTANDS AGAINST THE ELEMENTS: Ohuhu double sleeping bag is crafted with high quality water-resistant 210T polyester, lined with TC fabric and filled with luxurious cotton that works together for cloud-like comfort\r\nDUAL USAGE: Acts as a giant sleeping bag that fits two happy campers comfortably, and detachable via zippers to become two individual sleeping bags\r\nBONUS PILLOWS: Comes with a convenient carrying bag, and two small pillows that gives your neck some good, solid support. This sleeping bag is designed for one couple or family with single young child\r\nPORTABLE AND LIGHTWEIGHT: Set up your sleeping spot in a wink wherever you go, with the lightweight fabric that packs into the carrying bag in an easy and fuss-free roll up motion', '100'),
(18, 'Quick Dry Towl', 'pink', '20', 'towel.jpg', 'short description for homegage', 'Youphoria Outdoors Microfiber Camping Towel Fast Drying Lightweight - Quick Dry Travel Towel & Sport Towel - 3 Size Options\r\n\r\nPACK FOR ANY SITUATION: Youphoria all-purpose travel towels come in three convenient sizes, in inches: 20 x 40, 28 x 56, and 32 x 72. Whether you need pack light camping towel, shower gym towel, a small pack towel, or a large beach towel, we have got your covered. Youphoria microfiber towels are a more convenient and packable option for your on-the-go needs.\r\nSUPER ABSORBENT and FAST DRYING MICROFIBER: Our quick dry travel towel can hold up to five times its weight in water, making it the most functional microfiber towel for travel packing. Our microfiber towels also dry up to ten times faster than normal, terry cloth or cotton towels. They are perfect for indoor or outdoor activities.', '200'),
(19, 'Head Flashlight', 'Black', '20', 'flashlight.jpeg', 'short description', 'This is ultra-lightweight USB rechargeable LED headlamp. It has red and white light outputs with 4 brightness levels and 2 special modes. It can deliver 550 lumens of output at 125 metres of beam distance. The built-in battery pack can be charged via micro USB ', '200');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Cart`
--
ALTER TABLE `Cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Cart`
--
ALTER TABLE `Cart`
  MODIFY `cart_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
