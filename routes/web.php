<?php

use App\Livewire\Frontend\Joblist;
use App\Livewire\Frontend\JobView;
use App\Livewire\Frontend\LandingPage;
use App\Livewire\Frontend\Signup;
use Illuminate\Support\Facades\Route;

Route::get('/signup', Signup::class)->name('signup');
Route::get('/', LandingPage::class)->name('home');
Route::get('/joblist', Joblist::class)->name('joblist');
Route::get('/jobs/view', JobView::class)->name('jobs.view');
