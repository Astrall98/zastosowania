<?php

use App\Http\Controllers\ShowController;
use App\Http\Controllers\UserFormController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('wsb', function() {
    return view('wsb', [
        'firstName' => 'Franciszek',
        'lastName' => 'Dolot'
    ]);
});

Route::get('pages/{page}', function(string $page) {
    $pages = [
        'about' => 'Informacje o stronie',
        'contact' => 'franciszek@test.pl',
        'home' => 'Strona domowa'
    ];
    return $pages[$page] ?? 'Błędne dane';
})->name('pages');

Route::get('/address/{city?}/{street?}/{postalCode?}', function(string $city = '-', string $street = '-', int $postalCode = null) {
    $postalCode = $postalCode ? substr($postalCode, 0, 2).'-'.substr($postalCode, 2, 3) : 'Brak kodu pocztowego';
    echo <<< SHOW
        Kod pocztowy: $postalCode<br>
        Miasto: $city<br>
        Ulica: $street<hr>
    SHOW;
});

Route::redirect('/adres/{city?}/{street?}/{postalCode?}', '/address/{city?}/{street?}/{postalCode?}');

Route::get('show', [ShowController::class, 'show']);
Route::get('showData', [ShowController::class, 'showData']);

Route::view('userform', 'forms.user_form');
Route::get('UserFormController', [UserFormController::class, 'showForm']);