<div class="p-4">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editando datos de la universidad
        </h2>
    </x-slot>
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <x-jet-form-section submit="actualizar">
                <x-slot name="title">
                    Datos generales
                </x-slot>

                <x-slot name="description">
                    Actualiza los datos de la universidad
                </x-slot>

                <x-slot name="form">
                    <!-- Nombre -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="nombre" value="Nombre" />
                        <x-jet-input id="nombre" type="text" class="mt-1 block w-full" wire:model.defer="universidad.nombre"/>
                        <x-jet-input-error for="nombre" class="mt-2" />
                    </div>

                    <!-- Dirección -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="direccion" value="Dirección" />
                        <x-jet-input id="direccion" type="text" class="mt-1 block w-full" wire:model.defer="universidad.direccion"/>
                        <x-jet-input-error for="direccion" class="mt-2" />
                    </div>

                    <!-- Teléfono -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="telefono" value="Teléfono" />
                        <x-jet-input id="telefono" type="text" class="mt-1 block w-full" wire:model.defer="universidad.telefono"/>
                        <x-jet-input-error for="telefono" class="mt-2" />
                    </div>

                    <!-- Email -->
                    <div class="col-span-6 sm:col-span-4">
                        <x-jet-label for="email" value="Email" />
                        <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="universidad.email"/>
                        <x-jet-input-error for="email" class="mt-2" />
                    </div>
                </x-slot>

                <x-slot name="actions">
                    <x-jet-action-message class="mr-3" on="saved">
                        Datos actualizados
                    </x-jet-action-message>

                    <x-jet-button wire:loading.attr="disabled">
                        Guardar
                    </x-jet-button>
                </x-slot>
            </x-jet-form-section>
        </div>
    </div>

</div>
