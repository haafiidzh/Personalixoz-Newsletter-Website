<?php

namespace App\Livewire\Administrator\Users;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public $search;

    public function mount()
    {
        $this->search = '';
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $users = User::whereDoesntHave('roles', function ($query) {
            $query->where('name', 'Developer'); // Filter Menyembunyikan user dengan role Developer
        })
            ->where('id', '!=', auth()->id()) // Filter Menyembunyikan user yang sedang login
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('name', 'like', '%' . $this->search . '%')
                        ->orWhere('email', 'like', '%' . $this->search . '%');
                });
            })
            ->paginate(10);

        return view('livewire.administrator.users.table', ['users' => $users]);
    }

    public function delete($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            session()->flash('flash_message', [
                'type' => 'deleted',
                'message' => 'User  berhasil dihapus.',
            ]);
            return redirect()->route('administrator.users');
        } else {
            session()->flash('flash_message', [
                'type' => 'error',
                'message' => 'User  tidak ditemukan.',
                'icon' => 'fa-circle-exclamation',
            ]);
            return redirect()->route('administrator.users');
        }
    }
}
