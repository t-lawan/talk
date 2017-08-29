<?php
use App\Post;

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
Route::get('/test', function () {
    $posts = Post::with('user')->orderBy('created_at','desc')->get();

    return view('test',compact('posts'));
    //return ["A","B","C","D"];
});



Route::get('/', 'PostsController@index');
Route::get('posts/{post}','PostsController@show');
Route::post('/posts','PostsController@store');
Route::put('/posts/{post}', 'PostsController@update');
Route::put('/posts/{post}/privacy', 'PostsController@changePrivacy');
Route::delete('/posts/{post}','PostsController@destroy');


Route::post('/posts/{post}/comments', 'CommentsController@store');
Route::delete('/comments/{comment}','CommentsController@destroy');

Route::get('profile/{user}', 'UsersController@show');
Route::get('/settings/{user}','UsersController@edit');
Route::put('settings/{user}','UsersController@update');


Auth::routes();

/*
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
*/
