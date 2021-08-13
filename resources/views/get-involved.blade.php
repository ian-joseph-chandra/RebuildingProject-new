@extends('master')

@section('content')
    <link rel="stylesheet" href="{{asset('css/pages/get-involved.css')}}">

    <section id="01">
        <div class="container" style="margin-top: 94px">
            <div class="row">
                <div class="col-lg-7 col-sm-6 col-12 p-5" id="quote"
                    style="background-image: url({{asset('images/get-involved/donate.png')}})">
                    <a class="get-involved" style="color: white;">
                        <span style="color:#FFA216">"</span>Everyone can contribute<br>
                        &nbsp;&nbsp;to something <span style="color:#FFA216">GOOD.</span><br>
                        &nbsp;&nbsp;Your support <span style="color:#FFA216">MATTERS."</span></a>
                </div>

                <div class="col-lg-5 col-sm-6 col-12 text-center donate-section"
                     style="background-image: url({{asset('images/backgrounds/Cream.png')}});">
                        <form action="https://forms.gle/r8ddZzfxqxxh1PMW9" target="_blank">
                            <button class="btn px-5 py-2 my-1" type="submit" id="donate-button">
                                <b>DONATE NOW</b>
                            </button>
                        </form>
                </div>
            </div>
        </div>
    </section>

    <!--
<section id="02">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-12 mt-5 text-center">
                <h1 class="grid-1 my-2">Merchandise</h1>
            </div>
            <div class="col-lg-4 col-sm-4 col-10 my-4">
                <img src="{{asset('assets/get-involved/tshirt.png')}}" class="card-picture">
                <div class="card p-3">
                    <div class="box p-xl-3 p-lg-3 p-2">
                        <h3 class="grid-1">Rebuilding <br> T-shirt</h3>
                        <a style="color:#f5c150"><b>IDR 150.000</b></a>
                        <div class="row mt-3">
                            <div class="col-lg-12 text-right">
                                <a class="btn px-3 py-1 my-4" id="login" href="{{url('more')}}"><b>Buy Now</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-10 my-4">
                <img src="{{asset('assets/get-involved/bottle.png')}}" class="card-picture">
                <div class="card p-3">
                    <div class="box p-xl-3 p-lg-3 p-2">
                        <h3 class="grid-1">Rebuilding <br> Bottle</h3>
                        <a style="color:#f5c150"><b>IDR 150.000</b></a>
                        <div class="row mt-3">
                            <div class="col-lg-12 text-right">
                                <a class="btn px-3 py-1 my-4" id="login" href="{{url('more')}}"><b>Buy Now</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-10 my-4">
                <img src="{{asset('assets/get-involved/watch.png')}}" class="card-picture">
                <div class="card p-3">
                    <div class="box p-xl-3 p-lg-3 p-2">
                        <h3 class="grid-1">Rebuilding <br> Watch</h3>
                        <a style="color:#f5c150"><b>IDR 150.000</b></a>
                        <div class="row mt-3">
                            <div class="col-lg-12 text-right">
                                <a class="btn px-3 py-1 my-4" id="login" href="{{url('more')}}"><b>Buy Now</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="03">
    <div class="container">
        <div class="row p-3 my-2 justify-content-center">
            <div class="col-lg-12 mt-5 text-center">
                <h1 class="grid-2 my-2">Volunteer Programs</h1>
            </div>
            <div class="col-lg-5 col-sm-5 col-10 m-3">
                <div class="volunteer-panel p-3">
                    <img class="mt-5" src="{{asset('assets/get-involved/Vols001.png')}}" alt="Avatar" style="width:40%"><br><br>
                    <div class="box">
                        <h4 style="margin-left:20px;"><b>Committe</b></h4>
                        <p  style="margin-left:20px;">Kami mencari orang-orang untuk menjadi bagian dalam tim kami untuk memberdayakan lebih banyak anak melalui pendidikan. Apakah Anda bersemangat dalam memberdayakan anak-anak? Bergabunglah dalam tim kami dan bagikan bakat serta ide Anda!</p>
                        <div class="row mt-3">
                            <div class="col-lg-12 text-center">
                                <a class="btn px-3 py-1 my-4" id="login" href="{{url('/more')}}"><b>Register Now</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-5 col-10 m-3">
                <div class="volunteer-panel p-3">
                    <img class="mt-5" src="{{asset('assets/get-involved/Vols002.png')}}" alt="Avatar" style="width:40%"><br><br>
                    <div class="box">
                        <h4  style="margin-left:20px;"><b>Volunteer</b></h4>
                        <p  style="margin-left:20px;">Kami percaya bahwa setiap orang dapat berkontribusi untuk membantu kehidupan anak-anak yatim piatu di Indonesia menjadi lebih baik. Apakah Anda siap berpartisipasi dalam mengimplementasikan program pendidikan bagi anak-anak ini? Kami butuh Anda, mari kita berdayakan bersama!</p>
                        <div class="row mt-3">
                            <div class="col-lg-12 text-center">
                                <a class="btn px-3 py-1 my-4" id="login" href="{{url('/more')}}"><b>Register Now</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

-->
    <script src="{{asset('js/get-involved.js')}}"></script>
@endsection
