@extends('layouts.app')

@section('content')
<form action="{{route('admin.posts.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="title">Add a title</label>
      <input type="text" class="form-control" id="title" placeholder="title..." name="title">
    </div>
    <div class="form-group">
      <label for="content">Write the content of your post</label>
      <textarea class="form-control" id="content" rows="5" placeholder="A cosa stai pensando?"></textarea>
    </div>
    <div class="form-group">
        <label for="image">Add your img URL</label>
        <input type="text" class="form-control" id="image" placeholder="image..." name="image">
      </div>
      <button type="submit">Crea</button>
  </form>
@endsection