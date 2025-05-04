@extends('layouts.app')

@section('title', 'Proses Seleksi')

@section('content')
<div class="text-center mt-4">
    <h2>Hai Selamat Datang, Devano!</h2>
</div>

<!-- Daftar Posisi Magang -->
<div class="row mt-4">
    @php
        $positions = [
            ['title' => 'Backend Developer', 'image' => 'backend.svg', 'route' => 'backend'],
            ['title' => 'Frontend Developer', 'image' => 'frontend.svg'],
            ['title' => 'Mobile Developer', 'image' => 'mobile.svg'],
            ['title' => 'UI UX Designer', 'image' => 'uiux.svg'],
            ['title' => 'System Analyst', 'image' => 'systemanalyst.svg'],
            ['title' => 'Media dan Creative', 'image' => 'media.svg'],
            ['title' => 'Graphic Icon & Illustration', 'image' => 'grafik.svg'],
            ['title' => 'Management', 'image' => 'manajement.svg'],
        ];
    @endphp

    @foreach($positions as $pos)
        <div class="col-md-3 col-sm-6 mt-3">
            <div class="card h-100 p-3 text-center shadow-sm d-flex flex-column">
                <img src="{{ asset('images/' . $pos['image']) }}" alt="{{ $pos['title'] }}" class="img-fluid mb-3" style="max-height: 150px; object-fit: contain;">
                <h5 class="flex-grow-1">{{ $pos['title'] }}</h5>
                <a href="frontend" class="btn text-white mt-auto text-decoration-none" style="background-color: #1A0859;">Lihat detail</a>
            </div>
        </div>
    @endforeach
</div>

<!-- Tahapan Seleksi -->
<h3 class="mt-5 mb-6 text-center fw-bold" style="color: #1A0859;">Tahapan Proses Seleksi</h3>
<hr style="width: 25%; height: 4px; background-color: #1A0859; border: none; margin: auto;">

<div class="row text-center mt-4">
    @php
    $steps = [
        ['number' => 1, 'title' => 'Mengisi Formulir', 'image' => 'mengisiform.svg', 'route' => 'formulir'],
        ['number' => 2, 'title' => 'Pengerjaan Test', 'image' => 'test.svg', 'route' => 'belumtest'],
        ['number' => 3, 'title' => 'Wawancara', 'image' => 'wawancara.svg', 'route' => 'belumwawancara'],
        ['number' => 4, 'title' => 'Pengumuman', 'image' => 'pengumuman.svg', 'route' => 'final'],  
    ];

    @endphp

    @foreach($steps as $step)
        <div class="col-md-3 col-sm-6">
            <div class="card p-4 d-flex flex-column align-items-center">
                <span class="badge d-flex align-items-center justify-content-center"
                      style="width: 50px; height: 50px; font-size: 18px; background-color: #D80451; color: white; border-radius: 50%; margin-bottom: 10px;">
                    {{ $step['number'] }}
                </span>
                <img src="{{ asset('images/' . $step['image']) }}" class="img-fluid mb-2" alt="{{ $step['title'] }}">
                
                <a href="{{ route($step['route']) }}" class="btn text-white fw-bold mt-2" 
                   style="background-color: #1A0859; width: 80%;">
                    {{ $step['title'] }}
                </a>

            </div>
        </div>
    @endforeach
</div>
@endsection
