<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


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

Route::get('/', HomeController::class)->name('home');

Route::fallback(function () {
    return view('welcome');
});
#=================================== Regular Expression Constraints
// Route::get('/user/{name}', HomeController::class)->where('name', '[A-Za-z]+');
// Route::get('/user/{id}', HomeController::class)->where('id', '[0-9]+');
// Route::get('/user/{id}/{name}', HomeController::class)->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);
// Route::get('/user/{id}', HomeController::class)->whereNumber('id');
// Route::get('/user/{name}', HomeController::class)->whereAlpha('name');
// Route::get('/user/{name}', HomeController::class)->whereAlphaNumeric('name');
// Route::get('/user/{category}', HomeController::class)->whereIn('category', ['movie', 'song', 'hair']);

#=================================== Global Constraints
// Route::get('/user/{id}', HomeController::class);
// Route::get('/admin/{name}', HomeController::class);
// Route::get('/merchant/{id}', HomeController::class);

#-------------------------------------
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale() . '/dashboard',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        // ==================================== dashboard main page
        // Route::view('/', 'dashboard')->name('dashboard')->withoutMiddleware('auth');
        // Route::view('/', 'dashboard')->middleware('test:elmsery,ahmed')->name('dashboard');
        Route::view('/', 'dashboard')->name('dashboard');

        // ============================================= products
        // Route::get('products/show/{product:slug}', [ProductController::class, 'show'])->name('products.show');
        // Route::resource('products', ProductController::class)->except('show')->parameters(['products' => 'product:slug']);
        Route::get('products/show/{product}', [ProductController::class, 'show'])->name('products.show');
        Route::resource('products', ProductController::class)->except('show');
    }
);

// Route::prefix('dashboard')->group(function () {

//     // ==================================== dashboard main page
//     // Route::view('/', 'dashboard')->name('dashboard')->withoutMiddleware('auth');
//     // Route::view('/', 'dashboard')->middleware('test:elmsery,ahmed')->name('dashboard');
//     Route::view('/', 'dashboard')->name('dashboard');

//     // ============================================= products
//     // Route::get('products/show/{product:slug}', [ProductController::class, 'show'])->name('products.show');
//     // Route::resource('products', ProductController::class)->except('show')->parameters(['products' => 'product:slug']);
//     Route::get('products/show/{product}', [ProductController::class, 'show'])->name('products.show');
//     Route::resource('products', ProductController::class)->except('show');
// });

// Route::prefix('{locale}/dashboard')->middleware('SetLocale')->group(function () {

//     // ==================================== dashboard main page
//     // Route::view('/', 'dashboard')->name('dashboard')->withoutMiddleware('auth');
//     // Route::view('/', 'dashboard')->middleware('test:elmsery,ahmed')->name('dashboard');
//     Route::view('/', 'dashboard')->name('dashboard');

//     // ============================================= products
//     // Route::get('products/show/{product:slug}', [ProductController::class, 'show'])->name('products.show');
//     // Route::resource('products', ProductController::class)->except('show')->parameters(['products' => 'product:slug']);
//     Route::get('products/show/{product}', [ProductController::class, 'show'])->name('products.show');
//     Route::resource('products', ProductController::class)->except('show');
// })->where('locale', '[a-z](2)');



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });



require __DIR__ . '/auth.php';

// require __DIR__ . '/admin.php';
// require __DIR__ . '/merchant.php';
