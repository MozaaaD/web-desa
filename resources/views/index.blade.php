<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <!-- Navbar -->
  <nav class="bg-green-700 h-24 px-20 flex items-center sticky top-0 text-white z-10">
    <div class="container mx-auto flex justify-between items-center">
      <div class="flex gap-3 items-center">
        <img src="/logobms.png" class="w-16 h-auto" alt="">
        <div>
          <p href="#" class="text-sm font-semibold">Desa Tlaga, Kecamatan Gumelar</p>
          <p href="#" class="text-sm font-semibold -mt-1">Kabupaten Banyumas</p>
          <p class="text-xs font-bold">Jl. Raya Tlaga No. 06, Desa Tlaga, Kec. Gumelar, Kab. Banyumas, Jawa Tengah, 53165</p>
        </div>
      </div>
      <div class="space-x-3 hidden md:flex">
        <a href="#" class="">Beranda</a>
        <a href="#explore" class="inline-block relative no-underline after-line">Tentang</a>
        <a href="#services" class="">Profil</a>
        <a href="#contact" class="">Lembaga Desa</a>
        <a href="#contact" class="">Potensi Desa</a>
        <a href="#contact" class="">Menu Publik</a>
      </div>
      <div class="md:hidden">
        <button class="text-white" id="menu-toggle">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>
    {{-- <div class="md:hidden mt-4 hidden" id="menu">
      <a href="#" class="block text-white py-2 px-4 hover:bg-blue-700">Home</a>
      <a href="#about" class="block text-white py-2 px-4 hover:bg-blue-700">About</a>
      <a href="#services" class="block text-white py-2 px-4 hover:bg-blue-700">Services</a>
      <a href="#contact" class="block text-white py-2 px-4 hover:bg-blue-700">Contact</a>
    </div> --}}
  </nav>

  {{-- <h1 class="text-3xl font-bold underline">Hello world!</h1> --}}

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
    <div class="max-w-4xl mx-auto text-center px-6">
      <h2 class="text-3xl font-semibold text-gray-800 mb-4">Tentang Desa Tlaga</h2>
      <p class="text-lg text-gray-600 mb-8">
        Tlaga adalah desa di kecamatan Gumelar, Banyumas, Jawa Tengah, Indonesia. Desa ini berjarak sekira 21 Km sebelah barat dari Ajibarang atau 38 Km dari Purwokerto. Desa Tlaga merupakan desa yang berada di perbatasan antara 3 kabupaten yaitu Kabupaten Banyumas, Kabupaten Cilacap dan Kabupaten Brebes. Desa Tlaga merupakan daerah pegunungan sehingga juga merupakan daerah rawan bencana longsor. Mayoritas penduduk di desa ini beragama muslim dan bermata pencaharian petani atau perkebunan, hal ini dapat dilihat dari banyaknya area persawahan dan perkebunan. </p>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <!-- Fitur 1 -->
        <div class="bg-green-100 p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-semibold text-gray-800 mb-2">Grumbul di Desa Tlaga</h3>
          <p class="text-gray-600">
            Grumbul Jambenom <br>
            Grumbul Karang Anyar <br>
            Grumbul Karang Kemiri <br>
            Grumbul Legok <br>
            Grumbul Sompok <br>
            Grumbul Sumber <br>
            Grumbul Tipar <br>
            Grumbul Tlaga          </p>
        </div>
        <!-- Fitur 2 -->
        <div class="bg-green-100 p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-semibold text-gray-800 mb-2">Budaya & Tradisi</h3>
          <p class="text-gray-600">
            Nikmati budaya dan tradisi khas Desa Tlaga yang masih dijaga oleh masyarakat setempat, seperti upacara adat dan kesenian lokal.
          </p>
        </div>
        <!-- Fitur 3 -->
        <div class="bg-green-100 p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-semibold text-gray-800 mb-2">Kerajinan Tangan</h3>
          <p class="text-gray-600">
            Dikenal dengan kerajinan tangan khas, Desa Tlaga memproduksi berbagai macam produk lokal yang memiliki nilai seni tinggi.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section Contact / Call to Action -->
  {{-- <section class="py-16 bg-green-800 text-white">
    <div class="max-w-4xl mx-auto text-center px-6">
      <h2 class="text-3xl font-semibold mb-4">Hubungi Kami</h2>
      <p class="text-lg mb-8">
        Ingin tahu lebih banyak tentang Desa Tlaga? Hubungi kami atau kunjungi langsung untuk merasakan kehangatan masyarakat kami.
      </p>
      <div>
        <a href="mailto:info@desatlaga.com" class="inline-block bg-yellow-400 text-green-800 px-8 py-3 rounded-lg font-semibold hover:bg-yellow-500 transition duration-200">Kirim Pesan</a>
      </div>
    </div>
  </section> --}}

  <div class="max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-lg hover:shadow-gray-400 mt-7">
    <div class="relative">
      <img class="w-full h-48 object-cover" src="https://images.unsplash.com/photo-1557862921-37829c790f19?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw4fHx1c2VyfGVufDB8MHx8fDE2OTQwOTU5Nzl8MA&ixlib=rb-4.0.3&q=80&w=1080" alt="Profile Image">
    </div>
    <div class="px-6 py-4">
      <div class="text-xl font-semibold text-gray-800">John Doe</div>
      <p class="text-gray-600">Front-end Developer</p>
    </div>
    <div class="px-6 py-4">
      <span class="inline-block px-2 py-1 font-semibold text-teal-900 bg-teal-200 rounded-full">Web</span>
      <span class="inline-block px-2 py-1 font-semibold text-indigo-900 bg-indigo-200 rounded-full">UI/UX</span>
      <span class="inline-block px-2 py-1 font-semibold text-purple-900 bg-purple-200 rounded-full">Design</span>
    </div>
    <div class="px-6 py-4">
      <a href="#" class="text-blue-500 hover:underline">View Profile</a>
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
        navbar.classList.add('bg-gray-400');
        navbar.classList.add('shadow-lg');
        navbar.classList.remove('text-white');
        navbar.classList.add('text-black');

        navbar.classList.remove('bg-green-700');
      } else {
        navbar.classList.add('bg-green-700');
        navbar.classList.add('shadow-lg');
        navbar.classList.add('text-white');
        navbar.classList.remove('text-black');

        navbar.classList.remove('bg-gray-400');
      }
    });
  </script>
  
</body>
</html>