-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Bulan Mei 2023 pada 15.46
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `phone_number`, `email`, `address`) VALUES
(1, 'Rifki Immanuel Sinaga', '081264650702', 'rifkiimmanuel112@gmail.com', 'Cikarang'),
(28, 'rifki', '081264650702', 'rifkiimmanuel112@gmail.com', 'Jakarta'),
(29, 'rifki', '081264650702', 'rifkiimmanuel112@gmail.com', 'Medan'),
(31, 'Rifki Immanuel Sinaga', '081264650733', 'rifkiimmanuel112@gmail.com', 'Medan'),
(32, 'Rifki Immanuel Sinaga', '081264650702', 'rifkiimmanuel112@gmail.com', 'Medan'),
(33, 'Rifki Immanuel Sinaga', '081264650702', 'rifkiimmanuel112@gmail.com', 'Medan'),
(34, 'rifki', '081264659704', 'rifkiimmanuel112@gmail.com', 'Medan'),
(35, 'rifki', '081264650702', 'rifkiimmanuel112@gmail.com', 'Medan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `food`
--

CREATE TABLE `food` (
  `food_id` int(11) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `food_description` text DEFAULT NULL,
  `food_price` decimal(10,0) DEFAULT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `food`
--

INSERT INTO `food` (`food_id`, `food_name`, `food_description`, `food_price`, `category_id`) VALUES
(1, 'Rendang', 'Rendang is a meat dish originating from Minangkabau, West Sumatra, Indonesia.', '30000', 1),
(2, 'Otak-otak', 'Otak-otak is a processed product of fish meat mixed with tapioca and spices, namely: coconut milk, salt, sugar, pepper, garlic, and shallots', '35000', 1),
(3, 'Nasi Goreng', 'Nasi Goreng is basically a simple but special dish, made by stir-frying rice in cooking oil', '40000', 1),
(4, 'Ayam Betutu', 'Balinese betutu chicken is rich in various spices and herbs', '60000', 1),
(5, 'Risma (Risol Mayo)', 'Risol mayonnaise is a traditional roll-shaped snack that has various fillings, from ragout, eggs to smoked beef.', '25000', 1),
(6, 'Key lime pie', 'Key lime pie is an American dessert cake consisting of lime, egg yolk and SKM.', '70000', 2),
(7, 'Tater tots', 'Tater tots are grated potatoes formed into small cylinders and deep-fried, often served as a side dish', '50000', 2),
(8, 'Jerky', 'Jerky is lean trimmed meat cut into strips and dried (dehydrated) to prevent spoilage', '45000', 2),
(9, 'Samosas', 'a small triangular pastry filled with spiced meat or vegetables and fried in ghee or oil', '30000', 4),
(10, 'Aloo Gobi', 'Aloo gobi is a simple vegetarian dish made with potatoes, cauliflower, spices and herbs.', '50000', 4),
(11, 'Matar Paneer', 'Matar Paneer is a popular North Indian curried dish featuring green peas and panee', '43000', 4),
(12, 'Rogan Josh', 'Rogan Josh – an Indian lamb curry with a heady combination of intense spices in a creamy tomato curry sauce', '45000', 4),
(13, 'Tandoori Chicken', 'Tandoori chicken is a popular Indian dish where marinated chicken is grilled to perfection in a Tandoor, a cylindrical clay oven', '60000', 4),
(14, 'Pulihora', ' a very common and traditional rice preparation in the South Indian states of Telangana, Andhra Pradesh, Karnataka, Kerala and Tamil Nadu', '70000', 4),
(15, 'Masala Dosa', 'is a thin pancake in South Indian cuisine made from a fermented batter of ground black lentils and rice', '40000', 4),
(16, 'Gulab Jamun', 'is a sweet confectionery or dessert, originating in the Indian subcontinent and a type of mithai popular in India', '43000', 4),
(17, 'Fajitas', 'Indian Fajitas with Chicken are prepared with soft roti flatbreads and served with a cool and fresh mint & coriander mayo relish', '54000', 4),
(18, 'Byrek', 'is a popular Albanian pite/ pie made with a spinach, feta and ricotta filling that is layered with filo pastry and baked', '60000', 3),
(19, 'Escudella', 'a huge stew cooked up as a one-stop winter meal, with vegetables, legumes and a varied selection of animal parts, such as chicken feet', '60000', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `food_category`
--

CREATE TABLE `food_category` (
  `category_id` int(11) NOT NULL,
  `name_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `food_category`
--

INSERT INTO `food_category` (`category_id`, `name_category`) VALUES
(1, 'Indonesian Food'),
(2, 'American Food'),
(3, 'European Food'),
(4, 'Indian food'),
(5, 'France Food');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fullname` varchar(150) DEFAULT NULL,
  `role` enum('user','admin') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`, `email`, `fullname`, `role`) VALUES
('admin', '0192023a7bbd73250516f069df18b500', 'admin@gmail.com', 'admiiiiiin', 'admin'),
('fitra12345', 'e807f1fcf82d132f9bb018ca6738a19f', 'rifkiimmfitra112@gmail.com', 'Fitra Ramdhan Hafidz', 'user'),
('hdhudhhd', 'e807f1fcf82d132f9bb018ca6738a19f', 'rifkiimmasel112@gmail.com', 'Rifki Immanuel', 'user'),
('ifay', 'e807f1fcf82d132f9bb018ca6738a19f', 'ifay@gmail.com', 'ifay', 'user'),
('immanuel123', '25d55ad283aa400af464c76d713c07ad', 'rifkiimmanuel112@gmail.com', 'rifki immanuel sinaga', 'user'),
('mika123', '25d55ad283aa400af464c76d713c07ad', 'Mika@gmail.com', 'Mika', 'user'),
('rifkiiiiiiiiiiiiiii', '25d55ad283aa400af464c76d713c07ad', '12345@gmail.com', 'Rifki Immanuel', 'user'),
('rifkimmanuel', '25d55ad283aa400af464c76d713c07ad', 'rifki@gmail.com', 'rifkimmanuel', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(11) NOT NULL,
  `total_order` int(11) NOT NULL,
  `order_unit_price` decimal(10,2) NOT NULL,
  `food_id` int(11) NOT NULL,
  `reservation_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `total_order`, `order_unit_price`, `food_id`, `reservation_id`) VALUES
(1, 2, '60000.00', 1, 36),
(2, 6, '180000.00', 1, 33),
(31, 5, '150000.00', 1, 32),
(33, 5, '270000.00', 17, 35),
(34, 5, '150000.00', 1, 32),
(35, 5, '150000.00', 1, 35),
(37, 5, '200000.00', 15, 36),
(39, 5, '215000.00', 16, 1),
(40, 5, '300000.00', 18, 33),
(41, 5, '300000.00', 18, 32),
(42, 5, '350000.00', 14, 34),
(43, 5, '150000.00', 1, 32),
(45, 5, '10000.00', 1, 33),
(46, 5, '270000.00', 17, 35),
(47, 5, '150000.00', 1, 33),
(48, 2, '70000.00', 2, 33),
(49, 5, '200000.00', 3, 34),
(50, 5, '125000.00', 5, 33),
(51, 5, '300000.00', 4, 7),
(52, 5, '300000.00', 4, 35),
(54, 5, '125000.00', 5, 1),
(55, 5, '125000.00', 5, 7),
(56, 9, '225000.00', 5, 34),
(58, 5, '200000.00', 3, 33),
(77, 5, '225000.00', 12, 34),
(78, 5, '215000.00', 16, 33),
(79, 5, '150000.00', 1, 1),
(80, 5, '175000.00', 2, 33),
(81, 1, '35000.00', 2, 1),
(82, 5, '150000.00', 1, 33),
(83, 5, '150000.00', 1, 35);

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `total_payment_bill` decimal(10,2) NOT NULL,
  `payment_date` date NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_method`, `total_payment_bill`, `payment_date`, `order_id`) VALUES
(1, 'bankjago', '590000.00', '2023-04-25', 1),
(10, 'bankjago', '30005.00', '2023-04-19', 3),
(13, 'BNI', '60000.00', '2023-05-29', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `Name_cust` varchar(30) NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_time` time NOT NULL,
  `number_of_guests` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `table_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `Name_cust`, `reservation_date`, `reservation_time`, `number_of_guests`, `customer_id`, `table_id`) VALUES
(1, 'Rifki Immanuel Sinaga', '2023-04-19', '08:00:00', 10, 1, 1),
(7, 'Rifki', '2023-04-19', '11:00:00', 3, 1, 1),
(32, 'Rifki', '2023-05-11', '10:00:00', 2, 31, 11),
(33, 'Rifki', '2023-05-11', '10:00:00', 1, 32, 2),
(34, 'Rifki', '2023-05-10', '09:00:00', 1, 33, 12),
(35, 'Rifki', '2023-05-19', '09:00:00', 1, 34, 16),
(36, 'Rifki', '2023-05-17', '09:00:00', 1, 35, 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_restaurant`
--

CREATE TABLE `table_restaurant` (
  `table_id` int(11) NOT NULL,
  `table_number` varchar(11) NOT NULL,
  `table_capacity` int(11) NOT NULL,
  `table_availibility` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `table_restaurant`
--

INSERT INTO `table_restaurant` (`table_id`, `table_number`, `table_capacity`, `table_availibility`) VALUES
(1, '001', 2, 1),
(2, '002', 3, 1),
(3, '003', 3, 1),
(4, '004', 4, 1),
(5, '005', 2, 1),
(6, '006', 2, 1),
(7, '007', 3, 1),
(8, '008', 3, 1),
(9, '009', 3, 1),
(10, '010', 3, 1),
(11, '011', 4, 1),
(12, '012', 4, 1),
(13, '013', 4, 1),
(14, '014', 4, 1),
(15, '015', 4, 1),
(16, '016', 4, 1),
(17, '017', 5, 1),
(18, '018', 5, 1),
(19, '019', 5, 1),
(20, '020', 6, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indeks untuk tabel `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indeks untuk tabel `food_category`
--
ALTER TABLE `food_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email_unik_key` (`email`);

--
-- Indeks untuk tabel `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `food_id` (`food_id`),
  ADD KEY `fk_order_id_reservation` (`reservation_id`);

--
-- Indeks untuk tabel `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `fk_payment_order_detail` (`order_id`);

--
-- Indeks untuk tabel `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `table_id` (`table_id`);

--
-- Indeks untuk tabel `table_restaurant`
--
ALTER TABLE `table_restaurant`
  ADD PRIMARY KEY (`table_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `food_category`
--
ALTER TABLE `food_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT untuk tabel `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `table_restaurant`
--
ALTER TABLE `table_restaurant`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `food_category` (`category_id`);

--
-- Ketidakleluasaan untuk tabel `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `fk_order_id_reservation` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`reservation_id`),
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`food_id`) REFERENCES `food` (`food_id`);

--
-- Ketidakleluasaan untuk tabel `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_payment_order_detail` FOREIGN KEY (`order_id`) REFERENCES `order_detail` (`order_id`);

--
-- Ketidakleluasaan untuk tabel `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`table_id`) REFERENCES `table_restaurant` (`table_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
