<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <div class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
            <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-3xl">
                   Mensaje de {{$message->full_name}} {{-- <span class="mx-4"><i class="fa-solid fa-phone-volume"></i></span>{{$message->phone}}
                 --}}</h2>
            </header>
            <div class="p-3">
        
                <div class="px-6 pb-6">
                    
                    {{-- <p><i class="fa-solid fa-at"></i> {{$message->email}}</p> --}}
                    
                    {{-- <p class="my-10">
                       <span>{{$message->full_name}}</span> <span> está interesado en el servicio de: </span>{{$message->service_product}}
                    </p> --}}

                    <div class="flex flex-col gap-3 pt-5 pb-10">
                        <p>
                           <span class="font-bold text-[18px]">Nombre:</span> <span class="text-[16px]">{{$message->full_name}}</span>
                        </p>
                        <p>
                           <span class="font-bold text-[18px]">Teléfono:</span> <span class="text-[16px]">{{$message->phone}}</span>
                        </p>
                        <p>
                           <span class="font-bold text-[18px]">Correo:</span> <span class="text-[16px]">{{$message->email}}</span>
                        </p>

                        <p>
                            <span class="font-bold text-[18px]">{{$message->full_name}}</span>  esta interesado en tener informes del servicio: <span class="font-bold text-[18px]">{{$message->service_product}}</span> </p>

                    </div>
                    
                    
                    {{-- <p class="my-10">
                        {{$message->service_product}}
                    </p> --}}

                    <a href="{{route('mensajes.index')}}" class="bg-blue-500 px-4 py-2 rounded text-white"><span><i class="fa-solid fa-arrow-left mr-2"></i></span> Volver</a>
        
                </div>
            </div>
        </div>   

    </div>

    

</x-app-layout>
