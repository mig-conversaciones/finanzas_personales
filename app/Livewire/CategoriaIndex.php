<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Categoria;
use Illuminate\Support\Facades\Auth;

class CategoriaIndex extends Component
{
    public $nombre;
    public $color;
    public $icono;
    public $tipo = 'ingreso';

    public $categoria_id;
    public $modoEdicion = false;

    protected $rules = [
        'nombre' => 'required|string|max:50',
        'color' => 'nullable|string|max:20',
        'icono' => 'nullable|string|max:50',
        'tipo' => 'required|in:ingreso,gasto',
    ];

    public function render()
    {
        $categorias = Categoria::where('user_id', Auth::id())->get();

        return view('livewire.categoria-index', [
            'categorias' => $categorias
        ]);
    }

    public function guardar()
    {
        $this->validate();

        Categoria::create([
            'nombre' => $this->nombre,
            'color' => $this->color,
            'icono' => $this->icono,
            'tipo' => $this->tipo,
            'user_id' => auth()->id(),
        ]);

        $this->resetFormulario();
    }

    public function editar($id)
    {
        $categoria = Categoria::findOrFail($id);

        $this->categoria_id = $categoria->id;
        $this->nombre = $categoria->nombre;
        $this->color = $categoria->color;
        $this->icono = $categoria->icono;
        $this->tipo = $categoria->tipo;

        $this->modoEdicion = true;
    }

    public function actualizar()
    {
        $this->validate();

        $categoria = Categoria::findOrFail($this->categoria_id);

        $categoria->update([
            'nombre' => $this->nombre,
            'color' => $this->color,
            'icono' => $this->icono,
            'tipo' => $this->tipo,
        ]);

        $this->resetFormulario();
    }

    public function resetFormulario()
    {
        $this->reset(['nombre', 'color', 'icono', 'tipo', 'categoria_id']);
        $this->modoEdicion = false;
    }
}
