<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;

class UsuariosTabla extends Component
{
    
    public function render()
    {
        
        return view('livewire.usuarios-tabla', [
            'users' => User::paginate()
            ]);
    }
}
