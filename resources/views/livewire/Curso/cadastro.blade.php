
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
                    <h4> Cadastro de Cursos</h4>
                    
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{Route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{Route('curso.index')}}">Cursos</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{Route('curso.cadastro')}}" method="post" id="step-form-horizontal" class="step-form-horizontal" enctype="multipart/form-data">
                            @csrf()
                            <div>  
                                    <div class="row">
                                        <div class="col-lg-12 mb-4">
                                            <div class="form-group">
                                                <label for="2"class="text-label">Professor</label>
                                                <select name="professor_id" id="2" class="form-control">
                                                    <option selected></option>
                                                    @foreach($prof as $prof)
                                                      <option value="{{$prof->id}}">{{$prof->name}}</option>
                                                    @endforeach
                            
                                                  </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="2"class="text-label">Departamento</label>
                                                <select name="department_id" id="2" class="form-control">
                                                    <option selected></option>
                                                    @foreach($dep as $dep)
                                                      <option value="{{$dep->id}}">{{$dep->name}}</option>
                                                    @endforeach
                            
                                                  </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="1" class="text-labe">Curso</label>
                                                <select name="category_id" id="1" class="form-control">
                                                    <option selected></option>
                                                    @foreach($curso as $curso)
                                                      <option value="{{$curso->id}}">{{$curso->category}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="name"class="text-label">Preço</label>
                                                <input type="text" name="price" id= "name" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="name1"class="text-label">Duração</label>
                                                <input type="text" name="duration" id= "name1" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="name2"class="text-label">Data de inicio</label>
                                                <input type="date" name="date_start" id= "name2" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="name4"class="text-label">Total de estudante</label>
                                                <input type="text" name="max_student" id= "name4" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="namer"class="text-label">Foto</label>
                                                <input type="file" name="photo" id= "namer" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="nam"class="text-label">Nivel de dificuldade</label>
                                                <input type="text" name="level" id= "nam" class="form-control" required>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12 mb-4">
                                            <div class="form-floating mb-3">
                                                <label for="floatingTextarea">Descrição</label>
                                                <textarea name="description" class="form-control" placeholder="" id="floatingTextarea" style="height: 150px;"></textarea>
                                            </div>
                                           
                                        </div>
                                          
                                    </div>
                              
                            </div>
                            <button class="btn btn-md btn-primary" type="submit">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('livewire.footer')