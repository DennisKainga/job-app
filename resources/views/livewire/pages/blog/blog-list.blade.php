<div class="blog-list">
    @foreach($blogs as $blog)

    <div class="blog-preview flex items-center space-x-4" wire:click="viewBlog({{ $blog->id }})">
        <div class="blog-info ml-4">
            <h5>{{ $blog->title }}</h5>
            <p>Published on: {{ $blog->created_at->format('F j, Y, g:i a') }}</p>

            @if($blog->image_path)
            <img src="{{ asset('storage/' . $blog->image_path) }}" alt="Blog Image" class="blog-thumbnail">
            @endif
        </div>
    </div>
    
    @endforeach
    @if ($hasMore)
    <button wire:click="loadMore" class="btn btn-primary">
    Load More
</button>
    @else
        <p>No more blogs to load.</p>
    @endif
   
    
</div>