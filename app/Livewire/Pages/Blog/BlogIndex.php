<?php

namespace App\Livewire\Pages\Blog;

use Livewire\Component;
use App\Models\blog;
use Illuminate\Support\Facades\DB;


class BlogIndex extends Component
{
    
    public function viewBlog($id)
    {
        // Redirect to the blog-index page with the blog's ID
        return redirect()->route('blogs.show', ['id' => $id]);
    }
    public function getCategoryCounts()
    {

        $categoryCounts = Blog::select('category', DB::raw('count(*) as count'))
                                ->groupBy('category')
                                ->get();

        return $categoryCounts;
    }
    public function render()
    {
        $blogs = Blog::latest()->take(3)->get(); 
        return view('livewire.pages.blog.index',['blogs' => $blogs, 'categoryCounts' => $this->getCategoryCounts()] );
    }
   

}
