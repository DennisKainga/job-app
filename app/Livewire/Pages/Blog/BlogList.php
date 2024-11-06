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
        $this->blogs = Blog::orderBy('created_at', 'desc')->limit(3)->get();
    }
    public function viewBlog($id)
    {
        // blog-index page with the blog's ID
        return redirect()->route('blogs.show', ['id' => $id]);
    }
    public $limit = 3; // Initial number of blogs to show
    public $hasMore = true; // Indicator for more blogs to load

    // Method to increase the limit and check if more blogs exist
    public function loadMore()
    {
        $this->limit += 3; // Load 3 more each time
        $totalBlogs = Blog::count();

        // Check if there are more blogs after increasing the limit
        $this->hasMore = Blog::count();
        $this->hasMore = $totalBlogs > $this->limit;
    }
    public function render()
    {
        $blogs = Blog::latest()->take($this->limit)->get();
        $this->hasMore = Blog::count() > $this->limit; 
        return view('livewire.pages.blog.blog-list', ['blogs' => $blogs]);
    }
       
}
