<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\ContactController;

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
// Route::post('/contact', 'ContactController@store')->name('contact');
Route::get('/', function () {
    return view("web/test");
  
});

// Route::get('/contact', 'App\Http\Controllers\ContactController@contact1');
Route::get('/contact', 'ContactController@contact1')->name('contact');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('web/booking', 'BookingController@booking1')->name('booking');
Route::get('/tours', 'ToursController@tour')->name('tours');



Route::get('/login', 'AuthController@showLoginForm')->name('login');
Route::post('/login', 'AuthController@login')->name('login.submit');
Route::get('/dashboard', function () {
    // Only authenticated users can access the dashboard
    if (Session::get('authenticated')) {
        return view('web/dashboard');
    } else {
        return redirect()->route('web/login');
    }
})->name('web/dashboard');


Route::get('/logout', 'AuthController@logout')->name('logout');


// Show registration form
Route::get('/register', 'RegisterController@showRegistrationForm')->name('register');

// Handle registration form submission
Route::post('/register', 'RegisterController@register')->name('register.submit');




// Route::get('/contact', 'ContactController@contact1')->name('contact.contact1');
// Route::get('/contact', [ContactController::class, 'contact1']);
// Route::get('/contact', "App\Http\Controllers\ContactController@contact1");
// Route::get('/contact', 'AboutController@contact');
// Route::resource('about', 'AboutController');
// Route::get('about', 'AboutController@about');


// Route::get('/contact', 'ContactController@index')->name('contact');
// Route::get('/about', 'AboutController@index')->name('about');
// Route::get('/contact', [ContactController::class, 'index'])
// ;