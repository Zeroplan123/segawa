<?php

use App\Models\post;
use App\Http\Controllers\MenuController;
use App\Models\Category;
use App\Models\User;

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('app', ['takeline' => 'Home/Dahboard']);

})->name('home');

Route::get('/posts', function () {
    // $posts = post::with(['author', 'categories'])->latest()->get();
    $query = post::latest();
       if (request('search')) {
        $query->where('title', 'like', '%' . request('search') . '%');
    }

    // Filter by category
    if (request('category')) {
        $query->whereHas('categories', function($q){
            $q->where('slug', request('category'));
        });
    }

    return view('posts', ['takeline' => 'posts', 'title' => 'blog', 'posts' =>$query ->paginate(9), 'categories' => Category::all()]);

})->name('Blog');

Route::get('/about', function () {
    return view('about', ['takeline' => 'About Me'] );

})->name('About_Me');

Route::get('/contact', function () {
    return view('contact', ['takeline' => 'Contact']);

})->name('contact');

Route::get('/project', function () {
    return view('app', ['takeline' => 'project']);

})->name('project');

Route::get('/apa', function(){
    return view('apalah');
});

Route::get('/posts/{slug}', function($slug){
    $post = post::where('slug', $slug)->firstOrfail();;

    return view('post', ['title' => 'Single post', 'post' => $post]);
});

Route::get('/authors/{user}', function(User $user){
    // $posts = $user->posts->load(['author', 'categories']);
    return view('posts', ['takeline' => 'Halaman penulis', 'title'=> 'halaman penulis: '. $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    //  $posts = $category->posts->load(['author', 'categories']);
    return view('posts', ['takeline' => 'Halaman category', 'title'=> 'halaman category: '. $category->name, 'posts' => $category->posts]);
});






