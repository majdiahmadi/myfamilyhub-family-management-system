<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FamilyMemberController;
use App\Http\Controllers\EventController; // <--- Added this
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// --- CHANGE 1: Use the EventController for the Dashboard ---
Route::get('/dashboard', [EventController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Default Profile Routes (Keep these)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// --- CHANGE 2: Add Event Routes ---
Route::middleware(['auth'])->group(function () {
    // Family Member Routes (You already had these)
    Route::get('/members', [FamilyMemberController::class, 'index'])->name('members.index');
    Route::get('/members/create', [FamilyMemberController::class, 'create'])->name('members.create');
    Route::post('/members', [FamilyMemberController::class, 'store'])->name('members.store');
    Route::get('/members/{id}/edit', [FamilyMemberController::class, 'edit'])->name('members.edit');
    Route::put('/members/{id}', [FamilyMemberController::class, 'update'])->name('members.update');

    // NEW: Event Routes (Add these)
    Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
    Route::post('/events', [EventController::class, 'store'])->name('events.store');
    Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');

    // Add these two lines:
    Route::get('/events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
    Route::put('/events/{id}', [EventController::class, 'update'])->name('events.update');
});