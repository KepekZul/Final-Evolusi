/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.17 : Database - web_trainer
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`web_trainer` /*!40100 DEFAULT CHARACTER SET latin1 */;

/*Table structure for table `artikel` */

DROP TABLE IF EXISTS `artikel`;

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(200) DEFAULT NULL,
  `isi` text,
  `tanggal` datetime DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `creator` int(11) DEFAULT NULL COMMENT 'fk id trainer',
  `foto` varchar(100) DEFAULT NULL,
  `hapus` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `artikel` */

insert  into `artikel`(`id`,`judul`,`isi`,`tanggal`,`kategori`,`creator`,`foto`,`hapus`) values (1,'Tips dan Trik Modev Dikti PKM KC','','2016-09-07 01:02:08','PKM',1,'artikel/artikel1.jpg',0),(2,'Pengertian Karya Ilmiah, Fungsi, Syarat, Jenis, dan Ciri','Pengertian Karya Ilmiah\r\n\r\n“Karangan ilmiah merupakan suatu karangan atau tulisan yang diperoleh sesuai dengan sifat keilmuannya dan didasari oleh hasil pengamatan, peninjauan, penelitian dalam bidang tertentu, disusun menurut metode tertentu dengan sistematika penulisan yang bersantun bahasa dan isisnya dapat dipertanggung jawabkan kebenarannya/ keilmiahannya.”—Eko Susilo, M. 1995:11\r\n\r\nTujuan dari pembuatan karangan ilmiah, antara lain :\r\n\r\n>Memberi penjelasan\r\n>Memberi komentar atau penilaian\r\n>Memberi saran\r\n>Menyampaikan sanggahan\r\n>Membuktikan hipotesa\r\nKarya ilmiah adalah suatu karya dalam bidang ilmu pengetahuan (science) dan teknologi yang berbentuk ilmiah. Suatu karya dapat dikatakan ilmiah apabila proses perwujudannya lewat metode ilmiah. Jonnes (1960) memberikan ketentuan ilmiah, antara lain dengan sifat fakta yang disajikan dan metode penulisannya.\r\n\r\nBila fakta yang disajikan berupa fakta umum yang obyektif dan dapat dibuktikan benar tidaknya serta ditulis secara ilmiah, yaitu menurut prosedur penulisan ilmiah, maka karya tulis tersebut dapat dikategorikan karya ilmiah, sedangkan bilamana fakta yang disajikan berupa dakta pribadi yang subyektif dan tidak dapat dibuktikan benar tidaknya serta tidak ditulis secara ilmiah, karya tulis tersebut termasuk karya tulis non ilmiah.\r\n\r\n\r\n\r\nCiri-Ciri Karya Ilmiah\r\n\r\n1. Struktur Sajian\r\n\r\nStruktur sajian karya ilmiah sangat ketat, biasanya terdiri dari bagian awal (pendahuluan), bagian inti (pokok pembahasan), dan bagian penutup. Bagian awal merupakan pengantar ke bagian inti, sedangkan inti merupakan sajian gagasan pokok yang ingin disampaikan yang dapat terdiri dari beberapa bab atau subtopik. Bagian penutup merupakan kesimpulan pokok pembahasan serta rekomendasi penulis tentang tindak lanjut gagasan tersebut.\r\n\r\n2. Komponen dan Substansi\r\n\r\nKomponen karya ilmiah bervariasi sesuai dengan jenisnya, namun semua karya ilmiah mengandung pendahuluan, bagian inti, penutup, dan daftar pustaka. Artikel ilmiah yang dimuat dalam jurnal mempersyaratkan adanya abstrak.\r\n\r\n3. Sikap Penulis\r\n\r\nSikap penulis dalam karya ilmiah adalah objektif, yang disampaikan dengan menggunakan gaya bahasa impersonal, dengan banyak menggunakan bentuk pasif, tanpa menggunakan kata ganti orang pertama atau kedua.\r\n\r\n4. Penggunaan Bahasa\r\n\r\nBahasa yang digunakan dalam karya ilmiah adalah bahasa baku yang tercermin dari pilihan kata / istilah, dan kalimat-kalimat yang efektif dengan struktur yang baku.\r\n\r\nJenis-jenis karya ilmiah\r\numum karya ilmiah di perguruan tinggi, menurut Arifin (2003), dibedakan menjadi:\r\n1. Makalah adalah karya tulis ilmiah yang menyajikan suatu masalah yang pembahasannya berdasarkan data di\r\nlapangan yang bersifat empiris-objektif. makalah menyajikan masalah dengan melalui proses berpikir\r\ndeduktif atau induktif.\r\n2. Kertas kerja seperti halnya makalah, adalah juga karya tulis ilmiah yang menyajikan sesuatu berdasarkan\r\ndata di lapangan yang bersifat empiris-objektif. Analisis dalam kertas kerja lebih mendalam daripada\r\nanalisis dalam makalah.\r\n3. Skripsi adalah karya tulis ilmiah yang mengemukakan pendapat penulis berdasarkan pendapat orang lain.\r\nPendapat yang diajukan harus didukung oleh data dan fakta empiris-objektif, baik bedasarkan penelitian\r\nlangsung (obsevasi lapangan, atau percobaan di laboratorium), juga diperlukan sumbangan material berupa\r\ntemuan baru dalam segi tata kerja, dalil-dalil, atau hukum tertentu tentang salah satu aspek atau lebih di\r\nbidang spesialisasinya.\r\n4. Tesis adalah karya tulis ilmiah yang sifatnya lebih mendalam dibandingkan dengan skripsi. Tesis\r\nmengungkapkan pengetahuan baru yang diperoleh dari penelitian sendiri.\r\n5. Disertasi adalah karya tulis ilmiah yang mengemukakan suatu dalil yang dapat dibuktikan oleh penulis\r\nberdasarkan data dan fakta yang sahih (valid) dengan analisis yang terinci). Disertasi ini berisi suatu\r\ntemuan penulis sendiri, yang berupa temuan orisinal. Jika temuan orisinal ini dapat dipertahankan oleh\r\npenulisnya dari sanggahan penguji, penulisnya berhak menyandang gelar doktor (S3).\r\nManfaat Penyusunan karya ilmiah\r\nMenurut sikumbang (1981), sekurang-kurangnya ada enam manfaat yang diperoleh dari kegiatan tersebut.\r\n1. Penulis dapat terlatih mengembangkan keterampilan membaca yang efektif karena sebelum menulis karya\r\nilmiah, ia mesti membaca dahulu kepustakaan yang ada relevansinya dengan topik yang hendak dibahas.\r\n2. Penulis dapat terlatih menggabungkan hasil bacaan dari berbagai sumber, mengambil sarinya, dan\r\nmengembangkannya ke tingkat pemikiran yang lebih matang.\r\n3. Penulis dapat berkenalan dengan kegiatan perpustakaan seperti mencari bahan bacaan dalam katalog\r\npengarang atau katalog judul buku.\r\n4. Penulis dapat meningkatkan keterampilan dalam mengorganisasi dan menyajikan data dan fakta secara jelas\r\ndan sistematis.\r\n5. Penulis dapat memperoleh kepuasan intelektual.\r\n6. Penulis turut memperluas cakrawala ilmu pengetahuan masyarakat.\r\nFungsi karya ilmiah:\r\nsebagai sarana untuk mengembangkan ilmu pengetahuan, teknologi, dan seni.\r\n1. Penjelasan (explanation)\r\n2. Ramalan (prediction)\r\n3. Kontrol (control)\r\nHakikat karya ilmiah: mengemukakan kebenaran melalui metodenya yang sistematis, metodologis, dan konsisten.\r\nSyarat menulis karya ilmiah\r\n1. motivasi dan displin yang tinggi\r\n2. kemampuan mengolah data\r\n3. kemampuan berfikir logis (urut) dan terpadu (sistematis)\r\n4. kemampuan berbahasa\r\nSifat karya ilmiah\r\nformal harus memenuhi syarat:\r\n\r\n1. lugas dan tidak emosional => mempunyai satu arti, sehingga tidak ada tafsiran sendiri-sendiri (interprestasi yang lain).\r\n\r\n2. Logis => disusun berdasarkan urutan yang konsisten\r\n\r\n3. Efektif => satu kebulatan pikiran, ada penekanan dan pengembagan.\r\n\r\n4. efisien => hanya mempergunakan kata atau kalimat yang penting dan mudah dipahami\r\n\r\n5. ditulis dengan bahasa Indonesia yang baku','2016-09-10 01:03:03','Karya Tulis',1,'artikel/artikel2.jpg',0),(3,'Langkah-Langkah Menulis dan Membuat Karya Tulis Ilmiah Yang Baik dan Benar','Karya tulis merupakah bentuk karangan yang mengungkapkan ide, pikiran, dan perasaan penulisnya dalam satu kesatuan tema yang utuh. Karya tulis yang digolongkan sebagai karya ilmiah merupakan karangan yang didasarkan pada kegiatan ilmiah.\r\n<br><br>\r\nKegiatan ilmiah dalam hal ini dapat berupa penelitian lapangan, percobaan laboratorium, atau telaah buku.\r\n<br><br>\r\nUnsur-unsur karya karya tulis ilmiah\r\n<br><br>\r\nSebuah tulisan disebut karya tulis ilmiah apabila mengandung usnur-unsur berikut.\r\n<br><br>\r\n1. Didasarkan pada fakta dan data.\r\n<br>\r\n2. Disajikan secara objektif atau apa adanya.\r\n<br>\r\n3. Menggunakan bahasa yang lugas dan jelas.\r\n<br><br>\r\nKemampuan membuat karya tulis ilmiah sangat kalian perlukan dalam proses pembelajaran. Selain itu, karya tulis ilmiah yang baik akan memberikan banyak manfaat bagi diri kalian sendiri dan masyarakat umumnya.\r\n<br><br>\r\nSumber informasi yang digunakan dalam sebuah karya tulis ilmiah, baik berupa teori, pendapat, atau kutipan lain, harus diungkapkan dengan jelas dan dicantumkan sumber pengambilan tersebut.\r\n<br><br>\r\nSumber tulisan dapat ditulis secara langsung setelah kutipan atau diletakkan di dalam bagian daftar pustaka. Sebelum berlatih membuat karya tulis ilmiah sederhana yang didasarkan dari berbagai sumber tertulis, perhatikan contoh karya tulis ilmiah di bawah beserta penjelasannya.\r\n<br><br>','2016-08-29 01:03:38','Karya Tulis',1,'artikel/artikel3.jpg',0),(4,'Tips dan Trik Modev Dikti PKM K','haiiiii','2016-09-08 01:04:03','PKM',1,'artikel/artikel4.jpg',0);

