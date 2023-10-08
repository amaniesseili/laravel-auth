@extends('layouts.app')

@section('content')
    <h1>Nuovo Project</h1>

    <form action="{{'admin.projects.store'}}" method="POST">
      @csrf()

        <div class="mb-3">
            <label for="image" class="form-label">immagine</label>
            <input type="text" class="form-control" name="image" id="exampleFormControlInput1"
                placeholder="inserici il link">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">titolo</label>
            <input type="text" class="form-control" name="title" placeholder="inserici il titolo del progetto">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">descrizione</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

    </form>

    <button class="btn btn-primary">Crea</button>
@endsection
