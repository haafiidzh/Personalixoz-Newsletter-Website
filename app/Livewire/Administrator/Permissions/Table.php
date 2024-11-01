<?php

namespace App\Livewire\Administrator\Permissions;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;
    
    public $search;

    public function mount()
    {
        $this->search= '';
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $permissions = Permission::when($this->search, function ($query) {
            $query->where('name', 'like', '%' . $this->search . '%');
        })->paginate(10);
        return view('livewire.administrator.permissions.table', ['permissions' => $permissions]);
    }

    public function delete($id)
    {
        $permission = Permission::find($id);
        if ($permission) {
            $permission->delete();
            session()->flash('flash_message', [
                'type' => 'deleted',
                'message' => 'Permission berhasil dihapus.',
            ]);
            return redirect()->route('administrator.permissions');
        } else {
            session()->flash('flash_message', [
                'type' => 'error',
                'message' => 'Permission tidak ditemukan.',
            ]);
            return redirect()->route('administrator.permissions');
        } 
    }    
}
