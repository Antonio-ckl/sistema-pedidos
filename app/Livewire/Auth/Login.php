<?php

namespace App\Livewire\Auth\Login;

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



    public function render()
    {
        return view('livewire.auth.login.cliente');
    }
}
