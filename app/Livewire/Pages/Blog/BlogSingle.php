<?php

namespace App\Livewire\Pages\Blog;

use Livewire\Component;
use App\Models\blog;

class BlogSingle extends Component
{
    public $blog;

    public function mount($id)
    {
        $this->blog = Blog::findOrFail($id); // Fetch the blog post by ID
    }
    
    public function render()
    {
        return view('livewire.pages.blog.blog-single');
    }
}
