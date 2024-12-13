
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
                    <h4> Cadastro de Categoria</h4>
                    
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{Route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{Route('curso.index_tipo')}}">Categorias</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{Route('curso.cadastro_tipo')}}" method="post" id="step-form-horizontal" class="step-form-horizontal">
                            @csrf()
                            <div>      
                                <div class="col-lg-12 mb-4">
                                    <div class="form-group">
                                        <label for="name"class="text-label">Nome</label>
                                        <input type="text" name="category" id= "name" class="form-control" required>
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