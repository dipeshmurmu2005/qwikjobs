<?php

namespace App\Livewire\Frontend;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Signup extends Component
{
    #[Layout('components.signup.layout')]
    public function render()
    {
        return view('livewire.frontend.signup');
    }
}
