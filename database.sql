-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2022 at 09:27 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `berobat`
--

CREATE TABLE `berobat` (
  `notransaksi` varchar(11) NOT NULL,
  `pasienid` varchar(50) NOT NULL,
  `tglberobat` date NOT NULL,
  `dokterid` varchar(50) NOT NULL,
  `keluhan` varchar(100) NOT NULL,
  `biayaadm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berobat`
--

INSERT INTO `berobat` (`notransaksi`, `pasienid`, `tglberobat`, `dokterid`, `keluhan`, `biayaadm`) VALUES
('TR001', 'PS003', '2019-02-02', 'ID002', 'kanker', '300000'),
('TR002', 'PS003', '2019-01-01', 'ID003', 'kanker', '300000');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `dokterid` varchar(11) NOT NULL,
  `nmdokter` varchar(50) NOT NULL,
  `poliid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`dokterid`, `nmdokter`, `poliid`) VALUES
('ID002', 'Dr. Ratna', 'ID002'),
('ID003', 'Dr. Rudy', 'ID003'),
('ID004', 'hay', 'POLIID'),
('ID005', 'Wiwik', 'ID003');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `level` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user`, `pass`, `level`) VALUES
(1, 'admin', 'admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `pasienid` varchar(11) NOT NULL,
  `nmpasien` varchar(50) NOT NULL,
  `tgllahir` date NOT NULL,
  `jenkel` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`pasienid`, `nmpasien`, `tgllahir`, `jenkel`, `alamat`) VALUES
('PS003', 'Indah Susanti', '2003-08-16', 'Perempuan', 'Sepatan'),
('PS004', 'Kurniawan', '2006-08-31', 'Laki-Laki', 'Cimone'),
('PS005', 'Test', '2022-07-20', 'Laki-Laki', 'LP3I');

-- --------------------------------------------------------

--
-- Table structure for table `poliid`
--

CREATE TABLE `poliid` (
  `poliid` varchar(11) NOT NULL,
  `nmpoli` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poliid`
--

INSERT INTO `poliid` (`poliid`, `nmpoli`) VALUES
('ID003', 'Umum'),
('ID004', 'Gigi'),
('ID005', 'THT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berobat`
--
ALTER TABLE `berobat`
  ADD PRIMARY KEY (`notransaksi`),
  ADD KEY `keluhan` (`keluhan`),
  ADD KEY `pasienid` (`pasienid`),
  ADD KEY `dokterid` (`dokterid`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`dokterid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`pasienid`);

--
-- Indexes for table `poliid`
--
ALTER TABLE `poliid`
  ADD PRIMARY KEY (`poliid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
