<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppearanceCertificationController;
use App\Http\Controllers\FinalityCertificationController;
use App\Http\Controllers\PiccorCertificationController;

use App\Http\Controllers\AccreditationCertification;
use App\Http\Controllers\CertificationOfRegistration;
use App\Http\Controllers\LegalCertification;
use App\Http\Controllers\ComplaintsCertificationController;
use App\Http\Controllers\DocumentSurrenderedController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CorPdfController;
use App\Http\Controllers\AcPdfController;
use App\Http\Controllers\AppearancePDFController;
use App\Http\Controllers\ComplaintsPDFController;
use App\Http\Controllers\FinalityPDFController;
<<<<<<< Updated upstream
use App\Http\Controllers\DocumentSurrenderedPDF;
=======
use App\Http\Controllers\PiccorPDFController;
>>>>>>> Stashed changes

use App\Http\Controllers\FormerFilipinoController;
use App\Models\Professions;
use App\Models\Signatories;
use App\Models\PersonRole;
use App\Models\CertificationsOfRegistration;
use App\Models\AppearanceCertification;
use App\Models\FinalityCertificationModel;
use App\Models\PicCorCertificationModel;
use App\Models\ComplaintsCertificationModel;
use App\Models\SurrenderedDocuments;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/admin/dashboard', [AdminController::class,'dashboard'])->middleware('auth');

// pdf dagitoy
Route::get('preview-pdf/{id}', [CorPdfController::class, 'previewPdf'])->name('preview.pdf');
Route::get('preview-ac-pdf/{id}', [AcPdfController::class, 'previewPdf'])->name('previewAC.pdf');
Route::get('preview-appearance-pdf/{id}', [AppearancePDFController::class, 'previewPdf'])->name('previewAppearance.pdf');
Route::get('preview-complaints-pdf/{id}', [ComplaintsPDFController::class, 'previewPdf'])->name('previewComplaints.pdf');
Route::get('preview-finality-pdf/{id}', [FinalityPDFController::class, 'previewPdf'])->name('previewFinality.pdf');
<<<<<<< Updated upstream
Route::get('preview-surrendered-pdf/{id}', [DocumentSurrenderedPDF::class, 'previewPdf'])->name('previewSurrenderedDocs.pdf');
=======
Route::get('preview-piccor-pdf/{id}', [PiccorPDFController::class, 'previewPdf'])->name('previewPiccor.pdf');
>>>>>>> Stashed changes

// dashboards
// Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
// Route::get('/registration/dashboard',[CertificationOfRegistration::class,'dashboard'])->name('certreg.dashboard');
// Route::get('/fad/dashboard',[AppearanceCertificationController::class,'dashboard'])->name('fad.dashboard');
// Route::get('/legal/dashboard',[LegalCertification::class,'dashboard'])->name('legal.dashboard');

// Admin Dashboard
Route::get('/admin/dashboard', function () {
    if (auth()->check() && auth()->user()->role == 1) {
        $professions = Professions::all();

        return view('admin.dashboard', [
            'professions' => $professions,
        ]);
    } else {
        return back();
    }
})->name('admin.dashboard');

// Registration Dashboard
Route::get('/registration/dashboard', function () {
    if (auth()->check() && auth()->user()->role == 3) {
        
        $certificationOfRegistrations = CertificationsOfRegistration::all();
        $signatories = Signatories::all();
        $professions = Professions::all();
        
        // Filter the personRoles based on role_id
        $personRoles = PersonRole::with('person')
            ->where('role_id', 2)
            ->get();
        
        return view('registration.dashboard', [
            'certificationOfRegistrations' => $certificationOfRegistrations,
            'signatories' => $signatories,
            'professions' => $professions,
            'personRoles' => $personRoles,
        ]);
    } else {
        return back();
    }
})->name('certreg.dashboard');


// FAD Dashboard
Route::get('/fad/dashboard', function () {
    if (auth()->check() && auth()->user()->role == 4) {
        $appearanceCert = AppearanceCertification::all();
        

        $signatories = Signatories::all();
        $professions = Professions::all();

        // Filter the personRoles based on role_id
        $personRoles = PersonRole::with('person')
            ->where('role_id', 1)
            ->get();

        return view('fad.dashboard', [
                    'appearanceCert' => $appearanceCert,
                    'signatories' => $signatories,
                    'professions' => $professions,
                    'personRoles' => $personRoles,
        ]);
    } else {
        return back();
    }
})->name('fad.dashboard');

// Legal Dashboard
Route::get('/legal/dashboard', function () {
    if (auth()->check() && auth()->user()->role == 2) {
        
        $complaintsCert = ComplaintsCertificationModel::all();

        $signatories = Signatories::all();
        $professions = Professions::all();

        // Filter the personRoles based on role_id
        $personRoles = PersonRole::with('person')
            ->where('role_id', 3)
            ->get();

        return view('legal.dashboard', [
            'complaintsCert' => $complaintsCert,
            'signatories' => $signatories,
            'professions' => $professions,
            'personRoles' => $personRoles,
]);
    } else {
        return back();
    }
})->name('legal.dashboard');
// Doc Surrendered
Route::get('/legal/doc-surrendered', function () {
    if (auth()->check() && auth()->user()->role == 2) {
        
        $surrenderedCert = SurrenderedDocuments::all();

        $signatories = Signatories::all();
        $professions = Professions::all();

        $personRoles = PersonRole::with('person')
            ->where('role_id', 3)
            ->get();
        return view('legal.doc-surrendered', [
            'surrenderedCert' => $surrenderedCert,
            'signatories' => $signatories,
            'professions' => $professions,
            'personRoles' => $personRoles,
]);
    } else {
        return back();
    }
})->name('legal.doc-surrendered');

