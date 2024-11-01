<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Logout;
use App\Livewire\Counter;
use App\Livewire\Pages\Home;
use App\Livewire\Pages\About;
use App\Livewire\Auth\Register;
use App\Livewire\Pages\Contact;
use App\Livewire\Pages\Jobs\JobIndex;
use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Blog\BlogIndex;

Route::get('/', Home::class)->name('pages.home');
Route::get('about-us', About::class)->name('pages.about');
Route::get('jobs', JobIndex::class)->name('pages.jobs.index');
Route::get('blogs', BlogIndex::class)->name('pages.blog.index');
Route::get('contact-us', Contact::class)->name('pages.contact');

Route::get('register',Register::class)->name('auth.register');
Route::get('login',Login::class)->name('login');
Route::post('logout',[Logout::class,'logout'])->name('auth.logout')->middleware('auth');;
