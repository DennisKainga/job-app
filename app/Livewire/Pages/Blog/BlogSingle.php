<?php

namespace App\Livewire\Pages\Blog;

use Livewire\Component;
use App\Models\blog;
use Illuminate\Support\Facades\DB;


class BlogSingle extends Component
{
    public $blog;

    public function mount($id)
    {
        $this->blog = Blog::findOrFail($id); // Fetch the blog post by ID
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
        return view('livewire.pages.blog.blog-single',['categoryCounts' => $this->getCategoryCounts()] );
    }
}
