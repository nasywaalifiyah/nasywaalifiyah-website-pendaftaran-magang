@extends('layouts.app')

@section('title', 'Soal Tes')

@section('content')
<div class="container mt-4">
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

    <!-- Form Tambahan Jawaban -->
    <div class="mt-4">
        <form action="{{ route('submit.soal') }}" method="POST">
            @csrf
            <textarea name="jawaban" class="form-control" rows="4" placeholder="Tambahkan text"></textarea>

            <!-- Text below textarea with blue color using inline style -->
            <div class="mt-2 text-sm" style="color: #d81d1d;">
                *Kirim jawaban berupa link
            </div>

            <!-- Button with slightly larger size and right-aligned -->
            <div class="mt-3 text-right">
                <button type="submit" class="btn btn-primary btn-lg">
                    Kirim
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
