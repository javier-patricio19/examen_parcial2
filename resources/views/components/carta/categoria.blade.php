<div class="hover:scale-105 h-fit w-fit min-w-[12rem] max-w-[12rem] mt-6 mx-2">
    <div class="flex flex-col w-full mb-2 h-[2rem]">
        <a class="self-end hover:animate-spin" href="{{ route('modificar-categoria', $rolId) }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-2 -2 24 24" width="24" fill="currentColor">
                <path
                    d="M20 8.163A2.106 2.106 0 0 0 18.926 10c0 .789.433 1.476 1.074 1.837l-.717 2.406a2.105 2.105 0 0 0-2.218 3.058l-2.062 1.602A2.104 2.104 0 0 0 11.633 20l-3.29-.008a2.104 2.104 0 0 0-3.362-1.094l-2.06-1.615A2.105 2.105 0 0 0 .715 14.24L0 11.825A2.106 2.106 0 0 0 1.051 10C1.051 9.22.63 8.54 0 8.175L.715 5.76a2.105 2.105 0 0 0 2.207-3.043L4.98 1.102A2.104 2.104 0 0 0 8.342.008L11.634 0a2.104 2.104 0 0 0 3.37 1.097l2.06 1.603a2.105 2.105 0 0 0 2.218 3.058L20 8.162zM14.823 3.68c0-.063.002-.125.005-.188l-.08-.062a4.103 4.103 0 0 1-4.308-1.428l-.904.002a4.1 4.1 0 0 1-4.29 1.43l-.095.076A4.108 4.108 0 0 1 2.279 7.6a4.1 4.1 0 0 1 .772 2.399c0 .882-.28 1.715-.772 2.4a4.108 4.108 0 0 1 2.872 4.09l.096.075a4.104 4.104 0 0 1 4.289 1.43l.904.002a4.1 4.1 0 0 1 4.307-1.428l.08-.062A4.108 4.108 0 0 1 17.7 12.4a4.102 4.102 0 0 1-.773-2.4c0-.882.281-1.716.773-2.4a4.108 4.108 0 0 1-2.876-3.919zM10 14a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z">
                </path>
            </svg>
        </a>
    </div>
    <div class="min-h-[20rem] max-w-full rounded shadow-xl flex flex-col justify-between">
        <div class="max-w-full self-center">
            <a href="{{ $link }}">
                <img src="{{ $imagen }}" alt="img-carta"
                    class="max-w-full max-h-[12rem] object-contain object-center">
            </a>
        </div>
        <div class="mb-2 flex flex-col">
            <div class="text-center w-full">
                <h3 class="text-lg text-gray-700">
                    <a href="{{ $link }}">
                        {{ $titulo }}
                    </a>
                </h3>
            </div>

        </div>
    </div>

    <div class="w-full flex flex-row">
        <a href="" class="block w-full h-8 text-center bg-slate-600 hover:bg-slate-300">Editar</a>
        <a href="" class="block w-full text-center bg-slate-600 hover:bg-slate-300">Eliminar</a>
    </div>
</div>
