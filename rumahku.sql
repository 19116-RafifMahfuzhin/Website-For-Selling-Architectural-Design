-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 07:09 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahku`
--

-- --------------------------------------------------------

--
-- Table structure for table `arsitek`
--

CREATE TABLE `arsitek` (
  `email` varchar(30) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `tptlahir` varchar(30) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `ktp` varchar(100) DEFAULT NULL,
  `portofolio` varchar(100) DEFAULT NULL,
  `deskrip` varchar(1000) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arsitek`
--

INSERT INTO `arsitek` (`email`, `nama`, `password`, `tgllahir`, `tptlahir`, `telepon`, `alamat`, `ktp`, `portofolio`, `deskrip`, `logo`) VALUES
('arsitek1@gmail.com', 'Astabumi Manungga;', 'arsitek1', '2000-06-05', 'Karawang', '823431287', 'Karawang', '', '', 'CV Astabumi Manunggal Prakarsa menerima jasa desain dan bangun untuk arsitektur dan interior di seluruh kota di indonesia. Pengalaman mendesain lebih dari 8 Tahun dan berpengalaman membangun bangunan juga memproduksi interior di dalamnya. Studio kami memiliki motto "Spirit of giving the best your dream".', 'lklkl.png'),
('arsitek2@gmail.com', 'Karya Tangan Nusantara', 'arsitek2', '2000-06-02', 'Karawang Barat', '821312324', 'Karawang Kota', '', '', 'CV Karya Tangan Nusantara menerima jasa desain dan bangun untuk arsitektur dan interior di seluruh kota di indonesia. Pengalaman mendesain lebih dari 8 Tahun dan berpengalaman membangun bangunan juga memproduksi interior di dalamnya. Studio kami memiliki motto "Give The Best For You".', ''),
('arsitek3@gmail.com', 'Bulan Bintang', 'arsitek3', '2000-06-03', 'Jakarta', '821312325', 'Jakarta Utara', '', '', 'CV Bulan Bintang menerima jasa desain dan bangun untuk arsitektur dan interior di seluruh kota di indonesia. Pengalaman mendesain lebih dari 8 Tahun dan berpengalaman membangun bangunan juga memproduksi interior di dalamnya. Studio kami memiliki motto "All You Want Can Do".', '');

-- --------------------------------------------------------

--
-- Table structure for table `konstraktor`
--

CREATE TABLE `konstraktor` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `ktp` varchar(100) NOT NULL,
  `portofolio` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konstraktor`
--

INSERT INTO `konstraktor` (`email`, `password`, `nama`, `telepon`, `alamat`, `ktp`, `portofolio`, `deskripsi`, `logo`) VALUES
('kons1@gmail.com', 'kons1', 'Astabumi Studio', '0821312326', 'GPW blok pakis 2, Sukoharjo, Ngaglik, Sleman, Yogyakarta', '', '', 'Astabumi studio menerima jasa desain dan bangun untuk arsitektur dan interior di seluruh kota di Indonesia. Pengalaman mendesain lebih dari 5 tahun dan berpengalaman membangun dengan tukang-tukang berpengalaman di bidangnya. Di samping membangun bangunan, juga memproduksi interior di dalamnya. Studio kami memiliki motto : "Spirit of giving the best your dream" , selalu berusaha memberikan kualitas terbaik untuk kepuasan klien. Studio kami telah terpecaya dan terdaftar resmi sebagai konsultan di bidang arsitektur dan interior', 'astabumi.png'),
('kons2@gmail.com', 'kons2', 'EVONIL Architecture', '0823974321', 'Studio = Pluit, Jakarta - Kantor Pusat = Wisma GKBI Lantai 7 Unit R-703, JL. Jend Sudirman, 28, Jakarta, 10210, RT.14/RW.1, Bendungan Hilir, Jakarta Pusat', '', '', 'We are global award winning architecture and interior design, based in Jakarta, Indonesia. Our core team led by young, fresh, and talented Willy Sulwyn S.Ars, as head designer,   We specialize in retail space, commercial space, luxurious home, office space, and landscape design.', 'evonil.jpg'),
('kons3@gmail.com', 'kons3', 'Interra', '0821342312', 'Jl. Bintaro Raya No.8A, RT.1/RW.10, Kby. Lama Utar', '', '', 'We’re a Design-Build construction company specialized in office, retail. We focused on getting the job done. And finding the best way to do it.  We provide an all in one integrated design-build process where we work together in unison creating a budget, then designing to that budget, updating the budget as the design is developed, and then reporting financial changes throughout the process.  The main purpose of our process is to help streamline the design-build process. To give the client financial visibility into their projects to ultimately save our clients time, surprises and money.', 'interra.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgllahir` date NOT NULL,
  `tptlahir` varchar(30) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `ktp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`email`, `password`, `nama`, `tgllahir`, `tptlahir`, `telepon`, `alamat`, `ktp`) VALUES
('februari@gmail.com', '12345', 'februari', '2001-03-02', 'Jakarta', '08231231', 'Jakarta Barat', 'ktpfebruari.png'),
('januari@gmail.com', '12345', 'januari', '2001-03-04', 'Jakarta', '0823123141', 'Jakarta Barat', 'ktpjanuari.png'),
('pelanggan1@gmail.com', 'pelanggan1', 'Joko Prabowo', '2000-06-01', 'Jakarta', '821312323', 'Jakarta Barat', '52409.jpg'),
('pelanggan2@gmail.com', 'pelanggan2', 'Akbar Prakas', '2001-03-05', 'Karawang', '84314131', 'Karawang Barat', 'architect.png'),
('rafif@gmail.com', '12345', 'rafif mahfuzhin', '2001-03-04', 'Ngawi', '08138043468', 'Jakarta Barat', 'ktprafif.png'),
('testing@gmail.com', '12345', 'sadas', '2020-04-02', 'skdokaw', '0293019', 'oasodsa', 'testing1.png');

-- --------------------------------------------------------

--
-- Table structure for table `rumah`
--

CREATE TABLE `rumah` (
  `idrumah` int(30) NOT NULL,
  `luas` int(20) NOT NULL,
  `kamar` int(20) NOT NULL,
  `kmandi` int(20) NOT NULL,
  `dapur` int(20) NOT NULL,
  `rkeluarga` int(20) NOT NULL,
  `garasi` int(20) NOT NULL,
  `rtamu` int(20) NOT NULL,
  `kolam` int(20) NOT NULL,
  `gudang` int(20) NOT NULL,
  `perpus` int(20) NOT NULL,
  `harga` int(20) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rumah`
