@extends('layouts.master')

@section('content')

	<p class="padding titles">All Of My Posts</p>
    @if (Session::has('successMessage'))
        <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
    @endif
    @foreach($posts as $post)
        <article class="padding">
            <h3><a href="{{{ action('PostsController@show', $post->id) }}}" class="post-title">{{{$post->title}}}</a></h3>
            <p><span class="glyphicon glyphicon-time"></span>  {{ $post->created_at->setTimezone('America/Chicago')->diffForHumans() }} by {{ $post->user->firstname }} {{ $post->user->lastname }}</p>
            
            <p class="show-body">{{ str_limit($post->body, $limit = 100, $end = '...') }}</p>

            @if(!empty($post->img_url))
                <img class="img-resize" src="{{{$post->img_url}}}" alt="blog post image">
                <hr>
            @endif

        </article>
    @endforeach

	<div class="padding">{{ $posts->links() }}</div>

@stop