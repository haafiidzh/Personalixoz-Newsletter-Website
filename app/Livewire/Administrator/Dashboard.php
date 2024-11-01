<?php

namespace App\Livewire\Administrator;

use App\Models\News;
use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Dashboard extends Component
{
    public function render()
    {
        $user = User::count();
        $role = Role::count();
        $news = News::count();

        return view('livewire.administrator.dashboard',
        [
            'user' => $user,
            'role' => $role,
            'news' => $news,
        ]);
    }
}
