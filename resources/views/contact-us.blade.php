@extends('master')

@section('content')
    <link rel="stylesheet" href="{{asset('css/pages/contact-us.css')}}">

    <section id="01">
        <div class="container background" style="background-image: url('{{asset('images/backgrounds/White.png')}}')">
            <div class="row justify-content-center" {{--style="height: fit-content"--}}>
                <div class="col-lg-4 mx-4 my-5" style="vertical-align: middle;">
                    <h1 class="title" style="font-size: 45px;line-height: 55px;">Contact Us </h1>

                    <b><a id="quote">Let's get in touch!</a></b>

                    <div class="my-2">
                        <a class="contact-button" href="https://wa.me/6285388114785" target="_blank"
                           style="background-image: url('{{asset('images/contact-us/Whatsapp.png')}}');"></a>
                        <a class="contact-button" href="https://www.facebook.com/reproes/" target="_blank"
                           style="background-image: url('{{asset('images/contact-us/Facebook.png')}}');"></a>
                        <a class="contact-button" href="https://www.instagram.com/rebuildingproject/" target="_blank"
                           style="background-image: url('{{asset('images/contact-us/Instagram.png')}}');"></a>
                    </div>
                </div>

                <div class="col-lg-7">
                    <form method="POST" action="{{url('/inquiries')}}">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-lg-9 col-10 p-4" id="back">
                                <label for="name" class="label">Nama / Nama Perusahaan</label>

                                <div class="input-icons mb-3">
                                    <i class="far fa-user phone-icon"></i>
                                    <input id="name" class="form-control input-field-icon" name="name" required
                                           autofocus>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-6">
                                        <label for="email" class="label">Alamat E-mail</label>
                                        <div class="input-icons">
                                            <i class="far fa-envelope-open phone-icon"></i>
                                            <input id="email" type="email" class="form-control input-field-icon"
                                                   name="email" required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="phone" class="label">Nomor Telepon</label>
                                        <div class="input-icons">
                                            <img src="{{asset('images/contact-us/phone-icon.png')}}" class="phone-icon"
                                                 alt="phone-icon">
                                            <input id="phone" class="form-control input-field-icon" name="phone"
                                                   required autofocus>
                                        </div>
                                    </div>
                                </div>

                                <label for="title" class="label">Judul</label>
                                <input id="title" class="form-control input-field" name="title" required autofocus>

                                <br>

                                <label for="message" class="label">Pesan</label>
                                <textarea id="message" type="text" class="form-control input-field" rows="4"
                                          name="message" required autofocus></textarea>

                                @if(\Session::has('successContact'))
                                    <script>
                                        swal({
                                            title: "Success",
                                            text: "Your Message Has Been Sent!",
                                            icon: "success",
                                            confirmButtonText: 'OK',
                                            closeOnConfirm: true,
                                            allowOutsideClick: false
                                        });
                                    </script>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <button type="submit" class="mt-3 px-5 py-2 text-center" id="login">
                                    Kirim
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('js/contact-us.js')}}"></script>
@endsection
