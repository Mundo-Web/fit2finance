<x-authentication-layout>
    <h1 class="text-3xl text-slate-800 dark:text-slate-100 font-bold mb-6">{{ __('Create your Account') }} ✨</h1>
    <!-- Form -->
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="space-y-4">
            <div>
                <x-label for="name">{{ __('Full Name') }} <span class="text-rose-500">*</span></x-label>
                <x-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-label for="email">{{ __('Email Address') }} <span class="text-rose-500">*</span></x-label>
                <x-input id="email" type="email" name="email" :value="old('email')" required />
            </div>

            <div>
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div>
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
        </div>
        <div class="flex items-center justify-between mt-6">
            <div class="mr-1">
                <label class="flex items-center" name="newsletter" id="newsletter">
                    <input type="checkbox" class="form-checkbox" />
                    <span class="text-sm ml-2">Email me about product news.</span>
                </label>
            </div>
            <x-button>
                {{ __('Sign Up') }}
            </x-button>                
        </div>
                    
    </form>
    <x-validation-errors class="mt-4" />  
    <!-- Footer -->
    <div class="pt-5 mt-6 border-t border-slate-200 dark:border-slate-700">
        <div class="text-sm">
            {{ __('Have an account?') }} <a class="font-medium text-indigo-500 hover:text-indigo-600 dark:hover:text-indigo-400" href="{{ route('login') }}">{{ __('Sign In') }}</a>
        </div>
    </div>


    <div class="py-12 md:py-0">
        <div class="flex flex-row md:h-screen justify-center">
            <div class="bg-blue-500 basis-1/2 hidden md:block font-poppins">
                <!-- Imagen ocupando toda la altura y sin desbordar -->
                <div style="background-image: url('{{ asset('images/img/create_decotab.png') }}')" class=" bg-cover bg-center bg-no-repeat w-full h-full">
                    <h1 class="font-medium text-[24px] py-10 bg-black bg-opacity-25 text-center text-white">
                        Deco Tab
                    </h1>
                </div>
            </div>
    
            <!-- Segundo div -->
            <div class="w-full md:basis-1/2 text-[#151515] flex justify-center items-center font-poppins px-5 md:px-0">
                <div class="w-full md:w-4/6 flex flex-col gap-5">
                    <div class="px-4 flex flex-col gap-5 text-center md:text-left">
                        <h1 class="font-semibold text-[40px]">Crear Una Cuenta</h1>
                        <p class="font-normal text-[16px]">
                            ¿Ya tienes una cuenta?
                            <a href="{{ route('login') }}" class="font-bold text-[16px] text-[#EB5D2C]">Iniciar Sesión</a>
                        </p>
                    </div>
                    <div class="">
                        <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-5">
                            @csrf
                            <div>
                                <input type="text" placeholder="Nombre completo" id="name"
                                     name="name" :value="old('name')" required autofocus autocomplete="name"
                                    class="w-full py-5 px-4 focus:outline-none  placeholder-gray-400 font-normal text-[16px] border-b-[1.5px] border-gray-200" />
                            </div>
                            <div>
                                <input type="text" placeholder="Correo electrónico" id="email" 
                                    name="email" :value="old('email')" required
                                    class="w-full py-5 px-4 focus:outline-none placeholder-gray-400 font-normal text-[16px] border-b-[1.5px] border-gray-200" />
                            </div>
                           
                            <div class="relative w-full">
                                <!-- Input -->
                                <input type="password" placeholder="Contraseña" id="password"  name="password" required autocomplete="new-password"
                                    class="w-full py-5 pl-4 pr-12 focus:outline-none placeholder-gray-400 font-normal text-[16px] border-b-[1.5px] border-gray-200" />
                                <!-- Imagen -->
                                <img src="./images/svg/pass_eyes.svg" alt="password"
                                    class="absolute right-4 top-1/2 transform -translate-y-1/2 cursor-pointer" />
                            </div>

                            <div class="relative w-full">
                                <!-- Input -->
                                <input type="password" placeholder="Confirmar contraseña" id="password_confirmation" name="password_confirmation" required autocomplete="new-password"
                                    class="w-full py-5 pl-4 pr-12 focus:outline-none placeholder-gray-400 font-normal text-[16px] border-b-[1.5px] border-gray-200" />
                                <!-- Imagen -->
                                <img src="./images/svg/pass_eyes.svg" alt="password"
                                    class="absolute right-4 top-1/2 transform -translate-y-1/2 cursor-pointer" />
                            </div>
    
                            <div class="flex gap-3 px-4">
                               
                                <label name="newsletter" id="newsletter" class="font-normal text-[16px]">
                                    <input type="checkbox" id="acepto_terminos" class="w-4" />
                                    Acepto la
                                    <span class="font-bold text-[#EB5D2C]">Política de Privacidad</span>
                                    y los
                                    <span class="font-bold text-[#EB5D2C]">
                                        Términos de Uso
                                    </span>
                                </label>
                            </div>
    
                            <div class="px-4">
                                <input type="submit" value="Crear Cuenta"
                                    class="text-white bg-[#151515] w-full py-4 rounded-3xl cursor-pointer" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
     
</x-authentication-layout>
