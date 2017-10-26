<header>
	<div class="blog-masthead">
		<div class="container">
			<nav class="nav">
				<a class="nav-link active" href="#">Home</a>
				<a class="nav-link" href="#">New features</a>
				<a class="nav-link" href="#">Press</a>
				<a class="nav-link" href="#">New hires</a>
				<a class="nav-link" href="#">About</a>
                        
				<!-- Authentication Links -->
				@guest
						<a class="nav-link ml-auto" href="{{ route('login') }}">Login</a>
						<a class="nav-link" href="{{ route('register') }}">Register</a>
				@else
						<li class="dropdown ml-auto">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
										{{ Auth::user()->name }} <span class="caret"></span>
								</a>

								<ul class="dropdown-menu" role="menu">
										<li>
												<a href="{{ route('logout') }}"
														onclick="event.preventDefault();
																			document.getElementById('logout-form').submit();">
														Logout
												</a>

												<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
														{{ csrf_field() }}
												</form>
										</li>
								</ul>
						</li>
				@endguest
			</nav>
		</div>
	</div>

	<div class="blog-header">
		<div class="container">
			<h1 class="blog-title">The Bootstrap Blog</h1>
			<p class="lead blog-description">An example blog template built with Bootstrap.</p>
		</div>
	</div>
</header>