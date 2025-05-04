<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;

class AdminController extends Controller
{
    public function rekapmahasiswa()
    {
        return view('admin.rekapuser'); 
    }

    public function rekapmentor()
    {
        return view('admin.rekapmentor'); 
    }

    public function dashboardadmin()
    {
        return view('admin.dashboardadmin'); 
    }

    public function formuliradmin()
    {
        return view('admin.formuliradmin'); 
    }

    public function lihatjawaban()
    {
        return view('admin.lihatjawaban'); 
    }

    public function editPenilaian($nim)
    {
        // Logic untuk mengedit data berdasarkan NIM
        // Misalnya, load data dan tampilkan form edit
        $data = Penilaian::where('nim', $nim)->first();
        return view('admin.editPenilaian', compact('data'));
    }
    
    public function deletePenilaian($nim)
    {
        // Logic untuk menghapus data berdasarkan NIM
        $data = Penilaian::where('nim', $nim)->first();
        $data->delete();
        return redirect()->route('daftar.penilaian')->with('success', 'Data berhasil dihapus.');
    }
    
    public function viewPenilaian($nim)
    {
        // Logic untuk menampilkan detail data berdasarkan NIM
        $data = Penilaian::where('nim', $nim)->first();
        return view('admin.viewPenilaian', compact('data'));
    }
    
    public function showNilai()
    {
        $nilaiData = [
            // Data yang ingin ditampilkan
        ];
        
        return view('admin.daftarnilai', compact('nilaiData'));
    }
    

    public function kirim(Request $request)
{
    // Logic untuk mengirimkan data atau melakukan aksi kirim
    return redirect()->back()->with('success', 'Kirim berhasil!');
}

public function tolak(Request $request)
{
    // Logic untuk menolak data atau melakukan aksi tolak
    return redirect()->back()->with('error', 'Data ditolak!');
}

public function finalSeleksi()
    {
        return view('admin.finalseleksi');  
    }
    
    

    public function show($id)
    {
        $pelamar = Pelamar::findOrFail($id);
        return view('pelamar_detail', compact('pelamar'));
    }


    public function create()
    {
        return view('tambah-pelamar'); // Menampilkan view tambah-pelamar
    }

    // Menyimpan data pelamar
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'nim' => 'required|string|max:20',
            'nama_instansi' => 'required|string|max:255',
            'prodi_jurusan' => 'required|string|max:255',
            'minat_magang' => 'required|string|max:255',
        ]);

        // Simpan pelamar baru ke database
        Pelamar::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'nim' => $request->nim,
            'nama_instansi' => $request->nama_instansi,
            'prodi_jurusan' => $request->prodi_jurusan,
            'minat_magang' => $request->minat_magang,
        ]);

        // Redirect kembali ke form dengan pesan sukses
        return redirect()->route('pelamar.create')->with('success', 'Pelamar berhasil ditambahkan!');
    }



        public function index()
        {
            // Mengambil data pelamar dari database dengan pagination
            $applicants = Applicant::paginate(5);  // Sesuaikan jumlahnya sesuai kebutuhan
    
            // Mengirimkan data ke view
            return view('daftarpelamar', compact('applicants'));
    
        }

        public function lolosformulir()
        {
            return view('admin.lolosformulir'); 
        }

        public function tolakformulir()
        {
            return view('admin.tolakformulir'); 
        }

        

        public function showprofileadmin()
    {
        $user = Auth::user();  // Ambil data pengguna yang sedang login
        return view('admin.profileadmin')->with('user', $user);
    }

  
    public function updateprofileadmin(Request $request)
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
    
        return redirect()->route('profileadmin')->with('success', 'Profil berhasil diperbarui!');
    }
       }
       
    
    

