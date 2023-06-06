<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AvancementController;
use App\Http\Controllers\ChoixExamenController;
use App\Http\Controllers\EMController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PropositionController;
use App\Http\Controllers\RAController;
use App\Http\Controllers\ReclamationController;
use App\Http\Controllers\RSMController;
use App\Http\Controllers\SujetController;
use App\Http\Controllers\UserController;

Route::get('/suprimer/ra/{id}',[RSMController::class,'supremerRa']);
Route::get('/em', [RSMController::class, 'EM']);
Route::get('/supremeEm/{id}',[RSMController::class,'supremeEm']);
Route::get('/modifier/{num_et}',[RSMController::class,'modifierEm']);
Route::get('/enseignant', [RSMController::class, 'enseignant']);
Route::post('/create-ra', [RSMController::class, 'createRA']);
Route::post('/create-em', [RSMController::class, 'createEM']);
Route::post('/create-enseignant', [AccountController::class, 'createEnseignant']);
Route::get('/block/{id}',[AccountController::class,'block']);
Route::get('/sujetslist',[SujetController::class,'sujetslist']);

Route::get('/suprimer/enseignant/{id}', [AccountController::class, 'deleteEnseignant']);
Route::get('/modifier/enseignant/{id}', [RSMController::class, 'enseignant']);

// RSM Routes
Route::post('/accounts/create', [AccountController::class, 'create']);
Route::get('/accounts', [AccountController::class, 'index']);
Route::get('/propositions', [PropositionController::class, 'index']);
Route::post('/teachers/selection', [EnseignantController::class, 'selectTeachers']);
Route::get('/sujets/modifies', [SujetController::class, 'getModifiedList']);
Route::get('/sujets/affecter/{id}', [SujetController::class, 'assignSubjects']);
Route::get('/avancement/projets', [AvancementController::class, 'getProjectProgress']);
Route::get('/reclamations', [ReclamationController::class, 'index']);
Route::get('/choix/enseignants', [ChoixExamenController::class, 'getTeacherChoices']);
Route::post('/sujets/propose', [SujetController::class, 'proposeSubject']);
Route::get('/sujets/propose', [SujetController::class, 'propose']);
// RA Routes
Route::get('/addRa',[RAController::class,'show']);
Route::get('/propositions', [PropositionController::class, 'index']);
Route::post('/teachers/selection', [EnseignantController::class, 'selectTeachers']);
Route::get('/sujets', [SujetController::class, 'index']);
Route::get('/avancement/projets', [AvancementController::class, 'getProjectProgress']);
Route::get('/reclamations', [ReclamationController::class, 'index']);
Route::get('/choix/enseignants', [ChoixExamenController::class, 'getTeacherChoices']);

// Enseignant Routes
Route::post('/sujets/propose', [SujetController::class, 'proposeSubject']);
Route::get('/teachers', [EnseignantController::class, 'index']);
Route::get('/sujets/valides', [SujetController::class, 'getValidatedList']);
Route::put('/avancement/projets', [AvancementController::class, 'updateProjectProgress']);
Route::get('/sujets/examiner', [SujetController::class, 'getSubjectsToExamine']);
Route::get('/resultat/sujets', [SujetController::class, 'getExamResults']);

// EM Routes
Route::get('/sujets/valides', [SujetController::class, 'getValidatedList']);
Route::get('/resultat/affectation', [SujetController::class, 'getAssignmentResults']);
Route::get('/resultat/sujets', [SujetController::class, 'getExamResults']);



Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});
Route::get('/user',[AccountController::class, 'show']);

Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});
