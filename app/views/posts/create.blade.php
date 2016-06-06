@extends('layouts.master')


@section('content')

	{{-- show errors in alert box --}}
	@if (Session::has('errorMessage'))
	    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
	@endif
	@if($errors->has())

		<div class="alert alert-danger" role="alert">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

    <div class="container">
    	<p class="padding titles">Write a Blog Post!</p>
    	{{ Form::open(array('action' => 'PostsController@store')) }}
				<div>
					{{ Form::text('title', null, ['class' => 'form-control' , 'placeholder' => 'Post Title']) }}
				</div>
				<div>
					{{ Form::textarea('body', null, ['class' => 'materialize-textarea' , 'placeholder' => 'Post Content']) }}
				</div>
			<button class="btn  purple darken-3" type="submit" name="action">Submit
    			<i class="material-icons right">send</i>
  			</button>			
  		{{ Form::close() }}
    </div>
@stop

