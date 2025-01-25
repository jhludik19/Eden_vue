<template>
    <div class="page-title gradient-overlay op5" style="
                                                  background: url('web/images/web/breadcrumb.jpg');
                                                  background-repeat: no-repeat;
                                                  background-size: cover;
                                                ">
        <div class="container">
            <div class="inner padtop55-movil padleft30-movil" style="padding-top:70px;padding-bottom:55px;">
                <h1 class="nuevafuente2">Habitaciones</h1>
                <div class="room-details-price nuevafuente oculto">
                    S/ 100 / Noche
                </div>
                <ol class="breadcrumb">
                    <li>
                        <a href="/">Inicio</a>
                    </li>
                    <li>
                        <a href="/habitaciones">Habitaciones</a>
                    </li>
                    <li>Habitación Doble</li>
                </ol>
            </div>
        </div>
    </div>

    <main class="room padtop-movil padbot-movil" style="padding-bottom: 50px; padding-top:50px">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 oculto">
                    <div class="sidebar">
                        <aside class="widget noborder">
                            <div class="vertical-booking-form">
                                <div id="booking-notification" class="notification"></div>
                                <h3 class="form-title oculto" style="text-align:left;padding-left:30px">Habitación Doble
                                </h3>
                                <div class="inner formulario-movil">
                                    <form action="reserva.store" method="POST"
                                        enctype="multipart/form-data">
                                      
                                        <input type="text" value="Hab. Doble" name="servicios" style="display: none" />
                                        <div class="form-group">
                                            <input class="form-control blanco" name="nombres" type="text"
                                                data-trigger="hover" placeholder="Nombre y apellidos" />
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control blanco" name="correo" type="number"
                                                inputmode="numeric" placeholder="N° de móvil" />
                                        </div>

                                        <div class="form-group">
                                            <div class="form_date">
                                                <input type="text" class="datepicker form-control" name="fecha_entrada"
                                                    placeholder="Chek-in/out" readonly
                                                    style="color: white" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="panel-dropdown">
                                                <div class="form-control guestspicker" style="color: white">
                                                    Huéspedes <span class="gueststotal"></span>
                                                </div>
                                                <div class="panel-dropdown-content">
                                                    <div class="guests-buttons">
                                                        <label>Adultos
                                                            <a href="#" title="" data-toggle="popover"
                                                                data-placement="top" data-trigger="hover"
                                                                data-content="18+ years" data-original-title="Adults">
                                                                <i class="fa fa-info-circle"></i>
                                                            </a>
                                                        </label>
                                                        <div class="guests-button">
                                                            <div class="minus"></div>
                                                            <input type="text" name="cantidad_adultos"
                                                                class="booking-guests" value="0" />
                                                            <div class="plus"></div>
                                                        </div>
                                                    </div>
                                                    <div class="guests-buttons">
                                                        <label>Niños
                                                            <a href="#" title="" data-toggle="popover"
                                                                data-placement="top" data-trigger="hover"
                                                                data-content="Under 18 years"
                                                                data-original-title="Children">
                                                                <i class="fa fa-info-circle"></i>
                                                            </a>
                                                        </label>
                                                        <div class="guests-button">
                                                            <div class="minus"></div>
                                                            <input type="text" name="cantidad_ninos"
                                                                class="booking-guests" value="0" />
                                                            <div class="plus"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-fw mt20 mb20">
                                            RESERVAR
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </aside>

                        <aside class="widget widget-help oculto" style="padding-left:30px;background:#74BC21">
                            <h1 class="nuevafuente" style="
                                                                color: white;
                                                                font-weight: 300;
                                                                font-size: 27px;
                                                                text-align: left;
                                                              ">
                                Necesitas <br> ayuda?
                            </h1>
                            <h3 style="color: #74BC21; text-decoration: overline white;line-height:3;font-size:10px">
                                Subrayad
                            </h3>
                            <p class="nuevafuente3" style="color:black;line-height:0px !important">
                                ¡Contáctate con nosotros!
                            </p>
                            <div class="phone" style="text-align:left;">
                                <a href="" style="color: white;letter-spacing:2px"> (51) 973451604 </a> <br>
                                <a href="" style="color: white;letter-spacing:2px"> (51) 959654261 </a>
                            </div>
                            <div class="email">
                                <a class="nuevafuente" style="text-align:left !important;"><span
                                        style="font-size: 14px;color: white;"><i class="fa fa-envelope"></i>
                                        hotelgraneden@gmail.com</span></a>
                            </div>
                        </aside>

                    </div>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="section-title sm vista" style="text-align: center; display:none;">
                        <h1 class="titulo-movil padtop20-movil"
                            style="color: #026633; font-weight: 300; font-size: 50px;text-align:center;">
                            Hab. doble
                        </h1>
                        <h3 style="color: white; text-decoration: overline #4d9470;text-align:center">
                            Subrayado
                        </h3>
                        <h3 class="nuevafuente subtitulo2-movil" style="
                                                        color: black;
                                                        font-weight: 600;
                                                        font-size: 20px;
                                                        padding-bottom: 15px;
                                                        letter-spacing:1px;
                                                        line-height:0;
                                                      ">
                            La habitación doble incluye:
                        </h3>
                    </div>
                    <div class="room-slider">
                        <div id="room-main-image" class="owl-carousel image-gallery">
                            <div class="item">
                                <figure class="gradient-overlay-hover image-icon">
                                    <a href="web/images/rooms/single/Hab_Doble01.jpg">
                                        <img class="img-fluid"
                                            src="web/images/rooms/single/Hab_Doble01.jpg" alt="Image" />
                                    </a>
                                </figure>
                            </div>

                            <div class="item">
                                <figure class="gradient-overlay-hover image-icon">
                                    <a href="web/images/rooms/single/Hab_Doble02.jpg">
                                        <img class="img-fluid"
                                            src="web/images/rooms/single/Hab_Doble02.jpg" alt="Image" />
                                    </a>
                                </figure>
                            </div>


                        </div>
                        <div id="room-thumbs" class="room-thumbs owl-carousel">
                            <div class="item">
                                <img class="img-fluid" src="web/images/rooms/single/Hab_Doble01.jpg"
                                    alt="Image" />
                            </div>

                            <div class="item">
                                <img class="img-fluid" src="web/images/rooms/single/Hab_Doble02.jpg"
                                    alt="Image" />
                            </div>


                        </div>
                    </div>
                    <div class="section-title sm oculto" style="text-align:center;">
                        <h1 class="titulo-movil padtop20-movil"
                            style="color: #026633; font-weight: 300; font-size: 50px;text-align:center;">
                            Hab. doble
                        </h1>
                        <h3 style="color: white; text-decoration: overline #4d9470;text-align:center">
                            Subrayado
                        </h3>
                        <h3 class="nuevafuente subtitulo2-movil" style="
                                                        color: black;
                                                        font-weight: 600;
                                                        font-size: 20px;
                                                        padding-bottom: 15px;
                                                        letter-spacing:1px;
                                                        line-height:0;
                                                      ">
                            La habitación doble incluye:
                        </h3>
                    </div>
                    <div class="room-services-list">
                        <div class="row">
                            <div class="col-6 col-md-4">
                                <ul class="list-unstyled">
                                    <li class="nuevafuente2" style="line-height: 0">
                                        <i class="fa fa-check"></i>N° Huéspedes : 2
                                    </li>
                                    <li class="nuevafuente2">
                                        <i class="fa fa-check"></i>Televisión
                                    </li>
                                    <li class="nuevafuente2" style="line-height: 0">
                                        <i class="fa fa-check"></i>WiFi libre
                                    </li>
                                    <li class="no nuevafuente2">
                                        <i class="fa fa-times"></i>Friobar
                                    </li>
                                    <li class="nuevafuente2 vista" style="line-height: 0; display:none;">
                                        <i class="fa fa-check"></i>Tamaño: 20 m2
                                    </li>
                                    <li class="no nuevafuente2 vista" style="line-height: 0; display:none;">
                                        <i class="fa fa-times"></i>Mueblería
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 col-md-4">
                                <ul class="list-unstyled">
                                    <li class="nuevafuente2 oculto" style="line-height: 0">
                                        <i class="fa fa-check"></i>Tamaño: 22 m2
                                    </li>
                                    <li class="no nuevafuente2 oculto">
                                        <i class="fa fa-times"></i>Mueblería
                                    </li>
                                    <li class="nuevafuente2 texto-separado" style="line-height: 0">
                                        <i class="fa fa-check"></i>Aire acondicionado
                                    </li>
                                    <li class="nuevafuente2">
                                        <i class="fa fa-check"></i>Baño privado
                                    </li>
                                    <li class="nuevafuente2 vista" style="line-height: 0; display:none;">
                                        <i class="fa fa-check"></i>N° Cama: 1
                                    </li>
                                    <li class="no nuevafuente2 vista" style="line-height: 0; display:none;">
                                        <i class="fa fa-times"></i>Tina
                                    </li>
                                    <li class="nuevafuente2 vista" style="line-height: 0; display:none;">
                                        <i class="fa fa-check"></i>Ducha con agua
                                    </li>
                                    <li class="nuevafuente2  vista" style="line-height: 0; display:none;">
                                        <i class="fa fa-check" style="color: transparent"></i>fría y caliente
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 col-md-4">
                                <ul class="list-unstyled">
                                    <li class="nuevafuente2 oculto" style="line-height: 0">
                                        <i class="fa fa-check"></i>N° Cama: 1
                                    </li>
                                    <li class="no nuevafuente2 oculto">
                                        <i class="fa fa-times"></i>Tina
                                    </li>
                                    <li class="nuevafuente2 texto-separado oculto" style="line-height: 0">
                                        <i class="fa fa-check"></i>Ducha con agua fría y
                                    </li>
                                    <li class="nuevafuente2 texto-separado oculto" style="line-height: 0">
                                        <i class="fa fa-check" style="color: transparent"></i>caliente
                                    </li>
                                </ul>
                            </div>
                        </div><br>
                        <p style="text-align: center" class="oculto">
                            <a href="#">
                                <img src="web/images/web/servicio01.png" alt="Image"
                                    style="width: 120px" />
                            </a>

                            <a href="#">
                                <img src="web/images/web/servicio02.png" alt="Image"
                                    style="width: 120px" />
                            </a>

                            <a href="#">
                                <img src="web/images/web/servicio03.png" alt="Image"
                                    style="width: 120px" />
                            </a>

                            <a href="#">
                                <img src="web/images/web/servicio04.png" alt="Image"
                                    style="width: 120px" />
                            </a>

                            <a href="#">
                                <img src="web/images/web/servicio05.png" alt="Image"
                                    style="width: 120px" />
                            </a>

                            <a href="#">
                                <img src="web/images/web/servicio06.png" alt="Image"
                                    style="width: 120px" />
                            </a>

                            <a href="#">
                                <img src="web/images/web/servicio07.png" alt="Image"
                                    style="width: 120px" />
                            </a>
                        </p>
                    </div>

                </div>
                <div class="col-lg-3 col-12 vista" style="display:none;">
                    <div class="sidebar martop-movil">
                        <aside class="widget noborder">
                            <div class="vertical-booking-form">
                                <div id="booking-notification" class="notification"></div>
                                <h3 class="form-title oculto" style="text-align:left;padding-left:30px">Habitación Doble
                                </h3>
                                <div class="inner formulario-movil">
                                    <form action="reserva.store" method="POST"
                                        enctype="multipart/form-data">
                                        
                                        <input type="text" value="Hab. Doble" name="servicios" style="display: none" />
                                        <div class="form-group">
                                            <input class="form-control blanco" name="nombres" type="text"
                                                data-trigger="hover" placeholder="Nombre y apellidos" />
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control blanco" name="correo" type="number"
                                                inputmode="numeric" placeholder="N° de móvil" />
                                        </div>

                                        <div class="form-group">
                                            <div class="form_date">
                                                <input type="text" class="datepicker form-control" name="fecha_entrada"
                                                    placeholder="Chek-in/out" readonly
                                                    style="color: white" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="panel-dropdown">
                                                <div class="form-control guestspicker" style="color: white">
                                                    Huéspedes <span class="gueststotal"></span>
                                                </div>
                                                <div class="panel-dropdown-content">
                                                    <div class="guests-buttons">
                                                        <label>Adultos
                                                            <a href="#" title="" data-toggle="popover"
                                                                data-placement="top" data-trigger="hover"
                                                                data-content="18+ years" data-original-title="Adults">
                                                                <i class="fa fa-info-circle"></i>
                                                            </a>
                                                        </label>
                                                        <div class="guests-button">
                                                            <div class="minus"></div>
                                                            <input type="text" name="cantidad_adultos"
                                                                class="booking-guests" value="0" />
                                                            <div class="plus"></div>
                                                        </div>
                                                    </div>
                                                    <div class="guests-buttons">
                                                        <label>Niños
                                                            <a href="#" title="" data-toggle="popover"
                                                                data-placement="top" data-trigger="hover"
                                                                data-content="Under 18 years"
                                                                data-original-title="Children">
                                                                <i class="fa fa-info-circle"></i>
                                                            </a>
                                                        </label>
                                                        <div class="guests-button">
                                                            <div class="minus"></div>
                                                            <input type="text" name="cantidad_ninos"
                                                                class="booking-guests" value="0" />
                                                            <div class="plus"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-fw mt20 mb20">
                                            RESERVAR
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </aside>

                        <aside class="widget widget-help oculto" style="padding-left:30px;background:#74BC21">
                            <h1 class="nuevafuente" style="
                                                                color: white;
                                                                font-weight: 300;
                                                                font-size: 27px;
                                                                text-align: left;
                                                              ">
                                Necesitas <br> ayuda?
                            </h1>
                            <h3 style="color: #74BC21; text-decoration: overline white;line-height:3;font-size:10px">
                                Subrayad
                            </h3>
                            <p class="nuevafuente3" style="color:black;line-height:0px !important">
                                ¡Contáctate con nosotros!
                            </p>
                            <div class="phone" style="text-align:left;">
                                <a href="" style="color: white;letter-spacing:2px"> (51) 973451604 </a> <br>
                                <a href="" style="color: white;letter-spacing:2px"> (51) 959654261 </a>
                            </div>
                            <div class="email">
                                <a class="nuevafuente" style="text-align:left !important;"><span
                                        style="font-size: 14px;color: white;"><i class="fa fa-envelope"></i>
                                        hotelgraneden@gmail.com</span></a>
                            </div>
                        </aside>

                    </div>
                </div>
            </div>
        </div>
    </main>
</template>