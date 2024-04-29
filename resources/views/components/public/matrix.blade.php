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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

        .bg__header-fondo {
            background-image: url({{ asset('storage/images/img_fit/img/fondo_mobile.png') }});

        }

        .bg__header-imagen_form_fondo {
            /* background-image: url({{ asset('storage/images/img_fit/img/imagen_form_fondo.png') }}); */
            background-image: url({{ asset('images/img/imagen_form_fondo.png') }});
        }

        @media (min-width:768px) {
            .bg__header-fondo {
                background-image: url({{ asset('storage/images/img_fit/img/imagen_header.png') }});

            }
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
        function alerta(message) {
            Swal.fire({
                title: message,
                icon: "error",
            });
        }

        function validarTelefono(value) {

            if (value !== '') {
                if (isNaN(value)) {
                    alerta("Por favor, asegúrate de ingresar solo números en el teléfono");
                    return false;
                }
            }

            if (value.length < 9) {
                alerta("El teléfono solo puede tener 9 dígitos");
                return false;
            }

            return true;
        }

        function validarEmail(value) {
            const regex =
                /^(([^<>()\[\]\\.,;:\s@”]+(\.[^<>()\[\]\\.,;:\s@”]+)*)|(“.+”))@((\[[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}])|(([a-zA-Z\-0–9]+\.)+[a-zA-Z]{2,}))$/

            if (!regex.test(value)) {
                alerta("Por favor, asegúrate de ingresar una dirección de correo electrónico válida");
                return false;
            }
            return true;
        }


        $('#headerFormulario').submit(function(event) {
            event.preventDefault();
            let formDataArray = $(this).serializeArray();
            if (!validarTelefono($('#telefono').val())) {
                return;
            };

            if (!validarEmail($('#email').val())) {
                return;
            };

            $.ajax({
                url: '{{ route('guardarContactos') }}',
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    $('#headerFormulario')[0].reset();
                    Swal.fire({
                        title: response.message,
                        icon: "success",
                    });
                    /* ---- */
                    setTimeout(function() {
                        window.location.href = '{{ route('agradecimiento') }}';
                    }, 2000);

                    /* ---- */
                    const closeForm = document.querySelector(".close-modal");
                    const modal = document.getElementById("modelConfirm");
                    modal.style.display = "none";
                    document.getElementsByTagName("body")[0].classList.remove("overflow-y-hidden");
                },
                error: function(error) {
                    const obj = error.responseJSON.message;
                    const keys = Object.keys(error.responseJSON.message);
                    let flag = false;
                    keys.forEach(key => {
                        if (!flag) {
                            const e = obj[key][0];
                            Swal.fire({
                                title: error.message,
                                text: e,
                                icon: "error",
                            });
                            flag = true; // Marcar como mostrado
                        }
                    });
                }
            });
        })



        $('#formContactos').submit(function(event) {
            event.preventDefault();
            let formDataArray = $(this).serializeArray();


            if (!validarTelefono($('#telefonoContacto').val())) {
                return;
            };

            if (!validarEmail($('#emailContacto').val())) {
                return;
            };

            var valorSeleccionado = $('input[name="service_product"]:checked').val();
            if (valorSeleccionado === "Tipo de Servicios" || valorSeleccionado === undefined) {
                alerta("Debe seleccionar un servicio")
                return;
            }

            $.ajax({
                url: '{{ route('guardarContactos') }}',
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {

                    const span = document.getElementById('span-opacity');
                    span.textContent = 'Tipo de servicios';
                    span.classList.add('opacity-35');

                    $('#formContactos')[0].reset();
                    Swal.fire({
                        title: response.message,
                        icon: "success",
                    });
                },
                error: function(error) {
                    const obj = error.responseJSON.message;
                    const keys = Object.keys(error.responseJSON.message);
                    let flag = false;
                    keys.forEach(key => {
                        if (!flag) {
                            const e = obj[key];
                            Swal.fire({
                                title: error.message,
                                text: e,
                                icon: "error",
                            });
                            flag = true; // Marcar como mostrado
                        }
                    });
                }
            });
        })



        $('#footerFormulario').submit(function(event) {
            event.preventDefault();
            let formDataArray = $(this).serializeArray();

            if (!validarEmail($('#emailFooter').val())) {
                return;
            };


            $.ajax({
                url: '{{ route('guardarContactos') }}',
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    //Falta limpiar el radio del form contacto
                    $('#footerFormulario')[0].reset();
                    Swal.fire({
                        title: response.message,
                        icon: "success",
                    });
                },
                error: function(error) {
                    const obj = error.responseJSON.message;
                    const keys = Object.keys(error.responseJSON.message);
                    let flag = false;
                    keys.forEach(key => {
                        if (!flag) {
                            const e = obj[key];
                            Swal.fire({
                                title: error.message,
                                text: e,
                                icon: "error",
                            });
                            flag = true; // Marcar como mostrado
                        }
                    });
                }
            });
        })
    </script>

</body>

</html>
