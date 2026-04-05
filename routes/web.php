<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome', [
    'greeting' => 'Hello, World!',
    'name' => 'John Doe',
    'age' => 30,
    'tasks' => [
        'Learn Laravel',
        'Build a project',
        'Deploy to production',
    ],
]);

Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/services', 'services');
Route::view('/showcases', 'showcases');
Route::view('/blog', 'blog');

Route::get('/formtest', function(){
    $emails = session()->get('$emails', []);

    return view('formtest',[
        'emails' => $emails,
    ]);
});

Route::post('/formtest', function(){
    // Task 2: Add Validation
    request()->validate([
        'email' => 'required|email'
    ]);

    $email = request('email');
    $emails = session()->get('$emails', []);

    // Task 6: Limit Entries (5 maximum)
    if (count($emails) >= 5) {
        return redirect('/formtest')->with('warning', 'Maximum limit of 5 emails reached.');
    }

    // Task 3: Prevent Duplicate Emails
    if (in_array($email, $emails)) {
        return redirect('/formtest')->with('error', 'This email has already been added.');
    }

    session()->push('$emails', $email);

    // Task 5: Success Message
    return redirect('/formtest')->with('success', 'Email added successfully.');
});

// Task 4: Add Delete Button Per Email (Logic)
Route::post('/delete-email', function(){
    $emailToDelete = request('email');
    $emails = session()->get('$emails', []);

    // Remove the selected email
    $emails = array_filter($emails, fn($e) => $e !== $emailToDelete);
    
    // Re-save to session
    session()->put('$emails', array_values($emails));

    return redirect('/formtest')->with('success', 'Email deleted successfully.');
});

Route::get('/delete-emails', function(){
    session()->forget('$emails');
    return redirect('/formtest')->with('success', 'All emails cleared.');
});