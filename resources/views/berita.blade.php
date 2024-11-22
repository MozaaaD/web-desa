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
    <title>Berita</title>
</head>
<body>
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
 
     </section>
</body>
</html>
