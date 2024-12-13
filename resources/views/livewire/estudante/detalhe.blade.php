@include('livewire.header');
<div class="content-body">
    <div class="container-fluid">

        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4> View dos dados do estudante</h4>
                    
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{Route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{Route('estudante.index')}}">Estudantes</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-body">
                        <form action=""id="step-form-horizontal" class="step-form-horizontal">
                            @csrf()
                            <div>
                              
                                    <div class="row">
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="name"class="text-label">Nome</label>
                                                <input type="text" name="name" id= "name" class="form-control" value="{{$resultado -> name}}"required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label for="email"class="text-label">Email</label>
                                                <input type="email" name="email" class="form-control"value="{{$resultado -> email}}" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Senha</label>
                                                <div class="input-group">
                                                    <input type="password" name="password" class="form-control" placeholder="Restrito"  id="inputGroupPrepend2" aria-describedby="inputGroupPrepend2" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Contacto</label>
                                                <div class="input-group">
                                                    <input type="text" name="contact" class="form-control"  value="{{$resultado -> contact}}" required>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Cidade</label>
                                                <input type="text" name="city" class="form-control" value="{{$resultado -> city}}" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">pais</label>
                                                <input type="text" name="country" class="form-control" value="{{$resultado -> country}}"required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Data de nascimento</label>
                                                <input type="text" name="date_of_birth"  class="datepicker-default form-control" value="{{$resultado -> date_of_birth}}" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="form-group">
                                                <label class="text-label">Data de registro</label>
                                                <input type="text" name="registration_date" class="datepicker-default form-control" value="{{$resultado -> registration_date}}"required>
                                            </div>
                                        </div>
                                    </div>
                              
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>      

