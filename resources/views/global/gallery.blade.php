<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Fotoğraf</title>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><!--<script src="assets/js/ie/html5shiv.js"></script>--><![endif]-->
    <link rel="stylesheet" href="{{URL::asset('css/main.css')}}" />
    <!--[if lte IE 8]><!--<link rel="stylesheet" href="assets/css/ie8.css" />--><![endif]-->
    <!--[if lte IE 9]><!--<link rel="stylesheet" href="assets/css/ie9.css" />--><![endif]-->

    <style>
        /*gallery cards*/

        .card {
            box-shadow: none;
            transition: 0.3s;
            width: 40%;
            border-radius: 50px 5px;
            margin-right:30px;
            margin-left:70px;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        img {
            border-radius: 50px 5px 50px 0;
        }

        .cardcontainer {
            padding: 50px 16px;
        }
    </style>
</head>
<body class="index">
<div id="page-wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <h1 id="logo"><a href="/">Fotoğraf <span>by Alvy's</span></a></h1>
        <nav id="nav">
            <ul>
                <li><a href="/">Home</a></li>
                <li class="submenu">
                    <a href="#">Menu</a>
                    <ul>
                        <li><a href="addtrip">Going On Trip</a></li>
                        {{--<li><a href="right-sidebar.html">Upload Video</a></li>--}}
                        <li class="submenu">
                            <a href="gallery">Gallery</a>
                            <ul>
                                <li><a href="photos">Photos</a></li>
                                <li><a href="videos">Videos</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#">Upload</a>
                            <ul>
                                <li><a href="#">Photo</a></li>
                                <li><a href="#">Video</a></li>
                            </ul>
                        </li>
                        <li><a href="contact">Contact</a></li>
                    </ul>
                </li>
                {{--<li><a href="profile" class="button special">Log In</a></li>--}}
            </ul>
        </nav>
    </header>

    <!-- Banner -->
    <section id="banner">

        <!--
            ".inner" is set up as an inline-block so it automatically expands
            in both directions to fit whatever's inside it. This means it won't
            automatically wrap lines, so be sure to use line breaks where
            appropriate (<br />).
        -->

        <div class="row">
            <div class="card">
                <img src="{{URL::asset('images/pic04.jpg')}}" alt="Avatar">
                <div class="cardcontainer">
                    <h3><b><a href="photos">Photos</a></b></h3>
                    <p>Interior Designer</p>
                </div>
            </div>
            <div class="card">
                <img src="{{URL::asset('images/pic04.jpg')}}" alt="Avatar">
                <div class="cardcontainer">
                    <h3><b><a href="videos">Videos</a></b></h3>
                    <p>Interior Designer</p>
                </div>

            </div>
        </div>



    </section>

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