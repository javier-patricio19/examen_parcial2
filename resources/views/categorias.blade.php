<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Productos
        </h2>
    </x-slot>
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
    @if(session('error'))
    <script>
        let msg = "{{session('error')}} ";
        Swal.fire({
            position: 'top',
            icon: 'error',
            title: msg,
            showConfirmButton: false,
            timer: 2000
        })
    </script>
    @endif
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 sm:py-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($roles as $rol)
                <x-carta.categoria 
                    imagen="{{ $rol->image }}" 
                    titulo="{{ $rol->type }}" 
                    link="{{ route('roles', $rol) }}" 
                />
                @endforeach
                
            </div>
        </div>
    </div>
</x-app-layout>