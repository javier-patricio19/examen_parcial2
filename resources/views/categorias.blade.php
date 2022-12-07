<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-3xl text-gray-800 leading-tight">
            Categorias Usuarios
        </h1>
    </x-slot>
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
    <div class="h-screen bg-white">
        <div class="mx-auto max-w-2xl px-4 sm:py-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="flex flex-row flex-wrap">
                @foreach ($roles as $rol)
                    <x-carta.categoria imagen="{{ url('css/imgs/profe.png') }}" titulo="{{ $rol->type }}"
                        link="{{ route('roles', $rol) }}" />
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
