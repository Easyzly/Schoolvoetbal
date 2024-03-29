<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\GamesController;
use App\Models\Team;
use App\Models\Game;
use App\Models\User;


use Illuminate\Support\Facades\Route;

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

Route::get('/base', function (){
    return view('base');
});
Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/teams', [PagesController::class, 'teams'])->name('teams');
Route::get('/wedstrijden', [PagesController::class, 'games'])->name('games');

Route::get('/dashboard', function () {
    $teams = Team::all();
    $users = User::all();
    $games = Game::all();
    return view('dashboard', compact('teams', 'games', 'users'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/team/create', [TeamController::class, 'create'])->name('teams.create');
Route::post('/team', [TeamController::class, 'store'])->name('teams.store');

Route::delete('/teams/{team}', [PagesController::class, 'deleteTeam'])->name('teams.delete');
Route::delete('/games/{game}', [PagesController::class, 'deleteGame'])->name('games.delete');
Route::get('/pages/edit/game/{game}', [PagesController::class, 'SendGame'])->name('games.send');
Route::put('/games/update/{game}', [PagesController::class, 'updateGame'])->name('games.update');

Route::get('/games', [GamesController::class, 'showMatches'])->name('games.showMatches');
Route::match(['get', 'post'], '/games/generateRandomPool', [GamesController::class, 'generateRandomPool'])->name('games.generateRandomPool');


require __DIR__.'/auth.php';
