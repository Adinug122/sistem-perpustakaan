<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [LandingController::class,'index'])->name('landing');

Route::get('/buku',[LandingController::class,'semuaBuku'])->name('buku');
Route::get('/pengumuman',[LandingController::class,'pengumuman'])->name('pengumuman');
Route::get('/pengumuman/{pengumuman}', [PengumumanController::class, 'show'])->name('pengumuman.show');
Route::get('/admin/dashboard',[App\Http\Controllers\AdminController::class,'dashboard'])->name('admin.dashboard')->middleware(['auth','admin']);
// Route::get('/user/dashboard',[App\Http\Controllers\UserController::class,'dashboard'])->name('user.dashboard')->middleware(['auth','user']);
// Route::get('/user/dashboard',[App\Http\Controllers\DashboardController::class,'index'])->name('user.dashboard')->middleware(['auth','user']);



Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
       Route::resource('member',MemberController::class);
       Route::resource('buku', BukuController::class);
       Route::resource('kategori', KategoriController::class);
       Route::resource('pengumuman',PengumumanController::class); 
       Route::resource('pinjam',PinjamController::class);
       Route::resource('pengembalian',PengembalianController::class);
});

// User routes
Route::middleware(['auth', 'user'])->prefix('user')->name('user.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});


Route::middleware('auth')->group(function () {
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
