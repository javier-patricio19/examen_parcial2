<div class="group relative border-2 border-slate-800">
    <div class="">
        <img src="{{ $imagen }}" alt="img-carta" class="h-full w-full object-contain object-center lg:h-full lg:w-full">
    </div>
    <div class="mt-4 flex justify-between">
        <div class="text-center w-full">
            <h3 class="text-lg text-gray-700">
                <a href="{{ $link }}">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    {{ $titulo }}
                </a>
            </h3>
        </div>
    </div>
    
    <div class="w-full flex flex-row">
        <a href="" class="block w-full h-8 text-center bg-slate-600 hover:bg-slate-300">Editar</a>
        <a href="" class="block w-full text-center bg-slate-600 hover:bg-slate-300">Eliminar</a>
    </div>
</div>