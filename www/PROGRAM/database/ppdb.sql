-- phpMyAdmin SQL Dump
-- version 2.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 27, 2013 at 08:34 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ppdb_admin`
--

CREATE TABLE `ppdb_admin` (
  `admin_id` int(11) NOT NULL auto_increment,
  `username` varchar(40) collate latin1_general_ci NOT NULL,
  `password` varchar(255) collate latin1_general_ci NOT NULL,
  `name` int(11) NOT NULL,
  `alamat` varchar(100) collate latin1_general_ci NOT NULL,
  `last_login` datetime NOT NULL,
  `islogin` int(11) NOT NULL,
  `isenable` int(11) NOT NULL,
  PRIMARY KEY  (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=26 ;

--
-- Dumping data for table `ppdb_admin`
--

INSERT INTO `ppdb_admin` (`admin_id`, `username`, `password`, `name`, `alamat`, `last_login`, `islogin`, `isenable`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, 'bandung', '2013-02-27 05:18:56', 1, 1),
(22, 'opix', 'adb81d738d2dccc004ab8773beb8a226', 1, 'Jl. Antapani No.10 Bandung', '2012-05-26 23:15:24', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ppdb_adm_siswa`
--

CREATE TABLE `ppdb_adm_siswa` (
  `adm_id` int(11) NOT NULL auto_increment,
  `no_peserta` bigint(11) NOT NULL,
  `nama` varchar(50) collate latin1_general_ci NOT NULL,
  `nisn` bigint(10) NOT NULL,
  `asal_skl` varchar(50) collate latin1_general_ci NOT NULL,
  `email` varchar(50) collate latin1_general_ci NOT NULL,
  `password` varchar(255) collate latin1_general_ci default NULL,
  `pass_view` varchar(50) collate latin1_general_ci NOT NULL,
  `tgl_daftar` date default NULL,
  `status` int(11) NOT NULL,
  `sts_verifikasi` int(11) NOT NULL default '0',
  `sts_seleksi` int(11) NOT NULL default '0',
  PRIMARY KEY  (`adm_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `ppdb_adm_siswa`
--

INSERT INTO `ppdb_adm_siswa` (`adm_id`, `no_peserta`, `nama`, `nisn`, `asal_skl`, `email`, `password`, `pass_view`, `tgl_daftar`, `status`, `sts_verifikasi`, `sts_seleksi`) VALUES
(1, 201204001, 'Wibowo Asmoro', 1234567899, 'SMP Pajajaran 2', 'up2u.hack@yahoo.com', 'c970a080f0a0b344ef0385c5844fdb8a', 'yz012', '2012-04-17', 0, 1, 0),
(2, 201204002, 'Ainur Rofiq', 1233465789, 'SMPN 12 Bandung', 'fxcs@yahoo.com', '992a6d18b2a148cf20d9014c3524aa11', '34567', '2012-04-17', 0, 1, 1),
(9, 201204004, 'Avika Mawar', 2157485264, 'SMPN 6 Bandung', 'avika@gmail.com', '65fb0544e2bdfceda0dabe46ed51f61e', 'gIXkU', '2012-04-22', 0, 0, 0),
(10, 201205005, 'Wini Putri', 2589663212, 'smp bunga bangsa', 'wini@yahoo.com', '53d08bfd95c72737097cfd6f8959aab1', 'vO6Bh', '2012-05-26', 1, 1, 0),
(11, 201209005, 'Sarwo Prayitno', 1234567890, 'SMP Pasundan 6', 'up2u.hack@yahoo.com', '20bc43214fb501f76ddec99e197e3e63', 'nfrep', '2012-09-18', 1, 0, 0),
(12, 201209006, 'Andika Pratama', 2342354567, 'SMPN 1 Bandung', 'andika@gmail.com', 'd42013b09af8814b229dbfc7570c718e', 'BGVxI', '2012-09-19', 0, 0, 0),
(13, 201302007, 'Genta Rahmat', 1234567865, 'SMP Bunga Bangsa', 'gentarahmat@gmail.com', '0727b0a22f6475ae42b0a198215c6e6a', '7ULFV', '2013-02-27', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ppdb_bind`
--

CREATE TABLE `ppdb_bind` (
  `bind_id` int(11) NOT NULL auto_increment,
  `nisn` bigint(10) NOT NULL default '0',
  `sem_1` int(3) default NULL,
  `sem_2` int(3) default NULL,
  `sem_3` int(3) default NULL,
  `sem_4` int(3) default NULL,
  `sem_5` int(3) default NULL,
  `rata_rata` int(3) default NULL,
  `sts_bind` int(11) default NULL,
  PRIMARY KEY  (`bind_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `ppdb_bind`
--

INSERT INTO `ppdb_bind` (`bind_id`, `nisn`, `sem_1`, `sem_2`, `sem_3`, `sem_4`, `sem_5`, `rata_rata`, `sts_bind`) VALUES
(1, 1234567899, 100, 81, 76, 77, 77, 82, 1),
(2, 1233465789, 76, 77, 84, 88, 88, 83, 1),
(9, 2157485264, 77, 88, 88, 76, 76, 81, 1),
(10, 2589663212, 85, 88, 81, 89, 78, 84, 1),
(11, 1234567890, 88, 77, 84, 90, 78, 80, 1),
(12, 2342354567, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(13, 1234567865, NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ppdb_bing`
--

CREATE TABLE `ppdb_bing` (
  `bing_id` int(11) NOT NULL auto_increment,
  `nisn` bigint(10) NOT NULL,
  `sem_1` int(3) default NULL,
  `sem_2` int(3) default NULL,
  `sem_3` int(3) default NULL,
  `sem_4` int(3) default NULL,
  `sem_5` int(3) default NULL,
  `rata_rata` int(3) default NULL,
  `sts_bing` int(11) default NULL,
  PRIMARY KEY  (`bing_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `ppdb_bing`
--

INSERT INTO `ppdb_bing` (`bing_id`, `nisn`, `sem_1`, `sem_2`, `sem_3`, `sem_4`, `sem_5`, `rata_rata`, `sts_bing`) VALUES
(1, 1234567899, 85, 86, 84, 82, 77, 83, 1),
(2, 1233465789, 76, 76, 84, 80, 87, 81, 1),
(9, 2157485264, 75, 80, 80, 95, 100, 86, 1),
(10, 2589663212, 75, 86, 77, 80, 82, 80, 1),
(11, 1234567890, NULL, NULL, NULL, NULL, NULL, 85, 1),
(12, 2342354567, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(13, 1234567865, NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ppdb_biodata`
--

CREATE TABLE `ppdb_biodata` (
  `bio_id` int(11) NOT NULL auto_increment,
  `nisn` bigint(10) NOT NULL,
  `nm_siswa` varchar(50) collate latin1_general_ci default NULL,
  `tmp_lahir` varchar(50) collate latin1_general_ci default NULL,
  `tgl_lahir` date default NULL,
  `jns_kelamin` varchar(15) collate latin1_general_ci default NULL,
  `agama` varchar(20) collate latin1_general_ci default NULL,
  `ank_ke` int(11) default NULL,
  `jml_saudara` int(11) default NULL,
  `sts_siswa` varchar(25) collate latin1_general_ci default NULL,
  `hp_siswa` varchar(15) collate latin1_general_ci default NULL,
  `almt_siswa` varchar(255) collate latin1_general_ci default NULL,
  `tmpt_siswa` varchar(30) collate latin1_general_ci default NULL,
  `kendaraan` varchar(25) collate latin1_general_ci default NULL,
  `brt_badan` int(11) default NULL,
  `tgi_badan` int(11) default NULL,
  `gol_darah` varchar(2) collate latin1_general_ci default NULL,
  `asl_sekolah` varchar(50) collate latin1_general_ci default NULL,
  `almt_sekolah` varchar(255) collate latin1_general_ci default NULL,
  `kpl_sekolah` varchar(50) collate latin1_general_ci default NULL,
  `asl_kls_smp` varchar(5) collate latin1_general_ci default NULL,
  `tlp_skl` varchar(15) collate latin1_general_ci default NULL,
  `nm_ayah` varchar(50) collate latin1_general_ci default NULL,
  `nm_ibu` varchar(50) collate latin1_general_ci default NULL,
  `almt_ortu` varchar(255) collate latin1_general_ci default NULL,
  `hp_ortu` varchar(15) collate latin1_general_ci default NULL,
  `kerja_ayah` varchar(30) collate latin1_general_ci default NULL,
  `kerja_ibu` varchar(30) collate latin1_general_ci default NULL,
  `hasil_ortu` varchar(35) collate latin1_general_ci default NULL,
  `tgung_biaya` varchar(30) collate latin1_general_ci default NULL,
  `sts_bio` int(11) default NULL,
  PRIMARY KEY  (`bio_id`),
  UNIQUE KEY `nisn` (`nisn`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `ppdb_biodata`
--

INSERT INTO `ppdb_biodata` (`bio_id`, `nisn`, `nm_siswa`, `tmp_lahir`, `tgl_lahir`, `jns_kelamin`, `agama`, `ank_ke`, `jml_saudara`, `sts_siswa`, `hp_siswa`, `almt_siswa`, `tmpt_siswa`, `kendaraan`, `brt_badan`, `tgi_badan`, `gol_darah`, `asl_sekolah`, `almt_sekolah`, `kpl_sekolah`, `asl_kls_smp`, `tlp_skl`, `nm_ayah`, `nm_ibu`, `almt_ortu`, `hp_ortu`, `kerja_ayah`, `kerja_ibu`, `hasil_ortu`, `tgung_biaya`, `sts_bio`) VALUES
(1, 1234567899, 'Wibowo Asmoro', 'Bandung', '1985-05-14', 'Pria', 'islam', 5, 5, 'Kandung', '081235488995', 'Jl. Reuma', 'Orang Tua', 'Mobil', 50, 165, 'A', 'SMP Pasundan 6', 'Jl. Sumatera', 'Upin Supini', '3 c', '0222578656', 'xxxx', 'yyyy', 'Jl. Reuma', '056318998532', 'Pensiun', 'IRT', '20000000', 'Orang Tua', 1),
(2, 1233465789, 'Ainur Rofiq', 'Bandung', '1984-02-11', 'Pria', 'islam', 5, 5, 'Kandung', '023265989826', 'Jl Antapani No. 21 Bandung', 'Orang Tua', 'Mobil', 70, 170, 'A', 'SMPN 12 Bandung', 'Jl. Cikutra No. 1 Bandung', 'Akhmad Anshari', '3 F', '0225423453', 'Muhammad Rofiq', 'Siti Rufaidah', 'Jl. Antapani', '021654684321', 'Swasta', 'Ibu Rumah Tangga', '1500000', 'Orang Tua', 1),
(9, 2157485264, 'Avika Mawar', 'Bandung', '1985-08-07', 'Wanita', 'islam', 1, 1, 'Kandung', '078567575675', 'jl. jeruk purut', 'orang tua', 'Mobil', 45, 160, 'A', 'SMPN 6 Bandung', 'Jl. apel mangga', 'FFFFFFFFFFFF', '3 c', '0224536563', 'GGGGGGGG', 'HHHHHHHHH', 'jl. jeruk purut', '067564634634', 'swasta', 'irt', '2500000', 'orang tua', 1),
(10, 2589663212, 'Wina Putri', 'Bandung', '1994-05-15', 'Wanita', 'islam', 5, 5, 'kandung', '083823131321', 'jl. bengkok', 'orang tua', 'angkot', 45, 155, 'a', 'smp bunga bangsa', 'jl. dago bengkok no 3', 'h. endang robes', '3 d', '0222586545', 'xxxxxx', 'yyyyyy', 'jl. bengkok', '021654542152', 'sdfsfsfsfsfsdf', 'dfgdgdgdgdg', '5646464646', 'ghfhfhfgh', 1),
(11, 1234567890, 'Sarwo Prayitno', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SMP Pasundan 6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(12, 2342354567, 'Andika Pratama', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SMPN 1 Bandung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(13, 1234567865, 'Genta Rahmat', 'Bandung', '1994-02-15', 'Pria', 'islam', 2, 3, 'kandung', '08329780901', 'Jl. Sudirman No. 5 Bandung', 'Orang Tua', 'sepeda', 50, 170, 'ab', 'SMP Bunga Bangsa', 'Jl. KS. Tubun No. 71', 'Rudy Wiwaha', '3 C', '0225550940', 'Edy Prayitno', 'Susilawati', 'Jl. Sudirman No. 5', '08346763781', 'Wiraswasta', 'Ibu Rumah Tangga', '1000000', 'Orang Tua', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ppdb_info`
--

CREATE TABLE `ppdb_info` (
  `info_id` int(11) NOT NULL auto_increment,
  `info` text collate latin1_general_ci NOT NULL,
  `aktif` int(11) NOT NULL,
  PRIMARY KEY  (`info_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ppdb_info`
--

INSERT INTO `ppdb_info` (`info_id`, `info`, `aktif`) VALUES
(1, 'Penerimaan Peserta Didik Baru SMA LOKOMEDIA Tahun Ajaran 2012/2013 Telah Dimulai.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ppdb_ipa`
--

CREATE TABLE `ppdb_ipa` (
  `ipa_id` int(11) NOT NULL auto_increment,
  `nisn` bigint(10) NOT NULL,
  `sem_1` int(3) default NULL,
  `sem_2` int(3) default NULL,
  `sem_3` int(3) default NULL,
  `sem_4` int(3) default NULL,
  `sem_5` int(3) default NULL,
  `rata_rata` int(3) default NULL,
  `sts_ipa` int(11) NOT NULL,
  PRIMARY KEY  (`ipa_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `ppdb_ipa`
--

INSERT INTO `ppdb_ipa` (`ipa_id`, `nisn`, `sem_1`, `sem_2`, `sem_3`, `sem_4`, `sem_5`, `rata_rata`, `sts_ipa`) VALUES
(1, 1234567899, 76, 82, 86, 77, 84, 81, 1),
(2, 1233465789, 80, 82, 79, 87, 76, 81, 1),
(9, 2157485264, 80, 80, 80, 80, 80, 80, 1),
(10, 2589663212, 82, 82, 80, 76, 77, 79, 1),
(11, 1234567890, NULL, NULL, NULL, NULL, NULL, 78, 1),
(12, 2342354567, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(13, 1234567865, NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ppdb_ips`
--

CREATE TABLE `ppdb_ips` (
  `ips_id` int(11) NOT NULL auto_increment,
  `nisn` bigint(10) NOT NULL,
  `sem_1` int(3) default NULL,
  `sem_2` int(3) default NULL,
  `sem_3` int(3) default NULL,
  `sem_4` int(3) default NULL,
  `sem_5` int(3) default NULL,
  `rata_rata` int(3) default NULL,
  `sts_ips` int(11) NOT NULL,
  PRIMARY KEY  (`ips_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `ppdb_ips`
--

INSERT INTO `ppdb_ips` (`ips_id`, `nisn`, `sem_1`, `sem_2`, `sem_3`, `sem_4`, `sem_5`, `rata_rata`, `sts_ips`) VALUES
(1, 1234567899, 98, 89, 78, 84, 82, 86, 1),
(2, 1233465789, 86, 85, 85, 85, 85, 85, 1),
(9, 2157485264, 77, 77, 77, 77, 77, 77, 1),
(10, 2589663212, 95, 86, 80, 80, 78, 84, 1),
(11, 1234567890, NULL, NULL, NULL, NULL, NULL, 88, 1),
(12, 2342354567, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(13, 1234567865, NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ppdb_kontak`
--

CREATE TABLE `ppdb_kontak` (
  `ktk_id` int(11) NOT NULL auto_increment,
  `nama` varchar(50) collate latin1_general_ci NOT NULL,
  `email` varchar(40) collate latin1_general_ci NOT NULL,
  `subjek` varchar(40) collate latin1_general_ci NOT NULL,
  `pesan` text collate latin1_general_ci NOT NULL,
  `tggl` date NOT NULL,
  `aktif` int(11) NOT NULL,
  PRIMARY KEY  (`ktk_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `ppdb_kontak`
--

INSERT INTO `ppdb_kontak` (`ktk_id`, `nama`, `email`, `subjek`, `pesan`, `tggl`, `aktif`) VALUES
(1, 'opix', 'fxcs_dispose@yahoo.com', 'Alur PDB', 'Bagaimana bla bla bla', '2011-10-10', 1),
(2, 'Widya', 'widya@yahoo.com', 'Verifikasi', 'Bagaimana Cara Verifikasi?', '2011-10-11', 1),
(8, 'fxcs', 'fxcs@opix.com', 'maknyusss', 'minta sourcenya dung', '2012-03-27', 1),
(9, 'asdasd', 'asdasd@dfsfsf.dfgd', 'fgdgsdghsdhs', 'hsghsghghsdhg', '2012-04-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ppdb_mat`
--

CREATE TABLE `ppdb_mat` (
  `mat_id` int(11) NOT NULL auto_increment,
  `nisn` bigint(10) NOT NULL,
  `sem_1` int(3) default NULL,
  `sem_2` int(3) default NULL,
  `sem_3` int(3) default NULL,
  `sem_4` int(3) default NULL,
  `sem_5` mediumint(3) default NULL,
  `rata_rata` int(3) default NULL,
  `sts_mat` int(11) default NULL,
  PRIMARY KEY  (`mat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `ppdb_mat`
--

INSERT INTO `ppdb_mat` (`mat_id`, `nisn`, `sem_1`, `sem_2`, `sem_3`, `sem_4`, `sem_5`, `rata_rata`, `sts_mat`) VALUES
(1, 1234567899, 75, 75, 78, 84, 94, 81, 1),
(2, 1233465789, 97, 75, 85, 81, 80, 84, 1),
(9, 2157485264, 76, 77, 78, 88, 88, 81, 1),
(10, 2589663212, 78, 77, 84, 85, 86, 82, 1),
(11, 1234567890, NULL, NULL, NULL, NULL, NULL, 81, 1),
(12, 2342354567, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(13, 1234567865, NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ppdb_menu`
--

CREATE TABLE `ppdb_menu` (
  `main_id` int(5) NOT NULL auto_increment,
  `menu` varchar(50) character set latin1 collate latin1_general_ci default NULL,
  `link` varchar(100) character set latin1 collate latin1_general_ci default NULL,
  `aktif` enum('Y','N') NOT NULL default 'Y',
  `status_in` int(11) NOT NULL,
  `status_out` int(11) NOT NULL,
  PRIMARY KEY  (`main_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `ppdb_menu`
--

INSERT INTO `ppdb_menu` (`main_id`, `menu`, `link`, `aktif`, `status_in`, `status_out`) VALUES
(1, 'Home', '?module=home', 'Y', 1, 1),
(2, 'Daftar', '?module=daftar', 'Y', 0, 1),
(3, 'Pendaftar', '?module=pendaftar', 'Y', 1, 1),
(4, 'Pengumuman', '?module=pengumuman', 'N', 1, 1),
(5, 'Akun', '?module=akun', 'Y', 1, 0),
(6, 'Login', '?module=login', 'Y', 0, 1),
(8, 'Logout', '?module=logout', 'Y', 1, 0),
(7, 'Bantuan', '#', 'Y', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ppdb_submenu`
--

CREATE TABLE `ppdb_submenu` (
  `sub_id` int(5) NOT NULL auto_increment,
  `nama_sub` varchar(50) character set latin1 collate latin1_general_ci default NULL,
  `link_sub` varchar(100) character set latin1 collate latin1_general_ci default NULL,
  `main_id` int(5) NOT NULL,
  PRIMARY KEY  (`sub_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `ppdb_submenu`
--

INSERT INTO `ppdb_submenu` (`sub_id`, `nama_sub`, `link_sub`, `main_id`) VALUES
(1, 'Lengkapi Biodata', '?module=biodata', 5),
(2, 'Nilai Rapor', '?module=rapor', 5),
(3, 'Cetak Dokumen', '?module=dokumen', 5),
(10, 'Alur PPDB', '?module=alur', 15),
(11, 'Persyaratan', '?module=syarat', 15),
(12, 'Kirim Pesan', '?module=pesan', 7);
