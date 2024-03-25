<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppearanceCertificationController;
use App\Http\Controllers\AccreditationCertification;
use App\Http\Controllers\CertificationOfRegistration;
use App\Http\Controllers\LegalCertification;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CorPdfController;
use App\Http\Controllers\AcPdfController;
use App\Http\Controllers\AppearancePDFController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Protected routes
// Route::middleware(['auth'])->group(function () {
//     Route::get('/registration/dashboard', [CertificationOfRegistration::class, 'dashboard'])->name('certreg.dashboard');
//     Route::get('/fad/dashboard', [AppearanceCertificationController::class, 'dashboard'])->name('fad.dashboard');
//     Route::get('/legal/dashboard', [LegalCertification::class, 'dashboard'])->name('legal.dashboard');
//     Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
// });


//admin routes
Route::middleware(['auth','role===1'])->group(function () {
    Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
});
//registration routes
Route::middleware(['auth','role===3'])->group(function () {
    Route::get('/registration/dashboard',[CertificationOfRegistration::class,'dashboard'])->name('certreg.dashboard');
});
//fad routes
Route::middleware(['auth','role===4'])->group(function () {
    Route::get('/fad/dashboard',[AppearanceCertificationController::class,'dashboard'])->name('fad.dashboard');
});
//legal routes
Route::middleware(['auth','role===2'])->group(function () {
    Route::get('/legal/dashboard',[LegalCertification::class,'dashboard'])->name('legal.dashboard');
});

// pdf dagitoy
Route::get('preview-pdf/{id}', [CorPdfController::class, 'previewPdf'])->name('preview.pdf');
Route::get('preview-ac-pdf/{id}', [AcPdfController::class, 'previewPdf'])->name('previewAC.pdf');
Route::get('preview-appearance-pdf/{id}', [AppearancePDFController::class, 'previewPdf'])->name('previewAppearance.pdf');

// dashboards
Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
Route::get('/registration/dashboard',[CertificationOfRegistration::class,'dashboard'])->name('certreg.dashboard');
Route::get('/fad/dashboard',[AppearanceCertificationController::class,'dashboard'])->name('fad.dashboard');
Route::get('/legal/dashboard',[LegalCertification::class,'dashboard'])->name('legal.dashboard');



Route::post('/registration/dashboard', [CertificationOfRegistration::class, 'store'])->name('certreg.store');

Route::get('/registration/cor',[CertificationOfRegistration::class,'index'])->name('certreg.cor');



// EDIT ROUTES COR
Route::get('/edit-CORcertificate/{id}',  [CertificationOfRegistration::class, 'editCORCertificate'])->name('edit.CORcertificate');
Route::put('/update-CORcertificate/{id}', [CertificationOfRegistration::class, 'updateCORCertificate'])->name('update.CORcertificate');

// Route::get('/registration', [CertificationOfRegistration::class, 'index'])->name('certregistration.index');

Route::get('/accreditation_index', [AccreditationCertification::class, 'index'])->name('accreditation.index');
Route::post('/accreditation', [AccreditationCertification::class, 'store'])->name('accreditation.store');

// EDIT ROUTES COR
Route::get('/edit-CORcertificate/{id}',  [CertificationOfRegistration::class, 'editCORCertificate'])->name('edit.CORcertificate');
Route::put('/update-CORcertificate/{id}', [CertificationOfRegistration::class, 'updateCORCertificate'])->name('update.CORcertificate');

// EDIT ROUTES AC
Route::get('/edit-certificate/{id}',  [AccreditationCertification::class, 'editACCertificate'])->name('edit.certificateAC');
Route::put('/update-certificate/{id}', [AccreditationCertification::class, 'updateACCertificate'])->name('update.certificateAC');

// EDIT ROUTES AP
Route::get('/edit-APcertificate/{id}', [AppearanceCertificationController::class, 'editAPCertificate'])->name('edit.APcertificate');
Route::put('/update-APcertificate/{id}', [AppearanceCertificationController::class, 'updateAPCertificate'])->name('update.APcertificate');
Route::get('/appearance', [AppearanceCertificationController::class, 'index'])->name('appearance.index');



// all delete
Route::delete('/certificate-cor/{id}', [CertificationOfRegistration::class, 'deleteCertificate'])->name('delete.certificate-cor');
Route::delete('/certificate-ac/{id}', [AccreditationCertification::class, 'deleteCertificate'])->name('delete.certificate-ac');
Route::delete('/certificate-ap/{id}', [AppearanceCertificationController::class, 'deleteCertificate'])->name('delete.certificate-ap');



Route::get('/admin/signatories',[AdminController::class,'signatories'])->name('admin.signatories');
Route::get('/admin/users',[AdminController::class,'users'])->name('admin.users');

// Route::get('/fad/dashboard',[FadController::class,'dashboard'])->name('fad.dashboard');


Route::get('/registration', [CertificationOfRegistration::class, 'index'])->name('certregistration.index');
Route::post('/certregistration', [CertificationOfRegistration::class, 'store'])->name('certregistration.store');

Route::get('/accreditation_index', [AccreditationCertification::class, 'index'])->name('accreditation.index');

Route::post('/appearance', [AppearanceCertificationController::class, 'store'])->name('appearance.store');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// admin area- profession signatory and users

Route::delete('/profession/{id}', [AdminController::class, 'deleteProfession'])->name('delete.profession');
Route::post('/profession', [AdminController::class, 'store'])->name('store.profession');
Route::put('/update-profession/{id}', [AdminController::class, 'updateProfession'])->name('update.profession');

Route::delete('/signatory/{id}', [AdminController::class, 'deletesignatories'])->name('delete.signatories');
Route::post('/signatory', [AdminController::class, 'storesignatory'])->name('store.signatories');
Route::put('/update-signatory/{id}', [AdminController::class, 'updatesignatories'])->name('update.signatories');

Route::delete('/user/{id}', [AdminController::class, 'deleteusers'])->name('delete.users');
Route::post('/user', [AdminController::class, 'storeusers'])->name('store.users');
Route::put('/update-user/{id}', [AdminController::class, 'updateusers'])->name('update.users');
Route::delete('/user-delete/{id}', [AdminController::class, 'deleteusers'])->name('delete.users');

require __DIR__.'/auth.php';

