<?php

namespace App\Http\Livewire\Disciplinas;

use Illuminate\Http\Request;
use Livewire\Component;

class ResumoDisciplinasLivewire extends Component
{
    public $disciplinas;
    public $usuario;

    public function mount(Request $request)
    {
        $this->usuario = user();
    }

    public function render()
    {
        return view('livewire.disciplinas.resumo-disciplinas-livewire');
    }
}
