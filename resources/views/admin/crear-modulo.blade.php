<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 dark:text-gray-200 leading-tight">
            {{ __('Añadir Módulo a una Formación') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 p-6 shadow-sm sm:rounded-lg">
                
                <form action="{{ route('admin.modulo.guardar') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <x-input-label for="formacion_id" :value="__('Selecciona la Formación (Padre)')" />
                        <select name="formacion_id" id="formacion_id" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 text-gray-900 focus:border-indigo-500 rounded-md shadow-sm">
                            <option value="">-- Elige un curso --</option>
                            @foreach($formaciones as $formacion)
                                <option value="{{ $formacion->id }}" placeholder="Fecha Inicio"  style="color: #525050 !important; background-color: white !important;">{{ $formacion->titulo_curso }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <x-input-label for="codigo_modulo" :value="__('Código del Módulo (Ej: MF0950_2)')" />
                        <x-text-input id="codigo_modulo" name="codigo_modulo" type="text" class="mt-1 block w-full" placeholder="Código del Módulo (Ej: MF0950_2)"  style="color: #525050 !important; background-color: white !important;" required />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="nombre_modulo" :value="__('Nombre del Módulo')" />
                        <x-text-input id="nombre_modulo" name="nombre_modulo" type="text" class="mt-1 block w-full" placeholder="Nombre del Módulo"  style="color: #525050 !important; background-color: white !important;" required />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="horas" :value="__('Número de Horas')" />
                        <x-text-input id="horas" name="horas" type="number" class="mt-1 block w-full" placeholder="Número de Horas"  style="color: #525050 !important; background-color: white !important;" required/>
                    </div>

                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Guardar Módulo') }}</x-primary-button>
                        <a href="{{ route('dashboard') }}" class="text-sm text-gray-600 dark:text-gray-400 hover:underline">Cancelar</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>