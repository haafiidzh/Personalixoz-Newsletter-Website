<?php

namespace App\Livewire\Front\Layouts;

use Livewire\Component;

class Header extends Component
{
    public function menu()
    {
        return [
            [
                'name' => 'Home',
                'route' => '#hero',
                'active' => false,
                'child' => [],
            ],
            [
                'name' => 'About',
                'route' => '#about',
                'active' => false,
                'child' => [],
            ],
            [
                'name' => 'Contact Us',
                'route' => '#contact',
                'active' => false,
                'child' => [],
            ],
        ];
    }

    public function render()
    {
        return view(
            'livewire.front.layouts.header',
            ['menu' => self::menu()]
        );
    }
}
