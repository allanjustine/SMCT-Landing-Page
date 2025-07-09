<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class About extends Component
{
    #[Layout('components.layouts.home')]

    #[Title('About Us')]

    public function render()
    {
        return view('livewire.pages.about');
    }
}
