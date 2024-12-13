
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
                    <h4> Visualização da Aula</h4>
                    
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
                        <form action="" method="" id="step-form-horizontal" class="step-form-horizontal">
                           
                            <div>  
                                    <div class="row">
                                       
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="1" class="text-labe">Curso</label>
                                                <select name="course_id" id="1" class="form-control">
                                                    <option selected>{{$resultado->CourseCategory->category}}</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="name"class="text-label">Título</label>
                                                <input type="text" name="title" id= "name" class="form-control" value="{{$resultado->title}}" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-4">
                                            <div class="form-group">
                                                <label for="name2"class="text-label">Data de início</label>
                                                <input type="date" name="date_start" id= "name2" class="form-control" value="{{$resultado->date_start}}" required>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12 mb-4">
                                            <div class="form-floating mb-3">
                                                <label for="floatingTextarea">Descrição</label>
                                                <textarea name="description" class="form-control" placeholder="" id="floatingTextarea" style="height: 100px;">{{$resultado->description}}</textarea>
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <div class="form-group">
                                                <label for="name2"class="text-label">Estado</label>
                                                <input type="text" name="status" id= "name2" class="form-control" value="{{$resultado->status}}" required>
                                            </div>
                                        </div>
                                          
                                    </div>
                              
                            </div>
                            <a href="{{Route('aula.index')}}" class="btn btn-md btn-primary" >Fechar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('livewire.footer')