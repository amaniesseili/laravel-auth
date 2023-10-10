@extends('layouts.app')

@section('content')
    <h1>Elenco dei Projetti</h1>
    <div class="row">
        @foreach ($projects as $project)
            <div class="col-md-2 me-5">
                <div class="project-card">
                    <div class="rounded-image mt-5">
                        <img src="{{ asset('img/section2-col-3-img6.jpg') }}" style="width: 400px" alt="">
                    </div>
                    <h3 class="mt-4">{{ $project->title }}</h3>
                    <div class="description-box mt-4">
                        <p class="p-3">{{ $project->description }}</p>
                    </div>
                </div>
            </div>

            <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-info">dettagli</i></a>
            <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-warning">modifica</a>

            {{-- fom per cancellare --}}
            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="d-inline-block">
                @csrf()
                @method('DELETE')

                <button class="btn btn-danger">delete</button>
            </form>
        @endforeach

        <a href="{{ route('admin.projects.create') }}">Aggiungi un Nuovo Progetto</a>

    </div>
@endsection
