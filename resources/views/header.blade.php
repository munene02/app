<nav class="navbar navbar-transparent navbar-black navbar-fixed-top navbar-color-on-scroll" role="navigation">
	<div class="container">
        <div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
	        	<span class="sr-only">Toggle navigation</span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	    	</button>
	    	<a href="/">
	        	<div class="logo-container">
	                <div class="loo">
	                    <img src="../assets/img/logo.png" alt="Futbolpunter Logo">
	                </div>
				</div>
	      	</a>
	    </div>

	    <div class="collapse navbar-collapse" id="navigation-index">
	    	<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="/premium_tips" >
						 Premium Tips
					</a>
				</li>
				<li>
					<a href="/free_tips">
						 Free Tips
					</a>
				</li>
				<li>
					<a href="/premium_tips_results">
						 Premium Tips Results
					</a>
				</li>
				@if (Auth::check())
					@if(Auth::user()->role == 10)
					<li>
						<a href="/admin">
							 Management
						</a>
					</li>
					@else
					<li>
						<a href="/my_account">
							 My Account
						</a>
					</li>
					@endif
				<li>

					<a href="{{ url('/logout') }}"
                    	onclick="event.preventDefault();
                    	document.getElementById('logout-form').submit();">Logout</a>
                    	<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
				</li>
				@else 
				<li>
					<a href="/login" target="_blank">
						 Login
					</a>
				</li>
				<li>
					<a href="/register" target="_blank">
						 Register
					</a>
				</li>
				@endif
				<li>
					<a rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/futbolpunter" target="_blank" class="btn btn-white btn-simple btn-just-icon">
						<i class="fa fa-twitter"></i>
					</a>
				</li>
				<li>
					<a rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/futbolpunter" target="_blank" class="btn btn-white btn-simple btn-just-icon">
						<i class="fa fa-facebook-square"></i>
					</a>
				</li>
				<li>
					<a rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/futbolpunter" target="_blank" class="btn btn-white btn-simple btn-just-icon">
						<i class="fa fa-instagram"></i>
					</a>
				</li>

	    	</ul>
	    </div>
	</div>
</nav>