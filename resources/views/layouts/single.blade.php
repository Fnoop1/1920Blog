@extends('layouts.app')

@section('content')
	Hier komen alle posts<br/>
		@foreach($posts as $post)
		<h1 class="title">{{$post->title}}</h1>
		<div class="post-title">Title: <a href="#">{{ $post->title }}</a>
		@endforeach
@endsection