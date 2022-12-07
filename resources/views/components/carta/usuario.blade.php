<div class="hover:scale-105 h-fit w-fit min-w-[12rem] max-w-[12rem] mt-6 mx-2">
    <div class="flex flex-col w-full mb-2 h-[2rem]">
        @if ($isAdmin)
            <p class="self-end bg-yellow-300 rounded p-1">Administrador</p>
        @endif
    </div>
    <div class="min-h-[20rem] max-w-full rounded shadow-xl flex flex-col justify-between">
        <div class="max-w-full self-center">
            @if ($link != '')
                <a href="{{ $link }}">
                    <img src="{{ $imagen }}" alt="img-carta"
                        class="max-w-full max-h-[12rem] object-contain object-center">
                </a>
            @else
                <img src="{{ $imagen }}" alt="img-carta"
                    class="max-w-full max-h-[12rem] object-contain object-center">
            @endif

        </div>
        <div class="mb-2 flex flex-col">
            <div class="text-center w-full">
                <h3 class="text-lg text-gray-700">
                    <a href="{{ $link }}">
                        {{ $titulo }}
                    </a>
                </h3>
            </div>
            @if ($modificable)
                <div class="flex justify-between px-4 py-2">
                    <a class="bg-sky-700 hover:bg-sky-900 text-white font-bold py-2 px-[20%] rounded"
                        href="{{ $linkEditar }}">Editar</a>
                    <a class="bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-[5%] rounded"
                        href="{{ $linkEliminar }}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-6 -6 24 24" width="24"
                            fill="currentColor">
                            <path
                                d="M7.314 5.9l3.535-3.536A1 1 0 1 0 9.435.95L5.899 4.485 2.364.95A1 1 0 1 0 .95 2.364l3.535 3.535L.95 9.435a1 1 0 1 0 1.414 1.414l3.535-3.535 3.536 3.535a1 1 0 1 0 1.414-1.414L7.314 5.899z">
                            </path>
                        </svg>
                    </a>
                </div>
            @endif

        </div>
    </div>
</div>
