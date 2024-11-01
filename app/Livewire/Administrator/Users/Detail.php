<?php

namespace App\Livewire\Administrator\Users;

use App\Models\User;
use Livewire\Component;

class Detail extends Component
{
    public $user;

    public function mount($id)
    {
        $this->user = User::find($id);
    }

    public function render()
    {
        return view(
            'livewire.administrator.users.detail',
        );
    }
}
