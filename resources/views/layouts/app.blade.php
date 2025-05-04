<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <!-- Tambahkan logo di pojok kiri -->
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('images/hub.svg') }}" alt="Logo" width="50" height="50" class="me-2">
                
            </a>
    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('formulir') }}">Pengajuan Magang</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('proses.seleksi') }}">Proses Seleksi</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('path/to/your/sizuka.svg') }}">

                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                            <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                            <a class="dropdown-item text-danger" href="{{ route('logout') }}">Logout</a>
                        </div>
                        
                        
                    </li>
                </ul>
            </div>
        </nav>
    
    <!-- End Navbar -->

    <!-- Content -->
    <div class="container mt-4">
        @yield('content')
    </div>
    <!-- End Content -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
