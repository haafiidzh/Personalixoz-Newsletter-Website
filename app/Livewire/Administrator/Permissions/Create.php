<?php

namespace App\Livewire\Administrator\Permissions;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class Create extends Component
{
    public $name;
    public $guard_name = 'web';

    public function store()
    {
        $this->validate([
            'name' => 'required',
        ]);

        Permission::create([
            'name' => $this->name,
            'guard_name' => $this->guard_name
        ]);

        session()->flash('flash_message', [
            'type' => 'created',
            'message' => 'Berhasil membuat Permission baru.',
        ]);

        return redirect()->route('administrator.permissions');
    }

    public function render()
    {
        return view('livewire.administrator.permissions.create');
    }
}
