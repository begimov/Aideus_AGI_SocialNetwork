<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('home') }}">AIΔEUS</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      @if (Auth::check())
      <ul class="nav navbar-nav">
        <li><a href="#">News</a></li>
        <li><a href="#">Colleagues</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search" action="{{ route('search.results') }}">
        <div class="form-group">
          <input type="text" name="q" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      @endif
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::check())
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
               {{ Auth::user()->getName() }}<span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#">Profile</a></li>
              <li><a href="#">Settings</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="{{ route('auth.signout') }}">Sign out</a></li>
            </ul>
          </li>
          @else
            <li><a href="{{ route('auth.signup') }}">Sign up</a></li>
            <li><a href="{{ route('auth.signin') }}">Sign in</a></li>
          @endif
      </ul>
    </div>
  </div>
</nav>
