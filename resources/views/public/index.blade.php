@extends('components.public.matrix')

@section('css_improtados')
    <style>
        /* ------------------- */
        /* ---------- */
        .swiper-button-next:after {
            content: "" !important;
        }

        .swiper-button-next {
            background-color: #505977;
            background-image: url(../images/svg/next.svg);
            background-repeat: no-repeat;
            background-position: center;
            width: calc(var(--swiper-navigation-size) / 29 * 27) !important;
            height: 50px;
            border-radius: 50%;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            -o-border-radius: 50%;
            position: relative !important;
            transition: background-color 0.5s ease-in;
            -webkit-transition: background-color 0.5s ease-in;
            -moz-transition: background-color 0.5s ease-in;
            -ms-transition: background-color 0.5s ease-in;
            -o-transition: background-color 0.5s ease-in;
        }

        .swiper-button-next:hover {
            background-color: #393f53;
        }

        .swiper-button-prev:after {
            content: "" !important;
        }

        .swiper-button-prev {
            background-color: #eff1fb;
            background-image: url(../images/svg/previo.svg);
            background-repeat: no-repeat;
            background-position: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            -o-border-radius: 50%;
            position: relative !important;
            width: calc(var(--swiper-navigation-size) / 29 * 27) !important;
            transition: background-color 0.5s ease-in;
            -webkit-transition: background-color 0.5s ease-in;
            -moz-transition: background-color 0.5s ease-in;
            -ms-transition: background-color 0.5s ease-in;
            -o-transition: background-color 0.5s ease-in;
        }

        .swiper-button-prev:hover {
            background-color: #b0b2bd;
        }

        .buttonSliderServicios {
            display: flex !important;
            flex-direction: row-reverse;
            justify-content: start;
            gap: 2rem;
            height: 50px;
        }

        @media (min-width: 768px) {
            .buttonSliderServicios {
                flex-direction: row-reverse;
                justify-content: end;
            }
        }

        .swiper-button-lock {
            display: block !important;
        }

        /* ------ carrusel de logos ----- */

        .swiper-pagination-estadisticas.swiper-pagination-horizontal {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-pagination-estadisticas .swiper-pagination-bullet.swiper-pagination-bullet-active {
            background-color: transparent;
            background-image: url(../images/svg/point_white.svg);
            background-repeat: no-repeat;
            background-position: center;
            width: 20px;
            height: 20px;
        }

        .swiper-pagination-estadisticas .swiper-pagination-bullet {
            background-color: #eb5d2c;
            opacity: 1;
        }

        .swiper-pagination-estadisticas .swiper-pagination-bullet {
            background-color: white;
        }

        @media (min-width: 1024px) {
            .swiper-pagination-estadisticas.swiper-pagination-horizontal {
                display: none !important;
            }
        }

        /* ------ modal formulario------ */
        /* Estilo inicial del elemento */
        /* Estilo inicial del elemento */

        .blur-background {
            backdrop-filter: blur(5px);
        }

        /* --- dropdown tipo de servicios -- */
        .dropdown {
            height: fit-content;
            box-sizing: border-box;
            position: relative;
            /*  border-bottom: 1px solid white; */
            /* padding: 16px 0; */
        }

        .input-box {
            width: 100%;
            /* height: 40px; */
            box-sizing: border-box;
            outline: none;
            /*  border-radius: 2mm; */

            cursor: pointer;
            display: flex;
            align-items: center;
            flex-direction: row-reverse;
            justify-content: space-between;
            position: relative;


        }

        .input-box::before {
            content: "";
            display: block;
            width: 20px;
            height: 20px;
            background-image: url(../images/svg/chevron-down.svg);
        }

        .input-box.open::before {
            content: "";
            display: block;
            width: 20px;
            height: 20px;
            background-image: url(../images/svg/chevron-up.svg);
        }

        /* .input-box:empty::after {
                                          content: "";
                                          color: #96a1a6;
                                      } */

        .list {
            position: relative;
            /* absolute */
            top: 100%;
            left: 0;
            width: 100%;
            height: fit-content;
            background: #505977;
            margin-top: 10px;
            border-radius: 2mm;
            /* overflow: hidden; */
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-direction: column;
            max-height: 0;
            transition: 0.25s ease-out;
        }

        .list input {
            display: none;
        }

        .list label {
            display: flex;
            width: 100%;
            align-items: center;
            justify-content: flex-start;

            padding: 10px 15px;
            box-sizing: border-box;
            cursor: pointer;
            position: relative;
        }

        .list label .material-icons-outlined,
        .input-box .material-icons-outlined {
            margin-right: 5px;
        }

        .list label:hover {
            background: #393f53;
        }

        input:checked+label {
            color: white;
            background: #393f53;
        }

        .open {
            outline: none;
        }

        .title {
            margin-bottom: 10px;
        }

        .scroll-cursos::-webkit-scrollbar {
            width: 5px;
            background-color: #f1f1f1;
            border-radius: 1rem;
        }

        .scroll-cursos::-webkit-scrollbar-thumb {
            background-color: #393f53;
            border-radius: 1rem;
            -webkit-border-radius: 1rem;
            -moz-border-radius: 1rem;
            -ms-border-radius: 1rem;
            -o-border-radius: 1rem;
        }


        .swiper-wrapper-height {
            height: 1200px !important;
        }

        @media (min-width: 768px) {
            .swiper-wrapper-height {
                height: 1300px !important;
            }
        }

        @media (min-width: 1024px) {
            .swiper-wrapper-height {
                height: 1000px !important;
            }
        }

        .swiper-slide-flex {
            display: flex !important;
        }


        [type='text'],
        input:where(:not([type])),
        [type='email'],
        [type='tel'],
        textarea,
        select {
            border-top-width: 0px;
            border-right-width: 0px;
            border-bottom-width: 1px;
            border-left-width: 0px;
            border-color: white;

        }

        [type='text']:focus,
        input:where(:not([type])):focus,
        [type='email']:focus,
        [type='tel']:focus,
        select:focus {
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            border-bottom-color: rgb(255, 255, 255);
        }

        .bg__main {
            background-image: url({{ asset('/images/img/FondoMobile2_1.webp') }});
        }

        .bg__diferenciales-banner {
            background-image: url({{ asset('images/img/bg__diferenicales-mobile.webp') }});
        }

        .bg__listos-banner {
            background-image: url({{ asset('images/img/banner_3.webp') }});
        }

        @media (min-width:768px) {
            .bg__main {
                background-image: url({{ asset('/images/img/header_principal_1.webp') }});
                ;
            }

            .bg__diferenciales-banner {
                background-image: url({{ asset('images/img/diferenciales_banner.webp') }});
            }

            .bg__listos-banner {
                background-image: url({{ asset('images/img/banner_2.webp') }});
            }
        }

        .servicios_fit {
            font-family: "corbelregular";
            font-size: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;

        }

        .servicios_fit div:nth-child(2) div:nth-child(1) {
            padding: 24px 0
        }

        .servicios_fit div div:nth-child(2) {
            margin: 0px 24px 0 24px;
        }

        .servicios_fit ul {
            list-style-type: disc;
            padding-left: 25px;
        }

        @media (min-width:1280px) {
            .servicios_fit {
                font-size: 24px;
            }
        }
    </style>
@stop


@section('content')
    <main>
        <section class="bg__main bg-cover bg-center bg-no-repeat sm:w-full h-full pt-32 md:pt-96">
            <div class="w-11/12 mx-auto">
                <div class="w-full md:w-1/2">
                    <div class="flex flex-col justify-center items-center gap-10 md:py-10">
                        <div class="flex flex-col gap-5 pb-12 " data-aos="fade-up" data-aos-offset="150">
                            <h2 class="font-corbel_700 text-text36 xl:text-text48 text-textWhite ">
                                Brindamos soluciones Financieras para negocios decididos a ser
                                Líderes, Disruptivos y Resilientes
                            </h2>
                            <h2 class="font-corbel_400 text-text20 xl:text-text24 text-textWhite">
                                Somos Fit 2 Finance y ponemos a tu disposición nuestros
                                conocimientos y experiencia en <b>servicios contables</b> para
                                brindarle valor y asegurar la sostenibilidad de tu negocio.
                            </h2>
                        </div>
                        <div class="flex flex-col md:flex-row gap-10 w-full">
                            <a href="https://api.whatsapp.com/send?phone={{ $generales->whatsapp }}&text={{ $generales->mensaje_whatsapp }}"
                                class="bg-bgOrangeStrong py-3 md:py-2 px-10 font-corbel_700 text-textWhite text-text18 xl:text-text22 flex gap-2 w-auto justify-center items-center hover:bg-orange-500 md:duration-500">
                                <span> Cotizar </span>
                                <div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.40039 16.7992L7.77639 11.63L12.3844 16.0608L21.6004 7.19922M21.6004 7.19922H14.6884M21.6004 7.19922V13.8454"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </a>

                            <a href="#servicios"
                                class="bg-transparent py-3 md:py-2 px-10 font-corbel_700 text-textWhite text-text18 xl:text-text22 hover:bg-bgGrayStrong md:w-auto border-[1px] border-white text-center w-full md:duration-500">
                                Servicios
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end relative pt-16">
                <img src="{{ asset('images/img/foto-banner.webp') }}" alt="fit2finance" class="block md:hidden w-full">
            </div>
        </section>
        <section>
            <div class="swiper banner bg-bgOrangeStrong">
                <div class="swiper-wrapper text-textWhite pt-5 md:py-12" data-aos="fade-up" data-aos-offset="150">
                    <div class="swiper-slide py-5 px-5 lg:px-10">
                        <div class="flex flex-col gap-5 text-center">
                            <p class="font-corbel_700 text-text72 leading-none">+150</p>
                            <h2 class="font-corbel_700 text-[20px] md:text-text24">
                                Empresas Atendidas
                            </h2>
                            <p class="font-corbel_400 text-text18 xl:text-text20">
                                Hemos trabajado con más de 150 empresas en Perú.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide py-5 px-5 lg:px-10">
                        <div class="flex flex-col gap-5 text-center">
                            <p class="font-corbel_700 text-text72 leading-none">+100</p>
                            <h2 class="font-corbel_700 text-[20px] md:text-text24">
                                Empresas Felices
                            </h2>
                            <p class="font-corbel_400 text-text18 xl:text-text20">
                                Más de 100 empresas confían en nosotros y están satisfechas
                                con nuestros servicios.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide py-5 px-5 lg:px-10">
                        <div class="flex flex-col gap-5 text-center">
                            <p class="font-corbel_700 text-text72 leading-none">%99</p>
                            <h2 class="font-corbel_700 text-[20px] lg:text-text24">
                                Retención de Clientes
                            </h2>
                            <p class="font-corbel_400 text-text18 xl:text-text20">
                                El 99% de nuestros clientes continúan trabajando con nosotros
                                cada año.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide py-5 px-5 lg:px-10">
                        <div class="flex flex-col gap-5 text-center">
                            <p class="font-corbel_700 text-text72 leading-none">+100</p>
                            <h2 class="font-corbel_700 text-[20px] md:text-text24">
                                Empresas Felices
                            </h2>
                            <p class="font-corbel_400 text-text18 xl:text-text20">
                                Más de 100 empresas confían en nosotros y están satisfechas
                                con nuestros servicios.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination-estadisticas h-[80px]"></div>
            </div>
        </section>
        <section class="swiper slider w-11/12 mx-auto my-16" id="servicios">
            <div class="mb-12 flex flex-col gap-5 md:flex-row md:justify-between md:items-center">
                <div>
                    <h2 class="font-corbel_700 text-textGray text-text44 xl:text-text56 leading-none md:leading-tight my-5">
                        Servicios de Contabilidad Integral para su empresa
                    </h2>
                    <p class="font-corbel_400 text-textGray text-text20 xl:text-text24 text-justify">
                        Descubra cómo nuestros servicios contables pueden impulsar el
                        éxito financiero de su empresa. Desde la gestión completa de la
                        contabilidad hasta auditorías detalladas, estamos aquí para
                        ayudarte a cumplir tus metas empresariales.
                    </p>
                </div>

                <div class="buttonSliderServicios w-full">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

            <div class="swiper-wrapper" data-aos="fade-up" data-aos-offset="150">
                <!-- 1 -->

                @foreach ($service as $item)
                    <div class="swiper-slide swiper-slide-flex p-5" style="background-color:{{$item->color}} ">
                        <div class="flex flex-col justify-between w-full gap-10">
                            <div>
                                <div class="my-8">
                                    <img src="{{ asset($item->url_image . '/' . $item->name_image) }}"
                                        alt="outsourcing_financiero" />
                                </div>

                                <div class="text-textGray flex flex-col gap-5 w-full">
                                    <h2 class="font-corbel_700 text-text40 xl:text-text44 leading-none md:leading-tight">
                                        {{ $item->title }}
                                    </h2>
                                    <div class="servicios_fit">

                                        {!! $item->description !!}

                                    </div>

                                </div>
                            </div>
                            <div>
                                <a href="https://api.whatsapp.com/send?phone={{ $generales->whatsapp }}&text={{ $generales->mensaje_whatsapp }}"
                                    class="text-textOrange font-corbel_700 text-text24 xl:text-text28 flex justify-end items-center gap-2 underline">
                                    <span>Saber más </span>
                                    <div>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.40039 16.7992L7.77639 11.63L12.3844 16.0608L21.6004 7.19922M21.6004 7.19922H14.6884M21.6004 7.19922V13.8454"
                                                stroke="#E38533" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
        </section>
        <section class="bg-gradient-to-r from-[#505977] to-[#424962] my-24">
            <div class="2md:w-10/12 mx-auto" data-aos="fade-up" data-aos-offset="150">
                <div class="grid grid-cols-1 2md:grid-cols-2 mt-0 pb-12 2md:py-20 text-textWhite gap-10">
                    <div class="col-span-1 2md:col-span-2 order-2 2md:order-1 text-left 2md:text-center px-5 2md:px-0">
                        <h2 class="font-corbel_700 text-text40 xl:text-text56 mb-6 leading-none 2md:leading-tight">
                            Acerca de Nosotros
                        </h2>
                        <p class="font-corbel_400 text-text20 xl:text-text24 text-justify">
                            Fit 2 Finance es una plataforma de
                            <b>servicios financieros</b> compuesta por ejecutivos que
                            cuentan con más de 20 años en el ejercicio de la profesión
                            financiera tanto en las áreas de Inversiones como en las de
                            <b>Finanzas Corporativas</b>. A diferencia de las grandes
                            empresas de consultoría financiera en nuestro país, contamos con
                            un servicio personalizado y adecuado para cada empresa; además,
                            nos encargamos de optimizar los costos de la operación
                            financiera, maximizar la liquidez y rentabilidad de nuestros
                            clientes.
                        </p>
                    </div>
                    <div
                        class="col-span-1 2md:col-span-1 order-3 2md:order-2 flex flex-col justify-between gap-10 px-5 2md:px-0">

                        @foreach ($abouts as $about)
                            <div class="flex flex-col 2md:block gap-4">
                                <div>
                                    <h2
                                        class="font-corbel_700 text-text32 xl:text-text36 border-b-2 border-borderOrange inline-block">
                                        {{ $about->titulo }}
                                    </h2>
                                </div>

                                <p class="font-corbel_400 text-text20 xl:text-text24 text-justify">
                                    {{ $about->descripcion }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                    <div class="row-span-1 2md:col-span-1 order-1 2md:order-3">
                        <div class="flex justify-center items-center w-full h-full">
                            <img src="{{ asset('images/img/acerca_nosotros.webp') }}" alt="fit2finance"
                                class="w-full h-full hidden md:block">

                            <img src="{{ asset('images/img/acerca_nosotros_mobile.webp') }}" alt="fit2finance"
                                class="w-full h-full block md:hidden">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section data-aos="fade-up" data-aos-offset="150" class="my-24">
            <h2
                class="font-corbel_700 text-text32 xl:text-text40 text-textGray text-center my-12 leading-none md:leading-tight">
                Nuestros principales clientes
            </h2>

            <div class="swiper logosClientes">
                <div class="swiper-wrapper">

                    @foreach ($logos as $logo)
                        <div class="swiper-slide">
                            <div class="flex justify-center items-center">
                                {{--  <img src="{{ asset('images/img/clever.png') }}" alt="clever"> --}}
                                <img src="{{ asset($logo->url_image . '/' . $logo->name_image) }}" alt="clever">
                            </div>
                        </div>
                    @endforeach
                    
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <section class="bg__diferenciales-banner bg-cover bg-center bg-no-repeat sm:w-full h-full">
            <div class="w-11/12 mx-auto py-12 md:py-32">
                <h2
                    class="font-corbel_700 text-text40 xl:text-text60 text-textGray text-center leading-none md:leading-tight">
                    Ventajas diferenciales
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-24 my-16" data-aos="fade-up"
                    data-aos-offset="150">

                    @foreach ($benefit as $item)
                        <div class="flex gap-5">
                            <div class="flex justify-end items-start basis-3/12 ">
                                <img src="{{ asset($item->icono) }}" alt="">
                            </div>
                            <div class="text-textGray basis-9/12 flex flex-col gap-2">
                                <h3 class="font-corbel_700 text-text28 xl:text-text32 leading-none md:leading-tight">
                                    {{ $item->titulo }}
                                </h3>
                                <div class="font-corbel_400 text-text20 xl:text-text24">
                                    {!! $item->descripcion !!}
                                </div>
                                {{-- <p class="font-corbel_400 text-text20 xl:text-text24">
                                    {!! $item->descripcion !!}
                                </p> --}}
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <section class="w-11/12 mx-auto my-24" data-aos="fade-up" data-aos-offset="150">
            <div class="text-textGray text-center flex flex-col gap-10 w-full md:w-7/12 mx-auto">
                <h2 class="font-corbel_700 text-text40 xl:text-text52 leading-none md:leading-tight">
                    Alianza Estratégica con Sumatek: Potenciando tu Empresa con Odoo
                </h2>
                <div class="flex justify-center items-center">
                    <img src="{{ asset('images/img/odoo.webp') }}" alt="odoo">

                </div>
                <p class="font-corbel_400 text-text18 xl:text-text22">
                    Nos enorgullece ser socios de Sumatek, una empresa líder con sello
                    Odoo, la plataforma de gestión empresarial más avanzada. A través de
                    esta alianza, ofrecemos soluciones integrales que optimizan tus
                    procesos contables y potencian el crecimiento de tu empresa.
                    Descubre cómo nuestra asociación con Sumatek yudará a tu compañía a conseguir el éxito que esperas.
                </p>
            </div>
        </section>
        <section class="my-24">
            <div class="bg__listos-banner bg-cover bg-center bg-no-repeat sm:w-full h-full">
                <div class="w-11/12 mx-auto flex flex-col gap-10 md:flex-row justify-between items-center py-12"
                    data-aos="fade-up" data-aos-offset="150">
                    <div>
                        <h2
                            class="font-corbel_700 text-textWhiteWeak text-text32 xl:text-text36 leading-none md:leading-tight w-full md:w-8/12">
                            ¿Listo para llevar la contabilidad de tu empresa al siguiente
                            nivel?
                        </h2>
                    </div>

                    <div class="w-full md:w-auto">
                        <a href="https://api.whatsapp.com/send?phone={{ $generales->whatsapp }}&text={{ $generales->mensaje_whatsapp }}"
                            class="bg-bgOrangeStrong py-4 px-10 font-corbel_700 text-textWhite text-text18 xl:text-text22 flex gap-2 w-full justify-center items-center hover:bg-orange-500 md:duration-500">
                            <span> Cotizar </span>
                            <div>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.40039 16.7992L7.77639 11.63L12.3844 16.0608L21.6004 7.19922M21.6004 7.19922H14.6884M21.6004 7.19922V13.8454"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-11/12 mx-auto my-24" id="blog">
            <div class="flex flex-col gap-10" data-aos="fade-up" data-aos-offset="150">
                <div class="text-[#03164D] flex flex-col gap-10">
                    <h2 class="font-corbel_700 text-text48 xl:text-text52 leading-none md:leading-tight">
                        Bienvenido a nuestro blog de <b> contabilidad y finanzas para MYPES</b> en Perú
                    </h2>
                    <p class="font-corbel_400 text-text18 xl:text-text22 text-justify">
                        Nuestros artículos cuentan con la última información y consejos
                        prácticos sobre contabilidad, finanzas y
                        <b>gestión empresarial</b>. Manténgase actualizado con las últimas
                        tendencias y mejores prácticas en el mundo de las finanzas
                        corporativas y descubra cómo puede aplicarlas a su propio negocio.
                    </p>

                    <div class="flex">
                        <a href="{{ route('blog', 0) }}"
                            class="bg-[#505977] py-4 px-10 font-corbel_700 text-textWhite text-text18 xl:text-text22 flex gap-2 justify-center items-center">
                            <span> Ver más Artículos </span>
                            <div>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.40039 16.7992L7.77639 11.63L12.3844 16.0608L21.6004 7.19922M21.6004 7.19922H14.6884M21.6004 7.19922V13.8454"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="swiper blogs text-[#505977]">

                        <div class="swiper-wrapper" data-aos="fade-up" data-aos-offset="150">

                            @foreach ($blogs as $blog)
                                <div class="swiper-slide">
                                    <div class="flex flex-col gap-5">
                                        <div class="flex justify-center items-center">
                                            <img src="{{ asset($blog->url_image . '/' . $blog->name_image) }}"
                                                alt="blog" class="w-full">

                                        </div>
                                        <h2
                                            class="font-corbel_700 text-text32 xl:text-text36 leading-none md:leading-tight">
                                            {{ $blog->title }}
                                        </h2>
                                        <p class="font-corbel_400 text-text18 xl:text-text22 text-justify">
                                            {!! substr($blog->extracto, 0, 200) !!}...
                                        </p>

                                        <div>
                                            <a href="{{ route('publicacion', $blog->id) }}"
                                                class="font-corbel_700 text-text18 xl:text-text22 flex justify-start items-center gap-2 underline">
                                                <span>Leer más</span>
                                                <div>
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M2.40039 16.7992L7.77639 11.63L12.3844 16.0608L21.6004 7.19922M21.6004 7.19922H14.6884M21.6004 7.19922V13.8454"
                                                            stroke="#505977" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach



                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- corregir la imagen -->
        <section class="mt-24">
            <div class="grid grid-cols-1 lg:grid-cols-2" id="contacto">
                <div class="relative bg-[#505977]">
                    {{-- <img src="{{ asset('images/img/women_1.png') }}" alt="fit2finance" class="w-full h-full hidden md:block"> --}}

                    <img src="{{ asset('images/img/wome_3.webp') }}" alt="fit2finance"
                        class="w-full h-full hidden lg:block">
                    <img src="{{ asset('images/img/wome_2.webp') }}" alt="fit2finance"
                        class="w-full h-full block lg:hidden">
                </div>
                <div class="bg-bgGray text-textWhite flex flex-col justify-center lg:py-10">
                    <div
                        class="w-11/12 mx-auto lg:mx-0 py-12 lg:pt-0 lg:pl-10 lg:w-[70%] flex flex-col gap-10 justify-center ">
                        <h3 class="font-corbel_700 text-text40 xl:text-text52 leading-none md:leading-tight">
                            Ponte en Contacto
                        </h3>
                        <p class="font-corbel_400 text-text20 xl:text-text24">
                            A continuación, complete el formulario y uno de nuestros
                            representantes se pondrá en contacto con usted lo mas pronto
                            posible.
                        </p>


                        <form id="formContactos" class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                            @csrf
                            <div>
                                <input required name="full_name" id="fullNameContacto" type="text"
                                    placeholder="Nombre completo"
                                    class="focus:outline-none w-full bg-bgGray pt-4 pl-4 pb-4 font-corbel_400 text-text18 xl:text-text22 text-white placeholder:text-white placeholder:opacity-35" />
                            </div>
                            <div>
                                <input type="tel" name="phone" maxlength="9" placeholder="Teléfono" required
                                    id="telefonoContacto"
                                    class="focus:outline-none w-full bg-bgGray pt-4 pl-4 pb-4 font-corbel_400 text-text18 xl:text-text22 text-white placeholder:text-white placeholder:opacity-35" />
                            </div>

                            <div>
                                <input type="email" name="email" placeholder="E-mail" required id="emailContacto"
                                    class="focus:outline-none w-full bg-bgGray pt-4 pl-4 pb-4 font-corbel_400 text-text18 xl:text-text22 text-white placeholder:text-white placeholder:opacity-35" />
                            </div>

                            <input type="hidden" id="tipo" placeholder="tipo" name="tipo_message"
                                value="Contactos" />

                            <div>
                                <!-- cmombo -->
                                <div class="dropdown w-full">
                                    <div
                                        class="input-box font-corbel_400 text-text18 xl:text-text22 pt-4 pl-4 pb-4 border-b-[1px] border-white  text-white">
                                        <span class="opacity-35 span-opacity" id="span-opacity">Tipo de servicios</span>
                                    </div>
                                    <div class="list overflow-y-scroll scroll-cursos">
                                        <div class="w-full">
                                            <input type="radio" name="service_product" id="radio0" class="radio"
                                                value="Tipo de Servicios" />
                                            <label for="radio0"
                                                class="font-corbel_400 text-text18 xl:text-text22 hover:font-corbel_700 md:duration-100">
                                                Tipo de servicios
                                            </label>
                                        </div>
                                        @foreach ($service as $item)
                                            <div class="w-full">
                                                <input type="radio" name="service_product"
                                                    id="radio{{ $item->id }}" class="radio"
                                                    value="{{ $item->title }}" />
                                                <label for="radio{{ $item->id }}"
                                                    class="font-corbel_400 text-text18 xl:text-text22 hover:font-corbel_700 md:duration-100">
                                                    {{ $item->title }}
                                                </label>
                                            </div>
                                        @endforeach

                                        
                                    </div>
                                </div>
                            </div>


                            <div class="my-12">
                                <button type="submit"
                                    class="bg-bgOrangeStrong w-full flex justify-center items-center py-4 gap-2 font-medium text-[18px] xl:text-text22 hover:bg-orange-500 md:duration-500">
                                    <span> Enviar solicitud </span>
                                    <div>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.40039 16.7992L7.77639 11.63L12.3844 16.0608L21.6004 7.19922M21.6004 7.19922H14.6884M21.6004 7.19922V13.8454"
                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </main>



@section('scripts_improtados')

    <script>
        const openForm = document.querySelector(".open-modal");
        const closeForm = document.querySelector(".close-modal");
        const modal = document.getElementById("modelConfirm");

        openForm.addEventListener("click", () => {
            modal.style.display = "block";
            document.getElementsByTagName("body")[0].classList.add("overflow-y-hidden");
        });

        closeForm.addEventListener("click", () => {
            modal.style.display = "none";
            document
                .getElementsByTagName("body")[0]
                .classList.remove("overflow-y-hidden");
        });



        var slider = new Swiper(".slider", {
            slidesPerView: 2,
            spaceBetween: 50,
            loop: true,
            grabCursor: true,
            centeredSlides: false,
            initialSlide: 0, // Empieza en el cuarto slide (índice 3) */
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    slidesPerGroup: 1,
                },
                768: {
                    slidesPerView: 2,
                    slidesPerGroup: 1,
                },
            },
        });

        var logosClientes = new Swiper(".logosClientes", {
            slidesPerView: 5,
            spaceBetween: 10,
            loop: true,
            grab: true,
            centeredSlides: true,
            initialSlide: 0, // Empieza en el cuarto slide (índice 3) */
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            breakpoints: {
                0: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 5,
                },
            },
        });

        var blogs = new Swiper(".blogs", {
            slidesPerView: 3,
            spaceBetween: 50,
            loop: true,
            grabCursor: true,
            centeredSlides: false,
            initialSlide: 0, // Empieza en el cuarto slide (índice 3) */

            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 3,
                },
            },
        });

        var banner = new Swiper(".banner", {
            slidesPerView: 4,
            spaceBetween: 0,
            loop: true,
            grab: true,
            centeredSlides: false,
            initialSlide: 0, // Empieza en el cuarto slide (índice 3) */
            pagination: {
                el: ".swiper-pagination-estadisticas",
                clickable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 4,
                },
            },
        });

        var input = document.querySelector(".input-box");
        input.onclick = function() {
            this.classList.toggle("open");
            let list = this.nextElementSibling;
            if (list.style.maxHeight) {
                list.style.maxHeight = null;
                list.style.boxShadow = null;
            } else {
                list.style.maxHeight = 200 + "px";

                list.style.boxShadow =
                    "0 1px 2px 0 rgba(0, 0, 0, 0.15),0 1px 3px 1px rgba(0, 0, 0, 0.1)";
            }
        };

        /*list.style.maxHeight = 200 + "px";  Especificamos tamaño del dropdown */

        var rad = document.querySelectorAll(".radio");
        var span = document.querySelector('.span-opacity');
        rad.forEach((item) => {
            item.addEventListener("change", () => {
                span.textContent = item.nextElementSibling.textContent;
                if (span.textContent.trim() === 'Tipo de servicios') {
                    span.classList.add('opacity-35');
                } else {
                    span.classList.remove('opacity-35');
                }

                input.click();
            });
        });
    </script>
@stop

@stop
