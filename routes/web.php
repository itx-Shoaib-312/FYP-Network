<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SelectionController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\PeerCollaborationController;
use App\Http\Controllers\SupervisorController;

use App\Models\Selection;

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\WorkSubmissionController;


Route::get('/', function () {
    return view('indexL');
});
;


// Route::get('rolebutton', function () {
//     return view('Rolebutton');
// });
Route::get('usersupport', function () {
    return view('usersupport');
});


    Route::get('/peercollaborationproject', [PeerCollaborationController::class,'index'])->name('peercollaborationproject');

  Route::get('/Member/{id}',[PeerCollaborationController::class,'members'])->name('member');
  Route::post('add-member-details',[PeerCollaborationController::class,'add_member_details'])->name('add-member-details');
  Route::post('update-member-details/{id}',[PeerCollaborationController::class,'update_member_details'])->name('update-member-details');



    Route::get('/peercollaborationproject', function () {
        return view('peercollaborationproject');
    });

  Route::get('/Member', function () {
    return view('Member');
})->name('Member');
  Route::get('/worksubmission', function () {
    return view('workSubmission');
})->name('worksubmission');

// Route::get('/TitleSelection', function () {
//     return view('TitleSelection');
// });

// Route::get('finalizesupervisor', function () {
//     return view('finalizesupervisor');
// });
Route::get('finalizesupervisor',[SelectionController::class, 'finalized'])->name('finalized');
Route::get('/title-selection',[SelectionController::class, 'index'])->name('selection');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route for first login page
Route::get('/login', [CustomAuthController::class, 'showLoginForm'])->name('c');
Route::post('/login', [CustomAuthController::class, 'showLoginForm'])->name('login');
//--------------------- Announcement-----------
Route::get('/announcement', [AnnouncementController::class, 'index'])->name('announcement.index');
Route::post('/announcementadd', [AnnouncementController::class, 'store'])->name('announcement.store');
Route::post('/announcement/update/{id}', [AnnouncementController::class, 'update'])->name('announcement.update');
Route::post('/announcement/delete/{id}', [AnnouncementController::class, 'destroy'])->name('announcement.delete');

//--------------------- User Data-----------
Route::get('/data', [UserController::class, 'index'])->name('data.index');
Route::post('/data/update/{id}', [UserController::class, 'update'])->name('data.update');
Route::post('/data/delete/{id}', [UserController::class, 'destroy'])->name('data.delete');
Route::post('/data', [UserController::class, 'store'])->name('data.store');
// Supervisor routes
Route::get('/supervisor', [SupervisorController::class, 'index'])->name('supervisor.index');
Route::post('/supervisor', [SupervisorController::class, 'store'])->name('supervisor.store');
Route::post('/supervisor/update/{id}', [SupervisorController::class, 'update'])->name('supervisor.update');
Route::post('/supervisor/delete/{id}', [SupervisorController::class, 'destroy'])->name('supervisor.delete');
Route::post('/toggle-status/{id}', [SupervisorController::class, 'toggleStatus'])->name('supervisor.toggleStatus');

// Route for second login page
Route::get('/login/admin', [CustomAuthController::class, 'showAdminLoginForm'])->name('admin.login');

// Route for third login page
Route::get('/login/other', [CustomAuthController::class, 'showOtherLoginForm'])->name('other.login');
// Route::get('/workSubmission', [UserController::class, 'workSubmission'])->name('workSubmission');Route::get('/login/other', [CustomAuthController::class, 'showOtherLoginForm'])->name('other.login');
Route::get('/login/other', [CustomAuthController::class, 'showOtherLoginForm'])->name('other.login');
Route::post('/SubmitWork', [WorkSubmissionController::class, 'SubmitWork'])->name('SubmitWork');
Route::get('/login/other', [CustomAuthController::class, 'showOtherLoginForm'])->name('other.login');

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route for storing form data from TitleSelection form
    Route::post('/selection/store', [SelectionController::class, 'store'])->name('selection.store');

});


require __DIR__.'/auth.php';
