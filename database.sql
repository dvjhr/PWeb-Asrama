DROP DATABASE IF EXISTS `pweb_db`;
CREATE DATABASE `pweb_db`;
USE `pweb_db`;

--
-- Database: `pweb_db`
--

CREATE TABLE `jenis_kamar` (
  `id_jenis_kamar` int(4) AUTO_INCREMENT NOT NULL, 
  `keterangan` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id_jenis_kamar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `jenis_kamar` (`keterangan`) VALUES 
("2 Tempat tidur ukuran 3x3m"),
("2 Tempat tidur ukuran 3x3,5m"),
("4 Tempat tidur ukuran 6x3,5m"),
("4 Tempat tidur ukuran 6x4m");

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(4) AUTO_INCREMENT NOT NULL, 
  `jenis` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_fasilitas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `fasilitas` (`jenis`) VALUES 
("Kamar mandi luar (tiap lantai)"),
("Kamar mandi dalam");

CREATE TABLE `gedung` (
  `id_gedung` int(4) AUTO_INCREMENT NOT NULL, 
  `nama` varchar(20) DEFAULT NULL,
  `penghuni` varchar(12) DEFAULT NULL,
  `lantai` int(2) DEFAULT NULL,
  `fasilitas` int(2) NOT NULL,
  PRIMARY KEY (`id_gedung`),
  CONSTRAINT `FK_gedung_fasilitas` FOREIGN KEY (`fasilitas`) REFERENCES `fasilitas` (`id_fasilitas`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `gedung` (`nama`, `penghuni`, `lantai`, `fasilitas`) VALUES 
("A", "Mahasiswi", "2", "2"),
("B", "Mahasiswi", "3", "1"),
("C", "Mahasiswi", "4", "1"),
("D", "Mahasiswa", "3", "2"),
("E", "Mahasiswa", "3", "2"),
("G", "Mahasiswa", "3", "1"),
("H", "Mahasiswa", "3", "1"),
("I", "Mahasiswi", "3", "1"),
("J", "Mahasiswi", "3", "1"),
("K", "Mahasiswi", "3", "1");

CREATE TABLE `kamar` (
  `id_kamar` int(4) AUTO_INCREMENT NOT NULL, 
  `id_gedung` int(4) NOT NULL, 
  `id_jenis_kamar` int(4) NOT NULL, 
  `nama` varchar(20) DEFAULT NULL,
  `kapasitas` int(3) DEFAULT NULL,
  `harga` int(7) DEFAULT NULL,
  PRIMARY KEY (`id_kamar`),
  CONSTRAINT `FK_kamar_gedung` FOREIGN KEY (`id_gedung`) REFERENCES `gedung` (`id_gedung`) ON DELETE CASCADE,
  CONSTRAINT `FK_kamar_jenis` FOREIGN KEY (`id_jenis_kamar`) REFERENCES `jenis_kamar` (`id_jenis_kamar`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `kamar` (`id_gedung`, `id_jenis_kamar`, `nama`, `kapasitas`, `harga`) VALUES 
("1", "4", "A-101", "4", 500000),
("1", "4", "A-102", "4", 500000),
("1", "4", "A-103", "4", 500000),
("1", "4", "A-104", "4", 500000),
("1", "4", "A-205", "4", 500000),
("1", "2", "A-201", "2", 500000),
("1", "2", "A-202", "2", 500000),
("1", "2", "A-203", "2", 500000),
("1", "2", "A-204", "2", 500000),
("1", "2", "A-205", "2", 500000),
("2", "3", "B-101", "4", 500000),
("2", "3", "B-102", "4", 500000),
("2", "3", "B-103", "4", 500000),
("2", "3", "B-104", "4", 500000),
("2", "3", "B-105", "4", 500000);

CREATE TABLE `user` (
 `id_user` int(3) NOT NULL AUTO_INCREMENT,
 `nrp` varchar(14) NOT NULL,
 `email` varchar(10) DEFAULT NULL,
 `sandi` varchar(255) DEFAULT NULL,
 `nama` varchar(36) DEFAULT NULL,
 `departemen` varchar(16) DEFAULT NULL,
 `no_telp` varchar(13) DEFAULT NULL,
 `jkelamin` varchar(10) DEFAULT NULL,
 `id_kamar_tinggal` int(3) DEFAULT NULL,
 PRIMARY KEY (`id_user`),
 CONSTRAINT `FK_user_kamar` FOREIGN KEY (`id_kamar_tinggal`) REFERENCES `kamar` (`id_kamar`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `gedung`
ALTER COLUMN `jkamar1` VARCHAR(32),
ALTER COLUMN `jkamar2` VARCHAR(32),
ALTER COLUMN `jkamar3` VARCHAR(32),
KEY (`jkamar1`, `jkamar2`, `jkamar3`) REFERENCES `jenis_kamar` (`id_jenis_kamar`) ON DELETE CASCADE;
