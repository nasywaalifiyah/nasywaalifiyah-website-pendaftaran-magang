<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white min-h-screen">
            <div class="p-5 text-2xl font-bold">
                Admin
            </div>
            <nav class="mt-5">
                <a href="#" class="block py-2.5 px-4 hover:bg-gray-700">Dashboard</a>
                <a href="{{ route('rekapmahasiswa') }}" class="block py-2.5 px-4 hover:bg-gray-700">User</a>
                <a href="#" class="block py-2.5 px-4 hover:bg-gray-700">Daftar Pelamar</a>
                <a href="#" class="block py-2.5 px-4 hover:bg-gray-700">Daftar Penilaian</a>
                <a href="#" class="block py-2.5 px-4 hover:bg-gray-700">Daftar Wawancara</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>
</body>
</html>
