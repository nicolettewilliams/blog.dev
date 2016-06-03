@extends('layouts.master')


@section('title')
    <title>Show a Post</title>
@stop

@section('content')
<div class="padding">
    <h1>Showing Post: #{{{$post['id']}}}</h1>
    <h4>{{{ $post['title'] }}}</h4>
    <p>{{{ $post['body'] }}}</p>
</div>
@stop