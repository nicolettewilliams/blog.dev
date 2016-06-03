@extends('layouts.master')

@section('content')
<main>
	<h1 class="padding">All Of My Posts</h1>
    @foreach($posts as $post)
        <article class="padding">

            <h3><a href="{{{ action('PostsController@show', $post->id) }}}" class="post-title">{{{$post->title}}}</a></h3>
            <h6>Written by: <a href="" class="post-title">Niki</a> on {{{$post->created_at}}}.</h6>
            <p>{{{$post->body}}}</p>

        </article>

        <hr/>
    @endforeach
</main>
@stop