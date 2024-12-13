@include('livewire.header1')
         
    
    	<div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Cursos Disponíveis</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                         <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="{{route('home1')}}">Home</a></li>
                              <li class="breadcrumb-item active"><a href="{{route('curso.index')}}">Todos os cursos</a></li>
                         </ol>
                    </div>
                </div>
				
				
				<div class="row">
					@foreach($curso as $curso)
						<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
							<div class="card">
								 <img  src="{{ asset('storage/img/curso/' . $curso->photo) }}" alt="Exemplo de imagem">
								
								<div class="card-body">
									<h4>{{ $curso->category_id }}</h4>
									
									<ul class="list-group mb-3 list-group-flush">
										<li class="list-group-item px-0 d-flex justify-content-between">
											<span class="mb-0">Data prevista:</span><strong>{{ $curso->date_start }}</strong>
										</li>
										<li class="list-group-item px-0 d-flex justify-content-between">
											<span class="mb-0">Duração:</span><strong>{{ $curso->duration }}</strong>
										</li>
										<li class="list-group-item px-0 d-flex justify-content-between">
											<span class="mb-0">Professor:</span><strong>{{ $curso->professor_id }}</strong>
										</li>
										<li class="list-group-item px-0 d-flex justify-content-between">
											<span><i class="fa fa-graduation-cap text-primary mr-2"></i>Vagas disponíveis</span><strong>+{{ $curso->max_student }}</strong>
										</li>
									</ul>
									<a href="{{ route('detalhe.curso', $curso->id) }}" class="btn btn-primary">Saiba mais</a>
								</div>
							</div>
						</div>
					@endforeach
				</div>
				
			
            </div>       
    	</div> 
@include('livewire.footer')



     
