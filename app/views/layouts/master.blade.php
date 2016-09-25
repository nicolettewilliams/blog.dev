<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog</title>
    <link href='https://fonts.googleapis.com/css?family=Lobster|Amatic+SC|Cabin+Sketch:700|Luckiest+Guy|Muli' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    {{ HTML::style('/css/custom_blog.css') }}
    <link rel="icon" type="image/png" href="/img/handlizard.png">



</head>
<body>
    @include('partials.navbar')
    <main>
    	@yield('content')
	</main>

    @include('partials.footer')
</body>
</html>