<?php

namespace App\Livewire\Administrator\Roles;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Edit extends Component
{
    public $id_role;

    public $name;
    public $selectedPermissions;
    public $selectedRole;

    // untuk menampilkan semua permission
    public $permissions;

    public function mount($id)
    {
        $selectedRole = Role::find($this->id_role = $id);

        $this->name = $selectedRole->name;

        $this->permissions = Permission::all();

        $this->selectedPermissions = $selectedRole->permissions->pluck('id')->toArray();
    }

    public function update()
    {
        $role = Role::find($this->id_role);

        // Update nama role
        $role->name = $this->name;
        $role->save();

        $permissionNames = Permission::whereIn('id', $this->selectedPermissions)->pluck('name')->toArray();

        // Sinkronisasi permission yang dipilih
        $role->syncPermissions($permissionNames);

        session()->flash('flash_message', [
            'type' => 'updated',
            'message' => 'Role berhasil diperbarui.',
        ]);
        return redirect()->route('administrator.roles');
    }

    public function render()
    {
        return view('livewire.administrator.roles.edit');
    }
}
