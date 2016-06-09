@extends('layouts.master')

@section('content')

<div class="container">
	<p class="titles">Edit Post: "{{ $post->title }}" !</p>
	<p>Edit this post below, or <a href="{{ route('posts.index') }}"> go back to all posts.</a></p>

	{{ Form::model($post, ['method' => 'PATCH', 'route' => ['posts.update', $post->id] , 'files' => true]) }}

	<div class="form-group">
	    {{ Form::text('title', null, ['class' => 'form-control' , 'placeholder' => 'Post Title']) }}
	</div>

	<div class="form-group">
	    {{ Form::textarea('body', null, ['class' => 'materialize-textarea' , 'placeholder' => 'Post Content']) }}
	</div>

	<div class="form-group">
		{{ Form::file('img', array('class' => 'form-controll')); }}
	</div>

	<div>
		<p class="current-photo">Current Photo!</p>
		<img class="img-resize-edit" src="{{{$post->img_url}}}" alt="">
	</div>


	{{ Form::submit('Update Post', ['class' => 'btn  purple darken-3 submit']) }}

	{{ Form::close() }}

</div>
@stop
