<?php

use app\Livewire\Auth\Entrar as login;
use App\Livewire\Cliente\Create;
use Illuminate\Support\Facades\Route;

Route::get('/create/cliente', Create::class);


Route::get('/login', login::class )->name('login');

