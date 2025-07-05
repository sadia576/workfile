<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Mail\ContactMessageMail;
use App\Models\Contact;




Route::get('/test-db', function () {
    return \DB::select("SELECT 1");
});





// Static page views
Route::get('/', fn () => view('welcome'));
Route::get('/index', fn () => view('parent.index'));

Route::get('/japan', fn () => view('parent.japan', ['country' => 'japan']))->name('japan');
Route::get('/turki', fn () => view('parent.turkia', ['country' => 'turkia']))->name('turkia');
Route::get('/malysia', fn () => view('parent.malysia', ['country' => 'malysia']))->name('malysia');
Route::get('/pakistan', fn () => view('parent.pakistan', ['country' => 'pakistan']))->name('pakistan');



Route::get('/about', fn () => view('parent.about'))->name('about');

// Cart route
// Redirect /cart to default (e.g. japan)
Route::get('/cart', fn () => redirect('/cart/japan'))->name('cart');

// Country-specific cart
Route::get('/cart/{country}', [CartController::class, 'show'])->name('cart.country');

Route::post('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');


Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');



// Tour packages and details
Route::get('/tourpkg', fn () => view('parent.tourpkg'))->name('tourpkg');
Route::get('/packages/{place}', fn ($place) => view('parent.pkgsdetails', ['place' => $place]));





Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);





// Authentication
Route::get('/login', fn () => view('parent.login'))->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.submit');
Route::get('/signup', fn () => view('signup'))->name('signup');
Route::get('/home', fn () => view('home'))->name('home');

// Contact page
Route::view('/contact', 'parent.contact')->name('contact');


Route::post('/contact/submit', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    $contact = Contact::create($validated);
Mail::to('admin@travaia.com')->send(new ContactMessageMail($contact));

    return redirect()->route('contact')->with('success', 'Your message has been sent and saved!');
})->name('contact.submit');

// Admin view of contacts
Route::get('/admin/contacts', [ContactController::class, 'index'])->name('admin.contacts');
