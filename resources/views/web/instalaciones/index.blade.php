@extends('web.layouts.principal')
@section('css')
<style>
    .room-slider{
        display:none;
    }

    .room-slider.active{
        display:block;
    }
</style>
@endsection
@section('content')
        <div class="page-title gradient-overlay op5" style="
                                  background: url({{ asset('web/images/web/breadcrumb.jpg') }});
                                  background-repeat: no-repeat;
                                  background-size: cover;
                                ">
            <div class="container">
                <div class="inner padtop55-movil padleft30-movil" style="padding-top: 70px; padding-bottom: 55px">
                    <h1 class="nuevafuente2">Instalaciones</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">Inicio</a>
                        </li>
                        <li>Instalaciones</li>
                    </ol>
                </div>
            </div>
        </div>

        <main class="room padtop-movil padbot-movil" style="padding-bottom: 50px; padding-top: 50px; background: #f5f3f0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12 oculto">
                        <div class="sidebar martop-movil">
                            <aside class="widget noborder" style="margin-bottom: 30px">
                                <div class="vertical-booking-form" style="
                                              background: #f5f3f0;
                                              border: none;
                                              padding-right: 30px;
                                            ">
                                    <p class="nuevafuente texto-centrar" style="
                                                color: #4d9470;
                                                margin-left: 25px;
                                                border-bottom: 1px solid;
                                                line-height: 3;
                                                font-size: 17px;
                                                margin-bottom: 5px;
                                                margin-top: 30px;
                                                font-weight: 600;
                                                letter-spacing:0.5px;
                                              ">
                                        <btn id="aguas" style="color:black"> Aguas termales </btn>
                                    </p>
                                    <p class="nuevafuente texto-centrar" style="
                                                color: black;
                                                margin-left: 25px;
                                                border-bottom: 1px solid #026633;
                                                line-height: 3;
                                                font-size: 17px;
                                                margin-bottom: 5px;
                                                font-weight: 600;
                                                letter-spacing:0.5px;
                                              ">
                                        <btn id="restaurante" style="color:black"> Restaurante </btn>  
                                    </p>
                                    <p class="nuevafuente texto-centrar" style="
                                                color: black;
                                                margin-left: 25px;
                                                border-bottom: 1px solid #026633;
                                                line-height: 3;
                                                font-size: 17px;
                                                margin-bottom: 5px;
                                                font-weight: 600;
                                                letter-spacing:0.5px;
                                              ">
                                        <btn id="piscina" style="color:black">Piscina</btn>
                                    </p>
                                    <p class="nuevafuente texto-centrar" style="
                                                color: black;
                                                margin-left: 25px;
                                                border-bottom: 1px solid #026633;
                                                line-height: 3;
                                                font-size: 17px;
                                                margin-bottom: 5px;
                                                font-weight: 600;
                                                letter-spacing:0.5px;
                                              ">
                                        <btn id="discoteca" style="color:black"> Discoteca </btn> 
                                    </p>
                                    <p class="nuevafuente texto-centrar" style="
                                                color: black;
                                                margin-left: 25px;
                                                border-bottom: 1px solid #026633;
                                                line-height: 3;
                                                font-size: 17px;
                                                margin-bottom: 5px;
                                                font-weight: 600;
                                                letter-spacing:0.5px;
                                              ">
                                        <btn id="campo" style="color:black"> Campo deportivo </btn> 
                                    </p>
                                    <p class="nuevafuente texto-centrar" style="
                                                color: black;
                                                margin-left: 25px;
                                                border-bottom: 1px solid #026633;
                                                line-height: 3;
                                                font-size: 17px;
                                                margin-bottom: 5px;
                                                font-weight: 600;
                                                letter-spacing:0.5px;
                                              ">
                                        <btn id="auditorio" style="color:black"> Auditorio </btn> 
                                    </p>
                                    <p class="nuevafuente texto-centrar separar1" style="
                                                color: black;
                                                margin-left: 25px;
                                                border-bottom: 1px solid #026633;
                                                line-height: 3;
                                                font-size: 17px;
                                                margin-bottom: 5px;
                                                font-weight: 600;
                                                letter-spacing:0.5px;
                                              ">
                                        <btn id="terraza" style="color:black">Terraza</btn>
                                    </p>
                                    <p class="nuevafuente texto-centrar" style="
                                                color: black;
                                                margin-left: 25px;
                                                line-height: 3;
                                                font-size: 17px;
                                                font-weight: 600;
                                                letter-spacing:0.5px;
                                              ">
                                        <btn id="karaoke" style="color:black"> Karaoke </btn>  
                                    </p>
                                </div>
                            </aside>

                            <aside class="widget widget-help oculto" style="
                                            padding-left: 30px;
                                            background: #74bc21;
                                            padding-top: 30px;
                                          ">
                                <h1 class="nuevafuente" style="
                                              color: white;
                                              font-weight: 300;
                                              font-size: 27px;
                                              text-align: left;
                                            ">
                                    Necesitas <br />
                                    ayuda?
                                </h1>
                                <h3 style="
                                              color: #74bc21;
                                              text-decoration: overline white;
                                              line-height: 3;
                                              font-size: 10px;
                                            ">
                                    Subrayad
                                </h3>
                                <p class="nuevafuente3" style="color: black; line-height: 0px !important">
                                    ¡Contáctate con nosotros!
                                </p>
                                <div class="phone" style="text-align: left">
                                    <a class="nuevafuente" href="" style="color: white; letter-spacing: 2px">
                                        (51) 973451604
                                    </a>
                                    <br />
                                    <a href="" style="color: white; letter-spacing: 2px">
                                        (51) 959654261
                                    </a>
                                </div>
                                <div class="email">
                                    <a class="nuevafuente" style="text-align: left !important"><span
                                            style="font-size: 14px; color: white"><i class="fa fa-envelope"></i>
                                            hotelgraneden@gmail.com</span></a>
                                </div>
                            </aside>
                        </div>
                    </div>
                    <div class="col-lg-9 col-12">
                        <div class="section-title sm vista" style="text-align: center;display:none;">
                            <h1 class="titulo-movil padtop20-movil" style="
                                            color: #026633;
                                            font-weight: 300;
                                            font-size: 50px;
                                            text-align: center;
                                          ">
                                Instalaciones
                            </h1>
                            <h3 style="
                                            color: #f5f3f0;
                                            text-decoration: overline #4d9470;
                                            text-align: center;
                                          ">
                                Subrayado
                            </h3>
                            <h3 class="nuevafuente subtitulo2-movil" style="
                                            color: black;
                                            font-weight: 600;
                                            font-size: 20px;
                                            padding-bottom: 15px;
                                            letter-spacing: 3px;
                                            line-height: 0;
                                          ">
                                Ingresa a nuestro mundo
                            </h3>
                        </div>
                        <div class="room-slider active" id="slider1">
                            <div id="room-main-image" class="owl-carousel image-gallery pad010-movil">
                                <div class="item">
                                    <figure class="gradient-overlay-hover image-icon">
                                        <a href="({{ asset('web/images/rooms/single/Piscina.jpg') }}">
                                            <img class="img-fluid"
                                                src="{{ asset('web/images/rooms/single/Piscina.jpg') }}" alt="Image" />
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <div id="room-thumbs" class="room-thumbs owl-carousel">
                                <div class="item">
                                    <img class="img-fluid" src="{{ asset('web/images/rooms/single/Piscina.jpg') }}"
                                        alt="Image" />
                                </div>
                            </div>
                        </div>

                        <div class="room-slider" id="slider2">
                            <div id="room-main-image1" class="owl-carousel image-gallery pad010-movil">
                                <div class="item">
                                    <figure class="gradient-overlay-hover image-icon">
                                        <a href="({{ asset('web/images/rooms/single/RestauranteNuevo.jpg') }}">
                                            <img class="img-fluid"
                                                src="{{ asset('web/images/rooms/single/RestauranteNuevo.jpg') }}" alt="Image" />
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <div id="room-thumbs1" class="room-thumbs owl-carousel">
                                <div class="item">
                                    <img class="img-fluid" src="{{ asset('web/images/rooms/single/RestauranteNuevo.jpg') }}"
                                        alt="Image" />
                                </div>
                            </div>
                        </div>

                        <div class="room-slider" id="slider3">
                            <div id="room-main-image2" class="owl-carousel image-gallery pad010-movil">
                                <div class="item">
                                    <figure class="gradient-overlay-hover image-icon">
                                        <a href="({{ asset('web/images/rooms/single/Piscina02.jpg') }}">
                                            <img class="img-fluid"
                                                src="{{ asset('web/images/rooms/single/Piscina02.jpg') }}" alt="Image" />
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <div id="room-thumbs2" class="room-thumbs owl-carousel">
                                <div class="item">
                                    <img class="img-fluid" src="{{ asset('web/images/rooms/single/Piscina02.jpg') }}"
                                        alt="Image" />
                                </div>
                            </div>
                        </div>

                        <div class="room-slider" id="slider4">
                            <div id="room-main-image3" class="owl-carousel image-gallery pad010-movil">
                                <div class="item">
                                    <figure class="gradient-overlay-hover image-icon">
                                        <a href="({{ asset('web/images/rooms/single/RestauranteNuevo.jpg') }}">
                                            <img class="img-fluid"
                                                src="{{ asset('web/images/rooms/single/RestauranteNuevo.jpg') }}" alt="Image" />
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <div id="room-thumbs3" class="room-thumbs owl-carousel">
                                <div class="item">
                                    <img class="img-fluid" src="{{ asset('web/images/rooms/single/RestauranteNuevo.jpg') }}"
                                        alt="Image" />
                                </div>
                            </div>
                        </div>

                        <div class="room-slider" id="slider5">
                            <div id="room-main-image4" class="owl-carousel image-gallery pad010-movil">
                                <div class="item">
                                    <figure class="gradient-overlay-hover image-icon">
                                        <a href="({{ asset('web/images/rooms/single/Campo.jpg') }}">
                                            <img class="img-fluid"
                                                src="{{ asset('web/images/rooms/single/Campo.jpg') }}" alt="Image" />
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <div id="room-thumbs4" class="room-thumbs owl-carousel">
                                <div class="item">
                                    <img class="img-fluid" src="{{ asset('web/images/rooms/single/Campo.jpg') }}"
                                        alt="Image" />
                                </div>
                            </div>
                        </div>

                        <div class="room-slider" id="slider6">
                            <div id="room-main-image5" class="owl-carousel image-gallery pad010-movil">
                                <div class="item">
                                    <figure class="gradient-overlay-hover image-icon">
                                        <a href="({{ asset('web/images/rooms/single/RestauranteNuevo.jpg') }}">
                                            <img class="img-fluid"
                                                src="{{ asset('web/images/rooms/single/RestauranteNuevo.jpg') }}" alt="Image" />
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <div id="room-thumbs5" class="room-thumbs owl-carousel">
                                <div class="item">
                                    <img class="img-fluid" src="{{ asset('web/images/rooms/single/RestauranteNuevo.jpg') }}"
                                        alt="Image" />
                                </div>
                            </div>
                        </div>

                        <div class="room-slider" id="slider7">
                            <div id="room-main-image6" class="owl-carousel image-gallery pad010-movil">
                                <div class="item">
                                    <figure class="gradient-overlay-hover image-icon">
                                        <a href="({{ asset('web/images/rooms/single/Baile.jpg') }}">
                                            <img class="img-fluid"
                                                src="{{ asset('web/images/rooms/single/Baile.jpg') }}" alt="Image" />
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <div id="room-thumbs6" class="room-thumbs owl-carousel">
                                <div class="item">
                                    <img class="img-fluid" src="{{ asset('web/images/rooms/single/Baile.jpg') }}"
                                        alt="Image" />
                                </div>
                            </div>
                        </div>

                        <div class="room-slider" id="slider8">
                            <div id="room-main-image7" class="owl-carousel image-gallery pad010-movil">
                                <div class="item">
                                    <figure class="gradient-overlay-hover image-icon">
                                        <a href="({{ asset('web/images/rooms/single/RestauranteNuevo.jpg') }}">
                                            <img class="img-fluid"
                                                src="{{ asset('web/images/rooms/single/RestauranteNuevo.jpg') }}" alt="Image" />
                                        </a>
                                    </figure>
                                </div>
                            </div>
                            <div id="room-thumbs7" class="room-thumbs owl-carousel">
                                <div class="item">
                                    <img class="img-fluid" src="{{ asset('web/images/rooms/single/RestauranteNuevo.jpg') }}"
                                        alt="Image" />
                                </div>
                            </div>
                        </div>

                        <div class="section-title sm oculto" style="text-align: center">
                            <h1 class="titulo-movil padtop20-movil" style="
                                            color: #026633;
                                            font-weight: 300;
                                            font-size: 50px;
                                            text-align: center;
                                          ">
                                Instalaciones
                            </h1>
                            <h3 style="
                                            color: #f5f3f0;
                                            text-decoration: overline #4d9470;
                                            text-align: center;
                                          ">
                                Subrayado
                            </h3>
                            <h3 class="nuevafuente subtitulo2-movil" style="
                                            color: black;
                                            font-weight: 600;
                                            font-size: 20px;
                                            padding-bottom: 15px;
                                            letter-spacing: 3px;
                                            line-height: 0;
                                          ">
                                Ingresa a nuestro mundo
                            </h3>
                        </div>
                        <br class="oculto" />
                        <p class="nuevafuente3 parrafo2-movil" style="
                                          color: black;
                                          font-weight: 300;
                                          font-size: 20px;
                                          margin-left: 15px;
                                        ">
                            Desconéctate en un lugar increíble con las personas que más
                            quieres y disfruta de la tranquilidad y paz de nuestro paraíso
                            con un clima privilegiado. En El Gran Edén podrás relajarte y
                            divertirte como lo mereces. <br />
                        </p>
                        <div class="sidebar martop-movil vista" style="display:none;">
                            <aside class="widget noborder" style="margin-bottom: 30px">
                                <div class="vertical-booking-form" style="
                                              background: #f5f3f0;
                                              border: none;
                                              padding-right: 30px;
                                            ">
                                    <p class="nuevafuente texto-centrar" style="
                                                color: #4d9470;
                                                margin-left: 25px;
                                                border-bottom: 1px solid;
                                                line-height: 3;
                                                font-size: 17px;
                                                margin-bottom: 5px;
                                                margin-top: 30px;
                                                font-weight: 600;
                                                letter-spacing:0.5px;
                                              ">
                                        Aguas termales
                                    </p>
                                    <p class="nuevafuente texto-centrar" style="
                                                color: black;
                                                margin-left: 25px;
                                                border-bottom: 1px solid #026633;
                                                line-height: 3;
                                                font-size: 17px;
                                                margin-bottom: 5px;
                                                font-weight: 600;
                                                letter-spacing:0.5px;
                                              ">
                                        Restaurante
                                    </p>
                                    <p class="nuevafuente texto-centrar" style="
                                                color: black;
                                                margin-left: 25px;
                                                border-bottom: 1px solid #026633;
                                                line-height: 3;
                                                font-size: 17px;
                                                margin-bottom: 5px;
                                                font-weight: 600;
                                                letter-spacing:0.5px;
                                              ">
                                        Piscina
                                    </p>
                                    <p class="nuevafuente texto-centrar" style="
                                                color: black;
                                                margin-left: 25px;
                                                border-bottom: 1px solid #026633;
                                                line-height: 3;
                                                font-size: 17px;
                                                margin-bottom: 5px;
                                                font-weight: 600;
                                                letter-spacing:0.5px;
                                              ">
                                        Discoteca
                                    </p>
                                    <p class="nuevafuente texto-centrar" style="
                                                color: black;
                                                margin-left: 25px;
                                                border-bottom: 1px solid #026633;
                                                line-height: 3;
                                                font-size: 17px;
                                                margin-bottom: 5px;
                                                font-weight: 600;
                                                letter-spacing:0.5px;
                                              ">
                                        Campo deportivo
                                    </p>
                                    <p class="nuevafuente texto-centrar" style="
                                                color: black;
                                                margin-left: 25px;
                                                border-bottom: 1px solid #026633;
                                                line-height: 3;
                                                font-size: 17px;
                                                margin-bottom: 5px;
                                                font-weight: 600;
                                                letter-spacing:0.5px;
                                              ">
                                        Auditorio
                                    </p>
                                    <p class="nuevafuente texto-centrar" style="
                                                color: black;
                                                margin-left: 25px;
                                                border-bottom: 1px solid #026633;
                                                line-height: 3;
                                                font-size: 17px;
                                                margin-bottom: 5px;
                                                font-weight: 600;
                                                letter-spacing:0.5px;
                                              ">
                                        Terraza
                                    </p>
                                    <p class="nuevafuente texto-centrar" style="
                                                color: black;
                                                margin-left: 25px;
                                                line-height: 3;
                                                font-size: 17px;
                                                font-weight: 600;
                                                letter-spacing:0.5px;
                                              ">
                                        Karaoke
                                    </p>
                                </div>
                            </aside>

                            <aside class="widget widget-help oculto" style="
                                            padding-left: 30px;
                                            background: #74bc21;
                                            padding-top: 30px;
                                          ">
                                <h1 class="nuevafuente" style="
                                              color: white;
                                              font-weight: 300;
                                              font-size: 27px;
                                              text-align: left;
                                            ">
                                    Necesitas <br />
                                    ayuda?
                                </h1>
                                <h3 style="
                                              color: #74bc21;
                                              text-decoration: overline white;
                                              line-height: 3;
                                              font-size: 10px;
                                            ">
                                    Subrayad
                                </h3>
                                <p class="nuevafuente3" style="color: black; line-height: 0px !important">
                                    ¡Contáctate con nosotros!
                                </p>
                                <div class="phone" style="text-align: left">
                                    <a class="nuevafuente" href="" style="color: white; letter-spacing: 2px">
                                        (51) 973451604
                                    </a>
                                    <br />
                                    <a href="" style="color: white; letter-spacing: 2px">
                                        (51) 959654261
                                    </a>
                                </div>
                                <div class="email">
                                    <a class="nuevafuente" style="text-align: left !important"><span
                                            style="font-size: 14px; color: white"><i class="fa fa-envelope"></i>
                                            hotelgraneden@gmail.com</span></a>
                                </div>
                            </aside>
                        </div>
                        <p style="text-align: center">
                                <a href="#">
                                    <img class="ancho" src="{{ asset('web/images/web/servicio01.png') }}" alt="Image"
                                        style="width: 120px" />
                                </a>

                                <a href="#">
                                    <img class="ancho" src="{{ asset('web/images/web/servicio02.png') }}" alt="Image"
                                        style="width: 120px" />
                                </a>

                                <a href="#">
                                    <img class="ancho" src="{{ asset('web/images/web/servicio03.png') }}" alt="Image"
                                        style="width: 120px" />
                                </a>

                                <a href="#">
                                    <img class="ancho" src="{{ asset('web/images/web/servicio04.png') }}" alt="Image"
                                        style="width: 120px" />
                                </a>

                                <a href="#">
                                    <img class="ancho" src="{{ asset('web/images/web/servicio05.png') }}" alt="Image"
                                        style="width: 120px" />
                                </a>

                                <a href="#">
                                    <img class="ancho" src="{{ asset('web/images/web/servicio06.png') }}" alt="Image"
                                        style="width: 120px" />
                                </a>

                                <a href="#">
                                    <img class="ancho" src="{{ asset('web/images/web/servicio07.png') }}" alt="Image"
                                        style="width: 120px" />
                                </a>
                            </p>
                    </div>
                </div>
            </div>
        </main>
