<?php

namespace App\Livewire\Pages\Blog;


use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\blog;
use Carbon\Carbon;

class BlogUpload extends Component
{
    use WithFileUploads;

    public $title;
    public $content;
    public $image;

    protected $rules = [
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // 2MB max for image file
    ];

    public function saveBlog()
    {
        $this->validate();

        // Handle the image upload if it exists
        $imagePath = $this->image->store('blog_images', 'public');
       

        // Save the blog post
        Blog::create([
            'title' => $this->title,
            'content' => $this->content,
            'image_path' => $imagePath,
            'created_at' => Carbon::now(),

        ]);
        
        // Emit event if necessary and reset fields
        
        $this->reset(['title', 'content', 'image']);

        session()->flash('message', 'Blog uploaded successfully!');
    }

   

    public function render()
    {
        return view('livewire.pages.blog.blog-upload');
    }
}
