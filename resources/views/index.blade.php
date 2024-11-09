<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <!-- Navbar -->
  <nav class="bg-green-700 h-24 px-20 flex items-center sticky top-0">
    <div class="container mx-auto flex justify-between items-center">
      <div class="flex gap-3 items-center">
        <img src="/logobms.png" class="w-16 h-auto" alt="">
        <a href="#" class="text-white text-sm font-semibold">Desa Tlaga, Kecamatan Gumelar <br>Kabupaten Banyumas <br></a>
      </div>
      <div class="space-x-3 hidden md:flex">
        <a href="#" class="text-white hover:text-gray-300">Beranda</a>
        <a href="#about" class="text-white hover:text-gray-300">Sekapur Sirih</a>
        <a href="#services" class="text-white hover:text-gray-300">Profil</a>
        <a href="#contact" class="text-white hover:text-gray-300">Lembaga Desa</a>
        <a href="#contact" class="text-white hover:text-gray-300">Potensi Desa</a>
        <a href="#contact" class="text-white hover:text-gray-300">Menu Publik</a>
      </div>
      <div class="md:hidden">
        <button class="text-white" id="menu-toggle">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>
    <div class="md:hidden mt-4 hidden" id="menu">
      <a href="#" class="block text-white py-2 px-4 hover:bg-blue-700">Home</a>
      <a href="#about" class="block text-white py-2 px-4 hover:bg-blue-700">About</a>
      <a href="#services" class="block text-white py-2 px-4 hover:bg-blue-700">Services</a>
      <a href="#contact" class="block text-white py-2 px-4 hover:bg-blue-700">Contact</a>
    </div>
  </nav>

  {{-- <h1 class="text-3xl font-bold underline">Hello world!</h1> --}}

  <section class="min-h-screen flex items-center justify-center bg-green-600 text-white">
    <div class="text-center px-6 md:px-12">
      <h1 class="text-5xl font-extrabold leading-tight mb-4">
        Selamat Datang di <span class="text-yellow-400">Desa Tlaga</span>
      </h1>
      <p class="text-lg md:text-xl mb-6">
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
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure dolore culpa, ea pariatur commodi illo voluptas. Cumque sequi dolores, accusamus aut odio impedit veniam fugiat, quos vitae doloribus veritatis rerum?      </p>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <!-- Fitur 1 -->
        <div class="bg-green-100 p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-semibold text-gray-800 mb-2">Wisata Alam</h3>
          <p class="text-gray-600">
            Desa Tlaga memiliki banyak destinasi wisata alam yang menarik, mulai dari air terjun hingga panorama perbukitan yang indah.
          </p>
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

  <div class="mx-auto bg-white rounded-lg shadow-lg overflow-hidden flex gap-2 max-w-xl mt-10">
    <!-- Gambar Card -->
    <div>
      <img class="w-full h-56 object-cover" src="https://via.placeholder.com/400x300" alt="Card Image">

    <!-- Card Content -->
    <div class="p-4">
      <h2 class="text-2xl font-bold text-gray-800">Card Title</h2>
      <p class="text-gray-600 mt-2">
        This is a sample card component. You can put text, images, or any content you like in a card layout. Cards are often used in product showcases, blog previews, or user profiles.
      </p>

      <!-- Button -->
      <div class="mt-4">
        <a href="#" class="inline-block bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition duration-200">Learn More</a>
      </div>
    </div>
    </div>
    <div>
      <img class="w-full h-56 object-cover" src="https://via.placeholder.com/400x300" alt="Card Image">

    <!-- Card Content -->
    <div class="p-4">
      <h2 class="text-2xl font-bold text-gray-800">Card Title</h2>
      <p class="text-gray-600 mt-2">
        This is a sample card component. You can put text, images, or any content you like in a card layout. Cards are often used in product showcases, blog previews, or user profiles.
      </p>

      <!-- Button -->
      <div class="mt-4">
        <a href="#" class="inline-block bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition duration-200">Learn More</a>
      </div>
    </div>
    </div>
    
  </div>


  <script>
    const menuToggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');
    
    menuToggle.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });
  </script>
</body>
</html>