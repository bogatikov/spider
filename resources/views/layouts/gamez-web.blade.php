<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>@yield('title')</title>
<link href="{{ url('') }}/template/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ url('') }}/template/js/jquery-2.2.2.min.js"></script>

<!-- Custom JS files-->
<script src="{{ url('') }}/template/js/navigation.js"></script>
<!-- Custom Theme files -->
<link href="{{ url('') }}/template/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="{{ url('') }}/template/js/jquery.mixitup.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<script type="text/javascript">
$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });





$(function () {

	var filterList = {

		init: function () {

			// MixItUp plugin
			// http://mixitup.io
			$('#portfoliolist').mixitup({
				targetSelector: '.portfolio',
				filterSelector: '.filter',
				effects: ['fade'],
				easing: 'snap',
				// call the hover effect
				onMixEnd: filterList.hoverEffect()
			});

		},

		hoverEffect: function () {

			// Simple parallax effect
			$('#portfoliolist .portfolio').hover(
				function () {
					$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
					$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
				},
				function () {
					$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
					$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
				}
			);

		}

	};

	// Run the show!
	filterList.init();


});
</script>
</head>
<body>
<!-- Header Starts Here -->
<div class="header">
	<div class="container">
		<div class="logo">
			<a href="index.html"><img src="{{ url('') }}/template/images/logo.png" alt=""></a>
		</div>
		<span class="menu"></span>
		<div class="navigation">
			<ul class="navig cl-effect-3" >
				<li><a href="{{ url('/') }}">Home</a></li>
				<li><a href="games.html">Games</a></li>
				<li><a href="{{ url('/blog') }}">Blog</a></li>
				<li><a href="features.html">Features</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
			<div class="search-bar">
					<input type="text" placeholder="search" required=""  value="search"/>
					<input type="submit" value="" />
			</div>
			<div class="clearfix"></div>
			<script>
				$( "span.menu" ).click(function() {
				  $( ".navigation" ).slideToggle( "slow", function() {
				    // Animation complete.
				  });
				});
			</script>

		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div id="content">
    @yield('content')
</div>
<!-- Footer Starts Here -->
<div class="footer">
	<div class="container">
		<ul class="social">
			<li><i class="fa"></i></li>
			<li><i class="fb"></i></li>
			<li><i class="fc"></i></li>
		</ul>
		<p>2014 Design by <a href="http://w3layouts.com">W3layouts</a></p>
	</div>
	
</div>
<!-- Footer Ends Here -->
</body>
</html>