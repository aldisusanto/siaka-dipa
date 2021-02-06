<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\LandingController::class, 'landing'])->name('landing');
Route::get('login', [\App\Http\Controllers\AuthController::class, 'login'])->name("login");
Route::post('inLogin', [\App\Http\Controllers\AuthController::class, 'inLogin'])->name('inLogin');
Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

// Dashboard Admin
Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
    Route::get('admin_dashboard', [\App\Http\Controllers\AdminDashboardController::class, 'index'])->name('admin_dashboard');

//    Jurusan
    Route::get('jurusan', [\App\Http\Controllers\JurusanController::class, 'index'])->name('jurusan');
    Route::post('jurusan/create', [\App\Http\Controllers\JurusanController::class, 'create'])->name('create_jurusan');
    Route::get('jurusan/{id}/edit', [\App\Http\Controllers\JurusanController::class, 'edit'])->name('edit_jurusan');
    Route::post('jurusan/{id}/update', [\App\Http\Controllers\JurusanController::class, 'update'])->name('update_jurusan');
    Route::get('jurusan/{id}/delete', [\App\Http\Controllers\JurusanController::class, 'delete'])->name('delete_jurusan');

//    Matakuliah
    Route::get('matakuliah', [\App\Http\Controllers\MatakuliahController::class, 'index'])->name('matakuliah');
    Route::post('matakuliah/create', [\App\Http\Controllers\MatakuliahController::class, 'create'])->name('create_matakuliah');
    Route::get('matakuliah/{id}/edit', [\App\Http\Controllers\MatakuliahController::class, 'edit'])->name('edit_matakuliah');
    Route::post('matakuliah/{id}/update', [\App\Http\Controllers\MatakuliahController::class, 'update'])->name('update_matakuliah');
    Route::get('matakuliah/{id}/delete', [\App\Http\Controllers\MatakuliahController::class, 'delete'])->name('delete_matakuliah');


//    Dosen
    Route::get('dosen', [\App\Http\Controllers\DosenController::class, 'index'])->name('dosen');
    Route::post('dosen/create', [\App\Http\Controllers\DosenController::class, 'create'])->name('create_dosen');
    Route::get('dosen/{id}/edit', [\App\Http\Controllers\DosenController::class, 'edit'])->name('edit_dosen');
    Route::post('dosen/{id}/update', [\App\Http\Controllers\DosenController::class, 'update'])->name('update_dosen');
    Route::get('dosen/{id}/delete', [\App\Http\Controllers\DosenController::class, 'delete'])->name('delete_dosen');
//    Mahasiswa
    Route::get('mahasiswa', [\App\Http\Controllers\MahasiswaController::class, 'index'])->name('mahasiswa');
    Route::post('mahasiswa/create', [\App\Http\Controllers\MahasiswaController::class, 'create'])->name('create_mahasiswa');
    Route::get('mahasiswa/{id}/edit', [\App\Http\Controllers\MahasiswaController::class, 'edit'])->name('edit_mahasiswa');
    Route::post('mahasiswa/{id}/update', [\App\Http\Controllers\MahasiswaController::class, 'update'])->name('update_mahasiswa');
    Route::get('mahasiswa/{id}/delete', [\App\Http\Controllers\MahasiswaController::class, 'delete'])->name('delete_mahasiswa');
    Route::get('mahasiswa/{id}/profile', [\App\Http\Controllers\MahasiswaController::class, 'profile'])->name('[profile');
    Route::post('mahasiswa/{id}/nilai', [\App\Http\Controllers\MahasiswaController::class, 'nilai'])->name('[nilai');
    Route::post('mahasiswa/{id}/jadwal', [\App\Http\Controllers\MahasiswaController::class, 'jadwal'])->name('[jadwal');
});

Route::group(['middleware' => ['auth', 'checkRole:mahasiswa']], function () {
    Route::get('mahasiswa_dashboard', [\App\Http\Controllers\MahasiswaDashboardController::class, 'index'])->name('mahasiswa_dashboard');
    Route::get('profile', [\App\Http\Controllers\ProfileMahasiswaController::class, 'index'])->name('profile');
    Route::get('jadwal', [\App\Http\Controllers\JadwalMahasiswaController::class, 'index'])->name('jadwal');
    Route::get('nilai', [\App\Http\Controllers\NilaiMahasiswaController::class, 'index'])->name('nilai');
    Route::get('transkrip', [\App\Http\Controllers\TranscriptMahasiswaController::class, 'index'])->name('transkrip');
    Route::get('dosen_kontak', [\App\Http\Controllers\DosenListController::class, 'index'])->name('dosen_kontak');
});

