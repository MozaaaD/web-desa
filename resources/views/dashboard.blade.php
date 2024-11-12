<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-900 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="bg-white p-10">
        <!-- Pesan Sambutan -->
        <div class="text-center mb-12">
            <h3 class="text-3xl font-semibold text-gray-700">Selamat Datang, Admin!</h3>
        </div>

        <!-- Tombol Tambah -->
        <div class="text-center mb-12">
            <a href="/add" class="px-12 py-3 bg-blue-600 text-white rounded-full shadow hover:bg-blue-700 transition">
                Tambah
            </a>
        </div>

        <!-- Daftar Postingan -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($posts as $item)
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-200">
                <img src="/storage/{{$item->image}}" alt="">
                <p class="text-sm text-gray-500">Diposting oleh {{$item->username}}</p> 
                    <p class="text-sm text-gray-500"> {{ \Carbon\Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y') }}</p>
                <h2 class="text-lg font-semibold text-gray-800 mt-2 mb-2 line-clamp-1">
                    {{ $item->judul }}
                </h2>
                <p class="text-gray-600 mb-4 line-clamp-2">{{ $item->deskripsi }}</p>

                <div class="flex justify-between">
                    <a href="/postingan/{{ $item->id }}" class="text-blue-600 hover:underline">Edit</a>
                    <button class="text-red-500" onclick="document.getElementById('hapus-{{ $item->id }}').showModal()">Hapus</button>
                </div>
            </div>

            <!-- Konfirmasi Hapus Modal -->
            <dialog id="hapus-{{ $item->id }}" class="modal modal-bottom sm:modal-middle">
                <div class="modal-box bg-white rounded-lg p-8 shadow-lg">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">Apakah anda yakin ingin menghapus?</h3>
                    <p class="text-gray-600 mb-6">Anda akan menghapus postingan ini secara permanen, Anda yakin?</p>
                    <div class="modal-action">
                        <form method="dialog">
                            <button class="bg-gray-300 text-gray-700 px-6 py-2 rounded-full">Gajadi deh</button>
                        </form>
                        <form action="{{ route('postingan.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-500 text-white px-6 py-2 rounded-full hover:bg-red-600">Tentu</button>
                        </form>
                    </div>
                </div>
            </dialog>
            @endforeach
        </div>
    </div>
</x-app-layout>
