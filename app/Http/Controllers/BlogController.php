<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', 
            'category' => 'required|string|in:Technology,Lifestyle,Fashion,Art,Food,Architecture,Adventure',
        ]);

        // Store the uploaded image if available
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blog_images', 'public');
        }

        // Create a new blog entry
        Blog::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image_path' => $imagePath,
            'category' => $validated['category'],  
        ]);

        
        // Redirect with success message
        return redirect()->back()->with('message', 'Blog uploaded successfully!');
    }
    public function index()
{
    // Get the count of blogs per category
    $categoryCounts = Blog::select('category', DB::raw('count(*) as count'))
                          ->groupBy('category')
                          ->get();
    
    // Pass the counts to the view
    return view('livewire.pages.blog.index', compact('categoryCounts'));
}
}

