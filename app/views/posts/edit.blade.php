@extends('layouts.master')

@section('content')

<div class="container">
	<p class="titles">Edit Post: "{{ $post->title }}" !</p>
	<p>Edit this post below, or <a href="{{ route('posts.index') }}"> go back to all posts.</a></p>

	{{ Form::model($post, [
	    'method' => 'PATCH',
	    'route' => ['posts.update', $post->id]
	]) }}

	<div class="form-group">
	    {{ Form::text('title', null, ['class' => 'form-control' , 'placeholder' => 'Post Title']) }}
	</div>

	<div class="form-group">
	    {{ Form::textarea('body', null, ['class' => 'materialize-textarea' , 'placeholder' => 'Post Content']) }}
	</div>

	{{ Form::submit('Update Post', ['class' => 'btn  purple darken-3']) }}

	{{ Form::close() }}

</div>
@stop
