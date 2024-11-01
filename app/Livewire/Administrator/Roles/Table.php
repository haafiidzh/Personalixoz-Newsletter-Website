<?php

namespace App\Livewire\Administrator\Roles;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class Table extends Component
{
    use WithPagination;

    public function render()
    {
        $roles = Role::paginate(5);
        return view('livewire.administrator.roles.table', ['roles' => $roles]);
    }

    public function delete($id)
    {
        $role = Role::find($id);
        if ($role) {
            $role->delete();
            session()->flash('flash_message', [
                'type' => 'deleted',
                'message' => 'Role  berhasil dihapus.',
            ]);
            return redirect()->route('administrator.roles');
        } else {
            session()->flash('flash_message', [
                'type' => 'error',
                'message' => 'Role  tidak ditemukan.',
                'icon' => 'fa-circle-exclamation',
            ]);
            return redirect()->route('administrator.roles');
        } 
    }
}
