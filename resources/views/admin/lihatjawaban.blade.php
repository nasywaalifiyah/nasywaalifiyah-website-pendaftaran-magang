<!-- resources/views/admin/lihatjawaban.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-semibold mb-6">Detail Jawaban Mahasiswa</h1>

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

    <!-- Link ke File Google Drive -->
    <div class="mb-6">
        <label class="font-semibold text-lg">Jawaban Pelamar</label>
        <div class="border p-4 rounded-lg mt-2">
            <a href="https://drive.google.com/file/d/1AbCdEf6hIjKlMNOpQrStUvWxYz/view?usp=sharing" target="_blank" class="text-blue-600 underline">
                https://drive.google.com/file/d/1AbCdEf6hIjKlMNOpQrStUvWxYz/view?usp=sharing
            </a>
        </div>
    </div>

    <!-- Form Jawaban -->
    <div class="mb-6">
        <label class="font-semibold text-lg">Tambah Teks Jawaban</label>
        <textarea id="jawaban" name="jawaban" rows="6" class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Tambahkan text disini...">
            Dengan ini, kami mengucapkan selamat! Anda telah berhasil lolos tahap seleksi tes untuk program magang Frontend Developer di PT Inagata. Kami mengundang Anda untuk melanjutkan ke tahap berikutnya, yaitu seleksi wawancara, yang akan dilakukan secara online melalui Zoom.
            Berikut adalah detail wawancara Anda:
            📅 Tanggal: [Tanggal Wawancara]
            ⏰ Waktu: [Waktu Wawancara]
            🔗 Link Zoom: https://zoom.us/j/1234567890 (Harap bergabung 10 menit sebelum jadwal)
            Mohon pastikan koneksi internet stabil dan berada di tempat yang kondusif saat wawancara berlangsung. Jika ada pertanyaan atau kendala teknis, jangan ragu untuk menghubungi kami.
            Terima kasih atas partisipasi Anda. Kami menantikan pertemuan dengan Anda di tahap wawancara!
        </textarea>
    </div>

    <!-- Tombol Kirim dan Tolak -->
    <div class="flex space-x-4">
        <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
            Kirim
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
