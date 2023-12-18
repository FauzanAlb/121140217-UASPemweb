-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 03:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE uas_pemweb;
USE uas_pemweb;
--
-- Table structure for table `tuser`
--
CREATE TABLE `tuser` (
  `id_user` int(11) AUTO_INCREMENT,
  `nama_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `telp_user` varchar(13) NOT NULL,
  `pass_user` varchar(255) NOT NULL,
  `role` varchar(20) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jk` varchar(30) DEFAULT NULL,
  `setujui` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`id_user`, `nama_user`, `email_user`, `telp_user`, `pass_user`, `role`,  `tgl_lahir`, `alamat`, `jk`, `setujui`) VALUES
(1, 'Admin Fauzan alfa abhista', 'fauzanalfa@gmail.com', '082278887751', '$2y$10$lE08UruqfUo3iZQVwEjqzu.lHC35v1hndr24pnlDkjzxco27zNnQi', 'admin', '2003-01-02', 'Way kandis','Laki-Laki', '1');

-- --------------------------------------------------------
