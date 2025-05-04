@extends('layouts.admin') 

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar Penilaian test</h1>
    <div class="flex justify-between items-center mt-4">
        <!-- Show Entries Dropdown -->
        <div>
            <label for="entries" class="mr-2">Show</label>
            <select id="entries" class="px-2 py-1 border rounded">
                <option value="5" selected>5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="25">25</option>
                <option value="30">30</option>
            </select>
            <span class="ml-2">entries</span>
        </div>

        <!-- Search Box -->
        <div>
            <label for="search" class="mr-2">Search:</label>
            <input type="text" id="search" class="px-2 py-1 border rounded" placeholder="Search...">
        </div>
    </div>
    
    <div class="card shadow mb-4">
        <table class="w-full mt-4 border-collapse border border-gray-200">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border px-4 py-2">NO</th>
                    <th class="border px-4 py-2">Nama</th>
                    <th class="border px-4 py-2">Email</th>
                    <th class="border px-4 py-2">NIM</th>
                    <th class="border px-4 py-2">Nama Instansi</th>
                    <th class="border px-4 py-2">Prodi/Jurusan</th>
                    <th class="border px-4 py-2">Minat Magang</th>
                    <th class="border px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border px-4 py-2">1.</td>
                    <td class="border px-4 py-2">Abe Jhonatan</td>
                    <td class="border px-4 py-2">jhonatanabe@gmail.com</td>
                    <td class="border px-4 py-2">223140714111080</td>
                    <td class="border px-4 py-2">Universitas Brawijaya</td>
                    <td class="border px-4 py-2">Teknologi informasi</td>
                    <td class="border px-4 py-2">Frontend</td>
                    <td class="border px-4 py-2">
                        <div class="flex space-x-2">
                            <a href="#" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                            <a href="#" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</a>
                            <a href="#" class="bg-blue-500 text-white px-3 py-1 rounded">Detail</a>
                        </div>
                    </td>
                    
                    
                </tr>
                <tr>
                    <td class="border px-4 py-2">2.</td>
                    <td class="border px-4 py-2">Ahmad fajri/td>
                    <td class="border px-4 py-2">ahmad@gmail.com</td>
                    <td class="border px-4 py-2">223140714111080</td>
                    <td class="border px-4 py-2">Universitas Brawijaya</td>
                    <td class="border px-4 py-2">Teknologi informasi</td>
                    <td class="border px-4 py-2">Frontend</td>
                    <td class="border px-4 py-2">
                        <div class="flex space-x-2">
                            <a href="#" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                            <a href="#" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</a>
                            <a href="#" class="bg-blue-500 text-white px-3 py-1 rounded">Detail</a>
                        </div>
                    </td>
                    
                    
                </tr>
                <tr>
                    <td class="border px-4 py-2">3.</td>
                    <td class="border px-4 py-2">Baskara putra</td>
                    <td class="border px-4 py-2">Baskara@gmail.com</td>
                    <td class="border px-4 py-2">223140714111080</td>
                    <td class="border px-4 py-2">Universitas Brawijaya</td>
                    <td class="border px-4 py-2">Teknologi informasi</td>
                    <td class="border px-4 py-2">Frontend</td>
                    <td class="border px-4 py-2">
                        <div class="flex space-x-2">
                            <a href="#" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                            <a href="#" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</a>
                            <a href="#" class="bg-blue-500 text-white px-3 py-1 rounded">Detail</a>
                        </div>
                    </td>
                    
                    
                </tr>
                <tr>
                    <td class="border px-4 py-2">4.</td>
                    <td class="border px-4 py-2">Luna maya</td>
                    <td class="border px-4 py-2">Luna@gmail.com</td>
                    <td class="border px-4 py-2">223140714111080</td>
                    <td class="border px-4 py-2">Universitas Airlangga</td>
                    <td class="border px-4 py-2">Sistem informasi</td>
                    <td class="border px-4 py-2">Backend developer</td>
                    <td class="border px-4 py-2">
                        <div class="flex space-x-2">
                            <a href="#" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                            <a href="#" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</a>
                            <a href="#" class="bg-blue-500 text-white px-3 py-1 rounded">Detail</a>
                        </div>
                    </td>
                    
                    <tr>
                        <td class="border px-4 py-2">5.</td>
                        <td class="border px-4 py-2">Muhammad Akbar</td>
                        <td class="border px-4 py-2">Muhammad@gmail.com</td>
                        <td class="border px-4 py-2">223140714111080</td>
                        <td class="border px-4 py-2">Universitas Brawijaya</td>
                        <td class="border px-4 py-2">Teknologi informasi</td>
                        <td class="border px-4 py-2">Frontend</td>
                        <td class="border px-4 py-2">
                            <div class="flex space-x-2">
                                <a href="#" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                                <a href="#" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</a>
                                <a href="#" class="bg-blue-500 text-white px-3 py-1 rounded">Detail</a>
                            </div>
                        </td>
                        
                        <tr>
                            <td class="border px-4 py-2">6.</td>
                            <td class="border px-4 py-2">Nabilla andisya</td>
                            <td class="border px-4 py-2">Nabilla@gmail.com</td>
                            <td class="border px-4 py-2">223140714111080</td>
                            <td class="border px-4 py-2">Universitas Brawijaya</td>
                            <td class="border px-4 py-2">Teknologi informasi</td>
                            <td class="border px-4 py-2">Frontend</td>
                            <td class="border px-4 py-2">
                                <div class="flex space-x-2">
                                    <a href="#" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                                    <a href="#" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</a>
                                    <a href="#" class="bg-blue-500 text-white px-3 py-1 rounded">Detail</a>
                                </div>
                            </td>
            </tbody>
        </table>
        <!-- Pagination -->
        <div class="mt-4 flex justify-between">
            <button class="px-4 py-2 bg-gray-300 rounded">Sebelumnya</button>
            <button class="px-4 py-2 bg-gray-300 rounded">Selanjutnya</button>
        </div>
    </div>
    @endsection

