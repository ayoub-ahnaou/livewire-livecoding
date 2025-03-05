<?php

use App\Livewire\DashboardPage;
use App\Livewire\HomePage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('welcome');
Route::get('/dashboard', DashboardPage::class)->name('dashboard');
