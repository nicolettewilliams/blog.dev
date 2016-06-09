@extends('layouts.master')

@section('content')

<div class="container center">

    @if (Session::has('successMessage'))
        <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
    @endif
    @foreach($posts as $post)
    <p class="padding titles">{{ $post->user->firstname }}'s Post</p>
        <article>
            <h3><a href="{{{ action('PostsController@show', $post->id) }}}" class="post-title">{{{$post->title}}}</a></h3>
            <p class="post-by"><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $post->created_at->setTimezone('America/Chicago')->diffForHumans() }} by {{ $post->user->firstname }} {{ $post->user->lastname }}</p>

            <p class="show-body">{{ str_limit($post->body, $limit = 75, $end = '...') }}</p>

            @if(!empty($post->img_url))
                <a href="{{{ action('PostsController@show', $post->id) }}}"><img class="img-resize" src="{{{$post->img_url}}}" alt="blog post image"></a>
                <hr>
            @endif

        </article>
    @endforeach

    <div class="pagination">{{ $posts->links() }}</div>

</div>

@stop