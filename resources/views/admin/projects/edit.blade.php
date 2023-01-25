@extends('layouts.admin')
@section('content')
    <h2 class="text-center mt-4">Modifica il progetto</h2>
    <form class="container" action="{{ route('admin.projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="my-3 form-group">
            <label for="title" class="form-label">Titolo</label>
            <input type="title" class="form-control" id="title" value="{{ $project->title }}">
        </div>


        <div class="mb-3 form-group">
            <label for="presentation" class="form-label">Presentazione</label>
            <textarea type="presentation" class="form-control" id="presentation" value=">{{ $project->presentation }}"
                rows="5">{{ $project->presentation }}</textarea>
        </div>

        <div class="mb-3 form-group">
            <label for="content" class="form-label">Contenuto</label>
            <textarea row="" type="content" class="form-control" id="content" value="{{ $project->content }}"
                rows="10">{{ $project->content }}</textarea>
        </div>
        {{-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> --}}
        <button type="submit" class="btn btn-primary mt-3 mb-5">Conferma

        </button>
    </form>
@endsection
