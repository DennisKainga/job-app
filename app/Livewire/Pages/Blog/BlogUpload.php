<?php

namespace App\Livewire\Pages\Blog;


use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\blog;

class BlogUpload extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $content;

    // Validation rules
    protected $rules = [
        'title' => 'required|max:255',
        'description' => 'required',
        'content' => 'required|file|mimes:doc,pdf,txt|max:2048',
    ];

    // Method to save blog
    public function submit()
    {
        // Validate input
        $this->validate();

        dd($this->all());
        // Handle the file upload
        $filePath = $this->content->store('uploads', 'public');

        // Save the blog post
        blog::create([
            'title' => $this->title,
            'description' => $this->description,
            'content_path' => $filePath,
        ]);

        // Reset the form
        $this->reset(['title', 'description', 'content']);

        // Send a success message
        session()->flash('success', 'Blog uploaded successfully!');
    }
    public function render()
    {
        return view('livewire.pages.blog.blog-upload');
    }
}
