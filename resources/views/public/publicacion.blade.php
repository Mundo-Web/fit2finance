@extends('components.public.matrix')

@section('css_improtados')
    <style>
        .stroke__blog-footer {
            stroke: #E38533
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
            border-bottom-color: rgb(255,255,255);
        }
        [type='text'].buscar{
            border-color: #505977;
            border-width: 1px; 
        }
    </style>
@stop


@section('content')
    <main class="flex flex-col gap-12 w-11/12 mx-auto pt-52 pb-20">
        <section class="text-textGray flex flex-col gap-10">
            <div class="flex flex-col gap-4 text-center w-full md:w-8/12 mx-auto">
                <h2 class="font-corbel_700 text-text48 xl:text-text52 leading-none md:leading-tight">
                    Maximiza el Potencial de tu Empresa con Outsourcing Financiero
                </h2>
                <p class="font-corbel_700 text-[12px] xl:text-text16 text-textGray">
                    <span>20 de febrero, 2024 </span> <span>|</span> Categoría:
                    <span class="text-textOrange">Contabilidad</span>
                </p>
            </div>

            <p class="font-corbel_400 text-text18 xl:text-text22 text-justify">
                ¿Tu empresa se está ahogando en tareas financieras que consumen tiempo
                y recursos preciosos? ¿Te encuentras luchando por mantener el control
                de la contabilidad, la facturación y otras responsabilidades
                financieras mientras intentas hacer crecer tu negocio? ¡No estás solo!
            </p>

            <div class="flex justify-center items-center" data-aos="fade-up" data-aos-offset="150">
                <img src="{{ asset('images/img/publicacion.png') }}" alt="publicaciones" class="w-full" />
            </div>

            <p class="font-corbel_400 text-text18 xl:text-text22 text-justify">
                En un entorno empresarial cada vez más competitivo, es crucial
                optimizar tus recursos y enfocarte en lo que mejor sabes hacer: hacer
                crecer tu empresa. Es aquí donde el outsourcing financiero puede
                marcar la diferencia.
            </p>

            <div class="flex flex-wrap gap-4 justify-center font-medium text-[20px] md:text-[24px] my-10" data-aos="fade-up"
                data-aos-offset="150">
                <p
                    class="bg-[#EEEEF0] flex-grow text-text18 xl:text-text22 text-justify border-l-8 border-borderOrange rounded-md px-3 py-2 w-full md:w-5/12 lg:w-3/12">
                    El outsourcing financiero ofrece una solución eficiente y rentable
                    para las empresas que buscan optimizar sus operaciones financieras y
                    concentrarse en su crecimiento. En Fit2Finance, estamos
                    comprometidos a ser tu socio confiable en el camino hacia el éxito
                    financiero. Contáctanos hoy mismo para descubrir cómo podemos
                    ayudarte a impulsar tu empresa hacia adelante con nuestro servicio
                    de outsourcing financiero.
                </p>
            </div>

            <h3 class="font-medium text-text18 xl:text-text22">
                ¿Qué es el Outsourcing Financiero?
            </h3>

            <p class="font-corbel_400 text-text18 xl:text-text22 text-justify">
                El outsourcing financiero, también conocido como tercerización
                financiera, implica delegar las tareas financieras de tu empresa a un
                equipo de expertos externos. Desde la gestión de la contabilidad hasta
                la preparación de informes financieros y la administración de nóminas,
                el outsourcing financiero te libera de las tareas administrativas para
                que puedas concentrarte en tus objetivos estratégicos.
            </p>

            <h3 class="font-corbel_400 text-text18 xl:text-text22">
                Beneficios del Outsourcing Financiero:
            </h3>

            <ol class="list-decimal pl-4 font-corbel_400 text-text18 xl:text-text22 text-justify flex flex-col gap-2">
                <li>
                    Reducción de Costos: Al tercerizar tus tareas financieras, eliminas
                    la necesidad de contratar personal interno y cubrir los costos
                    asociados, como salarios, beneficios y capacitación.
                </li>
                <li>
                    Acceso a Expertos: Al asociarte con un proveedor de servicios
                    financieros externo, obtienes acceso a un equipo de expertos en
                    contabilidad y finanzas que pueden proporcionar asesoramiento
                    especializado y soluciones personalizadas para tu empresa.
                </li>
                <li>
                    Enfoque en el Core Business: Al liberarte de las responsabilidades
                    financieras, puedes dedicar más tiempo y recursos a actividades
                    comerciales clave, como ventas, marketing y desarrollo de productos.
                </li>
                <li>
                    Cumplimiento Garantizado: Los proveedores de outsourcing financiero
                    se mantienen al día con las últimas regulaciones y normativas
                    financieras, garantizando el cumplimiento de tu empresa y
                    minimizando el riesgo de errores costosos.
                </li>
            </ol>

            <div class="flex justify-center items-center" data-aos="fade-up" data-aos-offset="150">
                <img src="{{ asset('images/img/publicacion_4.png') }}" alt="publicaciones" class="w-full" />
            </div>

            <h3 class="font-medium text-text18 xl:text-text22">
                ¿Por qué elegirnos para tu Outsourcing Financiero?
            </h3>

            <p class="font-corbel_400 text-text18 xl:text-text22 text-justify">
                En Fit2Finance, entendemos los desafíos financieros que enfrentan las
                empresas en la actualidad. Nuestro equipo de profesionales altamente
                calificados y con experiencia está dedicado a brindar soluciones
                financieras personalizadas que se adapten a las necesidades
                específicas de tu empresa. Desde la gestión diaria de la contabilidad
                hasta la preparación de informes financieros estratégicos, estamos
                aquí para ayudarte a maximizar el potencial de tu empresa y alcanzar
                tus objetivos financieros.
            </p>

            <p class="font-corbel_400 text-[12px] xl:text-text16">
                Etiquetas
                <span class="text-textOrange font-corbel_700">#Varius #Lacinia #Eget</span>
            </p>
        </section>

        <section>
            <div class="flex justify-between items-center border-t-[1.5px] border-b-[1.5px] border-[#DDDDDD] py-10">
                <div class="flex flex-col gap-2">
                    <a href="#"
                        class="text-textOrange flex items-center justify-start gap-2 font-corbel_700 text-text14 xl:text-text18">
                        <div>
                            <img src="{{ asset('images/svg/chevron-left.svg') }}" alt="" />
                        </div>

                        <div class="after:content-[''] after:block after:w-full after:h-[2px] after:bg-bgOrangeStrong">
                            <span>Anterior </span>
                        </div>
                    </a>
                    <p class="font-corbel_400 text-text16 xl:text-text20 hidden md:block text-textGray">
                        Nunc vestibulum quam erat, a imperdiet nunc sodales elementum
                    </p>
                </div>

                <div class="flex flex-col gap-2">
                    <a href="#"
                        class="text-textOrange flex items-center justify-end gap-2 font-corbel_700 text-text14 xl:text-text18">
                        <div class="after:content-[''] after:block after:w-full after:h-[2px] after:bg-bgOrangeStrong">
                            <span>Próximos </span>
                        </div>

                        <div>
                            <img src="{{ asset('images/svg/chevron-right.svg') }}" alt="" />
                        </div>
                    </a>
                    <p class="font-corbel_400 text-text16 xl:text-text20 hidden md:block text-textGray">
                        Nunc vestibulum quam erat, a imperdiet nunc sodales elementum
                    </p>
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
