@extends('layouts.app')

@section('title', 'Formulir Pendaftaran Magang')

@section('content')
<div class="container mt-5">
    <h3 class="text-center fw-bold">Formulir Pendaftaran Magang</h3>
    <p class="text-center">Silakan isi formulir di bawah ini.</p>

    <form action="{{ route('submit.formulir') }}" method="POST" enctype="multipart/form-data" class="mt-4">
        @csrf

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama_lengkap" required>
        </div>

        <div class="mb-3">
            <label class="form-label">NIM</label>
            <input type="text" class="form-control" name="nim" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Instansi</label>
            <input type="text" class="form-control" name="nama_instansi" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Prodi / Jurusan</label>
            <input type="text" class="form-control" name="prodi" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Minat Magang</label>
            <select class="form-select" name="minat_magang" required>
                <option value="" disabled selected>Pilih Minat Magang</option>
                <option value="Backend Developer">Backend Developer</option>
                <option value="Frontend Developer">Frontend Developer</option>
                <option value="Mobile Developer">Mobile Developer</option>
                <option value="UI/UX Designer">UI/UX Designer</option>
                <option value="System Analyst">System Analyst</option>
                <option value="Graphic Icon & Illustration">Graphic Icon & Illustration</option>
                <option value="Media dan Creative">Media dan Creative</option>
                <option value="Management">Management</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Upload CV</label>
            <input type="file" class="form-control" name="cv" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Upload Portofolio</label>
            <input type="file" class="form-control" name="portofolio" required>
        </div>

        <button type="submit" class="btn btn-primary btn-kirim">Kirim</button>
    </form>
</div>

<!-- Toast Notification for Success -->
@if(session('success'))
    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="toastSuccess" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session('success') }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif

@endsection

@section('scripts')
<script>
    // Automatically show the toast notification when the page loads
    var toast = new bootstrap.Toast(document.getElementById('toastSuccess'));
    toast.show();
</script>
@endsection
