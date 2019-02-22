@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-md-8">
               @foreach ($posts as $post)
                    <div class="card mb-4">
                        <div class="card-body">
                        <a href="post/{{$post->id}}"> <h4 class="card-title">{{$post->title}}</h4></a>
                            <p class="card-text">{{$post->body}}</p>
                        </div>
                    </div>
               @endforeach
            </div>
        </div>
    </div>
@endsection