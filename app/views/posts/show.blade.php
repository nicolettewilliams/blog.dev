@extends('layouts.master')

@section('content')
<div class="padding">
    <p class="titles">{{{ $post['title'] }}}</p>
    @if (Session::has('successMessage'))
        <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
    @endif
	<p><span class="glyphicon glyphicon-time"></span>  {{ $post->created_at->setTimezone('America/Chicago')->diffForHumans() }} by {{ $post->user->firstname }} {{ $post->user->lastname }}</p>
	@unless(empty($post->img_url))
		<img class="img-resize float-left" src="{{{$post->img_url}}}" alt="">
	@endunless
		
	    <p class="show-body">{{{ $post['body'] }}}</p>
	<div>
	<button class="btn purple darken-3 float-left"><a class="navbar-links" href="{{ route('posts.edit', $post->id) }}">EDIT</a></button>
	    {{ Form::open([
	        'method' => 'DELETE',
	        'route' => ['posts.destroy', $post->id]
	    ]) }}

	        {{ Form::submit('DELETE', ['class' => 'btn purple darken-3']) }}
	        
	    {{ Form::close() }}
	</div>

	<div class="back-to-home">
		<a href="{{ route('posts.index') }}">Back to all posts</a>
	</div>
	
</div>
@stop
