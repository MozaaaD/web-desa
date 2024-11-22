<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Produk Desa</title>
</head>
<body>
    <nav class="bg-white h-24 px-16 flex items-center fixed top-0 text-black z-10 w-full">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex gap-3 items-center">
                <img src="/logobms.png" class="w-16 h-auto" alt="">
                <div>
                    <p style="font-size: 14px; font-weight: 600; line-height: 1.2; margin: 0;">
                        Desa Tlaga, Kecamatan Gumelar
                    </p>
                    <p style="font-size: 14px; font-weight: 600; color: #8f7f21; line-height: 1.2; margin: -2px 0 0 0;">
                        Pemerintah Kabupaten Banyumas
                    </p>
                    <p style="font-size: 12px; font-weight: bold; line-height: 1.2; margin: 0;">
                        Jl. Raya Tlaga No. 06, Desa Tlaga, Kec. Gumelar, Kab. Banyumas, Jawa Tengah, 53165
                    </p>
                </div>
            </div>
            <div class="h-[100svh] flex items-center justify-center gap-5">
              <a href="/"
                class="relative hover:text-yellow-400 cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-300 before:absolute before:bg-yellow-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-300 after:absolute after:bg-yellow-400 after:origin-center after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                <span>Beranda</span>
              </a>
              <a href="/berita"
                class="relative hover:text-yellow-400 cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-300 before:absolute before:bg-yellow-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-300 after:absolute after:bg-yellow-400 after:origin-center after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                <span>Berita</span>
              </a>
            
              <!-- Dropdown Profil -->
              <div class="relative group">
                <div class="hover:text-yellow-400 cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-300 before:absolute before:bg-yellow-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-300 after:absolute after:bg-yellow-400 after:origin-center after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                  <span class="group-hover:text-yellow-400">Profil</span>
                </div>
                <!-- Dropdown Menu -->
                <div class="absolute left-1/2 -translate-x-1/2 w-40 bg-white shadow-lg rounded-lg opacity-0 group-hover:opacity-100 group-hover:translate-y-0 transform transition-all duration-300 ease-in-out translate-y-2 z-10 pointer-events-none group-hover:pointer-events-auto">
                  <a href="/visimisi" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white hover:rounded-t-md transition-colors text-center">Visi dan Misi</a>
                  <a href="/sejarahdesa" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white transition-colors text-center">Sejarah Desa</a>
                  <a href="#visi-misi" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white hover:rounded-b-md  transition-colors text-center">Tokoh & Sejarah</a>
                </div>
              </div>
              <div class="relative group">
                <div class="hover:text-yellow-400 cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-300 before:absolute before:bg-yellow-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-300 after:absolute after:bg-yellow-400 after:origin-center after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                  <span class="group-hover:text-yellow-400">Lembaga Desa</span>
                </div>
                <!-- Dropdown Menu -->
                <div class="absolute left-1/2 -translate-x-1/2 w-40 bg-white shadow-lg rounded-lg opacity-0 group-hover:opacity-100 group-hover:translate-y-0 transform transition-all duration-300 ease-in-out translate-y-2 z-10 pointer-events-none group-hover:pointer-events-auto">
                  <a href="/pemerintahdesa" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white hover:rounded-t-md transition-colors text-center">Pemerintah Desa</a>
                  {{-- <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white transition-colors text-center">Linmas</a> --}}
                  <a href="/bpd" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white transition-colors text-center">BPD</a>
                  <a href="/lpmd" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white transition-colors text-center">LPMD</a>
                  <a href="/karangtaruna" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white transition-colors text-center">Karang Taruna</a>
                  <a href="/rtrw" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white hover:rounded-b-md  transition-colors text-center">Daftar RT/RW</a>
                </div>
              </div>
              <div class="relative group">
                <div class="hover:text-yellow-400 cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-300 before:absolute before:bg-yellow-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-300 after:absolute after:bg-yellow-400 after:origin-center after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                  <span class="group-hover:text-yellow-400">Potensi Desa</span>
                </div>
                <!-- Dropdown Menu -->
                <div class="absolute left-1/2 -translate-x-1/2 w-40 bg-white shadow-lg rounded-lg opacity-0 group-hover:opacity-100 group-hover:translate-y-0 transform transition-all duration-300 ease-in-out translate-y-2 z-10 pointer-events-none group-hover:pointer-events-auto">
                  <a href="" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white hover:rounded-t-md transition-colors text-center">Produk Desa</a>
                  <a href="#sejarah" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white transition-colors text-center">Potensi Wisata</a>
                  <a href="#visi-misi" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white hover:rounded-b-md  transition-colors text-center">Komoditi Unggulan</a>
                </div>
              </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto py-12 px-6 mt-11">
        <h2 class="text-3xl font-bold text-yellow-600 mb-4 ml-9">Produk Desa</h2>
    </div>

    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full text-sm text-gray-700">
          <thead class="bg-gray-100 text-center">
            <tr>
              <th class="px-4 py-2 border-b">No</th>
              <th class="px-4 py-2 border-b">Nama UMKM</th>
              <th class="px-4 py-2 border-b">Alamat</th>
              <th class="px-4 py-2 border-b">Nama Pemilik</th>
              <th class="px-4 py-2 border-b">Tahun Berdiri</th>
              <th class="px-4 py-2 border-b">Jenis Produk</th>
              <th class="px-4 py-2 border-b">Sertifikasi Produk (PIRT)</th>
              <th class="px-4 py-2 border-b">Omset per Bulan</th>
              <th class="px-4 py-2 border-b">Jumlah Tenaga Kerja</th>
              <th class="px-4 py-2 border-b">Wilayah Pasar</th>
              <th class="px-4 py-2 border-b">Pasar Online</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b hover:bg-gray-50">
              <td class="px-4 py-2 text-center">1</td>
              <td class="px-4 py-2">Warung Rujak dan Mendoan Pak Amir</td>
              <td class="px-4 py-2">RT 01 RW 01</td>
              <td class="px-4 py-2">Amir</td>
              <td class="px-4 py-2 text-center">2018</td>
              <td class="px-4 py-2">Minuman, rujak, mendoan, jajanan</td>
              <td class="px-4 py-2 text-center">Belum</td>
              <td class="px-4 py-2 text-center">500 ribu</td>
              <td class="px-4 py-2 text-center">3 orang</td>
              <td class="px-4 py-2">Orang kerja kebun, orang lewat karena bersebelahan dengan cilacap</td>
              <td class="px-4 py-2 text-center">Belum</td>
            </tr>
            <tr class="border-b hover:bg-gray-50">
              <td class="px-4 py-2 text-center">2</td>
              <td class="px-4 py-2">Zein Home</td>
              <td class="px-4 py-2">RT 02 RW 01</td>
              <td class="px-4 py-2">Yani</td>
              <td class="px-4 py-2 text-center">2021</td>
              <td class="px-4 py-2">Kelontong</td>
              <td class="px-4 py-2 text-center">Belum</td>
              <td class="px-4 py-2 text-center">1 juta</td>
              <td class="px-4 py-2 text-center">1 orang</td>
              <td class="px-4 py-2">Whatsapp group, sekitar rumah</td>
              <td class="px-4 py-2 text-center">WhatsApp</td>
            </tr>
            <tr class="border-b hover:bg-gray-50">
              <td class="px-4 py-2 text-center">3</td>
              <td class="px-4 py-2">My snack</td>
              <td class="px-4 py-2">RT 02 RW 01</td>
              <td class="px-4 py-2">Maemunah</td>
              <td class="px-4 py-2 text-center">2023</td>
              <td class="px-4 py-2">Snack catering</td>
              <td class="px-4 py-2 text-center">Belum</td>
              <td class="px-4 py-2 text-center">500 ribu</td>
              <td class="px-4 py-2 text-center">1 orang, jika pesanan lebih dari 100 bisa ambil orang</td>
              <td class="px-4 py-2">Se-desa Tlaga</td>
              <td class="px-4 py-2 text-center">WhatsApp</td>
            </tr>
            <tr class="border-b hover:bg-gray-50">
              <td class="px-4 py-2 text-center">4</td>
              <td class="px-4 py-2">Bor Sumur Pom Warung</td>
              <td class="px-4 py-2">RT 03 RW 01</td>
              <td class="px-4 py-2">Toni</td>
              <td class="px-4 py-2 text-center">2010</td>
              <td class="px-4 py-2">Kelontong</td>
              <td class="px-4 py-2 text-center">Belum</td>
              <td class="px-4 py-2 text-center">500 ribu</td>
              <td class="px-4 py-2 text-center">1 orang</td>
              <td class="px-4 py-2">Sekitar rumah</td>
              <td class="px-4 py-2 text-center">WhatsApp, Facebook</td>
            </tr>
            <tr class="border-b hover:bg-gray-50">
              <td class="px-4 py-2 text-center">5</td>
              <td class="px-4 py-2">Toko Gino</td>
              <td class="px-4 py-2">RT 03 RW 01</td>
              <td class="px-4 py-2">Sugino</td>
              <td class="px-4 py-2 text-center">2016</td>
              <td class="px-4 py-2">Kelontong</td>
              <td class="px-4 py-2 text-center">Udah, 2017</td>
              <td class="px-4 py-2 text-center">Lebih dari 1 juta</td>
              <td class="px-4 py-2 text-center">4 orang</td>
              <td class="px-4 py-2">Sekitar rumah</td>
              <td class="px-4 py-2 text-center">Belum</td>
            </tr>
            <tr class="border-b hover:bg-gray-50">
              <td class="px-4 py-2 text-center">6</td>
              <td class="px-4 py-2"></td>
              <td class="px-4 py-2">RT 01 RW 02</td>
              <td class="px-4 py-2">Rusilah</td>
              <td class="px-4 py-2 text-center">2022</td>
              <td class="px-4 py-2">Sembako, rujak, dawet, rokok, tempe</td>
              <td class="px-4 py-2 text-center">Belum</td>
              <td class="px-4 py-2 text-center">1 juta</td>
              <td class="px-4 py-2 text-center">1 orang</td>
              <td class="px-4 py-2">Sekitaran rt 01 saja, kadang keliling</td>
              <td class="px-4 py-2 text-center">Belum</td>
            </tr>
            <tr class="border-b hover:bg-gray-50">
              <td class="px-4 py-2 text-center">7</td>
              <td class="px-4 py-2">Kapulaga Pak Syahrul</td>
              <td class="px-4 py-2">RT 01 RW 02</td>
              <td class="px-4 py-2">Syahrul Anwar</td>
              <td class="px-4 py-2 text-center">2014</td>
              <td class="px-4 py-2">Kapulaga, sembako</td>
              <td class="px-4 py-2 text-center">Belum</td>
              <td class="px-4 py-2 text-center">Sekitar 500 ribu</td>
              <td class="px-4 py-2 text-center">Sekeluarga</td>
              <td class="px-4 py-2">Ajibarang dan cilongok</td>
              <td class="px-4 py-2 text-center">Belum</td>
            </tr>
            <tr class="border-b hover:bg-gray-50">
              <td class="px-4 py-2 text-center">8</td>
              <td class="px-4 py-2">Jamu bawang dayak</td>
              <td class="px-4 py-2">RT 02 RW 02</td>
              <td class="px-4 py-2">Heri Pramono</td>
              <td class="px-4 py-2 text-center">2018</td>
              <td class="px-4 py-2">Jamu</td>
              <td class="px-4 py-2 text-center">Sudah</td>
              <td class="px-4 py-2 text-center">500 ribu</td>
              <td class="px-4 py-2 text-center">1 orang</td>
              <td class="px-4 py-2">Cilacap dan sekitaran</td>
              <td class="px-4 py-2 text-center">Facebook, Instagram, WhatsApp</td>
            </tr>
            <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2 text-center">9</td>
                <td class="px-4 py-2">Toko Ratmiyah</td>
                <td class="px-4 py-2">RT 01 RW 03</td>
                <td class="px-4 py-2">Ratmiyah</td>
                <td class="px-4 py-2 text-center">2000</td>
                <td class="px-4 py-2">Krupuk, gilingan jagung/padi, toko kelontong</td>
                <td class="px-4 py-2 text-center">Udah, 2020</td>
                <td class="px-4 py-2 text-center">Sekitar 18 juta</td>
                <td class="px-4 py-2 text-center">2 orang</td>
                <td class="px-4 py-2">Sekitaran Gumelar (warung-warung, pasar pahing)</td>
                <td class="px-4 py-2 text-center">Belum</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2 text-center">10</td>
                <td class="px-4 py-2">Peternakan Findri Farm</td>
                <td class="px-4 py-2">RT 01 RW 03</td>
                <td class="px-4 py-2">Findri Sumarti</td>
                <td class="px-4 py-2 text-center">2018</td>
                <td class="px-4 py-2">Ayam Boiler</td>
                <td class="px-4 py-2 text-center">NIB, 2019</td>
                <td class="px-4 py-2 text-center">Sekitar 45 juta</td>
                <td class="px-4 py-2 text-center">3 orang</td>
                <td class="px-4 py-2">Kemitraan (PT), Banyumas, Jawa Timur</td>
                <td class="px-4 py-2 text-center">Belum</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2 text-center">11</td>
                <td class="px-4 py-2">Sate Madura Bening Embun</td>
                <td class="px-4 py-2">RT 02 RW 03</td>
                <td class="px-4 py-2">Wasum Wahyudi</td>
                <td class="px-4 py-2 text-center">2019</td>
                <td class="px-4 py-2">Sate Madura</td>
                <td class="px-4 py-2 text-center">Belum</td>
                <td class="px-4 py-2 text-center">Sekitar 150 ribu per pesanan</td>
                <td class="px-4 py-2 text-center">3 orang</td>
                <td class="px-4 py-2">Sekitar kecamatan Gumelar, Sidamulya</td>
                <td class="px-4 py-2 text-center">Udah</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2 text-center">12</td>
                <td class="px-4 py-2">Tani Suswadi</td>
                <td class="px-4 py-2">RT 02 RW 03</td>
                <td class="px-4 py-2">Suswadi</td>
                <td class="px-4 py-2 text-center">2022</td>
                <td class="px-4 py-2">Ternak ayam dan kambing, bambu, jeruk, garam</td>
                <td class="px-4 py-2 text-center">Belum</td>
                <td class="px-4 py-2 text-center">Ayam (200 ribu), bambu (200 x 15 ribu)</td>
                <td class="px-4 py-2 text-center">2 orang</td>
                <td class="px-4 py-2">Gumelar, Karangpucung, Purwokerto, Cilongok, Bumiayu</td>
                <td class="px-4 py-2 text-center">Belum</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2 text-center">13</td>
                <td class="px-4 py-2"></td>
                <td class="px-4 py-2">RT 03 RW 03</td>
                <td class="px-4 py-2">Tarsino</td>
                <td class="px-4 py-2 text-center">2010</td>
                <td class="px-4 py-2">Kere (Tirai bambu)</td>
                <td class="px-4 py-2 text-center">Belum</td>
                <td class="px-4 py-2 text-center">Kere 140 ribu per meter2, tulis papan 150 ribu per papan, 4 kali sebulan</td>
                <td class="px-4 py-2 text-center">1 orang</td>
                <td class="px-4 py-2">Banyumas</td>
                <td class="px-4 py-2 text-center">Belum</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2 text-center">14</td>
                <td class="px-4 py-2">Riwoto</td>
                <td class="px-4 py-2">RT 04 RW 03</td>
                <td class="px-4 py-2">Riwoto</td>
                <td class="px-4 py-2 text-center">2019</td>
                <td class="px-4 py-2">Rongsokan/Barang bekas</td>
                <td class="px-4 py-2 text-center">Belum</td>
                <td class="px-4 py-2 text-center">Sekitar 3 juta</td>
                <td class="px-4 py-2 text-center">1 orang</td>
                <td class="px-4 py-2">Pacurendang, Ajibarang</td>
                <td class="px-4 py-2 text-center">Belum</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2 text-center">15</td>
                <td class="px-4 py-2">Sutinem</td>
                <td class="px-4 py-2">RT 04 RW 03</td>
                <td class="px-4 py-2">Sutinem</td>
                <td class="px-4 py-2 text-center">1997</td>
                <td class="px-4 py-2">Kue basah, lauk mateng, jajan pasar</td>
                <td class="px-4 py-2 text-center">Belum</td>
                <td class="px-4 py-2 text-center">3 juta</td>
                <td class="px-4 py-2 text-center">4 orang</td>
                <td class="px-4 py-2">Cilacap</td>
                <td class="px-4 py-2 text-center">WhatsApp</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2 text-center">16</td>
                <td class="px-4 py-2">Jamur Tiram</td>
                <td class="px-4 py-2">RT 01 RW 04</td>
                <td class="px-4 py-2">Wiyono</td>
                <td class="px-4 py-2 text-center">2022</td>
                <td class="px-4 py-2">Jamur</td>
                <td class="px-4 py-2 text-center">Belum</td>
                <td class="px-4 py-2 text-center"></td>
                <td class="px-4 py-2 text-center">1 orang</td>
                <td class="px-4 py-2">RW 04 dan pasar</td>
                <td class="px-4 py-2 text-center">Belum</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2 text-center">17</td>
                <td class="px-4 py-2">Air Minum Isi Ulang</td>
                <td class="px-4 py-2">RT 01 RW 04</td>
                <td class="px-4 py-2">Haryanto</td>
                <td class="px-4 py-2 text-center">2021</td>
                <td class="px-4 py-2">Air Minum</td>
                <td class="px-4 py-2 text-center">Belum</td>
                <td class="px-4 py-2 text-center">2 - 3 juta</td>
                <td class="px-4 py-2 text-center">4 orang</td>
                <td class="px-4 py-2">RW 3, 4, 5</td>
                <td class="px-4 py-2 text-center">WhatsApp</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2 text-center">18</td>
                <td class="px-4 py-2">Zhira Catering</td>
                <td class="px-4 py-2">RT 01 RW 04</td>
                <td class="px-4 py-2">Nurhaningsih</td>
                <td class="px-4 py-2 text-center">2019</td>
                <td class="px-4 py-2">Lauk pauk lebih dari 1</td>
                <td class="px-4 py-2 text-center">Belum</td>
                <td class="px-4 py-2 text-center">2 - 4 juta</td>
                <td class="px-4 py-2 text-center">3 orang</td>
                <td class="px-4 py-2">Renggong, Sumber, Sekolah, Se-kecamatan Gumelar</td>
                <td class="px-4 py-2 text-center">WhatsApp</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2 text-center">19</td>
                <td class="px-4 py-2">Warung Kelontong</td>
                <td class="px-4 py-2">RT 02 RW 04</td>
                <td class="px-4 py-2">Dasmoyo</td>
                <td class="px-4 py-2 text-center">2000</td>
                <td class="px-4 py-2">Sembako</td>
                <td class="px-4 py-2 text-center">Belum</td>
                <td class="px-4 py-2 text-center">1 - 1,5 juta</td>
                <td class="px-4 py-2 text-center">2 orang (suami istri)</td>
                <td class="px-4 py-2">Sekitar rumah</td>
                <td class="px-4 py-2 text-center">Belum</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2 text-center">20</td>
                <td class="px-4 py-2">Kue Kering</td>
                <td class="px-4 py-2">RT 03 RW 04</td>
                <td class="px-4 py-2">Taswo</td>
                <td class="px-4 py-2 text-center">2020</td>
                <td class="px-4 py-2">Kue Semprong</td>
                <td class="px-4 py-2 text-center">Belum</td>
                <td class="px-4 py-2 text-center"></td>
                <td class="px-4 py-2 text-center">Keluarga</td>
                <td class="px-4 py-2">Toko Gino, Pasar Gumelar</td>
                <td class="px-4 py-2 text-center">Belum</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2 text-center">21</td>
                <td class="px-4 py-2">Wurgiyanti</td>
                <td class="px-4 py-2">RT 03 RW 04</td>
                <td class="px-4 py-2">Wurgiyanti</td>
                <td class="px-4 py-2 text-center">2003</td>
                <td class="px-4 py-2">Baju dan perabotan</td>
                <td class="px-4 py-2 text-center">Belum</td>
                <td class="px-4 py-2 text-center"></td>
                <td class="px-4 py-2 text-center">1 orang</td>
                <td class="px-4 py-2">RW 1-7</td>
                <td class="px-4 py-2 text-center">Belum</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2 text-center">22</td>
                <td class="px-4 py-2">Lia snack</td>
                <td class="px-4 py-2">RT 01 RW 05</td>
                <td class="px-4 py-2">Karsinem</td>
                <td class="px-4 py-2 text-center">2008</td>
                <td class="px-4 py-2">Kue basah</td>
                <td class="px-4 py-2 text-center">Belum</td>
                <td class="px-4 py-2 text-center">500 ribu</td>
                <td class="px-4 py-2 text-center">3 orang</td>
                <td class="px-4 py-2">Sekitar rumah</td>
                <td class="px-4 py-2 text-center">WhatsApp</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2 text-center">23</td>
                <td class="px-4 py-2">Warung Wairah</td>
                <td class="px-4 py-2">RT 03 RW 05</td>
                <td class="px-4 py-2">Wairah</td>
                <td class="px-4 py-2 text-center">1992</td>
                <td class="px-4 py-2">Jajan keripik pisang talas</td>
                <td class="px-4 py-2 text-center">Belum</td>
                <td class="px-4 py-2 text-center">500 ribu</td>
                <td class="px-4 py-2 text-center">1 orang</td>
                <td class="px-4 py-2">Sekitar rumah, luar desa juga</td>
                <td class="px-4 py-2 text-center">Belum</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2 text-center">24</td>
                <td class="px-4 py-2">Warung Sheza</td>
                <td class="px-4 py-2">RT 02 RW 05</td>
                <td class="px-4 py-2">Meliawati</td>
                <td class="px-4 py-2 text-center">2017</td>
                <td class="px-4 py-2">Kelontong dan tahu aci</td>
                <td class="px-4 py-2 text-center">Belum</td>
                <td class="px-4 py-2 text-center">500 ribu</td>
                <td class="px-4 py-2 text-center">1 orang</td>
                <td class="px-4 py-2">Sekitar Gumelar</td>
                <td class="px-4 py-2 text-center">WhatsApp</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2 text-center">25</td>
                <td class="px-4 py-2">Sriping pisang madu (aneka usaha mama elis)</td>
                <td class="px-4 py-2">RT 03 RW 05</td>
                <td class="px-4 py-2">Waisah</td>
                <td class="px-4 py-2 text-center">2019</td>
                <td class="px-4 py-2">Sriping</td>
                <td class="px-4 py-2 text-center">Udah, 2020</td>
                <td class="px-4 py-2 text-center">500 ribu</td>
                <td class="px-4 py-2 text-center">1 orang</td>
                <td class="px-4 py-2">Warung sekitar, pesanan, luar Ajibarang</td>
                <td class="px-4 py-2 text-center">WhatsApp</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2 text-center">26</td>
                <td class="px-4 py-2">Cikal Tas</td>
                <td class="px-4 py-2">RT 02 RW 06</td>
                <td class="px-4 py-2">Winoto</td>
                <td class="px-4 py-2 text-center">2013</td>
                <td class="px-4 py-2">Tas, dompet, souvenir</td>
                <td class="px-4 py-2 text-center">Udah</td>
                <td class="px-4 py-2 text-center">Sekitar 150 juta</td>
                <td class="px-4 py-2 text-center">15 orang</td>
                <td class="px-4 py-2">Gumelar, souvenir seluruh Indonesia</td>
                <td class="px-4 py-2 text-center">Instagram</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2 text-center">27</td>
                <td class="px-4 py-2">Jamur Kanza</td>
                <td class="px-4 py-2">RT 04 RW 06</td>
                <td class="px-4 py-2">Sutar</td>
                <td class="px-4 py-2 text-center">2020</td>
                <td class="px-4 py-2">Jamur tiram</td>
                <td class="px-4 py-2 text-center">NIB, 2020</td>
                <td class="px-4 py-2 text-center">Sekitar 1 juta</td>
                <td class="px-4 py-2 text-center">2 orang (suami istri)</td>
                <td class="px-4 py-2">Produksi saja terus disalurkan sama pengepul ke Ajibarang</td>
                <td class="px-4 py-2 text-center">Belum</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2 text-center">28</td>
                <td class="px-4 py-2">Warsiti</td>
                <td class="px-4 py-2">RT 01 RW 07</td>
                <td class="px-4 py-2">Warsiti</td>
                <td class="px-4 py-2 text-center">2003</td>
                <td class="px-4 py-2">Mendoan, lontong, sembako</td>
                <td class="px-4 py-2 text-center">Belum</td>
                <td class="px-4 py-2 text-center"></td>
                <td class="px-4 py-2 text-center">1 orang</td>
                <td class="px-4 py-2">Sekitar rumah</td>
                <td class="px-4 py-2 text-center">Belum</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2 text-center">29</td>
                <td class="px-4 py-2">Warung Seblak Mama Difa</td>
                <td class="px-4 py-2">RT 03 RW 07</td>
                <td class="px-4 py-2">Lita</td>
                <td class="px-4 py-2 text-center">2024</td>
                <td class="px-4 py-2">Seblak, klo puasa jual nasi bakar sama bakso</td>
                <td class="px-4 py-2 text-center">Belum</td>
                <td class="px-4 py-2 text-center">1 bulan sekitar 200 porsi</td>
                <td class="px-4 py-2 text-center">1 orang</td>
                <td class="px-4 py-2">Sekitar rumah</td>
                <td class="px-4 py-2 text-center">WhatsApp</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2 text-center">30</td>
                <td class="px-4 py-2">Ayam potong Erlangga</td>
                <td class="px-4 py-2">RT 03 RW 07</td>
                <td class="px-4 py-2">Jumilah</td>
                <td class="px-4 py-2 text-center">2022</td>
                <td class="px-4 py-2">Ayam potong</td>
                <td class="px-4 py-2 text-center">Belum</td>
                <td class="px-4 py-2 text-center"></td>
                <td class="px-4 py-2 text-center">1 orang</td>
                <td class="px-4 py-2">Tlaga, Gumelar, Cirebah</td>
                <td class="px-4 py-2 text-center">WhatsApp</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2 text-center">31</td>
                <td class="px-4 py-2">Tuswo</td>
                <td class="px-4 py-2">RT 03 RW 07</td>
                <td class="px-4 py-2">Tuswo</td>
                <td class="px-4 py-2 text-center">2000</td>
                <td class="px-4 py-2">Tampah, Tampir, Widig</td>
                <td class="px-4 py-2 text-center">Belum</td>
                <td class="px-4 py-2 text-center"></td>
                <td class="px-4 py-2 text-center">1 orang</td>
                <td class="px-4 py-2">Sekitar rumah</td>
                <td class="px-4 py-2 text-center">Belum</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2 text-center">32</td>
                <td class="px-4 py-2">El Mazda Kripik</td>
                <td class="px-4 py-2">RT 01 RW 08</td>
                <td class="px-4 py-2">Supiyah</td>
                <td class="px-4 py-2 text-center">2004</td>
                <td class="px-4 py-2">Kripik atau makanan</td>
                <td class="px-4 py-2 text-center">Belum</td>
                <td class="px-4 py-2 text-center">1 juta</td>
                <td class="px-4 py-2 text-center">1 orang</td>
                <td class="px-4 py-2">Sekitar Desa Tlaga, Legok, Plumbungan, warung sekitar</td>
                <td class="px-4 py-2 text-center">Belum</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2 text-center">33</td>
                <td class="px-4 py-2">Serabi Legok/Kembar</td>
                <td class="px-4 py-2">RT 01 RW 08</td>
                <td class="px-4 py-2">Kusmiyati</td>
                <td class="px-4 py-2 text-center">2005</td>
                <td class="px-4 py-2">Serabi/kue/makanan</td>
                <td class="px-4 py-2 text-center">Belum</td>
                <td class="px-4 py-2 text-center">1,5 juta</td>
                <td class="px-4 py-2 text-center">2 orang (suami istri)</td>
                <td class="px-4 py-2">Gumelar, pesanan</td>
                <td class="px-4 py-2 text-center">Belum</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2 text-center">34</td>
                <td class="px-4 py-2">Warung Abel</td>
                <td class="px-4 py-2">RT 02 RW 08</td>
                <td class="px-4 py-2">Kalimah</td>
                <td class="px-4 py-2 text-center">2017</td>
                <td class="px-4 py-2">Sayur, gas, dll</td>
                <td class="px-4 py-2 text-center">Belum</td>
                <td class="px-4 py-2 text-center">1 juta</td>
                <td class="px-4 py-2 text-center">1 orang</td>
                <td class="px-4 py-2">Tlaga</td>
                <td class="px-4 py-2 text-center">Belum</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2 text-center">35</td>
                <td class="px-4 py-2">Pati Suparno</td>
                <td class="px-4 py-2">RT 02 RW 08</td>
                <td class="px-4 py-2">Suparno</td>
                <td class="px-4 py-2 text-center">1992</td>
                <td class="px-4 py-2">Pati</td>
                <td class="px-4 py-2 text-center">Belum</td>
                <td class="px-4 py-2 text-center">500 ribu</td>
                <td class="px-4 py-2 text-center">1 orang</td>
                <td class="px-4 py-2">Dulu ke pasar, sekarang produksi buat dijual ke orang di RT 3</td>
                <td class="px-4 py-2 text-center">Belum</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2 text-center">36</td>
                <td class="px-4 py-2">Jamur</td>
                <td class="px-4 py-2">RT 03 RW 08</td>
                <td class="px-4 py-2">Bedjo</td>
                <td class="px-4 py-2 text-center">2020</td>
                <td class="px-4 py-2">Jamur</td>
                <td class="px-4 py-2 text-center">Belum</td>
                <td class="px-4 py-2 text-center">5 juta</td>
                <td class="px-4 py-2 text-center">3 orang</td>
                <td class="px-4 py-2">Produksi saja</td>
                <td class="px-4 py-2 text-center">Belum</td>
              </tr>
              <tr class="border-b hover:bg-gray-50">
                <td class="px-4 py-2 text-center">37</td>
                <td class="px-4 py-2">Tarmo</td>
                <td class="px-4 py-2">RT 04 RW 08</td>
                <td class="px-4 py-2">Tarmo</td>
                <td class="px-4 py-2 text-center">2022</td>
                <td class="px-4 py-2">Tempe Mendoan</td>
                <td class="px-4 py-2 text-center">Belum</td>
                <td class="px-4 py-2 text-center"></td>
                <td class="px-4 py-2 text-center"></td>
                <td class="px-4 py-2">-</td>
                <td class="px-4 py-2 text-center">-</td>
              </tr>                                                        
          </tbody>
        </table>
      </div>
      
    
    <footer class="bg-gray-200 py-8 px-4 shadow-md z-10 flex justify-center items-center dark:bg-slate-900 dark:text-white mt-5">
        <div class="text-sm text-gray-600 dark:text-gray-300 text-center">
          Copyright © 2024 Desa Tlaga.
        </div>
      </footer>
</body>
</html>
