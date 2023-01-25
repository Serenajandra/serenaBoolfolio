@extends('layouts.admin')
@section('content')
    <p class="text-center mt-5">Titolo</p>
    <h4 class="text-center mb-5 mt-0">{{ $project->title }}</h4>
    <h4>Presentazione</h4>
    <p class="mb-5">{{ $project->presentation }}</p>
    <h4>Contenuto</h4>
    <p>{{ $project->content }}</p>
@endsection
