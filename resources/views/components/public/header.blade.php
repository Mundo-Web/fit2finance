<!-- hamburguesa -->
<div class="navigation z-[800]">
    <button aria-label="hamburguer" type="button" class="hamburger onMenu" id="position">
        <svg width="25" height="25" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18 2L2 18M18 18L2 2" stroke="white" stroke-width="2.66667" stroke-linecap="round" />
        </svg>
    </button>
    <nav class="menu-list">
        <ul>
            <li>
                <a href="{{ route('index') }}" class="">Inicio</a>
            </li>
            <li>
                <a href="#" class="">Servicios</a>
            </li>
            <li>
                <a href="{{ route('blog') }}" class="">Blog</a>
            </li>
            <li>
                <a href="#contacto" class="">Contacto</a>
            </li>
        </ul>
    </nav>
</div>
<!-- --- -->
<header id="inicio" class=" w-full">
    <div
        class="bg__header-fondo bg-cover bg-center bg-no-repeat sm:w-full h-full bg__agradecimiento-hidden">
        <div class="w-11/12 mx-auto flex flex-col gap-5 md:flex-row justify-between items-center py-10">
            <div data-aos="fade-up" data-aos-offset="150">
                <h1 class="font-corbel_700 text-textWhiteWeak text-text28 xl:text-text32">
                    Curso de Contabilidad para Emprendedores
                </h1>
                <p class="font-corbel_400 text-textWhiteWeak text-text18 xl:text-text22">
                    Aprende contabilidad fácilmente
                </p>
            </div>

            <div class="w-full md:w-auto">
                <button type="button"
                    class="bg-bgGray p-4 font-corbel_700 text-textWhite text-text18 xl:text-text22 flex gap-2 hover:bg-bgGrayStrong md:duration-500 w-full justify-center items-center open-modal">
                    <span> Inscríbete al curso </span>
                    <div>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.40039 16.7992L7.77639 11.63L12.3844 16.0608L21.6004 7.19922M21.6004 7.19922H14.6884M21.6004 7.19922V13.8454"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </button>
                <!-- modal form -->
                <div id="modelConfirm"
                    class="fixed hidden z-[200] inset-0 bg-white bg-opacity-60 overflow-y-auto h-full w-full blur-background">
                    <div class="relative top-[48px] mx-auto shadow-xl rounded-md bg-white max-w-md md:max-w-[1150px]">
                        <div class="text-center text-textWhite">
                            <div class="flex flex-col md:flex-row">
                                <div
                                    class="bg__header-imagen_form_fondo  bg-cover bg-center bg-no-repeat sm:w-full h-full flex flex-col gap-8 p-10 basis-1/2">
                                    <div class="flex flex-col items-center md:flex-row justify-between gap-5">
                                        <div>
                                            <img src="{{ asset('storage/images/img_fit/img/logo_modal_finanace.png') }}"
                                                alt="fit2finance" />
                                        </div>
                                        <a href="#" class="font-corbel_700 text-text14 xl:text-text18">
                                            consultas@fit2finanace.com.pe
                                        </a>
                                    </div>
                                    <div class="flex flex-col gap-4">
                                        <h1 class="font-corbel_700 text-[40px] lg:text-[64px] leading-none md:leading-tight">
                                            Curso: Contabilidad para Emprendedores
                                        </h1>
                                        <p class="font-corbel_400 text-[20px] lg:text-[24px]">
                                            Aprende contabilidad fácilmente.
                                            <span class="text-textOrange">Inscribete aquí</span>
                                        </p>
                                    </div>
                                    <div>
                                        <form action="#" class="flex flex-col gap-10 text-text18 xl:text-text22">
                                            <div>
                                                <input type="text" placeholder="Nombre completo"
                                                    class="focus:outline-none w-full bg-transparent pt-4 pl-4 pb-4 font-corbel_400 text-text18 xl:text-text22 text-white placeholder:text-white placeholder:opacity-35" />
                                            </div>
                                            <div>
                                                <input type="tel" placeholder="Teléfono"
                                                    class="focus:outline-none w-full bg-transparent pt-4 pl-4 pb-4 font-corbel_400 text-text18 xl:text-text22 text-white placeholder:text-white placeholder:opacity-35" />
                                            </div>

                                            <div>
                                                <input type="email" placeholder="E-mail"
                                                    class="focus:outline-none w-full bg-transparent pt-4 pl-4 pb-4 font-corbel_400 text-text18 xl:text-text22 text-white placeholder:text-white placeholder:opacity-35" />
                                            </div>

                                            <div class="">
                                                <button type="submit"
                                                    class="bg-bgOrangeStrong w-full flex justify-center items-center py-4 gap-2 font-corbel_700 text-[18px] xl:text-text22 hover:bg-orange-500 md:duration-500">
                                                    <span> Inscribirme </span>
                                                    <div>
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M2.40039 16.7992L7.77639 11.63L12.3844 16.0608L21.6004 7.19922M21.6004 7.19922H14.6884M21.6004 7.19922V13.8454"
                                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                </button>
                                            </div>
                                            <div>
                                                <button type="button"
                                                    class="font-corbel_700 inline-flex items-center rounded-lg text-[18px] xl:text-text22 px-3 py-2.5 text-center text-textOrange close-modal"
                                                    data-modal-toggle="delete-user-modal">
                                                    Cerrar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="justify-center items-center flex basis-1/2">
                                    <img src="{{ asset('images/img/imagen_2_modal.png') }}" alt=""
                                        class="w-full h-full" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- -- -->
            </div>
        </div>
    </div>

    <div class=" bg__header-blog bg__header-publicacion  bg-cover bg-center bg-no-repeat w-full  absolute">
        <div class="w-11/12 mx-auto flex justify-between items-center py-10">
            <a href="index.html" data-aos="fade-up" data-aos-offset="150">
                <div>
                    <img src="{{ asset('images/img/logo.png') }}" alt="logo fit2finance" class="w-56 md:w-full" />
                </div>
            </a>

            <div data-aos="fade-up" data-aos-offset="150">
                <nav class="text-white hidden md:flex gap-5 font-corbel_700 text-text22">
                    <a href="/" class="py-2 px-5 flex gap-2 justify-center items-center">
                        <img src="{{ asset('images/svg/point_naranja.svg') }}" alt="point" />
                        <span>Inicio</span>
                    </a>
                    <a href="#" class="py-2 px-5 flex justify-center items-center gap-3">
                        <span>Servicios</span>
                    </a>
                    <a href="{{ route('blog') }}"
                        class="rounded-full hover:bg-colorBackgroundHeader md:duration-300 py-2 px-5">Blog
                    </a>
                    <a href="#contacto"
                        class="rounded-full hover:bg-colorBackgroundHeader md:duration-300 py-2 px-5">Contacto
                    </a>
                </nav>
            </div>

            <div class="md:hidden">
                <button aria-label="hamburguer" class="hamburger onMenu">
                    <img src="{{ asset('images/img/menu.png') }}" alt="menu hamburguesa" class="w-[1200px]" />
                </button>
            </div>

        </div>

        <div class="flex justify-end relative">

            <div class="fixed bottom-[40px] right-[40px] z-[100]">
                <a href="#" class=""><img src="{{ asset('images/img/WhatsApp.png') }}" alt="whatsapp"
                        class="w-20 h-20 md:w-full md:h-full" /></a>
            </div>
        </div>


    </div>
</header>
