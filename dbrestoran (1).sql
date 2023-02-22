-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 02:23 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbrestoran`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbmenu`
--

CREATE TABLE `tbmenu` (
  `idmenu` int(11) NOT NULL,
  `namamenu` varchar(50) NOT NULL,
  `jenismenu` varchar(25) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambarmenu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbmenu`
--

INSERT INTO `tbmenu` (`idmenu`, `namamenu`, `jenismenu`, `harga`, `stok`, `gambarmenu`) VALUES
(13, 'Ikan Bakar', 'Breakfast', 500000, 6, 'Nila Bakar Pedas.jfif'),
(14, 'Udang Pedas', 'Seafood', 500000, 10, 'udang pedas.jfif'),
(21, 'Risoles', 'Makanan Ringan', 2000, 20, 'Risoles.jfif'),
(22, 'Tahu Crispy', 'Makanan Ringan', 15000, 15, 'Tahu Crispy.jfif'),
(23, 'Oreo Brownie Trifle', 'Dinner', 35000, 10, 'Oreo Brownie Trifle.jfif'),
(24, 'Unicorn Hot Chocolate', 'Drink', 40000, 20, 'Unicorn Hot Chocolate.jfif'),
(25, 'Watermelon Lemonade', 'Drink', 35000, 12, 'Watermelon Lemonade.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `tbpegawai`
--

CREATE TABLE `tbpegawai` (
  `idpegawai` int(11) NOT NULL,
  `namapegawai` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `notelp` varchar(13) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbpegawai`
--

INSERT INTO `tbpegawai` (`idpegawai`, `namapegawai`, `username`, `password`, `alamat`, `notelp`, `iduser`) VALUES
(5, 'kiya', 'kiya12@gmail.com', 'kiya123', 'Indonesia', '0838128218', 2),
(6, 'Rani', 'rani31@gmail.com', 'rani123', 'Cianjur', '0857332129', 3),
(7, 'Cipi', 'cipi12@gmail.com', 'cipi123', 'Cianjur', '0928983', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbtransaksi`
--

CREATE TABLE `tbtransaksi` (
  `idtransaksi` int(11) NOT NULL,
  `tgltransaksi` date NOT NULL,
  `totalharga` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tmdetailtrsk`
--

CREATE TABLE `tmdetailtrsk` (
  `id` int(11) NOT NULL,
  `idtransaksi` int(11) NOT NULL,
  `idmenu` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tmdetailtrsk`
--

INSERT INTO `tmdetailtrsk` (`id`, `idtransaksi`, `idmenu`, `qty`, `harga`) VALUES
(1, 21727, 13, 4, 100000);

--
-- Triggers `tmdetailtrsk`
--
DELIMITER $$
CREATE TRIGGER `trstok` AFTER INSERT ON `tmdetailtrsk` FOR EACH ROW UPDATE tbmenu SET stok=stok-new.qty where idmenu=new.idmenu
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tuser`
--

CREATE TABLE `tuser` (
  `iduser` int(11) NOT NULL,
  `hakakses` enum('Kasir','Manajer','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`iduser`, `hakakses`) VALUES
(1, 'Kasir'),
(2, 'Manajer'),
(3, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbmenu`
--
ALTER TABLE `tbmenu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indexes for table `tbpegawai`
--
ALTER TABLE `tbpegawai`
  ADD PRIMARY KEY (`idpegawai`);

--
-- Indexes for table `tbtransaksi`
--
ALTER TABLE `tbtransaksi`
  ADD PRIMARY KEY (`idtransaksi`);

--
-- Indexes for table `tmdetailtrsk`
--
ALTER TABLE `tmdetailtrsk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbmenu`
--
ALTER TABLE `tbmenu`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbpegawai`
--
ALTER TABLE `tbpegawai`
  MODIFY `idpegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tmdetailtrsk`
--
ALTER TABLE `tmdetailtrsk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tuser`
--
ALTER TABLE `tuser`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
