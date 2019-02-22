@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           @foreach ($posts as $post)
            <div class="card text-left">
                <img class="card-img-top" src="holder.js/100px180/" alt="">
                <div class="card-body">
                    <a href="post/{{$post->id}}"><h4 class="card-title">{{$post->title}}</h4></a>
                    <small>Author: {{$post->users->username}}</small>
                    <p class="card-text">{{$post->body}}</p>
                </div>
            </div>   
            <br> 
           @endforeach
        </div>
    </div>
</div>
@endsection
