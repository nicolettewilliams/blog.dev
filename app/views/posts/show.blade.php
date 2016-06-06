@extends('layouts.master')

@section('content')
<div class="padding">
    <h4>{{{ $post['title'] }}}</h4>
    <img class="img-placeholder" src="http://placehold.it/350x150">
    <p>{{{ $post['body'] }}}</p>
</div>
@stop