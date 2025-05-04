@extends('layouts.app')

@section('title', 'Backend Developer')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm p-4">
        <h2 class="fw-bold">BackendDeveloper</h2>
        <p>
            Backend adalah bagian dari aplikasi web atau sistem yang berfungsi untuk mengelola dan memproses data serta logika aplikasi yang tidak terlihat oleh pengguna. Backend mencakup server, database, dan API yang saling berinteraksi untuk menyediakan data atau layanan kepada frontend (tampilan yang dilihat oleh pengguna).
        </p>

        <h3 class="fw-bold mt-4">Skill yang dibutuhkan</h3>
        <ul class="list-unstyled">
            <li>✅ Bahasa pemograman: PHP, Java, Python, Ruby, Node.js, C#.</li>
            <li>✅ API (Application Programming Interface):.</li>
            <li>✅ Pengalaman dengan Git untuk version control dan kolaborasi dalam proyek tim.</li>
            <li>✅ Kemampuan dalam unit testing dan integration testing untuk memastikan kode yang ditulis berjalan dengan baik.</li>
            <li>✅ Deployment dan Continuous Integration.</li>
        </ul>

        <div class="text-center mt-4">
            <a href="{{ url('/') }}" class="btn btn-dark px-4">Kembali</a>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('backend') }}" class="btn btn-primary">Kembali</a>
    </div>
</div>
@endsection
