<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
</head>
<body id="top">
  <!-- Navbar -->
  <nav class="bg-transparent h-24 px-16 flex items-center fixed top-0 text-white z-10 w-full">
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
        <a href="#berita"
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
            <a href="#sejarah" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white transition-colors text-center">Wilayah Desa</a>
            <a href="#visi-misi" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white transition-colors text-center">Sejarah Desa</a>
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
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white transition-colors text-center">Linmas</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white transition-colors text-center">BPD</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white transition-colors text-center">LPMD</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white transition-colors text-center">Karang Taruna</a>
            <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white hover:rounded-b-md  transition-colors text-center">Daftar RT/RW</a>
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
        {{-- <div class="relative group">
          <div class="hover:text-yellow-400 cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-300 before:absolute before:bg-yellow-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-300 after:absolute after:bg-yellow-400 after:origin-center after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
            <span class="group-hover:text-yellow-400">Menu Publik</span>
          </div>
          <!-- Dropdown Menu -->
          <div class="absolute left-1/2 -translate-x-1/2 w-40 bg-white shadow-lg rounded-lg opacity-0 group-hover:opacity-100 group-hover:translate-y-0 transform transition-all duration-300 ease-in-out translate-y-2 z-10 pointer-events-none group-hover:pointer-events-auto">
            <a href="" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white hover:rounded-t-md transition-colors text-center">Radio Streaming</a>
            <a href="#sejarah" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white transition-colors text-center">TV Streaming</a>
            <a href="#sejarah" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white transition-colors text-center">Hubungi Kami</a>
            <a href="#sejarah" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white transition-colors text-center">Pengaduan</a>
            <a href="#visi-misi" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white transition-colors text-center">Buku Tamu</a>
            <a href="#visi-misi" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white hover:rounded-b-md  transition-colors text-center">Undangan</a>
          </div>
        </div>
        <div class="relative group">
          <div class="hover:text-yellow-400 cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-300 before:absolute before:bg-yellow-400 before:origin-center before:h-[1px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-300 after:absolute after:bg-yellow-400 after:origin-center after:h-[1px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
            <span class="group-hover:text-yellow-400">Pelayanan</span>
          </div>
          <!-- Dropdown Menu -->
          <div class="absolute left-1/2 -translate-x-1/2 w-40 bg-white shadow-lg rounded-lg opacity-0 group-hover:opacity-100 group-hover:translate-y-0 transform transition-all duration-300 ease-in-out translate-y-2 z-10 pointer-events-none group-hover:pointer-events-auto">
            <a href="" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white hover:rounded-t-md hover:rounded-b-md transition-colors text-center">PERSYARATAN PENDAFTARAN PENDUDUK DAN PENCATATAN SIPIL</a>
          </div>
        </div> --}}
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

  <section class="min-h-screen flex items-center justify-center bg-center bg-no-repeat bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] bg-gray-700 bg-blend-multiply" style="background-image: url('tlaga.jpg');  background-size: 100% 100%; ">
    <div class="text-center px-6 md:px-12">
      <h1 class="text-5xl font-extrabold leading-tight mb-4 text-white">
        Selamat Datang di <span class="text-yellow-400">Desa Tlaga</span>
      </h1>
      <p class="text-lg md:text-xl mb-6 text-white">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
      </p>
      <div>
        <a href="#explore" class="inline-block bg-yellow-400 text-green-800 px-8 py-3 rounded-lg font-semibold hover:bg-yellow-500 transition duration-200">Jelajahi Desa</a>
      </div>
    </div>
  </section>

  <!-- Section About Desa (optional) -->
  <section id="explore"class="py-16 bg-white">
    <div class="max-w-4xl mx-auto text-center px-6 mt-20">
      <h2 class="text-3xl font-semibold text-gray-800 mb-4">Tentang Desa Tlaga</h2>
      <p class="text-lg text-gray-600 mb-8">
        Tlaga adalah desa di kecamatan Gumelar, Banyumas, Jawa Tengah, Indonesia. Desa ini berjarak sekira 21 Km sebelah barat dari Ajibarang atau 38 Km dari Purwokerto. Desa Tlaga merupakan desa yang berada di perbatasan antara 3 kabupaten yaitu Kabupaten Banyumas, Kabupaten Cilacap dan Kabupaten Brebes. Desa Tlaga merupakan daerah pegunungan sehingga juga merupakan daerah rawan bencana longsor. Mayoritas penduduk di desa ini beragama muslim dan bermata pencaharian petani atau perkebunan, hal ini dapat dilihat dari banyaknya area persawahan dan perkebunan. </p>
        <!-- Fitur 1 -->
        <div class="bg-green-100 p-6 rounded-lg shadow-lg">
          <h3 class="text-xl text-center font-semibold text-gray-800 mb-2">Grumbul di Desa Tlaga</h3>
          <pre class=" font-poppins text-gray-600 text-center">
Grumbul Jambenom
Grumbul Karang Anyar
Grumbul Karang Kemiri
Grumbul Legok
Grumbul Sompok
Grumbul Sumber
Grumbul Tipar
Grumbul Tlaga</pre>
        </div>
      </div>
    </div>
  </section>

  <h3 id="berita" class="text-5xl text-center font-semibold my-10">Halaman Berita</h3>

  <div class="flex justify-center">
    <div class="grid grid-cols-3 gap-3">

      @foreach ($posts as $item) 
    <div class="max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-lg hover:shadow-gray-400 mt-7">
      <div class="relative">
        <img class="w-full h-48 object-cover" src="/storage/{{$item->image}}" alt="Profile Image">
      </div>
      <div class="px-6 py-4">
        <div class="text-xl font-semibold text-gray-800">{{$item->judul}}</div>
        <p class="text-gray-600">{{$item->deskripsi}}</p>
        <p>Di posting oleh {{$item->username}}</p>
        <p class="text-sm text-gray-500"> {{ \Carbon\Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y') }}</p>
      </div>
      <div class="px-6 py-4">
        <a href="#" class="text-blue-500 hover:underline">Lihat Berita</a>
      </div>
    </div>
    @endforeach
    </div>
  </div>

  <footer class="bg-gray-200 py-8 px-4 shadow-md z-10 flex justify-center items-center dark:bg-slate-900 dark:text-white mt-5">
    <div class="text-sm text-gray-600 dark:text-gray-300 text-center">
      Copyright © 2024 Moza
    </div>
  </footer>  

  <script>
const navbar = document.querySelector('nav');

window.addEventListener('scroll', () => {
  if (window.scrollY > 50) {
    navbar.classList.add('bg-white');
    navbar.classList.add('text-black');
    navbar.classList.remove('bg-transparent');
    navbar.classList.remove('text-white');
  } else {
    navbar.classList.add('bg-transparent');
    navbar.classList.add('text-white');
    navbar.classList.remove('bg-white');
    navbar.classList.remove('text-black');
  }
});


  </script>
  
</body>
</html>