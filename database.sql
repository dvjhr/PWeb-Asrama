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
  `kapasitas` int(3) NOT NULL,
  `fasilitas` int(2) NOT NULL,
  PRIMARY KEY (`id_gedung`),
  CONSTRAINT `FK_gedung_fasilitas` FOREIGN KEY (`fasilitas`) REFERENCES `fasilitas` (`id_fasilitas`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `gedung` (`nama`, `penghuni`, `lantai`, `kapasitas`, `fasilitas`) VALUES 
("A", "Perempuan", 2, 48, 2),
("B", "Perempuan", 3, 36, 1),
("C", "Perempuan", 4, 40, 1),
("D", "Laki-laki", 3, 36, 2),
("E", "Laki-laki", 3, 36, 2),
("G", "Laki-laki", 3, 36, 1),
("H", "Laki-laki", 3, 36, 1),
("I", "Perempuan", 3, 36, 1),
("J", "Perempuan", 3, 36, 1),
("K", "Perempuan", 3, 36, 1);

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
(1, 4, "A-101", 4, 500000),
(1, 4, "A-102", 4, 500000),
(1, 4, "A-103", 4, 500000),
(1, 4, "A-104", 4, 500000),
(1, 4, "A-205", 4, 500000),
(1, 2, "A-201", 2, 500000),
(1, 2, "A-202", 2, 500000),
(1, 2, "A-203", 2, 500000),
(1, 2, "A-204", 2, 500000),
(1, 2, "A-205", 2, 500000),
(2, 3, "B-101", 4, 500000),
(2, 3, "B-102", 4, 500000),
(2, 3, "B-103", 4, 500000),
(2, 3, "B-104", 4, 500000),
(2, 3, "B-105", 4, 500000);
(3, 2, "C-101", 2, 500000),
(3, 2, "C-102", 2, 500000),
(3, 2, "C-103", 2, 500000),
(3, 2, "C-104", 2, 500000),
(3, 2, "C-105", 2, 500000),
(3, 3, "C-201", 4, 375000),
(3, 3, "C-202", 4, 375000),
(3, 3, "C-203", 4, 375000),
(3, 3, "C-204", 4, 375000),
(3, 3, "C-205", 4, 375000),
(4, 1, "D-101", 2, 550000),
(4, 1, "D-102", 2, 550000),
(4, 1, "D-103", 2, 550000),
(4, 1, "D-104", 2, 550000),
(4, 1, "D-105", 2, 550000),
(4, 4, "D-201", 4, 375000),
(4, 4, "D-202", 4, 375000),
(4, 4, "D-203", 4, 375000),
(4, 4, "D-204", 4, 375000),
(4, 4, "D-205", 4, 375000),
(5, 2, "E-101", 2, 475000),
(5, 2, "E-102", 2, 475000),
(5, 2, "E-103", 2, 475000),
(5, 2, "E-104", 2, 475000),
(5, 2, "E-105", 2, 475000),
(5, 3, "E-201", 4, 355000),
(5, 3, "E-202", 4, 355000),
(5, 3, "E-203", 4, 355000),
(5, 3, "E-204", 4, 355000),
(5, 3, "E-205", 4, 355000),
(6, 1, "G-101", 2, 650000),
(6, 1, "G-102", 2, 650000),
(6, 1, "G-103", 2, 650000),
(6, 1, "G-104", 2, 650000),
(6, 1, "G-105", 2, 650000),
(6, 4, "G-201", 4, 575000),
(6, 4, "G-202", 4, 575000),
(6, 4, "G-203", 4, 575000),
(6, 4, "G-204", 4, 575000),
(6, 4, "G-205", 4, 575000),
(7, 2, "H-101", 2, 750000),
(7, 2, "H-102", 2, 750000),
(7, 2, "H-103", 2, 750000),
(7, 2, "H-104", 2, 750000),
(7, 2, "H-105", 2, 750000),
(7, 4, "H-201", 4, 555000),
(7, 4, "H-202", 4, 555000),
(7, 4, "H-203", 4, 555000),
(7, 4, "H-204", 4, 555000),
(7, 4, "H-205", 4, 555000),
(8, 1, "I-101", 2, 655000),
(8, 1, "I-102", 2, 655000),
(8, 1, "I-103", 2, 655000),
(8, 1, "I-104", 2, 655000),
(8, 1, "I-105", 2, 655000),
(8, 3, "I-201", 4, 555000),
(8, 3, "I-202", 4, 555000),
(8, 3, "I-203", 4, 555000),
(8, 3, "I-204", 4, 555000),
(8, 3, "I-205", 4, 555000),
(9, 2, "J-101", 2, 650000),
(9, 2, "J-102", 2, 650000),
(9, 2, "J-103", 2, 650000),
(9, 2, "J-104", 2, 650000),
(9, 2, "J-105", 2, 650000),
(9, 4, "J-201", 4, 545000),
(9, 4, "J-202", 4, 545000),
(9, 4, "J-203", 4, 545000),
(9, 4, "J-204", 4, 545000),
(9, 4, "J-205", 4, 545000),
(10, 2, "K-101", 2, 755000),
(10, 2, "K-102", 2, 755000),
(10, 2, "K-103", 2, 755000),
(10, 2, "K-104", 2, 755000),
(10, 2, "K-105", 2, 755000),
(10, 3, "K-201", 4, 645000),
(10, 3, "K-202", 4, 645000),
(10, 3, "K-203", 4, 645000),
(10, 3, "K-204", 4, 645000),
(10, 3, "K-205", 4, 645000);

update gedung set harga_termurah = (select min(kamar.harga) from kamar left join gedung on kamar.id_gedung=gedung.id_gedung where kamar.id_gedung = 1) where id_gedung = 1;
update gedung set harga_termurah = (select min(kamar.harga) from kamar left join gedung on kamar.id_gedung=gedung.id_gedung where kamar.id_gedung = 2) where id_gedung = 2;
update gedung set harga_termurah = (select min(kamar.harga) from kamar left join gedung on kamar.id_gedung=gedung.id_gedung where kamar.id_gedung = 3) where id_gedung = 3;
update gedung set harga_termurah = (select min(kamar.harga) from kamar left join gedung on kamar.id_gedung=gedung.id_gedung where kamar.id_gedung = 4) where id_gedung = 4;
update gedung set harga_termurah = (select min(kamar.harga) from kamar left join gedung on kamar.id_gedung=gedung.id_gedung where kamar.id_gedung = 5) where id_gedung = 5;
update gedung set harga_termurah = (select min(kamar.harga) from kamar left join gedung on kamar.id_gedung=gedung.id_gedung where kamar.id_gedung = 6) where id_gedung = 6;
update gedung set harga_termurah = (select min(kamar.harga) from kamar left join gedung on kamar.id_gedung=gedung.id_gedung where kamar.id_gedung = 7) where id_gedung = 7;
update gedung set harga_termurah = (select min(kamar.harga) from kamar left join gedung on kamar.id_gedung=gedung.id_gedung where kamar.id_gedung = 8) where id_gedung = 8;
update gedung set harga_termurah = (select min(kamar.harga) from kamar left join gedung on kamar.id_gedung=gedung.id_gedung where kamar.id_gedung = 9) where id_gedung = 9;
update gedung set harga_termurah = (select min(kamar.harga) from kamar left join gedung on kamar.id_gedung=gedung.id_gedung where kamar.id_gedung = 10) where id_gedung = 10;

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

UPDATE user SET  user.id_kamar_tinggal = &id_kamar where user.id_user = $id_user;

ALTER TABLE `gedung`
ALTER COLUMN `jkamar1` VARCHAR(32),
ALTER COLUMN `jkamar2` VARCHAR(32),
ALTER COLUMN `jkamar3` VARCHAR(32),
KEY (`jkamar1`, `jkamar2`, `jkamar3`) REFERENCES `jenis_kamar` (`id_jenis_kamar`) ON DELETE CASCADE;

CREATE TABLE `transaksi` (
  `id_transaksi` int(4) AUTO_INCREMENT NOT NULL,
  `nrp` varchar(14) DEFAULT NULL,
  `id_kamar` int(4) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`),
  CONSTRAINT `FK_transaksi_user` FOREIGN KEY (`nrp`) REFERENCES `user` (`nrp`) ON DELETE CASCADE,
  CONSTRAINT `FK_transaksi_kamar` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
