<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //create function index
    public function index(){
        $posts = [
            ['id' => 1, 'title' => 'Laravel', 'description' => 'This Is description1', 'posted_by' => 'Ahmed', 'created_at' => '2021-03-13'],
            ['id' => 2, 'title' => 'JS', 'description' => 'This Is description2', 'posted_by' => 'Mohamed', 'created_at' => '2021-03-25'],
            ['id' => 3, 'title' => 'HTML5', 'description' => 'This Is description3', 'posted_by' => 'Aly', 'created_at' => '2021-03-28']
        ];
        return view('posts.index',
            ['posts'=>$posts]);
    }
}
