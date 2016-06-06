@extends('layouts.master')


@section('content')

<div class="container">
	<p class="padding titles">Edit Your Blog Post!</p>
	<div class="form-group @if($errors->has('title')) has-error @endif">
		{{ Form::text('title', null, ['class' => 'form-control' , 'placeholder' => 'Post Title']) }}
	</div>

	<div class="form-group @if($errors->has('body')) has-error @endif">
		{{ Form::textarea('body', null, ['class' => 'materialize-textarea' , 'placeholder' => 'Post Content']) }}
	</div>

	<button class="btn  purple darken-3" type="submit" name="action">Submit
		<i class="material-icons right">send</i>
	</button>
</div>


@stop