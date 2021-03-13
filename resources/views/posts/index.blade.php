@extends('layouts.app')

@section('content')
    <div class="text-center">
    <a href="#" class="btn btn-success p-2 mt-3">Create Post</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-8">
            <table class="table table-responsive mt-3">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Posted by</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <th scope="row">{{$post['id']}}</th>
                            <td>{{$post['title']}}</td>
                            <td>{{$post['posted_by']}}</td>
                            <td>{{$post['created_at']}}</td>
                            <td class="col">
                                {{--                    {{ route('posts.show', [ 'post' => $post['id'] ]) }}--}}
                                <a href="#" class="btn btn-info">View</a>
                                <a href="#" class="btn btn-primary">Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
    </div>
@endsection