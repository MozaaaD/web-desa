<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-900 text-white h-screen p-6">
            <h3 class="text-2xl font-semibold mb-8">Admin Panel</h3>
            <ul class="space-y-6">
                <li>
                    <a href="#" class="text-gray-300 hover:text-white text-lg">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#" class="text-gray-300 hover:text-white text-lg">
                        Articles
                    </a>
                </li>
                <li>
                    <a href="#" class="text-gray-300 hover:text-white text-lg">
                        Users
                    </a>
                </li>
                <li>
                    <a href="#" class="text-gray-300 hover:text-white text-lg">
                        Settings
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 bg-gray-100 p-8">
            <div class="mb-8">
                <h3 class="text-3xl font-semibold text-gray-800">Selamat Datang, Admin!</h3>
                <p class="text-lg text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>

            <!-- Dashboard Stats -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h4 class="text-xl text-gray-700">Total Artikel</h4>
                    <p class="text-4xl font-bold text-blue-600 mt-4">125</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h4 class="text-xl text-gray-700">Total pengunjung</h4>
                    <p class="text-4xl font-bold text-green-600 mt-4">320</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <h4 class="text-xl text-gray-700">Total Settings</h4>
                    <p class="text-4xl font-bold text-red-600 mt-4">12</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
