/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP TABLE IF EXISTS `guru`;
CREATE TABLE `guru` (
  `id_guru` int NOT NULL AUTO_INCREMENT,
  `nip` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `id_pelajaran` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  PRIMARY KEY (`id_guru`),
  KEY `fk_mapel` (`id_pelajaran`),
  CONSTRAINT `fk_mapel` FOREIGN KEY (`id_pelajaran`) REFERENCES `mata_pelajaran` (`id_pelajaran`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `jadwal`;
CREATE TABLE `jadwal` (
  `id_jadwal` int NOT NULL AUTO_INCREMENT,
  `hari` varchar(50) NOT NULL,
  `jam` int NOT NULL,
  `id_kelas` int NOT NULL,
  `id_pelajaran` int NOT NULL,
  `id_guru` int NOT NULL,
  PRIMARY KEY (`id_jadwal`),
  KEY `fk_kelas` (`id_kelas`) USING BTREE,
  KEY `id_pelajaran` (`id_pelajaran`),
  KEY `id_guru` (`id_guru`),
  CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`id_pelajaran`) REFERENCES `mata_pelajaran` (`id_pelajaran`),
  CONSTRAINT `jadwal_ibfk_3` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  CONSTRAINT `jadwal_ibfk_4` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `kelas`;
CREATE TABLE `kelas` (
  `id_kelas` int NOT NULL AUTO_INCREMENT,
  `kode_kelas` varchar(20) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kelas`),
  UNIQUE KEY `kode_kelas` (`kode_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `mata_pelajaran`;
CREATE TABLE `mata_pelajaran` (
  `id_pelajaran` int NOT NULL AUTO_INCREMENT,
  `nama_pelajaran` varchar(100) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  PRIMARY KEY (`id_pelajaran`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa` (
  `id_siswa` int NOT NULL AUTO_INCREMENT,
  `id` int NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `id_kelas` int NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  PRIMARY KEY (`id_siswa`),
  KEY `fk_kelas` (`id_kelas`),
  KEY `fk_id` (`id`),
  CONSTRAINT `fk_id` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  CONSTRAINT `fk_kelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` enum('admin','guru','siswa') NOT NULL,
  `blokir` enum('N','Y') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;





INSERT INTO `kelas` (`id_kelas`, `kode_kelas`, `nama_kelas`) VALUES
(1, '12', 'IPA');
INSERT INTO `kelas` (`id_kelas`, `kode_kelas`, `nama_kelas`) VALUES
(2, '13', 'IPS');


INSERT INTO `mata_pelajaran` (`id_pelajaran`, `nama_pelajaran`, `keterangan`) VALUES
(3, 'ipa', 'aktif');
INSERT INTO `mata_pelajaran` (`id_pelajaran`, `nama_pelajaran`, `keterangan`) VALUES
(4, 'ips', 'nonaktif');


INSERT INTO `siswa` (`id_siswa`, `id`, `nis`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `email`, `alamat`, `id_kelas`, `jenis_kelamin`) VALUES
(12, 8, '10020', 'I Putu Aris Sanjaya', 'Tukadaya', '2021-12-05', 'bemr.do@gmail.com', 'Jl. Katrangan Gg. leli No. 5, Ds. Sumerta, Kec. De', 1, 'Laki-laki');


INSERT INTO `user` (`id`, `username`, `password`, `nama`, `email`, `level`, `blokir`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'admin@gmail.com', 'admin', 'N');
INSERT INTO `user` (`id`, `username`, `password`, `nama`, `email`, `level`, `blokir`) VALUES
(8, 'admisdfas', '81dc9bdb52d04dc20036dbd8313ed055', 'I Putu Aris Sanjaya', 'bemr.do@gmail.com', 'admin', 'Y');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
