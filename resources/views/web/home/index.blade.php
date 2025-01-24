@extends('web.layouts.principal')
@section('css')
    <style>
        .tp-nuevo {
            letter-spacing: 2px;
        }

        .tp-nuevo2 {
            font-weight: 500 !important;
            letter-spacing: 4px;
        }

        .h1 {
            line-height: 0.5;
        }

        .h11 {
            line-height: 0.5;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }

        .oculto{
            display: none;
        }
    </style>
@endsection
@section('content')
        <div class="slider">
            <div id="rev-slider-1" class="rev_slider gradient-slider" style="display: none" data-version="5.4.5">
                <ul>
                    <li data-transition="crossfade">
                        <img src="{{ asset('web/images/web/01.avif') }}" alt="Image" title="Image"
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="10" class="rev-slidebg" data-no-retina="" />

                        <div class="tp-caption tp-resizeme tp-nuevo nuevafuente tp-slider2-movil" data-x="center" data-hoffset="" data-y="310" id="slider-movil"
                            data-voffset="" data-responsive_offset="on" data-fontsize="['65','50','40','25']"
                            data-lineheight="['90','80','70','65']" data-whitespace="nowrap"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="z-index: 5; color: #fff; font-weight: 600">
                            Descubre nuestro <br class="oculto"> refugio natural
                        </div>

                        <div class="tp-caption tp-resizeme tp-nuevo2 nuevafuente2" data-x="center" data-hoffset=""
                            data-y="410" data-voffset="" data-responsive_offset="on" data-fontsize="16" data-lineheight="16"
                            data-whitespace="nowrap"
                            data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="z-index: 6; color: #fff">
                            EDÉN, CURGOS - LA LIBERTAD
                        </div>

                        
                    </li>
                    <li data-transition="crossfade">
                        <img src="{{ asset('web/images/web/02.avif') }}" alt="Image" title="Image"
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="10" class="rev-slidebg" data-no-retina="" />

                        <div class="tp-caption tp-resizeme tp-nuevo nuevafuente tp-slider2-movil" data-x="center" data-hoffset="" data-y="310" id="slider-movill"
                            data-voffset="" data-responsive_offset="on" data-fontsize="['65','50','40','25']"
                            data-lineheight="['90','80','70','65']" data-whitespace="nowrap"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="z-index: 5; color: #fff; font-weight: 600">
                            Visita el <br class="oculto"> paraíso aquí
                        </div>

                        <div class="tp-caption tp-resizeme tp-nuevo2 nuevafuente2" data-x="center" data-hoffset=""
                            data-y="410" data-voffset="" data-responsive_offset="on" data-fontsize="16" data-lineheight="16"
                            data-whitespace="nowrap"
                            data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="z-index: 6; color: #fff">
                            EDÉN, CURGOS - LA LIBERTAD
                        </div>

                        
                    </li>


                   <!-- <li data-transition="crossfade">
                        <img src="{{ asset('web/images/web/slider2.jpg') }}" alt="Image" title="Image"
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="10" class="rev-slidebg" data-no-retina="" />

                        <div class="tp-caption tp-resizeme tp-nuevo nuevafuente tp-slider2-movil" data-x="center" data-hoffset="" data-y="310"
                            data-voffset="" data-responsive_offset="on" data-fontsize="['65','50','40','25']"
                            data-lineheight="['90','80','70','65']" data-whitespace="nowrap"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="z-index: 5; color: #fff; font-weight: 600">
                            Visita el paraíso aquí
                        </div>

                        <div class="tp-caption tp-resizeme tp-nuevo2 nuevafuente2" data-x="center" data-hoffset=""
                            data-y="410" data-voffset="" data-responsive_offset="on" data-fontsize="16" data-lineheight="16"
                            data-whitespace="nowrap"
                            data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="z-index: 6; color: #fff">
                            CURGOS, LA LIBERTAD - PERÚ
                        </div>
                    </li>-->
                </ul>
            </div>
            <!--<div class="col-lg-6 col-12 padleft-movil vista" style="padding-top: 40px; padding-left: 30px;display:none;">
                        <h1 class="nuevafuente titulo-movil" style="color: #026633; font-weight: 300; font-size: 50px">
                            El Edén existe!
                        </h1>
                        <h3 class="nuevafuente subtitulo-movil"
                            style="color: black; font-weight: 600; font-size: 20px; padding-bottom: 15px; letter-spacing: 3px;
                        ">
                            Hacemos que su experiencia <br class="vista"> sea única
                        </h3>
                        <h3 class="texto-centrar" style="color: white; text-decoration: overline #4d9470">
                            Subrayad
                        </h3>
                        <p class="nuevafuente parrafo-movil" style="color: black; font-weight: 300; font-size: 18px">
                            El Gran Edén, Paraíso escondido; cuenta con un paisaje de gran
                            belleza, buena gastronomía y clima excepcional. Ubicado en el
                            distrito de Curgos, provincia de Sánchez Carrión en el
                            departamento de La Libertad. <br />
                        </p>
                        <p class="nuevafuente2 parrafo-movil"
                            style="color: black; font-weight: 300; font-size: 18px;">
                            Descubre nuestro refugio natural!
                        </p>
                    </div>-->
            <div class="horizontal-booking-form">
                <div class="container">
                    <div class="inner box-shadow-007">
                        <div id="booking-notification" class="notification"></div>
                        <form action="{{ route('reserva.store') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Identificación
                                            <a href="#" title="Tu Nombre" data-toggle="popover" data-placement="top"
                                                data-trigger="hover" data-content="Por favor, escriba su nombre y apellido">
                                                <i class="fa fa-info-circle"></i>
                                            </a>
                                        </label>
                                        <input class="form-control blanco" name="nombres" type="text" data-trigger="hover"
                                            placeholder="Nombres y apellidos" />
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>N° de móvil
                                            <a href="#" title="Tu móvil" data-toggle="popover" data-placement="top"
                                                data-trigger="hover" data-content="Porfavor escribe tu número de móvil">
                                                <i class="fa fa-info-circle"></i>
                                            </a>
                                        </label>
                                        <input class="form-control blanco" name="correo" type="number" placeholder="Móvil"
                                            style="color: white" />
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Servicios
                                            <a href="#" title="Tipo de Habitación" data-toggle="popover"
                                                data-placement="top" data-trigger="hover"
                                                data-content="Por favor Selecciona el tipo de habitación">
                                                <i class="fa fa-info-circle"></i>
                                            </a>
                                        </label>
                                        <select class="form-control" name="servicios" title="Tipo de Habitación"
                                            data-header="Habitación">
                                            <option value="Hab. Estándar">Hab. Estándar</option>
                                            <option value="Hab. Doble">Hab. Doble</option>
                                            <option value="Hab. Matrimonial">Hab. Matrimonial</option>
                                            <option value="Hab. Matrimonial Premiun">
                                                Hab. Matrimonial Premiun
                                            </option>
                                            <option value="Hab. Super Vip">Hab. Super Vip</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Check-in/out
                                            <a href="#" title="Check-In / Check-Out" data-toggle="popover"
                                                data-placement="top" data-trigger="hover"
                                                data-content="Por favor selecciona la hora de salida y la hora de entrada">
                                                <i class="fa fa-info-circle"></i>
                                            </a>
                                        </label>
                                        <input type="text" class="datepicker form-control" name="fecha_entrada"
                                            placeholder="Salida y Entrada" readonly="readonly"
                                            style="color: white !important" />
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Huéspedes
                                            <a href="#" title="Invitados" data-toggle="popover" data-placement="top"
                                                data-trigger="hover"
                                                data-content="Por favor seleccione entre adultos o niños">
                                                <i class="fa fa-info-circle"></i>
                                            </a>
                                        </label>
                                        <div class="panel-dropdown">
                                            <div class="form-control guestspicker" style="color: white !important">
                                                Huéspedes <span class="gueststotal"></span>
                                            </div>
                                            <div class="panel-dropdown-content" style="background: white !important">
                                                <div class="guests-buttons">
                                                    <label style="color: #afafaf !important">Adultos
                                                        <a href="#" title="" data-toggle="popover" data-placement="top"
                                                            data-trigger="hover" data-content="18 a más años"
                                                            data-original-title="Adultos">
                                                            <i class="fa fa-info-circle"></i>
                                                        </a>
                                                    </label>
                                                    <div class="guests-button">
                                                        <div class="minus"></div>
                                                        <input type="text" name="cantidad_adultos" class="booking-guests"
                                                            value="0" />
                                                        <div class="plus"></div>
                                                    </div>
                                                </div>
                                                <div class="guests-buttons">
                                                    <label style="color: #afafaf !important">Niños
                                                        <a href="#" title="" data-toggle="popover" data-placement="top"
                                                            data-trigger="hover" data-content="Menor a 18 años"
                                                            data-original-title="Niños">
                                                            <i class="fa fa-info-circle"></i>
                                                        </a>
                                                    </label>
                                                    <div class="guests-button">
                                                        <div class="minus"></div>
                                                        <input type="text" name="cantidad_ninos" class="booking-guests"
                                                            value="0" />
                                                        <div class="plus"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-book">RESERVAR</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    @include('flash::message')
                </div>
            </div>
        </div>
        <br />

        <section class="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="shop-item animated fadeInUp wow"
              data-wow-offset="30"
              data-wow-delay=".5s">
                            <img src="{{ 'web/images/web/Paisaje06.jpg' }}" class="img-fluid" alt="Image"
                                style="width: 590px" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 padtop-movil padleft-movil" style="padding-top: 40px; padding-left: 30px">
                        <h1 class="nuevafuente titulo-movil" style="color: #026633; font-weight: 300; font-size: 50px">
                            El Edén existe!
                        </h1>
                        <h3 class="nuevafuente subtitulo-movil"
                            style="color: black; font-weight: 600; font-size: 20px; padding-bottom: 15px; letter-spacing: 3px;
                        ">
                            Hacemos que su experiencia sea única
                        </h3>
                        <h3 class="texto-centrar" style="color: white; text-decoration: overline #4d9470">
                            Subrayad
                        </h3>
                        <p class="nuevafuente parrafo-movil" style="color: black; font-weight: 300; font-size: 18px">
                            El Gran Edén, Paraíso escondido; cuenta con un paisaje de gran
                            belleza, buena gastronomía y clima excepcional. Ubicado en el
                            distrito de Curgos, provincia de Sánchez Carrión en el
                            departamento de La Libertad. <br />
                        </p>
                        <p class="nuevafuente2 parrafo-movil"
                            style="color: black; font-weight: 300; font-size: 18px;">
                            Descubre nuestro refugio natural!
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="news gray" style="padding: 70px">
            <div class="container">
                <div class="section-title" style="text-align: center">
                    <h1 class="titulo-movil" style="color: #026633; font-weight: 300; font-size: 50px">
                        Habitaciones
                    </h1>
                    <h3 style="color: #f5f3f0; text-decoration: overline #4d9470">
                        Subrayado
                    </h3>
                    <h3 class="nuevafuente subtitulo2-movil"
                        style="color: black; font-weight: 600; font-size: 20px; padding-bottom: 15px; letter-spacing: 3px; line-height: 0;">
                        íntimo en las montañas
                    </h3>
                </div>

                <div class="row">
                    <div class="col-md-4" style="padding-bottom: 30px">
                        <div class="shop-item fadeInUp">
                            <figure class="color-overlay-hover">
                                <a href="/habitaciones">
                                    <img src="{{ asset('web/images/rooms/single/single1.jpg') }}" class="img-fluid"
                                        alt="Image"
                                        style="
                                                                                                                                                                                                                                                                                                                                                        width: auto;
                                                                                                                                                                                                                                                                                                                                                        height: 277.5px;
                                                                                                                                                                                                                                                                                                                                                        background-color: silver;
                                                                                                                                                                                                                                                                                                                                                      " />
                                </a>
                            </figure>
                            <div class="product-details" style="text-align: left; padding-top: 30px">
                                <h1 class="h11"
                                    style="
                                                                                                                                                                                                                                                                                                                                                      color: #4d9470;
                                                                                                                                                                                                                                                                                                                                                      font-weight: 600;
                                                                                                                                                                                                                                                                                                                                                      font-size: 24px;
                                                                                                                                                                                                                                                                                                                                                      padding-bottom: 10px;
                                                                                                                                                                                                                                                                                                                                                    ">
                                    Hab. Estándar
                                </h1>
                                <h3 style="color: white; text-decoration: overline #4d9470">
                                    Subrayado large large la
                                </h3>
                                <div class="row">
                                    <div class="col-5" style="padding-top: 10px">
                                        <h3 class="nuevafuente" style="color: black; font-weight: 600; font-size: 24px">
                                            S/ 50
                                        </h3>
                                    </div>
                                    <div class="col-7" style="text-align: right">
                                        <a href="/habitaciones"><button type="submit" class="btn btn-book">
                                                Ver Más
                                            </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="shop-item animated fadeInUp">
                            <figure class="color-overlay-hover">
                                <a href="/habitaciones02">
                                    <img src="{{ 'web/images/rooms/double/double.jpg' }}" class="img-fluid"
                                        alt="Image"
                                        style="
                                                                                                                                                                                                                                                                                                                                                        width: auto;
                                                                                                                                                                                                                                                                                                                                                        height: 277.5px;
                                                                                                                                                                                                                                                                                                                                                        background-color: silver;
                                                                                                                                                                                                                                                                                                                                                      " />
                                </a>
                            </figure>
                            <div class="product-details" style="text-align: left; padding-top: 30px">
                                <h1 class="h11"
                                    style="
                                                                                                                                                                                                                                                                                                                                                      color: #4d9470;
                                                                                                                                                                                                                                                                                                                                                      font-weight: 600;
                                                                                                                                                                                                                                                                                                                                                      font-size: 24px;
                                                                                                                                                                                                                                                                                                                                                      padding-bottom: 10px;
                                                                                                                                                                                                                                                                                                                                                    ">
                                    Hab. Doble
                                </h1>
                                <h3 style="color: white; text-decoration: overline #4d9470">
                                    Subrayado large large la
                                </h3>
                                <div class="row">
                                    <div class="col-5" style="padding-top: 10px">
                                        <h3 class="nuevafuente" style="color: black; font-weight: 600; font-size: 24px">
                                            S/ 100
                                        </h3>
                                    </div>
                                    <div class="col-7" style="text-align: right">
                                        <a href="/habitaciones02"><button type="submit" class="btn btn-book">
                                                Ver Más
                                            </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="shop-item animated fadeInUp">
                            <figure class="color-overlay-hover">
                                <a href="/habitaciones03">
                                    <img src="{{ 'web/images/rooms/family/family.jpg' }}" class="img-fluid"
                                        alt="Image"
                                        style="
                                                                                                                                                                                                                                                                                                                                                        width: auto;
                                                                                                                                                                                                                                                                                                                                                        height: 277.5px;
                                                                                                                                                                                                                                                                                                                                                        background-color: silver;
                                                                                                                                                                                                                                                                                                                                                      " />
                                </a>
                            </figure>
                            <div class="product-details" style="text-align: left; padding-top: 30px">
                                <h1 class="h11"
                                    style="
                                                                                                                                                                                                                                                                                                                                                      color: #4d9470;
                                                                                                                                                                                                                                                                                                                                                      font-weight: 600;
                                                                                                                                                                                                                                                                                                                                                      font-size: 24px;
                                                                                                                                                                                                                                                                                                                                                      padding-bottom: 10px;
                                                                                                                                                                                                                                                                                                                                                    ">
                                    Hab. Matrimonial
                                </h1>
                                <h3 style="color: white; text-decoration: overline #4d9470">
                                    Subrayado large large la
                                </h3>
                                <div class="row">
                                    <div class="col-5" style="padding-top: 10px">
                                        <h3 class="nuevafuente" style="color: black; font-weight: 600; font-size: 24px">
                                            S/ 80
                                        </h3>
                                    </div>
                                    <div class="col-7" style="text-align: right">
                                        <a href="/habitaciones03"><button type="submit" class="btn btn-book">
                                                Ver Más
                                            </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="shop-item animated fadeInUp">
                            <figure class="color-overlay-hover">
                                <a href="/habitaciones04">
                                    <img src="{{ 'web/images/rooms/king/king.jpg' }}" class="img-fluid" alt="Image"
                                        style="
                                                                                                                                                                                                                                                                                                                                                        width: auto;
                                                                                                                                                                                                                                                                                                                                                        height: 277.5px;
                                                                                                                                                                                                                                                                                                                                                        background-color: silver;
                                                                                                                                                                                                                                                                                                                                                      " />
                                </a>
                            </figure>
                            <div class="product-details" style="text-align: left; padding-top: 20px">
                                <h1 class="h11"
                                    style="
                                                                                                                                                                                                                                                                                                                                                      color: #4d9470;
                                                                                                                                                                                                                                                                                                                                                      font-weight: 600;
                                                                                                                                                                                                                                                                                                                                                      font-size: 24px;
                                                                                                                                                                                                                                                                                                                                                      padding-bottom: 10px;
                                                                                                                                                                                                                                                                                                                                                      line-height: 1.2;
                                                                                                                                                                                                                                                                                                                                                    ">
                                    Hab. Matrimonial <br />
                                    Premiun
                                </h1>
                                <h3 style="color: white; text-decoration: overline #4d9470">
                                    Subrayado large large la
                                </h3>
                                <div class="row">
                                    <div class="col-5" style="padding-top: 10px">
                                        <h3 class="nuevafuente" style="color: black; font-weight: 600; font-size: 24px">
                                            S/ 110
                                        </h3>
                                    </div>
                                    <div class="col-7" style="text-align: right">
                                        <a href="/habitaciones04"><button type="submit" class="btn btn-book">
                                                Ver Más
                                            </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="shop-item animated fadeInUp">
                            <figure class="color-overlay-hover">
                                <a href="/habitaciones05">
                                    <img src="{{ asset('web/images/rooms/king/super.jpg') }}" class="img-fluid"
                                        alt="Image"
                                        style="
                                                                                                                                                                                                                                                                                                                                                        width: auto;
                                                                                                                                                                                                                                                                                                                                                        height: 277.5px;
                                                                                                                                                                                                                                                                                                                                                        background-color: silver;
                                                                                                                                                                                                                                                                                                                                                      " />
                                </a>
                            </figure>
                            <div class="product-details" style="text-align: left; padding-top: 20px">
                                <h1 class="h11"
                                    style="
                                                                                                                                                                                                                                                                                                                                                      color: #4d9470;
                                                                                                                                                                                                                                                                                                                                                      font-weight: 600;
                                                                                                                                                                                                                                                                                                                                                      font-size: 24px;
                                                                                                                                                                                                                                                                                                                                                      padding-bottom: 10px;
                                                                                                                                                                                                                                                                                                                                                      line-height: 1.2;
                                                                                                                                                                                                                                                                                                                                                    ">
                                    Hab. Súper <br />
                                    Vip
                                </h1>
                                <h3 style="color: white; text-decoration: overline #4d9470">
                                    Subrayado large large la
                                </h3>
                                <div class="row">
                                    <div class="col-5" style="padding-top: 10px">
                                        <h3 class="nuevafuente" style="color: black; font-weight: 600; font-size: 24px">
                                            S/ 120
                                        </h3>
                                    </div>
                                    <div class="col-7" style="text-align: right">
                                        <a href="/habitaciones05"><button type="submit" class="btn btn-book">
                                                Ver Más
                                            </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="gallery-page oculto">
            <div class="container">
                <div class="section-title" style="text-align: center">
                    <h1 style="color: #026633; font-weight: 300; font-size: 35px">
                        Servicios
                    </h1>
                    <h3 style="color: white; text-decoration: overline #4d9470">
                        Subrayado
                    </h3>
                    <h3 class="nuevafuente"
                        style="
                                                                                                                                                                                                                                                                                                                                                                        color: black;
                                                                                                                                                                                                                                                                                                                                                                        font-weight: 600;
                                                                                                                                                                                                                                                                                                                                                                        font-size: 15px;
                                                                                                                                                                                                                                                                                                                                                                        padding-bottom: 15px;
                                                                                                                                                                                                                                                                                                                                                                        letter-spacing: 3px;
                                                                                                                                                                                                                                                                                                                                                                        line-height: 0;
                                                                                                                                                                                                                                                                                                                                                                      ">
                        Un mundo nuevo, descúbrelo
                    </h3>
                    <!-- <p class="section-subtitle">Check out our image gallery</p> -->
                </div>
                <div class="row mov">
                    <a href="#">
                        <img src="{{ asset('web/images/web/servicio01.png') }}" alt="Image"
                            style="width: 172px; padding: 10px" />
                    </a>

                    <a href="#">
                        <img src="{{ asset('web/images/web/servicio02.png') }}" alt="Image"
                            style="width: 171px; padding: 10px" />
                    </a>

                    <a href="#">
                        <img src="{{ asset('web/images/web/servicio03.png') }}" alt="Image"
                            style="width: 171px; padding: 10px" />
                    </a>

                    <a href="#">
                        <img src="{{ asset('web/images/web/servicio04.png') }}" alt="Image"
                            style="width: 171px; padding: 10px" />
                    </a>

                    <a href="#">
                        <img src="{{ asset('web/images/web/servicio05.png') }}" alt="Image"
                            style="width: 171px; padding: 10px" />
                    </a>

                    <a href="#">
                        <img src="{{ asset('web/images/web/servicio06.png') }}" alt="Image"
                            style="width: 171px; padding: 10px" />
                    </a>

                    <a href="#">
                        <img src="{{ asset('web/images/web/servicio07.png') }}" alt="Image"
                            style="width: 172px; padding: 10px" />
                    </a>
                </div>
            </div>
        </section>

        <section class="gallery-page" style="padding-top: 0px !important">
            <div class="container">
                <div class="section-title" style="text-align: center">
                    <h1 class="titulo-movil padtop20-movil" style="color: #026633; font-weight: 300; font-size: 50px">
                        Instalaciones
                    </h1>
                    <h3 style="color: white; text-decoration: overline #4d9470">
                        Subrayado
                    </h3>
                    <h3 class="nuevafuente subtitulo2-movil"
                        style="
                                                                                                                                                                                                                                                                                                                                                                        color: black;
                                                                                                                                                                                                                                                                                                                                                                        font-weight: 600;
                                                                                                                                                                                                                                                                                                                                                                        font-size: 20px;
                                                                                                                                                                                                                                                                                                                                                                        padding-bottom: 15px;
                                                                                                                                                                                                                                                                                                                                                                        letter-spacing: 3px;
                                                                                                                                                                                                                                                                                                                                                                        line-height: 0;
                                                                                                                                                                                                                                                                                                                                                                      ">
                        Ingresa a nuestro mundo
                    </h3>
                    <!-- <p class="section-subtitle">Check out our image gallery</p> -->
                </div>
                <div class="grid image-gallery row">
                    <div class="gallery-item col-12 col-md-3 juntos juntos-movil">
                        <figure class="gradient-overlay">
                            <a href="{{ asset('web/images/web/Aguas Termales.jpg') }}">
                                <img src="{{ asset('web/images/web/Aguas Termales.jpg') }}" class="img-fluid im-movil"
                                    alt="Image" style="height: 399.92px; border-radius: 0px !important" />
                            </a>
                            <figcaption class="centrarfigura">Aguas termales</figcaption>
                        </figure>
                    </div>

                    <div class="gallery-item col-12 col-md-3 juntos juntos-movil">
                        <figure class="gradient-overlay">
                            <a href="{{ asset('web/images/web/Restaurante.jpg') }}">
                                <img src="{{ asset('web/images/web/Restaurante.jpg') }}" class="img-fluid im-movil"
                                    alt="Image" style="border-radius: 0px !important" />
                            </a>
                            <figcaption class="centrarfigura">Restaurante</figcaption>
                        </figure>
                    </div>

                    <div class="gallery-item col-12 col-md-3 juntos juntos-movil">
                        <figure class="gradient-overlay">
                            <a href="{{ asset('web/images/web/Piscina.jpg') }}">
                                <img src="{{ asset('web/images/web/Piscina.jpg') }}" class="img-fluid im-movil"
                                    alt="Image" style="height: 399.92px; border-radius: 0px !important" />
                            </a>
                            <figcaption class="centrarfigura">Piscina</figcaption>
                        </figure>
                    </div>

                    <div class="gallery-item col-12 col-md-3 juntos juntos-movil">
                        <figure class="gradient-overlay">
                            <a href="{{ asset('web/images/web/Discoteca.jpg') }}">
                                <img src="{{ asset('web/images/web/Discoteca.jpg') }}" class="img-fluid im-movil"
                                    alt="Image" style="border-radius: 0px !important" />
                            </a>
                            <figcaption class="centrarfigura">Discoteca</figcaption>
                        </figure>
                    </div>

                    <div class="gallery-item col-12 col-md-3 juntos juntos-movil" style="top: 400px ">
                        <figure class="gradient-overlay">
                            <a href="{{ asset('web/images/web/Campo.jpg') }}">
                                <img src="{{ asset('web/images/web/Campo.jpg') }}" class="img-fluid im-movil"
                                    alt="Image" style="border-radius: 0px !important" />
                            </a>
                            <figcaption class="centrarfigura">Campo deportivo</figcaption>
                        </figure>
                    </div>

                    <div class="gallery-item col-12 col-md-3 juntos juntos-movil">
                        <figure class="gradient-overlay">
                            <a href="{{ asset('web/images/web/Auditorio.jpg') }}">
                                <img src="{{ asset('web/images/web/Auditorio.jpg') }}" class="img-fluid im-movil"
                                    alt="Image" style="border-radius: 0px !important" />
                            </a>
                            <figcaption class="centrarfigura">Auditorio</figcaption>
                        </figure>
                    </div>

                    <div class="gallery-item col-12 col-md-3 juntos juntos-movil">
                        <figure class="gradient-overlay">
                            <a href="{{ asset('web/images/web/Terraza.jpg') }}">
                                <img src="{{ asset('web/images/web/Terraza.jpg') }}" class="img-fluid im-movil"
                                    alt="Image" style="height: 399.92px; border-radius: 0px !important" />
                            </a>
                            <figcaption class="centrarfigura">Terraza</figcaption>
                        </figure>
                    </div>

                    <div class="gallery-item col-12 col-md-3 juntos juntos-movil">
                        <figure class="gradient-overlay">
                            <a href="{{ asset('web/images/web/Karaoke.jpg') }}">
                                <img src="{{ asset('web/images/web/Karaoke.jpg') }}" class="img-fluid im-movil"
                                    alt="Image" style="height: 399.92px; border-radius: 0px !important" />
                            </a>
                            <figcaption class="centrarfigura">Karaoke</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section>
@endsection
@section('scripts')
    <script>
        $('#inicio').addClass("active");
        $('#habitaciones').removeClass("active");
        $('#instalaciones').removeClass("active");
        $('#contactenos').removeClass("active");

        const div = document.getElementById('slider-movil'); 
        const divv = document.getElementById('slider-movill'); 
        function updateDataY() {
        if (window.innerWidth <= 480) { 
            div.setAttribute('data-y', '270'); 
            divv.setAttribute('data-y', '270');
        } else {
            div.setAttribute('data-y', '310'); 
            divv.setAttribute('data-y', '310'); 
        }
        }

        window.addEventListener('resize', updateDataY);
        updateDataY();
    </script>
@endsection
