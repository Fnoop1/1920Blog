@extends('layouts.app')



@section('content')

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-12 post-single">

                <div class="titelos"><h1 class="title">{{$post->title}}</h1></div>

                <hr/>

                <div class="single-post">

                    <div class="textos"><h3><p class="post-content">{!! $post->content !!}</p></div>

                    <hr/>

                    <h3><i>Geplaatst op: {{ $post->published_at ?? "Nog niet gepubliceerd" }}</h3></i>

                    @auth()

                    @if(!$post->published_at)

                    <button class="btn btn-success" onclick="event.preventDefault(); document.getElementById('publish-post-form').submit();">

                        Publish post

                    </button>

                    <form id="publish-post-form" action="/posts/{{$post->id}}/publish" method="POST" style="display:none;">

                        @csrf;

                    </form>

                    @endif

                    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Bewerk artikel</a>

                    @endauth

                </div>

            </div>

        </div>

    </div>

@endsection