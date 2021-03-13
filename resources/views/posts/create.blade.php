@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">

            {{--            'id' => 1, 'title' => 'Laravel', 'description' => 'Show Post Description', 'posted_by' => 'Aly', 'created_at' => '2021-03-13']--}}
            <div class="col-md-12 col-md-offset-2  mt-5">

                <form action="" method="POST">

                    <div class="form-group">
                        <label for="slug">Title</label>
                        <input type="text" class="form-control mt-2" name="slug" placeholder="Like JavaScript ..."/>
                    </div>

                    <div class="form-group">
                        <label class="mt-2" for="description">Description</label>
                        <textarea rows="5" class="form-control mt-2" name="description" placeholder="Type a description here ..."></textarea>
                    </div>


                    <div class="form-group">
                        <label class="mt-2" for="title">Post Creator</label>
                        <input type="text" class="form-control mt-2" name="title" placeholder="Type Your Name here ..." />
                    </div>

                    <div class="form-group mt-2">
                        <a href="{{route('posts.index')}}" class="btn btn-primary mt-2">
                            Update
                        </a>
                    </div>

                </form>
            </div>

        </div>
    </div>


@endsection
