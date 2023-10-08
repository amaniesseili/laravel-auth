@extends('layouts.app')

@section("content")

<h1>Lista dei Projetti</h1>
{{-- pulssante per la creaazione del nuovo projetto --}}
<div class="bg-light">
  <a href="{{ route('admin.posts.create')}}" class="btnbtn-link ">nouvo projetto</a>
</div>

<table>
  <thead>
    <tr>
      <td>image</td>
      <td>title</td>
      <td>description</td>
      {{-- aggiungo x ogni elemente della tabella una colonna con un pulzante chi modifica la visualizzazione --}}
      <dt></dt>
    </tr>
  </thead>
  <tbody>
    @foreach ($projects as $project)
    <tr>
      <td>{{$project->image}}</td>
      <td>{{$project->title}}</td>
      <td>{{$project->description}}</td>
      {{-- aggiungo x ogni elemente della tabella una colonna con un pulzante chi modifica la visualizzazione --}}
      <dt><a href="{{ route('admin.posts.show',$project->id)}}" class="btnbtn-link ">dettagli</a></dt>

    </tr>
      
    @endforeach

  </tbody>
  

</table>


@endsection