<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">


	<link rel="stylesheet" href="{{URL::asset('css/login.css')}}" />


</head>

<body>
<div class="container">
	<div class="login">
		<h1 class="login-heading">
			<strong>Login</strong></h1>
		<form action="/home/signin" method="post">
			{{csrf_field()}}
			<input type="text" name="email" placeholder="Email"  class="input-txt" />
			<input type="password" name="password" placeholder="Password" class="input-txt" />
			<div class="login-footer">
				<a href="/home/signup" class="lnk">
					{{--<span class="icon icon--min">ಠ╭╮ಠ</span>--}}
					Create Account
				</a>
				<button type="submit" class="btn btn--right">Get me in  </button>
			</div>
			<div class="form-group">
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
							<li>
								{{$error}}
							</li>
						@endforeach
					</ul>
				</div>
			</div>
		</form>
	</div>
</div>

<script  src="{{URL::asset('js/login.js')}}"></script>

</body>
</html>