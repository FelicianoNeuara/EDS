@include('livewire.header');
<div class="content-body">
    <div class="container-fluid"> 
        <div class="card">
            <div class="card-header bg-success text-white">Casdastro completo</div>
            <div class="card-body">
                <b> Departamento cadastrado com sucesso!</b></br></br>
                <a href="{{Route('dep.index')}}" class="btn btn-sm btn-primary">Visualizar</a>
            </div>
        </div>
    </div>
</div>

@include('livewire.footer');