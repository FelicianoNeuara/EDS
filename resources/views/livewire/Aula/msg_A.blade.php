@include('livewire.header');
<div class="content-body">
    <div class="container-fluid"> 
        <div class="card">
            <div class="card-header bg-success text-white">Atualização completa</div>
            <div class="card-body">
                <b> Dados atualizados com sucesso!</b></br></br>
                <a href="{{Route('aula.index')}}" class="btn btn-sm btn-primary">Visualizar</a>
            </div>
        </div>
    </div>
</div>

@include('livewire.footer');