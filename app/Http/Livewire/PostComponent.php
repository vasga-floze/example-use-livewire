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

    /*se habilita el tema de bootstrap para la paginacion, ya que por default
     toma los estilos de paginacion de Tailwind */ 
    protected $paginationTheme = 'bootstrap';
    
    public function render()
    {
        
        return view('livewire.post-component',[
            'posts' => Post::orderBy('id', 'desc')->paginate(8)

        ]);
    }

    public function destroy($id){

        Post::destroy($id);
    }
}
