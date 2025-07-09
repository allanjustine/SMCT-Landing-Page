<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Location extends Component
{
    #[Layout('components.layouts.home')]

    #[Title('SMCT Map')]

    public function render()
    {
        return view('livewire.pages.location');
    }
}
