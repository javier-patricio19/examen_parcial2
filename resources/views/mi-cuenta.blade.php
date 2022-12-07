<x-app-layout>
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
    <div class="py-12">
        <div class="w-1/2 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-3xl mb-4">Editar Cuenta</h1>

                    <form method="POST" action="{{ route('modificar-cuenta') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />

                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                value="{{ $usuario_editar->name }}" required autofocus />

                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />

                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                value="{{ $usuario_editar->email }}" required />

                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        {{-- foto perfil --}}
                        <div class="mt-4">
                            <x-input-label class="text-base" for="foto_pefil" :value="__('Foto de Perfil')" />

                            <x-text-input id="foto" name="foto" class="block mt-1 w-full" type="file" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>


                        <div class="flex items-center justify-start mt-8">
                            <x-primary-button>
                                Aceptar
                            </x-primary-button>
                            <a href="{{ route('dashboard') }}"
                                class="ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 hover:text-orange-400 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Cancelar</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
