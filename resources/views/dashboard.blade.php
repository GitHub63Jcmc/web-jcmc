<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Panel de Administración') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-indigo-500">
                    <div class="flex items-center mb-4">
                        <span class="text-3xl mr-3">🎓</span>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white">Formación</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-6">Añade nuevos cursos, grados o certificaciones a tu historial académico.</p>
                    <a href="{{ route('admin.formacion.crear') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        + Añadir Formación
                    </a>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-green-500">
                    <div class="flex items-center mb-4">
                        <span class="text-3xl mr-3">📂</span>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white">Portfolio</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-6">Sube capturas de tus proyectos y gestiona los enlaces a tus trabajos.</p>
                    <a href="{{ route('admin.portfolio.crear') }}" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        + Añadir Proyecto
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>