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

    //propiedades que serviran para conectar desde los wire
    public $title, $body;

    //variable que indica la vista que se va a pasar al componente 
    public $view = 'create';
    
    public function render()
    {
        
        return view('livewire.post-component',[
            'posts' => Post::orderBy('id', 'desc')->paginate(8)

        ]);
    }

    //metodo store accede a la DB
    public function store(){

        //validar que title y body tengan contenido
        $this->validate(['title'=> 'required', 'body' => 'required']);

        //si la validacion anterior es true, se ejecuta el método create
        Post::create([

            'title' => $this->title,
            'body' => $this->body
        ]);

        $this->reset(['title', 'body']);

    }

    public function destroy($id){

        Post::destroy($id);
    }
}
