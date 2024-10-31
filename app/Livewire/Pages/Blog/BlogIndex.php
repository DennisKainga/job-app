<?php

namespace App\Livewire\Pages\Blog;

use Livewire\Component;
use App\Models\blog;


class BlogIndex extends Component
{
   
    public function render()
    {
        $blogs = Blog::latest()->get(); 
        return view('livewire.pages.blog.index',['blogs' => $blogs]);
    }
}
