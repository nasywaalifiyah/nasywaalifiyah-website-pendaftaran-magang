@extends('layouts.app')

@section('title', 'FrontEnd Developer')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm p-4">
        <h2 class="fw-bold">FrontEnd Developer</h2>
        <p>
            Frontend Developer adalah bidang yang memiliki tanggung jawab dalam pembuatan tampilan dari sebuah website. 
            Fokus utama dari tugas seorang Front-end Developer yakni, memastikan bahwa setiap bagian dari website dapat 
            dilihat dan berinteraksi secara langsung dengan pengguna. Hal dasar yang perlu dipahami oleh frontend developer 
            adalah HTML, CSS, dan JavaScript.
        </p>

        <h3 class="fw-bold mt-4">Skill yang dibutuhkan</h3>
        <ul class="list-unstyled">
            <li>✅ Memahami HTML, CSS, dan Javascript.</li>
            <li>✅ Memahami cara menggunakan control versi seperti Git.</li>
            <li>✅ Memahami konsep REST API.</li>
            <li>✅ Memahami beberapa framework yang sering digunakan seperti Tailwind, Bootstrap, VueJS atau ReactJS.</li>
            <li>✅ Memahami proses pembuatan website dengan menggunakan metode responsive web design.</li>
        </ul>

        <div class="text-center mt-4">
            <a href="{{ url('/') }}" class="btn btn-dark px-4">Kembali</a>
        </div>
    </div>
</div>
@endsection
