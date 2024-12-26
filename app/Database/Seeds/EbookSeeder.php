<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EbookSeeder extends Seeder {
  public function run() {
    // $data = [
    //   'judul'            => 'Kumpulan Eksperimen Sains',
    //   'slug'             => 'kumpulan_eksperimen_sains',
    //   'kategori'         => 'Sains',
    //   'tahun_terbit'     => '2021',
    //   'halaman'          => 216,
    //   'bahasa'           => 'Bahasa Indonesia',
    //   'sinopsis'         => 'Pembelajaran eksperimen sains khususnya bagi siswa SD/MI dapat menarik apabila semua elemen pembelajaran  mendukung. Hadirnya buku ini diharapkan dapat mendukung dan memaksimalkan media pembelajaran khususnya bagi mahasiswa PGMI dan mahasiswa IAIN Metro',
    //   'viewers'          => 5,
    //   'sampul'           => '1638335971_f37b254ae82e8079a81c.png',
    //   'file'             => '1638335971_9eb1e00081315d3cc4e3.pdf',
    //   'badge'            => 'badge-dark',
    //   'created_at'       => '2021-12-01 12:19:31',
    //   'updated_at'       => '2021-12-03 13:09:27'
    // ];

    $data = [
      [
        'judul'            => 'Kumpulan Eksperimen Sains',
        'slug'             => 'kumpulan_eksperimen_sains',
        'kategori'         => 'Sains',
        'tahun_terbit'     => '2021',
        'halaman'          => 216,
        'bahasa'           => 'Bahasa Indonesia',
        'sinopsis'         => 'Pembelajaran eksperimen sains khususnya bagi siswa SD/MI dapat menarik apabila semua elemen pembelajaran  mendukung. Hadirnya buku ini diharapkan dapat mendukung dan memaksimalkan media pembelajaran khususnya bagi mahasiswa PGMI dan mahasiswa IAIN Metro',
        'viewers'          => 5,
        'sampul'           => '1638335971_f37b254ae82e8079a81c.png',
        'file'             => '1638335971_9eb1e00081315d3cc4e3.pdf',
        'badge'            => 'badge-dark',
        'created_at'       => '2021-12-01 12:19:31',
        'updated_at'       => '2021-12-03 13:09:27'
      ],
      [
        'judul'            => 'Physical Science with Earth Science',
        'slug'             => 'physical_science_with_earth_science',
        'kategori'         => 'Sains',
        'tahun_terbit'     => '2008',
        'halaman'          => 334,
        'bahasa'           => 'English',
        'sinopsis'         => 'Douglas Fisher, Ph.D., is a Professor in the Department of Teacher  Education at San Diego State University. He is the recipient of an  International Reading Association Celebrate Literacy Award as well  as a Christa McAuliffe award for Excellence in Teacher Education.',
        'viewers'          => 1,
        'sampul'           => '1638350340_9d5277cf2c4df7aee406.png',
        'file'             => '1638350340_030069b2b92b8e3774aa.pdf',
        'badge'            => 'badge-dark',
        'created_at'       => '2021-12-01 16:19:00',
        'updated_at'       => '2021-12-01 16:19:04'
      ],
      [
        'judul'            => 'ENCYCLOPEDIA OF Mathematics',
        'slug'             => 'encyclopedia_of_mathematics',
        'kategori'         => 'Sains',
        'tahun_terbit'     => '2010',
        'halaman'          => 577,
        'bahasa'           => 'English',
        'sinopsis'         => 'Mathematics is often presented as a large collection of disparate facts to be absorbed (memorized!) and used only with very specific applications in mind. Yet the development of mathematics has been a journey that has engaged the human mind and spirit for thousands of years, offering joy, play, and creative invention.',
        'viewers'          => 1,
        'sampul'           => '1638350438_c5c61fda8d7134f282f7.png',
        'file'             => '1638350438_63527d9e34640a7522df.pdf',
        'badge'            => 'badge-dark',
        'created_at'       => '2021-12-01 16:20:38',
        'updated_at'       => '2021-12-01 17:37:59'
      ],
      [
        'judul'            => 'HACKING Beginner to Expert Guide',
        'slug'             => 'hacking_beginner_to_expert_guide',
        'kategori'         => 'Teknologi',
        'tahun_terbit'     => '2016',
        'halaman'          => 93,
        'bahasa'           => 'English',
        'sinopsis'         => 'This book will teach you how you can protect yourself from most common hacking attacks -- by knowing how hacking actually works! After all, in order to prevent your system from being compromised, you need to stay a step ahead of any criminal hacker. You can do that by learning how to hack and how to do a counter-hack',
        'viewers'          => 1,
        'sampul'           => '1638350574_3c66abdb084c588e4412.png',
        'file'             => '1638350574_0a3c9619b697903ef631.pdf',
        'badge'            => 'badge-info',
        'created_at'       => '2021-12-01 16:22:54',
        'updated_at'       => '2021-12-01 16:23:00'
      ],
      [
        'judul'            => 'Python Programming: An Introduction to Computer Science',
        'slug'             => 'python_programming_an_introduction_to_computer_science',
        'kategori'         => 'Teknologi',
        'tahun_terbit'     => '2012',
        'halaman'          => 261,
        'bahasa'           => 'English',
        'sinopsis'         => 'Almost everyone has used a computer at one time or another.Perhaps you have played computer games or used a computer to write a paper or balance your checkbook. Computers are used to predict the weather, design airplanes, make movies, run businesses, perform financial transactions, and control factories.',
        'viewers'          => 1,
        'sampul'           => '1638350746_59801b6ce46263ce5889.png',
        'file'             => '1638350746_657dff3f844d5f5330c7.pdf',
        'badge'            => 'badge-info',
        'created_at'       => '2021-12-01 16:25:46',
        'updated_at'       => '2021-12-01 16:25:50'
      ],

      [
        'judul'            => 'Information Technology',
        'slug'             => 'information_technology',
        'kategori'         => 'Teknologi',
        'tahun_terbit'     => '2012',
        'halaman'          => 673,
        'bahasa'           => 'English',
        'sinopsis'         => 'Although project management has been an established field for many years, managing information technology requires ideas and information that go beyond standard project management.',
        'viewers'          => 2,
        'sampul'           => '1638355011_3978871aff41323efd9c.png',
        'file'             => '1638355011_991ef4d99768be601275.pdf',
        'badge'            => 'badge-info',
        'created_at'       => '2021-12-01 17:36:51',
        'updated_at'       => '2021-12-01 17:38:12'
      ],
      [
        'judul'            => 'Oligarki',
        'slug'             => 'oligarki',
        'kategori'         => 'Sosial',
        'tahun_terbit'     => '2011',
        'halaman'          => 505,
        'bahasa'           => 'Bahasa Indonesia',
        'sinopsis'         => 'Banyak orang berbicara tentang demokrasi Indonesia yang disfungsional. Mengupas secara kritis problematik yang boleh dikatakan bersifat universal itu, Jeffrey Winters memaparkan adanya kerancuan konseptual tentang oligarki. Baginya, demokrasi dan oligarki tidak saling meniadakan, tapi justru dapat berkohabitasi seperti yang berlangsung di negeri kita sekarang. Karya ini wajib dibaca oleh mereka yang mendambakan perubahan mendasar di Indonesia',
        'viewers'          => 8,
        'sampul'           => '1638356257_7d8939aa60a2591cf357.png',
        'file'             => '1638355486_d93687a7eba4b10b3fe4.pdf',
        'badge'            => 'badge-warning',
        'created_at'       => '2021-12-01 17:44:46',
        'updated_at'       => '2021-12-01 18:17:31'
      ],
      [
        'judul'            => 'The Social Animal',
        'slug'             => 'the_social_animal',
        'kategori'         => 'Sosial',
        'tahun_terbit'     => '2007',
        'halaman'          => 530,
        'bahasa'           => 'English',
        'sinopsis'         => 'The purpose of this volume is unashamedly (but with some trepidation) to spell out the relevance that sociopsychological research might have for some of the problems besetting contemporary society. Most of the data discussed in this volume are based on experiments; most of the illustrations and examples, however, are derived from current social problems—including prejudice, propaganda, war, alienation, aggression, unrest, and politic ',
        'viewers'          => 2,
        'sampul'           => '1638356403_40d1eb393a1246440eb9.png',
        'file'             => '1638356403_6c6ab4a96bf4166636f7.pdf',
        'badge'            => 'badge-warning',
        'created_at'       => '2021-12-01 18:00:03',
        'updated_at'       => '2021-12-01 18:00:17'
      ],
      [
        'judul'            => 'Hukum Agraria dan Masyarakat Indonesia',
        'slug'             => 'hukum_agraria_dan_masyarakat_indonesia',
        'kategori'         => 'Sosial',
        'tahun_terbit'     => '2010',
        'halaman'          => 418,
        'bahasa'           => 'Bahasa Indonesia ',
        'sinopsis'         => 'Undang-Undang Pokok Agraria No. 5 tahun 1960 yang menggantikan Agrarische Wet 1870 telah berusia setengah abad. Situasi dan  kondisi ketika Undang Undang Pokok Agraria itu dilahirkan berlainan dengan keadaan sekarang. Jumlah penduduk Indonesia yang pada waktu itu baru sekitar 60 juta jiwa sekarang telah menjadi 220 juta jiwa, sementara tanah tidak bertambah luasnya.',
        'viewers'          => 1,
        'sampul'           => '1638356511_20c84bf86d7310a47713.png',
        'file'             => '1638356511_8bfd8ada11d0b54770b0.pdf',
        'badge'            => 'badge-warning',
        'created_at'       => '2021-12-01 18:01:51',
        'updated_at'       => '2021-12-01 18:02:02'
      ],
      [
        'judul'            => 'Climate Change and Migration',
        'slug'             => 'climate_change_and_migration',
        'kategori'         => 'Lingkungan',
        'tahun_terbit'     => '2014',
        'halaman'          => 287,
        'bahasa'           => 'English',
        'sinopsis'         => 'Do households living in climate-affected areas in the Middle East and North Africa (MENA) region believe that changes in climate patterns and their environment are taking place? Have households been affected by extreme weather events, and in that case to what extent and which events have had the largest impact? ',
        'viewers'          => 1,
        'sampul'           => '1638356753_fbaae28f77b801e56eb2.png',
        'file'             => '1638356753_6c9625ab892f4e32f1f6.pdf',
        'badge'            => 'badge-success',
        'created_at'       => '2021-12-01 18:05:53',
        'updated_at'       => '2021-12-01 18:06:02'
      ],
      [
        'judul'            => 'Collapse: Runtuhnya Peradaban-Peradaban Dunia',
        'slug'             => 'collapse_runtuhnya_peradaban-peradaban_dunia',
        'kategori'         => 'Lingkungan',
        'tahun_terbit'     => '2014',
        'halaman'          => 784,
        'bahasa'           => 'Bahasa Indonesia',
        'sinopsis'         => 'Beberapa musim panas lalu saya mengunjungi dua peternakan  sapi, Peternakan Huls dan Peternakan Gardar, yang meskipun  terpisah ribuan mil jauhnya, tetap sangat mirip dalam hal kekuatan dan kerapuhannya. Keduanya merupakan peternakan paling besar, paling makmur, berteknologi paling maju di daerah masing-masing.',
        'viewers'          => 2,
        'sampul'           => '1638356840_c2da3a0eb865172458c7.png',
        'file'             => '1638356840_0a821484c7d91ad2a7c3.pdf',
        'badge'            => 'badge-success',
        'created_at'       => '2021-12-01 18:07:20',
        'updated_at'       => '2021-12-01 18:10:06'
      ],
      [
        'judul'            => 'Essentials of Ecology',
        'slug'             => 'essentials_of_ecology',
        'kategori'         => 'Lingkungan',
        'tahun_terbit'     => '2021',
        'halaman'          => 383,
        'bahasa'           => 'English',
        'sinopsis'         => 'Welcome to environmental science—an interdiscipliary study of how the earth works, how we interact with the earth, and how we can deal with the environmental problems we face. Because environmental issues affect every part of your life, the concepts, information, and issues discussed in this book and the course you are taking will be useful to you now and throughout your life',
        'viewers'          => 0,
        'sampul'           => '1638356958_ee09ce83da817324a3bc.png',
        'file'             => '1638356959_4153263f837f3fe6fe31.pdf',
        'badge'            => 'badge-success',
        'created_at'       => '2021-12-01 18:09:19',
        'updated_at'       => '2021-12-01 18:09:19'
      ],
      [
        'judul'            => 'Drawing Cartoons & Comics For Dummies',
        'slug'             => 'drawing_cartoons_comics_for_dummies',
        'kategori'         => 'Kesenian',
        'tahun_terbit'     => '2009',
        'halaman'          => 363,
        'bahasa'           => 'English',
        'sinopsis'         => 'This book is dedicated to all those individuals who love to draw and have grown up (and are still growing up) with a passion for drawing cartoons. Thank you to all the cartoonists who inspired me as a kid with all the wonderful and fantastic art that made me',
        'viewers'          => 1,
        'sampul'           => '1638357164_18f2cd373ef2de332134.png',
        'file'             => '1638357164_fac9e05f303315fe6871.pdf',
        'badge'            => 'badge-primary',
        'created_at'       => '2021-12-01 18:12:44',
        'updated_at'       => '2021-12-01 18:12:49'
      ],
      [
        'judul'            => 'Peta Kesenian dan Budaya Bali',
        'slug'             => 'peta_kesenian_dan_budaya_bali',
        'kategori'         => 'Kesenian',
        'tahun_terbit'     => '2021',
        'halaman'          => 164,
        'bahasa'           => 'Bahasa Indonesia',
        'sinopsis'         => 'Kami sangat mengapresiasi karya buku ini, karena memperoleh momentum yang tepat dan reflektif tentang linkage antara modal dasar kebudayaan dengan Pesta Kesenian Bali, Bali Mahalango dan Visi Bali Mandara dalam memajukan Bali “The Island of Art”. Kini dan ke depan, paradigma yang mengusung keseimbangan dalam kemajuan Ekonomi, Teknologi, Ekologi, Edukasi dan Kebudayaan makin memperoleh aksentuasi dan apresiasi, karena makin mampu memberi  makna bagi kemanusiaan, kehidupan danpenghidupan berkelanjutan',
        'viewers'          => 2,
        'sampul'           => '1638357285_e3a63eb88ea728e45c41.png',
        'file'             => '1638357267_867fd0050d5fcfe92382.pdf',
        'badge'            => 'badge-primary',
        'created_at'       => '2021-12-01 18:14:27',
        'updated_at'       => '2021-12-01 18:14:45'
      ],
      [
        'judul'            => 'Kesenian Glipang Lumajang',
        'slug'             => 'kesenian_glipang_lumajang',
        'kategori'         => 'Kesenian',
        'tahun_terbit'     => '2015',
        'halaman'          => 143,
        'bahasa'           => 'Bahasa Indonesia',
        'sinopsis'         => 'Buku tentang “Kesenian Glipang Lumajang (Bentuk Pertunjukan dan Eksistensi Grup Bintang Budaya), tulisan Th. Esti Wuryansaridan Ernawati Purwaningsih menguraikan tentang bagaimana sebuah kesenian tradisi masih bertahan di tengah gempuran budaya global yang sedang melanda saat ini. Kesenian Glipang yang menjadi kekhasan Kabupaten Lumajang menjadi bukti bahwa seni tradisi masih memiliki penonton dan penggemarnya.',
        'viewers'          => 1,
        'sampul'           => '1638357398_5b6759094597b36e1fc7.png',
        'file'             => '1638357398_c28d1809ed7152f8beea.pdf',
        'badge'            => 'badge-primary',
        'created_at'       => '2021-12-01 18:16:38',
        'updated_at'       => '2021-12-01 18:16:50'
      ],
    ];



    // Using Query Builder
    $this->db->table('ebook')->insertBatch($data);
  }
}