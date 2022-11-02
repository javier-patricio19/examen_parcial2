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
                        </div>
                        <div class="mt-4">
                            <label class="mr-4" for="rol">Rol:</label>
                            <select name="rol" id="rol">
                                @foreach ($roles as $rol)
                                @if($rol->id == $usuario_editar->rol_id)
                                <option selected value="{{$rol->id}}">{{$rol->type}}</option>
                                @else
                                <option value="{{$rol->id}}">{{$rol->type}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="flex items-center justify-start mt-4">
                            <x-primary-button>
                                Aceptar
                            </x-primary-button>
                            <a href="{{ route('dashboard') }}" class="ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 hover:text-orange-400 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Cancelar</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>