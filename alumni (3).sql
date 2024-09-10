-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 04:46 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `middle` varchar(225) NOT NULL,
  `last` varchar(225) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `college` varchar(225) NOT NULL,
  `dept` varchar(225) NOT NULL,
  `dategraduated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `name`, `middle`, `last`, `gender`, `college`, `dept`, `dategraduated`) VALUES
(62, 'fasfas', 'fasfadf', 'asfasfgvd', 'Female', 'CCS', 'IT', 2023),
(65, 'adsfvasd', 'fascvas', 'asdcfvadsf', 'Male', 'CSM', 'CHEMISTRY', 2024),
(66, 'asiughasu', 'nsdfghs', 'hnsdhsh', 'Male', 'CSM', 'CHEMISTRY', 2023),
(67, 'isa', 'sa', 'pa', 'Male', 'CSM', 'CHEMISTRY', 2023),
(68, 'sdfgdsg', 'dsgdsgds', 'gsdfgsdg', 'Female', 'CCS', 'IT', 2023),
(69, 'dfxghgcfx', 'hcfxhcfh', 'jdfhchjd', 'Male', 'CCS', 'CS', 2023),
(70, 'cvmnvbm', 'mdfghjvbm', 'mbvnm', 'Male', 'CCS', 'CS', 2023),
(71, 'fahjsvcfbasdf', 'fasfa', 'sfasfasf', 'Male', 'ENGINEERING', 'CHEMICAL ENGINEERING', 2023),
(73, 'fasfa', 'fasfasf', 'asfasf', 'Female', 'ENGINEERING', 'ELECTRICAL ENGINEERING', 2023),
(74, 'fasfbas', 'fasdfa', 'fasfasdf', 'Male', 'CCS', 'CS', 2024),
(75, 'fasdf', 'asdfasdf', 'asfas', 'Male', 'CCS', 'CS', 2024),
(76, 'fasdf', 'asfasdf', 'asdfas', 'Male', 'CCS', 'IT', 2024),
(77, 'fasf', 'asfafas', 'fasfsadf', 'Male', 'CCS', 'CS', 2024),
(78, 'james', 'leb', 'ron', 'Male', 'CCS', 'CS', 2023),
(79, 'al', 'za', 'her', 'Male', 'CCS', 'IT', 2028);

-- --------------------------------------------------------

--
-- Table structure for table `elementary`
--

CREATE TABLE `elementary` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `middle` varchar(225) NOT NULL,
  `last` varchar(225) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `dategraduated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `elementary`
--

INSERT INTO `elementary` (`id`, `name`, `middle`, `last`, `gender`, `dategraduated`) VALUES
(65, '  khenidy  ', ' abdulla ', '  bari  ', 'Male', 2001),
(66, '   sarhan   ', '   matias  ', ' Asakil ', 'Female', 2011),
(67, '  vryll  ', ' cubers ', '  atilano  ', 'Male', 2011),
(68, ' puta  ', ' ka  ', ' maam marj ', 'Female', 2023),
(69, ' alzaher ', ' abdulla ', ' bari ', 'Female', 2023),
(70, ' alzaher ', ' etts ', '  bari  ', 'Male', 2001),
(71, 'Harra', 'Hilario', 'Guanzon', 'Female', 2015),
(72, 'bonbon', 'joji', 'atilano', 'Male', 2015),
(73, 'sadf', 'fasdfas', 'faasdfas', 'Female', 2015),
(74, 'james', 'leb', 'ron', 'Male', 2001),
(75, 'al', 'za', 'her', 'Male', 2001),
(76, 'ja', 'mo', 'rant', 'Male', 2013);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(225) NOT NULL,
  `caption` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `caption`, `image`) VALUES
