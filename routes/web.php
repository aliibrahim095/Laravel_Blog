<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; 
use Illuminate\Support\Facades\Auth;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use App\Models\User;





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
    return view('welcome');
});

Route::get('posts', [PostController::class, 'index'])->name('posts.index')->middleware('auth');
Route::get('/posts/create',[PostController::class,'create'])->name('posts.create')->middleware('auth');
Route::post('posts',[PostController::class,'store'])->name('posts.store')->middleware('auth');
Route::put('/posts/{post}',[PostController::class,'update'])->name('posts.update')->middleware('auth');
Route::get('/posts/{post}',[PostController::class, 'show'])->name('posts.show')->middleware('auth');
Route::get('/posts/{post}/edit',[PostController::class,'edit'])->name('posts.edit')->middleware('auth');
Route::delete('/posts/{post}',[PostController::class,'destroy'])->name('posts.destroy')->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');


Route::get('/auth/redirect', function () {
    // dd("stop here");
    return Socialite::driver('github')->redirect();
});

Route::get('/auth/callback', function () {
    $user = Socialite::driver('github')->user();
        dd($user);
        exit();
    // $user->token
});

Route::get('auth/google', function(){
    return Socialite::driver('google')->redirect();
});
Route::get('auth/google/callback', function(){
    try {
    
        $user = Socialite::driver('google')->user();
 
        $finduser = User::where('google_id', $user->id)->first();
 
        if($finduser){
 
            Auth::login($finduser);

            return redirect('/home');
 
        }else{
            $newUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'google_id'=> $user->id,
                'password' => encrypt('123456dummy')
            ]);

            Auth::login($newUser);
 
            return redirect('/home');
        }

    } catch (Exception $e) {
        dd($e->getMessage());
    }
});
