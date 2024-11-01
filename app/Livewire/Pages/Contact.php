<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Session\Session;

class Contact extends Component
{
    public $name ='';
    public $email = '';
    public $subject = '';
    public $message = '';

    protected $rules = [
        'name'=>'required|min:6',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required'
    ];

    public function mount()
    {
        // Check if the user is authenticated and prefill the fields
        if (Auth::check()) {
            $user = Auth::user();
            $this->name = $user->firstname . ' ' . $user->lastname; // Combine first and last name
            $this->email = $user->email;
        }
    }

    public function send(){
        $toEmail = 'harrisonmuraya8@gmail.com';
        Mail::to($toEmail)->send(new ContactUsMail($this->name, $this->email, $this->subject, $this->message));


        Session()->flash('success','Message sent Successfully');
        $this->reset();
    }

    public function redirectToLogin()
    {
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.pages.contact');
    }
}
