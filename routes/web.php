<?php

use App\Http\Controllers\EmployeeTrainingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerformanceEvaluationController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RollCallController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\ApplicationsController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/logout', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'home']);
Route::get('/calisan/ekle', [EmployeeController::class, 'createEmployeeForm'])->name('employee.create');
Route::post('/calisan/ekle', [EmployeeController::class, 'saveNewEmployee'])->name('employee.store');



Route::middleware(['auth'])->group(function () {
    Route::get('/calisanlar', [EmployeeController::class, 'list'])->name('employees.index');
    Route::get('/calisan/{id}', [EmployeeController::class, 'show'])->name('employee.show');
    Route::get('calisan/{id}/düzenle', [EmployeeController::class, 'edit'])->name('employee.edit');
    Route::put('calisan/{id}', [EmployeeController::class, 'update'])->name('employee.update');


    Route::get('/projeler', [ProjectController::class, 'index'])->name('project.index');
    Route::get('/proje/{id}', [ProjectController::class, 'show'])->name('project.show');

    Route::get('/gorevler', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('/görev/{id}', [TaskController::class, 'show'])->name('tasks.show');

    Route::get('/birimler', [DepartmentController::class, 'index'])->name('units.index');
    Route::get('/birimler/{id}', [DepartmentController::class, 'show'])->name('units.show');

    Route::get('/izinler', [PermissionController::class, 'index'])->name('permissions.index');
    Route::get('/izin/ekle', [PermissionController::class, 'create'])->name('permissions.create');
    Route::post('/izin/ekle', [PermissionController::class, 'store'])->name('permissions.store');


    Route::resource('/calisanegitim', EmployeeTrainingController::class)->names([
        'index' => 'employee.trainings.index',
        'create' => 'employee.trainings.create',
        'store' => 'employee.trainings.store',
    ]);


    Route::get('/yoklama', [RollCallController::class, 'index'])->name('rollcalls.index');
    Route::get('/yoklama/ekle', [RollCallController::class, 'create'])->name('rollcalls.create');
    Route::post('/yoklama', [RollCallController::class, 'store'])->name('rollcalls.store');

    Route::get('/performans-degerlendirme/olustur', [PerformanceEvaluationController::class, 'create'])->name('performances.create');
    Route::post('/performans-degerlendirme', [PerformanceEvaluationController::class, 'store'])->name('performances.store');






    Route::get('/maaslar');
});



Route::get('/iletisim', [ComplaintController::class, 'contact'])->name('complaint.contact');
Route::post('/iletisim', [ComplaintController::class, 'home'])->name('complaint.home');

Route::get('/iletisim/sikayet', [ComplaintController::class, 'create'])->name('complaint.create');
Route::post('/iletisim/sikayet', [ComplaintController::class, 'store'])->name('complaint.store');

Route::get('/iletisim/oneri', [SuggestionController::class, 'create'])->name('suggestion.create');
Route::post('/iletisim/oneri', [SuggestionController::class, 'store'])->name('suggestion.store');

Route::get('/iletisim/basvuru', [ApplicationsController::class, 'create'])->name('application.create');
Route::post('/iletisim/basvuru', [ApplicationsController::class, 'store'])->name('application.store');




