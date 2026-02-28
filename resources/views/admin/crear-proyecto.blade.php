<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 dark:text-gray-200 leading-tight">
            {{ __('Añadir Nuevo Proyecto al Portfolio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <form action="{{ route('admin.portfolio.guardar') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <x-input-label for="titulo" :value="__('Título del Proyecto')" />
                        <x-text-input id="titulo" name="titulo" type="text" class="mt-1 block w-full text-gray-900" placeholder="Título del Proyecto" required autofocus />
                        <x-input-error class="mt-2" :messages="$errors->get('titulo')" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="imagen" :value="__('Imagen (Captura del proyecto)')" />
                        <input type="file" id="imagen" name="imagen" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required />
                        <x-input-error class="mt-2" :messages="$errors->get('imagen')" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="url" :value="__('URL del Proyecto')" />
                        <x-text-input id="url" name="url" type="url" class="mt-1 block w-full border-gray-300 text-gray-900" placeholder="https://..." />
                        <x-input-error class="mt-2" :messages="$errors->get('url')" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="descripcion" :value="__('Descripción')" />
                        <textarea id="descripcion" name="descripcion" rows="4" 
                            class="mt-1 block w-full border-gray-300 text-gray-900 bg-white focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" placeholder="Descripción"></textarea>
                        <x-input-error class="mt-2" :messages="$errors->get('descripcion')" />
                    </div>

                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Guardar Proyecto') }}</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>