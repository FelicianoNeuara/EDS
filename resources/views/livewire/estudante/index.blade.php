@include('livewire.header')

<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Informações dos estudantes</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ Route('estudante.enviar') }}">Adicionar</a></li>
                </ol>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <form method="GET" action="{{ route('estudante.index') }}">
                    <div class="input-group">
                        <select name="sort_column" class="form-select">
                            <option value="name" {{ request('sort_column') == 'name' ? 'selected' : '' }}>Nome</option>
                            <option value="city" {{ request('sort_column') == 'city' ? 'selected' : '' }}>Cidade</option>
                        </select>
                        <select name="sort_direction" class="form-select">
                            <option value="asc" {{ request('sort_direction') == 'asc' ? 'selected' : '' }}>Ascendente</option>
                            <option value="desc" {{ request('sort_direction') == 'desc' ? 'selected' : '' }}>Descendente</option>
                        </select>
                        <button type="submit" class="btn btn-primary">Ordenar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table primary-table-bordered">
                            <thead class="thead-primary">
                                <tr>
                                    {{-- <th scope="col">#</th> --}}
                                    <th scope="col">Nome</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contacto</th>
                                    <th scope="col">Cidade</th>
                                    <th scope="col">Pais</th>
                                    <th scope="col">Data de nascimento</th>
                                    <th scope="col">Data conta</th>
                                    <th scope="col">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($student1 as $student)
                                    <tr>
                                        {{-- <td>{{ $student->id }}</td> --}}
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->contact }}</td>
                                        <td>{{ $student->city }}</td>
                                        <td>{{ $student->country }}</td>
                                        <td>{{ $student->date_of_birth }}</td>
                                        <td>{{ $student->registration_date }}</td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="{{ route('estudante.detalhe', $student->id) }}">Detalhe</a>
                                            <a class="btn btn-sm btn-info" href="{{ route('estudante.editar', $student->id) }}">Editar</a>
                                            <a class="btn btn-sm btn-danger" href="{{ route('estudante.delete', $student->id) }}">Apagar</a>
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

@include('livewire.footer')
