@extends('layouts.admin')
@section('content')
    <h4>sono la pagina index</h4>
    <div class="container">
        <ul>

            @foreach ($projects as $project)
                <li> {{ $project->title }} </li>
            @endforeach>

        </ul>
    </div>
@endsection
