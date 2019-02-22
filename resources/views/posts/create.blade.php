@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>{{$message}}</h3><br>
        <form method="POST" action="{{url('post')}}">
            @csrf
            <div class="form-group">
                <label for="title">{{ __('Title')}}</label>
                <input type="text"
                class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Title">
                <small id="title" class="form-text text-muted">{{__('Blog Title')}}</small>
            </div>
            <div class="form-group">
                <label for="body">{{ __('Body')}}</label>
                <textarea id="body" name="body" class="form-control" rows="3" placeholder="Text"></textarea>
            </div>
            <button type="submit" class="btn btn-success">{{__('Publish')}}</button>
        </form>
    </div>
@endsection