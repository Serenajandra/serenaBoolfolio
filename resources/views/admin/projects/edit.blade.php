@extends('layouts.admin')
@section('content')
    <h2 class="text-center mt-4">Modifica il progetto</h2>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>


    <form class="container" action="{{ route('admin.projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="my-3 form-group">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title"
                value="{{ old('title', $project->title) }}">
        </div>


        <div class="mb-3 form-group">
            <label for="presentation" class="form-label">Presentazione</label>
            <textarea class="form-control" id="presentation" name="presentation" rows="5">{{ old('presentation', $project->presentation) }}</textarea>
        </div>

        <div class="mb-3 form-group">
            <label for="content" class="form-label">Contenuto</label>
            <textarea class="form-control" id="content" rows="10" name="content">{{ old('content', $project->content) }}</textarea>
        </div>
        {{-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> --}}
        <button type="submit" value="invia" class="btn btn-primary mt-3 mb-5">Conferma

        </button>
    </form>
@endsection
