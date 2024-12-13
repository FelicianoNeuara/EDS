@include('livewire.header1')
<div class="content-body">
    <div class="container-fluid"> 
        <div class="card">
            <div class="card-header bg-success text-white">Cadastro completo</div>
            <div class="card-body">
                <b> Inscrição cadastrado com sucesso!</b></br></br>
                <a href="{{Route('matricula.index1')}}" class="btn btn-sm btn-primary">Visualizar</a>
            </div>
        </div>
    </div>
</div>

@include('livewire.footer')