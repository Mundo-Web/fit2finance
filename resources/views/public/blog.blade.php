@extends('components.public.matrix')

@section('css_improtados')
    <style>
        .bg-pagination {
            background: #e38533;
            color: white;
        }

        .stroke__blog-footer {
            stroke: #E38533
        }

        .bg__blog-footer {
            background-color: #505977;
        }

        .btn__blog-footer {
            background-color: #E38533
        }

        .bg__header-blog {
            background-color: #505977
        }

        [type='text']:focus,
        input:where(:not([type])):focus,
        [type='email']:focus,
        [type='tel']:focus,
        select:focus {
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            border-color: #505977;
        }
    </style>
@stop


@section('content')
    <main class="flex flex-col gap-24 w-11/12 mx-auto pt-52 pb-16">
        <section class="flex flex-col gap-12 md:gap-24">
            <div class="flex flex-col gap-12 md:gap-24 md:flex-row">
                <div class="basis-8/12 flex flex-col gap-12" data-aos="fade-up" data-aos-offset="150">
                    <h2 class="text-[#03164D] font-corbel_700 text-text48 xl:text-text52">
                        Blog
                    </h2>
                    <div class="flex flex-col gap-5 border-b-[1.5px] border-[#DDDDDD] pb-12">
                        <div class="flex justify-center items-center" data-aos="fade-up" data-aos-offset="150">
                            <img src="{{ asset('images/img/blog_1.png') }}" alt="blog" class="w-full h-auto" />
                        </div>

                        <div class="flex flex-col gap-2">
                            <h3 class="font-corbel_700 text-text32 xl:text-text36 text-textGray leading-none md:leading-tight">
                                Maximiza el Potencial de tu Empresa con Outsourcing Financiero
                            </h3>
                            <p class="font-corbel_700 text-[12px] xl:text-text16 text-textGray">
                                <span>20 de febrero, 2024 </span> <span>|</span> Categoría:
                                <span class="text-textOrange">Contabilidad</span>
                            </p>
                        </div>

                        <div class="font-corbel_400 text-textGray text-text18 xl:text-text22 text-justify">
                            <p>
                                Class aptent taciti sociosqu ad litora torquent per conubia
                                nostra, per inceptos himenaeos. Ut interdum tortor ac ornare
                                commodo. Pellentesque tristique sed ligula quis lacinia.
                            </p>
                        </div>
                        <div>
                            <a href="{{ route('publicacion') }}"
                                class="text-textGray font-corbel_700 text-text18 xl:text-text22 flex justify-start items-center gap-2 underline">
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

                    <div class="flex flex-col gap-5 border-b-[1.5px] border-[#DDDDDD] pb-12">
                        <div class="flex justify-center items-center" data-aos="fade-up" data-aos-offset="150">
                            <img src="{{ asset('images/img/blog_6.png') }}" alt="blog" class="w-full h-auto" />
                        </div>

                        <div class="flex flex-col gap-2">
                            <h3 class="font-corbel_700 text-text32 xl:text-text36 text-textGray leading-none md:leading-tight">
                                Maximiza el Potencial de tu Empresa con Outsourcing Financiero
                            </h3>
                            <p class="font-corbel_700 text-[12px] xl:text-text16 text-textGray">
                                <span>20 de febrero, 2024 </span> <span>|</span> Categoría:
                                <span class="text-textOrange">Contabilidad</span>
                            </p>
                        </div>

                        <div class="font-corbel_400 text-textGray text-text18 xl:text-text22 text-justify">
                            <p>
                                Class aptent taciti sociosqu ad litora torquent per conubia
                                nostra, per inceptos himenaeos. Ut interdum tortor ac ornare
                                commodo. Pellentesque tristique sed ligula quis lacinia.
                            </p>
                        </div>
                        <div>
                            <a href="{{ route('publicacion') }}"
                                class="text-textGray font-corbel_700 text-text18 xl:text-text22 flex justify-start items-center gap-2 underline">
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

                    <div class="flex flex-col gap-5 border-b-[1.5px] border-[#DDDDDD] pb-12">
                        <div class="flex justify-center items-center" data-aos="fade-up" data-aos-offset="150">
                            <img src="{{ asset('images/img/blog_10.png') }}" alt="blog" class="w-full h-auto" />
                        </div>

                        <div class="flex flex-col gap-2">
                            <h3 class="font-corbel_700 text-text32 xl:text-text36 text-textGray leading-none md:leading-tight">
                                Maximiza el Potencial de tu Empresa con Outsourcing Financiero
                            </h3>
                            <p class="font-corbel_700 text-[12px] xl:text-text16 text-textGray">
                                <span>20 de febrero, 2024 </span> <span>|</span> Categoría:
                                <span class="text-textOrange">Contabilidad</span>
                            </p>
                        </div>

                        <div class="font-corbel_400 text-textGray text-text18 xl:text-text22 text-justify">
                            <p>
                                Class aptent taciti sociosqu ad litora torquent per conubia
                                nostra, per inceptos himenaeos. Ut interdum tortor ac ornare
                                commodo. Pellentesque tristique sed ligula quis lacinia.
                            </p>
                        </div>
                        <div>
                            <a href="{{ route('publicacion') }}"
                                class="text-textGray font-corbel_700 text-text18 xl:text-text22 flex justify-start items-center gap-2 underline">
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

                <div class="basis-4/12 flex flex-col gap-5 md:pt-5" data-aos="fade-up" data-aos-offset="150">
                    <div class="w-full">
                        <input type="text"
                            class="w-full focus:outline-none text-textGray py-4 px-10 border-[1px] border-[#505977] xl:text-text20"
                            placeholder="Buscar un tema" />
                    </div>

                    <div class="flex flex-col gap-3 text-[#03164D] border-b-[1.5px] border-[#DDDDDD] pb-5">
                        <h3 class="font-corbel_700 text-text20 xl:text-text24">Categorías</h3>
                        <a href="#"
                            class="font-corbel_400 text-[14px] xl:text-text18 hover:text-textOrange md:duration-500">
                            Todos (2)
                        </a>
                        <a href="#"
                            class="font-corbel_400 text-[14px] xl:text-text18 hover:text-textOrange md:duration-500">
                            Pallentesque (3)
                        </a>
                        <a href=""
                            class="font-corbel_400 text-[14px] xl:text-text18 hover:text-textOrange md:duration-500">
                            Conubia (2)
                        </a>
                        <a href=""
                            class="font-corbel_400 text-[14px] xl:text-text18 hover:text-textOrange md:duration-500">
                            Commodo (1)
                        </a>
                        <a href=""
                            class="font-corbel_400 text-[14px] xl:text-text18 hover:text-textOrange md:duration-500">
                            Tristique (5)
                        </a>
                    </div>

                    <div class="flex flex-col gap-3 text-[#03164D] border-b-[1.5px] border-[#DDDDDD] pb-5">
                        <h3 class="font-corbel_700 text-text20 xl:text-text24">Archivo</h3>
                        <a href="#"
                            class="font-corbel_400 text-[14px] xl:text-text18 hover:text-textOrange md:duration-500">
                            Marzo 2024
                        </a>
                        <a href="#"
                            class="font-corbel_400 text-[14px] xl:text-text18 hover:text-textOrange md:duration-500">
                            Enero 2024
                        </a>
                        <a href=""
                            class="font-corbel_400 text-[14px] xl:text-text18 hover:text-textOrange md:duration-500">
                            Diciembre 2024
                        </a>
                        <a href=""
                            class="font-corbel_400 text-[14px] xl:text-text18 hover:text-textOrange md:duration-500">
                            Noviembre 2024
                        </a>
                    </div>

                    <div class="flex flex-col gap-3 text-[#03164D] border-b-[1.5px] border-[#DDDDDD] pb-5">
                        <h3 class="font-corbel_700 text-text20 xl:text-text24">Etiquetas</h3>
                        <div class="flex gap-3">
                            <a href="#"
                                class="font-corbel_400 text-[14px] xl:text-text18 hover:text-textOrange md:duration-500">
                                Ligula,
                            </a>
                            <a href="#"
                                class="font-corbel_400 text-[14px] xl:text-text18 hover:text-textOrange md:duration-500">
                                Commodo,
                            </a>
                            <a href=""
                                class="font-corbel_400 text-[14px] xl:text-text18 hover:text-textOrange md:duration-500">
                                Tristique,
                            </a>
                            <a href=""
                                class="font-corbel_400 text-[14px] xl:text-text18 hover:text-textOrange md:duration-500">
                                Conubia,
                            </a>
                            <a href=""
                                class="font-corbel_400 text-[14px] xl:text-text18 hover:text-textOrange md:duration-500">
                                Pallentesque
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-2">
                <p class="text-textGray font-corbel_400 text-[16px] xl:text-text20">
                    Pág.
                </p>
                <nav class="flex justify-between" aria-label="Pagination">
                    <div class="flex items-center text-[16px] xl:text-text20 text-textGray">
                        <a class="rounded-lg px-4 py-2 pagination__blog font-corbel_700 bg-pagination" href="#">
                            1
                        </a>
                        <p>|</p>
                        <a class="rounded-lg px-4 py-2 font-corbel_700 pagination__blog" href="#">2
                        </a>
                        <p>|</p>
                        <a class="rounded-lg px-4 py-2 font-corbel_700 pagination__blog" href="#">3
                        </a>
                    </div>
                </nav>
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
