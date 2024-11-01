<?php

namespace App\Livewire\Administrator\Users;

use Livewire\Component;
use App\Models\Biodata;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class Create extends Component
{
    // Users
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $role;
    public $phone;

    // Biodatas
    public $fullname;
    public $gender;
    public $place_birth;
    public $date_birth;
    public $address;


    public function store()
    {
        // Validasi input
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|min:10',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8',
            'role' => 'required|exists:roles,id',
            'fullname' => 'required|string|max:255',
            'gender' => 'required|string|max:10',
            'place_birth' => 'required|string|max:255',
            'date_birth' => 'required|date',
            'address' => 'required|string|max:255',
        ]);

        // Buat user baru di tabel users
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password), // Hash password
            'phone' => $this->phone,
        ]);

        // Assign Role yang baru saja dibuat
        $roleName = Role::find($this->role);
        $user->assignRole($roleName);

        // Buat biodata untuk user baru
        Biodata::create([
            'user_id' => $user->id,
            'fullname' => $this->fullname,
            'gender' => $this->gender,
            'place_birth' => $this->place_birth,
            'date_birth' => $this->date_birth,
            'address' => $this->address,
        ]);
        
        // Event untuk mengirim email verifikasi pada user yang baru saja dibuat
        event(new Registered($user));

        
        session()->flash('flash_message', [
            'type' => 'created',
            'message' => 'User berhasil ditambah.',
        ]);

        return redirect()->route('administrator.users');
    }

    public function render()
    {
        $roles = Role::all();
        return view(
            'livewire.administrator.users.create',
            ['roles' => $roles]
        );
    }
}
