<x-app-layout>
    @php
        session(['redirectTo' => Request::url()]);
    @endphp
    @if (session('success'))
        <script>
            let msg = "{{ session('success') }}";
            Swal.fire({
                position: 'top',
                icon: 'success',
                title: msg,
                showConfirmButton: false,
                timer: 2000
            })
        </script>
    @endif
    @if (session('error'))
        <script>
            let msg = "{{ session('error') }} ";
            Swal.fire({
                position: 'top',
                icon: 'error',
                title: msg,
                showConfirmButton: false,
                timer: 2000
            })
        </script>
    @endif
    <div class="w-full flex flex-col justify-start lg:flex-row">
        <div class="lg:w-[40%]">
            <x-registro titulo="{{ $rol->type }}" rol-id="{{ $rol->id }}" />
        </div>
        <div class="px-6 flex flex-row flex-wrap justify-start w-full mt-10 lg:mt-0 lg:mr-10 lg:w-fit">
            @foreach ($usuarios as $usuario)
                @if (Auth::user()->id != $usuario->id)
                    <div class="h-fit w-fit">
                        <x-carta.usuario imagen="{{ url($usuario->image) }}" titulo="{{ $usuario->name }}" link=""
                            modificable="true" link-editar="{{ route('post.editar', $usuario->id) }}"
                            link-eliminar="{{ route('post.eliminar', $usuario->id) }}"
                            is-admin="{{ $usuario->is_admin }}" />
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</x-app-layout>
