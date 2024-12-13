
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>BSS-Cursos online </title>
        <!-- Favicon icon -->
        <link rel="stylesheet" href="{{ public_path('assets/vendor/jqvmap/css/jqvmap.min.css') }}">
        <link rel="stylesheet" href="{{ public_path('assets/vendor/chartist/css/chartist.min.css') }}">
        <link rel="stylesheet" href="{{ public_path('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
        <link rel="stylesheet" href="{{ public_path('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ public_path('assets/css/skin-2.css') }}">
        <link rel="stylesheet" href="{{ public_path('bootstrap.min.css') }}">


    </head>
    <body>
        <h1>{{ $data['title'] }}</h1>
            <p>Data: {{ $data['date'] }}</p>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table primary-table-bordered">
                    <thead class="thead-primary">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Curso</th>
                            <th scope="col">Professor</th>
                            <th scope="col">Departamento</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Duração</th>
                            <th scope="col">Início</th>
                            <th scope="col">N estudante</th>
                            <th scope="col">Nível</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($curso1 as $curso)
                            <tr>
                                <th>{{$curso-> id}}</th>
                                <th>{{$curso-> category_id}}</th>
                                <th>{{$curso-> professor_id}}</th>
                                <th>{{$curso-> department_id}}</th>
                                <th>{{$curso-> price}}</th>
                                <th>{{$curso-> duration}}</th>
                                <th>{{$curso-> date_start}}</th>
                                <th>{{$curso-> max_student}}</th>
                                <th>{{$curso-> level}}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
    </body>
</html>