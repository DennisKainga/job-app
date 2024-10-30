<div class="blog-list">
    @foreach($blogs as $blog)
    <div class="blog-preview" wire:click="viewBlog({{ $blog->id }})">
            <h2>{{ $blog->title }}</h2>
            <p>Published on: {{ $blog->created_at->format('F j, Y, g:i a') }}</p>

            @if($blog->image_path)
                <img src="{{ asset('storage/' . $blog->image_path) }}" alt="Blog Image" style="width: 100%; max-width: 300px;">
            @endif
        </div>
    @endforeach
</div>
