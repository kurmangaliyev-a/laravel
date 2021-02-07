@extends('layouts.layout',['title'=>'Пост №'.$post->post_id.' '.$post->short_title])
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h2>{{$post->title}}</h2></div>
                <div class="card-body">
                    <div class="card-img card-img__max" style="background-image: url({{ $post->img ?? asset('img/default.jpg')}});"></div>
                    <div class="card">{{$post->descr}}</div>
                    <div class="card-author">Автор: {{$post->name}}</div>
                    <div class="card-date">Пост создан: {{$post->created_at->diffForHumans()}}</div>

                    <div class="card-btn">
                        <a href="{{ route('post.edit', ['id'=>$post->post_id]) }}" class="btn btn-warning">Редактировать</a>
                        <form action = "{{route('post.destroy',['id'=>$post->post_id])}}" method="post"
                        onsubmit="if(confirm('Точно удалить пост?')) {return true} else {return false}">
                                @csrf
                                @method('DELETE');
                                <input type="submit" class="btn btn-danger" value="удалить">
                        </form>
                        <a href="{{ route('post.index') }}" class="btn btn-light">На главную </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
