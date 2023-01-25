@extends('layouts.admin')
@section('content')
    <h2 class="text-center">Crea un nuovo progetto</h2>
    <div class="container">
        <form action="{{ route('admin.projects.store') }}" method="post">
            @csrf

        </form>
    </div>
@endsection
