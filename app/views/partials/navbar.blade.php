       
<nav>
   	<div class="nav-wrapper grey darken-3">
      	<span class="padding"><i class="fa fa-hand-lizard-o brand-logo lizard" aria-hidden="true"></i>
      	<a href="{{{ action('PostsController@index') }}}" class="brand-logo blog-title navbar-links"><span>It's A Blog, Dude!</span></a>
      	<ul class="right hide-on-med-and-down">


      	@if(Auth::check())
            <a class='dropdown-button btn grey darken-3' href='#' data-activates='dropdown1'>Hello, {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->firstname }}} </a>
            <ul id='dropdown1' class='dropdown-content'>
                <li><a href="{{{ action('PostsController@create') }}}">Write a Post!</a></li>
                <li><a href="#">All of Your Posts</a></li>
                <li class="divider"></li>
                <li><a href="{{ URL::to('logout') }}">Logout</a></li>
            </ul>
        @else
            <li>{{ HTML::link('/login', 'Log In', ['class' => 'navbar-links']) }}</li>   
            <li>{{ HTML::link('/signup', 'Sign Up', ['class' => 'navbar-links signup']) }}</li>   
        @endif


    </ul>

   </div>
</nav>



<script>
    $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left' // Displays dropdown with edge aligned to the left of button
    }
  );
</script>


