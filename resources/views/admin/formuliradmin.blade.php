@extends('layouts.admin')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-semibold mb-6">Detail Pelamar</h1>

    <!-- Informasi Pelamar -->
    <table class="w-full border-collapse border border-gray-200 mb-6">
        <tbody>
            <tr class="bg-gray-100">
                <td class="border px-4 py-2 font-semibold w-1/3">Nama Lengkap</td>
                <td class="border px-4 py-2">Devano Denandra</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 font-semibold">Email</td>
                <td class="border px-4 py-2">devanodenandra@gmail.com</td>
            </tr>
            <tr class="bg-gray-100">
                <td class="border px-4 py-2 font-semibold">NIM</td>
                <td class="border px-4 py-2">123456789</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 font-semibold">Nama Instansi</td>
                <td class="border px-4 py-2">Universitas Brawijaya</td>
            </tr>
            <tr class="bg-gray-100">
                <td class="border px-4 py-2 font-semibold">Prodi / Jurusan</td>
                <td class="border px-4 py-2">Teknologi Informasi</td>
            </tr>
            <tr>
                <td class="border px-4 py-2 font-semibold">Minat Magang</td>
                <td class="border px-4 py-2">Frontend Developer</td>
            </tr>
        </tbody>
    </table>

    <!-- Upload File -->
    <div class="mb-4">
        <h2 class="text-lg font-semibold">Upload CV</h2>
        <a href="#" class="text-blue-500 underline">Lihat File</a>
    </div>

    <div class="mb-4">
        <h2 class="text-lg font-semibold">Upload Portofolio</h2>
        <a href="#" class="text-blue-500 underline">Lihat File</a>
    </div>

    <!-- Tombol Aksi -->
    <div class="flex space-x-4">
        <button class="px-6 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition duration-200">
            Lolos
        </button>
        <!-- Tombol Tolak yang memicu modal -->
        <button onclick="openRejectModal()" class="px-6 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition duration-200">
            Tolak
        </button>
    </div>
</div>

<!-- Modal Konfirmasi Tolak -->
<div id="rejectModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
    <div class="bg-white rounded-lg p-6 w-full max-w-md">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-xl font-semibold text-gray-800">Konfirmasi Penolakan</h3>
            <button onclick="closeRejectModal()" class="text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="mb-6">
            <p class="text-gray-600">Apakah Anda yakin ingin menolak pelamar ini?</p>
        </div>
        <div class="flex justify-end space-x-3">
            <button onclick="closeRejectModal()" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition duration-200">
                Batal
            </button>
            <button onclick="rejectApplicant()" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition duration-200">
                Ya, Tolak
            </button>
        </div>
    </div>
</div>

<script>
    function openRejectModal() {
        document.getElementById('rejectModal').classList.remove('hidden');
    }
    function closeRejectModal() {
        document.getElementById('rejectModal').classList.add('hidden');
    }

    
</script>
@endsection