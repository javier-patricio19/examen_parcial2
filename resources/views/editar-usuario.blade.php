<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-1/2 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-3xl mb-4">Editar Usuario</h1>
                    <form method="POST" action="{{ route('post.modificar', $usuario_editar->id) }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />

                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$usuario_editar->name}}" required autofocus />

                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />

                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$usuario_editar->email}}" required />

                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            
                            <div class="flex items-center justify-start mt-4">
                                <x-primary-button>
                                    Aceptar
                                </x-primary-button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
