@include('livewire.header1');
<div class="content-body">
    <div class="container-fluid"> 
        <div class="card">
            <div class="card-header bg-success text-white">Remoção completa</div>
            <div class="card-body">
                <b> Dados Eliminados com sucesso!</b></br></br>
                <a href="{{Route('curso.index_tipo')}}" class="btn btn-sm btn-primary">Visualizar</a>
            </div>
        </div>
    </div>
</div>

@include('livewire.footer');