// Finality
Route::get('/legal/finality', function () {
    if (auth()->check() && auth()->user()->role == 2) {
        
        $finalityCert = FinalityCertificationModel::all();
        $signatories = Signatories::all();
        
        return view('legal.finality', [
            'finalityCert' => $finalityCert,
            'signatories' => $signatories,
]);
    } else {
        return back();
    }
})->name('legal.finality');
// Route::get('/legal/dashboard', function () {
//     if (auth()->check() && auth()->user()->role == 2) {
//         $complaintsCert = ComplaintsCertificationModel::all();
//         $signatories = Signatories::all();
//         $professions = Professions::all();
//         $personRoles = PersonRole::with('person')->where('role_id', 3)->get();

//         return view('legal.dashboard', compact('complaintsCert', 'signatories', 'professions', 'personRoles'));
//     } else {
//         return back()->with('error', 'Unauthorized access.');
//     }
// })->name('legal.dashboard');

// PIC-COR
Route::get('/legal/piccor', function () {
    if (auth()->check() && auth()->user()->role == 2) {
        
        $piccorCert = PicCorCertificationModel::all();
        $signatories = Signatories::all();
        $professions = Professions::all();

        $personRoles = PersonRole::with('person')
        ->where('role_id', 3)
        ->get();
        
        return view('legal.piccor', [
            'piccorCert' => $piccorCert,
            'signatories' => $signatories,
            'professions' => $professions,
            'personRoles' => $personRoles,
]);
    } else {
        return back();
    }
})->name('legal.piccor');

Route::post('/legal/dashboard', [ComplaintsCertificationController::class, 'store'])->name('complaints.store');

Route::post('/legal/doc-surrendered', [DocumentSurrenderedController::class, 'store'])->name('surrendered.store');

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

// EDIT ROUTES Complaint
Route::get('/edit-Complaintcertificate/{id}', [ComplaintsCertificationController::class, 'editComplaintCertificate'])->name('edit.Complaintcertificate');
Route::put('/update-Complaintcertificate/{id}', [ComplaintsCertificationController::class, 'updateComplaintCertificate'])->name('update.Complaintcertificate');

// EDIT ROUTES FINALITY
Route::get('/edit-FINALITYcertificate/{id}', [FinalityCertificationController::class, 'editFINALITYCertificate'])->name('edit.FINALITYcertificate');
Route::put('/update-FINALITYcertificate/{id}', [FinalityCertificationController::class, 'updateFINALITYCertificate'])->name('update.FINALITYcertificate');
Route::get('/finality', [FinalityCertificationController::class, 'index'])->name('finality.index');

// EDIT ROUTES PIC-COR
Route::get('/edit-PICCORcertificate/{id}', [PiccorCertificationController::class, 'editPICCORCertificate'])->name('edit.PICCORcertificate');
Route::put('/update-PICCORcertificate/{id}', [PiccorCertificationController::class, 'updatePICCORCertificate'])->name('update.PICCORcertificate');
Route::get('/piccor', [PiccorCertificationController::class, 'index'])->name('piccor.index');

// all delete
Route::delete('/certificate-cor/{id}', [CertificationOfRegistration::class, 'deleteCertificate'])->name('delete.certificate-cor');
Route::delete('/certificate-ac/{id}', [AccreditationCertification::class, 'deleteCertificate'])->name('delete.certificate-ac');
Route::delete('/certificate-ap/{id}', [AppearanceCertificationController::class, 'deleteCertificate'])->name('delete.certificate-ap');
Route::delete('/certificate-complaint/{id}', [ComplaintsCertificationController::class, 'deleteCertificate'])->name('delete.certificate-complaint');
Route::delete('/certificate-finality/{id}', [FinalityCertificationController::class, 'deleteCertificate'])->name('delete.certificate-finality');
Route::delete('/certificate-piccor/{id}', [PiccorCertificationController::class, 'deleteCertificate'])->name('delete.certificate-piccor');



Route::get('/admin/signatories',[AdminController::class,'signatories'])->name('admin.signatories');
Route::get('/admin/users',[AdminController::class,'users'])->name('admin.users');

// Route::get('/fad/dashboard',[FadController::class,'dashboard'])->name('fad.dashboard');


Route::get('/registration', [CertificationOfRegistration::class, 'index'])->name('certregistration.index');
Route::post('/certregistration', [CertificationOfRegistration::class, 'store'])->name('certregistration.store');

Route::get('/accreditation_index', [AccreditationCertification::class, 'index'])->name('accreditation.index');
Route::get('/former_index', [FormerFilipinoController::class, 'index'])->name('former.index');
Route::post('/appearance', [AppearanceCertificationController::class, 'store'])->name('appearance.store');

Route::get('/finality', [FinalityCertification::class, 'index'])->name('finality.index');
Route::post('/legal/finality', [FinalityCertificationController::class, 'store'])->name('finality.store');

Route::get('/piccor', [PiccorCertification::class, 'index'])->name('piccor.index');
Route::post('/legal/piccor', [PiccorCertificationController::class, 'store'])->name('piccor.store');

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

