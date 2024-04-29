@extends('components.public.matrix')

@section('css_improtados')
    <style>
        .bg__agradecimiento-hidden {
            display: none
        }

        .bg__header-agradecimiento {
            background-color: #505977
        }

        .bg__main {
            background-image: url({{ asset('/images/img/FondoMobile2_1.webp') }});
        }

        .bg__main-option {
            background-image: url({{ asset('/images/img/main-option-2.png') }});
        }

        @media (min-width:768px){
            .bg__main {
                background-image: url({{ asset('/images/img/header_principal_1.webp') }});;
            }

            .bg__main-option {
            background-image: url({{ asset('/images/img/main-option-1.png') }});
        }
        }
    </style>
@stop


@section('content')
    <main>
        <section class="bg__main-option bg-cover bg-center bg-no-repeat sm:w-full h-full pt-40 md:pt-32">
            <div class="" data-aos="fade-up" data-aos-offset="150">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div class="flex flex-col justify-center items-center gap-10 md:py-10 w-10/12 mx-auto">
                        <div class="flex flex-col gap-5 ">
                            <h2 class="font-corbel_400 text-text64 md:text-text76 text-textWhite leading-none md:leading-tight">
                                ¡Gracias por tu Interés!
                            </h2>
                            <h2 class="font-corbel_400 text-text20 xl:text-text24 text-textWhite">
                                Apreciamos tu interés en nuestros servicios de contabilidad. Nos pondremos en contacto
                                contigo lo más antes posible para discutir tus necesidades y cómo podemos ayudarte a alcanzar
                                tus objetivos financieros. ¡Gracias por elegirnos como tu socio en contabilidad!
                            </h2>
                        </div>
                        <div class="flex flex-col md:flex-row gap-10 w-full items-start">
                            <a href="{{route('index')}}"
                                class="bg-bgOrangeStrong py-3 px-5 font-corbel_700 text-textWhite text-text18 xl:text-text22 flex gap-2 w-auto justify-center items-center hover:bg-orange-500 md:duration-500">
                                <span> Volver al inicio </span>
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

                    <div class="w-full flex justify-end">
                        <img src="{{ asset('images/img/foto-banner_10.webp') }}" alt="banner" 
                        class="">
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

    </script>
@stop

@stop
