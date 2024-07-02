<?php

use App\Livewire\Frontend\Joblist;
use App\Livewire\Frontend\LandingPage;
use Illuminate\Support\Facades\Route;

Route::get('/', LandingPage::class)->name('home');
Route::get('/joblist', Joblist::class)->name('joblist');
