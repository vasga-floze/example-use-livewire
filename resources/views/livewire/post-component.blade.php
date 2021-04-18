<div class="row">
    <div class="col-sm-3">
        <!--Se pasará una variable para indicar con que vista se va a trabajar
            esta variable se va a registrar en el componente-->
        @include("livewire.$view")
    </div>

    <div class="col-sm-9">
        @include('livewire.table')
    </div>
</div>
