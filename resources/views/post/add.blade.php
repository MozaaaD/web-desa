<x-app-layout>
    <x-guest-layout>
        <form method="POST" action="/tambah" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{Auth::user()->name}}" name="username">
            <!-- Name -->
            <div>
                <x-input-label for="judul" :value="__('Judul Artikel')" />
                <x-text-input id="judul" class="input block mt-1 w-full" type="text" name="judul" :value="old('judul')" required autofocus autocomplete="judul" />
            </div>
    
            <!-- deskripsi diskusian -->
            <div class="mt-4">
                <x-input-label for="deskripsi" :value="__('Deskripsi')" />
                <textarea id="deskripsi" class="textarea textarea-primary mt-1 w-full" type="text" name="deskripsi" :value="old('deskripsi')" required autocomplete="username" ></textarea>
            </div>
    
            <!-- gambar -->
            <div class="mt-4">
                <x-input-label for="image" :value="__('Tambahkan Gambar')" />
                <x-text-input id="image" class="file-input file-input-bordered w-full max-w-xs" type="file" name="image" autocomplete="image" />
            </div>
    
    
                <x-primary-button class="btn mt-4">
                    {{ __('Tambahkan') }}
                </x-primary-button>
            </div>
        </form>
    </x-guest-layout>
    </x-app-layout>