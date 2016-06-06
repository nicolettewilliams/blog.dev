@extends('layouts.master')

@section('content')
	<p class="padding titles">All Of My Posts</p>
    @foreach($posts as $post)
        <article class="padding">
            <h3><a href="{{{ action('PostsController@show', $post->id) }}}" class="post-title">{{{$post->title}}}</a></h3>
            <img src="http://placehold.it/350x150">
            <h6>Written by: <a href="" class="post-title">Niki</a> on {{{$post->created_at}}}.</h6>
            <p>{{{$post->body}}}</p>

        </article>

        <hr/>
    @endforeach

	<div class="padding">{{ $posts->links() }}</div>

@stop