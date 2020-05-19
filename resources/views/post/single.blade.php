@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-12 post-single">

                <div class="titelos"><h1 class="title">{{$post->title}}</h1></div>

                <hr/>

                <div class="single-post">

                    <div class="textos"><h3><p class="post-content">{!! $post->content !!}</p></h3></div>

                    <hr/>

                    <h5><i><div class= "textos3">Geplaatst op: {{ $post->published_at ?? "Nog niet gepubliceerd" }}</h5></i>

                    @auth()

                    @if(!$post->published_at && Auth::user()->can('publish',$post))

                    <button class="btn btn-success" onclick="event.preventDefault(); document.getElementById('publish-post-form').submit();">

                        Publish post

                    </button>
                    
                    <form id="publish-post-form" action="/posts/{{$post->id}}/publish" method="POST" style="display:none;">

                        @csrf;

                    </form>

                    @endif
                    @can('update', $post)
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Bewerk artikel</a>
                    @endcan
                    @endauth
                    <div class="comments">
                        @foreach($post->comments as $comment)
                            <div class="comment">
                                <br/>
                                <div class="comment-details">
                                    <i class="comment-info"><h5><div class="textos3">Opmerking: {{$comment->author->name}} at {{$comment->created_at}}</h5></i></div>
                                    <p class="comment-content"><div class="commentos">{{$comment->content}}</p></div>
                                    @can('delete',$comment)
 
                                        <button class="btn btn-danger comment-delete" onclick="event.preventDefault(); document.getElementById('delete-comment-form').submit();">
                                            Verwijder je opmerking
                                        </button>
                                        <form id="delete-comment-form" action="/comment/{{$comment->id}}" method="post" style="display: none;">
                                            @csrf
                                            @method('delete')

                                        </form>
                                        @endcan
                                        
                                </div>
                                
                            </div>
                        @endforeach

                    </div>

                </div>

            </div>
        </div>
    </div>

            <hr>

            <div class="container">

                <div class="single-post-comment">

                    <p class="comment-title">Zijn er nog opmerkingen?</p>

                    @auth()

                    <form action="/posts/{{$post->id}}/comment" method="post">

                        @csrf

                        <div class="form-group">

                        <label for="txtComment">Opmerking</label>

                        <textarea class="form-control" name="txtComment" id="txtComment" rows="5"></textarea>

                        </div>

                        <button type="submit" class="btn btn-primary full-width">Opmerking opslaan</button>

                    </form>

                    @else

                        <div class="alert alert-danger" role="alert">

                            <strong>Log in om een opmerking te maken</strong>

                            <a id="btn-comment-login" class="btn btn-primary pull-right" href="/login" role="button">Inloggen</a>

                        </div>

                    @endauth

@endsection