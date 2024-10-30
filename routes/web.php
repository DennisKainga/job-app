<?php

use App\Livewire\Counter;
use App\Livewire\Pages\About;
use App\Livewire\Pages\Blog\BlogIndex;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\Jobs\JobIndex;
use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Blog\BlogSingle;
use App\Livewire\Pages\Blog\BlogUpload;


Route::get('/', Home::class)->name('pages.home');
Route::get('about-us', About::class)->name('pages.about');
Route::get('jobs', JobIndex::class)->name('pages.jobs.index');
Route::get('blogs', BlogIndex::class)->name('pages.blog.index');
Route::get('contact-us', Contact::class)->name('pages.contact');
Route::get('blog-single',BlogSingle::class)->name('pages.blog.blog-single');
Route ::get('blog-upload',BlogUpload::class)->name('pages.blog.blog-upload');
Route::get('/blogs/{id}', BlogSingle::class)->name('blogs.show');
