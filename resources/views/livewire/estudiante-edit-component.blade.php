<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Gestion de estudiantes
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <x-jet-form-section submit="guardar">
                <x-slot name="title">
                    Datos del estudiante
                </x-slot>

                <x-slot name="description">
                    Actualizar los datos del estudiante
                </x-slot>
                <x-slot name="form">
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="nombres" value="Nombres" />
                        <x-jet-input id="nombres" type="text" class="mt-1 block w-full"
                            wire:model.defer="estudiante.nombres" />
                        <x-jet-input-error for="nombres" class="mt-2" />
                    </div>

                </x-slot>
                <x-slot name="actions">
                    <x-jet-button wire:loading.attr="disabled">
                        Guardar
                    </x-jet-button>
                </x-slot>
            </x-jet-form-section>

        </div>
    </div>
</div>
