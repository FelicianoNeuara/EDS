@include('livewire.header1')  
<div class="content-body">
    <div class="container-fluid">
        <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Informações das Aulas</h4>
                    
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb" style="float:right">
                
                    <li class="breadcrumb-item active" ><a href="{{Route('aula.enviar')}}">Adicionar</a></li>
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
                                    <th scope="col">Curso</th>
                                    <th scope="col">Título</th>
                                    <th scope="col">Data início</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($aula1 as $aula)
                                    <tr>
                                        <th>{{$aula-> id}}</th>
                                        <th>{{$aula-> CourseCategory->category}}</th>
                                        <th>{{$aula-> title}}</th>
                                        <th>{{$aula-> date_start}}</th>
                                        <th>
                                            @if($aula->status == 'Em andamento')
                                                <span style="color: white; border: 2px solid blue; border-radius: 5px; padding: 5px;background: blue;">
                                                    {{$aula->status}}
                                                </span>
                                            @elseif($aula->status == 'Pendente')
                                                <span style="color: white; border: 2px solid orange; border-radius: 5px; padding: 5px;background: orange;">
                                                    {{$aula->status}}
                                                </span>
                                            @elseif($aula->status == 'Concluído')
                                                <span style="color: white; border: 2px solid green; border-radius: 5px; padding: 5px;background: green;">
                                                    {{$aula->status}}
                                                </span>
                                            @elseif($aula->status == 'Cancelado')
                                                <span style="color: white; border: 2px solid red; border-radius: 5px; padding: 5px;background: red;">
                                                    {{$aula->status}}
                                                </span>
                                            @else
                                                <span>{{$aula->status}}</span>
                                            @endif

                                        </th>
                                        <td> <a class="btn btn-sm btn-info" href="{{Route('aula.detalhe', $aula -> id)}}">Detalhe</a>-
                                             <a class="btn btn-sm btn-info"href="{{Route('aula.editar', $aula -> id)}}">Editar</a>
                                             <a class="btn btn-sm btn-danger" href="{{Route('aula.delete', $aula -> id)}}">Apagar</a>
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



        
