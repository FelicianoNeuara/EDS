@include('livewire.header')  
<div class="content-body">
    <div class="container-fluid">
        <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Informações dos Departamentos</h4>
                    
                </div>
            </div>
            <div class="col-sm-12 ">
              
                
                <a class="btn btn-sm mg-4 btn-info" href="{{Route('dep.enviar')}}">Adicionar</a></li>
             <br>
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
                                    <th scope="col">Departamento</th>
                                    <th scope="col">Diretor</th>
                                    <th scope="col">Data Inicio</th>
                                    <th scope="col">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dep1 as $dep)
                                    <tr>

                                        <th>{{$dep-> id}}</th>
                                        <th>{{$dep-> name}}</th>
                                        <th>{{$dep-> head_dept}}</th>
                                        <th>{{$dep-> starting_date}}</th>
                                        <td> 
                                             <a class="btn btn-sm btn-info"href="{{Route('dep.editar', $dep -> id)}}">Editar</a>
                                             <a class="btn btn-sm btn-danger" href="{{Route('dep.delete', $dep -> id)}}">Apagar</a>
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

       
@include('livewire.footer')



        
