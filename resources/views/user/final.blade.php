@extends('layouts.app')

@section('title', 'Pengumuman Hasil Magang')

@section('content')
<div class="container mt-5 d-flex justify-content-center">
    <div class="card p-4 shadow-lg" style="max-width: 800px;">
        <h4 class="fw-bold">Congratulations! 🎉</h4>
        <p>
            Berdasarkan hasil seleksi administrasi, tes, dan interview yang sudah dilaksanakan.
            Sesuai dengan keputusan pihak Panitia dan Mentor, maka dengan ini kami nyatakan Anda
            <strong>"LOLOS"</strong> dan diterima magang di Hub Academy.
        </p>
        <p>
            Untuk tahap selanjutnya yakni, terkait tentang TTD Kontrak Magang dan kebutuhan lainnya
            mengenai persiapan magang. Kami akan mengundang teman-teman dalam Online Meet preparation
            Internship. Schedule akan kami kirimkan secepatnya, mohon ditunggu ya kak.
        </p>
        <p>
            Sekali lagi kami ucapkan Selamat kepada <strong>"Nasywa Alifiyah Nur Maulida"</strong>.
            Persiapkan dirimu untuk tantangan ke depan, Semangat !!!
        </p>
        <p>Best Regards,</p>
        <p>(Tim Hub Academy)</p>
        
        <div class="text-center mt-4">
            <a href="{{ url('/') }}" class="btn btn-dark px-4">Kembali</a>
        </div>
        
    </div>
</div>
@endsection
