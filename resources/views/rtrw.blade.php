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
    <title>RT & RW</title>
</head>
<body>
    <nav class="bg-white h-24 px-16 flex items-center text-black z-10 w-full">
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

    <div class="container mx-auto py-12 px-6 mt-5">
        <h2 class="text-3xl font-bold text-yellow-600 mb-4">RT & RW</h2>
        {{-- <p class="text-lg text-gray-600 leading-relaxed mb-6 pl-8 border-l-4 border-yellow-600">
          Karang Taruna adalah organisasi kepemudaan di tingkat desa yang bertujuan untuk mengembangkan potensi pemuda dan pemudi dalam rangka meningkatkan kesejahteraan sosial masyarakat. Karang Taruna Desa Tlaga bergerak di bidang sosial, budaya, ekonomi, dan lingkungan, serta berfungsi sebagai wadah pengembangan generasi muda agar dapat berperan aktif dalam pembangunan masyarakat.
        </p> --}}
    </div>

    <div class="container mx-auto py-10 px-6">
    <h2 class="text-2xl font-semibold text-center mb-8">Daftar RT/RW</h2>
    <p class="text-center mb-8">Halaman Daftar RT/RW</p>
  
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
      <!-- Baris pertama (RW 1 - RW 4) -->
      <div class="bg-white border border-gray-300 rounded-lg shadow-md w-full flex flex-col justify-center items-center">
          <h3 class="text-xl font-semibold text-center py-4">RW 001</h3>
          <table class="min-w-full text-sm">
              <thead class="bg-gray-100">
                  <tr class="text-center">
                      <th class="px-4 py-2">No</th>
                      <th class="px-4 py-2">RT</th>
                      <th class="px-4 py-2">Jumlah Penduduk</th>
                  </tr>
              </thead>
              <tbody class="text-gray-700">
                  <tr><td class="px-4 py-3 border-b text-center">1</td><td class="px-4 py-3 border-b text-center">RT 001</td><td class="px-4 py-3 border-b text-center">177</td></tr>
                  <tr><td class="px-4 py-3 border-b text-center">2</td><td class="px-4 py-3 border-b text-center">RT 002</td><td class="px-4 py-3 border-b text-center">128</td></tr>
                  <tr><td class="px-4 py-3 border-b text-center">3</td><td class="px-4 py-3 border-b text-center">RT 003</td><td class="px-4 py-3 border-b text-center">195</td></tr>
                  <tr><td class="px-4 py-3 border-b text-center font-bold">Jumlah</td><td class="px-4 py-3 border-b text-center" colspan="2">500</td></tr>
              </tbody>
          </table>
      </div>
  
      <div class="bg-white border border-gray-300 rounded-lg shadow-md w-full flex flex-col justify-center items-center">
          <h3 class="text-xl font-semibold text-center py-4">RW 002</h3>
          <table class="min-w-full text-sm">
              <thead class="bg-gray-100">
                  <tr class="text-center">
                      <th class="px-4 py-2">No</th>
                      <th class="px-4 py-2">RT</th>
                      <th class="px-4 py-2">Jumlah Penduduk</th>
                  </tr>
              </thead>
              <tbody class="text-gray-700">
                  <tr><td class="px-4 py-3 border-b text-center">1</td><td class="px-4 py-3 border-b text-center">RT 001</td><td class="px-4 py-3 border-b text-center">187</td></tr>
                  <tr><td class="px-4 py-3 border-b text-center">2</td><td class="px-4 py-3 border-b text-center">RT 002</td><td class="px-4 py-3 border-b text-center">87</td></tr>
                  <tr><td class="px-4 py-3 border-b text-center">3</td><td class="px-4 py-3 border-b text-center">RT 003</td><td class="px-4 py-3 border-b text-center">121</td></tr>
                  <tr><td class="px-4 py-3 border-b text-center font-bold">Jumlah</td><td class="px-4 py-3 border-b text-center" colspan="2">395</td></tr>
              </tbody>
          </table>
      </div>
  
      <div class="bg-white border border-gray-300 rounded-lg shadow-md w-full flex flex-col justify-center items-center">
          <h3 class="text-xl font-semibold text-center py-4">RW 003</h3>
          <table class="min-w-full text-sm">
              <thead class="bg-gray-100">
                  <tr class="text-center">
                      <th class="px-4 py-2">No</th>
                      <th class="px-4 py-2">RT</th>
                      <th class="px-4 py-2">Jumlah Penduduk</th>
                  </tr>
              </thead>
              <tbody class="text-gray-700">
                  <tr><td class="px-4 py-3 border-b text-center">1</td><td class="px-4 py-3 border-b text-center">RT 001</td><td class="px-4 py-3 border-b text-center">70</td></tr>
                  <tr><td class="px-4 py-3 border-b text-center">2</td><td class="px-4 py-3 border-b text-center">RT 002</td><td class="px-4 py-3 border-b text-center">152</td></tr>
                  <tr><td class="px-4 py-3 border-b text-center">3</td><td class="px-4 py-3 border-b text-center">RT 003</td><td class="px-4 py-3 border-b text-center">175</td></tr>
                  <tr><td class="px-4 py-3 border-b text-center">4</td><td class="px-4 py-3 border-b text-center">RT 004</td><td class="px-4 py-3 border-b text-center">118</td></tr>
                  <tr><td class="px-4 py-3 border-b text-center font-bold">Jumlah</td><td class="px-4 py-3 border-b text-center" colspan="2">515</td></tr>
              </tbody>
          </table>
      </div>
  
      <div class="bg-white border border-gray-300 rounded-lg shadow-md w-full flex flex-col justify-center items-center">
          <h3 class="text-xl font-semibold text-center py-4">RW 004</h3>
          <table class="min-w-full text-sm">
              <thead class="bg-gray-100">
                  <tr class="text-center">
                      <th class="px-4 py-2">No</th>
                      <th class="px-4 py-2">RT</th>
                      <th class="px-4 py-2">Jumlah Penduduk</th>
                  </tr>
              </thead>
              <tbody class="text-gray-700">
                  <tr><td class="px-4 py-3 border-b text-center">1</td><td class="px-4 py-3 border-b text-center">RT 001</td><td class="px-4 py-3 border-b text-center">153</td></tr>
                  <tr><td class="px-4 py-3 border-b text-center">2</td><td class="px-4 py-3 border-b text-center">RT 002</td><td class="px-4 py-3 border-b text-center">100</td></tr>
                  <tr><td class="px-4 py-3 border-b text-center">3</td><td class="px-4 py-3 border-b text-center">132</td></tr>
                  <tr><td class="px-4 py-3 border-b text-center font-bold">Jumlah</td><td class="px-4 py-3 border-b text-center" colspan="2">385</td></tr>
              </tbody>
          </table>
      </div>
  
      <!-- Baris kedua (RW 5 - RW 8) -->
      <div class="bg-white border border-gray-300 rounded-lg shadow-md w-full flex flex-col justify-center items-center">
          <h3 class="text-xl font-semibold text-center py-4">RW 005</h3>
          <table class="min-w-full text-sm">
              <thead class="bg-gray-100">
                  <tr class="text-center">
                      <th class="px-4 py-2">No</th>
                      <th class="px-4 py-2">RT</th>
                      <th class="px-4 py-2">Jumlah Penduduk</th>
                  </tr>
              </thead>
              <tbody class="text-gray-700">
                  <tr><td class="px-4 py-3 border-b text-center">1</td><td class="px-4 py-3 border-b text-center">RT 001</td><td class="px-4 py-3 border-b text-center">105</td></tr>
                  <tr><td class="px-4 py-3 border-b text-center">2</td><td class="px-4 py-3 border-b text-center">157</td></tr>
                  <tr><td class="px-4 py-3 border-b text-center">3</td><td class="px-4 py-3 border-b text-center">102</td></tr>
                  <tr><td class="px-4 py-3 border-b text-center font-bold">Jumlah</td><td class="px-4 py-3 border-b text-center" colspan="2">365</td></tr>
              </tbody>
          </table>
      </div>
  
      <!-- RW 6 - RW 8 -->
      <div class="bg-white border border-gray-300 rounded-lg shadow-md w-full flex flex-col justify-center items-center">
          <h3 class="text-xl font-semibold text-center py-4">RW 006</h3>
          <table class="min-w-full text-sm">
              <thead class="bg-gray-100">
                  <tr class="text-center">
                      <th class="px-4 py-2">No</th>
                      <th class="px-4 py-2">RT</th>
                      <th class="px-4 py-2">Jumlah Penduduk</th>
                  </tr>
              </thead>
              <tbody class="text-gray-700">
                  <tr><td class="px-4 py-3 border-b text-center">1</td><td class="px-4 py-3 border-b text-center">RT 001</td><td class="px-4 py-3 border-b text-center">120</td></tr>
                  <tr><td class="px-4 py-3 border-b text-center">2</td><td class="px-4 py-3 border-b text-center">130</td></tr>
                  <tr><td class="px-4 py-3 border-b text-center">3</td><td class="px-4 py-3 border-b text-center">150</td></tr>
                  <tr><td class="px-4 py-3 border-b text-center font-bold">Jumlah</td><td class="px-4 py-3 border-b text-center" colspan="2">400</td></tr>
              </tbody>
          </table>
      </div>
  
      <div class="bg-white border border-gray-300 rounded-lg shadow-md w-full flex flex-col justify-center items-center">
          <h3 class="text-xl font-semibold text-center py-4">RW 007</h3>
          <table class="min-w-full text-sm">
              <thead class="bg-gray-100">
                  <tr class="text-center">
                      <th class="px-4 py-2">No</th>
                      <th class="px-4 py-2">RT</th>
                      <th class="px-4 py-2">Jumlah Penduduk</th>
                  </tr>
              </thead>
              <tbody class="text-gray-700">
                  <tr><td class="px-4 py-3 border-b text-center">1</td><td class="px-4 py-3 border-b text-center">RT 001</td><td class="px-4 py-3 border-b text-center">110</td></tr>
                  <tr><td class="px-4 py-3 border-b text-center">2</td><td class="px-4 py-3 border-b text-center">125</td></tr>
                  <tr><td class="px-4 py-3 border-b text-center">3</td><td class="px-4 py-3 border-b text-center">135</td></tr>
                  <tr><td class="px-4 py-3 border-b text-center font-bold">Jumlah</td><td class="px-4 py-3 border-b text-center" colspan="2">370</td></tr>
              </tbody>
          </table>
      </div>
  
      <div class="bg-white border border-gray-300 rounded-lg shadow-md w-full flex flex-col justify-center items-center">
          <h3 class="text-xl font-semibold text-center py-4">RW 008</h3>
          <table class="min-w-full text-sm">
              <thead class="bg-gray-100">
                  <tr class="text-center">
                      <th class="px-4 py-2">No</th>
                      <th class="px-4 py-2">RT</th>
                      <th class="px-4 py-2">Jumlah Penduduk</th>
                  </tr>
              </thead>
              <tbody class="text-gray-700">
                  <tr><td class="px-4 py-3 border-b text-center">1</td><td class="px-4 py-3 border-b text-center">RT 001</td><td class="px-4 py-3 border-b text-center">145</td></tr>
                  <tr><td class="px-4 py-3 border-b text-center">2</td><td class="px-4 py-3 border-b text-center">140</td></tr>
                  <tr><td class="px-4 py-3 border-b text-center">3</td><td class="px-4 py-3 border-b text-center">155</td></tr>
                  <tr><td class="px-4 py-3 border-b text-center font-bold">Jumlah</td><td class="px-4 py-3 border-b text-center" colspan="2">440</td></tr>
              </tbody>
          </table>
      </div>
  </div>
  
  
  </div>
  
</div>

    
    <footer class="bg-gray-200 py-8 px-4 shadow-md z-10 flex justify-center items-center dark:bg-slate-900 dark:text-white mt-5">
        <div class="text-sm text-gray-600 dark:text-gray-300 text-center">
          Copyright © 2024 Desa Tlaga.
        </div>
      </footer>
</body>
</html>
