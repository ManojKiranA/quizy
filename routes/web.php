<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function() {
    Route::get('/', function () {
        return view('home');
    })->name('home')->middleware('auth');
    
    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/');
    });
});
    
Route::middleware('guest')->group(function() {
    Route::livewire('login', 'auth.login')->name('login');
    Route::livewire('register', 'auth.register')->name('register');
});

Route::resource('quiz', 'QuizController', ['names' => 'quiz']);
Route::delete('quiz/{quiz}/question/{question}', 'QuestionController@destroy')->name('question.destroy');