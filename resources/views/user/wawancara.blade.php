@extends('layouts.app')

@section('title', 'Wawancara')

@section('content')
<div class="container mt-5">
    <div class="card p-4 shadow-sm">
        <p>
            Dengan ini, kami mengucapkan <strong>selamat!</strong> Anda telah berhasil lolos tahap seleksi tes untuk program magang <strong>Frontend Developer</strong> di <strong>PT Inagata</strong>.
            Kami mengundang Anda untuk melanjutkan ke tahap berikutnya, yaitu <strong>seleksi wawancara</strong> yang akan dilakukan secara online melalui Zoom.
        </p>

        <hr>

        <p><strong>🗓️ Tanggal:</strong> <span class="text-primary">12-12-2024</span></p>
        <p><strong>⏰ Waktu:</strong> <span class="text-danger">14.00 WIB</span></p>
        <p>
            <strong>🔗 Link Zoom:</strong> 
            <a href="https://zoom.us/j/1234567890" target="_blank" class="text-decoration-none text-info">
                https://zoom.us/j/1234567890
            </a>
            <br><small class="text-muted">(Harap bergabung 10 menit sebelum jadwal)</small>
        </p>

        <hr>

        <p class="mb-3">
            Mohon pastikan koneksi internet stabil dan berada di tempat yang kondusif saat wawancara berlangsung. 
            Jika ada pertanyaan atau kendala teknis, jangan ragu untuk menghubungi kami.
        </p>

        <p class="fw-bold">Terima kasih atas partisipasi Anda. Kami menantikan pertemuan dengan Anda di tahap wawancara!</p>
    </div>

    <!-- Tombol dengan penyesuaian ukuran -->
    <div class="btn-container">
        <a href="{{ route('dashboard') }}" class="btn btn-success">Lanjutkan</a>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#rejectModal">
            Tolak
        </button>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="rejectModal" tabindex="-1" aria-labelledby="rejectModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="rejectModalLabel">Konfirmasi Tolak Wawancara</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Anda yakin tidak melanjutkan proses seleksi magang?</p>
                <p>Jika Anda menolak, Anda tidak akan dapat melanjutkan ke tahap selanjutnya. Harap pastikan keputusan Anda sudah dipertimbangkan dengan baik.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
    
                <a href="{{ route('tolakwawancara') }}" class="btn btn-danger">Berhenti</a>
                
            </div>
        </div>
    </div>
</div>
@endsection
