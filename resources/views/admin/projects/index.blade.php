@extends('layouts.admin')
@section('content')
    <h1 class="text-center my-4 text-uppercase">Lista dei progetti</h1>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Presentazione</th>
                    <th scope="col">Contenuto</th>
                    <th scope="col">Azioni</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->presentation }}</td>
                        <td>{{ $project->content }}</td>
                        <td>
                            <a class="btn btn-warning" href="">Dettagli</a>
                            <a class="btn btn-dark" href="">Modifica</a>
                            <a class="btn btn-danger" href="">Cancella</a>
                        </td>
                    </tr>
                @endforeach>
            </tbody>
        </table>
    </div>
@endsection
