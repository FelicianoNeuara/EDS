
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
                    <h4> Atualização de Departamento</h4>
                    
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{Route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{Route('dep.index')}}">Departamentos</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{Route('dep.update', $resultado->id)}}" method="post" id="step-form-horizontal" class="step-form-horizontal">
                            @csrf()
                            @method('PUT')
                            <div>  
                                    <div class="row">
                                       
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="name"class="text-label">Nome</label>
                                                <input type="text" name="name" id= "name" class="form-control" value="{{$resultado->name}}" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="name1"class="text-label">Diretor</label>
                                                <input type="text" name="head_dept" id= "name1" class="form-control" value="{{$resultado->head_dept}}" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="name2"class="text-label">Data de inicio</label>
                                                <input type="date" name="starting_date" id= "name2" class="form-control" value="{{$resultado->starting_date}}" required>
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