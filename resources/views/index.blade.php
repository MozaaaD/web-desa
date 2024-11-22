<!doctype html>
<html lang="en" data-theme="light">
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
            <a href="/sejarahdesa" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white transition-colors text-center">Sejarah Desa</a>
            <a href="#tokohsejarah" class="block px-4 py-2 text-gray-700 hover:bg-yellow-400 hover:text-white hover:rounded-b-md  transition-colors text-center">Tokoh & Sejarah</a>
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
  <section id="explore" class="py-16 bg-white">
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

  <div class="mt-11">
    <section id="berita"> 
      <h3 class="text-5xl text-center font-semibold my-10 mt-10">Halaman Berita</h3>
      <div class="flex justify-center">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 px-4">
     
            @foreach ($posts as $item) 
            <div class="w-80 h-82 mx-auto overflow-hidden bg-white rounded-lg shadow-md hover:shadow-lg transform transition-transform hover:-translate-y-2">
                <div class="relative">
                    <img class="w-full h-52 object-cover rounded-t-lg" src="/storage/{{$item->image}}" alt="Profile Image">
                </div>
                <div class="px-5 py-4">
                    <h2 class="text-lg font-bold text-gray-800 truncate">{{$item->judul}}</h2>
                    <p class="mt-2 text-sm text-gray-600 line-clamp-3">{{$item->deskripsi}}</p>
                    <p class="mt-3 text-xs text-gray-500">Diposting oleh <span class="font-medium text-gray-700">{{$item->username}}</span></p>
                    <p class="text-xs text-gray-400"> {{ \Carbon\Carbon::parse($item->created_at)->locale('id')->isoFormat('dddd, D MMMM Y') }}</p>
                </div>
                <div class="px-5 py-4 border-t">
                    <a href="/detail/{{ $item->id }}" class="text-sm font-medium text-blue-600 hover:text-blue-500 transition-colors">Lihat Berita →</a>
                </div>
            </div>
            @endforeach
     
        </div>
        
      </div>
      
      </div>
      <div class="flex justify-center">
        <a href="/berita" 
          class="mt-5 px-6 py-2 bg-blue-600 text-white font-medium text-sm rounded-full shadow-lg hover:bg-blue-700 hover:shadow-xl transform hover:scale-105 transition duration-300">
          Lihat Lainnya</a>
      </div>
      
   </section>
  </div>


        <!-- Section Map Desa -->
        <section class="pt-32 pb-16 mt-5">
          <div class="container mx-auto px-4">
              <!-- Judul -->
              <div class="text-center mb-8">
                  <h1 class="text-3xl font-bold text-gray-800">Wilayah Desa Tlaga</h1>
                  <p class="text-gray-600 mt-2">
                      Peta wilayah Desa Tlaga, Kecamatan Gumelar, Kabupaten Banyumas. Informasi lokasi utama dan area sekitar disajikan di bawah.
                  </p>
              </div>
      
              <!-- Peta -->
              <div class="overflow-hidden rounded-lg shadow-lg bg-gray-200 p-4 flex justify-center mx-auto max-w-full w-[80%]">
                  <div class="relative w-full">
                      <!-- Peta yang sudah diperbarui -->
                      <iframe 
                          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63311.44029862732!2d108.92350788840328!3d-7.357817991563641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f878fce9fd73b%3A0x651516cbbc4d2636!2sTlaga%2C%20Kec.%20Gumelar%2C%20Kabupaten%20Banyumas%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1731989654195!5m2!1sid!2sid" 
                          class="w-full h-[400px] rounded-lg border border-gray-300 shadow-md"
                          allowfullscreen="" 
                          loading="lazy" 
                          referrerpolicy="no-referrer-when-downgrade">
                      </iframe>
                  </div>
              </div>
      
              <!-- Deskripsi -->
              <div class="bg-white rounded-lg shadow-lg p-6 mt-8">
                  <h2 class="text-xl font-semibold text-gray-800 mb-4">Informasi Wilayah</h2>
                    Desa Tlaga berlokasi di sebelah barat pusat Kabupaten Banyumas, sekitar 50 km jauhnya. Dengan kendaraan pribadi, perjalanan memakan waktu sekitar 1,5 jam, sedangkan angkutan umum membutuhkan waktu 2 jam. Sebagai daerah perbatasan Banyumas, Brebes, dan Cilacap, Tlaga memiliki posisi strategis. Desa ini didominasi oleh perbukitan dengan ketinggian antara 200-500 meter di atas permukaan laut, sehingga rawan longsor. Luas wilayahnya mencapai 784 hektar, sebagian besar berupa lahan kering.                  </p>
                  <ul class="mt-4 text-gray-600 list-disc list-inside">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Batas-batas Wilayah Desa Tlaga</h2>
                      <li>Sebelah Utara : Desa Cinanas, Kecamatan Bantarkawung dan Desa Kedung Oleng Kecamatan Paguyangan Kabupaten Brebes.</li>
                      <li>Sebelah Timur : Desa Samudra Kulon dan Desa Gumelar, Kecamatan Gumelar, Kabupaten Banyumas.</li>
                      <li>Sebelah Selatan : Desa Cilangkap, Kecamatan Gumelar, Kabupaten Banyumas.</li>
                      <li>Sebelah Barat : Desa Sidamulya dan Desa Bengbulang, Kecamatan Karangpucung, Kabupaten Cilacap.</li>
                  </ul>
              </div>
          </div>
      </section>
      
  <footer class="bg-gray-200 py-8 px-4 shadow-md z-10 flex justify-center items-center dark:bg-slate-900 dark:text-white mt-5">
    <div class="text-sm text-gray-600 dark:text-gray-300 text-center">
      Copyright © 2024 Desa Tlaga.
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