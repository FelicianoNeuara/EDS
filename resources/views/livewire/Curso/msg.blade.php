@include('livewire.header1');
<div class="content-body">
    <div class="container-fluid"> 
        <div class="card">
            <div class="card-header bg-success text-white">Casdastro completo</div>
            <div class="card-body">
                <b> Professor cadastrado com sucesso!</b></br></br>
                <a href="{{Route('curso.index')}}" class="btn btn-sm btn-primary">Visualizar</a>
            </div>
        </div>
    </div>
</div>

@include('livewire.footer');