<?php

namespace App\Livewire\Pages;

use App\Models\Profile;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UserProfile extends Component
{
    public $firstname, $lastname, $username,$city,$state,$zip ;

    public function mount()
    {
        // Check if the user is authenticated and prefill the fields
        if (Auth::check()) {
            $user = Auth::user();
            $this->firstname = $user->firstname;
            $this->lastname = $user->lastname;
            
        }
    }

    public function storeProfile()
    {
        $this->validate([

        'username' => 'required|string|max:20|min:3',
        'city' => 'required|string|max:20|min:3',
        'state' => 'required|string|max:20|min:3',
        'zip' => 'required|string|max:20|min:3',
        
        ]);

        Profile::create([
            'username' => $this->username,
            'city' => $this->city,
            'state' => $this->state,
            'zip' => $this->zip,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('pages.contact'); 
    }

    public function render()
    {
        return view('livewire.pages.profile');
    }
}