<?php

namespace App\Livewire\Pages\Blog;
use App\Models\blog;

use Livewire\Component;


class BlogList extends Component
{
    
    
    public $blogs;

    protected $listeners = ['blogAdded' => 'refreshBlogs'];

    public function mount()
    {
        $this->blogs = Blog::all();
        $this->refreshBlogs();
    }

    public function refreshBlogs()
    {
        // Fetch the blogs from the database, ordering by the latest
        $this->blogs = Blog::orderBy('created_at', 'desc')->get();
    }
    public function viewBlog($id)
    {
        // Redirect to the blog-index page with the blog's ID
        return redirect()->route('blogs.show', ['id' => $id]);
    }
    public function render()
    {
        $blogs = Blog::latest()->take(3)->get(); // Fetches 3 blogs, ordered by latest
        return view('livewire.pages.blog.blog-list', ['blogs' => $blogs]);
    }
       
}
