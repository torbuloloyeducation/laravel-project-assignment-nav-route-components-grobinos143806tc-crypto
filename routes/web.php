<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('emails', [
        'emails' => session('emails', []),
    ]);
})->name('emails');

Route::get('/emails', function () {
    return redirect()->route('emails');
});

Route::view('/home', 'welcome')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/services', 'services')->name('services');
Route::view('/showcases', 'showcases')->name('showcases');
Route::view('/blog', 'blog')->name('blog');




// ========================
// ACTIVITY 2: Forms
// ========================
Route::post('/emails', function () {
    request()->validate([
        'email' => ['required', 'email'],
    ]);
    $email  = request('email');
    $emails = session('emails', []);
    if (in_array($email, $emails)) {
        return back()->withInput()->with('error', 'That email is already in the list.');
    }
    if (count($emails) >= 5) {
        return back()->withInput()->with('error', 'Maximum of 5 emails reached. Please delete one first.');
    }
    $emails[] = $email;
    session()->put('emails', $emails);
    return redirect()->route('emails')->with('success', 'Email added successfully!');
})->name('emails.store');

Route::post('/emails/delete', function () {
    $index  = (int) request('index');
    $emails = session('emails', []);
    if (isset($emails[$index])) {
        array_splice($emails, $index, 1);
        session()->put('emails', $emails);
        return redirect()->route('emails')->with('success', 'Email removed.');
    }
    return redirect()->route('emails');
})->name('emails.delete');