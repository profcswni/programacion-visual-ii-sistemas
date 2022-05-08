<div class="p-4">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            Borrando una universidad
        </h2>
    </x-slot>
    <div>
        <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <x-jet-form-section submit="eliminar({{request()->id}})">
                <x-slot name="title">
                    Confirme
                </x-slot>

                <x-slot name="description">
                    Confirme o cancela el borrado de la universidad
                </x-slot>

                <x-slot name="form">
                    <x-jet-label class="col-span-6">
                        Nombre: {{$universidad->nombre}}
                    </x-jet-label>

                    <x-jet-label class="col-span-6">
                        Dirección: {{$universidad->direccion}}
                    </x-jet-label>

                    <x-jet-label class="col-span-6">
                        Teléfono: {{$universidad->telefono}}
                    </x-jet-label>

                    <x-jet-label class="col-span-6">
                        Email: {{$universidad->email}}
                    </x-jet-label>
                </x-slot>

                <x-slot name="actions">
                    <x-jet-button type="button" wire:click="cancelar">
                        Cancelar
                    </x-jet-button>
                    <x-jet-danger-button class="ml-4" type="submit" wire:loading.attr="disabled">
                        Eliminar
                    </x-jet-danger-button>
                </x-slot>
            </x-jet-form-section>
        </div>
    </div>

</div>
