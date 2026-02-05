<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view("about");
})->name('about');;

Route::get('/contact', function () {
    return view("contact");
})->name('contact');;

Route::get('/login', function () {
    return view("login");
})->name('login');;

Route::get('/register', function () {
    return view("register");
})->name('register');;


Route::get('/jobs', function () {
    return view("jobs",[
        'jobs'=>Job::all()
    ]);
});


Route::get('/jobs/{id}', function ($id) {
    $job = Arr::first(Job::all(), fn($job) => $job['id'] == $id);
    return view("job", ["job" => $job]);
});
