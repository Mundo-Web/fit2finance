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
            border-bottom: 1.5px solid white;
            padding: 16px 0;
        }

        .input-box {
            width: 100%;
            height: 40px;
            box-sizing: border-box;
            outline: none;
            border-radius: 2mm;

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

        .input-box:empty::after {
            content: "Tipo de servicio";
            color: #96a1a6;
        }

        .list {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            height: fit-content;
            background: #505977;
            margin-top: 10px;
            border-radius: 2mm;
            overflow: hidden;
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
            height: 1000px !important;
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
    </style>
@stop


@section('content')
    <main>
        <section class="bg-HeaderMobile2_1 md:bg-header_principal_1 bg-cover bg-center bg-no-repeat sm:w-full h-full pt-96">
            <div class="w-11/12 mx-auto">
                <div class="w-full md:w-1/2">
                    <div class="flex flex-col justify-center items-center gap-10 md:py-10">
                        <div class="flex flex-col gap-5 py-12 " data-aos="fade-up" data-aos-offset="150">
                            <h2 class="font-bold text-text36 xl:text-text48 text-textWhite ">
                                Brindamos soluciones Financieras para negocios decididos a ser
                                Líderes, Disruptivos y Resilientes
                            </h2>
                            <h2 class="font-normal text-text20 xl:text-text24 text-textWhite">
                                Somos Fit 2 Finance y ponemos a tu disposición nuestros
                                conocimientos y experiencia en <b>servicios contables</b> para
                                brindarle valor y asegurar la sostenibilidad de tu negocio.
                            </h2>
                        </div>
                        <div class="flex flex-col md:flex-row gap-10 w-full" data-aos="fade-up" data-aos-offset="150">
                            <a href="#"
                                class="bg-bgOrangeStrong py-3 md:py-2 px-4 font-bold text-textWhite text-text18 xl:text-text22 flex gap-2 w-auto justify-center items-center hover:bg-orange-500 md:duration-500">
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
                                class="bg-transparent py-3 md:py-2 px-4 font-bold text-textWhite text-text18 xl:text-text22 hover:bg-bgGrayStrong md:w-auto border-[1px] border-white text-center w-full md:duration-500">
                                Servicios
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end relative pt-16">
                <img src="{{ asset('images/img/foto-banner.png') }}" alt="banner" 
                class="block md:hidden w-full">
            </div>
        </section>
        <section>
            <div class="swiper banner bg-bgOrangeStrong">
                <div class="swiper-wrapper text-textWhite" data-aos="fade-up" data-aos-offset="150">
                    <div class="swiper-slide py-5 px-5 lg:px-16">
                        <div class="flex flex-col gap-5 text-center">
                            <p class="font-bold text-[60px] md:text-text72 leading-none">+150</p>
                            <h2 class="font-bold text-[20px] md:text-text24">
                                Empresas Atendidas
                            </h2>
                            <p class="font-normal text-[14px] md:text-text18 xl:text-text20">
                                Hemos trabajado con más de 150 empresas en Perú.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide py-5 px-5 lg:px-16">
                        <div class="flex flex-col gap-5 text-center">
                            <p class="font-bold text-[60px] md:text-text72 leading-none">+100</p>
                            <h2 class="font-bold text-[20px] md:text-text24">
                                Empresas Felices
                            </h2>
                            <p class="font-normal text-[14px] md:text-text18 xl:text-text20">
                                Más de 100 empresas confían en nosotros y están satisfechas
                                con nuestros servicios.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide py-5 px-5 lg:px-16">
                        <div class="flex flex-col gap-5 text-center">
                            <p class="font-bold text-[60px] lg:text-text72 leading-none">%99</p>
                            <h2 class="font-bold text-[20px] lg:text-text24">
                                Retención de Clientes
                            </h2>
                            <p class="font-normal text-[14px] md:text-text18 xl:text-text20">
                                El 99% de nuestros clientes continúan trabajando con nosotros
                                cada año.
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide py-5 px-5 lg:px-16">
                        <div class="flex flex-col gap-5 text-center">
                            <p class="font-bold text-[60px] md:text-text72 leading-none">+100</p>
                            <h2 class="font-bold text-[20px] md:text-text24">
                                Empresas Felices
                            </h2>
                            <p class="font-normal text-[14px] md:text-text18 xl:text-text20">
                                Más de 100 empresas confían en nosotros y están satisfechas
                                con nuestros servicios.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination-estadisticas h-[40px]"></div>
            </div>
        </section>


        <section class="swiper slider w-11/12 mx-auto my-24" id="servicios">
            <div class="mb-12 flex flex-col gap-5 md:flex-row md:justify-between md:items-center">
                <div>
                    <h2 class="font-bold text-textGray text-text48 xl:text-text56 leading-none md:leading-tight my-5">
                        Servicios de Contabilidad Integral para su empresa
                    </h2>
                    <p class="fony-normal text-textGray text-text20 xl:text-text24 text-justify">
                        Descubra cómo nuestros servicios contables pueden impulsar el
                        éxito financiero de su empresa. Desde la gestión completa de la
                        contabilidad hasta auditorías detalladas, estamos aquí para
                        ayudarlo a alcanzar sus metas empresariales
                    </p>
                </div>

                <div class="buttonSliderServicios w-full">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <div class="swiper-wrapper swiper-wrapper-height" data-aos="fade-up" data-aos-offset="150">
                <!-- 1 -->
                <div class="swiper-slide swiper-slide-flex bg-bgPurpose p-5">
                    <div class="flex flex-col justify-between">
                        <div>
                            <div class="my-8">
                                <img src="{{ asset('images/svg/outsourcing_financiero.svg') }}"
                                    alt="outsourcing_financiero">

                            </div>
                            <div class="text-textGray flex flex-col gap-5">
                                <h2
                                    class="font-bold text-text36 md:text-text40 xl:text-text44 leading-none md:leading-tight">
                                    Outsourcing Financiero
                                </h2>
                                <p class="font-normal text-[16px] md:text-text20 xl:text-text24 text-justify">
                                    Con el modelo de outsourcing, nuestros clientes pueden
                                    obtener todos los beneficios de nuestros servicios como si
                                    tuviese su propio <b>Departamento de Finanzas</b>. Nuestra
                                    <b>asesoría financiera para empresas</b> te permitirá
                                    encontrar oportunidades de inversión y financiamiento para
                                    alcanzar una fuerte posición competitiva.
                                </p>

                                <p class="font-normal text-[16px] md:text-text20 xl:text-text24">
                                    Propuesta de valor:
                                </p>

                                <div class="mx-6">
                                    <ul class="font-normal text-[16px] md:text-text20 xl:text-text24 list-disc">
                                        <li>Análisis e identificación de indicadores clave.</li>
                                        <li>Diseño de estrategias financieras.</li>
                                        <li>Asesoría en inversiones y financiamiento.</li>
                                        <li>Benchmarking sectorial.</li>
                                        <li>Control presupuestario.</li>
                                        <li>
                                            Seguimiento de resultados y análisis de tendencias y
                                            desvíos.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <a href="#"
                                class="text-textOrange font-bold text-text24 xl:text-text28 flex justify-end items-center gap-2 underline">
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
                <!-- 2 -->
                <div class="swiper-slide swiper-slide-flex bg-bgYellow p-5">
                    <div class="flex flex-col justify-between">
                        <div>
                            <div class="my-8">
                                <img src="{{ asset('images/svg/servicio_contable_360.svg') }}" alt="servicio contable">
                            </div>
                            <div class="text-textGray flex flex-col gap-5 w-full">
                                <h2
                                    class="font-bold text-[36px] md:text-text40 xl:text-text44 leading-none md:leading-tight">
                                    Servicio contable 360° Vía ERP ODOO
                                </h2>
                                <p class="font-normal text-[16px] md:text-text20 xl:text-text24 text-justify">
                                    Como especialistas en <b>servicios contables</b>, ofrecemos
                                    a nuestros clientes una opción útil, necesaria y sencilla
                                    que les permite enfocarse en su core business. Lograremos
                                    que tu compañía planifique mejor sus actividades de
                                    operación, inversión y financiamiento.
                                </p>

                                <p class="font-normal text-[16px] md:text-text20 xl:text-text24">
                                    Propuesta de valor:
                                </p>

                                <div class="mx-6">
                                    <ul class="font-normal text-[16px] md:text-text20 xl:text-text24 list-disc">
                                        <li>Análisis e identificación de indicadores clave.</li>
                                        <li>Diseño de estrategias financieras.</li>
                                        <li>Control presupuestario.</li>
                                        <li>Benchmarking sectorial.</li>
                                        <li>Control presupuestario.</li>
                                        <li>
                                            Seguimiento de resultados y análisis de tendencias y
                                            desvíos.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <a href="#"
                                class="text-textOrange font-bold text-text24 xl:text-text28 flex justify-end items-center gap-2 underline">
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
                <!-- 3 -->
                <div class="swiper-slide swiper-slide-flex bg-bgPurpose p-5">
                    <div class="flex flex-col justify-between">
                        <div>
                            <div class="my-8">
                                <img src="{{ asset('images/svg/diagnostico.svg') }}" alt="diagnostico">

                            </div>
                            <div class="text-textGray flex flex-col gap-5 w-full">
                                <h2
                                    class="font-bold text-[36px] md:text-text40 xl:text-text44 leading-none md:leading-tight">
                                    Diagnóstico e Implementación NIIF/IFRS --- Plenas y PYMES
                                </h2>
                                <p class="font-normal text-[16px] md:text-text20 xl:text-text24 text-justify">
                                    Diagnóstico de las Normas Internacional de Información
                                    Financiera - NIIF, (IFRS), emitidas por el IASB
                                    (International Accounting Standards Board) Aplicables en el
                                    Perú y a nivel internacional. Nuestros expertos en
                                    <b>asesorías contables</b> evaluarán el estatus de la
                                    información financiera de tu compañía y te brindarán un plan
                                    de trabajo.
                                </p>

                                <p class="font-normal text-[16px] md:text-text20 xl:text-text24 ">
                                    Brindamos servicios de:
                                </p>

                                <div class="mx-6">
                                    <ul class="font-normal text-[16px] md:text-text20 xl:text-text24 list-disc">
                                        <li>Asesorías en la adopción de las NIIF.</li>
                                        <li>Conversión de estados financieros.</li>
                                        <li>Evaluación de moneda funcional.</li>
                                        <li>
                                            Implementación y revisión de planes y dinámicas
                                            contables.
                                        </li>
                                        <li>Valorización de Instrumentos Financieros.</li>
                                        <li>Elaboración de Políticas Contables.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <a href="#"
                                class="text-textOrange font-bold text-text24 xl:text-text28 flex justify-end items-center gap-2 underline">
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
                <!-- 4 -->
                <div class="swiper-slide swiper-slide-flex bg-bgYellow p-5">
                    <div class="flex flex-col justify-between">
                        <div>
                            <div class="my-8">
                                <img src="{{ asset('images/svg/auditoria.svg') }}" alt="auditoria">

                            </div>
                            <div class="text-textGray flex flex-col gap-5 w-full">
                                <h2
                                    class="font-bold text-[36px] md:text-text40 xl:text-text44 leading-none md:leading-tight">
                                    Auditoria de los Estados Financieros
                                </h2>
                                <p class="font-normal text-[16px] md:text-text20 xl:text-text24 text-justify">
                                    Nuestro enfoque de <b>auditoría financiera</b> es el de
                                    focalizarnos en los riesgos de tu negocio, soportado por un
                                    staff de especialistas en contabilidad, impuestos, valuación
                                    y tecnología. Ayudaremos a tu negocio a crear confianza y
                                    seguridad a través de la transparencia, claridad y
                                    congruencias de tus Estados Financieros.
                                </p>

                                <div class="mx-6">
                                    <ul class="font-normal text-[16px] md:text-text20 xl:text-text24 list-disc">
                                        <li>Gestión de crisis y continuidad del negocio.</li>
                                        <li>Gestión financiera y liquidez.</li>
                                        <li>Identificación de situaciones inusuales.</li>
                                        <li>Gestión de la cadena de suministro .</li>
                                        <li>Optimización de procesos.</li>
                                        <li>Planeamiento estratégico.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <a href="#"
                                class="text-textOrange font-bold text-text24 xl:text-text28 flex justify-end items-center gap-2 underline">
                                <span>Saber más</span>
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
                <!-- 5 -->
                <div class="swiper-slide swiper-slide-flex swiper-slide-flex bg-bgPurpose p-5">
                    <div class="flex flex-col justify-between">
                        <div>
                            <div class="my-8">
                                <img src="{{ asset('images/svg/valuacion.svg') }}" alt="valuacion">

                            </div>
                            <div class="text-textGray flex flex-col gap-5 w-full">
                                <h2
                                    class="font-bold text-[36px] md:text-text40 xl:text-text44 leading-none md:leading-tight">
                                    Valuación Económica
                                </h2>
                                <p class="font-normal text-[16px] md:text-text20 xl:text-text24 text-justify">
                                    Nuestros expertos en
                                    <b>servicios de Contabilidad y Finanzas</b> identificarán el
                                    verdadero valor de mercado de los activos de nuestros
                                    clientes, a través de múltiples métodos con un alto
                                    componente innovador en la formulación de sus modelos
                                    predictivos.
                                </p>

                                <p class="font-normal text-[16px] md:text-text20 xl:text-text24">
                                    Tipos de valuaciones:
                                </p>

                                <div class="mx-6">
                                    <ul class="font-normal text-[16px] md:text-text20 xl:text-text24 list-disc">
                                        <li>Valuación de empresas.</li>
                                        <li>Valuación de marcas.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <a href="#"
                                class="text-textOrange font-bold text-text24 xl:text-text28 flex justify-end items-center gap-2 underline">
                                <span>Saber más</span>
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
                <!-- 6 -->
                <div class="swiper-slide swiper-slide-flex bg-bgYellow p-5">
                    <div class="flex flex-col justify-between">
                        <div>
                            <div class="my-8">
                                <img src="{{ asset('images/svg/factibilidad.svg') }}" alt="factibilidad financiera">

                            </div>
                            <div class="text-textGray flex flex-col gap-5 w-full">
                                <h2
                                    class="font-bold text-[36px] md:text-text40 xl:text-text44 leading-none md:leading-tight">
                                    Estudios de Factibilidad Financiera
                                </h2>
                                <p class="font-normal text-[16px] md:text-text20 xl:text-text24 text-justify">
                                    Como
                                    <b>especialistas en estrategias financieras</b> analizamos y
                                    determinamos la viabilidad económica financiera de un
                                    proyecto a través de indicadores de gestión, rentabilidad,
                                    liquidez y solvencia.
                                </p>

                                <p class="font-normal text-[16px] md:text-text20 xl:text-text24">
                                    Propuesta de valor:
                                </p>

                                <div class="mx-6">
                                    <ul class="font-normal text-[16px] md:text-text20 xl:text-text24 list-disc">
                                        <li>
                                            Determinamos e identificamos el nivel de rentabilidad de
                                            un proyecto.
                                        </li>
                                        <li>
                                            Optimizamos los requerimientos de inversión de un
                                            proyecto a nivel pre operativo.
                                        </li>
                                        <li>
                                            Identificamos la estrategia de financiamiento óptima.
                                        </li>
                                        <li>
                                            Incorporamos todas las variables financieras que nos
                                            permite identificar el costo de oportunidad real del
                                            inversionista.
                                        </li>
                                        <li>
                                            Analizamos y sensibilizamos todos los posibles
                                            escenarios que puedan afectar su rentabilidad.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <a href="#"
                                class="text-textOrange font-bold text-text24 xl:text-text28 flex justify-end items-center gap-2 underline">
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
                <!-- 7 -->
                <div class="swiper-slide swiper-slide-flex bg-bgPurpose p-5">
                    <div class="flex flex-col justify-between">
                        <div>
                            <div class="my-8">
                                <img src="{{ asset('images/svg/adviser.svg') }}" alt="adviser">

                            </div>
                            <div class="text-textGray flex flex-col gap-5 w-full">
                                <h2
                                    class="font-bold text-[36px] md:text-text40 xl:text-text44 leading-none md:leading-tight">
                                    ADVISER - Financiamiento Bancario
                                </h2>
                                <p class="font-normal text-[16px] md:text-text20 xl:text-text24 text-justify">
                                    Nos encargamos de
                                    <b>gestionar el financiamiento bancario</b> óptimo para
                                    cubrir los requerimientos de inversión de nuestros clientes,
                                    estableciendo un eficiente control del riesgo añadido a este
                                    tipo de operaciones.
                                </p>

                                <p class="font-normal text-[16px] md:text-text20 xl:text-text24">
                                    Variables críticas que identificamos:
                                </p>

                                <div class="mx-6">
                                    <ul class="font-normal text-[16px] md:text-text20 xl:text-text24 list-disc">
                                        <li>Condiciones y rentabilidad exigida al proyecto.</li>
                                        <li>Forma del financiamiento.</li>
                                        <li>Crédito puente.</li>
                                        <li>Préstamo o administración de recursos.</li>
                                        <li>
                                            Líneas de crédito (libre disponibilidad, fianzas, etc.)
                                        </li>
                                        <li>Cuentas recaudadoras o de garantía.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <a href="#"
                                class="text-textOrange font-bold text-text24 xl:text-text28 flex justify-end items-center gap-2 underline">
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

                <!-- 8 -->
                <div class="swiper-slide swiper-slide-flex bg-bgYellow p-5">
                    <div class="flex flex-col justify-between">
                        <div>
                            <div class="my-8">
                                <img src="{{ asset('images/svg/procesos.svg') }}" alt="procesos concursales">

                            </div>
                            <div class="text-textGray flex flex-col gap-5 w-full">
                                <h2
                                    class="font-bold text-[36px] md:text-text40 xl:text-text44 leading-none md:leading-tight">
                                    Procesos concursales
                                </h2>
                                <p class="font-normal text-[16px] md:text-text20 xl:text-text24 text-justify">
                                    Acompañamos a nuestros clientes una estrategias de
                                    negociación con los principales acreedores e implementar
                                    todo el proceso de reestructuración que le permita salir
                                    exitosamente del proceso concursal. ¡Somos expertos en
                                    <b>finanzas corporativas</b>!
                                </p>

                                <div class="mx-6">
                                    <ul class="font-normal text-[16px] md:text-text20 xl:text-text24 list-disc">
                                        <li>
                                            Fase de Determinación del Plan de Reestructuración.
                                        </li>
                                        <li>
                                            Fase de Implementación del Plan de Reestructuración.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <a href="#"
                                class="text-textOrange font-bold text-text24 xl:text-text28 flex justify-end items-center gap-2 underline">
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

                <!-- 9 -->
                <div class="swiper-slide swiper-slide-flex bg-bgPurpose p-5">
                    <div class="flex flex-col justify-between">
                        <div>
                            <div class="my-8">
                                <img src="{{ asset('images/svg/asesoria.svg') }}" alt="asesoria tributaria">

                            </div>
                            <div class="text-textGray flex flex-col gap-5 w-full">
                                <h2
                                    class="font-bold text-[36px] md:text-text40 xl:text-text44 leading-none md:leading-tight">
                                    Asesoría Tributaria
                                </h2>
                                <p class="font-normal text-[16px] md:text-text20 xl:text-text24 text-justify">
                                    Somos expertos <b>Planificación Tributaria</b>, vía la
                                    optimización de los escudos tributarios del negocio, sin
                                    dejar de cumplir con las regulaciones establecidas,
                                    proyectando y desarrollando las estrategias preventivas que
                                    permiten brindarle a nuestros clientes la tranquilidad de
                                    asignar eficiente los recursos de su compañía sin
                                    preocuparse de las declaraciones ni notificaciones de la
                                    autoridad tributaria - <b>SUNAT</b>.
                                </p>

                                <p class="font-normal text-[16px] md:text-text20 xl:text-text24">
                                    Propuesta de valor:
                                </p>

                                <div class="mx-6">
                                    <ul class="font-normal text-[16px] md:text-text20 xl:text-text24 list-disc">
                                        <li>Planeamiento tributario integral.</li>
                                        <li>Consultoría tributaria.</li>
                                        <li>
                                            Comprobación de declaraciones juradas mensuales y
                                            anuales.
                                        </li>
                                        <li>Efectos fiscales NIIF.</li>
                                        <li>Optimización de la tasa efectiva del IR.</li>

                                        <li>Recuperación de impuestos.</li>
                                        <li>Patrocinio en auditorías de SUNAT.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <a href="#"
                                class="text-textOrange font-bold text-text24 xl:text-text28 flex justify-end items-center gap-2 underline">
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
            </div>
        </section>


        <section class="bg-gradient-to-r from-[#505977] to-[#424962] my-24">
            <div class="2md:w-10/12 mx-auto" data-aos="fade-up" data-aos-offset="150">
                <div class="grid grid-cols-1 2md:grid-cols-2 mt-0 pb-12 2md:py-20 text-textWhite gap-10">
                    <div class="col-span-1 2md:col-span-2 order-2 2md:order-1 text-left 2md:text-center px-8 2md:px-0">
                        <h2 class="font-bold text-text48 xl:text-text56 mb-6 leading-none 2md:leading-tight">
                            Acerca de Nosotros
                        </h2>
                        <p class="font-normal text-text20 xl:text-text24 text-justify">
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
                        class="col-span-1 2md:col-span-1 order-3 2md:order-2 flex flex-col justify-between gap-10 px-8 2md:px-0">
                        <div class="flex flex-col 2md:block gap-4">
                            <div>
                                <h2
                                    class="font-bold text-text32 xl:text-text36 border-b-2 border-borderOrange inline-block">
                                    Visión
                                </h2>
                            </div>

                            <p class="font-normal text-text20 xl:text-text24 text-justify">
                                Constituirnos como una boutique financiera que brinde
                                soluciones personalizadas para negocios decididos a ser
                                líderes, disruptivos y resilientes.
                            </p>
                        </div>

                        <div class="flex flex-col gap-4 2md:block">
                            <div>
                                <h2
                                    class="font-bold text-text32 xl:text-text36 border-b-2 border-borderOrange inline-block">
                                    Misión
                                </h2>
                            </div>
                            <p class="font-normal text-text20 xl:text-text24 text-justify">
                                Maximizar el valor patrimonial de nuestros clientes a través
                                de una eficiente asesoría y gestión de sus activos económicos
                                relevantes.
                            </p>
                        </div>

                        <div class="flex flex-col gap-4 2md:block">
                            <div>
                                <h2
                                    class="font-bold text-text32 xl:text-text36 border-b-2 border-borderOrange inline-block">
                                    Nuestro Valor Diferencial
                                </h2>
                            </div>
                            <p class="font-normal text-text20 xl:text-text24 text-justify">
                                Sabemos que toda gran empresa inicia con un propósito, con
                                nuestra asesoría, tendrás la confianza de tomar las mejores
                                decisiones financieras para tu negocio.
                            </p>
                        </div>
                    </div>
                    <div class="row-span-1 2md:col-span-1 order-1 2md:order-3">
                        <div class="flex justify-center items-center w-full h-full">
                            <img src="{{ asset('images/img/acerca de nostros.png') }}" alt="fit2finance"
                                class="w-full h-full hidden md:block">

                                <img src="{{ asset('images/img/acerca de nostros_mobile.png') }}" alt="fit2finance"
                                class="w-full h-full block md:hidden">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section data-aos="fade-up" data-aos-offset="150" class="my-24">
            <h2 class="font-bold text-text32 xl:text-text40 text-textGray text-center my-12 leading-none md:leading-tight">
                Nuestros principales clientes
            </h2>

            <div class="swiper logosClientes">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/img/clever.png') }}" alt="clever">

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/img/figuras.png') }}" alt="figuras">

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/img/happy_vea.png') }}" alt="happy vea">

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/img/implementos_reactivos.png') }}" alt="implementos reactivos">

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/img/oddo_carrusel.png') }}" alt="odoo">

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/img/sany.png') }}" alt="sany" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/img/implementos_reactivos.png') }}" alt="implementos reactivos">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <section class="bg-diferenciales_banner bg-cover bg-center bg-no-repeat sm:w-full h-full">
            <div class="w-11/12 mx-auto py-12 md:py-32">
                <h2 class="font-bold text-text56 xl:text-text60 text-textGray text-center leading-none md:leading-tight">
                    Ventajas diferenciales
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-24 my-32" data-aos="fade-up"
                    data-aos-offset="150">
                    <div class="flex gap-5">
                        <div class="flex justify-center items-start">
                            <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="32" cy="32" r="32" fill="#E38533" />
                                <mask id="mask0_28_3467" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="16"
                                    y="16" width="32" height="32">
                                    <rect x="16" y="16" width="32" height="32" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_28_3467)">
                                    <path
                                        d="M29 44C27.8667 44 26.8889 43.6056 26.0667 42.8167C25.2444 42.0278 24.7778 41.0778 24.6667 39.9667C23.3333 39.7889 22.2222 39.2 21.3333 38.2C20.4444 37.2 20 36.0222 20 34.6667C20 34.2 20.0611 33.7389 20.1833 33.2833C20.3056 32.8278 20.4889 32.4 20.7333 32C20.4889 31.6 20.3056 31.1778 20.1833 30.7333C20.0611 30.2889 20 29.8222 20 29.3333C20 27.9778 20.4444 26.8056 21.3333 25.8167C22.2222 24.8278 23.3222 24.2444 24.6333 24.0667C24.7 22.9333 25.1556 21.9722 26 21.1833C26.8444 20.3944 27.8444 20 29 20C29.5778 20 30.1167 20.1111 30.6167 20.3333C31.1167 20.5556 31.5778 20.8556 32 21.2333C32.4 20.8556 32.8556 20.5556 33.3667 20.3333C33.8778 20.1111 34.4222 20 35 20C36.1556 20 37.15 20.3889 37.9833 21.1667C38.8167 21.9444 39.2667 22.9 39.3333 24.0333C40.6444 24.2111 41.75 24.8 42.65 25.8C43.55 26.8 44 27.9778 44 29.3333C44 29.8222 43.9389 30.2889 43.8167 30.7333C43.6944 31.1778 43.5111 31.6 43.2667 32C43.5111 32.4 43.6944 32.8278 43.8167 33.2833C43.9389 33.7389 44 34.2 44 34.6667C44 36.0444 43.55 37.2278 42.65 38.2167C41.75 39.2056 40.6333 39.7889 39.3 39.9667C39.1889 41.0778 38.7278 42.0278 37.9167 42.8167C37.1056 43.6056 36.1333 44 35 44C34.4444 44 33.9056 43.8944 33.3833 43.6833C32.8611 43.4722 32.4 43.1778 32 42.8C31.5778 43.1778 31.1111 43.4722 30.6 43.6833C30.0889 43.8944 29.5556 44 29 44ZM33.3333 24.3333V39.6667C33.3333 40.1333 33.4944 40.5278 33.8167 40.85C34.1389 41.1722 34.5333 41.3333 35 41.3333C35.4444 41.3333 35.8278 41.1556 36.15 40.8C36.4722 40.4444 36.6444 40.0444 36.6667 39.6C36.2 39.4222 35.7722 39.1833 35.3833 38.8833C34.9944 38.5833 34.6444 38.2222 34.3333 37.8C34.1111 37.4889 34.0278 37.1556 34.0833 36.8C34.1389 36.4444 34.3222 36.1556 34.6333 35.9333C34.9444 35.7111 35.2778 35.6278 35.6333 35.6833C35.9889 35.7389 36.2778 35.9222 36.5 36.2333C36.7444 36.5889 37.0556 36.8611 37.4333 37.05C37.8111 37.2389 38.2222 37.3333 38.6667 37.3333C39.4 37.3333 40.0278 37.0722 40.55 36.55C41.0722 36.0278 41.3333 35.4 41.3333 34.6667C41.3333 34.5556 41.3278 34.4444 41.3167 34.3333C41.3056 34.2222 41.2778 34.1111 41.2333 34C40.8556 34.2222 40.45 34.3889 40.0167 34.5C39.5833 34.6111 39.1333 34.6667 38.6667 34.6667C38.2889 34.6667 37.9722 34.5389 37.7167 34.2833C37.4611 34.0278 37.3333 33.7111 37.3333 33.3333C37.3333 32.9556 37.4611 32.6389 37.7167 32.3833C37.9722 32.1278 38.2889 32 38.6667 32C39.4 32 40.0278 31.7389 40.55 31.2167C41.0722 30.6944 41.3333 30.0667 41.3333 29.3333C41.3333 28.6 41.0722 27.9778 40.55 27.4667C40.0278 26.9556 39.4 26.6889 38.6667 26.6667C38.4222 27.0667 38.1056 27.4167 37.7167 27.7167C37.3278 28.0167 36.9 28.2556 36.4333 28.4333C36.0778 28.5667 35.7333 28.5556 35.4 28.4C35.0667 28.2444 34.8444 27.9889 34.7333 27.6333C34.6222 27.2778 34.6389 26.9333 34.7833 26.6C34.9278 26.2667 35.1778 26.0444 35.5333 25.9333C35.8667 25.8222 36.1389 25.6222 36.35 25.3333C36.5611 25.0444 36.6667 24.7111 36.6667 24.3333C36.6667 23.8667 36.5056 23.4722 36.1833 23.15C35.8611 22.8278 35.4667 22.6667 35 22.6667C34.5333 22.6667 34.1389 22.8278 33.8167 23.15C33.4944 23.4722 33.3333 23.8667 33.3333 24.3333ZM30.6667 39.6667V24.3333C30.6667 23.8667 30.5056 23.4722 30.1833 23.15C29.8611 22.8278 29.4667 22.6667 29 22.6667C28.5333 22.6667 28.1389 22.8278 27.8167 23.15C27.4944 23.4722 27.3333 23.8667 27.3333 24.3333C27.3333 24.6889 27.4333 25.0167 27.6333 25.3167C27.8333 25.6167 28.1 25.8222 28.4333 25.9333C28.7889 26.0444 29.0444 26.2667 29.2 26.6C29.3556 26.9333 29.3778 27.2778 29.2667 27.6333C29.1333 27.9889 28.9 28.2444 28.5667 28.4C28.2333 28.5556 27.8889 28.5667 27.5333 28.4333C27.0667 28.2556 26.6389 28.0167 26.25 27.7167C25.8611 27.4167 25.5444 27.0667 25.3 26.6667C24.5889 26.6889 23.9722 26.9611 23.45 27.4833C22.9278 28.0056 22.6667 28.6222 22.6667 29.3333C22.6667 30.0667 22.9278 30.6944 23.45 31.2167C23.9722 31.7389 24.6 32 25.3333 32C25.7111 32 26.0278 32.1278 26.2833 32.3833C26.5389 32.6389 26.6667 32.9556 26.6667 33.3333C26.6667 33.7111 26.5389 34.0278 26.2833 34.2833C26.0278 34.5389 25.7111 34.6667 25.3333 34.6667C24.8667 34.6667 24.4167 34.6111 23.9833 34.5C23.55 34.3889 23.1444 34.2222 22.7667 34C22.7222 34.1111 22.6944 34.2222 22.6833 34.3333C22.6722 34.4444 22.6667 34.5556 22.6667 34.6667C22.6667 35.4 22.9278 36.0278 23.45 36.55C23.9722 37.0722 24.6 37.3333 25.3333 37.3333C25.7778 37.3333 26.1889 37.2389 26.5667 37.05C26.9444 36.8611 27.2556 36.5889 27.5 36.2333C27.7222 35.9222 28.0111 35.7389 28.3667 35.6833C28.7222 35.6278 29.0556 35.7111 29.3667 35.9333C29.6778 36.1556 29.8611 36.4444 29.9167 36.8C29.9722 37.1556 29.8889 37.4889 29.6667 37.8C29.3556 38.2222 29 38.5889 28.6 38.9C28.2 39.2111 27.7667 39.4556 27.3 39.6333C27.3222 40.0778 27.5 40.4722 27.8333 40.8167C28.1667 41.1611 28.5556 41.3333 29 41.3333C29.4667 41.3333 29.8611 41.1722 30.1833 40.85C30.5056 40.5278 30.6667 40.1333 30.6667 39.6667Z"
                                        fill="white" />
                                </g>
                            </svg>
                        </div>
                        <div class="text-textGray">
                            <h3 class="font-bold text-text28 xl:text-text32 leading-none md:leading-tight">
                                Experiencia y conocimiento
                            </h3>
                            <p class="font-normal text-text20 xl:text-text24">
                                Respaldada por un equipo multidisciplinario de profesionales
                                enfocado en la excelencia de servicio con valor agregado.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-5">
                        <div class="flex justify-center items-start">
                            <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="32" cy="32" r="32" fill="#E38533" />
                                <mask id="mask0_28_3456" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="16"
                                    y="16" width="32" height="32">
                                    <rect x="16" y="16" width="32" height="32" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_28_3456)">
                                    <path
                                        d="M36.0007 42.6654C33.0229 42.6654 30.5007 41.632 28.434 39.5654C26.3673 37.4987 25.334 34.9765 25.334 31.9987C25.334 29.0431 26.3673 26.5265 28.434 24.4487C30.5007 22.3709 33.0229 21.332 36.0007 21.332C38.9562 21.332 41.4729 22.3709 43.5507 24.4487C45.6284 26.5265 46.6673 29.0431 46.6673 31.9987C46.6673 34.9765 45.6284 37.4987 43.5507 39.5654C41.4729 41.632 38.9562 42.6654 36.0007 42.6654ZM36.0007 39.9987C38.2229 39.9987 40.1118 39.2209 41.6673 37.6654C43.2229 36.1098 44.0007 34.2209 44.0007 31.9987C44.0007 29.7765 43.2229 27.8876 41.6673 26.332C40.1118 24.7765 38.2229 23.9987 36.0007 23.9987C33.7784 23.9987 31.8895 24.7765 30.334 26.332C28.7784 27.8876 28.0007 29.7765 28.0007 31.9987C28.0007 34.2209 28.7784 36.1098 30.334 37.6654C31.8895 39.2209 33.7784 39.9987 36.0007 39.9987ZM39.034 36.9654L40.934 35.0654L37.334 31.4654V26.6654H34.6673V32.5654L39.034 36.9654ZM18.6673 27.9987V25.332H24.0007V27.9987H18.6673ZM17.334 33.332V30.6654H24.0007V33.332H17.334ZM18.6673 38.6654V35.9987H24.0007V38.6654H18.6673Z"
                                        fill="white" />
                                </g>
                            </svg>
                        </div>
                        <div class="text-textGray">
                            <h3 class="font-bold text-text28 xl:text-text32 leading-none md:leading-tight">
                                Tiempos óptimos de respuesta
                            </h3>
                            <p class="font-normal text-text20 xl:text-text24">
                                Lead-Time eficiente y oportuno diseñado a la medida de las
                                necesidades y exigencias de nuestros clientes.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-5">
                        <div class="flex justify-center items-start">
                            <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="32" cy="32" r="32" fill="#E38533" />
                                <mask id="mask0_28_3480" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="16"
                                    y="16" width="32" height="32">
                                    <rect x="16" y="16" width="32" height="32" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_28_3480)">
                                    <path
                                        d="M35.6673 42.668L38.334 45.3346H24.0007C23.2673 45.3346 22.6395 45.0735 22.1173 44.5513C21.5951 44.0291 21.334 43.4013 21.334 42.668V21.3346C21.334 20.6013 21.5951 19.9735 22.1173 19.4513C22.6395 18.9291 23.2673 18.668 24.0007 18.668H36.0007L42.6673 26.668V42.668C42.6673 43.1124 42.5729 43.518 42.384 43.8846C42.1951 44.2513 41.934 44.5569 41.6007 44.8013L34.6673 37.9346C34.2895 38.1791 33.8784 38.3624 33.434 38.4846C32.9895 38.6069 32.5118 38.668 32.0007 38.668C30.534 38.668 29.2784 38.1457 28.234 37.1013C27.1895 36.0569 26.6673 34.8013 26.6673 33.3346C26.6673 31.868 27.1895 30.6124 28.234 29.568C29.2784 28.5235 30.534 28.0013 32.0007 28.0013C33.4673 28.0013 34.7229 28.5235 35.7673 29.568C36.8118 30.6124 37.334 31.868 37.334 33.3346C37.334 33.8457 37.2729 34.3235 37.1507 34.768C37.0284 35.2124 36.8451 35.6235 36.6007 36.0013L40.0007 39.468V27.6013L34.734 21.3346H24.0007V42.668H35.6673ZM32.0007 36.0013C32.734 36.0013 33.3618 35.7402 33.884 35.218C34.4062 34.6957 34.6673 34.068 34.6673 33.3346C34.6673 32.6013 34.4062 31.9735 33.884 31.4513C33.3618 30.9291 32.734 30.668 32.0007 30.668C31.2673 30.668 30.6395 30.9291 30.1173 31.4513C29.5951 31.9735 29.334 32.6013 29.334 33.3346C29.334 34.068 29.5951 34.6957 30.1173 35.218C30.6395 35.7402 31.2673 36.0013 32.0007 36.0013Z"
                                        fill="white" />
                                </g>
                            </svg>
                        </div>
                        <div class="text-textGray">
                            <h3 class="font-bold text-text28 xl:text-text32 leading-none md:leading-tight">
                                Transparencia y compromiso
                            </h3>
                            <p class="font-normal text-text20 xl:text-text24">
                                Ofrecemos información clara y confiable que sirva como una
                                adecuada herramienta de decisión, identificándonos e
                                involucrándonos con las soluciones ofrecidas.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-5">
                        <div class="flex justify-center items-start">
                            <svg width="64" height="64" viewBox="0 0 64 64" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="32" cy="32" r="32" fill="#E38533" />
                                <mask id="mask0_231_9166" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="15"
                                    y="16" width="33" height="33">
                                    <rect x="15.873" y="16.3828" width="32" height="32" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_231_9166)">
                                    <path
                                        d="M31.873 45.7174C31.1397 45.7174 30.5119 45.4563 29.9897 44.9341C29.4675 44.4119 29.2064 43.7841 29.2064 43.0508H34.5397C34.5397 43.7841 34.2786 44.4119 33.7564 44.9341C33.2342 45.4563 32.6064 45.7174 31.873 45.7174ZM26.5397 41.7174V39.0508H37.2064V41.7174H26.5397ZM26.873 37.7174C25.3397 36.8063 24.123 35.5841 23.223 34.0508C22.323 32.5174 21.873 30.8508 21.873 29.0508C21.873 26.273 22.8453 23.9119 24.7897 21.9674C26.7342 20.023 29.0953 19.0508 31.873 19.0508C34.6508 19.0508 37.0119 20.023 38.9564 21.9674C40.9008 23.9119 41.873 26.273 41.873 29.0508C41.873 30.8508 41.423 32.5174 40.523 34.0508C39.623 35.5841 38.4064 36.8063 36.873 37.7174H26.873ZM27.673 35.0508H36.073C37.073 34.3397 37.8453 33.4619 38.3897 32.4174C38.9342 31.373 39.2064 30.2508 39.2064 29.0508C39.2064 27.0063 38.4953 25.273 37.073 23.8508C35.6508 22.4286 33.9175 21.7174 31.873 21.7174C29.8286 21.7174 28.0953 22.4286 26.673 23.8508C25.2508 25.273 24.5397 27.0063 24.5397 29.0508C24.5397 30.2508 24.8119 31.373 25.3564 32.4174C25.9008 33.4619 26.673 34.3397 27.673 35.0508Z"
                                        fill="white" />
                                </g>
                            </svg>
                        </div>
                        <div class="text-textGray">
                            <h3 class="font-bold text-text28 xl:text-text32 leading-none md:leading-tight">
                                Innovación y proactividad
                            </h3>
                            <p class="font-normal text-text20 xl:text-text24">
                                Modelos puntuales de gestión novedosos, que permiten
                                anticiparse, identificar y corregir contingencias que
                                contribuyen al éxito de sus negocios.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-11/12 mx-auto my-24" data-aos="fade-up" data-aos-offset="150">
            <div class="text-textGray text-center flex flex-col gap-10">
                <h2 class="font-bold text-text48 xl:text-text52 leading-none md:leading-tight">
                    Alianza Estratégica con Sumatek: Potenciando tu Empresa con Odoo
                </h2>
                <div class="flex justify-center items-center">
                    <img src="{{ asset('images/img/odoo.png') }}" alt="odoo">

                </div>
                <p class="font-normal text-text18 xl:text-text22">
                    Nos enorgullece ser socios de Somatec, una empresa líder con sello
                    Odoo, la plataforma de gestión empresarial más avanzada. A través de
                    esta alianza, ofrecemos soluciones integrales que optimizan tus
                    procesos contables y potencian el crecimiento de tu empresa.
                    Descubre cómo nuestra asociación con Somatec puede llevar tu negocio
                    al siguiente nivel.
                </p>
            </div>
        </section>

        <section class="my-24">
            <div class="bg-banner_3 md:bg-banner_2 bg-cover bg-center bg-no-repeat sm:w-full h-full">
                <div class="w-11/12 mx-auto flex flex-col gap-10 md:flex-row justify-between items-center py-12"
                    data-aos="fade-up" data-aos-offset="150">
                    <div>
                        <h2 class="font-bold text-textWhiteWeak text-text32 xl:text-text36 leading-none md:leading-tight">
                            ¿Listo para llevar la contabilidad de tu empresa al siguiente
                            nivel?
                        </h2>
                    </div>

                    <div class="w-full md:w-auto">
                        <a href="#"
                            class="bg-bgOrangeStrong py-4 px-10 font-bold text-textWhite text-text18 xl:text-text22 flex gap-2 w-full justify-center items-center hover:bg-orange-500 md:duration-500">
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
                    <h2 class="font-bold text-text48 xl:text-text52 leading-none md:leading-tight">
                        Bienvenido a nuestro blog de contabilidad y finanzas para pequeñas
                        empresas en Perú
                    </h2>
                    <p class="font-normal text-text18 xl:text-text22 text-justify">
                        Nuestros artículos cuentan con la última información y consejos
                        prácticos sobre contabilidad, finanzas y
                        <b>gestión empresarial</b>. Manténgase actualizado con las últimas
                        tendencias y mejores prácticas en el mundo de las finanzas
                        corporativas y descubra cómo puede aplicarlas a su propio negocio.
                    </p>

                    <div class="flex">
                        <a href="{{ route('blog') }}"
                            class="bg-[#03164D] py-4 px-10 font-bold text-textWhite text-text18 xl:text-text22 flex gap-2 justify-center items-center">
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
                            <div class="swiper-slide">
                                <div class="flex flex-col gap-5">
                                    <div class="flex justify-center items-center">
                                        <img src="{{ asset('images/img/blog_1.png') }}" alt="" class="w-full">

                                    </div>
                                    <h2 class="font-bold text-text32 xl:text-text36 leading-none md:leading-tight">
                                        Pellentesqusse tristique sed ligula quis lacinia.
                                    </h2>
                                    <p class="font-normal text-text18 xl:text-text22 text-justify">
                                        Class aptent taciti sociosqu ad litora torquent per
                                        conubia nostra, per inceptos himenaeos. Ut interdum tortor
                                        ac ornare commodo. Pellentesque tristique sed ligula quis
                                        lacinia.
                                    </p>

                                    <div>
                                        <a href="{{ route('publicacion') }}"
                                            class="font-bold text-text18 xl:text-text22 flex justify-start items-center gap-2 underline">
                                            <span>Leer más</span>
                                            <div>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
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
                            <div class="swiper-slide">
                                <div class="flex flex-col gap-5">
                                    <div class="flex justify-center items-center">
                                        <img src="{{ asset('images/img/blog_2.png') }}" alt="blog" class="w-full">

                                    </div>
                                    <h2 class="font-bold text-text32 xl:text-text36 leading-none md:leading-tight">
                                        Pellentesque tristique sed ligula quis lacinia.
                                    </h2>
                                    <p class="font-normal text-text18 xl:text-text22 text-justify">
                                        Class aptent taciti sociosqu ad litora torquent per
                                        conubia nostra, per inceptos himenaeos. Ut interdum tortor
                                        ac ornare commodo. Pellentesque tristique sed ligula quis
                                        lacinia.
                                    </p>

                                    <div>
                                        <a href="{{ route('publicacion') }}"
                                            class="font-bold text-text18 xl:text-text22 flex justify-start items-center gap-2 underline">
                                            <span>Leer más</span>
                                            <div>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
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
                            <div class="swiper-slide">
                                <div class="flex flex-col gap-5">
                                    <div class="flex justify-center items-center">
                                        <img src="{{ asset('images/img/blog_3.png') }}" alt="blog" class="w-full">

                                    </div>
                                    <h2 class="font-bold text-text32 xl:text-text36 leading-none md:leading-tight">
                                        Pellentesque tristique sed ligula quis lacinia.
                                    </h2>
                                    <p class="font-normal text-text18 xl:text-text22 text-justify">
                                        Class aptent taciti sociosqu ad litora torquent per
                                        conubia nostra, per inceptos himenaeos. Ut interdum tortor
                                        ac ornare commodo. Pellentesque tristique sed ligula quis
                                        lacinia.
                                    </p>

                                    <div>
                                        <a href="{{ route('publicacion') }}"
                                            class="font-bold text-text18 xl:text-text22 flex justify-start items-center gap-2 underline">
                                            <span>Leer más</span>
                                            <div>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
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
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- corregir la imagen -->


        <section class="mt-24">
            <div class="grid grid-cols-1 md:grid-cols-2" id="contacto">
                <div class="relative ">
                    <img src="{{ asset('images/img/women_1.png') }}" alt="" class="w-full h-full">

                </div>
                <div class="bg-bgGray text-textWhite flex flex-col gap-10 justify-center p-10">
                    <h3 class="font-bold text-text48 xl:text-text52">
                        Ponte en Contacto
                    </h3>
                    <p class="font-normal text-text20 xl:text-text24">
                        A continuación, complete el formulario y uno de nuestros
                        representantes se pondrá en contacto con usted lo mas pronto
                        posible.
                    </p>

                    
                    <form action="#" class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                        <div>

                            <input type="text" placeholder="Nombre completo"
                                class="focus:outline-none w-full bg-bgGray py-4 px-0 font-normal text-text18 xl:text-text22 text-white" />
                        </div>
                        <div>
                            <input type="tel" placeholder="Teléfono"
                                class="focus:outline-none w-full bg-bgGray py-4 px-0 font-normal text-text18 xl:text-text22 text-white" />
                        </div>

                        <div>
                            <input type="email" placeholder="E-mail"
                                class="focus:outline-none w-full bg-bgGray py-4 px-0 font-normal text-text18 xl:text-text22 text-white" />
                        </div>

                        <div>
                            <!-- cmombo -->
                            <div class="dropdown w-full">
                                <div class="input-box focus:outline-none font-normal text-text18 xl:text-text22"></div>
                                <div class="list overflow-y-scroll h-[200px] scroll-cursos">
                                    <div class="w-full">
                                        <input type="radio" name="drop1" id="id11" class="radio" />
                                        <label for="id11"
                                            class="font-normal text-text18 xl:text-text22 hover:font-bold md:duration-100">
                                            Contabilidad 360
                                        </label>
                                    </div>

                                    <div class="w-full">
                                        <input type="radio" name="drop1" id="id12" class="radio" />
                                        <label for="id12"
                                            class="font-normal text-text18 xl:text-text22 hover:font-bold md:duration-100">
                                            Adopción de Normas Internacionales
                                        </label>
                                    </div>

                                    <div class="w-full">
                                        <input type="radio" name="drop1" id="id13" class="radio" />
                                        <label for="id13"
                                            class="font-normal text-text18 xl:text-text22 hover:font-bold md:duration-100">
                                            Auditoría para empresas
                                        </label>
                                    </div>

                                    <div class="w-full">
                                        <input type="radio" name="drop1" id="id14" class="radio" />
                                        <label for="id14"
                                            class="font-normal text-text18 xl:text-text22 hover:font-bold md:duration-100">
                                            Otros
                                        </label>
                                    </div>
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
        </section>
    </main>


    </main>



@section('scripts_improtados')

    <script>
        const openForm = document.querySelector(".open-modal");
        const closeForm = document.querySelector(".close-modal");
        const modal = document.getElementById("modelConfirm");

        openForm.addEventListener("click", () => {
            console.log("open-modal")
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
            grab: true,
            centeredSlides: false,
            initialSlide: 0, // Empieza en el cuarto slide (índice 3) */
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            /*  on: {
              init: function () {
                this.params.slidesPerGroup = 2; // Avanza 2 diapositivas cada vez
                this.update(); // Actualiza el swiper con el nuevo número de diapositivas por grupo
              },
            }, */
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
            grab: true,
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
                list.style.maxHeight = list.scrollHeight + "px";
                list.style.boxShadow =
                    "0 1px 2px 0 rgba(0, 0, 0, 0.15),0 1px 3px 1px rgba(0, 0, 0, 0.1)";
            }
        };

        var rad = document.querySelectorAll(".radio");
        rad.forEach((item) => {
            item.addEventListener("change", () => {
                input.innerHTML = item.nextElementSibling.innerHTML;
                input.click();
            });
        });
    </script>
@stop

@stop
