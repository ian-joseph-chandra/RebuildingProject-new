<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  user-scalable=no">
    <title> Rebuilding Project</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/header-footer/logo.png')}}">
    <link rel="apple-touch-icon" type="image/png" href="{{asset('images/header-footer/logo.png')}}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    {{--Bootstrap dependencies--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
</head>

<body>

<section id="navbar">
    <nav class="navbar navbar-expand-lg fixed-top" id="navbarUtama">
        <div class="menu-toggle">
            <input type="checkbox"/>
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="navbar-nav">
            <a href="{{url('/')}}">
                <img src="{{asset('images/header-footer/logo.png')}}" width="150px" id="headerLogo"></a>
        </div>

        <ul>
            <li class="nav-item">
                <a id="home" class="nav-link mx-lg-4 mx-xl-5 my-3" href="{{url('/')}}">Home
                    <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a id="about" class="nav-link mx-lg-4 mx-xl-5 my-3" href="{{url('/about-us')}}">About Us
                    <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a id="stories" class="nav-link mx-lg-4 mx-xl-5 my-3" href="{{url('/stories')}}">Our Story
                    <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a id="contact-us" class="nav-link mx-lg-4 mx-xl-5 my-3" href="{{url('/contact-us')}}">Contact Us
                    <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a id="get-involved" class="nav-link mx-lg-4 mx-xl-5 my-3" href="{{url('/get-involved')}}">Get
                    Involved<span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </nav>
</section>

@yield('content')

<footer class="footer mt-5 justify-content-center" style="bottom: 0;">
    <div class="justify-content-center" id="footer-background"
         style="background-image: url({{asset('images/header-footer/flow.png')}}">
        <div class="row justify-content-center" style="align-self: flex-end;">
            <div class="col-xl-4 col-lg-4 col-sm-12 col-10 justify-content-center text-center my-3">
                <img src="{{asset('images/header-footer/Logo_black.png')}}" width="250px" alt="footer-logo">
                <br>
                <a href="https://wa.me/6285388114785" target="_blank" class="contact-button"
                   style="background-image: url('{{asset('images/header-footer/Whatsapp.png')}}')"></a>
                <a href="https://www.facebook.com/reproes/" target="_blank" class="contact-button"
                   style="background-image: url('{{asset('images/header-footer/Facebook.png')}}')"></a>
                <a href="https://www.instagram.com/rebuildingproject/" target="_blank" class="contact-button"
                   style="background-image: url('{{asset('images/header-footer/Instagram.png')}}')"></a>
            </div>

            <div class="col-xl-2 col-lg-2 col-sm-5 col-8 justify-content-center my-3">
                <a href="{{url('about-us')}}" class="pages">About Us</a>
                <br><br>
                <a href="{{url('stories')}}" class="pages">Our Story</a>
                <br><br>
                <a href="{{url('contact-us')}}" class="pages">Contact Us</a>
                <br><br>
                <a href="{{url('get-involved')}}" class="pages">Get Involved</a> <br>
            </div>

            <div class="col-xl-4 col-lg-4 col-sm-7 col-11 justify-content-center my-3">
                <a class="contact"><i class="contact-icon fab fa-instagram footer-left"></i> @rebuildingproject</a>
                <br><br>
                <a class="contact"><i class="contact-icon fab fa-facebook-f footer-left"></i> @reproes</a>
                <br><br>
                <a class="contact">
                    <i class="contact-icon far fa-envelope footer-left"></i> rebuildinglivesforchildren@gmail.com </a>
            </div>

            <div class="row justify-content-center text-center" id="copyright">
                <div class="col-lg-12 col-sm-12 justify-content-center text-center my-3">
                    © Copyright Rebuilding Project 2020-2021. All Rights Reserved
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{asset('js/master.js')}}"></script>
</body>

</html>
