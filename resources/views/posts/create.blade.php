@extends('layouts.layout',['title'=>'Создать новый пост'])
@section('content')
    <form action="{{route('post.store')}}" method="POST" enctype = "multipart/form-data">
        @csrf
        <h3>Создать пост</h3>
        <div class="form-group">
            <input type="text" class="form-control" name="title" value="{{old('title') ?? ''}}">
        </div>
        <div class="form-group">
            <textarea rows="3" class="form-control" name="descr" required>{{old('descr') ?? ''}}</textarea>
        </div>
        <div class="form-group">
            <input type="file" name="img">
        </div>

        <input type="submit" value="Создать пост" class="btn btn-outline-success">
    </form>

@endsection
