<?php

use App\Models\User;
use App\Models\Coach;
use App\Livewire\Chat;
use App\Models\Talent;
use Livewire\Livewire;
use App\Livewire\Onwatcher;
use App\Models\Outfieldkey;
use Illuminate\Support\Arr;
use App\Models\Goalkeeperkey;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;

Livewire::component('onwatcher', Onwatcher::class);

Route::view('/', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('talentreg', 'talentreg')
    ->middleware(['auth'])
    ->name('talentreg');

Route::view('talents', 'talents')
    ->name('talents');

// Route::view('talents/{id}', 'talents')
//     ->name('talents');

Route::get('/talents/{id}', function ($id) {
    $talents = Talent::all();
    $talent = Arr::first(Talent::all(), function($talent) use ($id) {
        return $talent['id'] == $id;
    }); 

    // Fetch the respective attributes for each talent
    if ($talent->position === 'GK') {
        $attributes = Goalkeeperkey::where('talent_id', $talent->id)->first();
    } else {
        $attributes = Outfieldkey::where('talent_id', $talent->id)->first();
    }
    $talent->attributes = $attributes;
    $coachId = $talent->coach_id;
    $coach = Coach::where('id', $coachId)->first();
    $userId = $coach->user_id;
    $user = User::where('id', $userId)->first();
    
    return view('talent', [
        'talent' => $talent,
        'talents' => $talents,
        'user' => $user
    ]);
})->name('talent.details');

//     return view('talent', ['talent' => $talent]);
// })->name('talentDetails');

// Route::get('talents/{id}', function ($id) {
//     return Livewire::component('talent-details', ['talentId' => $id]);
// })->name('talentDetails');

Route::view('onwatch', 'onwatch')
    ->name('onwatch');

Route::view('message', 'message')
    ->name('message');

Route::get('/chat/{user}', Chat::class)
    ->name('chat');

Route::get('admin/dashboard',[RoleController::class, 'index'])->
    middleware(['auth', 'admin'])->name('admindashboard');

require __DIR__.'/auth.php';
