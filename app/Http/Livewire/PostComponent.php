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
    public $post_id, $title, $body;

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

        //al ingresar un nuevo post, los input se limpian
        $this->reset(['title', 'body']);

    }

    //Método editar (pasar al formulario los datos)
    public function edit($id){

       $post = Post::find($id);

       $this->post_id = $post->id;
       $this->title = $post->title;
       $this->body = $post->body;

       //cambiar en la propiedad, la vista que se va a mostrar 
       $this->view = 'edit';
    }

    //Método actualizar
    public function update(){

        //validar que title y body tengan contenido
        $this->validate(['title'=> 'required', 'body' => 'required']);

        //cobtiene el id y lo almacena en la variable
        $post = Post::find($this->post_id);

        $post->update([
            'title' => $this->title,
            'body'  => $this->body
        ]);

        //una vez actualizado el formulario vuelve a la normalidad, con el metodo creado como default
        $this->default();
    }

    //Método eliminar
    public function destroy($id){

        Post::destroy($id);
    }

    //Método que va a mostrar el estado inicial de la vista y va a limpiar los campos
    public function default(){
        $this->title = '';
        $this->body = '';

        $this->view = 'create';
    }
}
