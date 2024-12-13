@include('livewire.header1')  
<div class="content-body">
    <div class="container-fluid">
        <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Informações dos Cursos</h4>
                    
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb" style="float:right">
                
                    <li class="breadcrumb-item active" ><a href="{{Route('curso.enviar')}}">Adicionar</a></li>
                    <li class="breadcrumb-item active" ><a href="{{Route('gerar.relatorio')}}">Relatorio</a></li>
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
                                    <th scope="col">Professor</th>
                                    <th scope="col">Departamento</th>
                                    <th scope="col">Preço</th>
                                    <th scope="col">Duração</th>
                                    <th scope="col">Início</th>
                                    <th scope="col">N estudante</th>
                                    <th scope="col">Nível</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($curso1 as $curso)
                                    <tr>
                                        {{--CourseCategory-> name --}}

                                        <th>{{$curso-> id}}</th>
                                        <th>{{$curso-> category_id}}</th>
                                        <th>{{$curso-> professor_id}}</th>
                                        <th>{{$curso-> department_id}}</th>
                                        <th>{{$curso-> price}}</th>
                                        <th>{{$curso-> duration}}</th>
                                        <th>{{$curso-> date_start}}</th>
                                        <th>{{$curso-> max_student}}</th>
                                        <th>{{$curso-> level}}</th>
                                        <th>{{$curso->photo }}</th>
                                        <td> <a class="btn btn-sm btn-info" href="{{Route('curso.detalhe', $curso -> id)}}">Detalhe</a>-
                                             <a class="btn btn-sm btn-info"href="{{Route('curso.editar', $curso -> id)}}">Editar</a>
                                             <a class="btn btn-sm btn-danger" href="{{Route('curso.delete', $curso -> id)}}">Apagar</a>
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



        
