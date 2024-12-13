
@include('livewire.header1')
@if($errors->all())
        @foreach($errors-> all() as $erros)
            {{$erros}}
        @endforeach
    @endif
<div class="content-body">
    <div class="container-fluid">

        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4> Registro de Inscrições</h4>
                    
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{Route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{Route('matricula.index')}}">Inscrições</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{Route('matricula.update', $resultado->id)}}" method="post" id="step-form-horizontal" class="step-form-horizontal">
                            @csrf()
                            @method('PUT')
                            <div>  
                                    <div class="row">
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="2"class="text-label">Estudante</label>
                                                <select name="student_id" id="2" class="form-control">
                                                    <option selected>{{$resultado->Student_id}}</option>
                                                    @foreach($estudante as $estudante)
                                                      <option value="{{$estudante->id}}">{{$estudante->name}}</option>
                                                    @endforeach
                            
                                                  </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="1" class="text-labe">Curso</label>
                                                <select name="course_id" id="1" class="form-control">
                                                    <option selected>{{$resultado->course_id}}</option>
                                                    @foreach($curso as $curso)
                                                      <option value="{{$curso->id}}">{{$curso->category}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Tipo de Pagamento</label>
                                                <select name="payment_type" id="1" class="form-control">
                                                    <option selected>{{$resultado->payment_type}}</option>
                                                    <option value="Conta Bancária">Conta Bancária</option>
                                                    <option value="M-pesa">M-pesa</option>
                                                    <option value="E-mola">E-mola</option>
                                                    <option value="IZI">IZI</option> 
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Estado</label>
                                                <select name="status" id="1" class="form-control">
                                                    <option selected>{{$resultado->status}}</option>
                                                    <option value="Pendente">Pendente</option>
                                                    <option value="Concluído">Concluído</option>
                                                    <option value="Cancelado">Cancelado</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                    </div>
                              
                            </div>
                            <button class="btn btn-md btn-primary" type="submit">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('livewire.footer')