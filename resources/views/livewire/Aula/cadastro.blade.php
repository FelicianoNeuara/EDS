
@include('livewire.header')
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
                    <h4> Cadastro de Aulas</h4>
                    
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{Route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{Route('aula.index')}}">Aulas</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{Route('aula.cadastro')}}" method="post" id="step-form-horizontal" class="step-form-horizontal">
                            @csrf()
                            <div>  
                                    <div class="row">
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="2"class="text-label">Curso</label>
                                                <select name="course_id" id="2" class="form-control">
                                                    <option selected></option>
                                                    @foreach($aula as $aula)
                                                      <option value="{{$aula->id}}">{{$aula->category}}</option>
                                                    @endforeach
                            
                                                  </select>
                                            </div>
                                        </div>
                                       
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="name"class="text-label">Título</label>
                                                <input type="text" name="title" id= "name" class="form-control" required>
                                            </div>
                                        </div>
                                       
                                        <div class="col-lg-12 mb-4">
                                            <div class="form-group">
                                                <label for="name2"class="text-label">Data de inicio</label>
                                                <input type="date" name="date_start" id= "name2" class="form-control" required>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12 mb-4">
                                            <div class="form-floating mb-3">
                                                <label for="floatingTextarea">Descrição</label>
                                                <textarea name="description" class="form-control" placeholder="" id="floatingTextarea" style="height: 100px;"></textarea>
                                            </div>
                                        </div> 
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <label for="inputInicio">Estado</label>
                                                <select name="status" id="2" class="form-control">
                                                    <option selected></option>
                                                    <option value="Pendente"><span style="color: orange;">Pendente</span></option>
                                                    <option value="Em andamento"><span style="color: blue;">Em andamento</span></option>
                                                    <option value="Concluído"><span style="color: green;">Concluído</span></option>
                                                    <option value="Cancelado"><span style="color: red;">Cancelado</span></option>

                                                </select>
                                            </div>
                                        </div>  
                                    </div>
                              
                            </div>
                            <br>
                            <button class="btn btn-md btn-primary" type="submit">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('livewire.footer')