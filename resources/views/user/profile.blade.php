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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
<!--[if lte IE 8]><!--<link rel="stylesheet" href="assets/css/ie8.css" />--><![endif]-->
    <!--[if lte IE 9]><!--<link rel="stylesheet" href="assets/css/ie9.css" />--><![endif]-->
</head>
<body class="contact">
<div id="page-wrapper">

    <!-- Header -->
    <header id="header">
        <h1 id="logo"><a href="/">Fotoğraf <span>by Alvy</span></a></h1>
        <nav id="nav">
            <ul>
                <li ><a href="/user/index">Home</a></li>
                <li class="submenu">
                    {{--<a href="#">Menu</a>--}}
                    <ul>
                        <li><a href="/user/all_trip">Going On Trip</a></li>
                        {{--<li><a href="right-sidebar.html">Upload Video</a></li>--}}
                        <li class="submenu">
                            <a href="/user/gallery">Gallery</a>
                            <ul>
                                <li><a href="/user/photos">Photos</a></li>
                                <li><a href="/user/videos">Videos</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#">Upload</a>
                            <ul>
                                <li><a href="upload/photo">Photo</a></li>
                                <li><a href="upload/video">Video</a></li>
                            </ul>
                        </li>
                        <li><a href="contact">Contact</a></li>
                    </ul>
                </li>
                <li><a href="/user/editprofile" class="button special">Edit</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main -->
    <article id="main">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <fieldset>
                        <!-- Address form -->
                        <h2>Personal Profile</h2>

                        <!-- full-name input-->
                        <p>Name <br /><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user->fname }}&nbsp;&nbsp;{{ $user->lname }}</strong></p>

                        <!-- Select Basic -->
                        <p>UserName <br /><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user->username}}</strong></p>

                        <p>Password <br /><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user->password}}</strong></p>

                        <!-- mobile input-->
                        <p>Email <br /><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user->email}}</strong></p>


                        <p>Profile <br /><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{($user->profile == 1 ? 'Public' : 'Private')}}</strong></p>


                    </fieldset>
                </div>
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