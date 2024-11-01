<?php

namespace App\Livewire\Administrator\Users;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Edit extends Component
{
    public $id_pengguna;

    // Users
    public $name;
    public $email;
    public $password;
    public $role;
    public $phone;

    // Biodatas
    public $fullname;
    public $gender;
    public $place_birth;
    public $date_birth;
    public $address;

    public function mount($id)
    {
        $user = User::find($this->id_pengguna = $id);
        // User
        $this->id_pengguna = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->phone = $user->phone;
        $this->password = $user->password;
        // Biodata
        $this->address = $user->biodata->address;
        $this->fullname = $user->biodata->fullname;
        $this->gender = $user->biodata->gender;
        $this->place_birth = $user->biodata->place_birth;
        $this->date_birth = $user->biodata->date_birth;
        // $this->role = $user->roles->first();
        $this->role = $user->roles->first() ? $user->roles->first()->id : null;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $this->id_pengguna,
            'phone' => 'required|string|min:10',
            'password' => 'nullable|string|min:8',
            'role' => 'required|exists:roles,id',
            'fullname' => 'required|string|max:255',
            'gender' => 'required|string|in:Laki-Laki,Perempuan',
            'place_birth' => 'required|string|max:255',
            'date_birth' => 'required|date',
            'address' => 'required|string|max:255',
        ]);

        $user = User::find($this->id_pengguna);
        $user->name = $this->name;
        $user->email = $this->email;
        $user->phone = $this->phone;

        // Update Role Baru
        $roleBaru = Role::find($this->role); //secara default ambil id role yang dipilih
        $user->syncRoles([$roleBaru]); //secara default syncRole id yang baru

        $user->save();

        $biodata = $user->biodata;
        $biodata->fullname = $this->fullname;
        $biodata->gender = $this->gender;
        $biodata->place_birth = $this->place_birth;
        $biodata->date_birth = $this->date_birth;
        $biodata->address = $this->address;

        $biodata->save();

        session()->flash('flash_message', [
            'type' => 'updated',
            'message' => 'User berhasil diperbarui.',
        ]);

        return redirect()->route('administrator.users');
        
    }

    public function render()
    {
        $roles = Role::all();
        return view(
            'livewire.administrator.users.edit',
            [
                'roles' => $roles,
            ]
        );
    }
}
