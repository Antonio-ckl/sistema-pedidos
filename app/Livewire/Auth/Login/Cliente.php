<?php

namespace App\Livewire\Auth\Login;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Cliente extends Component
{

public $email;
public $password;

protected $rules = [
    'email'=>"required|email",
    'password'=>"required|min:6"
];

protected $messages = [
    'email.required'=>"email é obrigatorio",
    'email.email'=>"formato de email invalido",
    "password.required"=>'o password é obrigatorio',
    "password.min"=>"o minimo de caracteres é 6"
];

public function login(){
    $this->validate();
    if (Auth::attempt(['email' => $this ->email, 'password' =>$this -> password])){
        session()->regenerate();
    }

    if (Auth::user()->role === 'Cliente'){
        return redirect()->route('cliente.dashboard');
    }
    if (Auth::user()->role === 'funcionario'){
        return redirect()->route('funcionario.dashboard');
    }
    if (Auth::user()->role === 'admin'){
        return redirect()->route('admin');
    }
    session()->flash('error','email ou senha incoretos');
}
    public function render()
    {
        return view('livewire.auth.login.cliente');
    }
}
