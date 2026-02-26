<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 dark:text-gray-200 leading-tight">
            {{ __('Panel de Administración') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                <div class="bg-gray-300 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-indigo-500">
                    <div class="flex items-center mb-4">
                        <span class="text-3xl mr-3">🎓</span>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white">Formación</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-6">Añade nuevos cursos, grados o certificaciones a tu historial académico.</p>
                    @if (session('success'))
                        <div class="mb-4 p-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800">
                            {{ session('success') }}
                        </div>
                    @endif
                    <a href="{{ route('admin.formacion.crear') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        + Añadir Formación
                    </a>
                </div>

                <div class="bg-gray-300 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-orange-500">
                    <div class="flex items-center mb-4">
                        <span class="text-3xl mr-3">📚</span>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white">Módulos</h3>
                    </div>
                    @if (session('success'))
                        <div class="mb-4 p-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800">
                            {{ session('success') }}
                        </div>
                    @endif
                    <a href="{{ route('admin.modulo.crear') }}" class="inline-flex items-center px-4 py-2 bg-orange-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-orange-700">
                        + Añadir Módulo
                    </a>
                </div>

                <div class="bg-gray-300 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-green-500">
                    <div class="flex items-center mb-4">
                        <span class="text-3xl mr-3">📂</span>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white">Portfolio</h3>
                    </div>
                    <p class="text-gray-600 dark:text-gray-400 mb-6">Sube capturas de tus proyectos y gestiona los enlaces a tus trabajos.</p>
                    @if (session('success'))
                        <div class="mb-4 p-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800">
                            {{ session('success') }}
                        </div>
                    @endif
                    <a href="{{ route('admin.portfolio.crear') }}" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        + Añadir Proyecto
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>