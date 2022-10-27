<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(session('success'))
                        <script>
                            let msg = "{{session('success')}}";
                            Swal.fire({
                                    position: 'top',
                                    icon: 'success',
                                    title: msg,
                                    showConfirmButton: false,
                                    timer: 2000
                                })
                        </script>
                    @endif

                    <table class="min-w-full">
          <thead class="bg-white border-b">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Id
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Nombre
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Email
              </th>
            </tr>
          </thead>
          <tbody>
            @if (isset($usuarios))
                @foreach ($usuarios as $usuario)
                @if ($usuario->id != $usuario_actual->id)
                    <tr class="bg-gray-100 border-b">
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$usuario->id}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$usuario->name}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$usuario->email}}
                        </td>
                        @if ($usuario_actual->name == 'admin')
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                <a class="hover:text-gray-400" href="/editar-usuario/{{$usuario->id}}">Editar</a>
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                <a class="hover:text-orange-400" href="/eliminar-usuario/{{$usuario->id}}">Eliminar</a>
                            </td>
                        @endif
                    </tr>
                @endif
                @endforeach
            @endif
          </tbody>
        </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
