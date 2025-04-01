<?php


use App\Livewire\Cliente\Create;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

Route::get('/create/cliente', Create::class);

Route::get('/login', Login::class)->name('login');
