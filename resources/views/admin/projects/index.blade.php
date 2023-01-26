@extends('layouts.admin')
@section('content')
    <h1 class="text-center my-4 text-uppercase">Lista dei progetti</h1>
    <div class="container position-relative py-4">
        <a class="btn btn-success btn-sm mb-5 position-absolute top-0 end-0"
            href="{{ route('admin.projects.create') }}">Inserisci un
            nuovo
            progetto</a>
    </div>
    <div class="container mt-5">

        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
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
                            <a class="btn btn-warning" href="{{ route('admin.projects.show', $project->id) }}">Dettagli</a>
                            <a class="btn btn-dark" href="{{ route('admin.projects.edit', $project->id) }}">Modifica</a>

                            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">
                                    Cancella
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
