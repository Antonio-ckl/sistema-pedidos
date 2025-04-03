<?php

use App\Livewire\Auth\Login;
use App\Livewire\Cliente\Create;
use Illuminate\Support\Facades\Route;

Route::get('/create/cliente', Create::class);

Route::get('/', Login::class)->name('login');