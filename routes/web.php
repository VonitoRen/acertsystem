<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppearanceCertification;
use App\Http\Controllers\CertificationOfRegistration;
use App\Http\Controllers\LegalCertification;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
Route::get('/admin/signatories',[AdminController::class,'signatories'])->name('admin.signatories');
Route::get('/admin/users',[AdminController::class,'users'])->name('admin.users');
Route::get('/registration/dashboard',[CertificationOfRegistration::class,'dashboard'])->name('certreg.dashboard');
Route::get('/fad/dashboard',[AppearanceCertification::class,'dashboard'])->name('fad.dashboard');
Route::get('/legal/dashboard',[LegalCertification::class,'dashboard'])->name('legal.dashboard');
// Route::get('/fad/dashboard',[FadController::class,'dashboard'])->name('fad.dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::delete('/profession/{id}', [AdminController::class, 'deleteProfession'])->name('delete.profession');
Route::post('/profession', [AdminController::class, 'store'])->name('store.profession');
Route::put('/update-profession/{id}', [AdminController::class, 'updateProfession'])->name('update.profession');

Route::delete('/signatory/{id}', [AdminController::class, 'deletesignatories'])->name('delete.signatories');
Route::post('/signatory', [AdminController::class, 'storesignatory'])->name('store.signatories');
Route::put('/update-signatory/{id}', [AdminController::class, 'updatesignatories'])->name('update.signatories');

Route::delete('/user/{id}', [AdminController::class, 'deleteusers'])->name('delete.users');
Route::post('/user', [AdminController::class, 'storeusers'])->name('store.users');
Route::put('/update-user/{id}', [AdminController::class, 'updateusers'])->name('update.users');

require __DIR__.'/auth.php';

