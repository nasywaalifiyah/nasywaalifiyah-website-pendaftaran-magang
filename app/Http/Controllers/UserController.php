<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Pastikan ini ada
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function seleksi()
    {
        return view('user.seleksi');
    }

    public function login()
    {
        return view('user.login');
    }

    
    public function wawancara()
    {
        return view('user.wawancara');
    }
    
    public function frontend()
    {
        return view('user.frontend');
    }

    public function index()
    {
        return view('user.frontend'); 
    }

    
        public function soalTest()
        {
            return view('user.soaltest'); // Sesuaikan dengan lokasi file Blade
        }
    
        public function submitSoal(Request $request)
        {
            // Proses jawaban yang dikirimkan
            $jawaban = $request->input('jawaban');
    
            // Simpan ke database (opsional, bisa ditambahkan nanti)
    
            return back()->with('success', 'Jawaban berhasil dikirim!');
        }

        public function formulir()
    {
        return view('user.formulir');
    }

    // Menangani submit formulir pendaftaran
    public function submitForm(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'nama_lengkap' => 'required|string|max:255',
            'nim' => 'required|string|max:20',
            'nama_instansi' => 'required|string|max:255',
            'prodi' => 'required|string|max:255',
            'minat_magang' => 'required|string|max:255',
            'cv' => 'required|mimes:pdf|max:2048', // Hanya file PDF, maksimal 2MB
            'portofolio' => 'required|mimes:pdf|max:2048',
        ]);

        // Simpan file ke storage Laravel
        $cvPath = $request->file('cv')->store('uploads/cv', 'public');
        $portofolioPath = $request->file('portofolio')->store('uploads/portofolio', 'public');

        // Simpan data ke database (opsional)
        // Contoh jika ada tabel `formulirs` di database:
        /*
        Formulir::create([
            'email' => $request->email,
            'nama_lengkap' => $request->nama_lengkap,
            'nim' => $request->nim,
            'nama_instansi' => $request->nama_instansi,
            'prodi' => $request->prodi,
            'minat_magang' => $request->minat_magang,
            'cv' => $cvPath,
            'portofolio' => $portofolioPath,
        ]);
        */

        return redirect()->route('formulir')->with('success', 'Formulir berhasil dikirim!');
    }
    public function tolakWawancara()
    {
        return view('user.tolakwawancara');
    }
    
    public function showSubmitTest()
    {
        // Ambil data jawaban dari database atau session (sesuai implementasi)
        $jawaban = "https://drive.google.com/file/d/1AbCdEfGhIjK/view?usp=sharing"; // Contoh data
    
        // Kirim data ke view
        return view('user.submittest', compact('jawaban'));
    }
    
    public function cekTes()
    {
        // Cek apakah tes tersedia
        $tesTersedia = false; 
    
        if (!$tesTersedia) {
            return redirect()->route('belumtest');
        }
    
        // Jika tes tersedia, arahkan ke halaman soal tes
        return view('user.soaltest');
    }
    
    public function belumwawancara()
{
    return view('user.belumwawancara'); // Pastikan nama file Blade benar
}
    
public function prosesSeleksi()
{
    return view('user.seleksi'); // Pastikan file ini ada di resources/views/user/seleksi.blade.php
}

    public function final()
    {
        return view('user.final');
    }

    
    public function showprofile()
    {
        $user = Auth::user();  // Ambil data pengguna yang sedang login
        return view('user.profile')->with('user', $user);
    }

    // Menyimpan perubahan profil pengguna
    public function updateprofile(Request $request)
    {
        $user = Auth::user();
        
        // Jika user tidak terautentikasi
        if (!$user) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu');
        }
    
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);
    
        // Update data user
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        
        if (!empty($validatedData['password'])) {
            $user->password = Hash::make($validatedData['password']);
        }
        
        $user->save();
    
        return redirect()->route('profile')->with('success', 'Profil berhasil diperbarui!');
    }
    
        public function backend()
        {
            return view('user.backend');
        }
        
        public function showDetail()
    {
        return view('backend-detail');  // Tampilkan view untuk detail backend
    }
    

    public function daftar()
    {
        return view('user.daftar');
    }
}

    
    




