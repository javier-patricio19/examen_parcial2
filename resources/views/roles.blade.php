<x-app-layout>
    <div class="w-full flex flex-col lg:flex-row">
        <div class="lg:w-1/2 lg:left-4">
            <x-registro titulo="{{$rol->type}}" />
        </div>
        <div class="grid-cols-3 grid gap-4 mt-10 lg:mr-10 lg:w-1/2 lg:right-4">
            @foreach ($usuarios as $usuario)
                <div class="">
                    <x-carta.categoria imagen="{{ url($usuario->image) }}" titulo="{{$usuario->name}}" link="" />
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
