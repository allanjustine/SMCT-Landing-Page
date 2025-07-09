<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Home extends Component
{
    #[Layout('components.layouts.home')]

    #[Title('Home')]

    public function render()
    {
        return view('livewire.home');
    }
}
