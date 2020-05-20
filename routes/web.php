<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
    
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->middleware('auth');
    
Route::middleware('guest')->group(function() {
    Route::livewire('login', 'auth.login')->name('login');
    Route::livewire('register', 'auth.register')->name('register');
    Route::livewire('join', 'join')->name('join');
});

Route::resource('quiz', 'QuizController', ['names' => 'quiz']);
Route::delete('quiz/{quiz}/question/{question}', 'QuestionController@destroy')->name('question.destroy')->middleware('auth');

Route::get('host/{quiz}', 'QuizController@host')->name('quiz.host')->middleware('auth');
Route::livewire('game/dashboard/{quiz}', 'host-dashboard')->name('host.dashboard');
Route::livewire('game/{participant}', 'game')->name('participant.game');