<?php

namespace App\Http\Livewire;

use Livewire\Component;
//invocar la clase de paginación
use Livewire\WithPagination;

//Importar el modelo
use App\Models\Post;

class PostComponent extends Component
{
    //usar la clase de paginación
    use WithPagination;

    public function render()
    {
        
        return view('livewire.post-component',[
            'posts' => Post::orderBy('id', 'desc')->paginate(8)

        ]);
    }
}
