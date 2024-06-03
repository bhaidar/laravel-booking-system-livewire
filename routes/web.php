<?php

use App\Livewire\Checkout;
use App\Livewire\EmployeeShow;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');

Route::get('/employees/{employee:slug}', EmployeeShow::class)->name('employees.show');
Route::get('/checkout/{service:slug}/{employee:slug?}', Checkout::class)->name('checkout');
