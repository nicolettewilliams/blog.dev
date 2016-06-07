@extends('layouts.master')


@section('content')

    <div class="container">
    	<p class="titles">Write a Blog Post!</p>
    	@include('partials.alerts.errors')

		{{ Form::open([
		    'route' => 'posts.store', 
		    'files' => true
		]) }}

		<div>
		    {{ Form::text('title', null, ['class' => 'form-control' , 'placeholder' => 'Post Title']) }}
		</div>

		<div>
		    {{ Form::textarea('body', null, ['class' => 'materialize-textarea' , 'placeholder' => 'Post Content']) }}
		</div>

		<div>
		    {{ Form::label('img_url', '*Image') }}
		    {{ Form::file('img_url') }}
		</div>

		{{ Form::submit('Submit Post!', ['class' => 'btn  purple darken-3 submit']) }}

		{{ Form::close() }}
    </div>
@stop
		


