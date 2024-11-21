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
    <title>Karang Taruna</title>
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
        <h2 class="text-3xl font-bold text-yellow-600 mb-4">Karang Taruna</h2>
        <p class="text-lg text-gray-600 leading-relaxed mb-6 pl-8 border-l-4 border-yellow-600">
          Karang Taruna adalah organisasi kepemudaan di tingkat desa yang bertujuan untuk mengembangkan potensi pemuda dan pemudi dalam rangka meningkatkan kesejahteraan sosial masyarakat. Karang Taruna Desa Tlaga bergerak di bidang sosial, budaya, ekonomi, dan lingkungan, serta berfungsi sebagai wadah pengembangan generasi muda agar dapat berperan aktif dalam pembangunan masyarakat.
        </p>
    </div>

    
    
    <footer class="bg-gray-200 py-8 px-4 shadow-md z-10 flex justify-center items-center dark:bg-slate-900 dark:text-white mt-5">
        <div class="text-sm text-gray-600 dark:text-gray-300 text-center">
          Copyright © 2024 Desa Tlaga.
        </div>
      </footer>
</body>
</html>
