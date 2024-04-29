@extends('components.public.matrix')

@section('css_improtados')
    <style>
        .stroke__blog-footer {
            stroke: #E38533;
            fill: #E38533;
        }

        .bg__blog-footer {
            background-color: #505977;
        }

        .btn__blog-footer {
            background-color: #E38533
        }

        .bg__header-publicacion {
            background-color: #505977
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

        [type='text'].buscar {
            border-color: #505977;
            border-width: 1px;
        }
    </style>
@stop


@section('content')
    <main class="flex flex-col gap-12 w-11/12 mx-auto pt-52 pb-20">
        <section class="text-textGray flex flex-col gap-10 post_blogs ">
            <div class="flex flex-col gap-4 text-center w-full md:w-8/12 mx-auto">
                <h2 class="font-corbel_700 text-text48 xl:text-text52 leading-none md:leading-tight">
                    {{ $blog->title }}
                </h2>
                <p class="font-corbel_400 text-[12px] xl:text-text16 text-textGray">
                    <span>{{ \Carbon\Carbon::parse($blog->created_at)->locale('es')->isoFormat('DD [de] MMMM, YYYY') }}
                    </span> <span>|</span> Categoría:
                    <span class="text-textOrange font-corbel_700">{{ $blog->categories->name }} </span>
                </p>
            </div>

            <p class="font-corbel_400 text-text18 xl:text-text22 text-justify">
                {{ $blog->extracto }}
            </p>

            <div class="flex justify-center items-center" data-aos="fade-up" data-aos-offset="150">
                <img src="{{ asset($blog->url_image . '/' . $blog->name_image) }}" alt="{{ $blog->name_image }}"
                    class="w-full">
            </div>

            <div class="font-corbel_400 text-text18 xl:text-text22 text-justify">
                {!! $blog->description !!}
            </div>

        </section>

        <section>
            <div class="flex justify-between items-center border-t-[1.5px] border-b-[1.5px] border-[#DDDDDD] py-10">
                <div class="flex flex-col gap-2">
                    @if ($postAnterior)
                        <a href="{{ route('publicacion', $postAnterior) }}"
                            class="text-textOrange flex items-center justify-start gap-2 font-corbel_700 text-text14 xl:text-text18">
                            <div>
                                <svg width="20" height="20" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 12L6 8L10 4" stroke="#E38533" stroke-width="1.33333" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>

                            </div>

                            <div class="after:content-[''] after:block after:w-full after:h-[1px] after:bg-bgOrangeStrong">
                                <span class="leading-none">Anterior </span>
                            </div>
                        </a>
                        <p class="font-corbel_400 text-text16 xl:text-text20 hidden md:block text-textGray">
                            {{ $postAnterior->title }}
                        </p>
                    @endif
                </div>

                <div class="flex flex-col gap-2">
                    @if ($postSiguiente)
                        <a href="{{ route('publicacion', $postSiguiente) }}"
                            class="text-textOrange flex items-center justify-end gap-2 font-corbel_700 text-text14 xl:text-text18">
                            <div class="after:content-[''] after:block after:w-full after:h-[1px] after:bg-bgOrangeStrong">
                                <span class="leading-none">Próximos</span>
                            </div>

                            <div>

                                <svg width="20" height="20" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 12L10 8L6 4" stroke="#E38533" stroke-width="1.33333" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>

                            </div>
                        </a>
                        <p class="font-corbel_400 text-text16 xl:text-text20 hidden md:block text-textGray">
                            {{ $postSiguiente->title }}
                        </p>
                    @endif
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
