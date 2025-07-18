<?php

use App\Http\Controllers\Admin\RouteController as AdminRouteController;
use App\Http\Controllers\Client\RouteController as ClientRouteController;
use App\Http\Controllers\RouteController ;
use App\Http\Controllers\TailwickController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\CvController as AdminCvController;
use App\Http\Controllers\Candidate\CvController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\ProspetController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Candidate\CandidateController;
use App\Http\Controllers\Candidate\GenerateController;
use App\Http\Controllers\Candidate\JobController as CandidatJobController;
use App\Http\Controllers\Client\CustomerController;
use App\Http\Controllers\Client\FilterController;
use App\Http\Controllers\Client\JobController as ClientJobController;
use App\Http\Controllers\Client\UserController as ClientUserController;
use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/access-denied', function () {
    return view('denied.show');
})->name('access-denied');

Route::domain('powerhr-drc.com')->group(function () {
    Route::get("/", [RouteController::class, 'index'])->name('pages.index');
});

Route::domain('admin.powerhr-drc.com')->group(function () {
    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'admin'])->group(function () {
        Route::resource('customers', ClientController::class);
        Route::resource('users', UserController::class)->only([
            'index',
            'show',
            'destroy'
        ]);
        Route::post('user/ratings', [UserController::class, 'rating'])->name('user.rating');
        Route::resource('admin', AdminController::class);
        Route::resource('listjobs', JobController::class);
        Route::post('/listjobs/cancel', [JobController::class, 'cancel'])->name('listjobs.cancel');
        Route::post('/job/visible/{id}', [JobController::class, 'opening'])->name('job.visible');
        Route::post('/job/hidden/{id}', [JobController::class, 'closing'])->name('job.hidden');
        Route::get('/setting/categorie', [AdminController::class, 'category'])->name('admin.category');
        Route::post('/setting/categorie/add', [AdminController::class, 'addcategory'])->name('category.add');
        Route::post('/setting/categorie/edit', [AdminController::class, 'editcategory'])->name('category.edit');
        Route::post('/setting/categorie/remove/{id}', [AdminController::class, 'removecategory'])->name('category.remove');
    
        Route::controller(ProspetController::class)->name('prospect.')->prefix('prospect')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('{id}', 'show')->name('show');
        });
        Route::get("/", [AdminRouteController::class, 'index'])->name('dashboard');
        Route::get("{any}", [AdminRouteController::class, 'routes']);

        Route::get('/cv/view/{id}', [AdminCvController::class, 'view'])->name('cv.view.pdf');
        Route::get('/cv/{id}/download', [AdminCvController::class, 'download'])->name('cv.download.pdf');

               
        Route::get('/documents/download/{id}', function ($id) {
            $document = \App\Models\Document::findOrFail($id);

            $filePath = 'documents/' . $document->filename;

            if (Storage::disk('public')->exists($filePath)) {
                return Storage::disk('public')->download($filePath, $document->filename);
            }

            abort(404, 'Fichier introuvable');
        })->name('document.download');


        Route::get('/documents/view/{id}', function ($id) {
            $document = \App\Models\Document::findOrFail($id);
            $filePath = 'documents/' . $document->filename;

            if (Storage::disk('public')->exists($filePath)) {
                return Storage::disk('public')->response($filePath);
            }

            abort(404, 'Fichier introuvable');
        })->name('document.view');

    });
});

Route::domain('client.powerhr-drc.com')->group(function () {
    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'client'])->group(function () {
    
        Route::post('account/register', [ClientUserController::class, 'create'])->name('account.register');

        Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
            Route::get("/", [ClientRouteController::class, 'index'])->name('index');
            Route::resource('jobs', ClientJobController::class);
            Route::get('job/accept/{matricule}', [ClientJobController::class, 'accept'])->name('jobs.accept');
            Route::get('job/reject/{matricule}', [ClientJobController::class, 'reject'])->name('jobs.reject');
            Route::post('job/store', [ClientJobController::class, 'hireUser'])->name('jobs.hire');
            Route::resource('customer', CustomerController::class);
            Route::resource('candidates', ClientUserController::class);
            Route::get('/employes', [ClientUserController::class, 'employes'])->name('employes.index');
            Route::controller(FilterController::class)->name('filter.')->prefix('filter')->group(function () {
                Route::get('create','create')->name('create');
                Route::post('search','search')->name('search');
            });
            Route::get("{any}", [ClientRouteController::class, 'routes']);
        });
       
    });
});

Route::domain('candidat.powerhr-drc.com')->group(function () {
    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'candidate'])->group(function () {
    
        Route::get("/", [CandidateController::class, 'index'])->name('candidate.index');
        Route::post("/store", [CandidateController::class, 'store'])->name('candidate.store');
        Route::get("/canidatures", [CandidateController::class, 'candidature'])->name('candidature');
        
        Route::resource("/offerts", CandidatJobController::class);
        Route::post("/offert/postule/{id}", [CandidatJobController::class, 'postuler'])->name('offert.postule');
        Route::post("/offert/cancel/{id}", [CandidatJobController::class, 'cancel'])->name('offert.cancel');
    
        Route::get("/mon-cv", [GenerateController::class, 'index'])->name('generate.index');
        Route::get("/model/{id}/selected", [GenerateController::class, 'select'])->name('model.selected');
        
        Route::get('/cv/view', [CvController::class, 'view'])->name('cv.generer.pdf');
        Route::get('/cv/{id}/download', [CvController::class, 'download'])->name('cv.telecharger.pdf');
        Route::get('/cv/create', [GenerateController::class, 'create'])->name('cv.create');

        Route::post("/cv/store", [CvController::class, 'store'])->name('cv.store');
        Route::post("/cv/store_file", [CvController::class, 'store_file'])->name('cv.store_file');
        Route::post("/cv/{id}/delete", [CvController::class, 'delete'])->name('cv.delete');

        Route::post('/documents/upload', [DocumentController::class, 'upload'])->name('documents.upload');
        Route::delete('/documents/delete', [DocumentController::class, 'delete'])->name('documents.delete');
       
        Route::get('/documents/download/{id}', function ($id) {
            $document = \App\Models\Document::findOrFail($id);

            $filePath = 'documents/' . $document->filename;

            if (Storage::disk('public')->exists($filePath)) {
                return Storage::disk('public')->download($filePath, $document->filename);
            }

            abort(404, 'Fichier introuvable');
        })->name('documents.download');


        Route::get('/documents/view/{id}', function ($id) {
            $document = \App\Models\Document::findOrFail($id);
            $filePath = 'documents/' . $document->filename;

            if (Storage::disk('public')->exists($filePath)) {
                return Storage::disk('public')->response($filePath);
            }

            abort(404, 'Fichier introuvable');
        })->name('documents.view');
    });
});
