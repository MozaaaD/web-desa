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
    <title>Detail</title>
</head>
<body>
    <x-navbar></x-navbar>

    <div class="container mx-auto mt-[100px] px-6">
        <div class="bg-white p-10 rounded-lg shadow-xl w-full max-w-4xl mx-auto mb-12">
            <div class="flex flex-col items-center">
                <!-- Gambar di atas -->
                <img src="/storage/{{$data->image}}" class="w-full max-w-md h-auto rounded-lg shadow-lg object-cover mb-6" alt="">
    
                <!-- Detail di bawah -->
                <div class="text-center">
                    <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $data->judul }}</h1>
                    <p class="text-gray-600 leading-relaxed">{{ $data->deskripsi }}</p>
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
