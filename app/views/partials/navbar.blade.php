<nav>
   <div class="nav-wrapper grey darken-3">
      <span class="padding"><i class="fa fa-hand-lizard-o brand-logo" aria-hidden="true"></i>
      <a href="{{{ action('PostsController@index') }}}" class="brand-logo blog-title navbar-links"><span class="padding">It's A Blog, Dude!</span></a>
      <ul class="right hide-on-med-and-down">

      <li><a class="navbar-links" href="/login">Login</a></li>
      <li><a class="navbar-links" href="{{ URL::to('logout') }}">Logout</a></li>
      <li><a class="navbar-links" href="{{{ action('PostsController@create') }}}">Write a Post!</a></li>

	{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->firstname }}}

      </ul>

   </div>
</nav>

