<?php

namespace App\Livewire\Frontend;

use Livewire\Attributes\Layout;
use Livewire\Component;

class ClientSignup extends Component
{
    public $name;

    public $email;

    public $type;

    public $number;

    public $district;

    public $password;

    public $password_confirmation;

    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'type' => 'required|string',
            'number' => 'required|numeric',
            'district' => 'required|string',
            'password' => 'required|string|confirmed',
            'password_confirmation' => 'required|string',
        ];
    }

    public function render()
    {
        return view('livewire.frontend.client-signup');
    }

    public function register()
    {
        $this->validate($this->rules());
    }
}
