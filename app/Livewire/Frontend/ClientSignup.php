<?php

namespace App\Livewire\Frontend;

use App\Enums\UserTypeEnum;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ClientSignup extends Component
{
    public $name;

    public $email;

    public $type = "";

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

        try {
            DB::beginTransaction();
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => $this->password,
                'type' => UserTypeEnum::CLIENT->value
            ]);
            DB::commit();
        } catch (\Throwable $error) {
            dd($error);
        }
    }
}
