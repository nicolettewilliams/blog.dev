@extends('layouts.master')


@section('content')

    <div class="container">
    	<h2>Write a Blog Post!</h2>
		<form class action="{{{ action('PostsController@store') }}}" method="POST" accept-charset="utf-8">
				<div>
					<input type="text" name="title" value="{{{ Input::old('title') }}}" placeholder="Post Title">
				</div>
				<div>
					<textarea name="body" class="materialize-textarea"  placeholder="Post Content">{{{ Input::old('body') }}}</textarea>
				</div>
			<button class="btn waves-effect waves-light" type="submit" name="action">Submit
    			<i class="material-icons right">send</i>
  			</button>		
  		</form>
    </div>
@stop

