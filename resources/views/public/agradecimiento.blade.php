@extends('components.public.matrix')

@section('css_improtados')
    <style>
        .bg__agradecimiento-hidden {
            display: none
        }

        .bg__header-agradecimiento {
            background-color: #505977
        }
    </style>
@stop



@section('content')
    <main>
        <section class="bg-fondomobile2 md:bg-header_principal bg-cover bg-center bg-no-repeat sm:w-full h-full pt-44">
            <div class="w-11/12 mx-auto" data-aos="fade-up" data-aos-offset="150">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="flex flex-col justify-center items-center gap-10 md:py-10">
                        <div class="flex flex-col gap-5">
                            <h2 class="font-normal text-text76 text-textWhite leading-none md:leading-tight">
                                ¡Gracias por tu Interés!
                            </h2>
                            <h2 class="font-normal text-text20 xl:text-text24 text-textWhite">
                                Apreciamos tu interés en nuestros servicios de contabilidad. Nos pondremos en contacto
                                contigo lo antes posible para discutir tus necesidades y cómo podemos ayudarte a alcanzar
                                tus objetivos financieros. ¡Gracias por elegirnos como tu socio en contabilidad!
                            </h2>
                        </div>
                        <div class="flex flex-col md:flex-row gap-10 w-full">
                            <a href="{{route('index')}}"
                                class="bg-bgOrangeStrong py-3 md:py-2 px-4 font-bold text-textWhite text-text18 xl:text-text22 flex gap-2 w-auto justify-center items-center hover:bg-orange-500 md:duration-500">
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
                    <div class="flex justify-end relative">
                        <img src="./images/img/foto-banner.png" alt="banner" />
                        <div class="fixed bottom-[36px] z-[100]">
                            <a href="#" class="">
                                <img src="./images/img/WhatsApp.png" alt="whatsapp" class="" />
                            </a>
                        </div>
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


        document.addEventListener("DOMContentLoaded", () => {
            const paginations = document.querySelectorAll(".pagination__blog");
            paginations.forEach((item, index) => {
                item.addEventListener("click", (e) => {
                    item.classList.add("bg-pagination");
                    paginations.forEach((pag) => {
                        if (e.target !== pag) {
                            pag.classList.remove("bg-pagination");
                        }
                    });
                });
            });
        });
    </script>
@stop

@stop
