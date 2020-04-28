@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="titelos">
                    <h1 class="title">Lees hier al onze berichten</h1>
                </div>
                    <div class="textos3">
                <div class="posts">
                @foreach($posts as $post)
                <hr/>
                <div class="row post">
                    <div class="col-md-9">
                        <h2 class="post-title"><a href="/post/{{ $post->slug }}">{{ $post->title }}</a></h2>
                    </div>
                    <div class="col-md-3">
                        <i class="post-published-at">Geplaatst op: {{ $post->published_at ?? "Nog niet gepubliceerd" }}</i>
                    </div>
                </div>
                @endforeach
                <br>
                <div class="text-center">
                    {!! $posts->links(); !!}
                </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection