@extends('layouts.admin')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-semibold mb-4">User</h1>
    <a href="#" class="bg-green-500 text-white px-4 py-2 rounded">+ Tambah</a>

    <!-- Search and Show Entries Section -->
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

    <!-- Table Section -->
    <table class="w-full mt-4 border-collapse border border-gray-200">
        <thead>
            <tr class="bg-gray-100">
                <th class="border px-4 py-2">NO</th>
                <th class="border px-4 py-2">Nama</th>
                <th class="border px-4 py-2">Email</th>
                <th class="border px-4 py-2">Role</th>
                <th class="border px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Table Data (Example rows) -->
            <tr>
                <td class="border px-4 py-2">1.</td>
                <td class="border px-4 py-2">Abe Jhonatan</td>
                <td class="border px-4 py-2">jhonatanabe@gmail.com</td>
                <td class="border px-4 py-2">User</td>
                <td class="border px-4 py-2">
                    <a href="#" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                    <a href="#" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</a>
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">2.</td>
                <td class="border px-4 py-2">Ahmad fajri</td>
                <td class="border px-4 py-2">ahmad@gmail.com</td>
                <td class="border px-4 py-2">User</td>
                <td class="border px-4 py-2">
                    <a href="#" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                    <a href="#" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</a>
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">3.</td>
                <td class="border px-4 py-2">Aghnia ramadhani</td>
                <td class="border px-4 py-2">Aghnia@gmail.com</td>
                <td class="border px-4 py-2">Admin</td>
                <td class="border px-4 py-2">
                    <a href="#" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                    <a href="#" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</a>
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">4.</td>
                <td class="border px-4 py-2">Atika kurnia</td>
                <td class="border px-4 py-2">Atika@gmail.com</td>
                <td class="border px-4 py-2">Admin</td>
                <td class="border px-4 py-2">
                    <a href="#" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                    <a href="#" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</a>
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">5.</td>
                <td class="border px-4 py-2">Bagas mundhiarto </td>
                <td class="border px-4 py-2">Bagas@gmail.com</td>
                <td class="border px-4 py-2">User</td>
                <td class="border px-4 py-2">
                    <a href="#" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                    <a href="#" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</a>
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">6.</td>
                <td class="border px-4 py-2">Baskara chiko</td>
                <td class="border px-4 py-2">Baskara@gmail.com</td>
                <td class="border px-4 py-2">User</td>
                <td class="border px-4 py-2">
                    <a href="#" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                    <a href="#" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</a>
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">7.</td>
                <td class="border px-4 py-2">Chika jesika</td>
                <td class="border px-4 py-2">Chika@gmail.com</td>
                <td class="border px-4 py-2">Admin</td>
                <td class="border px-4 py-2">
                    <a href="#" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                    <a href="#" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</a>
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">8.</td>
                <td class="border px-4 py-2">Karina afsha</td>
                <td class="border px-4 py-2">Karinagmail.com</td>
                <td class="border px-4 py-2">Admin</td>
                <td class="border px-4 py-2">
                    <a href="#" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                    <a href="#" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</a>
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">9.</td>
                <td class="border px-4 py-2">Luna maya</td>
                <td class="border px-4 py-2">Luna@gmail.com</td>
                <td class="border px-4 py-2">User</td>
                <td class="border px-4 py-2">
                    <a href="#" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                    <a href="#" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</a>
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">10.</td>
                <td class="border px-4 py-2">Muhammad akbar</td>
                <td class="border px-4 py-2">akbar@gmail.com</td>
                <td class="border px-4 py-2">User</td>
                <td class="border px-4 py-2">
                    <a href="#" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                    <a href="#" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</a>
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">11.</td>
                <td class="border px-4 py-2">Nabilla andisya</td>
                <td class="border px-4 py-2">Nabilla@gmail.com</td>
                <td class="border px-4 py-2">User</td>
                <td class="border px-4 py-2">
                    <a href="#" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                    <a href="#" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</a>
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">12.</td>
                <td class="border px-4 py-2">Nasywa alifiyah</td>
                <td class="border px-4 py-2">Nasywa@gmail.com</td>
                <td class="border px-4 py-2">User</td>
                <td class="border px-4 py-2">
                    <a href="#" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                    <a href="#" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</a>
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">13.</td>
                <td class="border px-4 py-2">Vidia Alissya</td>
                <td class="border px-4 py-2">Vidia@gmail.com</td>
                <td class="border px-4 py-2">User</td>
                <td class="border px-4 py-2">
                    <a href="#" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                    <a href="#" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</a>
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">14.</td>
                <td class="border px-4 py-2">Wilda sari </td>
                <td class="border px-4 py-2">Wilda@gmail.com</td>
                <td class="border px-4 py-2">User</td>
                <td class="border px-4 py-2">
                    <a href="#" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                    <a href="#" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</a>
                </td>
            </tr>
            <!-- Additional rows go here -->
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="mt-4 flex justify-between">
        <button class="px-4 py-2 bg-gray-300 rounded">Sebelumnya</button>
        <button class="px-4 py-2 bg-gray-300 rounded">Selanjutnya</button>
    </div>
</div>
@endsection
