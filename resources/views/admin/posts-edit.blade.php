<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Editar Post: ' . $post->titulo) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-200 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-8 border-l-4 border-yellow-500">
                
                <form action="{{ route('admin.post.actualizar', $post->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT') {{-- IMPORTANTE: Para actualizar usamos PUT --}}

                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Título</label>
                        <input type="text" name="titulo" value="{{ $post->titulo }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 text-gray-900 dark:bg-gray-700 dark:text-white" required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Autor</label>
                        <input type="text" name="autor" value="{{ $post->autor }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 text-gray-900 dark:bg-gray-700 dark:text-white" required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Contenido</label>
                        <textarea name="contenido" rows="6" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring-yellow-500 text-gray-900 dark:bg-gray-700 dark:text-white" required>{{ $post->contenido }}</textarea>
                    </div>

                    <div class="bg-gray-200 dark:bg-gray-700 p-4 rounded-md">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Imagen actual</label>
                        <img src="{{ asset('img/' . $post->imagen) }}" class="w-32 mb-4 rounded border-2 border-yellow-500">
                        
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Cambiar imagen (opcional)</label>
                        <input type="file" name="imagen" class="block w-full text-sm text-gray-900 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:bg-yellow-600 file:text-black hover:file:bg-yellow-700">
                    </div>

                    <div class="flex items-center justify-end space-x-4">
                        <a href="{{ route('blog') }}" class="text-sm text-gray-600 dark:text-gray-400 hover:underline">Cancelar</a>
                        <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-black font-black py-2 px-6 rounded-lg shadow-lg transform transition active:scale-95 border-b-4 border-orange-700">
                            Guardar Cambios
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>