<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Gestión de Categorías</h1>

    {{-- Formulario --}}
    <div class="mb-6 space-y-2">
        <input type="text" wire:model.defer="nombre" placeholder="Nombre" class="w-full border p-2">
        <input type="text" wire:model.defer="color" placeholder="Color (#hex)" class="w-full border p-2">
        <input type="text" wire:model.defer="icono" placeholder="Ícono (ej: bi-wallet)" class="w-full border p-2">
        <select wire:model.defer="tipo" class="w-full border p-2">
            <option value="ingreso">Ingreso</option>
            <option value="gasto">Gasto</option>
        </select>

        @if ($modoEdicion)
            <button wire:click="actualizar" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">
                Actualizar
            </button>
            <button wire:click="resetFormulario" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
                Cancelar
            </button>
        @else
            <button wire:click="guardar" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Guardar
            </button>
        @endif
    </div>

    {{-- Tabla --}}
    <table class="w-full table-auto border-collapse">
        <thead>
            <tr class="bg-gray-200">
                <th class="border p-2">#</th>
                <th class="border p-2">Nombre</th>
                <th class="border p-2">Tipo</th>
                <th class="border p-2">Color</th>
                <th class="border p-2">Ícono</th>
                <th class="border p-2 text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categorias as $categoria)
                <tr>
                    <td class="border p-2 text-center">{{ $loop->iteration }}</td>
                    <td class="border p-2">{{ $categoria->nombre }}</td>
                    <td class="border p-2">{{ ucfirst($categoria->tipo) }}</td>
                    <td class="border p-2">{{ $categoria->color }}</td>
                    <td class="border p-2">{{ $categoria->icono }}</td>
                    <td class="border p-2 text-center">
                        <button wire:click="editar({{ $categoria->id }})" class="text-yellow-600 hover:underline">✏️</button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="border p-2 text-center" colspan="6">Sin registros aún</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
