<?php

namespace App\Livewire\Forms\User;

use App\Services\User\AuthService;
use Livewire\Component;

class Auth extends Component
{   
    public $isLoginSelected = true;
    public $isShowForm = false;
    public $email;
    public $password;
    public $repeat_password;
    public $remember;
    public $captcha;
    public $errorAuth;

    public function render()
    {
        return view('components.livewire.forms.user.auth');
    }

    public function login()
    {
        $credetials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        return AuthService::login($credetials);
    }

    public function register()
    {
        $credetials = [
            'email' => $this->email,
            'password' => $this->password,
            'repeat_password' => $this->repeat_password,
        ];

        return AuthService::register($credetials);
    }

    public function logout()
    {
        return AuthService::logout();
    }

    public function toogleMode()
    {
        $this->isLoginSelected = !$this->isLoginSelected;
    }

    public function toogleShowForm()
    {
        $this->isShowForm = !$this->isShowForm;
    }
}
