@extends('layouts.admin')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-semibold mb-6">Data pelamar</h1>

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


    <!-- Tombol Kirim dan Tolak -->
    <div class="flex space-x-4">
        <button type="submit" class="px-6 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">
            Diterima
        </button>
        <button type="submit" class="px-6 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600">
            Tolak
        </button>
    </div>
</div>

<script>
    // Fungsi untuk membersihkan textarea
    function clearText() {
        document.getElementById('jawaban').value = '';
    }
</script>
@endsection
