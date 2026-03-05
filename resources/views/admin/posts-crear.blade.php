<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Crear Nuevo Artículo en el Blog') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-300 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-8 border-l-4 border-pink-500">
                
                <form action="{{ route('admin.post.guardar') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <div>
                        <label for="titulo" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Título del Post</label>
                        <input type="text" name="titulo" id="titulo" 
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-pink-500 focus:ring-pink-500 dark:bg-gray-700 dark:text-white" 
                            placeholder="Ej: Mi experiencia con Laravel 11" required>
                    </div>

                    <div>
                        <label for="autor" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Autor</label>
                        <input type="text" name="autor" id="autor" 
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-pink-500 focus:ring-pink-500 dark:bg-gray-700 dark:text-white" 
                            value="Joao Cabral" required>
                    </div>

                    <div>
                        <label for="contenido" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Cuerpo del artículo</label>
                        <textarea name="contenido" id="contenido" rows="6" 
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-pink-500 focus:ring-pink-500 dark:bg-gray-700 dark:text-white" 
                            placeholder="Escribe aquí el contenido..." required></textarea>
                    </div>

                    <div class="bg-gray-200 dark:bg-gray-700 p-4 rounded-md">
                        <label for="imagen" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Imagen de portada</label>
                        <input type="file" name="imagen" id="imagen" 
                            class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-pink-600 file:text-white hover:file:bg-pink-700" 
                            required>
                        <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Formatos: JPG, PNG, JPEG. Máx: 2MB.</p>
                    </div>

                    <div class="flex items-center justify-end space-x-4">
                        <a href="{{ route('dashboard') }}" class="text-sm text-gray-600 dark:text-gray-400 hover:underline">Cancelar</a>
                        <button type="submit" 
                            class="inline-flex items-center px-6 py-3 bg-pink-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-pink-700 active:bg-pink-900 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            🚀 Publicar en el Blog
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>