/*Table structure for table `berita` */

DROP TABLE IF EXISTS `berita`;

CREATE TABLE `berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(200) DEFAULT NULL,
  `isi` text,
  `tanggal` datetime DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `creator` int(11) DEFAULT NULL COMMENT 'fk id trainer',
  `foto` varchar(100) DEFAULT NULL,
  `hapus` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `berita` */

insert  into `berita`(`id`,`judul`,`isi`,`tanggal`,`kategori`,`creator`,`foto`,`hapus`) values (1,'TAPONKANTUL','Mahasiswa Teknik Informatika kembali lagi meraih prestasi. Kali ini, Didit Sepiyanto dan Rina Wijaya K. berhasil meraih Juara 1 Kategori Aplikasi pada ajang MAGE 2016 yang diadakan oleh Jurusan Teknik Multimedia dan Jaringan  ITS.\r\n<br>\r\nSelamat atas prestasi yang telah diraih dan semoga semakin sukses.','2016-09-07 01:02:08','ITS Juara',1,'berita/berita1.jpg',0),(2,'Mahasiswa Teknik Informatika ITS Meraih Double Winner di ajang ISoC','Mahasiswa Teknik Informatika kembali lagi meraih prestasi. Kali ini, Fadrian M., M. Dery R, dan Rina Wijaya K. berhasil meraih Juara 2 Apps-Idea Category dan Young Social Enterpreneur pada ajang Indonesia Sociopreneur Challange 2015 yang diadakan oleh Surya University.<br>Selamat atas prestasi yang telah diraih dan semoga semakin sukses.','2016-04-20 01:03:03','ITS Juara',1,'berita/berita2.jpg',0),(3,'Trainer Navigator','[BERITA GEMPA]\r\nTelah hadir sosok pemuda ITS yang siap membumikan atmosfir keilmiahan ITS. Bersiaplah untuk menjadi bagian generasi keilmiahan ITS.<br>\r\nGenerasi NaVigator yang mampu mengendalikan bumi ITS kearah prestatif, kreatif, inspiratif dan kontributif.<br>\r\n<br>\r\nSiapakah Pemuda-pemudi itu???<br>\r\nPenasaran???<br>\r\n....<br>\r\nBerpikir ulanglah sebelum mencari tahu pemuda-pemudi itu, karena akan membuat anda terus berprestasi, menemukan jati diri dan meraih mimpi serta harapan masa depan anda. <br>','2016-08-29 01:03:38','Trainer',1,'berita/berita3.jpg',0),(4,'PIMNAS ITS: Peringkat 4 Perguruan Tinggi, Peringkat 1 Institut','PIMNAS merupakan ajang prestisius bagi mahasiswa yang berkuliah D3 dan S1 di Indonesia. Dibandingkan dengan kompetisi Nasional lainnya seperti Gemastik (Gelar Karya Mahasiswa bidang TIK), OSNPT (Olimpiade Sains Nasional tingkat Perguruan Tinggi), KRI (Kompetisi Robot Indonesia) dll, PIMNAS memiliki positioning tertinggi. Secara nominal hadiah, juara PIMNAS mendapatkan nominal yang jauh lebih rendah dibandingkan dengan kompetisi-kompetisi yang telah disebutkan. Namun karena PIMNAS dapat diikuti oleh mahasiswa jurusan apapun (Gemastik dikhususkan untuk mahasiswa fakultas TIK, OSNPT untuk mahasiswa fakultas MIPA, dll), maka hal ini seolah-olah menegaskan bahwa menjadi juara umum di PIMNAS adalah menjadi Perguruan Tinggi (PT) terbaik se-Indonesia.<br>\r\nDikarenakan positioning yang spesial tersebut, seyogyanya ITS memberikan perhatian yang lebih untuk PIMNAS dari awal. Dari awal adalah frase yang perlu digaris bawahi, karena untuk menjadi juara umum di PIMNAS, pertarungannya sudah dimulai pada saat penulisan proposal. Tahapan selanjutnya untuk memperoleh gelar Juara Umum PIMNAS adalah pelaksanaan program (dengan memberikan uang pinjaman), publikasi, monev ristekdikti, hingga pelaksanaan PIMNAS. Pada tahun 2016 ini, gelar juara umum tersebut disematkan kepada Universitas Brawijaya (UB).<br>\r\nUB telah menyandang gelar juara umum sebanyak 5 kali yakni pada tahun 2008, 2009, 2012, 2015, dan 2016. Prestasi ini telah menyamai UGM yang juga 5 kali juara PIMNAS yakni pada tahun 2005, 2006, 2010, 2011, dan 2014. Santer beredar rumor bahwa jika suatu PT dapat meraih juara umum PIMNAS tiga kali berturut-turut, maka PT tersebut akan dianugerahi Rekor Muri. UGM hampir saja menorehkan sejarah untuk meraih Rekor Muri tersebut, tetapi dipaksa untuk melupakan impiannya oleh UB. Persaingan yang sengit terjadi diantara dua universitas ternama (UB dan UGM) dalam merebut gelar juara umum PIMNAS, namun disela-sela persaingan ketat tersebut, muncullah PT yang belum pernah meraih juara umum PIMNAS sebelumnya, ITS. Tahun 2013 adalah tahun yang sangat menggembirakan bagi ITS, karena untuk pertama kalinya, ITS bisa meraih gelar prestisius tersebut, Juara Umum PIMNAS, menjadi PT terbaik se-Indonesia.<br>','2016-08-17 01:04:03','PKM & PIMNAS',1,'berita/berita4.jpg',0),(5,'Juara Lagi','<ol><li><span style=\"font-family: Arial, Verdana; font-size: 13.3333px;\">juara1</span></li><li><span style=\"font-family: Arial, Verdana; font-size: 13.3333px;\">juara 2</span></li><li><span style=\"font-family: Arial, Verdana; font-size: 13.3333px;\">juara 3</span></li></ol>','2016-09-22 08:48:20','ITS Juara',NULL,'berita/FB_Juara Lagi.jpg',1),(6,'Juara Lagi','asdasdas','2016-09-22 08:50:49','ITS Juara',NULL,'berita/FB_Juara Lagi.jpg',1),(7,'baru saja','asdasd','2016-09-22 09:06:18','asd',NULL,'berita/FB_baru saja.jpg',1),(8,'a a a a','asdasd','2016-09-22 09:09:21','asdasd',NULL,'berita/FB_a a a a.jpg',1),(9,'a a a ','asdasd','2016-09-22 09:14:14','2',NULL,'berita/FB_a_a_a_.jpg',1);

/*Table structure for table `galeri` */

DROP TABLE IF EXISTS `galeri`;

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `tanggal` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `galeri` */

/*Table structure for table `lomba` */

DROP TABLE IF EXISTS `lomba`;

CREATE TABLE `lomba` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(200) DEFAULT NULL,
  `isi` text,
  `tanggal` datetime DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `creator` int(11) DEFAULT NULL COMMENT 'fk id trainer',
  `foto` varchar(100) DEFAULT NULL,
  `pendaftaran_tanggal` varchar(150) DEFAULT NULL,
  `deskripsi_singkat` varchar(100) DEFAULT NULL,
  `hapus` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `lomba` */

insert  into `lomba`(`id`,`judul`,`isi`,`tanggal`,`kategori`,`creator`,`foto`,`pendaftaran_tanggal`,`deskripsi_singkat`,`hapus`) values (1,'UCMC 2016','Hai Investor Muda, siapkan dirimu untuk berkompetisi dalam Unnes Capital Market Competition 2016.\r\nUnnes Stock Exchange Study Forum (KSPM UNSSAF) dengan bangga mempersembahkan Unnes Capital Market Competition 2016. Dengan tema \"The Hidden Power of Indonesia\" dan tagline \"More Than Competition\" kompetisi tingkat nasional ini pastinya akan menyajikan suatu kompetisi yg lebih dr kompetisi untuk para investor muda yg berjiwa pemenang.\r\nCatat tanggal pendaftarannya ya<br>\r\n????Gelombang 1: 22-28 Agustus 2016 (50K)<br>\r\n????Gelombang 2: 29 Agustus - 7 September 2016 (60K)<br>\r\n????Gelombang 3: 8 September - 5 Oktober 2016 (75K)<br>\r\nKetentuan :<br>\r\n????Peserta merupakan individu, yaitu Mahasiswa aktif D3 atau S1<br>\r\n????Peserta tidak pernah atau sedang bekerja di perusahaan sekuritas ????Peserta membaca ketentuan dan mengisi formulir pendaftaran pd website Unssaf www.unssaf.or.id<br>\r\nTanggal penting:<br>\r\n????10-14 Oktober 2016 : Online Trading<br>\r\n????17 Oktober 2016 : Pengumuman 25 besar<br>\r\n????27 Oktober 2016 : Grand Opening dan Technical Meeting<br>\r\n????28-29 Oktober 2016: Gala Show dan Field Trip<br>\r\n????29 Oktober 2016: Gala Dinner and Awarding Night<br>\r\nDengan hadiah:<br>\r\nJuara 1 : Rp4.000.000,00<br>\r\nJuara 2 : Rp3.000.000,00<br>\r\nJuara 3 : Rp1.500.000,00<br>\r\nBest of the rest : Rp500.000,00<br>\r\nSemua peserta akan memperoleh E-sertifikat dan sertifikat khusus untuk 25 besar\r\nSiapkan dirimu untuk berkompetisi dalam UCMC 2016!! I see, U see, Let\'s see on UCMC 2016!!<br>\r\nVideo teaser UCMC 2016: http://youtu.be/_DnTa1BtubE<br>\r\nFB: Kspm Unssaf<br>\r\nTwitter: @kspm_unssaf<br>\r\nIG: @kspm.unssaf<br>\r\nWeb: www.unssaf.or.id<br>\r\nLine: @qrg0500d (OA Kspm Unssaf)<br>\r\nCP: Ade Ningrum (WA: 0857-4216-4534/ Line: Niruum)<br>\r\nIna Rizqiana (WA: 0858-7775-8845/ Line: @inarizqi)<br>','2016-09-07 01:02:08','TEKNOLOGI',1,'lomba/lomba1.jpg','22-28 Agustus 2016','',0),(2,'3rd Technoplast Product Design Competition',' 2nd Technoplast Product Design Competition adalah kompetisi yang dapat memilih 3 kategori desain produk, yaitu kids product, youth product dan adult product<br>\r\nDealine: 24 September 2016<br>\r\nPeserta: Pelajar SD, SMP, SMA, Mahasiswa sederajat dan Umum<br>\r\nReward: Total hadiah Rp 30.000.000 + Sertifikat<br>\r\nInfo selengkapnya klik http://www.akumaru.com/9USmh<br>','2016-09-10 01:03:03','TEKNOLOGI',1,'lomba/lomba2.jpg','24 September 2016','',0),(3,'ABC (AIRLANGGA BIDIKMISI COMPETITION) 2016','Disinilah tempat untuk nunjukin bakat yang kalian punya.<br>\r\nKami hadir membawa peluang untuk kalian berkarya dan menjadi sang juara!!!<br>\r\nAyo ikuti :<br>\r\n>>LOMBA FUTSAL untuk Mahasiswa se Surabaya-Madura<br>\r\n>>LOMBA MURAL untuk Mahasiswa UNAIR / Masyarakat UMUM se-Jawa Timur<br>\r\nBuruan daftaar.. KUOTA PESERTA TERBATAS lhoo guys!!!!<br><br>\r\n\r\nYuk buruan isi form pendaftaran ke http://padet.in/6Dd8N<br>\r\nUntuk persaratan klik di http://padet.in/CiA18<br><br>\r\n\r\nLukislah bakatmu..<br>\r\nTendang semangatmu..<br>\r\nDan raihlah kemenangan !!!<br>\r\n#BidikmisiUniversitasAirlangga<br>\r\n#BersatuBerkaryaMeraihAsa<br>','2016-08-29 01:03:38','OLAH RAGA',1,'lomba/lomba3.jpg','1 September - 29 Oktober 2016','',0),(4,'CHEMISTRY INNOVATION PROJECT','Hallo Inovator Muda Indonesia!<br><br>\r\n\r\nPunya bakat menulis karya ilmiah?<br>\r\nIngin mempublikasikan hasil inovasi berguna kalian?<br>\r\nIngin menjadi bagian dari ajang keilmiahan tingkat nasional?<br><br>\r\n\r\nKami mempersembahkan,<br><br>\r\n\r\nCHEMISTRY INNOVATION PROJECT 2016<br><br>\r\n\r\nSyarat peserta yang dapat mengikuti acara ini adalah,<br>\r\n?Tim terdiri dari 3 orang<br>\r\n?Terbagi menjadi tingkat siswa/i SMA/K (sederajat) dan tingkat mahasiswa/i program sarjana dan diploma se-Indonesia<br><br>\r\n\r\nTema: Encourage Young Scientist to Innovate Chemical Energy<br><br>\r\n\r\nSub Tema :<br>\r\n1. Inovasi biofuel sebagai sumber energi terbarukan.<br>\r\n2. Inovasi teknologi sebagai upaya konservasi energi.<br>\r\n3. Inovasi sumberdaya nonhayati sebagai sumber energi alternatif ramah lingkungan.<br>','2016-09-08 01:04:03','PKM',1,'lomba/lomba4.jpg','1 September - 29 Oktober 2016','',0),(5,'NLC NPC','<ol><li><span style=\"font-family: Arial, Verdana; font-size: 13.3333px;\">asdasd</span></li><li><span style=\"font-family: Arial, Verdana; font-size: 13.3333px;\">sadsdds</span></li><li><span style=\"font-family: Arial, Verdana; font-size: 13.3333px;\">sdsdds</span></li></ol>','2016-09-22 09:04:32','PROGRAMMING',NULL,'lomba/FL_NLC NPC.jpg',NULL,NULL,1),(6,'a a a a','asdasd','2016-09-22 09:09:57','asdasd',NULL,'lomba/FL_a_a_a_a.jpg',NULL,NULL,1);

/*Table structure for table `member` */

DROP TABLE IF EXISTS `member`;

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `hp` varchar(20) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `fakultas` varchar(50) DEFAULT NULL,
  `nomor_registrasi` varchar(50) DEFAULT NULL,
  `jenis_nomor_registrasi` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `member` */

/*Table structure for table `trainer` */

DROP TABLE IF EXISTS `trainer`;

CREATE TABLE `trainer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `nrp` varchar(15) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `fakultas` varchar(10) DEFAULT NULL,
  `hp` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `asal_kota` varchar(100) DEFAULT NULL,
  `asal_provinsi` varchar(100) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `deskripsi` text,
  `line` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `angkatan` varchar(50) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `hapus` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `trainer` */

