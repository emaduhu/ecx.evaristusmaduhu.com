<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/livedata', [AdminController::class, 'livedata'])->name('livedata.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/livedata', [AdminController::class, 'livedata'])->name('livedata.index');


// User List
Route::get('/users', [UserController::class, 'index'])->name('users.index')->middleware('auth');
//Admin
//Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard')->middleware(['auth', 'admin']);
Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard')->middleware(['auth', 'can:admin']);
// Roles CRUD
Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create')->middleware('auth');
Route::get('/roles', [RoleController::class, 'index'])->name('roles.index')->middleware('auth');
Route::post('/roles', [RoleController::class, 'store'])->name('roles.store')->middleware('auth');
Route::get('/roles/{role}', [RoleController::class, 'show'])->name('roles.show')->middleware('auth');
Route::get('/roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit')->middleware('auth');
Route::put('/roles/{role}', [RoleController::class, 'update'])->name('roles.update')->middleware('auth');
Route::delete('/roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy')->middleware('auth');

// Permissions CRUD
Route::get('/permissions/create', [ParticipantController::class, 'create'])->name('participants.create')->middleware('auth');
Route::get('/permissions', [ParticipantController::class, 'index'])->name('participants.index')->middleware('auth');
Route::post('/permissions', [ParticipantController::class, 'store'])->name('participants.store')->middleware('auth');
Route::get('/permissions/{participant}', [ParticipantController::class, 'show'])->name('participants.show')->middleware('auth');
Route::get('/permissions/{participant}/edit', [ParticipantController::class, 'edit'])->name('participants.edit')->middleware('auth');
Route::put('/permissions/{participant}', [ParticipantController::class, 'update'])->name('participants.update')->middleware('auth');
Route::delete('/permissions/{participant}', [ParticipantController::class, 'destroy'])->name('participants.destroy')->middleware('auth');

// Profile
Route::get('/profile', [UserController::class, 'index'])->name('profile.index')->middleware('auth');

// Participants CRUD
Route::get('/participants/create', [ParticipantController::class, 'create'])->name('participants.create')->middleware('auth');
Route::get('/participants', [ParticipantController::class, 'index'])->name('participants.index')->middleware('auth');
Route::post('/participants', [ParticipantController::class, 'store'])->name('participants.store')->middleware('auth');
Route::get('/participants/{participant}', [ParticipantController::class, 'show'])->name('participants.show')->middleware('auth');
Route::get('/participants/{participant}/edit', [ParticipantController::class, 'edit'])->name('participants.edit')->middleware('auth');
Route::put('/participants/{participant}', [ParticipantController::class, 'update'])->name('participants.update')->middleware('auth');
Route::delete('/participants/{participant}', [ParticipantController::class, 'destroy'])->name('participants.destroy')->middleware('auth');
// Participants Upload Form
Route::get('participants-upload-form', [ParticipantController::class, 'showUploadForm'])->name('participants.upload.form')->middleware('auth');
// Participants Upload
Route::post('/participants-upload', [ParticipantController::class, 'upload'])->name('participants.upload')->middleware('auth');
// Participants Export
Route::get('/participants-export', [ParticipantController::class, 'export'])->name('participants.export')->middleware('auth');


// Membership CRUD
Route::get('/membership/create', [ParticipantController::class, 'create'])->name('participants.create')->middleware('auth');
Route::get('/membership', [ParticipantController::class, 'index'])->name('participants.index')->middleware('auth');
Route::post('/membership', [ParticipantController::class, 'store'])->name('participants.store')->middleware('auth');
Route::get('/membership/{participant}', [ParticipantController::class, 'show'])->name('participants.show')->middleware('auth');
Route::get('/membership/{participant}/edit', [ParticipantController::class, 'edit'])->name('participants.edit')->middleware('auth');
Route::put('/membership/{participant}', [ParticipantController::class, 'update'])->name('participants.update')->middleware('auth');
Route::delete('/membership/{participant}', [ParticipantController::class, 'destroy'])->name('participants.destroy')->middleware('auth');
// Participants Upload Form
Route::get('membership-upload-form', [ParticipantController::class, 'showUploadForm'])->name('participants.upload.form')->middleware('auth');
// Participants Upload
Route::post('/membership-upload', [ParticipantController::class, 'upload'])->name('participants.upload')->middleware('auth');
// Participants Export
Route::get('/membership-export', [ParticipantController::class, 'export'])->name('participants.export')->middleware('auth');


// Registration Information on Entity CRUD
Route::get('/registration-information-on-entity/create', [ParticipantController::class, 'create'])->name('participants.create')->middleware('auth');
Route::get('/registration-information-on-entity', [ParticipantController::class, 'index'])->name('participants.index')->middleware('auth');
Route::post('/registration-information-on-entity', [ParticipantController::class, 'store'])->name('participants.store')->middleware('auth');
Route::get('/registration-information-on-entity/{participant}', [ParticipantController::class, 'show'])->name('participants.show')->middleware('auth');
Route::get('/registration-information-on-entity/{participant}/edit', [ParticipantController::class, 'edit'])->name('participants.edit')->middleware('auth');
Route::put('/registration-information-on-entity/{participant}', [ParticipantController::class, 'update'])->name('participants.update')->middleware('auth');
Route::delete('/registration-information-on-entity/{participant}', [ParticipantController::class, 'destroy'])->name('participants.destroy')->middleware('auth');
// Participants Upload Form
Route::get('registration-information-on-entity-upload-form', [ParticipantController::class, 'showUploadForm'])->name('participants.upload.form')->middleware('auth');
// Participants Upload
Route::post('/registration-information-on-entity-upload', [ParticipantController::class, 'upload'])->name('participants.upload')->middleware('auth');
// Participants Export
Route::get('/registration-information-on-entity-export', [ParticipantController::class, 'export'])->name('participants.export')->middleware('auth');


