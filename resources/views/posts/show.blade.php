@extends('layouts.app')

@section('content')

        <div class="card mt-5 col-8">
            <div class="card-header">
                Post Info
            </div>
            <div class="card-body">
                <h5 class="card-title">Title:-{{$post['title']}}</h5>
                <p class="card-text">Description:-<br>{{$post['description']}}</p>
            </div>
        </div>

        <div class="card mt-5 col-8">
            <div class="card-header">
                Post Creator Info
            </div>
            <div class="card-body">
                <h6 class="card-title">Name:- {{$post['posted_by']}}</h6>
                <h6 class="card-title">Email:- {{$post['posted_by']}}@yahoo.com</h6>
                <h6 class="card-title">Created At:- {{$post['created_at']}}</h6>
            </div>
        </div>
@endsection
