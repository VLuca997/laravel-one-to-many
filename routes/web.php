<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


//import model
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\TypeController;

use Faker\Guesser\Name;

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



Route::middleware(['auth', 'verified'])
    ->name('admin.')
    ->prefix('admin')
    ->group( function ()  { //Raggruppiamo le rotte da proteggere / prefisso admin
        
        Route::get('/dashboard' , [DashboardController::class, 'index'])->name('dashboard');
        
        //cosi le proteggerei tutte: ( di quella categoria.)
        // Route::resource('posts' , PostController::class);
        Route::resource('projects', ProjectController::class);
        Route::resource('types', TypeController::class);

    });
    
    

require __DIR__.'/auth.php';
