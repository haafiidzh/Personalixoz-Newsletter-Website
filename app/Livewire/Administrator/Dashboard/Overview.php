<?php

namespace App\Livewire\Administrator\Dashboard;

use App\Models\News;
use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Overview extends Component
{
    public function render()
    {
        $user = User::count();
        $role = Role::count();
        $news = News::count();

       
        return view('livewire.administrator.dashboard.overview', [
            'user' => $user,
            'role' => $role,
            'news' => $news,
        ]);
    }
}
