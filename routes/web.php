<?php

use App\Livewire\Counter;
use App\Livewire\Jobs\Form;
use App\Livewire\Pages\About;
use App\Livewire\Pages\Blog\BlogIndex;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\Jobs\JobIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('pages.home');
Route::get('about-us', About::class)->name('pages.about');
Route::get('jobs', JobIndex::class)->name('pages.jobs.index');
Route::get('blogs', BlogIndex::class)->name('pages.blog.index');
Route::get('contact-us', Contact::class)->name('pages.contact');


Route::group(['prefix' => 'jobs'], function () {
    Route::get('form', Form::class)->name('jobs.form');
});
