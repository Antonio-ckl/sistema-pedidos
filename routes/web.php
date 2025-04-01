<?php

use App\Livewire\Auth\Login\Cliente as Login;
use App\Livewire\Cliente\Create;
use Illuminate\Support\Facades\Route;

Route::get('/create/cliente', Create::class);

Route::get('/login', Login::class)->name('login');