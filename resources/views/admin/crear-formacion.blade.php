<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Añadir Nueva Formación') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 p-6 shadow-sm sm:rounded-lg">
                <form action="{{ route('admin.formacion.guardar') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @csrf

                    <div>
                        <x-input-label for="centro_formacion" :value="__('Centro de Formación')" />
                        <x-text-input id="centro_formacion" name="centro_formacion" type="text" class="mt-1 block w-full" placeholder="Centro de Formación" required />
                    </div>

                    <div>
                        <x-input-label for="titulo_curso" :value="__('Título del Curso')" />
                        <x-text-input id="titulo_curso" name="titulo_curso" type="text" class="mt-1 block w-full" placeholder="Título del Curso" required />
                    </div>

                    <div>
                        <x-input-label for="fecha_inicio" :value="__('Fecha Inicio')" />
                        <x-text-input id="fecha_inicio" name="fecha_inicio" type="date" class="mt-1 block w-full" placeholder="Fecha Inicio"  style="color: #525050 !important; background-color: white !important;" />
                    </div>

                    <div>
                        <x-input-label for="fecha_fin" :value="__('Fecha Fin')" />
                        <x-text-input id="fecha_fin" name="fecha_fin" type="date" class="mt-1 block w-full" style="color: #525050 !important; background-color: white !important;" />
                    </div>

                    <div>
                        <x-input-label for="horas_formativas" :value="__('Horas Formativas')" />
                        <x-text-input id="horas_formativas" name="horas_formativas" type="number" class="mt-1 block w-full" placeholder="Horas Formativas" style="color: #525050 !important; background-color: white !important;" />
                    </div>

                    <div>
                        <x-input-label for="horas_pnl" :value="__('Horas PNL')" />
                        <x-text-input id="horas_pnl" name="horas_pnl" type="number" class="mt-1 block w-full" placeholder="Horas PNL" style="color: #525050 !important; background-color: white !important;" />
                    </div>

                    <div>
                        <x-input-label for="familia_profesional" :value="__('Familia Profesional')" />
                        <x-text-input id="familia_profesional" name="familia_profesional" type="text" class="mt-1 block w-full" placeholder="Familia Profesional" />
                    </div>

                    <div>
                        <x-input-label for="codigo_curso" :value="__('Código del Curso')" />
                        <x-text-input id="codigo_curso" name="codigo_curso" type="text" class="mt-1 block w-full" placeholder="Código del Curso" />
                    </div>

                    <div class="md:col-span-2">
                        <x-input-label for="financiado_por" :value="__('Financiado por')" />
                        <x-text-input id="financiado_por" name="financiado_por" type="text" class="mt-1 block w-full" placeholder="Financiado por" />
                    </div>

                    <div class="md:col-span-2 mt-4">
                        <x-primary-button>{{ __('Guardar Formación') }}</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>