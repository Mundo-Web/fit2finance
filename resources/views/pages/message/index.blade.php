<x-app-layout>
  <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

    <div
      class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
      <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
        <h2 class="font-semibold text-slate-800 dark:text-slate-100 text-2xl tracking-tight">Mis Mensajes</h2>
      </header>
      <div class="p-3">

        <!-- Table -->
        <div class="overflow-x-auto">

          <table id="tabladatos" class="display text-lg" style="width:100%">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Tipo</th>
                <th>Servicio</th>
                <th>Acción</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($mensajes as $item)
                <tr>
                  <td>
                    @if ($item->is_read == '0')
                      <a href="{{ route('mensajes.show', $item->id) }}"><span class="mr-4"><i
                            class="fa-regular fa-envelope"></i></span><span
                          class="font-bold">{{ $item->full_name }}</span></a>
                    @else
                      <a href="{{ route('mensajes.show', $item->id) }}"><span class="mr-4"><i
                            class="fa-regular fa-envelope-open"></i></span><span>{{ $item->full_name }}</span></a>
                    @endif

                  </td>
                  <td>{{ $item->email }}</td>
                  <td>{{ $item->phone }}</td>
                  <td>{{ $item->tipo_message }}</td>
                  <td>{{ $item->service_product }}</td>
                  <td>
                    <form action=" " method="POST">
                      @csrf
                      <a data-idService='{{ $item->id }}' class="btn_delete bg-red-600 p-2 rounded text-white"><i
                          class="fa-regular fa-trash-can "></i></a>
                      <!--a href="" class="bg-yellow-400 p-2 rounded text-white mr-6"><i class="fa-regular fa-pen-to-square"></i></a-->
                    </form>
                  </td>
                </tr>
              @endforeach

            </tbody>
            <tfoot>
              <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Tipo</th>
                <th>Tool</th>
              </tr>
            </tfoot>
          </table>

        </div>
      </div>
    </div>

  </div>

  <script>
    $('document').ready(function() {
      new DataTable('#tabladatos', {
        ordering: false
      });

      $('#tabladatos').on('click', '.btn_delete', function(e) {

        var id = $(this).attr('data-idService');
        /* console.log(id); */

        Swal.fire({
          title: "Seguro que deseas eliminar?",
          text: "Vas a eliminar un mensaje",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Si, borrar!",
          cancelButtonText: "Cancelar"
        }).then((result) => {
          if (result.isConfirmed) {

            $.ajax({
              url: '{{ route('message.deleteMensaje') }}',
              method: 'POST',
              data: {
                _token: $('input[name="_token"]').val(),
                id: id,

              }

            }).done(function(res) {

              Swal.fire({
                title: res.message,
                icon: "success"
              });

              location.reload();

            })


          }
        });

      });
    })
  </script>

</x-app-layout>
