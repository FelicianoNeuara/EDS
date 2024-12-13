@include('livewire.header1')
    @p<?php
        $id = 2000000000;
    ?>
<div class="content-body">
    <div class="container-fluid">
        <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Informações de Matriculas</h4>
                    
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb" style="float:right">
                
                    <li class="breadcrumb-item active" ><a href="{{Route('matricula.enviar',$id )}}">Adicionar</a></li>
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
                                    <th scope="col">Estudante</th>
                                    <th scope="col">Curso</th>
                                    <th scope="col">Pagamento</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Açao</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($matricula1 as $matricula)
                                    <tr>
                                        <th>{{$matricula-> id}}</th>
                                        <th>{{$matricula-> Student_id}}</th>
                                        <th>{{$matricula-> course_id}}</th>
                                        <th>{{$matricula-> payment_type}}</th>
                                        <th>{{$matricula-> status}}</th>
                                        <td>
                                             <a class="btn btn-sm btn-info"href="{{Route('matricula.editar', $matricula -> id)}}">Editar</a>-
                                             <a class="btn btn-sm btn-danger" href="{{Route('matricula.delete', $matricula -> id)}}">Apagar</a>
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



        
