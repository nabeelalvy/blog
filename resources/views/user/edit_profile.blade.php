<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
	<title>Fotoğraf</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><!--<script src="assets/js/ie/html5shiv.js"></script>--><![endif]-->
	<link rel="stylesheet" href="{{URL::asset('css/main.css')}}" />
	<link rel="stylesheet" href="{{URL::asset('css/profile.css')}}" />
	<!--[if lte IE 8]><!--<link rel="stylesheet" href="assets/css/ie8.css" />--><![endif]-->
	<!--[if lte IE 9]><!--<link rel="stylesheet" href="assets/css/ie9.css" />--><![endif]-->
</head>
<body class="contact">
<div id="page-wrapper">

	<!-- Header -->
	<header id="header">
		<h1 id="logo"><a href="/user/index">Fotoğraf <span>by Alvy</span></a></h1>
		<nav id="nav">
			<ul>
				<li class="current"><a href="/user/index">Home</a></li>
			</ul>
		</nav>
	</header>

	<!-- Main -->
	<article id="main">

		<div class="container">
			<div class="row">
				<form method="post" action="/user/updateprofile" class="form-horizontal">
					<fieldset>
						<!-- Address form -->

						<h2>Edit Profile</h2>

						<!-- first-name input-->
						<div class="control-group">
							<label class="control-label">First Name</label>
							<div class="controls">
								<input id="first-name" value="{{$user->fname}}" name="fname" type="text" placeholder="first name"
									   class="input-xlarge">
								<p class="help-block"></p>
							</div>
						</div>

						<!-- last-name input-->
						<div class="control-group">
							<label class="control-label">Last Name</label>
							<div class="controls">
								<input id="last-name" value="{{$user->lname}}" name="lname" type="text" placeholder="last name"
									   class="input-xlarge">
								<p class="help-block"></p>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label">UserName</label>
							<div class="controls">
								<input id="last-name" value="{{$user->username}}" name="username" type="text" placeholder="last name"
									   class="input-xlarge">
								<p class="help-block"></p>
							</div>
						</div>

						<!-- Select Basic -->
						<div class="control-group">
							<label class="control-label" for="selectbasic">Profile</label>
							<div class="controls">
								<select id="profile" name="profile" class="input-xlarge">
									<option>Select</option>
									<?php if($user->role == 1){ ?>
										<option value="1" selected>Public</option>
										<option value="0" >Private</option>
									<?php } else { ?>
										<option value="0" selected>Private</option>
										<option value="1" >Public</option>
									<?php }?>
								</select>
							</div>
						</div>

						<!-- email input-->
						<div class="control-group">
							<label class="control-label">Email</label>
							<div class="controls">
								<input id="email" name="email" value="{{$user->email}}" type="text" placeholder="Email" class="input-xlarge">
								<p class="help-block"></p>
							</div>
						</div>

					</fieldset>
					<button type="submit" class="btn btn--right">Update Me</button>
				</form>
			</div>
		</div>

	</article>

	<!-- Footer -->
	<footer id="footer">

		<ul class="icons">
			<li><a href="#" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
			<li><a href="#" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
			<li><a href="#" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
			<li><a href="#" class="icon circle fa-github"><span class="label">Github</span></a></li>
			<li><a href="#" class="icon circle fa-dribbble"><span class="label">Dribbble</span></a></li>
		</ul>

		<ul class="copyright">
			<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
		</ul>

	</footer>

</div>

<!-- Scripts -->
<script src="{{URL::asset('js/jquery.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.dropotron.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.scrolly.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.scrollgress.min.js')}}"></script>
<script src="{{URL::asset('js/skel.min.js')}}"></script>
<script src="{{URL::asset('js/util.js')}}"></script>
{{--<!--[if lte IE 8]><script src="{{URL::asset('js/ie/respond.min.js')}}"></script><![endif]-->--}}
<script src="{{URL::asset('js/main.js')}}"></script>


</body>
</html>