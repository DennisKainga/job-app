<?php

namespace App\Livewire\Pages;

use App\Models\Cv;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class UploadCv extends Component
{

    use WithFileUploads;

    public $cv;

    public function uploadcv(){
        $this->validate([
            'cv' => 'required|file|max:1024|mimes:pdf,doc,docx',
        ]);
        if ($this->cv){
            $cvpath =  $this->cv->store('cvsDocuments','public');
            Cv::create([
                'user_id' => Auth::id(),
                'cvpath' => $cvpath,
            ]);
            
            session()->flash('message', 'PDF uploaded successfully!');
            return redirect()->route('pages.contact');
        }

        
    } 
    public function render()
    {
        return view('livewire.pages.upload-cv');
    }
}
