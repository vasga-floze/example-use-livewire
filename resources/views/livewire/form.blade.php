<div class="form-group">
    <label for="">Título</label>
        <!--Para conectar el input con el componente, se debe agregar el atributo propio del componente: wire 
        y luego se indica: model porque este me permite conecctar a una propiedad de la clase(del componente)
        en este caso la propiedad se llama title-->
    <input type="text" class="form-control" wire:model="title">
    @error('title') <span> {{ $message }} </span>@enderror
</div>

<div class="form-group">
    <label>Contenido</label>
    <textarea class="form-control" wire:model="body"></textarea>
    @error('body') <span> {{ $message }} </span>@enderror
</div>