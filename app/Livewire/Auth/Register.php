<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Features\SupportNavigate\SupportNavigate;

class Register extends Component
{
    public $firstname, $lastname, $email, $password, $password_confirmation;

    
    public function storeUser()
    {
        $this->validate([
        'firstname' => 'required|string|max:20|min:3',
        'lastname' => 'required|string|max:20|min:3',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'password'=>bcrypt($this->password),
            // 'password' => Hash::make($this->password),
        ]);

        Auth::login($user);

        session()->flash('success','Registration succesful');

        return redirect()->route('pages.contact'); // or wherever you want to redirect
    }
    public function render()
    {
        return view('livewire.auth.register');
    }
}
