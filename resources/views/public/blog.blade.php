@extends('components.public.matrix')

@section('css_improtados')
    <style>
        .bg-pagination {
            background: #e38533;
            color: white;
        }



        .stroke__blog-footer {
            stroke: #fff;
            fill: #fff;
        }

        @media(min-width:768px) {
            .stroke__blog-footer {
                stroke: #E38533;
                fill: #E38533;
            }
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
    <main class="flex flex-col gap-24 w-11/12 mx-auto pt-52 pb-16">
        <section class="flex flex-col gap-12 md:gap-24">
            <div class="flex flex-col gap-12 md:gap-24 md:flex-row">
                <div class="basis-8/12 flex flex-col gap-12" data-aos="fade-up" data-aos-offset="150">
                    <h2 class="text-[#03164D] font-corbel_700 text-text48 xl:text-text52">
                        Blog
                    </h2>
                    <div id="blog-results">
                        <div id="blog-result">
                            @foreach ($blogs as $blog)
                                <div class="flex flex-col gap-5 mb-12 border-b-[1.5px] border-[#DDDDDD] pb-12">
                                    <div class="flex justify-center items-center" data-aos="fade-up" data-aos-offset="150">
                                        <img src="{{ asset($blog->url_image . '/' . $blog->name_image) }}" alt="blog"
                                            class="w-full h-auto" />
                                    </div>

                                    <div class="flex flex-col gap-2">
                                        <h3
                                            class="font-corbel_700 text-text32 xl:text-text36 text-textGray leading-none md:leading-tight">
                                            {{ $blog->title }}
                                        </h3>
                                        <p class="font-corbel_400 text-[12px] xl:text-text16 text-textGray flex gap-5">
                                            <span>{{ \Carbon\Carbon::parse($blog->created_at)->locale('es')->isoFormat('DD [de] MMMM, YYYY') }}</span>

                                            <span>|</span>
                                            <span class="font-corbel_400">Categoría:
                                                <span
                                                    class="text-textOrange font-corbel_700">{{ $blog->categories->name }}</span>

                                            </span>
                                        </p>
                                    </div>

                                    <div class="font-corbel_400 text-textGray text-text18 xl:text-text22 text-justify">
                                        <p>
                                            {{ $blog->extracto }}
                                        </p>
                                    </div>
                                    <div>
                                        <a href="{{ route('publicacion', $blog->id) }}"
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
                            @endforeach
                        </div>

                        <div class="flex items-center gap-2">
                            @if (count($blogs) !== 0)
                                <div class="flex items-center gap-2">
                                    @if (count($blogs) > 6)
                                        <p class="text-textGray font-corbel_400 text-[16px]  xl:text-text20">
                                            Pág.
                                        </p>
                                    @endif
                                    <nav class="flex justify-between" aria-label="Pagination">
                                        <div class="flex items-center gap-2 text-[16px] xl:text-text20 text-textGray">
                                            {{ $blogs->appends(['fecha' => request('fecha')])->links() }}
                                        </div>
                                    </nav>
                                </div>
                            @else
                                <p class="font-corbel_700 text-text18 text-[#505977]">No hay blog disponibles</p>
                            @endif

                        </div>


                    </div>
                </div>

                <div class="basis-4/12 flex flex-col gap-5 md:pt-5 " data-aos="fade-up" data-aos-offset="150">
                   
                    <div class="flex flex-col gap-3 text-[#03164D] border-b-[1.5px] border-[#DDDDDD] pb-5">
                        <h3 class="font-corbel_700 text-text20 xl:text-text24">Categorías</h3>
                        {{-- @foreach ($categorias as $category)          
                            <a href="/blog/{{ $category->id }}"
                                class="font-corbel_400  text-text14 md:text-text18 hover:text-textOrange md:duration-500 capitalize 
                                    @if ($id == 0 || $id == 1) {{ in_array($category->id, [0, 1]) ? 'font-corbel_700 text-text14 md:text-text18 text-textOrange' : '' }}
                                    @else
                                        {{ $category->id == $categoria->id ? 'font-corbel_700 text-text14 md:text-text18 text-textOrange' : '' }} @endif">
                                {{ $category->name }}
                            </a>
                        @endforeach --}}

                        @php
                            $isCategoria = [];
                        @endphp
                       
                       {{-- <a href="/blog/{{ $blog->categories->id }}"
                        class="font-corbel_400  text-text14 md:text-text18 hover:text-textOrange md:duration-500 capitalize 
                            @if ($id == 0 || $id == 1) {{ in_array($blog->categories->id, [0, 1]) ? 'font-corbel_700 text-text14 md:text-text18 text-textOrange' : '' }}
                            @else
                                {{ $blog->categories->id == $categoria->id ? 'font-corbel_700 text-text14 md:text-text18 text-textOrange' : '' }} @endif">
                            {{ $blog->categories->name }}
                        </a> --}}
                        {{-- @php
                            $url = $_SERVER['REQUEST_URI'];
                            $parts = explode('/', $url);
                            $termino_despues_del_slash = end($parts);
                            
                        @endphp 


                        @if ($termino_despues_del_slash == 0)
                        <a href="/blog/0"
                            class="font-corbel_700 text-textOrange  text-text14 md:text-text18 hover:text-textOrange md:duration-500 capitalize ">
                            Todos
                        </a>
                        @else
                        <a href="/blog/0"
                            class="font-corbel_400  text-text14 md:text-text18 hover:text-textOrange md:duration-500 capitalize ">
                                Todos
                        </a>
                        @endif --}}

                       {{-- @foreach ($blogs as $key => $blog)
                                @if (!in_array($blog->categories->name, $isCategoria)) 
                                    <a href="/blog/{{ $blog->categories->id }}"
                                    class="font-corbel_400  text-text14 md:text-text18 hover:text-textOrange md:duration-500 capitalize 
                                        @if ($id == 0 || $id == 1) {{ in_array($blog->categories->id, [0, 1]) ? 'font-corbel_700 text-text14 md:text-text18 text-textOrange' : '' }}
                                        @else
                                            {{ $blog->categories->id == $categoria->id ? 'font-corbel_700 text-text14 md:text-text18 text-textOrange' : '' }} @endif">
                                        {{ $blog->categories->name }}
                                    </a>
                                    @php
                                        $isCategoria[] = $blog->categories->name;
                                    @endphp
                                    
                                
                                @endif
                               
                        @endforeach --}}

                        {{-- @foreach ($categorias as $category)
                        @if ($category->blogs->count() != 0)
                            <p>{{$category->name}} - {{$category->id}}</p>
                        
                        @endif
                    
                        @endforeach --}}

                        @php
                            $url = $_SERVER['REQUEST_URI'];
                            $parts = explode('/', $url);
                            $filtro = end($parts);
                            
                        @endphp
                        <a href="/blog/0" class="font-corbel_400 text-text14 md:text-text18 hover:text-textOrange md:duration-500 capitalize 
                            {{$filtro == 0 ? 'font-corbel_700 text-textOrange' : ''}}">
                            Todos
                        </a>

                        
                        @foreach ($categorias as $category)  
                            @if ($category->blogs->where('visible', true)->count() != 0)
                                <a href="/blog/{{ $category->id }}"
                                    class="font-corbel_400  text-text14 md:text-text18 hover:text-textOrange md:duration-500 capitalize 
                                        @if ($id == 0) {{ in_array($category->id, [0]) ? 'font-corbel_700 text-text14 md:text-text18 text-textOrange' : '' }}
                                        @else
                                            {{ $category->id == $categoria->id ? 'font-corbel_700 text-text14 md:text-text18 text-textOrange' : '' }} @endif">
                                    {{ $category->name }}
                                </a>
                            @endif
                        @endforeach




                    </div>

                    <div class="flex flex-col gap-3 text-[#03164D] border-b-[1.5px] border-[#DDDDDD] pb-5">
                        <h3 class="font-corbel_700 text-text20 xl:text-text24">Archivo</h3>

                        {{-- @foreach ($blogCategorias as $blogC)
                            <a href="/blog/{{ $id }}?fecha={{ date('m', strtotime($blogC->mes)) }}-{{ $blogC->year }}"
                                class="text-text14 md:text-text18 hover:text-textOrange md:duration-500 capitalize 
                            @if (date('n', strtotime($blogC->mes)) == $mesActual && $blogC->year == $anioActual) {{ 'font-corbel_700 text-text14 md:text-text18 text-textOrange' }}
                            @else
                            {{ 'font-corbel_400' }} @endif ">
                                {{ \Carbon\Carbon::parse($blogC->year . '-' . $blogC->mes)->locale('es')->isoFormat('MMMM YYYY') }}
                            </a>
                        @endforeach --}}

                        @foreach ($blogCategorias as $blogC)
                            <a href="/blog/0?fecha={{ date('m', strtotime($blogC->mes)) }}-{{ $blogC->year }}"
                                class="text-text14 md:text-text18 hover:text-textOrange md:duration-500 capitalize 
                            @if (date('n', strtotime($blogC->mes)) == $mesActual && $blogC->year == $anioActual) {{ 'font-corbel_700 text-text14 md:text-text18 text-textOrange' }}
                            @else
                            {{ 'font-corbel_400' }} @endif ">
                                {{ \Carbon\Carbon::parse($blogC->year . '-' . $blogC->mes)->locale('es')->isoFormat('MMMM YYYY') }}
                            </a>
                        @endforeach

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
