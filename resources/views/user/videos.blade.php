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
    <!--[if lte IE 8]><!--<link rel="stylesheet" href="assets/css/ie8.css" />--><![endif]-->
    <!--[if lte IE 9]><!--<link rel="stylesheet" href="assets/css/ie9.css" />--><![endif]-->

    <style>
        input[type=text] {
            background-color: brown;
            border: 0px;
            border-radius: 5px;
            color: #fff;
            width: 400px;
            height: 40px;
            padding: 10px;
        }
        input[type=submit] {
            background-color: #000000;
            border: 0px;
            border-radius: 5px;
            color: #fff;
            width: 400px;
            height: 50px;
            padding: 10px;
        }
        button {
            background-color: #000000;
            border: 0px;
            border-radius: 5px;
            color: #fff;
            width: 400px;
            height: 50px;
            padding: 10px;
        }
        div.gallery {
            border: 1px solid #ccc;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }

        * {
            box-sizing: border-box;
        }

        .responsive {
            padding: 0 6px;
            float: left;
            width: auto;
        }

        @media only screen and (max-width: 700px){
            .responsive {
                width: 49.99999%;
                margin: 6px 0;
            }
        }

        @media only screen and (max-width: 500px){
            .responsive {
                width: 100%;
            }
        }

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>
</head>
<body class="right-sidebar">
<div id="page-wrapper">

    <!-- Header -->
    <header id="header">
        <h1 id="logo"><a href="/user/index">Fotoğraf <span>by Alvy's</span></a></h1>
        <nav id="nav">
            <ul>
                <li><a href="/user/index">Home</a></li>
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

    <!-- Main -->
    <article id="main">

        <header class="special container">
            <span class="icon fa-tablet"></span>
            <h2><strong>Videos</strong></h2>
            <p>Mesmerise by beautiful videos</p>
        </header>

        <!-- One -->
        <section class="wrapper style4 container">

            <div class="row 150%">
                <div class="4u 12u(narrower)">
                    <div class="responsive">
                        <div class="gallery">
                            @foreach($allvideos as $video)
                                <a target="_blank" href="{{$video->video_loc}}">
                                    <video width="400" controls>
                                        <source src="{{$video->video_loc}}" type="video/mp4">
                                    </video>
                                </a>
                                {{--<div class="desc">Destination:  {{$photo->destination}}</div>--}}
                                {{--<div class="desc">Location:  {{$photo->location_name}}</div>--}}
                                <form action="/user/video/submit" method="post">
                                    {{csrf_field()}}
                                    <input type="text" name="comment" class="form-group" placeholder="Your thoughts here!">
                                    <input type="hidden" name="photo_id" value="{{$video->id}}" class="form-group" placeholder="Your thoughts here!">
                                    <input type="submit" value="Comment">
                                </form>
                                <button type="button" data-id="{{$video->id}}" class="btn btn-primary comment">Show Comments</button>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </section>

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
<script>
    $('.comment').click(function () {
        var id = $(this).data('id');
        window.location.href = "/user/video/comment?id="+id;
    });
</script>

</body>
</html>