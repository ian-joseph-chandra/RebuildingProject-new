@extends('master')

@section('content')
    <link rel="stylesheet" href="{{asset('css/pages/home.css')}}">

    <section id="01">
        <div class="container" style="margin-top: 170px">
            <div class="row justify-content-between">
                <div class="col-lg-5 col-8">
                    <img src="{{asset('images/home/landing.png')}}" class="img-fluid">
                </div>

                <div class="col-lg-6 col-sm-5 col-10 mt-3">
                    <a id="section-01-subtitle">01 - VISI KAMI</a>
                    <h1 class="grid-0">Empowering</h1>
                    <h1 class="grid-4">Children</h1>
                    <h1 class="grid-0">through</h1>
                    <h1 class="grid-4">Education</h1>

                    <button class="btn px-5 py-2 my-1" type="submit" id="section-01-btn"
                            onclick="window.location='{{url('/get-involved')}}'"><b>Donate Now</b>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="02">
        <div class="container">
            <div class="col-lg-12 col-sm-10 col-12 mt-5 text-center">
                <div class="row px-2" id="back-welcome">
                    <div class="col-lg-12 col-sm-10 col-12 mt-5 text-center">
                        <a class="mt-10" id="section-01-subtitle">02 - PROGRAM KAMI</a><br><br>

                        <p class="our-program grid-1">
                            "Karena pembelajaran <span class="grid-2">tidak hanya di ruang kelas</span>, kami
                            memfasilitasi
                            program edukasi yang <span class="grid-2">menarik </span> dan <span class="grid-2">menyenangkan</span>
                            untuk anak-anak”
                        </p>

                        <a class="col-12" id="quote"><b>Seluruh program edukasi yang diberikan dikemas dengan konsep
                                Fun-Learning:</b>
                        </a>
                    </div>

                    <div class="programs row p-lg-3 p-sm-3 my-3">
                        @foreach($programs as $program)
                            <div class="col-lg-3 col-sm-6">
                                <div class="program card" style="box-shadow: none">
                                    <div class="card-body text-left">
                                        <img class="mt-5" src="{{asset($program['image'])}}" alt="Avatar"
                                             width="40%"><br><br>
                                        <h6 class="card-title" style="font-size: 19px"><b>{{$program['title']}}</b></h6>
                                        <p id="quote-1">{{$program['quote']}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <button class="btn px-5 py-2 mb-4" type="submit" id="section-01-btn"
                            onclick="window.location='{{url('get-involved')}}'"><b>Get Involved</b>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="03">
        <div class="container my-5">
            <div class="row justify-content-between">
                <div class="col-lg-5 col-10 text-center">
                    <img class="img-fluid" src="{{asset('images/home/who.png')}}">
                </div>

                <div class="section-03 col-lg-6 col-10 mt-3 text center">
                    <a id="section-03-subtitle">03 - SIAPAKAH KAMI</a><br>

                    <h1 class="grid-2">Who We Are</h1>

                    <a id="section-03-quote">
                        <b>Rebuilding Project merupakan gerakan sosial dibidang edukasi yang bekerja sama dengan panti
                            asuhan yang ada di Indonesia. Gerakan sosial ini bertujuan untuk membekali anak-anak yatim
                            piatu yang berusia 6 hingga 18 tahun dengan pengetahuan, kemampuan, dan nilai-nilai positif
                            sehingga mendorong anak-anak untuk berani bermimpi dan memberikan harapan untuk membangun
                            masa depan yang lebih baik.</b>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="04">
        <div class="container my-5 text-center">
            <div class="row p-3 justify-content-center">
                <div class="col-lg-12 text-center">
                    <a class="mt-3" id="section-01-subtitle">04 - APA YANG KAMI LAKUKAN</a><br>

                    <h1 id="section-04-title"> What We Do</h1>
                    <br>
                </div>
            </div>

            <div class="section-04-cards row my-2">
                <div class="row p-sm-3 my-2">
                    @foreach($activities as $activity)
                        <div class="col-lg-3 col-md-6">
                            <div class="section-04-card card">
                                <div class="card-body">
                                    <h2 class="section-04-card-id text-center">{{$activity['id']}}</h2>

                                    <img class="section-04-img" src="{{asset($activity['image'])}}"
                                         alt="Avatar"><br><br>

                                    <p id="section-04-card-quote"><b>{{$activity['description']}}</b></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <script>
        let home = document.getElementById('home').id = 'this';
    </script>
@endsection
