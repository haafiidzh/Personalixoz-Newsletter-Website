<?php

namespace App\Livewire\Administrator\Layouts;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Header extends Component
{
    public $isLoggedIn = false;


    public function mount()
    {
        $this->isLoggedIn = Auth::check();
    }

    public function logout()
    {
        Auth::logout();

        session()->invalidate();
        session()->regenerateToken();
        $this->isLoggedIn = false;
        
        return redirect()->route('administrator.login');
        
    }
    public function render()
    {
        return view('livewire.administrator.layouts.header');
    }
}
