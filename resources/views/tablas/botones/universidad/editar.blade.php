<div class="flex items-center justify-center gap-2">
    <a
        class="shadow-lg shadow-teal-300 p-2 bg-teal-300 rounded-lg shadow-md hover:bg-teal-900 hover:text-white hover:shadow-teal-600"
        href="{{ route('universidad.editar', ["id" => $row->id]) }}">
        Editar
    </a>

    <a class="shadow-lg shadow-red-300 p-2 bg-red-300 rounded-lg shadow-md hover:bg-red-900 hover:text-white hover:shadow-red-600"
       href="{{ route('universidad.eliminar', ["id" => $row->id]) }}">
        Eliminar
    </a>
</div>
