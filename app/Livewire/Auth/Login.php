<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email,$password;
    public function loginUser(Request $request){
        $incomingFields= $this->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            ]);
          if(Auth::attempt($incomingFields)){
            $request->session()->regenerateToken();

            $intendedUrl = session('url.intended', route('pages.contact')); // Default to home if no intended URL
            return redirect()->to($intendedUrl);

          }
          $this->addError('email','Invalid credentials');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
