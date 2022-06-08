@extends('layouts.app')



@section('content')
    <div class="container text-center">
      @include('includes.message')
        <div class="card mx-auto" style="width: 18rem;">
            <img src="{{$post->image}}" class="card-img-top" alt="{{$post->title}}">
            <div class="card-body">
              <h5 class="card-title">{{$post->title}}</h5>
              <h6 class="card-title">{{$post->id}}</h6>
              <p class="card-text"> {{$post->content}}</p>
              @include('includes.deleteForm')
            </div>
          </div>
    </div>
@endsection