@extends('layouts.app')

@section('title', 'Hasil Submit Test')

@section('content')
<div class="container mt-4">
    <!-- Informasi Tes -->
    <div class="card p-4 shadow-sm">
        <p>
            Kamu lolos seleksi administrasi dan berhasil melangkah ke tahap kedua!
            Tahap ini adalah mengerjakan soal tes sesuai minat magang yang kamu pilih,
            yaitu <strong>Frontend Developer</strong>.
        </p>

        <p>Silakan klik link di bawah ini untuk mengakses soal tes dalam bentuk PDF:</p>

        <p>
            <a href="https://drive.google.com/file/d/[ID-FILE-GDRIVE]/view?usp=sharing" target="_blank" class="text-primary">
                https://drive.google.com/file/d/[ID-FILE-GDRIVE]/view?usp=sharing
            </a>
        </p>

        <p><strong>Semangat mengerjakan! 🚀</strong></p>
    </div>

    <!-- Output Jawaban yang Telah Disubmit -->
    <div class="card p-4 shadow-sm mt-4">
        <h5 class="fw-bold">Link Jawaban Anda</h5>
        <p>
            <a href="{{ $jawaban }}" target="_blank" class="text-primary">
                {{ $jawaban }}
            </a>
        </p>
    </div>
</div>
@endsection
