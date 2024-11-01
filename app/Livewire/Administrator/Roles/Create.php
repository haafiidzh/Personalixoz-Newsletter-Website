<?php

namespace App\Livewire\Administrator\Roles;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Livewire\Component;

class Create extends Component
{
    public $role;
    public $guard_name = 'web';
    public $selectedPermissions = []; // Array untuk menyimpan permission yang dipilih
    public $permissions; // Untuk menampung semua permission dari database
    
    public function mount()
    {
        $this->permissions = Permission::all();
    }

    public function store()
    {
        $this->validate([
            'role' => 'required|string|max:255',
            'selectedPermissions' => 'required|array', // Pastikan ada permission yang dipilih
        ]);

        // Buat role baru
        $role = Role::create([
            'name' => $this->role,
            'guard_name' => $this->guard_name
        ]);

        // Ambil nama permission berdasarkan ID yang dipilih
        $permissionNames = Permission::whereIn('id', $this->selectedPermissions)->pluck('name')->toArray();
        // $permissionNames = Permission::whereIn('id', $this->selectedPermissions)->get(); 

        // Assign permission ke role baru
        $role->syncPermissions($permissionNames);

        session()->flash('flash_message', [
            'type' => 'created',
            'message' => 'Berhasil membuat Role baru.',
        ]);

        return redirect()->route('administrator.roles');
    }

    public function render()
    {
        return view('livewire.administrator.roles.create');
    }
}
