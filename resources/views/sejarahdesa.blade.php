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

    <div class="container mx-auto mt-[100px] px-6">
        <div class="bg-white p-8 rounded-xl shadow-lg w-full mx-auto mb-12 border border-gray-200">
            <h2 class="text-5xl font-semibold text-yellow-600 mb-6 text-center">Sejarah Desa Tlaga</h2>
            <div class="flex justify-center mb-6">
                <img src="sejarahdesa.jpg" alt="Sejarah Desa Tlaga" class="rounded-lg shadow-lg w-full max-w-3xl">
            </div>
            <p class="text-lg text-gray-800 leading-relaxed mb-6">
                Lahirnya Desa Tlaga tidak lepas dari eksistensi Lengger di Banyumas. Seni lengger atau ronggeng merupakan bagian integral dari sejarah seni budaya Banyumas, termasuk di Desa Tlaga, Kecamatan Gumelar. Kesenian lengger menjadi tontonan wajib dalam setiap kegiatan di Desa Tlaga, sementara kesenian lain hanya bersifat sunah. Menurut warga desa, seni lengger pertama kali diperkenalkan di Tlaga oleh Eyang Ajeng, adik dari Eyang Ranukertawijaya, yang merupakan penari lengger pertama di desa tersebut. Eyang Ajeng datang setelah Eyang Rebo meninggalkan Selogiri, sementara dua teman Eyang Rebo pindah ke Karangdelima (sekarang Desa Petahunan, Kecamatan Pekuncen, Banyumas).
            </p>
            <p class="text-lg text-gray-800 leading-relaxed mb-6">
                Eyang Ajeng dikenal luas dan sering diundang tampil, bahkan sampai ke Pegadungan, Sunda. Konon, setelah tampil, Eyang Ajeng diberi hadiah berupa pakaian harimau oleh seseorang. Ketika mengenakan pakaian tersebut, Eyang Ajeng dipercaya bisa berubah menjadi harimau. Orang setempat percaya bahwa pemberi pakaian tersebut adalah bangsa "mejajaran", makhluk yang mirip manusia tapi bukan manusia. Menurut kepercayaan, mejajaran adalah makhluk tanpa tungkai kaki dan lekukan di bawah hidung seperti manusia. Hingga kini, bekas tapak kaki mereka masih terlihat di hutan-hutan dan perbukitan di Banyumas bagian barat.
            </p>
            <p class="text-lg text-gray-800 leading-relaxed mb-6">
                Terlepas dari mitologi tersebut, seni budaya lokal di Tlaga masih bertahan hingga sekarang. Seni lengger diwariskan turun-temurun dalam keluarga dan eksistensinya berkaitan dengan kisah Eyang Ajeng sebagai lengger pertama di Tlaga. Seni lengger di Tlaga masih sering diundang oleh masyarakat Cilacap dan Brebes. Dalam slametan suran, pentas lengger adalah hal yang wajib sebagai penghormatan kepada Eyang Ranukertawijaya dan Eyang Ajeng. Kepercayaan terhadap laknat dan prahara karena melupakan hal gaib menjaga kelestarian budaya dan tradisi setempat.
            </p>
            <p class="text-lg text-gray-800 leading-relaxed mb-6">
                Sebagai masyarakat agraris, masyarakat Tlaga juga memiliki kesenian bentha-benthi atau rinding, upacara meminta hujan yang dipentaskan saat kemarau panjang. Penyembelihan kerbau di awal Sura juga tradisi turun-temurun dengan makna simbolis. Penanaman kepala kerbau sebagai simbol penguburan sifat serakah manusia agar akal dan nurani tetap terjaga, serta penguburan tulang belulang sebagai nasihat agar tidak suka berebut sesuatu yang tidak berharga.
            </p>
            <p class="text-lg text-gray-800 leading-relaxed">
                Prosesi Suran di Tlaga dilaksanakan pada hari Jum’at Kliwon di dekat masjid, mendekatkan masyarakat dengan tempat dan waktu ibadat. Suran menjadi upaya mendekatkan masyarakat dengan Islam melalui pendekatan budaya, mengakomodasi berbagai kesenian yang ada. Dengan demikian, agama dapat disisipkan dalam kehidupan masyarakat melalui simbolisasi dalam pentas, syair, bahasa, tembang, dan ritual Suran. Ritus Suran menjadi upaya untuk menyelaraskan hubungan manusia dengan manusia, dan manusia dengan semesta, berpusat pada Tuhan Sang Hyang Tunggal.
            </p>
        </div>
    </div>
    
    <footer class="bg-gray-200 py-8 px-4 shadow-md z-10 flex justify-center items-center dark:bg-slate-900 dark:text-white mt-5">
        <div class="text-sm text-gray-600 dark:text-gray-300 text-center">
          Copyright © 2024 Desa Tlaga.
        </div>
      </footer>
</body>
</html>
