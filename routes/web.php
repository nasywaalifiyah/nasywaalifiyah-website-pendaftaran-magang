<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/rekapmahasiswa', [AdminController::class, 'rekapmahasiswa'])->name('rekapmahasiswa');



Route::get('/seleksi', [UserController::class, 'seleksi']);

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'authenticate'])->name('login.post');


Route::get('/wawancara', [UserController:: class, 'wawancara']);

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->name('dashboard');


Route::get('/', function () {
    return view('user.seleksi'); // Atur halaman utama
})->name('home');

Route::get('/seleksi', [UserController::class, 'seleksi'])->name('seleksi');

Route::post('/logout', function () {
    // Logout logic
    return redirect('/');
})->name('logout');

Route::get('/frontend', [UserController::class, 'index'])->name('frontend');

Route::get('/soaltest', [UserController::class, 'soaltest'])->name('soaltest');

Route::post('/soaltest/submit', [UserController::class, 'submitSoal'])->name('submit.soal');

Route::get('/formulir-satu', [UserController::class, 'showForm'])->name('formulir.satu');

Route::get('/formulir', [UserController::class, 'formulir'])->name('formulir');


Route::post('/formulir/submit', [UserController::class, 'submitForm'])->name('submit.formulir');

Route::get('/tolakwawancara', [UserController::class, 'tolakWawancara'])->name('tolakwawancara');

Route::get('/submittest', [UserController::class, 'showSubmitTest'])->name('submittest');

Route::get('/belumtest', function () {
    return view('user.belumtest');
})->name('belumtest');

Route::get('/belumwawancara', [UserController::class, 'belumwawancara'])->name('belumwawancara');

Route::get('/formulir', [UserController::class, 'formulir'])->name('formulir');


Route::get('/pengumuman', [UserController::class, 'pengumuman'])->name('pengumuman');


// Route untuk tiap button
Route::get('/mengisi-formulir', [UserController::class, 'mengisiFormulir'])->name('mengisiform');
Route::get('/pengerjaan-test', [UserController::class, 'pengerjaanTest'])->name('test');
Route::get('/wawancara', [UserController::class, 'wawancara'])->name('wawancara');
Route::get('/pengumuman', [UserController::class, 'pengumuman'])->name('pengumuman');

Route::get('/proses-seleksi', [UserController::class, 'prosesSeleksi'])->name('proses.seleksi');

Route::get('/final', [UserController::class, 'final'])->name('final');

// Rute untuk halaman final
Route::get('/final', [UserController::class, 'final'])->name('final');

 
Route::get('/rekapmentor', [AdminController::class, 'rekapmentor'])->name('rekapmentor');

Route::get('/dashboardadmin', [AdminController::class, 'dashboardadmin'])->name('dashboardadmin');

Route::get('/formuliradmin', [AdminController::class, 'formuliradmin'])->name('formuliradmin');

Route::post('/updateJawaban', [AdminController::class, 'updateJawaban'])->name('updateJawaban');

Route::get('/lihatjawaban', [AdminController::class, 'lihatjawaban'])->name('lihatjawaban');

Route::get('/daftarnilai', [AdminController::class, 'showNilai'])->name('daftar.penilaian');

// Edit Route
Route::get('/penilaian/edit/{nim}', [AdminController::class, 'editPenilaian'])->name('edit.penilaian');

// Delete Route
Route::get('/penilaian/delete/{nim}', [AdminController::class, 'deletePenilaian'])->name('delete.penilaian');

// View Detail Route
Route::get('/penilaian/view/{nim}', [AdminController::class, 'viewPenilaian'])->name('view.penilaian');

Route::get('/daftar-penilaian', [AdminController::class, 'showNilai'])->name('daftar.penilaian');

Route::post('/kirim', [AdminController::class, 'kirim'])->name('kirim');
Route::get('/finalseleksi', [AdminController::class, 'finalSeleksi'])->name('finalseleksi');


Route::get('/pelamar/{id}', [AdminController::class, 'show'])->name('pelamar.detail');

Route::get('/tambah-pelamar', [AdminController::class, 'create'])->name('pelamar.create'); // Menampilkan form
Route::post('/tambah-pelamar', [AdminController::class, 'store'])->name('pelamar.store'); // Menyimpan data

Route::get('/pelamar/create', [PelamarController::class, 'create'])->name('pelamar.create');

use App\Http\Controllers\PelamarController;

Route::get('/pelamar/tolak', [PelamarController::class, 'tolak'])->name('pelamar.tolak');

// Rute untuk menampilkan halaman profil
Route::get('/profile', [UserController::class, 'showProfile'])->name('profile');
Route::post('/profile/update', [UserController::class, 'updateprofile'])
     ->name('updateprofile')
     ->middleware('auth');

// Rute untuk memperbarui profil pengguna
Route::post('/profile/update', [UserController::class, 'updateprofile'])->name('updateprofile');

Route::get('/backend', [UserController::class, 'backend'])->name('backend');

Route::get('/backend', [UserController::class, 'backend'])->name('backend');

Route::get('/daftar', [UserController::class, 'daftar'])->name('daftar1');
Route::post('/daftar', [UserController::class, 'authenticate'])->name('daftar1.post');

Route::get('/daftarpelamar', [AdminController::class, 'index'])->name('applicant.index');
Route::get('/daftarpelamar/{id}', [AdminController::class, 'show'])->name('applicant.show');
Route::get('/daftarpelamar/{id}/edit', [AdminController::class, 'edit'])->name('applicant.edit');
Route::delete('/daftarpelamar/{id}', [AdminController::class, 'destroy'])->name('applicant.destroy');

Route::get('/admin/shownilai/{id}', [AdminController::class, 'showNilai'])->name('applicant.showNilai');

Route::get('/lolosformulir', [AdminController::class, 'lolosformulir'])->name('lolosformulir');

Route::get('/tolakformulir', [AdminController::class, 'tolakformulir'])->name('tolakformulir');

// Correct route definition (this should only appear once)
Route::get('/profileadmin', [UserController::class, 'showProfileadmin'])->name('profileadmin');
Route::post('/profileadmin/update', [UserController::class, 'updateprofileadmin'])
     ->name('updateprofileadmin')
     ->middleware('auth');

// Rute untuk memperbarui profil pengguna
Route::post('/profileadmin/update', [UserController::class, 'updateprofileadmin'])->name('updateprofileadmin');