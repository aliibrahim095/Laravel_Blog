<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //create function index to view all posts
    public function index(){

        $posts=Post::all();

//        $posts = [
//            ['id' => 1, 'title' => 'Laravel', 'description' => 'Laravel is a web application framework', 'posted_by' => 'Aly', 'created_at' => '2021-03-13'],
//            ['id' => 2, 'title' => 'NodeJS', 'description' => 'NodeJS is a web application framework', 'posted_by' => 'Omar', 'created_at' => '2021-03-25'],
//            ['id' => 3, 'title' => 'HTML5', 'description' => 'HTML5 is a web application Front-end technology', 'posted_by' => 'Ahmed', 'created_at' => '2021-03-20'],
//            ['id' => 4, 'title' => 'JavaScript', 'description' => 'JavaScript is a web application Front-end technology', 'posted_by' => 'Khaled', 'created_at' => '2021-04-21'],
//            ['id' => 5, 'title' => 'JQuery', 'description' => 'JQuery is a web application Front-end technology', 'posted_by' => 'Omar', 'created_at' => '2021-06-25'],
//            ['id' => 6, 'title' => 'CSS', 'description' => 'CSS is a web application Front-end technology', 'posted_by' => 'Mohamed', 'created_at' => '2021-07-21']
//        ];
        return view('posts.index',
            ['posts'=>$posts]);
    }

    //create function to show to show a specific post
    public function show($post_id){
        $post = Post::find($post_id);
//        $post = ['id' => 1, 'title' => 'Laravel', 'description' => 'Laravel is a web application framework with expressive', 'posted_by' => 'Aly', 'created_at' => '2021-03-13'];
        return view('posts.show',['post'=>$post]); //posts.show === posts/show
    }

    //create function to edit a specific post
    public function edit($post_id){
        $post = ['id' => 1, 'title' => 'Laravel', 'description' => 'Laravel is a web application framework with expressive, elegant syntax', 'posted_by' => 'Aly', 'created_at' => '2021-03-13'];
        return view('posts.edit',['post'=>$post]);
    }

    //create function to create a new post
    public function create(){
        return view('posts.create');
    }

    //create function to destroy a  post
    public function destroy($post_id){
        //logic to destroy from database
        return redirect()->route('posts.index');
    }

    //create store post in database
    public function store(){
        //logic to store in the database
        return redirect()->route('posts.index');
    }

    //create function to  update post in the database
    public function update($post_id){
        //logic to update in the database
        return redirect()->route('posts.index');
    }
}
