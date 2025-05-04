<!-- resources/views/admin/formuliradmin.blade.php -->
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
    <p style="color: red; font-size: 18px; font-weight: bold;">Status: DITOLAK</p>
    
    </div>
</div>
@endsection
