<?php

use App\Comment;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Support\Facades\DB;
// use App\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

// $categories = Category::select('id','title')->orderBy('title')->get();

// $tags = Tag::select('id', 'name')->orderByDesc(
//     DB::table('post_tag')
//     ->selectRaw('count(tag_id) as tag_count')
//     ->whereColumn('tags.id' , 'post_tag.tag_id')
//     ->orderBy('tag_count', 'desc')
//     ->limit(1)
// )->get();

// $latest_posts = Post::select('id', 'title')->latest()->take(5)->withCount('comments')->get();

// $most_popular_posts = Post::select('id', 'title')->orderByDesc(
// Comment::selectRaw('count(post_id) as comment_count')
// ->whereColumn('posts.id', 'comments.post_id')
// ->orderBy('comment_count', 'desc')
// ->limit(1)
// )->withCount('comments')->take(5)->get();

// $most_active_users = User::select('id', 'name')->orderByDesc(
//     Post::selectRaw('count(user_id) as post_count')
//     ->whereColumn('users.id', 'posts.user_id')
//     ->orderBy('post_count', 'desc')
//     ->limit(1)
// )
// ->withCount('posts')->take(3)->get(); 




dump("<h1>Welcome!</h1>");

// dump($most_active_users);

    // return view('welcome');
}); 
