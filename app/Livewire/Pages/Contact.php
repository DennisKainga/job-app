<?php

namespace App\Livewire\Pages;

use Livewire\Component;

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

    public function Updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function send(){
        Session()->flash('success','Message sent');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.pages.contact');
    }
}
