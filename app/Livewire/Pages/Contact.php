<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;

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

    public function send(){
        $toEmail = 'harrisonmuraya8@gmail.com';
        Mail::to($toEmail)->send(new ContactUsMail($this->name, $this->email, $this->subject, $this->message));
    }


    public function render()
    {
        return view('livewire.pages.contact');
    }
}