@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#inicio').removeClass("active");
        $('#habitaciones').removeClass("active");
        $('#instalaciones').addClass("active");
        $('#contactenos').removeClass("active");

        const buttonAguas = document.getElementById('aguas');
        const buttonRestaurante = document.getElementById('restaurante');
        const buttonPiscina = document.getElementById('piscina');
        const buttonDiscoteca = document.getElementById('discoteca');
        const buttonCampoDeportivo = document.getElementById('campo');
        const buttonAuditorio = document.getElementById('auditorio');
        const buttonTerraza = document.getElementById('terraza');
        const buttonKaraoke = document.getElementById('karaoke');
        const slider1 = document.getElementById('slider1');
        const slider2 = document.getElementById('slider2');
        const slider3 = document.getElementById('slider3');
        const slider4 = document.getElementById('slider4');
        const slider5 = document.getElementById('slider5');
        const slider6 = document.getElementById('slider6');
        const slider7 = document.getElementById('slider7');
        const slider8 = document.getElementById('slider8');

        function showSlider(sliderToShow) {
            slider1.classList.remove('active');
            slider2.classList.remove('active');
            slider3.classList.remove('active');
            slider4.classList.remove('active');
            slider5.classList.remove('active');
            slider6.classList.remove('active');
            slider7.classList.remove('active');
            slider8.classList.remove('active');

            if (sliderToShow === 'slider1') {
                slider1.classList.add('active');
            } else if (sliderToShow === 'slider2') {
                slider2.classList.add('active');
            } else if (sliderToShow === 'slider3') {
                slider3.classList.add('active');
            } else if (sliderToShow === 'slider4') {
                slider4.classList.add('active');
            } else if (sliderToShow === 'slider5') {
                slider5.classList.add('active');
            } else if (sliderToShow === 'slider6') {
                slider6.classList.add('active');
            } else if (sliderToShow === 'slider7') {
                slider7.classList.add('active');
            } else if (sliderToShow === 'slider8') {
                slider8.classList.add('active');
            }
        }

        // Agregar eventos a los botones
        buttonAguas.addEventListener('click', () => showSlider('slider1'));
        buttonRestaurante.addEventListener('click', () => showSlider('slider2'));
        buttonPiscina.addEventListener('click', () => showSlider('slider3'));
        buttonDiscoteca.addEventListener('click', () => showSlider('slider4'));
        buttonCampoDeportivo.addEventListener('click', () => showSlider('slider5'));
        buttonAuditorio.addEventListener('click', () => showSlider('slider6'));
        buttonTerraza.addEventListener('click', () => showSlider('slider7'));
        buttonKaraoke.addEventListener('click', () => showSlider('slider8'));
    </script>
@endsection
