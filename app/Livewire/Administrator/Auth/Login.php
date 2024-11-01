<?php

namespace App\Livewire\Administrator\Auth;

use App\Models\User;
use Livewire\Component;
// Untuk autentikasi
use Illuminate\Support\Facades\Auth;
// diperlukan jika passwordnya dihash                                                             
use Illuminate\Support\Facades\Hash;
// diperlukan jika gagal validasi
use Illuminate\Validation\ValidationException;


class Login extends Component
{
    public $userEmail;
    public $showPassword = false;
    public $userPassword = '';
    public $loginError;

    // ini function mengatur login nya
    public function login()
    {
        $this->validate([
            'userEmail' => 'required|email',
            'userPassword' => 'required|min:6',
        ]);

        $cekKebenaran = [
            // ini dicocokkan dengan database
            'email' => $this->userEmail,
            'password' => $this->userPassword,
        ];

        // lalu coba login dengan inputan di form
        if (Auth::attempt($cekKebenaran)) {
            return redirect()->route('administrator.dashboard');
            session()->flash('message', 'Login successful!');
        } else {
            $this->loginError = 'Invalid email or password.';
            session()->flash('error', 'Invalid email or password.');
        }
    }

    public function togglePasswordVisibility()
    {
        // Toggle untuk show/hide password
        $this->showPassword = !$this->showPassword;
    }

    public function render()
    {
        return view('livewire.administrator.auth.login');
    }
}
