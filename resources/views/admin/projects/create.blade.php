@extends('layouts.admin')
@section('content')
    <h2 class="text-center">Crea un nuovo progetto</h2>
    <div class="container">
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="my-3 form-group">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" name="title" class="form-control" id="title" value="">
            </div>


            <div class="mb-3 form-group">
                <label for="presentation" class="form-label">Presentazione</label>
                <textarea type="text" name="presentation" class="form-control" id="presentation" value="" rows="5"></textarea>
            </div>

            <div class="mb-3 form-group">
                <label for="content" class="form-label">Contenuto</label>
                <textarea row="" type="text" name="content" class="form-control" id="content" value=""
                    rows="10"></textarea>
            </div>
            {{-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> --}}
            <button type="submit" value="invia" class="btn btn-primary mt-3 mb-5">Conferma

            </button>
        </form>
    </div>
@endsection
