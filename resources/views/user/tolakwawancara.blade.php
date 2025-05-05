<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes Belum Tersedia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-custom {
            background-color: #1A0859;
            color: white;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 8px;
            text-decoration: none;
            display: inline-block;
        }
        .btn-custom:hover {
            background-color: #150648; /* Warna lebih gelap saat hover */
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">

    <div class="border border-danger rounded p-5 text-center bg-white shadow" style="max-width: 600px; width: 90%;">
        <h4 class="fw-bold text-dark"> Anda sudah menolak untuk melanjutkan ketahap wawanacara!</h4>
        <img src="{{ asset('images/tolak.svg') }}" width="200"> <!-- Ukuran gambar diperkecil -->

        <!-- Tombol dengan warna #1A0859 dan margin atas -->
        <div style="margin-top: 20px;">
            <a href="{{ route('seleksi') }}" class="btn-custom">Kembali</a>
        </div>
    </div>

</body>
</html>