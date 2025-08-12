<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Testimonial;

Route::get('/', function () {
    $testimonials = Testimonial::all(); // or [] if you want empty by default
    return view('welcome', compact('testimonials'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/auth/google/redirect', function () {
    return Socialite::driver('google')->redirect();
})->name('google.login');

Route::get('/auth/google/callback', function () {
    $googleUser = Socialite::driver('google')->stateless()->user();

    $user = User::firstOrCreate(
        ['email' => $googleUser->getEmail()],
        [
            'name' => $googleUser->getName() ?? $googleUser->getNickname() ?? $googleUser->getEmail(),
            'password' => bcrypt(str()->random(24)),
        ]
    );

    Auth::login($user);

    return redirect('/dashboard');
});

require __DIR__.'/auth.php';

// Redirect after registration
//public const HOME = '/dashboard'; // Change this to your desired path, e.g. '/'
