<!-- resources/views/admin/dashboardadmin.blade.php -->
@extends('layouts.admin')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-semibold mb-6">Dashboard</h1>

    <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
        <!-- Card Total User -->
        <div class="bg-indigo-900 text-white p-6 rounded-lg shadow-md text-center">
            <i class="fas fa-user-graduate text-3xl"></i>
            <h2 class="text-lg font-semibold mt-2">Total User</h2>
            <p class="text-2xl font-bold">14</p>
        </div>

        <!-- Card Total Pelamar -->
        <div class="bg-indigo-900 text-white p-6 rounded-lg shadow-md text-center">
            <i class="fas fa-users text-3xl"></i>
            <h2 class="text-lg font-semibold mt-2">Daftar Pelamar</h2>
            <p class="text-2xl font-bold">20</p>
        </div>

        <!-- Card Daftar Penilaian -->
        <div class="bg-indigo-900 text-white p-6 rounded-lg shadow-md text-center">
            <i class="fas fa-pencil-alt text-3xl"></i>
            <h2 class="text-lg font-semibold mt-2">Daftar Penilaian</h2>
            <p class="text-2xl font-bold">20</p>
        </div>

        <!-- Card Daftar Wawancara -->
        <div class="bg-indigo-900 text-white p-6 rounded-lg shadow-md text-center">
            <i class="fas fa-calendar-check text-3xl"></i>
            <h2 class="text-lg font-semibold mt-2">Daftar Wawancara</h2>
            <p class="text-2xl font-bold">20</p>
        </div>
    </div>
</div>
@endsection