// Membership Type Related Details CRUD
Route::get('/membership-type-related-details/create', [ParticipantController::class, 'create'])->name('participants.create')->middleware('auth');
Route::get('/membership-type-related-details', [ParticipantController::class, 'index'])->name('participants.index')->middleware('auth');
Route::post('/membership-type-related-details', [ParticipantController::class, 'store'])->name('participants.store')->middleware('auth');
Route::get('/membership-type-related-details/{participant}', [ParticipantController::class, 'show'])->name('participants.show')->middleware('auth');
Route::get('/membership-type-related-details/{participant}/edit', [ParticipantController::class, 'edit'])->name('participants.edit')->middleware('auth');
Route::put('/membership-type-related-details/{participant}', [ParticipantController::class, 'update'])->name('participants.update')->middleware('auth');
Route::delete('/membership-type-related-details/{participant}', [ParticipantController::class, 'destroy'])->name('participants.destroy')->middleware('auth');
// Participants Upload Form
Route::get('membership-type-related-details-upload-form', [ParticipantController::class, 'showUploadForm'])->name('participants.upload.form')->middleware('auth');
// Participants Upload
Route::post('/membership-type-related-details-upload', [ParticipantController::class, 'upload'])->name('participants.upload')->middleware('auth');
// Participants Export
Route::get('/membership-type-related-details-export', [ParticipantController::class, 'export'])->name('participants.export')->middleware('auth');

// Membership Type Related Details CRUD
Route::get('/verification-and-clearance-of-registration/create', [ParticipantController::class, 'create'])->name('participants.create')->middleware('auth');
Route::get('/verification-and-clearance-of-registration', [ParticipantController::class, 'index'])->name('participants.index')->middleware('auth');
Route::post('/verification-and-clearance-of-registration', [ParticipantController::class, 'store'])->name('participants.store')->middleware('auth');
Route::get('/verification-and-clearance-of-registration/{participant}', [ParticipantController::class, 'show'])->name('participants.show')->middleware('auth');
Route::get('/verification-and-clearance-of-registration/{participant}/edit', [ParticipantController::class, 'edit'])->name('participants.edit')->middleware('auth');
Route::put('/verification-and-clearance-of-registration/{participant}', [ParticipantController::class, 'update'])->name('participants.update')->middleware('auth');
Route::delete('/verification-and-clearance-of-registration/{participant}', [ParticipantController::class, 'destroy'])->name('participants.destroy')->middleware('auth');
// Participants Upload Form
Route::get('verification-and-clearance-of-registration-upload-form', [ParticipantController::class, 'showUploadForm'])->name('participants.upload.form')->middleware('auth');
// Participants Upload
Route::post('/verification-and-clearance-of-registration-upload', [ParticipantController::class, 'upload'])->name('participants.upload')->middleware('auth');
// Participants Export
Route::get('/verification-and-clearance-of-registration-export', [ParticipantController::class, 'export'])->name('participants.export')->middleware('auth');


// ECX Membership ID and Certificate Issued CRUD
Route::get('/ecs-membership-id-and-certificate-issued/create', [ParticipantController::class, 'create'])->name('participants.create')->middleware('auth');
Route::get('/ecs-membership-id-and-certificate-issued', [ParticipantController::class, 'index'])->name('participants.index')->middleware('auth');
Route::post('/ecs-membership-id-and-certificate-issued', [ParticipantController::class, 'store'])->name('participants.store')->middleware('auth');
Route::get('/ecs-membership-id-and-certificate-issued/{participant}', [ParticipantController::class, 'show'])->name('participants.show')->middleware('auth');
Route::get('/ecs-membership-id-and-certificate-issued/{participant}/edit', [ParticipantController::class, 'edit'])->name('participants.edit')->middleware('auth');
Route::put('/ecs-membership-id-and-certificate-issued/{participant}', [ParticipantController::class, 'update'])->name('participants.update')->middleware('auth');
Route::delete('/ecs-membership-id-and-certificate-issued/{participant}', [ParticipantController::class, 'destroy'])->name('participants.destroy')->middleware('auth');
// Participants Upload Form
Route::get('ecs-membership-id-and-certificate-issued-upload-form', [ParticipantController::class, 'showUploadForm'])->name('participants.upload.form')->middleware('auth');
// Participants Upload
Route::post('/ecs-membership-id-and-certificate-issued-upload', [ParticipantController::class, 'upload'])->name('participants.upload')->middleware('auth');
// Participants Export
Route::get('/ecs-membership-id-and-certificate-issued-export', [ParticipantController::class, 'export'])->name('participants.export')->middleware('auth');
