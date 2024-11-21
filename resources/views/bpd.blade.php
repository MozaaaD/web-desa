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
    <title>BPD</title>
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

    <div class="container mx-auto py-12 px-6 mt-20">
        <h2 class="text-3xl font-bold text-yellow-600 mb-4">BPD</h2>
        <p class="text-lg text-gray-600 leading-relaxed mb-6 pl-8 border-l-4 border-yellow-600">
          Badan Permusyawaratan Desa (BPD) ialah lembaga perwakilan yang ada di tingkat desa dan berfungsi sebagai mitra pemerintah desa dalam penyelenggaraan pemerintahan desa. BPD di Desa Tlaga bertugas untuk menampung dan menyalurkan aspirasi masyarakat desa, merumuskan kebijakan desa bersama kepala desa, serta melakukan pengawasan terhadap kinerja pemerintah desa.

          Dengan adanya BPD, diharapkan pemerintahan Desa Tlaga dapat berjalan dengan lebih demokratis, transparan, dan akuntabel. BPD juga diharapkan dapat menjadi lembaga yang efektif dalam memperjuangkan kepentingan masyarakat desa serta meningkatkan partisipasi masyarakat dalam pembangunan desa.
        </p>
    </div>

    <div class="container mx-auto py-10">
      <h2 class="text-2xl font-semibold text-center mb-8">Daftar Anggota Badan Permusyawaratan Desa (BPD) Tlaga</h2>
      <p class="text-center mb-6">Pemerintah Kabupaten Banyumas<br>Kecamatan Gumelar<br>Desa Tlaga<br>Alamat: Jl. Raya Tlaga No. 06, Kode Pos 53165</p>
      
      <p class="text-center mb-8">Masa Bakti 2014 - 2019</p>
      
      <div class="container mx-auto py-10">
        <h2 class="text-2xl font-semibold text-center mb-8">Daftar Anggota Badan Permusyawaratan Desa (BPD) Tlaga</h2>
        <p class="text-center mb-6">Pemerintah Kabupaten Banyumas<br>Kecamatan Gumelar<br>Desa Tlaga<br>Alamat: Jl. Raya Tlaga No. 06, Kode Pos 53165</p>
        
        <p class="text-center mb-8">Masa Bakti 2014 - 2019</p>
        
        <table class="min-w-full bg-white border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left">No</th>
                    <th class="px-4 py-2 text-left">Nama</th>
                    <th class="px-4 py-2 text-left">Tempat/Tgl. Lahir</th>
                    <th class="px-4 py-2 text-left">Pekerjaan</th>
                    <th class="px-4 py-2 text-left">Alamat</th>
                    <th class="px-4 py-2 text-left">Agama</th>
                    <th class="px-4 py-2 text-left">Pendidikan</th>
                    <th class="px-4 py-2 text-left">Unsur</th>
                    <th class="px-4 py-2 text-left">Jabatan</th>
                    <th class="px-4 py-2 text-left">Keterangan</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <tr>
                    <td class="px-4 py-3 border-b">1</td>
                    <td class="px-4 py-3 border-b">SUJADI, S.Pd</td>
                    <td class="px-4 py-3 border-b">Bms, 05-09-1963</td>
                    <td class="px-4 py-3 border-b">Guru</td>
                    <td class="px-4 py-3 border-b">RT 01/05</td>
                    <td class="px-4 py-3 border-b">Islam</td>
                    <td class="px-4 py-3 border-b">S1</td>
                    <td class="px-4 py-3 border-b">Profesi</td>
                    <td class="px-4 py-3 border-b">Ketua</td>
                    <td class="px-4 py-3 border-b"></td>
                </tr>
                <tr>
                    <td class="px-4 py-3 border-b">2</td>
                    <td class="px-4 py-3 border-b">KAMSO</td>
                    <td class="px-4 py-3 border-b">Bms, 05-04-1969</td>
                    <td class="px-4 py-3 border-b">Karyawan Perhutani</td>
                    <td class="px-4 py-3 border-b">RT 03/03</td>
                    <td class="px-4 py-3 border-b">Islam</td>
                    <td class="px-4 py-3 border-b">SMA</td>
                    <td class="px-4 py-3 border-b">Profesi</td>
                    <td class="px-4 py-3 border-b">Wakil Ketua</td>
                    <td class="px-4 py-3 border-b"></td>
                </tr>
                <tr>
                    <td class="px-4 py-3 border-b">3</td>
                    <td class="px-4 py-3 border-b">UJI PRIYATININGSIH, S.Pd</td>
                    <td class="px-4 py-3 border-b">Bms, 27-09-1982</td>
                    <td class="px-4 py-3 border-b">Mengurus Rumah Tangga</td>
                    <td class="px-4 py-3 border-b">RT 03/07</td>
                    <td class="px-4 py-3 border-b">Islam</td>
                    <td class="px-4 py-3 border-b">S1</td>
                    <td class="px-4 py-3 border-b">Unsur RW</td>
                    <td class="px-4 py-3 border-b">Sekretaris</td>
                    <td class="px-4 py-3 border-b"></td>
                </tr>
                <tr>
                    <td class="px-4 py-3 border-b">4</td>
                    <td class="px-4 py-3 border-b">DULKISAM</td>
                    <td class="px-4 py-3 border-b">Bms, 21-04-1957</td>
                    <td class="px-4 py-3 border-b">Tani</td>
                    <td class="px-4 py-3 border-b">RT 05/07</td>
                    <td class="px-4 py-3 border-b">Islam</td>
                    <td class="px-4 py-3 border-b">SD</td>
                    <td class="px-4 py-3 border-b">Tokoh Masyarakat</td>
                    <td class="px-4 py-3 border-b">Kabid. Pemerintahan</td>
                    <td class="px-4 py-3 border-b"></td>
                </tr>
                <tr>
                    <td class="px-4 py-3 border-b">5</td>
                    <td class="px-4 py-3 border-b">DIKMAN</td>
                    <td class="px-4 py-3 border-b">Bms, 12-01-1968</td>
                    <td class="px-4 py-3 border-b">Tani</td>
                    <td class="px-4 py-3 border-b">RT 04/08</td>
                    <td class="px-4 py-3 border-b">Islam</td>
                    <td class="px-4 py-3 border-b">SD</td>
                    <td class="px-4 py-3 border-b">Tokoh Agama</td>
                    <td class="px-4 py-3 border-b">Kabid Pembangunan</td>
                    <td class="px-4 py-3 border-b"></td>
                </tr>
                <tr>
                    <td class="px-4 py-3 border-b">6</td>
                    <td class="px-4 py-3 border-b">SUKAM</td>
                    <td class="px-4 py-3 border-b">Bms, 27-09-1971</td>
                    <td class="px-4 py-3 border-b">Tani</td>
                    <td class="px-4 py-3 border-b">RT 03/04</td>
                    <td class="px-4 py-3 border-b">Islam</td>
                    <td class="px-4 py-3 border-b">SMP</td>
                    <td class="px-4 py-3 border-b">Tokoh Agama</td>
                    <td class="px-4 py-3 border-b">Kabid. Kesda</td>
                    <td class="px-4 py-3 border-b"></td>
                </tr>
                <tr>
                    <td class="px-4 py-3 border-b">7</td>
                    <td class="px-4 py-3 border-b">NAKIM</td>
                    <td class="px-4 py-3 border-b">Bms, 29-05-1974</td>
                    <td class="px-4 py-3 border-b">Swasta</td>
                    <td class="px-4 py-3 border-b">RT 03/01</td>
                    <td class="px-4 py-3 border-b">Islam</td>
                    <td class="px-4 py-3 border-b">SD</td>
                    <td class="px-4 py-3 border-b">Tokoh Masyarakat</td>
                    <td class="px-4 py-3 border-b">Panitia Anggaran</td>
                    <td class="px-4 py-3 border-b"></td>
                </tr>
                <tr>
                    <td class="px-4 py-3 border-b">8</td>
                    <td class="px-4 py-3 border-b">DARISMAN</td>
                    <td class="px-4 py-3 border-b">Bms, 25-06-1980</td>
                    <td class="px-4 py-3 border-b">Tani</td>
                    <td class="px-4 py-3 border-b">RT 05/06</td>
                    <td class="px-4 py-3 border-b">Islam</td>
                    <td class="px-4 py-3 border-b">SMP</td>
                    <td class="px-4 py-3 border-b">Tokoh Masyarakat</td>
                    <td class="px-4 py-3 border-b">Panitia Khusus</td>
                    <td class="px-4 py-3 border-b"></td>
                </tr>
                <tr>
                    <td class="px-4 py-3 border-b">9</td>
                    <td class="px-4 py-3 border-b">SINGUN EDI</td>
                    <td class="px-4 py-3 border-b">Bms, 05-10-1955</td>
                    <td class="px-4 py-3 border-b">Karyawan Perhutani</td>
                    <td class="px-4 py-3 border-b">RT 01/02</td>
                    <td class="px-4 py-3 border-b">Islam</td>
                    <td class="px-4 py-3 border-b">SMP</td>
                    <td class="px-4 py-3 border-b">Unsur RW</td>
                    <td class="px-4 py-3 border-b">Pembantu Umum</td>
                    <td class="px-4 py-3 border-b"></td>
                </tr>
            </tbody>
        </table>
    
        <p class="text-center mt-10">Tlaga, 22 Januari 2014</p>
        <p class="text-center mt-4">Kepala Desa Tlaga</p>
    </div>

  </div>
  
    
    
    <footer class="bg-gray-200 py-8 px-4 shadow-md z-10 flex justify-center items-center dark:bg-slate-900 dark:text-white mt-5">
        <div class="text-sm text-gray-600 dark:text-gray-300 text-center">
          Copyright © 2024 Desa Tlaga.
        </div>
      </footer>
</body>
</html>
