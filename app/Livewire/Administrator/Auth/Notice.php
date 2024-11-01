<?php

namespace App\Livewire\Administrator\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Notice extends Component
{
    public function resendEmailVerification()
    {
        Auth::user()->sendEmailVerificationNotification();
        // Abaikan eror sendEmailVerificationNotification(), ini berfungsi
        
        session()->flash('flash_message', [
            'type' => 'created',
            'message' => 'Email verifikasi berhasil dikirim ulang',
        ]);

        return redirect()->route('verification.notice');
    }

    public function render()
    {

        return view('livewire.administrator.auth.notice');
    }

}
