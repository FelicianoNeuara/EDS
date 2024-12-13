@include('livewire.header');

   
<div class="content-body">
    <div class="container-fluid">
        <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Informações dos professores</h4>
                    
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb" style="float:right">
                
                    <li class="breadcrumb-item active" ><a href="{{Route('professor.enviar')}}">Adicionar</a></li>
                </ol>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"></h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table primary-table-bordered">
                            <thead class="thead-primary">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contacto</th>
                                    <th scope="col">Cidade</th>
                                    <th scope="col">Pais</th>
                                    <th scope="col">Data de nasciemto</th>
                                    <th scope="col">Açao</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($professor1 as $professor)
                                    <tr>
                                        <th>{{$professor-> id}}</th>
                                        <th>{{$professor-> name}}</th>
                                        <th>{{$professor-> email}}</th>
                                        <th>{{$professor-> contact}}</th>
                                        <th>{{$professor-> city}}</th>
                                        <th>{{$professor-> country}}</th>
                                        <th>{{$professor-> date_birth}}</th>
                                        <td> 
                                             <a class="btn btn-sm btn-info"href="{{Route('professor.editar', $professor -> id)}}">Editar</a> -
                                             <a class="btn btn-sm btn-danger" href="{{Route('professor.delete', $professor -> id)}}">Apagar</a>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

       
@include('livewire.footer');



        