(54, 'testing 1', '200w.webp'),
(55, 'testing 2', '909871.jpg'),
(56, 'testing 3', '180346.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `highschool`
--

CREATE TABLE `highschool` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `middle` varchar(225) NOT NULL,
  `last` varchar(225) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `dategraduated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `highschool`
--

INSERT INTO `highschool` (`id`, `name`, `middle`, `last`, `gender`, `dategraduated`) VALUES
(62, '  khenidy  ', ' abdulla ', ' bari ', 'Male', 2023),
(64, ' joji ', ' middle ', ' joji ', 'Female', 2023),
(66, 'Harra', 'Hilario', 'Guanzon', 'Female', 2018),
(67, 'sarhan', 'matias', ' asalkil ', 'Male', 2018),
(68, 'fawdf', 'asfasfas', 'dfasfa', 'Female', 2023),
(69, 'james', 'leb', 'ron', 'Male', 2014),
(70, 'al', 'za', 'her', 'Male', 2022);

-- --------------------------------------------------------

--
-- Table structure for table `officers`
--

CREATE TABLE `officers` (
  `id` int(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `img` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `officers`
--

INSERT INTO `officers` (`id`, `name`, `img`) VALUES
(15, 'reng', 'reng.webp'),
(16, 'go', 'go.webp'),
(17, 'ku', 'ku.webp'),
(18, 'tanjiro', 'tanjiro.webp');

-- --------------------------------------------------------

--
-- Table structure for table `seniorhighschool`
--

CREATE TABLE `seniorhighschool` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `middle` varchar(225) NOT NULL,
  `last` varchar(225) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `strand` varchar(225) NOT NULL,
  `dategraduated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seniorhighschool`
--

INSERT INTO `seniorhighschool` (`id`, `name`, `middle`, `last`, `gender`, `strand`, `dategraduated`) VALUES
(62, '  joji  ', '  joji  ', '  santa maria  ', 'Female', 'GAS', 2023),
(63, '      another      ', '    mweh    ', '      sta maria      ', 'Male', 'STEM', 2023),
(64, 'Harra', 'Hilario', 'Guanzon', 'Female', 'HUMSS', 2021),
(66, 'fasdfa', 'vcxzvwtr', 'qwteqr', 'Female', 'ABM', 2023),
(67, 'ygead', 'q34gf', 'eqhgbredrw', 'Male', 'STEM', 2023),
(70, 'afahsvca', 'afsdfcsa', 'asdfcvasz', 'Male', 'STEM', 2023),
(71, 'wcfawe', 'asdveasrvew', 'agqrgvawef', 'Female', 'GAS', 2021),
(72, 'fasf', 'asfasf', 'adfafa', 'Male', 'ABM', 2021),
(73, 'fas', 'faasf', 'fasfda', 'Female', 'STEM', 2021),
(74, 'faf', 'afasd', 'fasdfas', 'Male', 'STEM', 2021),
(75, 'james', 'leb', 'ron', 'Male', 'STEM', 2018),
(76, 'al', 'za', 'her', 'Male', 'STEM', 2024);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `middle` varchar(225) NOT NULL,
  `last` varchar(225) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `verify_token` varchar(225) NOT NULL,
  `role` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `name`, `middle`, `last`, `username`, `email`, `password`, `verify_token`, `role`) VALUES
(8, '', '', '', 'super', 'superadmin@gmail.com', '123', '', 'superadmin'),
(30, ' khenidy ', 'abdulla', 'bari', 'Khenidy Bari', 'barijohnkhenidy@gmail.com', '123', '5349e0a1a36cf280b5d751ffe10f1f2a', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `wmsucolleges`
--

CREATE TABLE `wmsucolleges` (
  `id` int(10) NOT NULL,
  `college` varchar(225) NOT NULL,
  `dept` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wmsucolleges`
--

INSERT INTO `wmsucolleges` (`id`, `college`, `dept`) VALUES
(1, 'CCS', 'IT'),
(2, 'CCS', 'CS'),
(3, 'CSM', 'BIOLOGY'),
(4, 'CSM', 'CHEMISTRY'),
(5, 'CSM', 'PHYSICS'),
(6, 'ENGINEERING', 'CIVIL ENGINEERING'),
(7, 'ENGINEERING', 'CHEMICAL ENGINEERING'),
(8, 'ENGINEERING', 'ELECTRICAL ENGINEERING');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elementary`
--
ALTER TABLE `elementary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `highschool`
--
ALTER TABLE `highschool`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officers`
--
ALTER TABLE `officers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seniorhighschool`
--
ALTER TABLE `seniorhighschool`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `wmsucolleges`
--
ALTER TABLE `wmsucolleges`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `elementary`
--
ALTER TABLE `elementary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `highschool`
--
ALTER TABLE `highschool`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `officers`
--
ALTER TABLE `officers`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `seniorhighschool`
--
ALTER TABLE `seniorhighschool`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `wmsucolleges`
--
ALTER TABLE `wmsucolleges`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
