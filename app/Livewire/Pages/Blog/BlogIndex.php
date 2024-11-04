<?php

namespace App\Livewire\Pages\Blog;

use Livewire\Component;
use App\Models\blog;


class BlogIndex extends Component
{
    
    public function viewBlog($id)
    {
        // Redirect to the blog-index page with the blog's ID
        return redirect()->route('blogs.show', ['id' => $id]);
    }
    public function render()
    {
        $blogs = Blog::latest()->take(3)->get(); 
        return view('livewire.pages.blog.index',['blogs' => $blogs]);
    }
}
