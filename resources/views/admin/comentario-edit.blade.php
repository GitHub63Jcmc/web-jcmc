<x-app-layout>
    <x-slot name="header">
        {{-- Añadimos text-white para que se vea sobre el fondo oscuro --}}
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Editar Comentario de: ') }} <span class="text-yellow-400">{{ $comentario->autor }}</span>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            {{-- Añadimos un fondo que contraste para el formulario --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 border-t-4 border-yellow-500">
                
                <form action="{{ route('admin.comentario.actualizar', $comentario->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Autor</label>
                        <input type="text" name="autor" value="{{ $comentario->autor }}" 
                               class="w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 text-gray-900" required>
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Contenido del comentario</label>
                        <textarea name="contenido" rows="4" 
                                  class="w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 text-gray-900" required>{{ $comentario->contenido }}</textarea>
                    </div>

                    {{-- BOTONES DE ACCIÓN --}}
                    <div class="flex items-center justify-end gap-4">
                        <a href="{{ route('blog') }}" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200 transition">
                            Cancelar
                        </a>
                        
                        <button type="submit" 
                                class="bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-6 rounded-lg shadow-md transition-all active:scale-95">
                            Actualizar y Volver 🔄
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>