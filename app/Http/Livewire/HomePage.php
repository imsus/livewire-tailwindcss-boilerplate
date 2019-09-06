<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomePage extends Component
{
    public $title = 'Livewire Tailwind Boilerplate';

    public function randomize()
    {
        $possible_names = [
            'Lightning Trip Blade',
            'Luna Tix Bored',
            'Launched Trigger Boost'
        ];

        sleep(1);

        $this->title = $possible_names[array_rand($possible_names, 1)];
    }

    public function render()
    {
        return view('livewire.home-page');
    }
}
