<div>
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Blog Upload
                    </h1>
                    <p class="text-white link-nav"><a href="index.html">Home </a> <span
                            class="lnr lnr-arrow-right"></span>
                        <a href="blog-home.html"> Blog</a>
                        <span
                            class="lnr lnr-arrow-right"></span>
                        <a href="blog-home.html"> Blog Upload</a>

                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="container mt-50 mb-50">

        <form wire:submit.prevent="submit">
            @csrf

            <!-- Blog Title -->
            <div class="mb-4">
                <label for="title" class=" form-label text-sm font-medium text-gray-700">Blog Title</label>
                <input type="text" wire:model="title" id="title" class=" form-control mt-1 w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                @error('title') <span class="error text-red-500">{{ $message }}</span> @enderror
            </div>

            <!-- Blog Description -->
            <div class="mb-4">
                <label for="description" class=" form-label block text-sm font-medium text-gray-700">Description</label>
                <textarea wire:model="description" id="description" rows="3" class=" form-control mt-1 block w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required></textarea>
                @error('description') <span class="error text-red-500">{{ $message }}</span> @enderror
            </div>

            <!-- File Upload -->
            <div class="mb-4">
                <label for="content" class=" form-label block text-sm font-medium text-gray-700">Upload Content</label>
                <input type="file" wire:model="content" id="content" class=" form-control mt-1 block w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('content') <span class="error text-red-500">{{ $message }}</span> @enderror
            </div>

            <!-- Submit Button -->
            <div class="mt-3">
                <button type="submit" class="btn btn-primary px-4 py-2 shadow-sm" style="transition: all 0.3s ease;">
                    Submit Blog
                </button>
            </div>

            <!-- Success Message -->
            @if (session()->has('success'))
            <div class="mt-4 p-2 bg-green-500 text-white rounded">
                {{ session('success') }}
            </div>
            @endif
        </form>
    </div>
</div>


{{-- Do your work, then step back. --}}