insert  into `trainer`(`id`,`nama`,`nrp`,`jurusan`,`fakultas`,`hp`,`email`,`asal_kota`,`asal_provinsi`,`password`,`deskripsi`,`line`,`twitter`,`facebook`,`angkatan`,`foto`,`hapus`) values (1,'Prasetya Gilang Nuswantara','5113100104','Tekni Informatika','FTIf','082234331833','prasetya.gilang13@mhs.if.its.ac.id','Surabaya','Jawa Timur','b7a84a7b07e3454ab33e0090698da340',NULL,'pgn.gilang','@pgn_gilang','prasetya Gilang','Navigator',NULL,0),(2,'asd1111','kj','kjkjk','jkj','kjk','jk','jk','jkj',NULL,NULL,'kj','jk','jkj','kjkj',NULL,1),(3,'Trainer Dummy','5113100104','Informatika','FTIF','08223223242','trainer@email.com','Surabaya','Jawa Timur',NULL,NULL,'dummy','@dummy','dummy trainer','Navigator',NULL,0);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `pass` varchar(64) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`email`,`pass`,`role`) values (1,'pgn.gilang.1994@gmail.com','1a1dc91c907325c69271ddf0c944bc72','admin'),(2,'prasetya.gilang13@mhs.if.its.ac.id','1a1dc91c907325c69271ddf0c944bc72','trainer'),(3,'member1@email.com','1a1dc91c907325c69271ddf0c944bc72','member'),(4,'trainer@email.com','1a1dc91c907325c69271ddf0c944bc72','trainer'),(5,'admin@trainer.com','1a1dc91c907325c69271ddf0c944bc72','admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
