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
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
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
                <table class="table">
                    <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Other</th>
                    <th>Delete</th>
                    </thead>
                    @foreach($allusers as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td><button class="see" data-id="{{$user->id}}">See My Stuff</button></td>
                            <td><button class="delete" data-id="{{$user->id}}">Delete Me</button></td>
                        </tr>
                    @endforeach
                </table>
            </div>

            <div class="row">
                <div class="col-md-4">

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
<script>
    $('.delete').click(function () {
        alert('I am here');
        var id = $(this).data("id");
        window.location.href = "/user/upload/video?id="+id;
    });
    $('.see').click(function () {
        var id = $(this).data("id");
        alert(id);
        window.location.href = "/user/upload/video?id="+id;
    });
</script>

</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Nabeel Alvi
 * Date: 10/15/2017
 * Time: 2:06 AM
 */