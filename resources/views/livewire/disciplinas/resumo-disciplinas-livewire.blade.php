<div>
    <div class="py-12">
        <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-6">
            @if ($disciplinas)
                @foreach ($disciplinas as $disciplina)
                    {{-- Start Card --}}
                    <div class="block rounded-lg overflow-hidden shadow-lg dark:bg-gray-800 text-center">
                        <div class="py-4 px-6 border-b border-gray-300">
                            <span class="inline-bloc px-3 py-2 text-base font-semibold text-gray-700 dark:text-white my-2">
                                Disciplina: {{ $disciplina['nome'] ?? '--' }}
                            </span>
                        </div>
                        <div class="p-6">
                            <h5 class="text-gray-900 text-xl font-medium mb-2">
                                <div class="px-2 pb-4">
                                    <span class="inline-block px-3 text-base font-semibold text-gray-700 dark:text-white">
                                        Professor: {{ $disciplina['professor'] }}
                                    </span>
                                </div>
                            </h5>
                            <p class="text-white text-base">
                                Média Geral: {{ $media_geral }}
                            </p>
                            <div class="px-2 pt-4 pb-2">
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700">
                                    {{ $disciplina['periodo'] ?? '--' }} período
                                </span>
                            </div>

                        </div>
                        <div class="py-3 px-6 border-t border-gray-300 text-gray-600">
                            <button type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                                Visualizar Notas
                            </button>
                        </div>
                    </div>
                    {{-- End Card --}}
                @endforeach
            @endif
        </div>
    </div>
</div>
