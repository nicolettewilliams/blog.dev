@extends('layouts.master')


@section('content')

    <div class="container">
    	@if(Auth::check())
    	<p class="titles">Write a Blog Post!</p>
    	@include('partials.alerts.errors')

		{{ Form::open(['route' => 'posts.store', 'enctype' => 'multipart/form-data']) }}

		<div>
		    {{ Form::text('title', null, ['class' => 'form-control' , 'placeholder' => 'Post Title']) }}
		</div>

		<div>
		    {{ Form::textarea('body', null, ['class' => 'materialize-textarea' , 'placeholder' => 'Post Content']) }}
		</div>

		<div>
			{{ Form::file('img', array('class' => 'form-controll')); }}
		</div>

		{{ Form::submit('Submit Post!', ['class' => 'btn  purple darken-3 submit']) }}

		{{ Form::close() }}
		@else
		<p class="titles">You must be logged in to create a post</p>
		@endif

    </div>
@stop
		


