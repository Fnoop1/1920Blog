@extends('layouts.app')

@section('stylesheets')

@section('content')


<div class="container">
    

    <div class="row justify-content-center">

        <div class="col-md-12 post-create">
            <div class="titelos">
                <h1>Bewerk het artikel</h1>
            </div>

            <hr/>

            <form action="/posts/{{$post->id}}" method="post"> 

                @csrf

                @method('put')

                <div class="form-group">
                <div class="textos">
                    <h3><label for="txtTitle">Titel</label></h3>
                </div>

                  <input type="text" class="form-control" name="txtTitle" id="txtTitle" value="{{$post->title}}">

                </div>

                <div class="form-group">
                <div class="textos">
                    <h3><label for="txtSlug">Slug</label></h3>
                </div>
                    <input type="text" class="form-control" name="txtSlug" id="txtSlug" value="{{$post->slug}}">

                </div>

                <div class="form-group">
                <div class="textos">
                  <h3><label for="txtContent">Wat wil je schrijven</label></h3>
                </div>

                  <textarea class="form-control" name="txtContent" id="txtContent" rows="10">{{$post->content}}</textarea>
                  
                </div>
            <div class="container">
                <button type="submit" class="btn btn-primary">Opslaan</button>

            </form>

            <button class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-post-form').submit();">

                Verwijder artikel

            </button>

            <form id="delete-post-form" action="/posts/{{$post->id}}" method="post" style="display: none;">

                @csrf

                @method('delete')

            </form>

        </div>

    </div>

</div>

@endsection



<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

    <a class="dropdown-item" href="{{ route('logout') }}"

       onclick="event.preventDefault();

                     document.getElementById('logout-form').submit();">

        {{ __('Logout') }}

    </a>



    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

        @csrf

    </form>

</div>