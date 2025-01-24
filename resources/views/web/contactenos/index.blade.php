@extends('web.layouts.principal')
@section('content')
        <div class="page-title gradient-overlay op6" style="
                          background: url({{ asset('web/images/web/breadcrumb.jpg') }});
                          background-repeat: no-repeat;
                          background-size: cover;
                        ">
            <div class="container">
                <div class="inner padtop55-movil padleft30-movil" style="padding-top: 70px; padding-bottom: 55px">
                    <h1 class="nuevafuente2">Contáctenos</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Inicio</a>
                        </li>
                        <li>Contáctenos</li>
                    </ol>
                </div>
            </div>
        </div>

        <main class="contact-page padtop20-movil" style="padding-bottom: 30px; padding-top: 70px">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="section-title padbot-movil">
                            <h1 class="titulo-movil padtop20-movil" style="color: #026633; font-weight: 300; font-size: 50px">
                                Contáctenos
                            </h1>
                            <h3 class="texto-centrar" style="
                                    color: white;
                                    text-decoration: overline #4d9470;
                                    padding-left: 5px;
                                  ">
                                Subrayado
                            </h3>
                            <h3 class="nuevafuente oculto" style="
                                    color: #74bc21;
                                    font-weight: 300;
                                    font-size: 35px;
                                    padding-bottom: 15px;
                                    line-height: 0.5;
                                  ">
                                Siéntase libre de contactarnos en
                            </h3>
                            <h3 class="nuevafuente oculto" style="
                                    color: #74bc21;
                                    font-weight: 300;
                                    font-size: 35px;
                                    padding-bottom: 15px;
                                    line-height: 1;
                                  ">
                                cualquier momento.
                            </h3>
                        </div>
                        <p class="oculto">
                            Por favor llene los campos requeridos, nuestro equipo de
                            reservas le responderá en la brevedad, gracias.
                        </p>
                        
                        <h3 class="nuevafuente subtitulo2-movil texto-separado vista"
                        style="
                        display: none;
                        color: black;
                        font-weight: 600;
                        font-size: 20px;
                        padding-bottom: 15px;
                        letter-spacing: 3px;
                        line-height: 0;">
                        Siéntase libre de contactarnos <br> en cualquier momento
                        </h3>

                        <form id="contact-form" class="contact-form padtop25-movil">
                            <div class="form-group pad025-movil">
                                <input class="form-control" name="name" placeholder="Nombre" type="text" />
                            </div>
                            <div class="form-group pad025-movil">
                                <input class="form-control" name="email" placeholder="Correo" type="email" />
                            </div>
                            <div class="form-group pad025-movil">
                                <input class="form-control" name="phone" placeholder="Celular" type="text" />
                            </div>
                            <div class="form-group pad025-movil">
                                <input class="form-control" name="subject" placeholder="Tema" type="text" />
                            </div>
                            <div class="form-group pad025-movil">
                                <textarea class="form-control" name="message" placeholder="Mensaje"></textarea>
                            </div>
                            <div class="form-group pad050-movil">
                                <button class="btn mt30" style="margin-top: 0px">
                                    ENVIAR
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="sidebar" style="padding-left: 0px !important">
                            <div></div>
                            <iframe class="mapa-movil"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.0784382776483!2d-77.94523558612251!3d-7.886862494318045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ade1eed195ecbf%3A0xd0f491c302c96da0!2sAguas%20Termales%20El%20Eden!5e0!3m2!1ses-419!2spe!4v1650644000269!5m2!1ses-419!2spe"
                                width="370" height="300" style="border: 0" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <br />
                        <aside class="widget widget-help" style="
                                  background: #026633;
                                  padding-left: 20px;
                                  padding-top: 30px;
                                  padding-bottom: 10px;
                                  margin-bottom: 30px;
                                ">
                            <h1 class="nuevafuente" style="
                                    color: #74bc21;
                                    font-weight: 300;
                                    font-size: 30px;
                                    text-align: left;
                                    margin-left: 20px;
                                  ">
                                Información
                            </h1>
                            <div class="row">
                                <div class="col-3" style="text-align: center; padding-right: 0px">
                                    <i><img src="{{ asset('web/images/web/Ubicacionv2.png') }}" style="padding: 10px" />
                                    </i>
                                    <br />
                                    <i><img src="{{ asset('web/images/web/Emailv2.png') }}"
                                            style="padding: 10px" /></i><br />
                                    <i><img src="{{ asset('web/images/web/Phonev2.png') }}"
                                            style="padding: 10px" /></i><br />
                                    <i><img src="{{ asset('web/images/web/Movilv2.png') }}" style="padding: 10px" /></i>
                                </div>
                                <div class="col-9" style="padding-left: 0px">
                                    <p class="nuevafuente2 martbot-movil pad13_5" style="
                                        color: white;
                                        line-height: 1.5;
                                        font-size: 12px;
                                        padding: 15px 5px;
                                      ">
                                        Distrito de Curgos, provincia de Sánchez Carrión -
                                        Departamento de <br> La Libertad
                                    </p>
                                    <p class="nuevafuente2 martbot-movil" style="color: white; font-size: 12px; padding: 5px">
                                        hotelgraneden@gmail.com
                                    </p>
                                    <p class="nuevafuente2 martbot30-movil" style="color: #026633; font-size: 12px; padding: 15px 5px">
                                        9999999
                                    </p>
                                    <p class="nuevafuente2" style="color: white; font-size: 12px; padding: 10px 5px">
                                        973451604 - 959654261
                                    </p>
                                </div>
                            </div>
                        </aside>
                        <div class="social-media mt50 oculto" style="text-align: center; margin-top: 30px">
                            <a class="facebook" data-original-title="Facebook" data-toggle="tooltip" href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a class="instagram" data-original-title="Instagram" data-toggle="tooltip" href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a class="youtube" data-original-title="Youtube" data-toggle="tooltip" href="#">
                                <i class="fa fa-youtube-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection
@section('scripts')
    <script>
        $('#inicio').removeClass("active");
        $('#habitaciones').removeClass("active");
        $('#instalaciones').removeClass("active");
        $('#contactenos').addClass("active");
    </script>
@endsection
