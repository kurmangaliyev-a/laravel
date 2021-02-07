@extends('layouts.layout')
@section('content')
    <form action="{{route('post.update',['id'=>$post->post_id])}}" method="POST" enctype = "multipart/form-data">
    @csrf
        @method('PATCH')
        <h3>Редактировать пост</h3>
            <div class="form-group">
                <input type="text" class="form-control" name="title" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <textarea rows="3" class="form-control" name="descr" required>{{$post->descr}}</textarea>
            </div>
            <div class="form-group">
                <input type="file" name="img">
            </div>

        <input type="submit" value="Редактировать пост" class="btn btn-warning">
    </form>

@endsection