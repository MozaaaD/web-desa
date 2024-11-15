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
    <title>Visi Misi</title>
</head>
<body>
    <nav class="bg-transparent h-24 px-16 flex items-center fixed top-0 text-black z-10 w-full">
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
          <div class="h-[100svh] flex items-center justify-center gap-3">
            <a href="/"
               class="relative hover:text-yellow-400 cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-300 before:absolute before:bg-yellow-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-300 after:absolute after:bg-yellow-400 after:origin-center after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
              <span>Beranda</span>
            </a>
            <a href="/berita"
               class="relative hover:text-yellow-400 cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-300 before:absolute before:bg-yellow-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-300 after:absolute after:bg-yellow-400 after:origin-center after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
              <span>Berita</span>
            </a>
          
            <!-- Dropdown Profil -->
            <div class="relative">
              <div class="group">
                <div class="hover:text-yellow-400 cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-300 before:absolute before:bg-yellow-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-300 after:absolute after:bg-yellow-400 after:origin-center after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                  <span class="group-hover:text-yellow-400">Profil</span>
                </div>
                <!-- Dropdown Menu -->
                <div class="group absolute left-1/2 -translate-x-1/2 w-40 bg-white shadow-lg rounded-lg opacity-0 group-hover:opacity-100 group-hover:translate-y-0 transform transition-all duration-300 ease-in-out translate-y-2 z-10 pointer-events-none group-hover:pointer-events-auto">
                  <a href="" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white hover:rounded-t-md transition-colors text-center">Visi dan Misi</a>
                  <a href="#sejarah" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white transition-colors text-center">Wilayah Desa</a>
                  <a href="#visi-misi" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white transition-colors text-center">Sejarah Desa</a>
                  <a href="#visi-misi" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white hover:rounded-b-md  transition-colors text-center">Tokoh & Sejarah</a>
                </div>
              </div>
            </div>
            
            <div class="relative">
              <div class="group">
                <div class="hover:text-yellow-400 cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-300 before:absolute before:bg-yellow-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-300 after:absolute after:bg-yellow-400 after:origin-center after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                  <span class="group-hover:text-yellow-400">Lembaga Desa</span>
                </div>
                <!-- Dropdown Menu -->
                <div class="absolute left-1/2 -translate-x-1/2 mt-2 w-40 bg-white shadow-lg rounded-lg opacity-0 group-hover:opacity-100 group-hover:translate-y-0 transform transition-all duration-300 ease-in-out translate-y-2 z-10 pointer-events-none group-hover:pointer-events-auto">
                  <a href="#struktur" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white transition-colors text-center">Pemerintah Desa</a>
                  <a href="#sejarah" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white transition-colors">Linmas</a>
                  <a href="#visi-misi" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white transition-colors">BPD</a>
                </div>
              </div>
            </div>
            <div class="relative">
              <div class="group">
                <div class="hover:text-yellow-400 cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-300 before:absolute before:bg-yellow-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-300 after:absolute after:bg-yellow-400 after:origin-center after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                  <span class="group-hover:text-yellow-400">Potensi Desa</span>
                </div>
                <!-- Dropdown Menu -->
                <div class="absolute left-1/2 -translate-x-1/2 mt-2 w-40 bg-white shadow-lg rounded-lg opacity-0 group-hover:opacity-100 group-hover:translate-y-0 transform transition-all duration-300 ease-in-out translate-y-2 z-10 pointer-events-none group-hover:pointer-events-auto">
                  <a href="#struktur" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white transition-colors text-center">Struktur</a>
                  <a href="#sejarah" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white transition-colors">Sejarah</a>
                  <a href="#visi-misi" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white transition-colors">Visi & Misi</a>
                </div>
              </div>
            </div>
            <div class="relative">
              <div class="group">
                <div class="hover:text-yellow-400 cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-300 before:absolute before:bg-yellow-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-300 after:absolute after:bg-yellow-400 after:origin-center after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                  <span class="group-hover:text-yellow-400">Menu Publik</span>
                </div>
                <!-- Dropdown Menu -->
                <div class="absolute left-1/2 -translate-x-1/2 mt-2 w-40 bg-white shadow-lg rounded-lg opacity-0 group-hover:opacity-100 group-hover:translate-y-0 transform transition-all duration-300 ease-in-out translate-y-2 z-10 pointer-events-none group-hover:pointer-events-auto">
                  <a href="#struktur" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white transition-colors text-center">Struktur</a>
                  <a href="#sejarah" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white transition-colors">Sejarah</a>
                  <a href="#visi-misi" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white transition-colors">Visi & Misi</a>
                </div>
              </div>
            </div>
          </div>
          <div class="md:hidden">
            <button class="text-white" id="menu-toggle">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
              </svg>
            </button>
          </div>
        </div>
      </nav>

      <div class="container mx-auto mt-[100px] px-6">
        <div class="bg-gray-100 p-10 rounded-lg shadow-lg text-center">
            <h2 class="text-3xl font-semibold text-yellow-600 mb-5">VISI dan MISI</h2>
            
            <!-- Visi -->
            <div class="mb-10">
                <h3 class="text-2xl font-bold text-gray-700 mb-4">V I S I</h3>
                <p class="text-xl text-gray-600 leading-relaxed">
                    Menjadikan Desa Tlaga menjadi desa yang cerdas, bertaqwa, bersih, maju, sejahtera dan mandiri.
                </p>
            </div>
            
            <!-- Misi -->
            <div class="mt-10">
                <h3 class="text-2xl font-bold text-gray-700 mb-4">M I S I</h3>
                <ul class="list-disc text-lg text-gray-600 pl-10 leading-relaxed text-left">
                    <li>Mewujudkan pemerintahan yang bersih, profesional, dan ramah.</li>
                    <li>Infrastruktur yang berkelanjutan.</li>
                    <li>Peningkatan pertumbuhan ekonomi masyarakat Desa Tlaga melalui BUMDes.</li>
                    <li>Peningkatan sarana olahraga dan pembangunan gedung serbaguna.</li>
                    <li>Mengangkat adat dan budaya sebagai event wisata desa dengan kearifan lokal.</li>
                    <li>Menuju desa bebas janggolan.</li>
                </ul>
            </div>
        </div>
    </div>
    
    
</body>
</html>