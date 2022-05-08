<div class="p-4">
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            Universidades registradas
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto m-4">
        <a href="{{route('universidad.crear')}}">
            <x-jet-button>Crear universidad</x-jet-button>
        </a>
    </div>
    <livewire:universidad-table/>
</div>
