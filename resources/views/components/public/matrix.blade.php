<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
        content="Obtén la asesoría financiera y cursos de contabilidad para empresas en Fit 2 Finance. Nuestro equipo de expertos te ayudarán a cumplir tus objetivos." />

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Aqui van los CSS --}}
    @yield('css_improtados')

    {{-- Swipper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Boutique financiera - Fit 2 Finance</title>

    <style>

        @font-face {
            font-family: "corbelregular";
            src: url({{ asset('fonts/corbel-webfont.woff') }}) format("woff");
        }

        @font-face {
            font-family: "corbelbold";
            src: url({{ asset('fonts/corbelb-webfont.woff') }}) format("woff");
           
        }

        @font-face {
            font-family: "corbelitalic";
            src: url({{ asset('fonts/corbeli-webfont.woff') }}) format("woff");
        }

        @font-face {
            font-family: "corbellight";
            src: url({{ asset('fonts/corbell-webfont.woff') }}) format("woff");
        }

        @font-face {
            font-family: "corbellight_italic";
            src: url({{ asset('fonts/corbelli-webfont.woff') }}) format("woff");
        }

        @font-face {
            font-family: "corbelbold_italic";
            src: url({{ asset('fonts/corbelz-webfont.woff') }}) format("woff");
        }
    </style>
</head>

<body>
    @include('components.public.header')

    <div>
        {{-- Aqui va el contenido de cada pagina --}}
        @yield('content')

    </div>

    @include('components.public.footer')


    @yield('scripts_improtados')

    <script>
        $('#formContactos').submit(function(event) {
            // Evita que se envíe el formulario automáticamente
            //console.log('evcnto')
            event.preventDefault();
            let formDataArray = $(this).serializeArray();
            //console.log(formDataArray);
            $.ajax({
                url: '{{ route('guardarContactos') }}',
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    Swal.fire({
                        title: response.message,
                        icon: "success",
                    });
                }
            });
        })
    </script>

</body>

</html>
