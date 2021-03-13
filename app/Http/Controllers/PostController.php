<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //create function index to view all posts
    public function index(){
        $posts = [
            ['id' => 1, 'title' => 'Laravel', 'description' => 'Laravel is a web application framework', 'posted_by' => 'Aly', 'created_at' => '2021-03-13'],
            ['id' => 2, 'title' => 'NodeJS', 'description' => 'NodeJS is a web application framework', 'posted_by' => 'Omar', 'created_at' => '2021-03-25'],
            ['id' => 3, 'title' => 'HTML5', 'description' => 'HTML5 is a web application Front-end technology', 'posted_by' => 'Ahmed', 'created_at' => '2021-03-28']
        ];
        return view('posts.index',
            ['posts'=>$posts]);
    }

    //create function to show to show a specific post
    public function show($post_id){
        $post = ['id' => 1, 'title' => 'Laravel', 'description' => 'Laravel is a web application framework with expressive', 'posted_by' => 'Aly', 'created_at' => '2021-03-13'];
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

}
