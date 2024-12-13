@include('livewire.header1')
<div class="content-body">
    <div class="container-fluid">
        <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Informações de Matriculas</h4>
                    
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb" style="float:right">
                
                    <li class="breadcrumb-item active" ><a href="#">Adicionar</a></li>
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
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($matricula1 as $matricula)
                                    <tr>
                                        <th>{{$matricula-> id}}</th>
                                        <th>{{$matricula-> Student->name}}</th>
                                        <th>{{$matricula-> CourseCategory->category}}</th>
                                        <th>{{$matricula-> payment_type}}</th>
                                        <th>{{$matricula-> status}}</th>
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



        
