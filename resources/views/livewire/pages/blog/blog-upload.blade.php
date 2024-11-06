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

        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Blog Title -->
            <div class="mb-4">
                <label for="title" class="form-label text-sm font-medium text-gray-700">Blog Title</label>
                <input type="text" name="title" id="title" class="form-control mt-1 w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                @error('title') <span class="error text-red-500">{{ $message }}</span> @enderror
            </div>

            <!-- Blog Content with CKEditor -->
            <div>
                <label for="content">Blog Content</label>
                <textarea id="content" name="content" class="form-control"></textarea>
                @error('content') <span class="error">{{ $message }}</span> @enderror
            </div>

            <!-- Blog Image -->
            <div>
                <label for="image">Blog Image</label>
                <input type="file" id="image" name="image" class="form-control">
                @error('image') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select id="category" name="category" class="form-control">
                    <option value="Technology">Technology</option>
                    <option value="Lifestyle">Lifestyle</option>
                    <option value="Fashion">Fashion</option>
                    <option value="Art">Art</option>
                    <option value="Food">Food</option>
                    <option value="Architecture">Architecture</option>
                    <option value="Adventure">Adventure</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="mt-3">
                <button type="submit" class="btn btn-primary px-4 py-2 shadow-sm" style="transition: all 0.3s ease;">
                    Upload Blog
                </button>
            </div>

            <!-- Success Message -->
            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
        </form>

    </div>

</div>


{{-- Do your work, then step back. --}}