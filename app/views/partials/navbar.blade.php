<nav>
   	<div class="nav-wrapper grey darken-3">
      	<span class="padding"><i class="fa fa-hand-lizard-o brand-logo lizard" aria-hidden="true"></i>
      	<a href="{{{ action('PostsController@index') }}}" class="brand-logo blog-title navbar-links"><span>It's A Blog, Dude!</span></a>
      	<ul class="right hide-on-med-and-down">


      	@if(Auth::check())
		<!-- Single button -->
		<div class="btn-group">
		  	<button type="button" class="btn dropdown-toggle grey darken-3 navbar-links dropdown-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    	Hello, {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->firstname }}} <span class="caret"></span>
		  	</button>
		  	<ul class="dropdown-menu">
		    	<li><a href="{{{ action('PostsController@create') }}}">Write a Post!</a></li>
		    	<li><a href="#">All of Your Posts</a></li>
		    	<li><a href="{{ URL::to('logout') }}">Logout</a></li>
		  	</ul>
		</div>
      	@else
      	<li>{{ HTML::link('/login', 'Log In', ['class' => 'navbar-links']) }}</li>   
      	<li>{{ HTML::link('/signup', 'Sign Up', ['class' => 'navbar-links signup']) }}</li>   
      	@endif


    </ul>

   </div>
</nav>



<script>
    $(document).ready(function() {
    	$(".dropdown-toggle").dropdown();
	});
</script>