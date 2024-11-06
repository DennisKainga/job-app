<div>
    {{-- Be like water. --}}
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Blog Posts
                    </h1>
                    <p class="text-white link-nav"><a href="index.html">Home </a> <span
                            class="lnr lnr-arrow-right"></span>
                        <a href="blog-home.html"> Blog Posts</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    <!-- Start blog-posts Area -->
    <section class="blog-posts-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 post-list blog-post-list">
                    <div class="blog-large-section">
                        @foreach ($blogs as $blog)
                        <div class="single-post" wire:click="viewBlog({{ $blog->id }})">
                            <img src="{{ asset('storage/' . $blog->image_path) }}" alt="{{ $blog->title }}"
                                class="img-fluid w-100 " style="height:500px;">
                            <ul class="tags">
                                <li><a href="#">Art, </a></li>
                                <li><a href="#">Technology, </a></li>
                                <li><a href="#">Fashion</a></li>
                            </ul>

                            <h2>{{ $blog->title }}</h2>
                            <p>{{ $blog->created_at->format('M d, Y') }}</p>
                            <p>{!! Str::limit($blog->content, 1000) !!}</p>
                            <!-- Optional preview of the blog content -->

                            <div class="bottom-meta">
                                <div class="user-details row align-items-center">
                                    <div class="comment-wrap col-lg-6">
                                        <ul>
                                            <li>
                                                <a href="#"><span class="lnr lnr-heart"></span> 4 likes</a>
                                            </li>
                                            <li>
                                                <a href="#"><span class="lnr lnr-bubble"></span> 06
                                                    Comments</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="social-wrap col-lg-6">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-behance"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
                <div class="col-lg-4 sidebar">
                    <div class="single-widget search-widget">
                        <form class="example" action="#" style="margin: auto; max-width: 300px">
                            <input type="text" placeholder="Search Posts" name="search2" />
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>

                    <div class="single-widget protfolio-widget">
                        <img class="img-fluid" src="{{ asset('assets/img/blog/user2.jpg') }}" alt="" />
                        <a href="#">
                            <h4>Adele Gonzalez</h4>
                        </a>
                        <p>
                            MCSE boot camps have its supporters and its detractors. Some
                            people do not understand why you should have to spend money on
                            boot camp when you can get.
                        </p>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="single-widget category-widget">
                        <h4 class="title">Post Categories</h4>
                        <ul>
                            @foreach ($categoryCounts as $category)
                            <li>
                                <a href="#" class="justify-content-between align-items-center d-flex">
                                    <h6>{{ $category->category }}</h6>
                                    <span>{{ $category->count }}</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="single-widget recent-posts-widget">
                        <h4 class="title">Recent Posts</h4>
                        <div class="blog-list">

                            <div>

                                @livewire('pages.blog.blog-list')
                            </div>


                        </div>


                    </div>

                    <div class="single-widget category-widget">
                        <h4 class="title">Post Archive</h4>
                        <ul>
                            <li>
                                <a href="#" class="justify-content-between align-items-center d-flex">
                                    <h6>Dec '17</h6>
                                    <span>37</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="justify-content-between align-items-center d-flex">
                                    <h6>Nov '17</h6>
                                    <span>24</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="justify-content-between align-items-center d-flex">
                                    <h6>Oct '17</h6>
                                    <span>59</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="justify-content-between align-items-center d-flex">
                                    <h6>Sep '17</h6>
                                    <span>29</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="justify-content-between align-items-center d-flex">
                                    <h6>Aug '17</h6>
                                    <span>15</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="justify-content-between align-items-center d-flex">
                                    <h6>Jul '17</h6>
                                    <span>09</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="justify-content-between align-items-center d-flex">
                                    <h6>Jun '17</h6>
                                    <span>44</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="single-widget tags-widget">
                        <h4 class="title">Tag Clouds</h4>
                        <ul>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Art</a></li>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Techlology</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Technology</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End blog-posts Area -->
</div>