--

INSERT INTO `rumah` (`idrumah`, `luas`, `kamar`, `kmandi`, `dapur`, `rkeluarga`, `garasi`, `rtamu`, `kolam`, `gudang`, `perpus`, `harga`, `gambar`, `email`) VALUES
(10000001, 1400, 4, 2, 1, 1, 1, 1, 1, 1, 1, 61000000, 'rumah1.jpg', 'arsitek1@gmail.com'),
(10000002, 1200, 2, 1, 1, 1, 1, 1, 1, 1, 1, 70000000, 'rumah2.jpg', 'arsitek2@gmail.com'),
(10000007, 100, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1000000, 'rumah6.jpg', 'arsitek3@gmail.com'),
(10000008, 1300, 4, 2, 1, 1, 1, 1, 1, 1, 1, 900000000, 'rumahmalam.jpg', 'arsitek1@gmail.com'),
(10000009, 100, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1000000000, 'rumah terang.jpg', 'arsitek1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idtransaksi` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `namatoko` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `rekening` varchar(50) NOT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idtransaksi`, `email`, `namatoko`, `bank`, `rekening`, `harga`) VALUES
(12, 'pelanggan1@gmail.com', 'Karya Tangan Nusantara', 'bri', '1111-1111-1111', 70000000),
(13, 'pelanggan1@gmail.com', 'Karya Tangan Nusantara', 'bca', '1111-1111-1111', 70000000),
(14, 'pelanggan1@gmail.com', 'Astabumi Manungga;', 'BRI', '1111-1111-1111', 61000000),
(16, 'pelanggan1@gmail.com', 'Astabumi Manungga;', 'BNI', '1111-1111-1111', 61000000),
(17, 'rafif@gmail.com', 'Astabumi Manungga;', 'BRI', '1111-1111-1111', 61000000),
(18, 'pelanggan1@gmail.com', 'Karya Tangan Nusantara', 'BCA', '1111-1111-1111', 70000000),
(19, 'februari@gmail.com', 'Astabumi Manungga;', 'BRI', '1111-1111-1111', 61000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsitek`
--
ALTER TABLE `arsitek`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `konstraktor`
--
ALTER TABLE `konstraktor`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `rumah`
--
ALTER TABLE `rumah`
  ADD PRIMARY KEY (`idrumah`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idtransaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rumah`
--
ALTER TABLE `rumah`
  MODIFY `idrumah` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000010;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idtransaksi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
