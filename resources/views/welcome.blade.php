<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <header id="header">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="courses.html">Courses</a></li>
						<li class="menu-has-children"><a href="">Pages</a>
							<ul>
								<li><a href="elements.html">Elements</a></li>
							</ul>
						</li>
						<li class="menu-has-children"><a href="">Blog</a>
							<ul>
								<li><a href="blog-home.html">Blog Home</a></li>
								<li><a href="blog-single.html">Blog Details</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header>
	<!-- End Header Area -->
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>

<div class="input-wrap">
						<form action="" class="form-box d-flex justify-content-between">
							<input type="text" placeholder="Search Courses" class="form-control" name="username">
							<button type="submit" class="btn search-btn">Search</button>
						</form>
					</div>
					<h4 class="text-white">Top courses</h4>

					<div class="courses pt-20">
						<a href="#" data-wow-duration="1s" data-wow-delay=".3s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Ruby
							on Rails</a>
						<a href="#" data-wow-duration="1s" data-wow-delay=".6s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Python</a>
						<a href="#" data-wow-duration="1s" data-wow-delay=".9s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Marketing</a>
						<a href="#" data-wow-duration="1s" data-wow-delay="1.2s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">UI/UX
							Design
						</a>
						<a href="#" data-wow-duration="1s" data-wow-delay="1.5s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Android</a>
						<a href="#" data-wow-duration="1s" data-wow-delay="1.8s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Data
							Science
						</a>
						<a href="#" data-wow-duration="1s" data-wow-delay="2.1s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Cryptocurrency</a>
					</div>